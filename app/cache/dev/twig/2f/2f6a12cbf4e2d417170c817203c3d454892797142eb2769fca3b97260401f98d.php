<?php

/* AdminBundle:Admin:email_template.html.twig */
class __TwigTemplate_be59382c5fbfb793afe9ee69745c09d245eff377768a4f01c9c2d6642ac8bbc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Admin/Layout:layout.html.twig", "AdminBundle:Admin:email_template.html.twig", 1);
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
        $__internal_bdeef80409193213afa1945aced551f925c359926632cc4adc654bbf687317b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdeef80409193213afa1945aced551f925c359926632cc4adc654bbf687317b7->enter($__internal_bdeef80409193213afa1945aced551f925c359926632cc4adc654bbf687317b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:email_template.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdeef80409193213afa1945aced551f925c359926632cc4adc654bbf687317b7->leave($__internal_bdeef80409193213afa1945aced551f925c359926632cc4adc654bbf687317b7_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_2b40fae37076a7e6818f0509524ac794dc9918e6d316712be41024fca2a7226b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b40fae37076a7e6818f0509524ac794dc9918e6d316712be41024fca2a7226b->enter($__internal_2b40fae37076a7e6818f0509524ac794dc9918e6d316712be41024fca2a7226b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                                        <span class=\"caption-subject font-red sbold uppercase\">Editable Table
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
                                    <div class=\"table-toolbar\">
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"btn-group\">
                                               <!--     <button id=\"sample_editable_1_new\" class=\"btn green\"> Add New
                                                        <i class=\"fa fa-plus\"></i>
                                                    </button>-->
                                                    <a href=\"/addtemplate\" class=\"btn green\" role=\"button\">Add New <i class=\"fa fa-plus\"></i></a>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"btn-group pull-right\">
                                                    <button class=\"btn green btn-outline dropdown-toggle\" data-toggle=\"dropdown\">Tools
                                                        <i class=\"fa fa-angle-down\"></i>
                                                    </button>
                                                    <ul class=\"dropdown-menu pull-right\">
                                                        <li>
                                                            <a href=\"javascript:;\"> Print </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\"> Save as PDF </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\"> Export to Excel </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"dataTables_wrapper no-footer\" id=\"sample_editable_1_wrapper\"><div class=\"row\"><div class=\"col-md-6 col-sm-6\"><div id=\"sample_editable_1_length\" class=\"dataTables_length\">
                                 <!--   <label> 
                                    <select class=\"form-control input-sm input-xsmall input-inline\" aria-controls=\"sample_editable_1\" name=\"sample_editable_1_length\">
                                    <option value=\"5\">5</option>
                                    <option value=\"15\">15</option>
                                    <option value=\"20\">20</option>
                                    <option value=\"-1\">All</option>
                                    </select> records</label>-->
                                    </div></div><div class=\"col-md-4 col-sm-4\"><div class=\"dataTables_filter\" id=\"sample_editable_1_filter\">

                             <!-- <label>Search:<input aria-controls=\"sample_editable_1\" placeholder=\"\" class=\"form-control input-sm input-small input-inline\" type=\"search\">
                                    </label>-->
                                    </div></div></div>

                                    <div class=\"table-scrollable\">
                                    <table style=\"width: 807px;\" aria-describedby=\"sample_editable_1_info\" role=\"grid\" class=\"table table-striped table-hover table-bordered dataTable no-footer\" id=\"sample_editable_1\">
                                        <thead>
                                            <tr role=\"row\">
                                            <th aria-sort=\"ascending\" aria-label=\"templatename : activate to sort column descending\" style=\"width: 123px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting_asc\"> Template name </th>

                                            <th aria-label=\" Full Name : activate to sort column ascending\" style=\"width: 145px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting\"> subject </th>

                                            <th aria-label=\" Emails : activate to sort column ascending\" style=\"width: 86px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting\"> status </th>

                                            

                                             ";
        // line 136
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "role"), "method") != "user")) {
            echo " 
                                            <th aria-label=\" Edit : activate to sort column ascending\" style=\"width: 62px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting\"> Edit </th>
                                             ";
        }
        // line 139
        echo "                                             ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "role"), "method") == "admin")) {
            echo " 
                                            <th aria-label=\" Delete : activate to sort column ascending\" style=\"width: 86px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting\"> Delete </th>
                                            ";
        }
        // line 141
        echo "</tr>
                                        </thead>

                                        <tbody>                                      
                                  
                                            
                                        <tr class=\"odd\" role=\"row\"><td class=\"sorting_1\"></td><td class=\"\"></td><td></td><td></td><td></td><td></td></tr>
                                      
                                            
                                            ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            // line 151
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["items"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 152
                echo "                                           <form action = \"/edit\">
                                            <tr class=\"odd\" role=\"row\">
                                                <td style=\"width:50px;\" class=\"sorting_1\">";
                // line 154
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "templatename", array()), "html", null, true);
                echo "</td>
                                                <td class=\"sorting_1\"> ";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "subject", array()), "html", null, true);
                echo " </td>
                                                <td> 
                                                <a href=\"/preview/";
                // line 157
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-info btn-xs btn-labeled fa fa-location-arrow\" data-toggle=\"tooltip\" data-original-title=\"View\" data-container=\"body\">Preview</a>
                                                </td>
                                                    
                                                ";
                // line 160
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "role"), "method") != "user")) {
                    echo " 
                                                <td>
                                                  <!--  <a class=\"edit\" href=\"/edit\"> Edit </a> -->
                                                 
                                                  <a href=\"/edittemplate/";
                    // line 164
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                    echo "\" class=\"btn btn-success btn-xs btn-labeled fa fa-wrench\" data-toggle=\"tooltip\" data-original-title=\"Edit\" data-container=\"body\">Edit</a>
                                                </td>
                                                ";
                }
                // line 167
                echo "                                                ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "role"), "method") == "admin")) {
                    // line 168
                    echo "                                                <td>
                                                 
                                                    <a  href=\"/deletetemplate/";
                    // line 170
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                    echo "\" class=\"btn btn-danger btn-xs btn-labeled fa fa-trash\" data-toggle=\"tooltip\" data-original-title=\"Delete\" data-container=\"body\">Delete</a>
                                                </td>
                                                ";
                }
                // line 173
                echo "                                                 
                                            </tr>
                                            </form>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "                                             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "
                                            </tbody>
                                    </table></div>
                                    <div class=\"row\">
                                    <div class=\"col-md-4 col-sm-4\">
                               <!--     <div aria-live=\"polite\" role=\"status\" id=\"sample_editable_1_info\" class=\"dataTables_info\">Showing 1 to 5 of 8 entries</div>-->
                                    </div>
                                    <div class=\"col-md-7 col-sm-7\">
                                    <div id=\"sample_editable_1_paginate\" class=\"dataTables_paginate paging_bootstrap_number\">
                                <!--   <ul style=\"visibility: visible;\" class=\"pagination\">
                                    <li class=\"prev disabled\"><a href=\"#\" title=\"Prev\"><i class=\"fa fa-angle-left\"></i></a></li><li class=\"active\"><a href=\"#\">1</a></li><li><a href=\"#\">2</a></li><li class=\"next\"><a href=\"#\" title=\"Next\"><i class=\"fa fa-angle-right\"></i></a></li></ul>-->
                                    </div></div></div></div>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
