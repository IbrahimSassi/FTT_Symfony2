<?php

/* FTTUtilisateurBundle:Evenement:evenement.html.twig */
class __TwigTemplate_e7fed1e7d33f15654087536aee12420b1ef3e26328e2cfc455f665c673b7d219 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("FTTUtilisateurBundle::layoutGlobal.html.twig", "FTTUtilisateurBundle:Evenement:evenement.html.twig", 3);
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

    <form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("recherche_evenements");
        echo "\"method=\"POST\">
        <div class=\"input-group\">
            <input class=\"form-control\" style=\"width:750px;\" name=\"nomEvenement\" placeholder=\"Titre de l'evenement..\" required=\"required\">
            <!--  <button class=\"btn btn-primary\" type=\"submit\" value=\"rechercher\"> Rechercher</button> -->


            <span class=\"input-group-btn\" style=\"padding-top: -0px;\">

            </span>
        </div>

    </form>

    <li id=\"toggleSlider\" href=\"#\" style=\"padding-left: 608px;\"><u>
            Recherche </u></li> 

    <div class=\"row\">

        <div class=\"slide\"><form action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("recherche_evenements2");
        echo "\"method=\"POST\">
                <div class=\"input-group\">


                    <!-- dhafer -->

                    <div class=\"dateons\">
                        &nbsp;  &nbsp   &nbsp          Du:  &nbsp;  &nbsp                         
                        <input style =\"height: 38px;\"class=\"cal\" name=\"dateDebut|date\" type=date />
                        &nbsp; &nbsp; &nbsp         Au:    &nbsp; &nbsp 
                        <input  style =\"height: 38px;\" class=\"cal\" name=\"dateFin|date\" type=date />

                    </div>
                    <span class=\"input-group-btn\" style=\"padding-right: 125px;letter-spacing: 3px\">
                        <input list=\"typeevents\"class=\"form-control\" style=\"width: 190px;height:45px ;\" name=\"typeEvenement\" placeholder=\"Type de l'evenement..\" required=\"required\">


                        <datalist id=\"typeevents\">
                            <option>national</option>
                            <option>international</option>
                            <option>autre</option>
                        </datalist> </input>
                        &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
                        <button type=\"submit\" value=\"rechercher2\" style =\" background-color: white;
                                color: black;
                                border: 2px solid #4CAF50; /* Green */\"> &nbsp;&nbsp; &nbsp;&nbsp;  <img style=\" width: 30px;height: 30px;\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/ons/ca2.png"), "html", null, true);
        echo "\"  alt=\"Time\" /><br/></button>
                    </span>
                </div>


            </form></div>
    </div>

    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) ? $context["evenements"] : $this->getContext($context, "evenements")));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            echo " 
        <table summary=\"Eric Genuis Performances\" class=\"info\">
            <caption></caption>
            <tr>
                <td>  <div class=\"wrapper\">
                        <a href=\"single-news.html\"><img style=\"width: 100px;height: 100px;border-radius: 10%; \" src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blog/1.jpg"), "html", null, true);
            echo "\" alt=\"\"></a> \t
                    </div></td>

                <td>

                    <ul>
                        <i class=\"fa fa-tag\"></i><a>Titre </a>:";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "nomEvenement", array()), "html", null, true);
            echo "<br/>
                        <i class=\"fa fa-tag\"></i><a >Type </a>: ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "typeEvenement", array()), "html", null, true);
            echo "
                    </ul>
                </td>
                <td>
                    <img style=\"width: 50px;height: 50px;\" src=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/ons/Calendrier.png"), "html", null, true);
            echo "\"  alt=\"Time\" />
                </td>
                <td> Du: ";
            // line 77
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evenement"], "dateDebut", array()), "y/m/d"), "html", null, true);
            echo " <br/> Au: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evenement"], "dateFin", array()), "y/m/d"), "html", null, true);
            echo "
                </td>


            </tr><br />

        </table>  

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "
    <!-- Theme CSS -->


    <script>
        var toggleButton = document.getElementById('toggleSlider'),
                slide = document.querySelector('.slide');

        toggleButton.addEventListener('click', toggleSlider, false);

        function toggleSlider() {
            if (slide.classList.contains('slide-up')) {
                slide.classList.remove('slide-up');
            } else {
                slide.classList.add('slide-up');
            }
        }
    </script>
    <style>
        .row {


            overflow: hidden;
        }

        .slide {

            transition: .5s cubic-bezier(0, 1, 0.5, 1);
            transform: translateY(100%);

        }

        .slide-up {
            transform: translateY(0%);

        } 




        input {

            font-size: 42px;

            font-weight: 100;
            border: #fff;



        }

        .dateons {
        }

        .cal {
            background-color:#fff;

            height: 45px;

        }
        .cal::-webkit-datetime-edit {
            background-color: #f5e79e;
            padding: 10px;
            border-radius: 10%;
            text-transform: uppercase; 


        }

        .cal::-webkit-calendar-picker-indicator {
            background-color: greenyellow;

        }

        .cal::-webkit-inner-spin-button {
            -webkit-appearance: none;

        }

        .cal::-webkit-datetime-edit-fields-wrapper{
            letter-spacing: 1.2px;
        }






        body { margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif; }
        table.info { width: 740px; margin: 0 auto; border-spacing: 0 6px; }
        table.info th, table.info td { padding: 12px; vertical-align: center; color: rgb(68,68,68); }
        table.info caption { background-color: #88C425; font-weight: bold; color: rgb(255,255,255); padding-top: .7em; padding-bottom: .7em; letter-spacing: .085em;}
        table.info th { text-align: left; }
        table.info td { background-color: #fff;height: 150px; }
        .date { display: inline-block; background-color: #398439; color: #fff; padding: 10px; 
                border-radius: 10%; }
        table.info a { color: rgb(3,95,123); text-decoration: underline; }
        table.info a:hover { text-decoration: none; }


        .wrapper {
            position:relative;
            width:100px;
            height:100px;
            transition:1s all;
            transform:scale(1);
        }
        .wrapper:hover {
            transform:scale(2);
        }
        .wrapper > div, .wrapper > canvas {
            position:absolute;
            width:100px;
            height:100px;
            top:0;
            left:0;
            right:0;
            bottom:0;
            background-size:cover;
        }




    </style>                                
";
    }

    public function getTemplateName()
    {
        return "FTTUtilisateurBundle:Evenement:evenement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 86,  130 => 77,  125 => 75,  118 => 71,  114 => 70,  105 => 64,  95 => 59,  84 => 51,  56 => 26,  35 => 8,  31 => 6,  28 => 5,  11 => 3,);
    }
}
/* */
/* */
/* {% extends "FTTUtilisateurBundle::layoutGlobal.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* */
/*     <form action="{{path('recherche_evenements')}}"method="POST">*/
/*         <div class="input-group">*/
/*             <input class="form-control" style="width:750px;" name="nomEvenement" placeholder="Titre de l'evenement.." required="required">*/
/*             <!--  <button class="btn btn-primary" type="submit" value="rechercher"> Rechercher</button> -->*/
/* */
/* */
/*             <span class="input-group-btn" style="padding-top: -0px;">*/
/* */
/*             </span>*/
/*         </div>*/
/* */
/*     </form>*/
/* */
/*     <li id="toggleSlider" href="#" style="padding-left: 608px;"><u>*/
/*             Recherche </u></li> */
/* */
/*     <div class="row">*/
/* */
/*         <div class="slide"><form action="{{path('recherche_evenements2')}}"method="POST">*/
/*                 <div class="input-group">*/
/* */
/* */
/*                     <!-- dhafer -->*/
/* */
/*                     <div class="dateons">*/
/*                         &nbsp;  &nbsp   &nbsp          Du:  &nbsp;  &nbsp                         */
/*                         <input style ="height: 38px;"class="cal" name="dateDebut|date" type=date />*/
/*                         &nbsp; &nbsp; &nbsp         Au:    &nbsp; &nbsp */
/*                         <input  style ="height: 38px;" class="cal" name="dateFin|date" type=date />*/
/* */
/*                     </div>*/
/*                     <span class="input-group-btn" style="padding-right: 125px;letter-spacing: 3px">*/
/*                         <input list="typeevents"class="form-control" style="width: 190px;height:45px ;" name="typeEvenement" placeholder="Type de l'evenement.." required="required">*/
/* */
/* */
/*                         <datalist id="typeevents">*/
/*                             <option>national</option>*/
/*                             <option>international</option>*/
/*                             <option>autre</option>*/
/*                         </datalist> </input>*/
/*                         &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; */
/*                         <button type="submit" value="rechercher2" style =" background-color: white;*/
/*                                 color: black;*/
/*                                 border: 2px solid #4CAF50; /* Green *//* "> &nbsp;&nbsp; &nbsp;&nbsp;  <img style=" width: 30px;height: 30px;" src="{{asset('img/ons/ca2.png')}}"  alt="Time" /><br/></button>*/
/*                     </span>*/
/*                 </div>*/
/* */
/* */
/*             </form></div>*/
/*     </div>*/
/* */
/*     {% for evenement in evenements %} */
/*         <table summary="Eric Genuis Performances" class="info">*/
/*             <caption></caption>*/
/*             <tr>*/
/*                 <td>  <div class="wrapper">*/
/*                         <a href="single-news.html"><img style="width: 100px;height: 100px;border-radius: 10%; " src="{{asset('img/blog/1.jpg')}}" alt=""></a> 	*/
/*                     </div></td>*/
/* */
/*                 <td>*/
/* */
/*                     <ul>*/
/*                         <i class="fa fa-tag"></i><a>Titre </a>:{{evenement.nomEvenement}}<br/>*/
/*                         <i class="fa fa-tag"></i><a >Type </a>: {{evenement.typeEvenement}}*/
/*                     </ul>*/
/*                 </td>*/
/*                 <td>*/
/*                     <img style="width: 50px;height: 50px;" src="{{asset('img/ons/Calendrier.png')}}"  alt="Time" />*/
/*                 </td>*/
/*                 <td> Du: {{evenement.dateDebut | date("y/m/d")}} <br/> Au: {{evenement.dateFin | date("y/m/d")}}*/
/*                 </td>*/
/* */
/* */
/*             </tr><br />*/
/* */
/*         </table>  */
/* */
/*     {% endfor %}*/
/* */
/*     <!-- Theme CSS -->*/
/* */
/* */
/*     <script>*/
/*         var toggleButton = document.getElementById('toggleSlider'),*/
/*                 slide = document.querySelector('.slide');*/
/* */
/*         toggleButton.addEventListener('click', toggleSlider, false);*/
/* */
/*         function toggleSlider() {*/
/*             if (slide.classList.contains('slide-up')) {*/
/*                 slide.classList.remove('slide-up');*/
/*             } else {*/
/*                 slide.classList.add('slide-up');*/
/*             }*/
/*         }*/
/*     </script>*/
/*     <style>*/
/*         .row {*/
/* */
/* */
/*             overflow: hidden;*/
/*         }*/
/* */
/*         .slide {*/
/* */
/*             transition: .5s cubic-bezier(0, 1, 0.5, 1);*/
/*             transform: translateY(100%);*/
/* */
/*         }*/
/* */
/*         .slide-up {*/
/*             transform: translateY(0%);*/
/* */
/*         } */
/* */
/* */
/* */
/* */
/*         input {*/
/* */
/*             font-size: 42px;*/
/* */
/*             font-weight: 100;*/
/*             border: #fff;*/
/* */
/* */
/* */
/*         }*/
/* */
/*         .dateons {*/
/*         }*/
/* */
/*         .cal {*/
/*             background-color:#fff;*/
/* */
/*             height: 45px;*/
/* */
/*         }*/
/*         .cal::-webkit-datetime-edit {*/
/*             background-color: #f5e79e;*/
/*             padding: 10px;*/
/*             border-radius: 10%;*/
/*             text-transform: uppercase; */
/* */
/* */
/*         }*/
/* */
/*         .cal::-webkit-calendar-picker-indicator {*/
/*             background-color: greenyellow;*/
/* */
/*         }*/
/* */
/*         .cal::-webkit-inner-spin-button {*/
/*             -webkit-appearance: none;*/
/* */
/*         }*/
/* */
/*         .cal::-webkit-datetime-edit-fields-wrapper{*/
/*             letter-spacing: 1.2px;*/
/*         }*/
/* */
/* */
/* */
/* */
/* */
/* */
/*         body { margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif; }*/
/*         table.info { width: 740px; margin: 0 auto; border-spacing: 0 6px; }*/
/*         table.info th, table.info td { padding: 12px; vertical-align: center; color: rgb(68,68,68); }*/
/*         table.info caption { background-color: #88C425; font-weight: bold; color: rgb(255,255,255); padding-top: .7em; padding-bottom: .7em; letter-spacing: .085em;}*/
/*         table.info th { text-align: left; }*/
/*         table.info td { background-color: #fff;height: 150px; }*/
/*         .date { display: inline-block; background-color: #398439; color: #fff; padding: 10px; */
/*                 border-radius: 10%; }*/
/*         table.info a { color: rgb(3,95,123); text-decoration: underline; }*/
/*         table.info a:hover { text-decoration: none; }*/
/* */
/* */
/*         .wrapper {*/
/*             position:relative;*/
/*             width:100px;*/
/*             height:100px;*/
/*             transition:1s all;*/
/*             transform:scale(1);*/
/*         }*/
/*         .wrapper:hover {*/
/*             transform:scale(2);*/
/*         }*/
/*         .wrapper > div, .wrapper > canvas {*/
/*             position:absolute;*/
/*             width:100px;*/
/*             height:100px;*/
/*             top:0;*/
/*             left:0;*/
/*             right:0;*/
/*             bottom:0;*/
/*             background-size:cover;*/
/*         }*/
/* */
/* */
/* */
/* */
/*     </style>                                */
/* {% endblock %}*/
/* */
/* */
/* */
