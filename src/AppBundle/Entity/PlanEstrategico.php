<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanEstrategico
 *
 * @ORM\Table(name="plan_estrategico")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PlanEstrategicoRepository")
 */
class PlanEstrategico
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
     * @ORM\OneToMany(targetEntity="Projecto", mappedBy="planEstrategico")
     */
    private $projecto;


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
     * @return PlanEstrategico
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
     * Constructor
     */
    public function __construct()
    {
        $this->projecto = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add projecto.
     *
     * @param \AppBundle\Entity\Projecto $projecto
     *
     * @return PlanEstrategico
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
