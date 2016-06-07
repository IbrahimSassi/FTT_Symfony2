<?php

/* FTTAdminBundle::Default/Includes/header.html.twig */
class __TwigTemplate_ae46440c662e329fd5612375638af06bcb223be2e181bb657bc7caa4ac31f864 extends Twig_Template
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
        echo "<div class=\"profile\">
    <div class=\"profile_pic\">
        <img alt=\"Embedded Image\" src=\"data:image/png;base64,";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["ProfilPic"]) ? $context["ProfilPic"] : $this->getContext($context, "ProfilPic")), "html", null, true);
        echo "\" class=\"img-circle profile_img\">
    </div>
    <div class=\"profile_info\">
        <span>Welcome,</span>
        <h2>
            ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nomUser", array()), "html", null, true);
        echo "
        </h2>
    </div> 
</div>
";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle::Default/Includes/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  23 => 3,  19 => 1,);
    }
}
/* <div class="profile">*/
/*     <div class="profile_pic">*/
/*         <img alt="Embedded Image" src="data:image/png;base64,{{ ProfilPic }}" class="img-circle profile_img">*/
/*     </div>*/
/*     <div class="profile_info">*/
/*         <span>Welcome,</span>*/
/*         <h2>*/
/*             {{ app.user.nomUser }}*/
/*         </h2>*/
/*     </div> */
/* </div>*/
/* */
