<?php

namespace Utilisateurs\UtilisateursBundle\Repository;
use Doctrine\ORM\EntityRepository;
use Utilisateurs\UtilisateursBundle\Entity\Utilisateurs;
class UtilisateursRepository extends EntityRepository
{
    
    public function getMatricule($user){     
        $qb = $this->createQueryBuilder('u')
                ->select('u')
                ->from('Utilisateurs\UtilisateursBundle\Entity\Utilisateurs','u')
                ->where('u.username like ?:user')
                ->setParameter('user', $user);
        return $qb->getQuery()->getResult();
    }
    
   
    
    
}

