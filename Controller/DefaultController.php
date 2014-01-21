<?php

namespace Digitalshift\MailboxPersistenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DigitalshiftMailboxPersistenceBundle:Default:index.html.twig', array('name' => $name));
    }
}
