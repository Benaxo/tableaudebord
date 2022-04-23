<?php

namespace App\Controller;

use App\Entity\Taches;
use App\Form\SelectionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TachesController extends AbstractController
{
    // /**
    //  * @Route("/", name="taches")
    //  */
    // public function index(): Response
    // {

    //     $selection = new Taches();
        
    //     $form = $this->createForm(SelectionType::class, $selection);

    //     // Récupérer les données contenu dans la table Taches
    //     //$tache = $this->getDoctrine()->getRepository(Taches::class)->findAll();


    //     return $this->render('taches/index.html.twig', [
    //         'formTest'=> $form->createView(), 
    //     ]);
    // }


    
}
