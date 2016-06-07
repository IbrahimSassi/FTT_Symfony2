<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_575cc7bfee11164fc907c4b8c59505db67f8bd4dc69b0f2837575e9ef1686511 extends Twig_Template
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
<div class=\"grad\"></div>
<div class=\"header\">
    <div style=\"font-size: 20px\">FTT<span>Reinitialisation de mot de passe</span></div>
</div>
<div class=\"header1\">
    <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("ftt_utilisateur_homepage");
        echo "\">\t<div>Fédération Tunisienne de<span>Tennis</span></div></a>
</div>
<div class=\"login\">
    <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
        <div>
            ";
        // line 14
        if (array_key_exists("invalid_username", $context)) {
            // line 15
            echo "                <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
            ";
        }
        // line 17
        echo "            <label style=\"color: white\" for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
        </div>
        <div>
            <input type=\"submit\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 21,  47 => 17,  41 => 15,  39 => 14,  34 => 12,  28 => 9,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="body"></div>*/
/* <div class="grad"></div>*/
/* <div class="header">*/
/*     <div style="font-size: 20px">FTT<span>Reinitialisation de mot de passe</span></div>*/
/* </div>*/
/* <div class="header1">*/
/*     <a href="{{ path("ftt_utilisateur_homepage") }}">	<div>Fédération Tunisienne de<span>Tennis</span></div></a>*/
/* </div>*/
/* <div class="login">*/
/*     <form action="{{ path('fos_user_resetting_send_email') }}" method="POST" class="fos_user_resetting_request">*/
/*         <div>*/
/*             {% if invalid_username is defined %}*/
/*                 <p>{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}) }}</p>*/
/*             {% endif %}*/
/*             <label style="color: white" for="username">{{ 'resetting.request.username'|trans }}</label>*/
/*             <input type="text" id="username" name="username" required="required" />*/
/*         </div>*/
/*         <div>*/
/*             <input type="submit" value="{{ 'resetting.request.submit'|trans }}" />*/
/*         </div>*/
/*     </form>*/
/* </div>*/
/* */
