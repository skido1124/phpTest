<?php

namespace My\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('MyBlogBundle:User')->findAll();
        return $this->render('MyBlogBundle:Default:index.html.twig', array('users' => $users));
    }
}
