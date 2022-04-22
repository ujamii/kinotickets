<?php

require 'vendor/autoload.php';

$url = 'example.xml';
$xmlString = file_get_contents($url);

$builder = \JMS\Serializer\SerializerBuilder::create();
$builder
    ->configureHandlers(function(\JMS\Serializer\Handler\HandlerRegistryInterface $registry) {
        $registry->registerSubscribingHandler(new \Ujamii\Kinotickets\Handler\DateTimeHandler());
    })
;
$serializer = $builder->build();
/** @var \Ujamii\Kinotickets\CinemaInfo $info */
$info = $serializer->deserialize($xmlString, \Ujamii\Kinotickets\CinemaInfo::class, 'xml');

echo 'Found ' . count($info->getMovies()) . ' movies and ' . count($info->getScreenings()) . ' screenings.';

