<?php

namespace FTT\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity
 */
class Evenement
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
     * @ORM\Column(name="nom_evenement", type="string", length=200, nullable=false)
     */
    private $nomEvenement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="type_evenement", type="string", length=20, nullable=false)
     */
    private $typeEvenement;

    function getId() {
        return $this->id;
    }

    function getNomEvenement() {
        return $this->nomEvenement;
    }

    function getDateDebut() {
        return $this->dateDebut;
    }

    function getDateFin() {
        return $this->dateFin;
    }

    function getTypeEvenement() {
        return $this->typeEvenement;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNomEvenement($nomEvenement) {
        $this->nomEvenement = $nomEvenement;
    }

    function setDateDebut(\DateTime $dateDebut) {
        $this->dateDebut = $dateDebut;
    }

    function setDateFin(\DateTime $dateFin) {
        $this->dateFin = $dateFin;
    }

    function setTypeEvenement($typeEvenement) {
        $this->typeEvenement = $typeEvenement;
    }

    public function __toString() {
        return $this->nomEvenement;
    }
}
