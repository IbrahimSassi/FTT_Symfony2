<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/js/35a8e64')) {
            // _assetic_35a8e64
            if ($pathinfo === '/js/35a8e64.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '35a8e64',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_35a8e64',);
            }

            // _assetic_35a8e64_0
            if ($pathinfo === '/js/35a8e64_comments_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '35a8e64',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_35a8e64_0',);
            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/responsable')) {
            // ftt_responsable_homepage
            if (0 === strpos($pathinfo, '/responsable/hello') && preg_match('#^/responsable/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ftt_responsable_homepage')), array (  '_controller' => 'FTT\\ResponsableBundle\\Controller\\DefaultController::indexAction',));
            }

            // choisir_joueur
            if ($pathinfo === '/responsable/choisirJoueur') {
                return array (  '_controller' => 'FTT\\ResponsableBundle\\Controller\\TestAntiDopageController::AfficherMatchsAction',  '_route' => 'choisir_joueur',);
            }

            // hasard_test
            if (0 === strpos($pathinfo, '/responsable/ajoutTest') && preg_match('#^/responsable/ajoutTest/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hasard_test')), array (  '_controller' => 'FTT\\ResponsableBundle\\Controller\\TestAntiDopageController::HasardTestAction',));
            }

            // resultat_test
            if ($pathinfo === '/responsable/ResultatTest') {
                return array (  '_controller' => 'FTT\\ResponsableBundle\\Controller\\TestAntiDopageController::AfficherResultatAction',  '_route' => 'resultat_test',);
            }

            // test_en_cours
            if ($pathinfo === '/responsable/TestsEnAttenteDAffectation') {
                return array (  '_controller' => 'FTT\\ResponsableBundle\\Controller\\TestAntiDopageController::AfficherTestEnAttenteAction',  '_route' => 'test_en_cours',);
            }

            // consulter_profil_responsable
            if ($pathinfo === '/responsable/profilResponsable') {
                return array (  '_controller' => 'FTT\\ResponsableBundle\\Controller\\ProfilController::ProfilAction',  '_route' => 'consulter_profil_responsable',);
            }

            // modifier_profil_responsable
            if ($pathinfo === '/responsable/modifierProfilResponsable') {
                return array (  '_controller' => 'FTT\\ResponsableBundle\\Controller\\ProfilController::EditProfilAction',  '_route' => 'modifier_profil_responsable',);
            }

            // update_profil_responsable
            if ($pathinfo === '/responsable/updateProfilResponsable') {
                return array (  '_controller' => 'FTT\\ResponsableBundle\\Controller\\ProfilController::UpdateProfilAction',  '_route' => 'update_profil_responsable',);
            }

            // envoie_resultat_test
            if (0 === strpos($pathinfo, '/responsable/envoieResultat') && preg_match('#^/responsable/envoieResultat/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'envoie_resultat_test')), array (  '_controller' => 'FTT\\ResponsableBundle\\Controller\\TestAntiDopageController::EnvoyerResultatTestAction',));
            }

            // accueil_responsable
            if ($pathinfo === '/responsable/accueilResponsable') {
                return array (  '_controller' => 'FTT\\ResponsableBundle\\Controller\\AccueilController::AccueilAction',  '_route' => 'accueil_responsable',);
            }

        }

        if (0 === strpos($pathinfo, '/medecin')) {
            // ftt_medecin_homepage
            if (0 === strpos($pathinfo, '/medecin/hello') && preg_match('#^/medecin/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ftt_medecin_homepage')), array (  '_controller' => 'FTT\\MedecinBundle\\Controller\\DefaultController::indexAction',));
            }

            // choisir_test
            if ($pathinfo === '/medecin/ListerTest') {
                return array (  '_controller' => 'FTT\\MedecinBundle\\Controller\\ChoisirTestController::listAction',  '_route' => 'choisir_test',);
            }

            // enregister_test
            if (0 === strpos($pathinfo, '/medecin/EnregisterTest') && preg_match('#^/medecin/EnregisterTest/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'enregister_test')), array (  '_controller' => 'FTT\\MedecinBundle\\Controller\\ChoisirTestController::EnregisterAction',));
            }

            // mes_tests
            if ($pathinfo === '/medecin/MesTests') {
                return array (  '_controller' => 'FTT\\MedecinBundle\\Controller\\ChoisirTestController::MesTestsAction',  '_route' => 'mes_tests',);
            }

            // publier_compte_rendu
            if ($pathinfo === '/medecin/PublierCompteRendu') {
                return array (  '_controller' => 'FTT\\MedecinBundle\\Controller\\ResultatTestController::PublierTestsAction',  '_route' => 'publier_compte_rendu',);
            }

            // ajout_compte_rendu
            if (0 === strpos($pathinfo, '/medecin/AjouterCompteRendu') && preg_match('#^/medecin/AjouterCompteRendu/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajout_compte_rendu')), array (  '_controller' => 'FTT\\MedecinBundle\\Controller\\ResultatTestController::AjouterTestAction',));
            }

            if (0 === strpos($pathinfo, '/medecin/M')) {
                // modifier_compte_rendu
                if ($pathinfo === '/medecin/MesComptesRendus') {
                    return array (  '_controller' => 'FTT\\MedecinBundle\\Controller\\ResultatTestController::MesComptesRendusAction',  '_route' => 'modifier_compte_rendu',);
                }

                // modifierCompte_rendu
                if (0 === strpos($pathinfo, '/medecin/ModifierCompteRendu') && preg_match('#^/medecin/ModifierCompteRendu/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifierCompte_rendu')), array (  '_controller' => 'FTT\\MedecinBundle\\Controller\\ResultatTestController::modifierCompteRenduAction',));
                }

            }

            // consulter_profil_medecin
            if ($pathinfo === '/medecin/profilMedecin') {
                return array (  '_controller' => 'FTT\\MedecinBundle\\Controller\\ProfilController::ProfilAction',  '_route' => 'consulter_profil_medecin',);
            }

            // modifier_profil_medecin
            if ($pathinfo === '/medecin/modifierProfilMedecin') {
                return array (  '_controller' => 'FTT\\MedecinBundle\\Controller\\ProfilController::EditProfilAction',  '_route' => 'modifier_profil_medecin',);
            }

            // update_profil_medecin
            if ($pathinfo === '/medecin/updateProfilMedecin') {
                return array (  '_controller' => 'FTT\\MedecinBundle\\Controller\\ProfilController::UpdateProfilAction',  '_route' => 'update_profil_medecin',);
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/arbitre')) {
                // ftt_arbitre_homepage
                if (0 === strpos($pathinfo, '/arbitre/hello') && preg_match('#^/arbitre/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ftt_arbitre_homepage')), array (  '_controller' => 'FTT\\ArbitreBundle\\Controller\\DefaultController::indexAction',));
                }

                // list_session
                if ($pathinfo === '/arbitre/ListSession') {
                    return array (  '_controller' => 'FTT\\ArbitreBundle\\Controller\\SessionArbitreController::listsessionsAction',  '_route' => 'list_session',);
                }

                // modifier_session
                if (0 === strpos($pathinfo, '/arbitre/modifSession') && preg_match('#^/arbitre/modifSession/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_session')), array (  '_controller' => 'FTT\\ArbitreBundle\\Controller\\SessionArbitreController::modifierSessionsAction',));
                }

                // list_planning
                if ($pathinfo === '/arbitre/ListPlanning') {
                    return array (  '_controller' => 'FTT\\ArbitreBundle\\Controller\\PlanningController::listAction',  '_route' => 'list_planning',);
                }

                // ajouter_planning
                if (0 === strpos($pathinfo, '/arbitre/ajouterPlanning') && preg_match('#^/arbitre/ajouterPlanning/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouter_planning')), array (  '_controller' => 'FTT\\ArbitreBundle\\Controller\\PlanningController::ajouterAction',));
                }

                // supprimer_planning
                if (0 === strpos($pathinfo, '/arbitre/supprimerPlanning') && preg_match('#^/arbitre/supprimerPlanning/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_planning')), array (  '_controller' => 'FTT\\ArbitreBundle\\Controller\\PlanningController::supprimerAction',));
                }

                // modifier_planning
                if (0 === strpos($pathinfo, '/arbitre/modifierPlanning') && preg_match('#^/arbitre/modifierPlanning/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_planning')), array (  '_controller' => 'FTT\\ArbitreBundle\\Controller\\PlanningController::modifierAction',));
                }

                // list_ResultatMatch
                if (0 === strpos($pathinfo, '/arbitre/ListCompteRendu') && preg_match('#^/arbitre/ListCompteRendu/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_ResultatMatch')), array (  '_controller' => 'FTT\\ArbitreBundle\\Controller\\ResultatMatchController::listAction',));
                }

                if (0 === strpos($pathinfo, '/arbitre/modifier')) {
                    // modifier_CompteRendu
                    if (0 === strpos($pathinfo, '/arbitre/modifierCompte_rendu') && preg_match('#^/arbitre/modifierCompte_rendu/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_CompteRendu')), array (  '_controller' => 'FTT\\ArbitreBundle\\Controller\\ResultatMatchController::modifierAction',));
                    }

                    // modifier_ResultatMatch
                    if (0 === strpos($pathinfo, '/arbitre/modifierResultatMatch') && preg_match('#^/arbitre/modifierResultatMatch/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_ResultatMatch')), array (  '_controller' => 'FTT\\ArbitreBundle\\Controller\\ResultatMatchController::modifierAction',));
                    }

                }

                // consulter_profil_arbitre
                if ($pathinfo === '/arbitre/profilArbitre') {
                    return array (  '_controller' => 'FTT\\ArbitreBundle\\Controller\\ProfilController::ProfilAction',  '_route' => 'consulter_profil_arbitre',);
                }

                // modifier_profil_arbitre
                if ($pathinfo === '/arbitre/modifierProfilArbitre') {
                    return array (  '_controller' => 'FTT\\ArbitreBundle\\Controller\\ProfilController::EditProfilAction',  '_route' => 'modifier_profil_arbitre',);
                }

                // update_profil_arbitre
                if ($pathinfo === '/arbitre/updateProfilArbitre') {
                    return array (  '_controller' => 'FTT\\ArbitreBundle\\Controller\\ProfilController::UpdateProfilAction',  '_route' => 'update_profil_arbitre',);
                }

            }

            if (0 === strpos($pathinfo, '/adherent')) {
                // ftt_adherent_homepage
                if ($pathinfo === '/adherent/saisipaiement') {
                    return array (  '_controller' => 'FTT\\AdherentBundle\\Controller\\PaiementController::indexAction',  '_route' => 'ftt_adherent_homepage',);
                }

                // point_adherent
                if ($pathinfo === '/adherent/point') {
                    return array (  '_controller' => 'FTT\\AdherentBundle\\Controller\\PointController::affichageAction',  '_route' => 'point_adherent',);
                }

                // vente_point
                if ($pathinfo === '/adherent/VentePoint') {
                    return array (  '_controller' => 'FTT\\AdherentBundle\\Controller\\PointController::venteAction',  '_route' => 'vente_point',);
                }

                // ticket_user
                if ($pathinfo === '/adherent/ticket') {
                    return array (  '_controller' => 'FTT\\AdherentBundle\\Controller\\TicketController::affichageAction',  '_route' => 'ticket_user',);
                }

                // acheter_ticket
                if (0 === strpos($pathinfo, '/adherent/validerTicket') && preg_match('#^/adherent/validerTicket/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'acheter_ticket')), array (  '_controller' => 'FTT\\AdherentBundle\\Controller\\TicketController::acheterAction',));
                }

                // supprimer_ticket
                if (0 === strpos($pathinfo, '/adherent/annulerTicket') && preg_match('#^/adherent/annulerTicket/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_ticket')), array (  '_controller' => 'FTT\\AdherentBundle\\Controller\\TicketController::annulerAction',));
                }

                // list_resultat_pronostic
                if ($pathinfo === '/adherent/listResultatPronostic') {
                    return array (  '_controller' => 'FTT\\AdherentBundle\\Controller\\PronosticAdherentController::ListResultatPronosticAction',  '_route' => 'list_resultat_pronostic',);
                }

                // recevoir_point
                if (0 === strpos($pathinfo, '/adherent/RecevoirPoint') && preg_match('#^/adherent/RecevoirPoint/(?P<imei>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'recevoir_point')), array (  '_controller' => 'FTT\\AdherentBundle\\Controller\\PronosticAdherentController::RecevoirPointAction',));
                }

                // consulter_profil_adherent
                if ($pathinfo === '/adherent/profilAdherent') {
                    return array (  '_controller' => 'FTT\\AdherentBundle\\Controller\\ProfilController::ProfilAction',  '_route' => 'consulter_profil_adherent',);
                }

                // modifier_profil_adherent
                if ($pathinfo === '/adherent/modifierProfilAdherent') {
                    return array (  '_controller' => 'FTT\\AdherentBundle\\Controller\\ProfilController::EditProfilAction',  '_route' => 'modifier_profil_adherent',);
                }

                // update_profil_adherent
                if ($pathinfo === '/adherent/updateProfilAdherent') {
                    return array (  '_controller' => 'FTT\\AdherentBundle\\Controller\\ProfilController::UpdateProfilAction',  '_route' => 'update_profil_adherent',);
                }

                // succes_recharge
                if ($pathinfo === '/adherent/succes') {
                    return array (  '_controller' => 'FTT\\AdherentBundle\\Controller\\PaiementController::completedPaymentAction',  '_route' => 'succes_recharge',);
                }

                // succes
                if ($pathinfo === '/adherent/messagesucces') {
                    return array (  '_controller' => 'FTT\\AdherentBundle\\Controller\\DefaultController::succesAction',  '_route' => 'succes',);
                }

                // echec_recharge
                if ($pathinfo === '/adherent/echec') {
                    return array (  '_controller' => 'FTT\\AdherentBundle\\Controller\\DefaultController::echecAction',  '_route' => 'echec_recharge',);
                }

                // paiement
                if ($pathinfo === '/adherent/paiement') {
                    return array (  '_controller' => 'FTT\\AdherentBundle\\Controller\\PaiementController::paymentAction',  '_route' => 'paiement',);
                }

                // paiement_path
                if ($pathinfo === '/adherent/test') {
                    return array (  '_controller' => 'FTT\\AdherentBundle\\Controller\\PaiementController::indexAction',  '_route' => 'paiement_path',);
                }

                // envoie_ticket
                if (0 === strpos($pathinfo, '/adherent/envoieTicket') && preg_match('#^/adherent/envoieTicket/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'envoie_ticket')), array (  '_controller' => 'FTT\\AdherentBundle\\Controller\\TicketController::envoiAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/ftt')) {
            // ftt_utilisateur_homepage
            if ($pathinfo === '/ftt/accueil') {
                return array (  '_controller' => 'FTT\\UtilisateurBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ftt_utilisateur_homepage',);
            }

            // ftt_utilisateur_error_not_found
            if ($pathinfo === '/ftt/ErreurNotFound') {
                return array (  '_controller' => 'FTT\\UtilisateurBundle\\Controller\\DefaultController::ErreurNotFoundAction',  '_route' => 'ftt_utilisateur_error_not_found',);
            }

            // single_article
            if (0 === strpos($pathinfo, '/ftt/article') && preg_match('#^/ftt/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'single_article')), array (  '_controller' => 'FTT\\UtilisateurBundle\\Controller\\ActualiteController::AfficherArticleAction',));
            }

            // list_news
            if ($pathinfo === '/ftt/news') {
                return array (  '_controller' => 'FTT\\UtilisateurBundle\\Controller\\ActualiteController::listArticlesAction',  '_route' => 'list_news',);
            }

            // consulter_matchs
            if ($pathinfo === '/ftt/matchs/details') {
                return array (  '_controller' => 'FTT\\UtilisateurBundle\\Controller\\MatchController::AfficherMatchsAction',  '_route' => 'consulter_matchs',);
            }

            // consulter_matchs2
            if (0 === strpos($pathinfo, '/ftt/adherent/matchs/details') && preg_match('#^/ftt/adherent/matchs/details/(?P<idTicket>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'consulter_matchs2')), array (  '_controller' => 'FTT\\UtilisateurBundle\\Controller\\MatchController::AfficherMatchsApresTicketAction',));
            }

            // evaluation
            if (0 === strpos($pathinfo, '/ftt/matchs/evaluation') && preg_match('#^/ftt/matchs/evaluation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evaluation')), array (  '_controller' => 'FTT\\UtilisateurBundle\\Controller\\MatchController::evaluationAction',));
            }

            // rencontres_directes
            if (0 === strpos($pathinfo, '/ftt/rencontres') && preg_match('#^/ftt/rencontres/(?P<idJoueur1>[^/]++)/(?P<idJoueur2>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rencontres_directes')), array (  '_controller' => 'FTT\\UtilisateurBundle\\Controller\\ResultatMatchController::RencontresDirectesAction',));
            }

            if (0 === strpos($pathinfo, '/ftt/match')) {
                // resultat_match
                if ($pathinfo === '/ftt/matchs/resultats') {
                    return array (  '_controller' => 'FTT\\UtilisateurBundle\\Controller\\ResultatMatchController::AfficherResultatAction',  '_route' => 'resultat_match',);
                }

                // regarder_match
                if ($pathinfo === '/ftt/matchStreaming') {
                    return array (  '_controller' => 'FTT\\UtilisateurBundle\\Controller\\StreamingMatchController::ListStreamingMatchAction',  '_route' => 'regarder_match',);
                }

            }

            // my_image_route
            if (0 === strpos($pathinfo, '/ftt/images') && preg_match('#^/ftt/images/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_image_route')), array (  '_controller' => 'FTT\\UtilisateurBundle\\Controller\\MatchController::photoAction',));
            }

            // consulter_stat
            if (0 === strpos($pathinfo, '/ftt/statistique') && preg_match('#^/ftt/statistique/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'consulter_stat')), array (  '_controller' => 'FTT\\UtilisateurBundle\\Controller\\GrapheController::chartPieAction',));
            }

            // consulter_arbitre
            if ($pathinfo === '/ftt/arbitre') {
                return array (  '_controller' => 'FTT\\UtilisateurBundle\\Controller\\ArbitreController::AfficherAribtreAction',  '_route' => 'consulter_arbitre',);
            }

            // matchAparier
            if ($pathinfo === '/ftt/matchAparier') {
                return array (  '_controller' => 'FTT\\UtilisateurBundle\\Controller\\MatchPronosticController::ListMatchAParierAction',  '_route' => 'matchAparier',);
            }

            if (0 === strpos($pathinfo, '/ftt/evenements')) {
                // consulter_evenements
                if ($pathinfo === '/ftt/evenements') {
                    return array (  '_controller' => 'FTT\\UtilisateurBundle\\Controller\\EvenementController::AfficherEventsAction',  '_route' => 'consulter_evenements',);
                }

                if (0 === strpos($pathinfo, '/ftt/evenements/resultat')) {
                    // recherche_evenements
                    if ($pathinfo === '/ftt/evenements/resultat') {
                        return array (  '_controller' => 'FTT\\UtilisateurBundle\\Controller\\EvenementController::rechercheeventsAction',  '_route' => 'recherche_evenements',);
                    }

                    // recherche_evenements2
                    if ($pathinfo === '/ftt/evenements/resultatRechercheAvancée') {
                        return array (  '_controller' => 'FTT\\UtilisateurBundle\\Controller\\EvenementController::rechercheevents2Action',  '_route' => 'recherche_evenements2',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/ftt/detail')) {
                // consulter_complexe
                if ($pathinfo === '/ftt/detailcomplexe') {
                    return array (  '_controller' => 'FTT\\UtilisateurBundle\\Controller\\ComplexeController::listAction',  '_route' => 'consulter_complexe',);
                }

                // consulter_stade
                if ($pathinfo === '/ftt/detailstade') {
                    return array (  '_controller' => 'FTT\\UtilisateurBundle\\Controller\\StadeController::listAction',  '_route' => 'consulter_stade',);
                }

            }

            if (0 === strpos($pathinfo, '/ftt/recherchepar')) {
                // recherche_A
                if (0 === strpos($pathinfo, '/ftt/rechercheparA') && preg_match('#^/ftt/rechercheparA/(?P<lettre>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'recherche_A')), array (  '_controller' => 'FTT\\UtilisateurBundle\\Controller\\ComplexeController::RechercheParLettreAction',));
                }

                // recherche_stade
                if (0 === strpos($pathinfo, '/ftt/rechercheparlettre') && preg_match('#^/ftt/rechercheparlettre/(?P<lettre>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'recherche_stade')), array (  '_controller' => 'FTT\\UtilisateurBundle\\Controller\\StadeController::recherchestadeAction',));
                }

            }

            if (0 === strpos($pathinfo, '/ftt/C')) {
                // contact_federation
                if ($pathinfo === '/ftt/ContactFederation') {
                    return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\ReclamationController::ajouterAction',  '_route' => 'contact_federation',);
                }

                if (0 === strpos($pathinfo, '/ftt/Classement')) {
                    // joueur_classementNationnal
                    if ($pathinfo === '/ftt/ClassementNationnal') {
                        return array (  '_controller' => 'FTT\\UtilisateurBundle\\Controller\\JoueurController::listClassementNationnalAction',  '_route' => 'joueur_classementNationnal',);
                    }

                    // joueur_classementInternational
                    if ($pathinfo === '/ftt/ClassementInternational') {
                        return array (  '_controller' => 'FTT\\UtilisateurBundle\\Controller\\JoueurController::listClassementInternationalAction',  '_route' => 'joueur_classementInternational',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/ftt/li')) {
                if (0 === strpos($pathinfo, '/ftt/list')) {
                    // list_clubs
                    if ($pathinfo === '/ftt/listClub') {
                        return array (  '_controller' => 'FTT\\UtilisateurBundle\\Controller\\ClubController::listAction',  '_route' => 'list_clubs',);
                    }

                    // list_joueurs
                    if ($pathinfo === '/ftt/listJoueur') {
                        return array (  '_controller' => 'FTT\\UtilisateurBundle\\Controller\\JoueurController::listAction',  '_route' => 'list_joueurs',);
                    }

                }

                // consulter_Popup
                if ($pathinfo === '/ftt/lieux') {
                    return array (  '_controller' => 'FTT\\UtilisateurBundle\\Controller\\ComplexeController::lieuxAction',  '_route' => 'consulter_Popup',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // ftt_admin_homepage
            if ($pathinfo === '/admin/accueil') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ftt_admin_homepage',);
            }

            // list_actualite
            if ($pathinfo === '/admin/ListActualites') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\ActualiteController::listAction',  '_route' => 'list_actualite',);
            }

            // supprimer_actualite
            if (0 === strpos($pathinfo, '/admin/supprimerActualite') && preg_match('#^/admin/supprimerActualite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_actualite')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\ActualiteController::supprimerAction',));
            }

            // modifier_actualite
            if (0 === strpos($pathinfo, '/admin/modifierActualite') && preg_match('#^/admin/modifierActualite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_actualite')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\ActualiteController::modifierAction',));
            }

            // ajouter_actualite
            if ($pathinfo === '/admin/ajouterActualite') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\ActualiteController::ajouterAction',  '_route' => 'ajouter_actualite',);
            }

            // list_matchsInfo
            if ($pathinfo === '/admin/ListMatchInfo') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\MatchInfoController::listAction',  '_route' => 'list_matchsInfo',);
            }

            // supprimer_matchInfo
            if (0 === strpos($pathinfo, '/admin/supprimerMatchInfo') && preg_match('#^/admin/supprimerMatchInfo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_matchInfo')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\MatchInfoController::supprimerAction',));
            }

            // modifier_matchInfo
            if (0 === strpos($pathinfo, '/admin/modifierMatchInfo') && preg_match('#^/admin/modifierMatchInfo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_matchInfo')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\MatchInfoController::modifierAction',));
            }

            // ajouter_matchInfo
            if ($pathinfo === '/admin/ajouterMatchInfo') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\MatchInfoController::ajouterAction',  '_route' => 'ajouter_matchInfo',);
            }

            // List_match_sansScore
            if ($pathinfo === '/admin/ListMatchSansScore') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\MatchInfoController::listMatchSansScoreAction',  '_route' => 'List_match_sansScore',);
            }

            if (0 === strpos($pathinfo, '/admin/A')) {
                // Attribuer_Score
                if (0 === strpos($pathinfo, '/admin/AttribuerScore') && preg_match('#^/admin/AttribuerScore/(?P<idMatch>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Attribuer_Score')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\ResultatMatchController::ajouterAction',));
                }

                // AjouterTicket
                if ($pathinfo === '/admin/AjouterTicket') {
                    return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\TicketController::ajouterAction',  '_route' => 'AjouterTicket',);
                }

            }

            // ajouter_streaming_match
            if ($pathinfo === '/admin/ajouterStreamingMatch') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\StreamingMatchController::ajouterAction',  '_route' => 'ajouter_streaming_match',);
            }

            // list_users
            if ($pathinfo === '/admin/ListUsers') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\UserController::AfficherUserAction',  '_route' => 'list_users',);
            }

            // modifier_user
            if (0 === strpos($pathinfo, '/admin/ModifierUser') && preg_match('#^/admin/ModifierUser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_user')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\UserController::ModifierUserAction',));
            }

            // bloquer_user
            if (0 === strpos($pathinfo, '/admin/BloquerUser') && preg_match('#^/admin/BloquerUser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bloquer_user')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\UserController::BloquerUserAction',));
            }

            // valider_user
            if (0 === strpos($pathinfo, '/admin/ValiderUser') && preg_match('#^/admin/ValiderUser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'valider_user')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\UserController::ValiderUserAction',));
            }

            // list_users_en_att
            if ($pathinfo === '/admin/ListUsersEnAttente') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\UserController::AfficherUserEnAttenteAction',  '_route' => 'list_users_en_att',);
            }

            // consulter_profil_admin
            if ($pathinfo === '/admin/profilAdmin') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\ProfilController::ProfilAction',  '_route' => 'consulter_profil_admin',);
            }

            // modifier_profil_admin
            if ($pathinfo === '/admin/modifierProfilAdmin') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\ProfilController::EditProfilAction',  '_route' => 'modifier_profil_admin',);
            }

            // update_profil_admin
            if ($pathinfo === '/admin/updateProfilAdmin') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\ProfilController::UpdateProfilAction',  '_route' => 'update_profil_admin',);
            }

            // list_events
            if ($pathinfo === '/admin/ListEvents') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\EvenementController::listEventsAction',  '_route' => 'list_events',);
            }

            // supprimer_events
            if (0 === strpos($pathinfo, '/admin/suppEvents') && preg_match('#^/admin/suppEvents/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_events')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\EvenementController::suppEventsAction',));
            }

            // modifier_events
            if (0 === strpos($pathinfo, '/admin/modifEvents') && preg_match('#^/admin/modifEvents/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_events')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\EvenementController::modifierEventsAction',));
            }

            // ajouter_events
            if ($pathinfo === '/admin/ajouterEvents') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\EvenementController::ajouterEventsAction',  '_route' => 'ajouter_events',);
            }

            // list_dons
            if ($pathinfo === '/admin/ListDons') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\DonController::listDonsAction',  '_route' => 'list_dons',);
            }

            // supprimer_dons
            if (0 === strpos($pathinfo, '/admin/suppDons') && preg_match('#^/admin/suppDons/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_dons')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\DonController::suppDonsAction',));
            }

            // modifier_dons
            if (0 === strpos($pathinfo, '/admin/modifDons') && preg_match('#^/admin/modifDons/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_dons')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\DonController::modifierDonsAction',));
            }

            // ajouter_dons
            if ($pathinfo === '/admin/ajouterDons') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\DonController::ajouterDonsAction',  '_route' => 'ajouter_dons',);
            }

            // list_donsclub
            if ($pathinfo === '/admin/ListDonsclub') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\DonsClubController::listdonsclubAction',  '_route' => 'list_donsclub',);
            }

            if (0 === strpos($pathinfo, '/admin/a')) {
                // attribuer_dons_club
                if ($pathinfo === '/admin/ajoutdonsclubs') {
                    return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\DonsClubController::ajouterdonsclubAction',  '_route' => 'attribuer_dons_club',);
                }

                // Annuler_donsclubs
                if (0 === strpos($pathinfo, '/admin/annulerdonsclubs') && preg_match('#^/admin/annulerdonsclubs/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Annuler_donsclubs')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\DonsClubController::suppdonsclubAction',));
                }

                if (0 === strpos($pathinfo, '/admin/archive')) {
                    // archiveevents
                    if ($pathinfo === '/admin/archiveEvents') {
                        return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\ArchiveController::listEventsarchiveAction',  '_route' => 'archiveevents',);
                    }

                    // archiveactualite
                    if ($pathinfo === '/admin/archiveactualite') {
                        return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\ArchiveController::listactualitéarchiveAction',  '_route' => 'archiveactualite',);
                    }

                    // archiveMatch
                    if ($pathinfo === '/admin/archiveMatch') {
                        return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\ArchiveController::AfficherMatchsArchiveAction',  '_route' => 'archiveMatch',);
                    }

                }

                // SessionArbitre_add
                if ($pathinfo === '/admin/ajouterSessionArbitre') {
                    return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\SessionArbitreController::ajouterAction',  '_route' => 'SessionArbitre_add',);
                }

            }

            // SessionArbitre_display
            if ($pathinfo === '/admin/listSessionArbitre') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\SessionArbitreController::listAction',  '_route' => 'SessionArbitre_display',);
            }

            // SessionArbitre_delete
            if (0 === strpos($pathinfo, '/admin/supprimerSessionArbitre') && preg_match('#^/admin/supprimerSessionArbitre/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'SessionArbitre_delete')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\SessionArbitreController::supprimerAction',));
            }

            // SessionArbitre_modify
            if (0 === strpos($pathinfo, '/admin/modifierSessionArbitre') && preg_match('#^/admin/modifierSessionArbitre/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'SessionArbitre_modify')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\SessionArbitreController::modifierAction',));
            }

            // ajouter_complexe
            if ($pathinfo === '/admin/ajouterComplexe') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\ComplexeController::AjouterAction',  '_route' => 'ajouter_complexe',);
            }

            // modifier_complexe
            if (0 === strpos($pathinfo, '/admin/modifierComplexe') && preg_match('#^/admin/modifierComplexe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_complexe')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\ComplexeController::ModifierAction',));
            }

            // supprimer_complexe
            if (0 === strpos($pathinfo, '/admin/supprimerComplexe') && preg_match('#^/admin/supprimerComplexe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_complexe')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\ComplexeController::supprimerAction',));
            }

            // list_complexe
            if ($pathinfo === '/admin/ListComplexe') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\ComplexeController::listAction',  '_route' => 'list_complexe',);
            }

            // ajouter_stade
            if ($pathinfo === '/admin/ajouterStade') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\StadeController::ajouterAction',  '_route' => 'ajouter_stade',);
            }

            // modifier_stade
            if (0 === strpos($pathinfo, '/admin/modifierStade') && preg_match('#^/admin/modifierStade/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_stade')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\StadeController::modifierAction',));
            }

            // supprimer_stade
            if (0 === strpos($pathinfo, '/admin/supprimerStade') && preg_match('#^/admin/supprimerStade/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_stade')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\StadeController::supprimerAction',));
            }

            // list_stade
            if ($pathinfo === '/admin/ListStade') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\StadeController::listAction',  '_route' => 'list_stade',);
            }

            // google_map
            if ($pathinfo === '/admin/map') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\ComplexeController::mapAction',  '_route' => 'google_map',);
            }

            // choose_map
            if ($pathinfo === '/admin/choose') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\ComplexeController::chooseAction',  '_route' => 'choose_map',);
            }

            // interface_map
            if (0 === strpos($pathinfo, '/admin/interface') && preg_match('#^/admin/interface/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'interface_map')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\ComplexeController::lieuxAction',));
            }

            // consulter_lieux
            if ($pathinfo === '/admin/consulter') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\ComplexeController::listlieuxAction',  '_route' => 'consulter_lieux',);
            }

            // list_club
            if ($pathinfo === '/admin/ListClubs') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\ClubController::listAction',  '_route' => 'list_club',);
            }

            // ajouter_club
            if ($pathinfo === '/admin/ajouterClub') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\ClubController::ajouterAction',  '_route' => 'ajouter_club',);
            }

            // supprimer_club
            if (0 === strpos($pathinfo, '/admin/supprimerClub') && preg_match('#^/admin/supprimerClub/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_club')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\ClubController::supprimerAction',));
            }

            // modifier_club
            if (0 === strpos($pathinfo, '/admin/modifierClub') && preg_match('#^/admin/modifierClub/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_club')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\ClubController::modifierAction',));
            }

            // list_joueur
            if ($pathinfo === '/admin/ListJoueurs') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\JoueurController::listAction',  '_route' => 'list_joueur',);
            }

            // ajouter_joueur
            if ($pathinfo === '/admin/ajouterJoueur') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\JoueurController::ajouterAction',  '_route' => 'ajouter_joueur',);
            }

            // supprimer_joueur
            if (0 === strpos($pathinfo, '/admin/supprimerJoueur') && preg_match('#^/admin/supprimerJoueur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_joueur')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\JoueurController::supprimerAction',));
            }

            // modifier_joueur
            if (0 === strpos($pathinfo, '/admin/modifierJoueur') && preg_match('#^/admin/modifierJoueur/(?P<id>[^/]++)/(?P<idClub>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_joueur')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\JoueurController::modifierAction',));
            }

            // detail_joueur
            if (0 === strpos($pathinfo, '/admin/detailJoueur') && preg_match('#^/admin/detailJoueur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail_joueur')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\JoueurController::AfficherdetailAction',));
            }

            // list_carrieres_joueur
            if ($pathinfo === '/admin/ListCarrieresJoueur') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\CarriereJoueurController::listAction',  '_route' => 'list_carrieres_joueur',);
            }

            if (0 === strpos($pathinfo, '/admin/DetailCarriereJoueur')) {
                // detail_Carriere_Joueur
                if (preg_match('#^/admin/DetailCarriereJoueur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail_Carriere_Joueur')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\CarriereJoueurController::AfficherDetailCarriereAction',));
                }

                // detail_Carriere_Joueur_Modification
                if (0 === strpos($pathinfo, '/admin/DetailCarriereJoueurModification') && preg_match('#^/admin/DetailCarriereJoueurModification/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail_Carriere_Joueur_Modification')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\CarriereJoueurController::AfficherDetailCarriereModificationAction',));
                }

            }

            // list_carrieres_joueur_modification
            if ($pathinfo === '/admin/ListCarrieresJoueurModification') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\CarriereJoueurController::listModificationAction',  '_route' => 'list_carrieres_joueur_modification',);
            }

            // modifier_carriere
            if (0 === strpos($pathinfo, '/admin/modifierCarriere') && preg_match('#^/admin/modifierCarriere/(?P<id>[^/]++)/(?P<idJoueur>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_carriere')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\CarriereJoueurController::modifierAction',));
            }

            // ajout_carriere
            if (0 === strpos($pathinfo, '/admin/ajoutCarriere') && preg_match('#^/admin/ajoutCarriere/(?P<idJoueur>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajout_carriere')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\CarriereJoueurController::ajouterAction',));
            }

            // list_reclamations
            if ($pathinfo === '/admin/listReclamation') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\ReclamationController::listAction',  '_route' => 'list_reclamations',);
            }

            // repondre_reclamations
            if (0 === strpos($pathinfo, '/admin/RepondreReclamation') && preg_match('#^/admin/RepondreReclamation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'repondre_reclamations')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\ReclamationController::modifierAction',));
            }

            // send_mail
            if (0 === strpos($pathinfo, '/admin/SendMail') && preg_match('#^/admin/SendMail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'send_mail')), array (  '_controller' => 'FTT\\AdminBundle\\Controller\\ReclamationController::sendMailAction',));
            }

            // list_match_A_parier
            if ($pathinfo === '/admin/listMatchAparier') {
                return array (  '_controller' => 'FTT\\AdminBundle\\Controller\\MatchsPronosticController::listAction',  '_route' => 'list_match_A_parier',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // hwi_oauth_service_redirect
        if (0 === strpos($pathinfo, '/connect') && preg_match('#^/connect/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_service_redirect')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',));
        }

        if (0 === strpos($pathinfo, '/login')) {
            // hwi_oauth_connect
            if (rtrim($pathinfo, '/') === '/login') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'hwi_oauth_connect');
                }

                return array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_route' => 'hwi_oauth_connect',);
            }

            if (0 === strpos($pathinfo, '/login/check-')) {
                // google_login
                if ($pathinfo === '/login/check-google') {
                    return array('_route' => 'google_login');
                }

                // facebook_login
                if ($pathinfo === '/login/check-facebook') {
                    return array('_route' => 'facebook_login');
                }

            }

        }

        // dcs_rating_add_vote
        if (0 === strpos($pathinfo, '/vote/add') && preg_match('#^/vote/add/(?P<id>[^/]++)/(?P<value>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dcs_rating_add_vote')), array (  '_controller' => 'DCS\\RatingBundle\\Controller\\RatingController::addVoteAction',));
        }

        if (0 === strpos($pathinfo, '/api/threads')) {
            // fos_comment_new_threads
            if (0 === strpos($pathinfo, '/api/threads/new') && preg_match('#^/api/threads/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_new_threads;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_new_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadsAction',  '_format' => 'html',));
            }
            not_fos_comment_new_threads:

            // fos_comment_edit_thread_commentable
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/commentable/edit(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_edit_thread_commentable;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_edit_thread_commentable')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::editThreadCommentableAction',  '_format' => 'html',));
            }
            not_fos_comment_edit_thread_commentable:

            // fos_comment_new_thread_comments
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_new_thread_comments;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_new_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentsAction',  '_format' => 'html',));
            }
            not_fos_comment_new_thread_comments:

            // fos_comment_remove_thread_comment
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/remove(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_remove_thread_comment;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_remove_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::removeThreadCommentAction',  '_format' => 'html',));
            }
            not_fos_comment_remove_thread_comment:

            // fos_comment_edit_thread_comment
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/edit(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_edit_thread_comment;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_edit_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::editThreadCommentAction',  '_format' => 'html',));
            }
            not_fos_comment_edit_thread_comment:

            // fos_comment_new_thread_comment_votes
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_new_thread_comment_votes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_new_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentVotesAction',  '_format' => 'html',));
            }
            not_fos_comment_new_thread_comment_votes:

            // fos_comment_get_thread
            if (preg_match('#^/api/threads/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_thread;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadAction',  '_format' => 'html',));
            }
            not_fos_comment_get_thread:

            // fos_comment_get_threads
            if (preg_match('#^/api/threads(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_threads;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadsActions',  '_format' => 'html',));
            }
            not_fos_comment_get_threads:

            // fos_comment_post_threads
            if (preg_match('#^/api/threads(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_comment_post_threads;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_post_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadsAction',  '_format' => 'html',));
            }
            not_fos_comment_post_threads:

            // fos_comment_patch_thread_commentable
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/commentable(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_fos_comment_patch_thread_commentable;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_patch_thread_commentable')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::patchThreadCommentableAction',  '_format' => 'html',));
            }
            not_fos_comment_patch_thread_commentable:

            // fos_comment_get_thread_comment
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_thread_comment;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentAction',  '_format' => 'html',));
            }
            not_fos_comment_get_thread_comment:

            // fos_comment_patch_thread_comment_state
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/state(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_fos_comment_patch_thread_comment_state;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_patch_thread_comment_state')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::patchThreadCommentStateAction',  '_format' => 'html',));
            }
            not_fos_comment_patch_thread_comment_state:

            // fos_comment_put_thread_comments
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_fos_comment_put_thread_comments;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_put_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::putThreadCommentsAction',  '_format' => 'html',));
            }
            not_fos_comment_put_thread_comments:

            // fos_comment_get_thread_comments
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_thread_comments;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentsAction',  '_format' => 'html',));
            }
            not_fos_comment_get_thread_comments:

            // fos_comment_post_thread_comments
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_comment_post_thread_comments;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_post_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentsAction',  '_format' => 'html',));
            }
            not_fos_comment_post_thread_comments:

            // fos_comment_get_thread_comment_votes
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_thread_comment_votes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentVotesAction',  '_format' => 'html',));
            }
            not_fos_comment_get_thread_comment_votes:

            // fos_comment_post_thread_comment_votes
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_comment_post_thread_comment_votes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_post_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentVotesAction',  '_format' => 'html',));
            }
            not_fos_comment_post_thread_comment_votes:

        }

        // contact
        if (preg_match('#^/(?P<_locale>en|fr|de)/contact$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact')), array (  '_controller' => 'AppBundle:Contact:index',));
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
