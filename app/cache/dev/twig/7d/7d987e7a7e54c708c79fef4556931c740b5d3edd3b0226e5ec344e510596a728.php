<?php

/* FTTAdherentBundle:Profil:consulterProfil.html.twig */
class __TwigTemplate_66f70f38f5f81fa6cc4889687b84f8f38911a544585f61411b1aeadea22de857 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdherentBundle::layoutAdherent.html.twig", "FTTAdherentBundle:Profil:consulterProfil.html.twig", 1);
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
        echo "    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>Profil</h2>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <div class=\"col-md-3 col-sm-3 col-xs-12 profile_left\">
                        <div class=\"profile_img\">
                            <!-- end of image cropping -->
                            <div id=\"crop-avatar\">
                                <!-- Current avatar -->
                                <div class=\"avatar-view\" title=\"Changer l'avatar\" >
                                    <br>
                                    <img alt=\"Embedded Image\" src=\"data:image/png;base64,";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")), "html", null, true);
        echo "\" class=\"img-responsive\">
                                    <button class=\"md-trigger btn-flat4\" data-modal=\"modal-image\" style=\"width:100%\">
                                        <i class=\"fa fa-camera\" aria-hidden=\"true\"></i> 
                                        Changer d'image </button>
                                </div>
                                <!-- Cropping modal -->
                                <div class=\"modal fade\" id=\"avatar-modal\" aria-hidden=\"true\" aria-labelledby=\"avatar-modal-label\" role=\"dialog\" tabindex=\"-1\">
                                    <div class=\"modal-dialog modal-lg\">
                                        <div class=\"modal-content\">

                                        </div>
                                    </div>
                                </div>
                                <!-- /.modal -->

                                <!-- Loading state -->
                                <div class=\"loading\" aria-label=\"Loading\" role=\"img\" tabindex=\"-1\"></div>
                            </div>
                            <!-- end of image cropping -->

                        </div>
                        <h3>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nomUser", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenomUser", array()), "html", null, true);
        echo "</h3>

                        <br />



                    </div>
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">

                        <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                            <br>
                            <div id=\"myTabContent\" class=\"tab-content\">
                                <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"tab_content1\" aria-labelledby=\"home-tab\">

                                    <table style=\"width: 80%;font-size: large\" class=\"table-striped table-hover\">
                                        <tr>
                                            <td>
                                                <strong>Nom : </strong>   
                                            </td>
                                            <td>
                                                ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nomUser", array()), "html", null, true);
        echo " 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Prenom : </strong>   
                                            </td>
                                            <td>
                                                ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenomUser", array()), "html", null, true);
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Age : </strong>   
                                            </td>
                                            <td>
                                                ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ageUser", array()), "html", null, true);
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Telephone : </strong>   
                                            </td>
                                            <td>
                                                ";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "telUser", array()), "html", null, true);
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Email : </strong>   
                                            </td>
                                            <td>
                                                ";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Identifiant : </strong>   
                                            </td>
                                            <td>
                                                ";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Points :</strong>
                                            </td>
                                            <td>
                                                ";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pointsAdherent", array()), "html", null, true);
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Solde :</strong>
                                            </td>
                                            <td>
                                                ";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "soldeAdherent", array()), "html", null, true);
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Derniere connexion :</strong>
                                            </td>
                                            <td>
                                                ";
        // line 124
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastLogin", array()), "d-m-Y"), "html", null, true);
        echo "
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <a href=\"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-key\" aria-hidden=\"true\"></i>
                                        Modifier Mot de passe</a>
                                    <a href=\"";
        // line 131
        echo $this->env->getExtension('routing')->getPath("modifier_profil_adherent");
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-edit m-right-xs\"></i>Modifier Profile</a>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div style=\"background-color: #D8D8D8; border: #000 solid thin;width: 800px\" class=\"md-modal md-effect-11\" id=\"modal-image\">
        <form enctype=\"multipart/form-data\" action=\"";
        // line 145
        echo $this->env->getExtension('routing')->getPath("consulter_profil_adherent");
        echo "\" method=\"POST\" >
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"avatar-modal-label\">Change Avatar</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"avatar-body\">

                    <!-- Upload image and data -->
                    <div class=\"avatar-upload\">
                        ";
        // line 154
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form');
        echo "
                        <button class=\"btn btn-success\" type=\"submit\">Charger</button>
                    </div>

                    <!-- Crop and preview -->
                    <center>
                        <button class=\"btn btn-primary btn-lg md-close\" >Close me!</button>
                    </center>
                </div>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FTTAdherentBundle:Profil:consulterProfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 154,  215 => 145,  198 => 131,  193 => 129,  185 => 124,  174 => 116,  163 => 108,  152 => 100,  141 => 92,  130 => 84,  119 => 76,  108 => 68,  97 => 60,  72 => 40,  48 => 19,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FTTAdherentBundle::layoutAdherent.html.twig" %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class="col-md-12 col-sm-12 col-xs-12">*/
