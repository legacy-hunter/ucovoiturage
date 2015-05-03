<?php

namespace covoiturage\covoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * voiture
 *
 * @ORM\Table("voiture")
 * @ORM\Entity(repositoryClass="covoiturage\covoiturageBundle\Repositorys\voitureRepository")
 */
class voiture
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
     * @var string
     *
     * @ORM\Column(name="matricule", type="string",nullable=true)
     */
    
    private $matricule;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Utilisateurs",inversedBy="voitures")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $utilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="modele", type="string", length=255,nullable=true)
     */
    private $modele;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_place", type="integer",nullable=true)
     */
    private $nbPlace;


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
     * Set matricule
     *
     * @param integer $matricule
     * @return voiture
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return integer 
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set modele
     *
     * @param string $modele
     * @return voiture
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
     * Set nbPlace
     *
     * @param integer $nbPlace
     * @return voiture
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
     * Set utilisateur
     *
     * @param integer $utilisateur
     * @return voiture
     */
    public function setUtilisateur($utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return integer 
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }
}
