<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TipoFinanciacionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombre',ChoiceType::class, [
            'choices' => [
                'SUBVENCIÓN' => 'SUBVENCIÓN',
                'VENTA' => 'VENTA',
                'RSC' => 'RSC',
                'CONVENIO' => 'CONVENIO',
            ],
        ]);
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
            'data_class' => 'AppBundle\Entity\TipoFinanciacion'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_tipofinanciacion';
    }


}
