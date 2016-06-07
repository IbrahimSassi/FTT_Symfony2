<?php

namespace FTT\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Candidature
 *
 * @ORM\Table(name="candidature", indexes={@ORM\Index(name="id_arbitre", columns={"id_arbitre"}), @ORM\Index(name="id_session", columns={"id_session"})})
 * @ORM\Entity
 */
class Candidature
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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_arbitre", referencedColumnName="id")
     * })
     */
    private $idArbitre;

    /**
     * @var \SessionArbitre
     *
     * @ORM\ManyToOne(targetEntity="SessionArbitre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_session", referencedColumnName="id")
     * })
     */
    private $idSession;

    function getId() {
        return $this->id;
    }

    function getIdArbitre() {
        return $this->idArbitre;
    }

    function getIdSession() {
        return $this->idSession;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdArbitre(\FTT\AdminBundle\Entity\User $idArbitre) {
        $this->idArbitre = $idArbitre;
    }

    function setIdSession(\FTT\AdminBundle\Entity\SessionArbitre $idSession) {
        $this->idSession = $idSession;
    }


}
