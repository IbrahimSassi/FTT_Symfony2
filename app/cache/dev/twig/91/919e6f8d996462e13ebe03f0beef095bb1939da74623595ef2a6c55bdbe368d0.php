<?php

/* FTTAdminBundle:Complexe:maplieux.html.twig */
class __TwigTemplate_91c5c947b3ffb8165d537ca89462bf8c6d7e9b1c320fe05babe6458dbe5a11b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    <input id=\"lat\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["latitude"]) ? $context["latitude"] : $this->getContext($context, "latitude")), "html", null, true);
        echo "\"/>
    <input id=\"long\" type=\"hidden\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["longitude"]) ? $context["longitude"] : $this->getContext($context, "longitude")), "html", null, true);
        echo "\"/>
<div id=\"googleMap\" style=\"width:500px;height:380px;\"></div>
";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:Complexe:maplieux.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}
/*     <input id="lat" type="hidden" value="{{latitude}}"/>*/
/*     <input id="long" type="hidden" value="{{longitude}}"/>*/
/* <div id="googleMap" style="width:500px;height:380px;"></div>*/
/* */
