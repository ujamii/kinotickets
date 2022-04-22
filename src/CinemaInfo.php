<?php

namespace Ujamii\Kinotickets;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("kinoprogramm")
 */
class CinemaInfo
{
    /**
     * @var array<Movie>
     * @Serializer\XmlList(inline=false, entry="film")
     * @Serializer\SerializedName("filmliste")
     * @Serializer\Type("array<Ujamii\Kinotickets\Movie>")
     */
    protected array $movies;

    /**
     * @var array<Screening>
     * @Serializer\XmlList(inline=false, entry="vorstellung")
     * @Serializer\SerializedName("spielzeiten")
     * @Serializer\Type("array<Ujamii\Kinotickets\Screening>")
     */
    protected array $screenings;

    /**
     * @return Movie[]
     */
    public function getMovies(): array
    {
        return $this->movies;
    }

    /**
     * @return Screening[]
     */
    public function getScreenings(): array
    {
        return $this->screenings;
    }

}