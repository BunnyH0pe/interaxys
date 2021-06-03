<?php

namespace App\Repository;

use App\Entity\NotreOffre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NotreOffre|null find($id, $lockMode = null, $lockVersion = null)
 * @method NotreOffre|null findOneBy(array $criteria, array $orderBy = null)
 * @method NotreOffre[]    findAll()
 * @method NotreOffre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NotreOffreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NotreOffre::class);
    }

    // /**
    //  * @return NotreOffre[] Returns an array of NotreOffre objects
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
    public function findOneBySomeField($value): ?NotreOffre
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
