<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estado
 *
 * @ORM\Table(name="estado")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EstadoRepository")
 */
class Estado
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
     * @ORM\OneToOne(targetEntity="Projecto", mappedBy="estado")
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
     * @return Estado
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
     * Set projecto.
     *
     * @param \AppBundle\Entity\Projecto|null $projecto
     *
     * @return Estado
     */
    public function setProjecto(\AppBundle\Entity\Projecto $projecto = null)
    {
        $this->projecto = $projecto;

        return $this;
    }

    /**
     * Get projecto.
     *
     * @return \AppBundle\Entity\Projecto|null
     */
    public function getProjecto()
    {
        return $this->projecto;
    }
}
