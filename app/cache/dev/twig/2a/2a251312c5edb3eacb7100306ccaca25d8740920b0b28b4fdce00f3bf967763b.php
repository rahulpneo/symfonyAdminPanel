<?php

/* AdminBundle:Admin:adduser.html.twig */
class __TwigTemplate_84865007df7a68a1d2973d6f177643edd30e8868566faaca4e860c5b45fed65f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Admin/Layout:layout.html.twig", "AdminBundle:Admin:adduser.html.twig", 1);
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
        $__internal_ebf57e45771a20a2039aa0fb028e85ab70d63f91b4ce7c56def68453c58b806c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf57e45771a20a2039aa0fb028e85ab70d63f91b4ce7c56def68453c58b806c->enter($__internal_ebf57e45771a20a2039aa0fb028e85ab70d63f91b4ce7c56def68453c58b806c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:adduser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebf57e45771a20a2039aa0fb028e85ab70d63f91b4ce7c56def68453c58b806c->leave($__internal_ebf57e45771a20a2039aa0fb028e85ab70d63f91b4ce7c56def68453c58b806c_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_7f07289d3e9e74f935c7539191f020178394fd9227983d97e50dfeaadd18f1b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f07289d3e9e74f935c7539191f020178394fd9227983d97e50dfeaadd18f1b2->enter($__internal_7f07289d3e9e74f935c7539191f020178394fd9227983d97e50dfeaadd18f1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<div class=\"page-content-wrapper\">
                <!-- BEGIN CONTENT BODY -->
                <div style=\"min-height:1548px\" class=\"page-content\">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    
                    <!-- END THEME PANEL -->
                    <!-- BEGIN PAGE BAR -->
                    <div class=\"page-bar\">
                        <ul class=\"page-breadcrumb\">
                            <li>
                                <a href=\"index.html\">Home</a>
                                <i class=\"fa fa-circle\"></i>
                            </li>
                            <li>
                                <span>Form Stuff</span>
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
                   
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- BEGIN VALIDATION STATES-->
                          
                            <!-- END VALIDATION STATES-->
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- BEGIN VALIDATION STATES-->
                            <div class=\"portlet light portlet-fit portlet-form bordered\">
                                <div class=\"portlet-title\">
                                    <div class=\"caption\">
                                        <i class=\"icon-settings font-red\"></i>
                                        <span class=\"caption-subject font-red sbold uppercase\">Basic Validation   
                                                                                  
                                        </span>
                                    </div>
                                    <div class=\"actions\">
                                        <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">
                                            <label class=\"btn btn-transparent red btn-outline btn-circle btn-sm active\">
                                                <input name=\"options\" class=\"toggle\" id=\"option1\" type=\"radio\">Actions</label>
                                            <label class=\"btn btn-transparent red btn-outline btn-circle btn-sm\">
                                                <input name=\"options\" class=\"toggle\" id=\"option2\" type=\"radio\">Settings</label>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"portlet-body\">
                                    <!-- BEGIN FORM-->
                                    
                                        

                                    <form novalidate=\"novalidate\" method=\"post\" action=\"/add\" id=\"form_sample_1\" class=\"form-horizontal\">
                                        <div class=\"form-body\">
                                            <div class=\"alert alert-danger display-hide\">
                                                <button class=\"close\" data-close=\"alert\"></button> You have some form errors. Please check below. </div>
                                            <div class=\"alert alert-success display-hide\">
                                                <button class=\"close\" data-close=\"alert\"></button> Your form validation is successful! </div>
                                                
                                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\" >
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">FullName
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"fullname\" data-required=\"1\" class=\"form-control\" type=\"text\" value=\"\"> </div>
                                            </div>

                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Email
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"email\" class=\"form-control\" type=\"text\" value=\"\"> </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Address
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"address\" data-required=\"1\" class=\"form-control\" type=\"text\" value=\"\"> </div>
                                            </div>

                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">City/Town
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"city\" data-required=\"1\" class=\"form-control\" type=\"text\" value=\"\"> </div>
                                            </div>                                                                     
                                            
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Country
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <select class=\"form-control\" name=\"country\" value=\"\">
                                                        <option value=\"\">Select...</option>
                                                        <option value=\"HK\">Hong Kong</option>
                                                        <option value=\"HU\">Hungary</option>
                                                        <option value=\"IS\">Iceland</option>
                                                        <option value=\"IN\">India</option>
                                                        <option value=\"ID\">Indonesia</option>
                                                        <option value=\"IR\">Iran (Islamic Republic of)</option>
                                                        <option value=\"IQ\">Iraq</option>
                                                        <option value=\"IE\">Ireland</option>
                                                        <option value=\"IL\">Israel</option>
                                                        <option value=\"IT\">Italy</option>
                                                        <option value=\"JM\">Jamaica</option>
                                                        <option value=\"JP\">Japan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Role
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <select class=\"form-control\" name=\"role\" value=\"\">
                                                        <option value=\"\">Select...</option>
                                                        <option value=\"1\">admin</option>
                                                        <option value=\"2\">approver</option>
                                                        <option value=\"3\">editor</option>
                                                        <option value=\"4\">user</option>
                                                      
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Username
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"username\" data-required=\"1\" class=\"form-control\" type=\"text\" value=\"\"> </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Password
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"password\" data-required=\"1\" class=\"form-control\" type=\"password\"> </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Re-type Password
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"rpassword\" data-required=\"1\" class=\"form-control\" type=\"password\"> </div>
                                            </div>                                           
                                            
                                        </div>
                                        <div class=\"form-actions\">
                                            <div class=\"row\">
                                                <div class=\"col-md-offset-3 col-md-9\">
                                                    <button type=\"submit\" class=\"btn green\">Submit</button>

                                                    <a href=\"/admin/user\" class=\"btn grey-salsa btn-outline\" role=\"button\">Cancel </a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                  
                                    <!-- END FORM-->
                                </div>
                            </div>
                            <!-- END VALIDATION STATES-->
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- BEGIN VALIDATION STATES-->
                           
                            <!-- END VALIDATION STATES-->
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- BEGIN VALIDATION STATES-->
                            
                                <!-- END VALIDATION STATES-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
";
        
        $__internal_7f07289d3e9e74f935c7539191f020178394fd9227983d97e50dfeaadd18f1b2->leave($__internal_7f07289d3e9e74f935c7539191f020178394fd9227983d97e50dfeaadd18f1b2_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:adduser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 90,  40 => 3,  34 => 2,  11 => 1,);
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
                <div style=\"min-height:1548px\" class=\"page-content\">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    
                    <!-- END THEME PANEL -->
                    <!-- BEGIN PAGE BAR -->
                    <div class=\"page-bar\">
                        <ul class=\"page-breadcrumb\">
                            <li>
                                <a href=\"index.html\">Home</a>
                                <i class=\"fa fa-circle\"></i>
                            </li>
                            <li>
                                <span>Form Stuff</span>
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
                   
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- BEGIN VALIDATION STATES-->
                          
                            <!-- END VALIDATION STATES-->
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- BEGIN VALIDATION STATES-->
                            <div class=\"portlet light portlet-fit portlet-form bordered\">
                                <div class=\"portlet-title\">
                                    <div class=\"caption\">
                                        <i class=\"icon-settings font-red\"></i>
                                        <span class=\"caption-subject font-red sbold uppercase\">Basic Validation   
                                                                                  
                                        </span>
                                    </div>
                                    <div class=\"actions\">
                                        <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">
                                            <label class=\"btn btn-transparent red btn-outline btn-circle btn-sm active\">
                                                <input name=\"options\" class=\"toggle\" id=\"option1\" type=\"radio\">Actions</label>
                                            <label class=\"btn btn-transparent red btn-outline btn-circle btn-sm\">
                                                <input name=\"options\" class=\"toggle\" id=\"option2\" type=\"radio\">Settings</label>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"portlet-body\">
                                    <!-- BEGIN FORM-->
                                    
                                        

                                    <form novalidate=\"novalidate\" method=\"post\" action=\"/add\" id=\"form_sample_1\" class=\"form-horizontal\">
                                        <div class=\"form-body\">
                                            <div class=\"alert alert-danger display-hide\">
                                                <button class=\"close\" data-close=\"alert\"></button> You have some form errors. Please check below. </div>
                                            <div class=\"alert alert-success display-hide\">
                                                <button class=\"close\" data-close=\"alert\"></button> Your form validation is successful! </div>
                                                
                                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\" >
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">FullName
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"fullname\" data-required=\"1\" class=\"form-control\" type=\"text\" value=\"\"> </div>
                                            </div>

                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Email
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"email\" class=\"form-control\" type=\"text\" value=\"\"> </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Address
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"address\" data-required=\"1\" class=\"form-control\" type=\"text\" value=\"\"> </div>
                                            </div>

                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">City/Town
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"city\" data-required=\"1\" class=\"form-control\" type=\"text\" value=\"\"> </div>
                                            </div>                                                                     
                                            
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Country
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <select class=\"form-control\" name=\"country\" value=\"\">
                                                        <option value=\"\">Select...</option>
                                                        <option value=\"HK\">Hong Kong</option>
                                                        <option value=\"HU\">Hungary</option>
                                                        <option value=\"IS\">Iceland</option>
                                                        <option value=\"IN\">India</option>
                                                        <option value=\"ID\">Indonesia</option>
                                                        <option value=\"IR\">Iran (Islamic Republic of)</option>
                                                        <option value=\"IQ\">Iraq</option>
                                                        <option value=\"IE\">Ireland</option>
                                                        <option value=\"IL\">Israel</option>
                                                        <option value=\"IT\">Italy</option>
                                                        <option value=\"JM\">Jamaica</option>
                                                        <option value=\"JP\">Japan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Role
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <select class=\"form-control\" name=\"role\" value=\"\">
                                                        <option value=\"\">Select...</option>
                                                        <option value=\"1\">admin</option>
                                                        <option value=\"2\">approver</option>
                                                        <option value=\"3\">editor</option>
                                                        <option value=\"4\">user</option>
                                                      
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Username
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"username\" data-required=\"1\" class=\"form-control\" type=\"text\" value=\"\"> </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Password
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"password\" data-required=\"1\" class=\"form-control\" type=\"password\"> </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Re-type Password
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"rpassword\" data-required=\"1\" class=\"form-control\" type=\"password\"> </div>
                                            </div>                                           
                                            
                                        </div>
                                        <div class=\"form-actions\">
                                            <div class=\"row\">
                                                <div class=\"col-md-offset-3 col-md-9\">
                                                    <button type=\"submit\" class=\"btn green\">Submit</button>

                                                    <a href=\"/admin/user\" class=\"btn grey-salsa btn-outline\" role=\"button\">Cancel </a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                  
                                    <!-- END FORM-->
                                </div>
                            </div>
                            <!-- END VALIDATION STATES-->
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- BEGIN VALIDATION STATES-->
                           
                            <!-- END VALIDATION STATES-->
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- BEGIN VALIDATION STATES-->
                            
                                <!-- END VALIDATION STATES-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
{% endblock %}", "AdminBundle:Admin:adduser.html.twig", "/var/www/html/symfonyAdminPanel/src/AdminBundle/Resources/views/Admin/adduser.html.twig");
    }
}
