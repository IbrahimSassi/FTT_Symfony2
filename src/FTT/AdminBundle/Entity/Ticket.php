<?php

namespace FTT\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket", indexes={@ORM\Index(name="id_match", columns={"id_match"})})
 * @ORM\Entity
 */
class Ticket
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
     * @ORM\Column(name="nbr_ticket", type="integer", nullable=false)
     */
    private $nbrTicket;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix_ticket", type="integer", nullable=false)
     */
    private $prixTicket;

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

    function getNbrTicket() {
        return $this->nbrTicket;
    }

    function getPrixTicket() {
        return $this->prixTicket;
    }

    function getIdMatch() {
        return $this->idMatch;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNbrTicket($nbrTicket) {
        $this->nbrTicket = $nbrTicket;
    }

    function setPrixTicket($prixTicket) {
        $this->prixTicket = $prixTicket;
    }

    function setIdMatch($idMatch) {
        $this->idMatch = $idMatch;
    }


}
