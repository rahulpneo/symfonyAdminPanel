<?php

/* AdminBundle:Admin:previewtemplate.html.twig */
class __TwigTemplate_338568cf0c0c72b426268dd619cb5b5fb8fd1604cfef75ab1d7c1026acb31660 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Admin/Layout:layout.html.twig", "AdminBundle:Admin:previewtemplate.html.twig", 1);
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
        $__internal_01d08d4cdc24e003f16cbf30514e5695bcbb743ec2372a3f21962f75dd26ee35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01d08d4cdc24e003f16cbf30514e5695bcbb743ec2372a3f21962f75dd26ee35->enter($__internal_01d08d4cdc24e003f16cbf30514e5695bcbb743ec2372a3f21962f75dd26ee35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:previewtemplate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01d08d4cdc24e003f16cbf30514e5695bcbb743ec2372a3f21962f75dd26ee35->leave($__internal_01d08d4cdc24e003f16cbf30514e5695bcbb743ec2372a3f21962f75dd26ee35_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_7178de885288a9849bbc4e729107f04893035a0a1ae98a3f830699333ad5064d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7178de885288a9849bbc4e729107f04893035a0a1ae98a3f830699333ad5064d->enter($__internal_7178de885288a9849bbc4e729107f04893035a0a1ae98a3f830699333ad5064d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<div class=\"page-content-wrapper\">
                <!-- BEGIN CONTENT BODY -->
                <div style=\"min-height:1402px\" class=\"page-content\">
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
                                <a href=\"#\">Tables</a>
                                <i class=\"fa fa-circle\"></i>
                            </li>
                            <li>
                                <span>Datatables</span>
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
                        <div class=\"col-md-10\">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class=\"portlet light portlet-fit bordered\">
                                <div class=\"portlet-title\">
                                    <div class=\"caption\">
                                        <i class=\"icon-settings font-red\"></i>
                                        <span class=\"caption-subject font-red sbold uppercase\">Preview Template
                                        ";
        // line 65
        if (((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")) != "")) {
            // line 66
            echo "                                            ";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "
                                        ";
        }
        // line 68
        echo "                                        </span>
                                    </div>
                                    
                                </div>
                                <div class=\"portlet-body\">
                                    <div class=\"table-toolbar\">
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"btn-group\">
                                                <a href=\"/admin/template\" class=\"btn btn-info btn-labeled fa fa-step-backward pull-right pro_list_btn\" role=\"button\"> Back </a>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class=\"dataTables_wrapper no-footer\" id=\"sample_editable_1_wrapper\"><div class=\"row\"><div class=\"col-md-6 col-sm-6\"><div id=\"sample_editable_1_length\" class=\"dataTables_length\">
                                 
                                    </div></div></div>

                                    <div class=\"table-scrollable9\">
                                    ";
        // line 88
        echo (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"));
        echo "
                                    </div>
                                    <div class=\"row\">
                                    <div class=\"col-md-4 col-sm-4\">
                                    </div>
                                    <div class=\"col-md-7 col-sm-7\">
                                    </div></div></div>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
";
        
        $__internal_7178de885288a9849bbc4e729107f04893035a0a1ae98a3f830699333ad5064d->leave($__internal_7178de885288a9849bbc4e729107f04893035a0a1ae98a3f830699333ad5064d_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:previewtemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 88,  112 => 68,  106 => 66,  104 => 65,  40 => 3,  34 => 2,  11 => 1,);
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
                <div style=\"min-height:1402px\" class=\"page-content\">
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
                                <a href=\"#\">Tables</a>
                                <i class=\"fa fa-circle\"></i>
                            </li>
                            <li>
                                <span>Datatables</span>
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
                        <div class=\"col-md-10\">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class=\"portlet light portlet-fit bordered\">
                                <div class=\"portlet-title\">
                                    <div class=\"caption\">
                                        <i class=\"icon-settings font-red\"></i>
                                        <span class=\"caption-subject font-red sbold uppercase\">Preview Template
                                        {% if(error !='')%}
                                            {{error}}
                                        {% endif %}
                                        </span>
                                    </div>
                                    
                                </div>
                                <div class=\"portlet-body\">
                                    <div class=\"table-toolbar\">
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"btn-group\">
                                                <a href=\"/admin/template\" class=\"btn btn-info btn-labeled fa fa-step-backward pull-right pro_list_btn\" role=\"button\"> Back </a>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class=\"dataTables_wrapper no-footer\" id=\"sample_editable_1_wrapper\"><div class=\"row\"><div class=\"col-md-6 col-sm-6\"><div id=\"sample_editable_1_length\" class=\"dataTables_length\">
                                 
                                    </div></div></div>

                                    <div class=\"table-scrollable9\">
                                    {{data | raw}}
                                    </div>
                                    <div class=\"row\">
                                    <div class=\"col-md-4 col-sm-4\">
                                    </div>
                                    <div class=\"col-md-7 col-sm-7\">
                                    </div></div></div>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
{% endblock %}", "AdminBundle:Admin:previewtemplate.html.twig", "/var/www/html/symfonyAdminPanel--/src/AdminBundle/Resources/views/Admin/previewtemplate.html.twig");
    }
}
