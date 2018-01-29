<?php
/**
 * Created by PhpStorm.
 * User: Student
 * Date: 29-01-18
 * Time: 09:54
 */

namespace App\Utils;

use App\Entity\Jobs;
use App\Entity\Skills;
use App\Entity\Users;
use Symfony\Component\HttpFoundation\Session\Session;

class StorageSession
{
        private static $instance;
        private $session;

        function __construct()
        {
            $this->session = new Session();
            $this->session->start();
        }

    public function getInstance()
    {
        if (self::$instance === null){
        self::$instance = new Session();
        }
        return self::$instance;
    }

    public function redirectIfCanAccess (){
            if (!$this->session->get('isLogged')){
                header('location:http://',$_SERVER['HTTP_HOST'].'/login');
            }
    }

    public function init(Users $u)
    {
        $this->session->set('username',$u->getUserName());
        $this->session->set('userId',$u->getId());
        $this->session->set('isLogged',true);
        $this->session->set('connectionDate',new \DateTime());
    }

    public function isLog()
    {
        return $this->session->get('isLogged');

    }




    public function setJobsId(Jobs $j):void
    {
        $this->session->set('jobsId', $j->getId());


    }

    public function setSkillsId(Skills $s):void
    {
        $this->session->set('skillsId',$s->getId());

    }

}