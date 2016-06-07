<?php

/* FOSCommentBundle:Thread:comment_edit.html.twig */
class __TwigTemplate_7181b622bca6816bc6155e4e99257edab7a2efbbc15e44153411ac5c547ca0af extends Twig_Template
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
<div class=\"fos_comment_comment_form_holder\">
    <form class=\"fos_comment_comment_edit_form\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_put_thread_comments", array("id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "thread", array()), "id", array()), "commentId" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">

        ";
        // line 15
        $this->displayBlock('fos_comment_form_fields', $context, $blocks);
        // line 21
        echo "
        <div class=\"fos_comment_submit\">
            <button type=\"button\" class=\"fos_comment_comment_edit_cancel\">";
        // line 23
        echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_edit_cancel", array(), "FOSCommentBundle");
        echo "</button>
            ";
        // line 24
        $this->displayBlock('fos_comment_form_submit', $context, $blocks);
        // line 27
        echo "        </div>

        <input type=\"hidden\" name=\"_method\" value=\"PUT\">

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
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'errors');
        echo "
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'widget');
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
        ";
    }

    // line 24
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        // line 25
        echo "                <input type=\"submit\" value=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_edit_submit", array(), "FOSCommentBundle");
        echo "\" />
            ";
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  74 => 24,  68 => 19,  64 => 18,  60 => 17,  55 => 16,  52 => 15,  42 => 27,  40 => 24,  36 => 23,  32 => 21,  30 => 15,  25 => 13,  21 => 11,);
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
/* <div class="fos_comment_comment_form_holder">*/
/*     <form class="fos_comment_comment_edit_form" action="{{ url('fos_comment_put_thread_comments', {'id': comment.thread.id, 'commentId': comment.id}) }}" method="POST">*/
/* */
/*         {% block fos_comment_form_fields %}*/
/*             {{ form_errors(form) }}*/
/*             {{ form_errors(form.body) }}*/
/*             {{ form_widget(form.body) }}*/
/*             {{ form_widget(form._token) }}*/
/*         {% endblock %}*/
/* */
/*         <div class="fos_comment_submit">*/
/*             <button type="button" class="fos_comment_comment_edit_cancel">{% trans from 'FOSCommentBundle' %}fos_comment_comment_edit_cancel{% endtrans %}</button>*/
/*             {% block fos_comment_form_submit %}*/
/*                 <input type="submit" value="{% trans from 'FOSCommentBundle' %}fos_comment_comment_edit_submit{% endtrans %}" />*/
/*             {% endblock %}*/
/*         </div>*/
/* */
/*         <input type="hidden" name="_method" value="PUT">*/
/* */
/*     </form>*/
/* </div>*/
/* */
