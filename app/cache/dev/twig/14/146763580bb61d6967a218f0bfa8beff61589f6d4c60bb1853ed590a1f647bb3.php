<?php

/* FOSCommentBundle:Thread:commentable.html.twig */
class __TwigTemplate_cfbc25bf870d640b7ad8c0efd14e3f3d7768f9693d7309ca072175b9e36cd151 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_comment_form_fields' => array($this, 'block_fos_comment_form_fields'),
            'fos_comment_form_submit' => array($this, 'block_fos_comment_form_submit'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"fos_comment_commentable_form_holder\">
    <form class=\"fos_comment_commentable_form\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_patch_thread_commentable", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" data-fos-comment-thread-id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" method=\"POST\">

        ";
        // line 15
        $this->displayBlock('fos_comment_form_fields', $context, $blocks);
        // line 23
        echo "
        <input type=\"hidden\" name=\"_method\" value=\"patch\" />

        <div class=\"fos_comment_submit\">
            ";
        // line 27
        $this->displayBlock('fos_comment_form_submit', $context, $blocks);
        // line 30
        echo "        </div>

    </form>
</div>
";
    }

    // line 15
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        // line 16
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isCommentable", array()), 'errors');
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isCommentable", array()), 'widget');
        echo "

            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        ";
    }

    // line 27
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        // line 28
        echo "                <input type=\"submit\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((((isset($context["isCommentable"]) ? $context["isCommentable"] : $this->getContext($context, "isCommentable"))) ? ("fos_comment_thread_open") : ("fos_comment_thread_close")), array(), "FOSCommentBundle"), "html", null, true);
        echo "\" />
            ";
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:commentable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 28,  74 => 27,  68 => 21,  63 => 19,  59 => 18,  53 => 16,  50 => 15,  42 => 30,  40 => 27,  34 => 23,  32 => 15,  25 => 13,  21 => 11,);
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
/* <div class="fos_comment_commentable_form_holder">*/
/*     <form class="fos_comment_commentable_form" action="{{ url('fos_comment_patch_thread_commentable', {'id': id}) }}" data-fos-comment-thread-id="{{ id }}" method="POST">*/
/* */
/*         {% block fos_comment_form_fields %}*/
/*             {{ form_errors(form) }}*/
/* */
/*             {{ form_errors(form.isCommentable) }}*/
/*             {{ form_widget(form.isCommentable) }}*/
/* */
/*             {{ form_rest(form) }}*/
/*         {% endblock %}*/
/* */
/*         <input type="hidden" name="_method" value="patch" />*/
/* */
/*         <div class="fos_comment_submit">*/
/*             {% block fos_comment_form_submit %}*/
/*                 <input type="submit" value="{{ (isCommentable ? 'fos_comment_thread_open' : 'fos_comment_thread_close') | trans({}, 'FOSCommentBundle') }}" />*/
/*             {% endblock %}*/
/*         </div>*/
/* */
/*     </form>*/
/* </div>*/
/* */
