<?php

namespace App\Repository;

use App\Entity\Sitesdistants;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Sitesdistants|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sitesdistants|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sitesdistants[]    findAll()
 * @method Sitesdistants[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SitesdistantsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sitesdistants::class);
    }

    // /**
    //  * @return Sitesdistants[] Returns an array of Sitesdistants objects
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
    public function findOneBySomeField($value): ?Sitesdistants
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
