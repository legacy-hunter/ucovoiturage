<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InscriptionController
 *
 * @author legacy
 */
namespace ucovoiturage\ucovoiturageBundle\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 use ucovoiturage\ucovoiturageBundle\Entity\Personne;

class InscriptionController extends Controller {
     public function InscriptionAction()
    {
        return $this->render('ucovoiturageBundle:Default:test.html.twig');
    }
    
    
    public function TraitInscripAction(Request $request){
     if($request->getMethod()=='POST'){
      $nom = $request->get('nom');
      $prenom = $request->get('prenom');
      $cin = $request->get('cin');
      $user = $request->get('user');
      $pass = $request->get('password');
      $email = $request->get('email');
      $contact = $request->get('contact');
      $date = $request->get('date');
      $matricule = $request->get('matricule');
      $permis = $request->get('compte');
      $ville = $request->get('ville');
      $compte = $request->get('compte');
      $personne = new Personne();
      $personne->setCin($cin);
      $personne->setNom($nom);
      $personne->setPrenom($prenom);
      $personne->setUsername($user);
      $personne->setPassword($pass);
      $personne->setEmail($email);
      $personne->setContact($contact);
      $personne->setVille($ville);
      $personne->setDatenaissance($date);
      $personne->setMatricule($matricule);
      $personne->setNumPermis($permis);
      $personne->setCompte($compte);
      $personne->setRole("Conducteur");
      $personne->setSexe("M");
      $em = $this->getDoctrine()->getEntityManager();
      $em->persist($personne);
      $em->flush();
     
      }
        
         return $this->render('ucovoiturageBundle:Default:Inscription.html.twig');
    }
          
}
