<?php

/* FTTUtilisateurBundle::Default/Includes/MenuSite.html.twig */
class __TwigTemplate_9f8fdc15c8e0ae4e7b56ce9876b7943e37ec7eebf1ccac7ce34fa98416fcda8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- mainmenu-->
<nav class=\"mainmenu\">
    <div class=\"container\" style=\"font-family: 'Oswald'\">
        <!-- Menu-->
        <ul class=\"sf-menu\" id=\"menu\">
            <li class=\"selected\">
                <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("ftt_utilisateur_homepage");
        echo "\">Accueil</a>
            </li>    

            <li class=\"current\">
                <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("list_news");
        echo "\">News</a>
            </li>

            <li class=\"current\">
                <a href=\"#\">FTT</a>
                <ul class=\"sub-current\">
                    <li>
                        <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("list_clubs");
        echo "\">Clubs</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("list_joueurs");
        echo "\">Joueurs</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("consulter_arbitre");
        echo "\">Arbitres</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("consulter_complexe");
        echo "\">Complexes</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("consulter_stade");
        echo "\">Stades</a>
                    </li>
                </ul>
            </li>



            <li class=\"current\">
                <a href=\"#\">Competitions</a>
                <ul class=\"sub-current\">
                    <li>
                        <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("consulter_evenements");
        echo "\">Evenements</a>
                    </li>
                    <li class=\"current\">
                        <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("consulter_matchs");
        echo "\">Matchs</a>
                        <ul class=\"sub-current\">
                            <li>
                                <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("consulter_matchs");
        echo "\">Details</a>
                            </li>

                            <li>
                                <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("resultat_match");
        echo "\">Resultats</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("regarder_match");
        echo "\">Matchs en direct</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"current\">
                        <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("joueur_classementNationnal");
        echo "\">Classements</a>
                        <ul class=\"sub-current\">
                            <li>
                                <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("joueur_classementNationnal");
        echo "\">Classement National</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("joueur_classementInternational");
        echo "\">Classement International</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class=\"current\">
                <a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("contact_federation");
        echo "\">Contact</a>
                <ul class=\"sub-current\">
                    <li>
                        <a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("contact_federation");
        echo "\">Contactez-Nous</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("contact_federation");
        echo "\">Informations</a>
                    </li>
                </ul>
            </li>
            <li class=\"current\">
                <a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("matchAparier");
        echo "\">Pronostics</a>
                <ul class=\"sub-current\">
                    <li>
                        <a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("matchAparier");
        echo "\">Matchs a parier</a>
                    </li>
                    ";
        // line 88
        if ($this->env->getExtension('security')->isGranted("ROLE_ADHERENT")) {
            // line 89
            echo "                        <li>
                            <a href=\"";
            // line 90
            echo $this->env->getExtension('routing')->getPath("list_resultat_pronostic");
            echo "\">Resultats pari</a>
                        </li>

                    ";
        }
        // line 94
        echo "                </ul>
            </li> 
            ";
        // line 96
        if ($this->env->getExtension('security')->isGranted("ROLE_ADHERENT")) {
            // line 97
            echo "                <li class=\"current\">
                    <a href=\"";
            // line 98
            echo $this->env->getExtension('routing')->getPath("consulter_profil_adherent");
            echo "\">Profil</a>
                    <ul class=\"sub-current\">
                        <li>
                            <a href=\"";
            // line 101
            echo $this->env->getExtension('routing')->getPath("modifier_profil_adherent");
            echo "\">Modifier informations</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 104
            echo $this->env->getExtension('routing')->getPath("point_adherent");
            echo "\">Acheter/Vendre points</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 107
            echo $this->env->getExtension('routing')->getPath("ticket_user");
            echo "\">Mes Tickets</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 110
            echo $this->env->getExtension('routing')->getPath("ftt_adherent_homepage");
            echo "\">Recharger solde</a>
                        </li>
                    </ul>
                </li> 
                ";
            // line 114
            $this->displayBlock('menu', $context, $blocks);
            // line 117
            echo "            ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_ARBITRE")) {
            // line 118
            echo "                <li class=\"current\">
                    <a href=\"";
            // line 119
            echo $this->env->getExtension('routing')->getPath("consulter_profil_arbitre");
            echo "\">Espace professionnel 
                        <i class=\"fa fa-unlock\" aria-hidden=\"true\"></i></a>
                    ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_MEDECIN")) {
            // line 121
            echo "   
                <li class=\"current\">
                    <a href=\"";
            // line 123
            echo $this->env->getExtension('routing')->getPath("consulter_profil_medecin");
            echo "\">Espace professionnel 
                        <i class=\"fa fa-unlock\" aria-hidden=\"true\"></i></a>
                    ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE")) {
            // line 125
            echo " 
                <li class=\"current\">
                    <a href=\"";
            // line 127
            echo $this->env->getExtension('routing')->getPath("consulter_profil_responsable");
            echo "\">Espace professionnel 
                        <i class=\"fa fa-unlock\" aria-hidden=\"true\"></i></a>
                    ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 129
            echo "  
                <li class=\"current\">
                    <a href=\"";
            // line 131
            echo $this->env->getExtension('routing')->getPath("consulter_profil_admin");
            echo "\">Espace professionnel 
                        <i class=\"fa fa-unlock\" aria-hidden=\"true\"></i></a>
                    ";
        }
        // line 134
        echo "

        </ul>
        <!-- End Menu-->
    </div>
