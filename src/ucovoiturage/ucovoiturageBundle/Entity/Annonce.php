<?php

namespace ucovoiturage\ucovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 */
class Annonce
{
    /**
     * @var string
     */
    private $lieuDep;

    /**
     * @var string
     */
    private $lieuArr;

    /**
     * @var \DateTime
     */
    private $dateDep;

    /**
     * @var integer
     */
    private $nbPlace;

    /**
     * @var integer
     * 
     */
    private $prix;

    /**
     * @var integer
     * @ORM\Column(nullable=true)
     */
    private $note;

    /**
     * @var string
     */
    private $precisions;

    /**
     * @var \DateTime
     */
    private $heure;

    /**
     * @var integer
     */
    private $idAnnonce;

    /**
     * @var \ucovoiturage\ucovoiturageBundle\Entity\Personne
     */
    private $idPers;


    /**
     * Set lieuDep
     *
     * @param string $lieuDep
     * @return Annonce
     */
    public function setLieuDep($lieuDep)
    {
        $this->lieuDep = $lieuDep;

        return $this;
    }

    /**
     * Get lieuDep
     *
     * @return string 
     */
    public function getLieuDep()
    {
        return $this->lieuDep;
    }

    /**
     * Set lieuArr
     *
     * @param string $lieuArr
     * @return Annonce
     */
    public function setLieuArr($lieuArr)
    {
        $this->lieuArr = $lieuArr;

        return $this;
    }

    /**
     * Get lieuArr
     *
     * @return string 
     */
    public function getLieuArr()
    {
        return $this->lieuArr;
    }

    /**
     * Set dateDep
     *
     * @param \DateTime $dateDep
     * @return Annonce
     */
    public function setDateDep($dateDep)
    {
        $this->dateDep = $dateDep;

        return $this;
    }

    /**
     * Get dateDep
     *
     * @return \DateTime 
     */
    public function getDateDep()
    {
        return $this->dateDep;
    }

    /**
     * Set nbPlace
     *
     * @param integer $nbPlace
     * @return Annonce
     */
    public function setNbPlace($nbPlace)
    {
        $this->nbPlace = $nbPlace;

        return $this;
    }

    /**
     * Get nbPlace
     *
     * @return integer 
     */
    public function getNbPlace()
    {
        return $this->nbPlace;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     * @return Annonce
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
     * Set note
     *
     * @param integer $note
     * @return Annonce
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set precisions
     *
     * @param string $precisions
     * @return Annonce
     */
    public function setPrecisions($precisions)
    {
        $this->precisions = $precisions;

        return $this;
    }

    /**
     * Get precisions
     *
     * @return string 
     */
    public function getPrecisions()
    {
        return $this->precisions;
    }

    /**
     * Set heure
     *
     * @param \DateTime $heure
     * @return Annonce
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get heure
     *
     * @return \DateTime 
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Get idAnnonce
     *
     * @return integer 
     */
    public function getIdAnnonce()
    {
        return $this->idAnnonce;
    }

    /**
     * Set idPers
     *
     * @param \ucovoiturage\ucovoiturageBundle\Entity\Personne $idPers
     * @return Annonce
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
