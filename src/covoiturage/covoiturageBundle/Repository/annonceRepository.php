<?php

namespace covoiturage\covoiturageBundle\Repository;
use Utilisateurs\UtilisateursBundle\Entity\Utilisateurs;
use Doctrine\ORM\EntityRepository;

/**
 * annonceRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class annonceRepository extends EntityRepository
{
    
     public function getAnnonce(){     
        $qb = $this->createQueryBuilder('u')
                ->select('u')
                ->where('u.id  = 1');
                
        return $qb->getQuery()->getResult();
    }
}
