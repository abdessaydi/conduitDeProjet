<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class RouteController extends Controller 
{
	public function homepageAction(){
		return $this->render('homepage.html.twig');
	}
    public function backlogAction($owner, $project)
    {
        //phony data for testing purpose
        $usList = array(
            array("id" => 1,"description" => "this is a user story", "cost" => 2, "priority" => 1),
            array("id" => 2,"description" => "this is an other user story for my project", "cost" => 3, "priority" => 2),
            array("id" => 3,"description" => "and an other", "cost" => 1, "priority" => 1),
            array("id" => 4,"description" => "yet an other", "cost" => 3, "priority" => 2));
        /* 
        $usList = $this->getDoctrine()
            ->getRepository()
            ->findyB(
                array('owner' => $owner),
                array('project' => $project));
        */
        if (!$usList) {
            throw $this->createNotFoundException('No data found for owner: '.$owner.', and project: '.$project);
        }
        else {
            return $this->render("backlog.html.twig", array("usList" => $usList));
        }
    }

}

