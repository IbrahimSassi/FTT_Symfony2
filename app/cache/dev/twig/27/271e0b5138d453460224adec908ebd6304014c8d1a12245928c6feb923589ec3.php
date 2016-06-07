<?php

/* FTTUtilisateurBundle:Actualite:article.html.twig */
class __TwigTemplate_77585a568d60e7bec607adaba14f5f8440d8823c9d94cc56f703dc3251620392 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTUtilisateurBundle::layoutGlobal.html.twig", "FTTUtilisateurBundle:Actualite:article.html.twig", 1);
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "


        <!-- Single Post -->
        <div class=\"panel-box\">

            <!-- Title Post -->
            <div class=\"titles\">
                <h4>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titreActualite", array()), "html", null, true);
        echo "</h4>
            </div>
            <!-- Title Post -->

            <!-- Post Item -->
            <div class=\"post-item single-news\">
                <div class=\"row\">
                    <!-- Image Post -->
                    <div class=\"col-md-12\">
                        <p class=\"data-info\">";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "dateActualite", array()), "Y-m-d"), "html", null, true);
        echo "  / <i class=\"fa fa-comments\"></i><a href=\"#\"></a></p>
                        <img alt=\"Embedded Image\" src=\"data:image/png;base64,";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")), "html", null, true);
        echo "\" width=\"730px\" height=\"400px\"> 

                    </div>
                    <!-- Image Post -->

                    <!-- Info Post -->
                    <div class=\"col-md-12 padding-top-mini\">
                        <p>
                            ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "descriptionActualite", array()), "html", null, true);
        echo " 
                        </p>

                    </div>
                    <!-- End Info Post -->
                </div>

                <div class=\"col-xs-12 bottom text-center\">
                    ";
        // line 37
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons(array("facebook" => true));
        echo "
                    ";
        // line 38
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons(array("twitter" => true));
        echo "
                </div>
            </div>
                
               
                
                
    <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/stylecommentaire.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js\"></script>


    <br/>
    <!-- Comments --> 
    <div class=\"panel-box\">
        <!-- Title Post -->
        <div class=\"titles\">

        </div>
        <!-- Title Post -->

        <ul  class=\"testimonials\">

            <li>
                <blockquote>
                    ";
        // line 63
        $this->loadTemplate("FOSCommentBundle:Thread:async.html.twig", "FTTUtilisateurBundle:Actualite:article.html.twig", 63)->display(array_merge($context, array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))));
        // line 64
        echo "                </blockquote>
            </li>

        </ul>
    </div>


    <!-- Comment Form --> 
    <div class=\"panel-box\">

        <!-- End Comment Form --> 
    </div>

    <!-- End Comments -->  

                
                
                
                
                
                
            <!-- End Post Item -->
        </div>  
        <!-- End Single Post --> 


    ";
    }

    public function getTemplateName()
    {
        return "FTTUtilisateurBundle:Actualite:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 64,  114 => 63,  93 => 45,  83 => 38,  79 => 37,  68 => 29,  57 => 21,  53 => 20,  41 => 11,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "FTTUtilisateurBundle::layoutGlobal.html.twig" %}*/
/* {% block body %}*/
/* */
/* */
/* */
/*         <!-- Single Post -->*/
/*         <div class="panel-box">*/
/* */
/*             <!-- Title Post -->*/
/*             <div class="titles">*/
/*                 <h4>{{article.titreActualite}}</h4>*/
/*             </div>*/
/*             <!-- Title Post -->*/
/* */
/*             <!-- Post Item -->*/
/*             <div class="post-item single-news">*/
/*                 <div class="row">*/
/*                     <!-- Image Post -->*/
/*                     <div class="col-md-12">*/
/*                         <p class="data-info">{{article.dateActualite | date('Y-m-d')}}  / <i class="fa fa-comments"></i><a href="#"></a></p>*/
/*                         <img alt="Embedded Image" src="data:image/png;base64,{{ images }}" width="730px" height="400px"> */
/* */
/*                     </div>*/
/*                     <!-- Image Post -->*/
/* */
/*                     <!-- Info Post -->*/
/*                     <div class="col-md-12 padding-top-mini">*/
/*                         <p>*/
/*                             {{article.descriptionActualite}} */
/*                         </p>*/
/* */
/*                     </div>*/
/*                     <!-- End Info Post -->*/
/*                 </div>*/
/* */
/*                 <div class="col-xs-12 bottom text-center">*/
/*                     {{ socialButtons({'facebook':true}) }}*/
/*                     {{ socialButtons({'twitter':true}) }}*/
/*                 </div>*/
/*             </div>*/
/*                 */
/*                */
/*                 */
/*                 */
/*     <link href="{{asset('css/stylecommentaire.css')}}" rel="stylesheet" media="screen">*/
/* */
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>*/
/* */
/* */
/*     <br/>*/
/*     <!-- Comments --> */
/*     <div class="panel-box">*/
/*         <!-- Title Post -->*/
/*         <div class="titles">*/
/* */
/*         </div>*/
/*         <!-- Title Post -->*/
/* */
/*         <ul  class="testimonials">*/
/* */
/*             <li>*/
/*                 <blockquote>*/
/*                     {% include 'FOSCommentBundle:Thread:async.html.twig' with {'id': article.id} %}*/
/*                 </blockquote>*/
/*             </li>*/
/* */
/*         </ul>*/
/*     </div>*/
/* */
/* */
/*     <!-- Comment Form --> */
/*     <div class="panel-box">*/
/* */
/*         <!-- End Comment Form --> */
/*     </div>*/
/* */
/*     <!-- End Comments -->  */
/* */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*             <!-- End Post Item -->*/
/*         </div>  */
/*         <!-- End Single Post --> */
/* */
/* */
/*     {% endblock %}*/
/* */
/* */
