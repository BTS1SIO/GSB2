<?php

namespace App\Repository;

use App\Entity\Gsb;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Gsb|null find($id, $lockMode = null, $lockVersion = null)
 * @method Gsb|null findOneBy(array $criteria, array $orderBy = null)
 * @method Gsb[]    findAll()
 * @method Gsb[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GsbRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Gsb::class);
    }

    // /**
    //  * @return Gsb[] Returns an array of Gsb objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Gsb
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
