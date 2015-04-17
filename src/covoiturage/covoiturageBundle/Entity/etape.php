<?php

namespace covoiturage\covoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * etape
 *
 * @ORM\Table("etape")
 * @ORM\Entity(repositoryClass="covoiturage\covoiturageBundle\Repository\etapeRepository")
 */
class etape
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
public function __construct()
    {
       // parent::__construct();
        // your own logic
        
         
    }
    
     /**
     * @ORM\ManyToOne(targetEntity="covoiturage\covoiturageBundle\Entity\annonce",inversedBy="etapes")
     * @ORM\JoinColumn(nullable=true,onDelete="cascade")
     */
    private $annonce;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string",nullable=true ,length=255)
     */
    private $ville;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix",nullable=true, type="integer")
     */
    private $prix;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return etape
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     * @return etape
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set annonce
     *
     * @param \covoiturage\covoiturageBundle\Entity\annonce $annonce
     * @return etape
     */
    public function setAnnonce(\covoiturage\covoiturageBundle\Entity\annonce $annonce = null)
    {
        $this->annonce = $annonce;

        return $this;
    }

    /**
     * Get annonce
     *
     * @return \covoiturage\covoiturageBundle\Entity\annonce 
     */
    public function getAnnonce()
    {
        return $this->annonce;
    }
}
