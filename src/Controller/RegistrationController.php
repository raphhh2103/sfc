<?php

namespace App\Controller;

use App\Form\UserType;
use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\EventDispatcher\GenericEvent;

class RegistrationController extends Controller
{
    private $codeFormer = '33a375d75e56a8f3ac95646156bbb7a8';
    /**
     * @Route("/register", name="user_registration")
     */
    public function registerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder, EventDispatcherInterface $eventDispatcher)
    {

        $user = new Users();
        $form = $this->createForm(UserType::class, $user);


        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $password = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);
            if ($user->getCode() === $this->codeFormer){

            // Par defaut l'utilisateur aura toujours le rôle ROLE_USER
            $user->setRoles(['ROLE_FORMER']);


            // On enregistre l'utilisateur dans la base
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            }
            else{
                $badcode =  'wrong code contact an administrator';

                $this->redirectToRoute('user_registration');
            }
            return $this->redirectToRoute('security_login');
        }

        $badcode ='';
        return $this->render(
            'security/register.html.twig',
            array('form' => $form->createView())
        );
    }
}
