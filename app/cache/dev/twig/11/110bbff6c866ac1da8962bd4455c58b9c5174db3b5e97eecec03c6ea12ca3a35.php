<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_4c7c2a3260a0b0fc7d6a95ee8ae65437ba0134bd3c0bf45bc7c7c301b9d2ab40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        echo "    <div class=\"body\"></div>
    <div class=\"grad\"></div>
    <div class=\"header\">
        <div >FTT<span>Confirmation</span></div>
    </div>
    <div class=\"header1\">
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("ftt_utilisateur_homepage");
        echo "\">\t
            <div>Fédération Tunisienne de<span>Tennis</span></div></a>
    </div>
    <div class=\"login\" style=\"margin-left: 1%;width: 250px\">

        <div style=\"color: white\" >
            <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
            ";
        // line 19
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 20
            echo "                <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
                ";
        }
        // line 22
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 22,  54 => 20,  52 => 19,  48 => 18,  39 => 12,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <div class="body"></div>*/
/*     <div class="grad"></div>*/
/*     <div class="header">*/
/*         <div >FTT<span>Confirmation</span></div>*/
/*     </div>*/
/*     <div class="header1">*/
/*         <a href="{{ path("ftt_utilisateur_homepage") }}">	*/
/*             <div>Fédération Tunisienne de<span>Tennis</span></div></a>*/
/*     </div>*/
/*     <div class="login" style="margin-left: 1%;width: 250px">*/
/* */
/*         <div style="color: white" >*/
/*             <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*             {% if targetUrl %}*/
/*                 <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*                 {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
