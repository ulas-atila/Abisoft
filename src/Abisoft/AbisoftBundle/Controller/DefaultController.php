<?php

namespace Abisoft\AbisoftBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AbisoftBundle:Default:index.html.twig', array('name' => $name));
    }
}
