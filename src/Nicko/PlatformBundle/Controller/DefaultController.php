<?php

namespace Nicko\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NickoPlatformBundle:Default:index.html.twig');
    }
}
