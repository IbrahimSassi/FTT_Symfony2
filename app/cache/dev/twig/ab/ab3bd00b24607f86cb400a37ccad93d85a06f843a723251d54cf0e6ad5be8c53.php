<?php

/* FTTAdminBundle:ResultatMatch:attribuerScore.html.twig */
class __TwigTemplate_ea2dfae96ae597a521c98df4205420d489a859403c2b838e57eac4ee82ccec22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:ResultatMatch:attribuerScore.html.twig", 1);
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
        echo "        <h1>Attribuer un score</h1> 
            <div class=\"col-md-8\" style=\"margin-left: 15%;margin-right: 2%;\">
             ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form');
        echo "
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:ResultatMatch:attribuerScore.html.twig";
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
/*         <h1>Attribuer un score</h1> */
/*             <div class="col-md-8" style="margin-left: 15%;margin-right: 2%;">*/
/*              {{form(Form)}}*/
/*             </div>*/
/*         {% endblock %}*/
/* */
