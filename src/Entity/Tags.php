<?php

namespace App\Entity;

use App\Repository\TagsRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TagsRepository::class)
 */
class Tags
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
    private $description;

    /**
     * @ORM\Column(type="boolean", options={"default" : 0})
     *
     * @var boolean
     */
    private $sexualContent;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\GamesTags", mappedBy="tags")
     *
     * @var Collection|GamesTags[]
     */
    private $gamesTags;

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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return bool
     */
    public function isSexualContent()
    {
        return $this->sexualContent;
    }

    /**
     * @param bool $sexualContent
     */
    public function setSexualContent($sexualContent)
    {
        $this->sexualContent = $sexualContent;
    }

    /**
     * @return GamesTags[]|Collection
     */
    public function getGamesTags()
    {
        return $this->gamesTags;
    }
}
