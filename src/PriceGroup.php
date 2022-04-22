<?php

namespace Ujamii\Kinotickets;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("preisgruppe")
 */
class PriceGroup
{
    private const TRUE = 'YES';
    private const FALSE = 'NO';

    /**
     * @Serializer\XmlElement
     * @Serializer\Type("string")
     * @Serializer\SerializedName("artname")
     */
    protected string $title = '';

    /**
     * @Serializer\XmlElement
     * @Serializer\Type("string")
     * @Serializer\SerializedName("typname")
     */
    protected string $type = '';

    /**
     * @Serializer\XmlElement
     * @Serializer\Type("float")
     * @Serializer\SerializedName("preis")
     */
    protected float $price = 0.0;

    /**
     * @Serializer\XmlElement
     * @Serializer\SerializedName("onlinebuy")
     * @Serializer\Type("string")
     */
    protected string $onlinebuy = self::FALSE;

    /**
     * @Serializer\XmlElement
     * @Serializer\SerializedName("onlineres")
     * @Serializer\Type("string")
     */
    protected string $onlineres = self::FALSE;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return bool
     */
    public function getOnlineBookingPossible(): bool
    {
        return $this->onlinebuy === self::TRUE;
    }

    /**
     * @return bool
     */
    public function getOnlineReservationPossible(): bool
    {
        return $this->onlineres === self::TRUE;
    }
}