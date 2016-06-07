<?php

/* FTTAdminBundle:Actualite:listActualite.html.twig */
class __TwigTemplate_cf8c582d42bfb34765ff89698e4ad94a677bf3954ce503e04af52932e7f52b32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:Actualite:listActualite.html.twig", 1);
        $this->blocks = array(
            'header1' => array($this, 'block_header1'),
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
    public function block_header1($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo twig_include($this->env, $context, "FTTAdminBundle::Default/Includes/header.html.twig");
        echo "
";
    }

    // line 9
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 10
        echo "    <a class=\"btn btn-success btn-xs\" href=\"";
        echo $this->env->getExtension('routing')->getPath("ajouter_actualite");
        echo "\">
        <i class=\"fa fa-plus\"></i> Ajouter Un nouveau article
    </a>
    <table class=\"table table-bordered\" id=\"dev-table\" >
        <thead>
            <tr>
                <th>
                    Titre
                </th>
                <th>
                    Description
                </th>
                <th>
                    Date
                </th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actualites"]) ? $context["actualites"] : $this->getContext($context, "actualites")));
        foreach ($context['_seq'] as $context["_key"] => $context["actualite"]) {
            // line 29
            echo "                <tr>
                    <td>
                        ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["actualite"], "titreActualite", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["actualite"], "descriptionActualite", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["actualite"], "dateActualite", array()), "d/m/Y"), "html", null, true);
            echo "
                    </td>
                    <td>
                        <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_actualite", array("id" => $this->getAttribute($context["actualite"], "id", array()))), "html", null, true);
            echo "\"
                           onclick=\"new PNotify({
                                       title: 'Suppression Effectué',
                                       text: 'Votre actualité a eté supprimé avec succes!',
                                       type: 'error'
                                   });\">
                            <i class=\"fa fa-trash-o\"></i> Supprimer</a>
                    </td>
                    <td>
                        <a class=\"btn btn-info btn-xs\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_actualite", array("id" => $this->getAttribute($context["actualite"], "id", array()))), "html", null, true);
            echo "\">
                            <i class=\"fa fa-pencil\"></i> Modifier</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        <div class=\"navigation\">
            ";
        // line 55
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["actualites"]) ? $context["actualites"] : $this->getContext($context, "actualites")));
        echo "
        </div>
    </tbody>
</table>


";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:Actualite:listActualite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 55,  113 => 54,  102 => 49,  90 => 40,  84 => 37,  78 => 34,  72 => 31,  68 => 29,  64 => 28,  42 => 10,  39 => 9,  32 => 6,  29 => 5,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* */
/* */
/* {% block header1 %}*/
/*     {{ include('FTTAdminBundle::Default/Includes/header.html.twig') }}*/
/* {% endblock %}*/
/* */
/* {% block bodyAdmin %}*/
/*     <a class="btn btn-success btn-xs" href="{{path('ajouter_actualite')}}">*/
/*         <i class="fa fa-plus"></i> Ajouter Un nouveau article*/
/*     </a>*/
/*     <table class="table table-bordered" id="dev-table" >*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>*/
/*                     Titre*/
/*                 </th>*/
/*                 <th>*/
/*                     Description*/
/*                 </th>*/
/*                 <th>*/
/*                     Date*/
/*                 </th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for actualite in actualites %}*/
/*                 <tr>*/
/*                     <td>*/
/*                         {{actualite.titreActualite}}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{actualite.descriptionActualite}}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{actualite.dateActualite|date("d/m/Y")}}*/
/*                     </td>*/
/*                     <td>*/
/*                         <a class="btn btn-danger btn-xs" href="{{path('supprimer_actualite', {'id':actualite.id})}}"*/
/*                            onclick="new PNotify({*/
/*                                        title: 'Suppression Effectué',*/
/*                                        text: 'Votre actualité a eté supprimé avec succes!',*/
/*                                        type: 'error'*/
/*                                    });">*/
/*                             <i class="fa fa-trash-o"></i> Supprimer</a>*/
/*                     </td>*/
/*                     <td>*/
/*                         <a class="btn btn-info btn-xs" href="{{path('modifier_actualite',{'id':actualite.id})}}">*/
/*                             <i class="fa fa-pencil"></i> Modifier</a>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         <div class="navigation">*/
/*             {{ knp_pagination_render(actualites) }}*/
/*         </div>*/
/*     </tbody>*/
/* </table>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
