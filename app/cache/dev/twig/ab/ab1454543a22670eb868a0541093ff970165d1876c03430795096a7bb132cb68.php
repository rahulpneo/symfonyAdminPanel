<?php

/* AdminBundle::base.html.twig */
class __TwigTemplate_61db33bf22ea71c59ff50faccf224223eff6ae05524051a79d896f84226ed00d extends Twig_Template
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
        $__internal_db8b436a59c22aa6cea38fe086aad96b7c31ef12bd31bf21c493eb702e2cff76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db8b436a59c22aa6cea38fe086aad96b7c31ef12bd31bf21c493eb702e2cff76->enter($__internal_db8b436a59c22aa6cea38fe086aad96b7c31ef12bd31bf21c493eb702e2cff76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::base.html.twig"));

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
        
        $__internal_db8b436a59c22aa6cea38fe086aad96b7c31ef12bd31bf21c493eb702e2cff76->leave($__internal_db8b436a59c22aa6cea38fe086aad96b7c31ef12bd31bf21c493eb702e2cff76_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0838207097851302fbd194c60a57735e396595fd1c46046ffbd5d6fe7b114157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0838207097851302fbd194c60a57735e396595fd1c46046ffbd5d6fe7b114157->enter($__internal_0838207097851302fbd194c60a57735e396595fd1c46046ffbd5d6fe7b114157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0838207097851302fbd194c60a57735e396595fd1c46046ffbd5d6fe7b114157->leave($__internal_0838207097851302fbd194c60a57735e396595fd1c46046ffbd5d6fe7b114157_prof);

    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        $__internal_53794d615dbdd14bb7f2861a7f6e061ac3a325ac87bd8e1f0644eef62f258aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53794d615dbdd14bb7f2861a7f6e061ac3a325ac87bd8e1f0644eef62f258aae->enter($__internal_53794d615dbdd14bb7f2861a7f6e061ac3a325ac87bd8e1f0644eef62f258aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 27
        echo "          ";
        
        $__internal_53794d615dbdd14bb7f2861a7f6e061ac3a325ac87bd8e1f0644eef62f258aae->leave($__internal_53794d615dbdd14bb7f2861a7f6e061ac3a325ac87bd8e1f0644eef62f258aae_prof);

    }

    // line 38
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3627331fe504629ff469a78f5eeac78c23408a754b1c0b469b6b295d9dc84577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3627331fe504629ff469a78f5eeac78c23408a754b1c0b469b6b295d9dc84577->enter($__internal_3627331fe504629ff469a78f5eeac78c23408a754b1c0b469b6b295d9dc84577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 39
        echo "            ";
        
        $__internal_3627331fe504629ff469a78f5eeac78c23408a754b1c0b469b6b295d9dc84577->leave($__internal_3627331fe504629ff469a78f5eeac78c23408a754b1c0b469b6b295d9dc84577_prof);

    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        $__internal_9856b03b82a5e2cc25c9e6f614d50a3f166cc5bf6ddb98f0e38a34653d8d8728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9856b03b82a5e2cc25c9e6f614d50a3f166cc5bf6ddb98f0e38a34653d8d8728->enter($__internal_9856b03b82a5e2cc25c9e6f614d50a3f166cc5bf6ddb98f0e38a34653d8d8728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 44
        echo "             ";
        
        $__internal_9856b03b82a5e2cc25c9e6f614d50a3f166cc5bf6ddb98f0e38a34653d8d8728->leave($__internal_9856b03b82a5e2cc25c9e6f614d50a3f166cc5bf6ddb98f0e38a34653d8d8728_prof);

    }

    // line 48
    public function block_quicksidebar($context, array $blocks = array())
    {
        $__internal_d6a06cc0c74e2b13821cee50bd606523ce157f1aab9cc6fe71d2d178aa5e519a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a06cc0c74e2b13821cee50bd606523ce157f1aab9cc6fe71d2d178aa5e519a->enter($__internal_d6a06cc0c74e2b13821cee50bd606523ce157f1aab9cc6fe71d2d178aa5e519a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quicksidebar"));

        // line 49
        echo "             ";
        
        $__internal_d6a06cc0c74e2b13821cee50bd606523ce157f1aab9cc6fe71d2d178aa5e519a->leave($__internal_d6a06cc0c74e2b13821cee50bd606523ce157f1aab9cc6fe71d2d178aa5e519a_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4834bef7c2b8a4b9de23c4bb4e098c8e8ab2eee4be5abf72ad6303f18b0bff11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4834bef7c2b8a4b9de23c4bb4e098c8e8ab2eee4be5abf72ad6303f18b0bff11->enter($__internal_4834bef7c2b8a4b9de23c4bb4e098c8e8ab2eee4be5abf72ad6303f18b0bff11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "             ";
        
        $__internal_4834bef7c2b8a4b9de23c4bb4e098c8e8ab2eee4be5abf72ad6303f18b0bff11->leave($__internal_4834bef7c2b8a4b9de23c4bb4e098c8e8ab2eee4be5abf72ad6303f18b0bff11_prof);

    }

    // line 62
    public function block_js($context, array $blocks = array())
    {
        $__internal_480c7e1c1e4ce4445d9f9aefd94d4bf9135e2989bac35cbd410e2a6141901e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_480c7e1c1e4ce4445d9f9aefd94d4bf9135e2989bac35cbd410e2a6141901e76->enter($__internal_480c7e1c1e4ce4445d9f9aefd94d4bf9135e2989bac35cbd410e2a6141901e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 63
        echo "             ";
        
        $__internal_480c7e1c1e4ce4445d9f9aefd94d4bf9135e2989bac35cbd410e2a6141901e76->leave($__internal_480c7e1c1e4ce4445d9f9aefd94d4bf9135e2989bac35cbd410e2a6141901e76_prof);

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
