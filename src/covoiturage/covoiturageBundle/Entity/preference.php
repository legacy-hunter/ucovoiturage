<?php

namespace covoiturage\covoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * preference
 *
 * @ORM\Table("preference")
 * @ORM\Entity(repositoryClass="covoiturage\covoiturageBundle\Repository\preferenceRepository")
 */
class preference
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
     * @ORM\Column(name="preferences",nullable=true,type="string", length=255)
     */
    private $preferences;


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
     * Set preferences
     *
     * @param string $preferences
     * @return preference
     */
    public function setPreferences($preferences)
    {
        $this->preferences = $preferences;

        return $this;
    }

    /**
     * Get preferences
     *
     * @return string 
     */
    public function getPreferences()
    {
        return $this->preferences;
    }
}