</nav>
";
    }

    // line 114
    public function block_menu($context, array $blocks = array())
    {
        // line 115
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "FTTUtilisateurBundle::Default/Includes/MenuSite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 115,  275 => 114,  265 => 134,  259 => 131,  255 => 129,  249 => 127,  245 => 125,  239 => 123,  235 => 121,  229 => 119,  226 => 118,  223 => 117,  221 => 114,  214 => 110,  208 => 107,  202 => 104,  196 => 101,  190 => 98,  187 => 97,  185 => 96,  181 => 94,  174 => 90,  171 => 89,  169 => 88,  164 => 86,  158 => 83,  150 => 78,  144 => 75,  138 => 72,  128 => 65,  122 => 62,  116 => 59,  108 => 54,  102 => 51,  95 => 47,  89 => 44,  83 => 41,  69 => 30,  63 => 27,  57 => 24,  51 => 21,  45 => 18,  35 => 11,  28 => 7,  20 => 1,);
    }
}
/* <!-- mainmenu-->*/
/* <nav class="mainmenu">*/
/*     <div class="container" style="font-family: 'Oswald'">*/
/*         <!-- Menu-->*/
/*         <ul class="sf-menu" id="menu">*/
/*             <li class="selected">*/
/*                 <a href="{{path('ftt_utilisateur_homepage')}}">Accueil</a>*/
/*             </li>    */
/* */
/*             <li class="current">*/
/*                 <a href="{{path('list_news')}}">News</a>*/
/*             </li>*/
/* */
/*             <li class="current">*/
/*                 <a href="#">FTT</a>*/
/*                 <ul class="sub-current">*/
/*                     <li>*/
/*                         <a href="{{path('list_clubs')}}">Clubs</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{path('list_joueurs')}}">Joueurs</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{path('consulter_arbitre')}}">Arbitres</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{path('consulter_complexe')}}">Complexes</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{path('consulter_stade')}}">Stades</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/* */
/* */
/* */
/*             <li class="current">*/
/*                 <a href="#">Competitions</a>*/
/*                 <ul class="sub-current">*/
/*                     <li>*/
/*                         <a href="{{path('consulter_evenements')}}">Evenements</a>*/
/*                     </li>*/
/*                     <li class="current">*/
/*                         <a href="{{path('consulter_matchs')}}">Matchs</a>*/
/*                         <ul class="sub-current">*/
/*                             <li>*/
/*                                 <a href="{{path('consulter_matchs')}}">Details</a>*/
/*                             </li>*/
/* */
/*                             <li>*/
/*                                 <a href="{{path('resultat_match')}}">Resultats</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{path('regarder_match')}}">Matchs en direct</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li class="current">*/
/*                         <a href="{{path('joueur_classementNationnal')}}">Classements</a>*/
/*                         <ul class="sub-current">*/
/*                             <li>*/
/*                                 <a href="{{path('joueur_classementNationnal')}}">Classement National</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{path('joueur_classementInternational')}}">Classement International</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li class="current">*/
/*                 <a href="{{path('contact_federation')}}">Contact</a>*/
/*                 <ul class="sub-current">*/
/*                     <li>*/
/*                         <a href="{{path('contact_federation')}}">Contactez-Nous</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{path('contact_federation')}}">Informations</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li class="current">*/
/*                 <a href="{{path('matchAparier')}}">Pronostics</a>*/
/*                 <ul class="sub-current">*/
/*                     <li>*/
/*                         <a href="{{path('matchAparier')}}">Matchs a parier</a>*/
/*                     </li>*/
/*                     {% if is_granted('ROLE_ADHERENT') %}*/
/*                         <li>*/
/*                             <a href="{{path('list_resultat_pronostic')}}">Resultats pari</a>*/
/*                         </li>*/
/* */
/*                     {% endif %}*/
/*                 </ul>*/
/*             </li> */
/*             {% if is_granted('ROLE_ADHERENT') %}*/
/*                 <li class="current">*/
/*                     <a href="{{path('consulter_profil_adherent')}}">Profil</a>*/
/*                     <ul class="sub-current">*/
/*                         <li>*/
/*                             <a href="{{path('modifier_profil_adherent')}}">Modifier informations</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{path('point_adherent')}}">Acheter/Vendre points</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{path('ticket_user')}}">Mes Tickets</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{path('ftt_adherent_homepage')}}">Recharger solde</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li> */
/*                 {% block menu %}*/
/* */
/*                 {% endblock %}*/
/*             {% elseif is_granted('ROLE_ARBITRE') %}*/
/*                 <li class="current">*/
/*                     <a href="{{path('consulter_profil_arbitre')}}">Espace professionnel */
/*                         <i class="fa fa-unlock" aria-hidden="true"></i></a>*/
/*                     {% elseif is_granted('ROLE_MEDECIN') %}   */
/*                 <li class="current">*/
/*                     <a href="{{path('consulter_profil_medecin')}}">Espace professionnel */
/*                         <i class="fa fa-unlock" aria-hidden="true"></i></a>*/
/*                     {% elseif is_granted('ROLE_RESPONSABLE') %} */
/*                 <li class="current">*/
/*                     <a href="{{path('consulter_profil_responsable')}}">Espace professionnel */
/*                         <i class="fa fa-unlock" aria-hidden="true"></i></a>*/
/*                     {% elseif is_granted('ROLE_SUPER_ADMIN') %}  */
/*                 <li class="current">*/
/*                     <a href="{{path('consulter_profil_admin')}}">Espace professionnel */
/*                         <i class="fa fa-unlock" aria-hidden="true"></i></a>*/
/*                     {% endif %}*/
/* */
/* */
/*         </ul>*/
/*         <!-- End Menu-->*/
/*     </div>*/
/* </nav>*/
/* */
