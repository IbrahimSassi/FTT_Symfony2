<?php

/* DCSRatingBundle:Rating:choice.html.twig */
class __TwigTemplate_d7abb816f9d11923c74cac699e4551ca35017fb4b8b3d6eedb51d628545a5d18 extends Twig_Template
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
        ob_start();
        // line 2
        echo "    <div class=\"dcs-rating-container\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range((isset($context["maxValue"]) ? $context["maxValue"] : $this->getContext($context, "maxValue")), 1));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 4
            echo "            ";
            $context["style"] = "";
            // line 5
            echo "            ";
            if (($context["i"] <= $this->getAttribute((isset($context["rating"]) ? $context["rating"] : $this->getContext($context, "rating")), "rate", array()))) {
                // line 6
                echo "                ";
                $context["style"] = "full";
                // line 7
                echo "            ";
            } else {
                // line 8
                echo "                ";
                $context["style"] = (($this->env->getExtension('rating_extension')->isHalfStarFilter($this->getAttribute((isset($context["rating"]) ? $context["rating"] : $this->getContext($context, "rating")), "rate", array()), $context["i"])) ? ("half") : (""));
                // line 9
                echo "            ";
            }
            // line 10
            echo "            ";
            $context["params"] = twig_array_merge((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), array("id" => $this->getAttribute((isset($context["rating"]) ? $context["rating"] : $this->getContext($context, "rating")), "id", array()), "value" => $context["i"]));
            // line 11
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("dcs_rating_add_vote", (isset($context["params"]) ? $context["params"] : $this->getContext($context, "params"))), "html", null, true);
            echo "\" class=\"star ";
            echo twig_escape_filter($this->env, (isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")), "html", null, true);
            echo "\">☆</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "DCSRatingBundle:Rating:choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  49 => 11,  46 => 10,  43 => 9,  40 => 8,  37 => 7,  34 => 6,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% spaceless %}*/
/*     <div class="dcs-rating-container">*/
/*         {% for i in maxValue..1 %}*/
/*             {% set style = '' %}*/
/*             {% if i <= rating.rate %}*/
/*                 {% set style = 'full' %}*/
/*             {% else %}*/
/*                 {% set style = rating.rate|isHalfStar(i) ? 'half' %}*/
/*             {% endif %}*/
/*             {% set params = params|merge({'id' : rating.id, 'value' : i}) %}*/
/*             <a href="{{ url('dcs_rating_add_vote', params) }}" class="star {{ style }}">☆</a>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endspaceless %}*/
