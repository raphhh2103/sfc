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
     * @var Jobs
     * @ORM\ManyToOne(targetEntity="App\Entity\Jobs", inversedBy="Jobs")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $jobs;

    /**
     * @var Sfcs
     * @ORM\ManyToOne(targetEntity="App\Entity\Sfcs", inversedBy="Sfcs")
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Skills", inversedBy="Skills")
     * @ORM\JoinColumn(nullable=false)
     */
    private $skills;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return Jobs
     */
    public function getJobs()
    {
        return $this->jobs;
    }

    /**
     * @param Jobs $jobs
     * @return Jobs
     */
    public function setJobs( $jobs)
    {
        $this->jobs = $jobs;

        return $this->jobs;
    }

    /**
     * @return Sfcs
     */
    public function getSfc()
    {
        return $this->Sfc;
    }

    /**
     *
     * @param Sfcs $Sfc
     * @return Sfcs
     */
    public function setSfc( $Sfc)
    {
        $this->Sfc = $Sfc;
        return $this->Sfc;
    }

    /**
     * @return string
     */
    public function getIndicatorObservable1(): ?string
    {
        return $this->indicatorObservable1;
    }

    /**
     * @param string $indicatorObservable1
     */
    public function setIndicatorObservable1(string $indicatorObservable1)
    {
        $this->indicatorObservable1 = $indicatorObservable1;
    }

    /**
     * @return string
     */
    public function getIndicatorObservable2(): ?string
    {
        return $this->indicatorObservable2;
    }

    /**
     * @param string $indicatorObservable2
     */
    public function setIndicatorObservable2(string $indicatorObservable2)
    {
        $this->indicatorObservable2 = $indicatorObservable2;
    }

    /**
     * @return string
     */
    public function getIndicatorObservable3(): ?string
    {
        return $this->indicatorObservable3;
    }

    /**
     * @param string $indicatorObservable3
     */
    public function setIndicatorObservable3(string $indicatorObservable3)
    {
        $this->indicatorObservable3 = $indicatorObservable3;
    }

    /**
     * @return string
     */
    public function getIndicatorObservable4(): ?string
    {
        return $this->indicatorObservable4;
    }

    /**
     * @param string $indicatorObservable4
     */
    public function setIndicatorObservable4(string $indicatorObservable4)
    {
        $this->indicatorObservable4 = $indicatorObservable4;
    }

    /**
     * @return string
     */
    public function getIndicatorGeneric1(): ?string
    {
        return $this->indicatorGeneric1;
    }

    /**
     * @param string $indicatorGeneric1
     */
    public function setIndicatorGeneric1(string $indicatorGeneric1)
    {
        $this->indicatorGeneric1 = $indicatorGeneric1;
    }

    /**
     * @return string
     */
    public function getIndicatorGeneric2(): ?string
    {
        return $this->indicatorGeneric2;
    }

    /**
     * @param string $indicatorGeneric2
     */
    public function setIndicatorGeneric2(string $indicatorGeneric2)
    {
        $this->indicatorGeneric2 = $indicatorGeneric2;
    }

    /**
     * @return string
     */
    public function getIndicatorGeneric3(): ?string
    {
        return $this->indicatorGeneric3;
    }

    /**
     * @param string $indicatorGeneric3
     */
    public function setIndicatorGeneric3(string $indicatorGeneric3)
    {
        $this->indicatorGeneric3 = $indicatorGeneric3;
    }

    /**
     * @return string
     */
    public function getIndicatorGeneric4(): ?string
    {
        return $this->indicatorGeneric4;
    }

    /**
     * @param string $indicatorGeneric4
     */
    public function setIndicatorGeneric4(string $indicatorGeneric4)
    {
        $this->indicatorGeneric4 = $indicatorGeneric4;
    }

    /**
     * @return int
     */
    public function getRequiredLevel(): ?int
    {
        return $this->requiredLevel;
    }

    /**
     * @param int $requiredLevel
     */
    public function setRequiredLevel(int $requiredLevel)
    {
        $this->requiredLevel = $requiredLevel;
    }

    /**
     * @return mixed
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * @param Skills $skills
     * @return Skills
     */
    public function setSkills($skills)
    {
        $this->skills = $skills;
        return $this->skills;
    }
}
