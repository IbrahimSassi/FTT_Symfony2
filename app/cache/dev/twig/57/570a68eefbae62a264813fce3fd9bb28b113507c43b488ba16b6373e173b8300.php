<?php

/* FTTUtilisateurBundle:Reclamation:Contact.html.twig */
class __TwigTemplate_1f5a4151650f25c173b030a4459ed76c45b19220390fc72af348331ff1b5e22b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("FTTUtilisateurBundle::layoutGlobal.html.twig", "FTTUtilisateurBundle:Reclamation:Contact.html.twig", 4);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FTTUtilisateurBundle::layoutGlobal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
    <style>

        .contact {
            position: absolute;
            left: 51%;
            top: 48%;
            margin-left: -125px;
            margin-top: -125px;
            height: 100px;
            width: 144px;
            background: #F4F4F4;

            border-radius: 2px;
            -ms-border-radius: 2px;
            -moz-border-radius: 2px;
            -o-border-radius: 2px;
            -webkit-border-radius: 2px;
        }
        .contact .envelope {
            position: absolute;
            height: 93px;
            width: 165px;
            left: 50%;
            margin-left: -83px;
            top: 50%;
            margin-top: -50px;
            background: #F9F9F9;

            transition: margin-top 300ms;
            -ms-transition: margin-top 300ms;
            -moz-transition: margin-top 300ms;
            -o-transition: margin-top 300ms;
            -webkit-transition: margin-top 300ms;
        }
        .contact:hover .envelope {
            transition-delay: 150ms;
            -ms-transition-delay: 150ms;
            -moz-transition-delay: 150ms;
            -o-transition-delay: 150ms;
            margin-top: -20px;
        }
        .contact .envelope .top {
            position: absolute;
            top: -3px;
            left: 0px;
            width: 100%;
            height: 73px;
            z-index: 30;
            overflow: hidden;

            transform-origin: top;
            -ms-transform-origin: top;
            -moz-transform-origin: top;
            -o-transform-origin: top;
            -webkit-transform-origin: top;

            transition: transform 300ms 150ms, z-index 0ms 150ms, height 300ms 0ms, top 300ms 0ms;
            -ms-transition: -ms-transform 300ms 150ms, z-index 0ms 150ms, height 300ms 0ms, top 300ms 0ms;
            -moz-transition: -moz-transform 300ms 150ms, z-index 0ms 150ms, height 300ms 0ms, top 300ms 0ms;
            -o-transition: -o-transform 300ms 150ms, z-index 0ms 150ms, height 300ms 0ms, top 300ms 0ms;
            -webkit-transition: -webkit-transform 300ms 150ms, z-index 0ms 150ms, height 300ms 0ms, top 300ms 0ms;
        }
        .contact:hover .envelope .top {
            transition: transform 300ms 0ms, height 300ms 150ms, top 300ms 150ms;
            -ms-transition: -ms-transform 300ms 0ms, height 300ms 150ms, top 300ms 150ms;
            -moz-transition: -moz-transform 300ms 0ms, height 300ms 150ms, top 300ms 150ms;
            -o-transition: -o-transform 300ms 0ms, height 300ms 150ms, top 300ms 150ms;
            -webkit-transition: -webkit-transform 300ms 0ms, height 300ms 150ms, top 300ms 150ms;

            height: 10px;
            top: -60px;

            transform: rotateX(180deg);
            -ms-transform: rotateX(180deg);
            -moz-transform: rotateX(180deg);
            -o-transform: rotateX(180deg);
            -webkit-transform: rotateX(180deg);
        }
        .contact .envelope .outer {
            position: absolute;
            bottom: 0px;
            left: 0px;
            border-left: 83px solid transparent;
            border-right: 82px solid transparent;
            border-top: 70px solid #EEE;
        }
        .contact .envelope .outer .inner {
            position: absolute;
            left: -81px;
            top: -73px;
            border-left: 81px solid transparent;
            border-right: 80px solid transparent;
            border-top: 68px solid #333;
        }
        .contact .envelope .bottom {
            position: absolute;
            z-index: 20;
            bottom: 0px;
            left: 2px;
            border-left: 81px solid transparent;
            border-right: 80px solid transparent;
            border-bottom: 45px solid #333;
        }
        .contact .envelope .left {
            position: absolute;
            z-index: 20; top: 0px;
            left: 0px;
            border-left: 81px solid #333;
            border-top: 45px solid transparent;
            border-bottom: 45px solid transparent;
        }
        .contact .envelope .right {
            position: absolute;
            z-index: 20;
            top: 0px;
            right: 0px;
            border-right: 80px solid #333;
            border-top: 45px solid transparent;
            border-bottom: 45px solid transparent;
        }
        .contact .envelope .cover {
            position: absolute;
            z-index: 15;
            bottom: 0px;
            left: 0px;
            height: 55%;
            width: 100%;
            background: #EEE;
        }
        .contact .envelope .paper {
            position: absolute;
            height: 83px;
            padding-top: 10px;
            width: 100%;
            top: 0px;
            left: 0px;
            background: #F9F9F9;
            z-index: 10;
            transition: margin-top 300ms 0ms;
            -ms-transition: margin-top 300ms 0ms;
            -moz-transition: margin-top 300ms 0ms;
            -o-transition: margin-top 300ms 0ms;
            -webkit-transition: margin-top 300ms 0ms;
        }
        .contact:hover .envelope .paper {
            margin-top: -60px;
            transition: margin-top 300ms 150ms;
            -ms-transition: margin-top 300ms 150ms;
            -moz-transition: margin-top 300ms 150ms;
            -o-transition: margin-top 300ms 150ms;
            -webkit-transition: margin-top 300ms 150ms;
        }

        h1{ margin-left:190px;}


    </style>
    <h1>                       Contactez nous              </h1> 

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class=\"contact\">
        <div class=\"envelope\">
            <div class=\"top\">
                <div class=\"outer\"><div class=\"inner\"></div></div>
            </div>
            <div class=\"bottom\"></div>
            <div class=\"left\"></div>
            <div class=\"right\"></div>
            <div class=\"cover\"></div>
            <div class=\"paper\">
                <div class=\"i\">Telephone: 71596242</div>
                <div class=\"j\">Adresse: Esprit Ghazela Tunis</div>
            </div>
        </div>
    </div>


    ";
        // line 192
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form');
        echo "

