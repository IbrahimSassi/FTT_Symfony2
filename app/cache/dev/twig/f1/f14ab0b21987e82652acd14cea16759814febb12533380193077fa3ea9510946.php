<?php

/* FTTArbitreBundle:ResultatMatch:modifierCompte_rendu.html.twig */
class __TwigTemplate_a62ab025ec286870cab112366851d0a67048f44a97839c83651880f6894c6106 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTArbitreBundle::layoutArbitre.html.twig", "FTTArbitreBundle:ResultatMatch:modifierCompte_rendu.html.twig", 1);
        $this->blocks = array(
            'bodyAdmin' => array($this, 'block_bodyAdmin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FTTArbitreBundle::layoutArbitre.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 7
        echo "            <h1>Ajout d'un compte rendu</h1>
            ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form');
        echo "
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'errors');
        echo "

        ";
    }

    public function getTemplateName()
    {
        return "FTTArbitreBundle:ResultatMatch:modifierCompte_rendu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  34 => 8,  31 => 7,  28 => 6,  11 => 1,);
    }
}
/* {% extends "FTTArbitreBundle::layoutArbitre.html.twig" %}*/
/* */
/* */
/* */
/* */
/*         {% block bodyAdmin %}*/
/*             <h1>Ajout d'un compte rendu</h1>*/
/*             {{form(Form)}}*/
/*             {{form_errors(Form)}}*/
/* */
/*         {% endblock %}*/
/* */
