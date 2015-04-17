<?php
namespace Utilisateurs\UtilisateursBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UtilisateursBundle:Default:index.html.twig', array('name' => $name));
    }
     
    public function  matriculeExistAction($mat){
        $Utilisateurs =  new \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs;
        $em= $this->getDoctrine()->getManager();
        $Utilisateurs  =  $em->getRepository('UtilisateursBundle:Utilisateurs')->findOneBy(array('matricule'=>$mat));
        $response = new JsonResponse();      
        return $response->setData(array('id'=>$Utilisateurs->getId()));
       
  }
 
}
