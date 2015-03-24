<?php

namespace Framework\InterfaceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrameworkInterfaceBundle:Default:index.html.twig');
    }
}
