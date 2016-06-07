<?php

namespace FTT\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JoueurATester
 *
 * @ORM\Table(name="joueur_a_tester", indexes={@ORM\Index(name="id_match", columns={"id_match"}), @ORM\Index(name="id_responsablee", columns={"id_responsable"})})
 * @ORM\Entity
 */
class JoueurATester
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
     * @ORM\Column(name="date_test", type="date", nullable=false)
     */
    private $dateTest;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat_affectation", type="integer", nullable=false)
     */
    private $etatAffectation = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="joueur_choisi", type="integer", nullable=false)
     */
    private $joueurChoisi;

    /**
     * @var \MatchInfo
     *
     * @ORM\ManyToOne(targetEntity="MatchInfo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_match", referencedColumnName="id")
     * })
     */
    private $idMatch;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_responsable", referencedColumnName="id")
     * })
     */
    private $idResponsable;

    function getId() {
        return $this->id;
    }

    function getDateTest() {
        return $this->dateTest;
    }

    function getEtatAffectation() {
        return $this->etatAffectation;
    }

    function getJoueurChoisi() {
        return $this->joueurChoisi;
    }

    function getIdMatch() {
        return $this->idMatch;
    }

    function getIdResponsable() {
        return $this->idResponsable;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDateTest(\DateTime $dateTest) {
        $this->dateTest = $dateTest;
    }

    function setEtatAffectation($etatAffectation) {
        $this->etatAffectation = $etatAffectation;
    }

    function setJoueurChoisi($joueurChoisi) {
        $this->joueurChoisi = $joueurChoisi;
    }

    function setIdMatch($idMatch) {
        $this->idMatch = $idMatch;
    }

    function setIdResponsable($idResponsable) {
        $this->idResponsable = $idResponsable;
    }


}
