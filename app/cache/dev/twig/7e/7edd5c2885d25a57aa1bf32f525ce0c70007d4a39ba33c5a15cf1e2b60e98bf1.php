<?php

/* FTTAdminBundle:Complexe:ListComplexe.html.twig */
class __TwigTemplate_fdf7e53de6604cdc0e614047663413be86f2e0de3417700200a80fbfff6017a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:Complexe:ListComplexe.html.twig", 1);
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
        echo $this->env->getExtension('routing')->getPath("ajouter_complexe");
        echo "\">
                    <i class=\"fa fa-plus\"></i> Ajouter Un nouveau complexe
                </a>
                <table class=\"table table-bordered\" id=\"dev-table\" >
                    <thead>
                        <tr>
                            
                            <th>
                                Nom
                            </th>
                            <th>
                                Place
                            </th>
                            <th>
                                Nombre de stade
                            </th>
                            <th>
                                Supp
                            </th>
                            <th>
                                MAJ
                            </th>
                            <th>
                                lieux
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["complexes"]) ? $context["complexes"] : $this->getContext($context, "complexes")));
        foreach ($context['_seq'] as $context["_key"] => $context["complexe"]) {
            // line 36
            echo "                        <tr>
                            <td>
                                ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["complexe"], "nomComplexe", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["complexe"], "place", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["complexe"], "nbStade", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_complexe", array("id" => $this->getAttribute($context["complexe"], "id", array()))), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-trash-o\"></i> Supprimer</a>
                            </td>
                            <td>
                                <a class=\"btn btn-info btn-xs\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_complexe", array("id" => $this->getAttribute($context["complexe"], "id", array()))), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-pencil\"></i> Modifier</a>
                            </td>
                             <td>
                                <a class=\"btn btn-info btn-xs\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("interface_map", array("id" => $this->getAttribute($context["complexe"], "id", array()))), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-plus\"></i> consulter lieu</a>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['complexe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                        
                    </tbody>
                </table>
                        

        ";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:Complexe:ListComplexe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 60,  103 => 55,  96 => 51,  89 => 47,  83 => 44,  77 => 41,  71 => 38,  67 => 36,  63 => 35,  31 => 7,  28 => 6,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* */
/*         */
/*         */
/*         {% block bodyAdmin %}*/
/*                 <a class="btn btn-success btn-xs" href="{{path('ajouter_complexe')}}">*/
/*                     <i class="fa fa-plus"></i> Ajouter Un nouveau complexe*/
/*                 </a>*/
/*                 <table class="table table-bordered" id="dev-table" >*/
/*                     <thead>*/
/*                         <tr>*/
/*                             */
/*                             <th>*/
/*                                 Nom*/
/*                             </th>*/
/*                             <th>*/
/*                                 Place*/
/*                             </th>*/
/*                             <th>*/
/*                                 Nombre de stade*/
/*                             </th>*/
/*                             <th>*/
/*                                 Supp*/
/*                             </th>*/
/*                             <th>*/
/*                                 MAJ*/
/*                             </th>*/
/*                             <th>*/
/*                                 lieux*/
/*                             </th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for complexe in complexes %}*/
/*                         <tr>*/
/*                             <td>*/
/*                                 {{complexe.nomComplexe}}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{complexe.place}}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{complexe.nbStade}}*/
/*                             </td>*/
/*                             <td>*/
/*                                 <a class="btn btn-danger btn-xs" href="{{path('supprimer_complexe', {'id':complexe.id})}}">*/
/*                                     <i class="fa fa-trash-o"></i> Supprimer</a>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <a class="btn btn-info btn-xs" href="{{path('modifier_complexe',{'id':complexe.id})}}">*/
/*                                     <i class="fa fa-pencil"></i> Modifier</a>*/
/*                             </td>*/
/*                              <td>*/
/*                                 <a class="btn btn-info btn-xs" href="{{path('interface_map', {'id':complexe.id})}}">*/
/*                                     <i class="fa fa-plus"></i> consulter lieu</a>*/
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
/* */
