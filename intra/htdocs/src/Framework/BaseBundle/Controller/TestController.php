<?php

namespace Framework\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestController extends Controller
{
    public function indexAction()
    {
        return $this->render('BaseBundle:Test:index.html.twig');
    }
}