";
    }

    public function getTemplateName()
    {
        return "FTTUtilisateurBundle:Reclamation:Contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 192,  31 => 7,  28 => 6,  11 => 4,);
    }
}
/* */
/* */
/* */
/* {% extends "FTTUtilisateurBundle::layoutGlobal.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*     <style>*/
/* */
/*         .contact {*/
/*             position: absolute;*/
/*             left: 51%;*/
/*             top: 48%;*/
/*             margin-left: -125px;*/
/*             margin-top: -125px;*/
/*             height: 100px;*/
/*             width: 144px;*/
/*             background: #F4F4F4;*/
/* */
/*             border-radius: 2px;*/
/*             -ms-border-radius: 2px;*/
/*             -moz-border-radius: 2px;*/
/*             -o-border-radius: 2px;*/
/*             -webkit-border-radius: 2px;*/
/*         }*/
/*         .contact .envelope {*/
/*             position: absolute;*/
/*             height: 93px;*/
/*             width: 165px;*/
/*             left: 50%;*/
/*             margin-left: -83px;*/
/*             top: 50%;*/
/*             margin-top: -50px;*/
/*             background: #F9F9F9;*/
/* */
/*             transition: margin-top 300ms;*/
/*             -ms-transition: margin-top 300ms;*/
/*             -moz-transition: margin-top 300ms;*/
/*             -o-transition: margin-top 300ms;*/
/*             -webkit-transition: margin-top 300ms;*/
/*         }*/
/*         .contact:hover .envelope {*/
/*             transition-delay: 150ms;*/
/*             -ms-transition-delay: 150ms;*/
/*             -moz-transition-delay: 150ms;*/
/*             -o-transition-delay: 150ms;*/
/*             margin-top: -20px;*/
/*         }*/
/*         .contact .envelope .top {*/
/*             position: absolute;*/
/*             top: -3px;*/
/*             left: 0px;*/
/*             width: 100%;*/
/*             height: 73px;*/
/*             z-index: 30;*/
/*             overflow: hidden;*/
/* */
/*             transform-origin: top;*/
/*             -ms-transform-origin: top;*/
/*             -moz-transform-origin: top;*/
/*             -o-transform-origin: top;*/
/*             -webkit-transform-origin: top;*/
/* */
/*             transition: transform 300ms 150ms, z-index 0ms 150ms, height 300ms 0ms, top 300ms 0ms;*/
/*             -ms-transition: -ms-transform 300ms 150ms, z-index 0ms 150ms, height 300ms 0ms, top 300ms 0ms;*/
/*             -moz-transition: -moz-transform 300ms 150ms, z-index 0ms 150ms, height 300ms 0ms, top 300ms 0ms;*/
/*             -o-transition: -o-transform 300ms 150ms, z-index 0ms 150ms, height 300ms 0ms, top 300ms 0ms;*/
/*             -webkit-transition: -webkit-transform 300ms 150ms, z-index 0ms 150ms, height 300ms 0ms, top 300ms 0ms;*/
/*         }*/
/*         .contact:hover .envelope .top {*/
/*             transition: transform 300ms 0ms, height 300ms 150ms, top 300ms 150ms;*/
/*             -ms-transition: -ms-transform 300ms 0ms, height 300ms 150ms, top 300ms 150ms;*/
/*             -moz-transition: -moz-transform 300ms 0ms, height 300ms 150ms, top 300ms 150ms;*/
/*             -o-transition: -o-transform 300ms 0ms, height 300ms 150ms, top 300ms 150ms;*/
/*             -webkit-transition: -webkit-transform 300ms 0ms, height 300ms 150ms, top 300ms 150ms;*/
/* */
/*             height: 10px;*/
/*             top: -60px;*/
/* */
/*             transform: rotateX(180deg);*/
/*             -ms-transform: rotateX(180deg);*/
/*             -moz-transform: rotateX(180deg);*/
/*             -o-transform: rotateX(180deg);*/
/*             -webkit-transform: rotateX(180deg);*/
/*         }*/
/*         .contact .envelope .outer {*/
/*             position: absolute;*/
/*             bottom: 0px;*/
/*             left: 0px;*/
/*             border-left: 83px solid transparent;*/
/*             border-right: 82px solid transparent;*/
/*             border-top: 70px solid #EEE;*/
/*         }*/
/*         .contact .envelope .outer .inner {*/
/*             position: absolute;*/
/*             left: -81px;*/
/*             top: -73px;*/
/*             border-left: 81px solid transparent;*/
/*             border-right: 80px solid transparent;*/
/*             border-top: 68px solid #333;*/
/*         }*/
/*         .contact .envelope .bottom {*/
/*             position: absolute;*/
/*             z-index: 20;*/
/*             bottom: 0px;*/
/*             left: 2px;*/
/*             border-left: 81px solid transparent;*/
/*             border-right: 80px solid transparent;*/
/*             border-bottom: 45px solid #333;*/
/*         }*/
/*         .contact .envelope .left {*/
/*             position: absolute;*/
/*             z-index: 20; top: 0px;*/
/*             left: 0px;*/
/*             border-left: 81px solid #333;*/
/*             border-top: 45px solid transparent;*/
/*             border-bottom: 45px solid transparent;*/
/*         }*/
/*         .contact .envelope .right {*/
/*             position: absolute;*/
/*             z-index: 20;*/
/*             top: 0px;*/
/*             right: 0px;*/
/*             border-right: 80px solid #333;*/
/*             border-top: 45px solid transparent;*/
/*             border-bottom: 45px solid transparent;*/
/*         }*/
/*         .contact .envelope .cover {*/
/*             position: absolute;*/
/*             z-index: 15;*/
/*             bottom: 0px;*/
/*             left: 0px;*/
/*             height: 55%;*/
/*             width: 100%;*/
/*             background: #EEE;*/
/*         }*/
/*         .contact .envelope .paper {*/
/*             position: absolute;*/
/*             height: 83px;*/
/*             padding-top: 10px;*/
/*             width: 100%;*/
/*             top: 0px;*/
/*             left: 0px;*/
/*             background: #F9F9F9;*/
/*             z-index: 10;*/
/*             transition: margin-top 300ms 0ms;*/
/*             -ms-transition: margin-top 300ms 0ms;*/
/*             -moz-transition: margin-top 300ms 0ms;*/
/*             -o-transition: margin-top 300ms 0ms;*/
/*             -webkit-transition: margin-top 300ms 0ms;*/
/*         }*/
/*         .contact:hover .envelope .paper {*/
/*             margin-top: -60px;*/
/*             transition: margin-top 300ms 150ms;*/
/*             -ms-transition: margin-top 300ms 150ms;*/
/*             -moz-transition: margin-top 300ms 150ms;*/
/*             -o-transition: margin-top 300ms 150ms;*/
/*             -webkit-transition: margin-top 300ms 150ms;*/
/*         }*/
/* */
/*         h1{ margin-left:190px;}*/
/* */
/* */
/*     </style>*/
/*     <h1>                       Contactez nous              </h1> */
/* */
/*     <br>*/
/*     <br>*/
/*     <br>*/
/*     <br>*/
/*     <br>*/
/*     <br>*/
/*     <br>*/
/* */
/*     <div class="contact">*/
/*         <div class="envelope">*/
/*             <div class="top">*/
/*                 <div class="outer"><div class="inner"></div></div>*/
/*             </div>*/
/*             <div class="bottom"></div>*/
/*             <div class="left"></div>*/
/*             <div class="right"></div>*/
/*             <div class="cover"></div>*/
/*             <div class="paper">*/
/*                 <div class="i">Telephone: 71596242</div>*/
/*                 <div class="j">Adresse: Esprit Ghazela Tunis</div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     {{form(Form)}}*/
/* */
/* {% endblock %}*/
/* */
