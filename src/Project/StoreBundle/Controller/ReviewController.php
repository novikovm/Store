<?php
namespace Project\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Project\StoreBundle\Entity\Recenzja;
use Project\StoreBundle\Form\Type\RecenzjaType;


class ReviewController extends Controller
{
    public function addAction(Request $request, $slug)
    {
    	$recenzja = new Recenzja();
    	$form = $this->createForm(new RecenzjaType(), $recenzja);

    	if ($request->isMethod('POST')
                && $form->handleRequest($request)
                && $form->isValid()
                ) {
                        $username = $this->getUser()-> getUsername();
                        $recenzja -> setAutor($username);
                        $moviesRepository = $this->getDoctrine()->getRepository('ProjectStoreBundle:Movie');
                        $movie = $moviesRepository ->findOneByTitle($slug);
                        $recenzja -> setMovie($movie);
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($recenzja);
                        $em->flush();
                        $request->getSession()->getFlashBag()->add('success', 'Recenzja została dodana.');
                         return $this->redirect($this->generateUrl('project_store_movie', array('slug' => $slug)));
                 }
        return $this->render('ProjectStoreBundle:Default:add.html.twig', array('form' => $form->createView()));
    }
}