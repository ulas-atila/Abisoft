<?php

namespace Abisoft\AbisoftBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($color)
    {
        return $this->render('AbisoftBundle:Default:index.html.twig', array('bg_color' => $color));
    }
}
