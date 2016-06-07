<?php

/* FTTAdherentBundle:Pronostic:ResultatsParIMEI.html.twig */
class __TwigTemplate_8a9f3eaf4542b8c826735a0fe3257f4982e896e72c5844b934362c91dfd04989 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdherentBundle::layoutAdherent.html.twig", "FTTAdherentBundle:Pronostic:ResultatsParIMEI.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FTTAdherentBundle::layoutAdherent.html.twig";
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
                <span>Resultat Pari Par IMEI : ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resultatPronostic"]) ? $context["resultatPronostic"] : $this->getContext($context, "resultatPronostic")), 0, array(), "array"), "imeiPronostic", array()), "html", null, true);
        echo "</span></br>
            </td>
        </tr>
    </table>

    ";
        // line 12
        $context["lose"] = 0;
        // line 13
        echo "    <table class=\"table\" style=\"color: black\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultatPronostic"]) ? $context["resultatPronostic"] : $this->getContext($context, "resultatPronostic")));
        foreach ($context['_seq'] as $context["_key"] => $context["rst"]) {
            // line 15
            echo "            ";
            $context["color"] = "white";
            // line 16
            echo "            ";
            $context["rs1"] = "";
            // line 17
            echo "            ";
            $context["rs2"] = "";
            // line 18
            echo "
            ";
            // line 19
            $context["break"] = "false";
            // line 20
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["matchsJoues"]) ? $context["matchsJoues"] : $this->getContext($context, "matchsJoues")));
            foreach ($context['_seq'] as $context["_key"] => $context["matchJoue"]) {
                if (((isset($context["break"]) ? $context["break"] : $this->getContext($context, "break")) == "false")) {
                    // line 21
                    echo "                ";
                    if (($this->getAttribute($this->getAttribute($context["matchJoue"], "idMatch", array()), "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute($context["rst"], "idMatchsPronostic", array()), "idMatch", array()), "id", array()))) {
                        // line 22
                        echo "                    ";
                        $context["break"] = "true";
                        // line 23
                        echo "                    ";
                        $context["rs1"] = $this->getAttribute($context["matchJoue"], "rsltJoueur1", array());
                        // line 24
                        echo "                    ";
                        $context["rs2"] = $this->getAttribute($context["matchJoue"], "rsltJoueur2", array());
                        // line 25
                        echo "                ";
                    }
                    echo " 
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matchJoue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "
            ";
            // line 28
            if (((isset($context["rs1"]) ? $context["rs1"] : $this->getContext($context, "rs1")) > (isset($context["rs2"]) ? $context["rs2"] : $this->getContext($context, "rs2")))) {
                // line 29
                echo "                ";
                if (($this->getAttribute($context["rst"], "reponse", array()) == 1)) {
                    // line 30
                    echo "                    ";
                    $context["color"] = "greenyellow";
                    // line 31
                    echo "                ";
                } elseif (($this->getAttribute($context["rst"], "reponse", array()) == 2)) {
                    // line 32
                    echo "                    ";
                    $context["color"] = "#c0392b";
                    // line 33
                    echo "
                ";
                }
                // line 35
                echo "            ";
            } elseif (((isset($context["rs1"]) ? $context["rs1"] : $this->getContext($context, "rs1")) < (isset($context["rs2"]) ? $context["rs2"] : $this->getContext($context, "rs2")))) {
                // line 36
                echo "                ";
                if (($this->getAttribute($context["rst"], "reponse", array()) == 1)) {
                    // line 37
                    echo "                    ";
                    $context["color"] = "#c0392b";
                    // line 38
                    echo "                ";
                } elseif (($this->getAttribute($context["rst"], "reponse", array()) == 2)) {
                    // line 39
                    echo "                    ";
                    $context["color"] = "greenyellow";
                    // line 40
                    echo "                ";
                }
                // line 41
                echo "            ";
            }
            // line 42
            echo "
            <tr style=\"background-color: ";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "html", null, true);
            echo "\">
                ";
            // line 44
            if (((isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")) == "white")) {
                // line 45
                echo "                    ";
                $context["lose"] = 2;
                // line 46
                echo "                    ";
            }
            // line 47
            echo "                <td>
                    ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rst"], "idMatchsPronostic", array()), "idMatch", array()), "idJoueur1", array()), "nomJoueur", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rst"], "idMatchsPronostic", array()), "idMatch", array()), "idJoueur1", array()), "nomJoueur", array()), "html", null, true);
            echo "
                    vs ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rst"], "idMatchsPronostic", array()), "idMatch", array()), "idJoueur2", array()), "nomJoueur", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rst"], "idMatchsPronostic", array()), "idMatch", array()), "idJoueur2", array()), "nomJoueur", array()), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 52
            if (($this->getAttribute($context["rst"], "reponse", array()) == 1)) {
                // line 53
                echo "                        <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rst"], "idMatchsPronostic", array()), "idMatch", array()), "idJoueur1", array()), "nomJoueur", array()), "html", null, true);
                echo "</strong>
                    ";
            } else {
                // line 55
                echo "                        <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rst"], "idMatchsPronostic", array()), "idMatch", array()), "idJoueur2", array()), "nomJoueur", array()), "html", null, true);
                echo "</strong>
                    ";
            }
            // line 57
            echo "                </td>
                <td>
                    ";
            // line 59
            if (($this->getAttribute($context["rst"], "nbrJoker", array()) == 1)) {
                // line 60
                echo "                        <i class=\"fa fa-check-circle-o\" style=\"color: #88C425\"></i>
                        ";
                // line 61
                if (((isset($context["rs1"]) ? $context["rs1"] : $this->getContext($context, "rs1")) > (isset($context["rs2"]) ? $context["rs2"] : $this->getContext($context, "rs2")))) {
                    // line 62
                    echo "                            ";
                    if (($this->getAttribute($context["rst"], "reponse", array()) == 2)) {
                        // line 63
                        echo "                                ";
                        $context["lose"] = 1;
                        // line 64
                        echo "                            ";
                    }
                    // line 65
                    echo "                        ";
                } elseif (((isset($context["rs1"]) ? $context["rs1"] : $this->getContext($context, "rs1")) < (isset($context["rs2"]) ? $context["rs2"] : $this->getContext($context, "rs2")))) {
                    // line 66
                    echo "                            ";
                    if (($this->getAttribute($context["rst"], "reponse", array()) == 1)) {
                        // line 67
                        echo "                                ";
                        $context["lose"] = 1;
                        // line 68
                        echo "                            ";
                    }
                    // line 69
                    echo "                        ";
                }
                // line 70
                echo "
                    ";
            } else {
                // line 72
                echo "                        ~ 
                        ";
                // line 73
                if (((isset($context["rs1"]) ? $context["rs1"] : $this->getContext($context, "rs1")) > (isset($context["rs2"]) ? $context["rs2"] : $this->getContext($context, "rs2")))) {
                    // line 74
                    echo "                            ";
                    if (($this->getAttribute($context["rst"], "reponse", array()) == 2)) {
                        // line 75
                        echo "                                ";
                        $context["lose"] = 2;
                        // line 76
                        echo "                            ";
                    }
                    // line 77
                    echo "                        ";
                } elseif (((isset($context["rs1"]) ? $context["rs1"] : $this->getContext($context, "rs1")) < (isset($context["rs2"]) ? $context["rs2"] : $this->getContext($context, "rs2")))) {
                    // line 78
                    echo "                            ";
                    if (($this->getAttribute($context["rst"], "reponse", array()) == 1)) {
                        // line 79
                        echo "                                ";
                        $context["lose"] = 2;
                        // line 80
                        echo "                            ";
                    }
                    // line 81
                    echo "                        ";
                }
                // line 82
                echo "                    ";
            }
            echo "              
                </td>
                <td>
                    ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["rst"], "gain", array()), "html", null, true);
            echo "

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rst'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "    </table>
    ";
        // line 91
        if ((((isset($context["lose"]) ? $context["lose"] : $this->getContext($context, "lose")) <= 1) && ($this->getAttribute($this->getAttribute((isset($context["resultatPronostic"]) ? $context["resultatPronostic"] : $this->getContext($context, "resultatPronostic")), 0, array(), "array"), "etatRetraitPoints", array()) == 0))) {
            // line 92
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("recevoir_point", array("imei" => $this->getAttribute($this->getAttribute((isset($context["resultatPronostic"]) ? $context["resultatPronostic"] : $this->getContext($context, "resultatPronostic")), 0, array(), "array"), "imeiPronostic", array()))), "html", null, true);
            echo "\" class=\"btn btn-flat\">Recevoir mes points</a>
    ";
        }
        // line 94
        echo "


