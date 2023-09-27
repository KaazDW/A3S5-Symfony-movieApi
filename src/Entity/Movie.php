<?php
namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping\Entity;


class Movie {
    private ?int $id;
    private ?string $title;
    private ?string $image;
    private ?string $video;
    private ?string $overview;
    private ?string $language;
    private ?bool $isAdult;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return Movie
     */
    public function setId(?int $id): Movie
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     * @return Movie
     */
    public function setTitle(?string $title): Movie
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @param string|null $image
     * @return Movie
     */
    public function setImage(?string $image): Movie
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVideo(): ?string
    {
        return $this->video;
    }

    /**
     * @param string|null $video
     * @return Movie
     */
    public function setVideo(?string $video): Movie
    {
        $this->video = $video;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOverview(): ?string
    {
        return $this->overview;
    }

    /**
     * @param string|null $overview
     * @return Movie
     */
    public function setOverview(?string $overview): Movie
    {
        $this->overview = $overview;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * @param string|null $language
     * @return Movie
     */
    public function setLanguage(?string $language): Movie
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsAdult(): ?bool
    {
        return $this->isAdult;
    }

    /**
     * @param bool|null $isAdult
     * @return Movie
     */
    public function setIsAdult(?bool $isAdult): Movie
    {
        $this->isAdult = $isAdult;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getRealeaseDate(): ?DateTime
    {
        return $this->realeaseDate;
    }

    /**
     * @param DateTime|null $realeaseDate
     * @return Movie
     */
    public function setReleaseDate(?DateTime $realeaseDate): Movie
    {
        $this->realeaseDate = $realeaseDate;
        return $this;
    }
    private ?DateTime $realeaseDate;

    public function addActor(Actor $actor): static
    {
        if($this->actors->contains($actor)){
            $this->actors->add($actor);
            $actor->setSerie($this);
        }

        return $this;
    }

    public function removeActor(Actor $actor): static
    {
        if($this->actor->removeElement($actor)){
            if($actor->getSerie()===$this){
                $actor->setSerie(null);
            }

        }
        return $this;
    }


    /**
     * @param int|null $id
     * @param string|null $title
     * @param string|null $image
     * @param string|null $video
     * @param string|null $language
     * @param bool|null $isAdult
     * @param DateTime|null $releaseDate
     */
    public function __construct(){

    }



}
