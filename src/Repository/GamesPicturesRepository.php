<?php

namespace App\Repository;

use App\Entity\GamesPictures;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GamesPictures|null find($id, $lockMode = null, $lockVersion = null)
 * @method GamesPictures|null findOneBy(array $criteria, array $orderBy = null)
 * @method GamesPictures[]    findAll()
 * @method GamesPictures[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GamesPicturesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GamesPictures::class);
    }
}
