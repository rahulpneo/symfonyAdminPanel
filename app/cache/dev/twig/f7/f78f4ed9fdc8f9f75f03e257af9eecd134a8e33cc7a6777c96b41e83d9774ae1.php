<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6ed3e4d65d0bdf70fdc266c9eaeb04bb9a45644a0fdf6ad9ff063d3ab5d21acc extends Twig_Template
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
        $__internal_dbfd290cbc37293d4062bd6244bd5da69510ef594a25df631b42a2770ef217ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbfd290cbc37293d4062bd6244bd5da69510ef594a25df631b42a2770ef217ca->enter($__internal_dbfd290cbc37293d4062bd6244bd5da69510ef594a25df631b42a2770ef217ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbfd290cbc37293d4062bd6244bd5da69510ef594a25df631b42a2770ef217ca->leave($__internal_dbfd290cbc37293d4062bd6244bd5da69510ef594a25df631b42a2770ef217ca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_13d2db2c92116528ce0f1bd474cb289bc36551fed97eebec01bfad4917f1a45d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d2db2c92116528ce0f1bd474cb289bc36551fed97eebec01bfad4917f1a45d->enter($__internal_13d2db2c92116528ce0f1bd474cb289bc36551fed97eebec01bfad4917f1a45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_13d2db2c92116528ce0f1bd474cb289bc36551fed97eebec01bfad4917f1a45d->leave($__internal_13d2db2c92116528ce0f1bd474cb289bc36551fed97eebec01bfad4917f1a45d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_399ad042e4c8a977b76e14253bca492675cb76d7c3c11a8ec15e38f56af34488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_399ad042e4c8a977b76e14253bca492675cb76d7c3c11a8ec15e38f56af34488->enter($__internal_399ad042e4c8a977b76e14253bca492675cb76d7c3c11a8ec15e38f56af34488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_399ad042e4c8a977b76e14253bca492675cb76d7c3c11a8ec15e38f56af34488->leave($__internal_399ad042e4c8a977b76e14253bca492675cb76d7c3c11a8ec15e38f56af34488_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb11043747d7b09577b64847300f54282c19d796fd0145978dcd7a26709b6c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb11043747d7b09577b64847300f54282c19d796fd0145978dcd7a26709b6c30->enter($__internal_bb11043747d7b09577b64847300f54282c19d796fd0145978dcd7a26709b6c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bb11043747d7b09577b64847300f54282c19d796fd0145978dcd7a26709b6c30->leave($__internal_bb11043747d7b09577b64847300f54282c19d796fd0145978dcd7a26709b6c30_prof);

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
