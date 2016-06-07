<?php

namespace FTT\AdminBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use HWI\Bundle\OAuthBundle\Security\Core\User\OAuthUser;
use EWZ\Bundle\RecaptchaBundle\Validator\Constraints as Recaptcha;

/**
 * @ORM\Entity(repositoryClass="FTT\AdminBundle\Entity\UserRepository")
 * @ORM\Table(name="user")  
 */
class User extends BaseUser {

    /**
     * @ORM\Id      
     * @ORM\Column(type="integer")      
     * @ORM\GeneratedValue(strategy="AUTO")      
     */
    protected $id;

    public function __construct() {
        parent::__construct();
        // your own logic     } }  
    }

    /**
     * @var string
     *
     * @ORM\Column(name="google_id", type="string", length=255, unique=true, nullable=true)
     */
    protected $googleId;
    
    /**
     * @var string
     *
     * @ORM\Column(name="facebook_id", type="string", length=255, unique=true, nullable=true)
     */
    protected $facebookId;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_user", type="string", length=80, nullable=false)
     */
    private $nomUser;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_user", type="string", length=80, nullable=false)
     */
    private $prenomUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="age_user", type="integer", nullable=false)
     */
    private $ageUser;

    /**
     * @var string
     *
     * @ORM\Column(name="image_user", type="blob", nullable=true)
     */
    private $imageUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="tel_user", type="integer", nullable=true)
     */
    private $telUser;

    /**
     * @var string
     *
     * @ORM\Column(name="num_compte_bancaire_adherent", type="string", length=50, nullable=true)
     */
    private $numCompteBancaireAdherent;

    /**
     * @var integer
     *
     * @ORM\Column(name="points_adherent", type="integer", nullable=true)
     */
    private $pointsAdherent = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="solde_adherent", type="integer", nullable=true)
     */
    private $soldeAdherent = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="immatricule", type="string", length=20, nullable=true)
     */
    private $immatricule;

    /**
     * @var string
     *
     * @ORM\Column(name="departement_admin", type="string", length=80, nullable=true)
     */
    private $departementAdmin;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie_arbitre", type="string", length=80, nullable=true)
     */
    private $categorieArbitre ="autres";

    /**
     * @var string
     *
     * @ORM\Column(name="specialite_medecin", type="string", length=50, nullable=true)
     */
    private $specialiteMedecin;

    /**
     * @var integer
     *
     * @ORM\Column(name="quota_responsable", type="integer", nullable=true)
     */
    private $quotaResponsable = '10';

    /**
     * @Recaptcha\IsTrue
     */
    public $recaptcha;

    function getId() {
        return $this->id;
    }

    function getNomUser() {
        return $this->nomUser;
    }

    function getPrenomUser() {
        return $this->prenomUser;
    }

    function getAgeUser() {
        return $this->ageUser;
    }

    function getImageUser() {
        return $this->imageUser;
    }

    function getTelUser() {
        return $this->telUser;
    }

    function getNumCompteBancaireAdherent() {
        return $this->numCompteBancaireAdherent;
    }

    function getPointsAdherent() {
        return $this->pointsAdherent;
    }

    function getSoldeAdherent() {
        return $this->soldeAdherent;
    }

    function getImmatricule() {
        return $this->immatricule;
    }

    function getDepartementAdmin() {
        return $this->departementAdmin;
    }

    function getCategorieArbitre() {
        return $this->categorieArbitre;
    }

    function getSpecialiteMedecin() {
        return $this->specialiteMedecin;
    }

    function getQuotaResponsable() {
        return $this->quotaResponsable;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNomUser($nomUser) {
        $this->nomUser = $nomUser;
    }

    function setPrenomUser($prenomUser) {
        $this->prenomUser = $prenomUser;
    }

    function setAgeUser($ageUser) {
        $this->ageUser = $ageUser;
    }

    function setImageUser($imageUser) {
        $this->imageUser = $imageUser;
    }

    function setTelUser($telUser) {
        $this->telUser = $telUser;
    }

    function setNumCompteBancaireAdherent($numCompteBancaireAdherent) {
        $this->numCompteBancaireAdherent = $numCompteBancaireAdherent;
    }

    function setPointsAdherent($pointsAdherent) {
        $this->pointsAdherent = $pointsAdherent;
    }

    function setSoldeAdherent($soldeAdherent) {
        $this->soldeAdherent = $soldeAdherent;
    }

    function setImmatricule($immatricule) {
        $this->immatricule = $immatricule;
    }

    function setDepartementAdmin($departementAdmin) {
        $this->departementAdmin = $departementAdmin;
    }

    function setCategorieArbitre($categorieArbitre) {
        $this->categorieArbitre = $categorieArbitre;
    }

    function setSpecialiteMedecin($specialiteMedecin) {
        $this->specialiteMedecin = $specialiteMedecin;
    }

    function setQuotaResponsable($quotaResponsable) {
        $this->quotaResponsable = $quotaResponsable;
    }

    function getGoogleId() {
        return $this->googleId;
    }

    function setGoogleId($googleId) {
        $this->googleId = $googleId;
    }
    
    function getRecaptcha() {
        return $this->recaptcha;
    }

    function setRecaptcha($recaptcha) {
        $this->recaptcha = $recaptcha;
    }
    
    
    function getFacebookId() {
        return $this->facebookId;
    }

    function setFacebookId($facebookId) {
        $this->facebookId = $facebookId;
    }

        public function __toString() {
        return $this->nomUser . " " . $this->prenomUser;
    }

}
?> 


