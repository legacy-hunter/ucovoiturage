<?php

namespace covoiturage\covoiturageBundle\Controller;
use \Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use \covoiturage\covoiturageBundle\Entity\etape;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('covoiturageBundle:Default:index.html.twig');
    }
    public function etapeAction($id){
        $message ="";
       return $this->render('covoiturageBundle:Default:etape.html.twig',array('id'=>$id,'message'=>$message));
    }
    
    public function traitEtapeAction(Request $request){
        if($request->getMethod()=='POST'){
            $em = $this->getDoctrine()->getManager();
             
            $id_annonce = $request->get('id_annonce');
            $annonce = $em->getRepository('covoiturageBundle:annonce')->findOneBy(array('id'=>$id_annonce));
            $ville = $request->get('ville');
            $prix = $request->get('prix');
            $etape = new etape();
            $etape->setAnnonce($annonce);
            $etape->setPrix($prix);
            $etape->setVille($ville);
            
            $em->persist($etape);
            $em->flush();
            $message = "Insertion réussie";
            return $this->render('covoiturageBundle:Default:etape.html.twig',array('message'=>$message,'id'=>$id_annonce));
        }else{
            return $this->redirect($this->generateUrl('liste_annonce'));
        }
    }
   
}
