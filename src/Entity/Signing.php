<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SigningRepository")
 */
class Signing
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var UserJobs
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\UserJobs", inversedBy="UserJobs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $UserJobs;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @param UserJobs $UserJobs
     */
    public function setUserJobs(UserJobs $UserJobs)
    {
        $this->UserJobs = $UserJobs;
    }

    /**
     * @return UserJobs
     */
    public function getUserJobs(): ?UserJobs
    {
        return $this->UserJobs;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

}
