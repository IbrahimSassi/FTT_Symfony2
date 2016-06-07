<?php

/* FTTAdminBundle:Complexe:ModifierComplexe.html.twig */
class __TwigTemplate_16b60aefa0509cbca2d129e649e271674e100a9a4624e26eec26eee9496b4d79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:Complexe:ModifierComplexe.html.twig", 2);
        $this->blocks = array(
            'bodyAdmin' => array($this, 'block_bodyAdmin'),
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

    // line 4
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 5
        echo "    <html>
        <head>
            <style>
                html, body {
                    height: 100%;
                    margin: 0;
                    padding: 0;
                }
                #map {
                    height: 100%;
                }
                .controls {
                    margin-top: 10px;
                    border: 1px solid transparent;
                    border-radius: 2px 0 0 2px;
                    box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    height: 32px;
                    outline: none;
                    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
                }

                #pac-input {
                    background-color: #fff;
                    font-family: Roboto;
                    font-size: 15px;
                    font-weight: 300;
                    margin-left: 12px;
                    padding: 0 11px 0 13px;
                    text-overflow: ellipsis;
                    width: 300px;
                }

                #pac-input:focus {
                    border-color: #4d90fe;
                }

                .pac-container {
                    font-family: Roboto;
                }

                #type-selector {
                    color: #fff;
                    background-color: #4d90fe;
                    padding: 5px 11px 0px 11px;
                }

                #type-selector label {
                    font-family: Roboto;
                    font-size: 13px;
                    font-weight: 300;
                }
                #target {
                    width: 345px;
                }
            </style>
        <input id=\"pac-input\" class=\"controls\" type=\"text\" placeholder=\"Search Box\">
        <div id=\"map\"></div>
        <script src=\"https://code.jquery.com/jquery-1.12.0.min.js\"></script>
        <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false&libraries=places\"></script>
        <script type=\"text/javascript\">
            var map;
            var myCenter = new google.maps.LatLng(51.508742, -0.120850);
            var marker;

            function initialize()
            {
                var mapProp = {
                    center: myCenter,
                    zoom: 5,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                map = new google.maps.Map(document.getElementById(\"googleMap\"), mapProp);
                // Create the search box and link it to the UI element.
                var input = document.getElementById('pac-input');
                var searchBox = new google.maps.places.SearchBox(input);
                map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
                var markers = [];
                // Bias the SearchBox results towards current map's viewport.
                searchBox.addListener('places_changed', function () {
                    var places = searchBox.getPlaces();
                    if (places.length == 0) {
                        return;
                    }
                    // Clear out the old markers.
                    markers.forEach(function (marker) {
                        marker.setMap(null);
                    });
                    markers = [];

                    // For each place, get the icon, name and location.
                    var bounds = new google.maps.LatLngBounds();
                    places.forEach(function (place) {
                        var icon = {
                            url: place.icon,
                            size: new google.maps.Size(71, 71),
                            origin: new google.maps.Point(0, 0),
                            anchor: new google.maps.Point(17, 34),
                            scaledSize: new google.maps.Size(25, 25)
                        };

                        // Create a marker for each place.
                        markers.push(new google.maps.Marker({
                            map: map,
                            icon: icon,
                            title: place.name,
                            position: place.geometry.location
                        }));

                        if (place.geometry.viewport) {
                            // Only geocodes have viewport.
                            bounds.union(place.geometry.viewport);
                        } else {
                            bounds.extend(place.geometry.location);
                        }
                    });
                    map.fitBounds(bounds);
                });

                google.maps.event.addListener(map, 'click', function (event) {
                    placeMarker(event.latLng);
                });
                marker = new google.maps.Marker({
                    position: myCenter,
                    map: map
                });
                infowindow = new google.maps.InfoWindow({
                    content: 'Latitude: ' + marker.getPosition().lat() + '<br>Longitude: ' + marker.getPosition().lng()
                });
                infowindow.open(map, marker);
            }
            var infowindow;
            function placeMarker(location) {
                infowindow.close();
                marker.setPosition(location);
                \$('#ftt_adminbundle_complexe_latitude').val(marker.getPosition().lat());
                \$('#ftt_adminbundle_complexe_longitude').val(marker.getPosition().lng());
                infowindow.setContent('Latitude: ' + marker.getPosition().lat() + '<br>Longitude: ' + marker.getPosition().lng());
                infowindow.open(map, marker);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </head>
    <body>
        <form >
            ";
        // line 150
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form_start');
        echo "
            <table>
                <tr>
                    <td><label>nom complexe: </label></td><td>";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nomComplexe", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td><label>Place: </label></td><td>";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "place", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td><label>image complexe: </label></td><td>";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "imageComplexe", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td><label>nombre de stade: </label></td><td>";
        // line 162
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nbStade", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td><label>latitude: </label></td><td>";
        // line 165
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "latitude", array()), 'widget');
        echo "<td>
                </tr>
                <tr>
                    <td><label>langitude: </label></td><td>";
        // line 168
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "longitude", array()), 'widget');
        echo "</td>
                </tr>

            </table>
            ";
        // line 172
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form_end');
        echo "
            <div id=\"googleMap\" style=\"width:950px;height:500px;\"></div>
        </form>
    </body>

