<?php

namespace FTT\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdherentPronostic
 *
 * @ORM\Table(name="adherent_pronostic", indexes={@ORM\Index(name="id_adherent", columns={"id_adherent"}), @ORM\Index(name="id_matchs_pronostic", columns={"id_matchs_pronostic"})})
 * @ORM\Entity(repositoryClass="FTT\AdminBundle\Entity\AdherentPronosticRepository")
 */
class AdherentPronostic {

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
     * @ORM\Column(name="reponse", type="string", length=200, nullable=false)
     */
    private $reponse;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_joker", type="integer", nullable=false)
     */
    private $nbrJoker;

    /**
     * @var integer
     *
     * @ORM\Column(name="valeur_mise", type="integer", nullable=false)
     */
    private $valeurMise;

    /**
     * @var integer
     *
     * @ORM\Column(name="gain", type="integer", nullable=false)
     */
    private $gain;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_adherent", referencedColumnName="id")
     * })
     */
    private $idAdherent;

    /**
     * @var \MatchsPronostic
     *
     * @ORM\ManyToOne(targetEntity="MatchsPronostic")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_matchs_pronostic", referencedColumnName="id")
     * })
     */
    private $idMatchsPronostic;

    /**
     * @var \string
     *
     * @ORM\Column(name="imei_pronostic", type="string")
     */
    private $imeiPronostic;
    
    
    /**
     * @var integer
     *
     * @ORM\Column(name="etat_retrait_points", type="integer")
     */
    private $etatRetraitPoints = 0;

    function getId() {
        return $this->id;
    }

    function getReponse() {
        return $this->reponse;
    }

    function getNbrJoker() {
        return $this->nbrJoker;
    }

    function getValeurMise() {
        return $this->valeurMise;
    }

    function getGain() {
        return $this->gain;
    }

    function getIdAdherent() {
        return $this->idAdherent;
    }

    function getIdMatchsPronostic() {
        return $this->idMatchsPronostic;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setReponse($reponse) {
        $this->reponse = $reponse;
    }

    function setNbrJoker($nbrJoker) {
        $this->nbrJoker = $nbrJoker;
    }

    function setValeurMise($valeurMise) {
        $this->valeurMise = $valeurMise;
    }

    function setGain($gain) {
        $this->gain = $gain;
    }

    function setIdAdherent(\FTT\AdminBundle\Entity\User $idAdherent) {
        $this->idAdherent = $idAdherent;
    }

    function setIdMatchsPronostic(\FTT\AdminBundle\Entity\MatchsPronostic $idMatchsPronostic) {
        $this->idMatchsPronostic = $idMatchsPronostic;
    }

    function getImeiPronostic() {
        return $this->imeiPronostic;
    }

    function setImeiPronostic($imeiPronostic) {
        $this->imeiPronostic = $imeiPronostic;
    }

    function getEtatRetraitPoints() {
        return $this->etatRetraitPoints;
    }

    function setEtatRetraitPoints($etatRetraitPoints) {
        $this->etatRetraitPoints = $etatRetraitPoints;
    }




}
