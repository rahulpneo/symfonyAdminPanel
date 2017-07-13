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
        $__internal_a275856e9ee8b35c5175ebcbf8d2b29bdce1393baa28b8544b2df3a48629eedc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a275856e9ee8b35c5175ebcbf8d2b29bdce1393baa28b8544b2df3a48629eedc->enter($__internal_a275856e9ee8b35c5175ebcbf8d2b29bdce1393baa28b8544b2df3a48629eedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a275856e9ee8b35c5175ebcbf8d2b29bdce1393baa28b8544b2df3a48629eedc->leave($__internal_a275856e9ee8b35c5175ebcbf8d2b29bdce1393baa28b8544b2df3a48629eedc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_50742f0c0fc5963b9501dc5d2aa87ab9b32e86af8fc6674728e976348132fc5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50742f0c0fc5963b9501dc5d2aa87ab9b32e86af8fc6674728e976348132fc5d->enter($__internal_50742f0c0fc5963b9501dc5d2aa87ab9b32e86af8fc6674728e976348132fc5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_50742f0c0fc5963b9501dc5d2aa87ab9b32e86af8fc6674728e976348132fc5d->leave($__internal_50742f0c0fc5963b9501dc5d2aa87ab9b32e86af8fc6674728e976348132fc5d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d7ca5e1a9079ec32909467b2f39227c0ca35e8eb3396cff59a26524ceb0d347f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ca5e1a9079ec32909467b2f39227c0ca35e8eb3396cff59a26524ceb0d347f->enter($__internal_d7ca5e1a9079ec32909467b2f39227c0ca35e8eb3396cff59a26524ceb0d347f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d7ca5e1a9079ec32909467b2f39227c0ca35e8eb3396cff59a26524ceb0d347f->leave($__internal_d7ca5e1a9079ec32909467b2f39227c0ca35e8eb3396cff59a26524ceb0d347f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_af604a354cf20531c5dc81e3422827599cfa4477866549a95fd9d8cc79099bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af604a354cf20531c5dc81e3422827599cfa4477866549a95fd9d8cc79099bec->enter($__internal_af604a354cf20531c5dc81e3422827599cfa4477866549a95fd9d8cc79099bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_af604a354cf20531c5dc81e3422827599cfa4477866549a95fd9d8cc79099bec->leave($__internal_af604a354cf20531c5dc81e3422827599cfa4477866549a95fd9d8cc79099bec_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/symfonyAdminPanel--/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
