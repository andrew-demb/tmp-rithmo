<?php

namespace MoSys\Rithmo\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RithmoController extends AbstractController
{
    /**
     * @Route("/rithmo", name="rithmo_index")
     */
    public function index(): Response
    {
        return $this->render('@Rithmo/index.html.twig', [
            'message' => 'Hallo Welt!',
        ]);
    }
}