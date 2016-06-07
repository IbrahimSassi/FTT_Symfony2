<?php

/* ::layoutInscrit.html.twig */
class __TwigTemplate_8335eabf09aa463d050a6deb382ab2ff8912b02577dd6a69c1db79e83e843d37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header1' => array($this, 'block_header1'),
            'menu' => array($this, 'block_menu'),
            'bodyAdmin' => array($this, 'block_bodyAdmin'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>Administration FTT </title>
        <!-- Bootstrap core CSS -->

        <link rel=\"shortcut icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icons/tennis.ico"), "html", null, true);
        echo "\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/fonts/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Custom styling plus plugins -->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/css/icheck/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/css/editor/external/google-code-prettify/prettify.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/css/editor/index.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- select2 -->
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/css/select/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- switchery -->
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/popup/component.css"), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/css/searchBar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    </head>


    <body class=\"nav-md\">

        <div class=\"container body\">


            <div class=\"main_container\">

                <div class=\"col-md-3 left_col\">
                    <div class=\"left_col scroll-view\">

                        <div class=\"navbar nav_title\" style=\"border: 0;\">
                            <a href=\"#\" class=\"site_title\"><i class=\"fa fa-user-secret\"></i> <span>&nbsp; &nbsp; &nbsp; &nbsp; FTT</span></a>
                        </div>
                        <div class=\"clearfix\"></div>

                        ";
        // line 47
        $this->displayBlock('header1', $context, $blocks);
        // line 50
        echo "                        <br />

                        ";
        // line 52
        $this->displayBlock('menu', $context, $blocks);
        // line 54
        echo "                        <!-- /menu footer buttons -->
                        <div class=\"sidebar-footer hidden-small\">
                            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                                <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
                            </a>
                            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
                                <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
                            </a>
                            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
                                <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
                            </a>
                            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\">
                                <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class=\"top_nav\">

                    <div class=\"nav_menu\">
                        <nav class=\"\" role=\"navigation\">
                            <div class=\"nav toggle\">
                                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
                            </div>

                            <ul class=\"nav navbar-nav navbar-right\">
                                <li class=\"\">
                                    <a href=\"javascript:;\" class=\"fa fa-user\" 
                                       data-toggle=\"dropdown\" aria-expanded=\"false\" 
                                       style=\"font-size: 3em\">

                                        <span class=\" fa fa-angle-down\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-usermenu animated fadeInDown pull-right\">
                                        <li>
                                            <a
                                                ";
        // line 93
        if ($this->env->getExtension('security')->isGranted("ROLE_ARBITRE")) {
            // line 94
            echo "                                                    href=\"";
            echo $this->env->getExtension('routing')->getPath("consulter_profil_arbitre");
            echo "\"
                                                ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_MEDECIN")) {
            // line 96
            echo "                                                    href=\"";
            echo $this->env->getExtension('routing')->getPath("consulter_profil_medecin");
            echo "\"
                                                ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE")) {
            // line 98
            echo "                                                    href=\"";
            echo $this->env->getExtension('routing')->getPath("consulter_profil_responsable");
            echo "\"
                                                ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 100
            echo "                                                    href=\"";
            echo $this->env->getExtension('routing')->getPath("consulter_profil_admin");
            echo "\"
                                                ";
        }
        // line 101
        echo ">
                                                Profil</a>
                                        </li>   
                                        <li>
                                            <a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("ftt_utilisateur_homepage");
        echo "\" >Espace publique</a>
                                        </li>
                                        <li><a href=\"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-sign-out pull-right\"></i> Deconnecter</a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                    </div>

                </div>
                <!-- /top navigation -->

                <!-- page content -->
                <div class=\"right_col\" role=\"main\">
                    <div class=\"\">
                        <div class=\"page-title\">
                            <div class=\"title_left\">
                                <h3>Fédération Tunisienne De Tennis</h3>
                            </div>

                            <div class=\"title_right\">
                                <div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">
                                    <div class=\"panel-heading\">

                                        <div class=\"pull-right\">
                                            <span class=\"clickable filter\" data-toggle=\"tooltip\" title=\"Recherche\" data-container=\"body\">

                                            </span>
                                        </div>
                                    </div>

                                    <div class=\"panel-body\">
                                        <input type=\"text\" class=\"form-control\" id=\"dev-table-filter\" data-action=\"filter\" data-filters=\"#dev-table\" placeholder=\"Recherche ...\" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"clearfix\"> </div>

                        <div class=\"row\">

                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                <div class=\"x_panel \" style=\" background-color:white\">
                                    <div class=\"x_title\">
                                        <h2>Administration</h2>
                                        <div class=\"clearfix\">
                                        </div>

                                    </div>


                                    ";
        // line 158
        $this->displayBlock('bodyAdmin', $context, $blocks);
        // line 170
        echo "



                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- footer content -->
                    <footer>
                        <div class=\"copyright-info\">
                            <p class=\"pull-right\"> Fédération Tunisienne de tennis
                            </p>
                        </div>
                        <div class=\"clearfix\"></div>
                    </footer>
                    <!-- /footer content -->

                </div>
                <!-- /page content -->
            </div>

        </div>

        <div id=\"custom_notifications\" class=\"custom-notifications dsp_none\">
            <ul class=\"list-unstyled notifications clearfix\" data-tabbed_notifications=\"notif-group\">
            </ul>
            <div class=\"clearfix\"></div>
            <div id=\"notif-group\" class=\"tabbed_notifications\"></div>
        </div>
        <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/js/table.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/js/searchBar.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <!-- bootstrap progress js -->
        <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/js/progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/js/nicescroll/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>
        <!-- icheck -->
        <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/js/icheck/icheck.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/js/custom.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/js/autocomplete/countries.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/js/autocomplete/jquery.autocomplete.js"), "html", null, true);
        echo "\"></script>
        <!-- pace -->
        <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/js/pace/pace.min.js"), "html", null, true);
        echo "\"></script>


        <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/popup/classie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/popup/modalEffects.js"), "html", null, true);
        echo "\"></script>
        <script>
            // this is important for IEs
            var polyfilter_scriptpath = '/js/';
        </script>
        <script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/js/popup/cssParser.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/js/popup/css-filters-polyfill.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/js/cropping/cropper.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/js/cropping/main.js"), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\" src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/js/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/js/datepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/js/switchery/switchery.min.js"), "html", null, true);
        echo "\"></script>

        <!-- PNotify -->
        <script type=\"text/javascript\" src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/js/notify/pnotify.core.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/js/notify/pnotify.buttons.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/js/notify/pnotify.nonblock.js"), "html", null, true);
        echo "\"></script>


        <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dashboardStyle/js/knob/jquery.knob.min.js"), "html", null, true);
        echo "\"></script>
    </body>





