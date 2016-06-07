<?php

namespace FTT\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanningArbitre
 *
 * @ORM\Table(name="planning_arbitre", indexes={@ORM\Index(name="id_arbitre", columns={"id_arbitre"})})
 * @ORM\Entity
 */
class PlanningArbitre
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
     * @ORM\Column(name="date_dispo", type="date", nullable=false)
     */
    private $dateDispo;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=5000, nullable=false)
     */
    private $description;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_arbitre", referencedColumnName="id")
     * })
     */
    private $idArbitre;

    function getId() {
        return $this->id;
    }

    function getDateDispo() {
        return $this->dateDispo;
    }

    function getDescription() {
        return $this->description;
    }

    function getIdArbitre() {
        return $this->idArbitre;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDateDispo(\DateTime $dateDispo) {
        $this->dateDispo = $dateDispo;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setIdArbitre(\FTT\AdminBundle\Entity\User $idArbitre) {
        $this->idArbitre = $idArbitre;
    }


}
