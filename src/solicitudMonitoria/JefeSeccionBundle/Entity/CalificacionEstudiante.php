<?php

namespace solicitudMonitoria\JefeSeccionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CalificacionEstudiante
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="solicitudMonitoria\JefeSeccionBundle\Entity\CalificacionEstudianteRepository")
 */
class CalificacionEstudiante
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCalificacion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NombreJefeSeccion", type="string", length=100)
     */
    private $nombreJefeSeccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idAsignacion", type="integer")
     */
    private $idAsignacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idComentario", type="integer")
     */
    private $idComentario;

    /**
     * @var string
     *
     * @ORM\Column(name="Calificacion", type="decimal")
     */
    private $calificacion;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreJefeSeccion
     *
     * @param string $nombreJefeSeccion
     * @return CalificacionEstudiante
     */
    public function setNombreJefeSeccion($nombreJefeSeccion)
    {
        $this->nombreJefeSeccion = $nombreJefeSeccion;

        return $this;
    }

    /**
     * Get nombreJefeSeccion
     *
     * @return string 
     */
    public function getNombreJefeSeccion()
    {
        return $this->nombreJefeSeccion;
    }

    /**
     * Set idAsignatura
     *
     * @param integer $idAsignacion
     * @return CalificacionEstudiante
     */
    public function setIdAsignacion($idAsignacion)
    {
        $this->idAsignacion = $idAsignacion;

        return $this;
    }

    /**
     * Get idAsignacion
     *
     * @return integer 
     */
    public function getIdAsignacion()
    {
        return $this->idAsignacion;
    }

    /**
     * Set idComentario
     *
     * @param integer $idComentario
     * @return CalificacionEstudiante
     */
    public function setIdComentario($idComentario)
    {
        $this->idComentario = $idComentario;

        return $this;
    }

    /**
     * Get idComentario
     *
     * @return integer 
     */
    public function getIdComentario()
    {
        return $this->idComentario;
    }

    /**
     * Set calificacion
     *
     * @param string $calificacion
     * @return CalificacionEstudiante
     */
    public function setCalificacion($calificacion)
    {
        $this->calificacion = $calificacion;

        return $this;
    }

    /**
     * Get calificacion
     *
     * @return string 
     */
    public function getCalificacion()
    {
        return $this->calificacion;
    }
}
