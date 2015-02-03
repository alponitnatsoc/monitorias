<?php

namespace solicitudMonitoria\CursosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PeriodoAcademico
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="solicitudMonitoria\CursosBundle\Entity\PeriodoAcademicoRepository")
 */
class PeriodoAcademico
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idPeriodoAcad", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="PeriodoAcadActual", type="integer")
     */
    private $periodoAcadActual;


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
     * Set periodoAcadActual
     *
     * @param integer $periodoAcadActual
     * @return PeriodoAcademico
     */
    public function setPeriodoAcadActual($periodoAcadActual)
    {
        $this->periodoAcadActual = $periodoAcadActual;

        return $this;
    }

    /**
     * Get periodoAcadActual
     *
     * @return integer 
     */
    public function getPeriodoAcadActual()
    {
        return $this->periodoAcadActual;
    }
}
