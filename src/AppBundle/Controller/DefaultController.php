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
     * @Route("listadoProyectos/{tipo}", name="listadoProyectos")
     */
    public function proyectosAction(Request $request,$tipo)
    {
        $proyectoRepository = $this->getDoctrine()->getRepository(Projecto::class);
        if($tipo == 1){
            $proyectos = $proyectoRepository->findByTipoProyecto('E-INCLUSION');
            if ($this->redirectAction($proyectos)){
                return $this->redirectToRoute('menu');
            }
            return $this->render('listado/proyectos.html.twig', array('proyectos' => $proyectos, 'tipo' => $tipo));
        } else if($tipo == 2){
            $proyectos = $proyectoRepository->findByTipoProyecto('INNOVACIÓN SOCIAL Y EMPRENDIMIENTO SOCIAL');
            if ($this->redirectAction($proyectos)){
                return $this->redirectToRoute('menu');
            }
            return $this->render('listado/proyectos.html.twig', array('proyectos' => $proyectos, 'tipo' => $tipo));
        } else if($tipo == 3){
            $proyectos = $proyectoRepository->findByTipoProyecto('EDUCACIÓN PARA LA CUIDADANÍA');
            if ($this->redirectAction($proyectos)){
                return $this->redirectToRoute('menu');
            }
            return $this->render('listado/proyectos.html.twig', array('proyectos' => $proyectos, 'tipo' => $tipo));
        } else if($tipo == 4){
            $proyectos = $proyectoRepository->findByTipoProyecto('COOPERACIÓN PARA EL DESARROLLO');
            if ($this->redirectAction($proyectos)){
                return $this->redirectToRoute('menu');
            }
            return $this->render('listado/proyectos.html.twig', array('proyectos' => $proyectos, 'tipo' => $tipo));
        }

    }

    /**
     * @Route("seleccionProyecto", name="seleccionProyecto")
     */
    public function seleccionAction(Request $request)
    {
        $proyectoRepository = $this->getDoctrine()->getRepository(Projecto::class);
        $proyectos = $proyectoRepository->findAll();
        //var_dump($proyectos);
        return $this->render('seleccionProyecto/seleccion.html.twig', array('proyectos' => $proyectos));
    }

    private function redirectAction($proyectos){
        if($proyectos === []){
            return true;
        }
    }


}
