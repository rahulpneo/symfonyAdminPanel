<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_974474a22096bdba6cd9d66ba1c2f8be62ad1e8f8815d4845a3668606c0818ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_741858df78de049546489512ee34ce92cbedb7b2dd594d10327ab3ae39467d55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_741858df78de049546489512ee34ce92cbedb7b2dd594d10327ab3ae39467d55->enter($__internal_741858df78de049546489512ee34ce92cbedb7b2dd594d10327ab3ae39467d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_741858df78de049546489512ee34ce92cbedb7b2dd594d10327ab3ae39467d55->leave($__internal_741858df78de049546489512ee34ce92cbedb7b2dd594d10327ab3ae39467d55_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_46a330994c080cc41bb170976085a9db66cff4e3a43c1f366b64038f43cd8c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46a330994c080cc41bb170976085a9db66cff4e3a43c1f366b64038f43cd8c42->enter($__internal_46a330994c080cc41bb170976085a9db66cff4e3a43c1f366b64038f43cd8c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_46a330994c080cc41bb170976085a9db66cff4e3a43c1f366b64038f43cd8c42->leave($__internal_46a330994c080cc41bb170976085a9db66cff4e3a43c1f366b64038f43cd8c42_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3b3c2c17778b9da696d0a11df6db0e953d842dbd6a1f3923fd346ca04024aba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3c2c17778b9da696d0a11df6db0e953d842dbd6a1f3923fd346ca04024aba3->enter($__internal_3b3c2c17778b9da696d0a11df6db0e953d842dbd6a1f3923fd346ca04024aba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3b3c2c17778b9da696d0a11df6db0e953d842dbd6a1f3923fd346ca04024aba3->leave($__internal_3b3c2c17778b9da696d0a11df6db0e953d842dbd6a1f3923fd346ca04024aba3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9bcc91483c7afa561de0f3fb042bb53170ac83ebbe3e162d46cef70869be2596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bcc91483c7afa561de0f3fb042bb53170ac83ebbe3e162d46cef70869be2596->enter($__internal_9bcc91483c7afa561de0f3fb042bb53170ac83ebbe3e162d46cef70869be2596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9bcc91483c7afa561de0f3fb042bb53170ac83ebbe3e162d46cef70869be2596->leave($__internal_9bcc91483c7afa561de0f3fb042bb53170ac83ebbe3e162d46cef70869be2596_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
