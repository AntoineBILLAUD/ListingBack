<?php

namespace App\Entity;

use App\Repository\GamesTagsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GamesTagsRepository::class)
 */
class GamesTags
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Games", inversedBy="gamesTags")
     *
     * @var Games
     */
    private $game;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Tags", inversedBy="gamesTags")
     *
     * @var Tags
     */
    private $tag;

    public function getId()
    {
        return $this->id;
    }
}
