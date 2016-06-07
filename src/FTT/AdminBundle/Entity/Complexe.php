<?php

namespace FTT\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Complexe
 *
 * @ORM\Table(name="complexe")
 * @ORM\Entity(repositoryClass="FTT\AdminBundle\Entity\ComplexeRepository")
 */
class Complexe
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
     * @ORM\Column(name="nom_complexe", type="string", length=200, nullable=false)
     */
    private $nomComplexe;

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=200, nullable=false)
     */
    private $place;

    /**
     * @var string
     *
     * @ORM\Column(name="image_complexe", type="blob", nullable=true)
     */
    private $imageComplexe;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_stade", type="integer", nullable=false)
     */
    private $nbStade;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $longitude;

    function getId() {
        return $this->id;
    }

    function getNomComplexe() {
        return $this->nomComplexe;
    }

    function getPlace() {
        return $this->place;
    }

    function getImageComplexe() {
        return $this->imageComplexe;
    }

    function getNbStade() {
        return $this->nbStade;
    }

    function getLatitude() {
        return $this->latitude;
    }

    function getLongitude() {
        return $this->longitude;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNomComplexe($nomComplexe) {
        $this->nomComplexe = $nomComplexe;
    }

    function setPlace($place) {
        $this->place = $place;
    }

    function setImageComplexe($imageComplexe) {
        $this->imageComplexe = $imageComplexe;
    }

    function setNbStade($nbStade) {
        $this->nbStade = $nbStade;
    }

    function setLatitude($latitude) {
        $this->latitude = $latitude;
    }

    function setLongitude($longitude) {
        $this->longitude = $longitude;
    }
public function __toString() {
        return $this->nomComplexe;
    }

}
