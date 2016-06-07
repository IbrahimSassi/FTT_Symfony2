<?php

/* FTTAdminBundle:MatchInfo:attribuerScoreList.html.twig */
class __TwigTemplate_1f642f81541e18bb9b66630ef81353beb2f495d70c1ff7edbfb5a7b0b228b8d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:MatchInfo:attribuerScoreList.html.twig", 1);
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
        echo "    <div class=\"col-md-12\">
        <h1> Matchs sans score :</h1>
    </div>
    <table class=\"table table-bordered\" id=\"dev-table\">
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
            </tr>
        </thead>
        <tbody>
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matchs"]) ? $context["matchs"] : $this->getContext($context, "matchs")));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 38
            echo "                <tr>
                    <td>
                        ";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["match"], "dateMatch", array()), "d-m-Y"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "typeMatch", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idArbitre", array()), "nomUser", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur1", array()), "nomJoueur", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 52
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
                        <a class=\"btn btn-info btn-xs\" href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Attribuer_Score", array("idMatch" => $this->getAttribute($context["match"], "id", array()), "idJoueur1" => $this->getAttribute($this->getAttribute($context["match"], "idJoueur1", array()), "id", array()), "idJoueur2" => $this->getAttribute($this->getAttribute($context["match"], "idJoueur2", array()), "id", array()))), "html", null, true);
            echo "\">
                            <i class=\"fa fa-pencil\"></i> Attribuer un score</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
        </tbody>
    </table>


";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:MatchInfo:attribuerScoreList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 66,  107 => 61,  95 => 52,  89 => 49,  83 => 46,  77 => 43,  71 => 40,  67 => 38,  63 => 37,  31 => 7,  28 => 6,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* */
/* */
/* */
/* {% block bodyAdmin %}*/
/*     <div class="col-md-12">*/
/*         <h1> Matchs sans score :</h1>*/
/*     </div>*/
/*     <table class="table table-bordered" id="dev-table">*/
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
/*                         <a class="btn btn-info btn-xs" href="{{path('Attribuer_Score',{'idMatch':match.id,'idJoueur1':match.idJoueur1.id,'idJoueur2':match.idJoueur2.id})}}">*/
/*                             <i class="fa fa-pencil"></i> Attribuer un score</a>*/
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
