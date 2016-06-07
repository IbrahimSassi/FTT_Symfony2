<?php

/* FTTAdminBundle:User:validerCompte.html.twig */
class __TwigTemplate_ee2a75e34ffcc0b0b4bea4bddaf9c7532f1ded0ea33a2382811d06c8776b5c50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:User:validerCompte.html.twig", 1);
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
            <h1 align='center' style='color:red;'> Aucun compte a valider </h1></font> 
        </div> 
    ";
        } else {
            // line 10
            echo "        <table class=\"table table-bordered\" id=\"dev-table\"  style=\"width: 100%\">
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
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 45
                echo "                    <tr>
                        <td>
                            ";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nomUser", array()), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenomUser", array()), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "ageUser", array()), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "telUser", array()), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "immatricule", array()), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "departementAdmin", array()), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "categorieArbitre", array()), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "specialiteMedecin", array()), "html", null, true);
                echo "
                        </td>
                        <td>
                            <a class=\"btn btn-success btn-xs\" href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("valider_user", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">
                                <i class=\"fa fa-check-circle\"></i> Accepter</a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "            </tbody>
        </table>

    ";
        }
        // line 83
        echo "    <script>
        function clignotement() {
            if (document.getElementById(\"MonElement\").style.display == \"block\")
                document.getElementById(\"MonElement\").style.display = \"none\";
            else
                document.getElementById(\"MonElement\").style.display = \"block\";
        }
        setInterval(\"clignotement()\", 500);
    </script> 
";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:User:validerCompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 83,  150 => 79,  139 => 74,  133 => 71,  127 => 68,  121 => 65,  115 => 62,  109 => 59,  103 => 56,  97 => 53,  91 => 50,  85 => 47,  81 => 45,  77 => 44,  41 => 10,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* {% block bodyAdmin %}*/
/*     {% if users is empty %}*/
/*         <br><br><br>*/
/*         <div id="MonElement" class="EX_div" style="diplay:block;"> <font color=#FF0000> */
/*             <h1 align='center' style='color:red;'> Aucun compte a valider </h1></font> */
/*         </div> */
/*     {% else %}*/
/*         <table class="table table-bordered" id="dev-table"  style="width: 100%">*/
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
/* */
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
/*                             <a class="btn btn-success btn-xs" href="{{path('valider_user',{'id':user.id})}}">*/
/*                                 <i class="fa fa-check-circle"></i> Accepter</a>*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/* */
/*     {% endif %}*/
/*     <script>*/
/*         function clignotement() {*/
/*             if (document.getElementById("MonElement").style.display == "block")*/
/*                 document.getElementById("MonElement").style.display = "none";*/
/*             else*/
/*                 document.getElementById("MonElement").style.display = "block";*/
/*         }*/
/*         setInterval("clignotement()", 500);*/
/*     </script> */
/* {% endblock %}*/
/* */
/* */
/* */
