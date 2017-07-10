<?php

namespace AppBundle\Controller\Api;

use AppBundle\Entity\Empresa;
use AppBundle\Form\EmpresaType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EmpresaController extends Controller
{

	/**
     * @Route("/api/empresa/{id}")
     * @Method("GET")
     */
    public function showAction($id)
    {
        $empresa = $this->getDoctrine()
            ->getRepository('AppBundle:Empresa')
            ->find($id);
        
        $data = array(
            'nombre' => $empresa->getNombre(),
            'cuit' => $empresa->getCuit(),
            'direccion' => $empresa->getDireccion()
        );

        return new Response(json_encode($data), 200);
    }

	/**
	 * @Route("/api/empresa")
	 * @Method("Post")
	 */
	public function newAction(Request $request)
	{
		$data = json_decode($request->getContent(), true);

		$empresa = new Empresa();
		$form = $this->createForm(EmpresaType::class, $empresa);
		$form->submit($data);

		$em = $this->getDoctrine()->getManager();
		$em->persist($empresa);
		$em->flush();

		$response = new Response('worked', 201);
		$response->headers->set('Location', '/some/empresa/url');

		return $response;
	}
}