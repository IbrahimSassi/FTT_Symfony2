<?php

/* FTTMedecinBundle::layoutMedecin.html.twig */
class __TwigTemplate_b65dee81484dcbf85980a00d63044a8d824e2f002c772521ded6076588517258 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layoutInscrit.html.twig", "FTTMedecinBundle::layoutMedecin.html.twig", 1);
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
        echo "    <!-- sidebar menu -->
    <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
        <div class=\"menu_section\">
            <h3>General</h3>
            <ul class=\"nav side-menu\">
                <li><a><i class=\"fa fa-home\"></i> Accueil <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\" style=\"display: none\">
                        <li><a href='";
        // line 11
        echo $this->env->getExtension('routing')->getPath("choisir_test");
        echo "'>Choisir un Test</a>
                        </li>
                    </ul>
                    <ul class=\"nav child_menu\" style=\"display: none\">
                        <li><a href='";
        // line 15
        echo $this->env->getExtension('routing')->getPath("mes_tests");
        echo "'>Mes Tests</a>
                        </li>
                    </ul>
                </li>
                <li>
                <li><a><i class=\"fa fa-clone\" aria-hidden=\"true\"></i> Mes comptes rendu <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\" style=\"display: none\">
                        <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("publier_compte_rendu");
        echo "\">Publier Compte Rendu</a></li>
                        <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("modifier_compte_rendu");
        echo "\">Anciens Comptes Rendus</a></li>
                    </ul>
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
        return "FTTMedecinBundle::layoutMedecin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 23,  57 => 22,  47 => 15,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "::layoutInscrit.html.twig" %}*/
/* */
/* {% block menu %}*/
/*     <!-- sidebar menu -->*/
/*     <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">*/
/*         <div class="menu_section">*/
/*             <h3>General</h3>*/
/*             <ul class="nav side-menu">*/
/*                 <li><a><i class="fa fa-home"></i> Accueil <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu" style="display: none">*/
/*                         <li><a href='{{path('choisir_test')}}'>Choisir un Test</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                     <ul class="nav child_menu" style="display: none">*/
/*                         <li><a href='{{path('mes_tests')}}'>Mes Tests</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li>*/
/*                 <li><a><i class="fa fa-clone" aria-hidden="true"></i> Mes comptes rendu <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu" style="display: none">*/
/*                         <li><a href="{{path('publier_compte_rendu')}}">Publier Compte Rendu</a></li>*/
/*                         <li><a href="{{path('modifier_compte_rendu')}}">Anciens Comptes Rendus</a></li>*/
/*                     </ul>*/
/*                 </li>*/
/*             </ul>*/
/*             </li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <!-- /sidebar menu -->*/
/* {% endblock %}*/
