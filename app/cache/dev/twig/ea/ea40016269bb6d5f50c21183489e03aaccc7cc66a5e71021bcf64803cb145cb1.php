<?php

/* FTTResponsableBundle:Profil:ModifierProfil.html.twig */
class __TwigTemplate_ce381cfac709f5adea6fda504bbbfdb3bb1c6cd577c4fd837a3c4fdab6faf2a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTResponsableBundle::layoutResponsable.html.twig", "FTTResponsableBundle:Profil:ModifierProfil.html.twig", 1);
        $this->blocks = array(
            'header1' => array($this, 'block_header1'),
            'bodyAdmin' => array($this, 'block_bodyAdmin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FTTResponsableBundle::layoutResponsable.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header1($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FTTAdminBundle::Default/Includes/header.html.twig");
        echo "
";
    }

    // line 9
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"col-md-8\" style=\"margin-left: 15%;margin-right: 2%;\">

        <form action=\"\" method=\"POST\" ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'enctype');
        echo " >
            <table algin=\"center\">
                
                ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form');
        echo "
                
                
            </table>
        </form>
    </div>

";
    }

    public function getTemplateName()
    {
        return "FTTResponsableBundle:Profil:ModifierProfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  46 => 12,  42 => 10,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "FTTResponsableBundle::layoutResponsable.html.twig" %}*/
/* */
/* {% block header1 %}*/
/*     {{ include('FTTAdminBundle::Default/Includes/header.html.twig') }}*/
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block bodyAdmin %}*/
/*     <div class="col-md-8" style="margin-left: 15%;margin-right: 2%;">*/
/* */
/*         <form action="" method="POST" {{form_enctype(Form)}} >*/
/*             <table algin="center">*/
/*                 */
/*                 {{form(Form)}}*/
/*                 */
/*                 */
/*             </table>*/
/*         </form>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
