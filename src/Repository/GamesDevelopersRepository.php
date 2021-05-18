<?php

namespace App\Repository;

use App\Entity\GamesDevelopers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GamesDevelopers|null find($id, $lockMode = null, $lockVersion = null)
 * @method GamesDevelopers|null findOneBy(array $criteria, array $orderBy = null)
 * @method GamesDevelopers[]    findAll()
 * @method GamesDevelopers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GamesDevelopersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GamesDevelopers::class);
    }
}
