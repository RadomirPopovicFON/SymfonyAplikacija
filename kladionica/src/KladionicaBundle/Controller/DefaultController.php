<?php

namespace KladionicaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KladionicaBundle:Default:index.html.twig');
    }
}
