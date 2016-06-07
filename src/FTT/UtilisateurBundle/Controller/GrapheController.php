<?php

namespace FTT\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ob\HighchartsBundle\Highcharts\Highchart;

class GrapheController extends Controller {

    public function chartPieAction($id) {

        $em = $this->getDoctrine()->getManager();
        $joueur = $em->getRepository("FTTAdminBundle:Joueur")->find($id);
        $ob = new Highchart();
        $ob->chart->renderTo('piechart');
        $nom = $joueur->getNomJoueur();
        $prenom = $joueur->getPrenomJoueur();
        $ob->title->text("Statistique pour  <br>$nom $prenom ");
        $ob->plotOptions->pie(array(
            'allowPointSelect' => true,
            'cursor' => 'pointer',
            'dataLabels' => array('enabled' => false),
            'showInLegend' => true
        ));

        $data = array(
            array('Nombres de victoire', $joueur->getNbVictoires()),
            array('Nombres de défaites', $joueur->getNbDefaite()),
        );
        $ob->series(array(array('type' => 'pie', 'name' => 'Browser share', 'data' => $data)));

        return $this->render('FTTUtilisateurBundle:Graphe:pie.html.twig', array(
                    'chart' => $ob));
    }

}
