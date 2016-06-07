<?php

/* FTTAdherentBundle:Default:echecrecharge.html.twig */
class __TwigTemplate_13a3b4ed0f8b73627f8b73e72d3dc7faba16b68408f4aed080c3a5840dd6ff8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdherentBundle::layoutAdherent.html.twig", "FTTAdherentBundle:Default:echecrecharge.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FTTAdherentBundle::layoutAdherent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <body>
        <i class=\"fa fa-close fa-5x \"> </i>


        <strong> Echec de rechargement!</strong>
    </body>
";
    }

    public function getTemplateName()
    {
        return "FTTAdherentBundle:Default:echecrecharge.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "FTTAdherentBundle::layoutAdherent.html.twig" %}*/
/* */
/* */
/* {% block body %}*/
/*     <body>*/
/*         <i class="fa fa-close fa-5x "> </i>*/
/* */
/* */
/*         <strong> Echec de rechargement!</strong>*/
/*     </body>*/
/* {% endblock %}*/
