<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImpactoSocial
 *
 * @ORM\Table(name="impacto_social")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ImpactoSocialRepository")
 */
class ImpactoSocial
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
     * @ORM\Column(name="desarrolloRural", type="boolean")
     */
    private $desarrolloRural;

    /**
     * @var bool
     *
     * @ORM\Column(name="desarrolloPersonal", type="boolean")
     */
    private $desarrolloPersonal;

    /**
     * @var bool
     *
     * @ORM\Column(name="desarrolloProfesional", type="boolean")
     */
    private $desarrolloProfesional;

    /**
     * @var bool
     *
     * @ORM\Column(name="inclusionDigital", type="boolean")
     */
    private $inclusionDigital;

    /**
     * @var bool
     *
     * @ORM\Column(name="sensibilizacionSocial", type="boolean")
     */
    private $sensibilizacionSocial;

    /**
     * @var bool
     *
     * @ORM\Column(name="insercionLaboral", type="boolean")
     */
    private $insercionLaboral;

    /**
     * @var bool
     *
     * @ORM\Column(name="socioeducativo", type="boolean")
     */
    private $socioeducativo;

    /**
     * @var bool
     *
     * @ORM\Column(name="sociosanitario", type="boolean")
     */
    private $sociosanitario;

    /**
     * @var bool
     *
     * @ORM\Column(name="viviendaSocial", type="boolean")
     */
    private $viviendaSocial;

    /**
     * @var bool
     *
     * @ORM\Column(name="otros", type="boolean")
     */
    private $otros;

      /**
     * @ORM\OneToOne(targetEntity="Projecto", mappedBy="impactoSocial")
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
     * Set desarrolloRural
     *
     * @param boolean $desarrolloRural
     *
     * @return ImpactoSocial
     */
    public function setDesarrolloRural($desarrolloRural)
    {
        $this->desarrolloRural = $desarrolloRural;

        return $this;
    }

    /**
     * Get desarrolloRural
     *
     * @return bool
     */
    public function getDesarrolloRural()
    {
        return $this->desarrolloRural;
    }

    /**
     * Set desarrolloPersonal
     *
     * @param boolean $desarrolloPersonal
     *
     * @return ImpactoSocial
     */
    public function setDesarrolloPersonal($desarrolloPersonal)
    {
        $this->desarrolloPersonal = $desarrolloPersonal;

        return $this;
    }

    /**
     * Get desarrolloPersonal
     *
     * @return bool
     */
    public function getDesarrolloPersonal()
    {
        return $this->desarrolloPersonal;
    }

    /**
     * Set desarrolloProfesional
     *
     * @param boolean $desarrolloProfesional
     *
     * @return ImpactoSocial
     */
    public function setDesarrolloProfesional($desarrolloProfesional)
    {
        $this->desarrolloProfesional = $desarrolloProfesional;

        return $this;
    }

    /**
     * Get desarrolloProfesional
     *
     * @return bool
     */
    public function getDesarrolloProfesional()
    {
        return $this->desarrolloProfesional;
    }

    /**
     * Set inclusionDigital
     *
     * @param boolean $inclusionDigital
     *
     * @return ImpactoSocial
     */
    public function setInclusionDigital($inclusionDigital)
    {
        $this->inclusionDigital = $inclusionDigital;

        return $this;
    }

    /**
     * Get inclusionDigital
     *
     * @return bool
     */
    public function getInclusionDigital()
    {
        return $this->inclusionDigital;
    }

    /**
     * Set sensibilizacionSocial
     *
     * @param boolean $sensibilizacionSocial
     *
     * @return ImpactoSocial
     */
    public function setSensibilizacionSocial($sensibilizacionSocial)
    {
        $this->sensibilizacionSocial = $sensibilizacionSocial;

        return $this;
    }

    /**
     * Get sensibilizacionSocial
     *
     * @return bool
     */
    public function getSensibilizacionSocial()
    {
        return $this->sensibilizacionSocial;
    }

    /**
     * Set insercionLaboral
     *
     * @param boolean $insercionLaboral
     *
     * @return ImpactoSocial
     */
    public function setInsercionLaboral($insercionLaboral)
    {
        $this->insercionLaboral = $insercionLaboral;

        return $this;
    }

    /**
     * Get insercionLaboral
     *
     * @return bool
     */
    public function getInsercionLaboral()
    {
        return $this->insercionLaboral;
    }

    /**
     * Set socioeducativo
     *
     * @param boolean $socioeducativo
     *
     * @return ImpactoSocial
     */
    public function setSocioeducativo($socioeducativo)
    {
        $this->socioeducativo = $socioeducativo;

        return $this;
    }

    /**
     * Get socioeducativo
     *
     * @return bool
     */
    public function getSocioeducativo()
    {
        return $this->socioeducativo;
    }

    /**
     * Set sociosanitario
     *
     * @param boolean $sociosanitario
     *
     * @return ImpactoSocial
     */
    public function setSociosanitario($sociosanitario)
    {
        $this->sociosanitario = $sociosanitario;

        return $this;
    }

    /**
     * Get sociosanitario
     *
     * @return bool
     */
    public function getSociosanitario()
    {
        return $this->sociosanitario;
    }

    /**
     * Set viviendaSocial
     *
     * @param boolean $viviendaSocial
     *
     * @return ImpactoSocial
     */
    public function setViviendaSocial($viviendaSocial)
    {
        $this->viviendaSocial = $viviendaSocial;

        return $this;
    }

    /**
     * Get viviendaSocial
     *
     * @return bool
     */
    public function getViviendaSocial()
    {
        return $this->viviendaSocial;
    }

    /**
     * Set otros
     *
     * @param boolean $otros
     *
     * @return ImpactoSocial
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
     * @return ImpactoSocial
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

    public function __toString()
    {
        return (string)$this->id;
    }
}
