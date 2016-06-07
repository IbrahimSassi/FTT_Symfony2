<?php

/* FTTAdminBundle::layoutAdmin.html.twig */
class __TwigTemplate_8d6cee39ffed7b449c71f2777e8cb33f055a4b5d34aa2ca4885d769afb83d412 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layoutInscrit.html.twig", "FTTAdminBundle::layoutAdmin.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layoutInscrit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "          <!-- sidebar menu -->
          <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">

              
              
            <div class=\"menu_section\">
              <h3>General</h3>
              <ul class=\"nav side-menu\">
                <li><a><i class=\"fa fa-home\"></i> Accueil <span class=\"fa fa-chevron-down\"></span></a>
                  <ul class=\"nav child_menu\" style=\"display: none\">
                    <li><a href=\"#\">A Changer</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class=\"fa fa-edit\"></i> Actualités <span class=\"fa fa-chevron-down\"></span></a>
                  <ul class=\"nav child_menu\" style=\"display: none\">
                    <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("list_actualite");
        echo "\">Lister les Actualités</a>
                    </li>
                    <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("ajouter_actualite");
        echo "\">Ajouter un article</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class=\"fa fa-edit\"></i> Comptes <span class=\"fa fa-chevron-down\"></span></a>
                  <ul class=\"nav child_menu\" style=\"display: none\">
                    <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("list_users");
        echo "\">Lister les comptes</a>
                    </li>
                    <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("list_users_en_att");
        echo "\">Valider les comptes</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
              
              
              
              
            <div class=\"menu_section\">
              <h3>Gestion Des competitions</h3>
              <ul class=\"nav side-menu\">
                <li><a><i class=\"fa fa-edit\"></i> Matchs <span class=\"fa fa-chevron-down\"></span></a>
                  <ul class=\"nav child_menu\" style=\"display: none\">
                    <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("list_matchsInfo");
        echo "\">Lister les matchs</a>
                    </li>
                    <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("ajouter_matchInfo");
        echo "\">Ajouter des matchs</a>
                    </li>
                    <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("List_match_sansScore");
        echo "\">Attribuer les resultats</a>
                    </li>
                    <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("list_match_A_parier");
        echo "\">Choisir les matchs a parier</a>
                    </li>
                    <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("AjouterTicket");
        echo "\">Ajouter des tickets</a>
                    </li>
                    
                  </ul>
                </li>
                <li><a><i class=\"fa fa-edit\"></i> Joueurs <span class=\"fa fa-chevron-down\"></span></a>
                  <ul class=\"nav child_menu\" style=\"display: none\">
                    <li><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("list_joueur");
        echo "\">Lister les joueurs</a>
                    </li>
                    <li><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("ajouter_joueur");
        echo "\">Ajouter des joueurs</a>
                    </li>
                    <li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("list_carrieres_joueur");
        echo "\">Lister la carriere des joueurs</a>
                    </li>
                    <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("list_carrieres_joueur_modification");
        echo "\">Modifer la carriere des joueurs</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class=\"fa fa-edit\"></i> Clubs <span class=\"fa fa-chevron-down\"></span></a>
                  <ul class=\"nav child_menu\" style=\"display: none\">
                    <li><a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("list_club");
        echo "\">Lister les clubs</a>
                    </li>
                    <li><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("ajouter_club");
        echo "\">Ajouter des clubs</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class=\"fa fa-edit\"></i> Complexes <span class=\"fa fa-chevron-down\"></span></a>
                  <ul class=\"nav child_menu\" style=\"display: none\">
                    <li><a href=\"#\">Lister les Complexes</a>
                    </li>
                    <li><a href=\"#\">Ajouter des Complexes</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class=\"fa fa-edit\"></i> Stades <span class=\"fa fa-chevron-down\"></span></a>
                  <ul class=\"nav child_menu\" style=\"display: none\">
                    <li><a href=\"#\">Lister les Stades</a>
                    </li>
                    <li><a href=\"#\">Ajouter des Stades</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class=\"fa fa-edit\"></i> Evenements <span class=\"fa fa-chevron-down\"></span></a>
                  <ul class=\"nav child_menu\" style=\"display: none\">
                  <li><a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("list_events");
        echo "\">Lister les Evenements</a>
                    </li>
                    <li><a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("ajouter_events");
        echo "\">Ajouter des Evenements</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class=\"menu_section\">
              <h3>Autres</h3>
              <ul class=\"nav side-menu\">
                <li><a><i class=\"fa fa-edit\"></i> Dons <span class=\"fa fa-chevron-down\"></span></a>
                  <ul class=\"nav child_menu\" style=\"display: none\">
                  <li><a href=\"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("list_dons");
        echo "\">Lister les Dons</a>
                    </li>
                    <li><a href=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("ajouter_dons");
        echo "\">Ajouter des Dons</a>
                    </li>
                    <li><a href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("attribuer_dons_club");
        echo "\">Atrribuer un Don </a>
                    </li>
                  </ul>
                </li>
                <li><a><i class=\"fa fa-edit\"></i> Sessions de formations <span class=\"fa fa-chevron-down\"></span></a>
                  <ul class=\"nav child_menu\" style=\"display: none\">
                    <li><a href=\"#\">Lister les Sessions</a>
                    </li>
                    <li><a href=\"#\">Ajouter des Sessions</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class=\"menu_section\">
              <h3>Extra</h3>
              <ul class=\"nav side-menu\">
                <li><a><i class=\"fa fa-file-pdf-o\"></i> Archivage <span class=\"fa fa-chevron-down\"></span></a>
                  <ul class=\"nav child_menu\" style=\"display: none\">
                   <li><a href=\"";
        // line 132
        echo $this->env->getExtension('routing')->getPath("archiveevents");
        echo "\">Archiver des évenements </a>
                    </li>
                    <li><a href=\"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("archiveactualite");
        echo "\">Archiver des actualités </a>
                    <li><a href=\"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("archiveMatch");
        echo "\">Archiver des Matchs </a>
                  </ul>
                </li>
                <li><a><i class=\"fa fa-play-circle\"></i> Communications <span class=\"fa fa-chevron-down\"></span></a>
                  <ul class=\"nav child_menu\" style=\"display: none\">
                    <li><a href=\"";
        // line 140
        echo $this->env->getExtension('routing')->getPath("ajouter_streaming_match");
        echo "\">Partager un lien d'un match</a>
                    </li>
                    <li><a href=\"";
        // line 142
        echo $this->env->getExtension('routing')->getPath("list_reclamations");
        echo "\">Repondre aux emails</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->
