<?php

/* FTTResponsableBundle:ResultatTest:TestEnCours.html.twig */
class __TwigTemplate_58e309d4250d7c64588690f59afa27c9f49da1d69168fcd4486d38649f2fd201 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTResponsableBundle::layoutResponsable.html.twig", "FTTResponsableBundle:ResultatTest:TestEnCours.html.twig", 1);
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
            <h1 align='center' style='color:red;'> Vous n'aves aucun test en attente </h1></font> 
        </div> 
    ";
        } else {
            // line 12
            echo "        <br><br><br>

        <marquee id=\"id1\">
            <span onmouseover=\"getElementById('id1').stop();\" onmouseout=\"getElementById('id1').start();\">
                <h3><i class=\"fa fa-hashtag\" style=\"color: green\"> Les Test en attentes que vous avez commandé&nbsp</i><i class=\"fa fa-hashtag\" style=\"color: green\"></i></h3>
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
                </tr>
            </thead>
            <tbody>
                ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["resultatTests"]) ? $context["resultatTests"] : $this->getContext($context, "resultatTests")));
            foreach ($context['_seq'] as $context["_key"] => $context["resultatTest"]) {
                // line 40
                echo "                        <tr>
                            <td align=\"center\" >
                                ";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["resultatTest"], "idMatch", array()), "idStade", array()), "idComplexe", array()), "nomComplexe", array()), "html", null, true);
                echo "
                            </td>
                            <td align=\"center\" >
                                ";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["resultatTest"], "idMatch", array()), "idStade", array()), "nomStade", array()), "html", null, true);
                echo "
                            </td>
                            <td align=\"center\" >
                                ";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["resultatTest"], "idMatch", array()), "idEvenement", array()), "nomEvenement", array()), "html", null, true);
                echo "
                            </td>
                            <td align=\"center\" >
                                ";
                // line 51
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["resultatTest"], "idMatch", array()), "dateMatch", array()), "d/m/Y"), "html", null, true);
                echo "
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resultatTest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "        </tbody>
    </table>

";
        }
        // line 59
        echo "
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
        return "FTTResponsableBundle:ResultatTest:TestEnCours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 59,  110 => 55,  100 => 51,  94 => 48,  88 => 45,  82 => 42,  78 => 40,  74 => 39,  45 => 12,  36 => 5,  34 => 4,  28 => 2,  11 => 1,);
    }
}
/* {% extends "FTTResponsableBundle::layoutResponsable.html.twig" %}*/
/* {% block bodyAdmin %}   */
/* */
/*     {% if resultatTests is empty %}*/
/*         <br><br><br>*/
/* */
/*          */
/*         <div id="MonElement" class="EX_div" style="diplay:block;"> <font color=#FF0000> */
/*             <h1 align='center' style='color:red;'> Vous n'aves aucun test en attente </h1></font> */
/*         </div> */
/*     {% else %}*/
/*         <br><br><br>*/
/* */
/*         <marquee id="id1">*/
/*             <span onmouseover="getElementById('id1').stop();" onmouseout="getElementById('id1').start();">*/
/*                 <h3><i class="fa fa-hashtag" style="color: green"> Les Test en attentes que vous avez commandé&nbsp</i><i class="fa fa-hashtag" style="color: green"></i></h3>*/
/*             </span>*/
/*         </marquee>*/
/*         */
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
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% for resultatTest in resultatTests %}*/
/*                         <tr>*/
/*                             <td align="center" >*/
/*                                 {{resultatTest.idMatch.idStade.idComplexe.nomComplexe}}*/
/*                             </td>*/
/*                             <td align="center" >*/
/*                                 {{resultatTest.idMatch.idStade.nomStade}}*/
/*                             </td>*/
/*                             <td align="center" >*/
/*                                 {{resultatTest.idMatch.idEvenement.nomEvenement}}*/
/*                             </td>*/
/*                             <td align="center" >*/
/*                                 {{resultatTest.idMatch.dateMatch | date('d/m/Y')}}*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/* {%endif %}*/
/* */
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
