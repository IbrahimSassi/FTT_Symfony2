<?php

/* FTTArbitreBundle:Profil:consulterProfil.html.twig */
class __TwigTemplate_ec6b4f84376a9743e983be4009c4e4af543eea03a8bbeb8419a0a1c2f9845c7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("FTTArbitreBundle::layoutArbitre.html.twig", "FTTArbitreBundle:Profil:consulterProfil.html.twig", 2);
        $this->blocks = array(
            'header1' => array($this, 'block_header1'),
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

    // line 3
    public function block_header1($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FTTAdminBundle::Default/Includes/header.html.twig");
        echo "
";
    }

    // line 6
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 7
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
                                <div class=\"avatar-view\" title=\"Change the avatar\">
                                    <img alt=\"Embedded Image\" src=\"data:image/png;base64,";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")), "html", null, true);
        echo "\" class=\"img-responsive\">
                                </div>
                                <!-- Cropping modal -->
                                <div class=\"modal fade\" id=\"avatar-modal\" aria-hidden=\"true\" aria-labelledby=\"avatar-modal-label\" role=\"dialog\" tabindex=\"-1\">
                                    <div class=\"modal-dialog modal-lg\">
                                        <div class=\"modal-content\">
                                            <form enctype=\"multipart/form-data\" action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("consulter_profil_arbitre");
        echo "\" method=\"POST\" >
                                                <div class=\"modal-header\">
                                                    <button class=\"close\" data-dismiss=\"modal\" type=\"button\">&times;</button>
                                                    <h4 class=\"modal-title\" id=\"avatar-modal-label\">Change Avatar</h4>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <div class=\"avatar-body\">

                                                        <!-- Upload image and data -->
                                                        <div class=\"avatar-upload\">
                                                            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form');
        echo "
                                                        </div>

                                                        <!-- Crop and preview -->
                                                        <div class=\"row\">
                                                            <div class=\"col-md-9\">
                                                            </div>
                                                            <div class=\"col-md-3\">
                                                            </div>
                                                        </div>

                                                        <div class=\"row avatar-btns\">
                                                            <div class=\"col-md-9\">
                                                                <div class=\"btn-group\">
                                                                </div>
                                                                <div class=\"btn-group\">
                                                                </div>
                                                            </div>
                                                            <div class=\"col-md-3\">
                                                                <button class=\"btn btn-primary btn-block avatar-save\" 

                                                                        type=\"submit\">Done</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class=\"modal-footer\">
                                                                  <button class=\"btn btn-default\" data-dismiss=\"modal\" type=\"button\">Close</button>
                                                                </div> -->
                                            </form>
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
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nomUser", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenomUser", array()), "html", null, true);
        echo "</h3>

                        <ul class=\"list-unstyled user_data\">
                            <li><i class=\"fa fa-map-marker user-profile-icon\"></i> Fédération Tunisienne de Tennis, Cité Nationale Sportive El Menzah 
                                B.P 350 Tunis 1004 
                            </li>

                            <li>
                                <i class=\"fa fa-briefcase user-profile-icon\"></i> Categorie : ";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "categorieArbitre", array()), "html", null, true);
        echo "
                            </li>


                        </ul>

                        <a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-key\" aria-hidden=\"true\"></i>
                            Modifier Mot de passe</a>
                        <a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("modifier_profil_arbitre");
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-edit m-right-xs\"></i>Modifier Profile</a>
                        <br />



                    </div>
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">


                        <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                            <ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
                                <li role=\"presentation\" class=\"active\"><a href=\"#tab_content1\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">Informations personnelle</a>
                                </li>
                                <li role=\"presentation\" class=\"\"><a href=\"#tab_content2\" role=\"tab\" id=\"profile-tab\" data-toggle=\"tab\" aria-expanded=\"false\">Vue d'ensemble</a>
                                </li>
                                <li role=\"presentation\" class=\"\"><a href=\"#tab_content3\" role=\"tab\" id=\"profile-tab2\" data-toggle=\"tab\" aria-expanded=\"false\">Paramètres généraux du compte</a>
                                </li>
                            </ul>
                            <div id=\"myTabContent\" class=\"tab-content\">
                                <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"tab_content1\" aria-labelledby=\"home-tab\">

                                    <table style=\"width: 80%;font-size: large\" class=\"table-striped table-hover\">
                                        <tr>
                                            <td>
                                                <strong>Nom : </strong>   
                                            </td>
                                            <td>
                                                ";
        // line 121
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
        // line 129
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
        // line 137
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
        // line 145
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
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "
                                            </td>
                                        </tr>
                                    </table>


                                </div>
                                <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab_content2\" aria-labelledby=\"profile-tab\">

                                    <!-- start user projects -->
                                    <table class=\"data table table-striped no-margin\">
                                        <tr>
                                            <td>
                                                <strong><h4><b>Derniere connexion :</b></h4></strong>
                                            </td>
                                            <td>
                                                <strong><h4>";
        // line 169
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastLogin", array()), "d-m-Y"), "html", null, true);
        echo "</h4></strong>
                                            </td>
                                    </table>
                                    <!-- end user projects -->

                                </div>
                                <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab_content3\" aria-labelledby=\"profile-tab\">
                                    <table style=\"width: 80%;font-size: large\" class=\"table-striped table-hover\">
                                        <tr>
                                            <td>
                                                <strong>Identifiant : </strong>   
                                            </td>
                                            <td>
                                                ";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " 
                                            </td>
                                        </tr>
                                    </table>             
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FTTArbitreBundle:Profil:consulterProfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 182,  244 => 169,  225 => 153,  214 => 145,  203 => 137,  192 => 129,  181 => 121,  151 => 94,  146 => 92,  137 => 86,  124 => 78,  80 => 37,  67 => 27,  58 => 21,  42 => 7,  39 => 6,  32 => 4,  29 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "FTTArbitreBundle::layoutArbitre.html.twig" %}*/
/* {% block header1 %}*/
/*     {{ include('FTTAdminBundle::Default/Includes/header.html.twig') }}*/
/* {% endblock %}*/
/* {% block bodyAdmin %}*/
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
/*                                 <div class="avatar-view" title="Change the avatar">*/
/*                                     <img alt="Embedded Image" src="data:image/png;base64,{{ images }}" class="img-responsive">*/
/*                                 </div>*/
/*                                 <!-- Cropping modal -->*/
/*                                 <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">*/
/*                                     <div class="modal-dialog modal-lg">*/
/*                                         <div class="modal-content">*/
/*                                             <form enctype="multipart/form-data" action="{{path('consulter_profil_arbitre')}}" method="POST" >*/
/*                                                 <div class="modal-header">*/
/*                                                     <button class="close" data-dismiss="modal" type="button">&times;</button>*/
/*                                                     <h4 class="modal-title" id="avatar-modal-label">Change Avatar</h4>*/
/*                                                 </div>*/
/*                                                 <div class="modal-body">*/
/*                                                     <div class="avatar-body">*/
/* */
/*                                                         <!-- Upload image and data -->*/
/*                                                         <div class="avatar-upload">*/
/*                                                             {{form(Form)}}*/
/*                                                         </div>*/
/* */
/*                                                         <!-- Crop and preview -->*/
/*                                                         <div class="row">*/
/*                                                             <div class="col-md-9">*/
/*                                                             </div>*/
/*                                                             <div class="col-md-3">*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="row avatar-btns">*/
/*                                                             <div class="col-md-9">*/
/*                                                                 <div class="btn-group">*/
/*                                                                 </div>*/
/*                                                                 <div class="btn-group">*/
/*                                                                 </div>*/
/*                                                             </div>*/
/*                                                             <div class="col-md-3">*/
/*                                                                 <button class="btn btn-primary btn-block avatar-save" */
/* */
/*                                                                         type="submit">Done</button>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 <!-- <div class="modal-footer">*/
/*                                                                   <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>*/
/*                                                                 </div> -->*/
/*                                             </form>*/
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
/*                         <ul class="list-unstyled user_data">*/
/*                             <li><i class="fa fa-map-marker user-profile-icon"></i> Fédération Tunisienne de Tennis, Cité Nationale Sportive El Menzah */
/*                                 B.P 350 Tunis 1004 */
/*                             </li>*/
/* */
/*                             <li>*/
/*                                 <i class="fa fa-briefcase user-profile-icon"></i> Categorie : {{app.user.categorieArbitre}}*/
/*                             </li>*/
/* */
/* */
/*                         </ul>*/
/* */
/*                         <a href="{{path('fos_user_change_password')}}" class="btn btn-success"><i class="fa fa-key" aria-hidden="true"></i>*/
/*                             Modifier Mot de passe</a>*/
/*                         <a href="{{path('modifier_profil_arbitre')}}" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Modifier Profile</a>*/
/*                         <br />*/
/* */
/* */
/* */
/*                     </div>*/
/*                     <div class="col-md-9 col-sm-9 col-xs-12">*/
/* */
/* */
/*                         <div class="" role="tabpanel" data-example-id="togglable-tabs">*/
/*                             <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">*/
/*                                 <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Informations personnelle</a>*/
/*                                 </li>*/
/*                                 <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Vue d'ensemble</a>*/
/*                                 </li>*/
/*                                 <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Paramètres généraux du compte</a>*/
/*                                 </li>*/
/*                             </ul>*/
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
/*                                     </table>*/
/* */
/* */
/*                                 </div>*/
/*                                 <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">*/
/* */
/*                                     <!-- start user projects -->*/
/*                                     <table class="data table table-striped no-margin">*/
/*                                         <tr>*/
/*                                             <td>*/
/*                                                 <strong><h4><b>Derniere connexion :</b></h4></strong>*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 <strong><h4>{{app.user.lastLogin | date('d-m-Y')}}</h4></strong>*/
/*                                             </td>*/
/*                                     </table>*/
/*                                     <!-- end user projects -->*/
/* */
/*                                 </div>*/
/*                                 <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">*/
/*                                     <table style="width: 80%;font-size: large" class="table-striped table-hover">*/
/*                                         <tr>*/
/*                                             <td>*/
/*                                                 <strong>Identifiant : </strong>   */
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{app.user.username}} */
/*                                             </td>*/
/*                                         </tr>*/
/*                                     </table>             */
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
