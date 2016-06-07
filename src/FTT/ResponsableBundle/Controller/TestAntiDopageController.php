<?php

namespace FTT\ResponsableBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FTT\AdminBundle\Entity;
use Symfony\Component\HttpFoundation\Request;

class TestAntiDopageController extends Controller {

    public function AfficherMatchsAction() {
        $em = $this->getDoctrine()->getManager();
        $matchs = $em->getRepository("FTTAdminBundle:MatchInfo")->findMatchAtester();
        $request = $this->getRequest();
        $entities = $this->get('knp_paginator')->paginate(
                $matchs, $request->query->get('page', 1)/* page number */, 4/* limit per page */
        );

        return $this->render("FTTResponsableBundle:OrganiserTest:choisirJoueur.html.twig", array("matchs" => $entities));
    }

    public function HasardTestAction($id) {

        $em = $this->getDoctrine()->getManager();
        $match = $em->getRepository("FTTAdminBundle:MatchInfo")->find($id);
        $user = $this->get('security.context')->getToken()->getUser();
        $userManager = $em->getRepository("FTTAdminBundle:User")->find($user->getId());
        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {
            $choix = $this->get('request')->get('choix-joueur');
            if ($match->getIdJoueur3() == null) {
                if ($choix == 1) {
                    $random = rand(1, 2);
                    if ($random == 1) {
                        $JoueurATester = new \FTT\AdminBundle\Entity\JoueurATester();
                        $JoueurATester->setIdMatch($match);
                        $JoueurATester->setDateTest($match->getDateMatch());
                        $JoueurATester->setJoueurChoisi($match->getIdJoueur2()->getId());
                        $JoueurATester->setIdResponsable($userManager);
                        $em->persist($JoueurATester);
                        $em->flush();
                    } else if ($random == 2) {
                        $JoueurATester = new \FTT\AdminBundle\Entity\JoueurATester();
                        $JoueurATester->setIdMatch($match);
                        $JoueurATester->setDateTest($match->getDateMatch());
                        $JoueurATester->setJoueurChoisi($match->getIdJoueur1()->getId());
                        $JoueurATester->setIdResponsable($userManager);
                        $em->persist($JoueurATester);
                        $em->flush();
                    }
                }
                if ($choix == 2) {
                    $JoueurATester1 = new \FTT\AdminBundle\Entity\JoueurATester();
                    $JoueurATester1->setIdMatch($match);
                    $JoueurATester1->setDateTest($match->getDateMatch());
                    $JoueurATester1->setJoueurChoisi($match->getIdJoueur1()->getId());
                    $JoueurATester1->setIdResponsable($userManager);
                    $em->persist($JoueurATester1);

                    $JoueurATester2 = new \FTT\AdminBundle\Entity\JoueurATester();
                    $JoueurATester2->setIdMatch($match);
                    $JoueurATester2->setDateTest($match->getDateMatch());
                    $JoueurATester2->setJoueurChoisi($match->getIdJoueur2()->getId());
                    $JoueurATester2->setIdResponsable($userManager);
                    $em->persist($JoueurATester2);
                    $em->flush();
                }
            } else {
                if ($choix == 1) {
                    $random = rand(1, 4);
                    if ($random == 1) {
                        $JoueurATester = new \FTT\AdminBundle\Entity\JoueurATester();
                        $JoueurATester->setIdMatch($match);
                        $JoueurATester->setDateTest($match->getDateMatch());
                        $JoueurATester->setJoueurChoisi($match->getIdJoueur4()->getId());
                        $JoueurATester->setIdResponsable($userManager);
                        $em->persist($JoueurATester);
                        $em->flush();
                    } else if ($random == 2) {
                        $JoueurATester = new \FTT\AdminBundle\Entity\JoueurATester();
                        $JoueurATester->setIdMatch($match);
                        $JoueurATester->setDateTest($match->getDateMatch());
                        $JoueurATester->setJoueurChoisi($match->getIdJoueur3()->getId());
                        $JoueurATester->setIdResponsable($userManager);
                        $em->persist($JoueurATester);
                        $em->flush();
                    } else if ($random == 3) {
                        $JoueurATester = new \FTT\AdminBundle\Entity\JoueurATester();
                        $JoueurATester->setIdMatch($match);
                        $JoueurATester->setDateTest($match->getDateMatch());
                        $JoueurATester->setJoueurChoisi($match->getIdJoueur2()->getId());
                        $JoueurATester->setIdResponsable($userManager);
                        $em->persist($JoueurATester);
                        $em->flush();
                    } else if ($random == 4) {
                        $JoueurATester = new \FTT\AdminBundle\Entity\JoueurATester();
                        $JoueurATester->setIdMatch($match);
                        $JoueurATester->setDateTest($match->getDateMatch());
                        $JoueurATester->setJoueurChoisi($match->getIdJoueur1()->getId());
                        $JoueurATester->setIdResponsable($userManager);
                        $em->persist($JoueurATester);
                        $em->flush();
                    }
                } else if ($choix == 2) {
                    $random = rand(1, 6);
                    if ($random == 1) {
                        $JoueurATester1 = new \FTT\AdminBundle\Entity\JoueurATester();
                        $JoueurATester1->setIdMatch($match);
                        $JoueurATester1->setDateTest($match->getDateMatch());
                        $JoueurATester1->setJoueurChoisi($match->getIdJoueur4()->getId());
                        $JoueurATester1->setIdResponsable($userManager);
                        $em->persist($JoueurATester1);

                        $JoueurATester2 = new \FTT\AdminBundle\Entity\JoueurATester();
                        $JoueurATester2->setIdMatch($match);
                        $JoueurATester2->setDateTest($match->getDateMatch());
                        $JoueurATester2->setJoueurChoisi($match->getIdJoueur3()->getId());
                        $JoueurATester2->setIdResponsable($userManager);
                        $em->persist($JoueurATester2);
                        $em->flush();
                    } else if ($random == 2) {
                        $JoueurATester1 = new \FTT\AdminBundle\Entity\JoueurATester();
                        $JoueurATester1->setIdMatch($match);
                        $JoueurATester1->setDateTest($match->getDateMatch());
                        $JoueurATester1->setJoueurChoisi($match->getIdJoueur4()->getId());
                        $JoueurATester1->setIdResponsable($userManager);
                        $em->persist($JoueurATester1);

                        $JoueurATester2 = new \FTT\AdminBundle\Entity\JoueurATester();
                        $JoueurATester2->setIdMatch($match);
                        $JoueurATester2->setDateTest($match->getDateMatch());
                        $JoueurATester2->setJoueurChoisi($match->getIdJoueur2()->getId());
                        $JoueurATester2->setIdResponsable($userManager);
                        $em->persist($JoueurATester2);
                        $em->flush();
                    } else if ($random == 3) {
                        $JoueurATester1 = new \FTT\AdminBundle\Entity\JoueurATester();
                        $JoueurATester1->setIdMatch($match);
                        $JoueurATester1->setDateTest($match->getDateMatch());
                        $JoueurATester1->setJoueurChoisi($match->getIdJoueur4()->getId());
                        $JoueurATester1->setIdResponsable($userManager);
                        $em->persist($JoueurATester1);

                        $JoueurATester2 = new \FTT\AdminBundle\Entity\JoueurATester();
                        $JoueurATester2->setIdMatch($match);
                        $JoueurATester2->setDateTest($match->getDateMatch());
                        $JoueurATester2->setJoueurChoisi($match->getIdJoueur1()->getId());
                        $JoueurATester2->setIdResponsable($userManager);
                        $em->persist($JoueurATester2);
                        $em->flush();
                    } else if ($random == 4) {
                        $JoueurATester1 = new \FTT\AdminBundle\Entity\JoueurATester();
                        $JoueurATester1->setIdMatch($match);
                        $JoueurATester1->setDateTest($match->getDateMatch());
                        $JoueurATester1->setJoueurChoisi($match->getIdJoueur2()->getId());
                        $JoueurATester1->setIdResponsable($userManager);
                        $em->persist($JoueurATester1);

                        $JoueurATester2 = new \FTT\AdminBundle\Entity\JoueurATester();
                        $JoueurATester2->setIdMatch($match);
                        $JoueurATester2->setDateTest($match->getDateMatch());
                        $JoueurATester2->setJoueurChoisi($match->getIdJoueur3()->getId());
                        $JoueurATester2->setIdResponsable($userManager);
                        $em->persist($JoueurATester2);
                        $em->flush();
                    } else if ($random == 5) {
                        $JoueurATester1 = new \FTT\AdminBundle\Entity\JoueurATester();
                        $JoueurATester1->setIdMatch($match);
                        $JoueurATester1->setDateTest($match->getDateMatch());
                        $JoueurATester1->setJoueurChoisi($match->getIdJoueur1()->getId());
                        $JoueurATester1->setIdResponsable($userManager);
                        $em->persist($JoueurATester1);

                        $JoueurATester2 = new \FTT\AdminBundle\Entity\JoueurATester();
                        $JoueurATester2->setIdMatch($match);
                        $JoueurATester2->setDateTest($match->getDateMatch());
                        $JoueurATester2->setJoueurChoisi($match->getIdJoueur3()->getId());
                        $JoueurATester2->setIdResponsable($userManager);
                        $em->persist($JoueurATester2);
                        $em->flush();
                    } else if ($random == 6) {
                        $JoueurATester1 = new \FTT\AdminBundle\Entity\JoueurATester();
                        $JoueurATester1->setIdMatch($match);
                        $JoueurATester1->setDateTest($match->getDateMatch());
                        $JoueurATester1->setJoueurChoisi($match->getIdJoueur1()->getId());
                        $JoueurATester1->setIdResponsable($userManager);
                        $em->persist($JoueurATester1);

                        $JoueurATester2 = new \FTT\AdminBundle\Entity\JoueurATester();
                        $JoueurATester2->setIdMatch($match);
                        $JoueurATester2->setDateTest($match->getDateMatch());
                        $JoueurATester2->setJoueurChoisi($match->getIdJoueur2()->getId());
                        $JoueurATester2->setIdResponsable($userManager);
                        $em->persist($JoueurATester2);
                        $em->flush();
                    }
                } else if ($choix == 3) {
                    $random = rand(1, 4);
                    if ($random == 1) {
                        $JoueurATester1 = new \FTT\AdminBundle\Entity\JoueurATester();
                        $JoueurATester1->setIdMatch($match);
                        $JoueurATester1->setDateTest($match->getDateMatch());
                        $JoueurATester1->setJoueurChoisi($match->getIdJoueur4()->getId());
                        $JoueurATester1->setIdResponsable($userManager);
                        $em->persist($JoueurATester1);

                        $JoueurATester2 = new \FTT\AdminBundle\Entity\JoueurATester();
                        $JoueurATester2->setIdMatch($match);
                        $JoueurATester2->setDateTest($match->getDateMatch());
                        $JoueurATester2->setJoueurChoisi($match->getIdJoueur3()->getId());
                        $JoueurATester2->setIdResponsable($userManager);
                        $em->persist($JoueurATester2);

                        $JoueurATester3 = new \FTT\AdminBundle\Entity\JoueurATester();
                        $JoueurATester3->setIdMatch($match);
                        $JoueurATester3->setDateTest($match->getDateMatch());
                        $JoueurATester3->setJoueurChoisi($match->getIdJoueur2()->getId());
                        $JoueurATester3->setIdResponsable($userManager);
                        $em->persist($JoueurATester3);
                        $em->flush();
                    } else if ($random == 2) {
                        $JoueurATester1 = new \FTT\AdminBundle\Entity\JoueurATester();
                        $JoueurATester1->setIdMatch($match);
                        $JoueurATester1->setDateTest($match->getDateMatch());
                        $JoueurATester1->setJoueurChoisi($match->getIdJoueur1()->getId());
                        $JoueurATester1->setIdResponsable($userManager);
                        $em->persist($JoueurATester1);

                        $JoueurATester2 = new \FTT\AdminBundle\Entity\JoueurATester();
                        $JoueurATester2->setIdMatch($match);
                        $JoueurATester2->setDateTest($match->getDateMatch());
                        $JoueurATester2->setJoueurChoisi($match->getIdJoueur2()->getId());
                        $JoueurATester2->setIdResponsable($userManager);
                        $em->persist($JoueurATester2);

                        $JoueurATester3 = new \FTT\AdminBundle\Entity\JoueurATester();
                        $JoueurATester3->setIdMatch($match);
                        $JoueurATester3->setDateTest($match->getDateMatch());
                        $JoueurATester3->setJoueurChoisi($match->getIdJoueur3()->getId());
                        $JoueurATester3->setIdResponsable($userManager);
                        $em->persist($JoueurATester3);
                        $em->flush();
                    } else if ($random == 3) {
                        $JoueurATester1 = new \FTT\AdminBundle\Entity\JoueurATester();
                        $JoueurATester1->setIdMatch($match);
                        $JoueurATester1->setDateTest($match->getDateMatch());
                        $JoueurATester1->setJoueurChoisi($match->getIdJoueur4()->getId());
                        $JoueurATester1->setIdResponsable($userManager);
                        $em->persist($JoueurATester1);

                        $JoueurATester2 = new \FTT\AdminBundle\Entity\JoueurATester();
                        $JoueurATester2->setIdMatch($match);
                        $JoueurATester2->setDateTest($match->getDateMatch());
                        $JoueurATester2->setJoueurChoisi($match->getIdJoueur1()->getId());
                        $JoueurATester2->setIdResponsable($userManager);
                        $em->persist($JoueurATester2);

                        $JoueurATester3 = new \FTT\AdminBundle\Entity\JoueurATester();
                        $JoueurATester3->setIdMatch($match);
                        $JoueurATester3->setDateTest($match->getDateMatch());
                        $JoueurATester3->setJoueurChoisi($match->getIdJoueur3()->getId());
                        $JoueurATester3->setIdResponsable($userManager);
                        $em->persist($JoueurATester3);
                        $em->flush();
                    } else if ($random == 4) {
                        $JoueurATester1 = new \FTT\AdminBundle\Entity\JoueurATester();
                        $JoueurATester1->setIdMatch($match);
                        $JoueurATester1->setDateTest($match->getDateMatch());
                        $JoueurATester1->setJoueurChoisi($match->getIdJoueur1()->getId());
                        $JoueurATester1->setIdResponsable($userManager);
                        $em->persist($JoueurATester1);

                        $JoueurATester2 = new \FTT\AdminBundle\Entity\JoueurATester();
                        $JoueurATester2->setIdMatch($match);
                        $JoueurATester2->setDateTest($match->getDateMatch());
                        $JoueurATester2->setJoueurChoisi($match->getIdJoueur2()->getId());
                        $JoueurATester2->setIdResponsable($userManager);
                        $em->persist($JoueurATester2);

                        $JoueurATester3 = new \FTT\AdminBundle\Entity\JoueurATester();
                        $JoueurATester3->setIdMatch($match);
                        $JoueurATester3->setDateTest($match->getDateMatch());
                        $JoueurATester3->setJoueurChoisi($match->getIdJoueur4()->getId());
                        $JoueurATester3->setIdResponsable($userManager);
                        $em->persist($JoueurATester3);
                        $em->flush();
                    }
                } else if ($choix == 4) {
                    $JoueurATester1 = new \FTT\AdminBundle\Entity\JoueurATester();
                    $JoueurATester1->setIdMatch($match);
                    $JoueurATester1->setDateTest($match->getDateMatch());
                    $JoueurATester1->setJoueurChoisi($match->getIdJoueur1()->getId());
                    $JoueurATester1->setIdResponsable($userManager);
                    $em->persist($JoueurATester1);

                    $JoueurATester2 = new \FTT\AdminBundle\Entity\JoueurATester();
                    $JoueurATester2->setIdMatch($match);
                    $JoueurATester2->setDateTest($match->getDateMatch());
                    $JoueurATester2->setJoueurChoisi($match->getIdJoueur2()->getId());
                    $JoueurATester2->setIdResponsable($userManager);
                    $em->persist($JoueurATester2);

                    $JoueurATester3 = new \FTT\AdminBundle\Entity\JoueurATester();
                    $JoueurATester3->setIdMatch($match);
                    $JoueurATester3->setDateTest($match->getDateMatch());
                    $JoueurATester3->setJoueurChoisi($match->getIdJoueur3()->getId());
                    $JoueurATester3->setIdResponsable($userManager);
                    $em->persist($JoueurATester3);

                    $JoueurATester4 = new \FTT\AdminBundle\Entity\JoueurATester();
                    $JoueurATester4->setIdMatch($match);
                    $JoueurATester4->setDateTest($match->getDateMatch());
                    $JoueurATester4->setJoueurChoisi($match->getIdJoueur4()->getId());
                    $JoueurATester4->setIdResponsable($userManager);
                    $em->persist($JoueurATester4);
                    $em->flush();
                }
            }
            $userManager->setQuotaResponsable($userManager->getQuotaResponsable() - 1);
            $em->persist($userManager);
            $em->flush();
            return $this->redirect($this->generateUrl('choisir_joueur'));
        }
    }

