<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class PoblacionVulnerableType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('exclusionSocial')->add('mayores')->add('mujeres')->add('ninyos',CheckboxType::class,array('label'=>'Niños', 'required'=>false))
        ->add('jovenes',CheckboxType::class,array('label'=>'Jóvenes', 'required'=>false))->add('migrantes')->add('otros')
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
            'data_class' => 'AppBundle\Entity\PoblacionVulnerable'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_poblacionvulnerable';
    }


}