";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle::layoutAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 142,  238 => 140,  230 => 135,  226 => 134,  221 => 132,  199 => 113,  194 => 111,  189 => 109,  175 => 98,  170 => 96,  145 => 74,  140 => 72,  131 => 66,  126 => 64,  121 => 62,  116 => 60,  106 => 53,  101 => 51,  96 => 49,  91 => 47,  86 => 45,  68 => 30,  63 => 28,  54 => 22,  49 => 20,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "::layoutInscrit.html.twig" %}*/
/* */
/* {% block menu %}*/
/*           <!-- sidebar menu -->*/
/*           <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">*/
/* */
/*               */
/*               */
/*             <div class="menu_section">*/
/*               <h3>General</h3>*/
/*               <ul class="nav side-menu">*/
/*                 <li><a><i class="fa fa-home"></i> Accueil <span class="fa fa-chevron-down"></span></a>*/
/*                   <ul class="nav child_menu" style="display: none">*/
/*                     <li><a href="#">A Changer</a>*/
/*                     </li>*/
/*                   </ul>*/
/*                 </li>*/
/*                 <li><a><i class="fa fa-edit"></i> Actualités <span class="fa fa-chevron-down"></span></a>*/
/*                   <ul class="nav child_menu" style="display: none">*/
/*                     <li><a href="{{path('list_actualite')}}">Lister les Actualités</a>*/
/*                     </li>*/
/*                     <li><a href="{{path('ajouter_actualite')}}">Ajouter un article</a>*/
/*                     </li>*/
/*                   </ul>*/
/*                 </li>*/
/*                 <li><a><i class="fa fa-edit"></i> Comptes <span class="fa fa-chevron-down"></span></a>*/
/*                   <ul class="nav child_menu" style="display: none">*/
/*                     <li><a href="{{path('list_users')}}">Lister les comptes</a>*/
/*                     </li>*/
/*                     <li><a href="{{path('list_users_en_att')}}">Valider les comptes</a>*/
/*                     </li>*/
/*                   </ul>*/
/*                 </li>*/
/*               </ul>*/
/*             </div>*/
/*               */
/*               */
/*               */
/*               */
/*             <div class="menu_section">*/
/*               <h3>Gestion Des competitions</h3>*/
/*               <ul class="nav side-menu">*/
/*                 <li><a><i class="fa fa-edit"></i> Matchs <span class="fa fa-chevron-down"></span></a>*/
/*                   <ul class="nav child_menu" style="display: none">*/
/*                     <li><a href="{{path('list_matchsInfo')}}">Lister les matchs</a>*/
/*                     </li>*/
/*                     <li><a href="{{path('ajouter_matchInfo')}}">Ajouter des matchs</a>*/
/*                     </li>*/
/*                     <li><a href="{{path('List_match_sansScore')}}">Attribuer les resultats</a>*/
/*                     </li>*/
/*                     <li><a href="{{path('list_match_A_parier')}}">Choisir les matchs a parier</a>*/
/*                     </li>*/
/*                     <li><a href="{{path('AjouterTicket')}}">Ajouter des tickets</a>*/
/*                     </li>*/
/*                     */
/*                   </ul>*/
/*                 </li>*/
/*                 <li><a><i class="fa fa-edit"></i> Joueurs <span class="fa fa-chevron-down"></span></a>*/
/*                   <ul class="nav child_menu" style="display: none">*/
/*                     <li><a href="{{path('list_joueur')}}">Lister les joueurs</a>*/
/*                     </li>*/
/*                     <li><a href="{{path('ajouter_joueur')}}">Ajouter des joueurs</a>*/
/*                     </li>*/
/*                     <li><a href="{{path('list_carrieres_joueur')}}">Lister la carriere des joueurs</a>*/
/*                     </li>*/
/*                     <li><a href="{{path('list_carrieres_joueur_modification')}}">Modifer la carriere des joueurs</a>*/
/*                     </li>*/
/*                   </ul>*/
/*                 </li>*/
/*                 <li><a><i class="fa fa-edit"></i> Clubs <span class="fa fa-chevron-down"></span></a>*/
/*                   <ul class="nav child_menu" style="display: none">*/
/*                     <li><a href="{{path('list_club')}}">Lister les clubs</a>*/
/*                     </li>*/
/*                     <li><a href="{{path('ajouter_club')}}">Ajouter des clubs</a>*/
/*                     </li>*/
/*                   </ul>*/
/*                 </li>*/
/*                 <li><a><i class="fa fa-edit"></i> Complexes <span class="fa fa-chevron-down"></span></a>*/
/*                   <ul class="nav child_menu" style="display: none">*/
/*                     <li><a href="#">Lister les Complexes</a>*/
/*                     </li>*/
/*                     <li><a href="#">Ajouter des Complexes</a>*/
/*                     </li>*/
/*                   </ul>*/
/*                 </li>*/
/*                 <li><a><i class="fa fa-edit"></i> Stades <span class="fa fa-chevron-down"></span></a>*/
/*                   <ul class="nav child_menu" style="display: none">*/
/*                     <li><a href="#">Lister les Stades</a>*/
/*                     </li>*/
/*                     <li><a href="#">Ajouter des Stades</a>*/
/*                     </li>*/
/*                   </ul>*/
/*                 </li>*/
/*                 <li><a><i class="fa fa-edit"></i> Evenements <span class="fa fa-chevron-down"></span></a>*/
/*                   <ul class="nav child_menu" style="display: none">*/
/*                   <li><a href="{{path('list_events')}}">Lister les Evenements</a>*/
/*                     </li>*/
/*                     <li><a href="{{path('ajouter_events')}}">Ajouter des Evenements</a>*/
/*                     </li>*/
/*                   </ul>*/
/*                 </li>*/
/*               </ul>*/
/*             </div>*/
/*             <div class="menu_section">*/
/*               <h3>Autres</h3>*/
/*               <ul class="nav side-menu">*/
/*                 <li><a><i class="fa fa-edit"></i> Dons <span class="fa fa-chevron-down"></span></a>*/
/*                   <ul class="nav child_menu" style="display: none">*/
/*                   <li><a href="{{path('list_dons')}}">Lister les Dons</a>*/
/*                     </li>*/
/*                     <li><a href="{{path('ajouter_dons')}}">Ajouter des Dons</a>*/
/*                     </li>*/
/*                     <li><a href="{{path('attribuer_dons_club')}}">Atrribuer un Don </a>*/
/*                     </li>*/
/*                   </ul>*/
/*                 </li>*/
/*                 <li><a><i class="fa fa-edit"></i> Sessions de formations <span class="fa fa-chevron-down"></span></a>*/
/*                   <ul class="nav child_menu" style="display: none">*/
/*                     <li><a href="#">Lister les Sessions</a>*/
/*                     </li>*/
/*                     <li><a href="#">Ajouter des Sessions</a>*/
/*                     </li>*/
/*                   </ul>*/
/*                 </li>*/
/*               </ul>*/
/*             </div>*/
/*             <div class="menu_section">*/
/*               <h3>Extra</h3>*/
/*               <ul class="nav side-menu">*/
/*                 <li><a><i class="fa fa-file-pdf-o"></i> Archivage <span class="fa fa-chevron-down"></span></a>*/
/*                   <ul class="nav child_menu" style="display: none">*/
/*                    <li><a href="{{path('archiveevents')}}">Archiver des évenements </a>*/
/*                     </li>*/
/*                     <li><a href="{{path('archiveactualite')}}">Archiver des actualités </a>*/
/*                     <li><a href="{{path('archiveMatch')}}">Archiver des Matchs </a>*/
/*                   </ul>*/
/*                 </li>*/
/*                 <li><a><i class="fa fa-play-circle"></i> Communications <span class="fa fa-chevron-down"></span></a>*/
/*                   <ul class="nav child_menu" style="display: none">*/
/*                     <li><a href="{{path('ajouter_streaming_match')}}">Partager un lien d'un match</a>*/
/*                     </li>*/
/*                     <li><a href="{{path('list_reclamations')}}">Repondre aux emails</a>*/
/*                     </li>*/
/*                   </ul>*/
/*                 </li>*/
/*               </ul>*/
/*             </div>*/
/* */
/*           </div>*/
/*           <!-- /sidebar menu -->*/
/* {% endblock %}*/
