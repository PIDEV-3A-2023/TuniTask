<?php

namespace App\Repository;

use App\Entity\Role;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
<<<<<<< HEAD
 * @extends ServiceEntityRepository<Club>
=======
 * @extends ServiceEntityRepository<Role>
>>>>>>> offre
 *
 * @method Role|null find($id, $lockMode = null, $lockVersion = null)
 * @method Role|null findOneBy(array $criteria, array $orderBy = null)
 * @method Role[]    findAll()
 * @method Role[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RoleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Role::class);
    }

    public function save(Role $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Role $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

<<<<<<< HEAD
    
   /*  public function SelectById($value): String
    {
         $qb = $this->createQueryBuilder('u');
        $qb->select('r.role_name')
            ->leftJoin('u.roles', 'r')
            ->where('u.id = :userId')
            ->setParameter('userId', $value);

        return $qb->getQuery()->getSingleScalarResult();
       ;
    }*/

//    public function findOneBySomeField($value): ?Club
=======
#//    /**
//     * @return Role[] Returns an array of Role objects
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

#//    public function findOneBySomeField($value): ?Role
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
