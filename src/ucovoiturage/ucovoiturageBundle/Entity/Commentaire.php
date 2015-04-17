<?php

namespace ucovoiturage\ucovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 */
class Commentaire
{
    /**
     * @var string
     * 
     */
    private $comment;

    /**
     * @var \DateTime
     */
    private $dateComment;

    /**
     * @var integer
     */
    private $idComment;

    /**
     * @var \ucovoiturage\ucovoiturageBundle\Entity\Annonce
     */
    private $idAnnonce;

    /**
     * @var \ucovoiturage\ucovoiturageBundle\Entity\Personne
     */
    private $idPers;


    /**
     * Set comment
     *
     * @param string $comment
     * @return Commentaire
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set dateComment
     *
     * @param \DateTime $dateComment
     * @return Commentaire
     */
    public function setDateComment($dateComment)
    {
        $this->dateComment = $dateComment;

        return $this;
    }

    /**
     * Get dateComment
     *
     * @return \DateTime 
     */
    public function getDateComment()
    {
        return $this->dateComment;
    }

    /**
     * Get idComment
     *
     * @return integer 
     */
    public function getIdComment()
    {
        return $this->idComment;
    }

    /**
     * Set idAnnonce
     *
     * @param \ucovoiturage\ucovoiturageBundle\Entity\Annonce $idAnnonce
     * @return Commentaire
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
     * @return Commentaire
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
