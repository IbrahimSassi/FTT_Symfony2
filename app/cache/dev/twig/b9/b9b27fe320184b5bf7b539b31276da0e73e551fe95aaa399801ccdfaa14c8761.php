<?php

/* FTTAdminBundle:Default:home.html.twig */
class __TwigTemplate_d8591f6e9fe75137b73e26c4af98688a4db156483bc41e4ac6104812dd6360cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:Default:home.html.twig", 1);
        $this->blocks = array(
            'header1' => array($this, 'block_header1'),
            'header2' => array($this, 'block_header2'),
            'bodyAdmin' => array($this, 'block_bodyAdmin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FTTAdminBundle::layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_header1($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "FTTAdminBundle::Default/Includes/header.html.twig");
        echo "
";
    }

    // line 8
    public function block_header2($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        echo twig_include($this->env, $context, "FTTAdminBundle::Default/Includes/header2.html.twig");
        echo "
";
    }

    // line 13
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"col-md-3\">

        <div class=\"panel panel-danger\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"col-xs-3\"><i class=\"glyphicon glyphicon-signal\" style=\"font-size:4.5em\"></i></div>
                    <div class=\"col-xs-9 text-right\">
                        <div style=\"font-size:2.5em\">
                            ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["actualites"]) ? $context["actualites"] : $this->getContext($context, "actualites")), "html", null, true);
        echo "
                        </div>
                        <div>Actualités</div>
                    </div>
                </div>
            </div>
            <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("list_actualite");
        echo "\">
                <div class=\"panel-footer\">
                    <div class=\"pull-left\">Voir articles</div>
                    <div class=\"pull-right\"><i class=\"glyphicon glyphicon-circle-arrow-right\"></i></div>
                    <div class=\"clearfix\"></div>
                </div>
            </a>
        </div>
    </div>


    <div class=\"col-md-3\">
        <div class=\"panel panel-warning\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"col-xs-3\"><i class=\"glyphicon glyphicon-user\" style=\"font-size:4.5em\"></i></div>
                    <div class=\"col-xs-9 text-right\">
                        <div style=\"font-size:2.5em\">";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), "html", null, true);
        echo "</div>
                        <div>Utilisateurs</div>
                    </div>
                </div>
            </div>
            <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("list_users");
        echo "\">
                <div class=\"panel-footer\">
                    <div class=\"pull-left\">Voir utilisateurs</div>
                    <div class=\"pull-right\"><i class=\"glyphicon glyphicon-circle-arrow-right\"></i></div>
                    <div class=\"clearfix\"></div>
                </div>
            </a>
        </div>
    </div>


    <div class=\"col-md-3\">
        <div class=\"panel panel-info\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"col-xs-3\"><i class=\"glyphicon glyphicon-comment\" style=\"font-size:4.5em\"></i></div>
                    <div class=\"col-xs-9 text-right\">
                        <div style=\"font-size:2.5em\">";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["reclamations"]) ? $context["reclamations"] : $this->getContext($context, "reclamations")), "html", null, true);
        echo "</div>
                        <div>Reclamations</div>
                    </div>
                </div>
            </div>
            <a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("list_reclamations");
        echo "\">
                <div class=\"panel-footer\">
                    <div class=\"pull-left\">Voir reclmations</div>
                    <div class=\"pull-right\"><i class=\"glyphicon glyphicon-circle-arrow-right\"></i></div>
                    <div class=\"clearfix\"></div>
                </div>
            </a>
        </div>
    </div>


    <div class=\"col-md-3\">
        <div class=\"panel panel-success\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"col-xs-3\"><i class=\"glyphicon glyphicon-th-list\" style=\"font-size:4.5em\"></i></div>
                    <div class=\"col-xs-9 text-right\">
                        <div style=\"font-size:2.5em\">";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["matchs"]) ? $context["matchs"] : $this->getContext($context, "matchs")), "html", null, true);
        echo "</div>
                        <div>Matchs</div>
                    </div>
                </div>
            </div>
            <a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("list_matchsInfo");
        echo "\">
                <div class=\"panel-footer\">
                    <div class=\"pull-left\">Voir matchs</div>
                    <div class=\"pull-right\"><i class=\"glyphicon glyphicon-circle-arrow-right\"></i></div>
                    <div class=\"clearfix\"></div>
                </div>
            </a>
        </div>
    </div>
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/graphe/exporting.js"), "html", null, true);
        echo "\"></script>      
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/graphe/highcharts.js"), "html", null, true);
        echo "\"></script>    
    <script type=\"text/javascript\">
        ";
        // line 106
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "
    </script>
    <div id=\"piechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto;\"></div>


