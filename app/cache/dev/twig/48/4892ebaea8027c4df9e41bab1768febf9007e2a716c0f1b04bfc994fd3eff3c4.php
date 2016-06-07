<?php

/* FTTAdminBundle:CarriereJoueur:DetailCarriereJoueur.html.twig */
class __TwigTemplate_dd62c900e3bf428f04aa9d9a86731a646b7cc422e778c3bd26b08d4b0a7fdad1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:CarriereJoueur:DetailCarriereJoueur.html.twig", 1);
        $this->blocks = array(
            'bodyAdmin' => array($this, 'block_bodyAdmin'),
            'bodymodificationCarriere' => array($this, 'block_bodymodificationCarriere'),
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
        echo "
    <div>

        <img class=\"img-responsive\" src=\"data:image/png;base64,";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")), "html", null, true);
        echo "\" alt=\"\" />
    </a>
    <br/>
</div>
";
        // line 11
        $this->displayBlock('bodymodificationCarriere', $context, $blocks);
        // line 42
        echo "
";
    }

    // line 11
    public function block_bodymodificationCarriere($context, array $blocks = array())
    {
        echo "\t
    <table class=\"table table-striped table-bordered table-hover\" id=\"sample_1\">
        <thead>
            <tr>
                <th>type</th>
                <th>date</th>
                <th>club</th>
                <th>description</th>
            </tr>
        </thead>
        <tbody>\t\t\t\t\t\t\t

            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carrieres"]) ? $context["carrieres"] : $this->getContext($context, "carrieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["carriere"]) {
            echo "\t\t\t\t


                <tr class=\"odd gradeX\">
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["carriere"], "typeCarriere", array()), "html", null, true);
            echo " </td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["carriere"], "dateCarriere", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["carriere"], "idClub", array()), "nomClub", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["carriere"], "description", array()), "html", null, true);
            echo "</td>




                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carriere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:CarriereJoueur:DetailCarriereJoueur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 38,  88 => 30,  84 => 29,  80 => 28,  76 => 27,  67 => 23,  51 => 11,  46 => 42,  44 => 11,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* {% block bodyAdmin %}*/
/* */
/*     <div>*/
/* */
/*         <img class="img-responsive" src="data:image/png;base64,{{ images }}" alt="" />*/
/*     </a>*/
/*     <br/>*/
/* </div>*/
/* {% block bodymodificationCarriere %}	*/
/*     <table class="table table-striped table-bordered table-hover" id="sample_1">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>type</th>*/
/*                 <th>date</th>*/
/*                 <th>club</th>*/
/*                 <th>description</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>							*/
/* */
/*             {% for carriere in carrieres %}				*/
/* */
/* */
/*                 <tr class="odd gradeX">*/
/*                     <td>{{carriere.typeCarriere}} </td>*/
/*                     <td>{{carriere.dateCarriere | date("d/m/Y")}}</td>*/
/*                     <td>{{carriere.idClub.nomClub}}</td>*/
/*                     <td>{{carriere.description}}</td>*/
/* */
/* */
/* */
/* */
/*                 </tr>*/
/* */
/*             {% endfor %}*/
/* */
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
/* {% endblock %}*/
