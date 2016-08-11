<?php

namespace ProbaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProbaBundle:Default:index.html.twig');
    }
}
