<?php

/* FTTMedecinBundle:Profil:ModifierProfil.html.twig */
class __TwigTemplate_e94bc54eddc7aca917c632fedb7fbc7ce0aec7cd5c5ea75689c08d4f0c4d12bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTMedecinBundle::layoutMedecin.html.twig", "FTTMedecinBundle:Profil:ModifierProfil.html.twig", 1);
        $this->blocks = array(
            'header1' => array($this, 'block_header1'),
            'bodyAdmin' => array($this, 'block_bodyAdmin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FTTMedecinBundle::layoutMedecin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_header1($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "FTTAdminBundle::Default/Includes/header.html.twig");
        echo "
";
    }

    // line 8
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"col-md-8\" style=\"margin-left: 15%;margin-right: 2%;\">

        <form action=\"\" method=\"POST\" ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'enctype');
        echo " >
            <table algin=\"center\">
                
                ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form');
        echo "
                
                
            </table>
        </form>
    </div>

";
    }

    public function getTemplateName()
    {
        return "FTTMedecinBundle:Profil:ModifierProfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  46 => 11,  42 => 9,  39 => 8,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends "FTTMedecinBundle::layoutMedecin.html.twig" %}*/
/* */
/* */
/* {% block header1 %}*/
/*     {{ include('FTTAdminBundle::Default/Includes/header.html.twig') }}*/
/* {% endblock %}*/
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
