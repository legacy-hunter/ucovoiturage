<?php
// src/Acme/UserBundle/Entity/User.php

namespace Utilisateurs\UtilisateursBundle\Entity;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use FOS\MessageBundle\Model\ParticipantInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * 
 * @ORM\Entity(repositoryClass="Utilisateurs\UtilisateursBundle\Repository\UtilisateursRepository")
 * @ORM\Table(name="utilisateur")
 * @UniqueEntity(fields="matricule", message="Ce matricule existe déjà ")
 * @UniqueEntity(fields="cin", message="Ce cin existe déjà ")
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
     * 
     *     @Assert\Regex(
     *     pattern= "/[a-zA-Z -]/",
     *     match=true,
     *     message="Donnez un prenom valide"
     * )
     */
    private $nom;
     /**
     * @var string $prenom
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     *   @Assert\Regex(
     *     pattern= "/[a-zA-Z -]/",
     *     match=true,
     *     message="Donnez un prenom valide"
     * )
     */
     private $prenom;
     
      /**
     * @var string $sexe
     *
     * @ORM\Column(name="sexe", type="string", length=9)
     */ 
    private $sexe;
     /**
     * @var string $telephone
     * @Assert\Regex(
     *     pattern="/[0-9]/",
     *     match=true,
     *     message="Votre contact doit etre numerique"
     * )
     * @ORM\Column(name="telephone", type="string", length=11)
     */
    private $telephone;
    
    /**
     * @var string $ville
     * @Assert\Regex(
     *     pattern= "/[a-zA-Z -]/",
     *     match=true,
     *     message="Donnez une ville valide")
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
     * @var string $numPermis
     *@Assert\Regex(
     *     pattern="/[0-9]/",
     *     match=true,
     *     message="Votre contact doit etre numerique"
     * )
     * @ORM\Column(name="numPermis",nullable = true,type="string", length=20)
     */
    private $numPermis;
    
    /**
     * @var string $compte
     *@Assert\Regex(
     *     pattern="/[0-9]/",
     *     match=true,
     *     message="Votre contact doit etre numerique"
     * )
     * @ORM\Column(name="compte",nullable = true, type="string", length=50)
     */
    private $compte;
    
    /**
     * @var \Date
     * @ORM\Column(name="dateNaissance" ,type="date")
     */
    private $dateNaissance;
    
    
     /**
     * @var string $matricule
     *@Assert\Regex(
     *     pattern="/[0-9]/",
     *     match=true,
     *     message="Donnez un matricule valide"
     * )
     * @ORM\Column(name="matricule", type="string", length=6,unique=true)
     *
     */
    
    private $matricule;
    
     /**
     * @var string $cin
     *@Assert\Regex(
     *     pattern="/[0-9 a-zA-Z]/",
     *     match=true,
     *     message="Donnez un cin ou numero passport valide"
     * )
     * @ORM\Column(name="cin", type="string", length=50 )
     */
    
    private $cin;
    
    /**
     * @var string $modeleVoiture
     *
     * @ORM\Column(name="modeleVoiture", type="string", length=255,nullable=true)
     * 
     *    
     */
    private $modeleVoiture;
    
    /**
     * @var string $matriculeVoiture
     *@Assert\Regex(
     *     pattern="/[0-9]/",
     *     match=true,
     *     message="Donnez un matricule de voiture valide"
     * )
     * @ORM\Column(name="matriculeVoiture", type="string", length=10,unique=true,nullable=true)
     *
     */
    private $matriculeVoiture;
    
    
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

    /**
     * Set modeleVoiture
     *
     * @param string $modeleVoiture
     * @return Utilisateurs
     */
    public function setModeleVoiture($modeleVoiture)
    {
        $this->modeleVoiture = $modeleVoiture;

        return $this;
    }

    /**
     * Get modeleVoiture
     *
     * @return string 
     */
    public function getModeleVoiture()
    {
        return $this->modeleVoiture;
    }

    /**
     * Set matriculeVoiture
     *
     * @param string $matriculeVoiture
     * @return Utilisateurs
     */
    public function setMatriculeVoiture($matriculeVoiture)
    {
        $this->matriculeVoiture = $matriculeVoiture;

        return $this;
    }

    /**
     * Get matriculeVoiture
     *
     * @return string 
     */
    public function getMatriculeVoiture()
    {
        return $this->matriculeVoiture;
    }
}
