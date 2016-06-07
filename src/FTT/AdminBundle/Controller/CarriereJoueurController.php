<?php
namespace FTT\AdminBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FTT\AdminBundle\Form\CarriereType;
use FTT\AdminBundle\Entity\CarriereJoueur;
class CarriereJoueurController extends Controller  {

      public function listAction()
      {
        $em = $this->getDoctrine()->getManager();
        $joueurs = $em->getRepository("FTTAdminBundle:Joueur")->findAll();
        $imagesJoueurs = array();
        foreach ($joueurs as $key => $entity) {
        $imagesJoueurs[$key] = base64_encode(stream_get_contents($entity->getImageJoueur()));
        }
        
  return $this->render("FTTAdminBundle:CarriereJoueur:listJoueurCarriere.html.twig", array("joueurs" => $joueurs,"imagesJoueurs"=> $imagesJoueurs));
   
      }   
      
        public function listModificationAction()
      {
        $em = $this->getDoctrine()->getManager();
        $joueurs = $em->getRepository("FTTAdminBundle:Joueur")->findAll();
        $imagesJoueurs = array();
        foreach ($joueurs as $key => $entity) {
        $imagesJoueurs[$key] = base64_encode(stream_get_contents($entity->getImageJoueur()));
        }
        
  return $this->render("FTTAdminBundle:CarriereJoueur:modifierCarriereJoueur.html.twig", array("joueurs" => $joueurs,"imagesJoueurs"=> $imagesJoueurs));
   
      } 
      
      
        public function AfficherDetailCarriereAction($id)
    {
         
        
        $em = $this->getDoctrine()->getManager();
        $carrieres = $em->getRepository("FTTAdminBundle:CarriereJoueur")->findBy(array('idJoueur' => $id));
       
       
        $joueur = $em->getRepository("FTTAdminBundle:Joueur")->find(array('id' => $id));
        $images = array();
        $images = base64_encode(stream_get_contents($joueur->getImageJoueur()));
        
  return $this->render("FTTAdminBundle:CarriereJoueur:DetailCarriereJoueur.html.twig", array("carrieres" => $carrieres,"images" => $images));
   
        
    }
    
       public function AfficherDetailCarriereModificationAction($id)
    {
         
        
        $em = $this->getDoctrine()->getManager();
        $carrieres = $em->getRepository("FTTAdminBundle:CarriereJoueur")->findBy(array('idJoueur' => $id));
       
       
        $joueur = $em->getRepository("FTTAdminBundle:Joueur")->find(array('id' => $id));
        $images = array();
        $images = base64_encode(stream_get_contents($joueur->getImageJoueur()));
        
  return $this->render("FTTAdminBundle:CarriereJoueur:DetailCarriereJoueurModification.html.twig", array("carrieres" => $carrieres,"images" => $images,"joueur"=>$joueur));
   
        
    }
    public function ajouterAction($idJoueur)
    {
        
        $em = $this->getDoctrine()->getManager();
        $carriere = new CarriereJoueur();
        $Form = $this->createForm(new CarriereType(), $carriere);
        $joueur = $em->getRepository('FTTAdminBundle:Joueur')->find($idJoueur);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);
        if ($Form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $club = $em->getRepository('FTTAdminBundle:Club')->find($carriere->getIdClub());
            $carriere->setIdJoueur($joueur);
            if( $carriere->getTypeCarriere()== "transfert")
            {
                $joueur->setIdClub($club);
            }
            $em->persist($joueur);
            $em->persist($carriere);
            $em->flush();
            return $this->redirect($this->generateUrl('detail_Carriere_Joueur_Modification',array('id' => $idJoueur)));
        }

        return $this->render("FTTAdminBundle:CarriereJoueur:AjoutCarriereJoueur.html.twig", array('Carriere'=>  $carriere, 'Form' => $Form->createView()));

      
    }
    
    public function modifierAction($id,$idJoueur)
    {
         $em = $this->getDoctrine()->getManager();
        $carriere = $em->getRepository('FTTAdminBundle:CarriereJoueur')->find($id);
       $joueur = $em->getRepository('FTTAdminBundle:Joueur')->find($idJoueur);
        $Form = $this->createForm(new CarriereType(), $carriere);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);

        if ($Form->isValid()) {
        $carriere->setIdJoueur($joueur);
            $em->persist($carriere);
            $em->flush();
            return $this->redirect($this->generateUrl('list_carrieres_joueur_modification'));
        }
        
        return $this->render("FTTAdminBundle:CarriereJoueur:modifierCarriere.html.twig", array('Form' => $Form->createView()));
   
      
      
    }

}


