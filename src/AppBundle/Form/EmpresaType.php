<?php

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmpresaType extends AbstractType
{

	public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	$builder
    		->add('nombre', TextType::class)
    		->add('cuit', TextType::class)
    		->add('direccion', TextType::class)
    	;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
    	$resolver->setDefaults([
    		'data_class' => 'AppBundle\Entity\Empresa',
    	]);
    }

	public function getName()
	{
		return 'empresa';
	}
}