<?php

namespace ucovoiturage\ucovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etape
 */
class Etape
{
    /**
     * @var string
     */
    private $ville;

    /**
     * @var integer
     */
    private $prix;

    /**
     * @var integer
     */
    private $idEtape;

    /**
     * @var \ucovoiturage\ucovoiturageBundle\Entity\Annonce
     */
    private $idAnnonce;


    /**
     * Set ville
     *
     * @param string $ville
     * @return Etape
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
     * @return Etape
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
     * Get idEtape
     *
     * @return integer 
     */
    public function getIdEtape()
    {
        return $this->idEtape;
    }

    /**
     * Set idAnnonce
     *
     * @param \ucovoiturage\ucovoiturageBundle\Entity\Annonce $idAnnonce
     * @return Etape
     */
    public function setIdAnnonce(\ucovoiturage\ucovoiturageBundle\Entity\Annonce $idAnnonce = null)
    {
        $this->idAnnonce = $idAnnonce;

        return $this;
    }

    /**
     * Get idAnnonce
     *
     * @return \ucovoiturage\ucovoiturageBundle\Entity\Annonce 
     */
    public function getIdAnnonce()
    {
        return $this->idAnnonce;
    }
}
