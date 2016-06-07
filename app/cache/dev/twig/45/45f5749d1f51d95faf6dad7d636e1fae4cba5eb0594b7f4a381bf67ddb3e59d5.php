<?php

/* FTTAdminBundle:Club:listClub.html.twig */
class __TwigTemplate_19cdadbb02ea01800b0ab8813a16f54aea99ae83c6908d12fc483d2f88c35bc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:Club:listClub.html.twig", 1);
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
        echo $this->env->getExtension('routing')->getPath("ajouter_club");
        echo "\">
                    <i class=\"fa fa-plus\"></i> Ajouter Un nouveau club
                </a>
                <table class=\"table table-bordered\" id=\"dev-table\">
                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Nom
                            </th>
                            <th>
                                Logo
                            </th>
                            <th>
                                Date de fondation
                            </th>
                             <th>
                                Adresse
                            </th>
                            <th>
                                Supp
                            </th>
                            <th>
                                MAJ
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clubs"]) ? $context["clubs"] : $this->getContext($context, "clubs")));
        foreach ($context['_seq'] as $context["key"] => $context["club"]) {
            // line 38
            echo "                        <tr>
                            <td>
                                ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["club"], "id", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["club"], "nomClub", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                <img class=\"img-responsive\" src=\"data:image/png;base64,";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["LogosClubs"]) ? $context["LogosClubs"] : $this->getContext($context, "LogosClubs")), $context["key"], array(), "array"), "html", null, true);
            echo "\" alt=\"\" />
                            </td>
                            <td>
                                ";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["club"], "dateFondation", array()), "d/m/Y"), "html", null, true);
            echo "
                            </td>
                             <td>
                                ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["club"], "adresseClub", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_club", array("id" => $this->getAttribute($context["club"], "id", array()))), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-trash-o\"></i> Supprimer</a>
                            </td>
                            <td>
                                <a class=\"btn btn-info btn-xs\" href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_club", array("id" => $this->getAttribute($context["club"], "id", array()))), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-pencil\"></i> Modifier</a>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['club'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                        
                    </tbody>
                </table>
                        

        ";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:Club:listClub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 64,  110 => 59,  103 => 55,  97 => 52,  91 => 49,  85 => 46,  79 => 43,  73 => 40,  69 => 38,  65 => 37,  31 => 7,  28 => 6,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* */
/*         */
/*         */
/*         {% block bodyAdmin %}*/
/*                 <a class="btn btn-success btn-xs" href="{{path('ajouter_club')}}">*/
/*                     <i class="fa fa-plus"></i> Ajouter Un nouveau club*/
/*                 </a>*/
/*                 <table class="table table-bordered" id="dev-table">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>*/
/*                                 #*/
/*                             </th>*/
/*                             <th>*/
/*                                 Nom*/
/*                             </th>*/
/*                             <th>*/
/*                                 Logo*/
/*                             </th>*/
/*                             <th>*/
/*                                 Date de fondation*/
/*                             </th>*/
/*                              <th>*/
/*                                 Adresse*/
/*                             </th>*/
/*                             <th>*/
/*                                 Supp*/
/*                             </th>*/
/*                             <th>*/
/*                                 MAJ*/
/*                             </th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for key,club in clubs %}*/
/*                         <tr>*/
/*                             <td>*/
/*                                 {{club.id}}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{club.nomClub}}*/
/*                             </td>*/
/*                             <td>*/
/*                                 <img class="img-responsive" src="data:image/png;base64,{{ LogosClubs[key] }}" alt="" />*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{club.dateFondation|date("d/m/Y")}}*/
/*                             </td>*/
/*                              <td>*/
/*                                 {{club.adresseClub}}*/
/*                             </td>*/
/*                             <td>*/
/*                                 <a class="btn btn-danger btn-xs" href="{{path('supprimer_club', {'id':club.id})}}">*/
/*                                     <i class="fa fa-trash-o"></i> Supprimer</a>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <a class="btn btn-info btn-xs" href="{{path('modifier_club',{'id':club.id})}}">*/
/*                                     <i class="fa fa-pencil"></i> Modifier</a>*/
/*                             </td>*/
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
