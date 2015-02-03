<?php

namespace solicitudMonitoria\JefeSeccionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use solicitudMonitoria\JefeSeccionBundle\Entity\Asignaciones;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $idJefeSeccion = $this->getUser()->getId();
        $repository = $this->getDoctrine()->getRepository("solicitudMonitoriaJefeSeccionBundle:JefesSecciones");
        $jefeSeccion = $repository->find($idJefeSeccion);
        
        $em = $this->getDoctrine()->getManager();
        
        $q = "SELECT NombreSeccion FROM seccion where idSeccion = ?";
        $connection = $em->getConnection();
        $statement = $connection->prepare($q);
        $statement->bindValue(1,$jefeSeccion->getIdSeccion());
        $statement->execute();
        $nombreSeccion=$statement->fetchALL()[0]['NombreSeccion'];
        
        return $this->render('solicitudMonitoriaJefeSeccionBundle:jefeSeccion:index.html.twig',array('jefeSeccion' => $jefeSeccion,'nombreSeccion'=> $nombreSeccion));
    }
    
     public function monitoriasAction()
    {
        $idJefeSeccion = $this->getUser()->getId();
        $repository = $this->getDoctrine()->getRepository("solicitudMonitoriaJefeSeccionBundle:JefesSecciones");
        $jefeSeccion = $repository->find($idJefeSeccion);
        
        $em = $this->getDoctrine()->getManager();
        $q = "SELECT * FROM cursos,monitorias where cursos.idCurso = monitorias.idCurso and cursos.idSeccion = ? order by cursos.NombreCurso ASC";
        $connection = $em->getConnection();
        $statement = $connection->prepare($q);
        $statement->bindValue(1,$jefeSeccion->getIdSeccion());
        $statement->execute();
        $monitorias=$statement->fetchALL();
        
        return $this->render('solicitudMonitoriaJefeSeccionBundle:jefeSeccion:monitorias.html.twig',array('monitorias' => $monitorias));
    }
    
    public function actualizarmoniAction()
    {
        if ($_POST){
            $_values = array_values($_POST);
             for($i = 0; $i < count($_values); $i = $i + 3) {
                    $_idCurso = $_values[$i];
                    $_horas = $_values[$i+1];
                    $_cantidad = $_values[$i+2];
                    $em = $this->getDoctrine()->getManager();
                    
                    $q = "SELECT idMonitoria FROM monitorias where monitorias.idCurso = ?";
                    $connection = $em->getConnection();
                    $statement = $connection->prepare($q);
                    $statement->bindValue(1,$_idCurso);
                    $statement->execute();
                    $idMonitoria=$statement->fetchALL()[0]['idMonitoria'];
                    
                    $repository = $this->getDoctrine()->getRepository("solicitudMonitoriaCursosBundle:Monitorias");
                    $monitoria = $repository->find($idMonitoria);
                    
                    $monitoria->setHoras ($_horas);
                    $monitoria->setCantidadMonitorias ($_cantidad);
                    
                    $em->flush();
             }
        }
        return $this->redirect ($this->generateURL('solicitud_monitoria_jefe_seccion_monitorias'));
    }
    
    public function asignacionesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        
        $periodoAcaActual = $em->getRepository('solicitudMonitoriaCursosBundle:PeriodoAcademico')->find(1)->getPeriodoAcadActual();	
        $idSeccion = $em->getRepository("solicitudMonitoriaJefeSeccionBundle:JefesSecciones")->find($this->getUser()->getId())->getIdSeccion();

        $q = "SELECT * FROM estudiantes,estudiantecurso,cursos,monitorias,solicitudes 
                        where estudiantes.idEstudiante = estudiantecurso.idEstudiante 
                        and estudiantecurso.idCurso = cursos.idCurso
                        and cursos.idCurso = monitorias.idCurso
                        and solicitudes.idMonitoria = monitorias.idMonitoria
                        and solicitudes.idEstudiante = estudiantes.idEstudiante
                        and solicitudes.PeriodoAcademico = ? 
                        and cursos.idSeccion = ?
                        ";
     
        $statement = $connection->prepare($q);
        $statement->bindValue(1,$periodoAcaActual);
        $statement->bindValue(2,$idSeccion);
        $statement->execute();
        $solicitudes=$statement->fetchALL();
        
        $q1 = "SELECT * FROM asignaciones,solicitudes 
                where asignaciones.idSolicitud = solicitudes.idSolicitud
                and solicitudes.PeriodoAcademico = ?
                ";
        $statement = $connection->prepare($q1);
        $statement->bindValue(1,$periodoAcaActual);
        $statement->execute();
        $asignaciones=$statement->fetchALL();
        
        $q2 = "SELECT monitorias.idMonitoria,sum(CantidadAsignada) as total FROM cursos,monitorias,solicitudes,asignaciones
                where cursos.idCurso = monitorias.idCurso
                and monitorias.idMonitoria = solicitudes.idMonitoria
                and asignaciones.idSolicitud = solicitudes.idSolicitud
                and solicitudes.PeriodoAcademico = ?
                group by monitorias.idMonitoria
                ";
        $statement = $connection->prepare($q2);
        $statement->bindValue(1,$periodoAcaActual);
        $statement->execute();
        $monitorias1=$statement->fetchALL();
        
        $q2 = "SELECT * FROM cursos,monitorias
                where cursos.idCurso = monitorias.idCurso
                group by monitorias.idMonitoria
                ";
                
        $statement = $connection->prepare($q2);
        $statement->execute();
        $monitorias=$statement->fetchALL();
        
        $q3 = "SELECT solicitudes.idEstudiante,avg(Calificacion) as promedio FROM calificacionestudiante,asignaciones,solicitudes 
                        where calificacionestudiante.idAsignacion = asignaciones.idAsignacion 
                        and asignaciones.idSolicitud = solicitudes.idSolicitud
                        and calificacionestudiante.Calificacion != 0 group by solicitudes.idEstudiante";
        $statement = $connection->prepare($q3);
        $statement->execute();
        $promedios=$statement->fetchALL();
        
        
        return $this->render('solicitudMonitoriaJefeSeccionBundle:jefeSeccion:asignaciones.html.twig',array ('solicitudes' => $solicitudes,'asignaciones' => $asignaciones,'monitorias' => $monitorias,'monitorias1' => $monitorias1, 'promedios'=>$promedios));
    }
    public function actualizarasignaAction()
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $periodoAcaActual = $em->getRepository('solicitudMonitoriaCursosBundle:PeriodoAcademico')->find(1)->getPeriodoAcadActual();	
        
        $_idSolicitud = array_keys($_POST);
        $_CantidadAsignada = array_values($_POST);
        for($i = 0; $i < count($_idSolicitud); ++$i) {
            if ($_CantidadAsignada[$i][0]!="-"){
                $q3 = "select idAsignacion from asignaciones where asignaciones.idSolicitud = ?";
                $statement = $connection->prepare($q3);
                $statement->bindValue(1,$_idSolicitud[$i]);
                $statement->execute();
                $idAsignacion = $statement->fetchALL();
                if ($idAsignacion){
                    $idAsignacion[0];
                    $asignacion = $em->getRepository('solicitudMonitoriaJefeSeccionBundle:Asignaciones')->find($idAsignacion[0]['idAsignacion']);
                    if ($_CantidadAsignada[$i] == 0)
                        $em->remove($asignacion);
                    else{
                        $asignacion->setCantidadAsignada ($_CantidadAsignada[$i]);
                    }
                    $em->flush();
                }else{
                    if ($_CantidadAsignada[$i] != 0){
                        $asignacion = new Asignaciones;
                        $asignacion->setCantidadAsignada ($_CantidadAsignada[$i]);
                        $asignacion->setIdSolicitud ($_idSolicitud[$i]);
                        $em->persist($asignacion);
                        $em->flush();
                    }
                }
            }
        }
        
       return $this->redirect ($this->generateURL('solicitud_monitoria_jefe_seccion_asignaciones'));
    }
    
    public function estudianteAction($idEstudiante)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $periodoAcaActual = $em->getRepository('solicitudMonitoriaCursosBundle:PeriodoAcademico')->find(1)->getPeriodoAcadActual();	
        
        
        $q = "SELECT * FROM estudiantes,estudiantecurso,cursos,monitorias,solicitudes,asignaciones
                        where estudiantes.idEstudiante = estudiantecurso.idEstudiante 
                        and estudiantecurso.idCurso = cursos.idCurso
                        and cursos.idCurso = monitorias.idCurso
                        and solicitudes.idMonitoria = monitorias.idMonitoria
                        and solicitudes.idEstudiante = estudiantes.idEstudiante
                        and asignaciones.idSolicitud = solicitudes.idSolicitud
                        and solicitudes.idEstudiante = ?
                        order by solicitudes.PeriodoAcademico
                        ";
     
        $statement = $connection->prepare($q);
        $statement->bindValue(1,$idEstudiante);
        $statement->execute();
        $asignaciones=$statement->fetchALL();
        
        
        $q2 = "SELECT * FROM calificacionestudiante,asignaciones,solicitudes where calificacionestudiante.idAsignacion = asignaciones.idAsignacion 
                        and asignaciones.idSolicitud = solicitudes.idSolicitud 
                        and solicitudes.idEstudiante = ? ";
        $statement = $connection->prepare($q2);
        $statement->bindValue(1,$idEstudiante);
        $statement->execute();
        $calificacionesestudiante=$statement->fetchALL();
        
        $q3 = "SELECT avg(Calificacion) as promedio FROM calificacionestudiante,asignaciones,solicitudes where calificacionestudiante.idAsignacion = asignaciones.idAsignacion 
                        and asignaciones.idSolicitud = solicitudes.idSolicitud 
                        and solicitudes.idEstudiante = ? ";
        $statement = $connection->prepare($q3);
        $statement->bindValue(1,$idEstudiante);
        $statement->execute();
        $promedio=$statement->fetchALL()[0]['promedio'];
        
        
        $q1 = "SELECT * FROM estudiantes where estudiantes.idEstudiante = ? ";
     
        $statement = $connection->prepare($q1);
        $statement->bindValue(1,$idEstudiante);
        $statement->execute();
        $iestudiante=$statement->fetchALL()[0];
       
       
       return $this->render('solicitudMonitoriaJefeSeccionBundle:jefeSeccion:estudiante.html.twig',array(   'asignaciones' => $asignaciones,
                                                                                                            'iestudiante' => $iestudiante,
                                                                                                            'periodoAcaActual' => $periodoAcaActual,
                                                                                                            'promedio' => $promedio,
                                                                                                            'calificacionesestudiante' => $calificacionesestudiante));
    
    }
    
    public function calificacionAction()
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $periodoAcaActual = $em->getRepository('solicitudMonitoriaCursosBundle:PeriodoAcademico')->find(1)->getPeriodoAcadActual();	
        
       
       
        return $this->render('solicitudMonitoriaJefeSeccionBundle:jefeSeccion:calificacion.html.twig');
 
    }
    
}
