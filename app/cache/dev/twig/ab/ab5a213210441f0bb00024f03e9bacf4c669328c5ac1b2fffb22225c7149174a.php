<?php

/* FTTUtilisateurBundle:Match:MatchDetail.html.twig */
class __TwigTemplate_600fd4c55c2afe0f3548ea0d2dde831c5884b5cb291eeb19d14277f4e3a61eac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTUtilisateurBundle::layoutGlobal.html.twig", "FTTUtilisateurBundle:Match:MatchDetail.html.twig", 1);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $context["pop"] = (isset($context["gtickets"]) ? $context["gtickets"] : $this->getContext($context, "gtickets"));
        echo "    
    ";
        // line 6
        if (((isset($context["pop"]) ? $context["pop"] : $this->getContext($context, "pop")) == "ok")) {
            // line 7
            echo "        <script type=\"text/javascript\">
            alert(\"Votre ticket vous a été envoyé par mail \");
        </script>
    ";
        } elseif ((        // line 10
(isset($context["pop"]) ? $context["pop"] : $this->getContext($context, "pop")) == "nbrticketinsuf")) {
            // line 11
            echo "        <script type=\"text/javascript\">
            alert(\" Le nombre de ticket que vous essayez de voir est indisponible \");
        </script>
    ";
        } elseif ((        // line 14
(isset($context["pop"]) ? $context["pop"] : $this->getContext($context, "pop")) == "zeroTicket")) {
            // line 15
            echo "        <script type=\"text/javascript\">
            alert(\" Veuillez préciser un nombre de ticket correct \");
        </script>
    ";
        } elseif ((        // line 18
(isset($context["pop"]) ? $context["pop"] : $this->getContext($context, "pop")) == "pasArgent")) {
            // line 19
            echo "        <script type=\"text/javascript\">
            alert(\" Votre solde est insuffisant \");
        </script>
    ";
        }
        // line 23
        echo "




    <table style=\"font-family: 'Exo';font-size: 32px;width: 100%;height: 50px;margin-bottom: 5%\" class=\"table-responsive table-striped\">
        <tr>
            <td style=\"border-bottom: #88C425 solid 2px;\">
                <span>Matchs</span> : ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "html", null, true);
        echo "</br>
            </td>
        </tr>
    </table>
    <table style=\"font-family: 'Exo';font-size: 32px;width: 100%;height: 50px;margin-bottom: 5%\" class=\"table-responsive table-striped\">
        <form method=\"POST\" action=\"\">
            <tr>

                <td style=\"border-bottom: #F47920 solid 2px;\">
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idEvenement", array()), 'widget');
        echo "
                </td>
                <td style=\"border-bottom: #00B6F1 solid 2px;width: 40%;;font-family: 'Oswald', sans-serif;\">
                    <input type=\"submit\" value=\"Recherche matchs par evenements\" class=\"btn btn-flat\" style=\"width:100%\">
                </td>
            </tr>
        </form>
    </table>





    <!-- Detail Match popup START-->
    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matchs"]) ? $context["matchs"] : $this->getContext($context, "matchs")));
        foreach ($context['_seq'] as $context["key"] => $context["match"]) {
            // line 55
            echo "
        ";
            // line 56
            $context["PrctVictoirJ1"] = (($this->getAttribute($this->getAttribute($context["match"], "idJoueur1", array()), "nbVictoires", array()) / ($this->getAttribute($this->getAttribute($context["match"], "idJoueur1", array()), "nbVictoires", array()) + $this->getAttribute($this->getAttribute($context["match"], "idJoueur1", array()), "nbDefaite", array()))) * 100);
            // line 57
            echo "        ";
            $context["PrctVictoirJ2"] = (($this->getAttribute($this->getAttribute($context["match"], "idJoueur2", array()), "nbVictoires", array()) / ($this->getAttribute($this->getAttribute($context["match"], "idJoueur2", array()), "nbVictoires", array()) + $this->getAttribute($this->getAttribute($context["match"], "idJoueur2", array()), "nbDefaite", array()))) * 100);
            // line 58
            echo "


        <div style=\"background-color: #D8D8D8; border: #000 solid thin;width: 1000px\" class=\"md-modal md-effect-11\" id=\"modal-";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "id", array()), "html", null, true);
            echo "\">
            <div style=\"padding-left: 0%\" class=\"md-content\">
                <h3><i class=\"fa fa-info-circle\" style=\"color: black\"></i> Informations :</h3>
                <div class=\"col-md-12 col-xs-12 col-lg-12 col-sm-12\" >
                    <div class=\"col-md-2 col-xs-2 col-lg-2 col-sm-2\">
                        <img  style=\"width: 250px; height: 350px;margin-left: -60%\" alt=\"Embedded Image\" src=\"data:image/png;base64,";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imagesjoueurs1"]) ? $context["imagesjoueurs1"] : $this->getContext($context, "imagesjoueurs1")), $context["key"], array(), "array"), "html", null, true);
            echo "\" >
                    </div>
                    <div class=\"col-md-8 col-xs-8 col-lg-8 col-sm-8\">

                        <h5>Date : ";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["match"], "dateMatch", array()), "d/m/Y"), "html", null, true);
            echo "</h5>

                        <h5>Arbitre : ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idArbitre", array()), "nomUser", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idArbitre", array()), "PrenomUser", array()), "html", null, true);
            echo "

                            <h5>Stade : ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idStade", array()), "nomStade", array()), "html", null, true);
            echo " </h5>

                            <h5>Evenement : ";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idEvenement", array()), "nomEvenement", array()), "html", null, true);
            echo " </h5>
                            ";
            // line 77
            $context["var"] = $this->env->getExtension('routing')->getPath("rencontres_directes", array("idJoueur1" => $this->getAttribute($this->getAttribute($context["match"], "idJoueur1", array()), "id", array()), "idJoueur2" => $this->getAttribute($this->getAttribute($context["match"], "idJoueur2", array()), "id", array())));
            echo "                                    
                            <h5>  <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rencontres_directes", array("idJoueur1" => $this->getAttribute($this->getAttribute($context["match"], "idJoueur1", array()), "id", array()), "idJoueur2" => $this->getAttribute($this->getAttribute($context["match"], "idJoueur2", array()), "id", array()))), "html", null, true);
            echo "\">Recontres directes</a>  </h5>
                            <div >
                                <div class=\"col-md-12 col-xs-12 col-lg-12 col-sm-12\" >
                                    <div class=\"col-md-6 col-xs-6 col-lg-6 col-sm-6\">
                                        <span style=\"font-size: small\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur1", array()), "nomJoueur", array()), "html", null, true);
            echo " </span></br>
                                        <span>   ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur1", array()), "prenomJoueur", array()), "html", null, true);
            echo "</span> 
                                        <div class=\"progress\" style=\"border: #000 1%\">
                                            <div class=\"progress-bar progress-bar-striped active progress-bar-success\" role=\"progressbar\" 
                                                 style=\"width:";
            // line 86
            echo twig_escape_filter($this->env, twig_round((isset($context["PrctVictoirJ1"]) ? $context["PrctVictoirJ1"] : $this->getContext($context, "PrctVictoirJ1"))), "html", null, true);
            echo "%\">
                                                ";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur1", array()), "nbVictoires", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_round((isset($context["PrctVictoirJ1"]) ? $context["PrctVictoirJ1"] : $this->getContext($context, "PrctVictoirJ1"))), "html", null, true);
            echo "%)
                                            </div>
                                            <div class=\"progress-bar progress-bar-striped active progress-bar-danger\" role=\"progressbar\" 
                                                 style=\"width: ";
            // line 90
            echo twig_escape_filter($this->env, (100 - twig_round((isset($context["PrctVictoirJ1"]) ? $context["PrctVictoirJ1"] : $this->getContext($context, "PrctVictoirJ1")))), "html", null, true);
            echo "%\">
                                                ";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur1", array()), "nbDefaite", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, (100 - twig_round((isset($context["PrctVictoirJ1"]) ? $context["PrctVictoirJ1"] : $this->getContext($context, "PrctVictoirJ1")))), "html", null, true);
            echo "%)
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col-md-6 col-xs-6 col-lg-6 col-sm-6\">
                                        <span style=\"font-size: small\">";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur2", array()), "nomJoueur", array()), "html", null, true);
            echo " </span></br>
                                        <span>   ";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur2", array()), "prenomJoueur", array()), "html", null, true);
            echo "</span> 
                                        <div class=\"progress\" style=\"border: #000 1%\">
                                            <div class=\"progress-bar progress-bar-success progress-bar-striped active\" role=\"progressbar\" 
                                                 style=\"width:";
            // line 101
            echo twig_escape_filter($this->env, twig_round((isset($context["PrctVictoirJ2"]) ? $context["PrctVictoirJ2"] : $this->getContext($context, "PrctVictoirJ2"))), "html", null, true);
            echo "%\">
                                                ";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur2", array()), "nbVictoires", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_round((isset($context["PrctVictoirJ2"]) ? $context["PrctVictoirJ2"] : $this->getContext($context, "PrctVictoirJ2"))), "html", null, true);
            echo "%)
                                            </div>
                                            <div class=\"progress-bar progress-bar-danger progress-bar-striped active\" role=\"progressbar\" 
                                                 style=\"width:";
            // line 105
            echo twig_escape_filter($this->env, (100 - twig_round((isset($context["PrctVictoirJ2"]) ? $context["PrctVictoirJ2"] : $this->getContext($context, "PrctVictoirJ2")))), "html", null, true);
            echo "%\">
                                                ";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur2", array()), "nbDefaite", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, (100 - twig_round((isset($context["PrctVictoirJ2"]) ? $context["PrctVictoirJ2"] : $this->getContext($context, "PrctVictoirJ2")))), "html", null, true);
            echo "%)
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div style=\"margin-left: 35%\">
                                    <i class=\"fa fa-square\" style=\"color: #4AA44A\"></i> Victoires    
                                    <i class=\"fa fa-square\" style=\"color: #D03F3B\"></i> Defaites 

                                </div>
                            </div>
                            <div style=\"padding-bottom: 8%\">

                                <div class=\"col-md-12\" >
                                    <div class=\"col-md-6\">
                                        <i class=\"fa fa-list-ol\" style=\"color: #000\"></i>
                                        Classement National : ";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur1", array()), "classementNational", array()), "html", null, true);
            echo " <br>
                                        Classement International : ";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur1", array()), "classementInternational", array()), "html", null, true);
            echo "
                                    </div>
                                    <div class=\"col-md-6\">
                                        Classement National : ";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur2", array()), "classementNational", array()), "html", null, true);
            echo " <br>
                                        Classement International : ";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur2", array()), "classementInternational", array()), "html", null, true);
            echo "
                                    </div>
                                </div>
                            </div>

                    </div>
                    <div class=\"col-md-2 col-xs-2 col-lg-2 col-sm-2\">
                        <img   style=\"width: 250px; height: 350px; margin-left: -60%\" alt=\"Embedded Image\" src=\"data:image/png;base64,";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imagesjoueurs2"]) ? $context["imagesjoueurs2"] : $this->getContext($context, "imagesjoueurs2")), $context["key"], array(), "array"), "html", null, true);
            echo "\" >
                    </div>
                </div>

                <button class=\"btn btn-primary btn-lg md-close\" >Close me!</button>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "              
    <!-- Detail Match popup END-->




    <!-- list Match between Players popup START-->

    <!-- list Match between Players popup END-->





    <!-- LIST Match  START-->
    ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matchs"]) ? $context["matchs"] : $this->getContext($context, "matchs")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 158
            echo "        <div class=\"col-md-12 animated fadeInDown\"   >
            <div class=\"well profile_view\"  >
                <div class=\"col-xs-12 bottom text-center\" style=\"background-color: #00B5F1;color: white;border-bottom-left-radius: 1em;border-top-left-radius: 1em\">
                    <strong> <i class=\"fa fa-male\"></i>  
                        ";
            // line 162
            if ((($this->getAttribute($context["match"], "idJoueur3", array()) == null) && ($this->getAttribute($context["match"], "idJoueur4", array()) == null))) {
                // line 163
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur1", array()), "nomJoueur", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur1", array()), "prenomJoueur", array()), "html", null, true);
                echo "
                        ";
            } else {
                // line 165
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur1", array()), "nomJoueur", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur1", array()), "prenomJoueur", array()), "html", null, true);
                echo " & 
                            ";
                // line 166
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur2", array()), "nomJoueur", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur2", array()), "prenomJoueur", array()), "html", null, true);
                echo "
                        ";
            }
            // line 168
            echo "                    </strong>
                </div>
                <div class=\"col-md-5\">
                    <div class=\"text-center\" style=\"padding-top: 2%;padding-bottom: 8%\">
                        ";
            // line 172
            if ((($this->getAttribute($context["match"], "idJoueur3", array()) == null) && ($this->getAttribute($context["match"], "idJoueur4", array()) == null))) {
                // line 173
                echo "                            <img class=\"img-thumbnail\"  style=\"width: 85px; height: 110px;\" alt=\"Embedded Image\" src=\"data:image/png;base64,";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imagesjoueurs1"]) ? $context["imagesjoueurs1"] : $this->getContext($context, "imagesjoueurs1")), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array"), "html", null, true);
                echo "\" >

                        ";
            } else {
                // line 176
                echo "                            <img class=\"img-thumbnail\"  style=\"width: 85px; height: 110px;\" alt=\"Embedded Image\" src=\"data:image/png;base64,";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imagesjoueurs1"]) ? $context["imagesjoueurs1"] : $this->getContext($context, "imagesjoueurs1")), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array"), "html", null, true);
                echo "\" >
                            <img class=\"img-thumbnail\"  style=\"width: 85px; height: 110px;\" alt=\"Embedded Image\" src=\"data:image/png;base64,";
                // line 177
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imagesjoueurs2"]) ? $context["imagesjoueurs2"] : $this->getContext($context, "imagesjoueurs2")), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array"), "html", null, true);
                echo "\" >
                        ";
            }
            // line 179
            echo "
                    </div>
                </div>
                <div class=\"col-md-2\">
                    <div class=\"text-center\" style=\"padding-top: 50%;padding-bottom: 8%\">
                        <img src=\"";
            // line 184
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/vs.jpg"), "html", null, true);
            echo "\" alt=\"Img\" width=\"25px\" height=\"25px\">

                    </div>
                </div>

                <div class=\"col-md-5\">
                    <div class=\"text-center\" style=\"padding-top: 2%;padding-bottom: 8%\">
                        ";
            // line 191
            if ((($this->getAttribute($context["match"], "idJoueur3", array()) == null) && ($this->getAttribute($context["match"], "idJoueur4", array()) == null))) {
                // line 192
                echo "                            <img class=\"img-thumbnail\"  style=\"width: 85px; height: 110px;\" alt=\"Embedded Image\" src=\"data:image/png;base64,";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imagesjoueurs2"]) ? $context["imagesjoueurs2"] : $this->getContext($context, "imagesjoueurs2")), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array"), "html", null, true);
                echo "\" >
                        ";
            } else {
                // line 194
                echo "                            <img class=\"img-thumbnail\"  style=\"width: 85px; height: 110px;\" alt=\"Embedded Image\" src=\"data:image/png;base64,";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imagesjoueurs3"]) ? $context["imagesjoueurs3"] : $this->getContext($context, "imagesjoueurs3")), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array"), "html", null, true);
                echo "\" >
                            <img class=\"img-thumbnail\"  style=\"width: 85px; height: 110px;\" alt=\"Embedded Image\" src=\"data:image/png;base64,";
                // line 195
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imagesjoueurs4"]) ? $context["imagesjoueurs4"] : $this->getContext($context, "imagesjoueurs4")), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array"), "html", null, true);
                echo "\" >
                        ";
            }
            // line 197
            echo "                    </div>
                </div>
                <div class=\"col-xs-12 bottom text-center\" style=\"background-color: #00B5F1;color: white;border-bottom-left-radius: 1em;border-top-left-radius: 1em\">
                    <strong><i class=\"fa fa-male\"></i> 
                        ";
            // line 201
            if ((($this->getAttribute($context["match"], "idJoueur3", array()) == null) && ($this->getAttribute($context["match"], "idJoueur4", array()) == null))) {
                // line 202
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur2", array()), "nomJoueur", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur2", array()), "prenomJoueur", array()), "html", null, true);
                echo "
                        ";
            } else {
                // line 204
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur3", array()), "nomJoueur", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur3", array()), "prenomJoueur", array()), "html", null, true);
                echo " & 
                            ";
                // line 205
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur4", array()), "nomJoueur", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur4", array()), "prenomJoueur", array()), "html", null, true);
                echo "
                        ";
            }
            // line 207
            echo "                    </strong>
                </div>
                <div class=\"col-xs-12 bottom text-center\" style=\"background-color: #F2F5F7;margin-top: 0.2%;margin-bottom: 0.5%;\" >
                    <button class=\"md-trigger btn-flat2\" data-modal=\"modal-";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "id", array()), "html", null, true);
            echo "\"><i class=\"fa fa-info-circle\"></i> 
                        Information </button>

                    <span style=\"margin-left: 15%\">

                        ";
            // line 215
            $context["break"] = 0;
            // line 216
            echo "                        ";
            $context["prix"] =  -1;
            // line 217
            echo "                        ";
            $context["idTicket"] =  -1;
            // line 218
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")));
            foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
                // line 219
                echo "                            ";
                if (((($this->getAttribute($this->getAttribute($context["ticket"], "idMatch", array()), "id", array()) == $this->getAttribute($context["match"], "id", array())) && ($this->getAttribute($context["ticket"], "nbrTicket", array()) > 0)) && (twig_date_format_filter($this->env, "now", "Ymd") < twig_date_format_filter($this->env, $this->getAttribute($context["match"], "dateMatch", array()), "Ymd")))) {
                    // line 220
                    echo "                                ";
                    $context["break"] = 1;
                    // line 221
                    echo "                                ";
                    $context["prix"] = $this->getAttribute($context["ticket"], "prixTicket", array());
                    // line 222
                    echo "                                ";
                    $context["idTicket"] = $this->getAttribute($context["ticket"], "id", array());
                    // line 223
                    echo "                            ";
                }
                // line 224
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "
                        ";
            // line 226
            if (((isset($context["break"]) ? $context["break"] : $this->getContext($context, "break")) == 1)) {
                // line 227
                echo "                            <a id=\"show-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "id", array()), "html", null, true);
                echo "\"
                               style=\"font-size: 2em; color:#00B417;\" 
                               class=\"fa fa-shopping-cart\"
                               aria-hidden=\"true\" ></a>
                        ";
            } else {
                // line 232
                echo "                            <i class=\"fa fa-shopping-cart fa-2x\" style=\"color:red\" aria-hidden=\"true\"></i>
                        ";
            }
            // line 234
            echo "
                    </span>
                    <div id=\"div2-";
            // line 236
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "id", array()), "html", null, true);
            echo "\" style=\"margin-right: 60%\">                                              
                        ";
            // line 237
            if (((isset($context["idTicket"]) ? $context["idTicket"] : $this->getContext($context, "idTicket")) !=  -1)) {
                // line 238
                echo "                            ";
                if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                    // line 239
                    echo "                                <form method=\"POST\" action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consulter_matchs2", array("idTicket" => (isset($context["idTicket"]) ? $context["idTicket"] : $this->getContext($context, "idTicket")))), "html", null, true);
                    echo "\">
                                    <table>
                                        <tr align=\"center\">
                                            <td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nombre de tickets :&nbsp;&nbsp;</td>
                                            <td><br>
                                                <input type=\"number\" name=\"nbrs\" id=\"nbrs\" min=\"0\" max=\"100\" value=\"1\" required=\"required\"> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><br>
                                                <label><input type=\"radio\" name=\"choix-ticket\" id=\"choix-ticket\" value=\"reserver\" required=\"required\"> Reserver</label>
                                            </td>
                                            <td><br>
                                                <label><input type=\"radio\" name=\"choix-ticket\" id=\"choix-ticket\" value=\"acheter\" required=\"required\"> Acheter</label>
                                        </tr>
                                        <tr>

                                        <span style=\"font-size: 200%; color:green;\">   ";
                    // line 256
                    echo twig_escape_filter($this->env, (isset($context["prix"]) ? $context["prix"] : $this->getContext($context, "prix")), "html", null, true);
                    echo "</span>
                                        <i class=\"fa fa-money fa-2x\" style=\"color:green\"></i>
                                        </tr>
                                    </table>

                                    <button class=\"fa fa-check\" style=\"margin-left: 25%;font-size: 2em;\"></button>
                                </form>
                            ";
                } else {
                    // line 264
                    echo "                                <span style=\"font-size: 200%; color:green;\"> Prix du ticket  ";
                    echo twig_escape_filter($this->env, (isset($context["prix"]) ? $context["prix"] : $this->getContext($context, "prix")), "html", null, true);
                    echo "</span>
                                <i class=\"fa fa-money fa-2x\" style=\"color:green\"></i><br>
                                <a href=\"";
                    // line 266
                    echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
                    echo "\"> Veuillez vous connecter pour acheter/reserver votre ticket</a>
                            ";
                }
                // line 268
                echo "                        ";
            }
            // line 269
            echo "
                    </div>                        




                </div>
            </div>
        </div>
        <div class=\"md-overlay\"></div>

    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 281
        echo "    ";
        // line 282
        echo "    <div class=\"navigation\">
        ";
        // line 283
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["matchs"]) ? $context["matchs"] : $this->getContext($context, "matchs")));
        echo "
    </div>

    <!-- list Match  end-->

    <script language=\"javascript\" src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jQuery/jquery-2.2.0.js"), "html", null, true);
        echo "\"></script>
    <script>
            \$(document).ready(
                    function () {
        ";
        // line 292
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matchs"]) ? $context["matchs"] : $this->getContext($context, "matchs")));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 293
            echo "                        \$(\"#div2-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "id", array()), "html", null, true);
            echo "\").hide();
                        \$(\"#show-";
            // line 294
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "id", array()), "html", null, true);
            echo "\").click(
                                function () {
                                    \$(\"#div2-";
            // line 296
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "id", array()), "html", null, true);
            echo "\").slideToggle();
                                });

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 300
        echo "                    });

    </script>







