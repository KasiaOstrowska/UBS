<?php

namespace App\Repository;

use App\Entity\Vm;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Vm|null find($id, $lockMode = null, $lockVersion = null)
 * @method Vm|null findOneBy(array $criteria, array $orderBy = null)
 * @method Vm[]    findAll()
 * @method Vm[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VmRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Vm::class);
    }

    // /**
    //  * @return Vm[] Returns an array of Vm objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Vm
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
