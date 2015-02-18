<?php

namespace Project\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Project\StoreBundle\Form\Type\RegistrationType;
use Project\StoreBundle\Form\Model\Registration;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProjectStoreBundle:Default:index.html.twig', array());
    }
	/*
	public function loginAction()
    {
        return $this->render('ProjectStoreBundle:Default:login.html.twig', array());
    }
	
	public function registerAction()
    {
        $registration = new Registration();
        $form = $this->createForm(new RegistrationType(), $registration, array(
            'action' => $this->generateUrl('account_create'),
        ));

        return $this->render(
            'ProjectStoreBundle:Default:register.html.twig',
            array('form' => $form->createView())
        );
    }
	
	public function createAction(Request $request)
{
    $em = $this->getDoctrine()->getManager();

    $form = $this->createForm(new RegistrationType(), new Registration());

    $form->handleRequest($request);

    if ($form->isValid()) {
        $registration = $form->getData();

        $em->persist($registration->getUser());
        $em->flush();

        return $this->redirect();
    }

    return $this->render(
        'ProjectStoreBundle:Default:register.html.twig',
        array('form' => $form->createView())
    );
} */
	
}
