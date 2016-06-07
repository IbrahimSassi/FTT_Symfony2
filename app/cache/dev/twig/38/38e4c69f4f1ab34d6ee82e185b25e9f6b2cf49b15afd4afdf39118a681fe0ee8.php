<?php

/* FTTArbitreBundle:PlanningArbitre:modifierPlanningArbitre.html.twig */
class __TwigTemplate_cd250f67130b7ac4607303865c3042e451d1db097637633de692b1734284c434 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTArbitreBundle::layoutArbitre.html.twig", "FTTArbitreBundle:PlanningArbitre:modifierPlanningArbitre.html.twig", 1);
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
        echo "            <h1>Modification d'un planning arbitre</h1>
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
        return "FTTArbitreBundle:PlanningArbitre:modifierPlanningArbitre.html.twig";
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
/*             <h1>Modification d'un planning arbitre</h1>*/
/*             {{form(Form)}}*/
/*             {{form_errors(Form)}}*/
/* */
/*         {% endblock %}*/
/* */
