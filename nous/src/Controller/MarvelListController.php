<?php

namespace App\Controller;

use App\Entity\Hero;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MarvelListController extends AbstractController
{
    /**
     * @Route("/", name="marvel_list")
     */
    public function index()
    {
        // On appel la liste de tous les acteurs

        $acteurs = $this->getDoctrine()->getRepository(Hero::class)->findAll();

        return $this->render('marvel_list/index.html.twig', [
            'acteurs' => $acteurs
        ]);
    }
}
