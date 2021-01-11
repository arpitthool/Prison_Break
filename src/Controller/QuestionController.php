<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
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
        return new Response( sprintf(
            "Answers for '%s' are coming soon!",
            ucwords( str_replace( '-', ' ', $quora))));
    }
}