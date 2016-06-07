<?php

/* FTTAdminBundle:Complexe:consulterlieux.html.twig */
class __TwigTemplate_fc0e2a70191d082ae5bf1fa73b9a210e3e0a3060327725fee67bab4e6718a2c3 extends Twig_Template
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
                var polyCoords = [
                    new google.maps.LatLng(36.874616076114265, 8.657379113137722),
                    new google.maps.LatLng(36.451603901787145, 8.162994347512722),
                    new google.maps.LatLng(36.36318406056867, 8.415679894387722),
                    new google.maps.LatLng(35.68791342430359, 8.294830285012722),
                    new google.maps.LatLng(35.43767382597088, 8.360748253762722),
                    new google.maps.LatLng(35.231536102767855, 8.338775932788849),
                    new google.maps.LatLng(35.19818865252429, 8.465042095631361),
                    new google.maps.LatLng(34.90138751038023, 8.250808697193861),
                    new google.maps.LatLng(34.71646869921633, 8.333206158131361),
                    new google.maps.LatLng(34.39073091788751, 7.855300884693861),
                    new google.maps.LatLng(34.14559190379025, 7.739944523200393),
                    new google.maps.LatLng(34.18195410498276, 7.663040142506361),
                    new google.maps.LatLng(34.050067656330185, 7.531204288825393),
                    new google.maps.LatLng(33.77654695563978, 7.531204205006361),
                    new google.maps.LatLng(33.217690572895194, 7.811355572193861),
                    new google.maps.LatLng(33.075112764574754, 8.146438747644424),
                    new google.maps.LatLng(32.79849813711331, 8.322219997644424),
                    new google.maps.LatLng(32.493225112955514, 8.360672146081924),
                    new google.maps.LatLng(32.065959838299115, 9.074783474206924),
                    new google.maps.LatLng(30.223144856139182, 9.563674740493298),
                    new google.maps.LatLng(30.2821291331932, 9.898834191262722),
                    new google.maps.LatLng(30.811973206286915, 10.305328331887722),
                    new google.maps.LatLng(31.451445523722008, 10.140533410012722),
                    new google.maps.LatLng(31.69480651956349, 10.338287316262722),
                    new google.maps.LatLng(32.19821168095262, 11.129302941262722),
                    new google.maps.LatLng(32.43033264250165, 11.601715218275785),
                    new google.maps.LatLng(32.606346619104905, 11.502838097512722),
                    new google.maps.LatLng(33.17830086012895, 11.568756066262722),
                    new google.maps.LatLng(33.61201421193531, 10.986404400318861),
                    new google.maps.LatLng(33.81306732078469, 11.008377056568861),
                    new google.maps.LatLng(33.87237921962661, 10.755691509693861),
                    new google.maps.LatLng(33.66689355221737, 10.640335064381361),
                    new google.maps.LatLng(33.639458254098955, 10.448074322193861),
                    new google.maps.LatLng(34.03641249663609, 10.041580181568861),
                    new google.maps.LatLng(34.309097421065665, 10.178909283131361),
                    new google.maps.LatLng(34.52660996180197, 10.596389751881361),
                    new google.maps.LatLng(35.21614191224451, 11.162185817956924),
                    new google.maps.LatLng(35.62796956706337, 11.068802028894424),
                    new google.maps.LatLng(36.1264750538991, 10.453567653894424),
                    new google.maps.LatLng(36.39223867979936, 10.618362575769424),
                    new google.maps.LatLng(36.436444653491584, 10.821609646081924),
                    new google.maps.LatLng(36.86832971131663, 11.162185817956924),
                    new google.maps.LatLng(37.078980188364525, 11.035843044519424),
                    new google.maps.LatLng(36.84635341094864, 10.574417263269424),
                    new google.maps.LatLng(36.758385174925834, 10.557937771081924),
                    new google.maps.LatLng(36.705555746828324, 10.393142849206924),
                    new google.maps.LatLng(36.767186545098724, 10.299759060144424),
                    new google.maps.LatLng(37.162201369908466, 10.211868435144424),
                    new google.maps.LatLng(37.31089521676098, 9.871292263269424),
                    new google.maps.LatLng(37.350206248663646, 9.739456158131361),
                    new google.maps.LatLng(37.21471507747293, 9.228591900318861),
                    new google.maps.LatLng(37.105270415727944, 8.98139953322243),
                    new google.maps.LatLng(36.94300174498598, 8.80561828322243),
                    new google.maps.LatLng(36.9342205942148, 8.64631652540993),
                    new google.maps.LatLng(36.874616076114265, 8.657379113137722)];

                var poly = new google.maps.Polygon({
                    paths: polyCoords,
                    strokeColor: \"#FF0000\",
                    strokeOpacity: 0.8,
                    strokeWeight: 2,
                    fillOpacity: 0.35
                });
                poly.setMap(map);


            ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["complexes"]) ? $context["complexes"] : $this->getContext($context, "complexes")));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 87
            echo "

                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "latitude", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "longitude", array()), "html", null, true);
            echo "),
                        animation: google.maps.Animation.BOUNCE


                    });
                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow({
                        content: \"c'est le complexe ";
            // line 97
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
        // line 106
        echo "

                }
                google.maps.event.addDomListener(window, 'load', initialize);


        </script>
    </head>

    <body>



        <div id=\"googleMap\" style=\"width:900px;height:700px;\"></div>

    </body>

</html>




";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:Complexe:consulterlieux.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 106,  126 => 97,  114 => 90,  109 => 87,  105 => 86,  19 => 2,);
    }
}
/* {# empty Twig template #}*/
/* */
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCw6Z2CFBlxvvksTqtg1dV9qI7PbUF3hYs"></script>*/
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
/*                 var polyCoords = [*/
/*                     new google.maps.LatLng(36.874616076114265, 8.657379113137722),*/
/*                     new google.maps.LatLng(36.451603901787145, 8.162994347512722),*/
/*                     new google.maps.LatLng(36.36318406056867, 8.415679894387722),*/
/*                     new google.maps.LatLng(35.68791342430359, 8.294830285012722),*/
/*                     new google.maps.LatLng(35.43767382597088, 8.360748253762722),*/
/*                     new google.maps.LatLng(35.231536102767855, 8.338775932788849),*/
/*                     new google.maps.LatLng(35.19818865252429, 8.465042095631361),*/
/*                     new google.maps.LatLng(34.90138751038023, 8.250808697193861),*/
/*                     new google.maps.LatLng(34.71646869921633, 8.333206158131361),*/
/*                     new google.maps.LatLng(34.39073091788751, 7.855300884693861),*/
/*                     new google.maps.LatLng(34.14559190379025, 7.739944523200393),*/
/*                     new google.maps.LatLng(34.18195410498276, 7.663040142506361),*/
/*                     new google.maps.LatLng(34.050067656330185, 7.531204288825393),*/
/*                     new google.maps.LatLng(33.77654695563978, 7.531204205006361),*/
/*                     new google.maps.LatLng(33.217690572895194, 7.811355572193861),*/
/*                     new google.maps.LatLng(33.075112764574754, 8.146438747644424),*/
/*                     new google.maps.LatLng(32.79849813711331, 8.322219997644424),*/
/*                     new google.maps.LatLng(32.493225112955514, 8.360672146081924),*/
/*                     new google.maps.LatLng(32.065959838299115, 9.074783474206924),*/
/*                     new google.maps.LatLng(30.223144856139182, 9.563674740493298),*/
/*                     new google.maps.LatLng(30.2821291331932, 9.898834191262722),*/
/*                     new google.maps.LatLng(30.811973206286915, 10.305328331887722),*/
/*                     new google.maps.LatLng(31.451445523722008, 10.140533410012722),*/
/*                     new google.maps.LatLng(31.69480651956349, 10.338287316262722),*/
/*                     new google.maps.LatLng(32.19821168095262, 11.129302941262722),*/
/*                     new google.maps.LatLng(32.43033264250165, 11.601715218275785),*/
/*                     new google.maps.LatLng(32.606346619104905, 11.502838097512722),*/
/*                     new google.maps.LatLng(33.17830086012895, 11.568756066262722),*/
/*                     new google.maps.LatLng(33.61201421193531, 10.986404400318861),*/
/*                     new google.maps.LatLng(33.81306732078469, 11.008377056568861),*/
/*                     new google.maps.LatLng(33.87237921962661, 10.755691509693861),*/
/*                     new google.maps.LatLng(33.66689355221737, 10.640335064381361),*/
/*                     new google.maps.LatLng(33.639458254098955, 10.448074322193861),*/
/*                     new google.maps.LatLng(34.03641249663609, 10.041580181568861),*/
/*                     new google.maps.LatLng(34.309097421065665, 10.178909283131361),*/
/*                     new google.maps.LatLng(34.52660996180197, 10.596389751881361),*/
/*                     new google.maps.LatLng(35.21614191224451, 11.162185817956924),*/
/*                     new google.maps.LatLng(35.62796956706337, 11.068802028894424),*/
/*                     new google.maps.LatLng(36.1264750538991, 10.453567653894424),*/
/*                     new google.maps.LatLng(36.39223867979936, 10.618362575769424),*/
/*                     new google.maps.LatLng(36.436444653491584, 10.821609646081924),*/
/*                     new google.maps.LatLng(36.86832971131663, 11.162185817956924),*/
/*                     new google.maps.LatLng(37.078980188364525, 11.035843044519424),*/
/*                     new google.maps.LatLng(36.84635341094864, 10.574417263269424),*/
/*                     new google.maps.LatLng(36.758385174925834, 10.557937771081924),*/
/*                     new google.maps.LatLng(36.705555746828324, 10.393142849206924),*/
/*                     new google.maps.LatLng(36.767186545098724, 10.299759060144424),*/
/*                     new google.maps.LatLng(37.162201369908466, 10.211868435144424),*/
/*                     new google.maps.LatLng(37.31089521676098, 9.871292263269424),*/
/*                     new google.maps.LatLng(37.350206248663646, 9.739456158131361),*/
/*                     new google.maps.LatLng(37.21471507747293, 9.228591900318861),*/
/*                     new google.maps.LatLng(37.105270415727944, 8.98139953322243),*/
/*                     new google.maps.LatLng(36.94300174498598, 8.80561828322243),*/
/*                     new google.maps.LatLng(36.9342205942148, 8.64631652540993),*/
/*                     new google.maps.LatLng(36.874616076114265, 8.657379113137722)];*/
/* */
/*                 var poly = new google.maps.Polygon({*/
/*                     paths: polyCoords,*/
/*                     strokeColor: "#FF0000",*/
/*                     strokeOpacity: 0.8,*/
/*                     strokeWeight: 2,*/
/*                     fillOpacity: 0.35*/
/*                 });*/
/*                 poly.setMap(map);*/
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
/*                         content: "c'est le complexe {{x.nomcomplexe}}"*/
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
/* */
/*         </script>*/
/*     </head>*/
/* */
/*     <body>*/
/* */
/* */
/* */
/*         <div id="googleMap" style="width:900px;height:700px;"></div>*/
/* */
/*     </body>*/
/* */
/* </html>*/
/* */
/* */
/* */
/* */
/* */
