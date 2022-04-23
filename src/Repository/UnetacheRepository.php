<?php

namespace App\Repository;

use App\Entity\Unetache;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Unetache|null find($id, $lockMode = null, $lockVersion = null)
 * @method Unetache|null findOneBy(array $criteria, array $orderBy = null)
 * @method Unetache[]    findAll()
 * @method Unetache[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UnetacheRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Unetache::class);
    }

    // /**
    //  * @return Unetache[] Returns an array of Unetache objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Unetache
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
