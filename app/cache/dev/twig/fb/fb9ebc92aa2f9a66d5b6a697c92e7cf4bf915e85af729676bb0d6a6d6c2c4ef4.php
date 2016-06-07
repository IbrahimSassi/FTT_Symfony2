<?php

/* FTTAdminBundle:SessionArbitre:listSession.html.twig */
class __TwigTemplate_cbdab11ac6208bea378b4c3422a38b671a1318fc7292205db4c6b02b3d90a023 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:SessionArbitre:listSession.html.twig", 1);
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

                <a class=\"btn btn-success btn-xs\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("SessionArbitre_add");
        echo "\">
                    <i class=\"fa fa-plus\"></i> Ajouter Une nouvelle session de formation
                </a>
                <table class=\"table table-bordered\" id=\"dev-table\" >
                    <thead>
                        <tr>
                            <th>
                                Date Session 
                            </th>
                            <th>
                                Type Session
                            </th>
                            <th>
                                Lieu Session
                            </th>
                            <th>
                                Date Ouvert Depot
                            </th>
                            <th>
                                Date Cloture Depot
                            </th>
                            <th>
                                NB d'arbitres
                            </th>
                
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sessions"]) ? $context["sessions"] : $this->getContext($context, "sessions")));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 38
            echo "                        <tr>
                            <td>
                                ";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["session"], "dateSessionArbitre", array()), "d-m-Y"), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "typeSessionArbitre", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "lieuSessionArbitre", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["session"], "dateOuvertDepot", array()), "d-m-Y"), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["session"], "dateClotureDepot", array()), "d-m-Y"), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "nbArbitreSession", array()), "html", null, true);
            echo "
                            </td>
                           
                           
                            <td>
                                <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SessionArbitre_delete", array("id" => $this->getAttribute($context["session"], "id", array()))), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-trash-o\"></i> Supprimer</a>
                            </td>
                            <td>
                                <a class=\"btn btn-info btn-xs\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SessionArbitre_modify", array("id" => $this->getAttribute($context["session"], "id", array()))), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-pencil\"></i> Modifier</a>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                        
                    </tbody>
                </table>

";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:SessionArbitre:listSession.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 69,  119 => 64,  112 => 60,  104 => 55,  98 => 52,  92 => 49,  86 => 46,  80 => 43,  74 => 40,  70 => 38,  66 => 37,  35 => 9,  31 => 7,  28 => 6,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* */
/*         */
/*         */
/*         {% block bodyAdmin %}*/
/* */
/* */
/*                 <a class="btn btn-success btn-xs" href="{{path('SessionArbitre_add')}}">*/
/*                     <i class="fa fa-plus"></i> Ajouter Une nouvelle session de formation*/
/*                 </a>*/
/*                 <table class="table table-bordered" id="dev-table" >*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>*/
/*                                 Date Session */
/*                             </th>*/
/*                             <th>*/
/*                                 Type Session*/
/*                             </th>*/
/*                             <th>*/
/*                                 Lieu Session*/
/*                             </th>*/
/*                             <th>*/
/*                                 Date Ouvert Depot*/
/*                             </th>*/
/*                             <th>*/
/*                                 Date Cloture Depot*/
/*                             </th>*/
/*                             <th>*/
/*                                 NB d'arbitres*/
/*                             </th>*/
/*                 */
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for session in sessions %}*/
/*                         <tr>*/
/*                             <td>*/
/*                                 {{session.dateSessionArbitre|date('d-m-Y')}}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{session.typeSessionArbitre}}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{session.lieuSessionArbitre}}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{session.dateOuvertDepot|date('d-m-Y')}}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{session.dateClotureDepot|date('d-m-Y')}}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{session.nbArbitreSession}}*/
/*                             </td>*/
/*                            */
/*                            */
/*                             <td>*/
/*                                 <a class="btn btn-danger btn-xs" href="{{path('SessionArbitre_delete', {'id':session.id})}}">*/
/*                                     <i class="fa fa-trash-o"></i> Supprimer</a>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <a class="btn btn-info btn-xs" href="{{path('SessionArbitre_modify',{'id':session.id})}}">*/
/*                                     <i class="fa fa-pencil"></i> Modifier</a>*/
/*                             </td>*/
/*                         </tr>*/
/*                         {% endfor %}*/
/*                         */
/*                     </tbody>*/
/*                 </table>*/
/* */
/* {% endblock %}*/
