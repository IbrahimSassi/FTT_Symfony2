<?php

namespace FTT\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DonsClubs
 *
 * @ORM\Table(name="dons_clubs", indexes={@ORM\Index(name="id_club", columns={"id_club"}), @ORM\Index(name="id_don", columns={"id_don"})})
 * @ORM\Entity
 */
class DonsClubs
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_affection", type="date", nullable=false)
     */
    private $dateAffection;

    /**
     * @var \Dons
     *
     * @ORM\ManyToOne(targetEntity="Dons")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_don", referencedColumnName="id")
     * })
     */
    private $idDon;

    /**
     * @var \Club
     *
     * @ORM\ManyToOne(targetEntity="Club")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_club", referencedColumnName="id")
     * })
     */
    private $idClub;

    function getId() {
        return $this->id;
    }

    function getDateAffection() {
        return $this->dateAffection;
    }

    function getIdDon() {
        return $this->idDon;
    }

    function getIdClub() {
        return $this->idClub;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDateAffection(\DateTime $dateAffection) {
        $this->dateAffection = $dateAffection;
    }

    function setIdDon(\FTT\AdminBundle\Entity\Dons $idDon) {
        $this->idDon = $idDon;
    }

    function setIdClub(\FTT\AdminBundle\Entity\Club $idClub) {
        $this->idClub = $idClub;
    }


}
