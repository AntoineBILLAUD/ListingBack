<?php

namespace App\Repository;

use App\Entity\Developers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Developers|null find($id, $lockMode = null, $lockVersion = null)
 * @method Developers|null findOneBy(array $criteria, array $orderBy = null)
 * @method Developers[]    findAll()
 * @method Developers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DevelopersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Developers::class);
    }
}
