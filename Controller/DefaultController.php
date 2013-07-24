<?php

namespace Josaliba\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/blog")
     * @Template()
     */
    public function indexAction()
    {   $name="joseph";
        return array('name' => $name);
    }
}