";
    }

    public function getTemplateName()
    {
        return "FTTAdherentBundle:Pronostic:ResultatsParIMEI.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 94,  274 => 92,  272 => 91,  269 => 90,  258 => 85,  251 => 82,  248 => 81,  245 => 80,  242 => 79,  239 => 78,  236 => 77,  233 => 76,  230 => 75,  227 => 74,  225 => 73,  222 => 72,  218 => 70,  215 => 69,  212 => 68,  209 => 67,  206 => 66,  203 => 65,  200 => 64,  197 => 63,  194 => 62,  192 => 61,  189 => 60,  187 => 59,  183 => 57,  177 => 55,  171 => 53,  169 => 52,  161 => 49,  155 => 48,  152 => 47,  149 => 46,  146 => 45,  144 => 44,  140 => 43,  137 => 42,  134 => 41,  131 => 40,  128 => 39,  125 => 38,  122 => 37,  119 => 36,  116 => 35,  112 => 33,  109 => 32,  106 => 31,  103 => 30,  100 => 29,  98 => 28,  95 => 27,  85 => 25,  82 => 24,  79 => 23,  76 => 22,  73 => 21,  67 => 20,  65 => 19,  62 => 18,  59 => 17,  56 => 16,  53 => 15,  49 => 14,  46 => 13,  44 => 12,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FTTAdherentBundle::layoutAdherent.html.twig" %}*/
