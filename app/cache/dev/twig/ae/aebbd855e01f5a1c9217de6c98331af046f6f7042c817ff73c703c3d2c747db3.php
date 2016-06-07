<?php

/* FTTArbitreBundle:SessionArbitre:listesession.html.twig */
class __TwigTemplate_aa2a7da21c0c8aa8efaec2d36e93c4b562d8899adfe75aad88ecc67c351b86b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTArbitreBundle::layoutArbitre.html.twig", "FTTArbitreBundle:SessionArbitre:listesession.html.twig", 1);
        $this->blocks = array(
            'bodyAdmin' => array($this, 'block_bodyAdmin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FTTArbitreBundle::layoutArbitre.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 7
        echo "   
     
    <!-- Plans -->
    
             
         ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sessionarbitres"]) ? $context["sessionarbitres"] : $this->getContext($context, "sessionarbitres")));
        foreach ($context['_seq'] as $context["_key"] => $context["sessionarbitre"]) {
            // line 13
            echo "        
    <section id=\"plans\">
        <div class=\"container\" style=\"width:3000px;\">
            <div class=\"row\">
        
                <!-- item -->
                <div class=\"col-md-4 text-center\">
                    <div class=\"panel panel-warning panel-pricing\">
                        <div class=\"panel-heading\"style=\"height:96px;\">
                            <i class=\"fa fa-archive\"></i>
                    
                        </div>
                       
                        <ul class=\"list-group text-center\" style=\"font-size:20px;\">
                            <li class=\"list-group-item\"><i class=\"fa fa-adjust\"></i> Type : ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["sessionarbitre"], "typeSessionArbitre", array()), "html", null, true);
            echo " 
                                &nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-map-marker\"></i> Lieu  :   ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["sessionarbitre"], "lieuSessionArbitre", array()), "html", null, true);
            echo "
                                &nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-hourglass-1\"></i> Date  :   ";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sessionarbitre"], "dateSessionArbitre", array()), "d/m/Y"), "html", null, true);
            echo "
                            </li> 
                           
                        </ul>
                        <div class=\"panel-footer\">
                            <a class=\"btn btn-lg btn-block btn-warning\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_session", array("id" => $this->getAttribute($context["sessionarbitre"], "id", array()))), "html", null, true);
            echo "\" onclick=\"new PNotify({
                            title: 'Felicitation',
                            text: 'Votre Candidature a eté envoyé avec succes!',
                            type: 'info'
                        });\"> <i class=\"fa fa-pencil\"></i> Déposer candidature</a>
                        </div>

                    </div>
            </div>
                <!-- /item -->

                

            </div>
        </div>
                </section >
    <!-- /Plans -->
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sessionarbitre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
              
                   
<style>

.panel-pricing {
  -moz-transition: all .3s ease;
  -o-transition: all .3s ease;
  -webkit-transition: all .3s ease;
}
.panel-pricing:hover {
  box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.2);
}
.panel-pricing .panel-heading {
  padding: 20px 10px;
}
.panel-pricing .panel-heading .fa {
  margin-top: 10px;
  font-size: 58px;
}
.panel-pricing .list-group-item {
  color: #777777;
  border-bottom: 1px solid rgba(250, 250, 250, 0.5);
}
.panel-pricing .list-group-item:last-child {
  border-bottom-right-radius: 0px;
  border-bottom-left-radius: 0px;
}
.panel-pricing .list-group-item:first-child {
  border-top-right-radius: 0px;
  border-top-left-radius: 0px;
}
.panel-pricing .panel-body {
  background-color: #f0f0f0;
  font-size: 40px;
  color: #777777;
  padding: 20px;
  margin: 0px;
}

</style>
<script>
</script>

        ";
    }

    public function getTemplateName()
    {
        return "FTTArbitreBundle:SessionArbitre:listesession.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 52,  74 => 34,  66 => 29,  62 => 28,  58 => 27,  42 => 13,  38 => 12,  31 => 7,  28 => 6,  11 => 1,);
    }
}
/* {% extends "FTTArbitreBundle::layoutArbitre.html.twig" %}*/
/* */
/* */
/*         */
/*         */
/*         {% block bodyAdmin %}*/
/*    */
/*      */
/*     <!-- Plans -->*/
/*     */
/*              */
/*          {% for sessionarbitre in  sessionarbitres %}*/
/*         */
/*     <section id="plans">*/
/*         <div class="container" style="width:3000px;">*/
/*             <div class="row">*/
/*         */
/*                 <!-- item -->*/
/*                 <div class="col-md-4 text-center">*/
/*                     <div class="panel panel-warning panel-pricing">*/
/*                         <div class="panel-heading"style="height:96px;">*/
/*                             <i class="fa fa-archive"></i>*/
/*                     */
/*                         </div>*/
/*                        */
/*                         <ul class="list-group text-center" style="font-size:20px;">*/
/*                             <li class="list-group-item"><i class="fa fa-adjust"></i> Type : {{sessionarbitre.typeSessionArbitre}} */
/*                                 &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-map-marker"></i> Lieu  :   {{sessionarbitre.lieuSessionArbitre}}*/
/*                                 &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-hourglass-1"></i> Date  :   {{sessionarbitre.dateSessionArbitre|date("d/m/Y")}}*/
/*                             </li> */
/*                            */
/*                         </ul>*/
/*                         <div class="panel-footer">*/
/*                             <a class="btn btn-lg btn-block btn-warning" href="{{path('modifier_session',{'id':sessionarbitre.id})}}" onclick="new PNotify({*/
/*                             title: 'Felicitation',*/
/*                             text: 'Votre Candidature a eté envoyé avec succes!',*/
/*                             type: 'info'*/
/*                         });"> <i class="fa fa-pencil"></i> Déposer candidature</a>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*             </div>*/
/*                 <!-- /item -->*/
/* */
/*                 */
/* */
/*             </div>*/
/*         </div>*/
/*                 </section >*/
/*     <!-- /Plans -->*/
/*       {% endfor %}*/
/* */
/*               */
/*                    */
/* <style>*/
/* */
/* .panel-pricing {*/
/*   -moz-transition: all .3s ease;*/
/*   -o-transition: all .3s ease;*/
/*   -webkit-transition: all .3s ease;*/
/* }*/
/* .panel-pricing:hover {*/
/*   box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.2);*/
/* }*/
/* .panel-pricing .panel-heading {*/
/*   padding: 20px 10px;*/
/* }*/
/* .panel-pricing .panel-heading .fa {*/
/*   margin-top: 10px;*/
/*   font-size: 58px;*/
/* }*/
/* .panel-pricing .list-group-item {*/
/*   color: #777777;*/
/*   border-bottom: 1px solid rgba(250, 250, 250, 0.5);*/
/* }*/
/* .panel-pricing .list-group-item:last-child {*/
/*   border-bottom-right-radius: 0px;*/
/*   border-bottom-left-radius: 0px;*/
/* }*/
/* .panel-pricing .list-group-item:first-child {*/
/*   border-top-right-radius: 0px;*/
/*   border-top-left-radius: 0px;*/
/* }*/
/* .panel-pricing .panel-body {*/
/*   background-color: #f0f0f0;*/
/*   font-size: 40px;*/
/*   color: #777777;*/
/*   padding: 20px;*/
/*   margin: 0px;*/
/* }*/
/* */
/* </style>*/
/* <script>*/
/* </script>*/
/* */
/*         {% endblock %}*/
/* */
/* */
/*         */
