<?php

/* FTTAdherentBundle:Default:succesrecharge.html.twig */
class __TwigTemplate_8bc8458d25b39c000f75c3fccba5072e5c36c8631bdd7e52c742b7fa6d17718f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdherentBundle::layoutAdherent.html.twig", "FTTAdherentBundle:Default:succesrecharge.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FTTAdherentBundle::layoutAdherent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <style>
        .success-message {
            text-align: center;
            max-width: 700px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .success-message__icon {
            max-width: 75px;
        }

        .success-message__title {
            color: #3DC480;
            transform: translateY(25px);
            opacity: 0;
            font-size: 60px;
            transition: all 200ms ease;
        }
        .active .success-message__title {
            transform: translateY(0);
            opacity: 1;
        }

        .success-message__content {
            color: #B8BABB;
            transform: translateY(25px);
            opacity: 0;
            transition: all 200ms ease;
            transition-delay: 50ms;
        }
        .active .success-message__content {
            transform: translateY(0);
            opacity: 1;
        }

        .icon-checkmark circle {
            fill: #3DC480;
            transform-origin: 50% 50%;
            transform: scale(0);
            transition: transform 200ms cubic-bezier(0.22, 0.96, 0.38, 0.98);
        }
        .icon-checkmark path {
            transition: stroke-dashoffset 350ms ease;
            transition-delay: 100ms;
        }
        .active .icon-checkmark circle {
            transform: scale(1);
        }

    </style>



    <body>

        <div class=\"col-md-2\"></div>
        <div class=\"col-lg-8\" style=\"margin-top: 18%\">
            <div class=\"success-message\">
                <svg style=\"size: 36px\" viewBox=\"0 0 76 76\" class=\"success-message__icon icon-checkmark\">
                <circle cx=\"38\" cy=\"38\" r=\"36\"/>
                <path fill=\"none\" stroke=\"#FFFFFF\" stroke-width=\"5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-miterlimit=\"10\" d=\"M17.7,40.9l10.9,10.9l28.7-28.7\"/>
                </svg>
                <a class=\"btn\" href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("ticket_user");
        echo "\"><h1 class=\"success-message__title\">Transaction effectuée</h1></a>
                <div class=\"success-message__content\">
                    <p style=\"font-size: larger\" > Félicitation ! Rechargement du compte avec succés !</p>
                </div>

            </div>        
        </div>


        <script>
            function PathLoader(el) {
                this.el = el;
                this.strokeLength = el.getTotalLength();

                // set dash offset to 0
                this.el.style.strokeDasharray =
                        this.el.style.strokeDashoffset = this.strokeLength;
            }

            PathLoader.prototype._draw = function (val) {
                this.el.style.strokeDashoffset = this.strokeLength * (1 - val);
            }

            PathLoader.prototype.setProgress = function (val, cb) {
                this._draw(val);
                if (cb && typeof cb === 'function')
                    cb();
            }

            PathLoader.prototype.setProgressFn = function (fn) {
                if (typeof fn === 'function')
                    fn(this);
            }

            var body = document.body,
                    svg = document.querySelector('svg path');

            if (svg !== null) {
                svg = new PathLoader(svg);

                setTimeout(function () {
                    document.body.classList.add('active');
                    svg.setProgress(1);
                }, 200);
            }

            document.addEventListener('click', function () {

                if (document.body.classList.contains('active')) {
                    document.body.classList.remove('active');
                    svg.setProgress(0);
                    return;
                }
                document.body.classList.add('active');
                svg.setProgress(1);
            });
        </script>

    </body>
";
    }

    public function getTemplateName()
    {
        return "FTTAdherentBundle:Default:succesrecharge.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 70,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FTTAdherentBundle::layoutAdherent.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*     <style>*/
/*         .success-message {*/
/*             text-align: center;*/
/*             max-width: 700px;*/
/*             position: absolute;*/
/*             top: 50%;*/
/*             left: 50%;*/
/*             transform: translate(-50%, -50%);*/
/*         }*/
/* */
/*         .success-message__icon {*/
/*             max-width: 75px;*/
/*         }*/
/* */
/*         .success-message__title {*/
/*             color: #3DC480;*/
/*             transform: translateY(25px);*/
/*             opacity: 0;*/
/*             font-size: 60px;*/
/*             transition: all 200ms ease;*/
/*         }*/
/*         .active .success-message__title {*/
/*             transform: translateY(0);*/
/*             opacity: 1;*/
/*         }*/
/* */
/*         .success-message__content {*/
/*             color: #B8BABB;*/
/*             transform: translateY(25px);*/
/*             opacity: 0;*/
/*             transition: all 200ms ease;*/
/*             transition-delay: 50ms;*/
/*         }*/
/*         .active .success-message__content {*/
/*             transform: translateY(0);*/
/*             opacity: 1;*/
/*         }*/
/* */
/*         .icon-checkmark circle {*/
/*             fill: #3DC480;*/
/*             transform-origin: 50% 50%;*/
/*             transform: scale(0);*/
/*             transition: transform 200ms cubic-bezier(0.22, 0.96, 0.38, 0.98);*/
/*         }*/
/*         .icon-checkmark path {*/
/*             transition: stroke-dashoffset 350ms ease;*/
/*             transition-delay: 100ms;*/
/*         }*/
/*         .active .icon-checkmark circle {*/
/*             transform: scale(1);*/
/*         }*/
/* */
/*     </style>*/
/* */
/* */
/* */
/*     <body>*/
/* */
/*         <div class="col-md-2"></div>*/
/*         <div class="col-lg-8" style="margin-top: 18%">*/
/*             <div class="success-message">*/
/*                 <svg style="size: 36px" viewBox="0 0 76 76" class="success-message__icon icon-checkmark">*/
/*                 <circle cx="38" cy="38" r="36"/>*/
/*                 <path fill="none" stroke="#FFFFFF" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M17.7,40.9l10.9,10.9l28.7-28.7"/>*/
/*                 </svg>*/
/*                 <a class="btn" href="{{path('ticket_user')}}"><h1 class="success-message__title">Transaction effectuée</h1></a>*/
/*                 <div class="success-message__content">*/
/*                     <p style="font-size: larger" > Félicitation ! Rechargement du compte avec succés !</p>*/
/*                 </div>*/
/* */
/*             </div>        */
/*         </div>*/
/* */
/* */
/*         <script>*/
/*             function PathLoader(el) {*/
/*                 this.el = el;*/
/*                 this.strokeLength = el.getTotalLength();*/
/* */
/*                 // set dash offset to 0*/
/*                 this.el.style.strokeDasharray =*/
/*                         this.el.style.strokeDashoffset = this.strokeLength;*/
/*             }*/
/* */
/*             PathLoader.prototype._draw = function (val) {*/
/*                 this.el.style.strokeDashoffset = this.strokeLength * (1 - val);*/
/*             }*/
/* */
/*             PathLoader.prototype.setProgress = function (val, cb) {*/
/*                 this._draw(val);*/
/*                 if (cb && typeof cb === 'function')*/
/*                     cb();*/
/*             }*/
/* */
/*             PathLoader.prototype.setProgressFn = function (fn) {*/
/*                 if (typeof fn === 'function')*/
/*                     fn(this);*/
/*             }*/
/* */
/*             var body = document.body,*/
/*                     svg = document.querySelector('svg path');*/
/* */
/*             if (svg !== null) {*/
/*                 svg = new PathLoader(svg);*/
/* */
/*                 setTimeout(function () {*/
/*                     document.body.classList.add('active');*/
/*                     svg.setProgress(1);*/
/*                 }, 200);*/
/*             }*/
/* */
/*             document.addEventListener('click', function () {*/
/* */
/*                 if (document.body.classList.contains('active')) {*/
/*                     document.body.classList.remove('active');*/
/*                     svg.setProgress(0);*/
/*                     return;*/
/*                 }*/
/*                 document.body.classList.add('active');*/
/*                 svg.setProgress(1);*/
/*             });*/
/*         </script>*/
/* */
/*     </body>*/
/* {% endblock %}*/
