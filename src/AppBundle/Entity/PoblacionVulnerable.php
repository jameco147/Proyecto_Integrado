<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PoblacionVulnerable
 *
 * @ORM\Table(name="poblacion_vulnerable")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PoblacionVulnerableRepository")
 */
class PoblacionVulnerable
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
     * @var bool
     *
     * @ORM\Column(name="exclusionSocial", type="boolean",  nullable=true)
     */
    private $exclusionSocial;

    /**
     * @var bool
     *
     * @ORM\Column(name="mayores", type="boolean",  nullable=true)
     */
    private $mayores;

    /**
     * @var bool
     *
     * @ORM\Column(name="mujeres", type="boolean",  nullable=true)
     */
    private $mujeres;

    /**
     * @var bool
     *
     * @ORM\Column(name="ninyos", type="boolean",  nullable=true)
     */
    private $ninyos;

    /**
     * @var bool
     *
     * @ORM\Column(name="jovenes", type="boolean",  nullable=true)
     */
    private $jovenes;

    /**
     * @var bool
     *
     * @ORM\Column(name="migrantes", type="boolean",  nullable=true)
     */
    private $migrantes;

    /**
     * @var bool
     *
     * @ORM\Column(name="otros", type="boolean",  nullable=true)
     */
    private $otros;

      /**
     * @ORM\OneToOne(targetEntity="Projecto", mappedBy="poblaVulnerable")
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
     * Set exclusionSocial
     *
     * @param boolean $exclusionSocial
     *
     * @return PoblacionVulnerable
     */
    public function setExclusionSocial($exclusionSocial)
    {
        $this->exclusionSocial = $exclusionSocial;

        return $this;
    }

    /**
     * Get exclusionSocial
     *
     * @return bool
     */
    public function getExclusionSocial()
    {
        return $this->exclusionSocial;
    }

    /**
     * Set mayores
     *
     * @param boolean $mayores
     *
     * @return PoblacionVulnerable
     */
    public function setMayores($mayores)
    {
        $this->mayores = $mayores;

        return $this;
    }

    /**
     * Get mayores
     *
     * @return bool
     */
    public function getMayores()
    {
        return $this->mayores;
    }

    /**
     * Set mujeres
     *
     * @param boolean $mujeres
     *
     * @return PoblacionVulnerable
     */
    public function setMujeres($mujeres)
    {
        $this->mujeres = $mujeres;

        return $this;
    }

    /**
     * Get mujeres
     *
     * @return bool
     */
    public function getMujeres()
    {
        return $this->mujeres;
    }

    /**
     * Set ninyos
     *
     * @param boolean $ninyos
     *
     * @return PoblacionVulnerable
     */
    public function setNinyos($ninyos)
    {
        $this->ninyos = $ninyos;

        return $this;
    }

    /**
     * Get ninyos
     *
     * @return bool
     */
    public function getNinyos()
    {
        return $this->ninyos;
    }

    /**
     * Set jovenes
     *
     * @param boolean $jovenes
     *
     * @return PoblacionVulnerable
     */
    public function setJovenes($jovenes)
    {
        $this->jovenes = $jovenes;

        return $this;
    }

    /**
     * Get jovenes
     *
     * @return bool
     */
    public function getJovenes()
    {
        return $this->jovenes;
    }

    /**
     * Set migrantes
     *
     * @param boolean $migrantes
     *
     * @return PoblacionVulnerable
     */
    public function setMigrantes($migrantes)
    {
        $this->migrantes = $migrantes;

        return $this;
    }

    /**
     * Get migrantes
     *
     * @return bool
     */
    public function getMigrantes()
    {
        return $this->migrantes;
    }

    /**
     * Set otros
     *
     * @param boolean $otros
     *
     * @return PoblacionVulnerable
     */
    public function setOtros($otros)
    {
        $this->otros = $otros;

        return $this;
    }

    /**
     * Get otros
     *
     * @return bool
     */
    public function getOtros()
    {
        return $this->otros;
    }

    /**
     * Set projecto.
     *
     * @param \AppBundle\Entity\Projecto|null $projecto
     *
     * @return PoblacionVulnerable
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
