<?php

/* FTTAdminBundle:Actualite:modifierActualite.html.twig */
class __TwigTemplate_c40dc794ae61bc639a8fcee3b4913d240bb626ab9a50d94b037b61ff416b1625 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:Actualite:modifierActualite.html.twig", 1);
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
        echo "    <h1>Modification d'un Article</h1> 
    <div class=\"col-md-8\" style=\"margin-left: 15%;margin-right: 2%;\">
        ";
        // line 8
        echo "        <div class=\"x_content\">
            <form method=\"POST\" action=\"\" ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'enctype');
        echo " onsubmit=\"new PNotify({
                        title: 'Modification Effectué',
                        text: 'Votre actualité a eté ajouté avec succes!',
                        type: 'success'
                    });\"> 
                <div class=\"form-group\">
                    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "titreActualite", array()), 'label');
        echo "
                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "titreActualite", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "imageActualite", array()), 'label');
        echo "
                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "imageActualite", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "descriptionActualite", array()), 'label');
        echo "
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "descriptionActualite", array()), 'widget');
        echo "
                </div>
                <div class=\"ln_solid\" style=\"margin-top: 2%\"> </div>
                <div class=\"form-group\">
                    <div class=\"col-md-12 col-sm-12 col-xs-12\" style=\"margin-top: 2%\">
                        <input type=\"submit\" value=\"Valider\" class=\"btn btn-flat2 bg-blue-sky\"
                               onclick=\"new PNotify({
                                           title: 'Modification Effectué',
                                           text: 'votre actualité a eté modifié avec succes!',
                                           type: 'success'
                                       });\">
                        <a href=\"";
        // line 35
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
        return "FTTAdminBundle:Actualite:modifierActualite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 35,  71 => 24,  67 => 23,  61 => 20,  57 => 19,  51 => 16,  47 => 15,  38 => 9,  35 => 8,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* */
/* {% block bodyAdmin %}*/
/*     <h1>Modification d'un Article</h1> */
/*     <div class="col-md-8" style="margin-left: 15%;margin-right: 2%;">*/
/*         {# {{form(Form)}}#}*/
/*         <div class="x_content">*/
/*             <form method="POST" action="" {{ form_enctype(Form)}} onsubmit="new PNotify({*/
/*                         title: 'Modification Effectué',*/
/*                         text: 'Votre actualité a eté ajouté avec succes!',*/
/*                         type: 'success'*/
/*                     });"> */
/*                 <div class="form-group">*/
/*                     {{form_label(Form.titreActualite)}}*/
/*                     {{form_widget(Form.titreActualite)}}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{form_label(Form.imageActualite)}}*/
/*                     {{form_widget(Form.imageActualite)}}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{form_label(Form.descriptionActualite)}}*/
/*                     {{form_widget(Form.descriptionActualite)}}*/
/*                 </div>*/
/*                 <div class="ln_solid" style="margin-top: 2%"> </div>*/
/*                 <div class="form-group">*/
/*                     <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 2%">*/
/*                         <input type="submit" value="Valider" class="btn btn-flat2 bg-blue-sky"*/
/*                                onclick="new PNotify({*/
/*                                            title: 'Modification Effectué',*/
/*                                            text: 'votre actualité a eté modifié avec succes!',*/
/*                                            type: 'success'*/
/*                                        });">*/
/*                         <a href="{{path('list_actualite')}}"  class="btn btn-danger">Retour</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </form> */
/*         </div>*/
/* */
/*     {% endblock %}*/
/* */
