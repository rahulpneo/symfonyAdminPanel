<?php

/* AdminBundle:Admin/Layout:header.html.twig */
class __TwigTemplate_69a7515780ca661c0d7005e79c30721308ef6c7fac6a6c1d9495f75115b26ba5 extends Twig_Template
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
        $__internal_c0246042f6432aa5e9bfe20790d89a8b150e798f5646364299b5f183dd4c27d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0246042f6432aa5e9bfe20790d89a8b150e798f5646364299b5f183dd4c27d0->enter($__internal_c0246042f6432aa5e9bfe20790d89a8b150e798f5646364299b5f183dd4c27d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin/Layout:header.html.twig"));

        // line 1
        echo "   <div class=\"page-header navbar navbar-fixed-top\">
        <!-- BEGIN HEADER INNER -->
        <div class=\"page-header-inner\">
            <!-- BEGIN LOGO -->
            <div class=\"page-logo\">
                <a href=\"index.html\">
             <!--   <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/layouts/layout/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\" class=\"logo-default\"/>-->
                </a>
                <div class=\"menu-toggler sidebar-toggler hide\">
                    <!-- DOC: Remove the above \"hide\" to enable the sidebar toggler button on header -->
                </div>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class=\"top-menu\">
                <ul class=\"nav navbar-nav pull-right\">
                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                    
                    <!-- END NOTIFICATION DROPDOWN -->
                    <!-- BEGIN INBOX DROPDOWN -->
                   
                    <!-- END INBOX DROPDOWN -->
                    <!-- BEGIN TODO DROPDOWN -->
                    
                    <!-- END TODO DROPDOWN -->
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class=\"dropdown dropdown-user\">
                        <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                        <img alt=\"\" class=\"img-circle\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/layouts/layout/img/avatar3_small.jpg"), "html", null, true);
        echo "\"/>
                        <span class=\"username\">
                        ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "name"), "method"), "html", null, true);
        echo "</span>
                        <i class=\"fa fa-angle-down\"></i>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"/logout\">
                                <i class=\"icon-key\"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                    <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                    <li class=\"dropdown dropdown-quick-sidebar-toggler\">
                        <a href=\"javascript:;\" class=\"dropdown-toggle\">
                        <i class=\"icon-logout\"></i>
                        </a>
                    </li>
                    <!-- END QUICK SIDEBAR TOGGLER -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END HEADER INNER -->
    </div>
   ";
        
        $__internal_c0246042f6432aa5e9bfe20790d89a8b150e798f5646364299b5f183dd4c27d0->leave($__internal_c0246042f6432aa5e9bfe20790d89a8b150e798f5646364299b5f183dd4c27d0_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin/Layout:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 35,  59 => 33,  30 => 7,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("   <div class=\"page-header navbar navbar-fixed-top\">
        <!-- BEGIN HEADER INNER -->
        <div class=\"page-header-inner\">
            <!-- BEGIN LOGO -->
            <div class=\"page-logo\">
                <a href=\"index.html\">
             <!--   <img src=\"{{ asset('bundles/assets/layouts/layout/img/logo.png')}}\" alt=\"logo\" class=\"logo-default\"/>-->
                </a>
                <div class=\"menu-toggler sidebar-toggler hide\">
                    <!-- DOC: Remove the above \"hide\" to enable the sidebar toggler button on header -->
                </div>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class=\"top-menu\">
                <ul class=\"nav navbar-nav pull-right\">
                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                    
                    <!-- END NOTIFICATION DROPDOWN -->
                    <!-- BEGIN INBOX DROPDOWN -->
                   
                    <!-- END INBOX DROPDOWN -->
                    <!-- BEGIN TODO DROPDOWN -->
                    
                    <!-- END TODO DROPDOWN -->
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class=\"dropdown dropdown-user\">
                        <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                        <img alt=\"\" class=\"img-circle\" src=\"{{ asset('bundles/assets/layouts/layout/img/avatar3_small.jpg')}}\"/>
                        <span class=\"username\">
                        {{ app.session.get('name') }}</span>
                        <i class=\"fa fa-angle-down\"></i>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"/logout\">
                                <i class=\"icon-key\"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                    <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                    <li class=\"dropdown dropdown-quick-sidebar-toggler\">
                        <a href=\"javascript:;\" class=\"dropdown-toggle\">
                        <i class=\"icon-logout\"></i>
                        </a>
                    </li>
                    <!-- END QUICK SIDEBAR TOGGLER -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END HEADER INNER -->
    </div>
   ", "AdminBundle:Admin/Layout:header.html.twig", "/var/www/html/symfonyAdminPanel/src/AdminBundle/Resources/views/Admin/Layout/header.html.twig");
    }
}
