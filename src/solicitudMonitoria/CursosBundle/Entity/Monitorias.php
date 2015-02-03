<?php

namespace solicitudMonitoria\CursosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Monitorias
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="solicitudMonitoria\CursosBundle\Entity\MonitoriasRepository")
 */
class Monitorias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idMonitoria", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCurso", type="integer")
     */
    private $idCurso;

    /**
     * @var integer
     *
     * @ORM\Column(name="CantidadMonitorias", type="integer")
     */
    private $cantidadMonitorias;

    /**
     * @var string
     *
     * @ORM\Column(name="Horas", type="decimal")
     */
    private $horas;


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
     * Set idCurso
     *
     * @param integer $idCurso
     * @return Monitorias
     */
    public function setIdCurso($idCurso)
    {
        $this->idCurso = $idCurso;

        return $this;
    }

    /**
     * Get idCurso
     *
     * @return integer 
     */
    public function getIdCurso()
    {
        return $this->idCurso;
    }

    /**
     * Set cantidadMonitorias
     *
     * @param integer $cantidadMonitorias
     * @return Monitorias
     */
    public function setCantidadMonitorias($cantidadMonitorias)
    {
        $this->cantidadMonitorias = $cantidadMonitorias;

        return $this;
    }

    /**
     * Get cantidadMonitorias
     *
     * @return integer 
     */
    public function getCantidadMonitorias()
    {
        return $this->cantidadMonitorias;
    }

    /**
     * Set horas
     *
     * @param string $horas
     * @return Monitorias
     */
    public function setHoras($horas)
    {
        $this->horas = $horas;

        return $this;
    }

    /**
     * Get horas
     *
     * @return string 
     */
    public function getHoras()
    {
        return $this->horas;
    }
}
