<?php

/* FTTAdminBundle:Complexe:mapinterface.html.twig */
class __TwigTemplate_31170fcabac16251c6d1882ae5f7442160429354c2fc53f905dfc3871aa520e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("FTTAdminBundle:Complexe:interfacemap.html.twig", "FTTAdminBundle:Complexe:mapinterface.html.twig", 2);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FTTAdminBundle:Complexe:interfacemap.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_container($context, array $blocks = array())
    {
        // line 5
        echo "    <input id=\"lat\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["latitude"]) ? $context["latitude"] : $this->getContext($context, "latitude")), "html", null, true);
        echo "\"/>
    <input id=\"long\" type=\"hidden\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["longitude"]) ? $context["longitude"] : $this->getContext($context, "longitude")), "html", null, true);
        echo "\"/>
<div id=\"googleMap\" style=\"width:900px;height:700px;\"></div>
";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:Complexe:mapinterface.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "FTTAdminBundle:Complexe:interfacemap.html.twig" %}*/
/* */
/* {% block container %}*/
/*     <input id="lat" type="hidden" value="{{latitude}}"/>*/
/*     <input id="long" type="hidden" value="{{longitude}}"/>*/
/* <div id="googleMap" style="width:900px;height:700px;"></div>*/
/* {% endblock %}*/
