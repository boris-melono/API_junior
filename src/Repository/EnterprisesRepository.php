<?php

namespace App\Repository;

use App\Entity\Enterprises;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Enterprises|null find($id, $lockMode = null, $lockVersion = null)
 * @method Enterprises|null findOneBy(array $criteria, array $orderBy = null)
 * @method Enterprises[]    findAll()
 * @method Enterprises[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnterprisesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Enterprises::class);
    }

    // /**
    //  * @return Enterprises[] Returns an array of Enterprises objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Enterprises
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
