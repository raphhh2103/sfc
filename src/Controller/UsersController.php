<?php

namespace App\Controller;


use App\Entity\UserJobs;
use App\Entity\Users;
use App\Form\UserType;
use App\Repository\SfcsRepository;
use App\Repository\UsersRepository;
use Doctrine\ORM\QueryBuilder;
use function PHPSTORM_META\type;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
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

        dump($query);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){



            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
           $id =  $user->getId();
//            $id = $_POST['id'] ;
//            dump($user->getId());


           $link = 'localhost:8000/user/update/';
            dump($user->getId());

                dump(get_current_user());

//            dump($user->getId());die();
            $userJob = new UserJobs();
            $userJob->setUser($user->getId());
            $userJob->setFormateur($_SESSION['idUserLogged']);
            $userJob->setJobs($_SESSION['idjobs']);
            $userJob->setSkils($_SESSION['idskills']);

            $code = md5($id.$this->key);


            return $this->render('formateur/index.html.twig',array('link'=>$link.$id,'form'=>$form->createView(),'user'=>$user->getId(),));

        }

        // replace this line with your own code!
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
//        $url = $request->getPathInfo();
//        $split = str_split($url,13);
//        $code = $split[1].$split[2].$split[3];
//        for ($i = 0; $i<9999999;$i++) {
//            if ($code === md5($i . $this->key)) {
//                dump($i);
//           $repo = $this->getDoctrine()->getRepository('App\Entity\Users');
//                $users = $repo->find($i);
//            }}
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
                    return $this->redirectToRoute("home");
                }
                return $this->render(
                    'user/update.html.twig',
                    array('form' => $form->createView())
                );
    }
}
