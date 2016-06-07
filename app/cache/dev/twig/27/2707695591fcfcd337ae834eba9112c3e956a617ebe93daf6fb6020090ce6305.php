<?php

/* FTTUtilisateurBundle::layoutGlobal.html.twig */
class __TwigTemplate_80016990bcc1f455ee971ec1caadbc5cbff59983df696686036f116efab27367 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "FTTUtilisateurBundle::layoutGlobal.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "FTTUtilisateurBundle::layoutGlobal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
