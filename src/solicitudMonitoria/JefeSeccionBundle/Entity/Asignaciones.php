<?php

namespace solicitudMonitoria\JefeSeccionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asignaciones
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="solicitudMonitoria\JefeSeccionBundle\Entity\AsignacionesRepository")
 */
class Asignaciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAsignacion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var integer
     *
     * @ORM\Column(name="idSolicitud", type="integer")
     */
    private $idSolicitud;

    /**
     * @var integer
     *
     * @ORM\Column(name="CantidadAsignada", type="integer")
     */
    private $cantidadAsignada;


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
     * Set idSolicitud
     *
     * @param integer $idSolicitud
     * @return Asignaciones
     */
    public function setIdSolicitud($idSolicitud)
    {
        $this->idSolicitud = $idSolicitud;

        return $this;
    }

    /**
     * Get idSolicitud
     *
     * @return integer 
     */
    public function getIdSolicitud()
    {
        return $this->idSolicitud;
    }

    /**
     * Set cantidadAsignada
     *
     * @param integer $cantidadAsignada
     * @return Asignaciones
     */
    public function setCantidadAsignada($cantidadAsignada)
    {
        $this->cantidadAsignada = $cantidadAsignada;

        return $this;
    }

    /**
     * Get cantidadAsignada
     *
     * @return integer 
     */
    public function getCantidadAsignada()
    {
        return $this->cantidadAsignada;
    }
}
