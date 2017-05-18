<?php

namespace TF\MainBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use TF\MainBundle\Entity\Hotel;

class LoadHotelData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $Hotels = array(
            array("Burj Kalifah", "Dubaï", "120"),
            array("Hilton", "Washington", "110"),
            array("Trump Tower", "New York", "100"),
            array("Farah", "Marakesh", "90"),
            array("Ibis", "Bruxelles", "70"),

        );

        foreach ($Hotels as $i => $Hotel) {
            $newHotel = new Hotel();
            $newHotel->setNomHotel($Hotel[0]);
            $newHotel->setVille($Hotel[1]);
            $newHotel->setPrix($Hotel[2]);
            $manager->persist($newHotel);
        }
        $manager->flush();
    }
}