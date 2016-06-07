<?php

/* FTTAdminBundle:User:listUsers.html.twig */
class __TwigTemplate_83ef7bd95835eda4682abd61669e7bd9cabb5936fca6c1c8956305870698b0d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:User:listUsers.html.twig", 1);
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

    // line 3
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (twig_test_empty((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")))) {
            // line 5
            echo "        <br><br><br>
        <div id=\"MonElement\" class=\"EX_div\" style=\"diplay:block;\"> <font color=#FF0000> 
            <h1 align='center' style='color:red;'> il n'existe aucun compte </h1></font> 
        </div> 
    ";
        } else {
            // line 10
            echo "        <table class=\"table table-bordered\" id=\"dev-table\" style=\"width: 100%\">
            <thead>
                <tr>
                    <th>
                        Nom
                    </th>
                    <th>
                        Prenom
                    </th>
                    <th>
                        Age
                    </th>
                    <th>
                        Telephone
                    </th>
                    <th>
                        E-mail
                    </th>
                    <th>
                        Immatricule
                    </th>
                    <th>
                        Departement Admin
                    </th>
                    <th>
                        Categorie Arbitre
                    </th>
                    <th>
                        Specialite Medecin
                    </th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 44
                echo "                    <tr>
                        <td>
                            ";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nomUser", array()), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenomUser", array()), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "ageUser", array()), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "telUser", array()), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "immatricule", array()), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "departementAdmin", array()), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "categorieArbitre", array()), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "specialiteMedecin", array()), "html", null, true);
                echo "
                        </td>
                        <td>
                            <a class=\"btn btn-danger btn-xs\" href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bloquer_user", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">
                                <i class=\"fa fa-trash-o\"></i> Bloquer</a>
                        </td>
                        <td>
                            <a class=\"btn btn-info btn-xs\" href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_user", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">
                                <i class=\"fa fa-pencil\"></i> Modifier</a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "            </tbody>
        </table>
    ";
        }
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:User:listUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 82,  145 => 77,  138 => 73,  132 => 70,  126 => 67,  120 => 64,  114 => 61,  108 => 58,  102 => 55,  96 => 52,  90 => 49,  84 => 46,  80 => 44,  76 => 43,  41 => 10,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* {% block bodyAdmin %}*/
/*     {% if users is empty %}*/
/*         <br><br><br>*/
/*         <div id="MonElement" class="EX_div" style="diplay:block;"> <font color=#FF0000> */
/*             <h1 align='center' style='color:red;'> il n'existe aucun compte </h1></font> */
/*         </div> */
/*     {% else %}*/
/*         <table class="table table-bordered" id="dev-table" style="width: 100%">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>*/
/*                         Nom*/
/*                     </th>*/
/*                     <th>*/
/*                         Prenom*/
/*                     </th>*/
/*                     <th>*/
/*                         Age*/
/*                     </th>*/
/*                     <th>*/
/*                         Telephone*/
/*                     </th>*/
/*                     <th>*/
/*                         E-mail*/
/*                     </th>*/
/*                     <th>*/
/*                         Immatricule*/
/*                     </th>*/
/*                     <th>*/
/*                         Departement Admin*/
/*                     </th>*/
/*                     <th>*/
/*                         Categorie Arbitre*/
/*                     </th>*/
/*                     <th>*/
/*                         Specialite Medecin*/
/*                     </th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% for user in users %}*/
/*                     <tr>*/
/*                         <td>*/
/*                             {{user.nomUser}}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{user.prenomUser}}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{user.ageUser}}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{user.telUser}}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{user.email}}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{user.immatricule}}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{user.departementAdmin}}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{user.categorieArbitre}}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{user.specialiteMedecin}}*/
/*                         </td>*/
/*                         <td>*/
/*                             <a class="btn btn-danger btn-xs" href="{{path('bloquer_user', {'id':user.id})}}">*/
/*                                 <i class="fa fa-trash-o"></i> Bloquer</a>*/
/*                         </td>*/
/*                         <td>*/
/*                             <a class="btn btn-info btn-xs" href="{{path('modifier_user',{'id':user.id})}}">*/
/*                                 <i class="fa fa-pencil"></i> Modifier</a>*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* */
/* */
