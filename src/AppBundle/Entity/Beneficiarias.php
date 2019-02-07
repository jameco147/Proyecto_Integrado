<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Beneficiarias
 *
 * @ORM\Table(name="beneficiarias")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BeneficiariasRepository")
 */
class Beneficiarias
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
     * @var int
     *
     * @ORM\Column(name="infanciaHombre", type="integer")
     */
    private $infanciaHombre;

    /**
     * @var int
     *
     * @ORM\Column(name="infanciaMujer", type="integer")
     */
    private $infanciaMujer;

    /**
     * @var int
     *
     * @ORM\Column(name="juventudHombre", type="integer")
     */
    private $juventudHombre;

    /**
     * @var int
     *
     * @ORM\Column(name="juventudMujer", type="integer")
     */
    private $juventudMujer;

    /**
     * @var int
     *
     * @ORM\Column(name="adultosHombre", type="integer")
     */
    private $adultosHombre;

    /**
     * @var int
     *
     * @ORM\Column(name="adultosMujer", type="integer")
     */
    private $adultosMujer;

    /**
     * @var int
     *
     * @ORM\Column(name="mayoresHombre", type="integer")
     */
    private $mayoresHombre;

    /**
     * @var int
     *
     * @ORM\Column(name="mayoresMujer", type="integer")
     */
    private $mayoresMujer;


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
     * Set infanciaHombre
     *
     * @param integer $infanciaHombre
     *
     * @return Beneficiarias
     */
    public function setInfanciaHombre($infanciaHombre)
    {
        $this->infanciaHombre = $infanciaHombre;

        return $this;
    }

    /**
     * Get infanciaHombre
     *
     * @return int
     */
    public function getInfanciaHombre()
    {
        return $this->infanciaHombre;
    }

    /**
     * Set infanciaMujer
     *
     * @param integer $infanciaMujer
     *
     * @return Beneficiarias
     */
    public function setInfanciaMujer($infanciaMujer)
    {
        $this->infanciaMujer = $infanciaMujer;

        return $this;
    }

    /**
     * Get infanciaMujer
     *
     * @return int
     */
    public function getInfanciaMujer()
    {
        return $this->infanciaMujer;
    }

    /**
     * Set juventudHombre
     *
     * @param integer $juventudHombre
     *
     * @return Beneficiarias
     */
    public function setJuventudHombre($juventudHombre)
    {
        $this->juventudHombre = $juventudHombre;

        return $this;
    }

    /**
     * Get juventudHombre
     *
     * @return int
     */
    public function getJuventudHombre()
    {
        return $this->juventudHombre;
    }

    /**
     * Set juventudMujer
     *
     * @param integer $juventudMujer
     *
     * @return Beneficiarias
     */
    public function setJuventudMujer($juventudMujer)
    {
        $this->juventudMujer = $juventudMujer;

        return $this;
    }

    /**
     * Get juventudMujer
     *
     * @return int
     */
    public function getJuventudMujer()
    {
        return $this->juventudMujer;
    }

    /**
     * Set adultosHombre
     *
     * @param integer $adultosHombre
     *
     * @return Beneficiarias
     */
    public function setAdultosHombre($adultosHombre)
    {
        $this->adultosHombre = $adultosHombre;

        return $this;
    }

    /**
     * Get adultosHombre
     *
     * @return int
     */
    public function getAdultosHombre()
    {
        return $this->adultosHombre;
    }

    /**
     * Set adultosMujer
     *
     * @param integer $adultosMujer
     *
     * @return Beneficiarias
     */
    public function setAdultosMujer($adultosMujer)
    {
        $this->adultosMujer = $adultosMujer;

        return $this;
    }

    /**
     * Get adultosMujer
     *
     * @return int
     */
    public function getAdultosMujer()
    {
        return $this->adultosMujer;
    }

    /**
     * Set mayoresHombre
     *
     * @param integer $mayoresHombre
     *
     * @return Beneficiarias
     */
    public function setMayoresHombre($mayoresHombre)
    {
        $this->mayoresHombre = $mayoresHombre;

        return $this;
    }

    /**
     * Get mayoresHombre
     *
     * @return int
     */
    public function getMayoresHombre()
    {
        return $this->mayoresHombre;
    }

    /**
     * Set mayoresMujer
     *
     * @param integer $mayoresMujer
     *
     * @return Beneficiarias
     */
    public function setMayoresMujer($mayoresMujer)
    {
        $this->mayoresMujer = $mayoresMujer;

        return $this;
    }

    /**
     * Get mayoresMujer
     *
     * @return int
     */
    public function getMayoresMujer()
    {
        return $this->mayoresMujer;
    }
}

