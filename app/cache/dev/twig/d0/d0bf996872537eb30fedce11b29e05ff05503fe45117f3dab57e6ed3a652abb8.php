<?php

/* FTTArbitreBundle::layoutArbitre.html.twig */
class __TwigTemplate_10b4ab81a29870a260a0fc6f96f7560c2d4f0cc159d40eed78e3c8c02bb70a9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layoutInscrit.html.twig", "FTTArbitreBundle::layoutArbitre.html.twig", 3);
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

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "          <!-- sidebar menu -->
          <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">

              
            <h3>General</h3>
        <ul class=\"nav side-menu\">
            
            <li><a><i class=\"fa fa-edit\"></i> planning arbitre<span class=\"fa fa-chevron-down\"></span></a>
                <ul class=\"nav child_menu\" style=\"display: none\">
                    <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("list_planning");
        echo "\">Lister les plannings</a>
                    </li>
                    <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("ajouter_planning", array("id" => 6));
        echo "\">Ajouter planning</a>
                    </li>
                </ul>
            </li>
            <li><a><i class=\"fa fa-edit\"></i> Comptes rendus matchs <span class=\"fa fa-chevron-down\"></span></a>
                <ul class=\"nav child_menu\" style=\"display: none\">
                    <li><a href=\"#\">Lister les comptes rendus</a>
                    </li>
                    <li><a href=\"#\">Valider les comptes rendus</a>
                    </li>
                </ul>
            </li>
            <li><a><i class=\"fa fa-edit\"></i> Déposer candidature<span class=\"fa fa-chevron-down\"></span></a>
                <ul class=\"nav child_menu\" style=\"display: none\">
                    <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("list_session");
        echo "\">lister candidatures</a>
                    </li>

                </ul>
            </li>
        </ul>
    </div>

            

       
          <!-- /sidebar menu -->
";
    }

    public function getTemplateName()
    {
        return "FTTArbitreBundle::layoutArbitre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 31,  47 => 17,  42 => 15,  31 => 6,  28 => 5,  11 => 3,);
    }
}
/* */
/* */
/* {% extends "::layoutInscrit.html.twig" %}*/
/* */
/* {% block menu %}*/
/*           <!-- sidebar menu -->*/
/*           <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">*/
/* */
/*               */
/*             <h3>General</h3>*/
/*         <ul class="nav side-menu">*/
/*             */
/*             <li><a><i class="fa fa-edit"></i> planning arbitre<span class="fa fa-chevron-down"></span></a>*/
/*                 <ul class="nav child_menu" style="display: none">*/
/*                     <li><a href="{{path('list_planning')}}">Lister les plannings</a>*/
/*                     </li>*/
/*                     <li><a href="{{path('ajouter_planning',{'id':6})}}">Ajouter planning</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li><a><i class="fa fa-edit"></i> Comptes rendus matchs <span class="fa fa-chevron-down"></span></a>*/
/*                 <ul class="nav child_menu" style="display: none">*/
/*                     <li><a href="#">Lister les comptes rendus</a>*/
/*                     </li>*/
/*                     <li><a href="#">Valider les comptes rendus</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li><a><i class="fa fa-edit"></i> Déposer candidature<span class="fa fa-chevron-down"></span></a>*/
/*                 <ul class="nav child_menu" style="display: none">*/
/*                     <li><a href="{{path('list_session')}}">lister candidatures</a>*/
/*                     </li>*/
/* */
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* */
/*             */
/* */
/*        */
/*           <!-- /sidebar menu -->*/
/* {% endblock %}*/
