<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @Route("/comments/{id}/vote/{direction}")
     */
    public function commentVote( $id, $direction)
    {   
        // todo use id to query to database
        $currentVoteCount = 0;

        if ( $direction === 'up') {
            $currentVoteCount = rand( 7,100);
        }
        elseif( $direction == 'down'){
            $currentVoteCount == rand( 0,5);
        }

        return $this->json([
            'votes' => $currentVoteCount
        ]);
    }
}
