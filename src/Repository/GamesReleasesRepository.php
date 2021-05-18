<?php

namespace App\Repository;

use App\Entity\GamesReleases;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GamesReleases|null find($id, $lockMode = null, $lockVersion = null)
 * @method GamesReleases|null findOneBy(array $criteria, array $orderBy = null)
 * @method GamesReleases[]    findAll()
 * @method GamesReleases[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GamesReleasesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GamesReleases::class);
    }
}
