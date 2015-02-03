<?php

namespace solicitudMonitoria\EstudianteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solicitudes
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="solicitudMonitoria\EstudianteBundle\Entity\SolicitudesRepository")
 */
class Solicitudes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idSolicitud", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idSolicitud;

    /**
     * @var integer
     *
     * @ORM\Column(name="idEstudiante", type="integer")
     */
    private $idEstudiante;

    /**
     * @var integer
     *
     * @ORM\Column(name="idMonitoria", type="integer")
     */
    private $idMonitoria;

    /**
     * @var integer
     *
     * @ORM\Column(name="CantidadSolicitada", type="integer")
     */
    private $cantidadSolicitada;
	
	 /**
     * @var integer
     *
     * @ORM\Column(name="PeriodoAcademico", type="integer")
     */
    private $periodoAcademico;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->idSolicitud;
    }

    /**
     * Set idEstudiante
     *
     * @param integer $idEstudiante
     * @return Solicitudes 
     */
    public function setIdEstudiante($idEstudiante)
    {
        $this->idEstudiante = $idEstudiante;

        return $this;
    }

    /**
     * Get idEstudiante
     *
     * @return integer 
     */
    public function getIdEstudiante()
    {
        return $this->idEstudiante;
    }

    /**
     * Set idMonitoria
     *
     * @param integer $idMonitoria
     * @return Solicitudes
     */
    public function setIdMonitoria($idMonitoria)
    {
        $this->idMonitoria = $idMonitoria;

        return $this;
    }

    /**
     * Get idMonitoria
     *
     * @return integer 
     */
    public function getIdMonitoria()
    {
        return $this->idMonitoria;
    }

    /**
     * Set cantidadSolicitada
     *
     * @param integer $cantidadSolicitada
     * @return Solicitudes
     */
    public function setCantidadSolicitada($cantidadSolicitada)
    {
        $this->cantidadSolicitada = $cantidadSolicitada;

        return $this;
    }

    /**
     * Get cantidadSolicitada
     *
     * @return integer 
     */
    public function getCantidadSolicitada()
    {
        return $this->cantidadSolicitada;
    }
	
	    /**
     * Set periodoAcademico
     *
     * @param integer $periodoAcademico
     * @return Solicitudes
     */
    public function setPeriodoAcademico($periodoAcademico)
    {
        $this->periodoAcademico = $periodoAcademico;

        return $this;
    }

    /**
     * Get PeriodoAcademico
     *
     * @return integer 
     */
    public function getPeriodoAcademico()
    {
        return $this->periodoAcademico;
    }
	
}
