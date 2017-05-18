<?php

namespace TF\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{


    public function HomeAction()
    {
        return $this->render(
            "TFMainBundle:Default:Home.html.twig");
    }
    public function ContactAction()
    {
        return $this->render(
            "TFMainBundle:Default:Contact.html.twig");
    }
    public function AboutAction()
    {
        return $this->render(
            "TFMainBundle:Default:About.html.twig");
    }
}
