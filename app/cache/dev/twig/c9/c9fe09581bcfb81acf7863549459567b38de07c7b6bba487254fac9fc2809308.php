<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_8ff84c468015c59bd31ec1fe8ccd39869e42ff89c1967e454df012c841168dc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "    <div class=\"body\"></div>
    <div class=\"grad\"></div>
    <div class=\"header\">
        <div>FTT<span>Authentification</span></div>
    </div>
    <div class=\"header1\">
        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("ftt_utilisateur_homepage");
        echo "\">\t<div>Fédération Tunisienne de<span>Tennis</span></div></a>
    </div>
    <div class=\"login\">
        <form action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <input style=\"color: red\" type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

            <label for=\"username\"></label>
            <input style=\"margin-left: -1%\" placeholder=\"Identifiant\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

            <label for=\"password\"></label>
            <input placeholder=\"mot de passe\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
            </br>
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"  />
            <label style=\"color: white\" for=\"remember_me\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </br>
            <a style=\"color: white\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe oublié ?</a>

        </form>
        <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("hwi_oauth_service_redirect", array("service" => "google"));
        echo "\" class=\"btnGoogle btn\">
            <i class=\"fa fa-google\" aria-hidden=\"true\"></i> Se connecter avec google
        </a>
        <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("hwi_oauth_service_redirect", array("service" => "facebook"));
        echo "\" class=\"btnFacebook btn\">
            <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i> Se connecter avec facebook
        </a></br>
        <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" style=\"font-family: 'Exo';color: white\">S'inscrire</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 41,  95 => 38,  89 => 35,  83 => 32,  78 => 30,  73 => 28,  64 => 22,  58 => 19,  54 => 18,  48 => 15,  40 => 9,  34 => 7,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/*     <div class="body"></div>*/
/*     <div class="grad"></div>*/
/*     <div class="header">*/
/*         <div>FTT<span>Authentification</span></div>*/
/*     </div>*/
/*     <div class="header1">*/
/*         <a href="{{ path("ftt_utilisateur_homepage") }}">	<div>Fédération Tunisienne de<span>Tennis</span></div></a>*/
/*     </div>*/
/*     <div class="login">*/
/*         <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*             <input style="color: red" type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*             <label for="username"></label>*/
/*             <input style="margin-left: -1%" placeholder="Identifiant" type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*             <label for="password"></label>*/
/*             <input placeholder="mot de passe" type="password" id="password" name="_password" required="required" />*/
/*             </br>*/
/*             <input type="checkbox" id="remember_me" name="_remember_me" value="on"  />*/
/*             <label style="color: white" for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/* */
/*             <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/*             </br>*/
/*             <a style="color: white" href="{{ path('fos_user_resetting_request') }}">Mot de passe oublié ?</a>*/
/* */
/*         </form>*/
/*         <a href="{{ path('hwi_oauth_service_redirect', {'service': 'google' }) }}" class="btnGoogle btn">*/
/*             <i class="fa fa-google" aria-hidden="true"></i> Se connecter avec google*/
/*         </a>*/
/*         <a href="{{ path('hwi_oauth_service_redirect', {'service': 'facebook' }) }}" class="btnFacebook btn">*/
/*             <i class="fa fa-facebook" aria-hidden="true"></i> Se connecter avec facebook*/
/*         </a></br>*/
/*         <a href="{{path('fos_user_registration_register')}}" style="font-family: 'Exo';color: white">S'inscrire</a>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
