<?php

namespace App\Controller;


use App\Entity\Jobs;
use App\Entity\Skills;
use App\Entity\UserJobs;
use App\Entity\Users;
use App\Form\UserType;
use App\Repository\SfcsRepository;
use App\Repository\UsersRepository;
use Doctrine\ORM\QueryBuilder;
use function PHPSTORM_META\type;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UsersController extends Controller
{
    private $key = '';

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

           $link = 'localhost:8000/user/update/';

            $code = md5($id.$this->key);

            return $this->redirect('formateur/createLink/',array('id'=>$user->getId(),));
        }
        return $this->render('formateur/index.html.twig', array('form'=>$form->createView(),'user'=>$user->getId(),));
    }





    /**
     * @Route("/user/update/{id}", name="user_update")
     * @param {id}
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function updateAction(UserPasswordEncoderInterface $passwordEncoder, Request $request, Users $users)
    {

        $form = $this->createFormBuilder($users)
            ->add('firstName', TextType::class)
            ->add('lastName', TextType::class)
            ->add('userName',TextType::class)
            ->add('password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => 'Password'),
                'second_options' => array('label' => 'Repeat Password')))
            ->add('save',SubmitType::class ,array('label'=> 'update !'))
            ->getForm();
        $form->handleRequest($request);
//                dump($code);
//                dump($i);
                if ($form->isSubmitted() && $form->isValid()) {
                    $password = $passwordEncoder->encodePassword($users, $users->getPassword());
                    $users->setPassword($password);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($users);
                    $em->flush();
                    return $this->redirectToRoute("create_link",array($users->getId()));
                }
                return $this->render(
                    'user/update.html.twig',
                    array('form' => $form->createView())
                );
    }
    /**
     * @Route("/former/createLink/{id}", name="create_link")
     * @param {id}
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function createUserJobsAction(Request $request, Users $user)
    {
        $userJob = new UserJobs();
        $forms = $this->createFormBuilder($userJob)
            ->add('Jobs', EntityType::class, array(
                "class" => Jobs::class,
                "choice_label" => "nameJobs",
                "expanded" => false,
                "multiple" => false,
                "label" => "Jobs :  "
            ))
            ->add('save',SubmitType::class,array('label'=> 'save'))
            ->getForm();
        $forms->handleRequest($request);
        if ($forms->isSubmitted() && $forms->isValid()){
            $userJob->setUser($user->getId());
            $userJob->setFormateur($this->getUser());
            $id = $this->getUser()->getId();

            $skills = $this->getDoctrine()->getRepository('App:Skills')->findAll();
            foreach ($skills as $key=>$value){
                for ($i=0; $i<=$key;$i++){
                    $u =  $value->getFormerUser();

                    if (isset($u) ){
                        $s =  $this->getDoctrine()->getRepository('App:Skills')->find($value->getId());

                        $userJob->setSkils($s);
                    }
                }
            }
            $ems = $this->getDoctrine()->getManager();
            $ems->persist($userJob);
            $ems->flush();
        }
        return $this->render('/Formateur/createLink.html.twig',array('forms'=>$forms->createView()));
    }
}
