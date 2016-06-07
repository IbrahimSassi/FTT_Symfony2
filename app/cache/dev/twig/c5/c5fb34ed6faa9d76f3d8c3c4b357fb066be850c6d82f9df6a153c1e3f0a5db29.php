<?php

/* FTTMedecinBundle:Test:ChoisirTest.html.twig */
class __TwigTemplate_41fd6d70396bc36f4486b4d9d5149e78063fe95f0977bb78ec9740bc1f8a2c2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTMedecinBundle::layoutMedecin.html.twig", "FTTMedecinBundle:Test:ChoisirTest.html.twig", 1);
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
                <h1 align='center' style='color:red;'> Il n'y a aucun joueur a tester </h1></font> 
            </div> 
        ";
        } else {
            // line 11
            echo "            <h1> Tests Anti-dopage proposés :</h1>
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["test"]);
            foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
                // line 13
                echo "                    <table border=\"1\" width=\"40%\" >
                        <tr>
                            <td>
                        <center>
                            <h5> Date : ";
                // line 17
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["test"], "idMatch", array()), "dateMatch", array()), "d/m/Y"), "html", null, true);
                echo "</h5>
                            <h5> Evenement : ";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["test"], "idMatch", array()), "idEvenement", array()), "nomEvenement", array()), "html", null, true);
                echo " </h5>
                            <h5> Type : ";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["test"], "idMatch", array()), "typeMatch", array()), "html", null, true);
                echo " <h5>
                            <h5> Complexe : ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["test"], "idMatch", array()), "idStade", array()), "idComplexe", array()), "nomComplexe", array()), "html", null, true);
                echo " </h5>
                            <h5> Stade : ";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["test"], "idMatch", array()), "idStade", array()), "nomStade", array()), "html", null, true);
                echo " </h5>
                        </center>
                        </td>
                        <td>
                        <center>
                                <br>
                                <a class=\"btn btn-success\" href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("enregister_test", array("id" => $this->getAttribute($context["test"], "id", array()))), "html", null, true);
                echo "\" style=\"font-size: 175%\"> Je prends </a>
                        </center>
                        </td>
                        </tr>
                    </table>
                    <br>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "        ";
        }
        // line 35
        echo "        <div class=\"navigation\">
            ";
        // line 36
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
        return "FTTMedecinBundle:Test:ChoisirTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 36,  98 => 35,  95 => 34,  82 => 27,  73 => 21,  69 => 20,  65 => 19,  61 => 18,  57 => 17,  51 => 13,  47 => 12,  44 => 11,  37 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "FTTMedecinBundle::layoutMedecin.html.twig" %}*/
/* {% block bodyAdmin %}*/
/* */
/*     <center>*/
/*         {% if test is empty %}*/
/*             <br><br><br>*/
/*             <div id="MonElement" class="EX_div" style="diplay:block;"> <font color=#FF0000> */
/*                 <h1 align='center' style='color:red;'> Il n'y a aucun joueur a tester </h1></font> */
/*             </div> */
/*         {% else %}*/
/*             <h1> Tests Anti-dopage proposés :</h1>*/
/*             {% for test in test %}*/
/*                     <table border="1" width="40%" >*/
/*                         <tr>*/
/*                             <td>*/
/*                         <center>*/
/*                             <h5> Date : {{test.idMatch.dateMatch | date('d/m/Y')}}</h5>*/
/*                             <h5> Evenement : {{test.idMatch.idEvenement.nomEvenement }} </h5>*/
/*                             <h5> Type : {{test.idMatch.typeMatch }} <h5>*/
/*                             <h5> Complexe : {{test.idMatch.idStade.idComplexe.nomComplexe }} </h5>*/
/*                             <h5> Stade : {{test.idMatch.idStade.nomStade }} </h5>*/
/*                         </center>*/
/*                         </td>*/
/*                         <td>*/
/*                         <center>*/
/*                                 <br>*/
/*                                 <a class="btn btn-success" href="{{path('enregister_test',{'id':test.id})}}" style="font-size: 175%"> Je prends </a>*/
/*                         </center>*/
/*                         </td>*/
/*                         </tr>*/
/*                     </table>*/
/*                     <br>*/
/*             {% endfor %}*/
/*         {% endif %}*/
/*         <div class="navigation">*/
/*             {{ knp_pagination_render(test) }}*/
/*         </div>*/
/*     </center>*/
/* */
/* <script>*/
/*         function clignotement() {*/
/*             if (document.getElementById("MonElement").style.display == "block")*/
/*                 document.getElementById("MonElement").style.display = "none";*/
/*             else*/
/*                 document.getElementById("MonElement").style.display = "block";*/
/*         }*/
/*         setInterval("clignotement()", 700);*/
/*     </script> */
/* */
/* {% endblock %}*/
/* */
