<?php
// src/Acme/UserBundle/Entity/User.php

namespace Utilisateurs\UtilisateursBundle\Entity;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use FOS\MessageBundle\Model\ParticipantInterface;

/**
 * 
 * @ORM\Entity(repositoryClass="Utilisateurs\UtilisateursBundle\Repository\UtilisateursRepository")
 * @ORM\Table(name="utilisateur")
 * @UniqueEntity(fields="matricule", message="Ce matricule existe déjà ")
 * @UniqueEntity(fields="cin", message="Ce cin déjà ")
 * @UniqueEntity(fields="numPermis", message="Ce numero de permis existe déjà ")
 * @UniqueEntity(fields="compte", message="Ce numero de compte existe déjà ")
 */
class Utilisateurs extends BaseUser implements ParticipantInterface
{
    
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\OneToOne(targetEntity="covoiturage\covoiturageBundle\Entity\preference",cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    
    protected $preference;

     /**
     * @ORM\OneToMany(targetEntity="covoiturage\covoiturageBundle\Entity\annonce",mappedBy="utilisateur",cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    
    protected $annonces;

     /**
     * @ORM\OneToMany(targetEntity="covoiturage\covoiturageBundle\Entity\voiture",mappedBy="utilisateur",cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true)
     */
  
    protected $voitures;
    
     /**
     * @ORM\OneToMany(targetEntity="covoiturage\covoiturageBundle\Entity\reservation",mappedBy="utilisateur",cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    
    protected $reservations;
    
    
     /**
     * @ORM\OneToMany(targetEntity="covoiturage\covoiturageBundle\Entity\commentaire",mappedBy="utilisateur",cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    
    protected $commentaires;
    
    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->annonces = new \Doctrine\Common\Collections\ArrayCollection();
        $this->voitures = new \Doctrine\Common\Collections\ArrayCollection();
        $this->reservations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->commentaires = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
     /**
     * @var string $nom
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
     /**
     * @var string $prenom
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
     private $prenom;
     
      /**
     * @var string $sexe
     *
     * @ORM\Column(name="sexe", type="string", length=9)
     */ 
    private $sexe;
     /**
     * @var integer $telephone
     *
     * @ORM\Column(name="telephone", type="integer", length=11)
     */
    private $telephone;
    
    /**
     * @var string $ville
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;
    
    /**
     * @var string $role
     *
     * @ORM\Column(name="role", type="string", length=20)
     */
    private $role;
    /**
     * @var integer $numPermis
     *
     * @ORM\Column(name="numPermis",nullable = true,type="integer", length=20)
     */
    private $numPermis;
    
    /**
     * @var integer $compte
     *
     * @ORM\Column(name="compte",nullable = true, type="integer", length=50)
     */
    private $compte;
    
    /**
     * @var \Date
     * @ORM\Column(name="dateNaissance" ,type="date")
     */
    private $dateNaissance;
    
    
     /**
     * @var integer $matricule
     *
     * @ORM\Column(name="matricule", type="integer", length=6,unique=true)
     *
     */
    
    private $matricule;
    
     /**
     * @var integer $cin
     *
     * @ORM\Column(name="cin", type="integer", length=50 )
     */
    
    private $cin;
    
     
    
    
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getSexe() {
        return $this->sexe;
    }

    function getTelephone() {
        return $this->telephone;
    }

    function getVille() {
        return $this->ville;
    }

    function getRole() {
        return $this->role;
    }

   
    function getCompte() {
        return $this->compte;
    }

    function getMatricule() {
        return $this->matricule;
    }

    function getCin() {
        return $this->cin;
    }

    

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setSexe($sexe) {
        $this->sexe = $sexe;
    }

   
    function setVille($ville) {
        $this->ville = $ville;
    }

    function setRole( $role) {
        $this->role = $role;
    }


   

    
    public function getNumPermis() {
        return $this->numPermis;
    }
    public function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    public function setCompte($compte) {
        $this->compte = $compte;
    }

    public function setMatricule($matricule) {
        $this->matricule = $matricule;
    }

    public function setCin($cin) {
        $this->cin = $cin;
    }

        public function getDateNaissance() {
        return $this->dateNaissance;
    }

    public function setNumPermis($numPermis) {
        $this->numPermis = $numPermis;
    }

    public function setDateNaissance(\DateTime $date = null){
        $this->dateNaissance = $date;
    }




    /**
     * Set preference
     *
     * @param \covoiturage\covoiturageBundle\Entity\preference $preference
     * @return Utilisateurs
     */
    public function setPreference(\covoiturage\covoiturageBundle\Entity\preference $preference = null)
    {
        $this->preference = $preference;

        return $this;
    }

    /**
     * Get preference
     *
     * @return \covoiturage\covoiturageBundle\Entity\preference 
     */
    public function getPreference()
    {
        return $this->preference;
    }

    /**
     * Add annonces
     *
     * @param \covoiturage\covoiturageBundle\Entity\annonce $annonces
     * @return Utilisateurs
     */
    public function addAnnonce(\covoiturage\covoiturageBundle\Entity\annonce $annonces)
    {
        $this->annonces[] = $annonces;

        return $this;
    }

    /**
     * Remove annonces
     *
     * @param \covoiturage\covoiturageBundle\Entity\annonce $annonces
     */
    public function removeAnnonce(\covoiturage\covoiturageBundle\Entity\annonce $annonces)
    {
        $this->annonces->removeElement($annonces);
    }

    /**
     * Get annonces
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnnonces()
    {
        return $this->annonces;
    }

    /**
     * Add voitures
     *
     * @param \covoiturage\covoiturageBundle\Entity\voiture $voitures
     * @return Utilisateurs
     */
    public function addVoiture(\covoiturage\covoiturageBundle\Entity\voiture $voitures)
    {
        $this->voitures[] = $voitures;

        return $this;
    }

    /**
     * Remove voitures
     *
     * @param \covoiturage\covoiturageBundle\Entity\voiture $voitures
     */
    public function removeVoiture(\covoiturage\covoiturageBundle\Entity\voiture $voitures)
    {
        $this->voitures->removeElement($voitures);
    }

    /**
     * Get voitures
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVoitures()
    {
        return $this->voitures;
    }

    /**
     * Add reservations
     *
     * @param \covoiturage\covoiturageBundle\Entity\reservation $reservations
     * @return Utilisateurs
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
     * @return Utilisateurs
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
}
