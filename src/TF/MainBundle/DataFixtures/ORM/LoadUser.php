<?php

namespace TF\MainBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use TF\MainBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $Users = array(
            array("Selmani", "Erdzan", "Sal@eem", ["ROLE_ADMIN", "ROLE_USER"],"erxhanselmani@hotmail.com", "erdzansalt"),
            array("Auquier", "Lisa", "asil", ["ROLE_USER"], "lisaauquier@hotmail.com","lisasalt"),
            array("Bruyere", "Thomas", "samoht", ["ROLE_USER"],"thom.bruyer@gmail.com", "thomassalt"),
            array("Glynatsis", "Nicolas", "salocin", ["ROLE_USER"], "glynatsis.nicolas@gmail.com","nicolassalt"),
            array("Pedro", "Natanel", "lenatan", ["ROLE_USER"], "natanael.pedro@gmail.com","natanelsalt"),
            array("Melanie", "Geerts", "einalem", ["ROLE_USER"], "geertsmel@gmail.com","melaniesalt"),
        );

            foreach ($Users as $i => $User) {
                $newUser = new User();
                $newUser->setLastname($User[0]);
                $newUser->setFirstname($User[1]);
                $newUser->setPassword($User[2]);
                $newUser->setRoles($User[3]);
                $newUser->setEmail($User[4]);
                $newUser->setSalt($User[5]);
                $manager->persist($newUser);
            }
        $manager->flush();
    }
}