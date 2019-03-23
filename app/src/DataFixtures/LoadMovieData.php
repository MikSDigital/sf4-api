<?php

namespace App\DataFixtures;


use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadMovieData extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $movie1 = new Movie();
        $movie1->setTitle('Green Book');
        $movie1->setYear(2019);
        $movie1->setTime(199);
        $movie1->setDescription('Green Book movie description');

        $manager->persist($movie1);
        $manager->flush();
    }
}