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
        $__internal_d55d8be61421adecb5446e074d06d1d205a8bb498845c8d3a06295cf7331d9ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d55d8be61421adecb5446e074d06d1d205a8bb498845c8d3a06295cf7331d9ce->enter($__internal_d55d8be61421adecb5446e074d06d1d205a8bb498845c8d3a06295cf7331d9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d55d8be61421adecb5446e074d06d1d205a8bb498845c8d3a06295cf7331d9ce->leave($__internal_d55d8be61421adecb5446e074d06d1d205a8bb498845c8d3a06295cf7331d9ce_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_49834ce3d68fd77458a5da32f500cdd8f3d3c7d5b737f3701bb8112c78b94681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49834ce3d68fd77458a5da32f500cdd8f3d3c7d5b737f3701bb8112c78b94681->enter($__internal_49834ce3d68fd77458a5da32f500cdd8f3d3c7d5b737f3701bb8112c78b94681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_49834ce3d68fd77458a5da32f500cdd8f3d3c7d5b737f3701bb8112c78b94681->leave($__internal_49834ce3d68fd77458a5da32f500cdd8f3d3c7d5b737f3701bb8112c78b94681_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b8a2134338a6cdb931904465ce90eace33d55d103842b95a237290f98c76668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b8a2134338a6cdb931904465ce90eace33d55d103842b95a237290f98c76668->enter($__internal_0b8a2134338a6cdb931904465ce90eace33d55d103842b95a237290f98c76668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0b8a2134338a6cdb931904465ce90eace33d55d103842b95a237290f98c76668->leave($__internal_0b8a2134338a6cdb931904465ce90eace33d55d103842b95a237290f98c76668_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2be5d235243a2d0ecfad3ae49a928553ee48201dcc8f08895197249acc6dd7c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be5d235243a2d0ecfad3ae49a928553ee48201dcc8f08895197249acc6dd7c0->enter($__internal_2be5d235243a2d0ecfad3ae49a928553ee48201dcc8f08895197249acc6dd7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2be5d235243a2d0ecfad3ae49a928553ee48201dcc8f08895197249acc6dd7c0->leave($__internal_2be5d235243a2d0ecfad3ae49a928553ee48201dcc8f08895197249acc6dd7c0_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
