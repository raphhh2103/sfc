<?php
/**
 * Created by PhpStorm.
 * User: Student
 * Date: 18-01-18
 * Time: 10:34
 */

namespace App\DataFixtures;

use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class AppFixtures extends Fixture
{

    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;

    }
//ca marche
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        foreach ($this->getUserData() as [$firstName, $lastName, $UserName, $password, $email, $role]){
            $user = new Users();
            $user->setfirstName($firstName);
            $user->setLastName($lastName);
            $user->setUserName($UserName);
            $user->setPassword($this->passwordEncoder->encodePassword($user,$password));
            $user->setEmail($email);
            $user->setRoles($role);

            $manager->persist($user);
//            $this->addReference($username,$user);
        }
        $manager->flush();
    }

    private function getUserData():array {
        return[
            ['Jane Doe', 'jane_admin', 'jane', 'kitten', 'jane_admin@symfony.com', ['ROLE_ADMIN']],
            ['Tom Doe', 'tom_admin', 'tom', 'kitten', 'tom_admin@symfony.com', ['ROLE_ADMIN']],
            ['John Doe', 'john_user', 'john', 'kitten', 'john_user@symfony.com', ['ROLE_USER']],
        ];
    }
}