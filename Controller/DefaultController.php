<?php

namespace Coregen\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('CoregenUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
