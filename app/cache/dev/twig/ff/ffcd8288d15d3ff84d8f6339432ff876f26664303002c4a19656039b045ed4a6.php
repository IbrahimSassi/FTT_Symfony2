<?php

/* FTTAdminBundle:Ticket:ajouterTicket.html.twig */
class __TwigTemplate_dfa42f36e1bb94e23ec64097e265e78cb76e31845d3a2c9282dccf6c2106d4df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:Ticket:ajouterTicket.html.twig", 1);
        $this->blocks = array(
            'bodyAdmin' => array($this, 'block_bodyAdmin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FTTAdminBundle::layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 6
        echo "
    <h1>Ajout des tickets</h1> 
    <div class=\"col-md-8\" style=\"margin-left: 15%;margin-right: 2%;\">
        ";
        // line 10
        echo "        <form method=\"POST\" action=\"\"  onsubmit=\"new PNotify({
                            title: 'Ajout Effectué',
                            text: 'Votre billetterie a eté ajouté avec succes!',
                            type: 'success'
                        });\"> 
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'widget');
        echo "
            <label > Nombre de Tickets (%) :</label></br>
            <input id=\"nbTicket\" name=\"nbTicket\" class=\"knob\" data-width=\"110\" data-height=\"120\"
                   data-displayPrevious=true data-fgColor=\"#26B22A\" data-skin=\"tron\" data-thickness=\".2\" value=\"50\">
            
            
            <div class=\"ln_solid\" style=\"margin-top: 2%\"> </div>
            <div class=\"form-group\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\" style=\"margin-top: 2%\">
                    <input type=\"submit\" value=\"Valider\" class=\"btn btn-flat2 bg-blue-sky\">
                    <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("list_matchsInfo");
        echo "\"  class=\"btn btn-danger\">Retour</a>
                </div>
            </div>
        </form>
    </div>
                    
                    
  <!-- knob -->
  <script>
    \$(function(\$) {

      \$(\".knob\").knob({
        change: function(value) {
          //console.log(\"change : \" + value);
        },
        release: function(value) {
          //console.log(this.\$.attr('value'));
          console.log(\"release : \" + value);
        },
        cancel: function() {
          console.log(\"cancel : \", this);
        },
        /*format : function (value) {
         return value + '%';
         },*/
        draw: function() {

          // \"tron\" case
          if (this.\$.data('skin') == 'tron') {

            this.cursorExt = 0.3;

            var a = this.arc(this.cv) // Arc
              ,
              pa // Previous arc
              , r = 1;

            this.g.lineWidth = this.lineWidth;

            if (this.o.displayPrevious) {
              pa = this.arc(this.v);
              this.g.beginPath();
              this.g.strokeStyle = this.pColor;
              this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, pa.s, pa.e, pa.d);
              this.g.stroke();
            }

            this.g.beginPath();
            this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, a.s, a.e, a.d);
            this.g.stroke();

            this.g.lineWidth = 2;
            this.g.beginPath();
            this.g.strokeStyle = this.o.fgColor;
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
            this.g.stroke();

            return false;
          }
        }
      });

      // Example of infinite knob, iPod click wheel
      var v, up = 0,
        down = 0,
        i = 0,
        \$idir = \$(\"div.idir\"),
        \$ival = \$(\"div.ival\"),
        incr = function() {
          i++;
          \$idir.show().html(\"+\").fadeOut();
          \$ival.html(i);
        },
        decr = function() {
          i--;
          \$idir.show().html(\"-\").fadeOut();
          \$ival.html(i);
        };
      \$(\"input.infinite\").knob({
        min: 0,
        max: 20,
        stopper: false,
        change: function() {
          if (v > this.cv) {
            if (up) {
              decr();
              up = 0;
            } else {
              up = 1;
              down = 0;
            }
          } else {
            if (v < this.cv) {
              if (down) {
                incr();
                down = 0;
              } else {
                down = 1;
                up = 0;
              }
            }
          }
          v = this.cv;
        }
      });
    });
  </script>
  <!-- /knob -->
                    
                    
                    
                    
                    
";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:Ticket:ajouterTicket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 25,  43 => 15,  36 => 10,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* */
/* */
/* {% block bodyAdmin %}*/
/* */
/*     <h1>Ajout des tickets</h1> */
/*     <div class="col-md-8" style="margin-left: 15%;margin-right: 2%;">*/
/*         {# {{form(Form)}}#}*/
/*         <form method="POST" action=""  onsubmit="new PNotify({*/
/*                             title: 'Ajout Effectué',*/
/*                             text: 'Votre billetterie a eté ajouté avec succes!',*/
/*                             type: 'success'*/
/*                         });"> */
/*             {{form_widget(Form)}}*/
/*             <label > Nombre de Tickets (%) :</label></br>*/
/*             <input id="nbTicket" name="nbTicket" class="knob" data-width="110" data-height="120"*/
/*                    data-displayPrevious=true data-fgColor="#26B22A" data-skin="tron" data-thickness=".2" value="50">*/
/*             */
/*             */
/*             <div class="ln_solid" style="margin-top: 2%"> </div>*/
/*             <div class="form-group">*/
/*                 <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 2%">*/
/*                     <input type="submit" value="Valider" class="btn btn-flat2 bg-blue-sky">*/
/*                     <a href="{{path('list_matchsInfo')}}"  class="btn btn-danger">Retour</a>*/
/*                 </div>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/*                     */
/*                     */
/*   <!-- knob -->*/
/*   <script>*/
/*     $(function($) {*/
/* */
/*       $(".knob").knob({*/
/*         change: function(value) {*/
/*           //console.log("change : " + value);*/
/*         },*/
/*         release: function(value) {*/
/*           //console.log(this.$.attr('value'));*/
/*           console.log("release : " + value);*/
/*         },*/
/*         cancel: function() {*/
/*           console.log("cancel : ", this);*/
/*         },*/
/*         /*format : function (value) {*/
/*          return value + '%';*/
/*          },*//* */
/*         draw: function() {*/
/* */
/*           // "tron" case*/
/*           if (this.$.data('skin') == 'tron') {*/
/* */
/*             this.cursorExt = 0.3;*/
/* */
/*             var a = this.arc(this.cv) // Arc*/
/*               ,*/
/*               pa // Previous arc*/
/*               , r = 1;*/
/* */
/*             this.g.lineWidth = this.lineWidth;*/
/* */
/*             if (this.o.displayPrevious) {*/
/*               pa = this.arc(this.v);*/
/*               this.g.beginPath();*/
/*               this.g.strokeStyle = this.pColor;*/
/*               this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, pa.s, pa.e, pa.d);*/
/*               this.g.stroke();*/
/*             }*/
/* */
/*             this.g.beginPath();*/
/*             this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;*/
/*             this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, a.s, a.e, a.d);*/
/*             this.g.stroke();*/
/* */
/*             this.g.lineWidth = 2;*/
/*             this.g.beginPath();*/
/*             this.g.strokeStyle = this.o.fgColor;*/
/*             this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);*/
/*             this.g.stroke();*/
/* */
/*             return false;*/
/*           }*/
/*         }*/
/*       });*/
/* */
/*       // Example of infinite knob, iPod click wheel*/
/*       var v, up = 0,*/
/*         down = 0,*/
/*         i = 0,*/
/*         $idir = $("div.idir"),*/
/*         $ival = $("div.ival"),*/
/*         incr = function() {*/
/*           i++;*/
/*           $idir.show().html("+").fadeOut();*/
/*           $ival.html(i);*/
/*         },*/
/*         decr = function() {*/
/*           i--;*/
/*           $idir.show().html("-").fadeOut();*/
/*           $ival.html(i);*/
/*         };*/
/*       $("input.infinite").knob({*/
/*         min: 0,*/
/*         max: 20,*/
/*         stopper: false,*/
/*         change: function() {*/
/*           if (v > this.cv) {*/
/*             if (up) {*/
/*               decr();*/
/*               up = 0;*/
/*             } else {*/
/*               up = 1;*/
/*               down = 0;*/
/*             }*/
/*           } else {*/
/*             if (v < this.cv) {*/
/*               if (down) {*/
/*                 incr();*/
/*                 down = 0;*/
/*               } else {*/
/*                 down = 1;*/
/*                 up = 0;*/
/*               }*/
/*             }*/
/*           }*/
/*           v = this.cv;*/
/*         }*/
/*       });*/
/*     });*/
/*   </script>*/
/*   <!-- /knob -->*/
/*                     */
/*                     */
/*                     */
/*                     */
/*                     */
/* {% endblock %}*/
/* */
