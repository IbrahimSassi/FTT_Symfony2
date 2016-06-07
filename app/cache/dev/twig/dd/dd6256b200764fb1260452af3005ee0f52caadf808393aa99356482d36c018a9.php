<?php

/* FTTAdminBundle:User:modifierUser.html.twig */
class __TwigTemplate_54ed81307919d9d46041d31f8bf5c3b93d19356b2d08f802e3952be7d48754dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:User:modifierUser.html.twig", 1);
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

    // line 6
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"col-md-8\" style=\"margin-left: 15%;margin-right: 2%;\">

        ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'errors');
        echo "
        
    </div>

";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:User:modifierUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  35 => 9,  31 => 7,  28 => 6,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* */
/* */
/* */
/* {% block bodyAdmin %}*/
/*     <div class="col-md-8" style="margin-left: 15%;margin-right: 2%;">*/
/* */
/*         {{form(Form)}}*/
/*         {{form_errors(Form)}}*/
/*         */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
