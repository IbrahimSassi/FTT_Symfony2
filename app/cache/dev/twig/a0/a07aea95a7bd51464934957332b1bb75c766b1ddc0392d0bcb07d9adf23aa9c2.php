<?php

/* FOSCommentBundle:Thread:thread_xml_feed.rss.twig */
class __TwigTemplate_5e8301855567a922a51bdf4fc12d981e45e94edd772caba7b522463a6d2f7781 extends Twig_Template
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
        // line 11
        echo "
<feed xmlns=\"http://www.w3.org/2005/Atom\">
    <title>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "id", array()), "html", null, true);
        echo "</title>
    <id>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "id", array()), "html", null, true);
        echo "</id>
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "permalink", array()), "html", null, true);
        echo "\" rel=\"alternate\" />
    <updated>";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "lastCommentAt", array()), "c"), "html", null, true);
        echo "</updated>
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["commentinfo"]) {
            // line 18
            echo "    <entry>
        <title>By ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commentinfo"], "comment", array()), "authorName", array()), "html", null, true);
            echo " on ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["commentinfo"], "comment", array()), "createdAt", array())), "html", null, true);
            echo "</title>
        <author>
            <name>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commentinfo"], "comment", array()), "authorName", array()), "html", null, true);
            echo "</name>
        </author>
        <updated>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["commentinfo"], "comment", array()), "createdAt", array()), "c"), "html", null, true);
            echo "</updated>
        <link rel=\"alternate\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "permalink", array()), "html", null, true);
            echo "#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commentinfo"], "comment", array()), "id", array()), "html", null, true);
            echo "</link>
        <summary>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commentinfo"], "comment", array()), "body", array()), "html", null, true);
            echo "</summary>
    </entry>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentinfo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</feed>
";
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:thread_xml_feed.rss.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 28,  68 => 25,  62 => 24,  58 => 23,  53 => 21,  46 => 19,  43 => 18,  39 => 17,  35 => 16,  31 => 15,  27 => 14,  23 => 13,  19 => 11,);
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
/* <feed xmlns="http://www.w3.org/2005/Atom">*/
/*     <title>{{ thread.id }}</title>*/
/*     <id>{{ thread.id }}</id>*/
/*     <link href="{{ thread.permalink }}" rel="alternate" />*/
/*     <updated>{{ thread.lastCommentAt|date("c") }}</updated>*/
/* {% for commentinfo in comments %}*/
/*     <entry>*/
/*         <title>By {{ commentinfo.comment.authorName }} on {{ commentinfo.comment.createdAt|date }}</title>*/
/*         <author>*/
/*             <name>{{ commentinfo.comment.authorName }}</name>*/
/*         </author>*/
/*         <updated>{{ commentinfo.comment.createdAt|date("c") }}</updated>*/
/*         <link rel="alternate">{{ thread.permalink }}#{{ commentinfo.comment.id }}</link>*/
/*         <summary>{{ commentinfo.comment.body }}</summary>*/
/*     </entry>*/
/* {% endfor %}*/
/* </feed>*/
/* */
