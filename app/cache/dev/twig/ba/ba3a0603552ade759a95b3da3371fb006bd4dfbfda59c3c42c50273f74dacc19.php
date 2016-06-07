<?php

/* FTTAdminBundle:Joueur:modifierJoueur.html.twig */
class __TwigTemplate_d85f496fd7c18f3e68201137e0c364915677432fdfccd7a1071774b9207a3ef1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:Joueur:modifierJoueur.html.twig", 1);
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
        echo "    <h1>Modifier un joueur</h1> 
    <form action=\"\" method=\"POST\" ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'enctype');
        echo " >
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Valider\" class=\"btn btn-info\">
    </form>

";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:Joueur:modifierJoueur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* {% block bodyAdmin %}*/
/*     <h1>Modifier un joueur</h1> */
/*     <form action="" method="POST" {{ form_enctype(Form) }} >*/
/*         {{ form_widget(Form) }}*/
/*         <input type="submit" value="Valider" class="btn btn-info">*/
/*     </form>*/
/* */
/* {% endblock %}*/
/* */
