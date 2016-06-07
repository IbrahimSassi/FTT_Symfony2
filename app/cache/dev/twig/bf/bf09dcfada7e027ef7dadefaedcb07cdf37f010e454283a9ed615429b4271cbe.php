<?php

/* FTTAdminBundle:Reclamation:succesmail.html.twig */
class __TwigTemplate_03dc80ba3484d33f263574f1a1c3d2ec78b2da5c3a1d9b20f26675c378f9ff36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:Reclamation:succesmail.html.twig", 1);
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

    // line 3
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 4
        echo "<body>

 Votre réponse a été envoyée avec succès 

</body>

    ";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:Reclamation:succesmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/*         {% block bodyAdmin %}*/
/* <body>*/
/* */
/*  Votre réponse a été envoyée avec succès */
/* */
/* </body>*/
/* */
/*     {% endblock %}*/
/* */
/*    */
