<?php

namespace Ujamii\Kinotickets;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("film")
 */
class Movie
{
    /**
     * @Serializer\XmlElement
     * @Serializer\Type("string")
     * @Serializer\SerializedName("titel")
     */
    protected string $title = '';

    /**
     * @Serializer\XmlElement
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bild")
     */
    protected string $image = '';

    /**
     * @Serializer\XmlElement
     * @Serializer\Type("string")
     * @Serializer\SerializedName("www_link")
     */
    protected string $websiteUrl = '';

    /**
     * @Serializer\XmlElement
     * @Serializer\Type("string")
     * @Serializer\SerializedName("www_linktr")
     */
    protected string $trailerUrl = '';

    /**
     * @Serializer\XmlElement
     * @Serializer\Type("string")
     * @Serializer\SerializedName("inhalt")
     */
    protected string $description = '';

    /**
     * @Serializer\XmlElement
     * @Serializer\Type("string")
     * @Serializer\SerializedName("genre_fdb")
     */
    protected string $genreList = '';

    /**
     * @Serializer\XmlElement
     * @Serializer\Type("string")
     * @Serializer\SerializedName("produktion")
     */
    protected string $productionCountry = '';

    /**
     * @Serializer\XmlElement
     * @Serializer\Type("string")
     * @Serializer\SerializedName("darsteller")
     */
    protected string $actorsList = '';

    /**
     * @Serializer\XmlElement
     * @Serializer\Type("string")
     * @Serializer\SerializedName("reihe_nr")
     */
    protected string $internalCategoryId = '';

    /**
     * @Serializer\XmlElement
     * @Serializer\Type("string")
     * @Serializer\SerializedName("reihe_hint")
     */
    protected string $internalCategoryName = '';

    /**
     * @Serializer\XmlElement
     * @Serializer\Type("DateTime<'d.m.Y'>")
     * @Serializer\SerializedName("datumab")
     */
    protected ?\DateTime $startDate = null;

    /**
     * @Serializer\XmlElement
     * @Serializer\Type("DateTime<'d.m.Y H:i'>")
     * @Serializer\SerializedName("veroeffentlichen_ab")
     */
    protected ?\DateTime $publishDate = null;

    /**
     * @Serializer\XmlElement
     * @Serializer\Type("DateTime<'d.m.Y H:i'>")
     * @Serializer\SerializedName("verkaufsstart_ab")
     */
    protected ?\DateTime $sellingStartDate = null;

    /**
     * @Serializer\XmlElement
     * @Serializer\Type("int")
     * @Serializer\SerializedName("edinr")
     */
    protected int $ediNr = 0;

    /**
     * @Serializer\XmlElement
     * @Serializer\Type("int")
     * @Serializer\SerializedName("edifilmnr")
     */
    protected int $ediFilmNr = 0;

    /**
     * @Serializer\XmlElement
     * @Serializer\Type("int")
     * @Serializer\SerializedName("film_id")
     */
    protected int $movieId = 0;

    /**
     * @Serializer\XmlElement
     * @Serializer\Type("int")
     * @Serializer\SerializedName("dauer")
     */
    protected int $length = 0;

    /**
     * @Serializer\XmlElement
     * @Serializer\Type("int")
     * @Serializer\SerializedName("fsk")
     */
    protected int $fsk = 0;

    /**
     * @Serializer\XmlElement
     * @Serializer\Type("int")
     * @Serializer\SerializedName("prodjahr")
     */
    protected int $productionYear = 0;

    /**
     * @Serializer\XmlElement
     * @Serializer\SerializedName("ist3d")
     * @Serializer\Type("bool")
     */
    protected bool $is3D = false;

    /**
     * @Serializer\XmlElement
     * @Serializer\SerializedName("dbox")
     * @Serializer\Type("bool")
     */
    protected bool $dbox = false;

    /**
     * @Serializer\XmlElement
     * @Serializer\SerializedName("atmos")
     * @Serializer\Type("bool")
     */
    protected bool $atmos = false;

    /**
     * @Serializer\XmlElement
     * @Serializer\SerializedName("digital")
     * @Serializer\Type("bool")
     */
    protected bool $digital = false;

    /**
     * @Serializer\XmlElement
     * @Serializer\SerializedName("ueberlaenge")
     * @Serializer\Type("int")
     */
    protected int $overlength = 0;

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
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @return string
     */
    public function getWebsiteUrl(): string
    {
        return $this->websiteUrl;
    }

    /**
     * @return string
     */
    public function getTrailerUrl(): string
    {
        return $this->trailerUrl;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getGenreList(): string
    {
        return $this->genreList;
    }

    /**
     * @return \DateTime|null
     */
    public function getStartDate(): ?\DateTime
    {
        return $this->startDate;
    }

    /**
     * @return \DateTime|null
     */
    public function getPublishDate(): ?\DateTime
    {
        return $this->publishDate;
    }

    /**
     * @return \DateTime|null
     */
    public function getSellingStartDate(): ?\DateTime
    {
        return $this->sellingStartDate;
    }

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
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * @return int
     */
    public function getFsk(): int
    {
        return $this->fsk;
    }

    /**
     * @return bool
     */
    public function getIs3D(): bool
    {
        return $this->is3D;
    }

    /**
     * @return bool
     */
    public function getDbox(): bool
    {
        return $this->dbox;
    }

    /**
     * @return bool
     */
    public function getAtmos(): bool
    {
        return $this->atmos;
    }

    /**
     * @return bool
     */
    public function getDigital(): bool
    {
        return $this->digital;
    }

    /**
     * @return int
     */
    public function getOverlength(): int
    {
        return $this->overlength;
    }

    /**
     * @return string
     */
    public function getProductionCountry(): string
    {
        return $this->productionCountry;
    }

    /**
     * @return string
     */
    public function getActorsList(): string
    {
        return $this->actorsList;
    }

    /**
     * @return int
     */
    public function getProductionYear(): int
    {
        return $this->productionYear;
    }

    /**
     * @return int
     */
    public function getEdiFilmNr(): int
    {
        return $this->ediFilmNr;
    }

    /**
     * @return string
     */
    public function getInternalCategoryId(): string
    {
        return $this->internalCategoryId;
    }

    /**
     * @return string
     */
    public function getInternalCategoryName(): string
    {
        return $this->internalCategoryName;
    }

}