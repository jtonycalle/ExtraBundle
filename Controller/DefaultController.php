<?php

namespace Tony\ExtraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TonyExtraBundle:Default:index.html.twig');
    }
}
