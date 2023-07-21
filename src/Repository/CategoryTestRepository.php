<?php

namespace App\Repository;

use App\Entity\CategoryTest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CategoryTest>
 *
 * @method CategoryTest|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategoryTest|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategoryTest[]    findAll()
 * @method CategoryTest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryTestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategoryTest::class);
    }

//    /**
//     * @return CategoryTest[] Returns an array of CategoryTest objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CategoryTest
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
