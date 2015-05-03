<?php

namespace covoiturage\covoiturageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use covoiturage\covoiturageBundle\Form\annonceType2;
use covoiturage\covoiturageBundle\Entity\annonce;
use Symfony\Component\HttpFoundation\Request;
use Utilisateurs\UtilisateursBundle\Entity\Utilisateurs;
use \covoiturage\covoiturageBundle\Entity\reservation;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AnnonceController extends Controller {

    public function annonceFormulaireAction(){
        $user = $this->container->get('security.context')->getToken()->getUser();
        $u = new Utilisateurs();
        $u = $user;
        $entity = new annonce();
        $form = $this->createForm(new annonceType2(), $entity);
       $request = $this->get('request');
       $form->bind($request);
        $em = $this->getDoctrine()->getEntityManager();
        // $userManager = $this->container->get('fos_user.user_manager');
        //   $user = $userManager->findUserByUsername($this->container->get('security.context')
        // ->getToken()
        //   ->getUser());
        // $em1 = $this->getDoctrine()->getManager();
        // $id = $em1->getRepository('covoiturageBundle:annonce')->getUser_id($user);
        //$form->handleRequest($request);
        // $this->getUser()->getId();
        
        if ($form->isValid()) {
            $user = $this->container->get('security.context')->getToken()->getUser();
            $u = new Utilisateurs();
            $u = $user;
            $nbPlace = $request->get('nbPlace');
            $prix = $request->get('prix');
            $choix = $request->get('choix');
            $lieuDepart = $request->get('origin');
            $lieuArrive = $request->get('destination');
            // $id = $u->getId();
            if($u->getRole()=='1'){
                $choix="passager";
            }
            if($u->getRole()=='0'){
                $choix="conducteur";
            }
            $entity->setNbPlace($nbPlace);
            
            if($u->getRole()=="1"){
                $entity->setNbPlace("1");
            }
             if($u->getRole()=="2" && $choix=="passager"){
                $entity->setNbPlace("1");
            }
            $entity->setLieuArrive($lieuArrive);
            $entity->setLieuDepart($lieuDepart);
            $entity->setPrix($prix);
            $entity->setUtilisateur($u);
            $entity->setRole($choix);
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('msg', 'annonce crée avec succes');
            return ($this->render('covoiturageBundle:Default:annonce.html.twig', array('form' => $form->createView(), 'role' => $u->getRole())));
        
        }
        return ($this->render('covoiturageBundle:Default:annonce.html.twig', array('form' => $form->createView(), 'role' => $u->getRole())));
    }

    public function listeAnnonceAction() {

        $em = $this->getDoctrine()->getManager();
        $u = new Utilisateurs();
        $u = $this->container->get('security.context')->getToken()->getUser();
        $id = $u->getId();
        $annonces = $em->getRepository('covoiturageBundle:annonce')->findBy(array('utilisateur' => $id));
        return($this->render('covoiturageBundle:Default:listeAnnonce.html.twig', array('annonces' => $annonces)));
    }

    public function suppAnnonceAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('covoiturageBundle:annonce')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find annonce entity.');
        } else {
            $em->remove($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('liste_annonce'));
        }
    }

    public function listeCovoituragesAction(Request $request) {
        if($request->getMethod()=='POST'){      
            $keyVilleDep =$request->get('origin');
            $keyVilleArr = $request->get('destination');
            $keyDateDep = $request->get('dateRech');
            if(empty($keyDateDep) && empty($keyVilleArr) && empty($keyVilleDep)){
                 $em = $this->getDoctrine()->getManager();
                 $annonces = $em->getRepository('covoiturageBundle:annonce')->allAnnonces();    
                 $annoncesPag  = $this->get('knp_paginator')->paginate($annonces,$request->query->get('page', 1),2);
                 $this->get('session')->getFlashBag()->add('rech_msg', 'Veuillez renseigner au moins un champ');
                 return($this->render('covoiturageBundle:Default:listeCovoiturages.html.twig', array('annoncesPag' => $annoncesPag)));
            }else{
        $em = $this->getDoctrine()->getManager();
        $annonces = $em->getRepository('covoiturageBundle:annonce')->recherche($keyVilleDep,$keyVilleArr,$keyDateDep);
        $annoncesPag  = $this->get('knp_paginator')->paginate($annonces,$request->query->get('page', 1),2);
        return($this->render('covoiturageBundle:Default:listeCovoiturages.html.twig', array('annoncesPag' => $annoncesPag)));  
            }
        }    
        $em = $this->getDoctrine()->getManager();      
        $annonces = $em->getRepository('covoiturageBundle:annonce')->allAnnonces();    
        $annoncesPag  = $this->get('knp_paginator')->paginate($annonces,$request->query->get('page', 1),2);     
        return($this->render('covoiturageBundle:Default:listeCovoiturages.html.twig', array('annoncesPag' => $annoncesPag)));
    }

    public function modifierProfilAction() {
        return($this->render('covoiturageBundle:Default:modif_profil.html.twig'));
    }

    public function valider_modif_profilAction(Request $request) {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $u = new Utilisateurs();
        $u = $user;
        $em = $this->getDoctrine()->getManager();
        // $util = $em->getRepository('UtilisateursBundle:Utilisateurs')->findBy(array('username'=>$u->getUsername()));
        // $util->
        if ($request->getMethod() == 'POST') {
            $role = $request->get('type');
            if ($role == 'conducteur') {
                $role = '0';
            } else if ($role == 'passager') {
                $role = '1';
            } else {
                $role = '2';
            }
            $numPermis = $request->get('numPermis');
            $numCompte = $request->get('numCompte');
            $u->setRole($role);

            $u->setNumPermis($numPermis);
            $u->setCompte($numCompte);
            $em->merge($u);
            $em->flush();
        }
        return($this->render('covoiturageBundle:Default:modif_profil.html.twig'));
    }

    public function detailsAnnonceAction($id) {
        $em = $this->getDoctrine()->getManager();
        $annonce = new annonce();
        $user = new Utilisateurs();
        $annonce = $em->getRepository('covoiturageBundle:annonce')->find($id);
        $etapes = $em->getRepository('covoiturageBundle:etape')->findBy(array('annonce'=>$annonce));
        $user = $annonce->getUtilisateur();
        return($this->render('covoiturageBundle:Default:details_annonce.html.twig', array('annonce' => $annonce, 'user' => $user,'etapes'=>$etapes)));
    }

    public function sendMessageAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $annonce = new annonce();
        $user = new Utilisateurs();
        $annonce = $em->getRepository('covoiturageBundle:annonce')->find($id);
        $user = $annonce->getUtilisateur();
        if ($request->getMethod() == 'POST') {
            $message = \Swift_Message::newInstance()
                    ->setSubject($request->get('objet'))
                    ->setFrom('brahim.guedich@gmail.com')
                    ->setTo($user->getEmailCanonical())
                    ->setCharset('utf-8')
                    ->setContentType('text/html')
                    ->setBody($request->get('message'));
            $this->get('mailer')->send($message);
        }
        return($this->render('covoiturageBundle:Default:details_annonce.html.twig', array('annonce' => $annonce, 'user' => $user)));
    }

    public function envoi_resAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $annonce = new annonce();
        $u = new Utilisateurs();
        $u = $this->container->get('security.context')->getToken()->getUser();
        $annonce = $em->getRepository('covoiturageBundle:annonce')->find($id);
        if ($request->getMethod() == 'POST') {
            $reservation = new reservation();
            $dt = new \DateTime();
            $dt->format('Y-m-d');
            $reservation->setDateRes($dt);
            $reservation->setAnnonce($annonce);
            $reservation->setUtilisateurSend($u);
            $reservation->setUtilisateurRec($annonce->getUtilisateur());
            $reservation->setCommentaire($request->get('message'));
           // $reservation->setNbPlaceRes($request->get('nbPlace'));
            $reservation->setEtat("en attente ");
            $em->persist($reservation);
            $em->flush();
            $message = \Swift_Message::newInstance()
                    ->setSubject($request->get('objet'))
                    ->setFrom($u->getEmailCanonical())
                    ->setTo($annonce->getUtilisateur()->getEmailCanonical())
                    ->setCharset('utf-8')
                    ->setContentType('text/html')
                    ->setBody("La personne de ".$u->getNom()." ".$u->getPrenom()." vous envoyé une demande de reservation "
                            ."Mot laissé : ".$request->get('message')
                            . "Connectez vous pour lui reserver une place sur www.ult-covoiturage.tn"
                            . " Merci "
                            . "Admin");
            $this->get('mailer')->send($message);
            $this->get('session')->getFlashBag()->add('msg_det', 'Votre reservation a été effectué avec succès');
        }
        return($this->render('covoiturageBundle:Default:details_annonce.html.twig', array('annonce' => $annonce, 'user' => $u)));
    }

    public function voir_resAction() {
        $em = $this->getDoctrine()->getManager();
        $u = new Utilisateurs();
        $u = $this->container->get('security.context')->getToken()->getUser();
        $reservations_rec = $em->getRepository('covoiturageBundle:reservation')->findBy(array('utilisateur_rec'=>$u));
        $reservations_send = $em->getRepository('covoiturageBundle:reservation')->findBy(array('utilisateur_send'=>$u));
        return($this->render('covoiturageBundle:Default:reservations.html.twig', array('demandes_rec'=>$reservations_rec,'demandes_env'=>$reservations_send)));
    }
    
    public function confirmer_resAction($id){
          $user = $this->container->get('security.context')->getToken()->getUser();
        $u = new Utilisateurs();
        $u = $user;
         $em = $this->getDoctrine()->getManager();
         $res = new reservation();
         $res = $em->getRepository('covoiturageBundle:reservation')->find($id);  
         $res->setEtat("confirmé");
         $em->merge($res);
         $em->flush();
         $this->get('session')->getFlashBag()->add('msg_resConfirme', 'Reservation confirmée avec succès \n un message par email sera envoyé ');
         $annonce = $em->getRepository('covoiturageBundle:annonce');
         $annonce= $res->getAnnonce(); 
         $nbplace = $annonce->getNbPlace();
         $nbplace = $nbplace - 1;
         $annonce->setNbPlace($nbplace);
         $em->merge($annonce);
         $em->flush();
          $message = \Swift_Message::newInstance()
                    ->setSubject("ult-coivoiturage reservation")
                    ->setFrom(array('kayewa89@gmail.com'=>'equipe@ult-covoiturage'))
                    ->setTo($res->getUtilisateurSend()->getEmailCanonical())
                    ->setCharset('utf-8')
                    ->setContentType('text/html')
                    ->setBody("La personne de ".$u->getNom()." ".$u->getPrenom()." vient de confirmer votre reservation "
                            . "Contactez le si possible sur :"
                            .$u->getTelephone().", email : ".$u->getEmailCanonical()
                            . " Merci \n"
                            . "Admin");
            $this->get('mailer')->send($message);
         if($nbplace==0){
         //$em->remove($annonce);  
         }
         $u = new Utilisateurs();
         $u = $this->container->get('security.context')->getToken()->getUser();
         $reservations_rec = $em->getRepository('covoiturageBundle:reservation')->findBy(array('utilisateur_rec'=>$u));
         $reservations_send = $em->getRepository('covoiturageBundle:reservation')->findBy(array('utilisateur_send'=>$u));
        return($this->render('covoiturageBundle:Default:reservations.html.twig', array('demandes_rec'=>$reservations_rec,'demandes_env'=>$reservations_send)));
    }
    
    public function annuler_resAction($id){
        $user = $this->container->get('security.context')->getToken()->getUser();
        $u = new Utilisateurs();
        $u = $user;
         $em = $this->getDoctrine()->getManager();
         $res = new reservation();
         $res = $em->getRepository('covoiturageBundle:reservation')->find($id);
         $res->setEtat("annule");
         $em->merge($res);
         $em->flush();
         $this->get('session')->getFlashBag()->add('msg_resAnnule', 'Reservation annuleé \n un message par email sera envoyé');
     
        $annonce = new annonce();
        $u = new Utilisateurs();
        $u = $this->container->get('security.context')->getToken()->getUser();
         $message = \Swift_Message::newInstance()
                    ->setSubject("ult-covoiturage reservation")
                    ->setFrom(array('kayewa89@gmail.com'=>'equipe@ult-covoiturage'))
                    ->setTo($res->getUtilisateurSend()->getEmailCanonical())
                    ->setCharset('utf-8')
                    ->setContentType('text/html')
                    ->setBody("La personne de ".$u->getNom()." ".$u->getPrenom()." vient de refuser votre reservation "
                            . "Merci "
                            . "Admin");
            $this->get('mailer')->send($message);
        
        $reservations_rec = $em->getRepository('covoiturageBundle:reservation')->findBy(array('utilisateur_rec'=>$u));
        $reservations_send = $em->getRepository('covoiturageBundle:reservation')->findBy(array('utilisateur_send'=>$u));
        return($this->render('covoiturageBundle:Default:reservations.html.twig', array('demandes_rec'=>$reservations_rec,'demandes_env'=>$reservations_send)));
    }
    
     public function voir_resEnvAction(){
        $em = $this->getDoctrine()->getManager();
        $u = new Utilisateurs();
        $u = $this->container->get('security.context')->getToken()->getUser();
        $reservations_send = $em->getRepository('covoiturageBundle:reservation')->findBy(array('utilisateur_send'=>$u),array('dateRes'=>'DESC'));
        $u = $this->container->get('security.context')->getToken()->getUser();  
        return($this->render('covoiturageBundle:Default:reservationsEnv.html.twig', array('demandes_env'=>$reservations_send)));
     } 
     public function voir_resRecAction(){
        $em = $this->getDoctrine()->getManager();
        $u = new Utilisateurs();
        $u = $this->container->get('security.context')->getToken()->getUser();
        $reservations_rec = $em->getRepository('covoiturageBundle:reservation')->findBy(array('utilisateur_rec'=>$u),array('dateRes'=>'DESC'));
        return($this->render('covoiturageBundle:Default:reservationsRec.html.twig', array('demandes_rec'=>$reservations_rec)));
     }
}
