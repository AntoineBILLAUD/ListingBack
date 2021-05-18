<?php

namespace App\Entity;

use App\Repository\GamesPublishersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GamesPublishersRepository::class)
 */
class GamesPublishers
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Games", inversedBy="gamesPublishers")
     *
     * @var Games
     */
    private $game;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Publishers", inversedBy="gamesPublishers")
     *
     * @var Publishers
     */
    private $publisher;

    public function getId()
    {
        return $this->id;
    }
}
