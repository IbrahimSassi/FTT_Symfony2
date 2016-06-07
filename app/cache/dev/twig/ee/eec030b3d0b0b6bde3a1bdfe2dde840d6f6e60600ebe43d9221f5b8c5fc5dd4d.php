<?php

/* FTTAdminBundle:DonsClubs:listdonsClub.html.twig */
class __TwigTemplate_f3467da593d007b277ed156b2035e04312bbda021f7b43ab51fbc9275ef3898e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:DonsClubs:listdonsClub.html.twig", 1);
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
        echo "               <a class=\"btn btn-success btn-xs\" href=\"";
        echo $this->env->getExtension('routing')->getPath("attribuer_dons_club");
        echo "\">
                    <i class=\"fa fa-plus\"></i> attribuer don a un club
                </a>
                 <a class=\"\" style=\"margin-left: 750px;\"href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("list_dons");
        echo "\">
                        <i class=\"fa fa-tag\" ></i> Liste des dons 
                </a>
                <table class=\"table table-bordered\" id=\"dev-table\" >
                    <thead>
                        <tr>
                           
                            <th>
                                 club
                            </th>
                            <th>
                              <a  href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("list_dons");
        echo "\">Type du don </a><i class=\"fa fa-tag\" class=\"btn btn-info btn-xs\" ></i> 
                            </th>
                             <th>
                                Date d'affectation
                            </th>
                            <th>
                                Annuler
                            </th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["donsClubss"]) ? $context["donsClubss"] : $this->getContext($context, "donsClubss")));
        foreach ($context['_seq'] as $context["_key"] => $context["donsClubs"]) {
            // line 34
            echo "                        <tr>
                            
                            <td>
                                  ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["donsClubs"], "idClub", array()), "nomClub", array()), "html", null, true);
            echo "
                                    
                            </td>
                           
                               <td>   
                        <u>  <a  href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_dons", array("id" => $this->getAttribute($context["donsClubs"], "id", array()))), "html", null, true);
            echo "\">   
                            ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["donsClubs"], "idDon", array()), "typeDon", array()), "html", null, true);
            echo "</u>  </a> </td> 

                                 <td>
                                ";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["donsClubs"], "dateAffection", array()), "d/m/Y"), "html", null, true);
            echo "
                            </td>
                            <td>
                                <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Annuler_donsclubs", array("id" => $this->getAttribute($context["donsClubs"], "id", array()))), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-trash-o\"></i> Annuler</a>
                            </td>
                          
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['donsClubs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                        
                    </tbody>
                </table>
                        

        ";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:DonsClubs:listdonsClub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 55,  100 => 49,  94 => 46,  88 => 43,  84 => 42,  76 => 37,  71 => 34,  67 => 33,  52 => 21,  38 => 10,  31 => 7,  28 => 6,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* */
/*         */
/*         */
/*         {% block bodyAdmin %}*/
/*                <a class="btn btn-success btn-xs" href="{{path('attribuer_dons_club')}}">*/
/*                     <i class="fa fa-plus"></i> attribuer don a un club*/
/*                 </a>*/
/*                  <a class="" style="margin-left: 750px;"href="{{path('list_dons')}}">*/
/*                         <i class="fa fa-tag" ></i> Liste des dons */
/*                 </a>*/
/*                 <table class="table table-bordered" id="dev-table" >*/
/*                     <thead>*/
/*                         <tr>*/
/*                            */
/*                             <th>*/
/*                                  club*/
/*                             </th>*/
/*                             <th>*/
/*                               <a  href="{{path('list_dons')}}">Type du don </a><i class="fa fa-tag" class="btn btn-info btn-xs" ></i> */
/*                             </th>*/
/*                              <th>*/
/*                                 Date d'affectation*/
/*                             </th>*/
/*                             <th>*/
/*                                 Annuler*/
/*                             </th>*/
/*                           */
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for donsClubs in donsClubss %}*/
/*                         <tr>*/
/*                             */
/*                             <td>*/
/*                                   {{donsClubs.idClub.nomClub}}*/
/*                                     */
/*                             </td>*/
/*                            */
/*                                <td>   */
/*                         <u>  <a  href="{{path('list_dons', {'id':donsClubs.id})}}">   */
/*                             {{donsClubs.idDon.typeDon}}</u>  </a> </td> */
/* */
/*                                  <td>*/
/*                                 {{donsClubs.dateAffection|date("d/m/Y")}}*/
/*                             </td>*/
/*                             <td>*/
/*                                 <a class="btn btn-danger btn-xs" href="{{path('Annuler_donsclubs', {'id':donsClubs.id})}}">*/
/*                                     <i class="fa fa-trash-o"></i> Annuler</a>*/
/*                             </td>*/
/*                           */
/*                         </tr>*/
/*                         {% endfor %}*/
/*                         */
/*                     </tbody>*/
/*                 </table>*/
/*                         */
/* */
/*         {% endblock %}*/
/* */
/* */
/*         */
