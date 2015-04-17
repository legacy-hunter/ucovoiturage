<?php

namespace ucovoiturage\ucovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messagerie
 */
class Messagerie
{
    /**
     * @var string
     */
    private $sujet;

    /**
     * @var string
     */
    private $contenuMsg;

    /**
     * @var \DateTime
     */
    private $dateMsg;

    /**
     * @var integer
     */
    private $idMsg;

    /**
     * @var \ucovoiturage\ucovoiturageBundle\Entity\Personne
     */
    private $idPers2;

    /**
     * @var \ucovoiturage\ucovoiturageBundle\Entity\Personne
     */
    private $idPers1;


    /**
     * Set sujet
     *
     * @param string $sujet
     * @return Messagerie
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * Get sujet
     *
     * @return string 
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Set contenuMsg
     *
     * @param string $contenuMsg
     * @return Messagerie
     */
    public function setContenuMsg($contenuMsg)
    {
        $this->contenuMsg = $contenuMsg;

        return $this;
    }

    /**
     * Get contenuMsg
     *
     * @return string 
     */
    public function getContenuMsg()
    {
        return $this->contenuMsg;
    }

    /**
     * Set dateMsg
     *
     * @param \DateTime $dateMsg
     * @return Messagerie
     */
    public function setDateMsg($dateMsg)
    {
        $this->dateMsg = $dateMsg;

        return $this;
    }

    /**
     * Get dateMsg
     *
     * @return \DateTime 
     */
    public function getDateMsg()
    {
        return $this->dateMsg;
    }

    /**
     * Get idMsg
     *
     * @return integer 
     */
    public function getIdMsg()
    {
        return $this->idMsg;
    }

    /**
     * Set idPers2
     *
     * @param \ucovoiturage\ucovoiturageBundle\Entity\Personne $idPers2
     * @return Messagerie
     */
    public function setIdPers2(\ucovoiturage\ucovoiturageBundle\Entity\Personne $idPers2 = null)
    {
        $this->idPers2 = $idPers2;

        return $this;
    }

    /**
     * Get idPers2
     *
     * @return \ucovoiturage\ucovoiturageBundle\Entity\Personne 
     */
    public function getIdPers2()
    {
        return $this->idPers2;
    }

    /**
     * Set idPers1
     *
     * @param \ucovoiturage\ucovoiturageBundle\Entity\Personne $idPers1
     * @return Messagerie
     */
    public function setIdPers1(\ucovoiturage\ucovoiturageBundle\Entity\Personne $idPers1 = null)
    {
        $this->idPers1 = $idPers1;

        return $this;
    }

    /**
     * Get idPers1
     *
     * @return \ucovoiturage\ucovoiturageBundle\Entity\Personne 
     */
    public function getIdPers1()
    {
        return $this->idPers1;
    }
}
