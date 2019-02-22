<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ImpactoSocialType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('desarrolloRural')->add('desarrolloPersonal')->add('desarrolloProfesional')
            ->add('inclusionDigital')->add('sensibilizacionSocial')->add('insercionLaboral')
            ->add('socioeducativo')->add('sociosanitario')->add('viviendaSocial')
            ->add('otros');
        $builder
            ->add('salvar',SubmitType::class, array(
                'label'=>"Guardar",
                'attr' => ['class' => 'botonjove']
            ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ImpactoSocial'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_impactosocial';
    }


}
