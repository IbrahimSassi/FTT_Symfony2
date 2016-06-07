<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_9992a2cc44f9af39a3be5b7c74d253d072c99bd70406408869923cc47c5279c2 extends Twig_Template
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
        // line 2
        echo "
            <div class=\"body\"></div>

\t\t<div class=\"grad\"></div>
                \t\t<div class=\"header\">
\t\t\t<div>FTT<span>Inscription</span></div>
\t\t</div>
\t\t<div class=\"header1\">
\t\t\t<div>Fédération Tunisienne de<span>Tennis</span></div>
\t\t</div>
                <div class=\"register\" >
                    
                    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
                        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                        <div>
                            <input type=\"submit\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                        </div>
                </div>
                    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 20,  42 => 17,  37 => 15,  33 => 14,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/*             <div class="body"></div>*/
/* */
/* 		<div class="grad"></div>*/
/*                 		<div class="header">*/
/* 			<div>FTT<span>Inscription</span></div>*/
/* 		</div>*/
/* 		<div class="header1">*/
/* 			<div>Fédération Tunisienne de<span>Tennis</span></div>*/
/* 		</div>*/
/*                 <div class="register" >*/
/*                     */
/*                     {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/*                         {{ form_widget(form) }}*/
/*                         <div>*/
/*                             <input type="submit" value="{{ 'registration.submit'|trans }}" />*/
/*                         </div>*/
/*                 </div>*/
/*                     {{ form_end(form) }}*/
/* */
