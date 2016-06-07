<?php

/* FTTAdminBundle:MatchInfo:ChoisirMatchaParier.html.twig */
class __TwigTemplate_fe8df34a52ec81feff579e23737e65dc4f91ff48bb9d2f5bbd1f7319282cc752 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:MatchInfo:ChoisirMatchaParier.html.twig", 1);
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

    // line 3
    public function block_bodyAdmin($context, array $blocks = array())
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

    </style>

    <form action=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("list_match_A_parier");
        echo "\" method=\"POST\">
        <table class=\"table table-bordered\" id=\"dev-table\" >
            <thead>
                <tr>
                    <th>
                        #
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
                    <th>
                        Quota
                    </th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matchAparier"]) ? $context["matchAparier"] : $this->getContext($context, "matchAparier")));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 144
            echo "                    <tr>
                        <td>
                            ";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "id", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 149
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["match"], "dateMatch", array()), "d-m-Y"), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "typeMatch", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idArbitre", array()), "nomUser", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur1", array()), "nomJoueur", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur2", array()), "nomJoueur", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 164
            if (($this->getAttribute($context["match"], "idJoueur3", array()) != null)) {
                // line 165
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur3", array()), "nomJoueur", array()), "html", null, true);
                echo "
                            ";
            } else {
                // line 167
                echo "                                null
                            ";
            }
            // line 169
            echo "                        </td>
                        <td>
                            ";
            // line 171
            if (($this->getAttribute($context["match"], "idJoueur4", array()) != null)) {
                // line 172
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur4", array()), "nomJoueur", array()), "html", null, true);
                echo "
                            ";
            } else {
                // line 174
                echo "                                null
                            ";
            }
            // line 176
            echo "                        </td>
                        <td>
                            ";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idStade", array()), "nomStade", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idEvenement", array()), "nomEvenement", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            <input type=\"number\" name=\"";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "id", array()), "html", null, true);
            echo "\" >
                        </td>
                        <td>
                            <input type=\"checkbox\" name=\"choix-";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "id", array()), "html", null, true);
            echo "\" value=\"match-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "id", array()), "html", null, true);
            echo "\" >
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "
            </tbody>
        </table>
        <button type=\"submit\" class=\"btn btn-dark\" >Valider</button>

    </form>
";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:MatchInfo:ChoisirMatchaParier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 191,  269 => 187,  263 => 184,  257 => 181,  251 => 178,  247 => 176,  243 => 174,  237 => 172,  235 => 171,  231 => 169,  227 => 167,  221 => 165,  219 => 164,  213 => 161,  207 => 158,  201 => 155,  195 => 152,  189 => 149,  183 => 146,  179 => 144,  175 => 143,  135 => 106,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* {% block bodyAdmin %}*/
/* */
/* */
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
/* */
/*     </style>*/
/* */
/*     <form action="{{path('list_match_A_parier')}}" method="POST">*/
/*         <table class="table table-bordered" id="dev-table" >*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>*/
/*                         #*/
/*                     </th>*/
/*                     <th>*/
/*                         Type Match*/
/*                     </th>*/
/*                     <th>*/
/*                         Arbitre*/
/*                     </th>*/
/*                     <th>*/
/*                         Nom Joueur1*/
/*                     </th>*/
/*                     <th>*/
/*                         Nom Joueur2*/
/*                     </th>*/
/*                     <th>*/
/*                         Nom Joueur3*/
/*                     </th>*/
/*                     <th>*/
/*                         Nom Joueur4*/
/*                     </th>*/
/*                     <th>*/
/*                         Stade*/
/*                     </th>*/
/*                     <th>*/
/*                         Evenement*/
/*                     </th>*/
/*                     <th>*/
/*                         Quota*/
/*                     </th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% for match in matchAparier %}*/
/*                     <tr>*/
/*                         <td>*/
/*                             {{match.id}}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{match.dateMatch|date('d-m-Y')}}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{match.typeMatch}}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{match.idArbitre.nomUser}}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{match.idJoueur1.nomJoueur}}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{match.idJoueur2.nomJoueur}}*/
/*                         </td>*/
/*                         <td>*/
/*                             {% if match.idJoueur3 != null %}*/
/*                                 {{match.idJoueur3.nomJoueur}}*/
/*                             {% else %}*/
/*                                 null*/
/*                             {% endif %}*/
/*                         </td>*/
/*                         <td>*/
/*                             {% if match.idJoueur4 != null %}*/
/*                                 {{match.idJoueur4.nomJoueur}}*/
/*                             {% else %}*/
/*                                 null*/
/*                             {% endif %}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{match.idStade.nomStade}}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{match.idEvenement.nomEvenement}}*/
/*                         </td>*/
/*                         <td>*/
/*                             <input type="number" name="{{match.id}}" >*/
/*                         </td>*/
/*                         <td>*/
/*                             <input type="checkbox" name="choix-{{match.id}}" value="match-{{match.id}}" >*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/* */
/*             </tbody>*/
/*         </table>*/
/*         <button type="submit" class="btn btn-dark" >Valider</button>*/
/* */
/*     </form>*/
/* {% endblock %}*/
/* */
/* */
/* */
