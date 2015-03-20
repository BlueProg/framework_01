<?php

namespace Framework\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
    	return $this->render('BaseBundle:Admin:index.html.twig');
    }
}
