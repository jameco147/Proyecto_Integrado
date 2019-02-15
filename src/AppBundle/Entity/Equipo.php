<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Equipo
 *
 * @ORM\Table(name="equipo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EquipoRepository")
 */
class Equipo
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
     * @ORM\OneToMany(targetEntity="Projecto", mappedBy="revisa")
     */
    private $equipoRevisa;

    /**
     * @ORM\OneToMany(targetEntity="Projecto", mappedBy="coordina")
     */
    private $equipoCoordina;

    /**
     * @ORM\OneToMany(targetEntity="Projecto", mappedBy="apoya")
     */
    private $equipoApoya;

    public function __construct()
    {
        $this->equipoRevisa = new ArrayCollection();
        $this->equipoCoordina = new ArrayCollection();
        $this->equipoApoya = new ArrayCollection();

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
     * @return Equipo
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
     * Add equipoRevisa.
     *
     * @param \AppBundle\Entity\Projecto $equipoRevisa
     *
     * @return Equipo
     */
    public function addEquipoRevisa(\AppBundle\Entity\Projecto $equipoRevisa)
    {
        $this->equipoRevisa[] = $equipoRevisa;

        return $this;
    }

    /**
     * Remove equipoRevisa.
     *
     * @param \AppBundle\Entity\Projecto $equipoRevisa
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeEquipoRevisa(\AppBundle\Entity\Projecto $equipoRevisa)
    {
        return $this->equipoRevisa->removeElement($equipoRevisa);
    }

    /**
     * Get equipoRevisa.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEquipoRevisa()
    {
        return $this->equipoRevisa;
    }

    /**
     * Add equipoCoordina.
     *
     * @param \AppBundle\Entity\Projecto $equipoCoordina
     *
     * @return Equipo
     */
    public function addEquipoCoordina(\AppBundle\Entity\Projecto $equipoCoordina)
    {
        $this->equipoCoordina[] = $equipoCoordina;

        return $this;
    }

    /**
     * Remove equipoCoordina.
     *
     * @param \AppBundle\Entity\Projecto $equipoCoordina
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeEquipoCoordina(\AppBundle\Entity\Projecto $equipoCoordina)
    {
        return $this->equipoCoordina->removeElement($equipoCoordina);
    }

    /**
     * Get equipoCoordina.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEquipoCoordina()
    {
        return $this->equipoCoordina;
    }

    /**
     * Add equipoApoya.
     *
     * @param \AppBundle\Entity\Projecto $equipoApoya
     *
     * @return Equipo
     */
    public function addEquipoApoya(\AppBundle\Entity\Projecto $equipoApoya)
    {
        $this->equipoApoya[] = $equipoApoya;

        return $this;
    }

    /**
     * Remove equipoApoya.
     *
     * @param \AppBundle\Entity\Projecto $equipoApoya
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeEquipoApoya(\AppBundle\Entity\Projecto $equipoApoya)
    {
        return $this->equipoApoya->removeElement($equipoApoya);
    }

    /**
     * Get equipoApoya.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEquipoApoya()
    {
        return $this->equipoApoya;
    }
}
