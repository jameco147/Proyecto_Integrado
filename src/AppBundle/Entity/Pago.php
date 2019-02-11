<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Pago
 *
 * @ORM\Table(name="pago")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PagoRepository")
 */
class Pago
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechaEstimada", type="date", nullable=true)
     */
    private $fechaEstimada;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechaPago", type="date", nullable=true)
     */
    private $fechaPago;

    /**
     * @var float|null
     *
     * @ORM\Column(name="cantidad", type="float", nullable=true)
     */
    private $cantidad;


      /**
     * @ORM\OneToMany(targetEntity="Prog_Pago", mappedBy="idPago")
     */
    private $prog_pago;


    public function __construct()
    {
        $this->prog_pago = new ArrayCollection();
    }


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fechaEstimada.
     *
     * @param \DateTime|null $fechaEstimada
     *
     * @return Pago
     */
    public function setFechaEstimada($fechaEstimada = null)
    {
        $this->fechaEstimada = $fechaEstimada;

        return $this;
    }

    /**
     * Get fechaEstimada.
     *
     * @return \DateTime|null
     */
    public function getFechaEstimada()
    {
        return $this->fechaEstimada;
    }

    /**
     * Set fechaPago.
     *
     * @param \DateTime|null $fechaPago
     *
     * @return Pago
     */
    public function setFechaPago($fechaPago = null)
    {
        $this->fechaPago = $fechaPago;

        return $this;
    }

    /**
     * Get fechaPago.
     *
     * @return \DateTime|null
     */
    public function getFechaPago()
    {
        return $this->fechaPago;
    }

    /**
     * Set cantidad.
     *
     * @param float|null $cantidad
     *
     * @return Pago
     */
    public function setCantidad($cantidad = null)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad.
     *
     * @return float|null
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Add progPago.
     *
     * @param \AppBundle\Entity\Prog_Pago $progPago
     *
     * @return Pago
     */
    public function addProgPago(\AppBundle\Entity\Prog_Pago $progPago)
    {
        $this->prog_pago[] = $progPago;

        return $this;
    }

    /**
     * Remove progPago.
     *
     * @param \AppBundle\Entity\Prog_Pago $progPago
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeProgPago(\AppBundle\Entity\Prog_Pago $progPago)
    {
        return $this->prog_pago->removeElement($progPago);
    }

    /**
     * Get progPago.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProgPago()
    {
        return $this->prog_pago;
    }
}
