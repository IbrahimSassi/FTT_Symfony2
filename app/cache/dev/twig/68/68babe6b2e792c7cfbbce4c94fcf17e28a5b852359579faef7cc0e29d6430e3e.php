<?php

/* FTTAdminBundle:Reclamation:RepondreReclamation.html.twig */
class __TwigTemplate_7bef46b1f95395f5640ff78793f8ae882e2cf53206682e9da81b040c77f6203e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:Reclamation:RepondreReclamation.html.twig", 1);
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

    // line 3
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 4
        echo "      

<body> 



 <hr>

  <h2> <strong> Répondre aux contacts</strong> </h2>
 

 <p>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'errors');
        echo "</p>

 <hr>

 <form  method=\"POST\" action=\"\" > 
     <table>
       <tr>
           <td>
               ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "email", array()), 'label');
        echo "
           </td>
           <td>
               ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "email", array()), 'widget');
        echo "
           </td>
       </tr>
         
       
         <tr>
           <td>
               ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "sujet", array()), 'label');
        echo "
           </td>
           <td>
               ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "sujet", array()), 'widget');
        echo "
           </td>
       </tr>
    
         <tr>
           <td>
               ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "description", array()), 'label');
        echo "
           </td>
           <td>
               ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "description", array()), 'widget');
        echo "
           </td>
       </tr>
     <tr>
           <td>
               ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "reponseReclamation", array()), 'label');
        echo "
           </td>
           <td>
               ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "reponseReclamation", array()), 'widget');
        echo "
           </td>
       </tr>
     
         
       <tr>
           <td>
       <input type=\"submit\"  value=\"envoyer\">
           </td>
       </tr>

 </form>

</body>
        ";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:Reclamation:RepondreReclamation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 53,  100 => 50,  92 => 45,  86 => 42,  77 => 36,  71 => 33,  61 => 26,  55 => 23,  44 => 15,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/*         {% block bodyAdmin %}*/
/*       */
/* */
/* <body> */
/* */
/* */
/* */
/*  <hr>*/
/* */
/*   <h2> <strong> Répondre aux contacts</strong> </h2>*/
/*  */
/* */
/*  <p>{{form_errors(Form)}}</p>*/
/* */
/*  <hr>*/
/* */
/*  <form  method="POST" action="" > */
/*      <table>*/
/*        <tr>*/
/*            <td>*/
/*                {{form_label(Form.email)}}*/
/*            </td>*/
/*            <td>*/
/*                {{form_widget(Form.email)}}*/
/*            </td>*/
/*        </tr>*/
/*          */
/*        */
/*          <tr>*/
/*            <td>*/
/*                {{form_label(Form.sujet)}}*/
/*            </td>*/
/*            <td>*/
/*                {{form_widget(Form.sujet)}}*/
/*            </td>*/
/*        </tr>*/
/*     */
/*          <tr>*/
/*            <td>*/
/*                {{form_label(Form.description)}}*/
/*            </td>*/
/*            <td>*/
/*                {{form_widget(Form.description)}}*/
/*            </td>*/
/*        </tr>*/
/*      <tr>*/
/*            <td>*/
/*                {{form_label(Form.reponseReclamation)}}*/
/*            </td>*/
/*            <td>*/
/*                {{form_widget(Form.reponseReclamation)}}*/
/*            </td>*/
/*        </tr>*/
/*      */
/*          */
/*        <tr>*/
/*            <td>*/
/*        <input type="submit"  value="envoyer">*/
/*            </td>*/
/*        </tr>*/
/* */
/*  </form>*/
/* */
/* </body>*/
/*         {% endblock %}*/
/* */
/*    */
