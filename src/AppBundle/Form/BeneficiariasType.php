<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class BeneficiariasType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('infanciaHombre')->add('infanciaMujer')->add('juventudHombre')
        ->add('juventudMujer')->add('adultosHombre')->add('adultosMujer')->add('mayoresHombre')
        ->add('mayoresMujer');
        $builder
        ->add('salvar',SubmitType::class,array('label'=>"Nueva Beneficiaria"));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Beneficiarias'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_beneficiarias';
    }


}
