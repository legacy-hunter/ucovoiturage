<?php

namespace covoiturage\covoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * reservation
 *
 * @ORM\Table("reservation")
 * @ORM\Entity(repositoryClass="covoiturage\covoiturageBundle\Repository\reservationRepository")
 */
class reservation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
     /**
     * @ORM\ManyToOne(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Utilisateurs",inversedBy="reservations")
     * @ORM\JoinColumn(nullable=true)
     */
    private $utilisateur_send;
    
     /**
     * @ORM\ManyToOne(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Utilisateurs",inversedBy="reservations")
     * @ORM\JoinColumn(nullable=true)
     */
    private $utilisateur_rec;

     /**
     * @ORM\ManyToOne(targetEntity="covoiturage\covoiturageBundle\Entity\annonce",inversedBy="reservations")
     * @ORM\JoinColumn(nullable=true)
     */
    private $annonce;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_res", type="date")
     */
    private $dateRes;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", nullable=true, type="string", length=255)
     */
    private $commentaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_place_res", type="integer",nullable=true)
     */
    private $nbPlaceRes;

    
     /**
     * @var string
     *
     * @ORM\Column(name="etat", nullable=true, type="string", length=20)
     */
     private $etat;
    
    

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
     * Set dateRes
     *
     * @param \DateTime $dateRes
     * @return reservation
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
     * @return reservation
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
     * Set nbPlaceRes
     *
     * @param integer $nbPlaceRes
     * @return reservation
     */
    public function setNbPlaceRes($nbPlaceRes)
    {
        $this->nbPlaceRes = $nbPlaceRes;

        return $this;
    }

    /**
     * Get nbPlaceRes
     *
     * @return integer 
     */
    public function getNbPlaceRes()
    {
        return $this->nbPlaceRes;
    }

    /**
     * Set utilisateur
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $utilisateur
     * @return reservation
     */
    public function setUtilisateur(\Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $utilisateur = null)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs 
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set annonce
     *
     * @param \covoiturage\covoiturageBundle\Entity\annonce $annonce
     * @return reservation
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

    /**
     * Set etat
     *
     * @param string $etat
     * @return reservation
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set utilisateur_send
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $utilisateurSend
     * @return reservation
     */
    public function setUtilisateurSend(\Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $utilisateurSend = null)
    {
        $this->utilisateur_send = $utilisateurSend;

        return $this;
    }

    /**
     * Get utilisateur_send
     *
     * @return \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs 
     */
    public function getUtilisateurSend()
    {
        return $this->utilisateur_send;
    }

    /**
     * Set utilisateur_rec
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $utilisateurRec
     * @return reservation
     */
    public function setUtilisateurRec(\Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $utilisateurRec = null)
    {
        $this->utilisateur_rec = $utilisateurRec;

        return $this;
    }

    /**
     * Get utilisateur_rec
     *
     * @return \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs 
     */
    public function getUtilisateurRec()
    {
        return $this->utilisateur_rec;
    }
}
