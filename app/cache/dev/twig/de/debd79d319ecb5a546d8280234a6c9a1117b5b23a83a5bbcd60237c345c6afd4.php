<?php

/* NomayaSocialBundle:Links:socialLinks.html.twig */
class __TwigTemplate_2c0bf66789a68218ee76cce76d69aac1937ac2cc337b295f8293c20faa1824a4 extends Twig_Template
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
        echo "  
";
        // line 2
        if ( !((isset($context["facebook"]) ? $context["facebook"] : $this->getContext($context, "facebook")) === false)) {
            // line 3
            echo "    <span class=\"link facebookLink\">
      ";
            // line 4
            echo $this->env->getExtension('nomaya_social_links')->getSocialLink("facebook", (isset($context["facebook"]) ? $context["facebook"] : $this->getContext($context, "facebook")));
            echo "
    </span>
";
        }
        // line 7
        echo "
";
        // line 8
        if ( !((isset($context["googleplus"]) ? $context["googleplus"] : $this->getContext($context, "googleplus")) === false)) {
            // line 9
            echo "    <span class=\"link googleplusLink\">
      ";
            // line 10
            echo $this->env->getExtension('nomaya_social_links')->getSocialLink("googleplus", (isset($context["googleplus"]) ? $context["googleplus"] : $this->getContext($context, "googleplus")));
            echo "
    </span>
";
        }
        // line 13
        echo "
";
        // line 14
        if ( !((isset($context["twitter"]) ? $context["twitter"] : $this->getContext($context, "twitter")) === false)) {
            // line 15
            echo "    <span class=\"link twitterLink\">
      ";
            // line 16
            echo $this->env->getExtension('nomaya_social_links')->getSocialLink("twitter", (isset($context["twitter"]) ? $context["twitter"] : $this->getContext($context, "twitter")));
            echo "
    </span>
";
        }
        // line 19
        echo "
";
        // line 20
        if ( !((isset($context["linkedin"]) ? $context["linkedin"] : $this->getContext($context, "linkedin")) === false)) {
            // line 21
            echo "    <span class=\"link linkedinLink\">
      ";
            // line 22
            echo $this->env->getExtension('nomaya_social_links')->getSocialLink("linkedin", (isset($context["linkedin"]) ? $context["linkedin"] : $this->getContext($context, "linkedin")));
            echo "
    </span>
";
        }
        // line 25
        echo "
";
        // line 26
        if ( !((isset($context["tumblr"]) ? $context["tumblr"] : $this->getContext($context, "tumblr")) === false)) {
            // line 27
            echo "    <span class=\"link tumblrLink\">
      ";
            // line 28
            echo $this->env->getExtension('nomaya_social_links')->getSocialLink("tumblr", (isset($context["linkedin"]) ? $context["linkedin"] : $this->getContext($context, "linkedin")));
            echo "
    </span>
";
        }
        // line 31
        echo "
";
        // line 32
        if ( !((isset($context["pinterest"]) ? $context["pinterest"] : $this->getContext($context, "pinterest")) === false)) {
            // line 33
            echo "    <span class=\"link pinterestLink\">
      ";
            // line 34
            echo $this->env->getExtension('nomaya_social_links')->getSocialLink("pinterest", (isset($context["linkedin"]) ? $context["linkedin"] : $this->getContext($context, "linkedin")));
            echo "
    </span>
";
        }
        // line 37
        echo "
";
    }

    public function getTemplateName()
    {
        return "NomayaSocialBundle:Links:socialLinks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 37,  97 => 34,  94 => 33,  92 => 32,  89 => 31,  83 => 28,  80 => 27,  78 => 26,  75 => 25,  69 => 22,  66 => 21,  64 => 20,  61 => 19,  55 => 16,  52 => 15,  50 => 14,  47 => 13,  41 => 10,  38 => 9,  36 => 8,  33 => 7,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/*   */
/* {% if facebook is not sameas(false) %}*/
/*     <span class="link facebookLink">*/
/*       {{ socialLink('facebook',facebook) }}*/
/*     </span>*/
/* {% endif %}*/
/* */
/* {% if googleplus is not sameas(false) %}*/
/*     <span class="link googleplusLink">*/
/*       {{ socialLink('googleplus',googleplus) }}*/
/*     </span>*/
/* {% endif %}*/
/* */
/* {% if twitter is not sameas(false) %}*/
/*     <span class="link twitterLink">*/
/*       {{ socialLink('twitter',twitter) }}*/
/*     </span>*/
/* {% endif %}*/
/* */
/* {% if linkedin is not sameas(false) %}*/
/*     <span class="link linkedinLink">*/
/*       {{ socialLink('linkedin',linkedin) }}*/
/*     </span>*/
/* {% endif %}*/
/* */
/* {% if tumblr is not sameas(false) %}*/
/*     <span class="link tumblrLink">*/
/*       {{ socialLink('tumblr',linkedin) }}*/
/*     </span>*/
/* {% endif %}*/
/* */
/* {% if pinterest is not sameas(false) %}*/
/*     <span class="link pinterestLink">*/
/*       {{ socialLink('pinterest',linkedin) }}*/
/*     </span>*/
/* {% endif %}*/
/* */
/* */
