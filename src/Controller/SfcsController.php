<?php

namespace App\Controller;

use App\Entity\Sfcs;
use App\Form\SFCSType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\EventDispatcher\GenericEvent;
use Symfony\Component\Validator\Constraints\DateTime;

class SfcsController extends Controller
{
    /**
     * @Route("/sfcs", name="sfcs")
     */
    public function index()
    {
        // replace this line with your own code!
        return $this->render('@Maker/demoPage.html.twig', [ 'path' => str_replace($this->getParameter('kernel.project_dir').'/', '', __FILE__) ]);
    }

    /**
     * @Route("/vueSfcs", name="vueSfcs")
     */
    public function findAllAction(){
        $repo = $this->getDoctrine()->getRepository(Sfcs::class)
        ->findAll();
//        dump($repo);die();



//        return new Response('Check out this great product: '.$repo->getnameJobs());

        return $this->render(
            'sfcs.html.twig', array('Sfcs' => $repo)

        );
    }


    /**
     * @Route("/modifSfcs/{id}", name="modifSfcs")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function updateAction(Sfcs $sfcs, Request $request)
    {
        $form = $this->createForm(SFCSType::class, $sfcs);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {



            //var_dump($job->getId());die;

            $em = $this->getDoctrine()->getManager();

            $em->persist($sfcs);
            $em->flush();

            return $this->redirectToRoute("vueJobs");

        }

        return $this->render(
            'Admin/modifSfcs.html.twig',
            array('form' => $form->createView())
        );

    }

    /**
     * @Route("/createSfc", name="createSfc")
     */
    public function registerAction(Request $request)
    {

        $sfcs = new Sfcs();
        $form = $this->createForm(SFCSType::class, $sfcs);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {


//            var_dump($date);die;
            // On enregistre l'utilisateur dans la base
            $sfcs->setDateCreate(new \DateTime());
            $sfcs->setIsValid(true);
            $em = $this->getDoctrine()->getManager();
            $em->persist($sfcs);
            $em->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render(
            'Admin/createSfcs.html.twig',
            array('form' => $form->createView())
        );
    }
}
