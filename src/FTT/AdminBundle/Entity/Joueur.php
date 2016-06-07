<?php

namespace FTT\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Joueur
 *
 * @ORM\Table(name="joueur", indexes={@ORM\Index(name="id_club", columns={"id_club"})})
 * @ORM\Entity(repositoryClass="FTT\AdminBundle\Entity\JoueurRepository")
 */
class Joueur
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
     * @ORM\Column(name="nom_joueur", type="string", length=60, nullable=false)
     */
    private $nomJoueur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_joueur", type="string", length=60, nullable=false)
     */
    private $prenomJoueur;

    /**
     * @var string
     *
     * @ORM\Column(name="image_joueur", type="blob", nullable=true)
     */
    private $imageJoueur;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie_joueur", type="string", length=60, nullable=false)
     */
    private $categorieJoueur;

    /**
     * @var string
     *
     * @ORM\Column(name="type_joueur", type="string", length=60, nullable=false)
     */
    private $typeJoueur;

    /**
     * @var integer
     *
     * @ORM\Column(name="classement_national", type="integer", nullable=true)
     */
    private $classementNational;

    /**
     * @var integer
     *
     * @ORM\Column(name="classement_international", type="integer", nullable=true)
     */
    private $classementInternational;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_victoires", type="integer", nullable=false)
     */
    private $nbVictoires = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_defaite", type="integer", nullable=false)
     */
    private $nbDefaite = '0';

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

    function getNomJoueur() {
        return $this->nomJoueur;
    }

    function getPrenomJoueur() {
        return $this->prenomJoueur;
    }

    function getImageJoueur() {
        return $this->imageJoueur;
    }

    function getCategorieJoueur() {
        return $this->categorieJoueur;
    }

    function getTypeJoueur() {
        return $this->typeJoueur;
    }

    function getClassementNational() {
        return $this->classementNational;
    }

    function getClassementInternational() {
        return $this->classementInternational;
    }

    function getNbVictoires() {
        return $this->nbVictoires;
    }

    function getNbDefaite() {
        return $this->nbDefaite;
    }

    function getIdClub() {
        return $this->idClub;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNomJoueur($nomJoueur) {
        $this->nomJoueur = $nomJoueur;
    }

    function setPrenomJoueur($prenomJoueur) {
        $this->prenomJoueur = $prenomJoueur;
    }

    function setImageJoueur($imageJoueur) {
        $this->imageJoueur = $imageJoueur;
    }

    function setCategorieJoueur($categorieJoueur) {
        $this->categorieJoueur = $categorieJoueur;
    }

    function setTypeJoueur($typeJoueur) {
        $this->typeJoueur = $typeJoueur;
    }

    function setClassementNational($classementNational) {
        $this->classementNational = $classementNational;
    }

    function setClassementInternational($classementInternational) {
        $this->classementInternational = $classementInternational;
    }

    function setNbVictoires($nbVictoires) {
        $this->nbVictoires = $nbVictoires;
    }

    function setNbDefaite($nbDefaite) {
        $this->nbDefaite = $nbDefaite;
    }

    function setIdClub($idClub) {
        $this->idClub = $idClub;
    }


    public function __toString() {
        return $this->nomJoueur." ".$this->prenomJoueur;
    }

}
