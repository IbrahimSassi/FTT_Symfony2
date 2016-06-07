<?php

/* FTTAdminBundle:Don:listdon.html.twig */
class __TwigTemplate_c2625629314448b44b342259db641bd98c3a1dca830c2c5abb68c89f9a2f04b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:Don:listdon.html.twig", 1);
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
        echo "    <a class=\"btn btn-success btn-xs\" href=\"";
        echo $this->env->getExtension('routing')->getPath("ajouter_dons");
        echo "\">
        <i class=\"fa fa-plus\"></i> Ajouter Un nouveau Don
    </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a class=\"btn btn-success btn-xs\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("attribuer_dons_club");
        echo "\">
        <i class=\"fa fa-plus\"></i> Attribuer Un Don à un Club
    </a>
    <a class=\"\" style=\"margin-left: 450px;\"href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("list_donsclub");
        echo "\">
        <i class=\"fa fa-tag\" ></i> Liste des dons attribuer aux clubs
    </a>
    <table class=\"table table-bordered\" id=\"dev-table\" >
        <thead>
            <tr>
                <th>
                    Type de don
                </th>
                <th>
                    Description de don
                </th>
                <th>
                    Lieu
                </th>
                <th>
                    Date
                </th>
                <th>
                    Supprimer
                </th>
                <th>
                    Modifier
                </th>

            </tr>
        </thead>
        <tbody>
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dons"]) ? $context["dons"] : $this->getContext($context, "dons")));
        foreach ($context['_seq'] as $context["_key"] => $context["don"]) {
            // line 42
            echo "                <tr>
                    <td>
                        ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["don"], "typeDon", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["don"], "descriptionDon", array()), "html", null, true);
            echo " 
                    </td>
                    <td>

                        ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["don"], "lieuSession", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["don"], "dateSession", array()), "d/m/Y"), "html", null, true);
            echo "

                    </td>
                    <td>
                        <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_dons", array("id" => $this->getAttribute($context["don"], "id", array()))), "html", null, true);
            echo "\">
                            <i class=\"fa fa-trash-o\"></i> Supprimer</a>
                    </td>
                    <td>
                        <a class=\"btn btn-info btn-xs\" href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_dons", array("id" => $this->getAttribute($context["don"], "id", array()))), "html", null, true);
            echo "\">
                            <i class=\"fa fa-pencil\"></i> Modifier</a>
                    </td>

                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['don'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
        </tbody>
    </table>


";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:Don:listdon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 68,  116 => 62,  109 => 58,  102 => 54,  96 => 51,  89 => 47,  83 => 44,  79 => 42,  75 => 41,  44 => 13,  38 => 10,  31 => 7,  28 => 6,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* */
/* */
/* */
/* {% block bodyAdmin %}*/
/*     <a class="btn btn-success btn-xs" href="{{path('ajouter_dons')}}">*/
/*         <i class="fa fa-plus"></i> Ajouter Un nouveau Don*/
/*     </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*     <a class="btn btn-success btn-xs" href="{{path('attribuer_dons_club')}}">*/
/*         <i class="fa fa-plus"></i> Attribuer Un Don à un Club*/
/*     </a>*/
/*     <a class="" style="margin-left: 450px;"href="{{path('list_donsclub')}}">*/
/*         <i class="fa fa-tag" ></i> Liste des dons attribuer aux clubs*/
/*     </a>*/
/*     <table class="table table-bordered" id="dev-table" >*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>*/
/*                     Type de don*/
/*                 </th>*/
/*                 <th>*/
/*                     Description de don*/
/*                 </th>*/
/*                 <th>*/
/*                     Lieu*/
/*                 </th>*/
/*                 <th>*/
/*                     Date*/
/*                 </th>*/
/*                 <th>*/
/*                     Supprimer*/
/*                 </th>*/
/*                 <th>*/
/*                     Modifier*/
/*                 </th>*/
/* */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for don in dons %}*/
/*                 <tr>*/
/*                     <td>*/
/*                         {{don.typeDon}}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{don.descriptionDon}} */
/*                     </td>*/
/*                     <td>*/
/* */
/*                         {{don.lieuSession}}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{don.dateSession|date("d/m/Y")}}*/
/* */
/*                     </td>*/
/*                     <td>*/
/*                         <a class="btn btn-danger btn-xs" href="{{path('supprimer_dons', {'id':don.id})}}">*/
/*                             <i class="fa fa-trash-o"></i> Supprimer</a>*/
/*                     </td>*/
/*                     <td>*/
/*                         <a class="btn btn-info btn-xs" href="{{path('modifier_dons',{'id':don.id})}}">*/
/*                             <i class="fa fa-pencil"></i> Modifier</a>*/
/*                     </td>*/
/* */
/*                 </tr>*/
/*             {% endfor %}*/
/* */
/*         </tbody>*/
/*     </table>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
