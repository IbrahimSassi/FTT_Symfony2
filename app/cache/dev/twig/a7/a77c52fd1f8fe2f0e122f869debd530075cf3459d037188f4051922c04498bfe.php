<?php

/* FTTAdminBundle:Complexe:interfacemap.html.twig */
class __TwigTemplate_3f0332cef615b7a14babb0d947387efac89e2cc2fb5af69ea9212dc20186bc81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:Complexe:interfacemap.html.twig", 1);
        $this->blocks = array(
            'bodyAdmin' => array($this, 'block_bodyAdmin'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FTTAdminBundle::layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 3
        echo "    <html>
        <head>

            <script src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyCw6Z2CFBlxvvksTqtg1dV9qI7PbUF3hYs\"></script>
            <script>
                function initialize() {

                    var lat = document.getElementById('lat').value;
                    var long = document.getElementById('long').value;
                    var myCenter = new google.maps.LatLng(lat, long);
                    var mapProp = {
                        center: new google.maps.LatLng(lat, long),
                        zoom: 5,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };
                    var map = new google.maps.Map(document.getElementById(\"googleMap\"), mapProp);

                    var marker = new google.maps.Marker({
                        position: myCenter,
                        animation: google.maps.Animation.BOUNCE
                    });
                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow({
                        content: \"c'est le complexe\"
                    });

                    infowindow.open(map, marker);

                    google.maps.event.addListener(marker, 'click', function () {
                        map.setZoom(15);
                        map.setCenter(marker.getPosition());
                    });

                }
                google.maps.event.addDomListener(window, 'load', initialize);

            </script>
        </head>

        <body>
            ";
        // line 43
        $this->displayBlock('container', $context, $blocks);
        // line 46
        echo "        </body>

    </html>
";
    }

    // line 43
    public function block_container($context, array $blocks = array())
    {
        // line 44
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:Complexe:interfacemap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 44,  83 => 43,  76 => 46,  74 => 43,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* {% block bodyAdmin %}*/
/*     <html>*/
/*         <head>*/
/* */
/*             <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCw6Z2CFBlxvvksTqtg1dV9qI7PbUF3hYs"></script>*/
/*             <script>*/
/*                 function initialize() {*/
/* */
/*                     var lat = document.getElementById('lat').value;*/
/*                     var long = document.getElementById('long').value;*/
/*                     var myCenter = new google.maps.LatLng(lat, long);*/
/*                     var mapProp = {*/
/*                         center: new google.maps.LatLng(lat, long),*/
/*                         zoom: 5,*/
/*                         mapTypeId: google.maps.MapTypeId.ROADMAP*/
/*                     };*/
/*                     var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);*/
/* */
/*                     var marker = new google.maps.Marker({*/
/*                         position: myCenter,*/
/*                         animation: google.maps.Animation.BOUNCE*/
/*                     });*/
/*                     marker.setMap(map);*/
/*                     var infowindow = new google.maps.InfoWindow({*/
/*                         content: "c'est le complexe"*/
/*                     });*/
/* */
/*                     infowindow.open(map, marker);*/
/* */
/*                     google.maps.event.addListener(marker, 'click', function () {*/
/*                         map.setZoom(15);*/
/*                         map.setCenter(marker.getPosition());*/
/*                     });*/
/* */
/*                 }*/
/*                 google.maps.event.addDomListener(window, 'load', initialize);*/
/* */
/*             </script>*/
/*         </head>*/
/* */
/*         <body>*/
/*             {% block container %}*/
/* */
/*             {% endblock %}*/
/*         </body>*/
/* */
/*     </html>*/
/* {% endblock %}*/
