<?php

/* FTTAdminBundle:Reclamation:listReclamation.html.twig */
class __TwigTemplate_cbb0f731fdc9b8beceb874df0c19cb7c17fc039c567553d43b8f810dbf51b79d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:Reclamation:listReclamation.html.twig", 2);
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
            
                <table class=\"table table-bordered\">
                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                De la part de
                            </th>
                            <th>
                                Sujet
                            </th>
                            <th>
                                Description
                            </th>
                             
                            <th>
                                Reponse
                            </th>
                             <th>
                                Action
                            </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                          ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) ? $context["reclamations"] : $this->getContext($context, "reclamations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 37
            echo "                        <tr>
                            
                            <td>
                                ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "id", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "email", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "sujet", array()), "html", null, true);
            echo "
                            </td>
                          
                            <td>
                                ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "description", array()), "html", null, true);
            echo "
                            </td>
                                <td>
                                ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "reponseReclamation", array()), "html", null, true);
            echo "
                            </td>
                            
                            <td>
                                <a class=\"btn btn-success btn-xs\" href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("repondre_reclamations", array("id" => $this->getAttribute($context["reclamation"], "id", array()))), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-pencil\"></i>Repondre</a>
                            </td>
                            
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                        
                    </tbody>
                </table>
               
               ";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:Reclamation:listReclamation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 63,  102 => 57,  95 => 53,  89 => 50,  82 => 46,  76 => 43,  70 => 40,  65 => 37,  61 => 36,  31 => 8,  28 => 7,  11 => 2,);
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
/*             */
/*                 <table class="table table-bordered">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>*/
/*                                 #*/
/*                             </th>*/
/*                             <th>*/
/*                                 De la part de*/
/*                             </th>*/
/*                             <th>*/
/*                                 Sujet*/
/*                             </th>*/
/*                             <th>*/
/*                                 Description*/
/*                             </th>*/
/*                              */
/*                             <th>*/
/*                                 Reponse*/
/*                             </th>*/
/*                              <th>*/
/*                                 Action*/
/*                             </th>*/
/*                             */
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                           {% for reclamation in reclamations %}*/
/*                         <tr>*/
/*                             */
/*                             <td>*/
/*                                 {{reclamation.id}}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{reclamation.email}}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{reclamation.sujet}}*/
/*                             </td>*/
/*                           */
/*                             <td>*/
/*                                 {{reclamation.description}}*/
/*                             </td>*/
/*                                 <td>*/
/*                                 {{reclamation.reponseReclamation}}*/
/*                             </td>*/
/*                             */
/*                             <td>*/
/*                                 <a class="btn btn-success btn-xs" href="{{path('repondre_reclamations', {'id':reclamation.id})}}">*/
/*                                     <i class="fa fa-pencil"></i>Repondre</a>*/
/*                             </td>*/
/*                             */
/*                         </tr>*/
/*                         {% endfor %}*/
/*                         */
/*                     </tbody>*/
/*                 </table>*/
/*                */
/*                {% endblock %}*/
