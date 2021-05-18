<?php

namespace App\Entity;

use App\Repository\GamesPicturesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GamesPicturesRepository::class)
 */
class GamesPictures
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Games", inversedBy="pictures")
     *
     * @var Games
     */
    private $game;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $name;

    /**
     * @ORM\Column(type="boolean", options={"default" : 1})
     *
     * @var boolean
     */
    private $safe;

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
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return bool
     */
    public function isSafe()
    {
        return $this->safe;
    }

    /**
     * @param bool $safe
     */
    public function setSafe($safe)
    {
        $this->safe = $safe;
    }


}
