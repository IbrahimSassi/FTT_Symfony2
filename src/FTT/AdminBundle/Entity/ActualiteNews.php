<?php

namespace FTT\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ActualiteNews
 *
 * @ORM\Table(name="actualite_news", indexes={@ORM\Index(name="id_admin", columns={"id_admin"})})
 * @ORM\Entity(repositoryClass="FTT\AdminBundle\Entity\ActualiteNewsRepository")
 */
class ActualiteNews
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
     * @ORM\Column(name="titre_actualite", type="string", length=2000, nullable=false)
     */
    private $titreActualite;

    /**
     * @var string
     * @Assert\File(maxSize="600000")
     * @ORM\Column(name="image_actualite", type="blob", nullable=true)
     */
    private $imageActualite;

    /**
     * @var string
     * 
     * @ORM\Column(name="description_actualite", type="text", nullable=false)
     */
    private $descriptionActualite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_actualite", type="date", nullable=false)
     */
    private $dateActualite;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_admin", referencedColumnName="id")
     * })
     */
    private $idAdmin;


    function getId() {
        return $this->id;
    }

    function getTitreActualite() {
        return $this->titreActualite;
    }

    function getImageActualite() {
        return $this->imageActualite;
    }

    function getDescriptionActualite() {
        return $this->descriptionActualite;
    }

    function getDateActualite() {
        return $this->dateActualite;
    }

    function getIdAdmin() {
        return $this->idAdmin;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitreActualite($titreActualite) {
        $this->titreActualite = $titreActualite;
    }

    function setImageActualite($imageActualite) {
        $this->imageActualite = $imageActualite;
    }

    function setDescriptionActualite($descriptionActualite) {
        $this->descriptionActualite = $descriptionActualite;
    }

    function setDateActualite(\DateTime $dateActualite) {
        $this->dateActualite = $dateActualite;
    }

    function setIdAdmin(\FTT\AdminBundle\Entity\User $idAdmin) {
        $this->idAdmin = $idAdmin;
    }

    
    

}

