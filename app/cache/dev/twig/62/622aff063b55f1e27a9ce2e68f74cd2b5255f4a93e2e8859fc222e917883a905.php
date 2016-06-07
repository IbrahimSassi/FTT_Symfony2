<?php

/* FTTAdminBundle:Translation:traduction.html.twig */
class __TwigTemplate_a53bc9531ab98baabadd1fb6c08a4a17237f84b596153d938c4e01821aa153d9 extends Twig_Template
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
        echo "<html>
  <body>
    Hello ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
  </body>
</html>
<div>
  <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))), "html", null, true);
        echo "</p>
  <button>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("cancel"), "html", null, true);
        echo "</button>
  <button>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("validate"), "html", null, true);
        echo "</button>
</div>";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:Translation:traduction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 10,  34 => 9,  30 => 8,  23 => 4,  19 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <html>*/
/*   <body>*/
/*     Hello {{ name }}!*/
/*   </body>*/
/* </html>*/
/* <div>*/
/*   <p>{{ message|trans }}</p>*/
/*   <button>{{ 'cancel'|trans }}</button>*/
/*   <button>{{ 'validate'|trans }}</button>*/
/* </div>*/