";
        
        $__internal_2b40fae37076a7e6818f0509524ac794dc9918e6d316712be41024fca2a7226b->leave($__internal_2b40fae37076a7e6818f0509524ac794dc9918e6d316712be41024fca2a7226b_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:email_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 178,  269 => 177,  260 => 173,  254 => 170,  250 => 168,  247 => 167,  241 => 164,  234 => 160,  228 => 157,  223 => 155,  219 => 154,  215 => 152,  210 => 151,  206 => 150,  195 => 141,  188 => 139,  182 => 136,  112 => 68,  106 => 66,  104 => 65,  40 => 3,  34 => 2,  11 => 1,);
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
                                        <span class=\"caption-subject font-red sbold uppercase\">Editable Table
                                        {% if(error !='')%}
                                            {{error}}
                                        {% endif %}
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
                                    <div class=\"table-toolbar\">
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"btn-group\">
                                               <!--     <button id=\"sample_editable_1_new\" class=\"btn green\"> Add New
                                                        <i class=\"fa fa-plus\"></i>
                                                    </button>-->
                                                    <a href=\"/addtemplate\" class=\"btn green\" role=\"button\">Add New <i class=\"fa fa-plus\"></i></a>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"btn-group pull-right\">
                                                    <button class=\"btn green btn-outline dropdown-toggle\" data-toggle=\"dropdown\">Tools
                                                        <i class=\"fa fa-angle-down\"></i>
                                                    </button>
                                                    <ul class=\"dropdown-menu pull-right\">
                                                        <li>
                                                            <a href=\"javascript:;\"> Print </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\"> Save as PDF </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\"> Export to Excel </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"dataTables_wrapper no-footer\" id=\"sample_editable_1_wrapper\"><div class=\"row\"><div class=\"col-md-6 col-sm-6\"><div id=\"sample_editable_1_length\" class=\"dataTables_length\">
                                 <!--   <label> 
                                    <select class=\"form-control input-sm input-xsmall input-inline\" aria-controls=\"sample_editable_1\" name=\"sample_editable_1_length\">
                                    <option value=\"5\">5</option>
                                    <option value=\"15\">15</option>
                                    <option value=\"20\">20</option>
                                    <option value=\"-1\">All</option>
                                    </select> records</label>-->
                                    </div></div><div class=\"col-md-4 col-sm-4\"><div class=\"dataTables_filter\" id=\"sample_editable_1_filter\">

                             <!-- <label>Search:<input aria-controls=\"sample_editable_1\" placeholder=\"\" class=\"form-control input-sm input-small input-inline\" type=\"search\">
                                    </label>-->
                                    </div></div></div>

                                    <div class=\"table-scrollable\">
                                    <table style=\"width: 807px;\" aria-describedby=\"sample_editable_1_info\" role=\"grid\" class=\"table table-striped table-hover table-bordered dataTable no-footer\" id=\"sample_editable_1\">
                                        <thead>
                                            <tr role=\"row\">
                                            <th aria-sort=\"ascending\" aria-label=\"templatename : activate to sort column descending\" style=\"width: 123px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting_asc\"> Template name </th>

                                            <th aria-label=\" Full Name : activate to sort column ascending\" style=\"width: 145px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting\"> subject </th>

                                            <th aria-label=\" Emails : activate to sort column ascending\" style=\"width: 86px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting\"> status </th>

                                            

                                             {% if (app.session.get('role') != 'user') %} 
                                            <th aria-label=\" Edit : activate to sort column ascending\" style=\"width: 62px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting\"> Edit </th>
                                             {% endif %}
                                             {% if (app.session.get('role') == 'admin') %} 
                                            <th aria-label=\" Delete : activate to sort column ascending\" style=\"width: 86px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting\"> Delete </th>
                                            {% endif %}</tr>
                                        </thead>

                                        <tbody>                                      
                                  
                                            
                                        <tr class=\"odd\" role=\"row\"><td class=\"sorting_1\"></td><td class=\"\"></td><td></td><td></td><td></td><td></td></tr>
                                      
                                            
                                            {% for items in data%}
                                                {% for item in items%}
                                           <form action = \"/edit\">
                                            <tr class=\"odd\" role=\"row\">
                                                <td style=\"width:50px;\" class=\"sorting_1\">{{ item.templatename }}</td>
                                                <td class=\"sorting_1\"> {{ item.subject }} </td>
                                                <td> 
                                                <a href=\"/preview/{{item.id}}\" class=\"btn btn-info btn-xs btn-labeled fa fa-location-arrow\" data-toggle=\"tooltip\" data-original-title=\"View\" data-container=\"body\">Preview</a>
                                                </td>
                                                    
                                                {% if (app.session.get('role') != 'user') %} 
                                                <td>
                                                  <!--  <a class=\"edit\" href=\"/edit\"> Edit </a> -->
                                                 
                                                  <a href=\"/edittemplate/{{item.id}}\" class=\"btn btn-success btn-xs btn-labeled fa fa-wrench\" data-toggle=\"tooltip\" data-original-title=\"Edit\" data-container=\"body\">Edit</a>
                                                </td>
                                                {% endif %}
                                                {% if (app.session.get('role') == 'admin') %}
                                                <td>
                                                 
                                                    <a  href=\"/deletetemplate/{{item.id}}\" class=\"btn btn-danger btn-xs btn-labeled fa fa-trash\" data-toggle=\"tooltip\" data-original-title=\"Delete\" data-container=\"body\">Delete</a>
                                                </td>
                                                {% endif %}
                                                 
                                            </tr>
                                            </form>
                                                {% endfor %}
                                             {% endfor %}

                                            </tbody>
                                    </table></div>
                                    <div class=\"row\">
                                    <div class=\"col-md-4 col-sm-4\">
                               <!--     <div aria-live=\"polite\" role=\"status\" id=\"sample_editable_1_info\" class=\"dataTables_info\">Showing 1 to 5 of 8 entries</div>-->
                                    </div>
                                    <div class=\"col-md-7 col-sm-7\">
                                    <div id=\"sample_editable_1_paginate\" class=\"dataTables_paginate paging_bootstrap_number\">
                                <!--   <ul style=\"visibility: visible;\" class=\"pagination\">
                                    <li class=\"prev disabled\"><a href=\"#\" title=\"Prev\"><i class=\"fa fa-angle-left\"></i></a></li><li class=\"active\"><a href=\"#\">1</a></li><li><a href=\"#\">2</a></li><li class=\"next\"><a href=\"#\" title=\"Next\"><i class=\"fa fa-angle-right\"></i></a></li></ul>-->
                                    </div></div></div></div>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
{% endblock %}", "AdminBundle:Admin:email_template.html.twig", "/var/www/html/symfonyAdminPanel/src/AdminBundle/Resources/views/Admin/email_template.html.twig");
    }
}
