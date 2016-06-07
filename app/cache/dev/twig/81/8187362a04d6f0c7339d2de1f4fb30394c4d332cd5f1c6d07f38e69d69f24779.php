<?php

/* FTTAdminBundle:Stade:ListStade.html.twig */
class __TwigTemplate_2d351c0c954dfa3081ae9342ea60e0afb02870b38c10958f36cc50a71cc1d806 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:Stade:ListStade.html.twig", 2);
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

    // line 7
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 8
        echo "                <a class=\"btn btn-success btn-xs\" href=\"";
        echo $this->env->getExtension('routing')->getPath("ajouter_stade");
        echo "\">
                    <i class=\"fa fa-plus\"></i> Ajouter Un nouveau stade
                </a>
                <table class=\"table table-bordered\" id=\"dev-table\" >
                    <thead>
                        <tr>
                            <th>
                                Nom
                            </th>
                            <th>
                                Nombre de place
                            </th>
                            
                            <th>
                                Supp
                            </th>
                            <th>
                                MAJ
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stades"]) ? $context["stades"] : $this->getContext($context, "stades")));
        foreach ($context['_seq'] as $context["_key"] => $context["stade"]) {
            // line 31
            echo "                        <tr>
                            <td>
                                ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["stade"], "nomStade", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["stade"], "capacite", array()), "html", null, true);
            echo "
                            </td>
                           
                            <td>
                                <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_stade", array("id" => $this->getAttribute($context["stade"], "id", array()))), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-trash-o\"></i> Supprimer</a>
                            </td>
                            <td>
                                <a class=\"btn btn-info btn-xs\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_stade", array("id" => $this->getAttribute($context["stade"], "id", array()))), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-pencil\"></i> Modifier</a>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                        
                    </tbody>
                </table>
                        

        ";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:Stade:ListStade.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 49,  85 => 44,  78 => 40,  71 => 36,  65 => 33,  61 => 31,  57 => 30,  31 => 8,  28 => 7,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* */
/*         */
/*         */
/*         {% block bodyAdmin %}*/
/*                 <a class="btn btn-success btn-xs" href="{{path('ajouter_stade')}}">*/
/*                     <i class="fa fa-plus"></i> Ajouter Un nouveau stade*/
/*                 </a>*/
/*                 <table class="table table-bordered" id="dev-table" >*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>*/
/*                                 Nom*/
/*                             </th>*/
/*                             <th>*/
/*                                 Nombre de place*/
/*                             </th>*/
/*                             */
/*                             <th>*/
/*                                 Supp*/
/*                             </th>*/
/*                             <th>*/
/*                                 MAJ*/
/*                             </th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for stade in stades %}*/
/*                         <tr>*/
/*                             <td>*/
/*                                 {{stade.nomStade}}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{stade.capacite}}*/
/*                             </td>*/
/*                            */
/*                             <td>*/
/*                                 <a class="btn btn-danger btn-xs" href="{{path('supprimer_stade', {'id':stade.id})}}">*/
/*                                     <i class="fa fa-trash-o"></i> Supprimer</a>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <a class="btn btn-info btn-xs" href="{{path('modifier_stade',{'id':stade.id})}}">*/
/*                                     <i class="fa fa-pencil"></i> Modifier</a>*/
/*                             </td>*/
/*                         </tr>*/
/*                         {% endfor %}*/
/*                         */
/*                     </tbody>*/
/*                 </table>*/
/*                         */
/* */
/*         {% endblock %}*/
/* */
/* */
/*         */
/* */
