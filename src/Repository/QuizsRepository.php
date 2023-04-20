<?php

namespace App\Repository;

use App\Entity\Quizs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Quizs>
 *
 * @method Quizs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Quizs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Quizs[]    findAll()
 * @method Quizs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuizsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Quizs::class);
    }
    /**
     * Finds quizs by title.
     *
     * @param string $title The title to search for
     * @return Quizs[] The matching quizs
     */
    public function findByTitle(string $title): array
    {
        $qb = $this->createQueryBuilder('q');

        if ($title) {
            $qb->andWhere('LOWER(q.quizTitle) LIKE :title')
                ->setParameter('title', '%' . strtolower($title) . '%');
        }

        return $qb->getQuery()->getResult();
    }
    public function findByScore(int $score): array
    {
        $qb = $this->createQueryBuilder('q');

        if ($score) {
            $qb->andWhere('q.score = :score')
                ->setParameter('score', $score);
        }

        return $qb->getQuery()->getResult();
    }



    public function save(Quizs $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Quizs $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Quizs[] Returns an array of Quizs objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('q')
//            ->andWhere('q.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('q.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Quizs
//    {
//        return $this->createQueryBuilder('q')
//            ->andWhere('q.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
