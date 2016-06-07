<?php

/* FTTUtilisateurBundle:Match:matchResultats.html.twig */
class __TwigTemplate_018174e9fb97aebd134f0ac188e107dd0aa73d2a186be68e616dccb29fb411a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTUtilisateurBundle::layoutGlobal.html.twig", "FTTUtilisateurBundle:Match:matchResultats.html.twig", 1);
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
        echo "    <table style=\"font-family: 'Exo';font-size: 32px;width: 100%;height: 50px;margin-bottom: 5%\" class=\"table-responsive table-striped\">
        <tr>
            <td style=\"border-bottom: #88C425 solid 2px;\">
                <span>Resultats</span></br>
            </td>
        </tr>
    </table>
    <table style=\"font-family: 'Exo';font-size: 32px;width: 100%;height: 50px;margin-bottom: 5%\" class=\"table-responsive table-striped\">
        <form method=\"POST\" action=\"\">
            <tr>
                <td style=\"border-bottom: #F47920 solid 2px;\">
                    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idEvenement", array()), 'widget');
        echo "
                </td>
                <td style=\"border-bottom: #00B6F1 solid 2px;width: 40%;font-family: 'Oswald', sans-serif;\">
                    <input type=\"submit\" value=\"Recherche matchs par evenements\" class=\"btn btn-flat\" style=\"width:100%\">
                </td>
            </tr>
        </form>
    </table>
    <!-- list Match between Players popup START-->

    <!-- list Match between Players popup END-->





    <!-- LIST Match  START-->
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matchs"]) ? $context["matchs"] : $this->getContext($context, "matchs")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 33
            echo "        <div class=\"col-md-12 animated fadeInDown\" style=\"padding-bottom: 2%\"  >
            <div class=\"well profile_view\"   >
                <div class=\"col-xs-12 bottom text-center\" style=\"background-color: #00B5F1;color: white;border-bottom-left-radius: 1em;border-top-left-radius: 1em;font-family: 'Oswald'\">
                    <strong style=\"color: #EBEBEB\"> Date : 
                        ";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "dateMatch", array()), "d - m - Y"), "html", null, true);
            echo "<span style=\"font-size: larger;color: #000\"> | </span><strong> Evenement : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idEvenement", array()), "nomEvenement", array()), "html", null, true);
            echo "</strong> </strong>
                </div>
                <div class=\"col-md-12 resultat\" style=\"text-align: center\"> 
                    <table class=\"table-striped table-bordered\" style=\"width: 95%\">
                        <tr >
                            <td rowspan=4 style=\"border-bottom: #00aeef solid 2px;\">
                                ";
            // line 43
            if (($this->getAttribute($context["match"], "rsltJoueur1", array()) > $this->getAttribute($context["match"], "rsltJoueur2", array()))) {
                // line 44
                echo "                                    ";
                if ((($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur3", array()) == null) && ($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur4", array()) == null))) {
                    // line 45
                    echo "                                        <span style=\"color: #88C425\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur1", array()), "nomJoueur", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur1", array()), "prenomJoueur", array()), "html", null, true);
                    echo " 
                                            ";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "rsltJoueur1", array()), "html", null, true);
                    echo " </span>- <span style=\"color: #D71920\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "rsltJoueur2", array()), "html", null, true);
                    echo " 
                                            ";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur2", array()), "nomJoueur", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur2", array()), "prenomJoueur", array()), "html", null, true);
                    echo "</span>
                                        ";
                } else {
                    // line 49
                    echo "                                        <span style=\"color: #88C425\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur1", array()), "nomJoueur", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur1", array()), "prenomJoueur", array()), "html", null, true);
                    echo " & 
                                            ";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur2", array()), "nomJoueur", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur2", array()), "prenomJoueur", array()), "html", null, true);
                    echo "
                                            ";
                    // line 51
                    echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "rsltJoueur1", array()), "html", null, true);
                    echo " </span>- <span style=\"color: #D71920\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "rsltJoueur2", array()), "html", null, true);
                    echo " 
                                            ";
                    // line 52
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur3", array()), "nomJoueur", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur3", array()), "prenomJoueur", array()), "html", null, true);
                    echo " & 
                                            ";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur4", array()), "nomJoueur", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur4", array()), "prenomJoueur", array()), "html", null, true);
                    echo "
                                        </span>

                                    ";
                }
                // line 57
                echo "                                ";
            } else {
                // line 58
                echo "                                    ";
                if ((($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur3", array()) == null) && ($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur4", array()) == null))) {
                    // line 59
                    echo "                                        <span style=\"color: #D71920\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur1", array()), "nomJoueur", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur1", array()), "prenomJoueur", array()), "html", null, true);
                    echo " 
                                            ";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "rsltJoueur1", array()), "html", null, true);
                    echo " </span>- <span style=\"color: #88C425\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "rsltJoueur2", array()), "html", null, true);
                    echo " 
                                            ";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur2", array()), "nomJoueur", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur2", array()), "prenomJoueur", array()), "html", null, true);
                    echo "</span>
                                        ";
                } else {
                    // line 63
                    echo "                                        <span style=\"color: #D71920\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur1", array()), "nomJoueur", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur1", array()), "prenomJoueur", array()), "html", null, true);
                    echo " & 
                                            ";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur2", array()), "nomJoueur", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur2", array()), "prenomJoueur", array()), "html", null, true);
                    echo " 
                                            ";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "rsltJoueur1", array()), "html", null, true);
                    echo " </span>- <span style=\"color: #88C425\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "rsltJoueur2", array()), "html", null, true);
                    echo " 
                                            ";
                    // line 66
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur3", array()), "nomJoueur", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur3", array()), "prenomJoueur", array()), "html", null, true);
                    echo " & 
                                            ";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur4", array()), "nomJoueur", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur4", array()), "prenomJoueur", array()), "html", null, true);
                    echo "</span>
                                    ";
                }
                // line 69
                echo "                                ";
            }
            // line 70
            echo "                            </td>
                        </tr>
                        <tr>
                            <td >
                                <a class=\"btn btn-flat\" style=\"width: 100%\" href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rencontres_directes", array("idJoueur1" => $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur1", array()), "id", array()), "idJoueur2" => $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur2", array()), "id", array()))), "html", null, true);
            echo "\" >
                                    Historique</a> </br>
                               <!-- <a class=\"btn btn-flat3\" href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evaluation", array("id" => $this->getAttribute($context["match"], "id", array()))), "html", null, true);
            echo "\">Evaluation</a> -->
                            </td>
                        </tr>
                        <tr>
                            <td style=\"border-bottom: #00aeef solid 2px;\">
                                ";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur1", array()), "nomJoueur", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur1", array()), "prenomJoueur", array()), "html", null, true);
            echo "
                                ";
            // line 82
            $this->loadTemplate("DCSRatingBundle:Rating:control.html.twig", "FTTUtilisateurBundle:Match:matchResultats.html.twig", 82)->display(array_merge($context, array("id" => (($this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur1", array()), "id", array()) . "match") . $this->getAttribute($context["match"], "id", array())))));
            // line 83
            echo "
                            </td>
                        </tr>
                        <tr>
                            <td >
                                ";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur2", array()), "nomJoueur", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur2", array()), "prenomJoueur", array()), "html", null, true);
            echo "
                                ";
            // line 89
            $this->loadTemplate("DCSRatingBundle:Rating:control.html.twig", "FTTUtilisateurBundle:Match:matchResultats.html.twig", 89)->display(array_merge($context, array("id" => (($this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur2", array()), "id", array()) . "match") . $this->getAttribute($context["match"], "id", array())))));
            // line 90
            echo "                            </td>
                        </tr>
                    </table>
                </div>
                <div class=\"col-xs-12 bottom text-center\" >
                </div>
            </div>
        </div>
        <div class=\"md-overlay\"></div>

    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "    ";
        // line 102
        echo "    <div class=\"navigation\">
        ";
        // line 103
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["matchs"]) ? $context["matchs"] : $this->getContext($context, "matchs")));
        echo "
    </div>

    <!-- list Match end-->










";
    }

    public function getTemplateName()
    {
        return "FTTUtilisateurBundle:Match:matchResultats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 103,  286 => 102,  284 => 101,  260 => 90,  258 => 89,  252 => 88,  245 => 83,  243 => 82,  237 => 81,  229 => 76,  224 => 74,  218 => 70,  215 => 69,  208 => 67,  202 => 66,  196 => 65,  190 => 64,  183 => 63,  176 => 61,  170 => 60,  163 => 59,  160 => 58,  157 => 57,  148 => 53,  142 => 52,  136 => 51,  130 => 50,  123 => 49,  116 => 47,  110 => 46,  103 => 45,  100 => 44,  98 => 43,  87 => 37,  81 => 33,  64 => 32,  44 => 15,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FTTUtilisateurBundle::layoutGlobal.html.twig" %}*/
/* */
/* {% block body %}*/
/*     <table style="font-family: 'Exo';font-size: 32px;width: 100%;height: 50px;margin-bottom: 5%" class="table-responsive table-striped">*/
/*         <tr>*/
/*             <td style="border-bottom: #88C425 solid 2px;">*/
/*                 <span>Resultats</span></br>*/
/*             </td>*/
/*         </tr>*/
/*     </table>*/
/*     <table style="font-family: 'Exo';font-size: 32px;width: 100%;height: 50px;margin-bottom: 5%" class="table-responsive table-striped">*/
/*         <form method="POST" action="">*/
/*             <tr>*/
/*                 <td style="border-bottom: #F47920 solid 2px;">*/
/*                     {{form_widget(form.idEvenement)}}*/
/*                 </td>*/
/*                 <td style="border-bottom: #00B6F1 solid 2px;width: 40%;font-family: 'Oswald', sans-serif;">*/
/*                     <input type="submit" value="Recherche matchs par evenements" class="btn btn-flat" style="width:100%">*/
/*                 </td>*/
/*             </tr>*/
/*         </form>*/
/*     </table>*/
/*     <!-- list Match between Players popup START-->*/
/* */
/*     <!-- list Match between Players popup END-->*/
/* */
/* */
/* */
/* */
/* */
/*     <!-- LIST Match  START-->*/
/*     {% for match in matchs %}*/
/*         <div class="col-md-12 animated fadeInDown" style="padding-bottom: 2%"  >*/
/*             <div class="well profile_view"   >*/
/*                 <div class="col-xs-12 bottom text-center" style="background-color: #00B5F1;color: white;border-bottom-left-radius: 1em;border-top-left-radius: 1em;font-family: 'Oswald'">*/
/*                     <strong style="color: #EBEBEB"> Date : */
/*                         {{match.idMatch.dateMatch | date('d - m - Y')}}<span style="font-size: larger;color: #000"> | </span><strong> Evenement : {{match.idMatch.idEvenement.nomEvenement}}</strong> </strong>*/
/*                 </div>*/
/*                 <div class="col-md-12 resultat" style="text-align: center"> */
/*                     <table class="table-striped table-bordered" style="width: 95%">*/
/*                         <tr >*/
/*                             <td rowspan=4 style="border-bottom: #00aeef solid 2px;">*/
/*                                 {% if match.rsltJoueur1 > match.rsltJoueur2 %}*/
/*                                     {% if match.idMatch.idJoueur3 == null and match.idMatch.idJoueur4 == null  %}*/
/*                                         <span style="color: #88C425">{{match.idMatch.idJoueur1.nomJoueur}} {{match.idMatch.idJoueur1.prenomJoueur}} */
/*                                             {{match.rsltJoueur1}} </span>- <span style="color: #D71920">{{match.rsltJoueur2}} */
/*                                             {{match.idMatch.idJoueur2.nomJoueur}} {{match.idMatch.idJoueur2.prenomJoueur}}</span>*/
/*                                         {% else %}*/
/*                                         <span style="color: #88C425">{{match.idMatch.idJoueur1.nomJoueur}} {{match.idMatch.idJoueur1.prenomJoueur}} & */
/*                                             {{match.idMatch.idJoueur2.nomJoueur}} {{match.idMatch.idJoueur2.prenomJoueur}}*/
/*                                             {{match.rsltJoueur1}} </span>- <span style="color: #D71920">{{match.rsltJoueur2}} */
/*                                             {{match.idMatch.idJoueur3.nomJoueur}} {{match.idMatch.idJoueur3.prenomJoueur}} & */
/*                                             {{match.idMatch.idJoueur4.nomJoueur}} {{match.idMatch.idJoueur4.prenomJoueur}}*/
/*                                         </span>*/
/* */
/*                                     {% endif %}*/
/*                                 {% else %}*/
/*                                     {% if match.idMatch.idJoueur3 == null and match.idMatch.idJoueur4 == null  %}*/
/*                                         <span style="color: #D71920">{{match.idMatch.idJoueur1.nomJoueur}} {{match.idMatch.idJoueur1.prenomJoueur}} */
/*                                             {{match.rsltJoueur1}} </span>- <span style="color: #88C425">{{match.rsltJoueur2}} */
/*                                             {{match.idMatch.idJoueur2.nomJoueur}} {{match.idMatch.idJoueur2.prenomJoueur}}</span>*/
/*                                         {% else %}*/
/*                                         <span style="color: #D71920">{{match.idMatch.idJoueur1.nomJoueur}} {{match.idMatch.idJoueur1.prenomJoueur}} & */
/*                                             {{match.idMatch.idJoueur2.nomJoueur}} {{match.idMatch.idJoueur2.prenomJoueur}} */
/*                                             {{match.rsltJoueur1}} </span>- <span style="color: #88C425">{{match.rsltJoueur2}} */
/*                                             {{match.idMatch.idJoueur3.nomJoueur}} {{match.idMatch.idJoueur3.prenomJoueur}} & */
/*                                             {{match.idMatch.idJoueur4.nomJoueur}} {{match.idMatch.idJoueur4.prenomJoueur}}</span>*/
/*                                     {% endif %}*/
/*                                 {% endif %}*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td >*/
/*                                 <a class="btn btn-flat" style="width: 100%" href="{{path('rencontres_directes', {'idJoueur1':match.idMatch.idJoueur1.id,'idJoueur2':match.idMatch.idJoueur2.id})}}" >*/
/*                                     Historique</a> </br>*/
/*                                <!-- <a class="btn btn-flat3" href="{{path('evaluation', {'id':match.id})}}">Evaluation</a> -->*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td style="border-bottom: #00aeef solid 2px;">*/
/*                                 {{match.idMatch.idJoueur1.nomJoueur}} {{match.idMatch.idJoueur1.prenomJoueur}}*/
/*                                 {% include 'DCSRatingBundle:Rating:control.html.twig' with {'id' : match.idMatch.idJoueur1.id~'match'~match.id } %}*/
/* */
/*                             </td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td >*/
/*                                 {{match.idMatch.idJoueur2.nomJoueur}} {{match.idMatch.idJoueur2.prenomJoueur}}*/
/*                                 {% include 'DCSRatingBundle:Rating:control.html.twig' with {'id' : match.idMatch.idJoueur2.id~'match'~match.id} %}*/
/*                             </td>*/
/*                         </tr>*/
/*                     </table>*/
/*                 </div>*/
/*                 <div class="col-xs-12 bottom text-center" >*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="md-overlay"></div>*/
/* */
/*     {% endfor %}*/
/*     {# display navigation #}*/
/*     <div class="navigation">*/
/*         {{ knp_pagination_render(matchs) }}*/
/*     </div>*/
/* */
/*     <!-- list Match end-->*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
