<?php

namespace App\Entity;

use App\Repository\GamesRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GamesRepository::class)
 */
class Games
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
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $title;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $originalTitle;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Lengths", inversedBy="games")
     *
     * @var Lengths
     */
    private $length;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\GamesTags", mappedBy="game")
     *
     * @var Collection|GamesTags[]
     */
    private $gamesTags;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\GamesDevelopers", mappedBy="game")
     *
     * @var Collection|GamesDevelopers[]
     */
    private $gamesDevelopers;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\GamesPublishers", mappedBy="game")
     *
     * @var Collection|GamesPublishers[]
     */
    private $gamesPublishers;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\GamesReleases", mappedBy="game")
     *
     * @var Collection|GamesReleases[]
     */
    private $releases;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\GamesPictures", mappedBy="game")
     *
     * @var Collection|GamesPictures[]
     */
    private $pictures;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getOriginalTitle()
    {
        return $this->originalTitle;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return Lengths
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @return GamesTags[]|Collection
     */
    public function getGamesTags()
    {
        return $this->gamesTags;
    }

    /**
     * @return GamesDevelopers[]|Collection
     */
    public function getGamesDevelopers()
    {
        return $this->gamesDevelopers;
    }

    /**
     * @return GamesPublishers[]|Collection
     */
    public function getGamesPublishers()
    {
        return $this->gamesPublishers;
    }

    /**
     * @return GamesReleases[]|Collection
     */
    public function getReleases()
    {
        return $this->releases;
    }

    /**
     * @return GamesPictures[]|Collection
     */
    public function getPictures()
    {
        return $this->pictures;
    }
}
