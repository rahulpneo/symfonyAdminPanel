<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_44991a34c6dace3f36a6ae6d63d9f5175bd8c3165843a30deca8d31af58f0fe7 extends Twig_Template
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
        $__internal_b6c6ff4e5f9563555a8fdf1446e15cfe68348ff31919b3733cf770daf59d0a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6c6ff4e5f9563555a8fdf1446e15cfe68348ff31919b3733cf770daf59d0a4e->enter($__internal_b6c6ff4e5f9563555a8fdf1446e15cfe68348ff31919b3733cf770daf59d0a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6c6ff4e5f9563555a8fdf1446e15cfe68348ff31919b3733cf770daf59d0a4e->leave($__internal_b6c6ff4e5f9563555a8fdf1446e15cfe68348ff31919b3733cf770daf59d0a4e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8546b080ad312ac55be5d7d7e2e812e0b5c2f50c4a95631abf1b107cddcd91d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8546b080ad312ac55be5d7d7e2e812e0b5c2f50c4a95631abf1b107cddcd91d2->enter($__internal_8546b080ad312ac55be5d7d7e2e812e0b5c2f50c4a95631abf1b107cddcd91d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8546b080ad312ac55be5d7d7e2e812e0b5c2f50c4a95631abf1b107cddcd91d2->leave($__internal_8546b080ad312ac55be5d7d7e2e812e0b5c2f50c4a95631abf1b107cddcd91d2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b57529c147ab0757a9b70d8d351b4227f59738193c8dc3a4eae933d8f93a897d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b57529c147ab0757a9b70d8d351b4227f59738193c8dc3a4eae933d8f93a897d->enter($__internal_b57529c147ab0757a9b70d8d351b4227f59738193c8dc3a4eae933d8f93a897d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b57529c147ab0757a9b70d8d351b4227f59738193c8dc3a4eae933d8f93a897d->leave($__internal_b57529c147ab0757a9b70d8d351b4227f59738193c8dc3a4eae933d8f93a897d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a6d51cbd988fa64dca686a723b82522a35ae1da73e3f221f0eced67363393f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a6d51cbd988fa64dca686a723b82522a35ae1da73e3f221f0eced67363393f8->enter($__internal_5a6d51cbd988fa64dca686a723b82522a35ae1da73e3f221f0eced67363393f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5a6d51cbd988fa64dca686a723b82522a35ae1da73e3f221f0eced67363393f8->leave($__internal_5a6d51cbd988fa64dca686a723b82522a35ae1da73e3f221f0eced67363393f8_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/symfonyadminpanel/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
