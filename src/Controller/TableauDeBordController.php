<?php

namespace App\Controller;

use App\Entity\Processus;
use App\Form\TableauDeBordType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class TableauDeBordController extends AbstractController
{
    /**
     * @Route("/", name="acceuil")
     */
    public function index(Request $request): Response
    {
        $processus = new Processus();

        $form = $this->createForm(TableauDeBordType::class, $processus);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

        }
        
        return $this->render('tableau_de_bord/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
