<?php

namespace ucovoiturage\ucovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payement
 */
class Payement
{
    /**
     * @var integer
     */
    private $compte;

    /**
     * @var \DateTime
     */
    private $datePayement;

    /**
     * @var integer
     */
    private $montant;

    /**
     * @var integer
     */
    private $idPayement;

    /**
     * @var \ucovoiturage\ucovoiturageBundle\Entity\Annonce
     */
    private $idAnnonce;

    /**
     * @var \ucovoiturage\ucovoiturageBundle\Entity\Personne
     */
    private $idPers;


    /**
     * Set compte
     *
     * @param integer $compte
     * @return Payement
     */
    public function setCompte($compte)
    {
        $this->compte = $compte;

        return $this;
    }

    /**
     * Get compte
     *
     * @return integer 
     */
    public function getCompte()
    {
        return $this->compte;
    }

    /**
     * Set datePayement
     *
     * @param \DateTime $datePayement
     * @return Payement
     */
    public function setDatePayement($datePayement)
    {
        $this->datePayement = $datePayement;

        return $this;
    }

    /**
     * Get datePayement
     *
     * @return \DateTime 
     */
    public function getDatePayement()
    {
        return $this->datePayement;
    }

    /**
     * Set montant
     *
     * @param integer $montant
     * @return Payement
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return integer 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Get idPayement
     *
     * @return integer 
     */
    public function getIdPayement()
    {
        return $this->idPayement;
    }

    /**
     * Set idAnnonce
     *
     * @param \ucovoiturage\ucovoiturageBundle\Entity\Annonce $idAnnonce
     * @return Payement
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
     * @return Payement
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
