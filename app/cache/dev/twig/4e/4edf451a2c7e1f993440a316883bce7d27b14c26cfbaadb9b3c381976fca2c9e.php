<?php

/* SensioDistributionBundle:Configurator:layout.html.twig */
class __TwigTemplate_9d830e55c5187289f0299766fad3b0d089f1cbf60e78f0d709cf359f82452a4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle:Configurator:layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_acd2f88e75d39689285b43ffa0f82b0fff7ff2dadc7d5ed111ae923e7fcb2b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acd2f88e75d39689285b43ffa0f82b0fff7ff2dadc7d5ed111ae923e7fcb2b7e->enter($__internal_acd2f88e75d39689285b43ffa0f82b0fff7ff2dadc7d5ed111ae923e7fcb2b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acd2f88e75d39689285b43ffa0f82b0fff7ff2dadc7d5ed111ae923e7fcb2b7e->leave($__internal_acd2f88e75d39689285b43ffa0f82b0fff7ff2dadc7d5ed111ae923e7fcb2b7e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_02cf6f10e00fae1a98f3e2b4ccb43903ba96d896d7c25dcc81efca864a9ad012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02cf6f10e00fae1a98f3e2b4ccb43903ba96d896d7c25dcc81efca864a9ad012->enter($__internal_02cf6f10e00fae1a98f3e2b4ccb43903ba96d896d7c25dcc81efca864a9ad012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_02cf6f10e00fae1a98f3e2b4ccb43903ba96d896d7c25dcc81efca864a9ad012->leave($__internal_02cf6f10e00fae1a98f3e2b4ccb43903ba96d896d7c25dcc81efca864a9ad012_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_39d387e1290396973102082184f18c86931997da1fc5c27cbc806b1ed12701bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d387e1290396973102082184f18c86931997da1fc5c27cbc806b1ed12701bf->enter($__internal_39d387e1290396973102082184f18c86931997da1fc5c27cbc806b1ed12701bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_39d387e1290396973102082184f18c86931997da1fc5c27cbc806b1ed12701bf->leave($__internal_39d387e1290396973102082184f18c86931997da1fc5c27cbc806b1ed12701bf_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fcd8ea2f9388da1041ddbe2113ddddd790e06bd0b774cd263272127007805d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fcd8ea2f9388da1041ddbe2113ddddd790e06bd0b774cd263272127007805d3->enter($__internal_9fcd8ea2f9388da1041ddbe2113ddddd790e06bd0b774cd263272127007805d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_9fcd8ea2f9388da1041ddbe2113ddddd790e06bd0b774cd263272127007805d3->leave($__internal_9fcd8ea2f9388da1041ddbe2113ddddd790e06bd0b774cd263272127007805d3_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_2ec64446072ddcceb04fefc02f341863d213fd8186434aaa60983ba309431bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ec64446072ddcceb04fefc02f341863d213fd8186434aaa60983ba309431bb8->enter($__internal_2ec64446072ddcceb04fefc02f341863d213fd8186434aaa60983ba309431bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_2ec64446072ddcceb04fefc02f341863d213fd8186434aaa60983ba309431bb8->leave($__internal_2ec64446072ddcceb04fefc02f341863d213fd8186434aaa60983ba309431bb8_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle:Configurator:layout.html.twig", "/var/www/html/symfonyAdminPanel/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
