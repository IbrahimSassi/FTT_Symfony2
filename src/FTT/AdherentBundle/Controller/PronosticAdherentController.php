<?php

namespace FTT\AdherentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PronosticAdherentController extends Controller {

    public function ListResultatPronosticAction() {

        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.context')->getToken()->getUser();
        $user = $em->getRepository("FTTAdminBundle:User")->find($user->getId());
        $matchsJoues = $em->getRepository("FTTAdminBundle:ResultatMatch")->findMatchWithResult();

        $resultatPronostic = $em->getRepository("FTTAdminBundle:AdherentPronostic")
                ->findBy(array('idAdherent' => $user));
        $imeis = $em->getRepository("FTTAdminBundle:AdherentPronostic")
                ->findMyIMEI($user);
        
        $request = $this->get('request_stack')->getCurrentRequest();

        
        
        
        
        $entity = new \FTT\AdminBundle\Entity\AdherentPronostic();
        $form = $this->createFormBuilder($entity)
                ->add('imeiPronostic', "choice", array('empty_value' => 'Choisir Un IMEI',
                    'attr' =>
                    array("class" => "form-control", 'style' => "color:#1F2223;font:bold;font-family: 'Oswald', sans-serif;'"),
                    
                    "choice_list"=>new \Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceList($imeis, $imeis),'multiple'=>false,'expanded'=>false))
                ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $resultatPronostic = $em->getRepository("FTTAdminBundle:AdherentPronostic")
                    ->findBy(array('imeiPronostic' => $entity->getImeiPronostic(),
                'idAdherent' => $user));
            return $this->render('FTTAdherentBundle:Pronostic:ResultatsParIMEI.html.twig', array(
                        'resultatPronostic' => $resultatPronostic,
                        'matchsJoues' => $matchsJoues
            ));
        }
        return $this->render('FTTAdherentBundle:Pronostic:ResultatsPronostics.html.twig', array(
                    'form' => $form->createView(),
                    'resultatPronostic' => $resultatPronostic,
                    'matchsJoues' => $matchsJoues));
    }

    public function RecevoirPointAction($imei) {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.context')->getToken()->getUser();
        $user = $em->getRepository("FTTAdminBundle:User")->find($user->getId());
        $resultatPronostic = $em->getRepository("FTTAdminBundle:AdherentPronostic")
                ->findBy(array('imeiPronostic' => $imei,
            'idAdherent' => $user));

        $gain = 0;
        foreach ($resultatPronostic as $key => $entity) {

            if ($resultatPronostic[$key]->getNbrJoker() == 1)
                $resultatPronostic[$key]->setGain($resultatPronostic[$key]->getGain() / 2);

            $gain = $gain + $resultatPronostic[$key]->getGain();
            $resultatPronostic[$key]->setEtatRetraitPoints(1);
            $em->persist($resultatPronostic[$key]);
        }

        $user->setPointsAdherent($user->getPointsAdherent() + $gain);


        $em->persist($user);
        $em->flush();

        return $this->redirect($this->generateUrl('list_resultat_pronostic'));
    }

}
