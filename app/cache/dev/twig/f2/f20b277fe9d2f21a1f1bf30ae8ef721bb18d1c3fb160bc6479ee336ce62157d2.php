<?php

/* ::layout.html.twig */
class __TwigTemplate_c4b4f8aa7d9c805a6964a6e66bfc1c7207467dca97f2d48ff60e5c4951beafdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'MenuSite' => array($this, 'block_MenuSite'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

    <head>
        <!-- Basic -->
        <meta charset=\"utf-8\">
        <title>Fédération Tunisienne de Tennis</title>
        <meta name=\"keywords\" content=\"TFT FTT\" />
        <meta name=\"description\" content=\"FTT Federation Tunisienne De Tennis\">
        <!-- Mobile Metas -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <!-- Theme CSS -->
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <!-- Responsive CSS -->
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/theme-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <!-- Skins Theme -->
        <link href=\"#\" rel=\"stylesheet\" media=\"screen\" class=\"skin\">

        <!-- Favicons -->
        <link rel=\"shortcut icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icons/tennis.ico"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icons/apple-touch-icon.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icons/apple-touch-icon-72x72.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icons/apple-touch-icon-114x114.png"), "html", null, true);
        echo "\">  
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/css/icheck/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js\"></script>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dcsrating/css/rating.css"), "html", null, true);
        echo "\" />

        <!-- Skins Changer-->

    </head>

    <body style=\"font-family: 'Oswald'\">

        <!-- layout-->
        <div id=\"layout\">
            <!-- Header-->
            <header>
                <!-- End headerbox-->
                <div class=\"headerbox\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <!-- Logo-->
                            <div class=\"col-md-6 logo\">
                                <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("ftt_utilisateur_homepage");
        echo "\" title=\"Return Home\">                            
                                    <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo1.png"), "html", null, true);
        echo "\" alt=\"Logo\" class=\"logo_img\">
                                </a>

                            </div>
                            ";
        // line 49
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 50
            echo "                                <div class=\"col-md-6 adds\">
                                    <a class=\"btn btn-flat4\" style=\"width: 22%\" href=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" >
                                        <i class=\"fa fa-sign-in\"></i>
                                        Se connecter</a>
                                    <a class=\"btn btn-flat4\"  style=\"width: 22%\" href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" >
                                        <i class=\"fa fa-plus\"></i>
                                        S'inscrire</a>
                                </div>
                            ";
        }
        // line 59
        echo "                            ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 60
            echo "                                <div class=\"col-md-6 adds\">
                                    <a class=\"btn btn-flat5\" style=\"width: 22%\" href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" >
                                        <i class=\"fa fa-sign-out\"></i>
                                        Deconnecter</a>
                                </div>
                            ";
        }
        // line 66
        echo "                        </div>
                    </div>
                </div>
                <!-- End headerbox-->  

                ";
        // line 71
        $this->displayBlock('MenuSite', $context, $blocks);
        // line 74
        echo "

                <!-- End mainmenu-->
            </header>
            <!-- End Header-->

            <!-- Section Title -->           
            <section class=\"section-title img-news\">
                <div class=\"overlay-bg\"></div>
                <div class=\"container\">
                    <h1>FTT</h1>
                </div>
            </section>
            <!-- End Section Title --> 

            <!-- Section Area - Content Central -->
            <section class=\"content-info\">

                <!--
                <div class=\"crumbs\">
                    <div class=\"container\">
                        <ul>
                            <li><a href=\"index-2.html\">Home</a></li>
                            <li>/</li>
                            <li><a href=\"#\">News</a></li>
                            <li>/</li>
                            <li>News Right Sidebar</li>                                       
                        </ul>
                    </div>        
                </div>
                -->

                <div class=\"semiboxshadow text-center\">
                    <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/img-theme/shp.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                </div>


                <!-- Content Central -->
                <div class=\"container padding-top\">
                    <div class=\"row\">

                        <!-- content Column Left -->
                        <div class=\"col-md-8\">   


                            ";
        // line 119
        $this->displayBlock('body', $context, $blocks);
        // line 131
        echo "





                        </div>
                        <!-- End content Left -->

                        <!-- content Sidebar Center -->
                        <aside class=\"col-md-4\">                     

                            <div>
                                <h4>Searh Sidebar</h4>
                                <form class=\"search\" action=\"#\" method=\"Post\">
                                    <div class=\"input-group\">
                                        <input class=\"form-control\" placeholder=\"Search...\" name=\"email\"  type=\"email\" required=\"required\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-primary\" type=\"submit\" name=\"subscribe\" >Go!</button>
                                        </span>
                                    </div>
                                </form>   
                            </div>

                            <!-- Video presentation -->
                            <div class=\"panel-box\">
                                <div class=\"titles\">
                                    <h4>Bientot</h4>
                                </div>
                                <!-- Locations Video --> 
                                <div class=\"row\">
                                    <iframe src=\"https://www.youtube.com/embed/sQ-na9D-DEI\" class=\"video\"></iframe>
                                    <div class=\"col-md-12\">
                                        <h4>Tunis Open</h4>
                                        <p>Le Tournoi de tennis de Tunis ou Tunis Open est un tournoi de tennis appartenant aux tournois Challenger de l'ATP World Tour. Il est organisé au Tennis Club de Tunis.
                                        </p>
                                    </div>
                                </div>
                                <!-- End Locations Video --> 
                            </div>  
                            <!-- End Video presentation-->
                            <!-- End Video presentation-->

                            <!-- Widget Text-->
                            <div class=\"panel-box\">
                                <script>(function (d, s, id) {

                                        var js, fjs = d.getElementsByTagName(s)[0];

                                        if (d.getElementById(id))
                                            return;

                                        js = d.createElement(s);
                                        js.id = id;

                                        js.src = \"//connect.facebook.net/en_US/all.js#xfbml=1&appId=403924843027405\";

                                        fjs.parentNode.insertBefore(js, fjs);

                                    }(document, 'script', 'facebook-jssdk'));
                                </script>
                                <div class=\"fb-like-box\" data-href=\"https://www.facebook.com/FederationTunisienneDeTennis\" 
                                     data-width=\"362\" data-show-faces=\"true\" data-stream=\"true\" data-header=\"true\"></div>
                            </div>  
                            <!-- End Widget Text-->

                            <!-- Widget Text-->
                            <!-- End Widget Text-->
                        </aside>
                        <!-- End content Sidebar Center -->
                    </div>                     
                </div>  
                <!-- End Content Central -->

                <!-- Newsletter -->
                <div class=\"section-wide\">
                    <div class=\"container\">
                        <div class=\"row newsletter\">
                            <div class=\"col-md-12\">
                                <div class=\"text-center\">
                                    <h2>Enter your e-mail and <span class=\"text-resalt\">subscribe</span> to our newsletter.</h2>
                                    <p>Duis non lorem porta,  eros sit amet, tempor sem. Donec nunc arcu, semper a tempus et, consequat.</p>
                                </div>
                                <form id=\"newsletterForm\" action=\"http://html.iwthemes.com/sportscup/php/mailchip/newsletter-subscribe.php\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"input-group\">
                                                <span class=\"input-group-addon\">
                                                    <i class=\"fa fa-envelope\"></i>
                                                </span>
                                                <input class=\"form-control\" placeholder=\"Your Name\" name=\"name\"  type=\"text\" required=\"required\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"input-group\">
                                                <span class=\"input-group-addon\">
                                                    <i class=\"fa fa-envelope\"></i>
                                                </span>
                                                <input class=\"form-control\" placeholder=\"Your  Email\" name=\"email\"  type=\"email\" required=\"required\">
                                                <span class=\"input-group-btn\">
                                                    <button class=\"btn btn-primary\" type=\"submit\" name=\"subscribe\" >SIGN UP</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </form>   
                                <div id=\"result-newsletter\"></div>
                            </div>
                        </div>
                    </div>
                </div>  
                <!-- End Newsletter -->  
            </section>
            <!-- End Section Area -  Content Central -->

            <!-- footer-->
            ";
        // line 247
        $this->displayBlock('footer', $context, $blocks);
        // line 250
        echo "
            <!-- footer Down-->

        </div>
        <!-- End layout-->

        <!-- ======================= JQuery libs =========================== -->
        <!-- jQuery local--> 
        <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>                
        <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>     
        <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/js/icheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
        <!--Nav-->
        <script type=\"text/javascript\" src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/nav/tinynav.js"), "html", null, true);
        echo "\"></script> 
        <script type=\"text/javascript\" src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/nav/hoverIntent.js"), "html", null, true);
        echo "\"></script>   
        <script type=\"text/javascript\" src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/nav/superfish.js"), "html", null, true);
        echo "\"></script> 
        <script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/nav/jquery.sticky.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>    
        <!--Totop-->
        <script type=\"text/javascript\" src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/totop/jquery.ui.totop.js"), "html", null, true);
        echo "\" ></script>  
        <!--Accorodion-->
        <script type=\"text/javascript\" src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/accordion/accordion.js"), "html", null, true);
        echo "\" ></script>  
        <!--Slide-->
        <script type=\"text/javascript\" src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/slide/camera.js"), "html", null, true);
        echo "\" ></script>      
        <script type=\"text/javascript\" src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/slide/jquery.easing.1.3.min.js"), "html", null, true);
        echo "\"></script>   
        <!-- Maps -->
        <script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/maps/gmap3.js"), "html", null, true);
        echo "\"></script>            
        <!--Ligbox--> 
        <script type=\"text/javascript\" src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fancybox/jquery.fancybox.js"), "html", null, true);
        echo "\"></script> 
        <!-- carousel.js-->
        <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/carousel/carousel.js"), "html", null, true);
        echo "\"></script>
        <!-- Filter -->
        <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/filters/jquery.isotope.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- Twitter Feed-->
        <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/twitter/jquery.tweet.js"), "html", null, true);
        echo "\"></script> 
        <!-- flickr Feed-->
        <script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/flickr/jflickrfeed.min.js"), "html", null, true);
        echo "\"></script> 
        <!-- Counter -->
        <script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/counter/jquery.countdown.js"), "html", null, true);
        echo "\"></script>      
        <!-- Graphe -->
        <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/graphe/exporting.js"), "html", null, true);
        echo "\"></script>      
        <script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/graphe/highcharts.js"), "html", null, true);
        echo "\"></script>      
        <!--Theme Options-->
        <script type=\"text/javascript\" src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/theme-options/theme-options.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/theme-options/jquery.cookies.js"), "html", null, true);
        echo "\"></script> 
        <!-- Bootstrap.js-->
        <script type=\"text/javascript\" src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap/bootstrap.js"), "html", null, true);
        echo "\"></script> 
        <!--MAIN FUNCTIONS-->
        <script type=\"text/javascript\" src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        <!-- ======================= End JQuery libs =========================== -->
        <script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.js"), "html", null, true);
        echo "\"></script>


        <script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/popup/classie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/popup/modalEffects.js"), "html", null, true);
        echo "\"></script>

        <script>
                                    // this is important for IEs
                                    var polyfilter_scriptpath = '/js/';
        </script>
        <script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/popup/cssParser.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/popup/css-filters-polyfill.js"), "html", null, true);
        echo "\"></script>



        <script type=\"text/javascript\" src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dcsrating/js/rating.js"), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\" src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/googleapi/googleapi.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ajax/Ajax.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/pari/nbjoker.js"), "html", null, true);
        echo "\"></script>





    </body>

    <!-- Mirrored from html.iwthemes.com/sportscup/news-right-sidebar.html?theme=red by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Mar 2016 10:29:48 GMT -->
