<?php

namespace AppBundle\Controller\Api;

use AppBundle\Entity\Empresa;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EmpresaController extends Controller
{
	/**
	 * @Route("/api/empresa")
	 * @Method("Post")
	 */
	public function newAction(Request $request)
	{
		$data = json_decode($request->getContent(), true);

		$empresa = new Empresa();
		$empresa->setNombre($data['nombre']);
		$empresa->setCuit($data['cuit']);
		$empresa->setDireccion($data['direccion']);

		$em = $this->getDoctrine()->getManager();
		$em->persist($empresa);
		$em->flush();

		return new Response('worked');
	}
}