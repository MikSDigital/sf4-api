<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Repository\MovieRepository;
use FOS\RestBundle\Controller\ControllerTrait;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use FOS\RestBundle\Controller\Annotations as Rest;

class MoviesController extends AbstractController
{
    use ControllerTrait;


    /**
     * @Rest\View()
     */
    public function getMoviesAction()
    {
        $movies = $this->getDoctrine()->getRepository(Movie::class)->findAll();

        return $movies;
    }
}
