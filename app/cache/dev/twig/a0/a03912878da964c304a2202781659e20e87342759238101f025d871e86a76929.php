<?php

/* FTTUtilisateurBundle:Stade:Informationstade.html.twig */
class __TwigTemplate_7bdf90bcb0a64ec83634e35e151bf9facc502b689905d968499b6e555c9f93ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTUtilisateurBundle::layoutGlobal.html.twig", "FTTUtilisateurBundle:Stade:Informationstade.html.twig", 1);
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
        // line 114
        echo $this->env->getExtension('routing')->getPath("recherche_stade", array("lettre" => "A"));
        echo "\">A</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_stade", array("lettre" => "B"));
        echo "\">B</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_stade", array("lettre" => "C"));
        echo "\">C</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_stade", array("lettre" => "D"));
        echo "\">D</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_stade", array("lettre" => "E"));
        echo "\">E</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_stade", array("lettre" => "F"));
        echo "\">F</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_stade", array("lettre" => "G"));
        echo "\">G</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_stade", array("lettre" => "H"));
        echo "\">H</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_stade", array("lettre" => "I"));
        echo "\">I</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_stade", array("lettre" => "J"));
        echo "\">J</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_stade", array("lettre" => "K"));
        echo "\">K</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_stade", array("lettre" => "L"));
        echo "\">L</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_stade", array("lettre" => "M"));
        echo "\">M</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_stade", array("lettre" => "N"));
        echo "\">N</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_stade", array("lettre" => "O"));
        echo "\">O</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_stade", array("lettre" => "P"));
        echo "\">P</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_stade", array("lettre" => "Q"));
        echo "\">Q</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_stade", array("lettre" => "R"));
        echo "\">R</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_stade", array("lettre" => "S"));
        echo "\">S</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_stade", array("lettre" => "T"));
        echo "\">T</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_stade", array("lettre" => "U"));
        echo "\">U</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_stade", array("lettre" => "V"));
        echo "\">V</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_stade", array("lettre" => "W"));
        echo "\">W</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_stade", array("lettre" => "X"));
        echo "\">X</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_stade", array("lettre" => "Y"));
        echo "\">Y</a></li><li id=\"lettre\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_stade", array("lettre" => "Z"));
        echo "\">Z</a></li></ul></h3></div></div> 


    <div class=\"row\">
        ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stades"]) ? $context["stades"] : $this->getContext($context, "stades")));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 119
            echo "            <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12\">

                <div class=\"testimonial-content\">


                    <h2>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "nomStade", array()), "html", null, true);
            echo "</h2>
                    <p>Le stade ";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "nomStade", array()), "html", null, true);
            echo " est un stade  qui se situe à la complexe ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "idComplexe", array()), "html", null, true);
            echo " et sa capacitè ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "capacite", array()), "html", null, true);
            echo " places</p>


                </div>
            </div>



        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "
    </div>
    ";
        // line 137
        echo "    <!--<div class=\"navigation\">
    ";
        // line 139
        echo " </div>-->




";
    }

    public function getTemplateName()
    {
        return "FTTUtilisateurBundle:Stade:Informationstade.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 139,  236 => 137,  232 => 134,  213 => 125,  209 => 124,  202 => 119,  198 => 118,  141 => 114,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "FTTUtilisateurBundle::layoutGlobal.html.twig" %}*/
/* */
/* */
/* */
/* {% block body %}*/
/*     <style>*/
/* */
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
/*                                                                             {{path('recherche_stade',{'lettre':'A'})}}">A</a></li><li id="lettre"><a href="{{path('recherche_stade',{'lettre':'B'})}}">B</a></li><li id="lettre"><a href="{{path('recherche_stade',{'lettre':'C'})}}">C</a></li><li id="lettre"><a href="{{path('recherche_stade',{'lettre':'D'})}}">D</a></li><li id="lettre"><a href="{{path('recherche_stade',{'lettre':'E'})}}">E</a></li><li id="lettre"><a href="{{path('recherche_stade',{'lettre':'F'})}}">F</a></li><li id="lettre"><a href="{{path('recherche_stade',{'lettre':'G'})}}">G</a></li><li id="lettre"><a href="{{path('recherche_stade',{'lettre':'H'})}}">H</a></li><li id="lettre"><a href="{{path('recherche_stade',{'lettre':'I'})}}">I</a></li><li id="lettre"><a href="{{path('recherche_stade',{'lettre':'J'})}}">J</a></li><li id="lettre"><a href="{{path('recherche_stade',{'lettre':'K'})}}">K</a></li><li id="lettre"><a href="{{path('recherche_stade',{'lettre':'L'})}}">L</a></li><li id="lettre"><a href="{{path('recherche_stade',{'lettre':'M'})}}">M</a></li><li id="lettre"><a href="{{path('recherche_stade',{'lettre':'N'})}}">N</a></li><li id="lettre"><a href="{{path('recherche_stade',{'lettre':'O'})}}">O</a></li><li id="lettre"><a href="{{path('recherche_stade',{'lettre':'P'})}}">P</a></li><li id="lettre"><a href="{{path('recherche_stade',{'lettre':'Q'})}}">Q</a></li><li id="lettre"><a href="{{path('recherche_stade',{'lettre':'R'})}}">R</a></li><li id="lettre"><a href="{{path('recherche_stade',{'lettre':'S'})}}">S</a></li><li id="lettre"><a href="{{path('recherche_stade',{'lettre':'T'})}}">T</a></li><li id="lettre"><a href="{{path('recherche_stade',{'lettre':'U'})}}">U</a></li><li id="lettre"><a href="{{path('recherche_stade',{'lettre':'V'})}}">V</a></li><li id="lettre"><a href="{{path('recherche_stade',{'lettre':'W'})}}">W</a></li><li id="lettre"><a href="{{path('recherche_stade',{'lettre':'X'})}}">X</a></li><li id="lettre"><a href="{{path('recherche_stade',{'lettre':'Y'})}}">Y</a></li><li id="lettre"><a href="{{path('recherche_stade',{'lettre':'Z'})}}">Z</a></li></ul></h3></div></div> */
/* */
/* */
/*     <div class="row">*/
/*         {% for x in stades %}*/
/*             <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">*/
/* */
/*                 <div class="testimonial-content">*/
/* */
/* */
/*                     <h2>{{x.nomStade}}</h2>*/
/*                     <p>Le stade {{x.nomStade}} est un stade  qui se situe à la complexe {{x.idComplexe}} et sa capacitè {{x.capacite}} places</p>*/
/* */
/* */
/*                 </div>*/
/*             </div>*/
/* */
/* */
/* */
/*         {% endfor %}*/
/* */
/*     </div>*/
/*     {# display navigation #}*/
/*     <!--<div class="navigation">*/
/*     {#  {{ knp_pagination_render(stades) }}#}*/
/*  </div>-->*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
