<?php

namespace Framework\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminArticleController extends Controller
{
    public function ajouterAction()
    {
        $request = $this->getRequest();

        if ($request->getMethod() == 'POST'){
            $flash = $this->get('session')->getFlashBag();
            $flash->set("info", "Article add");
        
            return $this->redirect($this->generateUrl('base_admin_home'));
        }
    	return $this->render('BaseBundle:AdminArticle:ajouter.html.twig');
    }

    public function modifierAction()
    {
    	return $this->render('BaseBundle:AdminArticle:modification.html.twig');
    }

    public function supprimerAction()
    {
    	return $this->render('BaseBundle:AdminArticle:suppression.html.twig');
    }
}
