<?php

namespace App\Repository;

use App\Entity\Sfcs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class SfcsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Sfcs::class);
    }
    public function findIndicatorById($id){
        return $this->createQueryBuilder("j")
            ->select("j.indicatorObservable1")
            ->where("j.id = :id")->set("id", $id);

    }

    public function findBySomething($value)
    {

        return $this->createQueryBuilder('s')
            ->select('indicatorObservable1')
            ->where('s.id',$value)
            ->getQuery()
            ->getResult();

//        return $this->createQueryBuilder('s')
//            ->where('s.something = :value')->setParameter('value', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
    }

}
