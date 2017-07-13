<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c6a1c531987a9db16832593ad978b8ecebeb67bba2995220866d6eb9fbb8f9a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_2ff99d35489a6de5f65d086cc908cc1c7cae71afb314ec542b7e1990caf51f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff99d35489a6de5f65d086cc908cc1c7cae71afb314ec542b7e1990caf51f90->enter($__internal_2ff99d35489a6de5f65d086cc908cc1c7cae71afb314ec542b7e1990caf51f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ff99d35489a6de5f65d086cc908cc1c7cae71afb314ec542b7e1990caf51f90->leave($__internal_2ff99d35489a6de5f65d086cc908cc1c7cae71afb314ec542b7e1990caf51f90_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_727f380d2cc87a5f0b7cb3426872e2e85a5bb543a6f594b52e624b3b2a3a8adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_727f380d2cc87a5f0b7cb3426872e2e85a5bb543a6f594b52e624b3b2a3a8adc->enter($__internal_727f380d2cc87a5f0b7cb3426872e2e85a5bb543a6f594b52e624b3b2a3a8adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_727f380d2cc87a5f0b7cb3426872e2e85a5bb543a6f594b52e624b3b2a3a8adc->leave($__internal_727f380d2cc87a5f0b7cb3426872e2e85a5bb543a6f594b52e624b3b2a3a8adc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfb878a9e54f9a864ec9d83194b6966285cd702b84cf93485a8f450112f4c953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfb878a9e54f9a864ec9d83194b6966285cd702b84cf93485a8f450112f4c953->enter($__internal_dfb878a9e54f9a864ec9d83194b6966285cd702b84cf93485a8f450112f4c953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_dfb878a9e54f9a864ec9d83194b6966285cd702b84cf93485a8f450112f4c953->leave($__internal_dfb878a9e54f9a864ec9d83194b6966285cd702b84cf93485a8f450112f4c953_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
