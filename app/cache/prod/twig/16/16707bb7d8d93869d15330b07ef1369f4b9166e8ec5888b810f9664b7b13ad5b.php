<?php

/* AdminBundle:Admin/Layout:sidebar.html.twig */
class __TwigTemplate_6efefbec10c18ff9e2963ddba4c4fb49eae293f844157ac8655854f543e89955 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
    <div class=\"page-sidebar-wrapper\">
        <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
        <div class=\"page-sidebar navbar-collapse collapse\">
            <!-- BEGIN SIDEBAR MENU -->
            <ul class=\"page-sidebar-menu\" data-auto-scroll=\"true\" data-slide-speed=\"200\">
                <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below \"sidebar-toggler-wrapper\" LI element -->
                <li class=\"sidebar-toggler-wrapper\">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class=\"sidebar-toggler\">
                    </div>
                    <!-- END SIDEBAR TOGGLER BUTTON -->
                </li>
                <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below \"sidebar-search-wrapper\" LI element -->
                <li class=\"sidebar-search-wrapper hidden-xs\">
                    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                    <!-- DOC: Apply \"sidebar-search-bordered\" class the below search form to have bordered search box -->
                    <!-- DOC: Apply \"sidebar-search-bordered sidebar-search-solid\" class the below search form to have bordered & solid search box -->
                    <form class=\"sidebar-search\" action=\"extra_search.html\" method=\"POST\">
                        <a href=\"javascript:;\" class=\"remove\">
                        <i class=\"icon-close\"></i>
                        </a>
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                            <span class=\"input-group-btn\">
                            <a href=\"javascript:;\" class=\"btn submit\"><i class=\"icon-magnifier\"></i></a>
                            </span>
                        </div>
                    </form>
                    <!-- END RESPONSIVE QUICK SEARCH FORM -->
                </li>
                <li class=\"start active \">
                    <a href=\"index.html\">
                    <i class=\"icon-home\"></i>
                    <span class=\"title\">Dashboard</span>
                    <span class=\"selected\"></span>
                    </a>

                </li>
                <li>
                    <a href=\"javascript:;\">
                    <i class=\"icon-basket\"></i>
                    <span class=\"title\">CMS</span>
                    <span class=\"arrow \"></span>
                    </a>
                    <ul class=\"sub-menu\">
                        <li>
                            <a href=\"ecommerce_index.html\">
                            <i class=\"icon-home\"></i>
                            Dashboard</a>
                        </li>
                        <li>
                            <a href=\"ecommerce_orders.html\">
                            <i class=\"icon-basket\"></i>
                            Orders</a>
                        </li>
                        
                    </ul>
                </li>
                
                
                <li>
                    <a href=\"javascript:;\">
                    <i class=\"icon-puzzle\"></i>
                    <span class=\"title\">UI Components</span>
                    <span class=\"arrow \"></span>
                    </a>
                    <ul class=\"sub-menu\">
                        <li>
                            <a href=\"components_pickers.html\">
                            Pickers</a>
                        </li>
                        <li>
                            <a href=\"components_dropdowns.html\">
                            Custom Dropdowns</a>
                        </li>
                        
                        <li>
                            <a href=\"components_knob_dials.html\">
                            Knob Circle Dials</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href=\"javascript:;\">
                    <i class=\"icon-settings\"></i>
                    <span class=\"title\">Config Setting</span>
                    <span class=\"arrow \"></span>
                    </a>
                    <ul class=\"sub-menu\">
                        <li>
                            <a href=\"form_controls.html\">
                            Form Controls</a>
                        </li>
                        <li>
                            <a href=\"form_layouts.html\">
                            Form Layouts</a>
                        </li>
                        <li>
                            <a href=\"form_editable.html\">
                            <span class=\"badge badge-roundless badge-warning\">new</span>Form X-editable</a>
                        </li>
                        <li>
                            <a href=\"form_wizard.html\">
                            Form Wizard</a>
                        </li>
                        <li>
                            <a href=\"form_validation.html\">
                            Form Validation</a>
                        </li>
                        <li>
                            <a href=\"form_image_crop.html\">
                            <span class=\"badge badge-roundless badge-danger\">new</span>Image Cropping</a>
                        </li>
                        <li>
                            <a href=\"form_fileupload.html\">
                            Multiple File Upload</a>
                        </li>
                        <li>
                            <a href=\"form_dropzone.html\">
                            Dropzone File Upload</a>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a href=\"javascript:;\">
                    <i class=\"icon-envelope-open\"></i>
                    <span class=\"title\">Email Templates</span>
                    <span class=\"arrow \"></span>
                    </a>
                    <ul class=\"sub-menu\">
                        <li>
                            <a href=\"email_newsletter.html\">
                            Responsive Newsletter<br>
                            Email Template</a>
                        </li>
                        <li>
                            <a href=\"email_system.html\">
                            Responsive System<br>
                            Email Template</a>
                        </li>
                    </ul>
                </li>
                
                
                <li>
                    <a href=\"javascript:;\">
                    <i class=\"icon-folder\"></i>
                    <span class=\"title\">Multi Level Menu</span>
                    <span class=\"arrow \"></span>
                    </a>
                    <ul class=\"sub-menu\">
                        <li>
                            <a href=\"javascript:;\">
                            <i class=\"icon-settings\"></i> Item 1 <span class=\"arrow\"></span>
                            </a>
                            <ul class=\"sub-menu\">
                                <li>
                                    <a href=\"javascript:;\">
                                    <i class=\"icon-user\"></i>
                                    Sample Link 1 <span class=\"arrow\"></span>
                                    </a>
                                    <ul class=\"sub-menu\">
                                        <li>
                                            <a href=\"#\"><i class=\"icon-power\"></i> Sample Link 1</a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"icon-camera\"></i> Sample Link 1</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href=\"javascript:;\">
                            <i class=\"icon-globe\"></i> Item 2 <span class=\"arrow\"></span>
                            </a>
                            <ul class=\"sub-menu\">
                                <li>
                                    <a href=\"#\"><i class=\"icon-tag\"></i> Sample Link 1</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href=\"#\">
                            <i class=\"icon-bar-chart\"></i>
                            Item 3 </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href=\"javascript:;\">
                    <i class=\"icon-user\"></i>
                    <span class=\"title\">User</span>
                    <span class=\"arrow \"></span>
                    </a>
                    <ul class=\"sub-menu\">
                        <li>
                            <a href=\"login.html\">
                            Login Form 1</a>
                        </li>
                        <li>
                            <a href=\"login_soft.html\">
                            Login Form 2</a>
                        </li>
                    </ul>
                </li>
                          
                
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin/Layout:sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminBundle:Admin/Layout:sidebar.html.twig", "/var/www/html/symfonyAdminPanel/src/AdminBundle/Resources/views/Admin/Layout/sidebar.html.twig");
    }
}
