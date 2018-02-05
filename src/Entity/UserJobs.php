<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserJobsRepository")
 */
class UserJobs
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var Jobs
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Jobs",inversedBy="id")
     * @ORM\Joincolumn(nullable=false)
     */
    private $Jobs;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Users",inversedBy="id")
     * @ORM\Joincolumn(nullable=false)
     */
    private $user;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Users",inversedBy="id")
     * @ORM\Joincolumn(nullable=false)
     */
    private $formateur;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Skills",inversedBy="id")
     * @ORM\Joincolumn(nullable=false)
     */
    private $skils;

    /**
     * @param mixed $id
     * @return UserJobs
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param Users $user
     *
     */
    public function setUser(Users $user)
    {
        $this->user = $user;

    }

    /**
     * @return int
     */
    public function getUser(): ?Users
    {
        return $this->user;
    }

    /**
     * @param Users $formateur
     * @return UserJobs
     */
    public function setFormateur(Users $formateur): UserJobs
    {
        $this->formateur = $formateur;
        return $this;
    }

    /**
     * @return int
     */
    public function getFormateur(): Users
    {
        return $this->formateur;
    }

    /**
     * @param Skills $skils
     *
     */
    public function setSkils( Skills $skils)
    {
        $this->skils = $skils;

    }

    /**
     * @return int
     */
    public function getSkils() : ?Skills
    {
        return $this->skils;
    }

    /**
     * @param Jobs $Jobs
     *
     */
    public function setJobs(Jobs $Jobs)
    {
        $this->Jobs = $Jobs;

    }

    /**
     * @return int
     */
    public function getJobs(): ?Jobs
    {
        return $this->Jobs;
    }
}
