<?php

namespace AppBundle\Controller;

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
use AppBundle\Form\Prgo_PagoType;
class ProjectoController extends Controller
{
    /**
     * @Route("/{estado}/{proy}", name="homepage")
     */
    public function indexAction(Request $request,$estado=null,$proy=null)
    {
        if($estado==null){
          return $this->projectoAction($request,$proy);
        }elseif ($estado=='beneficiarias') {
          return $this->beneficiariasAction($request,$proy);
        }
        elseif ($estado=='pago') {
          return $this->pagoAction($request,$proy);
        }
        else{
          return $this->redirectToRoute('homepage');
        }

    }
    private function projectoAction($request,$proy){

        $proye = new Projecto();
        $form = $this->createForm(ProjectoType::class,$proye);
        $form->handleRequest($request);
     

        if ($form->isSubmitted() && $form->isValid()) {

          $entityManager = $this->getDoctrine()->getManager();
          $entityManager->persist($proye);
          $entityManager->flush();

          return $this->redirectToRoute('homepage',array('estado'=>'beneficiarias', 'proy'=>$proye->getId()));
        }
        return $this->render('default/addProj.html.twig',array('form'=>$form->createView()));
    }
    private function beneficiariasAction($request,$proy){

      $bene = new Beneficiarias();
      $form = $this->createForm(BeneficiariasType::class,$bene);
      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($bene);

        $repository = $this->getDoctrine()->getRepository(Projecto::class);
        $pro = $repository->findById($proy);

        $entityManager->flush();
        $pro[0]->setBeneficiaria($bene);
        $entityManager->flush();

        return $this->redirectToRoute('homepage',array('estado'=>'pago', 'proy'=>$proy));

      }
      return $this->render('default/addBeneficiarias.html.twig',array('form'=>$form->createView()));
    }

    private function pagoAction($request,$proy){

      $pago = new Pago();
      $form = $this->createForm(PagoType::class,$pago);
      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {

        $prog_pago = new Prog_Pago();

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($pago);
        $entityManager->persist($prog_pago);


        $repository = $this->getDoctrine()->getRepository(Projecto::class);

        $pro = $repository->findById($proy);

        $pro[0]->addProgPago( $prog_pago);

        $prog_pago->setIdProjecto($pro[0]);
        $prog_pago->setIdPago($pago);

        $entityManager->flush();

        return $this->redirectToRoute('homepage');
      }
      return $this->render('default/addPago.html.twig',array('form'=>$form->createView()));
    }
}
