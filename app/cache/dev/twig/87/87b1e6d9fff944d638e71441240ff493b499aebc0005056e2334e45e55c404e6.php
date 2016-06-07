<?php

/* FTTUtilisateurBundle:Default:error.html.twig */
class __TwigTemplate_36cbe2cb9fad36cbdce923836ddd697defa16ef9c22a26720f8bbb1776358eed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    <div>
        <img style=\"margin-left: 8%\" src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/error.jpg"), "html", null, true);
        echo "\" width=\"1140px\" height=\"578px\">
    </div> 

";
    }

    public function getTemplateName()
    {
        return "FTTUtilisateurBundle:Default:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/*     <div>*/
/*         <img style="margin-left: 8%" src="{{asset('img/error.jpg')}}" width="1140px" height="578px">*/
/*     </div> */
/* */
/* */
