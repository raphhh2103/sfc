<?php

namespace App\Repository;

use App\Entity\JobsSfc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class JobsSfcRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, JobsSfc::class);
    }

    public function findIndicatorById($id){
        return $this->createQueryBuilder("j")
            ->where("j.id = :id")->set("id", $id)
            ->select("j.indicatorObservable1");
    }
    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('j')
            ->where('j.something = :value')->setParameter('value', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
