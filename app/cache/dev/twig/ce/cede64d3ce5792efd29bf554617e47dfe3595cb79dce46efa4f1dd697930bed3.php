<?php

/* FTTUtilisateurBundle:Default:accueil.html.twig */
class __TwigTemplate_de9c384d89e27531ec407dfe8f4ebbb45a45400fed12a74b49d4e5bf1849454f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'MenuSite' => array($this, 'block_MenuSite'),
            'evenements' => array($this, 'block_evenements'),
            'joueurs' => array($this, 'block_joueurs'),
            'clubs' => array($this, 'block_clubs'),
            'actualites1' => array($this, 'block_actualites1'),
            'complexes' => array($this, 'block_complexes'),
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
        <meta name=\"keywords\" content=\"TFT\" />
        <meta name=\"description\" content=\"TFT Federation Tunisienne De Tennis\">


        <!-- Mobile Metas -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <!-- Theme CSS -->
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <!-- Responsive CSS -->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/theme-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <!-- Skins Theme -->
        <link href=\"#\" rel=\"stylesheet\" media=\"screen\" class=\"skin\">
        <!-- Favicons -->
        <link rel=\"shortcut icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icons/tennis.ico"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icons/apple-touch-icon.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icons/apple-touch-icon-72x72.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icons/apple-touch-icon-114x114.png"), "html", null, true);
        echo "\">  



        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js\"></script>
        <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/cssmap/map.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">     
        <script src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyCw6Z2CFBlxvvksTqtg1dV9qI7PbUF3hYs\"></script>


        <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/ie/ie.css"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/responsive/html5shiv.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/responsive/respond.js"), "html", null, true);
        echo "\"></script>

        <!-- Head Libs -->
        <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.js"), "html", null, true);
        echo "\"></script>
        <!-- Skins Changer-->
        <script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/googleapi/googleapi.js"), "html", null, true);
        echo "\"></script>


        <style>
            .titreSlide {
                display: inline-block;
                margin-bottom: 310px;

                background: #88C425;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
            }

            .full-screen {
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }

        </style>


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
        // line 76
        echo $this->env->getExtension('routing')->getPath("ftt_utilisateur_homepage");
        echo "\" title=\"Return Home\">                            
                                    <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo1.png"), "html", null, true);
        echo "\" alt=\"Logo\" class=\"logo_img\">
                                </a>

                            </div>
                            ";
        // line 81
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 82
            echo "                                <div class=\"col-md-6 adds\">
                                    <a class=\"btn btn-flat4\" style=\"width: 22%\" href=\"";
            // line 83
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" >
                                        <i class=\"fa fa-sign-in\"></i>
                                        Se connecter</a>
                                    <a class=\"btn btn-flat4\"  style=\"width: 22%\" href=\"";
            // line 86
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">
                                        <i class=\"fa fa-plus\"></i>
                                        S'inscrire</a>
                                </div>
                            ";
        }
        // line 91
        echo "                            ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 92
            echo "                                <div class=\"col-md-6 adds\">
                                    <a class=\"btn btn-flat5\" style=\"width: 22%\" href=\"";
            // line 93
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" >
                                        <i class=\"fa fa-sign-out\"></i>
                                        Deconnecter</a>
                                </div>
                            ";
        }
        // line 98
        echo "                        </div>
                    </div>
                </div>
                <!-- End headerbox-->  

                <!-- mainmenu-->

                ";
        // line 105
        $this->displayBlock('MenuSite', $context, $blocks);
        // line 108
        echo "
                <!-- End mainmenu-->
            </header>
            <!-- End Header-->

            <!-- Slide -->           
            <section>




                <div id=\"mycarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                    <!-- Indicators -->
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#mycarousel\" data-slide-to=\"0\"></li>
                        <li data-target=\"#mycarousel\" data-slide-to=\"1\"></li>
                        <li data-target=\"#mycarousel\" data-slide-to=\"2\"></li>
                        <li data-target=\"#mycarousel\" data-slide-to=\"3\"></li>
                        <li data-target=\"#mycarousel\" data-slide-to=\"4\"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class=\"carousel-inner\" role=\"listbox\">

                        ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actualites"]) ? $context["actualites"] : $this->getContext($context, "actualites")));
        foreach ($context['_seq'] as $context["key"] => $context["actualite"]) {
            // line 133
            echo "                            <div class=\"item \">
                                <img src=\"data:image/png;base64,";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imagesActualite"]) ? $context["imagesActualite"] : $this->getContext($context, "imagesActualite")), $context["key"], array(), "array"), "html", null, true);
            echo "\" data-color=\"tomato\" alt=\"Fifth Image\">
                                <div class=\"container\" style=\"width: 40%;margin-left: 2.6%\"> 
                                    <h1 class=\"animated fadeInRight delay1\" style=\"text-align: center;margin-top: 10%;background: #88C425;margin-left: -5%;border-bottom-left-radius: 1em;border-top-right-radius: 1em\">
                                        ";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($context["actualite"], "titreActualite", array()), "html", null, true);
            echo "
                                    </h1>   
                                    <p class=\"animated fadeInRight delay3\" style=\"background: black;color: white;border-right: #87C324 thick solid\" >
                                        ";
            // line 140
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["actualite"], "descriptionActualite", array()), 0, 200), "html", null, true);
            echo "...
                                    </p> 
                                    <a  class=\"btn btn-flat4\" style=\"width: 40%\" href=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("single_article", array("id" => $this->getAttribute($context["actualite"], "id", array()))), "html", null, true);
            echo "\"  name=\"subscribe\" >Afficher la suite</a>
                                </div>      
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['actualite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "

                    </div>

                    <!-- Controls -->
                    <a class=\"left carousel-control\" href=\"#mycarousel\" role=\"button\" data-slide=\"prev\">
                        <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                    <a class=\"right carousel-control\" href=\"#mycarousel\" role=\"button\" data-slide=\"next\">
                        <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </div>


























            </section>   
            <!-- End Slide --> 
            <!-- Section Area - Content Central -->
            <section class=\"content-info\">

                <div class=\"semiboxshadow text-center\">
                    <img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/img-theme/shp.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                </div>

                <!-- Dark Home -->
                <div class=\"bg-dark dark-home\">
                    <div class=\"row\">
                        <!-- Left Content - Tabs and Carousel -->
                        <div class=\"col-md-9\">
                            <!-- Nav Tabs -->
                            <ul class=\"nav nav-tabs\" id=\"myTab\">
                                <li class=\"active\"><a href=\"#feature-news\" data-toggle=\"tab\">Evenements</a></li>
                                <li><a href=\"#players-staff\" data-toggle=\"tab\">Joueurs</a></li>
                                <li><a href=\"#club-news\" data-toggle=\"tab\">Clubs</a></li>
                            </ul>
                            <!-- End Nav Tabs -->

                            <!-- Content Tabs -->
                            <div class=\"tab-content\">
                                <!-- Tab One - Feature News -->
                                <div class=\"tab-pane active\" id=\"feature-news\">
                                    <!-- blog post-->  
                                    <ul id=\"events-carousel\" class=\"events-carousel padding-top\">


                                        ";
        // line 216
        $this->displayBlock('evenements', $context, $blocks);
        // line 244
        echo "
                                    </ul>
                                    <!-- End blog post-->  
                                </div>
                                <!-- Tab One - Feature News -->

                                <!-- Tab Two - Players Staff -->
                                <div class=\"tab-pane\" id=\"players-staff\">
                                    <h3>Joueurs</h3>
                                    <!-- Item Players-->  
                                    <ul id=\"players-carousel\" class=\"players \">

                                        ";
        // line 256
        $this->displayBlock('joueurs', $context, $blocks);
        // line 280
        echo "
                                    </ul>
                                    <!-- End Item Players-->  
                                </div>
                                <!-- Tab Two - Players Staff -->








                                <div class=\"tab-pane\" id=\"club-news\">
                                    <h3>Clubs</h3>
                                    <!-- Item Players-->  
                                    <ul id=\"players-carousel\" class=\"players \">

                                        ";
        // line 298
        $this->displayBlock('clubs', $context, $blocks);
        // line 317
        echo "
                                    </ul>
                                    <!-- End Item Players-->  
                                </div>
















                                <!-- Tab Theree - Club Teams -->
                            </div>
                            <!-- Content Tabs -->
                        </div> 
                        <!-- Left Content - Tabs and Carousel -->    

                        <!-- Right Content - Content Counter -->
                        <div class=\"col-md-3\">
                            <aside>
                                <div class=\"title-color text-center\">
                                    <h4>Tunis Open</h4>
                                </div>

                                <div class=\"content-counter content-counter-home\">
                                    <p class=\"text-center\"> 
                                        <i class=\"fa fa-clock-o\"></i> 
                                        Compte a rebours
                                    </p>
                                    <div id=\"event-one\" class=\"counter\"></div>
                                    <ul class=\"post-options\">
                                        <li><i class=\"fa fa-calendar\"></i>June 12, 2016</li>
                                        <li><i class=\"fa fa-clock-o\"></i>Kick-of, 12:00 PM</li> 
                                    </ul>
                                    <p>Le Tournoi de tennis de Tunis ou Tunis Open est un tournoi de tennis appartenant aux tournois Challenger de l'ATP World Tour. Il est organisé au Tennis Club de Tunis.
                                        Une première série d'éditions se tient en 1983 et 1984 avant que le tournoi ne disparaisse. En 2005, il revient au calendrier des tournois Challenger de l'ATP Tour.</p>
                                    <a class=\"btn btn-primary\" href=\"#\">
                                        Voir detail evenement
                                        <i class=\"fa fa-trophy\"></i>
                                    </a>
                                </div>
                            </aside>            
                            <!-- Content Counter -->
                        </div>
                        <!-- End Right Content - Content Counter -->
                    </div>
                </div>   
                <!-- Dark Home -->

                <!-- Content Central -->
                <div class=\"container padding-top\">
                    <div class=\"row\">

                        <!-- content Column Left -->
                        <div class=\"col-xs-12 col-md-6 col-lg-7\">                     
                            <!-- Recent Post -->
                            <div class=\"panel-box\">

                                <div class=\"titles\">
                                    <h4>Recent News</h4>
                                </div>

                                ";
        // line 388
        $this->displayBlock('actualites1', $context, $blocks);
        // line 411
        echo "

                            </div>  
                            <!-- End Recent Post --> 

                            <!-- Experts -->
                            <div class=\"panel-box\">                            
                                <div class=\"titles\">
                                    <h4>Complexes</h4>
                                </div>     

                                <div class=\"row\">

                                    ";
        // line 424
        $this->displayBlock('complexes', $context, $blocks);
        // line 437
        echo "
                                </div>                          
                            </div>  
                            <!-- End Experts -->  
                        </div>
                        <!-- End content Left -->

                        <!-- content Sidebar Center -->
                        <aside class=\"col-xs-6 col-sm-6 col-md-3 col-lg-3\">                     
                            <!-- Locations -->
                            <div class=\"panel-box\">

                                <div class=\"titles\">
                                    <h4>Locations</h4>
                                </div>
                                <!-- Locations Carousel --> 
                                <ul class=\"single-carousel\">    
                                    <li>
                                        <img src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blog/1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
                                        <div class=\"info-single-carousel\">
                                            <h4>Stade Menzah</h4>
                                            <p>Le plus grand club de tennis de Tunisie, Le Tennis Club de Tunis fondé en 1923.
                                                9 courts en terre battue, 5 courts en GreenSet, salle de repos et salle de restauration pour les joueurs, salle de fitness, physiothérapie, sauna.

                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <img src=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blog/2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
                                        <div class=\"info-single-carousel\">
                                            <h4>Brazilia</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo cillum dolore eu fugiat nulla pariatur.</p>
                                        </div>
                                    </li> 
                                    <li>
                                        <img src=\"";
        // line 472
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blog/3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
                                        <div class=\"info-single-carousel\">
                                            <h4>Sao Paulo</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo cillum dolore eu fugiat nulla pariatur.</p>
                                        </div>
                                    </li>                                    
                                </ul>
                                <!-- Locations Carousel -->                                
                            </div>  
                            <!-- End Locations --> 

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

                            <!-- Widget Text-->
                            <div class=\"panel-box\">
                                <div class=\"titles\">
                                    <h4>Lieux</h4>
                                </div>
                                <div class=\"row\">


                                    <div class='wrap' style=\"width: 1000px;height: 800px;\">
                                        <div id=\"googleMap\" style=\"width:1200px;height:600px;\"></div>
                                    </div>
                                    <a id=\"lieu\" class='btn btn-flat4' style=\"width: 60%;margin-left: 20%\" href='#'>
                                        <i class=\"fa fa-map-marker\"></i>
                                        Consulter lieux
                                    </a>





                                </div>
                            </div>  
                            <!-- End Widget Text-->
                        </aside>
                        <!-- End content Sidebar Center -->

                        <!-- content Sidebar Right -->
                        <aside class=\"col-xs-6 col-sm-6 col-md-3 col-lg-2\">                     
                            <!-- Diary -->
                         
                            <!-- End Adds Sidebar -->
                        </aside>
                        <!-- End content Sidebar Right -->

                    </div>                     
                </div>  
                <!-- End Content Central -->

                <!-- Newsletter -->
                <div class=\"section-wide\">
                    <div class=\"container\">
                        <div class=\"row newsletter\">
                            <div class=\"col-md-12\">
                                <div class=\"text-center\">
                                    <h2>Entrer votre email et <span class=\"text-resalt\">S'abonner</span> à notre newsletter.</h2>
                                    <p>.</p>
                                </div>
                                <form id=\"newsletterForm\" action=\"http://html.iwthemes.com/sportscup/php/mailchip/newsletter-subscribe.php\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"input-group\">
                                                <span class=\"input-group-addon\">
                                                    <i class=\"fa fa-envelope\"></i>
                                                </span>
                                                <input class=\"form-control\" placeholder=\"Nom\" name=\"name\"  type=\"text\" required=\"required\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"input-group\">
                                                <span class=\"input-group-addon\">
                                                    <i class=\"fa fa-envelope\"></i>
                                                </span>
                                                <input class=\"form-control\" placeholder=\"Email\" name=\"email\"  type=\"email\" required=\"required\">
                                                <span class=\"input-group-btn\">
                                                    <button class=\"btn btn-primary\" type=\"submit\" name=\"subscribe\" >S'abonner</button>
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

            ";
        // line 580
        $this->displayBlock('footer', $context, $blocks);
        // line 583
        echo "
        </div>
        <!-- End layout-->

        <!-- ======================= JQuery libs =========================== -->
        <!-- jQuery local--> 
        <script src=\"";
        // line 589
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>            
        <script src=\"";
        // line 590
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>            
        <!--Nav-->
        <script type=\"text/javascript\" src=\"";
        // line 592
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/nav/tinynav.js"), "html", null, true);
        echo "\"></script> 
        <script type=\"text/javascript\" src=\"";
        // line 593
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/nav/hoverIntent.js"), "html", null, true);
        echo "\"></script>   
        <script type=\"text/javascript\" src=\"";
        // line 594
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/nav/superfish.js"), "html", null, true);
        echo "\"></script> 
        <script src=\"";
        // line 595
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/nav/jquery.sticky.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>    
        <!--Totop-->
        <script type=\"text/javascript\" src=\"";
        // line 597
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/totop/jquery.ui.totop.js"), "html", null, true);
        echo "\" ></script>  
        <!--Accorodion-->
        <script type=\"text/javascript\" src=\"";
        // line 599
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/accordion/accordion.js"), "html", null, true);
        echo "\" ></script>  
        <!--Slide-->
        <script type=\"text/javascript\" src=\"";
        // line 601
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/slide/camera.js"), "html", null, true);
        echo "\" ></script>      
        <script type=\"text/javascript\" src=\"";
        // line 602
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/slide/jquery.easing.1.3.min.js"), "html", null, true);
        echo "\"></script>   
        <!-- Maps -->
        <script src=\"";
        // line 604
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/maps/gmap3.js"), "html", null, true);
        echo "\"></script>            
        <!--Ligbox--> 
        <script type=\"text/javascript\" src=\"";
        // line 606
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fancybox/jquery.fancybox.js"), "html", null, true);
        echo "\"></script> 
        <!-- carousel.js-->
        <script src=\"";
        // line 608
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/carousel/carousel.js"), "html", null, true);
        echo "\"></script>
        <!-- Filter -->
        <script src=\"";
        // line 610
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/filters/jquery.isotope.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- Twitter Feed-->
        <script src=\"";
        // line 612
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/twitter/jquery.tweet.js"), "html", null, true);
        echo "\"></script> 
        <!-- flickr Feed-->
        <script src=\"";
        // line 614
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/flickr/jflickrfeed.min.js"), "html", null, true);
        echo "\"></script> 
        <!-- Counter -->
        <script src=\"";
        // line 616
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/counter/jquery.countdown.js"), "html", null, true);
        echo "\"></script>      
        <!--Theme Options-->
        <script type=\"text/javascript\" src=\"";
        // line 618
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/theme-options/theme-options.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 619
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/theme-options/jquery.cookies.js"), "html", null, true);
        echo "\"></script> 
        <!-- Bootstrap.js-->
        <script type=\"text/javascript\" src=\"";
        // line 621
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap/bootstrap.js"), "html", null, true);
        echo "\"></script> 
        <!--MAIN FUNCTIONS-->
        <script type=\"text/javascript\" src=\"";
        // line 623
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        <!-- ======================= End JQuery libs =========================== -->





        <script>
            function initialize() {


                var myCenter = new google.maps.LatLng(40.546, 10.548);
                var mapProp = {
                    center: myCenter,
                    zoom: 5,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById(\"googleMap\"), mapProp);


            ";
        // line 643
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["complexes"]) ? $context["complexes"] : $this->getContext($context, "complexes")));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 644
            echo "

                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(";
            // line 647
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "latitude", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "longitude", array()), "html", null, true);
            echo "),
                        animation: google.maps.Animation.BOUNCE


                    });
                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow({
                        content: \"c'est le complexe ";
            // line 654
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "nomcomplexe", array()), "html", null, true);
            echo " qui se trouve à ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "place", array()), "html", null, true);
            echo "\"
                    });

                    infowindow.open(map, marker);
                    google.maps.event.addListener(marker, 'click', function () {
                        map.setZoom(15);
                        map.setCenter(marker.getPosition());
                    });
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 663
        echo "

                }
                google.maps.event.addDomListener(window, 'load', initialize);

                \$('#lieu').on('click', function () {
                    \$('.wrap').toggleClass('active');

                    return false;
                });

        </script>


        <script>
            var \$item = \$('.carousel .item');
            var \$wHeight = \$(window).height();

            \$item.height(\$wHeight);
            \$item.addClass('full-screen');

            var \$numberofSlides = \$('.item').length;
            var \$currentSlide = Math.floor((Math.random() * \$numberofSlides));

            \$('.carousel-indicators li').each(function () {
                var \$slideValue = \$(this).attr('data-slide-to');
                if (\$currentSlide == \$slideValue) {
                    \$(this).addClass('active');
                    \$item.eq(\$slideValue).addClass('active');
                } else {
                    \$(this).removeClass('active');
                    \$item.eq(\$slideValue).removeClass('active');
                }
            });

            \$('.carousel img').each(function () {
                var \$src = \$(this).attr('src');
                var \$color = \$(this).attr('data-color');
                \$(this).parent().css({
                    'background-image': 'url(' + \$src + ')',
                    'background-color': \$color
                });
                \$(this).remove();
            });

            \$(window).on('resize', function () {
                \$wHeight = \$(window).height();
                \$item.height(\$wHeight);
            });

            \$('.carousel').carousel({
                interval: 6000,
                pause: \"false\"
            });
        </script>




    </body>

    <!-- Mirrored from html.iwthemes.com/sportscup/?theme=green by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Mar 2016 10:22:58 GMT -->
