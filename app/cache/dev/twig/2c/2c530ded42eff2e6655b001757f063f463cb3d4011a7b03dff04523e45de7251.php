<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_397b3195b46650cd118aab39f05345709e696f6c56550009c7e0e6bf443d444e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67646c3b4d95809173e33c16561ae328fae105255d0351a33793c0a649837daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67646c3b4d95809173e33c16561ae328fae105255d0351a33793c0a649837daf->enter($__internal_67646c3b4d95809173e33c16561ae328fae105255d0351a33793c0a649837daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_67646c3b4d95809173e33c16561ae328fae105255d0351a33793c0a649837daf->leave($__internal_67646c3b4d95809173e33c16561ae328fae105255d0351a33793c0a649837daf_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_34f987ccad4045c70f771de51de645de79c0fd89f6b29d698e887e6ad3f71f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34f987ccad4045c70f771de51de645de79c0fd89f6b29d698e887e6ad3f71f42->enter($__internal_34f987ccad4045c70f771de51de645de79c0fd89f6b29d698e887e6ad3f71f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_34f987ccad4045c70f771de51de645de79c0fd89f6b29d698e887e6ad3f71f42->leave($__internal_34f987ccad4045c70f771de51de645de79c0fd89f6b29d698e887e6ad3f71f42_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
