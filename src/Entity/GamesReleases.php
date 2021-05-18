<?php

namespace App\Entity;

use App\Repository\GamesReleasesRepository;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GamesReleasesRepository::class)
 */
class GamesReleases
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Games", inversedBy="releases")
     *
     * @var Games
     */
    private $game;

    /**
     * @ORM\Column(type="date")
     *
     * @var DateTimeInterface
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=3)
     *
     * @var string
     */
    private $language;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Games
     */
    public function getGame()
    {
        return $this->game;
    }

    /**
     * @param Games $game
     */
    public function setGame($game)
    {
        $this->game = $game;
    }

    /**
     * @return DateTimeInterface
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param DateTimeInterface $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }


}
