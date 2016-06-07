<?php

/* FTTUtilisateurBundle:Joueur:classementNationnal.html.twig */
class __TwigTemplate_0512865da321a07b6eb5544ef02d98da0b7622804a0a267fc6fdc84b72157ef8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTUtilisateurBundle::layoutGlobal.html.twig", "FTTUtilisateurBundle:Joueur:classementNationnal.html.twig", 1);
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <style>
  
    
    
 
    </style>



    <h1> Classement National </h1>
      <div class=\"row\">\t
              ";
        // line 16
        $context["i"] = 0;
        // line 17
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["joueurs"]) ? $context["joueurs"] : $this->getContext($context, "joueurs")));
        foreach ($context['_seq'] as $context["key"] => $context["joueur"]) {
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 3)) {
                // line 18
                echo "                  
               <div class=\"col-md-3 col-sm-3 mix category_1\">
        
              <div>
                  
             
\t\t
\t
                  <img class=\"img-thumbnail\" src=\"data:image/png;base64,";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imagestroisJoueurs"]) ? $context["imagestroisJoueurs"] : $this->getContext($context, "imagestroisJoueurs")), $context["key"], array(), "array"), "html", null, true);
                echo "\" alt=\"\" height=\"150px\" width=\"120px\" />
                      ";
                // line 27
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 28
                echo "                      <br/>
              </div>
               </div>
                      
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['joueur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "      </div>
                      

                    <br>
                    <br>


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
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["joueurs"]) ? $context["joueurs"] : $this->getContext($context, "joueurs")));
        foreach ($context['_seq'] as $context["key"] => $context["joueur"]) {
            // line 65
            echo "
                                    <tr>
                                        <td>
                                                ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "classementNational", array()), "html", null, true);
            echo "
                                            </td>

                                            <td >
                                                <img class=\"img-responsive\" src=\"data:image/png;base64,";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imagesJoueurs"]) ? $context["imagesJoueurs"] : $this->getContext($context, "imagesJoueurs")), $context["key"], array(), "array"), "html", null, true);
            echo "\" width=\"50px\" height=\"150px\" alt=\"\" />

                                            </td>


                                            <td >
                                                ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "nomJoueur", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "prenomJoueur", array()), "html", null, true);
            echo "
                                            </td>
                                            <td width=\"2\">
                                                <img class=\"img-responsive\" src=\"data:image/png;base64,";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imagesClubs"]) ? $context["imagesClubs"] : $this->getContext($context, "imagesClubs")), $context["key"], array(), "array"), "html", null, true);
            echo "\" width =\"20px\" alt=\"\" />

                                            </td>
                                            <td>
                                                ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["joueur"], "idClub", array()), "nomClub", array()), "html", null, true);
            echo "
                                            </td>
                                           

                                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['joueur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "
                                        </tbody>
                                    </table>


                                    ";
    }

    public function getTemplateName()
    {
        return "FTTUtilisateurBundle:Joueur:classementNationnal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 91,  152 => 85,  145 => 81,  137 => 78,  128 => 72,  121 => 68,  116 => 65,  112 => 64,  79 => 33,  68 => 28,  66 => 27,  62 => 26,  52 => 18,  46 => 17,  44 => 16,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "FTTUtilisateurBundle::layoutGlobal.html.twig" %}*/
/* */
/* */
/* {% block body%}*/
/*     <style>*/
/*   */
/*     */
/*     */
/*  */
/*     </style>*/
/* */
/* */
/* */
/*     <h1> Classement National </h1>*/
/*       <div class="row">	*/
/*               {% set i=0 %}*/
/*               {% for key,joueur in joueurs if i<3%}*/
/*                   */
/*                <div class="col-md-3 col-sm-3 mix category_1">*/
/*         */
/*               <div>*/
/*                   */
/*              */
/* 		*/
/* 	*/
/*                   <img class="img-thumbnail" src="data:image/png;base64,{{ imagestroisJoueurs[key] }}" alt="" height="150px" width="120px" />*/
/*                       {% set i= i+1 %}*/
/*                       <br/>*/
/*               </div>*/
/*                </div>*/
/*                       */
/*         {% endfor %}*/
/*       </div>*/
/*                       */
/* */
/*                     <br>*/
/*                     <br>*/
/* */
/* */
/*                     <table class="table table" colspan="2">*/
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
/*                                                 {{joueur.classementNational}}*/
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
/* */
/* */
/*                                     {% endblock %}*/
/* */
/* */
/* */
