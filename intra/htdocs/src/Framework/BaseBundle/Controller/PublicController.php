<?php

namespace Framework\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PublicController extends Controller
{
    public function indexAction()
    {
        return $this->render('BaseBundle:Public:index.html.twig');
    }

    public function pageAction($id)
    {
        return $this->render('BaseBundle:Public:page.html.twig', array(
        	'id' => $id,
        ));
    }

    public function articleAction()
    {
        $session = $this->get('session');
        $session->set('DerniereVisite', new \DateTime());
        $article = array(
            'titre' => "titre de l'article",
            'date' => $session->get('DerniereVisite'),
            'contenu' => "Contenu ici",
            'auteur' => "BlueProg",
        );
        return $this->render('BaseBundle:Public:article.html.twig', array(

            'article' => $article,
        ));
    }
}