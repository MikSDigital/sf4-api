<?php

namespace App\DataFixtures;


use App\Entity\Person;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadPersonsData extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $person1 = new Person();
        $person1->setFirstName('Tom');
        $person1->setLastName('Hanks');
        $person1->setDateOfBirth(new \DateTime('1970-12-20'));

        $manager->persist($person1);

        $manager->flush();
    }
}