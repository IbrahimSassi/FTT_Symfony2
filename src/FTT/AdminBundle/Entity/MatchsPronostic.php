<?php

namespace FTT\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MatchsPronostic
 *
 * @ORM\Table(name="matchs_pronostic", indexes={@ORM\Index(name="id_match", columns={"id_match"}), @ORM\Index(name="id_admin", columns={"id_admin"})})
 * @ORM\Entity(repositoryClass="FTT\AdminBundle\Entity\MatchsPronosticRepository")
 */
class MatchsPronostic
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
     * @ORM\Column(name="quota", type="integer", nullable=false)
     */
    private $quota;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_admin", referencedColumnName="id")
     * })
     */
    private $idAdmin;

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
     * @var \DateTime
     *
     * @ORM\Column(name="date_ajout", type="string")
     */
    private $dateAjout;

    

    function getId() {
        return $this->id;
    }

    function getQuota() {
        return $this->quota;
    }

    function getIdAdmin() {
        return $this->idAdmin;
    }

    function getIdMatch() {
        return $this->idMatch;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setQuota($quota) {
        $this->quota = $quota;
    }

    function setIdAdmin($idAdmin) {
        $this->idAdmin = $idAdmin;
    }

    function setIdMatch($idMatch) {
        $this->idMatch = $idMatch;
    }

    function getDateAjout() {
        return $this->dateAjout;
    }

    function setDateAjout($dateAjout) {
        $this->dateAjout = $dateAjout;
    }



}