/*             <div class="x_panel">*/
/*                 <div class="x_title">*/
/*                     <h2>Profil</h2>*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*                 <div class="x_content">*/
/*                     <div class="col-md-3 col-sm-3 col-xs-12 profile_left">*/
/*                         <div class="profile_img">*/
/*                             <!-- end of image cropping -->*/
/*                             <div id="crop-avatar">*/
/*                                 <!-- Current avatar -->*/
/*                                 <div class="avatar-view" title="Changer l'avatar" >*/
/*                                     <br>*/
/*                                     <img alt="Embedded Image" src="data:image/png;base64,{{ images }}" class="img-responsive">*/
/*                                     <button class="md-trigger btn-flat4" data-modal="modal-image" style="width:100%">*/
/*                                         <i class="fa fa-camera" aria-hidden="true"></i> */
/*                                         Changer d'image </button>*/
/*                                 </div>*/
/*                                 <!-- Cropping modal -->*/
/*                                 <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">*/
/*                                     <div class="modal-dialog modal-lg">*/
/*                                         <div class="modal-content">*/
/* */
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <!-- /.modal -->*/
/* */
/*                                 <!-- Loading state -->*/
/*                                 <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>*/
/*                             </div>*/
/*                             <!-- end of image cropping -->*/
/* */
/*                         </div>*/
/*                         <h3>{{app.user.nomUser}} {{app.user.prenomUser}}</h3>*/
/* */
/*                         <br />*/
/* */
/* */
/* */
/*                     </div>*/
/*                     <div class="col-md-9 col-sm-9 col-xs-12">*/
/* */
/*                         <div class="" role="tabpanel" data-example-id="togglable-tabs">*/
/*                             <br>*/
/*                             <div id="myTabContent" class="tab-content">*/
/*                                 <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">*/
/* */
/*                                     <table style="width: 80%;font-size: large" class="table-striped table-hover">*/
/*                                         <tr>*/
/*                                             <td>*/
/*                                                 <strong>Nom : </strong>   */
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{app.user.nomUser}} */
/*                                             </td>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <td>*/
/*                                                 <strong>Prenom : </strong>   */
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{app.user.prenomUser}}*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <td>*/
/*                                                 <strong>Age : </strong>   */
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{app.user.ageUser}}*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <td>*/
/*                                                 <strong>Telephone : </strong>   */
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{app.user.telUser}}*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <td>*/
/*                                                 <strong>Email : </strong>   */
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{app.user.email}}*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <td>*/
/*                                                 <strong>Identifiant : </strong>   */
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{app.user.username}} */
/*                                             </td>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <td>*/
/*                                                 <strong>Points :</strong>*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{app.user.pointsAdherent}}*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <td>*/
/*                                                 <strong>Solde :</strong>*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{app.user.soldeAdherent}}*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <td>*/
/*                                                 <strong>Derniere connexion :</strong>*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{app.user.lastLogin | date('d-m-Y')}}*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                     </table>*/
/*                                     <br>*/
/*                                     <a href="{{path('fos_user_change_password')}}" class="btn btn-success"><i class="fa fa-key" aria-hidden="true"></i>*/
/*                                         Modifier Mot de passe</a>*/
/*                                     <a href="{{path('modifier_profil_adherent')}}" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Modifier Profile</a>*/
/* */
/*                                 </div>*/
/* */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     <div style="background-color: #D8D8D8; border: #000 solid thin;width: 800px" class="md-modal md-effect-11" id="modal-image">*/
/*         <form enctype="multipart/form-data" action="{{path('consulter_profil_adherent')}}" method="POST" >*/
/*             <div class="modal-header">*/
/*                 <h4 class="modal-title" id="avatar-modal-label">Change Avatar</h4>*/
/*             </div>*/
/*             <div class="modal-body">*/
/*                 <div class="avatar-body">*/
/* */
/*                     <!-- Upload image and data -->*/
/*                     <div class="avatar-upload">*/
/*                         {{form(Form)}}*/
/*                         <button class="btn btn-success" type="submit">Charger</button>*/
/*                     </div>*/
/* */
/*                     <!-- Crop and preview -->*/
/*                     <center>*/
/*                         <button class="btn btn-primary btn-lg md-close" >Close me!</button>*/
/*                     </center>*/
/*                 </div>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
/* */
