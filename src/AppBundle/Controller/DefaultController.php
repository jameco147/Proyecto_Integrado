<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Projecto;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="menu")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("listadoProyectos", name="listadoProyectos")
     */
    public function proyectosAction(Request $request)
    {
        $proyectoRepository = $this->getDoctrine()->getRepository(Projecto::class);
        $proyectos = $proyectoRepository->findAll();
       return $this->render('listado/proyectos.html.twig', array('proyectos' => $proyectos));
    }

    /**
     * @Route("seleccionProyecto", name="seleccionProyecto")
     */
    public function seleccionAction(Request $request)
    {
        return $this->render('seleccionProyecto/seleccion.html.twig');
    }




}
