<?php

/* FTTArbitreBundle:PlanningArbitre:ajouterPlanningArbitre.html.twig */
class __TwigTemplate_d1adef3c28a68e1b74f6ac02279747bfcb02539b2729e3a267d650e449295a4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTArbitreBundle::layoutArbitre.html.twig", "FTTArbitreBundle:PlanningArbitre:ajouterPlanningArbitre.html.twig", 1);
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

    // line 5
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 6
        echo "  <h1>Ajout d'un planning d'arbitre </h1> 

             ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form');
        echo "
             ";
    }

    public function getTemplateName()
    {
        return "FTTArbitreBundle:PlanningArbitre:ajouterPlanningArbitre.html.twig";
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
/* {% extends "FTTArbitreBundle::layoutArbitre.html.twig" %}*/
/* */
/* */
/* */
/*         {% block bodyAdmin %}*/
/*   <h1>Ajout d'un planning d'arbitre </h1> */
/* */
/*              {{form(Form)}}*/
/*              {% endblock %}*/
/* */
