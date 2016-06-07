<?php

/* FTTAdminBundle:Complexe:AjouterComplexe.html.twig */
class __TwigTemplate_a2a2f293b2d96da34018872f9b2f13b75fbe40da7c737b1334306da53bd8bea4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:Complexe:AjouterComplexe.html.twig", 2);
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
        <form style=\"\">
         <h1>Ajout d'un complexe</h1> 
    <div class=\"col-md-8\" style=\"margin-left: 15%;margin-right: 2%;\">
        <form method=\"POST\" action=\"\" onsubmit=\"new PNotify({
                                title: 'Ajout Effectué',
                                text: 'Votre complexe a eté ajouté avec succes!',
                                type: 'success'
                            });\" > 
     ";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'widget');
        echo "
            <div class=\"ln_solid\" style=\"margin-top: 2%\"> </div>
            <div class=\"form-group\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\" style=\"margin-top: 2%\" >
                    <input style=\"margin-left: 90%\" type=\"submit\" value=\"Valider\" class=\"btn btn-flat2 bg-blue-sky\"
                           />
                    </div>
            </div>
        </form>
    </div>

            <div  id=\"googleMap\" style=\"width:900px;height:500px;margin-left: 10%\"></div>
        </form>
    </body>
    
</html>
";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:Complexe:AjouterComplexe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 155,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* {% block bodyAdmin %}*/
/*     <html>*/
/*         <head>*/
/*             <style>*/
/*                */
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
/*         */
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
/*         */
/*     </head>*/
/*     <body>*/
/*         <form style="">*/
/*          <h1>Ajout d'un complexe</h1> */
/*     <div class="col-md-8" style="margin-left: 15%;margin-right: 2%;">*/
/*         <form method="POST" action="" onsubmit="new PNotify({*/
/*                                 title: 'Ajout Effectué',*/
/*                                 text: 'Votre complexe a eté ajouté avec succes!',*/
/*                                 type: 'success'*/
/*                             });" > */
/*      {{form_widget(Form)}}*/
/*             <div class="ln_solid" style="margin-top: 2%"> </div>*/
/*             <div class="form-group">*/
/*                 <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 2%" >*/
/*                     <input style="margin-left: 90%" type="submit" value="Valider" class="btn btn-flat2 bg-blue-sky"*/
/*                            />*/
/*                     </div>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* */
/*             <div  id="googleMap" style="width:900px;height:500px;margin-left: 10%"></div>*/
/*         </form>*/
/*     </body>*/
/*     */
/* </html>*/
/* {% endblock %}*/
