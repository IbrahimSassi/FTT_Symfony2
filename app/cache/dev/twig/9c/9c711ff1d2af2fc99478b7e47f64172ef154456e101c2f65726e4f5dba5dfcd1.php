<?php

/* FTTUtilisateurBundle:Complexe:Informationcomplexe.html.twig */
class __TwigTemplate_9596865b74f4acd6acebb7713a4cc688644cfa35b882af1aff3cd51c27530592 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTUtilisateurBundle::layoutGlobal.html.twig", "FTTUtilisateurBundle:Complexe:Informationcomplexe.html.twig", 1);
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <style>
        .wrappper {
            width: 100%;
            margin: 0 auto;
        }
        .wrappper:after {
            content: \"\";
            display: table;
            clear: both;
        }




        #alphabet {
            margin: 15px auto;
            padding: 0;
            max-width: 900px;
        }
        #alphabet:after {
            content: \"\";
            display: table;
            clear: both;
        }

        #alphabet li {
            float: left;
            margin: 0 4px 4px 0;
            list-style: none;
            width: 24px;
            height: 30px;
            padding-top: 10px;
            background: #fff;
            color: #c1d72e;
            cursor: pointer;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            -khtml-border-radius: 5px;
            border: solid 1px #fff;
        }
        #alphabet li:hover {
            background: #c1d72e;
            border: solid 1px #fff;
            color: #fff;
        }

        #my-word {
            margin: 0;
            display: block;
            padding: 0;
            display: block;
        }

        #my-word li {
            position: relative;
            list-style: none;
            margin: 0;
            display: inline-block;
            padding: 0 10px;
            font-size: 1.6em;
        }

        button {
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            -khtml-border-radius: 5px;
            background: #c1d72e;
            color: #fff;
            border: solid 1px #fff;
            text-decoration: none;
            cursor: pointer;
            font-size: 1.2em;
            padding: 18px 10px;
            width: 180px;
            margin: 10px;
            outline: none;
        }
        button:hover {
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            background: #fff;
            border: solid 1px #fff;
            color: #c1d72e;
        }

        @media (max-width: 767px) {
            #alphabet {
                padding: 0 0 0 15px;
            }
        }
        @media (max-width: 480px) {
            #alphabet {
                padding: 0 0 0 25px;
            }
        }
        #header{ 
            color: yellow;
            height:40px; 
            border-radius: 2px;
            font-family: italic;

        }
    </style>
    <div id=\"header\"><div id=\"buttons\"><ul id=\"alphabet\"><li id=\"lettre\"><a href=\"
                                                                            ";
        // line 113
        echo $this->env->getExtension('routing')->getPath("recherche_A", array("lettre" => "A"));
        echo "\">A</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_A", array("lettre" => "B"));
        echo "\">B</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_A", array("lettre" => "C"));
        echo "\">C</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_A", array("lettre" => "D"));
        echo "\">D</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_A", array("lettre" => "E"));
        echo "\">E</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_A", array("lettre" => "F"));
        echo "\">F</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_A", array("lettre" => "G"));
        echo "\">G</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_A", array("lettre" => "H"));
        echo "\">H</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_A", array("lettre" => "I"));
        echo "\">I</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_A", array("lettre" => "J"));
        echo "\">J</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_A", array("lettre" => "K"));
        echo "\">K</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_A", array("lettre" => "L"));
        echo "\">L</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_A", array("lettre" => "M"));
        echo "\">M</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_A", array("lettre" => "N"));
        echo "\">N</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_A", array("lettre" => "O"));
        echo "\">O</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_A", array("lettre" => "P"));
        echo "\">P</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_A", array("lettre" => "Q"));
        echo "\">Q</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_A", array("lettre" => "R"));
        echo "\">R</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_A", array("lettre" => "S"));
        echo "\">S</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_A", array("lettre" => "T"));
        echo "\">T</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_A", array("lettre" => "U"));
        echo "\">U</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_A", array("lettre" => "V"));
        echo "\">V</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_A", array("lettre" => "W"));
        echo "\">W</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_A", array("lettre" => "X"));
        echo "\">X</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_A", array("lettre" => "Y"));
        echo "\">Y</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_A", array("lettre" => "Z"));
        echo "\">Z</a></li></ul></h3></div></div> 
    <div class=\"row\">
        ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["complexes"]) ? $context["complexes"] : $this->getContext($context, "complexes")));
        foreach ($context['_seq'] as $context["key"] => $context["x"]) {
            // line 116
            echo "            <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12\">
                <div class=\"testimonial-content\">
                    <img class=\"img-responsive\" src=\"data:image/png;base64,";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")), $context["key"], array(), "array"), "html", null, true);
            echo "\" alt=\"\" />

                    <h2>";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "nomComplexe", array()), "html", null, true);
            echo "</h2>
                    <p>Le complexe ";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "nomComplexe", array()), "html", null, true);
            echo " est un complexe  qui se situe à ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "place", array()), "html", null, true);
            echo " et qui contient ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "nbStade", array()), "html", null, true);
            echo " stades </p>

                </div>

            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "
    </div>
    <div>

        <html>
            <head>
                <script src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyCw6Z2CFBlxvvksTqtg1dV9qI7PbUF3hYs\"></script>
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
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["complexes"]) ? $context["complexes"] : $this->getContext($context, "complexes")));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 149
            echo "

                            var marker = new google.maps.Marker({
                                position: new google.maps.LatLng(";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "latitude", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "longitude", array()), "html", null, true);
            echo "),
                                animation: google.maps.Animation.BOUNCE


                            });
                            marker.setMap(map);
                            var infowindow = new google.maps.InfoWindow({
                                content: \"this is the complexe ";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "nomcomplexe", array()), "html", null, true);
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
        // line 168
        echo "

                        }
                        google.maps.event.addDomListener(window, 'load', initialize);


                </script>
            </head>

            <body>

                <div id=\"googleMap\" style=\"width:300px;height:500px;\"></div>

            </body>

        </html>
    </div>
    ";
        // line 186
        echo "    <!--<div class=\"navigation\">
    ";
        // line 188
        echo "</div> -->
