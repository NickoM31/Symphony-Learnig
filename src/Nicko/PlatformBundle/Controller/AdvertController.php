<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace Nicko\PlatformBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
  public function indexAction()
  {
    $content = $this
    ->get('templating')
    ->render('NickoPlatformBundle:Advert:index.html.twig', ['nom'=>'Kony']);

    
    return new Response($content);
  }
}

