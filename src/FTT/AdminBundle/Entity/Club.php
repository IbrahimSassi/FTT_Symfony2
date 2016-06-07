<?php

namespace FTT\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Club
 *
 * @ORM\Table(name="club")
 * @ORM\Entity
 */
class Club
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
     * @ORM\Column(name="nom_club", type="string", length=100, nullable=false)
     */
    private $nomClub;

    /**
     * @var string
     *
     * @ORM\Column(name="logo_club", type="blob", nullable=true)
     */
    private $logoClub;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fondation", type="date", nullable=true)
     */
    private $dateFondation;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_club", type="string", length=250, nullable=true)
     */
    private $adresseClub;

    
    function getId() {
        return $this->id;
    }

    function getNomClub() {
        return $this->nomClub;
    }

    function getLogoClub() {
        return $this->logoClub;
    }

    function getDateFondation() {
        return $this->dateFondation;
    }

    function getAdresseClub() {
        return $this->adresseClub;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNomClub($nomClub) {
        $this->nomClub = $nomClub;
    }

    function setLogoClub($logoClub) {
        $this->logoClub = $logoClub;
    }

    function setDateFondation(\DateTime $dateFondation) {
        $this->dateFondation = $dateFondation;
    }

    function setAdresseClub($adresseClub) {
        $this->adresseClub = $adresseClub;
    }

    public function __toString() {
        return $this->nomClub;
    }



}
