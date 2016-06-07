<?php

/* FTTMedecinBundle:CompteRendu:PublierResultat.html.twig */
class __TwigTemplate_2ff75cb816e852141edf2239e5f758b576b090259eef51abb7484966396f01a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTMedecinBundle::layoutMedecin.html.twig", "FTTMedecinBundle:CompteRendu:PublierResultat.html.twig", 1);
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
            foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
                // line 13
                echo "                <table border=\"1\" width=\"40%\" >
                    <tr>
                        <td>
                    <center>
                        <h5> Date : ";
                // line 17
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["test"], "idJoueurTester", array()), "idMatch", array()), "dateMatch", array()), "d/m/Y"), "html", null, true);
                echo "</h5>
                        <h5> Evenement : ";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["test"], "idJoueurTester", array()), "idMatch", array()), "idEvenement", array()), "nomEvenement", array()), "html", null, true);
                echo " </h5>
                        <h5> Type : ";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["test"], "idJoueurTester", array()), "idMatch", array()), "typeMatch", array()), "html", null, true);
                echo " </h5>
                        <h5> Complexe : ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["test"], "idJoueurTester", array()), "idMatch", array()), "idStade", array()), "idComplexe", array()), "nomComplexe", array()), "html", null, true);
                echo " </h5>
                        <h5> Stade : ";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["test"], "idJoueurTester", array()), "idMatch", array()), "idStade", array()), "nomStade", array()), "html", null, true);
                echo " </h5>
                        ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["joueurs"]) ? $context["joueurs"] : $this->getContext($context, "joueurs")));
                foreach ($context['_seq'] as $context["_key"] => $context["joueur"]) {
                    // line 23
                    echo "                            ";
                    if (($this->getAttribute($context["joueur"], "id", array()) == $this->getAttribute($this->getAttribute($context["test"], "idJoueurTester", array()), "joueurChoisi", array()))) {
                        // line 24
                        echo "                                <h5> Joueur : ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "nomJoueur", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "prenomJoueur", array()), "html", null, true);
                        echo " </h5>
                                <h5> Club : ";
                        // line 25
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["joueur"], "idClub", array()), "nomClub", array()), "html", null, true);
                        echo "</h5>
                            ";
                    }
                    // line 27
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['joueur'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "                    </center>
                    </td>
                    <td>
                    <center>
                        <a class=\"btn btn-info\" id=\"show-";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "id", array()), "html", null, true);
                echo "\" style=\"font-size: 100%\"> Publier Resultat Test   
                            <i class=\"fa fa-pencil\"  aria-hidden=\"true\"></i>
                        </a>
                    </center>
                    </td>
                    </tr>
                </table>
                <br>
                <div id=\"div2-";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "id", array()), "html", null, true);
                echo "\" style=\"margin-right: 60%\">
                    <table border=\"5\" width=\"100%\" style=\"margin-left: 75%\" >
                        <tr>
                            <td>
                        <center>
                            <form method=\"POST\" action=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajout_compte_rendu", array("id" => $this->getAttribute($context["test"], "id", array()))), "html", null, true);
                echo "\">
                                <br>
                                <h3>Resultat : 
                                    <select name=\"resultatTest\" id=\"resultatTest\" size=\"1\" required=\"required\">
                                        <option></option>
                                        <option value=\"1\">+</option>
                                        <option value=\"-1\">-</option>
                                    </select></h3>

                                <h4><textarea rows=\"5\" name=\"description\" id=\"description\" style=\"height:150%; width:80%; display:yes;\" required=\"required\" >
Description du déroulement du test: </textarea></h4> 
                                <center>
                                    <button class=\"fa fa-check\" style=\"font-size: 2em;\"></button>
                                </center>
                            </form>
                        </center>
                        </td>
                        </tr>
                    </table>
                </div>
                <br>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "        ";
        }
        // line 68
        echo "        <div class=\"navigation\">
            ";
        // line 69
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")));
        echo "
        </div>
    </center>

    <script language=\"javascript\" src=\"";
        // line 73
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
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["test"]);
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 87
            echo "                        \$(\"#div2-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "id", array()), "html", null, true);
            echo "\").hide();
                        \$(\"#show-";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "id", array()), "html", null, true);
            echo "\").click(
                                function () {
                                    \$(\"#div2-";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "id", array()), "html", null, true);
            echo "\").slideToggle();
                                });

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                    });

    </script>

";
    }

    public function getTemplateName()
    {
        return "FTTMedecinBundle:CompteRendu:PublierResultat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 94,  198 => 90,  193 => 88,  188 => 87,  184 => 86,  168 => 73,  161 => 69,  158 => 68,  155 => 67,  127 => 45,  119 => 40,  108 => 32,  102 => 28,  96 => 27,  91 => 25,  84 => 24,  81 => 23,  77 => 22,  73 => 21,  69 => 20,  65 => 19,  61 => 18,  57 => 17,  51 => 13,  47 => 12,  44 => 11,  37 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
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
/*             {% for test in test %}*/
/*                 <table border="1" width="40%" >*/
/*                     <tr>*/
/*                         <td>*/
/*                     <center>*/
/*                         <h5> Date : {{test.idJoueurTester.idMatch.dateMatch | date('d/m/Y')}}</h5>*/
/*                         <h5> Evenement : {{test.idJoueurTester.idMatch.idEvenement.nomEvenement }} </h5>*/
/*                         <h5> Type : {{test.idJoueurTester.idMatch.typeMatch }} </h5>*/
/*                         <h5> Complexe : {{test.idJoueurTester.idMatch.idStade.idComplexe.nomComplexe }} </h5>*/
/*                         <h5> Stade : {{test.idJoueurTester.idMatch.idStade.nomStade }} </h5>*/
/*                         {% for joueur in joueurs %}*/
/*                             {% if joueur.id == test.idJoueurTester.joueurChoisi %}*/
/*                                 <h5> Joueur : {{joueur.nomJoueur }} {{joueur.prenomJoueur }} </h5>*/
/*                                 <h5> Club : {{joueur.idClub.nomClub }}</h5>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </center>*/
/*                     </td>*/
/*                     <td>*/
/*                     <center>*/
/*                         <a class="btn btn-info" id="show-{{test.id}}" style="font-size: 100%"> Publier Resultat Test   */
/*                             <i class="fa fa-pencil"  aria-hidden="true"></i>*/
/*                         </a>*/
/*                     </center>*/
/*                     </td>*/
/*                     </tr>*/
/*                 </table>*/
/*                 <br>*/
/*                 <div id="div2-{{test.id}}" style="margin-right: 60%">*/
/*                     <table border="5" width="100%" style="margin-left: 75%" >*/
/*                         <tr>*/
/*                             <td>*/
/*                         <center>*/
/*                             <form method="POST" action="{{path('ajout_compte_rendu',{'id':test.id})}}">*/
/*                                 <br>*/
/*                                 <h3>Resultat : */
/*                                     <select name="resultatTest" id="resultatTest" size="1" required="required">*/
/*                                         <option></option>*/
/*                                         <option value="1">+</option>*/
/*                                         <option value="-1">-</option>*/
/*                                     </select></h3>*/
/* */
/*                                 <h4><textarea rows="5" name="description" id="description" style="height:150%; width:80%; display:yes;" required="required" >*/
/* Description du déroulement du test: </textarea></h4> */
/*                                 <center>*/
/*                                     <button class="fa fa-check" style="font-size: 2em;"></button>*/
/*                                 </center>*/
/*                             </form>*/
/*                         </center>*/
/*                         </td>*/
/*                         </tr>*/
/*                     </table>*/
/*                 </div>*/
/*                 <br>*/
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
