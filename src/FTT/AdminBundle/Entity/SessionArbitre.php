<?php

namespace FTT\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SessionArbitre
 *
 * @ORM\Table(name="session_arbitre")
 * @ORM\Entity
 */
class SessionArbitre
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
     * @ORM\Column(name="type_session_arbitre", type="string", length=200, nullable=false)
     */
    private $typeSessionArbitre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_session_arbitre", type="date", nullable=false)
     */
    private $dateSessionArbitre;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_session_arbitre", type="string", length=11, nullable=false)
     */
    private $lieuSessionArbitre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_ouvert_depot", type="date", nullable=false)
     */
    private $dateOuvertDepot;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_cloture_depot", type="date", nullable=false)
     */
    private $dateClotureDepot;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_arbitre_session", type="integer", nullable=false)
     */
    private $nbArbitreSession;

    function getId() {
        return $this->id;
    }

    function getTypeSessionArbitre() {
        return $this->typeSessionArbitre;
    }

    function getDateSessionArbitre() {
        return $this->dateSessionArbitre;
    }

    function getLieuSessionArbitre() {
        return $this->lieuSessionArbitre;
    }

    function getDateOuvertDepot() {
        return $this->dateOuvertDepot;
    }

    function getDateClotureDepot() {
        return $this->dateClotureDepot;
    }

    function getNbArbitreSession() {
        return $this->nbArbitreSession;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTypeSessionArbitre($typeSessionArbitre) {
        $this->typeSessionArbitre = $typeSessionArbitre;
    }

    function setDateSessionArbitre(\DateTime $dateSessionArbitre) {
        $this->dateSessionArbitre = $dateSessionArbitre;
    }

    function setLieuSessionArbitre($lieuSessionArbitre) {
        $this->lieuSessionArbitre = $lieuSessionArbitre;
    }

    function setDateOuvertDepot(\DateTime $dateOuvertDepot) {
        $this->dateOuvertDepot = $dateOuvertDepot;
    }

    function setDateClotureDepot(\DateTime $dateClotureDepot) {
        $this->dateClotureDepot = $dateClotureDepot;
    }

    function setNbArbitreSession($nbArbitreSession) {
        $this->nbArbitreSession = $nbArbitreSession;
    }


}
