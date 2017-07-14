<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d5d2508ec1e1f7d9be26aecb7568ffe6b79854944ae1968edb5d6a4d8d9e2087 extends Twig_Template
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
        $__internal_7f2c1ba6a6d72778a8c507056dc0e888b6851722eec8348e8d8f7eea2f49eacb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2c1ba6a6d72778a8c507056dc0e888b6851722eec8348e8d8f7eea2f49eacb->enter($__internal_7f2c1ba6a6d72778a8c507056dc0e888b6851722eec8348e8d8f7eea2f49eacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f2c1ba6a6d72778a8c507056dc0e888b6851722eec8348e8d8f7eea2f49eacb->leave($__internal_7f2c1ba6a6d72778a8c507056dc0e888b6851722eec8348e8d8f7eea2f49eacb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_87e33bbfd5c1aff38873853d2e7721c8b50b5e161e5a95c332d7175afdd072db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87e33bbfd5c1aff38873853d2e7721c8b50b5e161e5a95c332d7175afdd072db->enter($__internal_87e33bbfd5c1aff38873853d2e7721c8b50b5e161e5a95c332d7175afdd072db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_87e33bbfd5c1aff38873853d2e7721c8b50b5e161e5a95c332d7175afdd072db->leave($__internal_87e33bbfd5c1aff38873853d2e7721c8b50b5e161e5a95c332d7175afdd072db_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4685ed1a751e6e6d6a7f634646eb492a24de3b65cfc3313ff14934733a6de8a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4685ed1a751e6e6d6a7f634646eb492a24de3b65cfc3313ff14934733a6de8a3->enter($__internal_4685ed1a751e6e6d6a7f634646eb492a24de3b65cfc3313ff14934733a6de8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4685ed1a751e6e6d6a7f634646eb492a24de3b65cfc3313ff14934733a6de8a3->leave($__internal_4685ed1a751e6e6d6a7f634646eb492a24de3b65cfc3313ff14934733a6de8a3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fe15f2307565a296bb06368d958adfff7e6ccc81e9a0488e374fc97b74e87a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe15f2307565a296bb06368d958adfff7e6ccc81e9a0488e374fc97b74e87a90->enter($__internal_fe15f2307565a296bb06368d958adfff7e6ccc81e9a0488e374fc97b74e87a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fe15f2307565a296bb06368d958adfff7e6ccc81e9a0488e374fc97b74e87a90->leave($__internal_fe15f2307565a296bb06368d958adfff7e6ccc81e9a0488e374fc97b74e87a90_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
