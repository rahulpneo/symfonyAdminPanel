<?php

/* AdminBundle::base.html.twig */
class __TwigTemplate_883e965e5e521f1d4518e081bc3ca234ec1377449cfc7f3abf834beecaf020f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
            'quicksidebar' => array($this, 'block_quicksidebar'),
            'footer' => array($this, 'block_footer'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c089fcfff6a7e077a11c047a34a1355c66a9921f6edaff7b63dd9e60e4b41d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c089fcfff6a7e077a11c047a34a1355c66a9921f6edaff7b63dd9e60e4b41d2b->enter($__internal_c089fcfff6a7e077a11c047a34a1355c66a9921f6edaff7b63dd9e60e4b41d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.3
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
    <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "</head>
<!-- END HEAD --><!--<![endif]-->
<body class=\"page-header-fixed page-sidebar-closed-hide-logo page-content-white\">
        <!-- BEGIN HEADER -->
         ";
        // line 26
        $this->displayBlock('header', $context, $blocks);
        // line 28
        echo "
        <!-- END HEADER -->
        
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class=\"clearfix\"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->

        <!-- BEGIN CONTAINER -->
        <div class=\"page-container\">
            <!-- BEGIN SIDEBAR -->
            ";
        // line 38
        $this->displayBlock('sidebar', $context, $blocks);
        // line 40
        echo "            <!-- END SIDEBAR -->

            <!-- BEGIN CONTENT -->
            ";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "            <!-- END CONTENT -->

            <!-- BEGIN QUICK SIDEBAR -->
            ";
        // line 48
        $this->displayBlock('quicksidebar', $context, $blocks);
        // line 50
        echo "            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
         ";
        // line 54
        $this->displayBlock('footer', $context, $blocks);
        // line 56
        echo "        <!-- END FOOTER -->

          <!--[if lt IE 9]>
<script src=\"../assets/global/plugins/respond.min.js\"></script>
<script src=\"../assets/global/plugins/excanvas.min.js\"></script> 
<![endif]-->
        ";
        // line 62
        $this->displayBlock('js', $context, $blocks);
        // line 64
        echo " </body>

</html>";
        
        $__internal_c089fcfff6a7e077a11c047a34a1355c66a9921f6edaff7b63dd9e60e4b41d2b->leave($__internal_c089fcfff6a7e077a11c047a34a1355c66a9921f6edaff7b63dd9e60e4b41d2b_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_55681922e6b38acb4d648a722bacc5854df37e549ea7fe0e8fac0ee03c373855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55681922e6b38acb4d648a722bacc5854df37e549ea7fe0e8fac0ee03c373855->enter($__internal_55681922e6b38acb4d648a722bacc5854df37e549ea7fe0e8fac0ee03c373855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_55681922e6b38acb4d648a722bacc5854df37e549ea7fe0e8fac0ee03c373855->leave($__internal_55681922e6b38acb4d648a722bacc5854df37e549ea7fe0e8fac0ee03c373855_prof);

    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        $__internal_7683202434a2fbbead9ea352f66b014368adb07ba67850cbc27e983fb64c7352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7683202434a2fbbead9ea352f66b014368adb07ba67850cbc27e983fb64c7352->enter($__internal_7683202434a2fbbead9ea352f66b014368adb07ba67850cbc27e983fb64c7352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 27
        echo "          ";
        
        $__internal_7683202434a2fbbead9ea352f66b014368adb07ba67850cbc27e983fb64c7352->leave($__internal_7683202434a2fbbead9ea352f66b014368adb07ba67850cbc27e983fb64c7352_prof);

    }

    // line 38
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_b618e8265e056ee171d266df8e36c2d0ea1c5fc012f8faa16ecc0cf59f9e41b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b618e8265e056ee171d266df8e36c2d0ea1c5fc012f8faa16ecc0cf59f9e41b6->enter($__internal_b618e8265e056ee171d266df8e36c2d0ea1c5fc012f8faa16ecc0cf59f9e41b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 39
        echo "            ";
        
        $__internal_b618e8265e056ee171d266df8e36c2d0ea1c5fc012f8faa16ecc0cf59f9e41b6->leave($__internal_b618e8265e056ee171d266df8e36c2d0ea1c5fc012f8faa16ecc0cf59f9e41b6_prof);

    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        $__internal_fea41ef8a540003e0e856a40adbba274ca624abc8b797da925a2ea229991867c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea41ef8a540003e0e856a40adbba274ca624abc8b797da925a2ea229991867c->enter($__internal_fea41ef8a540003e0e856a40adbba274ca624abc8b797da925a2ea229991867c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 44
        echo "             ";
        
        $__internal_fea41ef8a540003e0e856a40adbba274ca624abc8b797da925a2ea229991867c->leave($__internal_fea41ef8a540003e0e856a40adbba274ca624abc8b797da925a2ea229991867c_prof);

    }

    // line 48
    public function block_quicksidebar($context, array $blocks = array())
    {
        $__internal_623a4ff14d0e10a9a6732f188a31184160c8d54dbd44924d5f7398ccdbf8472a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623a4ff14d0e10a9a6732f188a31184160c8d54dbd44924d5f7398ccdbf8472a->enter($__internal_623a4ff14d0e10a9a6732f188a31184160c8d54dbd44924d5f7398ccdbf8472a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quicksidebar"));

        // line 49
        echo "             ";
        
        $__internal_623a4ff14d0e10a9a6732f188a31184160c8d54dbd44924d5f7398ccdbf8472a->leave($__internal_623a4ff14d0e10a9a6732f188a31184160c8d54dbd44924d5f7398ccdbf8472a_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_19ebe167f79da04f363c822c70638a14416b0c5645f1b40b7dd60535786900e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ebe167f79da04f363c822c70638a14416b0c5645f1b40b7dd60535786900e2->enter($__internal_19ebe167f79da04f363c822c70638a14416b0c5645f1b40b7dd60535786900e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "             ";
        
        $__internal_19ebe167f79da04f363c822c70638a14416b0c5645f1b40b7dd60535786900e2->leave($__internal_19ebe167f79da04f363c822c70638a14416b0c5645f1b40b7dd60535786900e2_prof);

    }

    // line 62
    public function block_js($context, array $blocks = array())
    {
        $__internal_b611e9337b334a599df2756814ed8c83b2e276dfacf52f4ac211459d9b02d810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b611e9337b334a599df2756814ed8c83b2e276dfacf52f4ac211459d9b02d810->enter($__internal_b611e9337b334a599df2756814ed8c83b2e276dfacf52f4ac211459d9b02d810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 63
        echo "             ";
        
        $__internal_b611e9337b334a599df2756814ed8c83b2e276dfacf52f4ac211459d9b02d810->leave($__internal_b611e9337b334a599df2756814ed8c83b2e276dfacf52f4ac211459d9b02d810_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  197 => 63,  191 => 62,  184 => 55,  178 => 54,  171 => 49,  165 => 48,  158 => 44,  152 => 43,  145 => 39,  139 => 38,  132 => 27,  126 => 26,  115 => 20,  106 => 64,  104 => 62,  96 => 56,  94 => 54,  88 => 50,  86 => 48,  81 => 45,  79 => 43,  74 => 40,  72 => 38,  60 => 28,  58 => 26,  52 => 22,  50 => 20,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.3
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
    <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
{% block stylesheets %}
{% endblock %}
</head>
<!-- END HEAD --><!--<![endif]-->
<body class=\"page-header-fixed page-sidebar-closed-hide-logo page-content-white\">
        <!-- BEGIN HEADER -->
         {% block header %}
          {% endblock %}

        <!-- END HEADER -->
        
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class=\"clearfix\"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->

        <!-- BEGIN CONTAINER -->
        <div class=\"page-container\">
            <!-- BEGIN SIDEBAR -->
            {% block sidebar %}
            {% endblock %}
            <!-- END SIDEBAR -->

            <!-- BEGIN CONTENT -->
            {% block content %}
             {% endblock %}
            <!-- END CONTENT -->

            <!-- BEGIN QUICK SIDEBAR -->
            {% block quicksidebar %}
             {% endblock %}
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
         {% block footer %}
             {% endblock %}
        <!-- END FOOTER -->

          <!--[if lt IE 9]>
<script src=\"../assets/global/plugins/respond.min.js\"></script>
<script src=\"../assets/global/plugins/excanvas.min.js\"></script> 
<![endif]-->
        {% block js %}
             {% endblock %}
 </body>

</html>", "AdminBundle::base.html.twig", "/var/www/html/symfonyAdminPanel/src/AdminBundle/Resources/views/base.html.twig");
    }
}
