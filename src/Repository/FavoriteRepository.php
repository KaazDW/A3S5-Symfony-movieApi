<?php

namespace App\Repository;

use App\Entity\Favorite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Favorite>
 *
 * @method Favorite|null find($id, $lockMode = null, $lockVersion = null)
 * @method Favorite|null findOneBy(array $criteria, array $orderBy = null)
 * @method Favorite[]    findAll()
 * @method Favorite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FavoriteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Favorite::class);
    }

   /**
    * @return Favorite[] Returns an array of Favorite objects
    */
   public function findByExampleField($value): array
   {
       return $this->createQueryBuilder('f')
           ->andWhere('f.exampleField = :val')
           ->setParameter('val', $value)
           ->orderBy('f.id', 'ASC')
           ->getQuery()
           ->getResult()
       ;
   }

   public function findOneBySomeField($value): ?Favorite
   {
       return $this->createQueryBuilder('f')
           ->andWhere('f.exampleField = :val')
           ->setParameter('val', $value)
           ->getQuery()
           ->getOneOrNullResult()
       ;
   }
}