";
    }

    public function getTemplateName()
    {
        return "FTTUtilisateurBundle:Complexe:Informationcomplexe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 188,  306 => 186,  287 => 168,  272 => 159,  260 => 152,  255 => 149,  251 => 148,  229 => 128,  212 => 121,  208 => 120,  203 => 118,  199 => 116,  195 => 115,  140 => 113,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "FTTUtilisateurBundle::layoutGlobal.html.twig" %}*/
/* */
/* */
/* */
/* {% block body %}*/
/*     <style>*/
/*         .wrappper {*/
/*             width: 100%;*/
/*             margin: 0 auto;*/
/*         }*/
/*         .wrappper:after {*/
/*             content: "";*/
/*             display: table;*/
/*             clear: both;*/
/*         }*/
/* */
/* */
/* */
/* */
/*         #alphabet {*/
/*             margin: 15px auto;*/
/*             padding: 0;*/
/*             max-width: 900px;*/
/*         }*/
/*         #alphabet:after {*/
/*             content: "";*/
/*             display: table;*/
/*             clear: both;*/
/*         }*/
/* */
/*         #alphabet li {*/
/*             float: left;*/
/*             margin: 0 4px 4px 0;*/
/*             list-style: none;*/
/*             width: 24px;*/
/*             height: 30px;*/
/*             padding-top: 10px;*/
/*             background: #fff;*/
/*             color: #c1d72e;*/
/*             cursor: pointer;*/
/*             -moz-border-radius: 5px;*/
/*             -webkit-border-radius: 5px;*/
/*             border-radius: 5px;*/
/*             -khtml-border-radius: 5px;*/
/*             border: solid 1px #fff;*/
/*         }*/
/*         #alphabet li:hover {*/
/*             background: #c1d72e;*/
/*             border: solid 1px #fff;*/
/*             color: #fff;*/
/*         }*/
/* */
/*         #my-word {*/
/*             margin: 0;*/
/*             display: block;*/
/*             padding: 0;*/
/*             display: block;*/
/*         }*/
/* */
/*         #my-word li {*/
/*             position: relative;*/
/*             list-style: none;*/
/*             margin: 0;*/
/*             display: inline-block;*/
/*             padding: 0 10px;*/
/*             font-size: 1.6em;*/
/*         }*/
/* */
/*         button {*/
/*             -moz-border-radius: 5px;*/
/*             -webkit-border-radius: 5px;*/
/*             border-radius: 5px;*/
/*             -khtml-border-radius: 5px;*/
/*             background: #c1d72e;*/
/*             color: #fff;*/
/*             border: solid 1px #fff;*/
/*             text-decoration: none;*/
/*             cursor: pointer;*/
/*             font-size: 1.2em;*/
/*             padding: 18px 10px;*/
/*             width: 180px;*/
/*             margin: 10px;*/
/*             outline: none;*/
/*         }*/
/*         button:hover {*/
/*             -webkit-transition: all 0.3s ease-in-out;*/
/*             -moz-transition: all 0.3s ease-in-out;*/
/*             transition: all 0.3s ease-in-out;*/
/*             background: #fff;*/
/*             border: solid 1px #fff;*/
/*             color: #c1d72e;*/
/*         }*/
/* */
/*         @media (max-width: 767px) {*/
/*             #alphabet {*/
/*                 padding: 0 0 0 15px;*/
/*             }*/
/*         }*/
/*         @media (max-width: 480px) {*/
/*             #alphabet {*/
/*                 padding: 0 0 0 25px;*/
/*             }*/
/*         }*/
/*         #header{ */
/*             color: yellow;*/
/*             height:40px; */
/*             border-radius: 2px;*/
/*             font-family: italic;*/
/* */
/*         }*/
/*     </style>*/
/*     <div id="header"><div id="buttons"><ul id="alphabet"><li id="lettre"><a href="*/
/*                                                                             {{path('recherche_A',{'lettre':'A'})}}">A</a></li><li id="lettre"><a href="{{path('recherche_A',{'lettre':'B'})}}">B</a></li><li id="lettre"><a href="{{path('recherche_A',{'lettre':'C'})}}">C</a></li><li id="lettre"><a href="{{path('recherche_A',{'lettre':'D'})}}">D</a></li><li id="lettre"><a href="{{path('recherche_A',{'lettre':'E'})}}">E</a></li><li id="lettre"><a href="{{path('recherche_A',{'lettre':'F'})}}">F</a></li><li id="lettre"><a href="{{path('recherche_A',{'lettre':'G'})}}">G</a></li><li id="lettre"><a href="{{path('recherche_A',{'lettre':'H'})}}">H</a></li><li id="lettre"><a href="{{path('recherche_A',{'lettre':'I'})}}">I</a></li><li id="lettre"><a href="{{path('recherche_A',{'lettre':'J'})}}">J</a></li><li id="lettre"><a href="{{path('recherche_A',{'lettre':'K'})}}">K</a></li><li id="lettre"><a href="{{path('recherche_A',{'lettre':'L'})}}">L</a></li><li id="lettre"><a href="{{path('recherche_A',{'lettre':'M'})}}">M</a></li><li id="lettre"><a href="{{path('recherche_A',{'lettre':'N'})}}">N</a></li><li id="lettre"><a href="{{path('recherche_A',{'lettre':'O'})}}">O</a></li><li id="lettre"><a href="{{path('recherche_A',{'lettre':'P'})}}">P</a></li><li id="lettre"><a href="{{path('recherche_A',{'lettre':'Q'})}}">Q</a></li><li id="lettre"><a href="{{path('recherche_A',{'lettre':'R'})}}">R</a></li><li id="lettre"><a href="{{path('recherche_A',{'lettre':'S'})}}">S</a></li><li id="lettre"><a href="{{path('recherche_A',{'lettre':'T'})}}">T</a></li><li id="lettre"><a href="{{path('recherche_A',{'lettre':'U'})}}">U</a></li><li id="lettre"><a href="{{path('recherche_A',{'lettre':'V'})}}">V</a></li><li id="lettre"><a href="{{path('recherche_A',{'lettre':'W'})}}">W</a></li><li id="lettre"><a href="{{path('recherche_A',{'lettre':'X'})}}">X</a></li><li id="lettre"><a href="{{path('recherche_A',{'lettre':'Y'})}}">Y</a></li><li id="lettre"><a href="{{path('recherche_A',{'lettre':'Z'})}}">Z</a></li></ul></h3></div></div> */
/*     <div class="row">*/
/*         {% for key,x in complexes %}*/
/*             <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">*/
/*                 <div class="testimonial-content">*/
/*                     <img class="img-responsive" src="data:image/png;base64,{{ images[key] }}" alt="" />*/
/* */
/*                     <h2>{{x.nomComplexe}}</h2>*/
/*                     <p>Le complexe {{x.nomComplexe}} est un complexe  qui se situe à {{x.place}} et qui contient {{x.nbStade}} stades </p>*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         {% endfor %}*/
/* */
/*     </div>*/
/*     <div>*/
/* */
/*         <html>*/
/*             <head>*/
/*                 <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCw6Z2CFBlxvvksTqtg1dV9qI7PbUF3hYs"></script>*/
/*                 <script>*/
/*                     function initialize() {*/
/* */
/* */
/*                         var myCenter = new google.maps.LatLng(40.546, 10.548);*/
/*                         var mapProp = {*/
/*                             center: myCenter,*/
/*                             zoom: 5,*/
/*                             mapTypeId: google.maps.MapTypeId.ROADMAP*/
/*                         };*/
/*                         var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);*/
/* */
/* */
/*                     {% for x in complexes %}*/
/* */
/* */
/*                             var marker = new google.maps.Marker({*/
/*                                 position: new google.maps.LatLng({{x.latitude}}, {{x.longitude}}),*/
/*                                 animation: google.maps.Animation.BOUNCE*/
/* */
/* */
/*                             });*/
/*                             marker.setMap(map);*/
/*                             var infowindow = new google.maps.InfoWindow({*/
/*                                 content: "this is the complexe {{x.nomcomplexe}}"*/
/*                             });*/
/* */
/*                             infowindow.open(map, marker);*/
/*                             google.maps.event.addListener(marker, 'click', function () {*/
/*                                 map.setZoom(15);*/
/*                                 map.setCenter(marker.getPosition());*/
/*                             });*/
/*                     {% endfor %}*/
/* */
/* */
/*                         }*/
/*                         google.maps.event.addDomListener(window, 'load', initialize);*/
/* */
/* */
/*                 </script>*/
/*             </head>*/
/* */
/*             <body>*/
/* */
/*                 <div id="googleMap" style="width:300px;height:500px;"></div>*/
/* */
/*             </body>*/
/* */
/*         </html>*/
/*     </div>*/
/*     {# display navigation #}*/
/*     <!--<div class="navigation">*/
/*     {# {{ knp_pagination_render(complexes) }}#}*/
/* </div> -->*/
/* {% endblock %}*/
