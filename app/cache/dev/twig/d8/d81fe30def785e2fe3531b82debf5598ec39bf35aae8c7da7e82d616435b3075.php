<?php

/* FTTAdminBundle:SessionArbitre:ajouterSession.html.twig */
class __TwigTemplate_a24184c00b8c70d1c5937898660583fd5efa9294dee4ca9665cbb2f74be2e7de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:SessionArbitre:ajouterSession.html.twig", 1);
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
        echo "  <h1>Ajout d'une session de formation </h1> 

             ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form');
        echo "
             ";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:SessionArbitre:ajouterSession.html.twig";
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
/*   <h1>Ajout d'une session de formation </h1> */
/* */
/*              {{form(Form)}}*/
/*              {% endblock %}*/
