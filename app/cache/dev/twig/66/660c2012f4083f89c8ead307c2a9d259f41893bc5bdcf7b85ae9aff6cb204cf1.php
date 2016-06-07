<?php

/* FTTResponsableBundle:ResultatTest:ResultatTest.html.twig */
class __TwigTemplate_04e306644dc492c409aaac05ee4457ed3e7d2bb93162c980bb008e97a82d7eb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTResponsableBundle::layoutResponsable.html.twig", "FTTResponsableBundle:ResultatTest:ResultatTest.html.twig", 1);
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
        echo "   

    ";
        // line 4
        if (twig_test_empty((isset($context["resultatTests"]) ? $context["resultatTests"] : $this->getContext($context, "resultatTests")))) {
            // line 5
            echo "        <br><br><br>


        <div id=\"MonElement\" class=\"EX_div\" style=\"diplay:block;\"> <font color=#FF0000> 
            <h1 align='center' style='color:red;'> Vous n'avez aucun test en cours </h1></font> 
        </div> 
    ";
        } else {
            // line 12
            echo "        <marquee id=\"id1\">
            <span onmouseover=\"getElementById('id1').stop();\" onmouseout=\"getElementById('id1').start();\">
                <h3><i class=\"fa fa-hashtag\" style=\"color: green\"> Les Test que vous avez commandé&nbsp</i><i class=\"fa fa-hashtag\" style=\"color: green\"></i></h3>
            </span>
        </marquee>


        <table class=\"table table-striped table-hover\" style=\"font-family: 'Exo';text\" >
            <thead>
                <tr>
                    <th style=\"text-align: center;\">
                        Complexe
                    </th>
                    <th style=\"text-align: center;\">
                        Stade
                    </th>
                    <th style=\"text-align: center;\">
                        Evenement
                    </th>
                    <th style=\"text-align: center;\">
                        DateMatch
                    </th>
                    <th style=\"text-align: center;\">
                        Joueur
                    </th>
                    <th style=\"text-align: center;\">
                        Club 
                    </th>
                    <th style=\"text-align: center;\">
                        Resultat
                    </th>
                    <th style=\"text-align: center;\">
                        Compte rendu
                    </th>
                    <th style=\"text-align: center;\">
                        Medecin
                    </th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["resultatTests"]) ? $context["resultatTests"] : $this->getContext($context, "resultatTests")));
            foreach ($context['_seq'] as $context["key"] => $context["resultatTest"]) {
                // line 53
                echo "                    ";
                if (($this->getAttribute($context["resultatTest"], "resultat", array()) != 0)) {
                    // line 54
                    echo "                        <tr>
                            <td align=\"center\" >
                                ";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["resultatTest"], "idJoueurTester", array()), "idMatch", array()), "idStade", array()), "idComplexe", array()), "nomComplexe", array()), "html", null, true);
                    echo "
                            </td>
                            <td align=\"center\" >
                                ";
                    // line 59
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["resultatTest"], "idJoueurTester", array()), "idMatch", array()), "idStade", array()), "nomStade", array()), "html", null, true);
                    echo "
                            </td>
                            <td align=\"center\" >
                                ";
                    // line 62
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["resultatTest"], "idJoueurTester", array()), "idMatch", array()), "idEvenement", array()), "nomEvenement", array()), "html", null, true);
                    echo "
                            </td>
                            <td align=\"center\" >
                                ";
                    // line 65
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["resultatTest"], "idJoueurTester", array()), "idMatch", array()), "dateMatch", array()), "d/m/Y"), "html", null, true);
                    echo "
                            </td>
                            ";
                    // line 67
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["joueurs"]) ? $context["joueurs"] : $this->getContext($context, "joueurs")));
                    foreach ($context['_seq'] as $context["key"] => $context["joueur"]) {
                        // line 68
                        echo "                                ";
                        if (($this->getAttribute($this->getAttribute($context["resultatTest"], "idJoueurTester", array()), "joueurChoisi", array()) == $this->getAttribute($context["joueur"], "id", array()))) {
                            // line 69
                            echo "                                    <td align=\"center\" >
                                        ";
                            // line 70
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["joueurs"]) ? $context["joueurs"] : $this->getContext($context, "joueurs")), $context["key"], array(), "array"), "nomJoueur", array()), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["joueurs"]) ? $context["joueurs"] : $this->getContext($context, "joueurs")), $context["key"], array(), "array"), "prenomJoueur", array()), "html", null, true);
                            echo "
                                    </td>
                                    <td align=\"center\" >
                                        ";
                            // line 73
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["joueurs"]) ? $context["joueurs"] : $this->getContext($context, "joueurs")), $context["key"], array(), "array"), "idClub", array()), "nomClub", array()), "html", null, true);
                            echo " 
                                    </td>
                                ";
                        }
                        // line 76
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['joueur'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 77
                    echo "                            <td align=\"center\" >
                                ";
                    // line 78
                    echo twig_escape_filter($this->env, $this->getAttribute($context["resultatTest"], "resultat", array()), "html", null, true);
                    echo "   
                            </td>
                            <td align=\"center\" >                               
                                ";
                    // line 81
                    echo twig_escape_filter($this->env, $this->getAttribute($context["resultatTest"], "description", array()), "html", null, true);
                    echo " 
                            </td>
                            <td align=\"center\" >                               
                                ";
                    // line 84
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["resultatTest"], "idMedecin", array()), "nomUser", array()), "html", null, true);
                    echo " 
                            </td>
                        </tr>
                        
                        <tr style=\"text-align: center; \" >
                            <td align=\"center\" colspan=9>
                                <a class=\"md-trigger btn btn-success btn-xs\" aria-hidden=\"true\" style=\"font-size: x-large;\"
                                   href=\"";
                    // line 91
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("envoie_resultat_test", array("id" => $this->getAttribute($context["resultatTest"], "id", array()))), "html", null, true);
                    echo "\">
                                    <i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i> Envoyer le resultat par mail <i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i></a>
                            </td>
                        </tr>
                    ";
                } else {
                    // line 96
                    echo "                    <br><br><br>
                    <h1 align='center' style='color:red;'> Il y'a d'autres tests que vous avez demandé qui ne sont pas encore effectués </h1></font> 
                ";
                }
                // line 99
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['resultatTest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "        </tbody>
    </table>

";
        }
        // line 104
        echo "<div class=\"navigation\">
    ";
        // line 105
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["resultatTests"]) ? $context["resultatTests"] : $this->getContext($context, "resultatTests")));
        echo "
