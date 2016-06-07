<?php

/* DCSRatingBundle:Rating:control.html.twig */
class __TwigTemplate_8ae6cba721489fa22e2b2f9239ffea716934f5ad370f4f6a9e49d9b99617de1a extends Twig_Template
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
        $context["securityRole"] = ((array_key_exists("role", $context)) ? (_twig_default_filter((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), $this->env->getExtension('rating_extension')->getDefaultSecurityRoleFunction())) : ($this->env->getExtension('rating_extension')->getDefaultSecurityRoleFunction()));
        // line 2
        $context["permalink"] = ((array_key_exists("permalink", $context)) ? (_twig_default_filter((isset($context["permalink"]) ? $context["permalink"] : $this->getContext($context, "permalink")), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array())));
        // line 3
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("DCSRatingBundle:Rating:control", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "permalink" => (isset($context["permalink"]) ? $context["permalink"] : $this->getContext($context, "permalink")), "securityRole" => (isset($context["securityRole"]) ? $context["securityRole"] : $this->getContext($context, "securityRole")), "params" => ((array_key_exists("params", $context)) ? (_twig_default_filter((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), array())) : (array())))));
    }

    public function getTemplateName()
    {
        return "DCSRatingBundle:Rating:control.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set securityRole = role|default(getDefaultSecurityRole()) %}*/
/* {% set permalink = permalink|default(app.request.uri) %}*/
/* {{ render(controller('DCSRatingBundle:Rating:control', {'id' : id, 'permalink' : permalink, 'securityRole' : securityRole, 'params' : params|default({})})) }}*/
