<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class EstadoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombre',ChoiceType::class, [
            'choices' => [
                'CONCEDIDA' => 'CONCEDIDA',
                'DESCARTADA' => 'DESCARTADA',
                'DENEGADA' => 'DENEGADA',
                'PRESENTADA' => 'PRESENTADA',
                'EN PROCESO' => 'EN PROCESO',
                'JUSTIFICANDO' => 'JUSTIFICANDO',
            ],
        ])
            ->add('salvar',SubmitType::class,array('label'=>"Guardar"));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Estado'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_estado';
    }


}
