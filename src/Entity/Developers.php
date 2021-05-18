<?php

namespace App\Entity;

use App\Repository\DevelopersRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DevelopersRepository::class)
 */
class Developers
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
    private $language;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $website;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\GamesDevelopers", mappedBy="developer")
     *
     * @var Collection|gamesDevelopers[]
     */
    private $gamesDevelopers;

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

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param string $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * @return Collection|GamesDevelopers[]
     */
    public function getGamesDevelopers()
    {
        return $this->gamesDevelopers;
    }
}
