<?php

/* FTTResponsableBundle:Accueil:AccueilResponsable.html.twig */
class __TwigTemplate_cf1fd4edf839e7b71e73ac8155f72e08c25f9e220b01abff6e54bb0ca71facf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTResponsableBundle::layoutResponsable.html.twig", "FTTResponsableBundle:Accueil:AccueilResponsable.html.twig", 1);
        $this->blocks = array(
            'bodyAdmin' => array($this, 'block_bodyAdmin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FTTResponsableBundle::layoutResponsable.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 3
        echo "    <div id=\"piechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto;\"></div>
";
    }

    public function getTemplateName()
    {
        return "FTTResponsableBundle:Accueil:AccueilResponsable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "FTTResponsableBundle::layoutResponsable.html.twig" %}*/
/* {% block bodyAdmin %}*/
/*     <div id="piechart" style="min-width: 400px; height: 400px; margin: 0 auto;"></div>*/
/* {% endblock %}*/
/* */
