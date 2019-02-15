<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * TipoFinanciacion
 *
 * @ORM\Table(name="tipo_financiacion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TipoFinanciacionRepository")
 */
class TipoFinanciacion
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
     * @ORM\Column(name="nombre", type="string", length=255,  nullable=true)
     */
    private $nombre;

     /**
     * @ORM\OneToMany(targetEntity="Projecto", mappedBy="tipoFinanciacion")
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
     * @return TipoFinanciacion
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
     * @return TipoFinanciacion
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
