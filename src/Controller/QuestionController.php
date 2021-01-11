<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response( "How to escape from a prison! 101");
    }

    /**
     * @Route("/questions/{quora}")
     */
    public function show($quora)
    {
        $answers = [
            'Bribe the guard',
            'Beat the quard',
            'Trick the guard'
        ];

        return $this->render('question/show.html.twig',[
            'question' => ucwords( str_replace( '-', ' ', $quora)),
            'answers' => $answers
        ]);
    }
}