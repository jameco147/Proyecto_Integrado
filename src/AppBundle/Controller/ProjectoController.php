<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Projecto;
use AppBundle\Form\ProjectoType;
use AppBundle\Entity\Beneficiarias;
use AppBundle\Form\BeneficiariasType;

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
        }else{
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

        return $this->redirectToRoute('homepage');
      }
      return $this->render('default/addBeneficiarias.html.twig',array('form'=>$form->createView()));
    }
}
