<?php

/* FTTAdherentBundle:Pronostic:ResultatsPronostics.html.twig */
class __TwigTemplate_6656100e677b9c73c1147dedc700e6228ccf0823b6cad46331ea084e659d6fbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdherentBundle::layoutAdherent.html.twig", "FTTAdherentBundle:Pronostic:ResultatsPronostics.html.twig", 1);
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
                <span>Resultat Pari</span></br>
            </td>
        </tr>
    </table>
    <table style=\"font-family: 'Exo';font-size: 32px;width: 100%;height: 50px;margin-bottom: 5%\" class=\"table-responsive table-striped\">
        <form method=\"POST\" action=\"\">
            <tr>

                <td style=\"border-bottom: #F47920 solid 2px;\">
                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imeiPronostic", array()), 'widget');
        echo "
                </td>
                <td style=\"border-bottom: #00B6F1 solid 2px;width: 40%;;font-family: 'Oswald', sans-serif;\">
                    <input type=\"submit\" value=\"Rechercher par IMEI Pronostic\" class=\"btn btn-flat\" style=\"width:100%\">
                </td>
            </tr>
        </form>
    </table>
    <table class=\"table\" style=\"color: black\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultatPronostic"]) ? $context["resultatPronostic"] : $this->getContext($context, "resultatPronostic")));
        foreach ($context['_seq'] as $context["_key"] => $context["rst"]) {
            // line 26
            echo "            ";
            $context["color"] = "white";
            // line 27
            echo "            ";
            $context["rs1"] = "";
            // line 28
            echo "            ";
            $context["rs2"] = "";
            // line 29
            echo "
            ";
            // line 30
            $context["break"] = "false";
            // line 31
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["matchsJoues"]) ? $context["matchsJoues"] : $this->getContext($context, "matchsJoues")));
            foreach ($context['_seq'] as $context["_key"] => $context["matchJoue"]) {
                if (((isset($context["break"]) ? $context["break"] : $this->getContext($context, "break")) == "false")) {
                    // line 32
                    echo "                ";
                    if (($this->getAttribute($this->getAttribute($context["matchJoue"], "idMatch", array()), "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute($context["rst"], "idMatchsPronostic", array()), "idMatch", array()), "id", array()))) {
                        // line 33
                        echo "                    ";
                        $context["break"] = "true";
                        // line 34
                        echo "                    ";
                        $context["rs1"] = $this->getAttribute($context["matchJoue"], "rsltJoueur1", array());
                        // line 35
                        echo "                    ";
                        $context["rs2"] = $this->getAttribute($context["matchJoue"], "rsltJoueur2", array());
                        // line 36
                        echo "                ";
                    }
                    echo " 
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matchJoue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "
            ";
            // line 39
            if (((isset($context["rs1"]) ? $context["rs1"] : $this->getContext($context, "rs1")) > (isset($context["rs2"]) ? $context["rs2"] : $this->getContext($context, "rs2")))) {
                // line 40
                echo "                ";
                if (($this->getAttribute($context["rst"], "reponse", array()) == 1)) {
                    // line 41
                    echo "                    ";
                    $context["color"] = "greenyellow";
                    // line 42
                    echo "                ";
                } elseif (($this->getAttribute($context["rst"], "reponse", array()) == 2)) {
                    // line 43
                    echo "                    ";
                    $context["color"] = "#c0392b";
                    // line 44
                    echo "                ";
                }
                // line 45
                echo "            ";
            } elseif (((isset($context["rs1"]) ? $context["rs1"] : $this->getContext($context, "rs1")) < (isset($context["rs2"]) ? $context["rs2"] : $this->getContext($context, "rs2")))) {
                // line 46
                echo "                ";
                if (($this->getAttribute($context["rst"], "reponse", array()) == 1)) {
                    // line 47
                    echo "                    ";
                    $context["color"] = "#c0392b";
                    // line 48
                    echo "                ";
                } elseif (($this->getAttribute($context["rst"], "reponse", array()) == 2)) {
                    // line 49
                    echo "                    ";
                    $context["color"] = "greenyellow";
                    // line 50
                    echo "                ";
                }
                // line 51
                echo "            ";
            }
            // line 52
            echo "


            <tr style=\"background-color: ";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "html", null, true);
            echo "\">
                <td>
                    ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rst"], "idMatchsPronostic", array()), "idMatch", array()), "idJoueur1", array()), "nomJoueur", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rst"], "idMatchsPronostic", array()), "idMatch", array()), "idJoueur1", array()), "nomJoueur", array()), "html", null, true);
            echo "
                    vs ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rst"], "idMatchsPronostic", array()), "idMatch", array()), "idJoueur2", array()), "nomJoueur", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rst"], "idMatchsPronostic", array()), "idMatch", array()), "idJoueur2", array()), "nomJoueur", array()), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 61
            if (($this->getAttribute($context["rst"], "reponse", array()) == 1)) {
                // line 62
                echo "                        <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rst"], "idMatchsPronostic", array()), "idMatch", array()), "idJoueur1", array()), "nomJoueur", array()), "html", null, true);
                echo "</strong>
                    ";
            } else {
                // line 64
                echo "                        <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rst"], "idMatchsPronostic", array()), "idMatch", array()), "idJoueur2", array()), "nomJoueur", array()), "html", null, true);
                echo "</strong>
                    ";
            }
            // line 66
            echo "                </td>
                <td>
                    ";
            // line 68
            if (($this->getAttribute($context["rst"], "nbrJoker", array()) == 1)) {
                // line 69
                echo "                        <i class=\"fa fa-check-circle-o\" style=\"color: #88C425\"></i>

                    ";
            } else {
                // line 72
                echo "
                        ~                
                    ";
            }
            // line 75
            echo "                </td>
                <td>
                    ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["rst"], "gain", array()), "html", null, true);
            echo "

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rst'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "    </table>





