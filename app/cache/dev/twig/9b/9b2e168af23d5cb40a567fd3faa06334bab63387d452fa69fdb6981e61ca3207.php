<?php

/* DCSRatingBundle:Rating:rating.html.twig */
class __TwigTemplate_fd7c95bdc0bf6bc7ad43249bcfdf37ef11f38c6b9a28d2276fba9b7c30c3d665 extends Twig_Template
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
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("DCSRatingBundle:Rating:showRate", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))));
    }

    public function getTemplateName()
    {
        return "DCSRatingBundle:Rating:rating.html.twig";
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
/* {{ render(controller('DCSRatingBundle:Rating:showRate', {'id' : id})) }}*/
