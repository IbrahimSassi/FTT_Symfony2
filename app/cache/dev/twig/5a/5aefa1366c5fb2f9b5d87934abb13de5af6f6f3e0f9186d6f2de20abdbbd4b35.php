<?php

/* FTTAdminBundle:MatchInfo:listMatchsInfo.html.twig */
class __TwigTemplate_b1188f6ef359e349c960a0464367cb2431e09d65c79c93fc61800b5305339dbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:MatchInfo:listMatchsInfo.html.twig", 1);
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

    // line 4
    public function block_header1($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "FTTAdminBundle::Default/Includes/header.html.twig");
        echo "
";
    }

    // line 8
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 9
        echo "    <a class=\"btn btn-success btn-xs\" href=\"";
        echo $this->env->getExtension('routing')->getPath("ajouter_matchInfo");
        echo "\">
        <i class=\"fa fa-plus\"></i> Ajouter Un nouveau Match
    </a>
    <table class=\"table table-bordered\" id=\"dev-table\" >
        <thead>
            <tr>
                <th>
                    Date Match
                </th>
                <th>
                    Type Match
                </th>
                <th>
                    Arbitre
                </th>
                <th>
                    Nom Joueur1
                </th>
                <th>
                    Nom Joueur2
                </th>
                <th>
                    Nom Joueur3
                </th>
                <th>
                    Nom Joueur4
                </th>
                <th>
                    Stade
                </th>
                <th>
                    Evenement
                </th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matchs"]) ? $context["matchs"] : $this->getContext($context, "matchs")));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 46
            echo "                <tr>
                    <td>
                        ";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["match"], "dateMatch", array()), "d-m-Y"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "typeMatch", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idArbitre", array()), "nomUser", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur1", array()), "nomJoueur", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur2", array()), "nomJoueur", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        null
                    </td>
                    <td>
                        null
                    </td>
                    <td>
                        ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idStade", array()), "nomStade", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idEvenement", array()), "nomEvenement", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_matchInfo", array("id" => $this->getAttribute($context["match"], "id", array()))), "html", null, true);
            echo "\" 
                           onclick=\"new PNotify({
                                       title: 'Suppression Effectué',
                                       text: 'Votre match a eté supprimé avec succes!',
                                       type: 'success'
                                   });\">
                            <i class=\"fa fa-trash-o\"></i> Supprimer</a>
                    </td>
                    <td>
                        <a class=\"btn btn-info btn-xs\" href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_matchInfo", array("id" => $this->getAttribute($context["match"], "id", array()))), "html", null, true);
            echo "\">
                            <i class=\"fa fa-pencil\"></i> Modifier</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "
        </tbody>
    </table>


";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:MatchInfo:listMatchsInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 89,  150 => 84,  138 => 75,  132 => 72,  126 => 69,  114 => 60,  108 => 57,  102 => 54,  96 => 51,  90 => 48,  86 => 46,  82 => 45,  42 => 9,  39 => 8,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* */
/* {% block header1 %}*/
/*     {{ include('FTTAdminBundle::Default/Includes/header.html.twig') }}*/
/* {% endblock %}*/
/* */
/* {% block bodyAdmin %}*/
/*     <a class="btn btn-success btn-xs" href="{{path('ajouter_matchInfo')}}">*/
/*         <i class="fa fa-plus"></i> Ajouter Un nouveau Match*/
/*     </a>*/
/*     <table class="table table-bordered" id="dev-table" >*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>*/
/*                     Date Match*/
/*                 </th>*/
/*                 <th>*/
/*                     Type Match*/
/*                 </th>*/
/*                 <th>*/
/*                     Arbitre*/
/*                 </th>*/
/*                 <th>*/
/*                     Nom Joueur1*/
/*                 </th>*/
/*                 <th>*/
/*                     Nom Joueur2*/
/*                 </th>*/
/*                 <th>*/
/*                     Nom Joueur3*/
/*                 </th>*/
/*                 <th>*/
/*                     Nom Joueur4*/
/*                 </th>*/
/*                 <th>*/
/*                     Stade*/
/*                 </th>*/
/*                 <th>*/
/*                     Evenement*/
/*                 </th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for match in matchs %}*/
/*                 <tr>*/
/*                     <td>*/
/*                         {{match.dateMatch|date('d-m-Y')}}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{match.typeMatch}}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{match.idArbitre.nomUser}}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{match.idJoueur1.nomJoueur}}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{match.idJoueur2.nomJoueur}}*/
/*                     </td>*/
/*                     <td>*/
/*                         null*/
/*                     </td>*/
/*                     <td>*/
/*                         null*/
/*                     </td>*/
/*                     <td>*/
/*                         {{match.idStade.nomStade}}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{match.idEvenement.nomEvenement}}*/
/*                     </td>*/
/*                     <td>*/
/*                         <a class="btn btn-danger btn-xs" href="{{path('supprimer_matchInfo', {'id':match.id})}}" */
/*                            onclick="new PNotify({*/
/*                                        title: 'Suppression Effectué',*/
/*                                        text: 'Votre match a eté supprimé avec succes!',*/
/*                                        type: 'success'*/
/*                                    });">*/
/*                             <i class="fa fa-trash-o"></i> Supprimer</a>*/
/*                     </td>*/
/*                     <td>*/
/*                         <a class="btn btn-info btn-xs" href="{{path('modifier_matchInfo',{'id':match.id})}}">*/
/*                             <i class="fa fa-pencil"></i> Modifier</a>*/
/*                     </td>*/
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
