<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;


class Movie
{
    private int $id;
    private string $title;
    private string $image;
    private string $video;
    private string $synopsis;
    private string $Language;
    private bool $isAdult;
    private \DateTime $date;
    private int $note;
    private string $director;
    private Collection $theme;

    public function __construct(int $id, string $title, string $image, string $video, string $synopsis, string $Language, bool $isAdult, \DateTime $date, int $note, string $director, \Doctrine\Common\Collections\Collection $theme)
    {
        $this->id = $id;
        $this->title = $title;
        $this->image = $image;
        $this->video = $video;
        $this->synopsis = $synopsis;
        $this->Language = $Language;
        $this->isAdult = $isAdult;
        $this->date = $date;
        $this->note = $note;
        $this->director = $director;
        $this->theme = $theme;
    }


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return String
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return String
     */
    public function getImage(): string
    {
        return $this->image;
    }


    /**
     * @return String
     */
    public function getVideo(): string
    {
        return $this->video;
    }


    /**
     * @return String
     */
    public function getSynopsis(): string
    {
        return $this->synopsis;
    }

    /**
     * @return String
     */
    public function getLanguage(): string
    {
        return $this->Language;
    }

    /**
     * @return bool
     */
    public function isAdult(): bool
    {
        return $this->isAdult;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @return int
     */
    public function getNote(): int
    {
        return $this->note;
    }

    /**
     * @return String
     */
    public function getDirector(): string
    {
        return $this->director;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param String $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @param String $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @param String $video
     */
    public function setVideo(string $video): void
    {
        $this->video = $video;
    }

    /**
     * @param String $synopsis
     */
    public function setSynopsis(string $synopsis): void
    {
        $this->synopsis = $synopsis;
    }

    /**
     * @param String $Language
     */
    public function setLanguage(string $Language): void
    {
        $this->Language = $Language;
    }

    /**
     * @param bool $isAdult
     */
    public function setIsAdult(bool $isAdult): void
    {
        $this->isAdult = $isAdult;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }

    /**
     * @param int $note
     */
    public function setNote(int $note): void
    {
        $this->note = $note;
    }

    /**
     * @param String $director
     */
    public function setDirector(string $director): void
    {
        $this->director = $director;
    }

}