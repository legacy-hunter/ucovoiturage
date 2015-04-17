<?php

namespace ucovoiturage\ucovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 */
class Reservation
{
    /**
     * @var \DateTime
     */
    private $dateRes;

    /**
     * @var string
     */
    private $commentaire;

    /**
     * @var integer
     */
    private $nbPlace;

    /**
     * @var integer
     */
    private $idRes;

    /**
     * @var \ucovoiturage\ucovoiturageBundle\Entity\Annonce
     */
    private $idAnnonce;

    /**
     * @var \ucovoiturage\ucovoiturageBundle\Entity\Personne
     */
    private $idPers;


    /**
     * Set dateRes
     *
     * @param \DateTime $dateRes
     * @return Reservation
     */
    public function setDateRes($dateRes)
    {
        $this->dateRes = $dateRes;

        return $this;
    }

    /**
     * Get dateRes
     *
     * @return \DateTime 
     */
    public function getDateRes()
    {
        return $this->dateRes;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Reservation
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set nbPlace
     *
     * @param integer $nbPlace
     * @return Reservation
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
     * Get idRes
     *
     * @return integer 
     */
    public function getIdRes()
    {
        return $this->idRes;
    }

    /**
     * Set idAnnonce
     *
     * @param \ucovoiturage\ucovoiturageBundle\Entity\Annonce $idAnnonce
     * @return Reservation
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

    /**
     * Set idPers
     *
     * @param \ucovoiturage\ucovoiturageBundle\Entity\Personne $idPers
     * @return Reservation
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
