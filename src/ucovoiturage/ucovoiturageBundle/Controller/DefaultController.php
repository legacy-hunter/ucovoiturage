<?php

namespace ucovoiturage\ucovoiturageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ucovoiturageBundle:Default:test.html.twig');
    }
}