</html>";
    }

    // line 71
    public function block_MenuSite($context, array $blocks = array())
    {
        // line 72
        echo "                    ";
        echo twig_include($this->env, $context, "FTTUtilisateurBundle::Default/Includes/MenuSite.html.twig");
        echo "
                ";
    }

    // line 119
    public function block_body($context, array $blocks = array())
    {
        // line 120
        echo "                                <!--
                               Edmouuuuuuuuu hnéééééééééééééééééééééé akahaaaaaaaaaaaaaww 
                                
                                
                                matmessouuuuuuuuuuuuuuuuuuu chayyyyyyyyyyyyyyyyyyyyyyyyy e5eeeeeeeeeeerrrrrrrrrrrrrrrrr
                                aaaaaaaaaaa
                                
                                biensur mouch ma3néha , il faut creer dautres pages twig et utiliser
                                le block body , Voir lexemple
                                -->
                            ";
    }

    // line 247
    public function block_footer($context, array $blocks = array())
    {
        // line 248
        echo "                ";
        echo twig_include($this->env, $context, "FTTUtilisateurBundle::Default/Includes/footer.html.twig");
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  525 => 248,  522 => 247,  508 => 120,  505 => 119,  498 => 72,  495 => 71,  481 => 317,  477 => 316,  473 => 315,  468 => 313,  461 => 309,  457 => 308,  448 => 302,  444 => 301,  438 => 298,  433 => 296,  428 => 294,  423 => 292,  419 => 291,  414 => 289,  410 => 288,  405 => 286,  400 => 284,  395 => 282,  390 => 280,  385 => 278,  380 => 276,  375 => 274,  370 => 272,  366 => 271,  361 => 269,  356 => 267,  351 => 265,  347 => 264,  343 => 263,  339 => 262,  334 => 260,  330 => 259,  326 => 258,  316 => 250,  314 => 247,  196 => 131,  194 => 119,  179 => 107,  144 => 74,  142 => 71,  135 => 66,  127 => 61,  124 => 60,  121 => 59,  113 => 54,  107 => 51,  104 => 50,  102 => 49,  95 => 45,  91 => 44,  70 => 26,  65 => 24,  61 => 23,  57 => 22,  53 => 21,  49 => 20,  41 => 15,  36 => 13,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/*     <head>*/
/*         <!-- Basic -->*/
/*         <meta charset="utf-8">*/
/*         <title>Fédération Tunisienne de Tennis</title>*/
/*         <meta name="keywords" content="TFT FTT" />*/
/*         <meta name="description" content="FTT Federation Tunisienne De Tennis">*/
/*         <!-- Mobile Metas -->*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <!-- Theme CSS -->*/
/*         <link href="{{asset('css/style.css')}}" rel="stylesheet" media="screen">*/
/*         <!-- Responsive CSS -->*/
/*         <link href="{{asset('css/theme-responsive.css')}}" rel="stylesheet" media="screen">*/
/*         <!-- Skins Theme -->*/
/*         <link href="#" rel="stylesheet" media="screen" class="skin">*/
/* */
/*         <!-- Favicons -->*/
/*         <link rel="shortcut icon" href="{{asset('img/icons/tennis.ico')}}">*/
/*         <link rel="apple-touch-icon" href="{{asset('img/icons/apple-touch-icon.png')}}">*/
/*         <link rel="apple-touch-icon" sizes="72x72" href="{{asset('img/icons/apple-touch-icon-72x72.png')}}">*/
/*         <link rel="apple-touch-icon" sizes="114x114" href="{{asset('img/icons/apple-touch-icon-114x114.png')}}">  */
/*         <link href="{{asset('dashboardStyle/css/icheck/flat/green.css')}}" rel="stylesheet">*/
/*         <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('bundles/dcsrating/css/rating.css') }}" />*/
/* */
/*         <!-- Skins Changer-->*/
/* */
/*     </head>*/
/* */
/*     <body style="font-family: 'Oswald'">*/
/* */
/*         <!-- layout-->*/
/*         <div id="layout">*/
/*             <!-- Header-->*/
/*             <header>*/
/*                 <!-- End headerbox-->*/
/*                 <div class="headerbox">*/
/*                     <div class="container">*/
/*                         <div class="row">*/
/*                             <!-- Logo-->*/
/*                             <div class="col-md-6 logo">*/
/*                                 <a href="{{path('ftt_utilisateur_homepage')}}" title="Return Home">                            */
/*                                     <img src="{{asset('img/logo1.png')}}" alt="Logo" class="logo_img">*/
/*                                 </a>*/
/* */
/*                             </div>*/
/*                             {% if app.user == null %}*/
/*                                 <div class="col-md-6 adds">*/
/*                                     <a class="btn btn-flat4" style="width: 22%" href="{{path('fos_user_security_login')}}" >*/
/*                                         <i class="fa fa-sign-in"></i>*/
/*                                         Se connecter</a>*/
/*                                     <a class="btn btn-flat4"  style="width: 22%" href="{{path('fos_user_registration_register')}}" >*/
/*                                         <i class="fa fa-plus"></i>*/
/*                                         S'inscrire</a>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                             {% if app.user != null %}*/
/*                                 <div class="col-md-6 adds">*/
/*                                     <a class="btn btn-flat5" style="width: 22%" href="{{path('fos_user_security_logout')}}" >*/
/*                                         <i class="fa fa-sign-out"></i>*/
/*                                         Deconnecter</a>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- End headerbox-->  */
/* */
/*                 {% block MenuSite %}*/
/*                     {{ include('FTTUtilisateurBundle::Default/Includes/MenuSite.html.twig') }}*/
/*                 {% endblock %}*/
/* */
/* */
/*                 <!-- End mainmenu-->*/
/*             </header>*/
/*             <!-- End Header-->*/
/* */
/*             <!-- Section Title -->           */
/*             <section class="section-title img-news">*/
/*                 <div class="overlay-bg"></div>*/
/*                 <div class="container">*/
/*                     <h1>FTT</h1>*/
/*                 </div>*/
/*             </section>*/
/*             <!-- End Section Title --> */
/* */
/*             <!-- Section Area - Content Central -->*/
/*             <section class="content-info">*/
/* */
/*                 <!--*/
/*                 <div class="crumbs">*/
/*                     <div class="container">*/
/*                         <ul>*/
/*                             <li><a href="index-2.html">Home</a></li>*/
/*                             <li>/</li>*/
/*                             <li><a href="#">News</a></li>*/
/*                             <li>/</li>*/
/*                             <li>News Right Sidebar</li>                                       */
/*                         </ul>*/
/*                     </div>        */
/*                 </div>*/
/*                 -->*/
/* */
/*                 <div class="semiboxshadow text-center">*/
/*                     <img src="{{asset('img/img-theme/shp.png')}}" class="img-responsive" alt="">*/
/*                 </div>*/
/* */
/* */
/*                 <!-- Content Central -->*/
/*                 <div class="container padding-top">*/
/*                     <div class="row">*/
/* */
/*                         <!-- content Column Left -->*/
/*                         <div class="col-md-8">   */
/* */
/* */
/*                             {% block body %}*/
/*                                 <!--*/
/*                                Edmouuuuuuuuu hnéééééééééééééééééééééé akahaaaaaaaaaaaaaww */
/*                                 */
/*                                 */
/*                                 matmessouuuuuuuuuuuuuuuuuuu chayyyyyyyyyyyyyyyyyyyyyyyyy e5eeeeeeeeeeerrrrrrrrrrrrrrrrr*/
/*                                 aaaaaaaaaaa*/
/*                                 */
/*                                 biensur mouch ma3néha , il faut creer dautres pages twig et utiliser*/
/*                                 le block body , Voir lexemple*/
/*                                 -->*/
/*                             {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/*                         </div>*/
/*                         <!-- End content Left -->*/
/* */
/*                         <!-- content Sidebar Center -->*/
/*                         <aside class="col-md-4">                     */
/* */
/*                             <div>*/
/*                                 <h4>Searh Sidebar</h4>*/
/*                                 <form class="search" action="#" method="Post">*/
/*                                     <div class="input-group">*/
/*                                         <input class="form-control" placeholder="Search..." name="email"  type="email" required="required">*/
/*                                         <span class="input-group-btn">*/
/*                                             <button class="btn btn-primary" type="submit" name="subscribe" >Go!</button>*/
/*                                         </span>*/
/*                                     </div>*/
/*                                 </form>   */
/*                             </div>*/
/* */
/*                             <!-- Video presentation -->*/
/*                             <div class="panel-box">*/
/*                                 <div class="titles">*/
/*                                     <h4>Bientot</h4>*/
/*                                 </div>*/
/*                                 <!-- Locations Video --> */
/*                                 <div class="row">*/
/*                                     <iframe src="https://www.youtube.com/embed/sQ-na9D-DEI" class="video"></iframe>*/
/*                                     <div class="col-md-12">*/
/*                                         <h4>Tunis Open</h4>*/
/*                                         <p>Le Tournoi de tennis de Tunis ou Tunis Open est un tournoi de tennis appartenant aux tournois Challenger de l'ATP World Tour. Il est organisé au Tennis Club de Tunis.*/
/*                                         </p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <!-- End Locations Video --> */
/*                             </div>  */
/*                             <!-- End Video presentation-->*/
/*                             <!-- End Video presentation-->*/
/* */
/*                             <!-- Widget Text-->*/
/*                             <div class="panel-box">*/
/*                                 <script>(function (d, s, id) {*/
/* */
/*                                         var js, fjs = d.getElementsByTagName(s)[0];*/
/* */
/*                                         if (d.getElementById(id))*/
/*                                             return;*/
/* */
/*                                         js = d.createElement(s);*/
/*                                         js.id = id;*/
/* */
/*                                         js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=403924843027405";*/
/* */
/*                                         fjs.parentNode.insertBefore(js, fjs);*/
/* */
/*                                     }(document, 'script', 'facebook-jssdk'));*/
/*                                 </script>*/
/*                                 <div class="fb-like-box" data-href="https://www.facebook.com/FederationTunisienneDeTennis" */
/*                                      data-width="362" data-show-faces="true" data-stream="true" data-header="true"></div>*/
/*                             </div>  */
/*                             <!-- End Widget Text-->*/
/* */
/*                             <!-- Widget Text-->*/
/*                             <!-- End Widget Text-->*/
/*                         </aside>*/
/*                         <!-- End content Sidebar Center -->*/
/*                     </div>                     */
/*                 </div>  */
/*                 <!-- End Content Central -->*/
/* */
/*                 <!-- Newsletter -->*/
/*                 <div class="section-wide">*/
/*                     <div class="container">*/
/*                         <div class="row newsletter">*/
/*                             <div class="col-md-12">*/
/*                                 <div class="text-center">*/
/*                                     <h2>Enter your e-mail and <span class="text-resalt">subscribe</span> to our newsletter.</h2>*/
/*                                     <p>Duis non lorem porta,  eros sit amet, tempor sem. Donec nunc arcu, semper a tempus et, consequat.</p>*/
/*                                 </div>*/
/*                                 <form id="newsletterForm" action="http://html.iwthemes.com/sportscup/php/mailchip/newsletter-subscribe.php">*/
/*                                     <div class="row">*/
/*                                         <div class="col-md-6">*/
/*                                             <div class="input-group">*/
/*                                                 <span class="input-group-addon">*/
/*                                                     <i class="fa fa-envelope"></i>*/
/*                                                 </span>*/
/*                                                 <input class="form-control" placeholder="Your Name" name="name"  type="text" required="required">*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="col-md-6">*/
/*                                             <div class="input-group">*/
/*                                                 <span class="input-group-addon">*/
/*                                                     <i class="fa fa-envelope"></i>*/
/*                                                 </span>*/
/*                                                 <input class="form-control" placeholder="Your  Email" name="email"  type="email" required="required">*/
/*                                                 <span class="input-group-btn">*/
/*                                                     <button class="btn btn-primary" type="submit" name="subscribe" >SIGN UP</button>*/
/*                                                 </span>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </form>   */
/*                                 <div id="result-newsletter"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>  */
/*                 <!-- End Newsletter -->  */
/*             </section>*/
/*             <!-- End Section Area -  Content Central -->*/
/* */
/*             <!-- footer-->*/
/*             {% block footer %}*/
/*                 {{ include('FTTUtilisateurBundle::Default/Includes/footer.html.twig') }}*/
/*             {% endblock %}*/
/* */
/*             <!-- footer Down-->*/
/* */
/*         </div>*/
/*         <!-- End layout-->*/
/* */
/*         <!-- ======================= JQuery libs =========================== -->*/
/*         <!-- jQuery local--> */
/*         <script src="{{asset('js/jquery.js')}}"></script>                */
/*         <script src="{{asset('js/jquery.min.js')}}"></script>     */
/*         <script src="{{asset('dashboardStyle/js/icheck/icheck.min.js')}}"></script>*/
/*         <!--Nav-->*/
/*         <script type="text/javascript" src="{{asset('js/nav/tinynav.js')}}"></script> */
/*         <script type="text/javascript" src="{{asset('js/nav/hoverIntent.js')}}"></script>   */
/*         <script type="text/javascript" src="{{asset('js/nav/superfish.js')}}"></script> */
/*         <script src="{{asset('js/nav/jquery.sticky.js')}}" type="text/javascript"></script>    */
/*         <!--Totop-->*/
/*         <script type="text/javascript" src="{{asset('js/totop/jquery.ui.totop.js')}}" ></script>  */
/*         <!--Accorodion-->*/
/*         <script type="text/javascript" src="{{asset('js/accordion/accordion.js')}}" ></script>  */
/*         <!--Slide-->*/
/*         <script type="text/javascript" src="{{asset('js/slide/camera.js')}}" ></script>      */
/*         <script type="text/javascript" src="{{asset('js/slide/jquery.easing.1.3.min.js')}}"></script>   */
/*         <!-- Maps -->*/
/*         <script src="{{asset('js/maps/gmap3.js')}}"></script>            */
/*         <!--Ligbox--> */
/*         <script type="text/javascript" src="{{asset('js/fancybox/jquery.fancybox.js')}}"></script> */
/*         <!-- carousel.js-->*/
/*         <script src="{{asset('js/carousel/carousel.js')}}"></script>*/
/*         <!-- Filter -->*/
/*         <script src="{{asset('js/filters/jquery.isotope.js')}}" type="text/javascript"></script>*/
/*         <!-- Twitter Feed-->*/
/*         <script src="{{asset('js/twitter/jquery.tweet.js')}}"></script> */
/*         <!-- flickr Feed-->*/
/*         <script src="{{asset('js/flickr/jflickrfeed.min.js')}}"></script> */
/*         <!-- Counter -->*/
/*         <script src="{{asset('js/counter/jquery.countdown.js')}}"></script>      */
/*         <!-- Graphe -->*/
/*         <script src="{{asset('js/graphe/exporting.js')}}"></script>      */
/*         <script src="{{asset('js/graphe/highcharts.js')}}"></script>      */
/*         <!--Theme Options-->*/
/*         <script type="text/javascript" src="{{asset('js/theme-options/theme-options.js')}}"></script>*/
/*         <script type="text/javascript" src="{{asset('js/theme-options/jquery.cookies.js')}}"></script> */
/*         <!-- Bootstrap.js-->*/
/*         <script type="text/javascript" src="{{asset('js/bootstrap/bootstrap.js')}}"></script> */
/*         <!--MAIN FUNCTIONS-->*/
/*         <script type="text/javascript" src="{{asset('js/main.js')}}"></script>*/
/*         <!-- ======================= End JQuery libs =========================== -->*/
/*         <script src="{{asset('js/modernizr.js')}}"></script>*/
/* */
/* */
/*         <script src="{{asset('js/popup/classie.js')}}"></script>*/
/*         <script src="{{asset('js/popup/modalEffects.js')}}"></script>*/
/* */
/*         <script>*/
/*                                     // this is important for IEs*/
/*                                     var polyfilter_scriptpath = '/js/';*/
/*         </script>*/
/*         <script src="{{asset('js/popup/cssParser.js')}}"></script>*/
/*         <script src="{{asset('js/popup/css-filters-polyfill.js')}}"></script>*/
/* */
/* */
/* */
/*         <script type="text/javascript" src="{{asset('bundles/dcsrating/js/rating.js')}}"></script>*/
/* */
/*         <script type="text/javascript" src="{{asset('js/googleapi/googleapi.js')}}"></script>*/
/*         <script type="text/javascript" src="{{asset('ajax/Ajax.js')}}"></script>*/
/*         <script type="text/javascript" src="{{asset('js/pari/nbjoker.js')}}"></script>*/
/* */
/* */
/* */
/* */
/* */
/*     </body>*/
/* */
/*     <!-- Mirrored from html.iwthemes.com/sportscup/news-right-sidebar.html?theme=red by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Mar 2016 10:29:48 GMT -->*/
/* </html>*/
