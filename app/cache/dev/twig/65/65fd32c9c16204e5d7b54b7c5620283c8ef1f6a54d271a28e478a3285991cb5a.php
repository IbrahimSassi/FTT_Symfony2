<?php

/* FTTAdminBundle:Profil:ModifierProfil.html.twig */
class __TwigTemplate_d7b9cc5b712b565fdac724dc89919ca30c307050a74b260203e6706126b06413 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:Profil:ModifierProfil.html.twig", 1);
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

    // line 4
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 5
        echo "    
    <div class=\"col-md-8\" style=\"margin-left: 15%;margin-right: 2%;\">

        <form action=\"\" method=\"POST\" ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'enctype');
        echo " >
            <table algin=\"center\">

                ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form');
        echo "

            </table>
        </form>
    </div>

";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:Profil:ModifierProfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 11,  36 => 8,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* */
/* {% block bodyAdmin %}*/
/*     */
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
