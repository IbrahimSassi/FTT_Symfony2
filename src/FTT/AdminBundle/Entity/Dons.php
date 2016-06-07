<?php

namespace FTT\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dons
 *
 * @ORM\Table(name="dons")
 * @ORM\Entity
 */
class Dons
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
     * @ORM\Column(name="type_don", type="string", length=20, nullable=false)
     */
    private $typeDon;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_session", type="date", nullable=true)
     */
    private $dateSession;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_session", type="string", length=50, nullable=true)
     */
    private $lieuSession;

    /**
     * @var string
     *
     * @ORM\Column(name="description_don", type="string", length=50, nullable=true)
     */
    private $descriptionDon;

    function getId() {
        return $this->id;
    }

    function getTypeDon() {
        return $this->typeDon;
    }

    function getDateSession() {
        return $this->dateSession;
    }

    function getLieuSession() {
        return $this->lieuSession;
    }

    function getDescriptionDon() {
        return $this->descriptionDon;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTypeDon($typeDon) {
        $this->typeDon = $typeDon;
    }

    function setDateSession(\DateTime $dateSession) {
        $this->dateSession = $dateSession;
    }

    function setLieuSession($lieuSession) {
        $this->lieuSession = $lieuSession;
    }

    function setDescriptionDon($descriptionDon) {
        $this->descriptionDon = $descriptionDon;
    }
    
    public function __toString() {
        return $this->typeDon." - ".$this->descriptionDon;
    }



}
