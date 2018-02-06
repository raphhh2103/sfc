<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ResultsRepository")
 */
class Results
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="App\Entity\Signing", inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $signing;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="App\Entity\JobsSfc", inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $JobSfc;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $value;

    /**
     * @return int
     */
    public function getSigning(): int
    {
        return $this->signing;
    }

    /**
     * @param int $signing
     */
    public function setSigning(int $signing)
    {
        $this->signing = $signing;
    }

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
     * @param JobSfc $JobsSfc
     * @return Results
     */
    public function setJobSfc(JobsSfc $JobSfc): Results
    {
        $this->JobSfc = $JobSfc;
        return $this;
    }

    /**
     * @return  int
     */
    public function getJobSfc(): ?JobsSfc
    {
        return $this->JobSfc;
    }



    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue(int $value)
    {
        $this->value = $value;
    }

}
