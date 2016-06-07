<?php

/* FTTAdminBundle:CarriereJoueur:DetailCarriereJoueurModification.html.twig */
class __TwigTemplate_4b515164ee2d953e3ff21607c6ea5740feeac3cef0a370f07d38b6fe53db31b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:CarriereJoueur:DetailCarriereJoueurModification.html.twig", 1);
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
        echo "    <div class=\"panel-group\">
        <div class=\"panel panel-default\">
            <div class=\"panel-body\">



                <div>

                    <img class=\"img-thumbnail\" src=\"data:image/png;base64,";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")), "html", null, true);
        echo "\" alt=\"\" />
                    </a>
                    <br/>
                </div>
                <a class=\"btn btn-success btn-xs\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajout_carriere", array("idJoueur" => $this->getAttribute((isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")), "id", array()))), "html", null, true);
        echo "\">
                    <i class=\"fa fa-plus\"></i> Ajouter Une carriere
                </a>

                <table class=\"table table-striped table-bordered table-hover\" id=\"sample_1\">
                    <thead>
                        <tr>
                            <th>type</th>
                            <th>date</th>
                            <th>Club</th>
                            <th>description</th>

                            <th>MAJ</th>
                        </tr>
                    </thead>
                    <tbody>\t\t\t\t\t\t\t

                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carrieres"]) ? $context["carrieres"] : $this->getContext($context, "carrieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["carriere"]) {
            echo "\t\t\t\t


                            <tr class=\"odd gradeX\">
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["carriere"], "typeCarriere", array()), "html", null, true);
            echo " </td>
                                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["carriere"], "dateCarriere", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["carriere"], "idClub", array()), "nomClub", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["carriere"], "description", array()), "html", null, true);
            echo "</td>

                                <td> 
                                    <div class=\"btn-group\" style=\"float:right;\">
                                        <a class=\"btn btn-info btn-xs\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_carriere", array("id" => $this->getAttribute($context["carriere"], "id", array()), "idJoueur" => $this->getAttribute($this->getAttribute($context["carriere"], "idJoueur", array()), "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-pencil\"></i> Modifier</a>\t
                                    </div>
                                </td>



                            </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carriere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
                    </tbody>
                </table>

            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:CarriereJoueur:DetailCarriereJoueurModification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 54,  96 => 44,  89 => 40,  85 => 39,  81 => 38,  77 => 37,  68 => 33,  48 => 16,  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* {% block bodyAdmin %}*/
/*     <div class="panel-group">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-body">*/
/* */
/* */
/* */
/*                 <div>*/
/* */
/*                     <img class="img-thumbnail" src="data:image/png;base64,{{ images }}" alt="" />*/
/*                     </a>*/
/*                     <br/>*/
/*                 </div>*/
/*                 <a class="btn btn-success btn-xs" href="{{path('ajout_carriere', {'idJoueur':joueur.id})}}">*/
/*                     <i class="fa fa-plus"></i> Ajouter Une carriere*/
/*                 </a>*/
/* */
/*                 <table class="table table-striped table-bordered table-hover" id="sample_1">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>type</th>*/
/*                             <th>date</th>*/
/*                             <th>Club</th>*/
/*                             <th>description</th>*/
/* */
/*                             <th>MAJ</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>							*/
/* */
/*                         {% for carriere in carrieres %}				*/
/* */
/* */
/*                             <tr class="odd gradeX">*/
/*                                 <td>{{carriere.typeCarriere}} </td>*/
/*                                 <td>{{carriere.dateCarriere | date("d/m/Y")}}</td>*/
/*                                 <td>{{carriere.idClub.nomClub}}</td>*/
/*                                 <td>{{carriere.description}}</td>*/
/* */
/*                                 <td> */
/*                                     <div class="btn-group" style="float:right;">*/
/*                                         <a class="btn btn-info btn-xs" href="{{path('modifier_carriere', {'id':carriere.id,'idJoueur':carriere.idJoueur.id})}}">*/
/*                                             <i class="fa fa-pencil"></i> Modifier</a>	*/
/*                                     </div>*/
/*                                 </td>*/
/* */
/* */
/* */
/*                             </tr>*/
/* */
/*                         {% endfor %}*/
/* */
/*                     </tbody>*/
/*                 </table>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
