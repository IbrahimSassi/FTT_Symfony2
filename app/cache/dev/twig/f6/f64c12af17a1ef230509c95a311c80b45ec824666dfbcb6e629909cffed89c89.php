<?php

/* FTTUtilisateurBundle:Club:listClub.html.twig */
class __TwigTemplate_2ad7854d611359d2602daa008d37c4ecae65d5c390d380b18d4774a9e7a5f466 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTUtilisateurBundle::layoutGlobal.html.twig", "FTTUtilisateurBundle:Club:listClub.html.twig", 1);
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

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "


    <style>


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
    
    </style>  

    ";
        // line 269
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clubs"]) ? $context["clubs"] : $this->getContext($context, "clubs")));
        foreach ($context['_seq'] as $context["key"] => $context["club"]) {
            // line 270
            echo "

        <div style=\"background-color: #D8D8D8; border: #000 solid thin;width: 300px\" class=\"md-modal md-effect-11\" id=\"modal-";
            // line 272
            echo twig_escape_filter($this->env, $this->getAttribute($context["club"], "id", array()), "html", null, true);
            echo "-info\">
            <div style=\"padding-left: 0%\" class=\"md-content\">
                <h3><i class=\"fa fa-info-circle\" style=\"color: black\"></i> Informations :</h3>





                <figure class=\"snip1376\">
                    <img  src=\"data:image/png;base64,";
            // line 281
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["LogosClubs"]) ? $context["LogosClubs"] : $this->getContext($context, "LogosClubs")), $context["key"], array(), "array"), "html", null, true);
            echo "\" alt=\"\" width=\"800px\" height=\"320px\" style=\"margin-bottom: 10%;max-width: 100%; vertical-align: top\"  />
                    <figcaption>
                        <h2>";
            // line 283
            echo twig_escape_filter($this->env, $this->getAttribute($context["club"], "nomClub", array()), "html", null, true);
            echo "</h2>
                        <p>Un club de tennis situé à ";
            // line 284
            echo twig_escape_filter($this->env, $this->getAttribute($context["club"], "adresseClub", array()), "html", null, true);
            echo " . Il a été fondé en ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["club"], "dateFondation", array()), "d/m/Y"), "html", null, true);
            echo "</p>

                    </figcaption>

                    <button class=\"btn btn-primary btn-lg md-close\" >Close me!</button>
                </figure>


            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['club'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 294
        echo "              






    <div class=\"col-md-12\" >

        <div id=\"pricing-table\" class=\"clear\">
            ";
        // line 304
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clubs"]) ? $context["clubs"] : $this->getContext($context, "clubs")));
        foreach ($context['_seq'] as $context["key"] => $context["club"]) {
            // line 305
            echo "
                <div class=\"plan\" style=\"margin-right: 1.5%;margin-bottom: 2%;margin-top: 2% \">
                    <h3>";
            // line 307
            echo twig_escape_filter($this->env, $this->getAttribute($context["club"], "nomClub", array()), "html", null, true);
            echo " 
                        <span>
                            <img class=\"img-circle\" src=\"data:image/png;base64,";
            // line 309
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["LogosClubs"]) ? $context["LogosClubs"] : $this->getContext($context, "LogosClubs")), $context["key"], array(), "array"), "html", null, true);
            echo "\" alt=\"\" width=\"90px\" height=\"90px\" style=\"margin-bottom: 20%\"  />
                        </span></h3>
                            <button class=\"md-trigger btn btn-flat6\" style=\"width: 100%\" data-modal=\"modal-";
            // line 311
            echo twig_escape_filter($this->env, $this->getAttribute($context["club"], "id", array()), "html", null, true);
            echo "-info\"><i class=\"fa fa-info-circle\"></i> 
                        Information </button>

                    <ul>
                        <li><b></b> </li>                          
                    </ul>    
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['club'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 318
        echo "   

        </div>
    </div> 

";
    }

    public function getTemplateName()
    {
        return "FTTUtilisateurBundle:Club:listClub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 318,  372 => 311,  367 => 309,  362 => 307,  358 => 305,  354 => 304,  342 => 294,  323 => 284,  319 => 283,  314 => 281,  302 => 272,  298 => 270,  294 => 269,  31 => 8,  28 => 7,  11 => 1,);
    }
}
/* {% extends "FTTUtilisateurBundle::layoutGlobal.html.twig" %}*/
/* */
/* */
/* */
/* */
/* */
/* {% block body %}*/
/* */
/* */
/* */
/*     <style>*/
/* */
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
/*     */
/*     </style>  */
/* */
/*     {% for key,club in clubs %}*/
/* */
/* */
/*         <div style="background-color: #D8D8D8; border: #000 solid thin;width: 300px" class="md-modal md-effect-11" id="modal-{{club.id}}-info">*/
/*             <div style="padding-left: 0%" class="md-content">*/
/*                 <h3><i class="fa fa-info-circle" style="color: black"></i> Informations :</h3>*/
/* */
/* */
/* */
/* */
/* */
/*                 <figure class="snip1376">*/
/*                     <img  src="data:image/png;base64,{{ LogosClubs[key] }}" alt="" width="800px" height="320px" style="margin-bottom: 10%;max-width: 100%; vertical-align: top"  />*/
/*                     <figcaption>*/
/*                         <h2>{{club.nomClub}}</h2>*/
/*                         <p>Un club de tennis situé à {{club.adresseClub}} . Il a été fondé en {{club.dateFondation | date('d/m/Y')}}</p>*/
/* */
/*                     </figcaption>*/
/* */
/*                     <button class="btn btn-primary btn-lg md-close" >Close me!</button>*/
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
/*             {% for key,club in clubs %}*/
/* */
/*                 <div class="plan" style="margin-right: 1.5%;margin-bottom: 2%;margin-top: 2% ">*/
/*                     <h3>{{club.nomClub}} */
/*                         <span>*/
/*                             <img class="img-circle" src="data:image/png;base64,{{ LogosClubs[key] }}" alt="" width="90px" height="90px" style="margin-bottom: 20%"  />*/
/*                         </span></h3>*/
/*                             <button class="md-trigger btn btn-flat6" style="width: 100%" data-modal="modal-{{club.id}}-info"><i class="fa fa-info-circle"></i> */
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
/* */
/* */
