<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_60f00ca1adc6bacd0176db853faf61caefd6ba121804427571b116570e272782 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e8915d5dbe4538798d3f5a32390428138e5c0c2c91abdb74e03d04a126692426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8915d5dbe4538798d3f5a32390428138e5c0c2c91abdb74e03d04a126692426->enter($__internal_e8915d5dbe4538798d3f5a32390428138e5c0c2c91abdb74e03d04a126692426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8915d5dbe4538798d3f5a32390428138e5c0c2c91abdb74e03d04a126692426->leave($__internal_e8915d5dbe4538798d3f5a32390428138e5c0c2c91abdb74e03d04a126692426_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b432d7177b36d85246ee15475c1b1da4296bef5fb6025ae46c55cc2f692e3e36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b432d7177b36d85246ee15475c1b1da4296bef5fb6025ae46c55cc2f692e3e36->enter($__internal_b432d7177b36d85246ee15475c1b1da4296bef5fb6025ae46c55cc2f692e3e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b432d7177b36d85246ee15475c1b1da4296bef5fb6025ae46c55cc2f692e3e36->leave($__internal_b432d7177b36d85246ee15475c1b1da4296bef5fb6025ae46c55cc2f692e3e36_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6a6a6b602a16a417e25c62056d0b307638d834e6cca42f7f0e4cc71fe8d277f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a6a6b602a16a417e25c62056d0b307638d834e6cca42f7f0e4cc71fe8d277f3->enter($__internal_6a6a6b602a16a417e25c62056d0b307638d834e6cca42f7f0e4cc71fe8d277f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6a6a6b602a16a417e25c62056d0b307638d834e6cca42f7f0e4cc71fe8d277f3->leave($__internal_6a6a6b602a16a417e25c62056d0b307638d834e6cca42f7f0e4cc71fe8d277f3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e34b476600bd7bcb0b8e4e0fd1635c8f5914657ce7292e7ef9ed9b2aa7dada68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e34b476600bd7bcb0b8e4e0fd1635c8f5914657ce7292e7ef9ed9b2aa7dada68->enter($__internal_e34b476600bd7bcb0b8e4e0fd1635c8f5914657ce7292e7ef9ed9b2aa7dada68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e34b476600bd7bcb0b8e4e0fd1635c8f5914657ce7292e7ef9ed9b2aa7dada68->leave($__internal_e34b476600bd7bcb0b8e4e0fd1635c8f5914657ce7292e7ef9ed9b2aa7dada68_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
