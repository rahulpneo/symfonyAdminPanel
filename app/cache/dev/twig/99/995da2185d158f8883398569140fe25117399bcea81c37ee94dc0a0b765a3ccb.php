<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0db66a44be3e888c5fc196dcb32a345695e14b02bf50f756516e32239f144904 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_098545d2f6c2cbeb7c8c9b5268e78e8e8e5545a358d0dd7917a8fb057a5b2130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_098545d2f6c2cbeb7c8c9b5268e78e8e8e5545a358d0dd7917a8fb057a5b2130->enter($__internal_098545d2f6c2cbeb7c8c9b5268e78e8e8e5545a358d0dd7917a8fb057a5b2130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_098545d2f6c2cbeb7c8c9b5268e78e8e8e5545a358d0dd7917a8fb057a5b2130->leave($__internal_098545d2f6c2cbeb7c8c9b5268e78e8e8e5545a358d0dd7917a8fb057a5b2130_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7b03f8e56c8d32df1c57cd44f23a3d9bbf6ece3ebd454c56be26c78d6b3176c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b03f8e56c8d32df1c57cd44f23a3d9bbf6ece3ebd454c56be26c78d6b3176c0->enter($__internal_7b03f8e56c8d32df1c57cd44f23a3d9bbf6ece3ebd454c56be26c78d6b3176c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7b03f8e56c8d32df1c57cd44f23a3d9bbf6ece3ebd454c56be26c78d6b3176c0->leave($__internal_7b03f8e56c8d32df1c57cd44f23a3d9bbf6ece3ebd454c56be26c78d6b3176c0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_88f70c930c4e73a9c6e78380dcca0076b70ec16fdd9f13b503ffab4c0a24d91b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f70c930c4e73a9c6e78380dcca0076b70ec16fdd9f13b503ffab4c0a24d91b->enter($__internal_88f70c930c4e73a9c6e78380dcca0076b70ec16fdd9f13b503ffab4c0a24d91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_88f70c930c4e73a9c6e78380dcca0076b70ec16fdd9f13b503ffab4c0a24d91b->leave($__internal_88f70c930c4e73a9c6e78380dcca0076b70ec16fdd9f13b503ffab4c0a24d91b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_27a3334db4e6ba978675374c07e1aa892bca0057cd040372e4db367bdc8f86e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27a3334db4e6ba978675374c07e1aa892bca0057cd040372e4db367bdc8f86e6->enter($__internal_27a3334db4e6ba978675374c07e1aa892bca0057cd040372e4db367bdc8f86e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_27a3334db4e6ba978675374c07e1aa892bca0057cd040372e4db367bdc8f86e6->leave($__internal_27a3334db4e6ba978675374c07e1aa892bca0057cd040372e4db367bdc8f86e6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
