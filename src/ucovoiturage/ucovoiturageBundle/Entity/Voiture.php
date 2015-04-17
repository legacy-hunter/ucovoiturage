<?php

namespace ucovoiturage\ucovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voiture
 */
class Voiture
{
    /**
     * @var string
     */
    private $modele;

    /**
     * @var integer
     */
    private $nbPlaces;

    /**
     * @var string
     */
    private $matricule;

    /**
     * @var \ucovoiturage\ucovoiturageBundle\Entity\Personne
     */
    private $idPers;


    /**
     * Set modele
     *
     * @param string $modele
     * @return Voiture
     */
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return string 
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set nbPlaces
     *
     * @param integer $nbPlaces
     * @return Voiture
     */
    public function setNbPlaces($nbPlaces)
    {
        $this->nbPlaces = $nbPlaces;

        return $this;
    }

    /**
     * Get nbPlaces
     *
     * @return integer 
     */
    public function getNbPlaces()
    {
        return $this->nbPlaces;
    }

    /**
     * Get matricule
     *
     * @return string 
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set idPers
     *
     * @param \ucovoiturage\ucovoiturageBundle\Entity\Personne $idPers
     * @return Voiture
     */
    public function setIdPers(\ucovoiturage\ucovoiturageBundle\Entity\Personne $idPers = null)
    {
        $this->idPers = $idPers;

        return $this;
    }

    /**
     * Get idPers
     *
     * @return \ucovoiturage\ucovoiturageBundle\Entity\Personne 
     */
    public function getIdPers()
    {
        return $this->idPers;
    }
}
