<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_96d9bc810bd6a9058e47ca6386507cc68bc6cd6c6d6084ae108fb4cc8860549d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39a3748bc0bfe0b23e3cf0ad8c4e1350f5d3a48ec209060befdd9222bf074ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a3748bc0bfe0b23e3cf0ad8c4e1350f5d3a48ec209060befdd9222bf074ba1->enter($__internal_39a3748bc0bfe0b23e3cf0ad8c4e1350f5d3a48ec209060befdd9222bf074ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39a3748bc0bfe0b23e3cf0ad8c4e1350f5d3a48ec209060befdd9222bf074ba1->leave($__internal_39a3748bc0bfe0b23e3cf0ad8c4e1350f5d3a48ec209060befdd9222bf074ba1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_90c78b38ba4edebc1ce9860e469470f57cb1addfdf5363a23d3ec4d8c8f40717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c78b38ba4edebc1ce9860e469470f57cb1addfdf5363a23d3ec4d8c8f40717->enter($__internal_90c78b38ba4edebc1ce9860e469470f57cb1addfdf5363a23d3ec4d8c8f40717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_90c78b38ba4edebc1ce9860e469470f57cb1addfdf5363a23d3ec4d8c8f40717->leave($__internal_90c78b38ba4edebc1ce9860e469470f57cb1addfdf5363a23d3ec4d8c8f40717_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_50a967355382cdc236deb1a8cfc670167fd194675acbbfe30003fa32e5d64277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a967355382cdc236deb1a8cfc670167fd194675acbbfe30003fa32e5d64277->enter($__internal_50a967355382cdc236deb1a8cfc670167fd194675acbbfe30003fa32e5d64277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_50a967355382cdc236deb1a8cfc670167fd194675acbbfe30003fa32e5d64277->leave($__internal_50a967355382cdc236deb1a8cfc670167fd194675acbbfe30003fa32e5d64277_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a69ff45984335a0c934496225852cec50323e98f4f32bdec9a77177e9ea92644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a69ff45984335a0c934496225852cec50323e98f4f32bdec9a77177e9ea92644->enter($__internal_a69ff45984335a0c934496225852cec50323e98f4f32bdec9a77177e9ea92644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a69ff45984335a0c934496225852cec50323e98f4f32bdec9a77177e9ea92644->leave($__internal_a69ff45984335a0c934496225852cec50323e98f4f32bdec9a77177e9ea92644_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/symfonyAdminPanel--/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
