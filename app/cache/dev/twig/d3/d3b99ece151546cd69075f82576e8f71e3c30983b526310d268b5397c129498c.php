<?php

/* FTTAdminBundle:Joueur:listJoueur.html.twig */
class __TwigTemplate_f75b5d173c13bbf3bad7c68871fa4fd8e52168c0c8955e5a6fc7f977b9994ff0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:Joueur:listJoueur.html.twig", 2);
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
        echo "               <a class=\"btn btn-success btn-xs\" href=\"";
        echo $this->env->getExtension('routing')->getPath("ajouter_joueur");
        echo "\">
                    <i class=\"fa fa-plus\"></i> Ajouter un nouveau joueur
                </a>
                <table class=\"table table-bordered\" id=\"dev-table\" >
                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Nom
                            </th>
                            <th>
                                Prenom
                            </th>
                            <th>
                                Image
                            </th>
                             <th>
                                Categorie
                            </th>
                            <th>
                                Type
                            </th>
                             <th>
                                Club
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
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["joueurs"]) ? $context["joueurs"] : $this->getContext($context, "joueurs")));
        foreach ($context['_seq'] as $context["key"] => $context["joueur"]) {
            // line 45
            echo "                        <tr>
                            <td>
                                ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "id", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "nomJoueur", array()), "html", null, true);
            echo "
                            </td>
                          
                            <td>
                                ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "prenomJoueur", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                <img class=\"img-responsive\" src=\"data:image/png;base64,";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imagesJoueurs"]) ? $context["imagesJoueurs"] : $this->getContext($context, "imagesJoueurs")), $context["key"], array(), "array"), "html", null, true);
            echo "\" alt=\"\" height=\"120px\" width=\"50px\" />  </td>
                            <td>
                                ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "categorieJoueur", array()), "html", null, true);
            echo "
                            </td>
                             <td>
                                ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "typeJoueur", array()), "html", null, true);
            echo "
                            </td>
                             <td>
                                ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["joueur"], "idClub", array()), "nomClub", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_joueur", array("id" => $this->getAttribute($context["joueur"], "id", array()))), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-trash-o\"></i> Supprimer</a>
                            </td>
                            <td>
                                <a class=\"btn btn-info btn-xs\" href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_joueur", array("id" => $this->getAttribute($context["joueur"], "id", array()), "idClub" => $this->getAttribute($this->getAttribute($context["joueur"], "idClub", array()), "id", array()))), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-pencil\"></i> Modifier</a>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['joueur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                        
                    </tbody>
                </table>
            
               ";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:Joueur:listJoueur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 77,  128 => 72,  121 => 68,  115 => 65,  109 => 62,  103 => 59,  98 => 57,  92 => 54,  85 => 50,  79 => 47,  75 => 45,  71 => 44,  31 => 8,  28 => 7,  11 => 2,);
    }
}
/*   */
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* */
/*         */
/*         */
/*         {% block bodyAdmin %}*/
/*                <a class="btn btn-success btn-xs" href="{{path('ajouter_joueur')}}">*/
/*                     <i class="fa fa-plus"></i> Ajouter un nouveau joueur*/
/*                 </a>*/
/*                 <table class="table table-bordered" id="dev-table" >*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>*/
/*                                 #*/
/*                             </th>*/
/*                             <th>*/
/*                                 Nom*/
/*                             </th>*/
/*                             <th>*/
/*                                 Prenom*/
/*                             </th>*/
/*                             <th>*/
/*                                 Image*/
/*                             </th>*/
/*                              <th>*/
/*                                 Categorie*/
/*                             </th>*/
/*                             <th>*/
/*                                 Type*/
/*                             </th>*/
/*                              <th>*/
/*                                 Club*/
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
/*                          {% for key,joueur in joueurs %}*/
/*                         <tr>*/
/*                             <td>*/
/*                                 {{joueur.id}}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{joueur.nomJoueur}}*/
/*                             </td>*/
/*                           */
/*                             <td>*/
/*                                 {{joueur.prenomJoueur}}*/
/*                             </td>*/
/*                             <td>*/
/*                                 <img class="img-responsive" src="data:image/png;base64,{{ imagesJoueurs[key] }}" alt="" height="120px" width="50px" />  </td>*/
/*                             <td>*/
/*                                 {{joueur.categorieJoueur}}*/
/*                             </td>*/
/*                              <td>*/
/*                                 {{joueur.typeJoueur}}*/
/*                             </td>*/
/*                              <td>*/
/*                                 {{joueur.idClub.nomClub}}*/
/*                             </td>*/
/*                             <td>*/
/*                                 <a class="btn btn-danger btn-xs" href="{{path('supprimer_joueur', {'id':joueur.id})}}">*/
/*                                     <i class="fa fa-trash-o"></i> Supprimer</a>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <a class="btn btn-info btn-xs" href="{{path('modifier_joueur',{'id':joueur.id,'idClub':joueur.idClub.id})}}">*/
/*                                     <i class="fa fa-pencil"></i> Modifier</a>*/
/*                             </td>*/
/*                         </tr>*/
/*                         {% endfor %}*/
/*                         */
/*                     </tbody>*/
/*                 </table>*/
/*             */
/*                {% endblock %}*/
