<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProjectsController extends AbstractController
{
    /**
     * @Route("/projects", name="projects")
     */
    public function projects()
    {
        return $this->render('projects/index.html.twig', [
            'controller_name' => 'ProjectsController',
        ]);
    }

    /**
     * @Route("/index", name="index")
     */
    public function index()
    {
        $projects = array();

        $projects [1] = "Projet 1";
        $projects [2] = "Projet 2";
        $projects [3] = "Projet 3";

        return $this->render('projects/index.html.twig', [
            'projet' => $projects,
        ]);
    }

}
