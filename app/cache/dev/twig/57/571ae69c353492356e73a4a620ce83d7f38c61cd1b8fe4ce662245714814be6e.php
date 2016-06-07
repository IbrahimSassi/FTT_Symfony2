<?php

/* FTTMedecinBundle:CompteRendu:MesComptesRendus.html.twig */
class __TwigTemplate_5d074e4453509f8969048822b114b80be05d7c12d8660e677ddfecf57c0affac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTMedecinBundle::layoutMedecin.html.twig", "FTTMedecinBundle:CompteRendu:MesComptesRendus.html.twig", 1);
        $this->blocks = array(
            'bodyAdmin' => array($this, 'block_bodyAdmin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FTTMedecinBundle::layoutMedecin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 3
        echo "
    <center>
        ";
        // line 5
        if (twig_test_empty((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")))) {
            // line 6
            echo "            <br><br><br>
            <div id=\"MonElement\" class=\"EX_div\" style=\"diplay:block;\"> <font color=#FF0000> 
                <h1 align='center' style='color:red;'> Vous n'avez aucun test </h1></font> 
            </div> 
        ";
        } else {
            // line 11
            echo "            <h1> Vos Tests :</h1>
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["test"]);
            foreach ($context['_seq'] as $context["key"] => $context["test"]) {
                // line 13
                echo "                ";
                if (($this->getAttribute($context["test"], "resultat", array()) == 1)) {
                    // line 14
                    echo "                    <table border=\"1\" width=\"40%\"  >
                        <tr>
                            <td bordercolor=\"#000000\" bgcolor=\"red\" >
                        <center>
                            <font color=\"black\">
                            <h5> Date : ";
                    // line 19
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["test"], "idJoueurTester", array()), "idMatch", array()), "dateMatch", array()), "d/m/Y"), "html", null, true);
                    echo "</h5>
                            <h5> Evenement : ";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["test"], "idJoueurTester", array()), "idMatch", array()), "idEvenement", array()), "nomEvenement", array()), "html", null, true);
                    echo " </h5>
                            <h5> Type : ";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["test"], "idJoueurTester", array()), "idMatch", array()), "typeMatch", array()), "html", null, true);
                    echo " </h5>
                            <h5> Complexe : ";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["test"], "idJoueurTester", array()), "idMatch", array()), "idStade", array()), "idComplexe", array()), "nomComplexe", array()), "html", null, true);
                    echo " </h5>
                            <h5> Stade : ";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["test"], "idJoueurTester", array()), "idMatch", array()), "idStade", array()), "nomStade", array()), "html", null, true);
                    echo " </h5>
                            ";
                    // line 24
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["joueurs"]) ? $context["joueurs"] : $this->getContext($context, "joueurs")));
                    foreach ($context['_seq'] as $context["_key"] => $context["joueur"]) {
                        // line 25
                        echo "                                ";
                        if (($this->getAttribute($context["joueur"], "id", array()) == $this->getAttribute($this->getAttribute($context["test"], "idJoueurTester", array()), "joueurChoisi", array()))) {
                            // line 26
                            echo "                                    <h5>Joueur : ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["joueurs"]) ? $context["joueurs"] : $this->getContext($context, "joueurs")), $context["key"], array(), "array"), "nomJoueur", array()), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["joueurs"]) ? $context["joueurs"] : $this->getContext($context, "joueurs")), $context["key"], array(), "array"), "prenomJoueur", array()), "html", null, true);
                            echo "</h5>
                                    <h5>Club : ";
                            // line 27
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["joueurs"]) ? $context["joueurs"] : $this->getContext($context, "joueurs")), $context["key"], array(), "array"), "idClub", array()), "nomClub", array()), "html", null, true);
                            echo " </h5>
                                ";
                        }
                        // line 29
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['joueur'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 30
                    echo "                            </font>
                        </center>
                        </td>
                        <td>
                        <center>
                            <a class=\"btn btn-info\" id=\"show-";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "id", array()), "html", null, true);
                    echo "\" style=\"font-size: 100%\"> Modifier <br>compte rendu   
                                <i class=\"fa fa-pencil\"  aria-hidden=\"true\"></i>
                            </a>
                        </center>
                        </td>
                        </tr>
                    </table>
                    <br>
                    <div id=\"div2-";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "id", array()), "html", null, true);
                    echo "\" style=\"margin-right: 60%\">
                        <table border=\"5\" width=\"100%\" style=\"margin-left: 75%\" >
                            <tr>
                                <td>
                            <center>
                                <form method=\"POST\" action=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifierCompte_rendu", array("id" => $this->getAttribute($context["test"], "id", array()))), "html", null, true);
                    echo "\">
                                    <br>
                                    <h3>Resultat : 
                                        <select name=\"resultatTest\" id=\"resultatTest\" size=\"1\" required=\"required\">
                                            <option></option>
                                            <option value=\"1\" selected=\"selected\">+</option>
                                            <option value=\"-1\">-</option>
                                        </select></h3>

                                    <h4><textarea rows=\"5\" name=\"description\" id=\"description\" style=\"height:150%; width:80%; display:yes;\" required=\"required\" >
                                            ";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "description", array()), "html", null, true);
                    echo " </textarea></h4> 
                                    <center>
                                        <button class=\"fa fa-check\" style=\"font-size: 2em;\"></button>
                                    </center>
                                </form>
                            </center>
                            </td>
                            </tr>
                        </table>
                    </div>
                ";
                } elseif (($this->getAttribute(                // line 68
$context["test"], "resultat", array()) ==  -1)) {
                    // line 69
                    echo "                    <table border=\"1\" width=\"40%\"  >
                        <tr>
                            <td bordercolor=\"#000000\" bgcolor=\"green\" >
                        <center>
                            <font color=\"black\">
                            <h5> Date : ";
                    // line 74
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["test"], "idJoueurTester", array()), "idMatch", array()), "dateMatch", array()), "d/m/Y"), "html", null, true);
                    echo "</h5>
                            <h5> Evenement : ";
                    // line 75
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["test"], "idJoueurTester", array()), "idMatch", array()), "idEvenement", array()), "nomEvenement", array()), "html", null, true);
                    echo " </h5>
                            <h5> Type : ";
                    // line 76
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["test"], "idJoueurTester", array()), "idMatch", array()), "typeMatch", array()), "html", null, true);
                    echo " </h5>
                            <h5> Complexe : ";
                    // line 77
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["test"], "idJoueurTester", array()), "idMatch", array()), "idStade", array()), "idComplexe", array()), "nomComplexe", array()), "html", null, true);
                    echo " </h5>
                            <h5> Stade : ";
                    // line 78
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["test"], "idJoueurTester", array()), "idMatch", array()), "idStade", array()), "nomStade", array()), "html", null, true);
                    echo " </h5>
                            </font>
                        </center>
                        </td>
                        <td>
                        <center>
                            <a class=\"btn btn-info\" id=\"show-";
                    // line 84
                    echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "id", array()), "html", null, true);
                    echo "\" style=\"font-size: 100%\"> Rédiger un nouveau <br>compte rendu    
                                <i class=\"fa fa-pencil\"  aria-hidden=\"true\"></i>
                            </a>
                        </center>
                        </td>
                        </tr>
                    </table>
                    <br>
                    <div id=\"div2-";
                    // line 92
                    echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "id", array()), "html", null, true);
                    echo "\" style=\"margin-right: 60%\">
                        <table border=\"5\" width=\"100%\" style=\"margin-left: 75%\" >
                            <tr>
                                <td>
                            <center>
                                <form method=\"POST\" action=\"";
                    // line 97
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifierCompte_rendu", array("id" => $this->getAttribute($context["test"], "id", array()))), "html", null, true);
                    echo "\">
                                    <br>
                                    <h3>Resultat : 
                                        <select name=\"resultatTest\" id=\"resultatTest\" size=\"1\" required=\"required\">
                                            <option></option>
                                            <option value=\"1\">+</option>
                                            <option value=\"-1\" selected=\"selected\">-</option>
                                        </select></h3>

                                    <h4><textarea rows=\"5\" name=\"description\" id=\"description\" style=\"height:150%; width:80%; display:yes;\" required=\"required\" >
                                            ";
                    // line 107
                    echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "description", array()), "html", null, true);
                    echo " </textarea></h4> 
                                    <center>
                                        <button class=\"fa fa-check\" style=\"font-size: 2em;\"></button>
                                    </center>
                                </form>
                            </center>
                            </td>
                            </tr>
                        </table>
                    </div>
                ";
                }
                // line 118
                echo "
                <br>


            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['test'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "        ";
        }
        // line 124
        echo "        <div class=\"navigation\">
            ";
        // line 125
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")));
        echo "
        </div>
    </center>

    <script language=\"javascript\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jQuery/jquery-2.2.0.js"), "html", null, true);
        echo "\"></script>
    <script>
        function clignotement() {
            if (document.getElementById(\"MonElement\").style.display == \"block\")
                document.getElementById(\"MonElement\").style.display = \"none\";
            else
                document.getElementById(\"MonElement\").style.display = \"block\";
        }
        setInterval(\"clignotement()\", 700);
    </script> 
    <script>
        \$(document).ready(
                function () {
        ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["test"]);
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 143
            echo "                        \$(\"#div2-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "id", array()), "html", null, true);
            echo "\").hide();
                        \$(\"#show-";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "id", array()), "html", null, true);
            echo "\").click(
                                function () {
                                    \$(\"#div2-";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "id", array()), "html", null, true);
            echo "\").slideToggle();
                                });

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "                    });

    </script>

";
    }

    public function getTemplateName()
    {
        return "FTTMedecinBundle:CompteRendu:MesComptesRendus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 150,  291 => 146,  286 => 144,  281 => 143,  277 => 142,  261 => 129,  254 => 125,  251 => 124,  248 => 123,  238 => 118,  224 => 107,  211 => 97,  203 => 92,  192 => 84,  183 => 78,  179 => 77,  175 => 76,  171 => 75,  167 => 74,  160 => 69,  158 => 68,  145 => 58,  132 => 48,  124 => 43,  113 => 35,  106 => 30,  100 => 29,  95 => 27,  88 => 26,  85 => 25,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  65 => 20,  61 => 19,  54 => 14,  51 => 13,  47 => 12,  44 => 11,  37 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "FTTMedecinBundle::layoutMedecin.html.twig" %}*/
/* {% block bodyAdmin %}*/
/* */
/*     <center>*/
/*         {% if test is empty %}*/
/*             <br><br><br>*/
/*             <div id="MonElement" class="EX_div" style="diplay:block;"> <font color=#FF0000> */
/*                 <h1 align='center' style='color:red;'> Vous n'avez aucun test </h1></font> */
/*             </div> */
/*         {% else %}*/
/*             <h1> Vos Tests :</h1>*/
/*             {% for key,test in test %}*/
/*                 {% if test.resultat == 1 %}*/
/*                     <table border="1" width="40%"  >*/
/*                         <tr>*/
/*                             <td bordercolor="#000000" bgcolor="red" >*/
/*                         <center>*/
/*                             <font color="black">*/
/*                             <h5> Date : {{test.idJoueurTester.idMatch.dateMatch | date('d/m/Y')}}</h5>*/
/*                             <h5> Evenement : {{test.idJoueurTester.idMatch.idEvenement.nomEvenement }} </h5>*/
/*                             <h5> Type : {{test.idJoueurTester.idMatch.typeMatch }} </h5>*/
/*                             <h5> Complexe : {{test.idJoueurTester.idMatch.idStade.idComplexe.nomComplexe }} </h5>*/
/*                             <h5> Stade : {{test.idJoueurTester.idMatch.idStade.nomStade }} </h5>*/
/*                             {% for joueur in joueurs %}*/
/*                                 {% if joueur.id == test.idJoueurTester.joueurChoisi %}*/
/*                                     <h5>Joueur : {{joueurs[key].nomJoueur}} {{joueurs[key].prenomJoueur}}</h5>*/
/*                                     <h5>Club : {{joueurs[key].idClub.nomClub}} </h5>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                             </font>*/
/*                         </center>*/
/*                         </td>*/
/*                         <td>*/
/*                         <center>*/
/*                             <a class="btn btn-info" id="show-{{test.id}}" style="font-size: 100%"> Modifier <br>compte rendu   */
/*                                 <i class="fa fa-pencil"  aria-hidden="true"></i>*/
/*                             </a>*/
/*                         </center>*/
/*                         </td>*/
/*                         </tr>*/
/*                     </table>*/
/*                     <br>*/
/*                     <div id="div2-{{test.id}}" style="margin-right: 60%">*/
/*                         <table border="5" width="100%" style="margin-left: 75%" >*/
/*                             <tr>*/
/*                                 <td>*/
/*                             <center>*/
/*                                 <form method="POST" action="{{path('modifierCompte_rendu',{'id':test.id})}}">*/
/*                                     <br>*/
/*                                     <h3>Resultat : */
/*                                         <select name="resultatTest" id="resultatTest" size="1" required="required">*/
/*                                             <option></option>*/
/*                                             <option value="1" selected="selected">+</option>*/
/*                                             <option value="-1">-</option>*/
/*                                         </select></h3>*/
/* */
/*                                     <h4><textarea rows="5" name="description" id="description" style="height:150%; width:80%; display:yes;" required="required" >*/
/*                                             {{test.description}} </textarea></h4> */
/*                                     <center>*/
/*                                         <button class="fa fa-check" style="font-size: 2em;"></button>*/
/*                                     </center>*/
/*                                 </form>*/
/*                             </center>*/
/*                             </td>*/
/*                             </tr>*/
/*                         </table>*/
/*                     </div>*/
/*                 {% elseif test.resultat == -1 %}*/
/*                     <table border="1" width="40%"  >*/
/*                         <tr>*/
/*                             <td bordercolor="#000000" bgcolor="green" >*/
/*                         <center>*/
/*                             <font color="black">*/
/*                             <h5> Date : {{test.idJoueurTester.idMatch.dateMatch | date('d/m/Y')}}</h5>*/
/*                             <h5> Evenement : {{test.idJoueurTester.idMatch.idEvenement.nomEvenement }} </h5>*/
/*                             <h5> Type : {{test.idJoueurTester.idMatch.typeMatch }} </h5>*/
/*                             <h5> Complexe : {{test.idJoueurTester.idMatch.idStade.idComplexe.nomComplexe }} </h5>*/
/*                             <h5> Stade : {{test.idJoueurTester.idMatch.idStade.nomStade }} </h5>*/
/*                             </font>*/
/*                         </center>*/
/*                         </td>*/
/*                         <td>*/
/*                         <center>*/
/*                             <a class="btn btn-info" id="show-{{test.id}}" style="font-size: 100%"> Rédiger un nouveau <br>compte rendu    */
/*                                 <i class="fa fa-pencil"  aria-hidden="true"></i>*/
/*                             </a>*/
/*                         </center>*/
/*                         </td>*/
/*                         </tr>*/
/*                     </table>*/
/*                     <br>*/
/*                     <div id="div2-{{test.id}}" style="margin-right: 60%">*/
/*                         <table border="5" width="100%" style="margin-left: 75%" >*/
/*                             <tr>*/
/*                                 <td>*/
/*                             <center>*/
/*                                 <form method="POST" action="{{path('modifierCompte_rendu',{'id':test.id})}}">*/
/*                                     <br>*/
/*                                     <h3>Resultat : */
/*                                         <select name="resultatTest" id="resultatTest" size="1" required="required">*/
/*                                             <option></option>*/
/*                                             <option value="1">+</option>*/
/*                                             <option value="-1" selected="selected">-</option>*/
/*                                         </select></h3>*/
/* */
/*                                     <h4><textarea rows="5" name="description" id="description" style="height:150%; width:80%; display:yes;" required="required" >*/
/*                                             {{test.description}} </textarea></h4> */
/*                                     <center>*/
/*                                         <button class="fa fa-check" style="font-size: 2em;"></button>*/
/*                                     </center>*/
/*                                 </form>*/
/*                             </center>*/
/*                             </td>*/
/*                             </tr>*/
/*                         </table>*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 <br>*/
/* */
/* */
/*             {% endfor %}*/
/*         {% endif %}*/
/*         <div class="navigation">*/
/*             {{ knp_pagination_render(test) }}*/
/*         </div>*/
/*     </center>*/
/* */
/*     <script language="javascript" src="{{asset('js/jQuery/jquery-2.2.0.js')}}"></script>*/
/*     <script>*/
/*         function clignotement() {*/
/*             if (document.getElementById("MonElement").style.display == "block")*/
/*                 document.getElementById("MonElement").style.display = "none";*/
/*             else*/
/*                 document.getElementById("MonElement").style.display = "block";*/
/*         }*/
/*         setInterval("clignotement()", 700);*/
/*     </script> */
/*     <script>*/
/*         $(document).ready(*/
/*                 function () {*/
/*         {% for test in test %}*/
/*                         $("#div2-{{test.id}}").hide();*/
/*                         $("#show-{{test.id}}").click(*/
/*                                 function () {*/
/*                                     $("#div2-{{test.id}}").slideToggle();*/
/*                                 });*/
/* */
/*         {% endfor %}*/
/*                     });*/
/* */
/*     </script>*/
/* */
/* {% endblock %}*/
