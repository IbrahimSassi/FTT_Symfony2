<?php

namespace FTT\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ob\HighchartsBundle\Highcharts\Highchart;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $CurrUser = $em->getRepository("FTTAdminBundle:User")->find($user->getId());
        
        $image = base64_encode(stream_get_contents($CurrUser->getImageUser()));
        $actualités = $em->getRepository("FTTAdminBundle:ActualiteNews")->CountAll();
        $users = $em->getRepository("FTTAdminBundle:User")->CountAll();
        $reclamations = $em->getRepository("FTTAdminBundle:ReclamationFederation")->CountAll();
        $matchs = $em->getRepository("FTTAdminBundle:MatchInfo")->CountAll();

        
        
        $nbAdherent = $em->getRepository("FTTAdminBundle:User")->CountByRole("ROLE_ADHERENT");
        $nbArbitre = $em->getRepository("FTTAdminBundle:User")->CountByRole("ROLE_ARBITRE");
        $nbMedecin = $em->getRepository("FTTAdminBundle:User")->CountByRole("ROLE_MEDECIN");
        $nbResponsable = $em->getRepository("FTTAdminBundle:User")->CountByRole("ROLE_RESPONSABLE");
        $nbAdministrateur = $em->getRepository("FTTAdminBundle:User")->CountByRole("ROLE_SUPER_ADMIN");
        
        
        //graphique
        $request = $this->getRequest();
        $ob = new Highchart();
        $ob->chart->renderTo('piechart');
        $ob->title->text("Utilisateur par role");
        $ob->plotOptions->pie(array(
            'allowPointSelect' => true,
            'cursor' => 'pointer',
            'dataLabels' => array('enabled' => false),
            'showInLegend' => true
        ));

        $data = array(
            array('Adherent', $nbAdherent),
            array('Arbitre', $nbArbitre),
            array('Medecin', $nbMedecin),
            array('Responsable', $nbResponsable),
            array('Administrateur', $nbAdministrateur),
        );
        $ob->series(array(array('type' => 'pie', 'name' => 'Browser share', 'data' => $data)));

        
        
        
        
        
        
        
        
        return $this->render("FTTAdminBundle:Default:home.html.twig",
                array("CurrentUser" => $CurrUser,
                    "ProfilPic"=> $image,
                    "actualites"=>$actualités,
                    "users"=>$users,
                    "reclamations"=>$reclamations,
                    "matchs"=>$matchs,
                    "chart"=>$ob,
                    "nb"=>$nbAdherent
                    ));

    }
    

    }
