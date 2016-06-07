<?php

/* FTTAdherentBundle:Default:paiement.html.twig */
class __TwigTemplate_f2a73013de2d0abb28e94ac58a9a5e9d77b941e80815bdd424e886b9dbde3dcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdherentBundle::layoutAdherent.html.twig", "FTTAdherentBundle:Default:paiement.html.twig", 1);
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "

    <article class=\"row\">
    <table style=\"font-family: 'Exo';font-size: 32px;width: 100%;height: 50px;margin-bottom: 5%\" class=\"table-responsive table-striped\">
        <tr>
            <td style=\"border-bottom: #88C425 solid 2px;\">
                <span>Recharger Solde </span> :</br>
            </td>
        </tr>
    </table>
        <section class=\"col-lg-2\">
            
        </section>
        <section class=\"col-lg-8\" style=\"background-color: #bdc3c7;height: 250px;border-bottom-left-radius: 1em;border-bottom-right-radius: 1em\" >
            <div class=\"page-header\">
                <img src=\"https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-200px.png\" border=\"0\" alt=\"PayPal Logo\">
            </div>


            <div class=\"form-group\">
                <div class=\"col-md-3\">
                    <label style=\"color: #003087\" for=\"montant\" class=\"control-label\">Montant :</label>
                </div>
                <div class=\"col-md-9\">
                    <input  id=\"montant\" type=\"text\" class=\"form-control\" name=\"montant\" placeholder=\"Saisir votre montant\">
                </div>
            </div>



            <div class=\"form-group\" style=\"padding-top: 10%\">
                <label class=\"col-sm-3 control-label\"></label>
                <div class=\"col-md-9\">
                    <a class=\"btn btn-block btn-flat\" style=\"width: 100%\"
                       href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("paiement");
        echo "\" onclick=\"SetCookies();\">Valider</a>  
                </div>
            </div>
            
            
        </section>
    </article>













            <script>
                function SetCookies() {

                    var name = 'montant';
                    var value = document.getElementById('montant').value;
                    var days = 1;




                    var expires;
                    if (days) {
                        var date = new Date();
                        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                        expires = \"; expires=\" + date.toGMTString();
                    } else {
                        expires = \"\";
                    }

                    document.cookie = name + \"=\" + value + expires + \"; path=/\";
                }
            </script>









        ";
    }

    public function getTemplateName()
    {
        return "FTTAdherentBundle:Default:paiement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 37,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "FTTAdherentBundle::layoutAdherent.html.twig" %}*/
/* {% block body %}*/
/* */
/* */
/*     <article class="row">*/
/*     <table style="font-family: 'Exo';font-size: 32px;width: 100%;height: 50px;margin-bottom: 5%" class="table-responsive table-striped">*/
/*         <tr>*/
/*             <td style="border-bottom: #88C425 solid 2px;">*/
/*                 <span>Recharger Solde </span> :</br>*/
/*             </td>*/
/*         </tr>*/
/*     </table>*/
/*         <section class="col-lg-2">*/
/*             */
/*         </section>*/
/*         <section class="col-lg-8" style="background-color: #bdc3c7;height: 250px;border-bottom-left-radius: 1em;border-bottom-right-radius: 1em" >*/
/*             <div class="page-header">*/
/*                 <img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-200px.png" border="0" alt="PayPal Logo">*/
/*             </div>*/
/* */
/* */
/*             <div class="form-group">*/
/*                 <div class="col-md-3">*/
/*                     <label style="color: #003087" for="montant" class="control-label">Montant :</label>*/
/*                 </div>*/
/*                 <div class="col-md-9">*/
/*                     <input  id="montant" type="text" class="form-control" name="montant" placeholder="Saisir votre montant">*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/* */
/*             <div class="form-group" style="padding-top: 10%">*/
/*                 <label class="col-sm-3 control-label"></label>*/
/*                 <div class="col-md-9">*/
/*                     <a class="btn btn-block btn-flat" style="width: 100%"*/
/*                        href="{{path('paiement')}}" onclick="SetCookies();">Valider</a>  */
/*                 </div>*/
/*             </div>*/
/*             */
/*             */
/*         </section>*/
/*     </article>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*             <script>*/
/*                 function SetCookies() {*/
/* */
/*                     var name = 'montant';*/
/*                     var value = document.getElementById('montant').value;*/
/*                     var days = 1;*/
/* */
/* */
/* */
/* */
/*                     var expires;*/
/*                     if (days) {*/
/*                         var date = new Date();*/
/*                         date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));*/
/*                         expires = "; expires=" + date.toGMTString();*/
/*                     } else {*/
/*                         expires = "";*/
/*                     }*/
/* */
/*                     document.cookie = name + "=" + value + expires + "; path=/";*/
/*                 }*/
/*             </script>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*         {% endblock %}*/
/* */
