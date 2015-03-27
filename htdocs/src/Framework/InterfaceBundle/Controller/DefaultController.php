<?php

namespace Framework\InterfaceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $mode_connect = "";
        $securityContext = $this->container->get('security.context');
        if ($securityContext->isGranted('ROLE_ADMIN')) {
            $mode_connect = "Admin";
        }
        else if ($securityContext->isGranted('ROLE_USER')) {
            $mode_connect = "User";
        }
        else
            $mode_connect = "Anonyme";
        return $this->render('FrameworkInterfaceBundle:Default:index.html.twig', array(
            'mode_connect' => $mode_connect
        ));
    }
}
