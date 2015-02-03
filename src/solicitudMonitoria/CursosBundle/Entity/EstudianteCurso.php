<?php

namespace solicitudMonitoria\CursosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstudianteCurso
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="solicitudMonitoria\CursosBundle\Entity\EstudianteCursoRepository")
 */
class EstudianteCurso
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idEstudianteCurso", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="idEstudiante", type="integer")
     */
    private $idEstudiante;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCurso", type="integer")
     */
    private $idCurso;

    /**
     * @var string
     *
     * @ORM\Column(name="PeriodoAcademico", type="string", length=20)
     */
    private $periodoAcademico;

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
     * Set idEstudiante
     *
     * @param integer $idEstudiante
     * @return EstudianteCurso
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
     * Set idCurso
     *
     * @param integer $idCurso
     * @return EstudianteCurso
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
     * Set periodoAcademico
     *
     * @param string $periodoAcademico
     * @return EstudianteCurso
     */
    public function setPeriodoAcademico($periodoAcademico)
    {
        $this->periodoAcademico = $periodoAcademico;

        return $this;
    }

    /**
     * Get periodoAcademico
     *
     * @return string 
     */
    public function getPeriodoAcademico()
    {
        return $this->periodoAcademico;
    }

    /**
     * Set calificacion
     *
     * @param string $calificacion
     * @return EstudianteCurso
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
