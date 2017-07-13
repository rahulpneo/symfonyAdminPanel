<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5887b5c6ecabe0fd39b52d1dbab7dbb2dfaa625e2345d9ab60e23324ed21d465 extends Twig_Template
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
        $__internal_b70789fd9e80a505c0419e7f80aa1eedf52e1fb9c2766fe3231e4825a7d50340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b70789fd9e80a505c0419e7f80aa1eedf52e1fb9c2766fe3231e4825a7d50340->enter($__internal_b70789fd9e80a505c0419e7f80aa1eedf52e1fb9c2766fe3231e4825a7d50340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b70789fd9e80a505c0419e7f80aa1eedf52e1fb9c2766fe3231e4825a7d50340->leave($__internal_b70789fd9e80a505c0419e7f80aa1eedf52e1fb9c2766fe3231e4825a7d50340_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f9414bf9a6d66fb0c44b5441de04e5d61efdeb8af8abff1850f5c930cee1ad27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9414bf9a6d66fb0c44b5441de04e5d61efdeb8af8abff1850f5c930cee1ad27->enter($__internal_f9414bf9a6d66fb0c44b5441de04e5d61efdeb8af8abff1850f5c930cee1ad27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f9414bf9a6d66fb0c44b5441de04e5d61efdeb8af8abff1850f5c930cee1ad27->leave($__internal_f9414bf9a6d66fb0c44b5441de04e5d61efdeb8af8abff1850f5c930cee1ad27_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_81fc0c66a03eb575f1d4c17fba2a03ae67a1437ffca3e0267f9c66b5f60e214b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81fc0c66a03eb575f1d4c17fba2a03ae67a1437ffca3e0267f9c66b5f60e214b->enter($__internal_81fc0c66a03eb575f1d4c17fba2a03ae67a1437ffca3e0267f9c66b5f60e214b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_81fc0c66a03eb575f1d4c17fba2a03ae67a1437ffca3e0267f9c66b5f60e214b->leave($__internal_81fc0c66a03eb575f1d4c17fba2a03ae67a1437ffca3e0267f9c66b5f60e214b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b678f0fa25dd7145f182c0fb2ca71c34aab53908210ae793dced593cf1ffdb95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b678f0fa25dd7145f182c0fb2ca71c34aab53908210ae793dced593cf1ffdb95->enter($__internal_b678f0fa25dd7145f182c0fb2ca71c34aab53908210ae793dced593cf1ffdb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b678f0fa25dd7145f182c0fb2ca71c34aab53908210ae793dced593cf1ffdb95->leave($__internal_b678f0fa25dd7145f182c0fb2ca71c34aab53908210ae793dced593cf1ffdb95_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/symfonyadminpanel/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
