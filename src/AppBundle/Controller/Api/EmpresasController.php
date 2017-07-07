<?php

namespace AppBundle\Controller\Api;

class EmpresasController extends Controller
{
	/**
	 * @Route("/api/empresas")
	 * @Method("Post")
	 */
	public function newAction()
	{
		return new Response('Let\'s do this');
	}
}