    public function AfficherResultatAction() {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.context')->getToken()->getUser();
        $userManager = $em->getRepository("FTTAdminBundle:User")->find($user->getId());
        $TestAntiDopage = $em->getRepository("FTTAdminBundle:TestAntiDopage")->findResultatTest($userManager->getId());
        $request = $this->getRequest();
        $joueurs = $em->getRepository("FTTAdminBundle:Joueur")->findAll();

        $entities = $this->get('knp_paginator')->paginate(
                $TestAntiDopage, $request->query->get('page', 1)/* page number */, 6/* limit per page */
        );

        return $this->render("FTTResponsableBundle:ResultatTest:ResultatTest.html.twig", array(
                    "resultatTests" => $entities,
                    "joueurs" => $joueurs));
    }

    public function AfficherTestEnAttenteAction() {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.context')->getToken()->getUser();
        $userManager = $em->getRepository("FTTAdminBundle:User")->find($user->getId());
        $JoueurATester = $em->getRepository("FTTAdminBundle:JoueurATester")->findBy(array('idResponsable' => $userManager->getId(), 'etatAffectation' => 0));
        $request = $this->getRequest();

        return $this->render("FTTResponsableBundle:ResultatTest:TestEnCours.html.twig", array(
                    "resultatTests" => $JoueurATester));
    }

