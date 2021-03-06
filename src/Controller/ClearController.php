<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ClearController extends AbstractController
{
    /**
     * @Route("/clear", name="clear")
     */
    public function index()
    {
        return $this->render('clear/index.html.twig', [
            'controller_name' => 'ClearController',
        ]);
    }
}
