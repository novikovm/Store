<?php

namespace Project\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Project\StoreBundle\Entity\Movie;

class MovieController extends Controller
{
    public function indexAction()
    {
		$em = $this->getDoctrine()->getManager(); 
		$moviesRepository = $em->getRepository("ProjectStoreBundle:Movie"); 
		$movies = $moviesRepository->findAll();
		return $this->render('ProjectStoreBundle:Default:index.html.twig', array('movies' => $movies));
    }

	
	
}
