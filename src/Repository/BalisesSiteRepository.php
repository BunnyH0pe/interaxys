<?php

namespace App\Repository;

use App\Entity\BalisesSite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BalisesSite|null find($id, $lockMode = null, $lockVersion = null)
 * @method BalisesSite|null findOneBy(array $criteria, array $orderBy = null)
 * @method BalisesSite[]    findAll()
 * @method BalisesSite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BalisesSiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BalisesSite::class);
    }

    // /**
    //  * @return BalisesSite[] Returns an array of BalisesSite objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BalisesSite
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
