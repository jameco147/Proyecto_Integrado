<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Equipo;
use AppBundle\Entity\ImpactoSocial;
use AppBundle\Form\EquipoType;
use AppBundle\Form\ImpactoSocialType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Projecto;
use AppBundle\Form\ProjectoType;
use AppBundle\Entity\Beneficiarias;
use AppBundle\Form\BeneficiariasType;
use AppBundle\Entity\Pago;
use AppBundle\Form\PagoType;
use AppBundle\Entity\Prog_Pago;
use AppBundle\Form\Prog_PagoType;
use AppBundle\Entity\TipoAdministracion;
use AppBundle\Form\TipoAdministracionType;
use AppBundle\Entity\TipoFinanciacion;
use AppBundle\Form\TipoFinanciacionType;
use AppBundle\Entity\PlanEstrategico;
use AppBundle\Form\PlanEstrategicoType;
use AppBundle\Entity\Estado;
use AppBundle\Form\EstadoType;
use AppBundle\Entity\PoblacionVulnerable;
use AppBundle\Form\PoblacionVulnerableType;

/**
 * @Route("/nuevoProyecto")
 */

class ProjectoController extends Controller
{
    /**
     * @Route("/{estado}/{proy}", name="homepage")
     */
    public function indexAction(Request $request, $estado=null, $proy=null)
    {
        dump($estado);

        if ($estado==null || $estado=="null") {
            return $this->projectoAction($request, $proy);
        } elseif ($estado=='beneficiarias') {
            return $this->beneficiariasAction($request, $proy);
        } elseif ($estado=='pago') {
            return $this->pagoAction($request, $proy);
        } elseif ($estado=='impactoSocial') {
            return $this->impactoSocialAction($request, $proy);
        } elseif ($estado=='tipoAdministracion') {
            return $this->tipoAdminstraAction($request, $proy);
        } elseif ($estado=='tipoFinanciacion') {
            return $this->tipoFinanciaAction($request, $proy);
        } elseif ($estado=='planEstrategico') {
            return $this->planEstrategicoAction($request, $proy);
        } elseif ($estado=='estado') {
            return $this->estadoAction($request, $proy);
        } elseif ($estado=='poblacionVulnerable') {
            return $this->poblacionVulnerableAction($request, $proy);
        }
        elseif ($estado=='delete') {
            return $this->deleteAction($proy);
        }
        elseif ($estado == 'finalizar')
        {
            return $this->finalizarAction($proy);
        } else {
            return $this->redirectToRoute('homepage');
        }
    }
    
