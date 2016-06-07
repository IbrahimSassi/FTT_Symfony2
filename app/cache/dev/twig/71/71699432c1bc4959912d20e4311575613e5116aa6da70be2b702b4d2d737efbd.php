<?php

/* FTTUtilisateurBundle:Actualite:listActualites.html.twig */
class __TwigTemplate_59ecb8a7b5d522af63a80dd1396dabf504b1700d0f5a5fcfbb525e4b9238bd01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTUtilisateurBundle::layoutGlobal.html.twig", "FTTUtilisateurBundle:Actualite:listActualites.html.twig", 1);
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
        echo "        <!-- Recent Post -->
        <div class=\"col-md-12\">

            <div class=\"titles\">
                <h4>Les derniéres actualités</h4>
            </div>
           ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actualites"]) ? $context["actualites"] : $this->getContext($context, "actualites")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["actualite"]) {
            // line 10
            echo "
            <!-- Post Item -->
            <div class=\"post-item\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"img-hover\">
                            
                           <img alt=\"Embedded Image\" src=\"data:image/png;base64,";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imagesActualite"]) ? $context["imagesActualite"] : $this->getContext($context, "imagesActualite")), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array"), "html", null, true);
            echo "\" class=\"img-responsive\">
                           <div class=\"overlay\"><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("single_article", array("id" => $this->getAttribute($context["actualite"], "id", array()))), "html", null, true);
            echo "\">+</a></div>
                        </div>
                    </div>
                    <div class=\"col-md-8\">
                        <h4><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("single_article", array("id" => $this->getAttribute($context["actualite"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actualite"], "titreActualite", array()), "html", null, true);
            echo "</a></h4>
                        <p class=\"data-info\">";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["actualite"], "dateActualite", array()), "d-m-Y"), "html", null, true);
            echo "  / <i class=\"fa fa-comments\"></i><a href=\"#\">0</a></p>
                        <p>";
            // line 24
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["actualite"], "descriptionActualite", array()), 0, 200), "html", null, true);
            echo "... <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("single_article", array("id" => $this->getAttribute($context["actualite"], "id", array()))), "html", null, true);
            echo "\"> [+]</a></p>                                            
                    </div>
               </div>
            </div>
             <!-- End Post Item -->
             
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            <div class=\"navigation\">
                ";
        // line 32
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["actualites"]) ? $context["actualites"] : $this->getContext($context, "actualites")));
        echo "
            </div>
        </div>  
        <!-- End Recent Post --> 
    ";
    }

    public function getTemplateName()
    {
        return "FTTUtilisateurBundle:Actualite:listActualites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 32,  109 => 31,  86 => 24,  82 => 23,  76 => 22,  69 => 18,  65 => 17,  56 => 10,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "FTTUtilisateurBundle::layoutGlobal.html.twig" %}*/
/*     {% block body %}*/
/*         <!-- Recent Post -->*/
/*         <div class="col-md-12">*/
/* */
/*             <div class="titles">*/
/*                 <h4>Les derniéres actualités</h4>*/
/*             </div>*/
/*            {% for actualite in actualites %}*/
/* */
/*             <!-- Post Item -->*/
/*             <div class="post-item">*/
/*                 <div class="row">*/
/*                     <div class="col-md-4">*/
/*                         <div class="img-hover">*/
/*                             */
/*                            <img alt="Embedded Image" src="data:image/png;base64,{{ imagesActualite[loop.index-1] }}" class="img-responsive">*/
/*                            <div class="overlay"><a href="{{path('single_article', {'id':actualite.id})}}">+</a></div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-8">*/
/*                         <h4><a href="{{path('single_article', {'id':actualite.id})}}"> {{actualite.titreActualite}}</a></h4>*/
/*                         <p class="data-info">{{actualite.dateActualite|date('d-m-Y')}}  / <i class="fa fa-comments"></i><a href="#">0</a></p>*/
/*                         <p>{{actualite.descriptionActualite[0:200]}}... <a href="{{path('single_article', {'id':actualite.id})}}"> [+]</a></p>                                            */
/*                     </div>*/
/*                </div>*/
/*             </div>*/
/*              <!-- End Post Item -->*/
/*              */
/*             {% endfor %}*/
/*             <div class="navigation">*/
/*                 {{ knp_pagination_render(actualites) }}*/
/*             </div>*/
/*         </div>  */
/*         <!-- End Recent Post --> */
/*     {% endblock %}*/
/* */
