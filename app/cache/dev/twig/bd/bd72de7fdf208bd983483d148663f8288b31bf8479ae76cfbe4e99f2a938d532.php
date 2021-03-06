<?php

/* FTTAdminBundle:CarriereJoueur:modifierCarriereJoueur.html.twig */
class __TwigTemplate_92a182200b7f4d93ce6be838446823c06bc8e0a9de50c736442389dd4892fced extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:CarriereJoueur:modifierCarriereJoueur.html.twig", 2);
        $this->blocks = array(
            'bodyAdmin' => array($this, 'block_bodyAdmin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FTTAdminBundle::layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 8
        echo "
              <div class=\"row\">\t
              ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["joueurs"]) ? $context["joueurs"] : $this->getContext($context, "joueurs")));
        foreach ($context['_seq'] as $context["key"] => $context["joueur"]) {
            // line 11
            echo "               <div class=\"col-md-6 col-sm-4 mix category_1\">
        
              <div>
                  
             
\t\t
\t
\t      <img class=\"img-responsive\" src=\"data:image/png;base64,";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imagesJoueurs"]) ? $context["imagesJoueurs"] : $this->getContext($context, "imagesJoueurs")), $context["key"], array(), "array"), "html", null, true);
            echo "\" alt=\"\" height=\"80px\" width=\"120px\"  />
                      </a>
                      <br/>
              </div>
              
     <div class=\"mix-details\">
     <table class=\"table table-striped table-bordered table-hover\" >
\t\t\t
      <tr>
            <th>Joueur</th>
\t    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "nomJoueur", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "prenomJoueur", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
      <th>Modifier carrière </th>
\t    <td> 
                 
\t      <a class=\"btn btn-sm green filter-submit margin-bottom\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail_Carriere_Joueur_Modification", array("id" => $this->getAttribute($context["joueur"], "id", array()))), "html", null, true);
            echo "\" ><i class=\"fa fa- fa-globe\"></i> Cliquez ici </a>\t
\t          
            </td>
            
\t</tr>
          </table>
           </div>
          </div>
            
                      
                    
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['joueur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "               </div>
               
               ";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:CarriereJoueur:modifierCarriereJoueur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 46,  72 => 34,  61 => 28,  48 => 18,  39 => 11,  35 => 10,  31 => 8,  28 => 7,  11 => 2,);
    }
}
/*   */
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* */
/*         */
/*         */
/*         {% block bodyAdmin %}*/
/* */
/*               <div class="row">	*/
/*               {% for key,joueur in joueurs %}*/
/*                <div class="col-md-6 col-sm-4 mix category_1">*/
/*         */
/*               <div>*/
/*                   */
/*              */
/* 		*/
/* 	*/
/* 	      <img class="img-responsive" src="data:image/png;base64,{{ imagesJoueurs[key] }}" alt="" height="80px" width="120px"  />*/
/*                       </a>*/
/*                       <br/>*/
/*               </div>*/
/*               */
/*      <div class="mix-details">*/
/*      <table class="table table-striped table-bordered table-hover" >*/
/* 			*/
/*       <tr>*/
/*             <th>Joueur</th>*/
/* 	    <td>{{joueur.nomJoueur}} {{joueur.prenomJoueur}}</td>*/
/*       </tr>*/
/*       <tr>*/
/*       <th>Modifier carrière </th>*/
/* 	    <td> */
/*                  */
/* 	      <a class="btn btn-sm green filter-submit margin-bottom" href="{{path('detail_Carriere_Joueur_Modification', {'id':joueur.id})}}" ><i class="fa fa- fa-globe"></i> Cliquez ici </a>	*/
/* 	          */
/*             </td>*/
/*             */
/* 	</tr>*/
/*           </table>*/
/*            </div>*/
/*           </div>*/
/*             */
/*                       */
/*                     */
/*             {% endfor %}*/
/*                </div>*/
/*                */
/*                {% endblock %}*/
/*  */
