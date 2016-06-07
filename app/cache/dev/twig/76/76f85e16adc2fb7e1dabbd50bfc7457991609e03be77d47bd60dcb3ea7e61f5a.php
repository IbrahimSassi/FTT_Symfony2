<?php

/* FOSCommentBundle:Thread:comment_new_content.html.twig */
class __TwigTemplate_a0be8e299ff6136803da98276629e5f7256eabf1a9bbd4798a8cb3b418fda305 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_comment_comment_form_holder' => array($this, 'block_fos_comment_comment_form_holder'),
            'fos_comment_form_title' => array($this, 'block_fos_comment_form_title'),
            'fos_comment_comment_new_form' => array($this, 'block_fos_comment_comment_new_form'),
            'fos_comment_form_fields' => array($this, 'block_fos_comment_form_fields'),
            'fos_comment_form_submit' => array($this, 'block_fos_comment_form_submit'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $context["first"] = ((array_key_exists("first", $context)) ? (_twig_default_filter((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")), false)) : (false));
        // line 13
        echo "
";
        // line 14
        $context["url_parameters"] = array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
        // line 15
        if ( !(null === (isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")))) {
            // line 16
            echo "    ";
            $context["url_parameters"] = twig_array_merge((isset($context["url_parameters"]) ? $context["url_parameters"] : $this->getContext($context, "url_parameters")), array("parentId" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array())));
        }
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('fos_comment_comment_form_holder', $context, $blocks);
    }

    public function block_fos_comment_comment_form_holder($context, array $blocks = array())
    {
        // line 20
        echo "    <div class=\"fos_comment_comment_form_holder\">
        ";
        // line 21
        $this->displayBlock('fos_comment_form_title', $context, $blocks);
        // line 30
        echo "
        ";
        // line 31
        $this->displayBlock('fos_comment_comment_new_form', $context, $blocks);
        // line 55
        echo "
    </div>
";
    }

    // line 21
    public function block_fos_comment_form_title($context, array $blocks = array())
    {
        // line 22
        echo "            ";
        if ((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))) {
            // line 23
            echo "                <h3>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_new_headline_first", array(), "FOSCommentBundle");
            echo "</h3>
            ";
        } elseif ( !(null ===         // line 24
(isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")))) {
            // line 25
            echo "                <h3>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_reply_reply_to", array("%name%" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "authorName", array())), "FOSCommentBundle");
            echo "</h3>
            ";
        } else {
            // line 27
            echo "                <h3>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_new_headline", array(), "FOSCommentBundle");
            echo "</h3>
            ";
        }
        // line 29
        echo "        ";
    }

    // line 31
    public function block_fos_comment_comment_new_form($context, array $blocks = array())
    {
        // line 32
        echo "            <form class=\"fos_comment_comment_new_form\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_post_thread_comments", (isset($context["url_parameters"]) ? $context["url_parameters"] : $this->getContext($context, "url_parameters"))), "html", null, true);
        echo "\" data-parent=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "id", array()))) : ("")), "html", null, true);
        echo "\" method=\"POST\">

                ";
        // line 34
        $this->displayBlock('fos_comment_form_fields', $context, $blocks);
        // line 43
        echo "
                <div class=\"fos_comment_submit\">
                    ";
        // line 45
        $this->displayBlock('fos_comment_form_submit', $context, $blocks);
        // line 51
        echo "                </div>

            </form>
        ";
    }

    // line 34
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        // line 35
        echo "                    <div class=\"fos_comment_form_errors\">
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'errors');
        echo "
                    </div>
                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'widget');
        echo "

                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                ";
    }

    // line 45
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        // line 46
        echo "                        ";
        if ( !(null === (isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")))) {
            // line 47
            echo "                            <input type=\"button\" value=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_reply_cancel", array(), "FOSCommentBundle");
            echo "\" class=\"fos_comment_comment_reply_cancel\" />
                        ";
        }
        // line 49
        echo "                        <input type=\"submit\" value=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_new_submit", array(), "FOSCommentBundle");
        echo "\" />
                    ";
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment_new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 49,  152 => 47,  149 => 46,  146 => 45,  140 => 41,  135 => 39,  130 => 37,  126 => 36,  123 => 35,  120 => 34,  113 => 51,  111 => 45,  107 => 43,  105 => 34,  97 => 32,  94 => 31,  90 => 29,  84 => 27,  78 => 25,  76 => 24,  71 => 23,  68 => 22,  65 => 21,  59 => 55,  57 => 31,  54 => 30,  52 => 21,  49 => 20,  43 => 19,  40 => 18,  36 => 16,  34 => 15,  32 => 14,  29 => 13,  27 => 12,  24 => 11,);
    }
}
/* {#*/
/* */
/*  This file is part of the FOSCommentBundle package.*/
/* */
/*  (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>*/
/* */
/*  This source file is subject to the MIT license that is bundled*/
/*  with this source code in the file LICENSE.*/
/* */
/* #}*/
/* */
/* {% set first = first|default(false) %}*/
/* */
/* {% set url_parameters = {'id': id } %}*/
/* {% if parent is not null %}*/
/*     {% set url_parameters = url_parameters|merge({'parentId': parent.id}) %}*/
/* {% endif %}*/
/* */
/* {% block fos_comment_comment_form_holder %}*/
/*     <div class="fos_comment_comment_form_holder">*/
/*         {% block fos_comment_form_title %}*/
/*             {% if first %}*/
/*                 <h3>{% trans from 'FOSCommentBundle' %}fos_comment_comment_new_headline_first{% endtrans %}</h3>*/
/*             {% elseif parent is not null %}*/
/*                 <h3>{% trans with {"%name%": parent.authorName } from 'FOSCommentBundle' %}fos_comment_comment_reply_reply_to{% endtrans %}</h3>*/
/*             {% else %}*/
/*                 <h3>{% trans from 'FOSCommentBundle' %}fos_comment_comment_new_headline{% endtrans %}</h3>*/
/*             {% endif %}*/
/*         {% endblock %}*/
/* */
/*         {% block fos_comment_comment_new_form %}*/
/*             <form class="fos_comment_comment_new_form" action="{{ url('fos_comment_post_thread_comments', url_parameters) }}" data-parent="{{ parent.id|default() }}" method="POST">*/
/* */
/*                 {% block fos_comment_form_fields %}*/
/*                     <div class="fos_comment_form_errors">*/
/*                     {{ form_errors(form) }}*/
/*                     {{ form_errors(form.body) }}*/
/*                     </div>*/
/*                     {{ form_widget(form.body) }}*/
/* */
/*                     {{ form_rest(form) }}*/
/*                 {% endblock %}*/
/* */
/*                 <div class="fos_comment_submit">*/
/*                     {% block fos_comment_form_submit %}*/
/*                         {% if parent is not null %}*/
/*                             <input type="button" value="{% trans from 'FOSCommentBundle' %}fos_comment_comment_reply_cancel{% endtrans %}" class="fos_comment_comment_reply_cancel" />*/
/*                         {% endif %}*/
/*                         <input type="submit" value="{% trans from 'FOSCommentBundle' %}fos_comment_comment_new_submit{% endtrans %}" />*/
/*                     {% endblock %}*/
/*                 </div>*/
/* */
/*             </form>*/
/*         {% endblock fos_comment_comment_new_form %}*/
/* */
/*     </div>*/
/* {% endblock fos_comment_comment_form_holder %}*/
/* */
