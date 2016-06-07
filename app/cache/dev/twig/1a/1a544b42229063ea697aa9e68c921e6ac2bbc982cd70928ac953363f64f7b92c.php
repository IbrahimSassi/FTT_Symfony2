<?php

/* FTTMedecinBundle:Test:MesTests.html.twig */
class __TwigTemplate_298491a00c8587175e5ea85d4357ab50519d1bf22e3fa70d1d2cd6c7aa37f8d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTMedecinBundle::layoutMedecin.html.twig", "FTTMedecinBundle:Test:MesTests.html.twig", 1);
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
            echo "
            <h1> Vos Tests :</h1>
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["test"]);
            foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
                // line 14
                echo "                <table border=\"1\" width=\"40%\" >
                    <tr>
                        <td>
                    <center>
                        <h5> Date : ";
                // line 18
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["test"], "idJoueurTester", array()), "idMatch", array()), "dateMatch", array()), "d/m/Y"), "html", null, true);
                echo "</h5>
                        <h5> Evenement : ";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["test"], "idJoueurTester", array()), "idMatch", array()), "idEvenement", array()), "nomEvenement", array()), "html", null, true);
                echo " </h5>
                        <h5> Type : ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["test"], "idJoueurTester", array()), "idMatch", array()), "typeMatch", array()), "html", null, true);
                echo " </h5>
                        <h5> Complexe : ";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["test"], "idJoueurTester", array()), "idMatch", array()), "idStade", array()), "idComplexe", array()), "nomComplexe", array()), "html", null, true);
                echo " </h5>
                        <h5> Stade : ";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["test"], "idJoueurTester", array()), "idMatch", array()), "idStade", array()), "nomStade", array()), "html", null, true);
                echo " </h5>
                        ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["joueurs"]) ? $context["joueurs"] : $this->getContext($context, "joueurs")));
                foreach ($context['_seq'] as $context["_key"] => $context["joueur"]) {
                    // line 24
                    echo "                            ";
                    if (($this->getAttribute($this->getAttribute($context["test"], "idJoueurTester", array()), "joueurChoisi", array()) == $this->getAttribute($context["joueur"], "id", array()))) {
                        // line 25
                        echo "                                <h5> Joueur : ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "nomJoueur", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "prenomJoueur", array()), "html", null, true);
                        echo " </h5>
                                <h5> Club : ";
                        // line 26
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["joueur"], "idClub", array()), "nomClub", array()), "html", null, true);
                        echo " </h5>
                            ";
                    }
                    // line 28
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['joueur'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "                    </center>
                    </td>

                    </tr>
                </table>
                <br>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        ";
        }
        // line 37
        echo "        <div class=\"navigation\">
            ";
        // line 38
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")));
        echo "
        </div>
    </center>

    <script>
        function clignotement() {
            if (document.getElementById(\"MonElement\").style.display == \"block\")
                document.getElementById(\"MonElement\").style.display = \"none\";
            else
                document.getElementById(\"MonElement\").style.display = \"block\";
        }
        setInterval(\"clignotement()\", 700);
    </script> 
";
    }

    public function getTemplateName()
    {
        return "FTTMedecinBundle:Test:MesTests.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 38,  118 => 37,  115 => 36,  103 => 29,  97 => 28,  92 => 26,  85 => 25,  82 => 24,  78 => 23,  74 => 22,  70 => 21,  66 => 20,  62 => 19,  58 => 18,  52 => 14,  48 => 13,  44 => 11,  37 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
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
/* */
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
/*                             {% if (test.idJoueurTester.joueurChoisi == joueur.id) %}*/
/*                                 <h5> Joueur : {{joueur.nomJoueur }} {{joueur.prenomJoueur }} </h5>*/
/*                                 <h5> Club : {{joueur.idClub.nomClub}} </h5>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </center>*/
/*                     </td>*/
/* */
/*                     </tr>*/
/*                 </table>*/
/*                 <br>*/
/*             {% endfor %}*/
/*         {% endif %}*/
/*         <div class="navigation">*/
/*             {{ knp_pagination_render(test) }}*/
/*         </div>*/
/*     </center>*/
/* */
/*     <script>*/
/*         function clignotement() {*/
/*             if (document.getElementById("MonElement").style.display == "block")*/
/*                 document.getElementById("MonElement").style.display = "none";*/
/*             else*/
/*                 document.getElementById("MonElement").style.display = "block";*/
/*         }*/
/*         setInterval("clignotement()", 700);*/
/*     </script> */
/* {% endblock %}*/
