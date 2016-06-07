<?php

/* FTTUtilisateurBundle:Communication:RegarderMatch.html.twig */
class __TwigTemplate_0f66e78718c000339acd459b5500b99b2c0051f0d7b4045854138db90eea0c52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTUtilisateurBundle::layoutGlobal.html.twig", "FTTUtilisateurBundle:Communication:RegarderMatch.html.twig", 1);
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
        echo "                    <div class=\"col-md-12\">
                        <h2> Match en direct :</h2>
                    </div>
                    


                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liens"]) ? $context["liens"] : $this->getContext($context, "liens")));
        foreach ($context['_seq'] as $context["_key"] => $context["lien"]) {
            // line 13
            echo "                        <div style=\"background-color: #D8D8D8; border: #000 solid thin;\" class=\"md-modal md-effect-12\" id=\"modal-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lien"], "idMatch", array()), "id", array()), "html", null, true);
            echo "\">
                            <div style=\"padding-left: 0%\" class=\"md-content\">
                                <h3> ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["lien"], "idMatch", array()), "idJoueur1", array()), "NomJoueur", array()), "html", null, true);
            echo " vs ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["lien"], "idMatch", array()), "idJoueur2", array()), "NomJoueur", array()), "html", null, true);
            echo "</h3>
                                     <div>";
            // line 16
            echo $this->getAttribute($context["lien"], "LienDIntegration", array());
            echo "</div>
                                        <button class=\"btn btn-primary btn-lg md-close\" >Close me!</button>
                            </div>
                        </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matchs"]) ? $context["matchs"] : $this->getContext($context, "matchs")));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 23
            echo "                    
                    ";
            // line 24
            $context["PrctVictoirJ1"] = (($this->getAttribute($this->getAttribute($context["match"], "idJoueur1", array()), "nbVictoires", array()) / ($this->getAttribute($this->getAttribute($context["match"], "idJoueur1", array()), "nbVictoires", array()) + $this->getAttribute($this->getAttribute($context["match"], "idJoueur1", array()), "nbDefaite", array()))) * 100);
            // line 25
            echo "                    ";
            $context["PrctVictoirJ2"] = (($this->getAttribute($this->getAttribute($context["match"], "idJoueur2", array()), "nbVictoires", array()) / ($this->getAttribute($this->getAttribute($context["match"], "idJoueur2", array()), "nbVictoires", array()) + $this->getAttribute($this->getAttribute($context["match"], "idJoueur2", array()), "nbDefaite", array()))) * 100);
            // line 26
            echo "                    
                    
                    
                        <div style=\"background-color: #D8D8D8; border: #000 solid thin;width: 800px\" class=\"md-modal md-effect-11\" id=\"modal-";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "id", array()), "html", null, true);
            echo "-info\">
                            <div style=\"padding-left: 0%\" class=\"md-content\">
                                <h3><i class=\"fa fa-info-circle\" style=\"color: black\"></i> Informations :</h3>
                                <div class=\"col-md-12 col-xs-12 col-lg-12 col-sm-12\" style=\"color: #014444\">
                                    <h5><i class=\"fa fa-calendar\"></i>
                                        Arbitre : ";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["match"], "dateMatch", array()), "d/m/Y"), "html", null, true);
            echo "</h5>
                                    <h5><i class=\"fa fa-user\"></i>
                                        Arbitre : ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idArbitre", array()), "nomUser", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idArbitre", array()), "PrenomUser", array()), "html", null, true);
            echo "</li>
                                    <h5><i class=\"fa fa-map-marker\"></i>
                                        Stade : ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idStade", array()), "nomStade", array()), "html", null, true);
            echo " </h5>
                                    <h5><i class=\"fa fa-calendar-o\"></i>
                                        Evenement : ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idEvenement", array()), "nomEvenement", array()), "html", null, true);
            echo " </h5>
                                    <div >
                                        <div class=\"col-md-12 col-xs-12 col-lg-12 col-sm-12\" >
                                            <div class=\"col-md-6 col-xs-6 col-lg-6 col-sm-6\">
                                                ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur1", array()), "nomJoueur", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur1", array()), "prenomJoueur", array()), "html", null, true);
            echo " 
                                                <div class=\"progress\" style=\"border: #000 1%\">
                                                      <div class=\"progress-bar progress-bar-striped active progress-bar-success\" role=\"progressbar\" 
                                                           style=\"width:";
            // line 47
            echo twig_escape_filter($this->env, twig_round((isset($context["PrctVictoirJ1"]) ? $context["PrctVictoirJ1"] : $this->getContext($context, "PrctVictoirJ1"))), "html", null, true);
            echo "%\">
                                                          ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur1", array()), "nbVictoires", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_round((isset($context["PrctVictoirJ1"]) ? $context["PrctVictoirJ1"] : $this->getContext($context, "PrctVictoirJ1"))), "html", null, true);
            echo "%)
                                                      </div>
                                                      <div class=\"progress-bar progress-bar-striped active progress-bar-danger\" role=\"progressbar\" 
                                                            style=\"width: ";
            // line 51
            echo twig_escape_filter($this->env, (100 - twig_round((isset($context["PrctVictoirJ1"]) ? $context["PrctVictoirJ1"] : $this->getContext($context, "PrctVictoirJ1")))), "html", null, true);
            echo "%\">
                                                          ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur1", array()), "nbDefaite", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, (100 - twig_round((isset($context["PrctVictoirJ1"]) ? $context["PrctVictoirJ1"] : $this->getContext($context, "PrctVictoirJ1")))), "html", null, true);
            echo "%)
                                                      </div>
                                                    </div>
                                            </div>
                                                      
                                            <div class=\"col-md-6 col-xs-6 col-lg-6 col-sm-6\">
                                                ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur2", array()), "nomJoueur", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur2", array()), "prenomJoueur", array()), "html", null, true);
            echo " 
                                                    <div class=\"progress\" style=\"border: #000 1%\">
                                                      <div class=\"progress-bar progress-bar-success progress-bar-striped active\" role=\"progressbar\" 
                                                           style=\"width:";
            // line 61
            echo twig_escape_filter($this->env, twig_round((isset($context["PrctVictoirJ2"]) ? $context["PrctVictoirJ2"] : $this->getContext($context, "PrctVictoirJ2"))), "html", null, true);
            echo "%\">
                                                         ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur2", array()), "nbVictoires", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_round((isset($context["PrctVictoirJ2"]) ? $context["PrctVictoirJ2"] : $this->getContext($context, "PrctVictoirJ2"))), "html", null, true);
            echo "%)
                                                      </div>
                                                      <div class=\"progress-bar progress-bar-danger progress-bar-striped active\" role=\"progressbar\" 
                                                           style=\"width:";
            // line 65
            echo twig_escape_filter($this->env, (100 - twig_round((isset($context["PrctVictoirJ2"]) ? $context["PrctVictoirJ2"] : $this->getContext($context, "PrctVictoirJ2")))), "html", null, true);
            echo "%\">
                                                        ";
            // line 66
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
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur1", array()), "classementNational", array()), "html", null, true);
            echo " <br>
                                                Classement International : ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur1", array()), "classementInternational", array()), "html", null, true);
            echo "
                                            </div>
                                            <div class=\"col-md-6\">
                                                Classement National : ";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur2", array()), "classementNational", array()), "html", null, true);
            echo " <br>
                                                Classement International : ";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur2", array()), "classementInternational", array()), "html", null, true);
            echo "
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                            
                                <button class=\"btn btn-primary btn-lg md-close\" >Close me!</button>
                            </div>
                                            
                                            
                              
                                            
                                            
                                            
                                            
                                            
                        </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "              

                ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matchs"]) ? $context["matchs"] : $this->getContext($context, "matchs")));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 109
            echo "                    <div class=\"col-md-12 animated fadeInDown\" style=\"padding-bottom: 2%\"   >
                        <div class=\"well profile_view\" style=\"font-size: 16px;color: #044\" >
                        <div class=\"col-xs-12 bottom text-center\" style=\"background-color: #00B5F1;color: white;border-bottom-left-radius: 1em;border-top-left-radius: 1em\" >
                           <strong> <i class=\"fa fa-male\"></i> 
                                ";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur1", array()), "nomJoueur", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur1", array()), "prenomJoueur", array()), "html", null, true);
            echo "</strong>
                        </div>
                        <div style=\"padding-bottom: 5.4%;padding-top: 5%\">
                             <img src=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/vs.jpg"), "html", null, true);
            echo "\" alt=\"Img\" width=\"30px\" height=\"30px\" style=\"margin-left: 47%\">
                        </div>
                        <div class=\"col-xs-12 bottom text-center\" style=\"margin-bottom: 3%;background-color: #00B5F1;color: white;border-bottom-left-radius: 1em;border-top-left-radius: 1em\">
                            <strong><i class=\"fa fa-male\"></i> 
                                    ";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur2", array()), "nomJoueur", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idJoueur2", array()), "prenomJoueur", array()), "html", null, true);
            echo "</strong>
                        </div>
                        <div class=\"col-xs-12 bottom text-center\" style=\"background-color: #F2F5F7\">
                            <button class=\"md-trigger btn-flat3 \" data-modal=\"modal-";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "id", array()), "html", null, true);
            echo "\"  >
                                <i class=\"fa fa-youtube-play\"></i>
                                Regarder match en streaming</button>
                            <button  class=\"md-trigger btn-flat2 \" data-modal=\"modal-";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "id", array()), "html", null, true);
            echo "-info\"  >
                               <i class=\"fa fa-info-circle\" ></i>
                                Info</button>
                        </div>
                      </div>
                    </div>
                            <div class=\"md-overlay\"></div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                                    
                                    
                                    
                                              



            



            
            
            
                ";
    }

    public function getTemplateName()
    {
        return "FTTUtilisateurBundle:Communication:RegarderMatch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 134,  281 => 126,  275 => 123,  267 => 120,  260 => 116,  252 => 113,  246 => 109,  242 => 108,  238 => 106,  213 => 88,  209 => 87,  203 => 84,  199 => 83,  177 => 66,  173 => 65,  165 => 62,  161 => 61,  153 => 58,  142 => 52,  138 => 51,  130 => 48,  126 => 47,  118 => 44,  111 => 40,  106 => 38,  99 => 36,  94 => 34,  86 => 29,  81 => 26,  78 => 25,  76 => 24,  73 => 23,  69 => 22,  66 => 21,  55 => 16,  49 => 15,  43 => 13,  39 => 12,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "FTTUtilisateurBundle::layoutGlobal.html.twig" %}*/
/* */
/* */
/* */
/* {% block body %}*/
/*                     <div class="col-md-12">*/
/*                         <h2> Match en direct :</h2>*/
/*                     </div>*/
/*                     */
/* */
/* */
/*                 {% for lien in liens %}*/
/*                         <div style="background-color: #D8D8D8; border: #000 solid thin;" class="md-modal md-effect-12" id="modal-{{lien.idMatch.id}}">*/
/*                             <div style="padding-left: 0%" class="md-content">*/
/*                                 <h3> {{lien.idMatch.idJoueur1.NomJoueur}} vs {{lien.idMatch.idJoueur2.NomJoueur}}</h3>*/
/*                                      <div>{{lien.LienDIntegration | raw}}</div>*/
/*                                         <button class="btn btn-primary btn-lg md-close" >Close me!</button>*/
/*                             </div>*/
/*                         </div>*/
/*                 {% endfor %}*/
/*                 */
/*                 {% for match in matchs %}*/
/*                     */
/*                     {% set PrctVictoirJ1 = match.idJoueur1.nbVictoires/(match.idJoueur1.nbVictoires+match.idJoueur1.nbDefaite)*100  %}*/
/*                     {% set PrctVictoirJ2 = match.idJoueur2.nbVictoires/(match.idJoueur2.nbVictoires+match.idJoueur2.nbDefaite)*100  %}*/
/*                     */
/*                     */
/*                     */
/*                         <div style="background-color: #D8D8D8; border: #000 solid thin;width: 800px" class="md-modal md-effect-11" id="modal-{{match.id}}-info">*/
/*                             <div style="padding-left: 0%" class="md-content">*/
/*                                 <h3><i class="fa fa-info-circle" style="color: black"></i> Informations :</h3>*/
/*                                 <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12" style="color: #014444">*/
/*                                     <h5><i class="fa fa-calendar"></i>*/
/*                                         Arbitre : {{match.dateMatch | date('d/m/Y')}}</h5>*/
/*                                     <h5><i class="fa fa-user"></i>*/
/*                                         Arbitre : {{match.idArbitre.nomUser}} {{match.idArbitre.PrenomUser}}</li>*/
/*                                     <h5><i class="fa fa-map-marker"></i>*/
/*                                         Stade : {{match.idStade.nomStade}} </h5>*/
/*                                     <h5><i class="fa fa-calendar-o"></i>*/
/*                                         Evenement : {{match.idEvenement.nomEvenement}} </h5>*/
/*                                     <div >*/
/*                                         <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12" >*/
/*                                             <div class="col-md-6 col-xs-6 col-lg-6 col-sm-6">*/
/*                                                 {{match.idJoueur1.nomJoueur}} {{match.idJoueur1.prenomJoueur}} */
/*                                                 <div class="progress" style="border: #000 1%">*/
/*                                                       <div class="progress-bar progress-bar-striped active progress-bar-success" role="progressbar" */
/*                                                            style="width:{{ PrctVictoirJ1 | round }}%">*/
/*                                                           {{match.idJoueur1.nbVictoires}} ({{ PrctVictoirJ1 | round }}%)*/
/*                                                       </div>*/
/*                                                       <div class="progress-bar progress-bar-striped active progress-bar-danger" role="progressbar" */
/*                                                             style="width: {{ 100-(PrctVictoirJ1 | round) }}%">*/
/*                                                           {{match.idJoueur1.nbDefaite}} ({{ 100 - (PrctVictoirJ1 | round) }}%)*/
/*                                                       </div>*/
/*                                                     </div>*/
/*                                             </div>*/
/*                                                       */
/*                                             <div class="col-md-6 col-xs-6 col-lg-6 col-sm-6">*/
/*                                                 {{match.idJoueur2.nomJoueur}} {{match.idJoueur2.prenomJoueur}} */
/*                                                     <div class="progress" style="border: #000 1%">*/
/*                                                       <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" */
/*                                                            style="width:{{ PrctVictoirJ2 | round }}%">*/
/*                                                          {{match.idJoueur2.nbVictoires}} ({{ PrctVictoirJ2 | round }}%)*/
/*                                                       </div>*/
/*                                                       <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" */
/*                                                            style="width:{{ 100-(PrctVictoirJ2 | round) }}%">*/
/*                                                         {{match.idJoueur2.nbDefaite}} ({{ 100-(PrctVictoirJ2 | round) }}%)*/
/*                                                       </div>*/
/*                                                     </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                                       */
/*                                                       <div style="margin-left: 35%">*/
/*                                                 <i class="fa fa-square" style="color: #4AA44A"></i> Victoires    */
/*                                                 <i class="fa fa-square" style="color: #D03F3B"></i> Defaites */
/* */
/*                                           </div>*/
/*                                     </div>*/
/*                                     <div style="padding-bottom: 8%">*/
/*                                         */
/*                                         <div class="col-md-12" >*/
/*                                             <div class="col-md-6">*/
/*                                             <i class="fa fa-list-ol" style="color: #000"></i>*/
/*                                                 Classement National : {{match.idJoueur1.classementNational}} <br>*/
/*                                                 Classement International : {{match.idJoueur1.classementInternational}}*/
/*                                             </div>*/
/*                                             <div class="col-md-6">*/
/*                                                 Classement National : {{match.idJoueur2.classementNational}} <br>*/
/*                                                 Classement International : {{match.idJoueur2.classementInternational}}*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                 </div>*/
/*                                             */
/*                                 <button class="btn btn-primary btn-lg md-close" >Close me!</button>*/
/*                             </div>*/
/*                                             */
/*                                             */
/*                               */
/*                                             */
/*                                             */
/*                                             */
/*                                             */
/*                                             */
/*                         </div>*/
/*                 {% endfor %}              */
/* */
/*                 {% for match in matchs %}*/
/*                     <div class="col-md-12 animated fadeInDown" style="padding-bottom: 2%"   >*/
/*                         <div class="well profile_view" style="font-size: 16px;color: #044" >*/
/*                         <div class="col-xs-12 bottom text-center" style="background-color: #00B5F1;color: white;border-bottom-left-radius: 1em;border-top-left-radius: 1em" >*/
/*                            <strong> <i class="fa fa-male"></i> */
/*                                 {{match.idJoueur1.nomJoueur}} {{match.idJoueur1.prenomJoueur}}</strong>*/
/*                         </div>*/
/*                         <div style="padding-bottom: 5.4%;padding-top: 5%">*/
/*                              <img src="{{asset('img/vs.jpg')}}" alt="Img" width="30px" height="30px" style="margin-left: 47%">*/
/*                         </div>*/
/*                         <div class="col-xs-12 bottom text-center" style="margin-bottom: 3%;background-color: #00B5F1;color: white;border-bottom-left-radius: 1em;border-top-left-radius: 1em">*/
/*                             <strong><i class="fa fa-male"></i> */
/*                                     {{match.idJoueur2.nomJoueur}} {{match.idJoueur2.prenomJoueur}}</strong>*/
/*                         </div>*/
/*                         <div class="col-xs-12 bottom text-center" style="background-color: #F2F5F7">*/
/*                             <button class="md-trigger btn-flat3 " data-modal="modal-{{match.id}}"  >*/
/*                                 <i class="fa fa-youtube-play"></i>*/
/*                                 Regarder match en streaming</button>*/
/*                             <button  class="md-trigger btn-flat2 " data-modal="modal-{{match.id}}-info"  >*/
/*                                <i class="fa fa-info-circle" ></i>*/
/*                                 Info</button>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                             <div class="md-overlay"></div>*/
/*                 {% endfor %}*/
/*                                     */
/*                                     */
/*                                     */
/*                                               */
/* */
/* */
/* */
/*             */
/* */
/* */
/* */
/*             */
/*             */
/*             */
/*                 {% endblock %}*/
/* */
