<?php

namespace Ujamii\Kinotickets\Handler;

use JMS\Serializer\Context;
use JMS\Serializer\Exception\SkipHandlerException;
use JMS\Serializer\GraphNavigatorInterface;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\XmlDeserializationVisitor;

/**
 * A lot of code to just allow empty dates...
 * @see https://github.com/schmittjoh/serializer/blob/master/doc/handlers.rst
 */
class DateTimeHandler implements SubscribingHandlerInterface
{
    /**
     * @return array
     */
    public static function getSubscribingMethods(): array
    {
        return [
            [
                'direction' => GraphNavigatorInterface::DIRECTION_DESERIALIZATION,
                'format'    => 'xml',
                'type'      => 'DateTime',
                'method'    => 'deserializeDateTimeToXml',
            ],
        ];
    }

    /**
     * @throws \Exception
     */
    public function deserializeDateTimeToXml(XmlDeserializationVisitor $visitor, \SimpleXMLElement $dateAsXml, array $type, Context $context): ?\DateTime
    {
        $dateAsString = (string) $dateAsXml;

        if (empty(trim($dateAsString))) {
            return null;
        }

        try {
            $date = \DateTime::createFromFormat($type['params'][0], $dateAsString);
            if ($date) {
                return $date;
            }

            throw new \Exception("Date string {$dateAsString} could not be parsed into format {$type['params'][0]}");
        } catch (\Exception $e) {
            throw new SkipHandlerException();
        }
    }
}