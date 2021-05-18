<?php

namespace App\Repository;

use App\Entity\Lengths;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Lengths|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lengths|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lengths[]    findAll()
 * @method Lengths[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LengthsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lengths::class);
    }
}
