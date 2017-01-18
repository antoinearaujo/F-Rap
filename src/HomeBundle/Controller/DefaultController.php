<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HomeBundle:Default:index.html.twig');
    }

    public function accueilAction()
    {
        return $this->render('HomeBundle:Default:accueil.html.twig');
    }

    public function actualitesAction()
    {
        return $this->render('HomeBundle:Default:actualites.html.twig');
    }

}
