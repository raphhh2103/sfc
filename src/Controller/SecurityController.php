<?php

namespace App\Controller;

use App\Entity\Users;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{

    /**
     * @Route("/login", name="security_login")
     * @param AuthenticationUtils $helper
     * @return Response
     */
    public function login(AuthenticationUtils $helper)
    {



        $all = [];
        $repo =  $this->getDoctrine()->getRepository(Users::class);
        $all = $repo->findAll();
//        dump($all[0]->getId());
        for($i= 0; $i<= count($all);$i++){
           if (!isset($all[$i])){
               $i++;
               dump('test');
           }
            if (isset($all[$i])&&$all[$i]->getUserName() === $helper->getLastUsername()){
              $_SESSION['idUserLogged'] = $all[$i]->getId();
              $id = $all[$i]->getId();
              dump($_SESSION['idUserLogged']);
              dump('yolooooooo');
              dump($id);
              return $this->redirectToRoute('home',array('id'=>$id));
            }
         }

        return  $this->render('Security/login.html.twig', [
            // dernier username saisi (si il y en a un)
            'last_username' => $helper->getLastUsername(),
            // La derniere erreur de connexion (si il y en a une)
            'error' => $helper->getLastAuthenticationError(),
        ]);

    }

    /**
     * La route pour se deconnecter.
     *
     * Mais celle ci ne doit jamais être executé car symfony l'interceptera avant.
     *
     *
     * @Route("/logout", name="security_logout")
     * @throws \Exception
     */
    public function logout(): void
    {
        throw new \Exception('This should never be reached!');
    }
}
