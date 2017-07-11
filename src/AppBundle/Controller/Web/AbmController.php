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
     * @Route("/editar", name="editar")
     */
    public function editarAction()
    {
        return $this->render('form.html.twig', [
            'current' => 'editar'
        ]);
    }

}
