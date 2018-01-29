<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\JobsSfcRepository")
 */
class JobsSfc
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="App\Entity\Jobs", inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $jobs;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="App\Entity\Sfcs", inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Sfc;


    /**
     * @var string
     * @ORM\Column(type="string", length=128)
     *
     */
    private $indicatorObservable1;

    /**
     * @var string
     * @ORM\Column(type="string", length=128)
     *
     */
    private $indicatorObservable2;

    /**
     * @var string
     * @ORM\Column(type="string", length=128)
     *
     */
    private $indicatorObservable3;

    /**
     * @var string
     * @ORM\Column(type="string", length=128)
     *
     */
    private $indicatorObservable4;


    /**
     * @var string
     *
     * @ORM\Column(type="string", length=128)
     */
    private $indicatorGeneric1;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=128)
     */
    private $indicatorGeneric2;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=128)
     */
    private $indicatorGeneric3;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=128)
     */
    private $indicatorGeneric4;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $requiredLevel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Skills", inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $skills;
}
