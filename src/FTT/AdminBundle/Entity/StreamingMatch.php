<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FTT\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * StreamingMatch
 *
 * @ORM\Table(name="streaming_match", indexes={@ORM\Index(name="id_match", columns={"id_match"})})
 * @ORM\Entity
 */
class StreamingMatch {
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \MatchInfo
     * @Assert\NotBlank()
     * @ORM\ManyToOne(targetEntity="MatchInfo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_match", referencedColumnName="id")
     * })
     */
    private $idMatch;

     /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="lien_d_integration", type="text", nullable=true)
     */
    
    private $LienDIntegration;
    
    function getId() {
        return $this->id;
    }

    function getIdMatch() {
        return $this->idMatch;
    }

    function getLienDIntegration() {
        return $this->LienDIntegration;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdMatch(\FTT\AdminBundle\Entity\MatchInfo $idMatch) {
        $this->idMatch = $idMatch;
    }

    function setLienDIntegration($LienDIntegration) {
        $this->LienDIntegration = $LienDIntegration;
    }



    
}
