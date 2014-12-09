<?php

namespace NB\PrincipalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        /*echo exec("./test 3 5", $answer);
        var_dump($answer);
         * 
         */
        return $this->render('NBPrincipalBundle::acceuil.html.twig', array('title'=>'Site de Benjamin NEILZ'));
    }
    
    public function cvAction()
    {
        return $this->render('NBPrincipalBundle::cv.html.twig', array('title'=>'CV'));
    }
    
    public function adminAction()
    {
        return $this->render('NBPrincipalBundle::admin.html.twig', array('title'=>'CV'));
    }
    
    
}
