<?php

/* FTTArbitreBundle:ResultatMatch:listResultatMatch.html.twig */
class __TwigTemplate_a1d9389756c2d0e2de0fb11cd206c2d4718d0ebb910d0cb8a6c0bf20c68fdb2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTArbitreBundle::layoutArbitre.html.twig", "FTTArbitreBundle:ResultatMatch:listResultatMatch.html.twig", 1);
        $this->blocks = array(
            'bodyAdmin' => array($this, 'block_bodyAdmin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FTTArbitreBundle::layoutArbitre.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 7
        echo "         
            <h1>Liste des matchs </h1>       
             <table class=\"table table-bordered\">
                    <thead>
                        <tr>
                            <th>
                                Type de Match
                            </th>
                            <th>
                                Date de Match
                            </th>
                          
                            <th>
                            </th>

                        </tr>
                    </thead>
                    <body>       
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matchs"]) ? $context["matchs"] : $this->getContext($context, "matchs")));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 26
            echo "       
        <tr>
                            <td>
                                ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "typeMatch", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                 ";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["match"], "dateMatch", array()), "d-m-Y"), "html", null, true);
            echo "
                            </td>
                           
              <td>
           <a class=\"btn btn-info btn-xs\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_CompteRendu", array("id" => $this->getAttribute($context["match"], "id", array()))), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-pencil\"></i> Modifier</a>                
              </td>
               </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    
 </body>
</table>
";
    }

    public function getTemplateName()
    {
        return "FTTArbitreBundle:ResultatMatch:listResultatMatch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 41,  73 => 36,  66 => 32,  60 => 29,  55 => 26,  51 => 25,  31 => 7,  28 => 6,  11 => 1,);
    }
}
/* {% extends "FTTArbitreBundle::layoutArbitre.html.twig" %}*/
/* */
/* */
/*         */
/*         */
/*         {% block bodyAdmin %}*/
/*          */
/*             <h1>Liste des matchs </h1>       */
/*              <table class="table table-bordered">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>*/
/*                                 Type de Match*/
/*                             </th>*/
/*                             <th>*/
/*                                 Date de Match*/
/*                             </th>*/
/*                           */
/*                             <th>*/
/*                             </th>*/
/* */
/*                         </tr>*/
/*                     </thead>*/
/*                     <body>       */
/*     {% for match in matchs %}*/
/*        */
/*         <tr>*/
/*                             <td>*/
/*                                 {{match.typeMatch}}*/
/*                             </td>*/
/*                             <td>*/
/*                                  {{match.dateMatch|date('d-m-Y')}}*/
/*                             </td>*/
/*                            */
/*               <td>*/
/*            <a class="btn btn-info btn-xs" href="{{path('modifier_CompteRendu',{'id':match.id})}}">*/
/*                                     <i class="fa fa-pencil"></i> Modifier</a>                */
/*               </td>*/
/*                </tr>*/
/*     {% endfor %}*/
/*     */
/*  </body>*/
/* </table>*/
/* {% endblock %}*/
/* */
/* */
