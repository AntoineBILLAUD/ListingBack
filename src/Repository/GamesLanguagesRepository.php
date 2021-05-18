<?php

namespace App\Repository;

use App\Entity\GamesLanguages;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GamesLanguages|null find($id, $lockMode = null, $lockVersion = null)
 * @method GamesLanguages|null findOneBy(array $criteria, array $orderBy = null)
 * @method GamesLanguages[]    findAll()
 * @method GamesLanguages[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GamesLanguagesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GamesLanguages::class);
    }
}
