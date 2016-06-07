<?php

/* FTTAdminBundle:Evenement:modifierEvenement.html.twig */
class __TwigTemplate_15d962d7218e786bc99985acd3ac173bf1f727fd7bbc0f5e842029ef66d0549d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:Evenement:modifierEvenement.html.twig", 1);
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

    // line 6
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 7
        echo "       <br/>      <center> <h1><u> Modification d'un événement </u></h1> </center> <br/>
            ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form');
        echo "
       
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'errors');
        echo "
 
        ";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:Evenement:modifierEvenement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  34 => 8,  31 => 7,  28 => 6,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* */
/* */
/* */
/*         {% block bodyAdmin %}*/
/*        <br/>      <center> <h1><u> Modification d'un événement </u></h1> </center> <br/>*/
/*             {{form(Form)}}*/
/*        */
/*             {{form_errors(Form)}}*/
/*  */
/*         {% endblock %}*/
/* */
