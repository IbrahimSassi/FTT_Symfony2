<?php

/* FTTAdminBundle:Joueur:ajouterJoueur.html.twig */
class __TwigTemplate_d7152e12300e7698792bdd7d32d0bf07bfbfa60b7dbd6d1957c798109909d894 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:Joueur:ajouterJoueur.html.twig", 1);
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
        echo "        <h1>Ajout d'un joueur</h1> 

             ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form');
        echo "
    
        ";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:Joueur:ajouterJoueur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/*         {% block bodyAdmin %}*/
/*         <h1>Ajout d'un joueur</h1> */
/* */
/*              {{form(Form)}}*/
/*     */
/*         {% endblock %}*/
/* */
