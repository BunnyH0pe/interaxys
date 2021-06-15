<?php

namespace App\Repository;

use App\Entity\BanApproche;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BanApproche|null find($id, $lockMode = null, $lockVersion = null)
 * @method BanApproche|null findOneBy(array $criteria, array $orderBy = null)
 * @method BanApproche[]    findAll()
 * @method BanApproche[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BanApprocheRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BanApproche::class);
    }

    // /**
    //  * @return BanApproche[] Returns an array of BanApproche objects
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
    public function findOneBySomeField($value): ?BanApproche
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
