<?php

/* FTTAdminBundle:CarriereJoueur:detailJoueur.html.twig */
class __TwigTemplate_379218fa80fbf099f035cb3a01a2ca7f491f175c63efdd53694b9a842263d3ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:CarriereJoueur:detailJoueur.html.twig", 1);
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
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">

            <div class=\"profile-sidebar\" style=\"width:250px;\">

                <div class=\"portlet light profile-sidebar-portlet\">

                    <div class=\"profile-userpic\">
                        <img src=\"data:image/png;base64,";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                    </div>


                    <div class=\"profile-userbuttons\">

                        <a class=\"btn btn-circle green-haze btn-sm\" href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("list_joueur");
        echo "\">Retour à la liste des joueurs</a>



                    </div>

                </div>

                <div class=\"profile-content\">
                    <div class=\"row\">
                        <div class=\"col-md-10\">
                            <div class=\"portlet light\">

                                <div class=\"portlet-body\">


                                    <form role=\"form\" color=\"grey\" action=\"#\">
                                        <div class=\"form-group\">
                                            <label class=\"control-label\">Nom</label>
                                            <input type=\"text\" placeholder=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")), "nomJoueur", array()), "html", null, true);
        echo "\" class=\"form-control\" disabled/>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"control-label\">Prénom</label>
                                            <input type=\"text\" placeholder=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")), "prenomJoueur", array()), "html", null, true);
        echo "\" class=\"form-control\" disabled/>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"control-label\">Categorie du joueur</label>
                                            <input type=\"text\" placeholder=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")), "categorieJoueur", array()), "html", null, true);
        echo "\" class=\"form-control\" disabled/>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"control-label\">Type du joueur</label>
                                            <input type=\"text\" placeholder=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")), "typeJoueur", array()), "html", null, true);
        echo "\" class=\"form-control\" disabled/>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"control-label\">Club</label>
                                            <input type=\"text\" placeholder=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")), "idClub", array()), "nomClub", array()), "html", null, true);
        echo "\" class=\"form-control\" disabled/>
                                        </div>



                                    </form>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    ";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:CarriereJoueur:detailJoueur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 57,  94 => 53,  87 => 49,  80 => 45,  73 => 41,  51 => 22,  42 => 16,  31 => 7,  28 => 6,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* */
/* */
/* */
/* {% block bodyAdmin %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/* */
/*             <div class="profile-sidebar" style="width:250px;">*/
/* */
/*                 <div class="portlet light profile-sidebar-portlet">*/
/* */
/*                     <div class="profile-userpic">*/
/*                         <img src="data:image/png;base64,{{ images }}" class="img-responsive" alt="">*/
/*                     </div>*/
/* */
/* */
/*                     <div class="profile-userbuttons">*/
/* */
/*                         <a class="btn btn-circle green-haze btn-sm" href="{{path('list_joueur')}}">Retour à la liste des joueurs</a>*/
/* */
/* */
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="profile-content">*/
/*                     <div class="row">*/
/*                         <div class="col-md-10">*/
/*                             <div class="portlet light">*/
/* */
/*                                 <div class="portlet-body">*/
/* */
/* */
/*                                     <form role="form" color="grey" action="#">*/
/*                                         <div class="form-group">*/
/*                                             <label class="control-label">Nom</label>*/
/*                                             <input type="text" placeholder="{{joueur.nomJoueur}}" class="form-control" disabled/>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="control-label">Prénom</label>*/
/*                                             <input type="text" placeholder="{{joueur.prenomJoueur}}" class="form-control" disabled/>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="control-label">Categorie du joueur</label>*/
/*                                             <input type="text" placeholder="{{joueur.categorieJoueur}}" class="form-control" disabled/>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="control-label">Type du joueur</label>*/
/*                                             <input type="text" placeholder="{{joueur.typeJoueur}}" class="form-control" disabled/>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="control-label">Club</label>*/
/*                                             <input type="text" placeholder="{{joueur.idClub.nomClub}}" class="form-control" disabled/>*/
/*                                         </div>*/
/* */
/* */
/* */
/*                                     </form>*/
/* */
/* */
/* */
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/* */
/* */
/*     {% endblock %}*/
