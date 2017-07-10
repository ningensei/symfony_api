<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmpresaType extends AbstractType
{

	public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	$builder
    		->add('nombre', 'text')
    		->add('cuit', 'text')
    		->add('direccion', 'text')
    	;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
    	$resolver->setDefaults([
    		'data_class' => Empresa::class,
    	]);
    }

	public function getName()
	{
		return 'empresa';
	}
}