<?php

namespace covoiturage\covoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * commentaire
 *
 * @ORM\Table("commentaire")
 * @ORM\Entity(repositoryClass="covoiturage\covoiturageBundle\Repository\commentaireRepository")
 */
class commentaire
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
     * @ORM\ManyToOne(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Utilisateurs",inversedBy="commentaires")
     * @ORM\JoinColumn(nullable=true)
     */
    private $utilisateur;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="covoiturage\covoiturageBundle\Entity\annonce",inversedBy="commentaires")
     * @ORM\JoinColumn(nullable=true)
     */ 
    private $annonce;
    
    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string",nullable=true, length=255)
     */
    private $comment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_comment", type="datetime")
     */
    private $dateComment;


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
     * Set comment
     *
     * @param string $comment
     * @return commentaire
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
     * @return commentaire
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
     * Set utilisateur
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $utilisateur
     * @return commentaire
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
     * @return commentaire
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
}
