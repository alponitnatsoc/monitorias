<?php

namespace solicitudMonitoria\EstudianteBundle\Controller;

use solicitudMonitoria\EstudianteBundle\Entity\Solicitudes;
use solicitudMonitoria\EstudianteBundle\Entity\Estudiantes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{  
    public function indexAction()
    {
        $idEstudiante = $this->getUser()->getId();
        $repository = $this->getDoctrine()->getRepository("solicitudMonitoriaEstudianteBundle:Estudiantes");
        $estudiante = $repository->find($idEstudiante);
        return $this->render('solicitudMonitoriaEstudianteBundle:Estudiante:index.html.twig',array('estudiante' => $estudiante));

    }
    public function informacionAction()
    {
        $idEstudiante = $this->getUser()->getId();
        $repository = $this->getDoctrine()->getRepository("solicitudMonitoriaEstudianteBundle:Estudiantes");
        $estudiante = $repository->find($idEstudiante);
        return $this->render('solicitudMonitoriaEstudianteBundle:Estudiante:informacion.html.twig',array('estudiante' => $estudiante));
    }
    
    public function actualizarestuAction()
    {
        $idEstudiante = $this->getUser()->getId();
        if (!$_POST){
            $repository = $this->getDoctrine()->getRepository("solicitudMonitoriaEstudianteBundle:Estudiantes");
            return $this->redirect ($this->generateURL('solicitud_monitoria_estudiante_informacion'));
        }
        
        $em=$this->getDoctrine()->getManager();
        $estudiante = $em->getRepository('solicitudMonitoriaEstudianteBundle:Estudiantes')->find($idEstudiante);
        //Modificar paramentros de estudiante.
        $estudiante->setId ($idEstudiante);
        $estudiante->setNombre($_POST["_nombre"]);
        if ($_POST["_tdocumento"][0]!="-"){
            $estudiante->setTipoDocumento($_POST["_tdocumento"]);
        }
        $estudiante->setNoDocumento($_POST["_ndocumento"]);
        $estudiante->setCorreo($_POST["_correo"]);
        $estudiante->setTelefono($_POST["_telefono"]);
        $estudiante->setSemestre($_POST["_semestre"]);
        $estudiante->setPromAcumulado($_POST["_promedio"]);
        
        $em->flush();
        return $this->redirect ($this->generateURL('solicitud_monitoria_estudiante_informacion'));
    }
    
    public function solicitarAction()
    {
        $idEstudiante = $this->getUser()->getId();
		$em = $this->getDoctrine()->getEntityManager();
        
        $q = "SELECT * FROM estudiantecurso,cursos,monitorias where estudiantecurso.idCurso = cursos.idCurso and estudiantecurso.idCurso = monitorias.idCurso and idEstudiante = ? and estudiantecurso.calificacion >= 3  order by NombreCurso ASC ";
        $connection = $em->getConnection();
        $statement = $connection->prepare($q);
        $statement->bindValue(1,$idEstudiante);
        $statement->execute();
        $estudiantemonitorias=$statement->fetchALL();
		
		$periodoAcaActual = $em->getRepository('solicitudMonitoriaCursosBundle:PeriodoAcademico')->find(1)->getPeriodoAcadActual();	

        $q2 = "SELECT * FROM solicitudes where idEstudiante = ? and PeriodoAcademico = ? order by idMonitoria ASC";
        $statement = $connection->prepare($q2);
        $statement->bindValue(1,$idEstudiante);
		$statement->bindValue(2,$periodoAcaActual);
        $statement->execute();
        $estudiantesolicitudes=$statement->fetchALL();
		
        return $this->render('solicitudMonitoriaEstudianteBundle:Estudiante:solicitar.html.twig',array('estudiantemonitorias' => $estudiantemonitorias,
                                                                                                       'estudiantesolicitudes' => $estudiantesolicitudes));
    }
    
    public function actualizarsoliAction()
    {
        $idEstudiante = $this->getUser()->getId();
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $periodoAcaActual = $em->getRepository('solicitudMonitoriaCursosBundle:PeriodoAcademico')->find(1)->getPeriodoAcadActual();	
        
        $_idMonitorias = array_keys($_POST);
        $_CantidadSolicitadas = array_values($_POST);
        for($i = 0; $i < count($_idMonitorias); ++$i) {
            if ($_CantidadSolicitadas[$i][0]!="-"){
                $q3 = "select idSolicitud from solicitudes where idEstudiante = ? and idMonitoria = ? and PeriodoAcademico = ?";
                $statement = $connection->prepare($q3);
                $statement->bindValue(1,$idEstudiante);
                $statement->bindValue(2,$_idMonitorias[$i]);	
				$statement->bindValue(3,$periodoAcaActual);
                $statement->execute();
                $idSolicitud = $statement->fetchALL();
                if ($idSolicitud){
                    $solicitud = $em->getRepository('solicitudMonitoriaEstudianteBundle:Solicitudes')->find($idSolicitud[0]);
                    if ($_CantidadSolicitadas[$i] == 0)
                        //$em->remove($solicitud);
                        $solicitud->setCantidadSolicitada ($_CantidadSolicitadas[$i]);
                    else{
                        $solicitud->setCantidadSolicitada ($_CantidadSolicitadas[$i]);
                    }
                    $em->flush();
                }else{
                    if ($_CantidadSolicitadas[$i] != 0){
                        $solicitud = new Solicitudes;
                        $solicitud->setCantidadSolicitada ($_CantidadSolicitadas[$i]);
                        $solicitud->setIdMonitoria ($_idMonitorias[$i]);
                        $solicitud->setIdEstudiante ($idEstudiante);
						$solicitud->setPeriodoAcademico ($periodoAcaActual);
                        $em->persist($solicitud);
                        $em->flush();
                    }
                }
            }
        }
        
       return $this->redirect ($this->generateURL('solicitud_monitoria_estudiante_solicitar'));
    }
    
}
