<?php

namespace NB\PrincipalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NBPrincipalBundle::index.html.twig', array('title'=>'Site de Benjamin NEILZ'));
    }
    
    public function cvAction()
    {
        return $this->render('NBPrincipalBundle::cv.html.twig', array('title'=>'CV'));
    }
}
