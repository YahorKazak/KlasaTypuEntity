<?php

namespace App\Repository;

use App\Entity\Sklep;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Sklep|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sklep|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sklep[]    findAll()
 * @method Sklep[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SklepRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sklep::class);
    }

    // /**
    //  * @return Sklep[] Returns an array of Sklep objects
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
    public function findOneBySomeField($value): ?Sklep
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
