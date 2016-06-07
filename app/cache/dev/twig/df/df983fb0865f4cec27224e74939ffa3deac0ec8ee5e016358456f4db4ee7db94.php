<?php

/* FTTAdminBundle:Default/Includes:header2.html.twig */
class __TwigTemplate_89fa997079096d46def7197e8e480d280e2377e36eac24a3dac7c145ce916f47 extends Twig_Template
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
        echo "    <img alt=\"Embedded Image\" src=\"data:image/png;base64,";
        echo twig_escape_filter($this->env, (isset($context["ProfilPic"]) ? $context["ProfilPic"] : $this->getContext($context, "ProfilPic")), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nomUser", array()), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:Default/Includes:header2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/*     <img alt="Embedded Image" src="data:image/png;base64,{{ ProfilPic }}"> {{ app.user.nomUser }}*/
/* */
