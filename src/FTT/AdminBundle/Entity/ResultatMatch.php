<?php

namespace FTT\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResultatMatch
 *
 * @ORM\Table(name="resultat_match", indexes={@ORM\Index(name="id_match", columns={"id_match"})})
 * @ORM\Entity(repositoryClass="FTT\AdminBundle\Entity\ResultatMatchRepository")
 */
class ResultatMatch
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
     * @var integer
     *
     * @ORM\Column(name="rslt_joueur1", type="integer", nullable=false)
     */
    private $rsltJoueur1;

    /**
     * @var integer
     *
     * @ORM\Column(name="rslt_joueur2", type="integer", nullable=false)
     */
    private $rsltJoueur2;

    /**
     * @var string
     *
     * @ORM\Column(name="details", type="text", nullable=true)
     */
    private $details;

    /**
     * @var string
     *
     * @ORM\Column(name="compte_rendu_match", type="text", nullable=true)
     */
    private $compteRenduMatch;


    /**
     * @var \MatchInfo
     *
     * @ORM\ManyToOne(targetEntity="MatchInfo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_match", referencedColumnName="id")
     * })
     */
    private $idMatch;

    function getId() {
        return $this->id;
    }

    function getRsltJoueur1() {
        return $this->rsltJoueur1;
    }

    function getRsltJoueur2() {
        return $this->rsltJoueur2;
    }

    function getDetails() {
        return $this->details;
    }

    function getCompteRenduMatch() {
        return $this->compteRenduMatch;
    }

    function getIdMatch() {
        return $this->idMatch;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setRsltJoueur1($rsltJoueur1) {
        $this->rsltJoueur1 = $rsltJoueur1;
    }

    function setRsltJoueur2($rsltJoueur2) {
        $this->rsltJoueur2 = $rsltJoueur2;
    }

    function setDetails($details) {
        $this->details = $details;
    }

    function setCompteRenduMatch($compteRenduMatch) {
        $this->compteRenduMatch = $compteRenduMatch;
    }


    function setIdMatch(\FTT\AdminBundle\Entity\MatchInfo $idMatch) {
        $this->idMatch = $idMatch;
    }


}
