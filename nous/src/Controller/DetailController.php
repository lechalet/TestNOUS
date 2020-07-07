<?php

namespace App\Controller;


use App\Entity\Hero;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DetailController extends AbstractController
{
    /**
     * @Route("/marvel/{id}", name="detail")
     */
    public function index($id)
    {
        $acteur = $this->getDoctrine()->getRepository(Hero::class)->find($id);

        return $this->render('detail/index.html.twig', [
            'acteur' => $acteur
        ]);
    }
}
