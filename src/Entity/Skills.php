<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SkillsRepository")
 */
class Skills
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=150)
     */
    private $name;





    /**
     * @var Users
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Users", inversedBy="id")
     * @ORM\Joincolumn(nullable=true)
     */
    private $FormerUser;

    /**
     * @param mixed $id
     * @return Skills
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
     * @param string $name
     * @return Skills
     */
    public function setName(string $name): Skills
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return Users
     */
    public function getFormerUser(): ?Users
    {
        return $this->FormerUser;
    }

    /**
     * @param Users $FormerUser
     */
    public function setFormerUser(Users $FormerUser)
    {
        $this->FormerUser = $FormerUser;
    }


}