</html>
";
    }

    // line 47
    public function block_header1($context, array $blocks = array())
    {
        // line 48
        echo "
                        ";
    }

    // line 52
    public function block_menu($context, array $blocks = array())
    {
        // line 53
        echo "                        ";
    }

    // line 158
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 159
        echo "                                        <!--
                                       Edmouuuuuuuuu hnéééééééééééééééééééééé akahaaaaaaaaaaaaaww 
                                        
                                        
                                        matmessouuuuuuuuuuuuuuuuuuu chayyyyyyyyyyyyyyyyyyyyyyyyy e5eeeeeeeeeeerrrrrrrrrrrrrrrrr
                                        aaaaaaaaaaa
                                        
                                        biensur mouch ma3néha , il faut creer dautres pages twig et utiliser
                                        le block body , Voir lexemple
                                        -->
                                    ";
    }

    public function getTemplateName()
    {
        return "::layoutInscrit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 159,  414 => 158,  410 => 53,  407 => 52,  402 => 48,  399 => 47,  386 => 240,  380 => 237,  376 => 236,  372 => 235,  366 => 232,  362 => 231,  358 => 230,  353 => 228,  349 => 227,  345 => 226,  341 => 225,  333 => 220,  329 => 219,  323 => 216,  318 => 214,  314 => 213,  310 => 212,  305 => 210,  300 => 208,  296 => 207,  290 => 204,  286 => 203,  282 => 202,  248 => 170,  246 => 158,  192 => 107,  187 => 105,  181 => 101,  175 => 100,  169 => 98,  163 => 96,  157 => 94,  155 => 93,  114 => 54,  112 => 52,  108 => 50,  106 => 47,  84 => 28,  80 => 27,  76 => 26,  71 => 24,  66 => 22,  62 => 21,  58 => 20,  54 => 19,  49 => 17,  45 => 16,  41 => 15,  37 => 14,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/*     <head>*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*         <!-- Meta, title, CSS, favicons, etc. -->*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*         <title>Administration FTT </title>*/
/*         <!-- Bootstrap core CSS -->*/
/* */
/*         <link rel="shortcut icon" href="{{asset('img/icons/tennis.ico')}}">*/
/*         <link href="{{asset('dashboardStyle/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('dashboardStyle/fonts/css/font-awesome.min.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('dashboardStyle/css/animate.min.css')}}" rel="stylesheet">*/
/*         <!-- Custom styling plus plugins -->*/
/*         <link href="{{asset('dashboardStyle/css/custom.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('dashboardStyle/css/icheck/flat/green.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('dashboardStyle/css/editor/external/google-code-prettify/prettify.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('dashboardStyle/css/editor/index.css')}}" rel="stylesheet">*/
/*         <!-- select2 -->*/
/*         <link href="{{asset('dashboardStyle/css/select/select2.min.css')}}" rel="stylesheet">*/
/*         <!-- switchery -->*/
/*         <link rel="stylesheet" href="{{asset('css/popup/component.css')}}" />*/
/*         <link href="{{asset('dashboardStyle/css/searchBar.css')}}" rel="stylesheet">*/
/*         <script src="{{asset('dashboardStyle/js/jquery.min.js')}}"></script>*/
/*     </head>*/
/* */
/* */
/*     <body class="nav-md">*/
/* */
/*         <div class="container body">*/
/* */
/* */
/*             <div class="main_container">*/
/* */
/*                 <div class="col-md-3 left_col">*/
/*                     <div class="left_col scroll-view">*/
/* */
/*                         <div class="navbar nav_title" style="border: 0;">*/
/*                             <a href="#" class="site_title"><i class="fa fa-user-secret"></i> <span>&nbsp; &nbsp; &nbsp; &nbsp; FTT</span></a>*/
/*                         </div>*/
/*                         <div class="clearfix"></div>*/
/* */
/*                         {% block header1 %}*/
/* */
/*                         {% endblock %}*/
/*                         <br />*/
/* */
/*                         {% block menu %}*/
/*                         {% endblock %}*/
/*                         <!-- /menu footer buttons -->*/
/*                         <div class="sidebar-footer hidden-small">*/
/*                             <a data-toggle="tooltip" data-placement="top" title="Settings">*/
/*                                 <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>*/
/*                             </a>*/
/*                             <a data-toggle="tooltip" data-placement="top" title="FullScreen">*/
/*                                 <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>*/
/*                             </a>*/
/*                             <a data-toggle="tooltip" data-placement="top" title="Lock">*/
/*                                 <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>*/
/*                             </a>*/
/*                             <a data-toggle="tooltip" data-placement="top" title="Logout">*/
/*                                 <span class="glyphicon glyphicon-off" aria-hidden="true"></span>*/
/*                             </a>*/
/*                         </div>*/
/*                         <!-- /menu footer buttons -->*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <!-- top navigation -->*/
/*                 <div class="top_nav">*/
/* */
/*                     <div class="nav_menu">*/
/*                         <nav class="" role="navigation">*/
/*                             <div class="nav toggle">*/
/*                                 <a id="menu_toggle"><i class="fa fa-bars"></i></a>*/
/*                             </div>*/
/* */
/*                             <ul class="nav navbar-nav navbar-right">*/
/*                                 <li class="">*/
/*                                     <a href="javascript:;" class="fa fa-user" */
/*                                        data-toggle="dropdown" aria-expanded="false" */
/*                                        style="font-size: 3em">*/
/* */
/*                                         <span class=" fa fa-angle-down"></span>*/
/*                                     </a>*/
/*                                     <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">*/
/*                                         <li>*/
/*                                             <a*/
/*                                                 {% if is_granted('ROLE_ARBITRE') %}*/
/*                                                     href="{{path('consulter_profil_arbitre')}}"*/
/*                                                 {% elseif is_granted('ROLE_MEDECIN') %}*/
/*                                                     href="{{path('consulter_profil_medecin')}}"*/
/*                                                 {% elseif is_granted('ROLE_RESPONSABLE') %}*/
/*                                                     href="{{path('consulter_profil_responsable')}}"*/
/*                                                 {% elseif is_granted('ROLE_SUPER_ADMIN') %}*/
/*                                                     href="{{path('consulter_profil_admin')}}"*/
/*                                                 {% endif %}>*/
/*                                                 Profil</a>*/
/*                                         </li>   */
/*                                         <li>*/
/*                                             <a href="{{path('ftt_utilisateur_homepage')}}" >Espace publique</a>*/
/*                                         </li>*/
/*                                         <li><a href="{{path('fos_user_security_logout')}}"><i class="fa fa-sign-out pull-right"></i> Deconnecter</a>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </li>*/
/* */
/*                             </ul>*/
/*                         </nav>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <!-- /top navigation -->*/
/* */
/*                 <!-- page content -->*/
/*                 <div class="right_col" role="main">*/
/*                     <div class="">*/
/*                         <div class="page-title">*/
/*                             <div class="title_left">*/
/*                                 <h3>Fédération Tunisienne De Tennis</h3>*/
/*                             </div>*/
/* */
/*                             <div class="title_right">*/
/*                                 <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">*/
/*                                     <div class="panel-heading">*/
/* */
/*                                         <div class="pull-right">*/
/*                                             <span class="clickable filter" data-toggle="tooltip" title="Recherche" data-container="body">*/
/* */
/*                                             </span>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <div class="panel-body">*/
/*                                         <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Recherche ..." />*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="clearfix"> </div>*/
/* */
/*                         <div class="row">*/
/* */
/*                             <div class="col-md-12 col-sm-12 col-xs-12">*/
/*                                 <div class="x_panel " style=" background-color:white">*/
/*                                     <div class="x_title">*/
/*                                         <h2>Administration</h2>*/
/*                                         <div class="clearfix">*/
/*                                         </div>*/
/* */
/*                                     </div>*/
/* */
/* */
/*                                     {% block bodyAdmin %}*/
/*                                         <!--*/
/*                                        Edmouuuuuuuuu hnéééééééééééééééééééééé akahaaaaaaaaaaaaaww */
/*                                         */
/*                                         */
/*                                         matmessouuuuuuuuuuuuuuuuuuu chayyyyyyyyyyyyyyyyyyyyyyyyy e5eeeeeeeeeeerrrrrrrrrrrrrrrrr*/
/*                                         aaaaaaaaaaa*/
/*                                         */
/*                                         biensur mouch ma3néha , il faut creer dautres pages twig et utiliser*/
/*                                         le block body , Voir lexemple*/
/*                                         -->*/
/*                                     {% endblock %}*/
/* */
/* */
/* */
/* */
/*                                 </div>*/
/* */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <!-- footer content -->*/
/*                     <footer>*/
/*                         <div class="copyright-info">*/
/*                             <p class="pull-right"> Fédération Tunisienne de tennis*/
/*                             </p>*/
/*                         </div>*/
/*                         <div class="clearfix"></div>*/
/*                     </footer>*/
/*                     <!-- /footer content -->*/
/* */
/*                 </div>*/
/*                 <!-- /page content -->*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*         <div id="custom_notifications" class="custom-notifications dsp_none">*/
/*             <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">*/
/*             </ul>*/
/*             <div class="clearfix"></div>*/
/*             <div id="notif-group" class="tabbed_notifications"></div>*/
/*         </div>*/
/*         <script src="{{asset('dashboardStyle/js/table.js')}}"></script>*/
/*         <script src="{{asset('dashboardStyle/js/searchBar.js')}}"></script>*/
/*         <script src="{{asset('dashboardStyle/js/bootstrap.min.js')}}"></script>*/
/* */
/*         <!-- bootstrap progress js -->*/
/*         <script src="{{asset('dashboardStyle/js/progressbar/bootstrap-progressbar.min.js')}}"></script>*/
/*         <script src="{{asset('dashboardStyle/js/nicescroll/jquery.nicescroll.min.js')}}"></script>*/
/*         <!-- icheck -->*/
/*         <script src="{{asset('dashboardStyle/js/icheck/icheck.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('dashboardStyle/js/custom.js')}}"></script>*/
/*         <script type="text/javascript" src="{{asset('dashboardStyle/js/autocomplete/countries.js')}}"></script>*/
/*         <script src="{{asset('dashboardStyle/js/autocomplete/jquery.autocomplete.js')}}"></script>*/
/*         <!-- pace -->*/
/*         <script src="{{asset('dashboardStyle/js/pace/pace.min.js')}}"></script>*/
/* */
/* */
/*         <script src="{{asset('js/popup/classie.js')}}"></script>*/
/*         <script src="{{asset('js/popup/modalEffects.js')}}"></script>*/
/*         <script>*/
/*             // this is important for IEs*/
/*             var polyfilter_scriptpath = '/js/';*/
/*         </script>*/
/*         <script src="{{asset('dashboardStyle/js/popup/cssParser.js')}}"></script>*/
/*         <script src="{{asset('dashboardStyle/js/popup/css-filters-polyfill.js')}}"></script>*/
/*         <script src="{{asset('dashboardStyle/js/cropping/cropper.min.js')}}"></script>*/
/*         <script src="{{asset('dashboardStyle/js/cropping/main.js')}}"></script>*/
/* */
/*         <script type="text/javascript" src="{{asset('dashboardStyle/js/moment/moment.min.js')}}"></script>*/
/*         <script type="text/javascript" src="{{asset('dashboardStyle/js/datepicker/daterangepicker.js')}}"></script>*/
/*         <script src="{{asset('dashboardStyle/js/switchery/switchery.min.js')}}"></script>*/
/* */
/*         <!-- PNotify -->*/
/*         <script type="text/javascript" src="{{asset('dashboardStyle/js/notify/pnotify.core.js')}}"></script>*/
/*         <script type="text/javascript" src="{{asset('dashboardStyle/js/notify/pnotify.buttons.js')}}"></script>*/
/*         <script type="text/javascript" src="{{asset('dashboardStyle/js/notify/pnotify.nonblock.js')}}"></script>*/
/* */
/* */
/*         <script src="{{asset('dashboardStyle/js/knob/jquery.knob.min.js')}}"></script>*/
/*     </body>*/
/* */
/* */
/* */
/* */
/* */
/* </html>*/
/* */
