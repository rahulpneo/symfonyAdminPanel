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
        $__internal_57de9728b2697fa91b233f74b3d1a36ef9ca3cef487c5ac2c972f333b837d942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57de9728b2697fa91b233f74b3d1a36ef9ca3cef487c5ac2c972f333b837d942->enter($__internal_57de9728b2697fa91b233f74b3d1a36ef9ca3cef487c5ac2c972f333b837d942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::base.html.twig"));

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
        
        $__internal_57de9728b2697fa91b233f74b3d1a36ef9ca3cef487c5ac2c972f333b837d942->leave($__internal_57de9728b2697fa91b233f74b3d1a36ef9ca3cef487c5ac2c972f333b837d942_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2be50451efe1ca4a61dba99501df04ff89fe77f71a2ce206c47111392c3b2488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be50451efe1ca4a61dba99501df04ff89fe77f71a2ce206c47111392c3b2488->enter($__internal_2be50451efe1ca4a61dba99501df04ff89fe77f71a2ce206c47111392c3b2488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2be50451efe1ca4a61dba99501df04ff89fe77f71a2ce206c47111392c3b2488->leave($__internal_2be50451efe1ca4a61dba99501df04ff89fe77f71a2ce206c47111392c3b2488_prof);

    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        $__internal_180f7118310b9249ac255c86c2e95d28da31a5cc498910c3ba8445f1d92ccfb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_180f7118310b9249ac255c86c2e95d28da31a5cc498910c3ba8445f1d92ccfb9->enter($__internal_180f7118310b9249ac255c86c2e95d28da31a5cc498910c3ba8445f1d92ccfb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 27
        echo "          ";
        
        $__internal_180f7118310b9249ac255c86c2e95d28da31a5cc498910c3ba8445f1d92ccfb9->leave($__internal_180f7118310b9249ac255c86c2e95d28da31a5cc498910c3ba8445f1d92ccfb9_prof);

    }

    // line 38
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_95f53748246d49e132cb65419e166b5102fea39e5a55971f544d0ae06ad244bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95f53748246d49e132cb65419e166b5102fea39e5a55971f544d0ae06ad244bf->enter($__internal_95f53748246d49e132cb65419e166b5102fea39e5a55971f544d0ae06ad244bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 39
        echo "            ";
        
        $__internal_95f53748246d49e132cb65419e166b5102fea39e5a55971f544d0ae06ad244bf->leave($__internal_95f53748246d49e132cb65419e166b5102fea39e5a55971f544d0ae06ad244bf_prof);

    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        $__internal_fd80bab8f411c86a9652f7ab6de77c9b35a74a554f1b137433baa63fd1cd80e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd80bab8f411c86a9652f7ab6de77c9b35a74a554f1b137433baa63fd1cd80e5->enter($__internal_fd80bab8f411c86a9652f7ab6de77c9b35a74a554f1b137433baa63fd1cd80e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 44
        echo "             ";
        
        $__internal_fd80bab8f411c86a9652f7ab6de77c9b35a74a554f1b137433baa63fd1cd80e5->leave($__internal_fd80bab8f411c86a9652f7ab6de77c9b35a74a554f1b137433baa63fd1cd80e5_prof);

    }

    // line 48
    public function block_quicksidebar($context, array $blocks = array())
    {
        $__internal_7c84d30bf3a441d675782eeede8eb90208d52dcd36f072e8d734fa3c7fcb218a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c84d30bf3a441d675782eeede8eb90208d52dcd36f072e8d734fa3c7fcb218a->enter($__internal_7c84d30bf3a441d675782eeede8eb90208d52dcd36f072e8d734fa3c7fcb218a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quicksidebar"));

        // line 49
        echo "             ";
        
        $__internal_7c84d30bf3a441d675782eeede8eb90208d52dcd36f072e8d734fa3c7fcb218a->leave($__internal_7c84d30bf3a441d675782eeede8eb90208d52dcd36f072e8d734fa3c7fcb218a_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2daee411d30016ecae263e871bb8f12cb1d4be433c70db1c50472b8a5023443c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2daee411d30016ecae263e871bb8f12cb1d4be433c70db1c50472b8a5023443c->enter($__internal_2daee411d30016ecae263e871bb8f12cb1d4be433c70db1c50472b8a5023443c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "             ";
        
        $__internal_2daee411d30016ecae263e871bb8f12cb1d4be433c70db1c50472b8a5023443c->leave($__internal_2daee411d30016ecae263e871bb8f12cb1d4be433c70db1c50472b8a5023443c_prof);

    }

    // line 62
    public function block_js($context, array $blocks = array())
    {
        $__internal_410bc083a447fb42865dd66924b83c1dc022ac34377b37a47ead3114811c7f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_410bc083a447fb42865dd66924b83c1dc022ac34377b37a47ead3114811c7f4a->enter($__internal_410bc083a447fb42865dd66924b83c1dc022ac34377b37a47ead3114811c7f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 63
        echo "             ";
        
        $__internal_410bc083a447fb42865dd66924b83c1dc022ac34377b37a47ead3114811c7f4a->leave($__internal_410bc083a447fb42865dd66924b83c1dc022ac34377b37a47ead3114811c7f4a_prof);

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

</html>", "AdminBundle::base.html.twig", "/var/www/html/symfonyAdminPanel--/src/AdminBundle/Resources/views/base.html.twig");
    }
}
