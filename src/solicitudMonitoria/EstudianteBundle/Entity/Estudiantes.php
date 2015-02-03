<?php

namespace solicitudMonitoria\EstudianteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estudiantes
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="solicitudMonitoria\EstudianteBundle\Entity\EstudiantesRepository")
 */
class Estudiantes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idEstudiante", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idEstudiante;

        /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=200)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="NoDocumento", type="string", length=11)
     */
    private $noDocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="TipoDocumento", type="string", length=20)
     */
    private $tipoDocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="Correo", type="string", length=200)
     */
    private $correo;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono", type="string", length=10)
     */
    private $telefono;

    /**
     * @var integer
     *
     * @ORM\Column(name="Semestre", type="integer")
     */
    private $semestre;

    /**
     * @var string
     *
     * @ORM\Column(name="PromAcumulado", type="decimal")
     */
    private $promAcumulado;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->idEstudiante;
    }
	
	public function setId($id)
    {
        $this->idEstudiante= $id;

        return $this;
    }
	
    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Estudiantes
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

    /**
     * Set noDocumento
     *
     * @param string $noDocumento
     * @return Estudiantes
     */
    public function setNoDocumento($noDocumento)
    {
        $this->noDocumento = $noDocumento;

        return $this;
    }

    /**
     * Get noDocumento
     *
     * @return string 
     */
    public function getNoDocumento()
    {
        return $this->noDocumento;
    }

    /**
     * Set tipoDocumento
     *
     * @param string $tipoDocumento
     * @return Estudiantes
     */
    public function setTipoDocumento($tipoDocumento)
    {
        $this->tipoDocumento = $tipoDocumento;

        return $this;
    }

    /**
     * Get tipoDocumento
     *
     * @return string 
     */
    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }

    /**
     * Set correo
     *
     * @param string $correo
     * @return Estudiantes
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string 
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Estudiantes
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set semestre
     *
     * @param integer $semestre
     * @return Estudiantes
     */
    public function setSemestre($semestre)
    {
        $this->semestre = $semestre;

        return $this;
    }

    /**
     * Get semestre
     *
     * @return integer 
     */
    public function getSemestre()
    {
        return $this->semestre;
    }

    /**
     * Set promAcumulado
     *
     * @param string $promAcumulado
     * @return Estudiantes
     */
    public function setPromAcumulado($promAcumulado)
    {
        $this->promAcumulado = $promAcumulado;

        return $this;
    }

    /**
     * Get promAcumulado
     *
     * @return string 
     */
    public function getPromAcumulado()
    {
        return $this->promAcumulado;
    }
}
