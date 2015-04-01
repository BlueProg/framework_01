<?php

namespace Framework\InterfaceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class FormulaireController extends Controller
{
    public function indexAction(Request $request)
    {
        $data  = array();

        $form = $this->createFormBuilder($data)
            ->add('title_field', 'text')
            ->add('name_field', 'text')
            ->add('email_field', 'email')
            ->add('query', 'textarea')
            ->getForm();

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            $data = $form->getData();
            echo "<pre>";
            var_dump($data);
            echo "</pre>";
            $message = \Swift_Message::newInstance()
                ->setSubject($data['title_field'])
                ->setFrom($data['blueprog42@gmail.com'])
                ->setTo('blueprog42@gmail.com')
                ->setBody(
                    $this->renderView(
                        'FrameworkInterfaceBundle:Formulaire:index.html.twig', array
                        ('form' => $form->createView())
                    )
                );
            $this->get('mailer')->send($message);

            //var_dump($data);
            return new RedirectResponse($this->generateUrl('framework_interface_homepage'));;
        }

        return $this->render('FrameworkInterfaceBundle:Formulaire:index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
//    public function indexAction()
//    {
//        return $this->render('FrameworkInterfaceBundle:Formulaire:index.html.twig');
//    }508875848
}
