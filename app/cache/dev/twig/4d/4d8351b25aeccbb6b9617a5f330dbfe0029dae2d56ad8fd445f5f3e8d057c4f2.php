<?php

/* FTTUtilisateurBundle:Joueur:listJoueur.html.twig */
class __TwigTemplate_6d3f621376a2790f8f61d4e0e97e14c43893a1a01432c92c30ec25d46245b595 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTUtilisateurBundle::layoutGlobal.html.twig", "FTTUtilisateurBundle:Joueur:listJoueur.html.twig", 1);
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
        echo "


    <style>
        @import url(https://fonts.googleapis.com/css?family=Raleway:400,300,800);
        @import url(http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);

        @import url(https://fonts.googleapis.com/css?family=Oswald);
        @import url(http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
        @import url(https://fonts.googleapis.com/css?family=Quattrocento);
        body{
            background: #303030;
        }

        #pricing-table {
            margin: 100px auto;
            text-align: center;
            width: 892px; /* total computed width = 222 x 3 + 226 */
        }

        #pricing-table .plan {
            font: 12px 'Lucida Sans', 'trebuchet MS', Arial, Helvetica;
            text-shadow: 0 1px rgba(255,255,255,.8);        
            background: #fff;      
            border: 1px solid #ddd;
            color: #333;
            padding: 20px;
            width: 180px; /* plan width = 180 + 20 + 20 + 1 + 1 = 222px */      
            float: left;
            position: relative;
        }

        #pricing-table #most-popular {
            z-index: 2;
            top: -13px;
            border-width: 3px;
            padding: 30px 20px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            -moz-box-shadow: 20px 0 10px -10px rgba(0, 0, 0, .15), -20px 0 10px -10px rgba(0, 0, 0, .15);
            -webkit-box-shadow: 20px 0 10px -10px rgba(0, 0, 0, .15), -20px 0 10px -10px rgba(0, 0, 0, .15);
            box-shadow: 20px 0 10px -10px rgba(0, 0, 0, .15), -20px 0 10px -10px rgba(0, 0, 0, .15);    
        }

        #pricing-table .plan:nth-child(1) {
            -moz-border-radius: 5px 0 0 5px;
            -webkit-border-radius: 5px 0 0 5px;
            border-radius: 5px 0 0 5px;        
        }

        #pricing-table .plan:nth-child(4) {
            -moz-border-radius: 0 5px 5px 0;
            -webkit-border-radius: 0 5px 5px 0;
            border-radius: 0 5px 5px 0;        
        }

        /* --------------- */\t

        #pricing-table h3 {
            font-size: 20px;
            font-weight: normal;
            padding: 20px;
            margin: -20px -20px 50px -20px;
            background-color: #eee;
            background-image: -moz-linear-gradient(#fff,#eee);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#eee));    
            background-image: -webkit-linear-gradient(#fff, #eee);
            background-image: -o-linear-gradient(#fff, #eee);
            background-image: -ms-linear-gradient(#fff, #eee);
            background-image: linear-gradient(#fff, #eee);
        }

        #pricing-table #most-popular h3 {
            background-color: #ddd;
            background-image: -moz-linear-gradient(#eee,#ddd);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#eee), to(#ddd));    
            background-image: -webkit-linear-gradient(#eee, #ddd);
            background-image: -o-linear-gradient(#eee, #ddd);
            background-image: -ms-linear-gradient(#eee, #ddd);
            background-image: linear-gradient(#eee, #ddd);
            margin-top: -30px;
            padding-top: 30px;
            -moz-border-radius: 5px 5px 0 0;
            -webkit-border-radius: 5px 5px 0 0;
            border-radius: 5px 5px 0 0; \t\t
        }

        #pricing-table .plan:nth-child(1) h3 {
            -moz-border-radius: 5px 0 0 0;
            -webkit-border-radius: 5px 0 0 0;
            border-radius: 5px 0 0 0;       
        }

        #pricing-table .plan:nth-child(4) h3 {
            -moz-border-radius: 0 5px 0 0;
            -webkit-border-radius: 0 5px 0 0;
            border-radius: 0 5px 0 0;       
        }\t

        #pricing-table h3 span {
            display: block;
            font: bold 25px/100px Georgia, Serif;
            color: #777;
            background: #fff;
            border: 5px solid #fff;
            height: 100px;
            width: 100px;
            margin: 10px auto -65px;
            -moz-border-radius: 100px;
            -webkit-border-radius: 100px;
            border-radius: 100px;
            -moz-box-shadow: 0 5px 20px #ddd inset, 0 3px 0 #999 inset;
            -webkit-box-shadow: 0 5px 20px #ddd inset, 0 3px 0 #999 inset;
            box-shadow: 0 5px 20px #ddd inset, 0 3px 0 #999 inset;
        }

        /* --------------- */

        #pricing-table ul {
            margin: 20px 0 0 0;
            padding: 0;
            list-style: none;
        }

        #pricing-table li {
            border-top: 1px solid #ddd;
            padding: 10px 0;
        }

        /* --------------- */

        #pricing-table .signup {
            position: relative;
            padding: 8px 20px;
            margin: 20px 0 0 0;  
            color: #fff;
            font: bold 14px Arial, Helvetica;
            text-transform: uppercase;
            text-decoration: none;
            display: inline-block;       
            background-color: #72ce3f;
            background-image: -moz-linear-gradient(#72ce3f, #62bc30);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#72ce3f), to(#62bc30));    
            background-image: -webkit-linear-gradient(#72ce3f, #62bc30);
            background-image: -o-linear-gradient(#72ce3f, #62bc30);
            background-image: -ms-linear-gradient(#72ce3f, #62bc30);
            background-image: linear-gradient(#72ce3f, #62bc30);
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;     
            text-shadow: 0 1px 0 rgba(0,0,0,.3);        
            -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, .5), 0 2px 0 rgba(0, 0, 0, .7);
            -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, .5), 0 2px 0 rgba(0, 0, 0, .7);
            box-shadow: 0 1px 0 rgba(255, 255, 255, .5), 0 2px 0 rgba(0, 0, 0, .7);
        }

        #pricing-table .signup:hover {
            background-color: #62bc30;
            background-image: -moz-linear-gradient(#62bc30, #72ce3f);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#62bc30), to(#72ce3f));      
            background-image: -webkit-linear-gradient(#62bc30, #72ce3f);
            background-image: -o-linear-gradient(#62bc30, #72ce3f);
            background-image: -ms-linear-gradient(#62bc30, #72ce3f);
            background-image: linear-gradient(#62bc30, #72ce3f); 
        }

        #pricing-table .signup:active, #pricing-table .signup:focus {
            background: #62bc30;       
            top: 2px;
            -moz-box-shadow: 0 0 3px rgba(0, 0, 0, .7) inset;
            -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, .7) inset;
            box-shadow: 0 0 3px rgba(0, 0, 0, .7) inset; 
        }

        /* --------------- */

        .clear:before, .clear:after {
            content:\"\";
            display:table
        }

        .clear:after {
            clear:both
        }

        .clear {
            zoom:1
        }


        .snip1376 {
            font-family: 'Quattrocento', Arial, sans-serif;
            position: relative;
            float: left;
            overflow: hidden;
            margin: 10px 1%;
            min-width: 18px;
            max-width: 321px;
            width: 100%;
            color: #141414;
            text-align: left;
            line-height: 1.4em;
            font-size: 16px;
        }
        .snip1376 * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        .snip1376 img {
            max-width: 100%;
            vertical-align: top;
        }
        .snip1376 figcaption {
            width: 100%;
            background-color: #ffffff;
            padding: 15px 25px 65px;
            position: relative;
        }
        .snip1376 figcaption:before {
            position: absolute;
            content: '';
            z-index: 2;
            bottom: 100%;
            left: 0;
            width: 100%;
            height: 80px;
            background-image: -webkit-linear-gradient(top, transparent 0%, #ffffff 100%);
            background-image: linear-gradient(to bottom, transparent 0%, #ffffff 100%);
        }
        .snip1376 h2,
        .snip1376 p {
            margin: 0 0 10px;
        }
        .snip1376 h2 {
            font-weight: 300;
            font-size: 1.5em;
            line-height: 1.2em;
            font-family: 'Oswald', Arial, sans-serif;
            text-transform: uppercase;
        }
        .snip1376 p {
            font-size: 0.9em;
            letter-spacing: 1px;
            opacity: 0.9;
        }
        .snip1376 .icons {
            position: absolute;
            bottom: 0;
            left: 0;
            background-color: #e6e6e6;
            width: 100%;
            text-align: center;
        }
        .snip1376 i {
            padding: 10px 5px;
            display: inline-block;
            font-size: 24px;
            color: #141414;
            opacity: 0.65;
        }
        .snip1376 i:hover {
            opacity: 1;
            -webkit-transition: all 0.35s ease;
            transition: all 0.35s ease;
        }
        /* Demo purposes only */
        body {
            background-color: #212121;
        }


    </style>






    ";
        // line 285
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["joueurs"]) ? $context["joueurs"] : $this->getContext($context, "joueurs")));
        foreach ($context['_seq'] as $context["key"] => $context["joueur"]) {
            // line 286
            echo "

        <div style=\"background-color: #D8D8D8; border: #000 solid thin;width: 300px\" class=\"md-modal md-effect-11\" id=\"modal-";
            // line 288
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "id", array()), "html", null, true);
            echo "-info\">
            <div style=\"padding-left: 0%;width: 300px\" class=\"md-content\">
                <h3><i class=\"fa fa-info-circle\" style=\"color: black\"></i> Informations :</h3>





                <figure class=\"snip1376\">
                    <img  src=\"data:image/png;base64,";
            // line 297
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imagesJoueurs"]) ? $context["imagesJoueurs"] : $this->getContext($context, "imagesJoueurs")), $context["key"], array(), "array"), "html", null, true);
            echo "\" alt=\"\" width=\"800px\" height=\"320px\" style=\"margin-bottom: 10%;max-width: 100%; vertical-align: top\"  />
                    <figcaption>
                        <h2>";
            // line 299
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "nomJoueur", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "prenomJoueur", array()), "html", null, true);
            echo "</h2>
                        <p> Club : ";
            // line 300
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["joueur"], "idClub", array()), "nomClub", array()), "html", null, true);
            echo " </br>
                            Categorie : ";
            // line 301
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "typeJoueur", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "categorieJoueur", array()), "html", null, true);
            echo " </br>
                            Classement national : ";
            // line 302
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "classementNational", array()), "html", null, true);
            echo " </br>
                            Classement international : ";
            // line 303
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "classementInternational", array()), "html", null, true);
            echo " </br>
                            Classement international : ";
            // line 304
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "classementInternational", array()), "html", null, true);
            echo " </br>
                            victoires : ";
            // line 305
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "nbVictoires", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "nbDefaite", array()), "html", null, true);
            echo " Defaites</br>
                        </p>
                        <button class=\"btn btn-primary btn-lg md-close\" >Close me!</button>
                    </figcaption>


                </figure>


            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['joueur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 316
        echo "              






    <div class=\"col-md-12\" >

        <div id=\"pricing-table\" class=\"clear\">
            ";
        // line 326
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["joueurs"]) ? $context["joueurs"] : $this->getContext($context, "joueurs")));
        foreach ($context['_seq'] as $context["key"] => $context["joueur"]) {
            // line 327
            echo "
                <div class=\"plan\" style=\"margin-right: 1.5%;margin-bottom: 2%;margin-top: 2% \">
                    <h3>";
            // line 329
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "nomJoueur", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "prenomJoueur", array()), "html", null, true);
            echo "
                        <span>
                            <img class=\"img-circle\" src=\"data:image/png;base64,";
            // line 331
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imagesJoueurs"]) ? $context["imagesJoueurs"] : $this->getContext($context, "imagesJoueurs")), $context["key"], array(), "array"), "html", null, true);
            echo "\" alt=\"\" width=\"90px\" height=\"90px\" style=\"margin-bottom: 20%\"  />
                        </span></h3>
                            <button class=\"md-trigger btn btn-flat6\" style=\"width: 100%\" data-modal=\"modal-";
            // line 333
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "id", array()), "html", null, true);
            echo "-info\"><i class=\"fa fa-info-circle\"></i> 
                        Information </button>

                    <ul>
                        <li><b></b> </li>                          
                    </ul>    
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['joueur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 340
        echo "   

        </div>
    </div> 

";
    }

    public function getTemplateName()
    {
        return "FTTUtilisateurBundle:Joueur:listJoueur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  431 => 340,  417 => 333,  412 => 331,  405 => 329,  401 => 327,  397 => 326,  385 => 316,  365 => 305,  361 => 304,  357 => 303,  353 => 302,  347 => 301,  343 => 300,  337 => 299,  332 => 297,  320 => 288,  316 => 286,  312 => 285,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "FTTUtilisateurBundle::layoutGlobal.html.twig" %}*/
/* */
/* */
/* */
/* {% block body %}*/
/* */
/* */
/* */
/*     <style>*/
/*         @import url(https://fonts.googleapis.com/css?family=Raleway:400,300,800);*/
/*         @import url(http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);*/
/* */
/*         @import url(https://fonts.googleapis.com/css?family=Oswald);*/
/*         @import url(http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);*/
/*         @import url(https://fonts.googleapis.com/css?family=Quattrocento);*/
/*         body{*/
/*             background: #303030;*/
/*         }*/
/* */
/*         #pricing-table {*/
/*             margin: 100px auto;*/
/*             text-align: center;*/
/*             width: 892px; /* total computed width = 222 x 3 + 226 *//* */
/*         }*/
/* */
/*         #pricing-table .plan {*/
/*             font: 12px 'Lucida Sans', 'trebuchet MS', Arial, Helvetica;*/
/*             text-shadow: 0 1px rgba(255,255,255,.8);        */
/*             background: #fff;      */
/*             border: 1px solid #ddd;*/
/*             color: #333;*/
/*             padding: 20px;*/
/*             width: 180px; /* plan width = 180 + 20 + 20 + 1 + 1 = 222px *//*       */
/*             float: left;*/
/*             position: relative;*/
/*         }*/
/* */
/*         #pricing-table #most-popular {*/
/*             z-index: 2;*/
/*             top: -13px;*/
/*             border-width: 3px;*/
/*             padding: 30px 20px;*/
/*             -moz-border-radius: 5px;*/
/*             -webkit-border-radius: 5px;*/
/*             border-radius: 5px;*/
/*             -moz-box-shadow: 20px 0 10px -10px rgba(0, 0, 0, .15), -20px 0 10px -10px rgba(0, 0, 0, .15);*/
/*             -webkit-box-shadow: 20px 0 10px -10px rgba(0, 0, 0, .15), -20px 0 10px -10px rgba(0, 0, 0, .15);*/
/*             box-shadow: 20px 0 10px -10px rgba(0, 0, 0, .15), -20px 0 10px -10px rgba(0, 0, 0, .15);    */
/*         }*/
/* */
/*         #pricing-table .plan:nth-child(1) {*/
/*             -moz-border-radius: 5px 0 0 5px;*/
/*             -webkit-border-radius: 5px 0 0 5px;*/
/*             border-radius: 5px 0 0 5px;        */
/*         }*/
/* */
/*         #pricing-table .plan:nth-child(4) {*/
/*             -moz-border-radius: 0 5px 5px 0;*/
/*             -webkit-border-radius: 0 5px 5px 0;*/
/*             border-radius: 0 5px 5px 0;        */
/*         }*/
/* */
/*         /* --------------- *//* 	*/
/* */
/*         #pricing-table h3 {*/
/*             font-size: 20px;*/
/*             font-weight: normal;*/
/*             padding: 20px;*/
/*             margin: -20px -20px 50px -20px;*/
/*             background-color: #eee;*/
/*             background-image: -moz-linear-gradient(#fff,#eee);*/
/*             background-image: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#eee));    */
/*             background-image: -webkit-linear-gradient(#fff, #eee);*/
/*             background-image: -o-linear-gradient(#fff, #eee);*/
/*             background-image: -ms-linear-gradient(#fff, #eee);*/
/*             background-image: linear-gradient(#fff, #eee);*/
/*         }*/
/* */
/*         #pricing-table #most-popular h3 {*/
/*             background-color: #ddd;*/
/*             background-image: -moz-linear-gradient(#eee,#ddd);*/
/*             background-image: -webkit-gradient(linear, left top, left bottom, from(#eee), to(#ddd));    */
/*             background-image: -webkit-linear-gradient(#eee, #ddd);*/
/*             background-image: -o-linear-gradient(#eee, #ddd);*/
/*             background-image: -ms-linear-gradient(#eee, #ddd);*/
/*             background-image: linear-gradient(#eee, #ddd);*/
/*             margin-top: -30px;*/
/*             padding-top: 30px;*/
/*             -moz-border-radius: 5px 5px 0 0;*/
/*             -webkit-border-radius: 5px 5px 0 0;*/
/*             border-radius: 5px 5px 0 0; 		*/
/*         }*/
/* */
/*         #pricing-table .plan:nth-child(1) h3 {*/
/*             -moz-border-radius: 5px 0 0 0;*/
/*             -webkit-border-radius: 5px 0 0 0;*/
/*             border-radius: 5px 0 0 0;       */
/*         }*/
/* */
/*         #pricing-table .plan:nth-child(4) h3 {*/
/*             -moz-border-radius: 0 5px 0 0;*/
/*             -webkit-border-radius: 0 5px 0 0;*/
/*             border-radius: 0 5px 0 0;       */
/*         }	*/
/* */
/*         #pricing-table h3 span {*/
/*             display: block;*/
/*             font: bold 25px/100px Georgia, Serif;*/
/*             color: #777;*/
/*             background: #fff;*/
/*             border: 5px solid #fff;*/
/*             height: 100px;*/
/*             width: 100px;*/
/*             margin: 10px auto -65px;*/
/*             -moz-border-radius: 100px;*/
/*             -webkit-border-radius: 100px;*/
/*             border-radius: 100px;*/
/*             -moz-box-shadow: 0 5px 20px #ddd inset, 0 3px 0 #999 inset;*/
/*             -webkit-box-shadow: 0 5px 20px #ddd inset, 0 3px 0 #999 inset;*/
/*             box-shadow: 0 5px 20px #ddd inset, 0 3px 0 #999 inset;*/
/*         }*/
/* */
/*         /* --------------- *//* */
/* */
/*         #pricing-table ul {*/
/*             margin: 20px 0 0 0;*/
/*             padding: 0;*/
/*             list-style: none;*/
/*         }*/
/* */
/*         #pricing-table li {*/
/*             border-top: 1px solid #ddd;*/
/*             padding: 10px 0;*/
/*         }*/
/* */
/*         /* --------------- *//* */
/* */
/*         #pricing-table .signup {*/
/*             position: relative;*/
/*             padding: 8px 20px;*/
/*             margin: 20px 0 0 0;  */
/*             color: #fff;*/
/*             font: bold 14px Arial, Helvetica;*/
/*             text-transform: uppercase;*/
/*             text-decoration: none;*/
/*             display: inline-block;       */
/*             background-color: #72ce3f;*/
/*             background-image: -moz-linear-gradient(#72ce3f, #62bc30);*/
/*             background-image: -webkit-gradient(linear, left top, left bottom, from(#72ce3f), to(#62bc30));    */
/*             background-image: -webkit-linear-gradient(#72ce3f, #62bc30);*/
/*             background-image: -o-linear-gradient(#72ce3f, #62bc30);*/
/*             background-image: -ms-linear-gradient(#72ce3f, #62bc30);*/
/*             background-image: linear-gradient(#72ce3f, #62bc30);*/
/*             -moz-border-radius: 3px;*/
/*             -webkit-border-radius: 3px;*/
/*             border-radius: 3px;     */
/*             text-shadow: 0 1px 0 rgba(0,0,0,.3);        */
/*             -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, .5), 0 2px 0 rgba(0, 0, 0, .7);*/
/*             -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, .5), 0 2px 0 rgba(0, 0, 0, .7);*/
/*             box-shadow: 0 1px 0 rgba(255, 255, 255, .5), 0 2px 0 rgba(0, 0, 0, .7);*/
/*         }*/
/* */
/*         #pricing-table .signup:hover {*/
/*             background-color: #62bc30;*/
/*             background-image: -moz-linear-gradient(#62bc30, #72ce3f);*/
/*             background-image: -webkit-gradient(linear, left top, left bottom, from(#62bc30), to(#72ce3f));      */
/*             background-image: -webkit-linear-gradient(#62bc30, #72ce3f);*/
/*             background-image: -o-linear-gradient(#62bc30, #72ce3f);*/
/*             background-image: -ms-linear-gradient(#62bc30, #72ce3f);*/
/*             background-image: linear-gradient(#62bc30, #72ce3f); */
/*         }*/
/* */
/*         #pricing-table .signup:active, #pricing-table .signup:focus {*/
/*             background: #62bc30;       */
/*             top: 2px;*/
/*             -moz-box-shadow: 0 0 3px rgba(0, 0, 0, .7) inset;*/
/*             -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, .7) inset;*/
/*             box-shadow: 0 0 3px rgba(0, 0, 0, .7) inset; */
/*         }*/
/* */
/*         /* --------------- *//* */
/* */
/*         .clear:before, .clear:after {*/
/*             content:"";*/
/*             display:table*/
/*         }*/
/* */
/*         .clear:after {*/
/*             clear:both*/
/*         }*/
/* */
/*         .clear {*/
/*             zoom:1*/
/*         }*/
/* */
/* */
/*         .snip1376 {*/
/*             font-family: 'Quattrocento', Arial, sans-serif;*/
/*             position: relative;*/
/*             float: left;*/
/*             overflow: hidden;*/
/*             margin: 10px 1%;*/
/*             min-width: 18px;*/
/*             max-width: 321px;*/
/*             width: 100%;*/
/*             color: #141414;*/
/*             text-align: left;*/
/*             line-height: 1.4em;*/
/*             font-size: 16px;*/
/*         }*/
/*         .snip1376 * {*/
/*             -webkit-box-sizing: border-box;*/
/*             box-sizing: border-box;*/
/*         }*/
/*         .snip1376 img {*/
/*             max-width: 100%;*/
/*             vertical-align: top;*/
/*         }*/
/*         .snip1376 figcaption {*/
/*             width: 100%;*/
/*             background-color: #ffffff;*/
/*             padding: 15px 25px 65px;*/
/*             position: relative;*/
/*         }*/
/*         .snip1376 figcaption:before {*/
/*             position: absolute;*/
/*             content: '';*/
/*             z-index: 2;*/
/*             bottom: 100%;*/
/*             left: 0;*/
/*             width: 100%;*/
/*             height: 80px;*/
/*             background-image: -webkit-linear-gradient(top, transparent 0%, #ffffff 100%);*/
/*             background-image: linear-gradient(to bottom, transparent 0%, #ffffff 100%);*/
/*         }*/
/*         .snip1376 h2,*/
/*         .snip1376 p {*/
/*             margin: 0 0 10px;*/
/*         }*/
/*         .snip1376 h2 {*/
/*             font-weight: 300;*/
/*             font-size: 1.5em;*/
/*             line-height: 1.2em;*/
/*             font-family: 'Oswald', Arial, sans-serif;*/
/*             text-transform: uppercase;*/
/*         }*/
/*         .snip1376 p {*/
/*             font-size: 0.9em;*/
/*             letter-spacing: 1px;*/
/*             opacity: 0.9;*/
/*         }*/
/*         .snip1376 .icons {*/
/*             position: absolute;*/
/*             bottom: 0;*/
/*             left: 0;*/
/*             background-color: #e6e6e6;*/
/*             width: 100%;*/
/*             text-align: center;*/
/*         }*/
/*         .snip1376 i {*/
/*             padding: 10px 5px;*/
/*             display: inline-block;*/
/*             font-size: 24px;*/
/*             color: #141414;*/
/*             opacity: 0.65;*/
/*         }*/
/*         .snip1376 i:hover {*/
/*             opacity: 1;*/
/*             -webkit-transition: all 0.35s ease;*/
/*             transition: all 0.35s ease;*/
/*         }*/
/*         /* Demo purposes only *//* */
/*         body {*/
/*             background-color: #212121;*/
/*         }*/
/* */
/* */
/*     </style>*/
/* */
/* */
/* */
/* */
/* */
/* */
/*     {% for key,joueur in joueurs %}*/
/* */
/* */
/*         <div style="background-color: #D8D8D8; border: #000 solid thin;width: 300px" class="md-modal md-effect-11" id="modal-{{joueur.id}}-info">*/
/*             <div style="padding-left: 0%;width: 300px" class="md-content">*/
/*                 <h3><i class="fa fa-info-circle" style="color: black"></i> Informations :</h3>*/
/* */
/* */
/* */
/* */
/* */
/*                 <figure class="snip1376">*/
/*                     <img  src="data:image/png;base64,{{ imagesJoueurs[key] }}" alt="" width="800px" height="320px" style="margin-bottom: 10%;max-width: 100%; vertical-align: top"  />*/
/*                     <figcaption>*/
/*                         <h2>{{joueur.nomJoueur}} {{joueur.prenomJoueur}}</h2>*/
/*                         <p> Club : {{joueur.idClub.nomClub}} </br>*/
/*                             Categorie : {{joueur.typeJoueur}} - {{joueur.categorieJoueur}} </br>*/
/*                             Classement national : {{joueur.classementNational}} </br>*/
/*                             Classement international : {{joueur.classementInternational}} </br>*/
/*                             Classement international : {{joueur.classementInternational}} </br>*/
/*                             victoires : {{joueur.nbVictoires}} - {{joueur.nbDefaite}} Defaites</br>*/
/*                         </p>*/
/*                         <button class="btn btn-primary btn-lg md-close" >Close me!</button>*/
/*                     </figcaption>*/
/* */
/* */
/*                 </figure>*/
/* */
/* */
/*             </div>*/
/*         </div>*/
/*     {% endfor %}              */
/* */
/* */
/* */
/* */
/* */
/* */
/*     <div class="col-md-12" >*/
/* */
/*         <div id="pricing-table" class="clear">*/
/*             {% for key,joueur in joueurs %}*/
/* */
/*                 <div class="plan" style="margin-right: 1.5%;margin-bottom: 2%;margin-top: 2% ">*/
/*                     <h3>{{joueur.nomJoueur}} {{joueur.prenomJoueur}}*/
/*                         <span>*/
/*                             <img class="img-circle" src="data:image/png;base64,{{ imagesJoueurs[key] }}" alt="" width="90px" height="90px" style="margin-bottom: 20%"  />*/
/*                         </span></h3>*/
/*                             <button class="md-trigger btn btn-flat6" style="width: 100%" data-modal="modal-{{joueur.id}}-info"><i class="fa fa-info-circle"></i> */
/*                         Information </button>*/
/* */
/*                     <ul>*/
/*                         <li><b></b> </li>                          */
/*                     </ul>    */
/*                 </div>*/
/*             {% endfor %}   */
/* */
/*         </div>*/
/*     </div> */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
