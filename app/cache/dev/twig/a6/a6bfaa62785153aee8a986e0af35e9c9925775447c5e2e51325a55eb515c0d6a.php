<?php

/* FTTAdminBundle:CarriereJoueur:AjoutCarriereJoueur.html.twig */
class __TwigTemplate_ad8d2f560f61e4cf413a1b6f152789f58cb8db96eb4cdf41affc58127c77c681 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:CarriereJoueur:AjoutCarriereJoueur.html.twig", 1);
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
        echo "            <div class=\"panel-group\">
  <div class=\"panel panel-default\">
    <div class=\"panel-body\">

            ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form');
        echo "
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'errors');
        echo "
    </div>
     </div>
     </div>
        ";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:CarriereJoueur:AjoutCarriereJoueur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 11,  37 => 10,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* */
/*  */
/*         {% block bodyAdmin %}*/
/*             <div class="panel-group">*/
/*   <div class="panel panel-default">*/
/*     <div class="panel-body">*/
/* */
/*             {{form(Form)}}*/
/*             {{form_errors(Form)}}*/
/*     </div>*/
/*      </div>*/
/*      </div>*/
/*         {% endblock %}*/
/* */