";
    }

    public function getTemplateName()
    {
        return "FTTUtilisateurBundle:Match:MatchDetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  640 => 300,  630 => 296,  625 => 294,  620 => 293,  616 => 292,  609 => 288,  601 => 283,  598 => 282,  596 => 281,  571 => 269,  568 => 268,  563 => 266,  557 => 264,  546 => 256,  525 => 239,  522 => 238,  520 => 237,  516 => 236,  512 => 234,  508 => 232,  499 => 227,  497 => 226,  494 => 225,  488 => 224,  485 => 223,  482 => 222,  479 => 221,  476 => 220,  473 => 219,  468 => 218,  465 => 217,  462 => 216,  460 => 215,  452 => 210,  447 => 207,  440 => 205,  433 => 204,  425 => 202,  423 => 201,  417 => 197,  412 => 195,  407 => 194,  401 => 192,  399 => 191,  389 => 184,  382 => 179,  377 => 177,  372 => 176,  365 => 173,  363 => 172,  357 => 168,  350 => 166,  343 => 165,  335 => 163,  333 => 162,  327 => 158,  310 => 157,  293 => 142,  279 => 135,  269 => 128,  265 => 127,  259 => 124,  255 => 123,  233 => 106,  229 => 105,  221 => 102,  217 => 101,  211 => 98,  207 => 97,  196 => 91,  192 => 90,  184 => 87,  180 => 86,  174 => 83,  170 => 82,  163 => 78,  159 => 77,  155 => 76,  150 => 74,  143 => 72,  138 => 70,  131 => 66,  123 => 61,  118 => 58,  115 => 57,  113 => 56,  110 => 55,  106 => 54,  89 => 40,  77 => 31,  67 => 23,  61 => 19,  59 => 18,  54 => 15,  52 => 14,  47 => 11,  45 => 10,  40 => 7,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FTTUtilisateurBundle::layoutGlobal.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*     {% set pop = gtickets %}    */
/*     {% if pop == 'ok' %}*/
/*         <script type="text/javascript">*/
/*             alert("Votre ticket vous a été envoyé par mail ");*/
/*         </script>*/
/*     {% elseif pop == 'nbrticketinsuf' %}*/
/*         <script type="text/javascript">*/
/*             alert(" Le nombre de ticket que vous essayez de voir est indisponible ");*/
/*         </script>*/
/*     {% elseif pop == 'zeroTicket' %}*/
/*         <script type="text/javascript">*/
/*             alert(" Veuillez préciser un nombre de ticket correct ");*/
/*         </script>*/
/*     {% elseif pop == 'pasArgent' %}*/
/*         <script type="text/javascript">*/
/*             alert(" Votre solde est insuffisant ");*/
/*         </script>*/
/*     {% endif %}*/
/* */
/* */
/* */
/* */
/* */
/*     <table style="font-family: 'Exo';font-size: 32px;width: 100%;height: 50px;margin-bottom: 5%" class="table-responsive table-striped">*/
/*         <tr>*/
/*             <td style="border-bottom: #88C425 solid 2px;">*/
/*                 <span>Matchs</span> : {{evenement}}</br>*/
/*             </td>*/
/*         </tr>*/
/*     </table>*/
/*     <table style="font-family: 'Exo';font-size: 32px;width: 100%;height: 50px;margin-bottom: 5%" class="table-responsive table-striped">*/
/*         <form method="POST" action="">*/
/*             <tr>*/
/* */
/*                 <td style="border-bottom: #F47920 solid 2px;">*/
/*                     {{form_widget(form.idEvenement)}}*/
/*                 </td>*/
/*                 <td style="border-bottom: #00B6F1 solid 2px;width: 40%;;font-family: 'Oswald', sans-serif;">*/
/*                     <input type="submit" value="Recherche matchs par evenements" class="btn btn-flat" style="width:100%">*/
/*                 </td>*/
/*             </tr>*/
/*         </form>*/
/*     </table>*/
/* */
/* */
/* */
/* */
/* */
/*     <!-- Detail Match popup START-->*/
/*     {% for key,match in matchs %}*/
/* */
/*         {% set PrctVictoirJ1 = match.idJoueur1.nbVictoires/(match.idJoueur1.nbVictoires+match.idJoueur1.nbDefaite)*100  %}*/
/*         {% set PrctVictoirJ2 = match.idJoueur2.nbVictoires/(match.idJoueur2.nbVictoires+match.idJoueur2.nbDefaite)*100  %}*/
/* */
/* */
/* */
/*         <div style="background-color: #D8D8D8; border: #000 solid thin;width: 1000px" class="md-modal md-effect-11" id="modal-{{match.id}}">*/
/*             <div style="padding-left: 0%" class="md-content">*/
/*                 <h3><i class="fa fa-info-circle" style="color: black"></i> Informations :</h3>*/
/*                 <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12" >*/
/*                     <div class="col-md-2 col-xs-2 col-lg-2 col-sm-2">*/
/*                         <img  style="width: 250px; height: 350px;margin-left: -60%" alt="Embedded Image" src="data:image/png;base64,{{imagesjoueurs1[key]}}" >*/
/*                     </div>*/
/*                     <div class="col-md-8 col-xs-8 col-lg-8 col-sm-8">*/
/* */
/*                         <h5>Date : {{match.dateMatch | date('d/m/Y')}}</h5>*/
/* */
/*                         <h5>Arbitre : {{match.idArbitre.nomUser}} {{match.idArbitre.PrenomUser}}*/
/* */
/*                             <h5>Stade : {{match.idStade.nomStade}} </h5>*/
/* */
/*                             <h5>Evenement : {{match.idEvenement.nomEvenement}} </h5>*/
/*                             {% set var = path('rencontres_directes', {'idJoueur1':match.idJoueur1.id,'idJoueur2':match.idJoueur2.id}) %}                                    */
/*                             <h5>  <a href="{{path('rencontres_directes', {'idJoueur1':match.idJoueur1.id,'idJoueur2':match.idJoueur2.id})}}">Recontres directes</a>  </h5>*/
/*                             <div >*/
/*                                 <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12" >*/
/*                                     <div class="col-md-6 col-xs-6 col-lg-6 col-sm-6">*/
/*                                         <span style="font-size: small">{{match.idJoueur1.nomJoueur}} </span></br>*/
/*                                         <span>   {{match.idJoueur1.prenomJoueur}}</span> */
/*                                         <div class="progress" style="border: #000 1%">*/
/*                                             <div class="progress-bar progress-bar-striped active progress-bar-success" role="progressbar" */
/*                                                  style="width:{{ PrctVictoirJ1 | round }}%">*/
/*                                                 {{match.idJoueur1.nbVictoires}} ({{ PrctVictoirJ1 | round }}%)*/
/*                                             </div>*/
/*                                             <div class="progress-bar progress-bar-striped active progress-bar-danger" role="progressbar" */
/*                                                  style="width: {{ 100-(PrctVictoirJ1 | round) }}%">*/
/*                                                 {{match.idJoueur1.nbDefaite}} ({{ 100 - (PrctVictoirJ1 | round) }}%)*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <div class="col-md-6 col-xs-6 col-lg-6 col-sm-6">*/
/*                                         <span style="font-size: small">{{match.idJoueur2.nomJoueur}} </span></br>*/
/*                                         <span>   {{match.idJoueur2.prenomJoueur}}</span> */
/*                                         <div class="progress" style="border: #000 1%">*/
/*                                             <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" */
/*                                                  style="width:{{ PrctVictoirJ2 | round }}%">*/
/*                                                 {{match.idJoueur2.nbVictoires}} ({{ PrctVictoirJ2 | round }}%)*/
/*                                             </div>*/
/*                                             <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" */
/*                                                  style="width:{{ 100-(PrctVictoirJ2 | round) }}%">*/
/*                                                 {{match.idJoueur2.nbDefaite}} ({{ 100-(PrctVictoirJ2 | round) }}%)*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 <div style="margin-left: 35%">*/
/*                                     <i class="fa fa-square" style="color: #4AA44A"></i> Victoires    */
/*                                     <i class="fa fa-square" style="color: #D03F3B"></i> Defaites */
/* */
/*                                 </div>*/
/*                             </div>*/
/*                             <div style="padding-bottom: 8%">*/
/* */
/*                                 <div class="col-md-12" >*/
/*                                     <div class="col-md-6">*/
/*                                         <i class="fa fa-list-ol" style="color: #000"></i>*/
/*                                         Classement National : {{match.idJoueur1.classementNational}} <br>*/
/*                                         Classement International : {{match.idJoueur1.classementInternational}}*/
/*                                     </div>*/
/*                                     <div class="col-md-6">*/
/*                                         Classement National : {{match.idJoueur2.classementNational}} <br>*/
/*                                         Classement International : {{match.idJoueur2.classementInternational}}*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                     </div>*/
/*                     <div class="col-md-2 col-xs-2 col-lg-2 col-sm-2">*/
/*                         <img   style="width: 250px; height: 350px; margin-left: -60%" alt="Embedded Image" src="data:image/png;base64,{{imagesjoueurs2[key]}}" >*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <button class="btn btn-primary btn-lg md-close" >Close me!</button>*/
/*             </div>*/
/*         </div>*/
/*     {% endfor %}              */
/*     <!-- Detail Match popup END-->*/
/* */
/* */
/* */
/* */
/*     <!-- list Match between Players popup START-->*/
/* */
/*     <!-- list Match between Players popup END-->*/
/* */
/* */
/* */
/* */
/* */
/*     <!-- LIST Match  START-->*/
/*     {% for match in matchs %}*/
/*         <div class="col-md-12 animated fadeInDown"   >*/
/*             <div class="well profile_view"  >*/
/*                 <div class="col-xs-12 bottom text-center" style="background-color: #00B5F1;color: white;border-bottom-left-radius: 1em;border-top-left-radius: 1em">*/
/*                     <strong> <i class="fa fa-male"></i>  */
/*                         {% if match.idJoueur3 == null and match.idJoueur4 == null  %}*/
/*                             {{match.idJoueur1.nomJoueur}} {{match.idJoueur1.prenomJoueur}}*/
/*                         {% else %}*/
/*                             {{match.idJoueur1.nomJoueur}} {{match.idJoueur1.prenomJoueur}} & */
/*                             {{match.idJoueur2.nomJoueur}} {{match.idJoueur2.prenomJoueur}}*/
/*                         {% endif %}*/
/*                     </strong>*/
/*                 </div>*/
/*                 <div class="col-md-5">*/
/*                     <div class="text-center" style="padding-top: 2%;padding-bottom: 8%">*/
/*                         {% if match.idJoueur3 == null and match.idJoueur4 == null  %}*/
/*                             <img class="img-thumbnail"  style="width: 85px; height: 110px;" alt="Embedded Image" src="data:image/png;base64,{{imagesjoueurs1[loop.index-1]}}" >*/
/* */
/*                         {% else %}*/
/*                             <img class="img-thumbnail"  style="width: 85px; height: 110px;" alt="Embedded Image" src="data:image/png;base64,{{imagesjoueurs1[loop.index-1]}}" >*/
/*                             <img class="img-thumbnail"  style="width: 85px; height: 110px;" alt="Embedded Image" src="data:image/png;base64,{{imagesjoueurs2[loop.index-1]}}" >*/
/*                         {% endif %}*/
/* */
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-2">*/
/*                     <div class="text-center" style="padding-top: 50%;padding-bottom: 8%">*/
/*                         <img src="{{asset('img/vs.jpg')}}" alt="Img" width="25px" height="25px">*/
/* */
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-md-5">*/
/*                     <div class="text-center" style="padding-top: 2%;padding-bottom: 8%">*/
/*                         {% if match.idJoueur3 == null and match.idJoueur4 == null  %}*/
/*                             <img class="img-thumbnail"  style="width: 85px; height: 110px;" alt="Embedded Image" src="data:image/png;base64,{{imagesjoueurs2[loop.index-1]}}" >*/
/*                         {% else %}*/
/*                             <img class="img-thumbnail"  style="width: 85px; height: 110px;" alt="Embedded Image" src="data:image/png;base64,{{imagesjoueurs3[loop.index-1]}}" >*/
/*                             <img class="img-thumbnail"  style="width: 85px; height: 110px;" alt="Embedded Image" src="data:image/png;base64,{{imagesjoueurs4[loop.index-1]}}" >*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-xs-12 bottom text-center" style="background-color: #00B5F1;color: white;border-bottom-left-radius: 1em;border-top-left-radius: 1em">*/
/*                     <strong><i class="fa fa-male"></i> */
/*                         {% if match.idJoueur3 == null and match.idJoueur4 == null  %}*/
/*                             {{match.idJoueur2.nomJoueur}} {{match.idJoueur2.prenomJoueur}}*/
/*                         {% else %}*/
/*                             {{match.idJoueur3.nomJoueur}} {{match.idJoueur3.prenomJoueur}} & */
/*                             {{match.idJoueur4.nomJoueur}} {{match.idJoueur4.prenomJoueur}}*/
/*                         {% endif %}*/
/*                     </strong>*/
/*                 </div>*/
/*                 <div class="col-xs-12 bottom text-center" style="background-color: #F2F5F7;margin-top: 0.2%;margin-bottom: 0.5%;" >*/
/*                     <button class="md-trigger btn-flat2" data-modal="modal-{{match.id}}"><i class="fa fa-info-circle"></i> */
/*                         Information </button>*/
/* */
/*                     <span style="margin-left: 15%">*/
/* */
/*                         {% set break = 0 %}*/
/*                         {% set prix = -1 %}*/
/*                         {% set idTicket = -1 %}*/
/*                         {% for ticket in tickets %}*/
/*                             {% if ticket.idMatch.id == match.id and ticket.nbrTicket > 0 and "now"|date('Ymd')  < match.dateMatch|date('Ymd')%}*/
/*                                 {% set break = 1 %}*/
/*                                 {% set prix = ticket.prixTicket %}*/
/*                                 {% set idTicket = ticket.id %}*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/* */
/*                         {% if break == 1 %}*/
/*                             <a id="show-{{match.id}}"*/
/*                                style="font-size: 2em; color:#00B417;" */
/*                                class="fa fa-shopping-cart"*/
/*                                aria-hidden="true" ></a>*/
/*                         {% else %}*/
/*                             <i class="fa fa-shopping-cart fa-2x" style="color:red" aria-hidden="true"></i>*/
/*                         {% endif %}*/
/* */
/*                     </span>*/
/*                     <div id="div2-{{match.id}}" style="margin-right: 60%">                                              */
/*                         {% if  idTicket != -1 %}*/
/*                             {% if app.user  %}*/
/*                                 <form method="POST" action="{{path('consulter_matchs2',{'idTicket':idTicket})}}">*/
/*                                     <table>*/
/*                                         <tr align="center">*/
/*                                             <td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nombre de tickets :&nbsp;&nbsp;</td>*/
/*                                             <td><br>*/
/*                                                 <input type="number" name="nbrs" id="nbrs" min="0" max="100" value="1" required="required"> */
/*                                             </td>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <td><br>*/
/*                                                 <label><input type="radio" name="choix-ticket" id="choix-ticket" value="reserver" required="required"> Reserver</label>*/
/*                                             </td>*/
/*                                             <td><br>*/
/*                                                 <label><input type="radio" name="choix-ticket" id="choix-ticket" value="acheter" required="required"> Acheter</label>*/
/*                                         </tr>*/
/*                                         <tr>*/
/* */
/*                                         <span style="font-size: 200%; color:green;">   {{ prix }}</span>*/
/*                                         <i class="fa fa-money fa-2x" style="color:green"></i>*/
/*                                         </tr>*/
/*                                     </table>*/
/* */
/*                                     <button class="fa fa-check" style="margin-left: 25%;font-size: 2em;"></button>*/
/*                                 </form>*/
/*                             {% else %}*/
/*                                 <span style="font-size: 200%; color:green;"> Prix du ticket  {{ prix }}</span>*/
/*                                 <i class="fa fa-money fa-2x" style="color:green"></i><br>*/
/*                                 <a href="{{path('fos_user_security_login')}}"> Veuillez vous connecter pour acheter/reserver votre ticket</a>*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/* */
/*                     </div>                        */
/* */
/* */
/* */
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="md-overlay"></div>*/
/* */
/*     {% endfor %}*/
/*     {# display navigation #}*/
/*     <div class="navigation">*/
/*         {{ knp_pagination_render(matchs) }}*/
/*     </div>*/
/* */
/*     <!-- list Match  end-->*/
/* */
/*     <script language="javascript" src="{{asset('js/jQuery/jquery-2.2.0.js')}}"></script>*/
/*     <script>*/
/*             $(document).ready(*/
/*                     function () {*/
/*         {% for match in matchs %}*/
/*                         $("#div2-{{match.id}}").hide();*/
/*                         $("#show-{{match.id}}").click(*/
/*                                 function () {*/
/*                                     $("#div2-{{match.id}}").slideToggle();*/
/*                                 });*/
/* */
/*         {% endfor %}*/
/*                     });*/
/* */
/*     </script>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
