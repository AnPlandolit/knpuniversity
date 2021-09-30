<?php

namespace App\Repository;

use App\Entity\Autopercibido;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Autopercibido|null find($id, $lockMode = null, $lockVersion = null)
 * @method Autopercibido|null findOneBy(array $criteria, array $orderBy = null)
 * @method Autopercibido[]    findAll()
 * @method Autopercibido[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AutopercibidoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Autopercibido::class);
    }

    // /**
    //  * @return Autopercibido[] Returns an array of Autopercibido objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Autopercibido
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
