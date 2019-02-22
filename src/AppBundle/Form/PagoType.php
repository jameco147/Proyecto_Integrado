<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class PagoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fechaEstimada', DateType::class, [
                'widget' => 'single_text', 'required' => false
            ])
            ->add('fechaPago', DateType::class, [
                'widget' => 'single_text', 'required' => false
            ])->add('cantidad');
        $builder
        ->add('salvar',SubmitType::class, array(
            'label'=>"Guardar",
            'attr' => ['class' => 'botonjove']
        ));
        $builder
        ->add('anyadir',SubmitType::class, array(
            'label'=>"Añadir",
            'attr' => ['class' => 'botonjove']
        ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Pago'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_pago';
    }


}