</html>";
    }

    // line 105
    public function block_MenuSite($context, array $blocks = array())
    {
        // line 106
        echo "                    ";
        echo twig_include($this->env, $context, "FTTUtilisateurBundle::Default/Includes/MenuSite.html.twig");
        echo "
                ";
    }

    // line 216
    public function block_evenements($context, array $blocks = array())
    {
        // line 217
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) ? $context["evenements"] : $this->getContext($context, "evenements")));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 218
            echo "                                                <li>
                                                    <div class=\"header-post\">
                                                        <div class=\"date\">
                                                            <span>";
            // line 221
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evenement"], "dateDebut", array()), "m/d"), "html", null, true);
            echo "</span>
                                                            ";
            // line 222
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evenement"], "dateDebut", array()), "Y"), "html", null, true);
            echo "
                                                        </div>
                                                        <a href=\"single-news.html\"><img src=\"";
            // line 224
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blog/1.jpg"), "html", null, true);
            echo "\" alt=\"\"></a>
                                                        <div class=\"meta-tag\">
                                                            <ul>
                                                                <li><i class=\"fa fa-user\"></i><a href=\"#\">Admin</a></li>
                                                                <li><i class=\"fa fa-folder-open\"></i><a href=\"#\">Design</a></li>
                                                                <li class=\"text-right\"><i class=\"fa fa-comment\"></i><a href=\"#\">10</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class=\"info-post\">
                                                        <h4><a href=\"single-news.html\">
                                                                ";
            // line 235
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "nomEvenement", array()), "html", null, true);
            echo "
                                                            </a></h4>
                                                        <p>
                                                            ";
            // line 238
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "typeEvenement", array()), "html", null, true);
            echo "
                                                        </p>
                                                    </div>
                                                </li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        echo "                                        ";
    }

    // line 256
    public function block_joueurs($context, array $blocks = array())
    {
        // line 257
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["joueurs"]) ? $context["joueurs"] : $this->getContext($context, "joueurs")));
        foreach ($context['_seq'] as $context["key"] => $context["joueur"]) {
            // line 258
            echo "
                                                <!-- Item Player -->  
                                                <li class=\"item-player\">
                                                    <img alt=\"Embedded Image\" src=\"data:image/png;base64,";
            // line 261
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imagesJoueur"]) ? $context["imagesJoueur"] : $this->getContext($context, "imagesJoueur")), $context["key"], array(), "array"), "html", null, true);
            echo "\"class=\"img-responsive\" width=\"250\" height=\"358\">
                                                    <div class=\"info-player\">
                                                        <h4><a href=\"#\">";
            // line 263
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "nomJoueur", array()), "html", null, true);
            echo " </a></h4>
                                                        <h5><span>";
            // line 264
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "prenomJoueur", array()), "html", null, true);
            echo "</span></h5>
                                                        <div class=\"overlay-player\">
                                                            <p>
                                                                Categorie : ";
            // line 267
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "categorieJoueur", array()), "html", null, true);
            echo " <br>
                                                                Type : ";
            // line 268
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "typeJoueur", array()), "html", null, true);
            echo " <br>
                                                                Classement National : ";
            // line 269
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "classementNational", array()), "html", null, true);
            echo " <br>
                                                                Classement International : ";
            // line 270
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "classementInternational", array()), "html", null, true);
            echo " <br>
                                                                Nombre de victoir : ";
            // line 271
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "nbVictoires", array()), "html", null, true);
            echo " <br>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- End Player post -->

                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['joueur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 279
        echo "                                        ";
    }

    // line 298
    public function block_clubs($context, array $blocks = array())
    {
        // line 299
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clubs"]) ? $context["clubs"] : $this->getContext($context, "clubs")));
        foreach ($context['_seq'] as $context["key"] => $context["club"]) {
            // line 300
            echo "
                                                <!-- Item Player -->  
                                                <li class=\"item-player\" style=\"width: 180px;height: 280px\">
                                                    <img alt=\"Embedded Image\" src=\"data:image/png;base64,";
            // line 303
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imagesClub"]) ? $context["imagesClub"] : $this->getContext($context, "imagesClub")), $context["key"], array(), "array"), "html", null, true);
            echo "\"class=\"img-responsive\" width=\"180\" height=\"220\">
                                                    <div class=\"info-player\">
                                                        <h5><span style=\"font-size: x-small\">";
            // line 305
            echo twig_escape_filter($this->env, $this->getAttribute($context["club"], "nomClub", array()), "html", null, true);
            echo "</span></h5>
                                                        <div class=\"overlay-player\">
                                                            <p>
                                                                Adresse : ";
            // line 308
            echo twig_escape_filter($this->env, $this->getAttribute($context["club"], "adresseClub", array()), "html", null, true);
            echo " <br>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- End Player post -->

                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['club'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 316
        echo "                                        ";
    }

    // line 388
    public function block_actualites1($context, array $blocks = array())
    {
        // line 389
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actualites"]) ? $context["actualites"] : $this->getContext($context, "actualites")));
        foreach ($context['_seq'] as $context["key"] => $context["actualite"]) {
            // line 390
            echo "
                                        <!-- Post Item -->
                                        <div class=\"post-item\">
                                            <div class=\"row\">
                                                <div class=\"col-md-4\">
                                                    <div class=\"img-hover\">
                                                        <img alt=\"Embedded Image\" src=\"data:image/png;base64,";
            // line 396
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imagesActualite"]) ? $context["imagesActualite"] : $this->getContext($context, "imagesActualite")), $context["key"], array(), "array"), "html", null, true);
            echo "\" class=\"img-responsive\">
                                                        <div class=\"overlay\"><a href=\"";
            // line 397
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("single_article", array("id" => $this->getAttribute($context["actualite"], "id", array()))), "html", null, true);
            echo "\">+</a></div>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-8\">
                                                    <h4><a href=\"";
            // line 401
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("single_article", array("id" => $this->getAttribute($context["actualite"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actualite"], "titreActualite", array()), "html", null, true);
            echo "</a></h4>
                                                    <p class=\"data-info\">";
            // line 402
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["actualite"], "dateActualite", array()), "d-m-Y"), "html", null, true);
            echo "  / <i class=\"fa fa-comments\"></i><a href=\"#\">0</a></p>
                                                    <p>";
            // line 403
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["actualite"], "descriptionActualite", array()), 0, 200), "html", null, true);
            echo "... <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("single_article", array("id" => $this->getAttribute($context["actualite"], "id", array()))), "html", null, true);
            echo "\"> [+]</a></p>                                            
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Post Item -->

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['actualite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 410
        echo "                                ";
    }

    // line 424
    public function block_complexes($context, array $blocks = array())
    {
        // line 425
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["complexes"]) ? $context["complexes"] : $this->getContext($context, "complexes")));
        foreach ($context['_seq'] as $context["key"] => $context["complexe"]) {
            // line 426
            echo "
                                            <div class=\"col-xs-6 col-sm-3 col-md-4 col-lg-3\">
                                                <div class=\"box-info\">
                                                    <img src=\"data:image/png;base64,";
            // line 429
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imagesComplexes"]) ? $context["imagesComplexes"] : $this->getContext($context, "imagesComplexes")), $context["key"], array(), "array"), "html", null, true);
            echo "\" alt=\"\" class=\"img-responsive\">
                                                    <h5 class=\"entry-title\"><a href=\"#\">";
            // line 430
            echo twig_escape_filter($this->env, $this->getAttribute($context["complexe"], "nomComplexe", array()), "html", null, true);
            echo "</a></h5>
                                                    <p class=\"date-box\">Place :";
            // line 431
            echo twig_escape_filter($this->env, $this->getAttribute($context["complexe"], "place", array()), "html", null, true);
            echo " </p>
                                                </div>
                                            </div> 

                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['complexe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 436
        echo "                                    ";
    }

    // line 580
    public function block_footer($context, array $blocks = array())
    {
        // line 581
        echo "                ";
        echo twig_include($this->env, $context, "FTTUtilisateurBundle::Default/Includes/footer.html.twig");
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "FTTUtilisateurBundle:Default:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1112 => 581,  1109 => 580,  1105 => 436,  1094 => 431,  1090 => 430,  1086 => 429,  1081 => 426,  1076 => 425,  1073 => 424,  1069 => 410,  1054 => 403,  1050 => 402,  1044 => 401,  1037 => 397,  1033 => 396,  1025 => 390,  1020 => 389,  1017 => 388,  1013 => 316,  999 => 308,  993 => 305,  988 => 303,  983 => 300,  978 => 299,  975 => 298,  971 => 279,  957 => 271,  953 => 270,  949 => 269,  945 => 268,  941 => 267,  935 => 264,  931 => 263,  926 => 261,  921 => 258,  916 => 257,  913 => 256,  909 => 243,  898 => 238,  892 => 235,  878 => 224,  873 => 222,  869 => 221,  864 => 218,  859 => 217,  856 => 216,  849 => 106,  846 => 105,  780 => 663,  763 => 654,  751 => 647,  746 => 644,  742 => 643,  719 => 623,  714 => 621,  709 => 619,  705 => 618,  700 => 616,  695 => 614,  690 => 612,  685 => 610,  680 => 608,  675 => 606,  670 => 604,  665 => 602,  661 => 601,  656 => 599,  651 => 597,  646 => 595,  642 => 594,  638 => 593,  634 => 592,  629 => 590,  625 => 589,  617 => 583,  615 => 580,  504 => 472,  494 => 465,  481 => 455,  461 => 437,  459 => 424,  444 => 411,  442 => 388,  369 => 317,  367 => 298,  347 => 280,  345 => 256,  331 => 244,  329 => 216,  302 => 192,  254 => 146,  244 => 142,  239 => 140,  233 => 137,  227 => 134,  224 => 133,  220 => 132,  194 => 108,  192 => 105,  183 => 98,  175 => 93,  172 => 92,  169 => 91,  161 => 86,  155 => 83,  152 => 82,  150 => 81,  143 => 77,  139 => 76,  100 => 40,  95 => 38,  89 => 35,  85 => 34,  81 => 33,  74 => 29,  66 => 24,  62 => 23,  58 => 22,  54 => 21,  47 => 17,  42 => 15,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/*     <head>*/
/*         <!-- Basic -->*/
/*         <meta charset="utf-8">*/
/*         <title>Fédération Tunisienne de Tennis</title>*/
/*         <meta name="keywords" content="TFT" />*/
/*         <meta name="description" content="TFT Federation Tunisienne De Tennis">*/
/* */
/* */
/*         <!-- Mobile Metas -->*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <!-- Theme CSS -->*/
/*         <link href="{{asset('css/style.css')}}" rel="stylesheet" media="screen">*/
/*         <!-- Responsive CSS -->*/
/*         <link href="{{asset('css/theme-responsive.css')}}" rel="stylesheet" media="screen">*/
/*         <!-- Skins Theme -->*/
/*         <link href="#" rel="stylesheet" media="screen" class="skin">*/
/*         <!-- Favicons -->*/
/*         <link rel="shortcut icon" href="{{asset('img/icons/tennis.ico')}}">*/
/*         <link rel="apple-touch-icon" href="{{asset('img/icons/apple-touch-icon.png')}}">*/
/*         <link rel="apple-touch-icon" sizes="72x72" href="{{asset('img/icons/apple-touch-icon-72x72.png')}}">*/
/*         <link rel="apple-touch-icon" sizes="114x114" href="{{asset('img/icons/apple-touch-icon-114x114.png')}}">  */
/* */
/* */
/* */
/*         <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>*/
/*         <link href="{{asset('css/cssmap/map.css')}}" rel="stylesheet" media="screen">     */
/*         <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCw6Z2CFBlxvvksTqtg1dV9qI7PbUF3hYs"></script>*/
/* */
/* */
/*         <link rel="stylesheet" href="{{asset('css/ie/ie.css')}}">*/
/*         <script src="{{asset('js/responsive/html5shiv.js')}}"></script>*/
/*         <script src="{{asset('js/responsive/respond.js')}}"></script>*/
/* */
/*         <!-- Head Libs -->*/
/*         <script src="{{asset('js/modernizr.js')}}"></script>*/
/*         <!-- Skins Changer-->*/
/*         <script type="text/javascript" src="{{asset('js/googleapi/googleapi.js')}}"></script>*/
/* */
/* */
/*         <style>*/
/*             .titreSlide {*/
/*                 display: inline-block;*/
/*                 margin-bottom: 310px;*/
/* */
/*                 background: #88C425;*/
/*                 border-top-left-radius: 10px;*/
/*                 border-top-right-radius: 10px;*/
/*             }*/
/* */
/*             .full-screen {*/
/*                 background-size: cover;*/
/*                 background-position: center;*/
/*                 background-repeat: no-repeat;*/
/*             }*/
/* */
/*         </style>*/
/* */
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
/*                                     <a class="btn btn-flat4"  style="width: 22%" href="{{path('fos_user_registration_register')}}">*/
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
/*                 <!-- mainmenu-->*/
/* */
/*                 {% block MenuSite %}*/
/*                     {{ include('FTTUtilisateurBundle::Default/Includes/MenuSite.html.twig') }}*/
/*                 {% endblock %}*/
/* */
/*                 <!-- End mainmenu-->*/
/*             </header>*/
/*             <!-- End Header-->*/
/* */
/*             <!-- Slide -->           */
/*             <section>*/
/* */
/* */
/* */
/* */
/*                 <div id="mycarousel" class="carousel slide" data-ride="carousel">*/
/*                     <!-- Indicators -->*/
/*                     <ol class="carousel-indicators">*/
/*                         <li data-target="#mycarousel" data-slide-to="0"></li>*/
/*                         <li data-target="#mycarousel" data-slide-to="1"></li>*/
/*                         <li data-target="#mycarousel" data-slide-to="2"></li>*/
/*                         <li data-target="#mycarousel" data-slide-to="3"></li>*/
/*                         <li data-target="#mycarousel" data-slide-to="4"></li>*/
/*                     </ol>*/
/* */
/*                     <!-- Wrapper for slides -->*/
/*                     <div class="carousel-inner" role="listbox">*/
/* */
/*                         {% for key,actualite in actualites %}*/
/*                             <div class="item ">*/
/*                                 <img src="data:image/png;base64,{{ imagesActualite[key] }}" data-color="tomato" alt="Fifth Image">*/
/*                                 <div class="container" style="width: 40%;margin-left: 2.6%"> */
/*                                     <h1 class="animated fadeInRight delay1" style="text-align: center;margin-top: 10%;background: #88C425;margin-left: -5%;border-bottom-left-radius: 1em;border-top-right-radius: 1em">*/
/*                                         {{actualite.titreActualite}}*/
/*                                     </h1>   */
/*                                     <p class="animated fadeInRight delay3" style="background: black;color: white;border-right: #87C324 thick solid" >*/
/*                                         {{actualite.descriptionActualite[0:200]}}...*/
/*                                     </p> */
/*                                     <a  class="btn btn-flat4" style="width: 40%" href="{{path('single_article', {'id':actualite.id})}}"  name="subscribe" >Afficher la suite</a>*/
/*                                 </div>      */
/*                             </div>*/
/*                         {% endfor %}*/
/* */
/* */
/*                     </div>*/
/* */
/*                     <!-- Controls -->*/
/*                     <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">*/
/*                         <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>*/
/*                         <span class="sr-only">Previous</span>*/
/*                     </a>*/
/*                     <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">*/
/*                         <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>*/
/*                         <span class="sr-only">Next</span>*/
/*                     </a>*/
/*                 </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*             </section>   */
/*             <!-- End Slide --> */
/*             <!-- Section Area - Content Central -->*/
/*             <section class="content-info">*/
/* */
/*                 <div class="semiboxshadow text-center">*/
/*                     <img src="{{asset('img/img-theme/shp.png')}}" class="img-responsive" alt="">*/
/*                 </div>*/
/* */
/*                 <!-- Dark Home -->*/
/*                 <div class="bg-dark dark-home">*/
/*                     <div class="row">*/
/*                         <!-- Left Content - Tabs and Carousel -->*/
/*                         <div class="col-md-9">*/
/*                             <!-- Nav Tabs -->*/
/*                             <ul class="nav nav-tabs" id="myTab">*/
/*                                 <li class="active"><a href="#feature-news" data-toggle="tab">Evenements</a></li>*/
/*                                 <li><a href="#players-staff" data-toggle="tab">Joueurs</a></li>*/
/*                                 <li><a href="#club-news" data-toggle="tab">Clubs</a></li>*/
/*                             </ul>*/
/*                             <!-- End Nav Tabs -->*/
/* */
/*                             <!-- Content Tabs -->*/
/*                             <div class="tab-content">*/
/*                                 <!-- Tab One - Feature News -->*/
/*                                 <div class="tab-pane active" id="feature-news">*/
/*                                     <!-- blog post-->  */
/*                                     <ul id="events-carousel" class="events-carousel padding-top">*/
/* */
/* */
/*                                         {% block evenements %}*/
/*                                             {% for evenement in evenements %}*/
/*                                                 <li>*/
/*                                                     <div class="header-post">*/
/*                                                         <div class="date">*/
/*                                                             <span>{{evenement.dateDebut | date("m/d")}}</span>*/
/*                                                             {{evenement.dateDebut | date("Y")}}*/
/*                                                         </div>*/
/*                                                         <a href="single-news.html"><img src="{{asset('img/blog/1.jpg')}}" alt=""></a>*/
/*                                                         <div class="meta-tag">*/
/*                                                             <ul>*/
/*                                                                 <li><i class="fa fa-user"></i><a href="#">Admin</a></li>*/
/*                                                                 <li><i class="fa fa-folder-open"></i><a href="#">Design</a></li>*/
/*                                                                 <li class="text-right"><i class="fa fa-comment"></i><a href="#">10</a></li>*/
/*                                                             </ul>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="info-post">*/
/*                                                         <h4><a href="single-news.html">*/
/*                                                                 {{evenement.nomEvenement}}*/
/*                                                             </a></h4>*/
/*                                                         <p>*/
/*                                                             {{evenement.typeEvenement}}*/
/*                                                         </p>*/
/*                                                     </div>*/
/*                                                 </li>*/
/*                                             {% endfor %}*/
/*                                         {% endblock %}*/
/* */
/*                                     </ul>*/
/*                                     <!-- End blog post-->  */
/*                                 </div>*/
/*                                 <!-- Tab One - Feature News -->*/
/* */
/*                                 <!-- Tab Two - Players Staff -->*/
/*                                 <div class="tab-pane" id="players-staff">*/
/*                                     <h3>Joueurs</h3>*/
/*                                     <!-- Item Players-->  */
/*                                     <ul id="players-carousel" class="players ">*/
/* */
/*                                         {% block joueurs %}*/
/*                                             {% for key,joueur in joueurs %}*/
/* */
/*                                                 <!-- Item Player -->  */
/*                                                 <li class="item-player">*/
/*                                                     <img alt="Embedded Image" src="data:image/png;base64,{{ imagesJoueur[key] }}"class="img-responsive" width="250" height="358">*/
/*                                                     <div class="info-player">*/
/*                                                         <h4><a href="#">{{joueur.nomJoueur}} </a></h4>*/
/*                                                         <h5><span>{{joueur.prenomJoueur}}</span></h5>*/
/*                                                         <div class="overlay-player">*/
/*                                                             <p>*/
/*                                                                 Categorie : {{joueur.categorieJoueur}} <br>*/
/*                                                                 Type : {{joueur.typeJoueur}} <br>*/
/*                                                                 Classement National : {{joueur.classementNational}} <br>*/
/*                                                                 Classement International : {{joueur.classementInternational}} <br>*/
/*                                                                 Nombre de victoir : {{joueur.nbVictoires}} <br>*/
/*                                                             </p>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </li>*/
/*                                                 <!-- End Player post -->*/
/* */
/*                                             {% endfor %}*/
/*                                         {% endblock %}*/
/* */
/*                                     </ul>*/
/*                                     <!-- End Item Players-->  */
/*                                 </div>*/
/*                                 <!-- Tab Two - Players Staff -->*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*                                 <div class="tab-pane" id="club-news">*/
/*                                     <h3>Clubs</h3>*/
/*                                     <!-- Item Players-->  */
/*                                     <ul id="players-carousel" class="players ">*/
/* */
/*                                         {% block clubs %}*/
/*                                             {% for key,club in clubs %}*/
/* */
/*                                                 <!-- Item Player -->  */
/*                                                 <li class="item-player" style="width: 180px;height: 280px">*/
/*                                                     <img alt="Embedded Image" src="data:image/png;base64,{{ imagesClub[key] }}"class="img-responsive" width="180" height="220">*/
/*                                                     <div class="info-player">*/
/*                                                         <h5><span style="font-size: x-small">{{club.nomClub}}</span></h5>*/
/*                                                         <div class="overlay-player">*/
/*                                                             <p>*/
/*                                                                 Adresse : {{club.adresseClub}} <br>*/
/*                                                             </p>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </li>*/
/*                                                 <!-- End Player post -->*/
/* */
/*                                             {% endfor %}*/
/*                                         {% endblock %}*/
/* */
/*                                     </ul>*/
/*                                     <!-- End Item Players-->  */
/*                                 </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*                                 <!-- Tab Theree - Club Teams -->*/
/*                             </div>*/
/*                             <!-- Content Tabs -->*/
/*                         </div> */
/*                         <!-- Left Content - Tabs and Carousel -->    */
/* */
/*                         <!-- Right Content - Content Counter -->*/
/*                         <div class="col-md-3">*/
/*                             <aside>*/
/*                                 <div class="title-color text-center">*/
/*                                     <h4>Tunis Open</h4>*/
/*                                 </div>*/
/* */
/*                                 <div class="content-counter content-counter-home">*/
/*                                     <p class="text-center"> */
/*                                         <i class="fa fa-clock-o"></i> */
/*                                         Compte a rebours*/
/*                                     </p>*/
/*                                     <div id="event-one" class="counter"></div>*/
/*                                     <ul class="post-options">*/
/*                                         <li><i class="fa fa-calendar"></i>June 12, 2016</li>*/
/*                                         <li><i class="fa fa-clock-o"></i>Kick-of, 12:00 PM</li> */
/*                                     </ul>*/
/*                                     <p>Le Tournoi de tennis de Tunis ou Tunis Open est un tournoi de tennis appartenant aux tournois Challenger de l'ATP World Tour. Il est organisé au Tennis Club de Tunis.*/
/*                                         Une première série d'éditions se tient en 1983 et 1984 avant que le tournoi ne disparaisse. En 2005, il revient au calendrier des tournois Challenger de l'ATP Tour.</p>*/
/*                                     <a class="btn btn-primary" href="#">*/
/*                                         Voir detail evenement*/
/*                                         <i class="fa fa-trophy"></i>*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </aside>            */
/*                             <!-- Content Counter -->*/
/*                         </div>*/
/*                         <!-- End Right Content - Content Counter -->*/
/*                     </div>*/
/*                 </div>   */
/*                 <!-- Dark Home -->*/
/* */
/*                 <!-- Content Central -->*/
/*                 <div class="container padding-top">*/
/*                     <div class="row">*/
/* */
/*                         <!-- content Column Left -->*/
/*                         <div class="col-xs-12 col-md-6 col-lg-7">                     */
/*                             <!-- Recent Post -->*/
/*                             <div class="panel-box">*/
/* */
/*                                 <div class="titles">*/
/*                                     <h4>Recent News</h4>*/
/*                                 </div>*/
/* */
/*                                 {% block actualites1 %}*/
/*                                     {% for key,actualite in actualites %}*/
/* */
/*                                         <!-- Post Item -->*/
/*                                         <div class="post-item">*/
/*                                             <div class="row">*/
/*                                                 <div class="col-md-4">*/
/*                                                     <div class="img-hover">*/
/*                                                         <img alt="Embedded Image" src="data:image/png;base64,{{ imagesActualite[key] }}" class="img-responsive">*/
/*                                                         <div class="overlay"><a href="{{path('single_article', {'id':actualite.id})}}">+</a></div>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 <div class="col-md-8">*/
/*                                                     <h4><a href="{{path('single_article', {'id':actualite.id})}}"> {{actualite.titreActualite}}</a></h4>*/
/*                                                     <p class="data-info">{{actualite.dateActualite|date('d-m-Y')}}  / <i class="fa fa-comments"></i><a href="#">0</a></p>*/
/*                                                     <p>{{actualite.descriptionActualite[0:200]}}... <a href="{{path('single_article', {'id':actualite.id})}}"> [+]</a></p>                                            */
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <!-- End Post Item -->*/
/* */
/*                                     {% endfor %}*/
/*                                 {% endblock %}*/
/* */
/* */
/*                             </div>  */
/*                             <!-- End Recent Post --> */
/* */
/*                             <!-- Experts -->*/
/*                             <div class="panel-box">                            */
/*                                 <div class="titles">*/
/*                                     <h4>Complexes</h4>*/
/*                                 </div>     */
/* */
/*                                 <div class="row">*/
/* */
/*                                     {% block complexes %}*/
/*                                         {% for key,complexe in complexes %}*/
/* */
/*                                             <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3">*/
/*                                                 <div class="box-info">*/
/*                                                     <img src="data:image/png;base64,{{ imagesComplexes[key] }}" alt="" class="img-responsive">*/
/*                                                     <h5 class="entry-title"><a href="#">{{complexe.nomComplexe}}</a></h5>*/
/*                                                     <p class="date-box">Place :{{complexe.place}} </p>*/
/*                                                 </div>*/
/*                                             </div> */
/* */
/*                                         {% endfor %}*/
/*                                     {% endblock %}*/
/* */
/*                                 </div>                          */
/*                             </div>  */
/*                             <!-- End Experts -->  */
/*                         </div>*/
/*                         <!-- End content Left -->*/
/* */
/*                         <!-- content Sidebar Center -->*/
/*                         <aside class="col-xs-6 col-sm-6 col-md-3 col-lg-3">                     */
/*                             <!-- Locations -->*/
/*                             <div class="panel-box">*/
/* */
/*                                 <div class="titles">*/
/*                                     <h4>Locations</h4>*/
/*                                 </div>*/
/*                                 <!-- Locations Carousel --> */
/*                                 <ul class="single-carousel">    */
/*                                     <li>*/
/*                                         <img src="{{asset('img/blog/1.jpg')}}" alt="" class="img-responsive">*/
/*                                         <div class="info-single-carousel">*/
/*                                             <h4>Stade Menzah</h4>*/
/*                                             <p>Le plus grand club de tennis de Tunisie, Le Tennis Club de Tunis fondé en 1923.*/
/*                                                 9 courts en terre battue, 5 courts en GreenSet, salle de repos et salle de restauration pour les joueurs, salle de fitness, physiothérapie, sauna.*/
/* */
/*                                             </p>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <img src="{{asset('img/blog/2.jpg')}}" alt="" class="img-responsive">*/
/*                                         <div class="info-single-carousel">*/
/*                                             <h4>Brazilia</h4>*/
/*                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo cillum dolore eu fugiat nulla pariatur.</p>*/
/*                                         </div>*/
/*                                     </li> */
/*                                     <li>*/
/*                                         <img src="{{asset('img/blog/3.jpg')}}" alt="" class="img-responsive">*/
/*                                         <div class="info-single-carousel">*/
/*                                             <h4>Sao Paulo</h4>*/
/*                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo cillum dolore eu fugiat nulla pariatur.</p>*/
/*                                         </div>*/
/*                                     </li>                                    */
/*                                 </ul>*/
/*                                 <!-- Locations Carousel -->                                */
/*                             </div>  */
/*                             <!-- End Locations --> */
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
/* */
/*                             <!-- Widget Text-->*/
/*                             <div class="panel-box">*/
/*                                 <div class="titles">*/
/*                                     <h4>Lieux</h4>*/
/*                                 </div>*/
/*                                 <div class="row">*/
/* */
/* */
/*                                     <div class='wrap' style="width: 1000px;height: 800px;">*/
/*                                         <div id="googleMap" style="width:1200px;height:600px;"></div>*/
/*                                     </div>*/
/*                                     <a id="lieu" class='btn btn-flat4' style="width: 60%;margin-left: 20%" href='#'>*/
/*                                         <i class="fa fa-map-marker"></i>*/
/*                                         Consulter lieux*/
/*                                     </a>*/
/* */
/* */
/* */
/* */
/* */
/*                                 </div>*/
/*                             </div>  */
/*                             <!-- End Widget Text-->*/
/*                         </aside>*/
/*                         <!-- End content Sidebar Center -->*/
/* */
/*                         <!-- content Sidebar Right -->*/
/*                         <aside class="col-xs-6 col-sm-6 col-md-3 col-lg-2">                     */
/*                             <!-- Diary -->*/
/*                          */
/*                             <!-- End Adds Sidebar -->*/
/*                         </aside>*/
/*                         <!-- End content Sidebar Right -->*/
/* */
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
/*                                     <h2>Entrer votre email et <span class="text-resalt">S'abonner</span> à notre newsletter.</h2>*/
/*                                     <p>.</p>*/
/*                                 </div>*/
/*                                 <form id="newsletterForm" action="http://html.iwthemes.com/sportscup/php/mailchip/newsletter-subscribe.php">*/
/*                                     <div class="row">*/
/*                                         <div class="col-md-6">*/
/*                                             <div class="input-group">*/
/*                                                 <span class="input-group-addon">*/
/*                                                     <i class="fa fa-envelope"></i>*/
/*                                                 </span>*/
/*                                                 <input class="form-control" placeholder="Nom" name="name"  type="text" required="required">*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="col-md-6">*/
/*                                             <div class="input-group">*/
/*                                                 <span class="input-group-addon">*/
/*                                                     <i class="fa fa-envelope"></i>*/
/*                                                 </span>*/
/*                                                 <input class="form-control" placeholder="Email" name="email"  type="email" required="required">*/
/*                                                 <span class="input-group-btn">*/
/*                                                     <button class="btn btn-primary" type="submit" name="subscribe" >S'abonner</button>*/
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
/*             {% block footer %}*/
/*                 {{ include('FTTUtilisateurBundle::Default/Includes/footer.html.twig') }}*/
/*             {% endblock %}*/
/* */
/*         </div>*/
/*         <!-- End layout-->*/
/* */
/*         <!-- ======================= JQuery libs =========================== -->*/
/*         <!-- jQuery local--> */
/*         <script src="{{asset('js/jquery.js')}}"></script>            */
/*         <script src="{{asset('js/jquery.min.js')}}"></script>            */
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
/*         <!--Theme Options-->*/
/*         <script type="text/javascript" src="{{asset('js/theme-options/theme-options.js')}}"></script>*/
/*         <script type="text/javascript" src="{{asset('js/theme-options/jquery.cookies.js')}}"></script> */
/*         <!-- Bootstrap.js-->*/
/*         <script type="text/javascript" src="{{asset('js/bootstrap/bootstrap.js')}}"></script> */
/*         <!--MAIN FUNCTIONS-->*/
/*         <script type="text/javascript" src="{{asset('js/main.js')}}"></script>*/
/*         <!-- ======================= End JQuery libs =========================== -->*/
/* */
/* */
/* */
/* */
/* */
/*         <script>*/
/*             function initialize() {*/
/* */
/* */
/*                 var myCenter = new google.maps.LatLng(40.546, 10.548);*/
/*                 var mapProp = {*/
/*                     center: myCenter,*/
/*                     zoom: 5,*/
/*                     mapTypeId: google.maps.MapTypeId.ROADMAP*/
/*                 };*/
/*                 var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);*/
/* */
/* */
/*             {% for x in complexes %}*/
/* */
/* */
/*                     var marker = new google.maps.Marker({*/
/*                         position: new google.maps.LatLng({{x.latitude}}, {{x.longitude}}),*/
/*                         animation: google.maps.Animation.BOUNCE*/
/* */
/* */
/*                     });*/
/*                     marker.setMap(map);*/
/*                     var infowindow = new google.maps.InfoWindow({*/
/*                         content: "c'est le complexe {{x.nomcomplexe}} qui se trouve à {{x.place}}"*/
/*                     });*/
/* */
/*                     infowindow.open(map, marker);*/
/*                     google.maps.event.addListener(marker, 'click', function () {*/
/*                         map.setZoom(15);*/
/*                         map.setCenter(marker.getPosition());*/
/*                     });*/
/*             {% endfor %}*/
/* */
/* */
/*                 }*/
/*                 google.maps.event.addDomListener(window, 'load', initialize);*/
/* */
/*                 $('#lieu').on('click', function () {*/
/*                     $('.wrap').toggleClass('active');*/
/* */
/*                     return false;*/
/*                 });*/
/* */
/*         </script>*/
/* */
/* */
/*         <script>*/
/*             var $item = $('.carousel .item');*/
/*             var $wHeight = $(window).height();*/
/* */
/*             $item.height($wHeight);*/
/*             $item.addClass('full-screen');*/
/* */
/*             var $numberofSlides = $('.item').length;*/
/*             var $currentSlide = Math.floor((Math.random() * $numberofSlides));*/
/* */
/*             $('.carousel-indicators li').each(function () {*/
/*                 var $slideValue = $(this).attr('data-slide-to');*/
/*                 if ($currentSlide == $slideValue) {*/
/*                     $(this).addClass('active');*/
/*                     $item.eq($slideValue).addClass('active');*/
/*                 } else {*/
/*                     $(this).removeClass('active');*/
/*                     $item.eq($slideValue).removeClass('active');*/
/*                 }*/
/*             });*/
/* */
/*             $('.carousel img').each(function () {*/
/*                 var $src = $(this).attr('src');*/
/*                 var $color = $(this).attr('data-color');*/
/*                 $(this).parent().css({*/
/*                     'background-image': 'url(' + $src + ')',*/
/*                     'background-color': $color*/
/*                 });*/
/*                 $(this).remove();*/
/*             });*/
/* */
/*             $(window).on('resize', function () {*/
/*                 $wHeight = $(window).height();*/
/*                 $item.height($wHeight);*/
/*             });*/
/* */
/*             $('.carousel').carousel({*/
/*                 interval: 6000,*/
/*                 pause: "false"*/
/*             });*/
/*         </script>*/
/* */
/* */
/* */
/* */
/*     </body>*/
/* */
/*     <!-- Mirrored from html.iwthemes.com/sportscup/?theme=green by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Mar 2016 10:22:58 GMT -->*/
/* </html>*/
