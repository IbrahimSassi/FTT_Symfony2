<?php

namespace FTT\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TicketAdherent
 *
 * @ORM\Table(name="ticket_adherent", indexes={@ORM\Index(name="id_adherent", columns={"id_adherent"}), @ORM\Index(name="id_ticket", columns={"id_ticket"})})
 * @ORM\Entity
 */
class TicketAdherent
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
     * @ORM\Column(name="date_reservation", type="date", nullable=true)
     */
    private $dateReservation;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", nullable=false)
     */
    private $etat;

    /**
     * @var \Ticket
     *
     * @ORM\ManyToOne(targetEntity="Ticket")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ticket", referencedColumnName="id")
     * })
     */
    private $idTicket;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_adherent", referencedColumnName="id")
     * })
     */
    private $idAdherent;

    function getId() {
        return $this->id;
    }

    function getDateReservation() {
        return $this->dateReservation;
    }

    function getEtat() {
        return $this->etat;
    }

    function getIdTicket() {
        return $this->idTicket;
    }

    function getIdAdherent() {
        return $this->idAdherent;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDateReservation(\DateTime $dateReservation) {
        $this->dateReservation = $dateReservation;
    }

    function setEtat($etat) {
        $this->etat = $etat;
    }

    function setIdTicket($idTicket) {
        $this->idTicket = $idTicket;
    }

    function setIdAdherent($idAdherent) {
        $this->idAdherent = $idAdherent;
    }


}
