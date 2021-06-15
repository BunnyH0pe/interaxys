<?php

namespace App\Repository;

use App\Entity\MotClefMenu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MotClefMenu|null find($id, $lockMode = null, $lockVersion = null)
 * @method MotClefMenu|null findOneBy(array $criteria, array $orderBy = null)
 * @method MotClefMenu[]    findAll()
 * @method MotClefMenu[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MotClefMenuRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MotClefMenu::class);
    }

    // /**
    //  * @return MotClefMenu[] Returns an array of MotClefMenu objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MotClefMenu
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
