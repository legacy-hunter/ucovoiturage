<?php

namespace covoiturage\covoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * payement
 *
 * @ORM\Table("payement")
 * @ORM\Entity(repositoryClass="covoiturage\covoiturageBundle\Repository\payementRepository")
 */
class payement
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
     * @var integer
     *
     * @ORM\Column(name="compte", type="integer")
     */
    private $compte;

    /**
     * @var integer
     *
     * @ORM\Column(name="montant", type="integer")
     */
    private $montant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_payement", type="datetime")
     */
    private $datePayement;


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
     * Set compte
     *
     * @param integer $compte
     * @return payement
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
     * Set montant
     *
     * @param integer $montant
     * @return payement
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
     * Set datePayement
     *
     * @param \DateTime $datePayement
     * @return payement
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
}
