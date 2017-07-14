<?php

/* AdminBundle:Admin:displayusers.html.twig */
class __TwigTemplate_b4ef25327ffd6a3a6daa2c8b42e0fec7a0b83584dc04e60ff98f8b28912bac0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Admin/Layout:layout.html.twig", "AdminBundle:Admin:displayusers.html.twig", 1);
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
        $__internal_23e500129a774ac04a3a00c0c2583ddbf5d95641b3052f2891b0280b44cde4d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23e500129a774ac04a3a00c0c2583ddbf5d95641b3052f2891b0280b44cde4d8->enter($__internal_23e500129a774ac04a3a00c0c2583ddbf5d95641b3052f2891b0280b44cde4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:displayusers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23e500129a774ac04a3a00c0c2583ddbf5d95641b3052f2891b0280b44cde4d8->leave($__internal_23e500129a774ac04a3a00c0c2583ddbf5d95641b3052f2891b0280b44cde4d8_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_6a1e07ecdd62f6bec4c9c27facb6ce42f9684edd77e186314b8a045ca55edc16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a1e07ecdd62f6bec4c9c27facb6ce42f9684edd77e186314b8a045ca55edc16->enter($__internal_6a1e07ecdd62f6bec4c9c27facb6ce42f9684edd77e186314b8a045ca55edc16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                        <div class=\"col-md-12\">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class=\"portlet light portlet-fit bordered\">
                                <div class=\"portlet-title\">
                                    <div class=\"caption\">
                                       
                                        ";
        // line 64
        if (((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")) != "")) {
            // line 65
            echo "                                            ";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "
                                        ";
        }
        // line 67
        echo "                                      
                                    <div class=\"actions\">
                                        
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
                                                    <a href=\"/addform\" class=\"btn green\" role=\"button\">Add New <i class=\"fa fa-plus\"></i></a>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"btn-group pull-right\">
                                                   
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
                                    </div></div><div class=\"col-md-6 col-sm-6\"><div class=\"dataTables_filter\" id=\"sample_editable_1_filter\">

                             <!-- <label>Search:<input aria-controls=\"sample_editable_1\" placeholder=\"\" class=\"form-control input-sm input-small input-inline\" type=\"search\">
                                    </label>-->
                                    </div></div></div>

                                    <div class=\"table-scrollable\">
                                    <table style=\"width: 887px;\" aria-describedby=\"sample_editable_1_info\" role=\"grid\" class=\"table table-striped table-hover table-bordered dataTable no-footer\" id=\"sample_editable_1\">
                                        <thead>
                                            <tr role=\"row\">
                                            <th aria-sort=\"ascending\" aria-label=\" Username : activate to sort column descending\" style=\"width: 123px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting_asc\"> Username </th>

                                            <th aria-label=\" Full Name : activate to sort column ascending\" style=\"width: 145px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting\"> Full Name </th>

                                            <th aria-label=\" Emails : activate to sort column ascending\" style=\"width: 86px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting\"> Emails </th>

                                            <th aria-label=\" Role : activate to sort column ascending\" style=\"width: 92px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting\"> Role </th>

                                             ";
        // line 116
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "role"), "method") != "user")) {
            echo " 
                                            <th aria-label=\" Edit : activate to sort column ascending\" style=\"width: 62px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting\"> Edit </th>
                                             ";
        }
        // line 119
        echo "                                             ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "role"), "method") == "admin")) {
            echo " 
                                            <th aria-label=\" Delete : activate to sort column ascending\" style=\"width: 86px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting\"> Delete </th>
                                            ";
        }
        // line 121
        echo "</tr>
                                        </thead>

                                        <tbody>                                      
                                  
                                            
                                        <tr class=\"odd\" role=\"row\"><td class=\"sorting_1\"></td><td class=\"\"></td><td></td><td></td><td></td><td></td></tr>
                                      <!--  <tr class=\"even\" role=\"row\">
                                                <td class=\"sorting_1\"> alex </td>
                                                <td class=\"\"> Alex Nilson </td>
                                                <td> 1234 </td>
                                                <td class=\"center\"> power user </td>
                                                     <td>
                                                    <a class=\"edit\" href=\"javascript:;\"> Edit </a>
                                                </td>
                                                <td>
                                                    <a class=\"delete\" href=\"javascript:;\"> Delete </a>
                                                </td>
                                            </tr>-->
                                            
                                            ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            // line 142
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["items"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 143
                echo "                                           <form action = \"/edit\">
                                            <tr class=\"odd\" role=\"row\">
                                                <td class=\"sorting_1\">";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "username", array()), "html", null, true);
                echo "</td>
                                                <td class=\"\"> ";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "fullname", array()), "html", null, true);
                echo " </td>
                                                <td> ";
                // line 147
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "email", array()), "html", null, true);
                echo " </td>
                                                <td class=\"center\">
                                                    ";
                // line 149
                if (($this->getAttribute($context["item"], "isadmin", array()) == "1")) {
                    // line 150
                    echo "                                                    Admin
                                                    ";
                } elseif (($this->getAttribute(                // line 151
$context["item"], "isadmin", array()) == "2")) {
                    // line 152
                    echo "                                                    Approver
                                                    ";
                } elseif (($this->getAttribute(                // line 153
$context["item"], "isadmin", array()) == "3")) {
                    // line 154
                    echo "                                                    Editor
                                                    ";
                } elseif (($this->getAttribute(                // line 155
$context["item"], "isadmin", array()) == "4")) {
                    // line 156
                    echo "                                                    Genral user
                                                    </td>
                                                    ";
                }
                // line 159
                echo "                                                ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "role"), "method") != "user")) {
                    echo " 
                                                <td>
                                                  <!--  <a class=\"edit\" href=\"/edit\"> Edit </a> -->
                                                  <a  href=\"/edit/";
                    // line 162
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                    echo "\"> Edit </a>
                                                </td>
                                                ";
                }
                // line 165
                echo "                                                ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "role"), "method") == "admin")) {
                    // line 166
                    echo "                                                <td>
                                                  <!--  <a class=\"delete\" href=\"javascript:;\"> Delete </a>-->
                                                    <a  href=\"/delete/";
                    // line 168
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                    echo "\"> Delete </a>
                                                </td>
                                                ";
                }
                // line 171
                echo "                                            </tr>
                                            </form>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "                                             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "
                                            </tbody>
                                    </table></div>
                                    <div class=\"row\">
                                    <div class=\"col-md-5 col-sm-5\">
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
        
        $__internal_6a1e07ecdd62f6bec4c9c27facb6ce42f9684edd77e186314b8a045ca55edc16->leave($__internal_6a1e07ecdd62f6bec4c9c27facb6ce42f9684edd77e186314b8a045ca55edc16_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:displayusers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 175,  279 => 174,  271 => 171,  265 => 168,  261 => 166,  258 => 165,  252 => 162,  245 => 159,  240 => 156,  238 => 155,  235 => 154,  233 => 153,  230 => 152,  228 => 151,  225 => 150,  223 => 149,  218 => 147,  214 => 146,  210 => 145,  206 => 143,  201 => 142,  197 => 141,  175 => 121,  168 => 119,  162 => 116,  111 => 67,  105 => 65,  103 => 64,  40 => 3,  34 => 2,  11 => 1,);
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
                        <div class=\"col-md-12\">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class=\"portlet light portlet-fit bordered\">
                                <div class=\"portlet-title\">
                                    <div class=\"caption\">
                                       
                                        {% if(error !='')%}
                                            {{error}}
                                        {% endif %}
                                      
                                    <div class=\"actions\">
                                        
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
                                                    <a href=\"/addform\" class=\"btn green\" role=\"button\">Add New <i class=\"fa fa-plus\"></i></a>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"btn-group pull-right\">
                                                   
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
                                    </div></div><div class=\"col-md-6 col-sm-6\"><div class=\"dataTables_filter\" id=\"sample_editable_1_filter\">

                             <!-- <label>Search:<input aria-controls=\"sample_editable_1\" placeholder=\"\" class=\"form-control input-sm input-small input-inline\" type=\"search\">
                                    </label>-->
                                    </div></div></div>

                                    <div class=\"table-scrollable\">
                                    <table style=\"width: 887px;\" aria-describedby=\"sample_editable_1_info\" role=\"grid\" class=\"table table-striped table-hover table-bordered dataTable no-footer\" id=\"sample_editable_1\">
                                        <thead>
                                            <tr role=\"row\">
                                            <th aria-sort=\"ascending\" aria-label=\" Username : activate to sort column descending\" style=\"width: 123px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting_asc\"> Username </th>

                                            <th aria-label=\" Full Name : activate to sort column ascending\" style=\"width: 145px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting\"> Full Name </th>

                                            <th aria-label=\" Emails : activate to sort column ascending\" style=\"width: 86px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting\"> Emails </th>

                                            <th aria-label=\" Role : activate to sort column ascending\" style=\"width: 92px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting\"> Role </th>

                                             {% if (app.session.get('role') != 'user') %} 
                                            <th aria-label=\" Edit : activate to sort column ascending\" style=\"width: 62px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting\"> Edit </th>
                                             {% endif %}
                                             {% if (app.session.get('role') == 'admin') %} 
                                            <th aria-label=\" Delete : activate to sort column ascending\" style=\"width: 86px;\" colspan=\"1\" rowspan=\"1\" aria-controls=\"sample_editable_1\" tabindex=\"0\" class=\"sorting\"> Delete </th>
                                            {% endif %}</tr>
                                        </thead>

                                        <tbody>                                      
                                  
                                            
                                        <tr class=\"odd\" role=\"row\"><td class=\"sorting_1\"></td><td class=\"\"></td><td></td><td></td><td></td><td></td></tr>
                                      <!--  <tr class=\"even\" role=\"row\">
                                                <td class=\"sorting_1\"> alex </td>
                                                <td class=\"\"> Alex Nilson </td>
                                                <td> 1234 </td>
                                                <td class=\"center\"> power user </td>
                                                     <td>
                                                    <a class=\"edit\" href=\"javascript:;\"> Edit </a>
                                                </td>
                                                <td>
                                                    <a class=\"delete\" href=\"javascript:;\"> Delete </a>
                                                </td>
                                            </tr>-->
                                            
                                            {% for items in data%}
                                                {% for item in items%}
                                           <form action = \"/edit\">
                                            <tr class=\"odd\" role=\"row\">
                                                <td class=\"sorting_1\">{{ item.username }}</td>
                                                <td class=\"\"> {{ item.fullname }} </td>
                                                <td> {{item.email}} </td>
                                                <td class=\"center\">
                                                    {% if(item.isadmin =='1')%}
                                                    Admin
                                                    {% elseif(item.isadmin =='2')%}
                                                    Approver
                                                    {% elseif(item.isadmin =='3')%}
                                                    Editor
                                                    {% elseif(item.isadmin =='4')%}
                                                    Genral user
                                                    </td>
                                                    {% endif %}
                                                {% if (app.session.get('role') != 'user') %} 
                                                <td>
                                                  <!--  <a class=\"edit\" href=\"/edit\"> Edit </a> -->
                                                  <a  href=\"/edit/{{item.id}}\"> Edit </a>
                                                </td>
                                                {% endif %}
                                                {% if (app.session.get('role') == 'admin') %}
                                                <td>
                                                  <!--  <a class=\"delete\" href=\"javascript:;\"> Delete </a>-->
                                                    <a  href=\"/delete/{{item.id}}\"> Delete </a>
                                                </td>
                                                {% endif %}
                                            </tr>
                                            </form>
                                                {% endfor %}
                                             {% endfor %}

                                            </tbody>
                                    </table></div>
                                    <div class=\"row\">
                                    <div class=\"col-md-5 col-sm-5\">
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
{% endblock %}", "AdminBundle:Admin:displayusers.html.twig", "/var/www/html/symfonyAdminPanel/src/AdminBundle/Resources/views/Admin/displayusers.html.twig");
    }
}
