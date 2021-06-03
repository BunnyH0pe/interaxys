<?php

namespace App\Repository;

use App\Entity\NotreVision;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NotreVision|null find($id, $lockMode = null, $lockVersion = null)
 * @method NotreVision|null findOneBy(array $criteria, array $orderBy = null)
 * @method NotreVision[]    findAll()
 * @method NotreVision[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NotreVisionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NotreVision::class);
    }

    // /**
    //  * @return NotreVision[] Returns an array of NotreVision objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NotreVision
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