    public function EnvoyerResultatTestAction($id) {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.context')->getToken()->getUser();
        $userManager = $em->getRepository("FTTAdminBundle:User")->find($user->getId());
        $TestAntiDopage = $em->getRepository("FTTAdminBundle:TestAntiDopage")->find($id);
        $joueurAtester = $em->getRepository("FTTAdminBundle:JoueurATester")->find($TestAntiDopage->getIdJoueurTester());
        $joueurTeste = $em->getRepository("FTTAdminBundle:Joueur")->find($joueurAtester->getJoueurChoisi());
        $medecin = $em->getRepository("FTTAdminBundle:User")->find($TestAntiDopage->getIdMedecin());
        if ($TestAntiDopage->getResultat() == 1) {
            $resultat = "POSITIF";
        }
        if ($TestAntiDopage->getResultat() == -1) {
            $resultat = "NEGATIF";
        }
        $request = $this->getRequest();
        $date = date_format($joueurAtester->getDateTest(), 'd-m-Y');
        $msg = "le joueur " . $joueurTeste->getNomJoueur() . " " . $joueurTeste->getPrenomJoueur() . " a ete teste le " .
                $date . " par le medecin: " . $medecin->getNomUser() . " et il a noté: " .
                $TestAntiDopage->getDescription() . " le resultat le test est: " . $resultat;

        $message = \Swift_Message::newInstance()
                ->setSubject('Test Anti-dopage')
                ->setFrom(array('tft.codexit@gmail.com' => 'Departement anti-dopage'))
                ->setTo(array('tft.codexit@gmail.com'))
                ->setContentType("text/html")
                ->setBody($msg);
        $this->get('mailer')->send($message);

        return $this->redirect($this->generateUrl('resultat_test'));
    }

}
