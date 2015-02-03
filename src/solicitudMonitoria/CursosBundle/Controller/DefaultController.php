<?php

namespace solicitudMonitoria\CursosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM;


class DefaultController extends Controller
{
   
    public function cursosAction()
    {
        //DEFINIMOS LA CONSULTA
        $q = "SELECT * FROM solicitudes where idEstudiante = 3";
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare($q);
        $statement->execute();
        $cursos=$statement->fetchALL();
        return $this->render('solicitudMonitoriaCursosBundle::cursos.html.twig', array('cursos' => $cursos));
    }
    
}
