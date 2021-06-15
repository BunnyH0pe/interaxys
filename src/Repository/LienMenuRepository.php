<?php

namespace App\Repository;

use App\Entity\LienMenu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LienMenu|null find($id, $lockMode = null, $lockVersion = null)
 * @method LienMenu|null findOneBy(array $criteria, array $orderBy = null)
 * @method LienMenu[]    findAll()
 * @method LienMenu[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LienMenuRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LienMenu::class);
    }

    // /**
    //  * @return LienMenu[] Returns an array of LienMenu objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LienMenu
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
