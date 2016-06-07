<?php

namespace FTT\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table(name="notification", indexes={@ORM\Index(name="id_adherent", columns={"id_user"})})
 * @ORM\Entity
 */
class Notification
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
     * @ORM\Column(name="date_notification", type="date", nullable=false)
     */
    private $dateNotification;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_notification", type="string", length=200, nullable=false)
     */
    private $libelleNotification;

    /**
     * @var string
     *
     * @ORM\Column(name="description_notification", type="text", nullable=false)
     */
    private $descriptionNotification;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", nullable=true)
     */
    private $etat;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;

    function getId() {
        return $this->id;
    }

    function getDateNotification() {
        return $this->dateNotification;
    }

    function getLibelleNotification() {
        return $this->libelleNotification;
    }

    function getDescriptionNotification() {
        return $this->descriptionNotification;
    }

    function getEtat() {
        return $this->etat;
    }

    function getIdUser() {
        return $this->idUser;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDateNotification(\DateTime $dateNotification) {
        $this->dateNotification = $dateNotification;
    }

    function setLibelleNotification($libelleNotification) {
        $this->libelleNotification = $libelleNotification;
    }

    function setDescriptionNotification($descriptionNotification) {
        $this->descriptionNotification = $descriptionNotification;
    }

    function setEtat($etat) {
        $this->etat = $etat;
    }

    function setIdUser(\FTT\AdminBundle\Entity\User $idUser) {
        $this->idUser = $idUser;
    }


}
