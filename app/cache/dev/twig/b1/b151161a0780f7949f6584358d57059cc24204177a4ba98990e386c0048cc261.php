<?php

/* FTTAdherentBundle:Tickets:emailTicketConfirmation.html.twig */
class __TwigTemplate_137f1389cdff1df1367550f296bd86a48a90741a517f7dfc826291af37c99f90 extends Twig_Template
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
        // line 1
        echo "<html>
    <head>
        <title>Ticket FTT</title>
    </head>
    <body>
        <table >
            <table >
                <tr> <td> <img  src='https://scontent-fra3-1.xx.fbcdn.net/v/t1.0-9/13102876_1069633196431500_2969944748775894440_n.jpg?oh=034029c98f88e846a0aea515fab771d2&oe=57E1CBF2' alt='QR Code'/></td><td>
                        <h2><div >Match : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "idJoueur1", array()), "nomJoueur", array()), "html", null, true);
        echo "
                                ";
        // line 10
        if (($this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "idJoueur3", array()) != null)) {
            // line 11
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "idJoueur3", array()), "nomJoueur", array()), "html", null, true);
            echo "
                                ";
        }
        // line 13
        echo "                                VS ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "idJoueur2", array()), "nomJoueur", array()), "html", null, true);
        echo " 
                                ";
        // line 14
        if (($this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "idJoueur4", array()) != null)) {
            // line 15
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "idJoueur4", array()), "nomJoueur", array()), "html", null, true);
            echo "
                                ";
        }
        // line 16
        echo "</div>
                            <div >Nom & prenom : ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nomUser", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenomUser", array()), "html", null, true);
        echo "</div>
                            <div >Date : ";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "dateMatch", array()), "d/m/Y"), "html", null, true);
        echo "</div>
                            <div >Prix : ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["prix"]) ? $context["prix"] : $this->getContext($context, "prix")), "html", null, true);
        echo " </div>
                            <div>Etat : ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat")), "html", null, true);
        echo "</div></h2>
                    </td> </tr></table>
        </table>
    <body>
</html>";
    }

    public function getTemplateName()
    {
        return "FTTAdherentBundle:Tickets:emailTicketConfirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 20,  67 => 19,  63 => 18,  57 => 17,  54 => 16,  48 => 15,  46 => 14,  41 => 13,  35 => 11,  33 => 10,  29 => 9,  19 => 1,);
    }
}
/* <html>*/
/*     <head>*/
/*         <title>Ticket FTT</title>*/
/*     </head>*/
/*     <body>*/
/*         <table >*/
/*             <table >*/
/*                 <tr> <td> <img  src='https://scontent-fra3-1.xx.fbcdn.net/v/t1.0-9/13102876_1069633196431500_2969944748775894440_n.jpg?oh=034029c98f88e846a0aea515fab771d2&oe=57E1CBF2' alt='QR Code'/></td><td>*/
/*                         <h2><div >Match : {{match.idJoueur1.nomJoueur}}*/
/*                                 {% if match.idJoueur3 != null %}*/
/*                                     {{match.idJoueur3.nomJoueur}}*/
/*                                 {% endif %}*/
/*                                 VS {{match.idJoueur2.nomJoueur}} */
/*                                 {% if match.idJoueur4 != null %}*/
/*                                     {{match.idJoueur4.nomJoueur}}*/
/*                                 {% endif %}</div>*/
/*                             <div >Nom & prenom : {{app.user.nomUser}} {{app.user.prenomUser}}</div>*/
/*                             <div >Date : {{match.dateMatch | date('d/m/Y')}}</div>*/
/*                             <div >Prix : {{prix}} </div>*/
/*                             <div>Etat : {{etat}}</div></h2>*/
/*                     </td> </tr></table>*/
/*         </table>*/
/*     <body>*/
/* </html>*/
