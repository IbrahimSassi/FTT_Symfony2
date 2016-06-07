<?php

namespace FTT\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarriereArbitre
 *
 * @ORM\Table(name="carriere_arbitre", indexes={@ORM\Index(name="id_match", columns={"id_match"}), @ORM\Index(name="id_arbitre", columns={"id_arbitre"})})
 * @ORM\Entity
 */
class CarriereArbitre
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
     * @ORM\Column(name="evaluation_match", type="string", length=250, nullable=false)
     */
    private $evaluationMatch;

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

    function getEvaluationMatch() {
        return $this->evaluationMatch;
    }

    function getIdArbitre() {
        return $this->idArbitre;
    }

    function getIdMatch() {
        return $this->idMatch;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setEvaluationMatch($evaluationMatch) {
        $this->evaluationMatch = $evaluationMatch;
    }

    function setIdArbitre(\FTT\AdminBundle\Entity\User $idArbitre) {
        $this->idArbitre = $idArbitre;
    }

    function setIdMatch(\FTT\AdminBundle\Entity\MatchInfo $idMatch) {
        $this->idMatch = $idMatch;
    }



}
