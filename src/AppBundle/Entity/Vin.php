<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vin
 *
 * @ORM\Table(name="vin")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VinRepository")
 */
class Vin
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="appellation", type="string", length=255)
     */
    private $appellation;

    /**
     * @var int
     *
     * @ORM\Column(name="annee", type="smallint")
     */
    private $annee;
    
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;
    
    /**
     * @var string
     *
     * @ORM\Column(name="cepage", type="string", length=255)
     */
    private $cepage;
    
    /**
     * @var int
     *
     * @ORM\Column(name="alcool", type="smallint")
     */
    private $alcool;
    
    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;
    
    /**
     * @var int
     *
     * @ORM\Column(name="score", type="smallint")
     */
    private $score;
    
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
    
    /**
     * @var string
     *
     * @ORM\Column(name="avis", type="text")
     */
    private $avis;
    
    /**
     * @ORM\ManyToOne(targetEntity="Exposant")
     * @ORM\JoinColumn(nullable=false)
     */
    private $exposant;
    
    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;
    

    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set appellation
     *
     * @param string $appellation
     *
     * @return Vin
     */
    public function setAppellation($appellation)
    {
        $this->appellation = $appellation;

        return $this;
    }

    /**
     * Get appellation
     *
     * @return string
     */
    public function getAppellation()
    {
        return $this->appellation;
    }

    /**
     * Set domaine
     *
     * @param string $domaine
     *
     * @return Vin
     */
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;

        return $this;
    }

    /**
     * Get domaine
     *
     * @return string
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * Set annee
     *
     * @param integer $annee
     *
     * @return Vin
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return int
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Vin
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set cepage
     *
     * @param string $cepage
     *
     * @return Vin
     */
    public function setCepage($cepage)
    {
        $this->cepage = $cepage;

        return $this;
    }

    /**
     * Get cepage
     *
     * @return string
     */
    public function getCepage()
    {
        return $this->cepage;
    }

    /**
     * Set alcool
     *
     * @param integer $alcool
     *
     * @return Vin
     */
    public function setAlcool($alcool)
    {
        $this->alcool = $alcool;

        return $this;
    }

    /**
     * Get alcool
     *
     * @return integer
     */
    public function getAlcool()
    {
        return $this->alcool;
    }

    /**
     * Set prix
     *
     * @param $prix
     *
     * @return Vin
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return \int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set score
     *
     * @param integer $score
     *
     * @return Vin
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return integer
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Vin
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set avis
     *
     * @param string $avis
     *
     * @return Vin
     */
    public function setAvis($avis)
    {
        $this->avis = $avis;

        return $this;
    }

    /**
     * Get avis
     *
     * @return string
     */
    public function getAvis()
    {
        return $this->avis;
    }

    /**
     * Set exposant
     *
     * @param \AppBundle\Entity\Exposant $exposant
     *
     * @return Vin
     */
    public function setExposant(\AppBundle\Entity\Exposant $exposant)
    {
        $this->exposant = $exposant;

        return $this;
    }

    /**
     * Get exposant
     *
     * @return \AppBundle\Entity\Exposant
     */
    public function getExposant()
    {
        return $this->exposant;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Vin
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }
}
