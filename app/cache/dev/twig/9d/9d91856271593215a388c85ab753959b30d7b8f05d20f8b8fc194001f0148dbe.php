<?php

/* AdminBundle:Admin/Layout:layout.html.twig */
class __TwigTemplate_86fc049b6dd0dbb3de566ec0a5dca9394afd9900707011462663c89528318f54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::base.html.twig", "AdminBundle:Admin/Layout:layout.html.twig", 1);
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

    protected function doGetParent(array $context)
    {
        return "AdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30e434513f90721ab9dc292551a638d388490586aab36c8e56c6437162f4b2f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e434513f90721ab9dc292551a638d388490586aab36c8e56c6437162f4b2f4->enter($__internal_30e434513f90721ab9dc292551a638d388490586aab36c8e56c6437162f4b2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin/Layout:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30e434513f90721ab9dc292551a638d388490586aab36c8e56c6437162f4b2f4->leave($__internal_30e434513f90721ab9dc292551a638d388490586aab36c8e56c6437162f4b2f4_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_173c0d349b5034d52cefd4c87bae73db819baef376ad091a250f9caff1328ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_173c0d349b5034d52cefd4c87bae73db819baef376ad091a250f9caff1328ca6->enter($__internal_173c0d349b5034d52cefd4c87bae73db819baef376ad091a250f9caff1328ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:include_top.html.twig");
        echo "
";
        
        $__internal_173c0d349b5034d52cefd4c87bae73db819baef376ad091a250f9caff1328ca6->leave($__internal_173c0d349b5034d52cefd4c87bae73db819baef376ad091a250f9caff1328ca6_prof);

    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        $__internal_1a0017c2263cd04d478bc79b285963e8d883751f030128bf9814021756fe395e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a0017c2263cd04d478bc79b285963e8d883751f030128bf9814021756fe395e->enter($__internal_1a0017c2263cd04d478bc79b285963e8d883751f030128bf9814021756fe395e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 7
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:header.html.twig");
        echo "
";
        
        $__internal_1a0017c2263cd04d478bc79b285963e8d883751f030128bf9814021756fe395e->leave($__internal_1a0017c2263cd04d478bc79b285963e8d883751f030128bf9814021756fe395e_prof);

    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d7ef3f698c7269c348033ad30d8a7c2f0f60e02bf9b85758aee77ee810e25215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ef3f698c7269c348033ad30d8a7c2f0f60e02bf9b85758aee77ee810e25215->enter($__internal_d7ef3f698c7269c348033ad30d8a7c2f0f60e02bf9b85758aee77ee810e25215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 11
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:sidebar.html.twig");
        echo "
";
        
        $__internal_d7ef3f698c7269c348033ad30d8a7c2f0f60e02bf9b85758aee77ee810e25215->leave($__internal_d7ef3f698c7269c348033ad30d8a7c2f0f60e02bf9b85758aee77ee810e25215_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_dcf93c8d78fed7f9f597df5b37705e65488e2182c8d6d1a04ec623ea58874b8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcf93c8d78fed7f9f597df5b37705e65488e2182c8d6d1a04ec623ea58874b8e->enter($__internal_dcf93c8d78fed7f9f597df5b37705e65488e2182c8d6d1a04ec623ea58874b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:content.html.twig");
        echo "
";
        
        $__internal_dcf93c8d78fed7f9f597df5b37705e65488e2182c8d6d1a04ec623ea58874b8e->leave($__internal_dcf93c8d78fed7f9f597df5b37705e65488e2182c8d6d1a04ec623ea58874b8e_prof);

    }

    // line 18
    public function block_quicksidebar($context, array $blocks = array())
    {
        $__internal_9f8e4885eb60785407a47543654ec263694e3cd112d26dc7fde6f135485cf8d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f8e4885eb60785407a47543654ec263694e3cd112d26dc7fde6f135485cf8d4->enter($__internal_9f8e4885eb60785407a47543654ec263694e3cd112d26dc7fde6f135485cf8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quicksidebar"));

        // line 19
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:quick_sidebar.html.twig");
        echo "
";
        
        $__internal_9f8e4885eb60785407a47543654ec263694e3cd112d26dc7fde6f135485cf8d4->leave($__internal_9f8e4885eb60785407a47543654ec263694e3cd112d26dc7fde6f135485cf8d4_prof);

    }

    // line 22
    public function block_footer($context, array $blocks = array())
    {
        $__internal_06f93d8e2d5f6f8f862e7d1680d8729fc0c39b5679f3d48d1a56141beb6bd6e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06f93d8e2d5f6f8f862e7d1680d8729fc0c39b5679f3d48d1a56141beb6bd6e0->enter($__internal_06f93d8e2d5f6f8f862e7d1680d8729fc0c39b5679f3d48d1a56141beb6bd6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 23
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:footer.html.twig");
        echo "
";
        
        $__internal_06f93d8e2d5f6f8f862e7d1680d8729fc0c39b5679f3d48d1a56141beb6bd6e0->leave($__internal_06f93d8e2d5f6f8f862e7d1680d8729fc0c39b5679f3d48d1a56141beb6bd6e0_prof);

    }

    // line 26
    public function block_js($context, array $blocks = array())
    {
        $__internal_248d3009534ded9ce4cb8fd7a3168a05ad27d4a31f427c2215961c85a70fc534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_248d3009534ded9ce4cb8fd7a3168a05ad27d4a31f427c2215961c85a70fc534->enter($__internal_248d3009534ded9ce4cb8fd7a3168a05ad27d4a31f427c2215961c85a70fc534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 27
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:include_bottom.html.twig");
        echo "
";
        
        $__internal_248d3009534ded9ce4cb8fd7a3168a05ad27d4a31f427c2215961c85a70fc534->leave($__internal_248d3009534ded9ce4cb8fd7a3168a05ad27d4a31f427c2215961c85a70fc534_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin/Layout:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 27,  130 => 26,  121 => 23,  115 => 22,  106 => 19,  100 => 18,  91 => 15,  85 => 14,  76 => 11,  70 => 10,  61 => 7,  55 => 6,  46 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AdminBundle::base.html.twig'%}
{% block stylesheets %}
{{ include('AdminBundle:Admin/Layout:include_top.html.twig') }}
{% endblock %}

{% block header %}
{{ include('AdminBundle:Admin/Layout:header.html.twig') }}
{% endblock %}

{% block sidebar %}
{{ include('AdminBundle:Admin/Layout:sidebar.html.twig') }}
{% endblock %}

{% block content %}
{{ include('AdminBundle:Admin/Layout:content.html.twig') }}
{% endblock %}

{% block quicksidebar %}
{{ include('AdminBundle:Admin/Layout:quick_sidebar.html.twig') }}
{% endblock %}

{% block footer %}
{{ include('AdminBundle:Admin/Layout:footer.html.twig') }}
{% endblock %}

{% block js %}
{{ include('AdminBundle:Admin/Layout:include_bottom.html.twig') }}
{% endblock %}
", "AdminBundle:Admin/Layout:layout.html.twig", "/var/www/html/symfonyAdminPanel/src/AdminBundle/Resources/views/Admin/Layout/layout.html.twig");
    }
}
