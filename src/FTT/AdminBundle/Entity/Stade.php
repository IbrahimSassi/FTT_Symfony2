<?php

namespace FTT\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stade
 *
 * @ORM\Table(name="stade", indexes={@ORM\Index(name="id_complexe", columns={"id_complexe"})})
 * @ORM\Entity(repositoryClass="FTT\AdminBundle\Entity\StadeRepository")
 */
class Stade
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_stade", type="string", length=20, nullable=false)
     */
    private $nomStade;

    /**
     * @var integer
     *
     * @ORM\Column(name="capacite", type="integer", nullable=false)
     */
    private $capacite;

    /**
     * @var \Complexe
     *
     * @ORM\ManyToOne(targetEntity="Complexe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_complexe", referencedColumnName="id")
     * })
     */
    private $idComplexe;

    function getId() {
        return $this->id;
    }

    function getNomStade() {
        return $this->nomStade;
    }

    function getCapacite() {
        return $this->capacite;
    }

    function getIdComplexe() {
        return $this->idComplexe;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNomStade($nomStade) {
        $this->nomStade = $nomStade;
    }

    function setCapacite($capacite) {
        $this->capacite = $capacite;
    }

    function setIdComplexe(\FTT\AdminBundle\Entity\Complexe $idComplexe) {
        $this->idComplexe = $idComplexe;
    }
    
    public function __toString() {
        return $this->nomStade;
    }

}
