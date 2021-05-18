<?php

namespace App\Repository;

use App\Entity\Publishers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Publishers|null find($id, $lockMode = null, $lockVersion = null)
 * @method Publishers|null findOneBy(array $criteria, array $orderBy = null)
 * @method Publishers[]    findAll()
 * @method Publishers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PublishersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Publishers::class);
    }
}
