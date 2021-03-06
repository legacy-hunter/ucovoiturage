<?php

namespace Proxies\__CG__\covoiturage\covoiturageBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class annonce extends \covoiturage\covoiturageBundle\Entity\annonce implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'covoiturage\\covoiturageBundle\\Entity\\annonce' . "\0" . 'id', 'utilisateur', 'reservations', 'commentaires', 'etapes', '' . "\0" . 'covoiturage\\covoiturageBundle\\Entity\\annonce' . "\0" . 'lieuDepart', '' . "\0" . 'covoiturage\\covoiturageBundle\\Entity\\annonce' . "\0" . 'lieuArrive', '' . "\0" . 'covoiturage\\covoiturageBundle\\Entity\\annonce' . "\0" . 'dateDepart', '' . "\0" . 'covoiturage\\covoiturageBundle\\Entity\\annonce' . "\0" . 'nbPlace', '' . "\0" . 'covoiturage\\covoiturageBundle\\Entity\\annonce' . "\0" . 'prix', '' . "\0" . 'covoiturage\\covoiturageBundle\\Entity\\annonce' . "\0" . 'precisions', '' . "\0" . 'covoiturage\\covoiturageBundle\\Entity\\annonce' . "\0" . 'role');
        }

        return array('__isInitialized__', '' . "\0" . 'covoiturage\\covoiturageBundle\\Entity\\annonce' . "\0" . 'id', 'utilisateur', 'reservations', 'commentaires', 'etapes', '' . "\0" . 'covoiturage\\covoiturageBundle\\Entity\\annonce' . "\0" . 'lieuDepart', '' . "\0" . 'covoiturage\\covoiturageBundle\\Entity\\annonce' . "\0" . 'lieuArrive', '' . "\0" . 'covoiturage\\covoiturageBundle\\Entity\\annonce' . "\0" . 'dateDepart', '' . "\0" . 'covoiturage\\covoiturageBundle\\Entity\\annonce' . "\0" . 'nbPlace', '' . "\0" . 'covoiturage\\covoiturageBundle\\Entity\\annonce' . "\0" . 'prix', '' . "\0" . 'covoiturage\\covoiturageBundle\\Entity\\annonce' . "\0" . 'precisions', '' . "\0" . 'covoiturage\\covoiturageBundle\\Entity\\annonce' . "\0" . 'role');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (annonce $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setLieuDepart($lieuDepart)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLieuDepart', array($lieuDepart));

        return parent::setLieuDepart($lieuDepart);
    }

    /**
     * {@inheritDoc}
     */
    public function getLieuDepart()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLieuDepart', array());

        return parent::getLieuDepart();
    }

    /**
     * {@inheritDoc}
     */
    public function setLieuArrive($lieuArrive)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLieuArrive', array($lieuArrive));

        return parent::setLieuArrive($lieuArrive);
    }

    /**
     * {@inheritDoc}
     */
    public function getLieuArrive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLieuArrive', array());

        return parent::getLieuArrive();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDepart($dateDepart)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDepart', array($dateDepart));

        return parent::setDateDepart($dateDepart);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDepart()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDepart', array());

        return parent::getDateDepart();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbPlace($nbPlace)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbPlace', array($nbPlace));

        return parent::setNbPlace($nbPlace);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbPlace()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbPlace', array());

        return parent::getNbPlace();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrix($prix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', array($prix));

        return parent::setPrix($prix);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrix', array());

        return parent::getPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function setNote($note)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNote', array($note));

        return parent::setNote($note);
    }

    /**
     * {@inheritDoc}
     */
    public function getNote()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNote', array());

        return parent::getNote();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrecisions($precisions)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrecisions', array($precisions));

        return parent::setPrecisions($precisions);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrecisions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrecisions', array());

        return parent::getPrecisions();
    }

    /**
     * {@inheritDoc}
     */
    public function setUtilisateur(\Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $utilisateur = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUtilisateur', array($utilisateur));

        return parent::setUtilisateur($utilisateur);
    }

    /**
     * {@inheritDoc}
     */
    public function getUtilisateur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUtilisateur', array());

        return parent::getUtilisateur();
    }

    /**
     * {@inheritDoc}
     */
    public function addReservation(\covoiturage\covoiturageBundle\Entity\reservation $reservations)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addReservation', array($reservations));

        return parent::addReservation($reservations);
    }

    /**
     * {@inheritDoc}
     */
    public function removeReservation(\covoiturage\covoiturageBundle\Entity\reservation $reservations)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeReservation', array($reservations));

        return parent::removeReservation($reservations);
    }

    /**
     * {@inheritDoc}
     */
    public function getReservations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReservations', array());

        return parent::getReservations();
    }

    /**
     * {@inheritDoc}
     */
    public function addCommentaire(\covoiturage\covoiturageBundle\Entity\commentaire $commentaires)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCommentaire', array($commentaires));

        return parent::addCommentaire($commentaires);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCommentaire(\covoiturage\covoiturageBundle\Entity\commentaire $commentaires)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCommentaire', array($commentaires));

        return parent::removeCommentaire($commentaires);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentaires()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentaires', array());

        return parent::getCommentaires();
    }

    /**
     * {@inheritDoc}
     */
    public function addEtape(\covoiturage\covoiturageBundle\Entity\etape $etapes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEtape', array($etapes));

        return parent::addEtape($etapes);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEtape(\covoiturage\covoiturageBundle\Entity\etape $etapes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEtape', array($etapes));

        return parent::removeEtape($etapes);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtapes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtapes', array());

        return parent::getEtapes();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function setRole($role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRole', array($role));

        return parent::setRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function getRole()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRole', array());

        return parent::getRole();
    }

}