/* */
/* {% block body %}*/
/*     <table style="font-family: 'Exo';font-size: 32px;width: 100%;height: 50px;margin-bottom: 5%" class="table-responsive table-striped">*/
/*         <tr>*/
/*             <td style="border-bottom: #88C425 solid 2px;">*/
/*                 <span>Resultat Pari Par IMEI : {{resultatPronostic[0].imeiPronostic}}</span></br>*/
/*             </td>*/
/*         </tr>*/
/*     </table>*/
/* */
/*     {% set lose=0 %}*/
/*     <table class="table" style="color: black">*/
/*         {% for rst in resultatPronostic %}*/
/*             {% set color="white" %}*/
/*             {% set rs1='' %}*/
/*             {% set rs2='' %}*/
/* */
/*             {% set break='false' %}*/
/*             {% for matchJoue in matchsJoues if break=='false' %}*/
/*                 {% if matchJoue.idMatch.id == rst.idMatchsPronostic.idMatch.id %}*/
/*                     {% set break='true' %}*/
/*                     {% set rs1=matchJoue.rsltJoueur1 %}*/
/*                     {% set rs2=matchJoue.rsltJoueur2 %}*/
/*                 {% endif %} */
/*             {% endfor %}*/
/* */
/*             {% if rs1 > rs2 %}*/
/*                 {% if rst.reponse == 1 %}*/
/*                     {% set color="greenyellow" %}*/
/*                 {% elseif rst.reponse == 2 %}*/
/*                     {% set color="#c0392b" %}*/
/* */
/*                 {% endif %}*/
/*             {% elseif rs1 < rs2 %}*/
/*                 {% if rst.reponse == 1 %}*/
/*                     {% set color="#c0392b" %}*/
/*                 {% elseif rst.reponse == 2 %}*/
/*                     {% set color="greenyellow" %}*/
/*                 {% endif %}*/
/*             {% endif %}*/
/* */
/*             <tr style="background-color: {{color}}">*/
/*                 {% if color =='white' %}*/
/*                     {% set lose =2 %}*/
/*                     {% endif %}*/
/*                 <td>*/
/*                     {{rst.idMatchsPronostic.idMatch.idJoueur1.nomJoueur}} {{rst.idMatchsPronostic.idMatch.idJoueur1.nomJoueur}}*/
/*                     vs {{rst.idMatchsPronostic.idMatch.idJoueur2.nomJoueur}} {{rst.idMatchsPronostic.idMatch.idJoueur2.nomJoueur}}*/
/*                 </td>*/
/*                 <td>*/
/*                     {% if rst.reponse == 1 %}*/
/*                         <strong>{{rst.idMatchsPronostic.idMatch.idJoueur1.nomJoueur}}</strong>*/
/*                     {% else %}*/
/*                         <strong>{{rst.idMatchsPronostic.idMatch.idJoueur2.nomJoueur}}</strong>*/
/*                     {% endif %}*/
/*                 </td>*/
/*                 <td>*/
/*                     {% if rst.nbrJoker == 1 %}*/
/*                         <i class="fa fa-check-circle-o" style="color: #88C425"></i>*/
/*                         {% if rs1 > rs2 %}*/
/*                             {% if rst.reponse == 2 %}*/
/*                                 {% set lose=1 %}*/
/*                             {% endif %}*/
/*                         {% elseif rs1 < rs2 %}*/
/*                             {% if rst.reponse == 1 %}*/
/*                                 {% set lose=1 %}*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/* */
/*                     {% else %}*/
/*                         ~ */
/*                         {% if rs1 > rs2 %}*/
/*                             {% if rst.reponse == 2 %}*/
/*                                 {% set lose=2 %}*/
/*                             {% endif %}*/
/*                         {% elseif rs1 < rs2 %}*/
/*                             {% if rst.reponse == 1 %}*/
/*                                 {% set lose=2 %}*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/*                     {% endif %}              */
/*                 </td>*/
/*                 <td>*/
/*                     {{ rst.gain }}*/
/* */
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/*     {% if lose <= 1 and resultatPronostic[0].etatRetraitPoints == 0 %}*/
/*         <a href="{{path('recevoir_point',{'imei': resultatPronostic[0].imeiPronostic})}}" class="btn btn-flat">Recevoir mes points</a>*/
/*     {% endif %}*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
