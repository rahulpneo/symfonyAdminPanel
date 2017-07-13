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
        $__internal_88a8ef19c36cee66109845ce7e82ac21b8771cba3727f52709371ac193607684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88a8ef19c36cee66109845ce7e82ac21b8771cba3727f52709371ac193607684->enter($__internal_88a8ef19c36cee66109845ce7e82ac21b8771cba3727f52709371ac193607684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88a8ef19c36cee66109845ce7e82ac21b8771cba3727f52709371ac193607684->leave($__internal_88a8ef19c36cee66109845ce7e82ac21b8771cba3727f52709371ac193607684_prof);

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
", "AdminBundle:Admin:index.html.twig", "/var/www/html/symfonyAdminPanel--/src/AdminBundle/Resources/views/Admin/index.html.twig");
    }
}