</html>
";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:Complexe:ModifierComplexe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 172,  214 => 168,  208 => 165,  202 => 162,  196 => 159,  190 => 156,  184 => 153,  178 => 150,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* {% block bodyAdmin %}*/
/*     <html>*/
/*         <head>*/
/*             <style>*/
/*                 html, body {*/
/*                     height: 100%;*/
/*                     margin: 0;*/
/*                     padding: 0;*/
/*                 }*/
/*                 #map {*/
/*                     height: 100%;*/
/*                 }*/
/*                 .controls {*/
/*                     margin-top: 10px;*/
/*                     border: 1px solid transparent;*/
/*                     border-radius: 2px 0 0 2px;*/
/*                     box-sizing: border-box;*/
/*                     -moz-box-sizing: border-box;*/
/*                     height: 32px;*/
/*                     outline: none;*/
/*                     box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);*/
/*                 }*/
/* */
/*                 #pac-input {*/
/*                     background-color: #fff;*/
/*                     font-family: Roboto;*/
/*                     font-size: 15px;*/
/*                     font-weight: 300;*/
/*                     margin-left: 12px;*/
/*                     padding: 0 11px 0 13px;*/
/*                     text-overflow: ellipsis;*/
/*                     width: 300px;*/
/*                 }*/
/* */
/*                 #pac-input:focus {*/
/*                     border-color: #4d90fe;*/
/*                 }*/
/* */
/*                 .pac-container {*/
/*                     font-family: Roboto;*/
/*                 }*/
/* */
/*                 #type-selector {*/
/*                     color: #fff;*/
/*                     background-color: #4d90fe;*/
/*                     padding: 5px 11px 0px 11px;*/
/*                 }*/
/* */
/*                 #type-selector label {*/
/*                     font-family: Roboto;*/
/*                     font-size: 13px;*/
/*                     font-weight: 300;*/
/*                 }*/
/*                 #target {*/
/*                     width: 345px;*/
/*                 }*/
/*             </style>*/
/*         <input id="pac-input" class="controls" type="text" placeholder="Search Box">*/
/*         <div id="map"></div>*/
/*         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>*/
/*         <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=places"></script>*/
/*         <script type="text/javascript">*/
/*             var map;*/
/*             var myCenter = new google.maps.LatLng(51.508742, -0.120850);*/
/*             var marker;*/
/* */
/*             function initialize()*/
/*             {*/
/*                 var mapProp = {*/
/*                     center: myCenter,*/
/*                     zoom: 5,*/
/*                     mapTypeId: google.maps.MapTypeId.ROADMAP*/
/*                 };*/
/*                 map = new google.maps.Map(document.getElementById("googleMap"), mapProp);*/
/*                 // Create the search box and link it to the UI element.*/
/*                 var input = document.getElementById('pac-input');*/
/*                 var searchBox = new google.maps.places.SearchBox(input);*/
/*                 map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);*/
/*                 var markers = [];*/
/*                 // Bias the SearchBox results towards current map's viewport.*/
/*                 searchBox.addListener('places_changed', function () {*/
/*                     var places = searchBox.getPlaces();*/
/*                     if (places.length == 0) {*/
/*                         return;*/
/*                     }*/
/*                     // Clear out the old markers.*/
/*                     markers.forEach(function (marker) {*/
/*                         marker.setMap(null);*/
/*                     });*/
/*                     markers = [];*/
/* */
/*                     // For each place, get the icon, name and location.*/
/*                     var bounds = new google.maps.LatLngBounds();*/
/*                     places.forEach(function (place) {*/
/*                         var icon = {*/
/*                             url: place.icon,*/
/*                             size: new google.maps.Size(71, 71),*/
/*                             origin: new google.maps.Point(0, 0),*/
/*                             anchor: new google.maps.Point(17, 34),*/
/*                             scaledSize: new google.maps.Size(25, 25)*/
/*                         };*/
/* */
/*                         // Create a marker for each place.*/
/*                         markers.push(new google.maps.Marker({*/
/*                             map: map,*/
/*                             icon: icon,*/
/*                             title: place.name,*/
/*                             position: place.geometry.location*/
/*                         }));*/
/* */
/*                         if (place.geometry.viewport) {*/
/*                             // Only geocodes have viewport.*/
/*                             bounds.union(place.geometry.viewport);*/
/*                         } else {*/
/*                             bounds.extend(place.geometry.location);*/
/*                         }*/
/*                     });*/
/*                     map.fitBounds(bounds);*/
/*                 });*/
/* */
/*                 google.maps.event.addListener(map, 'click', function (event) {*/
/*                     placeMarker(event.latLng);*/
/*                 });*/
/*                 marker = new google.maps.Marker({*/
/*                     position: myCenter,*/
/*                     map: map*/
/*                 });*/
/*                 infowindow = new google.maps.InfoWindow({*/
/*                     content: 'Latitude: ' + marker.getPosition().lat() + '<br>Longitude: ' + marker.getPosition().lng()*/
/*                 });*/
/*                 infowindow.open(map, marker);*/
/*             }*/
/*             var infowindow;*/
/*             function placeMarker(location) {*/
/*                 infowindow.close();*/
/*                 marker.setPosition(location);*/
/*                 $('#ftt_adminbundle_complexe_latitude').val(marker.getPosition().lat());*/
/*                 $('#ftt_adminbundle_complexe_longitude').val(marker.getPosition().lng());*/
/*                 infowindow.setContent('Latitude: ' + marker.getPosition().lat() + '<br>Longitude: ' + marker.getPosition().lng());*/
/*                 infowindow.open(map, marker);*/
/*             }*/
/*             google.maps.event.addDomListener(window, 'load', initialize);*/
/*         </script>*/
/*     </head>*/
/*     <body>*/
/*         <form >*/
/*             {{form_start(Form)}}*/
/*             <table>*/
/*                 <tr>*/
/*                     <td><label>nom complexe: </label></td><td>{{form_widget(Form.nomComplexe)}}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><label>Place: </label></td><td>{{form_widget(Form.place)}}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><label>image complexe: </label></td><td>{{form_widget(Form.imageComplexe)}}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><label>nombre de stade: </label></td><td>{{form_widget(Form.nbStade)}}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><label>latitude: </label></td><td>{{form_widget(Form.latitude)}}<td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><label>langitude: </label></td><td>{{form_widget(Form.longitude)}}</td>*/
/*                 </tr>*/
/* */
/*             </table>*/
/*             {{form_end(Form)}}*/
/*             <div id="googleMap" style="width:950px;height:500px;"></div>*/
/*         </form>*/
/*     </body>*/
/* */
/* </html>*/
/* {% endblock %}*/
/* */
