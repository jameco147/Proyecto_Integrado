<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TipoAdministracionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombre', ChoiceType::class, [
            'choices' => [
                'UE' => 'UE',
                'ESTATAL' => 'ESTATAL',
                'AUTONOMICA' => 'AUTONÓMICA',
                'PROVINCIAL' => 'PROVINCIAL',
                'LOCAL' => 'LOCAL',
            ],
            'choice_attr' => function($choiceValue, $key, $value) {
                // adds a class like attending_yes, attending_no, etc
                return ['class' => 'nombre_'.strtolower($key)];
            },
        ]);
        $builder
        ->add('salvar',SubmitType::class,array(
            'label'=>"Guardar",
            'attr' => ['class' => 'botonjove']
        ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\TipoAdministracion'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_tipoadministracion';
    }


}
