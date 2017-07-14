<?php

/* AdminBundle::base.html.twig */
class __TwigTemplate_6e5324d88ed16d5ebb6d130720004680b81d21c74773a48ceca33c888b8ed2c2 extends Twig_Template
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
        $__internal_b710d6b8f963dbc624c1da5d74f5ff17602a0b9a42a2106d8ac11e46f8a1c577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b710d6b8f963dbc624c1da5d74f5ff17602a0b9a42a2106d8ac11e46f8a1c577->enter($__internal_b710d6b8f963dbc624c1da5d74f5ff17602a0b9a42a2106d8ac11e46f8a1c577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::base.html.twig"));

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
        
        $__internal_b710d6b8f963dbc624c1da5d74f5ff17602a0b9a42a2106d8ac11e46f8a1c577->leave($__internal_b710d6b8f963dbc624c1da5d74f5ff17602a0b9a42a2106d8ac11e46f8a1c577_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_80d519e014fe427a4897676c57271247dca790f62e4abbcd4afe402cde398aa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d519e014fe427a4897676c57271247dca790f62e4abbcd4afe402cde398aa3->enter($__internal_80d519e014fe427a4897676c57271247dca790f62e4abbcd4afe402cde398aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_80d519e014fe427a4897676c57271247dca790f62e4abbcd4afe402cde398aa3->leave($__internal_80d519e014fe427a4897676c57271247dca790f62e4abbcd4afe402cde398aa3_prof);

    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        $__internal_79dcf8eb5fe4eb0eecf8f8ef2c68039bf539387e68723af7032ff955e8acab28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79dcf8eb5fe4eb0eecf8f8ef2c68039bf539387e68723af7032ff955e8acab28->enter($__internal_79dcf8eb5fe4eb0eecf8f8ef2c68039bf539387e68723af7032ff955e8acab28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 27
        echo "          ";
        
        $__internal_79dcf8eb5fe4eb0eecf8f8ef2c68039bf539387e68723af7032ff955e8acab28->leave($__internal_79dcf8eb5fe4eb0eecf8f8ef2c68039bf539387e68723af7032ff955e8acab28_prof);

    }

    // line 38
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_2136d96090b4e4c91a7b46cd53d49b4c629185347d0250b0939d65cd8a8f04cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2136d96090b4e4c91a7b46cd53d49b4c629185347d0250b0939d65cd8a8f04cc->enter($__internal_2136d96090b4e4c91a7b46cd53d49b4c629185347d0250b0939d65cd8a8f04cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 39
        echo "            ";
        
        $__internal_2136d96090b4e4c91a7b46cd53d49b4c629185347d0250b0939d65cd8a8f04cc->leave($__internal_2136d96090b4e4c91a7b46cd53d49b4c629185347d0250b0939d65cd8a8f04cc_prof);

    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        $__internal_d71904b692d88d6f3b094bf8fd6df4e5b989697a9f55e1f3d3e7b70de3b0e514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d71904b692d88d6f3b094bf8fd6df4e5b989697a9f55e1f3d3e7b70de3b0e514->enter($__internal_d71904b692d88d6f3b094bf8fd6df4e5b989697a9f55e1f3d3e7b70de3b0e514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 44
        echo "             ";
        
        $__internal_d71904b692d88d6f3b094bf8fd6df4e5b989697a9f55e1f3d3e7b70de3b0e514->leave($__internal_d71904b692d88d6f3b094bf8fd6df4e5b989697a9f55e1f3d3e7b70de3b0e514_prof);

    }

    // line 48
    public function block_quicksidebar($context, array $blocks = array())
    {
        $__internal_59d73cbe3f53d2e9f5129e1d31a33acf49279aa831a5aabff75621762ae00e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59d73cbe3f53d2e9f5129e1d31a33acf49279aa831a5aabff75621762ae00e7b->enter($__internal_59d73cbe3f53d2e9f5129e1d31a33acf49279aa831a5aabff75621762ae00e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quicksidebar"));

        // line 49
        echo "             ";
        
        $__internal_59d73cbe3f53d2e9f5129e1d31a33acf49279aa831a5aabff75621762ae00e7b->leave($__internal_59d73cbe3f53d2e9f5129e1d31a33acf49279aa831a5aabff75621762ae00e7b_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_77a876e8b56e06cfdb10e99d8733211bbd1a067b303f9b388caa14d4314c5874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a876e8b56e06cfdb10e99d8733211bbd1a067b303f9b388caa14d4314c5874->enter($__internal_77a876e8b56e06cfdb10e99d8733211bbd1a067b303f9b388caa14d4314c5874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "             ";
        
        $__internal_77a876e8b56e06cfdb10e99d8733211bbd1a067b303f9b388caa14d4314c5874->leave($__internal_77a876e8b56e06cfdb10e99d8733211bbd1a067b303f9b388caa14d4314c5874_prof);

    }

    // line 62
    public function block_js($context, array $blocks = array())
    {
        $__internal_b17bc3313725bc0c1bf97899d12b75b8319f9d20515051276fbd456e6c444077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b17bc3313725bc0c1bf97899d12b75b8319f9d20515051276fbd456e6c444077->enter($__internal_b17bc3313725bc0c1bf97899d12b75b8319f9d20515051276fbd456e6c444077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 63
        echo "             ";
        
        $__internal_b17bc3313725bc0c1bf97899d12b75b8319f9d20515051276fbd456e6c444077->leave($__internal_b17bc3313725bc0c1bf97899d12b75b8319f9d20515051276fbd456e6c444077_prof);

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
