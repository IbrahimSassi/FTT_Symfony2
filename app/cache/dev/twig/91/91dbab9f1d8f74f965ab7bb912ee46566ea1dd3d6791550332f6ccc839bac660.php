<?php

/* FOSCommentBundle:Thread:comment_remove.html.twig */
class __TwigTemplate_496065d39c2c053a5d438f0bebad39b599d5ff5bd9596c1643c0c0415b44b196 extends Twig_Template
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
<div class=\"fos_comment_delete_form_holder\">
    <form class=\"fos_comment_delete_form\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_patch_thread_comment_state", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "commentId" => (isset($context["commentId"]) ? $context["commentId"] : $this->getContext($context, "commentId")))), "html", null, true);
        echo "\" data-fos-comment-thread-id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" method=\"POST\">

        ";
        // line 15
        $this->displayBlock('fos_comment_form_fields', $context, $blocks);
        // line 20
        echo "
        <input type=\"hidden\" name=\"_method\" value=\"patch\" />

        <div class=\"fos_comment_submit\">
            ";
        // line 24
        $this->displayBlock('fos_comment_form_submit', $context, $blocks);
        // line 27
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        ";
    }

    // line 24
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        // line 25
        echo "                <input type=\"submit\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("fos_comment_comment_delete", array(), "FOSCommentBundle"), "html", null, true);
        echo "\" />
            ";
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment_remove.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 25,  65 => 24,  59 => 18,  53 => 16,  50 => 15,  42 => 27,  40 => 24,  34 => 20,  32 => 15,  25 => 13,  21 => 11,);
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
/* <div class="fos_comment_delete_form_holder">*/
/*     <form class="fos_comment_delete_form" action="{{ url('fos_comment_patch_thread_comment_state', {'id': id, 'commentId': commentId}) }}" data-fos-comment-thread-id="{{ id }}" method="POST">*/
/* */
/*         {% block fos_comment_form_fields %}*/
/*             {{ form_errors(form) }}*/
/* */
/*             {{ form_rest(form) }}*/
/*         {% endblock %}*/
/* */
/*         <input type="hidden" name="_method" value="patch" />*/
/* */
/*         <div class="fos_comment_submit">*/
/*             {% block fos_comment_form_submit %}*/
/*                 <input type="submit" value="{{ 'fos_comment_comment_delete' | trans({}, 'FOSCommentBundle') }}" />*/
/*             {% endblock %}*/
/*         </div>*/
/* */
/*     </form>*/
/* </div>*/
/* */
