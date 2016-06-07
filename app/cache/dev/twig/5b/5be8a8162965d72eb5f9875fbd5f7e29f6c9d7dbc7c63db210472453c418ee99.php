<?php

/* FTTAdminBundle:Evenement:listevenement.html.twig */
class __TwigTemplate_80e1aef9db9d210a0bbad627336ec627bcbd5cbd3b4c97065c254252b50e49a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:Evenement:listevenement.html.twig", 1);
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

    // line 6
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 7
        echo "                <a class=\"btn btn-success btn-xs\" href=\"";
        echo $this->env->getExtension('routing')->getPath("ajouter_events");
        echo "\">
                    <i class=\"fa fa-plus\"></i> Ajouter Un nouveau événement
                </a>
                        <div id=\"page-content\">  
        <table class=\"table table-bordered\" id=\"dev-table\" >
                  <thead>
                        <tr>
                           
                            <th>
                                Titre de l'événement
                            </th>
                            <th>
                                Type de l'événement
                            </th>
                            <th>
                                Date début
                            </th>
                            <th>
                                Date fin
                            </th>
                            <th>
                                Supprimer
                            </th>
                            <th>
                                Modifier
                            </th>
                        </tr>
                    </thead>
                   <tbody>
                     
                        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) ? $context["evenements"] : $this->getContext($context, "evenements")));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 38
            echo "                        <tr>
                           
                            <td>
                                ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "nomEvenement", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "typeEvenement", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evenement"], "dateDebut", array()), "d/m/Y"), "html", null, true);
            echo "
                            </td>
                               <td>
                                ";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evenement"], "dateFin", array()), "d/m/Y"), "html", null, true);
            echo "
                            </td>   
                            <td>
                                <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_events", array("id" => $this->getAttribute($context["evenement"], "id", array()))), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-trash-o\"></i> Supprimer</a>
                            </td>
                            <td>
                                <a class=\"btn btn-info btn-xs\" href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_events", array("id" => $this->getAttribute($context["evenement"], "id", array()))), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-pencil\"></i> Modifier</a>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                        
                    </tbody>
                </table>
                     
        
                   </div>      



  


        ";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:Evenement:listevenement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 62,  105 => 57,  98 => 53,  92 => 50,  86 => 47,  80 => 44,  74 => 41,  69 => 38,  65 => 37,  31 => 7,  28 => 6,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* */
/*         */
/*         */
/*         {% block bodyAdmin %}*/
/*                 <a class="btn btn-success btn-xs" href="{{path('ajouter_events')}}">*/
/*                     <i class="fa fa-plus"></i> Ajouter Un nouveau événement*/
/*                 </a>*/
/*                         <div id="page-content">  */
/*         <table class="table table-bordered" id="dev-table" >*/
/*                   <thead>*/
/*                         <tr>*/
/*                            */
/*                             <th>*/
/*                                 Titre de l'événement*/
/*                             </th>*/
/*                             <th>*/
/*                                 Type de l'événement*/
/*                             </th>*/
/*                             <th>*/
/*                                 Date début*/
/*                             </th>*/
/*                             <th>*/
/*                                 Date fin*/
/*                             </th>*/
/*                             <th>*/
/*                                 Supprimer*/
/*                             </th>*/
/*                             <th>*/
/*                                 Modifier*/
/*                             </th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                    <tbody>*/
/*                      */
/*                         {% for evenement in evenements %}*/
/*                         <tr>*/
/*                            */
/*                             <td>*/
/*                                 {{evenement.nomEvenement}}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{evenement.typeEvenement}}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{evenement.dateDebut|date("d/m/Y")}}*/
/*                             </td>*/
/*                                <td>*/
/*                                 {{evenement.dateFin|date("d/m/Y")}}*/
/*                             </td>   */
/*                             <td>*/
/*                                 <a class="btn btn-danger btn-xs" href="{{path('supprimer_events', {'id':evenement.id})}}">*/
/*                                     <i class="fa fa-trash-o"></i> Supprimer</a>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <a class="btn btn-info btn-xs" href="{{path('modifier_events',{'id':evenement.id})}}">*/
/*                                     <i class="fa fa-pencil"></i> Modifier</a>*/
/*                             </td>*/
/*                         </tr>*/
/*                         {% endfor %}*/
/*                         */
/*                     </tbody>*/
/*                 </table>*/
/*                      */
/*         */
/*                    </div>      */
/* */
/* */
/* */
/*   */
/* */
/* */
/*         {% endblock %}*/
/* */
/* */
/*         */
