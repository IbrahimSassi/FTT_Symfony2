<?php

/* FTTUtilisateurBundle:Complexe:popup.html.twig */
class __TwigTemplate_55a34968fc4e6b4a402085220c9d305bb2563d92d02c035e7dc63cacd6ea6769 extends Twig_Template
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
        // line 2
        echo "

<!DOCTYPE html>
<html>
    <head>
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/cssmap/map.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">         
        <script src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyCw6Z2CFBlxvvksTqtg1dV9qI7PbUF3hYs\"></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js\"></script>


    <body>

        <!-- Button that triggers the popup -->
        <div class='wrap' >
            <div class='content'  >
                <div id=\"googleMap\" style=\"width:1400px;height:800px;\"></div>
            </div>
        </div>
        <a class='button glyphicon glyphicon-plus' href='#'>Consulter lieux</a>


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
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["complexes"]) ? $context["complexes"] : $this->getContext($context, "complexes")));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 37
            echo "

                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "latitude", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "longitude", array()), "html", null, true);
            echo "),
                        animation: google.maps.Animation.BOUNCE


                    });
                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow({
                        content: \"c'est la complexe ";
            // line 47
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
        // line 56
        echo "

                }
                google.maps.event.addDomListener(window, 'load', initialize);

                \$('a').on('click', function () {
                    \$('.wrap, a').toggleClass('active');

                    return false;
                });

        </script>


    </body>

</html>
";
    }

    public function getTemplateName()
    {
        return "FTTUtilisateurBundle:Complexe:popup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 56,  79 => 47,  67 => 40,  62 => 37,  58 => 36,  26 => 7,  19 => 2,);
    }
}
/* {# empty Twig template #}*/
/* */
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <link href="{{asset('css/cssmap/map.css')}}" rel="stylesheet" media="screen">         */
/*         <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCw6Z2CFBlxvvksTqtg1dV9qI7PbUF3hYs"></script>*/
/*         <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>*/
/* */
/* */
/*     <body>*/
/* */
/*         <!-- Button that triggers the popup -->*/
/*         <div class='wrap' >*/
/*             <div class='content'  >*/
/*                 <div id="googleMap" style="width:1400px;height:800px;"></div>*/
/*             </div>*/
/*         </div>*/
/*         <a class='button glyphicon glyphicon-plus' href='#'>Consulter lieux</a>*/
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
/*                         content: "c'est la complexe {{x.nomcomplexe}} qui se trouve à {{x.place}}"*/
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
/*                 $('a').on('click', function () {*/
/*                     $('.wrap, a').toggleClass('active');*/
/* */
/*                     return false;*/
/*                 });*/
/* */
/*         </script>*/
/* */
/* */
/*     </body>*/
/* */
/* </html>*/
/* */
