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
        $__internal_381584047c450fde25b60637274eafeba106b14d4f64a4809028d1e2957dff6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_381584047c450fde25b60637274eafeba106b14d4f64a4809028d1e2957dff6e->enter($__internal_381584047c450fde25b60637274eafeba106b14d4f64a4809028d1e2957dff6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_381584047c450fde25b60637274eafeba106b14d4f64a4809028d1e2957dff6e->leave($__internal_381584047c450fde25b60637274eafeba106b14d4f64a4809028d1e2957dff6e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a4cb310221c21dfc1cfe99ae2ff9205514fa52a75d4d4467a02eb326f150d004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4cb310221c21dfc1cfe99ae2ff9205514fa52a75d4d4467a02eb326f150d004->enter($__internal_a4cb310221c21dfc1cfe99ae2ff9205514fa52a75d4d4467a02eb326f150d004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_a4cb310221c21dfc1cfe99ae2ff9205514fa52a75d4d4467a02eb326f150d004->leave($__internal_a4cb310221c21dfc1cfe99ae2ff9205514fa52a75d4d4467a02eb326f150d004_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4258189749d0dcbb1d6fd58a389d1c1a257612db2371c360369d07138812fb3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4258189749d0dcbb1d6fd58a389d1c1a257612db2371c360369d07138812fb3c->enter($__internal_4258189749d0dcbb1d6fd58a389d1c1a257612db2371c360369d07138812fb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_4258189749d0dcbb1d6fd58a389d1c1a257612db2371c360369d07138812fb3c->leave($__internal_4258189749d0dcbb1d6fd58a389d1c1a257612db2371c360369d07138812fb3c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f87aea74a691a7b99126678ac47eb86e633967ac7185127e80fa6f9db659b56c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f87aea74a691a7b99126678ac47eb86e633967ac7185127e80fa6f9db659b56c->enter($__internal_f87aea74a691a7b99126678ac47eb86e633967ac7185127e80fa6f9db659b56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f87aea74a691a7b99126678ac47eb86e633967ac7185127e80fa6f9db659b56c->leave($__internal_f87aea74a691a7b99126678ac47eb86e633967ac7185127e80fa6f9db659b56c_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_d6034492f8639405281045a860caed442ee5fb81a64725997797828edfc86146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6034492f8639405281045a860caed442ee5fb81a64725997797828edfc86146->enter($__internal_d6034492f8639405281045a860caed442ee5fb81a64725997797828edfc86146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_d6034492f8639405281045a860caed442ee5fb81a64725997797828edfc86146->leave($__internal_d6034492f8639405281045a860caed442ee5fb81a64725997797828edfc86146_prof);

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
", "SensioDistributionBundle:Configurator:layout.html.twig", "/var/www/html/symfonyAdminPanel--/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
