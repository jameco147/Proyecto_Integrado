<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Prog_Pago
 *
 * @ORM\Table(name="prog__pago")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Prog_PagoRepository")
 */
class Prog_Pago
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
     * @ORM\ManyToOne(targetEntity="Projecto", inversedBy="prog_pago", fetch="EAGER")
     * @ORM\JoinColumn(name="projecto_id", referencedColumnName="id")
     */
    private $idProjecto;

    /**
     * @ORM\ManyToOne(targetEntity="Pago", inversedBy="prog_pago", fetch="EAGER")
     * @ORM\JoinColumn(name="pago_id", referencedColumnName="id")
     */
    private $idPago;


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
     * Set idProjecto.
     *
     * @param \AppBundle\Entity\Projecto|null $idProjecto
     *
     * @return Prog_Pago
     */
    public function setIdProjecto(\AppBundle\Entity\Projecto $idProjecto = null)
    {
        $this->idProjecto = $idProjecto;

        return $this;
    }

    /**
     * Get idProjecto.
     *
     * @return \AppBundle\Entity\Projecto|null
     */
    public function getIdProjecto()
    {
        return $this->idProjecto;
    }

    /**
     * Set idPago.
     *
     * @param \AppBundle\Entity\Pago|null $idPago
     *
     * @return Prog_Pago
     */
    public function setIdPago(\AppBundle\Entity\Pago $idPago = null)
    {
        $this->idPago = $idPago;

        return $this;
    }

    /**
     * Get idPago.
     *
     * @return \AppBundle\Entity\Pago|null
     */
    public function getIdPago()
    {
        return $this->idPago;
    }
}
