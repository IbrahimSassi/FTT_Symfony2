<?php

/* FTTAdminBundle:MatchInfo:ajouterMatchInfo.html.twig */
class __TwigTemplate_8cc5159eefe0ccc716f35d13dc25fe5277960b4313081ea89a0206a43f907768 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:MatchInfo:ajouterMatchInfo.html.twig", 1);
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

    // line 4
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 5
        echo "



    <h1>Ajout d'un Match</h1> 
    <div class=\"col-md-8\" style=\"margin-left: 15%;margin-right: 2%;\">
        <form method=\"POST\" action=\"\" onsubmit=\"new PNotify({
                    title: 'Ajout Effectué',
                    text: 'Votre match a eté ajouté avec succes!',
                    type: 'success'
                });\" > 
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'widget');
        echo "
            <div class=\"ln_solid\" style=\"margin-top: 2%\"> </div>
            <div class=\"form-group\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\" style=\"margin-top: 2%\" >
                    <input type=\"submit\" value=\"Valider\" class=\"btn btn-flat2 bg-blue-sky\"
                           />
                    <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("list_matchsInfo");
        echo "\"  class=\"btn btn-danger\">Retour</a>
                </div>
            </div>
        </form>
    </div>
    ";
        // line 27
        $context["popup"] = (isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg"));
        echo "    
    ";
        // line 28
        if (((isset($context["popup"]) ? $context["popup"] : $this->getContext($context, "popup")) == "memeJoueur")) {
            // line 29
            echo "        <script type=\"text/javascript\">
            alert(\"Vous ne pouvez pas choisir le meme joueur\");
        </script>
    ";
        } elseif ((        // line 32
(isset($context["popup"]) ? $context["popup"] : $this->getContext($context, "popup")) == "errorarbitre")) {
            // line 33
            echo "        <script type=\"text/javascript\">
            alert(\"L'arbitre que vous avez choisi ne peut pas arbitrer ce type des matchs\");
        </script>
    ";
        } elseif ((        // line 36
(isset($context["popup"]) ? $context["popup"] : $this->getContext($context, "popup")) == "errorEvenement")) {
            // line 37
            echo "        <script type=\"text/javascript\">
            alert(\"L'evenement que vous avez choisi n'est pas adequat avec le type du match \");
        </script>
    ";
        } elseif ((        // line 40
(isset($context["popup"]) ? $context["popup"] : $this->getContext($context, "popup")) == "errorDisponibilite")) {
            // line 41
            echo "        <script type=\"text/javascript\">
            alert(\"L'arbitre que vous avez choisi n'est pas disponible ce jour la \");
        </script>
    ";
        } elseif ((        // line 44
(isset($context["popup"]) ? $context["popup"] : $this->getContext($context, "popup")) == "errorDisponibiliteStade")) {
            // line 45
            echo "        <script type=\"text/javascript\">
            alert(\"Le stade que vous avez choisi n'est pas disponible ce jour la \");
        </script>
    ";
        } elseif ((        // line 48
(isset($context["popup"]) ? $context["popup"] : $this->getContext($context, "popup")) == "errorDisponibiliteJoueur1")) {
            // line 49
            echo "        <script type=\"text/javascript\">
            alert(\"Le joueur numero 1 que vous avez choisi n'est pas disponible ce jour la \");
        </script>
    ";
        } elseif ((        // line 52
(isset($context["popup"]) ? $context["popup"] : $this->getContext($context, "popup")) == "errorDisponibiliteJoueur2")) {
            // line 53
            echo "        <script type=\"text/javascript\">
            alert(\"Le joueur numero 2 que vous avez choisi n'est pas disponible ce jour la \");
        </script>

    ";
        }
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:MatchInfo:ajouterMatchInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 53,  107 => 52,  102 => 49,  100 => 48,  95 => 45,  93 => 44,  88 => 41,  86 => 40,  81 => 37,  79 => 36,  74 => 33,  72 => 32,  67 => 29,  65 => 28,  61 => 27,  53 => 22,  44 => 16,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* */
/* {% block bodyAdmin %}*/
/* */
/* */
/* */
/* */
/*     <h1>Ajout d'un Match</h1> */
/*     <div class="col-md-8" style="margin-left: 15%;margin-right: 2%;">*/
/*         <form method="POST" action="" onsubmit="new PNotify({*/
/*                     title: 'Ajout Effectué',*/
/*                     text: 'Votre match a eté ajouté avec succes!',*/
/*                     type: 'success'*/
/*                 });" > */
/*             {{form_widget(Form)}}*/
/*             <div class="ln_solid" style="margin-top: 2%"> </div>*/
/*             <div class="form-group">*/
/*                 <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 2%" >*/
/*                     <input type="submit" value="Valider" class="btn btn-flat2 bg-blue-sky"*/
/*                            />*/
/*                     <a href="{{path('list_matchsInfo')}}"  class="btn btn-danger">Retour</a>*/
/*                 </div>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
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
/* {% endblock %}*/
/* */
