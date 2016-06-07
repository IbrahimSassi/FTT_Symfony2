<?php

/* FTTAdminBundle:DonsClubs:attribuerdonsclubs.html.twig */
class __TwigTemplate_8736fcb8cedd516c15dba60447e30dad02a9a441a1ad5904fff40eb931a7fc5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:DonsClubs:attribuerdonsclubs.html.twig", 1);
        $this->blocks = array(
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

    // line 5
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 6
        echo "   <br/>      <center> <h1><u>Attribution de Dons</u></h1> </center> <br/>

             ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form');
        echo "
    
        ";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:DonsClubs:attribuerdonsclubs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* */
/* */
/*         {% block bodyAdmin %}*/
/*    <br/>      <center> <h1><u>Attribution de Dons</u></h1> </center> <br/>*/
/* */
/*              {{form(Form)}}*/
/*     */
/*         {% endblock %}*/
/* */
