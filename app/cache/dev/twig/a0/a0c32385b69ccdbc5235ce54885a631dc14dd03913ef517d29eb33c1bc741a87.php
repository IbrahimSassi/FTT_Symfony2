<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_0bdbe1485f9861a12d1b668b8cbce9f7abbcc282fba7b61e622c2b8ed54d3672 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->loadTemplate("@WebProfiler/Profiler/base_js.html.twig", "WebProfilerBundle:Profiler:toolbar_js.html.twig", 2)->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            },
            {'maxTries': 5}
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  79 => 29,  75 => 28,  70 => 26,  66 => 25,  62 => 24,  50 => 15,  46 => 14,  42 => 12,  32 => 6,  30 => 5,  26 => 3,  24 => 2,  19 => 1,);
    }
}
/* <div id="sfwdt{{ token }}" class="sf-toolbar" style="display: none"></div>*/
/* {% include '@WebProfiler/Profiler/base_js.html.twig' %}*/
/* <script>/*<![CDATA[*//* */
/*     (function () {*/
/*         {% if 'top' == position %}*/
/*             var sfwdt = document.getElementById('sfwdt{{ token }}');*/
/*             document.body.insertBefore(*/
/*                 document.body.removeChild(sfwdt),*/
/*                 document.body.firstChild*/
/*             );*/
/*         {% endif %}*/
/* */
/*         Sfjs.load(*/
/*             'sfwdt{{ token }}',*/
/*             '{{ path("_wdt", { "token": token }) }}',*/
/*             function(xhr, el) {*/
/*                 el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';*/
/* */
/*                 if (el.style.display == 'none') {*/
/*                     return;*/
/*                 }*/
/* */
/*                 if (Sfjs.getPreference('toolbar/displayState') == 'none') {*/
/*                     document.getElementById('sfToolbarMainContent-{{ token }}').style.display = 'none';*/
/*                     document.getElementById('sfToolbarClearer-{{ token }}').style.display = 'none';*/
/*                     document.getElementById('sfMiniToolbar-{{ token }}').style.display = 'block';*/
/*                 } else {*/
/*                     document.getElementById('sfToolbarMainContent-{{ token }}').style.display = 'block';*/
/*                     document.getElementById('sfToolbarClearer-{{ token }}').style.display = 'block';*/
/*                     document.getElementById('sfMiniToolbar-{{ token }}').style.display = 'none';*/
/*                 }*/
/*             },*/
/*             function(xhr) {*/
/*                 if (xhr.status !== 0) {*/
/*                     confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\n\nDo you want to open the profiler?') && (window.location = '{{ path("_profiler", { "token": token }) }}');*/
/*                 }*/
/*             },*/
/*             {'maxTries': 5}*/
/*         );*/
/*     })();*/
/* /*]]>*//* </script>*/
/* */
