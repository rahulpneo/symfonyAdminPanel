<?php

/* AdminBundle:Admin/Layout:include_top.html.twig */
class __TwigTemplate_84e46bc794062a7740bc3ec5e095d311ab03fe06342f8b3653610cdc9b1c4414 extends Twig_Template
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
        $__internal_22a4869841deaa3e0e370eed53afcc47075453c44600cba184393ff60a5fadd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22a4869841deaa3e0e370eed53afcc47075453c44600cba184393ff60a5fadd4->enter($__internal_22a4869841deaa3e0e370eed53afcc47075453c44600cba184393ff60a5fadd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin/Layout:include_top.html.twig"));

        // line 1
        echo " <meta charset=\"utf-8\" />
        <title>Metronic | Dashboard</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <meta content=\"\" name=\"description\" />
        <meta content=\"\" name=\"author\" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/jqvmap/jqvmap/jqvmap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/pages/css/profile.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/datatables/datatables.min.css"), "html", null, true);
        echo "\" 
        rel=\"stylesheet\" type=\"text/css\">

        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/css/components.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/css/plugins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/layouts/layout/css/layout.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/layouts/layout/css/themes/darkblue.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\" />
        <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/layouts/layout/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel=\"shortcut icon\" href=\"favicon.ico\" />";
        
        $__internal_22a4869841deaa3e0e370eed53afcc47075453c44600cba184393ff60a5fadd4->leave($__internal_22a4869841deaa3e0e370eed53afcc47075453c44600cba184393ff60a5fadd4_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin/Layout:include_top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  103 => 35,  99 => 34,  93 => 31,  89 => 30,  82 => 26,  76 => 23,  71 => 21,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" <meta charset=\"utf-8\" />
        <title>Metronic | Dashboard</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <meta content=\"\" name=\"description\" />
        <meta content=\"\" name=\"author\" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('bundles/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('bundles/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('bundles/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('bundles/assets/global/plugins/uniform/css/uniform.default.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('bundles/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href=\"{{ asset('bundles/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('bundles/assets/global/plugins/morris/morris.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('bundles/assets/global/plugins/fullcalendar/fullcalendar.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('bundles/assets/global/plugins/jqvmap/jqvmap/jqvmap.css')}}\" rel=\"stylesheet\" type=\"text/css\" />

        <link href=\"{{ asset('bundles/assets/pages/css/profile.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />

        <link href=\"{{ asset('bundles/assets/global/plugins/datatables/datatables.min.css')}}\" 
        rel=\"stylesheet\" type=\"text/css\">

        <link href=\"{{ asset('bundles/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}\" rel=\"stylesheet\" type=\"text/css\" />

        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href=\"{{ asset('bundles/assets/global/css/components.min.css')}}\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
        <link href=\"{{ asset('bundles/assets/global/css/plugins.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href=\"{{ asset('bundles/assets/layouts/layout/css/layout.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('bundles/assets/layouts/layout/css/themes/darkblue.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\" />
        <link href=\"{{ asset('bundles/assets/layouts/layout/css/custom.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel=\"shortcut icon\" href=\"favicon.ico\" />", "AdminBundle:Admin/Layout:include_top.html.twig", "/var/www/html/symfonyAdminPanel--/src/AdminBundle/Resources/views/Admin/Layout/include_top.html.twig");
    }
}
