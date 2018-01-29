<?php

namespace App\Controller;

use App\Entity\JobsSfcs;
use App\Entity\UserJobs;
use App\Entity\Users;
use App\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Session\Session;

class UsersController extends Controller
{
    private $string = 'yolo';

    /**
     * @Route("/formateur/add", name="former_add")
     */
    public function index(Request $request)
    {





        $user = new Users();
        $user->setLastName('userdefault');
        $user->setPassword('test1234=');
        $user->setUsername('userDefault');
        $user->setFirstName('userDefault');
        $user->setRoles(['ROLE_USER']);
        $form = $this->createFormBuilder($user)
        ->add('email',TextType::class)
        ->add('save',SubmitType::class ,array('label'=> 'generate link'))
        ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){



            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
           $id =  $user->getId();
//            $id = $_POST['id'] ;
            dump('');


           $link = 'localhost:8000/user/update/';
//            dump($user->getId());
//            dump(get_current_user());
//            dump($user->getId());die();
//            $userJob = new UserJobs();
//            $userJob->setUser($user->getId());
//            $userJob->setFormateur($_SESSION['id']);
//            $userJob->setJobs($_SESSION['idjobs']);
//            $userJob->setSkils($_SESSION['idskills']);

            $code = md5($id.$this->string);


            return $this->render('formateur/index.html.twig',array('link'=>$link.$code,'form'=>$form->createView(),'user'=>$user->getId(),));

        }

        // replace this line with your own code!
        return $this->render('formateur/index.html.twig', array('form'=>$form->createView(),'user'=>$user->getId(),));
    }





    /**
     * @Route("/user/update/{id}", name="user_update")
     * @param $id = md5($users->getId() . $this->string)
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function updateAction($id, Request $request,Users $users)
    {
        $form = $this->createForm(UserType::class);
//        dump($_GET['id']);die();
        if($id  === md5($id.$this->string)) {
//        $code = $_GET['id'];
//        dump($code);

            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {


//            var_dump($users->getId());die;

                $em = $this->getDoctrine()->getManager();

                $em->persist($users);
                $em->flush();

                return $this->redirectToRoute("home");

            }

            return $this->render(
                'user/update.html.twig',
                array('form' => $form->createView())
            );
        }
        return $this->render('user/update.html.twig',array('form'=>$form));
    }
}
