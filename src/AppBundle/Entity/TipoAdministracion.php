<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoAdministracion
 *
 * @ORM\Table(name="tipo_administracion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TipoAdministracionRepository")
 */
class TipoAdministracion
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

     /**
     * @ORM\OneToMany(targetEntity="Projecto", mappedBy="tipoAdministracion")
     */
    private $projecto;

    public function __construct()
    {
        $this->projecto = new ArrayCollection();
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return TipoAdministracion
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
     * Add projecto.
     *
     * @param \AppBundle\Entity\Projecto $projecto
     *
     * @return TipoAdministracion
     */
    public function addProjecto(\AppBundle\Entity\Projecto $projecto)
    {
        $this->projecto[] = $projecto;

        return $this;
    }

    /**
     * Remove projecto.
     *
     * @param \AppBundle\Entity\Projecto $projecto
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeProjecto(\AppBundle\Entity\Projecto $projecto)
    {
        return $this->projecto->removeElement($projecto);
    }

    /**
     * Get projecto.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProjecto()
    {
        return $this->projecto;
    }
}
