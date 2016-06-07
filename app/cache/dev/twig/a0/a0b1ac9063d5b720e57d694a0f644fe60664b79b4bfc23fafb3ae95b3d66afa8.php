<?php

/* FTTAdminBundle:Stade:ModifierStade.html.twig */
class __TwigTemplate_18575c343e58f49c923d053bb398fd06f2ade6c567e138ceeb3ae6a5cc6d6a4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:Stade:ModifierStade.html.twig", 2);
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
        echo "            <h1>Modifier un stade</h1> 
            ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form_start');
        echo "
        <table>
            <tr>
                <td><label>nom Stade: </label></td><td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nomStade", array()), 'widget');
        echo "</td>
            </tr>
            <tr>
                <td><label>capacite: </label></td><td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "capacite", array()), 'widget');
        echo "</td>
            </tr>
            <tr>
                <td><label>complexe: </label></td><td>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "idComplexe", array()), 'widget');
        echo "</td>
            </tr>
            
         
        </table>
                 ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form_end');
        echo "

        ";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:Stade:ModifierStade.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  52 => 14,  46 => 11,  40 => 8,  34 => 5,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/*         {% block bodyAdmin %}*/
/*             <h1>Modifier un stade</h1> */
/*             {{form_start(Form)}}*/
/*         <table>*/
/*             <tr>*/
/*                 <td><label>nom Stade: </label></td><td>{{form_widget(Form.nomStade)}}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td><label>capacite: </label></td><td>{{form_widget(Form.capacite)}}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td><label>complexe: </label></td><td>{{form_widget(Form.idComplexe)}}</td>*/
/*             </tr>*/
/*             */
/*          */
/*         </table>*/
/*                  {{form_end(Form)}}*/
/* */
/*         {% endblock %}*/
