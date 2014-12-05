<?php

namespace miproyecto\alumnoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('miproyectoalumnoBundle:Default:index.html.twig', array('name' => $name));
    }
}
