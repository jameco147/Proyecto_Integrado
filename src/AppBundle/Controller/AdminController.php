<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Projecto;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class AdminController extends Controller
{
    /**
     * @Route("/login", name="admin")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('admin/login.html.twig');
    }



}
