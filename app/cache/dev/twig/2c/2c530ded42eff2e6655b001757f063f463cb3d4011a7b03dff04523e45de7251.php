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
        $__internal_378f34b936f36d364ca39652b390ce98a7522886405c4e76b09dd61ee13193de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_378f34b936f36d364ca39652b390ce98a7522886405c4e76b09dd61ee13193de->enter($__internal_378f34b936f36d364ca39652b390ce98a7522886405c4e76b09dd61ee13193de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_378f34b936f36d364ca39652b390ce98a7522886405c4e76b09dd61ee13193de->leave($__internal_378f34b936f36d364ca39652b390ce98a7522886405c4e76b09dd61ee13193de_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e6739457a01ed9496bb45e10cd4a3e9df27343c6b19082979980a58250b774a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6739457a01ed9496bb45e10cd4a3e9df27343c6b19082979980a58250b774a5->enter($__internal_e6739457a01ed9496bb45e10cd4a3e9df27343c6b19082979980a58250b774a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e6739457a01ed9496bb45e10cd4a3e9df27343c6b19082979980a58250b774a5->leave($__internal_e6739457a01ed9496bb45e10cd4a3e9df27343c6b19082979980a58250b774a5_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/symfonyAdminPanel--/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
