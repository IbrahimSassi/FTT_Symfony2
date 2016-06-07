<?php

/* FTTAdminBundle:Stade:AjouterStade.html.twig */
class __TwigTemplate_0099d09640a80aa729dc648b7e5774ed0d542ade7ac5e0a9f217cbe685a87981 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:Stade:AjouterStade.html.twig", 2);
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
        echo "     <h1>Ajout d'un stade</h1> 
    <div class=\"col-md-8\" style=\"margin-left: 15%;margin-right: 2%;\">
        <form method=\"POST\" action=\"\" onsubmit=\"new PNotify({
                                title: 'Ajout Effectué',
                                text: 'Votre stade a eté ajouté avec succes!',
                                type: 'success'
                            });\" > 
     ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'widget');
        echo "
            <div class=\"ln_solid\" style=\"margin-top: 2%\"> </div>
            <div class=\"form-group\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\" style=\"margin-top: 2%\" >
                    <input style=\"margin-left: 90%\" type=\"submit\" value=\"Valider\" class=\"btn btn-flat2 bg-blue-sky\"
                           />
                    </div>
            </div>
        </form>
    </div>
                 
";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:Stade:AjouterStade.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 12,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* {% block bodyAdmin %}*/
/*      <h1>Ajout d'un stade</h1> */
/*     <div class="col-md-8" style="margin-left: 15%;margin-right: 2%;">*/
/*         <form method="POST" action="" onsubmit="new PNotify({*/
/*                                 title: 'Ajout Effectué',*/
/*                                 text: 'Votre stade a eté ajouté avec succes!',*/
/*                                 type: 'success'*/
/*                             });" > */
/*      {{form_widget(Form)}}*/
/*             <div class="ln_solid" style="margin-top: 2%"> </div>*/
/*             <div class="form-group">*/
/*                 <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 2%" >*/
/*                     <input style="margin-left: 90%" type="submit" value="Valider" class="btn btn-flat2 bg-blue-sky"*/
/*                            />*/
/*                     </div>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/*                  */
/* {% endblock %}*/
