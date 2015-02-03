<?php

namespace solicitudMonitoria\CursosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Seccion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="solicitudMonitoria\CursosBundle\Entity\SeccionRepository")
 */
class Seccion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idSeccion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idSeccion;

    /**
    * @var string
     *
     * @ORM\Column(name="NombreSeccion", type="string", length=100)
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
     * Set nombre
     *
     * @param string $nombre
     * @return Seccion
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
