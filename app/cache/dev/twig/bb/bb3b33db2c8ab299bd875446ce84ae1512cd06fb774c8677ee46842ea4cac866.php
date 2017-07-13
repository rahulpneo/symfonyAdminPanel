<?php

/* AdminBundle:Security:login.check.html.twig */
class __TwigTemplate_6e7c89810f2907ecc23da2d8a08e80e092aa6ef8cfe3633d7fe62a4749611d0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Security:login.check.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a1d0af8ddc3d1f32501c3da0e84e79d315f6e56c35a4c99f678f1b1f3e3bfd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a1d0af8ddc3d1f32501c3da0e84e79d315f6e56c35a4c99f678f1b1f3e3bfd0->enter($__internal_0a1d0af8ddc3d1f32501c3da0e84e79d315f6e56c35a4c99f678f1b1f3e3bfd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Security:login.check.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a1d0af8ddc3d1f32501c3da0e84e79d315f6e56c35a4c99f678f1b1f3e3bfd0->leave($__internal_0a1d0af8ddc3d1f32501c3da0e84e79d315f6e56c35a4c99f678f1b1f3e3bfd0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_83cfd96150edf65033b51f50ffed6c569ae9ca0431503ce86b0b15fe06178cde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83cfd96150edf65033b51f50ffed6c569ae9ca0431503ce86b0b15fe06178cde->enter($__internal_83cfd96150edf65033b51f50ffed6c569ae9ca0431503ce86b0b15fe06178cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AdminBundle:Security:login_check";
        
        $__internal_83cfd96150edf65033b51f50ffed6c569ae9ca0431503ce86b0b15fe06178cde->leave($__internal_83cfd96150edf65033b51f50ffed6c569ae9ca0431503ce86b0b15fe06178cde_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_78981ab94a05a74e6fce7143b610c85cd388907c2eaaab4f9af3ebe708de837e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78981ab94a05a74e6fce7143b610c85cd388907c2eaaab4f9af3ebe708de837e->enter($__internal_78981ab94a05a74e6fce7143b610c85cd388907c2eaaab4f9af3ebe708de837e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Security:login_check page</h1>
";
        
        $__internal_78981ab94a05a74e6fce7143b610c85cd388907c2eaaab4f9af3ebe708de837e->leave($__internal_78981ab94a05a74e6fce7143b610c85cd388907c2eaaab4f9af3ebe708de837e_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Security:login.check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AdminBundle:Security:login_check{% endblock %}

{% block body %}
<h1>Welcome to the Security:login_check page</h1>
{% endblock %}
", "AdminBundle:Security:login.check.html.twig", "/var/www/html/symfonyAdminPanel--/src/AdminBundle/Resources/views/Security/login.check.html.twig");
    }
}
