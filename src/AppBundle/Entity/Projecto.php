<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Projecto
 *
 * @ORM\Table(name="projecto")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjectoRepository")
 */
class Projecto
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
     * @ORM\Column(name="codigo_inter", type="string", length=255)
     */
    private $codigoInter;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_contable", type="string", length=255)
     */
    private $codigoContable;

    /**
     * @ORM\ManyToOne(targetEntity="TipoAdministracion", inversedBy="projecto", fetch="EAGER")
     * @ORM\JoinColumn(name="tipo_admin_id", referencedColumnName="id")
     */
    private $tipoAdministracion;

    /**
     * @var string
     *
     * @ORM\Column(name="publico_privada", type="string", length=255)
     */
    private $publicoPrivada;

    /**
     * @ORM\ManyToOne(targetEntity="TipoFinanciacion", inversedBy="projecto", fetch="EAGER")
     * @ORM\JoinColumn(name="tipo_finan_id", referencedColumnName="id")
     */
    private $tipoFinanciacion;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\OneToOne(targetEntity="Estado", inversedBy="projecto", fetch="EAGER")
     * @ORM\JoinColumn(name="estado_id", referencedColumnName="id")
     */
    private $estado;

    /**
     * @ORM\ManyToOne(targetEntity="PlanEstrategico", inversedBy="projecto", fetch="EAGER")
     * @ORM\JoinColumn(name="plan_estrate_id", referencedColumnName="id")
     */
    private $planEstrategico;

    /**
     * @ORM\ManyToOne(targetEntity="Equipo", inversedBy="equipoCoordina", fetch="EAGER")
     * @ORM\JoinColumn(name="coordina_id", referencedColumnName="id")
     */
    private $coordina;

    /**
     * @ORM\ManyToOne(targetEntity="Equipo", inversedBy="equipoRevisa", fetch="EAGER")
     * @ORM\JoinColumn(name="revisa_id", referencedColumnName="id")
     */
    private $revisa;

    /**
      * @ORM\ManyToOne(targetEntity="Equipo", inversedBy="equipoApoya", fetch="EAGER")
      * @ORM\JoinColumn(name="apoya_id", referencedColumnName="id")
      */
    private $apoya;

    /**
     * @var bool
     *
     * @ORM\Column(name="proyecto_en_red", type="boolean")
     */
    private $proyectoEnRed;

    /**
     * @var string
     *
     * @ORM\Column(name="entidad_lider", type="string", length=255)
     */
    private $entidadLider;

    /**
     * @var string
     *
     * @ORM\Column(name="entidades_sociales", type="string", length=255)
     */
    private $entidadesSociales;

    /**
     * @var string
     *
     * @ORM\Column(name="financiador", type="string", length=255)
     */
    private $financiador;

    /**
     * @var string
     *
     * @ORM\Column(name="contacto_administ", type="string", length=255)
     */
    private $contactoAdminist;

    /**
     * @var string
     *
     * @ORM\Column(name="link_convacatoria", type="string", length=255)
     */
    private $linkConvacatoria;

    /**
    * @var float
    *
    * @ORM\Column(name="importe_solicitado", type="float")
    */
    private $importeSolicitado;

    /**
     * @var float
     *
     * @ORM\Column(name="importe_concedido", type="float")
     */
    private $importeConcedido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_estimada_resolucion", type="date")
     */
    private $fechaEstimadaResolucion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_resolucion", type="date")
     */
    private $fechaResolucion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ini_ejecucion", type="date")
     */
    private $fechaIniEjecucion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_fin_ejecucion", type="date")
     */
    private $fechaFinEjecucion;

    /**
     * @var int
     *
     * @ORM\Column(name="duracion_meses", type="integer")
     */
    private $duracionMeses;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_justificacion_1", type="date")
     */
    private $fechaJustificacion1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_justificacion_2", type="date")
     */
    private $fechaJustificacion2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_requi_1", type="date")
     */
    private $fechaRequi1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_requi_2", type="date")
     */
    private $fechaRequi2;

    /**
     * @var string
     *
     * @ORM\Column(name="periodoEjecucion", type="string", length=255)
     */
    private $periodoEjecucion;


    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=255)
     */
    private $observaciones;

    /**
    * @ORM\OneToOne(targetEntity="PoblacionVulnerable", inversedBy="projecto", fetch="EAGER")
    * @ORM\JoinColumn(name="pobla_vulne_id", referencedColumnName="id")
    */
    private $poblaVulnerable;

    /**
    * @ORM\OneToOne(targetEntity="ImpactoSocial", inversedBy="projecto", fetch="EAGER")
    * @ORM\JoinColumn(name="imp_soc_id", referencedColumnName="id")
    */
    private $impactoSocial;

    /**
    * @ORM\OneToOne(targetEntity="Beneficiarias", inversedBy="projecto", fetch="EAGER")
    * @ORM\JoinColumn(name="beneficiaria_id", referencedColumnName="id")
    */
    private $beneficiaria;


    /**
     * @ORM\OneToMany(targetEntity="Prog_Pago", mappedBy="idProjecto", fetch="EAGER")
     */
    private $prog_pago;

    /**
     * @var string
     *
     * @ORM\Column(name="codigoAdministracion", type="string", length=255)
     */
    private $codigoAdministracion;

    /**
     * @var string
     *
     * @ORM\Column(name="tecnicoConvocatoria", type="string", length=255)
     */
    private $tecnicoConvocatoria;

    /**
     * @var string
     *
     * @ORM\Column(name="resumen", type="string", length=255)
     */
    private $resumen;

     /**
     * @var string
     *
     * @ORM\Column(name="actEmblematicas", type="string", length=255)
     */
    private $actEmblematicas;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaLimiteEntrega", type="date")
     */
    private $fechaLimiteEntrega;


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
     * Set codigoInter.
     *
     * @param string $codigoInter
     *
     * @return Projecto
     */
    public function setCodigoInter($codigoInter)
    {
        $this->codigoInter = $codigoInter;

        return $this;
    }

    /**
     * Get codigoInter.
     *
     * @return string
     */
    public function getCodigoInter()
    {
        return $this->codigoInter;
    }

    /**
     * Set codigoContable.
     *
     * @param string $codigoContable
     *
     * @return Projecto
     */
    public function setCodigoContable($codigoContable)
    {
        $this->codigoContable = $codigoContable;

        return $this;
    }

    /**
     * Get codigoContable.
     *
     * @return string
     */
    public function getCodigoContable()
    {
        return $this->codigoContable;
    }


    /**
     * Set publicoPrivada.
     *
     * @param string $publicoPrivada
     *
     * @return Projecto
     */
    public function setPublicoPrivada($publicoPrivada)
    {
        $this->publicoPrivada = $publicoPrivada;

        return $this;
    }

    /**
     * Get publicoPrivada.
     *
     * @return string
     */
    public function getPublicoPrivada()
    {
        return $this->publicoPrivada;
    }


    /**
     * Set nombre.
     *
     * @param string $nombre
     *
     * @return Projecto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre.
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set proyectoEnRed.
     *
     * @param bool $proyectoEnRed
     *
     * @return Projecto
     */
    public function setProyectoEnRed($proyectoEnRed)
    {
        $this->proyectoEnRed = $proyectoEnRed;

        return $this;
    }

    /**
     * Get proyectoEnRed.
     *
     * @return bool
     */
    public function getProyectoEnRed()
    {
        return $this->proyectoEnRed;
    }

    /**
     * Set entidadLider.
     *
     * @param string $entidadLider
     *
     * @return Projecto
     */
    public function setEntidadLider($entidadLider)
    {
        $this->entidadLider = $entidadLider;

        return $this;
    }

    /**
     * Get entidadLider.
     *
     * @return string
     */
    public function getEntidadLider()
    {
        return $this->entidadLider;
    }

    /**
     * Set entidadesSociales.
     *
     * @param string $entidadesSociales
     *
     * @return Projecto
     */
    public function setEntidadesSociales($entidadesSociales)
    {
        $this->entidadesSociales = $entidadesSociales;

        return $this;
    }

    /**
     * Get entidadesSociales.
     *
     * @return string
     */
    public function getEntidadesSociales()
    {
        return $this->entidadesSociales;
    }

    /**
     * Set financiador.
     *
     * @param string $financiador
     *
     * @return Projecto
     */
    public function setFinanciador($financiador)
    {
        $this->financiador = $financiador;

        return $this;
    }

    /**
     * Get financiador.
     *
     * @return string
     */
    public function getFinanciador()
    {
        return $this->financiador;
    }

    /**
     * Set contactoAdminist.
     *
     * @param string $contactoAdminist
     *
     * @return Projecto
     */
    public function setContactoAdminist($contactoAdminist)
    {
        $this->contactoAdminist = $contactoAdminist;

        return $this;
    }

    /**
     * Get contactoAdminist.
     *
     * @return string
     */
    public function getContactoAdminist()
    {
        return $this->contactoAdminist;
    }

    /**
     * Set linkConvacatoria.
     *
     * @param string $linkConvacatoria
     *
     * @return Projecto
     */
    public function setLinkConvacatoria($linkConvacatoria)
    {
        $this->linkConvacatoria = $linkConvacatoria;

        return $this;
    }

    /**
     * Get linkConvacatoria.
     *
     * @return string
     */
    public function getLinkConvacatoria()
    {
        return $this->linkConvacatoria;
    }

    /**
     * Set importeConcedido.
     *
     * @param float $importeConcedido
     *
     * @return Projecto
     */
    public function setImporteConcedido($importeConcedido)
    {
        $this->importeConcedido = $importeConcedido;

        return $this;
    }

    /**
     * Get importeConcedido.
     *
     * @return float
     */
    public function getImporteConcedido()
    {
        return $this->importeConcedido;
    }

    /**
     * Set fechaEstimadaResolucion.
     *
     * @param \DateTime $fechaEstimadaResolucion
     *
     * @return Projecto
     */
    public function setfechaEstimadaResolucion($fechaEstimadaResolucion)
    {
        $this->fechaEstimadaResolucion = $fechaEstimadaResolucion;

        return $this;
    }

    /**
     * Get fechaEstimadaResolucion.
     *
     * @return \DateTime
     */
    public function getfechaEstimadaResolucion()
    {
        return $this->fechaEstimadaResolucion;
    }

    /**
     * Set fechaResolucion.
     *
     * @param \DateTime $fechaResolucion
     *
     * @return Projecto
     */
    public function setFechaResolucion($fechaResolucion)
    {
        $this->fechaResolucion = $fechaResolucion;

        return $this;
    }

    /**
     * Get fechaResolucion.
     *
     * @return \DateTime
     */
    public function getFechaResolucion()
    {
        return $this->fechaResolucion;
    }

    /**
     * Set fechaIniEjecucion.
     *
     * @param \DateTime $fechaIniEjecucion
     *
     * @return Projecto
     */
    public function setFechaIniEjecucion($fechaIniEjecucion)
    {
        $this->fechaIniEjecucion = $fechaIniEjecucion;

        return $this;
    }

    /**
     * Get fechaIniEjecucion.
     *
     * @return \DateTime
     */
    public function getFechaIniEjecucion()
    {
        return $this->fechaIniEjecucion;
    }

    /**
     * Set fechaFinEjecucion.
     *
     * @param \DateTime $fechaFinEjecucion
     *
     * @return Projecto
     */
    public function setFechaFinEjecucion($fechaFinEjecucion)
    {
        $this->fechaFinEjecucion = $fechaFinEjecucion;

        return $this;
    }

    /**
     * Get fechaFinEjecucion.
     *
     * @return \DateTime
     */
    public function getFechaFinEjecucion()
    {
        return $this->fechaFinEjecucion;
    }

    /**
     * Set duracionMeses.
     *
     * @param int $duracionMeses
     *
     * @return Projecto
     */
    public function setduracionMeses($duracionMeses)
    {
        $this->duracionMeses = $duracionMeses;

        return $this;
    }

    /**
     * Get duracionMeses.
     *
     * @return int
     */
    public function getduracionMeses()
    {
        return $this->duracionMeses;
    }

    /**
     * Set fechaJustificacion1.
     *
     * @param \DateTime $fechaJustificacion1
     *
     * @return Projecto
     */
    public function setfechaJustificacion1($fechaJustificacion1)
    {
        $this->fechaJustificacion1 = $fechaJustificacion1;

        return $this;
    }

    /**
     * Get fechaJustificacion1.
     *
     * @return \DateTime
     */
    public function getfechaJustificacion1()
    {
        return $this->fechaJustificacion1;
    }

    /**
     * Set fechaJustificacion2.
     *
     * @param \DateTime $fechaJustificacion2
     *
     * @return Projecto
     */
    public function setFechaJustificacion2($fechaJustificacion2)
    {
        $this->fechaJustificacion2 = $fechaJustificacion2;

        return $this;
    }

    /**
     * Get fechaJustificacion2.
     *
     * @return \DateTime
     */
    public function getFechaJustificacion2()
    {
        return $this->fechaJustificacion2;
    }

    /**
     * Set fechaRequi1.
     *
     * @param \DateTime $fechaRequi1
     *
     * @return Projecto
     */
    public function setFechaRequi1($fechaRequi1)
    {
        $this->fechaRequi1 = $fechaRequi1;

        return $this;
    }

    /**
     * Get fechaRequi1.
     *
     * @return \DateTime
     */
    public function getFechaRequi1()
    {
        return $this->fechaRequi1;
    }

    /**
     * Set fechaRequi2.
     *
     * @param \DateTime $fechaRequi2
     *
     * @return Projecto
     */
    public function setFechaRequi2($fechaRequi2)
    {
        $this->fechaRequi2 = $fechaRequi2;

        return $this;
    }

    /**
     * Get fechaRequi2.
     *
     * @return \DateTime
     */
    public function getFechaRequi2()
    {
        return $this->fechaRequi2;
    }

    /**
     * Set observaciones.
     *
     * @param string $observaciones
     *
     * @return Projecto
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones.
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    
    /**
     * Get the value of importeSolicitado
     *
     * @return  float
     */
    public function getImporteSolicitado()
    {
        return $this->importeSolicitado;
    }

    /**
     * Set the value of importeSolicitado
     *
     * @param  float  $importeSolicitado
     *
     * @return  self
     */
    public function setImporteSolicitado(float $importeSolicitado)
    {
        $this->importeSolicitado = $importeSolicitado;

        return $this;
    }

    /**
     * Set tipoAdministracion.
     *
     * @param \AppBundle\Entity\TipoAdministracion|null $tipoAdministracion
     *
     * @return Projecto
     */
    public function setTipoAdministracion(\AppBundle\Entity\TipoAdministracion $tipoAdministracion = null)
    {
        $this->tipoAdministracion = $tipoAdministracion;

        return $this;
    }

    /**
     * Get tipoAdministracion.
     *
     * @return \AppBundle\Entity\TipoAdministracion|null
     */
    public function getTipoAdministracion()
    {
        return $this->tipoAdministracion;
    }

    /**
     * Set tipoFinanciacion.
     *
     * @param \AppBundle\Entity\TipoFinanciacion|null $tipoFinanciacion
     *
     * @return Projecto
     */
    public function setTipoFinanciacion(\AppBundle\Entity\TipoFinanciacion $tipoFinanciacion = null)
    {
        $this->tipoFinanciacion = $tipoFinanciacion;

        return $this;
    }

    /**
     * Get tipoFinanciacion.
     *
     * @return \AppBundle\Entity\TipoFinanciacion|null
     */
    public function getTipoFinanciacion()
    {
        return $this->tipoFinanciacion;
    }

    /**
     * Set estado.
     *
     * @param \AppBundle\Entity\Estado|null $estado
     *
     * @return Projecto
     */
    public function setEstado(\AppBundle\Entity\Estado $estado = null)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado.
     *
     * @return \AppBundle\Entity\Estado|null
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set planEstrategico.
     *
     * @param \AppBundle\Entity\PlanEstrategico|null $planEstrategico
     *
     * @return Projecto
     */
    public function setPlanEstrategico(\AppBundle\Entity\PlanEstrategico $planEstrategico = null)
    {
        $this->planEstrategico = $planEstrategico;

        return $this;
    }

    /**
     * Get planEstrategico.
     *
     * @return \AppBundle\Entity\PlanEstrategico|null
     */
    public function getPlanEstrategico()
    {
        return $this->planEstrategico;
    }

    /**
     * Set coordina.
     *
     * @param \AppBundle\Entity\Equipo|null $coordina
     *
     * @return Projecto
     */
    public function setCoordina(\AppBundle\Entity\Equipo $coordina = null)
    {
        $this->coordina = $coordina;

        return $this;
    }

    /**
     * Get coordina.
     *
     * @return \AppBundle\Entity\Equipo|null
     */
    public function getCoordina()
    {
        return $this->coordina;
    }

    /**
     * Set revisa.
     *
     * @param \AppBundle\Entity\Equipo|null $revisa
     *
     * @return Projecto
     */
    public function setRevisa(\AppBundle\Entity\Equipo $revisa = null)
    {
        $this->revisa = $revisa;

        return $this;
    }

    /**
     * Get revisa.
     *
     * @return \AppBundle\Entity\Equipo|null
     */
    public function getRevisa()
    {
        return $this->revisa;
    }

    /**
     * Set apoya.
     *
     * @param \AppBundle\Entity\Equipo|null $apoya
     *
     * @return Projecto
     */
    public function setApoya(\AppBundle\Entity\Equipo $apoya = null)
    {
        $this->apoya = $apoya;

        return $this;
    }

    /**
     * Get apoya.
     *
     * @return \AppBundle\Entity\Equipo|null
     */
    public function getApoya()
    {
        return $this->apoya;
    }

    /**
     * Set poblaVulnerable.
     *
     * @param \AppBundle\Entity\PoblacionVulnerable|null $poblaVulnerable
     *
     * @return Projecto
     */
    public function setPoblaVulnerable(\AppBundle\Entity\PoblacionVulnerable $poblaVulnerable = null)
    {
        $this->poblaVulnerable = $poblaVulnerable;

        return $this;
    }

    /**
     * Get poblaVulnerable.
     *
     * @return \AppBundle\Entity\PoblacionVulnerable|null
     */
    public function getPoblaVulnerable()
    {
        return $this->poblaVulnerable;
    }

    /**
     * Set impactoSocial.
     *
     * @param \AppBundle\Entity\ImpactoSocial|null $impactoSocial
     *
     * @return Projecto
     */
    public function setImpactoSocial(\AppBundle\Entity\ImpactoSocial $impactoSocial = null)
    {
        $this->impactoSocial = $impactoSocial;

        return $this;
    }

    /**
     * Get impactoSocial.
     *
     * @return \AppBundle\Entity\ImpactoSocial|null
     */
    public function getImpactoSocial()
    {
        return $this->impactoSocial;
    }

    public function __toString()
    {
        return $this->nombre;
    }

    /**
     * Set beneficiaria.
     *
     * @param \AppBundle\Entity\Beneficiarias|null $beneficiaria
     *
     * @return Projecto
     */
    public function setBeneficiaria(\AppBundle\Entity\Beneficiarias $beneficiaria = null)
    {
        $this->beneficiaria = $beneficiaria;

        return $this;
    }

    /**
     * Get beneficiaria.
     *
     * @return \AppBundle\Entity\Beneficiarias|null
     */
    public function getBeneficiaria()
    {
        return $this->beneficiaria;
    }

    /**
     * Add progPago.
     *
     * @param \AppBundle\Entity\Prog_Pago $progPago
     *
     * @return Projecto
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

    /**
     * Get the value of codigoAdministracion
     *
     * @return  string
     */
    public function getCodigoAdministracion()
    {
        return $this->codigoAdministracion;
    }

    /**
     * Set the value of codigoAdministracion
     *
     * @param  string  $codigoAdministracion
     *
     * @return  self
     */
    public function setCodigoAdministracion(string $codigoAdministracion)
    {
        $this->codigoAdministracion = $codigoAdministracion;

        return $this;
    }

    /**
     * Get the value of tecnicoConvocatoria
     *
     * @return  string
     */
    public function getTecnicoConvocatoria()
    {
        return $this->tecnicoConvocatoria;
    }

    /**
     * Set the value of tecnicoConvocatoria
     *
     * @param  string  $tecnicoConvocatoria
     *
     * @return  self
     */
    public function setTecnicoConvocatoria(string $tecnicoConvocatoria)
    {
        $this->tecnicoConvocatoria = $tecnicoConvocatoria;

        return $this;
    }

    /**
     * Set periodoEjecucion.
     *
     * @param string $periodoEjecucion
     *
     * @return Projecto
     */
    public function setPeriodoEjecucion($periodoEjecucion)
    {
        $this->periodoEjecucion = $periodoEjecucion;

        return $this;
    }

    /**
     * Get periodoEjecucion.
     *
     * @return string
     */
    public function getPeriodoEjecucion()
    {
        return $this->periodoEjecucion;
    }

    /**
     * Set fechaLimiteEntrega.
     *
     * @param \DateTime $fechaLimiteEntrega
     *
     * @return Projecto
     */
    public function setFechaLimiteEntrega($fechaLimiteEntrega)
    {
        $this->fechaLimiteEntrega = $fechaLimiteEntrega;

        return $this;
    }

    /**
     * Get fechaLimiteEntrega.
     *
     * @return \DateTime
     */
    public function getFechaLimiteEntrega()
    {
        return $this->fechaLimiteEntrega;
    }

    /**
     * Get the value of resumen
     *
     * @return  string
     */ 
    public function getResumen()
    {
        return $this->resumen;
    }

    /**
     * Set the value of resumen
     *
     * @param  string  $resumen
     *
     * @return  self
     */ 
    public function setResumen(string $resumen)
    {
        $this->resumen = $resumen;

        return $this;
    }

    /**
     * Get the value of actEmblematicas
     *
     * @return  string
     */ 
    public function getActEmblematicas()
    {
        return $this->actEmblematicas;
    }

    /**
     * Set the value of actEmblematicas
     *
     * @param  string  $actEmblematicas
     *
     * @return  self
     */ 
    public function setActEmblematicas(string $actEmblematicas)
    {
        $this->actEmblematicas = $actEmblematicas;

        return $this;
    }
}
