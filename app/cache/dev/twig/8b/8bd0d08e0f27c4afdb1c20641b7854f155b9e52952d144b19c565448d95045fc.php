<?php

/* FTTUtilisateurBundle:Match:Evaluation.html.twig */
class __TwigTemplate_61acf5de14bf9dab707b9ec340403f8b44711ef4f3ebfa976eaf87d4f165ab0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTUtilisateurBundle::layoutGlobal.html.twig", "FTTUtilisateurBundle:Match:Evaluation.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FTTUtilisateurBundle::layoutGlobal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "




    <h1>Evaluation</h1>
<div class=\"col-md-12 animated fadeInDown\" style=\"padding-bottom: 2%\"  >
    <div class=\"well profile_view\"   >
        <div class=\"col-xs-12 bottom text-center\" style=\"background-color: #00B5F1;color: white;border-bottom-left-radius: 1em;border-top-left-radius: 1em\">
            <h3 style=\"color: white\"> <strong> Match : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "idJoueur1", array()), "nomJoueur", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "idJoueur1", array()), "prenomJoueur", array()), "html", null, true);
        echo "
                    Vs ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "idJoueur2", array()), "nomJoueur", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "idJoueur2", array()), "prenomJoueur", array()), "html", null, true);
        echo " </strong> </h3>
 
        </div>
                    
    <form method=\"POST\" style=\"margin-left: 20%;\">
        <table class=\"table-responsive table-bordered\" style=\"width: 90%;text-align: center\"  >
            <tr >
                <td>
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "evaluationMatch", array()), 'label');
        echo "
                </td>
                <td>
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "evaluationMatch", array()), 'widget');
        echo "
                </td>
                <td colspan=\"2\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "</td>
            </tr>
        </table>
    </form>


    </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "FTTUtilisateurBundle:Match:Evaluation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 27,  67 => 25,  61 => 22,  48 => 14,  42 => 13,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FTTUtilisateurBundle::layoutGlobal.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* */
/* */
/* */
/*     <h1>Evaluation</h1>*/
/* <div class="col-md-12 animated fadeInDown" style="padding-bottom: 2%"  >*/
/*     <div class="well profile_view"   >*/
/*         <div class="col-xs-12 bottom text-center" style="background-color: #00B5F1;color: white;border-bottom-left-radius: 1em;border-top-left-radius: 1em">*/
/*             <h3 style="color: white"> <strong> Match : {{match.idJoueur1.nomJoueur}} {{match.idJoueur1.prenomJoueur}}*/
/*                     Vs {{match.idJoueur2.nomJoueur}} {{match.idJoueur2.prenomJoueur}} </strong> </h3>*/
/*  */
/*         </div>*/
/*                     */
/*     <form method="POST" style="margin-left: 20%;">*/
/*         <table class="table-responsive table-bordered" style="width: 90%;text-align: center"  >*/
/*             <tr >*/
/*                 <td>*/
/*                     {{form_label(form.evaluationMatch)}}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{form_widget(form.evaluationMatch)}}*/
/*                 </td>*/
/*                 <td colspan="2">{{form_rest(form)}}</td>*/
/*             </tr>*/
/*         </table>*/
/*     </form>*/
/* */
/* */
/*     </div>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
