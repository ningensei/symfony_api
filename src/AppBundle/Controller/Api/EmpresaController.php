<?php

namespace AppBundle\Controller\Api;

use AppBundle\Entity\Empresa;
use AppBundle\Form\EmpresaType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EmpresaController extends Controller
{

	/**
     * @Route("/api/empresa")
     * @Method("GET")
     */
    public function listAction()
    {
        $empresas = $this->getDoctrine()
            ->getRepository('AppBundle:Empresa')
            ->findAll();
        $data = array('empresas' => array());
        
        foreach ($empresas as $empresa) {
            $data['empresas'][] = $this->serializeEmpresa($empresa);
        }

        $response = new JsonResponse($data, 200);
        
        return $response;
    }


	/**
     * @Route("/api/empresa/{id}", name="api_empresa_show")
     * @Method("GET")
     */
    public function showAction($id)
    {
        $empresa = $this->getDoctrine()
            ->getRepository('AppBundle:Empresa')
            ->find($id);

        if (!$empresa) {
            throw $this->createNotFoundException(sprintf(
                'No Empresa found by the id "%s"',
                $id
            ));
        }

        $data = $this->serializeEmpresa($empresa);
        $response = new JsonResponse($data, 200);

        return $response;
    }


	/**
	 * @Route("/api/empresa")
	 * @Method("POST")
	 */
	public function newAction(Request $request)
	{

		$empresa = new Empresa();
		$form = $this->createForm(EmpresaType::class, $empresa);
		$this->processForm($request, $form);

		$em = $this->getDoctrine()->getManager();
		$em->persist($empresa);
		$em->flush();

		$data = $this->serializeEmpresa($empresa);
        $response = new JsonResponse($data, 201);

		$empresaUrl = $this->generateUrl(
            'api_empresa_show',
            ['id' => $empresa->getId()]
        );

        $response->headers->set('Location', $empresaUrl);

		return $response;
	}


    /**
     * @Route("/api/empresa/{id}")
     * @Method("PUT", "PATCH")
     */
    public function updateAction($id, Request $request)
    {
        $empresa = $this->getDoctrine()
            ->getRepository('AppBundle:Empresa')
            ->find($id);
        
        if (!$empresa) {
            throw $this->createNotFoundException(sprintf(
                'No empresa found with id "%s"',
                $id
            ));
        }

        $form = $this->createForm(EmpresaType::class, $empresa);
        $this->processForm($request, $form);

        $em = $this->getDoctrine()->getManager();
        $em->persist($empresa);
        $em->flush();

        $data = $this->serializeEmpresa($empresa);
        $response = new JsonResponse($data, 200);

        return $response;
    }


    /**
     * @Route("/api/empresa/{id}")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
        $empresa = $this->getDoctrine()
            ->getRepository('AppBundle:Empresa')
            ->find($id);

        if ($empresa) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($empresa);
            $em->flush();
        }

        return new Response(null, 204);
    }


	private function serializeEmpresa(Empresa $empresa)
    {
        return array(
            'id' => $empresa->getId(),
            'nombre' => $empresa->getNombre(),
            'cuit' => $empresa->getCuit(),
            'direccion' => $empresa->getDireccion()
        );
    }


    private function processForm(Request $request, $form)
    {
        $data = json_decode($request->getContent(), true);

        // clear all fields unless request method is patch
        $clearMissing = $request->getMethod() != 'PATCH';

        $form->submit($data, $clearMissing);
    }
}