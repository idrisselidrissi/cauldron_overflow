<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @Route("comments/{id}/vote/{direction}")
     */
    public function CommentVote($id, $direction)
    {
        //todo use id to query database
        // use real logic here to save this to the database
        if($direction =='up'){
            $CurrentVoteCount =rand(7, 100);
        }
        else {
            $CurrentVoteCount =rand(7, 100);
        }

        return $this->Json(['votes'=>$CurrentVoteCount]);
    }
}