</div>
<script>
    function clignotement() {
        if (document.getElementById(\"MonElement\").style.display == \"block\")
            document.getElementById(\"MonElement\").style.display = \"none\";
        else
            document.getElementById(\"MonElement\").style.display = \"block\";
    }
    setInterval(\"clignotement()\", 500);
</script> 
";
    }

    public function getTemplateName()
    {
        return "FTTResponsableBundle:ResultatTest:ResultatTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 105,  201 => 104,  195 => 100,  189 => 99,  184 => 96,  176 => 91,  166 => 84,  160 => 81,  154 => 78,  151 => 77,  145 => 76,  139 => 73,  131 => 70,  128 => 69,  125 => 68,  121 => 67,  116 => 65,  110 => 62,  104 => 59,  98 => 56,  94 => 54,  91 => 53,  87 => 52,  45 => 12,  36 => 5,  34 => 4,  28 => 2,  11 => 1,);
    }
}
/* {% extends "FTTResponsableBundle::layoutResponsable.html.twig" %}*/
/* {% block bodyAdmin %}   */
/* */
/*     {% if resultatTests is empty %}*/
/*         <br><br><br>*/
/* */
/* */
/*         <div id="MonElement" class="EX_div" style="diplay:block;"> <font color=#FF0000> */
/*             <h1 align='center' style='color:red;'> Vous n'avez aucun test en cours </h1></font> */
/*         </div> */
/*     {% else %}*/
/*         <marquee id="id1">*/
/*             <span onmouseover="getElementById('id1').stop();" onmouseout="getElementById('id1').start();">*/
/*                 <h3><i class="fa fa-hashtag" style="color: green"> Les Test que vous avez commandé&nbsp</i><i class="fa fa-hashtag" style="color: green"></i></h3>*/
/*             </span>*/
/*         </marquee>*/
/* */
/* */
/*         <table class="table table-striped table-hover" style="font-family: 'Exo';text" >*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th style="text-align: center;">*/
/*                         Complexe*/
/*                     </th>*/
/*                     <th style="text-align: center;">*/
/*                         Stade*/
/*                     </th>*/
/*                     <th style="text-align: center;">*/
/*                         Evenement*/
/*                     </th>*/
/*                     <th style="text-align: center;">*/
/*                         DateMatch*/
/*                     </th>*/
/*                     <th style="text-align: center;">*/
/*                         Joueur*/
/*                     </th>*/
/*                     <th style="text-align: center;">*/
/*                         Club */
/*                     </th>*/
/*                     <th style="text-align: center;">*/
/*                         Resultat*/
/*                     </th>*/
/*                     <th style="text-align: center;">*/
/*                         Compte rendu*/
/*                     </th>*/
/*                     <th style="text-align: center;">*/
/*                         Medecin*/
/*                     </th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% for key,resultatTest in resultatTests %}*/
/*                     {% if resultatTest.resultat != 0 %}*/
/*                         <tr>*/
/*                             <td align="center" >*/
/*                                 {{resultatTest.idJoueurTester.idMatch.idStade.idComplexe.nomComplexe}}*/
/*                             </td>*/
/*                             <td align="center" >*/
/*                                 {{resultatTest.idJoueurTester.idMatch.idStade.nomStade}}*/
/*                             </td>*/
/*                             <td align="center" >*/
/*                                 {{resultatTest.idJoueurTester.idMatch.idEvenement.nomEvenement}}*/
/*                             </td>*/
/*                             <td align="center" >*/
/*                                 {{resultatTest.idJoueurTester.idMatch.dateMatch | date('d/m/Y')}}*/
/*                             </td>*/
/*                             {% for key,joueur in joueurs %}*/
/*                                 {% if (resultatTest.idJoueurTester.joueurChoisi==joueur.id) %}*/
/*                                     <td align="center" >*/
/*                                         {{joueurs[key].nomJoueur}} {{joueurs[key].prenomJoueur}}*/
/*                                     </td>*/
/*                                     <td align="center" >*/
/*                                         {{joueurs[key].idClub.nomClub}} */
/*                                     </td>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                             <td align="center" >*/
/*                                 {{resultatTest.resultat}}   */
/*                             </td>*/
/*                             <td align="center" >                               */
/*                                 {{resultatTest.description}} */
/*                             </td>*/
/*                             <td align="center" >                               */
/*                                 {{resultatTest.idMedecin.nomUser}} */
/*                             </td>*/
/*                         </tr>*/
/*                         */
/*                         <tr style="text-align: center; " >*/
/*                             <td align="center" colspan=9>*/
/*                                 <a class="md-trigger btn btn-success btn-xs" aria-hidden="true" style="font-size: x-large;"*/
/*                                    href="{{path('envoie_resultat_test',{'id':resultatTest.id})}}">*/
/*                                     <i class="fa fa-paper-plane" aria-hidden="true"></i> Envoyer le resultat par mail <i class="fa fa-paper-plane" aria-hidden="true"></i></a>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% else %}*/
/*                     <br><br><br>*/
/*                     <h1 align='center' style='color:red;'> Il y'a d'autres tests que vous avez demandé qui ne sont pas encore effectués </h1></font> */
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/* {%endif %}*/
/* <div class="navigation">*/
/*     {{ knp_pagination_render(resultatTests) }}*/
/* </div>*/
/* <script>*/
/*     function clignotement() {*/
/*         if (document.getElementById("MonElement").style.display == "block")*/
/*             document.getElementById("MonElement").style.display = "none";*/
/*         else*/
/*             document.getElementById("MonElement").style.display = "block";*/
/*     }*/
/*     setInterval("clignotement()", 500);*/
/* </script> */
/* {% endblock %}*/
/* */
/* */
