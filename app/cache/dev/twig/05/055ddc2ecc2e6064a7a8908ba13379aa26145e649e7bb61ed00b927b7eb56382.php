<?php

/* FTTUtilisateurBundle:Graphe:pie.html.twig */
class __TwigTemplate_446fd5bfc2bf0dab1f7a5a1ed09266b59ac5787c35f55558a67617e92abb7df5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTUtilisateurBundle::layoutGlobal.html.twig", "FTTUtilisateurBundle:Graphe:pie.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FTTUtilisateurBundle::layoutGlobal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/graphe/jquery.min.js"), "html", null, true);
        echo "\"></script>      
    <script type=\"text/javascript\">
        ";
        // line 5
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "
    </script>
    <div id=\"piechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto;\"></div>
";
    }

    public function getTemplateName()
    {
        return "FTTUtilisateurBundle:Graphe:pie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "FTTUtilisateurBundle::layoutGlobal.html.twig" %}*/
/* {% block body %}*/
/*     <script src="{{asset('js/graphe/jquery.min.js')}}"></script>      */
/*     <script type="text/javascript">*/
/*         {{ chart(chart) }}*/
/*     </script>*/
/*     <div id="piechart" style="min-width: 400px; height: 400px; margin: 0 auto;"></div>*/
/* {% endblock %}*/
/* */
