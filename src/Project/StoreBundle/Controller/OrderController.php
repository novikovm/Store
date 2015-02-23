<?php

namespace Project\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Project\StoreBundle\Entity\Movie;
use Project\StoreBundle\Entity\Recenzja;

class KoszykController extends Controller
{
    public function indexAction()
    {
		$em = $this->getDoctrine()->getManager(); 
		$moviesRepository = $em->getRepository("ProjectStoreBundle:Movie"); 
		$movies = $moviesRepository->findAll();

		$genresRepository = $em->getRepository("ProjectStoreBundle:Genre"); 
		$genres = $genresRepository->findAll();
		
		return $this->render('ProjectStoreBundle:Default:koszyk.html.twig', array('movies' => $movies, 'genres' => $genres, 'selected' => 0));
    }

	
	
}
