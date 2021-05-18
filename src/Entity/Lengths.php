<?php

namespace App\Entity;

use App\Repository\LengthsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LengthsRepository::class)
 */
class Lengths
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
    private $name;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $length;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Games", mappedBy="length")
     *
     * @var Games
     */
    private $games;

    public function getId()
    {
        return $this->id;
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
     * @return string
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param string $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @return Games
     */
    public function getGames()
    {
        return $this->games;
    }

    /**
     * @param Games $games
     */
    public function setGames($games)
    {
        $this->games = $games;
    }
}
