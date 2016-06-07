<?php

namespace FTT\ResponsableBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ob\HighchartsBundle\Highcharts\Highchart;

class AccueilController extends Controller {

    public function AccueilAction() {

        $em = $this->getDoctrine()->getManager();
        $testPositif = $em->getRepository("FTTAdminBundle:TestAntiDopage")
                ->CountTest(1);
        $testNegatif = $em->getRepository("FTTAdminBundle:TestAntiDopage")
                ->CountTest(-1);
        $ob = new Highchart();
        $ob->chart->renderTo('piechart');
        $ob->title->text(" Les tests anti-dopages  ");
        $ob->plotOptions->pie(array(
            'allowPointSelect' => true,
            'cursor' => 'pointer',
            'dataLabels' => array('enabled' => false),
            'showInLegend' => true
        ));

        $data = array(
            array('Nombres de test positif', $testPositif),
            array('Nombres de test negatif', $testNegatif),
        );
        $ob->series(array(array('type' => 'pie', 'name' => 'Browser share', 'data' => $data)));

        return $this->render('FTTResponsableBundle:Accueil:AccueilResponsable.html.twig', array(
                    'chart' => $ob));
    }

}
