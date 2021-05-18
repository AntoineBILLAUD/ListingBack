<?php

namespace App\Entity;

use App\Repository\GamesDevelopersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GamesDevelopersRepository::class)
 */
class GamesDevelopers
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Games", inversedBy="gamesDevelopers")
     *
     * @var Games
     */
    private $game;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Developers", inversedBy="gamesDevelopers")
     *
     * @var Developers
     */
    private $developer;

    public function getId()
    {
        return $this->id;
    }
}
