<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\US;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $us1 = new US();
        $us1->setOwner("bob");
        $us1->setProject("pacman2015");
        $us1->setId("1");
        $us1->setDescription("this is a User Story");
        $us1->setPriority("2");
        $us1->setCost("4");
        $manager->persist($us1);
        //
        $us2 = new US();
        $us2->setOwner("bob");
        $us2->setProject("pacman2015");
        $us2->setId("2");
        $us2->setDescription("this is an other User Story");
        $us2->setPriority("1");
        $us2->setCost("2");
        $manager->persist($us2);
        //
        $us3 = new US();
        $us3->setOwner("bob");
        $us3->setProject("pacman2015");
        $us3->setId("3");
        $us3->setDescription("and an other");
        $us3->setPriority("1");
        $us3->setCost("3");
        $manager->persist($us3);
        //
        $us4 = new US();
        $us4->setOwner("bob");
        $us4->setProject("pacman2015");
        $us4->setId("4");
        $us4->setDescription("yet an other one");
        $us4->setPriority("3");
        $us4->setCost("1");
        $manager->persist($us4);
        //
        $manager->flush();
    }
}
