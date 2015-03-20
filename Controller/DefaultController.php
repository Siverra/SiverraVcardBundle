<?php

namespace Siverra\Bundle\SiverraVcardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SiverraVcardBundle:Default:index.html.twig', array('name' => $name));
    }
}
