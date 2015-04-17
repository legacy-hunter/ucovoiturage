<?php

namespace covoiturage\covoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * annonce
 *
 * @ORM\Table("annonce")
 * @ORM\Entity(repositoryClass="covoiturage\covoiturageBundle\Repository\annonceRepository")
 */
class annonce
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
     * @ORM\ManyToOne(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Utilisateurs",inversedBy="annonces")
     * @ORM\JoinColumn(nullable=true)
     */   
    protected $utilisateur;
     
    /**
     * @ORM\OneToMany(targetEntity="covoiturage\covoiturageBundle\Entity\reservation",mappedBy="annonce")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $reservations;

    
    /**
     * @ORM\OneToMany(targetEntity="covoiturage\covoiturageBundle\Entity\commentaire",mappedBy="annonce")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $commentaires;
    
    /**
     * @ORM\OneToMany(targetEntity="covoiturage\covoiturageBundle\Entity\etape",mappedBy="annonce")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $etapes;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="lieu_depart", type="string", length=255)
     */
    private $lieuDepart;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_arrive", type="string", length=255)
     */
    private $lieuArrive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_depart", type="datetime")
     */
    private $dateDepart;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_place", type="integer",nullable=true)
     */
    private $nbPlace;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer",nullable=true)
     */
    private $prix;


    /**
     * @var string
     *
     * @ORM\Column(name="precisions", type="string" ,length=255,nullable=true)
     */
    private $precisions;

     /**
     * @var string $role
     *
     * @ORM\Column(name="role", type="string", length=20)
     */
    private $role;

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
     * Set lieuDepart
     *
     * @param string $lieuDepart
     * @return annonce
     */
    public function setLieuDepart($lieuDepart)
    {
        $this->lieuDepart = $lieuDepart;

        return $this;
    }

    /**
     * Get lieuDepart
     *
     * @return string 
     */
    public function getLieuDepart()
    {
        return $this->lieuDepart;
    }

    /**
     * Set lieuArrive
     *
     * @param string $lieuArrive
     * @return annonce
     */
    public function setLieuArrive($lieuArrive)
    {
        $this->lieuArrive = $lieuArrive;

        return $this;
    }

    /**
     * Get lieuArrive
     *
     * @return string 
     */
    public function getLieuArrive()
    {
        return $this->lieuArrive;
    }

    /**
     * Set dateDepart
     *
     * @param \DateTime $dateDepart
     * @return annonce
     */
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    /**
     * Get dateDepart
     *
     * @return \DateTime 
     */
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * Set nbPlace
     *
     * @param integer $nbPlace
     * @return annonce
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
     * @return annonce
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
     * @return annonce
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
     * @return annonce
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
     * Set utilisateur
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $utilisateur
     * @return annonce
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
     * Add reservations
     *
     * @param \covoiturage\covoiturageBundle\Entity\reservation $reservations
     * @return annonce
     */
    public function addReservation(\covoiturage\covoiturageBundle\Entity\reservation $reservations)
    {
        $this->reservations[] = $reservations;

        return $this;
    }

    /**
     * Remove reservations
     *
     * @param \covoiturage\covoiturageBundle\Entity\reservation $reservations
     */
    public function removeReservation(\covoiturage\covoiturageBundle\Entity\reservation $reservations)
    {
        $this->reservations->removeElement($reservations);
    }

    /**
     * Get reservations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * Add commentaires
     *
     * @param \covoiturage\covoiturageBundle\Entity\commentaire $commentaires
     * @return annonce
     */
    public function addCommentaire(\covoiturage\covoiturageBundle\Entity\commentaire $commentaires)
    {
        $this->commentaires[] = $commentaires;

        return $this;
    }

    /**
     * Remove commentaires
     *
     * @param \covoiturage\covoiturageBundle\Entity\commentaire $commentaires
     */
    public function removeCommentaire(\covoiturage\covoiturageBundle\Entity\commentaire $commentaires)
    {
        $this->commentaires->removeElement($commentaires);
    }

    /**
     * Get commentaires
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * Add etapes
     *
     * @param \covoiturage\covoiturageBundle\Entity\etape $etapes
     * @return annonce
     */
    public function addEtape(\covoiturage\covoiturageBundle\Entity\etape $etapes)
    {
        $this->etapes[] = $etapes;

        return $this;
    }

    /**
     * Remove etapes
     *
     * @param \covoiturage\covoiturageBundle\Entity\etape $etapes
     */
    public function removeEtape(\covoiturage\covoiturageBundle\Entity\etape $etapes)
    {
        $this->etapes->removeElement($etapes);
    }

    /**
     * Get etapes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEtapes()
    {
        return $this->etapes;
    }
    
    public function __toString()
{
     
    return "$this->id";
}

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reservations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->commentaires = new \Doctrine\Common\Collections\ArrayCollection();
        $this->etapes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set role
     *
     * @param string $role
     * @return annonce
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }
}
