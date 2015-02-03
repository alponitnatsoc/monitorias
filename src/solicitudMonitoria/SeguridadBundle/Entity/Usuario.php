<?php

namespace solicitudMonitoria\SeguridadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;



/**
 * Usuario
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="solicitudMonitoria\SeguridadBundle\Entity\UsuarioRepository")
 */
class Usuario implements AdvancedUserInterface, \Serializable
{
    // no es idEstudiante, es simplemente el id del usuario
    /**
     * @var integer
     * 
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idEstudiante;

    /**
     * @var string
     *
     * @ORM\Column(name="Username", type="string", length=100)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=200)
     */
    private $password;

    /**
     * @var array
     *
     * @ORM\Column(name="Roles", type="array")
     */
    private $roles;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive;
    
     /**
     * @ORM\Column(name="Salt",type="string", length=32)
     */
    private $salt;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->idEstudiante;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     * @return Usuario
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set roles
     *
     * @param array $roles
     * @return Usuario
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get roles
     *
     * @return array 
     */
    public function getRoles()
    {
        return $this->roles;
    }
    
    public function getSalt()
    {
        return $this->salt;
    }
    
    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return Usuario
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
    
    
    public function __construct()
    {
        $this->isActive = true;
        $this->salt = 0;
    }
    
     /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->idEstudiante,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->idEstudiante,
        ) = unserialize($serialized);
    }
    
    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }
    
    
    public function isAccountNonExpired()
    {
            return true;
    }

    public function isAccountNonLocked()
    {
            return true;
    }

    public function isCredentialsNonExpired()
    {
            return true;
    }

    public function isEnabled()
    {
        return $this->isActive;
    }
    
}
