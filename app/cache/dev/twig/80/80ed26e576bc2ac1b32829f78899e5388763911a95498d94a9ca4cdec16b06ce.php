<?php

/* FTTResponsableBundle::layoutResponsable.html.twig */
class __TwigTemplate_e8a1ca8293cedc45f9eb6b30810d8b897973dfc2fed4550fdd98ca7b2d7a221c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layoutInscrit.html.twig", "FTTResponsableBundle::layoutResponsable.html.twig", 1);
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
                        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("choisir_joueur");
        echo "\">Organiser Test De Dopage</a>
                        </li>
                    </ul>
                </li>
                <li>
                <li><a><i class=\"fa fa-clone\" aria-hidden=\"true\"></i> Resultat Test <span class=\"fa fa-chevron-down\"></span></a>

                    <ul class=\"nav child_menu\" style=\"display: none\">
                        <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("resultat_test");
        echo "\">Tests Effectues</a></li>
                        <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("test_en_cours");
        echo "\">Tests En Attente</a></li>
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
        return "FTTResponsableBundle::layoutResponsable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 23,  54 => 22,  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "::layoutInscrit.html.twig" %}*/
/* */
/* {% block menu %}*/
/*     <!-- sidebar menu -->*/
/*     <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">*/
/* */
/* */
/* */
/*         <div class="menu_section">*/
/*             <h3>General</h3>*/
/*             <ul class="nav side-menu">*/
/*                 <li><a><i class="fa fa-home"></i> Accueil <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu" style="display: none">*/
/*                         <li><a href="{{path('choisir_joueur')}}">Organiser Test De Dopage</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li>*/
/*                 <li><a><i class="fa fa-clone" aria-hidden="true"></i> Resultat Test <span class="fa fa-chevron-down"></span></a>*/
/* */
/*                     <ul class="nav child_menu" style="display: none">*/
/*                         <li><a href="{{path('resultat_test')}}">Tests Effectues</a></li>*/
/*                         <li><a href="{{path('test_en_cours')}}">Tests En Attente</a></li>*/
/*                     </ul>*/
/*                 </li>*/
/*             </ul>*/
/*             </li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <!-- /sidebar menu -->*/
/* {% endblock %}*/
