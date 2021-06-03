<?php

namespace App\Repository;

use App\Entity\SliderBanniere;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SliderBanniere|null find($id, $lockMode = null, $lockVersion = null)
 * @method SliderBanniere|null findOneBy(array $criteria, array $orderBy = null)
 * @method SliderBanniere[]    findAll()
 * @method SliderBanniere[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SliderBanniereRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SliderBanniere::class);
    }

    // /**
    //  * @return SliderBanniere[] Returns an array of SliderBanniere objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SliderBanniere
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
