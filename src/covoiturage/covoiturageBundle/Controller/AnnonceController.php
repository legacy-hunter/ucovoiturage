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

    public function annonceFormulaireAction() {
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
            // $id = $u->getId();
            $entity->setNbPlace($nbPlace);
            $entity->setPrix($prix);
            $entity->setUtilisateur($u);
            $entity->setRole($choix);
            $em->persist($entity);
            $em->flush();
            $message = "opération effectuée avec succes";
            return ($this->render('covoiturageBundle:Default:annonce.html.twig', array('form' => $form->createView(), 'role' => $u->getRole(), 'message' => $message)));
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

    public function listeCovoituragesAction() {
        $em = $this->getDoctrine()->getManager();
        $annonces = $em->getRepository('covoiturageBundle:annonce')->findAll();

        $annonce = $em->getRepository('covoiturageBundle:annonce')->getAnnonce();


        return($this->render('covoiturageBundle:Default:listeCovoiturages.html.twig', array('annonces' => $annonces, 'u' => $annonce)));
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
        $user = $annonce->getUtilisateur();
        return($this->render('covoiturageBundle:Default:details_annonce.html.twig', array('annonce' => $annonce, 'user' => $user)));
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
                    ->setFrom($request->get('sender_mail'))
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
            $reservation->setCommentaire($request->get('comment'));
           // $reservation->setNbPlaceRes($request->get('nbPlace'));
            $reservation->setEtat("en attente");
            $em->persist($reservation);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'Votre reservation a été effectué avec succès');
        }
        return($this->render('covoiturageBundle:Default:details_annonce.html.twig', array('annonce' => $annonce, 'user' => $u)));
    }

    public function voir_resAction() {
        $em = $this->getDoctrine()->getManager();
        $annonce = new annonce();
        $u = new Utilisateurs();
        $u = $this->container->get('security.context')->getToken()->getUser();
        $reservations_rec = $em->getRepository('covoiturageBundle:reservation')->findBy(array('utilisateur_rec'=>$u));
         $reservations_send = $em->getRepository('covoiturageBundle:reservation')->findBy(array('utilisateur_send'=>$u));
        return($this->render('covoiturageBundle:Default:reservations.html.twig', array('demandes_rec'=>$reservations_rec,'demandes_env'=>$reservations_send)));
        
    }
    
    public function confirmer_resAction($id){
         $em = $this->getDoctrine()->getManager();
         $res = new reservation();
         $res = $em->getRepository('covoiturageBundle:reservation')->find($id);
         
         $res->setEtat("confirmé");
         $em->merge($res);
         $em->flush();
         $this->get('session')->getFlashBag()->add('success', 'Reservation confirmée avec succès');
         $annonce = $em->getRepository('covoiturageBundle:annonce');
         $annonce= $res->getAnnonce(); 
         $nbplace = $annonce->getNbPlace();
         $nbplace = $nbplace - 1;
         $annonce->setNbPlace($nbplace);
         $em->merge($annonce);
         $em->flush();
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
         $em = $this->getDoctrine()->getManager();
         $res = new reservation();
         $res = $em->getRepository('covoiturageBundle:reservation')->find($id);
         $res->setEtat("annule");
         $em->merge($res);
         $em->flush();
         $this->get('session')->getFlashBag()->add('success', 'Reservation annuleé');
       
        $annonce = new annonce();
        $u = new Utilisateurs();
        $u = $this->container->get('security.context')->getToken()->getUser();      
        $reservations_rec = $em->getRepository('covoiturageBundle:reservation')->findBy(array('utilisateur_rec'=>$u));
        $reservations_send = $em->getRepository('covoiturageBundle:reservation')->findBy(array('utilisateur_send'=>$u));
        return($this->render('covoiturageBundle:Default:reservations.html.twig', array('demandes_rec'=>$reservations_rec,'demandes_env'=>$reservations_send)));
    }
}
