<?php

namespace App\Controller;

use Knp\Bundle\MarkdownBundle\MarkdownParserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage()//Environment $twigEnvironment)
    {
        //example of using the Twig service
        // $html = $twigEnvironment->render('question/homepage.html.twig');
        // return new Response($html);
        return $this->render('question/homepage.html.twig');
    }

    /**
     * @Route("/questions/{question}", name="app_question_show")
     */
    public function show($question, MarkdownParserInterface $markdownParser)
    {
        $answers = [
            '<html></html>Bribe the `guard`',
            'Beat the `quard`',
            'Trick the `guard`'
        ];
        $questionText = "I've been turned into a cat, any thoughts on how to turn back? While I'm **adorable**, I don't really care for cat food.";
        $parsedQuestionText = $markdownParser->transformMarkdown($questionText);
        
        return $this->render('question/show.html.twig',[
            'question' => ucwords( str_replace( '-', ' ', $question)),
            'questionText' => $parsedQuestionText,
            'answers' => $answers
        ]);
    }
}