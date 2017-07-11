<?php

namespace AppBundle\Controller\Web;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AbmController extends Controller
{

    /**
     * @Route("/", name="home")
     */
    public function listarAction()
    {
        return $this->render('listar.html.twig', [
            'current' => 'listar'
        ]);
    }


    /**
     * @Route("/agregar", name="agregar")
     */
    public function agregarAction()
    {
        return $this->render('form.html.twig', [
            'current' => 'agregar'
        ]);
    }


    /**
     * @Route("/editar/{id}", name="editar")
     */
    public function editarAction($id)
    {
        $empresa = $this->getDoctrine()
            ->getRepository('AppBundle:Empresa')
            ->find($id);

        return $this->render('form.html.twig', [
            'current' => 'editar',
            'empresa' => $empresa
        ]);
    }

}
