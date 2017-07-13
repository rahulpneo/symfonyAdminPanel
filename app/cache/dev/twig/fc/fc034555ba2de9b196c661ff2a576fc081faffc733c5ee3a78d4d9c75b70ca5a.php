<?php

/* AdminBundle:Admin:index.html.twig */
class __TwigTemplate_119cd57dc3af18be4a02157c157b4d9dfee9d0b7ae7d58321f5da90fa4c3d5e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AdminBundle:Admin:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_554c6f3679d9a414f853d5488a8fa70268a1d08dd16d255ac8aea177d1484983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_554c6f3679d9a414f853d5488a8fa70268a1d08dd16d255ac8aea177d1484983->enter($__internal_554c6f3679d9a414f853d5488a8fa70268a1d08dd16d255ac8aea177d1484983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_554c6f3679d9a414f853d5488a8fa70268a1d08dd16d255ac8aea177d1484983->leave($__internal_554c6f3679d9a414f853d5488a8fa70268a1d08dd16d255ac8aea177d1484983_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig'%}
", "AdminBundle:Admin:index.html.twig", "/var/www/html/symfonyAdminPanel/src/AdminBundle/Resources/views/Admin/index.html.twig");
    }
}
