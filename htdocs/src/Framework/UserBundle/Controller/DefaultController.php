<?php

namespace Framework\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FrameworkUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
