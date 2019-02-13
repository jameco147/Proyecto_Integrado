<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;

class ProjectoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('codigoInter')->add('codigoAdministracion')->add('tecnicoConvocatoria')
        ->add('codigoContable')->add('publicoPrivada')
        ->add('nombre')->add('proyectoEnRed')->add('entidadLider')->add('entidadesSociales')
        ->add('financiador')->add('contactoAdminist')->add('linkConvacatoria')
        ->add('importeSolicitado')->add('importeConcedido')->add('fechaEstimadaResolucion')
        ->add('fechaResolucion')->add('fechaIniEjecucion')->add('fechaFinEjecucion')
        ->add('duracionMeses')->add('fechaJustificacion1')->add('fechaJustificacion2')
        ->add('fechaRequi1')->add('fechaRequi2')->add('fechaLimiteEntrega')->add('periodoEjecucion')
        ->add('observaciones');
        
        /*->add('tipoAdministracion')*/
       /* ->add('tipoFinanciacion')->add('estado')->add('planEstrategico')->add('coordina')*/
       /*->add('revisa')->add('apoya')/->add('poblaVulnerable')->add('impactoSocial');*/
        
       // $builder->add('beneficiaria');

        $builder->add('salvar',SubmitType::class,array('label'=>"Nuevo Proyecto"));


    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Projecto'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_projecto';
    }


}
