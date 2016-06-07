<?php

/* FTTUtilisateurBundle:Match:rencontresDirectes.html.twig */
class __TwigTemplate_820e843350409cf5c9fc3a5b8debcab3192c9daa66d080557a381854a874c658 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTUtilisateurBundle::layoutGlobal.html.twig", "FTTUtilisateurBundle:Match:rencontresDirectes.html.twig", 1);
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
        echo "    <div class=\"col-md-12\">
        <table style=\"font-family: 'Exo';font-size: 32px;width: 100%;height: 50px;margin-bottom: 5%\" class=\"table-responsive table-striped\">
            <tr>
                <td style=\"border-bottom: #88C425 solid 2px;\">
                    <span>HEAD2HEAD</span></br>
                </td>
            </tr>
        </table>

        <table class=\"table-responsive table-striped \" style=\"width: 100%;font-family: 'Exo';font-size: medium;margin-bottom: 5%\">
            <form method=\"POST\" action=\"\">
                <tr>
                    <td style=\"border-bottom: #F47920 solid 2px;\">
                        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idJoueur1", array()), 'widget');
        echo "
                    </td>
                    <td style=\"border-bottom: #472B93 solid 2px;\">
                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idJoueur2", array()), 'widget');
        echo "
                    </td>
                    <td style=\"border-bottom: #00B6F1 solid 2px;;font-family: 'Oswald', sans-serif;\">
                        <input type=\"submit\" value=\"Recherche\" class=\"btn btn-flat\" style=\"width: 100%\">
                    </td>
                </tr>
            </form>
        </table>

        <table class=\"table-responsive table-striped\" style=\"width: 100%;font-family: 'Exo';font-size: medium;\">
            <tr style=\"width: 100%\">
                <td colspan=\"2\" >
                    <img  style=\"width: 100px; height: 150px;\" alt=\"Embedded Image\" src=\"data:image/png;base64,";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["imageJoueur1"]) ? $context["imageJoueur1"] : $this->getContext($context, "imageJoueur1")), "html", null, true);
        echo "\" >
                </td>
                <td colspan=\"2\" style=\"text-align: center\">
                    <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/vs.jpg"), "html", null, true);
        echo "\" alt=\"Img\" width=\"35px\" height=\"35px\">
                </td>
                <td colspan=\"3\" style=\"text-align: right\">
                    <img  style=\"width: 100px; height: 150px;\" alt=\"Embedded Image\" src=\"data:image/png;base64,";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["imageJoueur2"]) ? $context["imageJoueur2"] : $this->getContext($context, "imageJoueur2")), "html", null, true);
        echo "\" >
                </td>
            </tr>
            <tr style=\"height: 30px\">

            </tr>
            <tr style=\"text-align: center;font: bold\">
                <td style=\"font-size: x-large;color: #88C425\">       ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joueur1"]) ? $context["joueur1"] : $this->getContext($context, "joueur1")), "nomJoueur", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joueur1"]) ? $context["joueur1"] : $this->getContext($context, "joueur1")), "prenomJoueur", array()), "html", null, true);
        echo " </td>
                <td> ";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["NbVictoiresJoueur1"]) ? $context["NbVictoiresJoueur1"] : $this->getContext($context, "NbVictoiresJoueur1")), "html", null, true);
        echo "  </td>
                <td colspan=\"2\" style=\"background-color: #F1F1F1;color: black\"> Nombre Victoires </td>
                <td> ";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["NbVictoiresJoueur2"]) ? $context["NbVictoiresJoueur2"] : $this->getContext($context, "NbVictoiresJoueur2")), "html", null, true);
        echo " </td>
                <td style=\"font-size: x-large;color: #88C425\"> ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joueur2"]) ? $context["joueur2"] : $this->getContext($context, "joueur2")), "nomJoueur", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joueur2"]) ? $context["joueur2"] : $this->getContext($context, "joueur2")), "prenomJoueur", array()), "html", null, true);
        echo " </td>

            </tr>
            <tr style=\"height: 30px\">

            </tr>
            <tr style=\"color: #2ecc71\">
                <td colspan=\"6\" style=\"text-align: center;font-size: large;font-family: sans-serif\"> Rencontres directes </td>
            </tr>
            <tr style=\"color: #2ecc71;\">
                <td style=\"text-align: center\"> Date </td>
                <td style=\"text-align: center\"> Evenement </td>
                <td style=\"text-align: center\"> Joueur 1 </td>
                <td style=\"text-align: center\"> Resultat </td>
                <td style=\"text-align: center\"> Joueur 2 </td>
                <td style=\"text-align: center\"> Stade </td>
            </tr>
            <tr style=\"height: 20px\">

            </tr>
            ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matchs"]) ? $context["matchs"] : $this->getContext($context, "matchs")));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 70
            echo "                <tr >
                    <td style=\"text-align: center;\" class=\"tdBorder\">
                        ";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "dateMatch", array()), "d - m - Y"), "html", null, true);
            echo "
                    </td>
                    <td style=\"text-align: center;\" class=\"tdBorder\">
                        ";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idEvenement", array()), "nomEvenement", array()), "html", null, true);
            echo "
                    </td>
                    <td style=\"text-align: left\" class=\"tdBorder\">
                        ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur1", array()), "prenomJoueur", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur1", array()), "nomJoueur", array()), "html", null, true);
            echo "
                    </td>
                    <td style=\"background-color: #F1F1F1;color: black;text-align: center\" class=\"tdBorder\">
                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "rsltJoueur1", array()), "html", null, true);
            echo " -  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "rsltJoueur2", array()), "html", null, true);
            echo "
                    </td>
                    <td style=\"text-align: right\" class=\"tdBorder\">
                        ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur2", array()), "prenomJoueur", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idJoueur2", array()), "nomJoueur", array()), "html", null, true);
            echo "  
                    </td>
                    <td style=\"text-align: center\" class=\"tdBorder\">
                        ";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["match"], "idMatch", array()), "idStade", array()), "nomStade", array()), "html", null, true);
            echo " 
                    </td>
                </tr> 
                <tr style=\"height: 20px\">

                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "              
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FTTUtilisateurBundle:Match:rencontresDirectes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 93,  173 => 87,  165 => 84,  157 => 81,  149 => 78,  143 => 75,  137 => 72,  133 => 70,  129 => 69,  104 => 49,  100 => 48,  95 => 46,  89 => 45,  79 => 38,  73 => 35,  67 => 32,  52 => 20,  46 => 17,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FTTUtilisateurBundle::layoutGlobal.html.twig" %}*/
/* */
/* {% block body %}*/
/*     <div class="col-md-12">*/
/*         <table style="font-family: 'Exo';font-size: 32px;width: 100%;height: 50px;margin-bottom: 5%" class="table-responsive table-striped">*/
/*             <tr>*/
/*                 <td style="border-bottom: #88C425 solid 2px;">*/
/*                     <span>HEAD2HEAD</span></br>*/
/*                 </td>*/
/*             </tr>*/
/*         </table>*/
/* */
/*         <table class="table-responsive table-striped " style="width: 100%;font-family: 'Exo';font-size: medium;margin-bottom: 5%">*/
/*             <form method="POST" action="">*/
/*                 <tr>*/
/*                     <td style="border-bottom: #F47920 solid 2px;">*/
/*                         {{form_widget(form.idJoueur1)}}*/
/*                     </td>*/
/*                     <td style="border-bottom: #472B93 solid 2px;">*/
/*                         {{form_widget(form.idJoueur2)}}*/
/*                     </td>*/
/*                     <td style="border-bottom: #00B6F1 solid 2px;;font-family: 'Oswald', sans-serif;">*/
/*                         <input type="submit" value="Recherche" class="btn btn-flat" style="width: 100%">*/
/*                     </td>*/
/*                 </tr>*/
/*             </form>*/
/*         </table>*/
/* */
/*         <table class="table-responsive table-striped" style="width: 100%;font-family: 'Exo';font-size: medium;">*/
/*             <tr style="width: 100%">*/
/*                 <td colspan="2" >*/
/*                     <img  style="width: 100px; height: 150px;" alt="Embedded Image" src="data:image/png;base64,{{imageJoueur1}}" >*/
/*                 </td>*/
/*                 <td colspan="2" style="text-align: center">*/
/*                     <img src="{{asset('img/vs.jpg')}}" alt="Img" width="35px" height="35px">*/
/*                 </td>*/
/*                 <td colspan="3" style="text-align: right">*/
/*                     <img  style="width: 100px; height: 150px;" alt="Embedded Image" src="data:image/png;base64,{{imageJoueur2}}" >*/
/*                 </td>*/
/*             </tr>*/
/*             <tr style="height: 30px">*/
/* */
/*             </tr>*/
/*             <tr style="text-align: center;font: bold">*/
/*                 <td style="font-size: x-large;color: #88C425">       {{joueur1.nomJoueur}} {{joueur1.prenomJoueur}} </td>*/
/*                 <td> {{NbVictoiresJoueur1}}  </td>*/
/*                 <td colspan="2" style="background-color: #F1F1F1;color: black"> Nombre Victoires </td>*/
/*                 <td> {{NbVictoiresJoueur2}} </td>*/
/*                 <td style="font-size: x-large;color: #88C425"> {{joueur2.nomJoueur}} {{joueur2.prenomJoueur}} </td>*/
/* */
/*             </tr>*/
/*             <tr style="height: 30px">*/
/* */
/*             </tr>*/
/*             <tr style="color: #2ecc71">*/
/*                 <td colspan="6" style="text-align: center;font-size: large;font-family: sans-serif"> Rencontres directes </td>*/
/*             </tr>*/
/*             <tr style="color: #2ecc71;">*/
/*                 <td style="text-align: center"> Date </td>*/
/*                 <td style="text-align: center"> Evenement </td>*/
/*                 <td style="text-align: center"> Joueur 1 </td>*/
/*                 <td style="text-align: center"> Resultat </td>*/
/*                 <td style="text-align: center"> Joueur 2 </td>*/
/*                 <td style="text-align: center"> Stade </td>*/
/*             </tr>*/
/*             <tr style="height: 20px">*/
/* */
/*             </tr>*/
/*             {% for match in matchs %}*/
/*                 <tr >*/
/*                     <td style="text-align: center;" class="tdBorder">*/
/*                         {{match.idMatch.dateMatch | date('d - m - Y')}}*/
/*                     </td>*/
/*                     <td style="text-align: center;" class="tdBorder">*/
/*                         {{match.idMatch.idEvenement.nomEvenement}}*/
/*                     </td>*/
/*                     <td style="text-align: left" class="tdBorder">*/
/*                         {{match.idMatch.idJoueur1.prenomJoueur}} {{match.idMatch.idJoueur1.nomJoueur}}*/
/*                     </td>*/
/*                     <td style="background-color: #F1F1F1;color: black;text-align: center" class="tdBorder">*/
/*                         {{match.rsltJoueur1}} -  {{match.rsltJoueur2}}*/
/*                     </td>*/
/*                     <td style="text-align: right" class="tdBorder">*/
/*                         {{match.idMatch.idJoueur2.prenomJoueur}} {{match.idMatch.idJoueur2.nomJoueur}}  */
/*                     </td>*/
/*                     <td style="text-align: center" class="tdBorder">*/
/*                         {{match.idMatch.idStade.nomStade}} */
/*                     </td>*/
/*                 </tr> */
/*                 <tr style="height: 20px">*/
/* */
/*                 </tr>*/
/*             {% endfor %}              */
/*         </table>*/
/*     </div>*/
/* {% endblock %}*/
