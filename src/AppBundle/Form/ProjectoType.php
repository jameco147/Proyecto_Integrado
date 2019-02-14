<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ProjectoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('tipoProyecto', ChoiceType::class, [
            'choices' => [
                'E-INCLUSION' => 'E-INCLUSION',
                'INNOVACIÓN SOCIAL Y EMPRENDIMIENTO SOCIAL' => 'INNOVACIÓN SOCIAL Y EMPRENDIMIENTO SOCIAL',
                'EDUCACIÓN PARA LA CIUDADANÍA Y EL DESARROLLO GLOBAL' => 'EDUCACIÓN PARA LA CIUDADANÍA Y EL DESARROLLO GLOBAL',
                'COOPERACIÓN PARA EL DESARROLLO' => 'COOPERACIÓN PARA EL DESARROLLO',
            ],
        ])
            ->add('codigoInter')->add('codigoAdministracion')->add('tecnicoConvocatoria')
        ->add('codigoContable')->add('publicoPrivada', ChoiceType::class, [
                'choices' => [
                    'PÚBLICO' => 'PÚBLICO',
                    'PRIVADA' => 'PRIVADA',
                ],
            ])
        ->add('nombre')->add('proyectoEnRed',ChoiceType::class, [
                'choices' => [
                    'SI' => true,
                    'NO' => false,
                ],
            ])
            ->add('entidadLider')->add('entidadesSociales')
        ->add('financiador')->add('contactoAdminist')->add('linkConvacatoria')
        ->add('importeSolicitado')->add('importeConcedido')->add('fechaEstimadaResolucion')
        ->add('fechaResolucion')->add('fechaIniEjecucion')->add('fechaFinEjecucion')
        ->add('duracionMeses')->add('fechaJustificacion1')->add('fechaJustificacion2')
        ->add('fechaRequi1')->add('fechaRequi2')->add('fechaLimiteEntrega')->add('periodoEjecucion')
        ->add('observaciones')->add('pendienteCobro')->add('resumen', TextareaType::class, [
            'attr' => ['class' => 'tinymce'],
        ])->add('actEmblematicas', TextareaType::class, [
            'attr' => ['class' => 'tinymce'],
        ]);
        
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
