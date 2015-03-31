<?php

namespace Framework\InterfaceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FormulaireController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrameworkInterfaceBundle:Formulaire:index.html.twig');
    }
}
