<?php

namespace App\Repository;

use App\Entity\Users;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Users>
 *
 * @method Users|null find($id, $lockMode = null, $lockVersion = null)
 * @method Users|null findOneBy(array $criteria, array $orderBy = null)
 * @method Users[]    findAll()
 * @method Users[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Users::class);
    }

    public function save(Users $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Users $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

<<<<<<< HEAD
   
     public function statut($value): ?int
   {
       return $queryBuilder = $this->createQueryBuilder('t')
                         ->select('t.statut')
                         ->andWhere('t.id = :val')
                         ->setParameter('val', $value)
                         ->getQuery()
                         ->getSingleScalarResult();
        
    }


//    public function findOneBySomeField($value): ?Club
=======
#//    /**
//     * @return Users[] Returns an array of Users objects
//     */
//    public function findByExampleField($value): array
>>>>>>> offre
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
<<<<<<< HEAD
=======
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

#//    public function findOneBySomeField($value): ?Users
#//    {
#//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
>>>>>>> offre
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
<<<<<<< HEAD
}
=======
}
>>>>>>> offre
