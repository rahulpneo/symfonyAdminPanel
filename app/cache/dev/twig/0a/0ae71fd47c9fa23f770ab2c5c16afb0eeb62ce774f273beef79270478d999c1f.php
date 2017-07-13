<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dca0a1a7724a2dc675b1c05dce03ebf01a8a0486f11ac4cfaff54e48bda9314f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c99fec0abb87a0ee4549cba0c2260225aba12b787677f5d5ae55b4a883ffe3be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c99fec0abb87a0ee4549cba0c2260225aba12b787677f5d5ae55b4a883ffe3be->enter($__internal_c99fec0abb87a0ee4549cba0c2260225aba12b787677f5d5ae55b4a883ffe3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c99fec0abb87a0ee4549cba0c2260225aba12b787677f5d5ae55b4a883ffe3be->leave($__internal_c99fec0abb87a0ee4549cba0c2260225aba12b787677f5d5ae55b4a883ffe3be_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5b3e61d5867339f786850e0f5fc128a61b0a1a12dcd2b8fa836c19dc68cdf0af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b3e61d5867339f786850e0f5fc128a61b0a1a12dcd2b8fa836c19dc68cdf0af->enter($__internal_5b3e61d5867339f786850e0f5fc128a61b0a1a12dcd2b8fa836c19dc68cdf0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5b3e61d5867339f786850e0f5fc128a61b0a1a12dcd2b8fa836c19dc68cdf0af->leave($__internal_5b3e61d5867339f786850e0f5fc128a61b0a1a12dcd2b8fa836c19dc68cdf0af_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bcca86341143e79af56f99d3c239d010915467f28812dfbb4b0ae3e4a418627b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcca86341143e79af56f99d3c239d010915467f28812dfbb4b0ae3e4a418627b->enter($__internal_bcca86341143e79af56f99d3c239d010915467f28812dfbb4b0ae3e4a418627b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bcca86341143e79af56f99d3c239d010915467f28812dfbb4b0ae3e4a418627b->leave($__internal_bcca86341143e79af56f99d3c239d010915467f28812dfbb4b0ae3e4a418627b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e5de4f9dcbeba04c2b0ea54c3b873ba184fc636c006f32c72440bf3b922b25eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5de4f9dcbeba04c2b0ea54c3b873ba184fc636c006f32c72440bf3b922b25eb->enter($__internal_e5de4f9dcbeba04c2b0ea54c3b873ba184fc636c006f32c72440bf3b922b25eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e5de4f9dcbeba04c2b0ea54c3b873ba184fc636c006f32c72440bf3b922b25eb->leave($__internal_e5de4f9dcbeba04c2b0ea54c3b873ba184fc636c006f32c72440bf3b922b25eb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
