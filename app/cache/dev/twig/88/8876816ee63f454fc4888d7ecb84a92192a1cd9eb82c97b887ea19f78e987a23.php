<?php

/* AdminBundle:Admin:config_setting.html.twig */
class __TwigTemplate_f5c126f0a19a83eaaa48a34fa80a707cd37d4eb59058b9d34bfd761a18e2e5b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Admin/Layout:layout.html.twig", "AdminBundle:Admin:config_setting.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle:Admin/Layout:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4202212b9dace524f251efda94fd449102374dec089b863f34ca85e7affaa771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4202212b9dace524f251efda94fd449102374dec089b863f34ca85e7affaa771->enter($__internal_4202212b9dace524f251efda94fd449102374dec089b863f34ca85e7affaa771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:config_setting.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4202212b9dace524f251efda94fd449102374dec089b863f34ca85e7affaa771->leave($__internal_4202212b9dace524f251efda94fd449102374dec089b863f34ca85e7affaa771_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_051ace4f7afd407f5f464c2570e2153c617772828fc805945b92d13cd4aa642a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_051ace4f7afd407f5f464c2570e2153c617772828fc805945b92d13cd4aa642a->enter($__internal_051ace4f7afd407f5f464c2570e2153c617772828fc805945b92d13cd4aa642a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<div class=\"page-content-wrapper\">
                <!-- BEGIN CONTENT BODY -->
                <div class=\"page-content\">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    <div class=\"theme-panel hidden-xs hidden-sm\">
                        <div class=\"toggler-close\"> </div>
                        <div class=\"theme-options\">
                            <div class=\"theme-option theme-colors clearfix\">
                                <span> THEME COLOR </span>
                                <ul>
                                    <li class=\"color-default current tooltips\" data-style=\"default\" data-container=\"body\" data-original-title=\"Default\"> </li>
                                    <li class=\"color-darkblue tooltips\" data-style=\"darkblue\" data-container=\"body\" data-original-title=\"Dark Blue\"> </li>
                                    <li class=\"color-blue tooltips\" data-style=\"blue\" data-container=\"body\" data-original-title=\"Blue\"> </li>
                                    <li class=\"color-grey tooltips\" data-style=\"grey\" data-container=\"body\" data-original-title=\"Grey\"> </li>
                                    <li class=\"color-light tooltips\" data-style=\"light\" data-container=\"body\" data-original-title=\"Light\"> </li>
                                    <li class=\"color-light2 tooltips\" data-style=\"light2\" data-container=\"body\" data-html=\"true\" data-original-title=\"Light 2\"> </li>
                                </ul>
                            </div>
                            <div class=\"theme-option\">
                                <span> Theme Style </span>
                                <select class=\"layout-style-option form-control input-sm\">
                                    <option value=\"square\" selected=\"selected\">Square corners</option>
                                    <option value=\"rounded\">Rounded corners</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Layout </span>
                                <select class=\"layout-option form-control input-sm\">
                                    <option value=\"fluid\" selected=\"selected\">Fluid</option>
                                    <option value=\"boxed\">Boxed</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Header </span>
                                <select class=\"page-header-option form-control input-sm\">
                                    <option value=\"fixed\" selected=\"selected\">Fixed</option>
                                    <option value=\"default\">Default</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Top Menu Dropdown</span>
                                <select class=\"page-header-top-dropdown-style-option form-control input-sm\">
                                    <option value=\"light\" selected=\"selected\">Light</option>
                                    <option value=\"dark\">Dark</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Sidebar Mode</span>
                                <select class=\"sidebar-option form-control input-sm\">
                                    <option value=\"fixed\">Fixed</option>
                                    <option value=\"default\" selected=\"selected\">Default</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Sidebar Menu </span>
                                <select class=\"sidebar-menu-option form-control input-sm\">
                                    <option value=\"accordion\" selected=\"selected\">Accordion</option>
                                    <option value=\"hover\">Hover</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Sidebar Style </span>
                                <select class=\"sidebar-style-option form-control input-sm\">
                                    <option value=\"default\" selected=\"selected\">Default</option>
                                    <option value=\"light\">Light</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Sidebar Position </span>
                                <select class=\"sidebar-pos-option form-control input-sm\">
                                    <option value=\"left\" selected=\"selected\">Left</option>
                                    <option value=\"right\">Right</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Footer </span>
                                <select class=\"page-footer-option form-control input-sm\">
                                    <option value=\"fixed\">Fixed</option>
                                    <option value=\"default\" selected=\"selected\">Default</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- END THEME PANEL -->
                    <!-- BEGIN PAGE BAR -->
                    <div class=\"page-bar\">
                        <ul class=\"page-breadcrumb\">
                            <li>
                                <a href=\"index.html\">Home</a>
                                <i class=\"fa fa-circle\"></i>
                            </li>
                            <li>
                                <span>User</span>
                            </li>
                        </ul>
                        <div class=\"page-toolbar\">
                            <div class=\"btn-group pull-right\">
                                <button type=\"button\" class=\"btn green btn-sm btn-outline dropdown-toggle\" data-toggle=\"dropdown\"> Actions
                                    <i class=\"fa fa-angle-down\"></i>
                                </button>
                                <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"icon-bell\"></i> Action</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"icon-shield\"></i> Another action</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"icon-user\"></i> Something else here</a>
                                    </li>
                                    <li class=\"divider\"> </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"icon-bag\"></i> Separated link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class=\"profile-content\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"portlet light \">
                                            <div class=\"portlet-title tabbable-line\">
                                                
                                                <ul class=\"nav nav-tabs\">
                                                    <li class=\"active\">
                                                        <a href=\"#tab_1_1\" data-toggle=\"tab\">Personal Info</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#tab_1_2\" data-toggle=\"tab\">Change Profile Picture</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#tab_1_3\" data-toggle=\"tab\">Change Password</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#tab_1_4\" data-toggle=\"tab\">Privacy Settings</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#tab_1_5\" data-toggle=\"tab\">Social Media Settings</a>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div class=\"portlet-body\">
                                                <div class=\"tab-content\">
                                                    <!-- PERSONAL INFO TAB -->
                                                    <div class=\"tab-pane active\" id=\"tab_1_1\">
                                                        <form role=\"form\" action=\"#\">
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">First Name</label>
                                                                <input type=\"text\" placeholder=\"John\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Last Name</label>
                                                                <input type=\"text\" placeholder=\"Doe\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Mobile Number</label>
                                                                <input type=\"text\" placeholder=\"+1 646 580 DEMO (6284)\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Interests</label>
                                                                <input type=\"text\" placeholder=\"Design, Web etc.\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Occupation</label>
                                                                <input type=\"text\" placeholder=\"Web Developer\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">About</label>
                                                                <textarea class=\"form-control\" rows=\"3\" placeholder=\"We are KeenThemes!!!\"></textarea>
                                                            </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Website Url</label>
                                                                <input type=\"text\" placeholder=\"http://www.mywebsite.com\" class=\"form-control\" /> </div>
                                                            <div class=\"margiv-top-10\">
                                                                <a href=\"javascript:;\" class=\"btn green\"> Save Changes </a>
                                                                <a href=\"javascript:;\" class=\"btn default\"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END PERSONAL INFO TAB -->
                                                    <!-- CHANGE AVATAR TAB -->
                                                    <div class=\"tab-pane\" id=\"tab_1_2\">
                                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. </p>
                                                        <form action=\"#\" role=\"form\">
                                                            <div class=\"form-group\">
                                                                <div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
                                                                    <div class=\"fileinput-new thumbnail\" style=\"width: 200px; height: 150px;\">
                                                                        <img src=\"http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image\" alt=\"\" /> </div>
                                                                    <div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"max-width: 200px; max-height: 150px;\"> </div>
                                                                    <div>
                                                                        <span class=\"btn default btn-file\">
                                                                            <span class=\"fileinput-new\"> Select image </span>
                                                                            <span class=\"fileinput-exists\"> Change </span>
                                                                            <input type=\"file\" name=\"...\"> </span>
                                                                        <a href=\"javascript:;\" class=\"btn default fileinput-exists\" data-dismiss=\"fileinput\"> Remove </a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"clearfix margin-top-10\">
                                                                    <span class=\"label label-danger\">NOTE! </span>
                                                                    <span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                                                </div>
                                                            </div>
                                                            <div class=\"margin-top-10\">
                                                                <a href=\"javascript:;\" class=\"btn green\"> Submit </a>
                                                                <a href=\"javascript:;\" class=\"btn default\"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END CHANGE AVATAR TAB -->
                                                    <!-- CHANGE PASSWORD TAB -->
                                                    <div class=\"tab-pane\" id=\"tab_1_3\">
                                                        <form action=\"#\">
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Current Password</label>
                                                                <input type=\"password\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">New Password</label>
                                                                <input type=\"password\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Re-type New Password</label>
                                                                <input type=\"password\" class=\"form-control\" /> </div>
                                                            <div class=\"margin-top-10\">
                                                                <a href=\"javascript:;\" class=\"btn green\"> Change Password </a>
                                                                <a href=\"javascript:;\" class=\"btn default\"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END CHANGE PASSWORD TAB -->
                                                    <!-- PRIVACY SETTINGS TAB -->
                                                    <div class=\"tab-pane\" id=\"tab_1_4\">
                                                        <form action=\"#\">
                                                            <table class=\"table table-light table-hover\">
                                                                <tr>
                                                                    <td> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus.. </td>
                                                                    <td>
                                                                        <label class=\"uniform-inline\">
                                                                            <input type=\"radio\" name=\"optionsRadios1\" value=\"option1\" /> Yes </label>
                                                                        <label class=\"uniform-inline\">
                                                                            <input type=\"radio\" name=\"optionsRadios1\" value=\"option2\" checked/> No </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                    <td>
                                                                        <label class=\"uniform-inline\">
                                                                            <input type=\"checkbox\" value=\"\" /> Yes </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                    <td>
                                                                        <label class=\"uniform-inline\">
                                                                            <input type=\"checkbox\" value=\"\" /> Yes </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                    <td>
                                                                        <label class=\"uniform-inline\">
                                                                            <input type=\"checkbox\" value=\"\" /> Yes </label>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <!--end profile-settings-->
                                                            <div class=\"margin-top-10\">
                                                                <a href=\"javascript:;\" class=\"btn red\"> Save Changes </a>
                                                                <a href=\"javascript:;\" class=\"btn default\"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END PRIVACY SETTINGS TAB -->
                                                      <!-- Social Media -->
                                                 <div class=\"tab-pane\" id=\"tab_1_5\">
                                                    <form action=\"#\">
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Facebook</label>
                                                                <input type=\"text\" value=\"http://facebook.com/\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Twitter</label>
                                                                <input type=\"text\" value=\"http://twitter.com/\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Google+</label>
                                                                <input type=\"text\" value=\"http://google.com/\" class=\"form-control\" /> </div>
                                                            <div class=\"margin-top-10\">
                                                                <a href=\"javascript:;\" class=\"btn green\"> save </a>
                                                                <a href=\"javascript:;\" class=\"btn default\"> Cancel </a>
                                                            </div>
                                                        </form>

                                            </div>
                                         <!--End Social Media -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE CONTENT -->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            ";
        
        $__internal_051ace4f7afd407f5f464c2570e2153c617772828fc805945b92d13cd4aa642a->leave($__internal_051ace4f7afd407f5f464c2570e2153c617772828fc805945b92d13cd4aa642a_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:config_setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AdminBundle:Admin/Layout:layout.html.twig'%}
{% block content %}
<div class=\"page-content-wrapper\">
                <!-- BEGIN CONTENT BODY -->
                <div class=\"page-content\">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    <div class=\"theme-panel hidden-xs hidden-sm\">
                        <div class=\"toggler-close\"> </div>
                        <div class=\"theme-options\">
                            <div class=\"theme-option theme-colors clearfix\">
                                <span> THEME COLOR </span>
                                <ul>
                                    <li class=\"color-default current tooltips\" data-style=\"default\" data-container=\"body\" data-original-title=\"Default\"> </li>
                                    <li class=\"color-darkblue tooltips\" data-style=\"darkblue\" data-container=\"body\" data-original-title=\"Dark Blue\"> </li>
                                    <li class=\"color-blue tooltips\" data-style=\"blue\" data-container=\"body\" data-original-title=\"Blue\"> </li>
                                    <li class=\"color-grey tooltips\" data-style=\"grey\" data-container=\"body\" data-original-title=\"Grey\"> </li>
                                    <li class=\"color-light tooltips\" data-style=\"light\" data-container=\"body\" data-original-title=\"Light\"> </li>
                                    <li class=\"color-light2 tooltips\" data-style=\"light2\" data-container=\"body\" data-html=\"true\" data-original-title=\"Light 2\"> </li>
                                </ul>
                            </div>
                            <div class=\"theme-option\">
                                <span> Theme Style </span>
                                <select class=\"layout-style-option form-control input-sm\">
                                    <option value=\"square\" selected=\"selected\">Square corners</option>
                                    <option value=\"rounded\">Rounded corners</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Layout </span>
                                <select class=\"layout-option form-control input-sm\">
                                    <option value=\"fluid\" selected=\"selected\">Fluid</option>
                                    <option value=\"boxed\">Boxed</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Header </span>
                                <select class=\"page-header-option form-control input-sm\">
                                    <option value=\"fixed\" selected=\"selected\">Fixed</option>
                                    <option value=\"default\">Default</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Top Menu Dropdown</span>
                                <select class=\"page-header-top-dropdown-style-option form-control input-sm\">
                                    <option value=\"light\" selected=\"selected\">Light</option>
                                    <option value=\"dark\">Dark</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Sidebar Mode</span>
                                <select class=\"sidebar-option form-control input-sm\">
                                    <option value=\"fixed\">Fixed</option>
                                    <option value=\"default\" selected=\"selected\">Default</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Sidebar Menu </span>
                                <select class=\"sidebar-menu-option form-control input-sm\">
                                    <option value=\"accordion\" selected=\"selected\">Accordion</option>
                                    <option value=\"hover\">Hover</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Sidebar Style </span>
                                <select class=\"sidebar-style-option form-control input-sm\">
                                    <option value=\"default\" selected=\"selected\">Default</option>
                                    <option value=\"light\">Light</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Sidebar Position </span>
                                <select class=\"sidebar-pos-option form-control input-sm\">
                                    <option value=\"left\" selected=\"selected\">Left</option>
                                    <option value=\"right\">Right</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Footer </span>
                                <select class=\"page-footer-option form-control input-sm\">
                                    <option value=\"fixed\">Fixed</option>
                                    <option value=\"default\" selected=\"selected\">Default</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- END THEME PANEL -->
                    <!-- BEGIN PAGE BAR -->
                    <div class=\"page-bar\">
                        <ul class=\"page-breadcrumb\">
                            <li>
                                <a href=\"index.html\">Home</a>
                                <i class=\"fa fa-circle\"></i>
                            </li>
                            <li>
                                <span>User</span>
                            </li>
                        </ul>
                        <div class=\"page-toolbar\">
                            <div class=\"btn-group pull-right\">
                                <button type=\"button\" class=\"btn green btn-sm btn-outline dropdown-toggle\" data-toggle=\"dropdown\"> Actions
                                    <i class=\"fa fa-angle-down\"></i>
                                </button>
                                <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"icon-bell\"></i> Action</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"icon-shield\"></i> Another action</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"icon-user\"></i> Something else here</a>
                                    </li>
                                    <li class=\"divider\"> </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"icon-bag\"></i> Separated link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class=\"profile-content\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"portlet light \">
                                            <div class=\"portlet-title tabbable-line\">
                                                
                                                <ul class=\"nav nav-tabs\">
                                                    <li class=\"active\">
                                                        <a href=\"#tab_1_1\" data-toggle=\"tab\">Personal Info</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#tab_1_2\" data-toggle=\"tab\">Change Profile Picture</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#tab_1_3\" data-toggle=\"tab\">Change Password</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#tab_1_4\" data-toggle=\"tab\">Privacy Settings</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#tab_1_5\" data-toggle=\"tab\">Social Media Settings</a>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div class=\"portlet-body\">
                                                <div class=\"tab-content\">
                                                    <!-- PERSONAL INFO TAB -->
                                                    <div class=\"tab-pane active\" id=\"tab_1_1\">
                                                        <form role=\"form\" action=\"#\">
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">First Name</label>
                                                                <input type=\"text\" placeholder=\"John\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Last Name</label>
                                                                <input type=\"text\" placeholder=\"Doe\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Mobile Number</label>
                                                                <input type=\"text\" placeholder=\"+1 646 580 DEMO (6284)\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Interests</label>
                                                                <input type=\"text\" placeholder=\"Design, Web etc.\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Occupation</label>
                                                                <input type=\"text\" placeholder=\"Web Developer\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">About</label>
                                                                <textarea class=\"form-control\" rows=\"3\" placeholder=\"We are KeenThemes!!!\"></textarea>
                                                            </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Website Url</label>
                                                                <input type=\"text\" placeholder=\"http://www.mywebsite.com\" class=\"form-control\" /> </div>
                                                            <div class=\"margiv-top-10\">
                                                                <a href=\"javascript:;\" class=\"btn green\"> Save Changes </a>
                                                                <a href=\"javascript:;\" class=\"btn default\"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END PERSONAL INFO TAB -->
                                                    <!-- CHANGE AVATAR TAB -->
                                                    <div class=\"tab-pane\" id=\"tab_1_2\">
                                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. </p>
                                                        <form action=\"#\" role=\"form\">
                                                            <div class=\"form-group\">
                                                                <div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
                                                                    <div class=\"fileinput-new thumbnail\" style=\"width: 200px; height: 150px;\">
                                                                        <img src=\"http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image\" alt=\"\" /> </div>
                                                                    <div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"max-width: 200px; max-height: 150px;\"> </div>
                                                                    <div>
                                                                        <span class=\"btn default btn-file\">
                                                                            <span class=\"fileinput-new\"> Select image </span>
                                                                            <span class=\"fileinput-exists\"> Change </span>
                                                                            <input type=\"file\" name=\"...\"> </span>
                                                                        <a href=\"javascript:;\" class=\"btn default fileinput-exists\" data-dismiss=\"fileinput\"> Remove </a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"clearfix margin-top-10\">
                                                                    <span class=\"label label-danger\">NOTE! </span>
                                                                    <span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                                                </div>
                                                            </div>
                                                            <div class=\"margin-top-10\">
                                                                <a href=\"javascript:;\" class=\"btn green\"> Submit </a>
                                                                <a href=\"javascript:;\" class=\"btn default\"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END CHANGE AVATAR TAB -->
                                                    <!-- CHANGE PASSWORD TAB -->
                                                    <div class=\"tab-pane\" id=\"tab_1_3\">
                                                        <form action=\"#\">
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Current Password</label>
                                                                <input type=\"password\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">New Password</label>
                                                                <input type=\"password\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Re-type New Password</label>
                                                                <input type=\"password\" class=\"form-control\" /> </div>
                                                            <div class=\"margin-top-10\">
                                                                <a href=\"javascript:;\" class=\"btn green\"> Change Password </a>
                                                                <a href=\"javascript:;\" class=\"btn default\"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END CHANGE PASSWORD TAB -->
                                                    <!-- PRIVACY SETTINGS TAB -->
                                                    <div class=\"tab-pane\" id=\"tab_1_4\">
                                                        <form action=\"#\">
                                                            <table class=\"table table-light table-hover\">
                                                                <tr>
                                                                    <td> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus.. </td>
                                                                    <td>
                                                                        <label class=\"uniform-inline\">
                                                                            <input type=\"radio\" name=\"optionsRadios1\" value=\"option1\" /> Yes </label>
                                                                        <label class=\"uniform-inline\">
                                                                            <input type=\"radio\" name=\"optionsRadios1\" value=\"option2\" checked/> No </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                    <td>
                                                                        <label class=\"uniform-inline\">
                                                                            <input type=\"checkbox\" value=\"\" /> Yes </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                    <td>
                                                                        <label class=\"uniform-inline\">
                                                                            <input type=\"checkbox\" value=\"\" /> Yes </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                    <td>
                                                                        <label class=\"uniform-inline\">
                                                                            <input type=\"checkbox\" value=\"\" /> Yes </label>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <!--end profile-settings-->
                                                            <div class=\"margin-top-10\">
                                                                <a href=\"javascript:;\" class=\"btn red\"> Save Changes </a>
                                                                <a href=\"javascript:;\" class=\"btn default\"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END PRIVACY SETTINGS TAB -->
                                                      <!-- Social Media -->
                                                 <div class=\"tab-pane\" id=\"tab_1_5\">
                                                    <form action=\"#\">
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Facebook</label>
                                                                <input type=\"text\" value=\"http://facebook.com/\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Twitter</label>
                                                                <input type=\"text\" value=\"http://twitter.com/\" class=\"form-control\" /> </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label\">Google+</label>
                                                                <input type=\"text\" value=\"http://google.com/\" class=\"form-control\" /> </div>
                                                            <div class=\"margin-top-10\">
                                                                <a href=\"javascript:;\" class=\"btn green\"> save </a>
                                                                <a href=\"javascript:;\" class=\"btn default\"> Cancel </a>
                                                            </div>
                                                        </form>

                                            </div>
                                         <!--End Social Media -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE CONTENT -->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            {% endblock %}", "AdminBundle:Admin:config_setting.html.twig", "/var/www/html/symfonyAdminPanel/src/AdminBundle/Resources/views/Admin/config_setting.html.twig");
    }
}
