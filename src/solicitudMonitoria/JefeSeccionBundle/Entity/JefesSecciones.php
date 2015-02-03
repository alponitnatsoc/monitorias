<?php

namespace solicitudMonitoria\JefeSeccionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JefesSecciones
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="solicitudMonitoria\JefeSeccionBundle\Entity\JefesSeccionesRepository")
 */
class JefesSecciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idJefeSeccion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=200)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="idSeccion", type="integer")
     */
    private $idSeccion;


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
     * Set nombre
     *
     * @param string $nombre
     * @return JefesSecciones
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
     * Set idSeccion
     *
     * @param integer $idSeccion
     * @return JefesSecciones
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
}
