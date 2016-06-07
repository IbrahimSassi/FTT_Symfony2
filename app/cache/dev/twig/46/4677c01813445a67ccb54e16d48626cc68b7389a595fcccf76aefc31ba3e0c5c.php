<?php

/* FTTUtilisateurBundle:Arbitre:Arbitre.html.twig */
class __TwigTemplate_511405d797b673c5e15b6999ad2aeae7f01520998da9913c8c1e0e1ea5efffa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTUtilisateurBundle::layoutGlobal.html.twig", "FTTUtilisateurBundle:Arbitre:Arbitre.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FTTUtilisateurBundle::layoutGlobal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arbitre"]) ? $context["arbitre"] : $this->getContext($context, "arbitre")));
        foreach ($context['_seq'] as $context["key"] => $context["abitre"]) {
            // line 5
            echo "        <div class=\"col-md-12 animated fadeInDown\"   >
            <div class=\"well profile_view\"  >
                <div class=\"col-xs-12 bottom text-center\" style=\"background-color: #00B5F1;color: white;border-bottom-left-radius: 1em;border-top-left-radius: 1em\">
                    <strong> <i class=\"fa fa-male\"></i> 
                        ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["abitre"], "idArbitre", array()), "nomUser", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["abitre"], "idArbitre", array()), "prenomUser", array()), "html", null, true);
            echo "</strong>
                </div>
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-5\">
                    <div class=\"text-center\" style=\"padding-top: 2%;padding-bottom: 8%\">
                        <img class=\"img-thumbnail\"  style=\"width: 85px; height: 110px;\" alt=\"Embedded Image\" src=\"data:image/png;base64,";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imagesArbitre"]) ? $context["imagesArbitre"] : $this->getContext($context, "imagesArbitre")), $context["key"], array(), "array"), "html", null, true);
            echo "\" >
                        <center>
                            <table align='right' width=90%  border='1'>
                                <tr>
                                    <td>&nbsp;Evenement.Match:&nbsp; </td>
                                    <td>&nbsp;";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["abitre"], "idMatch", array()), "idEvenement", array()), "nomEvenement", array()), "html", null, true);
            echo "</td>
                                </tr>
                                <tr>
                                    <td>Date Match: </td>
                                    <td>&nbsp;";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["abitre"], "idMatch", array()), "dateMatch", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                </tr>
                                <tr>
                                    <td>Type Match: </td>
                                    <td>&nbsp;";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["abitre"], "idMatch", array()), "typeMatch", array()), "html", null, true);
            echo "</td>
                                </tr>
                                <tr>
                                    <td>Joueur 1: </td>
                                    <td>&nbsp;";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["abitre"], "idMatch", array()), "idJoueur1", array()), "nomJoueur", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["abitre"], "idMatch", array()), "idJoueur1", array()), "prenomJoueur", array()), "html", null, true);
            echo "</td>
                                </tr>
                                <tr>
                                    <td>Joueur 2: </td>
                                    <td>&nbsp;";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["abitre"], "idMatch", array()), "idJoueur2", array()), "nomJoueur", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["abitre"], "idMatch", array()), "idJoueur2", array()), "prenomJoueur", array()), "html", null, true);
            echo "</td>
                                </tr>
                                ";
            // line 37
            if (($this->getAttribute($this->getAttribute($context["abitre"], "idMatch", array()), "idJoueur3", array()) != null)) {
                // line 38
                echo "                                    <tr>
                                        <td>Joueur 3: </td>
                                        <td>&nbsp;";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["abitre"], "idMatch", array()), "idJoueur3", array()), "nomJoueur", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["abitre"], "idMatch", array()), "idJoueur3", array()), "prenomJoueur", array()), "html", null, true);
                echo "</td>
                                    </tr>
                                ";
            }
            // line 43
            echo "                                ";
            if (($this->getAttribute($this->getAttribute($context["abitre"], "idMatch", array()), "idJoueur4", array()) != null)) {
                // line 44
                echo "                                    <tr>
                                        <td>Joueur 4: </td>
                                        <td>&nbsp;";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["abitre"], "idMatch", array()), "idJoueur4", array()), "nomJoueur", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["abitre"], "idMatch", array()), "idJoueur4", array()), "prenomJoueur", array()), "html", null, true);
                echo "</td>
                                    </tr>
                                ";
            }
            // line 49
            echo "                                <tr>
                                    <td>Stade: </td>
                                    <td>&nbsp;";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["abitre"], "idMatch", array()), "idStade", array()), "idComplexe", array()), "nomComplexe", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["abitre"], "idMatch", array()), "idStade", array()), "nomStade", array()), "html", null, true);
            echo " </td>
                                </tr>
                                <tr>
                                    <td>Note de l'arbitre: </td>
                                    <td>&nbsp;";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["abitre"], "evaluationMatch", array()), "html", null, true);
            echo "/10<br></td>
                                </tr>
                            </table>
                        </center>
                    </div>
                </div>


            </div>
        </div>
        <div class=\"md-overlay\"></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['abitre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "

    <div class=\"navigation\">
        ";
        // line 70
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["arbitre"]) ? $context["arbitre"] : $this->getContext($context, "arbitre")));
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "FTTUtilisateurBundle:Arbitre:Arbitre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 70,  157 => 67,  139 => 55,  130 => 51,  126 => 49,  118 => 46,  114 => 44,  111 => 43,  103 => 40,  99 => 38,  97 => 37,  90 => 35,  81 => 31,  74 => 27,  67 => 23,  60 => 19,  52 => 14,  42 => 9,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FTTUtilisateurBundle::layoutGlobal.html.twig" %}*/
/* */
/* {% block body %}*/
/*     {% for key,abitre in arbitre %}*/
/*         <div class="col-md-12 animated fadeInDown"   >*/
/*             <div class="well profile_view"  >*/
/*                 <div class="col-xs-12 bottom text-center" style="background-color: #00B5F1;color: white;border-bottom-left-radius: 1em;border-top-left-radius: 1em">*/
/*                     <strong> <i class="fa fa-male"></i> */
/*                         {{abitre.idArbitre.nomUser}} {{abitre.idArbitre.prenomUser}}</strong>*/
/*                 </div>*/
/*                 <div class="col-md-3"></div>*/
/*                 <div class="col-md-5">*/
/*                     <div class="text-center" style="padding-top: 2%;padding-bottom: 8%">*/
/*                         <img class="img-thumbnail"  style="width: 85px; height: 110px;" alt="Embedded Image" src="data:image/png;base64,{{imagesArbitre[key]}}" >*/
/*                         <center>*/
/*                             <table align='right' width=90%  border='1'>*/
/*                                 <tr>*/
/*                                     <td>&nbsp;Evenement.Match:&nbsp; </td>*/
/*                                     <td>&nbsp;{{abitre.idMatch.idEvenement.nomEvenement}}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td>Date Match: </td>*/
/*                                     <td>&nbsp;{{abitre.idMatch.dateMatch| date('d/m/Y')}}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td>Type Match: </td>*/
/*                                     <td>&nbsp;{{abitre.idMatch.typeMatch}}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td>Joueur 1: </td>*/
/*                                     <td>&nbsp;{{abitre.idMatch.idJoueur1.nomJoueur}} {{abitre.idMatch.idJoueur1.prenomJoueur}}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td>Joueur 2: </td>*/
/*                                     <td>&nbsp;{{abitre.idMatch.idJoueur2.nomJoueur}} {{abitre.idMatch.idJoueur2.prenomJoueur}}</td>*/
/*                                 </tr>*/
/*                                 {% if abitre.idMatch.idJoueur3 != null %}*/
/*                                     <tr>*/
/*                                         <td>Joueur 3: </td>*/
/*                                         <td>&nbsp;{{abitre.idMatch.idJoueur3.nomJoueur}} {{abitre.idMatch.idJoueur3.prenomJoueur}}</td>*/
/*                                     </tr>*/
/*                                 {% endif %}*/
/*                                 {% if abitre.idMatch.idJoueur4 != null %}*/
/*                                     <tr>*/
/*                                         <td>Joueur 4: </td>*/
/*                                         <td>&nbsp;{{abitre.idMatch.idJoueur4.nomJoueur}} {{abitre.idMatch.idJoueur4.prenomJoueur}}</td>*/
/*                                     </tr>*/
/*                                 {% endif %}*/
/*                                 <tr>*/
/*                                     <td>Stade: </td>*/
/*                                     <td>&nbsp;{{abitre.idMatch.idStade.idComplexe.nomComplexe}} {{abitre.idMatch.idStade.nomStade}} </td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td>Note de l'arbitre: </td>*/
/*                                     <td>&nbsp;{{abitre.evaluationMatch}}/10<br></td>*/
/*                                 </tr>*/
/*                             </table>*/
/*                         </center>*/
/*                     </div>*/
/*                 </div>*/
/* */
/* */
/*             </div>*/
/*         </div>*/
/*         <div class="md-overlay"></div>*/
/*     {% endfor %}*/
/* */
/* */
/*     <div class="navigation">*/
/*         {{ knp_pagination_render(arbitre) }}*/
/*     </div>*/
/* {% endblock %}*/
