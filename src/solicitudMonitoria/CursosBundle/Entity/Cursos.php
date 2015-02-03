<?php

namespace solicitudMonitoria\CursosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cursos
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="solicitudMonitoria\CursosBundle\Entity\CursosRepository")
 */
class Cursos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCurso", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idCurso;

    /**
     * @var integer
     *
     * @ORM\Column(name="idSeccion", type="integer")
     */
    private $idSeccion;

    /**
     * @var string
     *
     * @ORM\Column(name="NombreCurso", type="string", length=100)
     */
    private $nombre;


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
     * Set idSeccion
     *
     * @param integer $idSeccion
     * @return Cursos
     */
    public function setIdSeccion($idSeccion)
    {
        $this->idSeccion = $idSeccion;

        return $this;
    }

    /**
     * Get idSeccion
     *
     * @return integer 
     */
    public function getIdSeccion()
    {
        return $this->idSeccion;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Cursos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }
}