";
    }

    public function getTemplateName()
    {
        return "FTTAdherentBundle:Pronostic:ResultatsPronostics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 82,  202 => 77,  198 => 75,  193 => 72,  188 => 69,  186 => 68,  182 => 66,  176 => 64,  170 => 62,  168 => 61,  160 => 58,  154 => 57,  149 => 55,  144 => 52,  141 => 51,  138 => 50,  135 => 49,  132 => 48,  129 => 47,  126 => 46,  123 => 45,  120 => 44,  117 => 43,  114 => 42,  111 => 41,  108 => 40,  106 => 39,  103 => 38,  93 => 36,  90 => 35,  87 => 34,  84 => 33,  81 => 32,  75 => 31,  73 => 30,  70 => 29,  67 => 28,  64 => 27,  61 => 26,  57 => 25,  45 => 16,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FTTAdherentBundle::layoutAdherent.html.twig" %}*/
/* */
/* {% block body %}*/
/*     <table style="font-family: 'Exo';font-size: 32px;width: 100%;height: 50px;margin-bottom: 5%" class="table-responsive table-striped">*/
/*         <tr>*/
/*             <td style="border-bottom: #88C425 solid 2px;">*/
/*                 <span>Resultat Pari</span></br>*/
/*             </td>*/
/*         </tr>*/
/*     </table>*/
/*     <table style="font-family: 'Exo';font-size: 32px;width: 100%;height: 50px;margin-bottom: 5%" class="table-responsive table-striped">*/
/*         <form method="POST" action="">*/
/*             <tr>*/
/* */
/*                 <td style="border-bottom: #F47920 solid 2px;">*/
/*                     {{form_widget(form.imeiPronostic)}}*/
/*                 </td>*/
/*                 <td style="border-bottom: #00B6F1 solid 2px;width: 40%;;font-family: 'Oswald', sans-serif;">*/
/*                     <input type="submit" value="Rechercher par IMEI Pronostic" class="btn btn-flat" style="width:100%">*/
/*                 </td>*/
/*             </tr>*/
/*         </form>*/
/*     </table>*/
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
/*                 {% endif %}*/
/*             {% elseif rs1 < rs2 %}*/
/*                 {% if rst.reponse == 1 %}*/
/*                     {% set color="#c0392b" %}*/
/*                 {% elseif rst.reponse == 2 %}*/
/*                     {% set color="greenyellow" %}*/
/*                 {% endif %}*/
/*             {% endif %}*/
/* */
/* */
/* */
/*             <tr style="background-color: {{color}}">*/
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
/* */
/*                     {% else %}*/
/* */
/*                         ~                */
/*                     {% endif %}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{ rst.gain }}*/
/* */
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
