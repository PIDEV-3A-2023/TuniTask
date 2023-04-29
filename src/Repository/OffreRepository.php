<?php

namespace App\Repository;

use App\Entity\Offre;
use App\Entity\Users;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Offre>
 *
 * @method Offre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Offre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Offre[]    findAll()
 * @method Offre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OffreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Offre::class);
    }

    public function save(Offre $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Offre $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function search(string $searchTerm): array
{
    $qb = $this->createQueryBuilder('o')
        ->leftJoin('o.user', 'u')
        ->where('o.titre LIKE :searchTerm')
        ->orWhere('o.description LIKE :searchTerm')
        ->orWhere('o.salaireh LIKE :searchTerm')
        ->orWhere('o.sumr LIKE :searchTerm')
        ->orWhere('o.idoffre LIKE :searchTerm')
        ->orWhere('u.firstName LIKE :searchTerm')
        ->orWhere('u.lastName LIKE :searchTerm')
        ->orWhere('u.srcimage LIKE :searchTerm')
        ->setParameter('searchTerm', '%'.$searchTerm.'%')
        ->select('o.sumr,o.idoffre,o.description, o.titre, o.salaireh, u.firstName, u.lastName,u.srcimage')
        ->getQuery();

    return $qb->execute();
}










#//    /**
//     * @return Offre[] Returns an array of Offre objects
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

#//    public function findOneBySomeField($value): ?Offre
#//    {
#//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}