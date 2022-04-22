<?php

namespace Ujamii\Kinotickets;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("vorstellung")
 */
class Screening
{
    /**
     * @Serializer\XmlElement
     * @Serializer\Type("int")
     * @Serializer\SerializedName("edinr")
     */
    protected int $ediNr = 0;

    /**
     * @Serializer\XmlElement
     * @Serializer\Type("int")
     * @Serializer\SerializedName("film_id")
     */
    protected int $movieId = 0;

    /**
     * @Serializer\XmlElement
     * @Serializer\Type("DateTime<'ymdHi'>")
     * @Serializer\SerializedName("zeit")
     */
    protected ?\DateTime $time = null;

    /**
     * @Serializer\XmlElement
     * @Serializer\Type("int")
     * @Serializer\SerializedName("vorst_nr")
     */
    protected int $screeningNr = 0;

    /**
     * @Serializer\XmlElement
     * @Serializer\Type("int")
     * @Serializer\SerializedName("saal_nr")
     */
    protected int $hallNr = 0;

    /**
     * @Serializer\XmlElement
     * @Serializer\Type("string")
     * @Serializer\SerializedName("res_link")
     */
    protected string $bookingUrl = '';

    /**
     * @var array<PriceGroup>
     * @Serializer\XmlList(inline=false, entry="preisgruppe")
     * @Serializer\SerializedName("preisliste")
     * @Serializer\Type("array<Ujamii\Kinotickets\PriceGroup>")
     */
    protected array $prices;

    /**
     * @return int
     */
    public function getEdiNr(): int
    {
        return $this->ediNr;
    }

    /**
     * @return int
     */
    public function getMovieId(): int
    {
        return $this->movieId;
    }

    /**
     * @return ?\DateTime
     */
    public function getTime(): ?\DateTime
    {
        return $this->time;
    }

    /**
     * @return int
     */
    public function getScreeningNr(): int
    {
        return $this->screeningNr;
    }

    /**
     * @return int
     */
    public function getHallNr(): int
    {
        return $this->hallNr;
    }

    /**
     * @return string
     */
    public function getBookingUrl(): string
    {
        return $this->bookingUrl;
    }
    /**
     * @return PriceGroup[]
     */
    public function getPrices(): array
    {
        return $this->prices;
    }

}