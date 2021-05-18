<?php

namespace App\Repository;

use App\Entity\GamesPublishers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GamesPublishers|null find($id, $lockMode = null, $lockVersion = null)
 * @method GamesPublishers|null findOneBy(array $criteria, array $orderBy = null)
 * @method GamesPublishers[]    findAll()
 * @method GamesPublishers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GamesPublishersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GamesPublishers::class);
    }
}
