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
    private $JobsSfc;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $value;

}
