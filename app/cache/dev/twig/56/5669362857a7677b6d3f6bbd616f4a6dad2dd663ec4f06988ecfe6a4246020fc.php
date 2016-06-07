<?php

/* FTTAdminBundle:MatchInfo:modifierMatchInfo.html.twig */
class __TwigTemplate_21b70c0f31a63bc3b431c8ed3a46452b7319937709e5ce9f1db12070d2c98e8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:MatchInfo:modifierMatchInfo.html.twig", 1);
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
        echo "    <h1>Modification d'un Match</h1> 
    <div class=\"col-md-8\" style=\"margin-left: 15%;margin-right: 2%;\">
        <form method=\"POST\" action=\"\" ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'enctype');
        echo " onsubmit=\"new PNotify({
                    title: 'Modification Effectué',
                    text: 'Votre match a eté modifié avec succes!',
                    type: 'success'
                });\"> 
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'widget');
        echo "
            <div class=\"ln_solid\" style=\"margin-top: 2%\"> </div>
            <div class=\"form-group\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\" style=\"margin-top: 2%\">
                    <input type=\"submit\" value=\"Valider\" class=\"btn btn-flat2 bg-blue-sky\"
                           >
                    <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("list_matchsInfo");
        echo "\"  class=\"btn btn-danger\">Retour</a>
                </div>
            </div>
        </form>
    </div>

    ";
        // line 26
        $context["popup"] = (isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg"));
        echo "    
    ";
        // line 27
        if (((isset($context["popup"]) ? $context["popup"] : $this->getContext($context, "popup")) == "memeJoueur")) {
            // line 28
            echo "        <script type=\"text/javascript\">
            alert(\"Vous ne pouvez pas choisir le meme joueur\");
        </script>
    ";
        } elseif ((        // line 31
(isset($context["popup"]) ? $context["popup"] : $this->getContext($context, "popup")) == "errorarbitre")) {
            // line 32
            echo "        <script type=\"text/javascript\">
            alert(\"L'arbitre que vous avez choisi ne peut pas arbitrer ce type des matchs\");
        </script>
    ";
        } elseif ((        // line 35
(isset($context["popup"]) ? $context["popup"] : $this->getContext($context, "popup")) == "errorEvenement")) {
            // line 36
            echo "        <script type=\"text/javascript\">
            alert(\"L'evenement que vous avez choisi n'est pas adequat avec le type du match \");
        </script>
    ";
        } elseif ((        // line 39
(isset($context["popup"]) ? $context["popup"] : $this->getContext($context, "popup")) == "errorDisponibilite")) {
            // line 40
            echo "        <script type=\"text/javascript\">
            alert(\"L'arbitre que vous avez choisi n'est pas disponible ce jour la \");
        </script>
    ";
        } elseif ((        // line 43
(isset($context["popup"]) ? $context["popup"] : $this->getContext($context, "popup")) == "errorDisponibiliteStade")) {
            // line 44
            echo "        <script type=\"text/javascript\">
            alert(\"Le stade que vous avez choisi n'est pas disponible ce jour la \");
        </script>
    ";
        } elseif ((        // line 47
(isset($context["popup"]) ? $context["popup"] : $this->getContext($context, "popup")) == "errorDisponibiliteJoueur1")) {
            // line 48
            echo "        <script type=\"text/javascript\">
            alert(\"Le joueur numero 1 que vous avez choisi n'est pas disponible ce jour la \");
        </script>
    ";
        } elseif ((        // line 51
(isset($context["popup"]) ? $context["popup"] : $this->getContext($context, "popup")) == "errorDisponibiliteJoueur2")) {
            // line 52
            echo "        <script type=\"text/javascript\">
            alert(\"Le joueur numero 2 que vous avez choisi n'est pas disponible ce jour la \");
        </script>

    ";
        }
        // line 57
        echo "
";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:MatchInfo:modifierMatchInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 57,  109 => 52,  107 => 51,  102 => 48,  100 => 47,  95 => 44,  93 => 43,  88 => 40,  86 => 39,  81 => 36,  79 => 35,  74 => 32,  72 => 31,  67 => 28,  65 => 27,  61 => 26,  52 => 20,  43 => 14,  35 => 9,  31 => 7,  28 => 6,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* */
/* */
/* */
/* {% block bodyAdmin %}*/
/*     <h1>Modification d'un Match</h1> */
/*     <div class="col-md-8" style="margin-left: 15%;margin-right: 2%;">*/
/*         <form method="POST" action="" {{ form_enctype(Form) }} onsubmit="new PNotify({*/
/*                     title: 'Modification Effectué',*/
/*                     text: 'Votre match a eté modifié avec succes!',*/
/*                     type: 'success'*/
/*                 });"> */
/*             {{form_widget(Form)}}*/
/*             <div class="ln_solid" style="margin-top: 2%"> </div>*/
/*             <div class="form-group">*/
/*                 <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 2%">*/
/*                     <input type="submit" value="Valider" class="btn btn-flat2 bg-blue-sky"*/
/*                            >*/
/*                     <a href="{{path('list_matchsInfo')}}"  class="btn btn-danger">Retour</a>*/
/*                 </div>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* */
/*     {% set popup = msg %}    */
/*     {% if popup == 'memeJoueur' %}*/
/*         <script type="text/javascript">*/
/*             alert("Vous ne pouvez pas choisir le meme joueur");*/
/*         </script>*/
/*     {% elseif popup == 'errorarbitre' %}*/
/*         <script type="text/javascript">*/
/*             alert("L'arbitre que vous avez choisi ne peut pas arbitrer ce type des matchs");*/
/*         </script>*/
/*     {% elseif popup == 'errorEvenement' %}*/
/*         <script type="text/javascript">*/
/*             alert("L'evenement que vous avez choisi n'est pas adequat avec le type du match ");*/
/*         </script>*/
/*     {% elseif popup == 'errorDisponibilite' %}*/
/*         <script type="text/javascript">*/
/*             alert("L'arbitre que vous avez choisi n'est pas disponible ce jour la ");*/
/*         </script>*/
/*     {% elseif popup == 'errorDisponibiliteStade' %}*/
/*         <script type="text/javascript">*/
/*             alert("Le stade que vous avez choisi n'est pas disponible ce jour la ");*/
/*         </script>*/
/*     {% elseif popup == 'errorDisponibiliteJoueur1' %}*/
/*         <script type="text/javascript">*/
/*             alert("Le joueur numero 1 que vous avez choisi n'est pas disponible ce jour la ");*/
/*         </script>*/
/*     {% elseif popup == 'errorDisponibiliteJoueur2' %}*/
/*         <script type="text/javascript">*/
/*             alert("Le joueur numero 2 que vous avez choisi n'est pas disponible ce jour la ");*/
/*         </script>*/
/* */
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
