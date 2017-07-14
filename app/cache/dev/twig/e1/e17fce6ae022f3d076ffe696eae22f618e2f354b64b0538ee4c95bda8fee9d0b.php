<?php

/* AdminBundle:Admin:country.html.twig */
class __TwigTemplate_16219d5b3d19cc1be2519a00411ca39228bea7d03ba7127edab8997879e81186 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Admin/Layout:layout.html.twig", "AdminBundle:Admin:country.html.twig", 1);
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
        $__internal_2db3e2e042aa880c79b5f8179bb2b560f529599213a4845eaaf9620cd564016b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2db3e2e042aa880c79b5f8179bb2b560f529599213a4845eaaf9620cd564016b->enter($__internal_2db3e2e042aa880c79b5f8179bb2b560f529599213a4845eaaf9620cd564016b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:country.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2db3e2e042aa880c79b5f8179bb2b560f529599213a4845eaaf9620cd564016b->leave($__internal_2db3e2e042aa880c79b5f8179bb2b560f529599213a4845eaaf9620cd564016b_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_48a57b2e07aa9e1a08d93984418fdcf1428be333598df0a8b7bfd594d718fbee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a57b2e07aa9e1a08d93984418fdcf1428be333598df0a8b7bfd594d718fbee->enter($__internal_48a57b2e07aa9e1a08d93984418fdcf1428be333598df0a8b7bfd594d718fbee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                                       
                                        <span class=\"caption-subject font-red sbold uppercase\">Country  
                                                                                  
                                        </span>
                                    </div>
                                    <div class=\"actions\">
                                       
                                    </div>
                                </div>
                                <div class=\"portlet-body\">
                                    <!-- BEGIN FORM-->
                                    
                                        

                                    <form novalidate=\"novalidate\" method=\"post\" action=\"/addcountry\" id=\"form_sample_1\" class=\"form-horizontal\">
                                        <div class=\"form-body\">
                                            <div class=\"alert alert-danger display-hide\">
                                                <button class=\"close\" data-close=\"alert\"></button> You have some form errors. Please check below. </div>
                                            <div class=\"alert alert-success display-hide\">
                                                <button class=\"close\" data-close=\"alert\"></button> 
                                                 
                                                    ";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
        echo "
                                                
                                                 </div>
                                                
                                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\" >
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Country
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"country\" data-required=\"1\" class=\"form-control\" type=\"text\" value=\"\"> </div>
                                            </div>                                                               
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Country Code
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"countrycode\" data-required=\"1\" class=\"form-control\" type=\"number\" value=\"\"> </div>
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
        
        $__internal_48a57b2e07aa9e1a08d93984418fdcf1428be333598df0a8b7bfd594d718fbee->leave($__internal_48a57b2e07aa9e1a08d93984418fdcf1428be333598df0a8b7bfd594d718fbee_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:country.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 89,  124 => 85,  40 => 3,  34 => 2,  11 => 1,);
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
                                       
                                        <span class=\"caption-subject font-red sbold uppercase\">Country  
                                                                                  
                                        </span>
                                    </div>
                                    <div class=\"actions\">
                                       
                                    </div>
                                </div>
                                <div class=\"portlet-body\">
                                    <!-- BEGIN FORM-->
                                    
                                        

                                    <form novalidate=\"novalidate\" method=\"post\" action=\"/addcountry\" id=\"form_sample_1\" class=\"form-horizontal\">
                                        <div class=\"form-body\">
                                            <div class=\"alert alert-danger display-hide\">
                                                <button class=\"close\" data-close=\"alert\"></button> You have some form errors. Please check below. </div>
                                            <div class=\"alert alert-success display-hide\">
                                                <button class=\"close\" data-close=\"alert\"></button> 
                                                 
                                                    {{ error }}
                                                
                                                 </div>
                                                
                                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\" >
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Country
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"country\" data-required=\"1\" class=\"form-control\" type=\"text\" value=\"\"> </div>
                                            </div>                                                               
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Country Code
                                                    <span aria-required=\"true\" class=\"required\"> * </span>
                                                </label>
                                                <div class=\"col-md-4\">
                                                    <input name=\"countrycode\" data-required=\"1\" class=\"form-control\" type=\"number\" value=\"\"> </div>
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
{% endblock %}", "AdminBundle:Admin:country.html.twig", "/var/www/html/symfonyAdminPanel/src/AdminBundle/Resources/views/Admin/country.html.twig");
    }
}
