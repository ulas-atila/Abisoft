<?php

namespace Abisoft\AbisoftBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class CssController extends Controller
{
    public function defaultAction($color)
    {
        $response = new Response();
        $response->headers->set('Content-Type', 'text/css');
        $response->setContent($this->renderView('AbisoftBundle:Css:default.css.twig', array('bg_color ' => $color)));
        return $response;
    }
}
