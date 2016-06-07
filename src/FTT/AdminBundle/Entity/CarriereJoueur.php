<?php

namespace FTT\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarriereJoueur
 *
 * @ORM\Table(name="carriere_joueur", indexes={@ORM\Index(name="id_joueur", columns={"id_joueur"}), @ORM\Index(name="id_club", columns={"id_club"})})
 * @ORM\Entity
 */
class CarriereJoueur
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
     * @ORM\Column(name="type_carriere", type="string", length=100, nullable=false)
     */
    private $typeCarriere;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_carriere", type="date", nullable=false)
     */
    private $dateCarriere;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var \Club
     *
     * @ORM\ManyToOne(targetEntity="Club")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_club", referencedColumnName="id")
     * })
     */
    private $idClub;

    /**
     * @var \Joueur
     *
     * @ORM\ManyToOne(targetEntity="Joueur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_joueur", referencedColumnName="id")
     * })
     */
    private $idJoueur;

    function getId() {
        return $this->id;
    }

    function getTypeCarriere() {
        return $this->typeCarriere;
    }

    function getDateCarriere() {
        return $this->dateCarriere;
    }

    function getDescription() {
        return $this->description;
    }

    function getIdClub() {
        return $this->idClub;
    }

    function getIdJoueur() {
        return $this->idJoueur;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTypeCarriere($typeCarriere) {
        $this->typeCarriere = $typeCarriere;
    }

    function setDateCarriere(\DateTime $dateCarriere) {
        $this->dateCarriere = $dateCarriere;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setIdClub(\FTT\AdminBundle\Entity\Club $idClub) {
        $this->idClub = $idClub;
    }

    function setIdJoueur(\FTT\AdminBundle\Entity\Joueur $idJoueur) {
        $this->idJoueur = $idJoueur;
    }


}
