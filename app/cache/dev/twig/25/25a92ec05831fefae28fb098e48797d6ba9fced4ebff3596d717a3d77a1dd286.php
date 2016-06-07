<?php

/* FTTAdherentBundle:Tickets:TicketAdherent.html.twig */
class __TwigTemplate_bb65700984bddaaf10acff863b8350ee0aa73fc68aa239a877a34545c55a24bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdherentBundle::layoutAdherent.html.twig", "FTTAdherentBundle:Tickets:TicketAdherent.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FTTAdherentBundle::layoutAdherent.html.twig";
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
        if (twig_test_empty((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")))) {
            // line 6
            echo "        <br><br><br>

        <div id=\"MonElement\" class=\"EX_div\" style=\"diplay:block;\"> <font color=#FF0000> 
            <h1 align='center' style='color:red;'> Vous n'avez aucun ticket en stock </h1></font> 
        </div> 
    ";
        } else {
            // line 12
            echo "        <marquee id=\"id1\">
            <span onmouseover=\"getElementById('id1').stop();\" onmouseout=\"getElementById('id1').start();\">
                <h3><i class=\"fa fa-hashtag\" style=\"color: green\"> Vos tickets&nbsp</i><i class=\"fa fa-hashtag\" style=\"color: green\"></i></h3>
            </span>
        </marquee>
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")));
            foreach ($context['_seq'] as $context["_key"] => $context["tickets"]) {
                // line 18
                echo "            <div style=\"background-color: #D8D8D8; border: #000 solid thin;width: 600px\" class=\"md-modal md-effect-8\" id=\"modal-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "id", array()), "html", null, true);
                echo "-qr\">
                <div style=\"padding-left: 0%\" class=\"md-content\">
                    <h3><i class=\"fa fa-info-circle\" style=\"color: black\"></i> QR Code :</h3>
                    <div class=\"col-md-12 col-xs-12 col-lg-12 col-sm-12\" >
                        <div class=\"col-md-2 col-xs-2 col-lg-2 col-sm-2\">
                        </div>
                        <div class=\"col-md-8 col-xs-8 col-lg-8 col-sm-8\">
                            <center>
                                ";
                // line 26
                $context["msg"] = (("Le numéro de votre chaise est: " . $this->getAttribute($context["tickets"], "id", array())) . " Les portes sreont fermé avant 45min du lancement du match. Bon Match");
                // line 27
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('endroid_qrcode')->qrcodeDataUriFunction((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg"))), "html", null, true);
                echo "\" />
                            </center>
                        </div>
                        <div class=\"col-md-2 col-xs-2 col-lg-2 col-sm-2\">
                        </div>
                    </div>
                    <button class=\"btn btn-primary btn-lg md-close\" >Close me!</button>
                </div>
            </div>
            ";
                // line 36
                if (($this->getAttribute($context["tickets"], "etat", array()) ==  -1)) {
                    // line 37
                    echo "                <div style=\"background-color: #D8D8D8; border: #000 solid thin;width: 80px\" class=\"md-modal md-effect-8\" id=\"modal-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "id", array()), "html", null, true);
                    echo "-ticket\">
                    <div style=\"padding-left: 0%\" class=\"md-content\">
                        <center>
                            <br>
                            <h1>
                                Prix du Ticket : ";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tickets"], "idTicket", array()), "prixTicket", array()), "html", null, true);
                    echo "DT
                                <br>
                            </h1>
                            <form action=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acheter_ticket", array("id" => $this->getAttribute($context["tickets"], "id", array()))), "html", null, true);
                    echo "\">
                                <font id='achatTicket-";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "id", array()), "html", null, true);
                    echo "'></font>
                            </form>
                            <br>
                            <br>
                            <br>
                        </center>
                        <button class=\"btn btn-primary btn-xs md-close\" >Close me!</button>
                    </div>
                </div>
            ";
                }
                // line 56
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tickets'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "        <table class=\"table table-striped table-hover\" style=\"font-family: 'Exo';text\" >
            <thead>
            <th style=\"text-align: center;\">
                Complexe
            </th>
            <th style=\"text-align: center;\">
                Stade
            </th>
            <th style=\"text-align: center;\">
                Evenement
            </th>
            <th style=\"text-align: center;\">
                DateMatch
            </th>
            <th style=\"text-align: center;\">
                Joueur 1
            </th>
            <th style=\"text-align: center;\">
                Joueur 2
            </th>
            <th style=\"text-align: center;\">
                Joueur3
            </th>
            <th style=\"text-align: center;\">
                Joueur4

                </thead>
            <tbody>
                ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")));
            foreach ($context['_seq'] as $context["_key"] => $context["tickets"]) {
                // line 86
                echo "                    <tr>
                        <td align=\"center\" >
                            ";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["tickets"], "idTicket", array()), "idMatch", array()), "idStade", array()), "idComplexe", array()), "nomComplexe", array()), "html", null, true);
                echo "
                        </td>
                        <td align=\"center\" >
                            ";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["tickets"], "idTicket", array()), "idMatch", array()), "idStade", array()), "nomStade", array()), "html", null, true);
                echo "
                        </td>
                        <td align=\"center\" >
                            ";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["tickets"], "idTicket", array()), "idMatch", array()), "idEvenement", array()), "nomEvenement", array()), "html", null, true);
                echo "
                        </td>
                        <td align=\"center\" >
                            ";
                // line 97
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["tickets"], "idTicket", array()), "idMatch", array()), "dateMatch", array()), "d/m/Y"), "html", null, true);
                echo "
                        </td>
                        <td align=\"center\" >
                            ";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["tickets"], "idTicket", array()), "idMatch", array()), "idJoueur1", array()), "nomJoueur", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["tickets"], "idTicket", array()), "idMatch", array()), "idJoueur1", array()), "prenomJoueur", array()), "html", null, true);
                echo "
                        </td>
                        <td align=\"center\" >
                            ";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["tickets"], "idTicket", array()), "idMatch", array()), "idJoueur2", array()), "nomJoueur", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["tickets"], "idTicket", array()), "idMatch", array()), "idJoueur2", array()), "prenomJoueur", array()), "html", null, true);
                echo "
                        </td>
                        <td align=\"center\" >
                            ";
                // line 106
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["tickets"], "idTicket", array()), "idMatch", array()), "idJoueur3", array()) == null)) {
                    // line 107
                    echo "                                ~<br>~
                            ";
                } else {
                    // line 109
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["tickets"], "idTicket", array()), "idMatch", array()), "idJoueur3", array()), "nomJoueur", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["tickets"], "idTicket", array()), "idMatch", array()), "idJoueur3", array()), "prenomJoueur", array()), "html", null, true);
                    echo "
                            ";
                }
                // line 111
                echo "                        </td>
                        <td align=\"center\" >
                            ";
                // line 113
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["tickets"], "idTicket", array()), "idMatch", array()), "idJoueur4", array()) == null)) {
                    // line 114
                    echo "                                ~<br>~
                            ";
                } else {
                    // line 116
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["tickets"], "idTicket", array()), "idMatch", array()), "idJoueur4", array()), "nomJoueur", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["tickets"], "idTicket", array()), "idMatch", array()), "idJoueur4", array()), "prenomJoueur", array()), "html", null, true);
                    echo "
                            ";
                }
                // line 118
                echo "                        </td>
                    </tr>
                    <tr style=\"text-align: center; \" >
                        ";
                // line 121
                if (($this->getAttribute($context["tickets"], "etat", array()) ==  -1)) {
                    // line 122
                    echo "                            <td align=\"center\" COLSPAN=8>
                                <a class=\"md-trigger  btn btn-flat3 btn-xs\" style=\"font-size: x-large;\" data-modal=\"modal-";
                    // line 123
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "id", array()), "html", null, true);
                    echo "-qr\">
                                    <i  class=\"fa fa-qrcode\" aria-hidden=\"true\"></i>
                                    QR Code </a>  
                                <a class=\"md-trigger  btn btn-flat3 btn-xs\" style=\"font-size: x-large;\" onclick=\"actionAchatTicket(";
                    // line 126
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tickets"], "idTicket", array()), "prixTicket", array()), "html", null, true);
                    echo " ,";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "id", array()), "html", null, true);
                    echo " )\"
                                   style=\"font-size: x-large;\" data-modal=\"modal-";
                    // line 127
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "id", array()), "html", null, true);
                    echo "-ticket\"><i class=\"fa fa-shopping-cart\" ></i>
                                    Payer maintenant </a> 
                                <a class=\"btn btn-flat6 btn-xs\" aria-hidden=\"true\" href=\"";
                    // line 129
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("envoie_ticket", array("id" => $this->getAttribute($context["tickets"], "id", array()))), "html", null, true);
                    echo "\" style=\"font-size: x-large; width: 38%\">
                                    <i class=\"fa fa-paper-plane\" aria-hidden=\"true\"  ></i> Réenvoyer le ticket </a>
                                <a class=\"btn btn-flat5 btn-xs\" style=\"font-size: x-large;\" href=\"";
                    // line 131
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_ticket", array("id" => $this->getAttribute($context["tickets"], "id", array()))), "html", null, true);
                    echo "\">
                                    <i class=\"fa fa-trash-o\"></i> Annuler</a>
                            </td>
                        ";
                } else {
                    // line 135
                    echo "                            <td align=\"center\" colspan=8>
                                <a class=\"md-trigger  btn btn-flat3 btn-xs\" style=\"font-size: x-large;\" data-modal=\"modal-";
                    // line 136
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "id", array()), "html", null, true);
                    echo "-qr\">
                                    <i  class=\"fa fa-qrcode\" aria-hidden=\"true\"></i>
                                    QR Code </a>  
                                <a class=\"btn btn-flat3 btn-xs\" aria-hidden=\"true\" href=\"";
                    // line 139
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("envoie_ticket", array("id" => $this->getAttribute($context["tickets"], "id", array()))), "html", null, true);
                    echo "\" style=\"font-size: x-large; width: 38%;\">
                                    <i class=\"fa fa-paper-plane\" aria-hidden=\"true\"  ></i> Réenvoyer la facture</a>
                            </td>
                        ";
                }
                // line 143
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tickets'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "            </tbody>
        </table>
    ";
        }
        // line 148
        echo "    <div class=\"navigation\">
        ";
        // line 149
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")));
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "FTTAdherentBundle:Tickets:TicketAdherent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 149,  301 => 148,  296 => 145,  289 => 143,  282 => 139,  276 => 136,  273 => 135,  266 => 131,  261 => 129,  256 => 127,  248 => 126,  242 => 123,  239 => 122,  237 => 121,  232 => 118,  224 => 116,  220 => 114,  218 => 113,  214 => 111,  206 => 109,  202 => 107,  200 => 106,  192 => 103,  184 => 100,  178 => 97,  172 => 94,  166 => 91,  160 => 88,  156 => 86,  152 => 85,  122 => 57,  116 => 56,  103 => 46,  99 => 45,  93 => 42,  84 => 37,  82 => 36,  69 => 27,  67 => 26,  55 => 18,  51 => 17,  44 => 12,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FTTAdherentBundle::layoutAdherent.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*     {% if ticket is empty %}*/
/*         <br><br><br>*/
/* */
/*         <div id="MonElement" class="EX_div" style="diplay:block;"> <font color=#FF0000> */
/*             <h1 align='center' style='color:red;'> Vous n'avez aucun ticket en stock </h1></font> */
/*         </div> */
/*     {% else %}*/
/*         <marquee id="id1">*/
/*             <span onmouseover="getElementById('id1').stop();" onmouseout="getElementById('id1').start();">*/
/*                 <h3><i class="fa fa-hashtag" style="color: green"> Vos tickets&nbsp</i><i class="fa fa-hashtag" style="color: green"></i></h3>*/
/*             </span>*/
/*         </marquee>*/
/*         {% for tickets in ticket %}*/
/*             <div style="background-color: #D8D8D8; border: #000 solid thin;width: 600px" class="md-modal md-effect-8" id="modal-{{tickets.id}}-qr">*/
/*                 <div style="padding-left: 0%" class="md-content">*/
/*                     <h3><i class="fa fa-info-circle" style="color: black"></i> QR Code :</h3>*/
/*                     <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12" >*/
/*                         <div class="col-md-2 col-xs-2 col-lg-2 col-sm-2">*/
/*                         </div>*/
/*                         <div class="col-md-8 col-xs-8 col-lg-8 col-sm-8">*/
/*                             <center>*/
/*                                 {% set msg = 'Le numéro de votre chaise est: ' ~ tickets.id ~ ' Les portes sreont fermé avant 45min du lancement du match. Bon Match' %}*/
/*                                 <img src="{{ qrcode_data_uri(msg) }}" />*/
/*                             </center>*/
/*                         </div>*/
/*                         <div class="col-md-2 col-xs-2 col-lg-2 col-sm-2">*/
/*                         </div>*/
/*                     </div>*/
/*                     <button class="btn btn-primary btn-lg md-close" >Close me!</button>*/
/*                 </div>*/
/*             </div>*/
/*             {% if tickets.etat == -1 %}*/
/*                 <div style="background-color: #D8D8D8; border: #000 solid thin;width: 80px" class="md-modal md-effect-8" id="modal-{{tickets.id}}-ticket">*/
/*                     <div style="padding-left: 0%" class="md-content">*/
/*                         <center>*/
/*                             <br>*/
/*                             <h1>*/
/*                                 Prix du Ticket : {{tickets.idTicket.prixTicket}}DT*/
/*                                 <br>*/
/*                             </h1>*/
/*                             <form action="{{path('acheter_ticket',{'id':tickets.id})}}">*/
/*                                 <font id='achatTicket-{{tickets.id}}'></font>*/
/*                             </form>*/
/*                             <br>*/
/*                             <br>*/
/*                             <br>*/
/*                         </center>*/
/*                         <button class="btn btn-primary btn-xs md-close" >Close me!</button>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*         <table class="table table-striped table-hover" style="font-family: 'Exo';text" >*/
/*             <thead>*/
/*             <th style="text-align: center;">*/
/*                 Complexe*/
/*             </th>*/
/*             <th style="text-align: center;">*/
/*                 Stade*/
/*             </th>*/
/*             <th style="text-align: center;">*/
/*                 Evenement*/
/*             </th>*/
/*             <th style="text-align: center;">*/
/*                 DateMatch*/
/*             </th>*/
/*             <th style="text-align: center;">*/
/*                 Joueur 1*/
/*             </th>*/
/*             <th style="text-align: center;">*/
/*                 Joueur 2*/
/*             </th>*/
/*             <th style="text-align: center;">*/
/*                 Joueur3*/
/*             </th>*/
/*             <th style="text-align: center;">*/
/*                 Joueur4*/
/* */
/*                 </thead>*/
/*             <tbody>*/
/*                 {% for tickets in ticket %}*/
/*                     <tr>*/
/*                         <td align="center" >*/
/*                             {{tickets.idTicket.idMatch.idStade.idComplexe.nomComplexe}}*/
/*                         </td>*/
/*                         <td align="center" >*/
/*                             {{tickets.idTicket.idMatch.idStade.nomStade}}*/
/*                         </td>*/
/*                         <td align="center" >*/
/*                             {{tickets.idTicket.idMatch.idEvenement.nomEvenement}}*/
/*                         </td>*/
/*                         <td align="center" >*/
/*                             {{tickets.idTicket.idMatch.dateMatch | date('d/m/Y')}}*/
/*                         </td>*/
/*                         <td align="center" >*/
/*                             {{tickets.idTicket.idMatch.idJoueur1.nomJoueur}} {{tickets.idTicket.idMatch.idJoueur1.prenomJoueur}}*/
/*                         </td>*/
/*                         <td align="center" >*/
/*                             {{tickets.idTicket.idMatch.idJoueur2.nomJoueur}} {{tickets.idTicket.idMatch.idJoueur2.prenomJoueur}}*/
/*                         </td>*/
/*                         <td align="center" >*/
/*                             {% if tickets.idTicket.idMatch.idJoueur3 == null %}*/
/*                                 ~<br>~*/
/*                             {% else %}*/
/*                                 {{tickets.idTicket.idMatch.idJoueur3.nomJoueur}} {{tickets.idTicket.idMatch.idJoueur3.prenomJoueur}}*/
/*                             {% endif %}*/
/*                         </td>*/
/*                         <td align="center" >*/
/*                             {% if tickets.idTicket.idMatch.idJoueur4 == null %}*/
/*                                 ~<br>~*/
/*                             {% else %}*/
/*                                 {{tickets.idTicket.idMatch.idJoueur4.nomJoueur}} {{tickets.idTicket.idMatch.idJoueur4.prenomJoueur}}*/
/*                             {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr style="text-align: center; " >*/
/*                         {% if tickets.etat == -1 %}*/
/*                             <td align="center" COLSPAN=8>*/
/*                                 <a class="md-trigger  btn btn-flat3 btn-xs" style="font-size: x-large;" data-modal="modal-{{tickets.id}}-qr">*/
/*                                     <i  class="fa fa-qrcode" aria-hidden="true"></i>*/
/*                                     QR Code </a>  */
/*                                 <a class="md-trigger  btn btn-flat3 btn-xs" style="font-size: x-large;" onclick="actionAchatTicket({{app.user.id}},{{tickets.idTicket.prixTicket}} ,{{tickets.id}} )"*/
/*                                    style="font-size: x-large;" data-modal="modal-{{tickets.id}}-ticket"><i class="fa fa-shopping-cart" ></i>*/
/*                                     Payer maintenant </a> */
/*                                 <a class="btn btn-flat6 btn-xs" aria-hidden="true" href="{{path('envoie_ticket',{'id':tickets.id})}}" style="font-size: x-large; width: 38%">*/
/*                                     <i class="fa fa-paper-plane" aria-hidden="true"  ></i> Réenvoyer le ticket </a>*/
/*                                 <a class="btn btn-flat5 btn-xs" style="font-size: x-large;" href="{{path('supprimer_ticket', {'id':tickets.id})}}">*/
/*                                     <i class="fa fa-trash-o"></i> Annuler</a>*/
/*                             </td>*/
/*                         {% else %}*/
/*                             <td align="center" colspan=8>*/
/*                                 <a class="md-trigger  btn btn-flat3 btn-xs" style="font-size: x-large;" data-modal="modal-{{tickets.id}}-qr">*/
/*                                     <i  class="fa fa-qrcode" aria-hidden="true"></i>*/
/*                                     QR Code </a>  */
/*                                 <a class="btn btn-flat3 btn-xs" aria-hidden="true" href="{{path('envoie_ticket',{'id':tickets.id})}}" style="font-size: x-large; width: 38%;">*/
/*                                     <i class="fa fa-paper-plane" aria-hidden="true"  ></i> Réenvoyer la facture</a>*/
/*                             </td>*/
/*                         {% endif %}*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     {%endif %}*/
/*     <div class="navigation">*/
/*         {{ knp_pagination_render(ticket) }}*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
