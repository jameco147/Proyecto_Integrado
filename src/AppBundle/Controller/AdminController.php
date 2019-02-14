<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Projecto;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class AdminController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('admin/login.html.twig');
    }

    /**
     * @Route("/registro", name="registro")
     */
    public function registroAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('admin/register.html.twig');
    }



}
