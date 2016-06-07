<?php

/* FTTAdminBundle:Actualite:ajouterActualite.html.twig */
class __TwigTemplate_28b02564d79cff81de15bdf27fd2bc03230f5108f99c532bf5f1fe3d716e18c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:Actualite:ajouterActualite.html.twig", 1);
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
        echo "
    <h1>Ajout d'un Article</h1> 
    <div class=\"col-md-8\" style=\"margin-left: 15%;margin-right: 2%;\">
        ";
        // line 10
        echo "        <form method=\"POST\" action=\"\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'enctype');
        echo " onsubmit=\"new PNotify({
                            title: 'Ajout Effectué',
                            text: 'Votre actualité a eté ajouté avec succes!',
                            type: 'success'
                        });\"> 
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'widget');
        echo "
            <div class=\"ln_solid\" style=\"margin-top: 2%\"> </div>
            <div class=\"form-group\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\" style=\"margin-top: 2%\">
                    <input type=\"submit\" value=\"Valider\" class=\"btn btn-flat2 bg-blue-sky\">
                    <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("list_actualite");
        echo "\"  class=\"btn btn-danger\">Retour</a>
                </div>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:Actualite:ajouterActualite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 20,  45 => 15,  36 => 10,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* */
/* */
/* {% block bodyAdmin %}*/
/* */
/*     <h1>Ajout d'un Article</h1> */
/*     <div class="col-md-8" style="margin-left: 15%;margin-right: 2%;">*/
/*         {# {{form(Form)}}#}*/
/*         <form method="POST" action="" {{ form_enctype(Form) }} onsubmit="new PNotify({*/
/*                             title: 'Ajout Effectué',*/
/*                             text: 'Votre actualité a eté ajouté avec succes!',*/
/*                             type: 'success'*/
/*                         });"> */
/*             {{form_widget(Form)}}*/
/*             <div class="ln_solid" style="margin-top: 2%"> </div>*/
/*             <div class="form-group">*/
/*                 <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 2%">*/
/*                     <input type="submit" value="Valider" class="btn btn-flat2 bg-blue-sky">*/
/*                     <a href="{{path('list_actualite')}}"  class="btn btn-danger">Retour</a>*/
/*                 </div>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
/* */
