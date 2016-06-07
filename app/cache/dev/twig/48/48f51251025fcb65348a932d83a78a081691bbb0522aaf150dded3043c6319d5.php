<?php

/* FTTResponsableBundle:OrganiserTest:choisirJoueur.html.twig */
class __TwigTemplate_1cbf9b6e0c534bf86c9f52304bf881ca3628355a822fa57eb177be558f03f8c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTResponsableBundle::layoutResponsable.html.twig", "FTTResponsableBundle:OrganiserTest:choisirJoueur.html.twig", 1);
        $this->blocks = array(
            'bodyAdmin' => array($this, 'block_bodyAdmin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FTTResponsableBundle::layoutResponsable.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 3
        echo "    <center>
        ";
        // line 4
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "quotaResponsable", array()) > 0)) {
            // line 5
            echo "            ";
            if (twig_test_empty((isset($context["matchs"]) ? $context["matchs"] : $this->getContext($context, "matchs")))) {
                // line 6
                echo "                <br><br><br>
                <div id=\"MonElement\" class=\"EX_div\" style=\"diplay:block;\"> <font color=#FF0000> 
                    <h1 align='center' style='color:red;'> Il n'y a aucun joueur a tester </h1></font> 
                </div> 
            ";
            } else {
                // line 11
                echo "                <h1> Matchs :</h1>
                ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["matchs"]) ? $context["matchs"] : $this->getContext($context, "matchs")));
                foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
                    // line 13
                    echo "                    ";
                    if (($this->getAttribute($context["match"], "idJoueur3", array()) == null)) {
                        // line 14
                        echo "                        <h3><i class=\"fa fa-hashtag\" style=\"color: black\"></i> Match à 2 joueurs:</h3>
                        <table border=\"1\" width=\"40%\" >
                            <tr>
                                <td>
                            <center>
                                <h5> Date : ";
                        // line 19
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["match"], "dateMatch", array()), "d/m/Y"), "html", null, true);
                        echo "</h5>
                                <h5> Evenement : ";
                        // line 20
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idEvenement", array()), "nomEvenement", array()), "html", null, true);
                        echo " </h5>
                                <h5> Complexe : ";
                        // line 21
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idStade", array()), "idComplexe", array()), "nomComplexe", array()), "html", null, true);
                        echo " </h5>
                                <h5> Stade : ";
                        // line 22
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idStade", array()), "nomStade", array()), "html", null, true);
                        echo " </h5>
                                <h5> Arbitre : ";
                        // line 23
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idArbitre", array()), "nomUser", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idArbitre", array()), "PrenomUser", array()), "html", null, true);
                        echo "</h5>
                            </center>
                            </td>
                            <td>
                            <center>
                                <form method=\"POST\" action=\"";
                        // line 28
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hasard_test", array("id" => $this->getAttribute($context["match"], "id", array()))), "html", null, true);
                        echo "\">
                                    <label><input type=\"radio\" name=\"choix-joueur\" id=\"choix-joueur\" value=\"1\" required=\"required\"> 1 joueur</label>
                                    <label><input type=\"radio\" name=\"choix-joueur\" id=\"choix-joueur\" value=\"2\" required=\"required\"> 2 joueur</label>
                                    <br>
                                    <button class=\"btn btn-success\" >Hasard !</button>
                                </form>
                            </center>
                            </td>
                            </tr>
                        </table>
                    ";
                    }
                    // line 39
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["matchs"]) ? $context["matchs"] : $this->getContext($context, "matchs")));
                foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
                    // line 41
                    echo "                    ";
                    if (($this->getAttribute($context["match"], "idJoueur3", array()) != null)) {
                        // line 42
                        echo "                        <h3><i class=\"fa fa-hashtag\" style=\"color: black\"></i> Match à 4 joueurs:</h3>
                        <table border=\"1\" width=\"40%\" >
                            <tr>
                                <td>
                            <center>
                                <h5> Date : ";
                        // line 47
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["match"], "dateMatch", array()), "d/m/Y"), "html", null, true);
                        echo "</h5>
                                <h5> Evenement : ";
                        // line 48
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idEvenement", array()), "nomEvenement", array()), "html", null, true);
                        echo " </h5>
                                <h5> Type : ";
                        // line 49
                        echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "typeMatch", array()), "html", null, true);
                        echo " </h5>
                                <h5> Complexe : ";
                        // line 50
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idStade", array()), "idComplexe", array()), "nomComplexe", array()), "html", null, true);
                        echo " </h5>
                                <h5> Stade : ";
                        // line 51
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idStade", array()), "nomStade", array()), "html", null, true);
                        echo " </h5>
                                <h5> Arbitre : ";
                        // line 52
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idArbitre", array()), "nomUser", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idArbitre", array()), "PrenomUser", array()), "html", null, true);
                        echo "</h5>
                            </center>
                            </td>
                            <td>
                            <center>
                                <form method=\"POST\" action=\"";
                        // line 57
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hasard_test", array("id" => $this->getAttribute($context["match"], "id", array()))), "html", null, true);
                        echo "\">
                                    <label><input type=\"radio\" name=\"choix-joueur\" id=\"choix-joueur\" value=\"1\" required=\"required\"> 1 joueur</label>
                                    <label><input type=\"radio\" name=\"choix-joueur\" id=\"choix-joueur\" value=\"2\" required=\"required\"> 2 joueur</label>
                                    <br>
                                    <label><input type=\"radio\" name=\"choix-joueur\" id=\"choix-joueur\" value=\"3\" required=\"required\"> 3 joueur</label>
                                    <label><input type=\"radio\" name=\"choix-joueur\" id=\"choix-joueur\" value=\"4\" required=\"required\"> 4 joueur</label>
                                    <br>
                                    <button class=\"btn btn-success\" >Hasard !</button>
                                </form>

                            </center>
                            </td>
                            </tr>
                        </table>                    
                    ";
                    }
                    // line 72
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "                ";
                // line 74
                echo "                <div class=\"navigation\">
                    ";
                // line 75
                echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["matchs"]) ? $context["matchs"] : $this->getContext($context, "matchs")));
                echo "
                </div>
            ";
            }
            // line 78
            echo "        ";
        } else {
            // line 79
            echo "            <br><br><br>
            <div id=\"MonElement\" class=\"EX_div\" style=\"diplay:block;\"> <font color=#FF0000> 
                <h1 align='center' style='color:red;'> Vous n'avez pas droit de faire un autre test </h1></font> 
            </div> 
        ";
        }
        // line 84
        echo "
    </center>
    <script>
        function clignotement() {
            if (document.getElementById(\"MonElement\").style.display == \"block\")
                document.getElementById(\"MonElement\").style.display = \"none\";
            else
                document.getElementById(\"MonElement\").style.display = \"block\";
        }
        setInterval(\"clignotement()\", 1000);
    </script> 

";
    }

    public function getTemplateName()
    {
        return "FTTResponsableBundle:OrganiserTest:choisirJoueur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 84,  192 => 79,  189 => 78,  183 => 75,  180 => 74,  178 => 73,  172 => 72,  154 => 57,  144 => 52,  140 => 51,  136 => 50,  132 => 49,  128 => 48,  124 => 47,  117 => 42,  114 => 41,  109 => 40,  103 => 39,  89 => 28,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  56 => 14,  53 => 13,  49 => 12,  46 => 11,  39 => 6,  36 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "FTTResponsableBundle::layoutResponsable.html.twig" %}*/
/* {% block bodyAdmin %}*/
/*     <center>*/
/*         {% if app.user.quotaResponsable >0 %}*/
/*             {% if matchs is empty %}*/
/*                 <br><br><br>*/
/*                 <div id="MonElement" class="EX_div" style="diplay:block;"> <font color=#FF0000> */
/*                     <h1 align='center' style='color:red;'> Il n'y a aucun joueur a tester </h1></font> */
/*                 </div> */
/*             {% else %}*/
/*                 <h1> Matchs :</h1>*/
/*                 {% for match in matchs %}*/
/*                     {% if match.idJoueur3 == null %}*/
/*                         <h3><i class="fa fa-hashtag" style="color: black"></i> Match à 2 joueurs:</h3>*/
/*                         <table border="1" width="40%" >*/
/*                             <tr>*/
/*                                 <td>*/
/*                             <center>*/
/*                                 <h5> Date : {{match.dateMatch | date('d/m/Y')}}</h5>*/
/*                                 <h5> Evenement : {{match.idEvenement.nomEvenement}} </h5>*/
/*                                 <h5> Complexe : {{match.idStade.idComplexe.nomComplexe}} </h5>*/
/*                                 <h5> Stade : {{match.idStade.nomStade}} </h5>*/
/*                                 <h5> Arbitre : {{match.idArbitre.nomUser}} {{match.idArbitre.PrenomUser}}</h5>*/
/*                             </center>*/
/*                             </td>*/
/*                             <td>*/
/*                             <center>*/
/*                                 <form method="POST" action="{{path('hasard_test',{'id':match.id})}}">*/
/*                                     <label><input type="radio" name="choix-joueur" id="choix-joueur" value="1" required="required"> 1 joueur</label>*/
/*                                     <label><input type="radio" name="choix-joueur" id="choix-joueur" value="2" required="required"> 2 joueur</label>*/
/*                                     <br>*/
/*                                     <button class="btn btn-success" >Hasard !</button>*/
/*                                 </form>*/
/*                             </center>*/
/*                             </td>*/
/*                             </tr>*/
/*                         </table>*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*                 {% for match in matchs %}*/
/*                     {% if match.idJoueur3 != null %}*/
/*                         <h3><i class="fa fa-hashtag" style="color: black"></i> Match à 4 joueurs:</h3>*/
/*                         <table border="1" width="40%" >*/
/*                             <tr>*/
/*                                 <td>*/
/*                             <center>*/
/*                                 <h5> Date : {{match.dateMatch | date('d/m/Y')}}</h5>*/
/*                                 <h5> Evenement : {{match.idEvenement.nomEvenement}} </h5>*/
/*                                 <h5> Type : {{match.typeMatch}} </h5>*/
/*                                 <h5> Complexe : {{match.idStade.idComplexe.nomComplexe}} </h5>*/
/*                                 <h5> Stade : {{match.idStade.nomStade}} </h5>*/
/*                                 <h5> Arbitre : {{match.idArbitre.nomUser}} {{match.idArbitre.PrenomUser}}</h5>*/
/*                             </center>*/
/*                             </td>*/
/*                             <td>*/
/*                             <center>*/
/*                                 <form method="POST" action="{{path('hasard_test',{'id':match.id})}}">*/
/*                                     <label><input type="radio" name="choix-joueur" id="choix-joueur" value="1" required="required"> 1 joueur</label>*/
/*                                     <label><input type="radio" name="choix-joueur" id="choix-joueur" value="2" required="required"> 2 joueur</label>*/
/*                                     <br>*/
/*                                     <label><input type="radio" name="choix-joueur" id="choix-joueur" value="3" required="required"> 3 joueur</label>*/
/*                                     <label><input type="radio" name="choix-joueur" id="choix-joueur" value="4" required="required"> 4 joueur</label>*/
/*                                     <br>*/
/*                                     <button class="btn btn-success" >Hasard !</button>*/
/*                                 </form>*/
/* */
/*                             </center>*/
/*                             </td>*/
/*                             </tr>*/
/*                         </table>                    */
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*                 {# display navigation #}*/
/*                 <div class="navigation">*/
/*                     {{ knp_pagination_render(matchs) }}*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% else %}*/
/*             <br><br><br>*/
/*             <div id="MonElement" class="EX_div" style="diplay:block;"> <font color=#FF0000> */
/*                 <h1 align='center' style='color:red;'> Vous n'avez pas droit de faire un autre test </h1></font> */
/*             </div> */
/*         {% endif %}*/
/* */
/*     </center>*/
/*     <script>*/
/*         function clignotement() {*/
/*             if (document.getElementById("MonElement").style.display == "block")*/
/*                 document.getElementById("MonElement").style.display = "none";*/
/*             else*/
/*                 document.getElementById("MonElement").style.display = "block";*/
/*         }*/
/*         setInterval("clignotement()", 1000);*/
/*     </script> */
/* */
/* {% endblock %}*/
/* */
