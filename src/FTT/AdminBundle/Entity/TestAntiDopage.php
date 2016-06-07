<?php

namespace FTT\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestAntiDopage
 *
 * @ORM\Table(name="test_anti_dopage", indexes={@ORM\Index(name="id_medecin", columns={"id_medecin"}), @ORM\Index(name="id_joueur_tester", columns={"id_joueur_tester"})})
 * @ORM\Entity(repositoryClass="FTT\AdminBundle\Entity\TestAntiDopageRepository")
 */
class TestAntiDopage
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
     * @ORM\Column(name="resultat", type="integer", nullable=false)
     */
    private $resultat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=20, nullable=true)
     */
    private $description;

    /**
     * @var \JoueurATester
     *
     * @ORM\ManyToOne(targetEntity="JoueurATester")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_joueur_tester", referencedColumnName="id")
     * })
     */
    private $idJoueurTester;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_medecin", referencedColumnName="id")
     * })
     */
    private $idMedecin;

    function getId() {
        return $this->id;
    }

    function getResultat() {
        return $this->resultat;
    }

    function getDescription() {
        return $this->description;
    }

    function getIdJoueurTester() {
        return $this->idJoueurTester;
    }

    function getIdMedecin() {
        return $this->idMedecin;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setResultat($resultat) {
        $this->resultat = $resultat;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setIdJoueurTester(\FTT\AdminBundle\Entity\JoueurATester $idJoueurTester) {
        $this->idJoueurTester = $idJoueurTester;
    }

    function setIdMedecin(\FTT\AdminBundle\Entity\User $idMedecin) {
        $this->idMedecin = $idMedecin;
    }


}
