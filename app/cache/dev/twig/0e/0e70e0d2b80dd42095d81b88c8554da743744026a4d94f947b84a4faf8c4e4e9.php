<?php

/* FTTArbitreBundle:Profil:ModifierProfil.html.twig */
class __TwigTemplate_fb6d67813528f501b280d02d7d1a352497b8b2ff26e4bea0a1e09c20c880eeaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTArbitreBundle::layoutArbitre.html.twig", "FTTArbitreBundle:Profil:ModifierProfil.html.twig", 1);
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

    // line 3
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"col-md-8\" style=\"margin-left: 15%;margin-right: 2%;\">

        <form action=\"\" method=\"POST\" ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'enctype');
        echo " >
            <table algin=\"center\">

                ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form');
        echo "

            </table>
        </form>
    </div>

";
    }

    public function getTemplateName()
    {
        return "FTTArbitreBundle:Profil:ModifierProfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FTTArbitreBundle::layoutArbitre.html.twig" %}*/
/* */
/* {% block bodyAdmin %}*/
/* */
/*     <div class="col-md-8" style="margin-left: 15%;margin-right: 2%;">*/
/* */
/*         <form action="" method="POST" {{form_enctype(Form)}} >*/
/*             <table algin="center">*/
/* */
/*                 {{form(Form)}}*/
/* */
/*             </table>*/
/*         </form>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
