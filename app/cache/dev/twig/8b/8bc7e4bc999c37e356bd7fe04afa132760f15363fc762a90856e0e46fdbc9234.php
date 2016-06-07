<?php

/* FTTAdherentBundle:Point:PointAdherent.html.twig */
class __TwigTemplate_dac0fb7b35a905da3b5d64dac3fe26571070cc32cbaf3a0b812fac655ca8bbad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("FTTAdherentBundle::layoutAdherent.html.twig", "FTTAdherentBundle:Point:PointAdherent.html.twig", 2);
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    ";
        // line 6
        $context["pop"] = (isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg"));
        echo "    
    ";
        // line 7
        if (((isset($context["pop"]) ? $context["pop"] : $this->getContext($context, "pop")) == "pasDePoint")) {
            // line 8
            echo "        <script type=\"text/javascript\">
            alert(\"Vous n'avez pas assez de point \");
        </script>
    ";
        } elseif ((        // line 11
(isset($context["pop"]) ? $context["pop"] : $this->getContext($context, "pop")) == "pasDeSolde")) {
            // line 12
            echo "        <script type=\"text/javascript\">
            alert(\" Votre solde est insuffisant \");
        </script>
    ";
        }
        // line 16
        echo "
    <center>
        <marquee id=\"id1\">
            <span onmouseover=\"getElementById('id1').stop();\" onmouseout=\"getElementById('id1').start();\">
                <h1 style=\"color:#88C425;\" > Votre solde est : ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "soldeAdherent", array()), "html", null, true);
        echo "DT</h1>
                <h1 style=\"color:#88C425;\"> Vous avez ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pointsAdherent", array()), "html", null, true);
        echo " points </h1>
            </span>
        </marquee>

        <fieldset style=\"width:500px\">

            <legend><h4>Acheter des points</h4></legend>

            <form method=\"POST\">
                <table>
                    <tr>
                        <td><label for=\"solde\">Solde : &nbsp;</label></td>
                        <td><input type=\"number\" id=\"solde\" name=\"solde\" min=\"0\" max=\"100\" value=\"0\" class=\"form-control\"
                                   required=\"required\" style=\"text-align: center\" 
                                   onchange=\"actionAchat(";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
        echo ")\" onkeyup=\"actionAchat(";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
        echo ")\"/></td>
                    </tr>
                </table>
                1 DT = 1 Point
                <div id='achat'></div>

            </form>

        </fieldset>
        <br>
        <fieldset style=\"width:500px\">

            <legend><h4>Vendre des points</h4></legend>

            <form method=\"POST\" action=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("vente_point");
        echo "\">
                <table>
                    <tr>
                        <td><label for=\"point\">Point : &nbsp;</label></td>
                        <td><input type=\"number\" id=\"point\" name=\"point\" min=\"0\" max=\"100\" value=\"0\" class=\"form-control\"
                                   required=\"required\" style=\"text-align: center\" 
                                   onchange=\"actionVente(";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
        echo ")\" onkeyup=\"actionVente(";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
        echo ")\"/></td>
                    </tr>
                </table>
                1 Point = 1 DT
                <div id='vente'></div>
            </form>
        </fieldset>
    </center>

";
    }

    public function getTemplateName()
    {
        return "FTTAdherentBundle:Point:PointAdherent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 55,  99 => 49,  80 => 35,  63 => 21,  59 => 20,  53 => 16,  47 => 12,  45 => 11,  40 => 8,  38 => 7,  34 => 6,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "FTTAdherentBundle::layoutAdherent.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*     {% set pop = msg %}    */
/*     {% if pop == 'pasDePoint' %}*/
/*         <script type="text/javascript">*/
/*             alert("Vous n'avez pas assez de point ");*/
/*         </script>*/
/*     {% elseif pop == 'pasDeSolde' %}*/
/*         <script type="text/javascript">*/
/*             alert(" Votre solde est insuffisant ");*/
/*         </script>*/
/*     {% endif %}*/
/* */
/*     <center>*/
/*         <marquee id="id1">*/
/*             <span onmouseover="getElementById('id1').stop();" onmouseout="getElementById('id1').start();">*/
/*                 <h1 style="color:#88C425;" > Votre solde est : {{app.user.soldeAdherent}}DT</h1>*/
/*                 <h1 style="color:#88C425;"> Vous avez {{app.user.pointsAdherent}} points </h1>*/
/*             </span>*/
/*         </marquee>*/
/* */
/*         <fieldset style="width:500px">*/
/* */
/*             <legend><h4>Acheter des points</h4></legend>*/
/* */
/*             <form method="POST">*/
/*                 <table>*/
/*                     <tr>*/
/*                         <td><label for="solde">Solde : &nbsp;</label></td>*/
/*                         <td><input type="number" id="solde" name="solde" min="0" max="100" value="0" class="form-control"*/
/*                                    required="required" style="text-align: center" */
/*                                    onchange="actionAchat({{app.user.id}})" onkeyup="actionAchat({{app.user.id}})"/></td>*/
/*                     </tr>*/
/*                 </table>*/
/*                 1 DT = 1 Point*/
/*                 <div id='achat'></div>*/
/* */
/*             </form>*/
/* */
/*         </fieldset>*/
/*         <br>*/
/*         <fieldset style="width:500px">*/
/* */
/*             <legend><h4>Vendre des points</h4></legend>*/
/* */
/*             <form method="POST" action="{{path('vente_point')}}">*/
/*                 <table>*/
/*                     <tr>*/
/*                         <td><label for="point">Point : &nbsp;</label></td>*/
/*                         <td><input type="number" id="point" name="point" min="0" max="100" value="0" class="form-control"*/
/*                                    required="required" style="text-align: center" */
/*                                    onchange="actionVente({{app.user.id}})" onkeyup="actionVente({{app.user.id}})"/></td>*/
/*                     </tr>*/
/*                 </table>*/
/*                 1 Point = 1 DT*/
/*                 <div id='vente'></div>*/
/*             </form>*/
/*         </fieldset>*/
/*     </center>*/
/* */
/* {% endblock %}*/
/* */
