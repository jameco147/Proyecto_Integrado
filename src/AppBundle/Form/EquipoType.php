<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EquipoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('tipo',ChoiceType::class, [
            'choices' => [
                'Coordina' => 'Coordina',
                'Revisa' =>  'Revisa',
                'Apoya' => 'Apoya',
            ],
        ]);
        $builder->add('nombre');
        $builder
        ->add('salvar',SubmitType::class,array('label'=>"Guardar"));
        $builder
        ->add('anyadir',SubmitType::class,array('label'=>"Añadir"));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Equipo'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_equipo';
    }


}
