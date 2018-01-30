<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function admin()
    {
        return $this->render('Admin/index.html.twig');
    }

    /**
     * @Route("/user", name="user")
     */
    public function user()
    {
        return $this->render('User/index.html.twig');
    }

    /**
     * @Route("/", name="deco")
     */
    public function deco()
    {
        return $this->render('deco.html.twig');
    }

    /**
     * @Route("/Home/index/{app.user.id}", name="home")
     */
    public function home()
    {
        return $this->render('Home/home.html.twig');
    }

    /**
     * @Route("/metier", name="metier")
     */
    public function metier()
    {

        return $this->render('metier.html.twig');
    }

}
