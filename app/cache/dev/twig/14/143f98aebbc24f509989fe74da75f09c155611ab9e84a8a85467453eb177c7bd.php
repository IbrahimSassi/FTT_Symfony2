<?php

/* EWZRecaptchaBundle:Form:ewz_recaptcha_widget.html.twig */
class __TwigTemplate_8fbc8d543a6992a6e39e0984c7b4ca70af98e74c9c107adea0784d529ca6cf05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ewz_recaptcha_widget' => array($this, 'block_ewz_recaptcha_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('ewz_recaptcha_widget', $context, $blocks);
        // line 43
        echo "
";
    }

    // line 1
    public function block_ewz_recaptcha_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "ewz_recaptcha_enabled", array())) {
            // line 4
            echo "        ";
            if ( !$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "ewz_recaptcha_ajax", array())) {
                // line 5
                echo "            <script src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "url_challenge", array()), "html", null, true);
                echo "\" type=\"text/javascript\"></script>
            <div class=\"g-recaptcha\" data-theme=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "options", array()), "theme", array()), "html", null, true);
                echo "\" data-type=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "options", array()), "type", array()), "html", null, true);
                echo "\" data-sitekey=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "public_key", array()), "html", null, true);
                echo "\"></div>
            <noscript>
                <div style=\"width: 302px; height: 352px;\">
                    <div style=\"width: 302px; height: 352px; position: relative;\">
                        <div style=\"width: 302px; height: 352px; position: absolute;\">
                            <iframe src=\"https://www.google.com/recaptcha/api/fallback?k=";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "public_key", array()), "html", null, true);
                echo "\"
                                    frameborder=\"0\" scrolling=\"no\"
                                    style=\"width: 302px; height:352px; border-style: none;\"
                            >
                            </iframe>
                        </div>
                        <div style=\"width: 250px; height: 80px; position: absolute; border-style: none; bottom: 21px; left: 25px; margin: 0px; padding: 0px; right: 25px;\">
                            <textarea id=\"g-recaptcha-response\" name=\"g-recaptcha-response\"
                                      class=\"g-recaptcha-response\"
                                      style=\"width: 250px; height: 80px; border: 1px solid #c1c1c1; margin: 0px; padding: 0px; resize: none;\"
                            >
                            </textarea>
                        </div>
                    </div>
                </div>
            </noscript>
        ";
            } else {
                // line 28
                echo "            <div id=\"ewz_recaptcha_div\"></div>

            <script type=\"text/javascript\">
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.onload = function() {
                    Recaptcha.create('";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "public_key", array()), "html", null, true);
                echo "', 'ewz_recaptcha_div', ";
                echo twig_jsonencode_filter((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "options", array()), array())) : (array())));
                echo ");
                }
                script.src = '";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "url_api", array()), "html", null, true);
                echo "';
                document.getElementsByTagName('head')[0].appendChild(script);
            </script>
        ";
            }
            // line 40
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "EWZRecaptchaBundle:Form:ewz_recaptcha_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  97 => 40,  90 => 36,  83 => 34,  75 => 28,  55 => 11,  43 => 6,  38 => 5,  35 => 4,  32 => 3,  30 => 2,  27 => 1,  22 => 43,  20 => 1,);
    }
}
/* {% block ewz_recaptcha_widget %}*/
/* {% spaceless %}*/
/*     {% if form.vars.ewz_recaptcha_enabled %}*/
/*         {% if not form.vars.ewz_recaptcha_ajax %}*/
/*             <script src="{{ form.vars.url_challenge }}" type="text/javascript"></script>*/
/*             <div class="g-recaptcha" data-theme="{{ attr.options.theme }}" data-type="{{ attr.options.type }}" data-sitekey="{{ form.vars.public_key }}"></div>*/
/*             <noscript>*/
/*                 <div style="width: 302px; height: 352px;">*/
/*                     <div style="width: 302px; height: 352px; position: relative;">*/
/*                         <div style="width: 302px; height: 352px; position: absolute;">*/
/*                             <iframe src="https://www.google.com/recaptcha/api/fallback?k={{ form.vars.public_key }}"*/
/*                                     frameborder="0" scrolling="no"*/
/*                                     style="width: 302px; height:352px; border-style: none;"*/
/*                             >*/
/*                             </iframe>*/
/*                         </div>*/
/*                         <div style="width: 250px; height: 80px; position: absolute; border-style: none; bottom: 21px; left: 25px; margin: 0px; padding: 0px; right: 25px;">*/
/*                             <textarea id="g-recaptcha-response" name="g-recaptcha-response"*/
/*                                       class="g-recaptcha-response"*/
/*                                       style="width: 250px; height: 80px; border: 1px solid #c1c1c1; margin: 0px; padding: 0px; resize: none;"*/
/*                             >*/
/*                             </textarea>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </noscript>*/
/*         {% else %}*/
/*             <div id="ewz_recaptcha_div"></div>*/
/* */
/*             <script type="text/javascript">*/
/*                 var script = document.createElement('script');*/
/*                 script.type = 'text/javascript';*/
/*                 script.onload = function() {*/
/*                     Recaptcha.create('{{ form.vars.public_key }}', 'ewz_recaptcha_div', {{ attr.options|default({})|json_encode|raw }});*/
/*                 }*/
/*                 script.src = '{{ form.vars.url_api }}';*/
/*                 document.getElementsByTagName('head')[0].appendChild(script);*/
/*             </script>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock ewz_recaptcha_widget %}*/
/* */
/* */
