<?php

namespace FTT\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FTT\UtilisateurBundle\Entity\ActualiteNews;
use Symfony\Component\HttpFoundation\Request;


class ActualiteController extends Controller
{
    public function AfficherArticleAction($id)
    {
        
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository("FTTAdminBundle:ActualiteNews")->find($id);
        
        $images = array();
        $images = base64_encode(stream_get_contents($article->getImageActualite()));
        

        return $this->render("FTTUtilisateurBundle:Actualite:article.html.twig",
                array("article" => $article,
                    "images"=> $images
                    ));
    }
    
    
    public function listArticlesAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        $actualites = $em->getRepository("FTTAdminBundle:ActualiteNews")->findAll();        
        $request = $this->getRequest();
  
        $imagesActualite = array();
        foreach ($actualites as $key => $entity) {
            
        $imagesActualite[$key] = base64_encode(stream_get_contents($entity->getImageActualite()));
        }
        
        $entities = $this->get('knp_paginator')->paginate(
            $actualites,
            $request->query->get('page', 1)/*page number*/,
            4/*limit per page*/
        );
        
        
        
        
        return $this->render("FTTUtilisateurBundle:Actualite:listActualites.html.twig",
                array("actualites" => $entities,
                    "imagesActualite"=> $imagesActualite
                    ));
    }
    
    
 public function photoAction($id)     
         {
     $em = $this->getDoctrine()->getManager();         
     $image_obj = $em->getRepository("FTTAdminBundle:Actualite")->find($id);         
     $photo=$image_obj->getImageActualite();         
     $response = new StreamedResponse(function () use ($photo) {             
         echo stream_get_contents($photo);         });         
         $response->headers->set('Content-Type', 'image/jpeg');         
         return $response;     
         
     }       
    
    
}
