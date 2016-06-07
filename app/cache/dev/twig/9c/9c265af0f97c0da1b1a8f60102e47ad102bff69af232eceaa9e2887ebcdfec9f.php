<?php

/* FTTUtilisateurBundle:Joueur:classementInternationnal.html.twig */
class __TwigTemplate_0b178a93f054072ac8cfda5f3693c48cce5da24f5b5fcc3f77dd9162551b1185 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTUtilisateurBundle::layoutGlobal.html.twig", "FTTUtilisateurBundle:Joueur:classementInternationnal.html.twig", 1);
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

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "            
             <style>
    #1 { border-radius: 90px; 
    padding-top: 20px}
    #2 { border-radius: 90px; 
    padding-top: 90px}
    #3 { border-radius: 90px; 
    padding-top: 120px}
    </style>
            
            <h1> Classement International </h1>
            ";
        // line 18
        $context["i"] = 0;
        // line 19
        echo "        <table border=\"0\"> 
            <tr style=\"width: 100%\">
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["joueurs"]) ? $context["joueurs"] : $this->getContext($context, "joueurs")));
        foreach ($context['_seq'] as $context["key"] => $context["joueur"]) {
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 3)) {
                // line 22
                echo "
                    <td style=\"width: 5%\">  <img id=\"";
                // line 23
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\"  src=\"data:image/png;base64,";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imagestroisJoueurs"]) ? $context["imagestroisJoueurs"] : $this->getContext($context, "imagestroisJoueurs")), $context["key"], array(), "array"), "html", null, true);
                echo "\" width=\"90px\" height=\"150px\" alt=\"\" />
                    </td>
                    ";
                // line 25
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 26
                echo "

                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['joueur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                        </tr>
                    </table>

                <table class=\"table table\" colspan=\"2\">
                        <thead>
                            <tr>
                                <th>
                                    Num
                                </th>
                                <th>

                                </th>
                                <th>
                                    Joueur
                                </th>
                                <th>

                                </th>
                                <th>
                                    Club
                                </th>
                               

                            </tr>
                        </thead>
                        <tbody>
                      
                                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["joueurs"]) ? $context["joueurs"] : $this->getContext($context, "joueurs")));
        foreach ($context['_seq'] as $context["key"] => $context["joueur"]) {
            // line 57
            echo "
                                    <tr>
                                        <td>
                                                ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "classementInternational", array()), "html", null, true);
            echo "
                                            </td>

                                            <td >
                                                <img class=\"img-responsive\" src=\"data:image/png;base64,";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imagesJoueurs"]) ? $context["imagesJoueurs"] : $this->getContext($context, "imagesJoueurs")), $context["key"], array(), "array"), "html", null, true);
            echo "\" width=\"50px\" height=\"150px\" alt=\"\" />

                                            </td>


                                            <td >
                                                ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "nomJoueur", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "prenomJoueur", array()), "html", null, true);
            echo "
                                            </td>
                                            <td width=\"2\">
                                                <img class=\"img-responsive\" src=\"data:image/png;base64,";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imagesClubs"]) ? $context["imagesClubs"] : $this->getContext($context, "imagesClubs")), $context["key"], array(), "array"), "html", null, true);
            echo "\" width =\"20px\" alt=\"\" />

                                            </td>
                                            <td>
                                                ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["joueur"], "idClub", array()), "nomClub", array()), "html", null, true);
            echo "
                                            </td>
                                           

                                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['joueur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
                                        </tbody>
                                    </table>
                        

        ";
    }

    public function getTemplateName()
    {
        return "FTTUtilisateurBundle:Joueur:classementInternationnal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 83,  145 => 77,  138 => 73,  130 => 70,  121 => 64,  114 => 60,  109 => 57,  105 => 56,  76 => 29,  67 => 26,  65 => 25,  58 => 23,  55 => 22,  50 => 21,  46 => 19,  44 => 18,  31 => 7,  28 => 6,  11 => 1,);
    }
}
/* {% extends "FTTUtilisateurBundle::layoutGlobal.html.twig" %}*/
/* */
/* */
/*         */
/*         */
/*         {% block body%}*/
/*             */
/*              <style>*/
/*     #1 { border-radius: 90px; */
/*     padding-top: 20px}*/
/*     #2 { border-radius: 90px; */
/*     padding-top: 90px}*/
/*     #3 { border-radius: 90px; */
/*     padding-top: 120px}*/
/*     </style>*/
/*             */
/*             <h1> Classement International </h1>*/
/*             {% set i=0 %}*/
/*         <table border="0"> */
/*             <tr style="width: 100%">*/
/*                 {% for key,joueur in joueurs if i<3 %}*/
/* */
/*                     <td style="width: 5%">  <img id="{{i}}"  src="data:image/png;base64,{{ imagestroisJoueurs[key] }}" width="90px" height="150px" alt="" />*/
/*                     </td>*/
/*                     {% set i= i+1 %}*/
/* */
/* */
/*                         {% endfor %}*/
/*                         </tr>*/
/*                     </table>*/
/* */
/*                 <table class="table table" colspan="2">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>*/
/*                                     Num*/
/*                                 </th>*/
/*                                 <th>*/
/* */
/*                                 </th>*/
/*                                 <th>*/
/*                                     Joueur*/
/*                                 </th>*/
/*                                 <th>*/
/* */
/*                                 </th>*/
/*                                 <th>*/
/*                                     Club*/
/*                                 </th>*/
/*                                */
/* */
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                       */
/*                                 {% for key,joueur in joueurs %}*/
/* */
/*                                     <tr>*/
/*                                         <td>*/
/*                                                 {{joueur.classementInternational}}*/
/*                                             </td>*/
/* */
/*                                             <td >*/
/*                                                 <img class="img-responsive" src="data:image/png;base64,{{ imagesJoueurs[key] }}" width="50px" height="150px" alt="" />*/
/* */
/*                                             </td>*/
/* */
/* */
/*                                             <td >*/
/*                                                 {{joueur.nomJoueur}}  {{joueur.prenomJoueur}}*/
/*                                             </td>*/
/*                                             <td width="2">*/
/*                                                 <img class="img-responsive" src="data:image/png;base64,{{ imagesClubs[key] }}" width ="20px" alt="" />*/
/* */
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{joueur.idClub.nomClub}}*/
/*                                             </td>*/
/*                                            */
/* */
/*                                         </tr>*/
/*                                         {% endfor %}*/
/* */
/*                                         </tbody>*/
/*                                     </table>*/
/*                         */
/* */
/*         {% endblock %}*/
/* */
/* */
/*         */
