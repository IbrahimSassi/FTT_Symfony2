<?php

/* FTTUtilisateurBundle:Pronostic:MatchAParier.html.twig */
class __TwigTemplate_7351470db301969cf0ca55aeced2076773bf6e943e3b9c6f94ee51fdf5c6cc44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTUtilisateurBundle::layoutGlobal.html.twig", "FTTUtilisateurBundle:Pronostic:MatchAParier.html.twig", 1);
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
        echo "
    <style>
        @-webkit-keyframes click-wave {
            0% {
                height: 40px;
                width: 40px;
                opacity: 0.35;
                position: relative;
            }
            100% {
                height: 200px;
                width: 200px;
                margin-left: -80px;
                margin-top: -80px;
                opacity: 0;
            }
        }
        @-moz-keyframes click-wave {
            0% {
                height: 40px;
                width: 40px;
                opacity: 0.35;
                position: relative;
            }
            100% {
                height: 200px;
                width: 200px;
                margin-left: -80px;
                margin-top: -80px;
                opacity: 0;
            }
        }
        @keyframes click-wave {
            0% {
                height: 40px;
                width: 40px;
                opacity: 0.35;
                position: relative;
            }
            100% {
                height: 200px;
                width: 200px;
                margin-left: -80px;
                margin-top: -80px;
                opacity: 0;
            }
        }
        .option-input {
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-appearance: none;
            -o-appearance: none;
            appearance: none;
            position: relative;
            right: 0;
            bottom: 0;
            left: 0;
            height: 5px;
            width: 20px;
            -webkit-transition: all 0.15s ease-out 0s;
            -moz-transition: all 0.15s ease-out 0s;
            transition: all 0.15s ease-out 0s;
            background: #cbd1d8;
            border: none;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            margin-right: 0.5rem;
            outline: none;
            position: relative;
            z-index: 1000;
        }
        .option-input:hover {
            background: #9faab7;
        }
        .option-input:checked {
            background: #40e0d0;
        }
        .option-input:checked::before {
            height: 10px;
            width: 20px;
            position: absolute;
            content: '\\2716';
            display: inline-block;
            font-size: 15.66667px;
            text-align: center;
        }
        .option-input:checked::after {
            -webkit-animation: click-wave 0.65s;
            -moz-animation: click-wave 0.65s;
            animation: click-wave 0.65s;
            background: #40e0d0;
            content: '';
            display: block;
            position: relative;
            z-index: 100;
        }
        .option-input.radio {
            border-radius: 50%;
        }
        .option-input.radio::after {
            border-radius: 50%;
        }

    </style>


    <form action=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("matchAparier");
        echo "\" method=\"POST\">
        <table class=\"table table-striped\">

            ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matchsAparier"]) ? $context["matchsAparier"] : $this->getContext($context, "matchsAparier")));
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
            // line 115
            echo "
                ";
            // line 116
            if ((($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur3", array()) == null) && ($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur4", array()) == null))) {
                // line 117
                echo "
                    ";
                // line 118
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur1", array()), "classementInternational", array()) > $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur2", array()), "classementInternational", array()))) {
                    // line 119
                    echo "                        ";
                    $context["quotaJ1"] = ($this->getAttribute($context["match"], "quota", array()) * 0.3);
                    // line 120
                    echo "                        ";
                    $context["quotaJ2"] = ($this->getAttribute($context["match"], "quota", array()) * 0.7);
                    // line 121
                    echo "                    ";
                } else {
                    // line 122
                    echo "                        ";
                    $context["quotaJ1"] = ($this->getAttribute($context["match"], "quota", array()) * 0.7);
                    // line 123
                    echo "                        ";
                    $context["quotaJ2"] = ($this->getAttribute($context["match"], "quota", array()) * 0.3);
                    // line 124
                    echo "                    ";
                }
                // line 125
                echo "

                    <tr >
                        <td>
                            ";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur1", array()), "nomJoueur", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur1", array()), "prenomJoueur", array()), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 132
                echo twig_escape_filter($this->env, (isset($context["quotaJ1"]) ? $context["quotaJ1"] : $this->getContext($context, "quotaJ1")), "html", null, true);
                echo "
                        </td>
                        <td>
                            <input class=\"option-input radio\" type=\"radio\" name=\"";
                // line 135
                echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", array()) - 1), "html", null, true);
                echo "\" value=\"1\" > - 
                            <input class=\"option-input radio\" type=\"radio\" name=\"";
                // line 136
                echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", array()) - 1), "html", null, true);
                echo "\" value=\"2\" > 
                        </td>
                        <td>
                            ";
                // line 139
                echo twig_escape_filter($this->env, (isset($context["quotaJ2"]) ? $context["quotaJ2"] : $this->getContext($context, "quotaJ2")), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur2", array()), "nomJoueur", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur2", array()), "prenomJoueur", array()), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 145
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "dateMatch", array()), "d-m-Y"), "html", null, true);
                echo "
                        </td>
                        <td>
                            <input type=\"checkbox\" class=\"option-input checkbox\" name=\"joker\" value=\"";
                // line 148
                echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", array()) - 1), "html", null, true);
                echo "\" >
                        </td>
                    </tr>
                    <tr>
                        <td style=\"text-align: center\" colspan=\"6\">
                            <a  style=\"width: 25%\" class=\"btn btn-flat5\" href=\"";
                // line 153
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consulter_stat", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur1", array()), "id", array()))), "html", null, true);
                echo "\">Statistique <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur1", array()), "nomJoueur", array()), "html", null, true);
                echo "</strong> </a> 
                            <a  class=\"btn btn-flat3\" href=\"";
                // line 154
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rencontres_directes", array("idJoueur1" => $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur1", array()), "id", array()), "idJoueur2" => $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur2", array()), "id", array()))), "html", null, true);
                echo "\">Recontres directes</a> 
                            <a  style=\"width: 25%\" class=\"btn btn-flat5\" href=\"";
                // line 155
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consulter_stat", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur2", array()), "id", array()))), "html", null, true);
                echo "\">Statistique <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur2", array()), "nomJoueur", array()), "html", null, true);
                echo "</strong> </a> 
                        </td>
                    </tr>

                ";
            } else {
                // line 160
                echo "

                    ";
                // line 162
                if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur1", array()), "classementInternational", array()) + $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur2", array()), "classementInternational", array())) > ($this->getAttribute($this->getAttribute($this->getAttribute(                // line 163
$context["match"], "idMatch", array()), "idJoueur3", array()), "classementInternational", array()) + $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur4", array()), "classementInternational", array())))) {
                    // line 164
                    echo "                    ";
                    $context["quotaJ1"] = ($this->getAttribute($context["match"], "quota", array()) * 0.3);
                    // line 165
                    echo "                    ";
                    $context["quotaJ2"] = ($this->getAttribute($context["match"], "quota", array()) * 0.7);
                    // line 166
                    echo "                ";
                } else {
                    // line 167
                    echo "                    ";
                    $context["quotaJ1"] = ($this->getAttribute($context["match"], "quota", array()) * 0.7);
                    // line 168
                    echo "                    ";
                    $context["quotaJ2"] = ($this->getAttribute($context["match"], "quota", array()) * 0.3);
                    // line 169
                    echo "                ";
                }
                // line 170
                echo "




                <tr>
                    <td>
                        ";
                // line 177
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur1", array()), "nomJoueur", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur1", array()), "prenomJoueur", array()), "html", null, true);
                echo " & 
                        ";
                // line 178
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur2", array()), "nomJoueur", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur2", array()), "prenomJoueur", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 181
                echo twig_escape_filter($this->env, (isset($context["quotaJ1"]) ? $context["quotaJ1"] : $this->getContext($context, "quotaJ1")), "html", null, true);
                echo "
                    </td>
                    <td>
                        <input class=\"option-input radio\" type=\"radio\" name=\"";
                // line 184
                echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", array()) - 1), "html", null, true);
                echo "\" 
                               value=\"1\" > - 
                        <input class=\"option-input radio\" type=\"radio\" name=\"";
                // line 186
                echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", array()) - 1), "html", null, true);
                echo "\" 
                               value=\"2\" > 
                    </td>
                    <td>
                        ";
                // line 190
                echo twig_escape_filter($this->env, (isset($context["quotaJ2"]) ? $context["quotaJ2"] : $this->getContext($context, "quotaJ2")), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 193
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur3", array()), "nomJoueur", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur3", array()), "prenomJoueur", array()), "html", null, true);
                echo " & 
                        ";
                // line 194
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur4", array()), "nomJoueur", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur4", array()), "prenomJoueur", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 197
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "dateMatch", array()), "d-m-Y"), "html", null, true);
                echo "
                    </td>
                    <td>
                        <input type=\"checkbox\" class=\"option-input checkbox\" name=\"joker\" value=\"";
                // line 200
                echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", array()) - 1), "html", null, true);
                echo "\" >
                    </td>
                </tr>
                <tr>
                    <td style=\"text-align: center\" colspan=\"6\">
                        <a  style=\"width: 22%\" class=\"btn btn-flat5\" href=\"";
                // line 205
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consulter_stat", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur1", array()), "id", array()))), "html", null, true);
                echo "\">Statistique <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur1", array()), "nomJoueur", array()), "html", null, true);
                echo "</strong> </a> 
                        <a  style=\"width: 22%\" class=\"btn btn-flat5\" href=\"";
                // line 206
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consulter_stat", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur2", array()), "id", array()))), "html", null, true);
                echo "\">Statistique <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur2", array()), "nomJoueur", array()), "html", null, true);
                echo "</strong> </a> 
                        <a  style=\"width: 22%\" class=\"btn btn-flat5\" href=\"";
                // line 207
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consulter_stat", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur3", array()), "id", array()))), "html", null, true);
                echo "\">Statistique <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur3", array()), "nomJoueur", array()), "html", null, true);
                echo "</strong> </a> 
                        <a  style=\"width: 22%\" class=\"btn btn-flat5\" href=\"";
                // line 208
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consulter_stat", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur4", array()), "id", array()))), "html", null, true);
                echo "\">Statistique <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur4", array()), "nomJoueur", array()), "html", null, true);
                echo "</strong> </a> 
                    </td>
                </tr>
                ";
            }
            // line 212
            echo "                    ";
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
        // line 213
        echo "                    </table>

                    ";
        // line 215
        if ($this->env->getExtension('security')->isGranted("ROLE_ADHERENT")) {
            // line 216
            echo "                        <input style=\"margin-left: 60%;width: 30%\" placeholder=\"Valeur Mise\" 
                               type=\"number\" name=\"mise\" id=\"mise\" required min=\"0\" max=\"100\" value=\"0\" class=\"form-control\" 
                               onchange=\"actionPronostic(";
            // line 218
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
            echo ")\" onkeyup=\"actionPronostic(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
            echo ")\"
                               > <br>
                        <div id='pronostic'></div>
                    ";
        }
        // line 222
        echo "                </form>




                ";
    }

    public function getTemplateName()
    {
        return "FTTUtilisateurBundle:Pronostic:MatchAParier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 222,  420 => 218,  416 => 216,  414 => 215,  410 => 213,  396 => 212,  387 => 208,  381 => 207,  375 => 206,  369 => 205,  361 => 200,  355 => 197,  347 => 194,  341 => 193,  335 => 190,  328 => 186,  323 => 184,  317 => 181,  309 => 178,  303 => 177,  294 => 170,  291 => 169,  288 => 168,  285 => 167,  282 => 166,  279 => 165,  276 => 164,  274 => 163,  273 => 162,  269 => 160,  259 => 155,  255 => 154,  249 => 153,  241 => 148,  235 => 145,  227 => 142,  221 => 139,  215 => 136,  211 => 135,  205 => 132,  197 => 129,  191 => 125,  188 => 124,  185 => 123,  182 => 122,  179 => 121,  176 => 120,  173 => 119,  171 => 118,  168 => 117,  166 => 116,  163 => 115,  146 => 114,  140 => 111,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FTTUtilisateurBundle::layoutGlobal.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*     <style>*/
/*         @-webkit-keyframes click-wave {*/
/*             0% {*/
/*                 height: 40px;*/
/*                 width: 40px;*/
/*                 opacity: 0.35;*/
/*                 position: relative;*/
/*             }*/
/*             100% {*/
/*                 height: 200px;*/
/*                 width: 200px;*/
/*                 margin-left: -80px;*/
/*                 margin-top: -80px;*/
/*                 opacity: 0;*/
/*             }*/
/*         }*/
/*         @-moz-keyframes click-wave {*/
/*             0% {*/
/*                 height: 40px;*/
/*                 width: 40px;*/
/*                 opacity: 0.35;*/
/*                 position: relative;*/
/*             }*/
/*             100% {*/
/*                 height: 200px;*/
/*                 width: 200px;*/
/*                 margin-left: -80px;*/
/*                 margin-top: -80px;*/
/*                 opacity: 0;*/
/*             }*/
/*         }*/
/*         @keyframes click-wave {*/
/*             0% {*/
/*                 height: 40px;*/
/*                 width: 40px;*/
/*                 opacity: 0.35;*/
/*                 position: relative;*/
/*             }*/
/*             100% {*/
/*                 height: 200px;*/
/*                 width: 200px;*/
/*                 margin-left: -80px;*/
/*                 margin-top: -80px;*/
/*                 opacity: 0;*/
/*             }*/
/*         }*/
/*         .option-input {*/
/*             -webkit-appearance: none;*/
/*             -moz-appearance: none;*/
/*             -ms-appearance: none;*/
/*             -o-appearance: none;*/
/*             appearance: none;*/
/*             position: relative;*/
/*             right: 0;*/
/*             bottom: 0;*/
/*             left: 0;*/
/*             height: 5px;*/
/*             width: 20px;*/
/*             -webkit-transition: all 0.15s ease-out 0s;*/
/*             -moz-transition: all 0.15s ease-out 0s;*/
/*             transition: all 0.15s ease-out 0s;*/
/*             background: #cbd1d8;*/
/*             border: none;*/
/*             color: #fff;*/
/*             cursor: pointer;*/
/*             display: inline-block;*/
/*             margin-right: 0.5rem;*/
/*             outline: none;*/
/*             position: relative;*/
/*             z-index: 1000;*/
/*         }*/
/*         .option-input:hover {*/
/*             background: #9faab7;*/
/*         }*/
/*         .option-input:checked {*/
/*             background: #40e0d0;*/
/*         }*/
/*         .option-input:checked::before {*/
/*             height: 10px;*/
/*             width: 20px;*/
/*             position: absolute;*/
/*             content: '\2716';*/
/*             display: inline-block;*/
/*             font-size: 15.66667px;*/
/*             text-align: center;*/
/*         }*/
/*         .option-input:checked::after {*/
/*             -webkit-animation: click-wave 0.65s;*/
/*             -moz-animation: click-wave 0.65s;*/
/*             animation: click-wave 0.65s;*/
/*             background: #40e0d0;*/
/*             content: '';*/
/*             display: block;*/
/*             position: relative;*/
/*             z-index: 100;*/
/*         }*/
/*         .option-input.radio {*/
/*             border-radius: 50%;*/
/*         }*/
/*         .option-input.radio::after {*/
/*             border-radius: 50%;*/
/*         }*/
/* */
/*     </style>*/
/* */
/* */
/*     <form action="{{path('matchAparier')}}" method="POST">*/
/*         <table class="table table-striped">*/
/* */
/*             {% for match in matchsAparier %}*/
/* */
/*                 {% if match.idMatch.idJoueur3 == null and match.idMatch.idJoueur4 == null  %}*/
/* */
/*                     {% if match.idMatch.idJoueur1.classementInternational > match.idMatch.idJoueur2.classementInternational %}*/
/*                         {% set quotaJ1 = match.quota * 0.3 %}*/
/*                         {% set quotaJ2 = match.quota * 0.7 %}*/
/*                     {% else %}*/
/*                         {% set quotaJ1 = match.quota * 0.7 %}*/
/*                         {% set quotaJ2 = match.quota * 0.3 %}*/
/*                     {% endif %}*/
/* */
/* */
/*                     <tr >*/
/*                         <td>*/
/*                             {{match.idMatch.idJoueur1.nomJoueur}} {{match.idMatch.idJoueur1.prenomJoueur}}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{quotaJ1}}*/
/*                         </td>*/
/*                         <td>*/
/*                             <input class="option-input radio" type="radio" name="{{loop.index-1}}" value="1" > - */
/*                             <input class="option-input radio" type="radio" name="{{loop.index-1}}" value="2" > */
/*                         </td>*/
/*                         <td>*/
/*                             {{quotaJ2}}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{match.idMatch.idJoueur2.nomJoueur}} {{match.idMatch.idJoueur2.prenomJoueur}}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{match.idMatch.dateMatch|date('d-m-Y')}}*/
/*                         </td>*/
/*                         <td>*/
/*                             <input type="checkbox" class="option-input checkbox" name="joker" value="{{loop.index-1}}" >*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td style="text-align: center" colspan="6">*/
/*                             <a  style="width: 25%" class="btn btn-flat5" href="{{path('consulter_stat', {'id':match.idMatch.idJoueur1.id})}}">Statistique <strong>{{match.idMatch.idJoueur1.nomJoueur}}</strong> </a> */
/*                             <a  class="btn btn-flat3" href="{{path('rencontres_directes', {'idJoueur1':match.idMatch.idJoueur1.id,'idJoueur2':match.idMatch.idJoueur2.id})}}">Recontres directes</a> */
/*                             <a  style="width: 25%" class="btn btn-flat5" href="{{path('consulter_stat', {'id':match.idMatch.idJoueur2.id})}}">Statistique <strong>{{match.idMatch.idJoueur2.nomJoueur}}</strong> </a> */
/*                         </td>*/
/*                     </tr>*/
/* */
/*                 {% else %}*/
/* */
/* */
/*                     {% if match.idMatch.idJoueur1.classementInternational + match.idMatch.idJoueur2.classementInternational  */
/*                 > match.idMatch.idJoueur3.classementInternational + match.idMatch.idJoueur4.classementInternational %}*/
/*                     {% set quotaJ1 = match.quota * 0.3 %}*/
/*                     {% set quotaJ2 = match.quota * 0.7 %}*/
/*                 {% else %}*/
/*                     {% set quotaJ1 = match.quota * 0.7 %}*/
/*                     {% set quotaJ2 = match.quota * 0.3 %}*/
/*                 {% endif %}*/
/* */
/* */
/* */
/* */
/* */
/*                 <tr>*/
/*                     <td>*/
/*                         {{match.idMatch.idJoueur1.nomJoueur}} {{match.idMatch.idJoueur1.prenomJoueur}} & */
/*                         {{match.idMatch.idJoueur2.nomJoueur}} {{match.idMatch.idJoueur2.prenomJoueur}}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{quotaJ1}}*/
/*                     </td>*/
/*                     <td>*/
/*                         <input class="option-input radio" type="radio" name="{{loop.index-1}}" */
/*                                value="1" > - */
/*                         <input class="option-input radio" type="radio" name="{{loop.index-1}}" */
/*                                value="2" > */
/*                     </td>*/
/*                     <td>*/
/*                         {{quotaJ2}}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{match.idMatch.idJoueur3.nomJoueur}} {{match.idMatch.idJoueur3.prenomJoueur}} & */
/*                         {{match.idMatch.idJoueur4.nomJoueur}} {{match.idMatch.idJoueur4.prenomJoueur}}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{match.idMatch.dateMatch|date('d-m-Y')}}*/
/*                     </td>*/
/*                     <td>*/
/*                         <input type="checkbox" class="option-input checkbox" name="joker" value="{{loop.index-1}}" >*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td style="text-align: center" colspan="6">*/
/*                         <a  style="width: 22%" class="btn btn-flat5" href="{{path('consulter_stat', {'id':match.idMatch.idJoueur1.id})}}">Statistique <strong>{{match.idMatch.idJoueur1.nomJoueur}}</strong> </a> */
/*                         <a  style="width: 22%" class="btn btn-flat5" href="{{path('consulter_stat', {'id':match.idMatch.idJoueur2.id})}}">Statistique <strong>{{match.idMatch.idJoueur2.nomJoueur}}</strong> </a> */
/*                         <a  style="width: 22%" class="btn btn-flat5" href="{{path('consulter_stat', {'id':match.idMatch.idJoueur3.id})}}">Statistique <strong>{{match.idMatch.idJoueur3.nomJoueur}}</strong> </a> */
/*                         <a  style="width: 22%" class="btn btn-flat5" href="{{path('consulter_stat', {'id':match.idMatch.idJoueur4.id})}}">Statistique <strong>{{match.idMatch.idJoueur4.nomJoueur}}</strong> </a> */
/*                     </td>*/
/*                 </tr>*/
/*                 {% endif %}*/
/*                     {%endfor%}*/
/*                     </table>*/
/* */
/*                     {% if is_granted('ROLE_ADHERENT') %}*/
/*                         <input style="margin-left: 60%;width: 30%" placeholder="Valeur Mise" */
/*                                type="number" name="mise" id="mise" required min="0" max="100" value="0" class="form-control" */
/*                                onchange="actionPronostic({{app.user.id}})" onkeyup="actionPronostic({{app.user.id}})"*/
/*                                > <br>*/
/*                         <div id='pronostic'></div>*/
/*                     {% endif %}*/
/*                 </form>*/
/* */
/* */
/* */
/* */
/*                 {% endblock %}*/