";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 106,  172 => 104,  168 => 103,  156 => 94,  148 => 89,  128 => 72,  120 => 67,  100 => 50,  92 => 45,  72 => 28,  63 => 22,  53 => 14,  50 => 13,  43 => 9,  40 => 8,  33 => 5,  30 => 4,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* */
/* {% block header1 %}*/
/*     {{ include('FTTAdminBundle::Default/Includes/header.html.twig') }}*/
/* {% endblock %}*/
/* */
/* {% block header2 %}*/
/*     {{ include('FTTAdminBundle::Default/Includes/header2.html.twig') }}*/
/* {% endblock %}*/
/* */
/* */
/* {% block bodyAdmin %}*/
/*     <div class="col-md-3">*/
/* */
/*         <div class="panel panel-danger">*/
/*             <div class="panel-heading">*/
/*                 <div class="row">*/
/*                     <div class="col-xs-3"><i class="glyphicon glyphicon-signal" style="font-size:4.5em"></i></div>*/
/*                     <div class="col-xs-9 text-right">*/
/*                         <div style="font-size:2.5em">*/
/*                             {{actualites }}*/
/*                         </div>*/
/*                         <div>Actualités</div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <a href="{{path('list_actualite')}}">*/
/*                 <div class="panel-footer">*/
/*                     <div class="pull-left">Voir articles</div>*/
/*                     <div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></div>*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     <div class="col-md-3">*/
/*         <div class="panel panel-warning">*/
/*             <div class="panel-heading">*/
/*                 <div class="row">*/
/*                     <div class="col-xs-3"><i class="glyphicon glyphicon-user" style="font-size:4.5em"></i></div>*/
/*                     <div class="col-xs-9 text-right">*/
/*                         <div style="font-size:2.5em">{{users}}</div>*/
/*                         <div>Utilisateurs</div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <a href="{{path('list_users')}}">*/
/*                 <div class="panel-footer">*/
/*                     <div class="pull-left">Voir utilisateurs</div>*/
/*                     <div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></div>*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     <div class="col-md-3">*/
/*         <div class="panel panel-info">*/
/*             <div class="panel-heading">*/
/*                 <div class="row">*/
/*                     <div class="col-xs-3"><i class="glyphicon glyphicon-comment" style="font-size:4.5em"></i></div>*/
/*                     <div class="col-xs-9 text-right">*/
/*                         <div style="font-size:2.5em">{{reclamations}}</div>*/
/*                         <div>Reclamations</div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <a href="{{path('list_reclamations')}}">*/
/*                 <div class="panel-footer">*/
/*                     <div class="pull-left">Voir reclmations</div>*/
/*                     <div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></div>*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     <div class="col-md-3">*/
/*         <div class="panel panel-success">*/
/*             <div class="panel-heading">*/
/*                 <div class="row">*/
/*                     <div class="col-xs-3"><i class="glyphicon glyphicon-th-list" style="font-size:4.5em"></i></div>*/
/*                     <div class="col-xs-9 text-right">*/
/*                         <div style="font-size:2.5em">{{matchs}}</div>*/
/*                         <div>Matchs</div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <a href="{{path('list_matchsInfo')}}">*/
/*                 <div class="panel-footer">*/
/*                     <div class="pull-left">Voir matchs</div>*/
/*                     <div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></div>*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/*     <script src="{{asset('js/graphe/exporting.js')}}"></script>      */
/*     <script src="{{asset('js/graphe/highcharts.js')}}"></script>    */
/*     <script type="text/javascript">*/
/*         {{ chart(chart) }}*/
/*     </script>*/
/*     <div id="piechart" style="min-width: 400px; height: 400px; margin: 0 auto;"></div>*/
/* */
/* */
/* {% endblock %}*/
/* */
