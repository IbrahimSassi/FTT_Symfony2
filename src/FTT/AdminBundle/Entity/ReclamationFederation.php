<?php

namespace FTT\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReclamationFederation
 *
 * @ORM\Table(name="reclamation_federation", indexes={@ORM\Index(name="id_adherent", columns={"id_user"})})
 * @ORM\Entity (repositoryClass="FTT\AdminBundle\Entity\ReclamationFederationRepository")
 */
class ReclamationFederation
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
     * @ORM\Column(name="sujet", type="string", length=50, nullable=false)
     */
    private $sujet;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse_reclamation", type="string", length=500, nullable=true)
     */
    private $reponseReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=1222, nullable=false)
     */
    private $email;

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

    function getSujet() {
        return $this->sujet;
    }

    function getDescription() {
        return $this->description;
    }

    function getReponseReclamation() {
        return $this->reponseReclamation;
    }

    function getEmail() {
        return $this->email;
    }

    function getIdUser() {
        return $this->idUser;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setSujet($sujet) {
        $this->sujet = $sujet;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setReponseReclamation($reponseReclamation) {
        $this->reponseReclamation = $reponseReclamation;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setIdUser($idUser) {
        $this->idUser = $idUser;
    }


}
