<?php

namespace PacientesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PacientesBundle:Default:index.html.twig', array('name' => $name));
    }
}