    private function projectoAction($request, $proy)
    {
        $edit = false;

        if ($proy === null) {
            $proye = new Projecto();
            $form = $this->createForm(ProjectoType::class, $proye);
        } else {
            $repository = $this->getDoctrine()->getRepository(Projecto::class);
            $proye = $repository->findById($proy);
            $form = $this->createForm(ProjectoType::class, $proye[0]);
            $edit = true;
        }
        $form->handleRequest($request);
     
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            if ($edit === false) {
                $entityManager->persist($proye);
            } else {
                $entityManager->persist($proye[0]);
            }
            
            $entityManager->flush();

            if ($edit === false) {
                return $this->redirectToRoute('homepage', array('estado'=>'beneficiarias', 'proy'=>$proye->getId()));
            } else {
                return $this->redirectToRoute('homepage', array('estado'=>'beneficiarias', 'proy'=>$proye[0]->getId()));
            }
        }
        return $this->render('default/addProj.html.twig', array('form'=>$form->createView()));
    }
    private function beneficiariasAction($request, $proy)
    {
        $edit = false;
        $repository = $this->getDoctrine()->getRepository(Projecto::class);
        $proye = $repository->findById($proy);

        if ($proye[0]->getBeneficiaria() === null) {
            $bene = new Beneficiarias();
            $form = $this->createForm(BeneficiariasType::class, $bene);
        } else {
            $bene = $proye[0]->getBeneficiaria();
            $form = $this->createForm(BeneficiariasType::class, $proye[0]->getBeneficiaria());
            $edit = true;
        }
               
       
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            if ($edit === false) {
                $entityManager->persist($bene);
                $repository = $this->getDoctrine()->getRepository(Projecto::class);
                $pro = $repository->findById($proy);

                $entityManager->flush();
                $pro[0]->setBeneficiaria($bene);
            } else {
                $entityManager->persist($bene);

            }
   
            $entityManager->flush();
            return $this->redirectToRoute('homepage', array('estado'=>'pago', 'proy'=>$proy));
           
        }
        return $this->render('default/addBeneficiarias.html.twig', array('form'=>$form->createView(), 'proy'=>$proy));
    }


    private function pagoAction($request, $proy)
    {
        $pago = new Pago();
        $form = $this->createForm(PagoType::class, $pago);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $prog_pago = new Prog_Pago();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pago);
            $entityManager->persist($prog_pago);


            $repository = $this->getDoctrine()->getRepository(Projecto::class);

            $pro = $repository->findById($proy);

            $pro[0]->addProgPago($prog_pago);

            $prog_pago->setIdProjecto($pro[0]);
            $prog_pago->setIdPago($pago);

            $entityManager->flush();

            return $this->redirectToRoute('homepage', array('estado'=>'impactoSocial', 'proy'=>$proy));
        }
        return $this->render('default/addPago.html.twig', array('form'=>$form->createView(), 'proy'=>$proy));
    }


    private function impactoSocialAction($request, $proy)
    {
        $impacto = new ImpactoSocial();
        $form = $this->createForm(ImpactoSocialType::class, $impacto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($impacto);

            $repository = $this->getDoctrine()->getRepository(Projecto::class);
            $pro = $repository->findById($proy);

            $entityManager->flush();
            $pro[0]->setImpactoSocial($impacto);
            $entityManager->flush();

            return $this->redirectToRoute('homepage', array('estado'=>'tipoAdministracion', 'proy'=>$proy));
        }
        return $this->render('default/addImpactoSocial.html.twig', array('form'=>$form->createView(),'proy'=>$proy));
    }

   
    private function tipoAdminstraAction($request, $proy)
    {
        $tipoAdmi= new TipoAdministracion();
        $form = $this->createForm(TipoAdministracionType::class, $tipoAdmi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tipoAdmi);

            $repository = $this->getDoctrine()->getRepository(Projecto::class);
            $pro = $repository->findById($proy);

            $entityManager->flush();
            $pro[0]->setTipoAdministracion($tipoAdmi);
            $entityManager->flush();

            return $this->redirectToRoute('homepage', array('estado'=>'tipoFinanciacion', 'proy'=>$proy));
        }
        return $this->render('default/addTipoAdministracion.html.twig', array('form'=>$form->createView(),'proy'=>$proy));
    }

    private function tipoFinanciaAction($request, $proy)
    {
        $tipoFinan= new TipoFinanciacion();
        $form = $this->createForm(TipoFinanciacionType::class, $tipoFinan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tipoFinan);

            $repository = $this->getDoctrine()->getRepository(Projecto::class);
            $pro = $repository->findById($proy);

            $entityManager->flush();
            $pro[0]->setTipoFinanciacion($tipoFinan);
            $entityManager->flush();

            return $this->redirectToRoute('homepage', array('estado'=>'planEstrategico', 'proy'=>$proy));
        }
        return $this->render('default/addTipoFinanciacion.html.twig', array('form'=>$form->createView(),'proy'=>$proy));
    }

    private function planEstrategicoAction($request, $proy)
    {
        $planEstr= new PlanEstrategico();
        $form = $this->createForm(PlanEstrategicoType::class, $planEstr);
        $form->handleRequest($request);
  
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($planEstr);
  
            $repository = $this->getDoctrine()->getRepository(Projecto::class);
            $pro = $repository->findById($proy);
  
            $entityManager->flush();
            $pro[0]->setPlanEstrategico($planEstr);
            $entityManager->flush();
  
            return $this->redirectToRoute('homepage', array('estado'=>'estado', 'proy'=>$proy));
        }
        return $this->render('default/addPlanEstrategico.html.twig', array('form'=>$form->createView(),'proy'=>$proy));
    }

    private function estadoAction($request, $proy)
    {
        $estado= new Estado();
        $form = $this->createForm(EstadoType::class, $estado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($estado);

            $repository = $this->getDoctrine()->getRepository(Projecto::class);
            $pro = $repository->findById($proy);

            $entityManager->flush();
            $pro[0]->setEstado($estado);
            $entityManager->flush();

            return $this->redirectToRoute('homepage', array('estado'=>'poblacionVulnerable', 'proy'=>$proy));
        }
        return $this->render('default/addEstado.html.twig', array('form'=>$form->createView(),'proy'=>$proy));
    }


    private function poblacionVulnerableAction($request, $proy)
    {
        $pob_vul= new PoblacionVulnerable();
        $form = $this->createForm(PoblacionVulnerableType::class, $pob_vul);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pob_vul);

            $repository = $this->getDoctrine()->getRepository(Projecto::class);
            $pro = $repository->findById($proy);

            $entityManager->flush();
            $pro[0]->setPoblaVulnerable($pob_vul);
            $entityManager->flush();

            return $this->redirectToRoute('menu');
        }
        return $this->render('default/addPoblacionVulnerable.html.twig', array('form'=>$form->createView(),'proy'=>$proy));
    }

    /*
    PREGUNTAR A PACO
    private function equipoAction($request, $proy)
    {
        $equipo= new Equipo();
        $form = $this->createForm(EquipoType::class, $equipo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($equipo);

            $repository = $this->getDoctrine()->getRepository(Projecto::class);
            $pro = $repository->findById($proy);

            $entityManager->flush();
            $pro[0]->setCoordina($equipo);
            $pro[0]->setRevisa($equipo);
            $pro[0]->setApoya($equipo);
            $entityManager->flush();

            return $this->redirectToRoute('homepage');
        }
        return $this->render('default/addEquipo.html.twig', array('form'=>$form->createView()));
    }
    */

    private function finalizarAction($proy)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Projecto::class);
        $pro = $repository->findById($proy);

        if ($pro[0]->getBeneficiaria() === null) {
            $bene = new Beneficiarias();
            $entityManager->persist($bene);
            $pro[0]->setBeneficiaria($bene);
        }
        if (count($pro[0]->getProgPago())=== 0) {
            $pago = new Pago();
            $prog_pago = new Prog_Pago();

            $entityManager->persist($pago);
            $entityManager->persist($prog_pago);

            $pro[0]->addProgPago($prog_pago);

            $prog_pago->setIdProjecto($pro[0]);
            $prog_pago->setIdPago($pago);
        }

        if ($pro[0]->getImpactoSocial() === null) {
            $imp = new ImpactoSocial();
            $entityManager->persist($imp);
            $pro[0]->setImpactoSocial($imp);
        }

        if ($pro[0]->getTipoAdministracion() === null) {
            $tipo = new TipoAdministracion();
            $entityManager->persist($tipo);
            $pro[0]->setTipoAdministracion($tipo);
        }

        if ($pro[0]->getTipoFinanciacion() === null) {
            $tipoF = new TipoFinanciacion();
            $entityManager->persist($tipoF);
            $pro[0]->setTipoFinanciacion($tipoF);
        }


        if ($pro[0]->getPlanEstrategico() === null) {
            $plan = new PlanEstrategico();
            $entityManager->persist($plan);
            $pro[0]->setPlanEstrategico($plan);
        }

        if ($pro[0]->getEstado() === null) {
            $est = new Estado();
            $entityManager->persist($est);
            $pro[0]->setEstado($est);
        }
        if ($pro[0]->getPoblaVulnerable() === null) {
            $pob = new PoblacionVulnerable();
            $entityManager->persist($pob);
            $pro[0]->setPoblaVulnerable($pob);
        }


        $entityManager->flush();
        return $this->redirectToRoute('homepage');
    }


    public function deleteAction($proy)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Projecto::class);
        $pro = $repository->findById($proy);


       $entityManager->remove($pro[0]);
       $entityManager->flush();

       return $this->redirectToRoute('seleccionProyecto');
    }



}
