<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use AppBundle\Entity\User;


class AdminController extends Controller
{
    /**
     * @Route("/admin",  name="inicio")
     */
    public function adminAction()
    {
        return new Response('<html><body>Admin page!</body></html>');
    }

    /**
     * @Route("/addUserAdminBase")
     */
    public function creater(){
        $usuario = new User();
        $usuario->setUsername("admin");
        $usuario->setPassword("alumno");
        $usuario->setEmail("manu@daw.com");
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($usuario);
        $em->flush();
        return $this->redirect($this->generateUrl('inicio'));

    }


}



?>
