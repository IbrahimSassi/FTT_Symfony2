<?php

/* FTTArbitreBundle:PlanningArbitre:listPlanningArbitre.html.twig */
class __TwigTemplate_7d0f0ce5949db68ace554be4af9911dc809a9b10689a83da45f713d3544e17be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTArbitreBundle::layoutArbitre.html.twig", "FTTArbitreBundle:PlanningArbitre:listPlanningArbitre.html.twig", 1);
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

    // line 6
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 7
        echo "

                <a class=\"btn btn-success btn-xs\" href=\"";
        // line 9
        echo "\">
                    <i class=\"fa fa-plus\"></i> Ajouter Un nouveau Planning
                </a>
                <table class=\"table table-bordered\">
                    <thead>
                        <tr>
                            <th>
                                Arbitre 
                            </th>
                            <th>
                                Date Disponibilite
                            </th>
                            <th>
                                Description
                            </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plannings"]) ? $context["plannings"] : $this->getContext($context, "plannings")));
        foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
            // line 29
            echo "                        <tr>
                            <td>
                                ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["planning"], "idArbitre", array()), "nomUser", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                 ";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["planning"], "dateDispo", array()), "d-m-Y"), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["planning"], "description", array()), "html", null, true);
            echo "
                            </td>
                            
                           
                           
                            <td>
                                <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_planning", array("id" => $this->getAttribute($context["planning"], "id", array()))), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-trash-o\"></i> Supprimer</a>
                            </td>
                            <td>
                                <a class=\"btn btn-info btn-xs\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_planning", array("id" => $this->getAttribute($context["planning"], "id", array()))), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-pencil\"></i> Modifier</a>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                        
                    </tbody>
                </table>

";
    }

    public function getTemplateName()
    {
        return "FTTArbitreBundle:PlanningArbitre:listPlanningArbitre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 52,  92 => 47,  85 => 43,  76 => 37,  70 => 34,  64 => 31,  60 => 29,  56 => 28,  35 => 9,  31 => 7,  28 => 6,  11 => 1,);
    }
}
/* {% extends "FTTArbitreBundle::layoutArbitre.html.twig" %}*/
/* */
/* */
/*         */
/*         */
/*         {% block bodyAdmin %}*/
/* */
/* */
/*                 <a class="btn btn-success btn-xs" href="{#{path('ajouterPlanning')}#}">*/
/*                     <i class="fa fa-plus"></i> Ajouter Un nouveau Planning*/
/*                 </a>*/
/*                 <table class="table table-bordered">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>*/
/*                                 Arbitre */
/*                             </th>*/
/*                             <th>*/
/*                                 Date Disponibilite*/
/*                             </th>*/
/*                             <th>*/
/*                                 Description*/
/*                             </th>*/
/*                             */
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for planning in plannings %}*/
/*                         <tr>*/
/*                             <td>*/
/*                                 {{planning.idArbitre.nomUser}}*/
/*                             </td>*/
/*                             <td>*/
/*                                  {{planning.dateDispo|date('d-m-Y')}}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{planning.description}}*/
/*                             </td>*/
/*                             */
/*                            */
/*                            */
/*                             <td>*/
/*                                 <a class="btn btn-danger btn-xs" href="{{path('supprimer_planning', {'id':planning.id})}}">*/
/*                                     <i class="fa fa-trash-o"></i> Supprimer</a>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <a class="btn btn-info btn-xs" href="{{path('modifier_planning',{'id':planning.id})}}">*/
/*                                     <i class="fa fa-pencil"></i> Modifier</a>*/
/*                             </td>*/
/*                         </tr>*/
/*                         {% endfor %}*/
/*                         */
/*                     </tbody>*/
/*                 </table>*/
/* */
/* {% endblock %}*/
/* */
