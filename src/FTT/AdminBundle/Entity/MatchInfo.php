<?php

namespace FTT\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Match
 *
 * @ORM\Table(name="match_info", indexes={@ORM\Index(name="id_arbitre", columns={"id_arbitre"}), @ORM\Index(name="id_joueur1", columns={"id_joueur1"}), @ORM\Index(name="id_joueur2", columns={"id_joueur2"}), @ORM\Index(name="id_joueur3", columns={"id_joueur3"}), @ORM\Index(name="id_stade", columns={"id_stade"}), @ORM\Index(name="id_joueur4", columns={"id_joueur4"}), @ORM\Index(name="id_evenement", columns={"id_evenement"})})
 * @ORM\Entity(repositoryClass="FTT\AdminBundle\Entity\MatchInfoRepository")
 */
class MatchInfo
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
     * @ORM\Column(name="date_match", type="date", nullable=false)
     */
    private $dateMatch;

    /**
     * @var string
     *
     * @ORM\Column(name="type_match", type="string", length=200, nullable=true)
     */
    private $typeMatch;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @Assert\NotBlank()
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_arbitre", referencedColumnName="id")
     * 
     * })
     */
    private $idArbitre;

    /**
     * @var \Evenement
     *
     * @ORM\ManyToOne(targetEntity="Evenement")
     * @Assert\NotBlank()
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_evenement", referencedColumnName="id")
     * })
     */
    private $idEvenement;

    /**
     * @var \Joueur
     *
     * @ORM\ManyToOne(targetEntity="Joueur")
     * @Assert\NotBlank()
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_joueur1", referencedColumnName="id")
     * })
     */
    private $idJoueur1;

    /**
     * @var \Joueur
     *
     * @ORM\ManyToOne(targetEntity="Joueur")
     * @Assert\NotBlank()
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_joueur2", referencedColumnName="id")
     * })
     */
    private $idJoueur2;

    /**
     * @var \Joueur
     *
     * @ORM\ManyToOne(targetEntity="Joueur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_joueur3", referencedColumnName="id")
     * })
     */
    private $idJoueur3;

    /**
     * @var \Joueur
     *
     * @ORM\ManyToOne(targetEntity="Joueur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_joueur4", referencedColumnName="id")
     * })
     */
    private $idJoueur4;

    /**
     * @var \Stade
     *
     * @ORM\ManyToOne(targetEntity="Stade")
     * @Assert\NotBlank()
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_stade", referencedColumnName="id")
     * })
     */
    private $idStade;

    
    
    public function __construct()
    {
        $this->dateMatch = new \DateTime();
    }
    
    function getId() {
        return $this->id;
    }

    function getDateMatch() {
        return $this->dateMatch;
    }

    function getTypeMatch() {
        return $this->typeMatch;
    }

    function getIdArbitre() {
        return $this->idArbitre;
    }

    function getIdEvenement() {
        return $this->idEvenement;
    }

    function getIdJoueur1() {
        return $this->idJoueur1;
    }

    function getIdJoueur2() {
        return $this->idJoueur2;
    }

    function getIdJoueur3() {
        return $this->idJoueur3;
    }

    function getIdJoueur4() {
        return $this->idJoueur4;
    }

    function getIdStade() {
        return $this->idStade;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDateMatch(\DateTime $dateMatch) {
        $this->dateMatch = $dateMatch;
    }

    function setTypeMatch($typeMatch) {
        $this->typeMatch = $typeMatch;
    }

    function setIdArbitre(\FTT\AdminBundle\Entity\User $idArbitre) {
        $this->idArbitre = $idArbitre;
    }

    function setIdEvenement(\FTT\AdminBundle\Entity\Evenement $idEvenement) {
        $this->idEvenement = $idEvenement;
    }

    function setIdJoueur1(\FTT\AdminBundle\Entity\Joueur $idJoueur1) {
        $this->idJoueur1 = $idJoueur1;
    }

    function setIdJoueur2(\FTT\AdminBundle\Entity\Joueur $idJoueur2) {
        $this->idJoueur2 = $idJoueur2;
    }

    function setIdJoueur3(\FTT\AdminBundle\Entity\Joueur $idJoueur3) {
        $this->idJoueur3 = $idJoueur3;
    }

    function setIdJoueur4(\FTT\AdminBundle\Entity\Joueur $idJoueur4) {
        $this->idJoueur4 = $idJoueur4;
    }

    function setIdStade(\FTT\AdminBundle\Entity\Stade $idStade) {
        $this->idStade = $idStade;
    }

        public function __toString() {
        return $this->getIdJoueur1()->getNomJoueur()." ".$this->getIdJoueur1()->getPrenomJoueur()." vs ".$this->getIdJoueur2()->getNomJoueur()." ".$this->getIdJoueur2()->getPrenomJoueur()." - ".$this->getDateMatch()->format('d-m-Y');
    }


}
