<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @var string
     *
     * @ORM\Column(name="tipo_administ", type="string", length=255)
     */
    private $tipoAdminist;

    /**
     * @var string
     *
     * @ORM\Column(name="publico_privada", type="string", length=255)
     */
    private $publicoPrivada;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_financiacion", type="string", length=255)
     */
    private $tipoFinanciacion;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var bool
     *
     * @ORM\Column(name="estado", type="boolean")
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_estrategico", type="string", length=255)
     */
    private $planEstrategico;

    /**
     * @var string
     *
     * @ORM\Column(name="coordina", type="string", length=255)
     */
    private $coordina;

    /**
     * @var string
     *
     * @ORM\Column(name="revisa", type="string", length=255)
     */
    private $revisa;

    /**
     * @var string
     *
     * @ORM\Column(name="apoya", type="string", length=255)
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
     * @ORM\Column(name="observaciones", type="string", length=255)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="beneficiaria", type="string", length=255)
     */
    private $beneficiaria;

    /**
     * @var string
     *
     * @ORM\Column(name="pobla_vulnerable", type="string", length=255)
     */
    private $poblaVulnerable;

    /**
     * @var string
     *
     * @ORM\Column(name="impacto_social", type="string", length=255)
     */
    private $impactoSocial;


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
     * Set tipoAdminist.
     *
     * @param string $tipoAdminist
     *
     * @return Projecto
     */
    public function setTipoAdminist($tipoAdminist)
    {
        $this->tipoAdminist = $tipoAdminist;

        return $this;
    }

    /**
     * Get tipoAdminist.
     *
     * @return string
     */
    public function getTipoAdminist()
    {
        return $this->tipoAdminist;
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
     * Set tipoFinanciacion.
     *
     * @param string $tipoFinanciacion
     *
     * @return Projecto
     */
    public function setTipoFinanciacion($tipoFinanciacion)
    {
        $this->tipoFinanciacion = $tipoFinanciacion;

        return $this;
    }

    /**
     * Get tipoFinanciacion.
     *
     * @return string
     */
    public function getTipoFinanciacion()
    {
        return $this->tipoFinanciacion;
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
     * Set estado.
     *
     * @param bool $estado
     *
     * @return Projecto
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado.
     *
     * @return bool
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set planEstrategico.
     *
     * @param string $planEstrategico
     *
     * @return Projecto
     */
    public function setPlanEstrategico($planEstrategico)
    {
        $this->planEstrategico = $planEstrategico;

        return $this;
    }

    /**
     * Get planEstrategico.
     *
     * @return string
     */
    public function getPlanEstrategico()
    {
        return $this->planEstrategico;
    }

    /**
     * Set coordina.
     *
     * @param string $coordina
     *
     * @return Projecto
     */
    public function setCoordina($coordina)
    {
        $this->coordina = $coordina;

        return $this;
    }

    /**
     * Get coordina.
     *
     * @return string
     */
    public function getCoordina()
    {
        return $this->coordina;
    }

    /**
     * Set revisa.
     *
     * @param string $revisa
     *
     * @return Projecto
     */
    public function setRevisa($revisa)
    {
        $this->revisa = $revisa;

        return $this;
    }

    /**
     * Get revisa.
     *
     * @return string
     */
    public function getRevisa()
    {
        return $this->revisa;
    }

    /**
     * Set apoya.
     *
     * @param string $apoya
     *
     * @return Projecto
     */
    public function setApoya($apoya)
    {
        $this->apoya = $apoya;

        return $this;
    }

    /**
     * Get apoya.
     *
     * @return string
     */
    public function getApoya()
    {
        return $this->apoya;
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
     * Set beneficiaria.
     *
     * @param string $beneficiaria
     *
     * @return Projecto
     */
    public function setBeneficiaria($beneficiaria)
    {
        $this->beneficiaria = $beneficiaria;

        return $this;
    }

    /**
     * Get beneficiaria.
     *
     * @return string
     */
    public function getBeneficiaria()
    {
        return $this->beneficiaria;
    }

    /**
     * Set poblaVulnerable.
     *
     * @param string $poblaVulnerable
     *
     * @return Projecto
     */
    public function setPoblaVulnerable($poblaVulnerable)
    {
        $this->poblaVulnerable = $poblaVulnerable;

        return $this;
    }

    /**
     * Get poblaVulnerable.
     *
     * @return string
     */
    public function getPoblaVulnerable()
    {
        return $this->poblaVulnerable;
    }

    /**
     * Set impactoSocial.
     *
     * @param string $impactoSocial
     *
     * @return Projecto
     */
    public function setImpactoSocial($impactoSocial)
    {
        $this->impactoSocial = $impactoSocial;

        return $this;
    }

    /**
     * Get impactoSocial.
     *
     * @return string
     */
    public function getImpactoSocial()
    {
        return $this->impactoSocial;
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
}
