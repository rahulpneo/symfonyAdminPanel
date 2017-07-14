<?php

/* AdminBundle:Admin/Layout:layout.html.twig */
class __TwigTemplate_a2d958b89bda8d512801c3298d3470a4eafc0445521a69d8de87f30c57bfce4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::base.html.twig", "AdminBundle:Admin/Layout:layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
            'quicksidebar' => array($this, 'block_quicksidebar'),
            'footer' => array($this, 'block_footer'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b7eb308656e4a1b14f529dfd90c2d4f2d3efa533da17ccf7ecdc3280a12cf95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7eb308656e4a1b14f529dfd90c2d4f2d3efa533da17ccf7ecdc3280a12cf95->enter($__internal_4b7eb308656e4a1b14f529dfd90c2d4f2d3efa533da17ccf7ecdc3280a12cf95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin/Layout:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b7eb308656e4a1b14f529dfd90c2d4f2d3efa533da17ccf7ecdc3280a12cf95->leave($__internal_4b7eb308656e4a1b14f529dfd90c2d4f2d3efa533da17ccf7ecdc3280a12cf95_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_95835127b04819dc19f4ffcb0fa0eb750d4768df7a13f20b4904c95509c5982a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95835127b04819dc19f4ffcb0fa0eb750d4768df7a13f20b4904c95509c5982a->enter($__internal_95835127b04819dc19f4ffcb0fa0eb750d4768df7a13f20b4904c95509c5982a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:include_top.html.twig");
        echo "
";
        
        $__internal_95835127b04819dc19f4ffcb0fa0eb750d4768df7a13f20b4904c95509c5982a->leave($__internal_95835127b04819dc19f4ffcb0fa0eb750d4768df7a13f20b4904c95509c5982a_prof);

    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        $__internal_04a220b6d22bdb12224164dc9bda4d2de0d12374c5d67084fc51aa9510562805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a220b6d22bdb12224164dc9bda4d2de0d12374c5d67084fc51aa9510562805->enter($__internal_04a220b6d22bdb12224164dc9bda4d2de0d12374c5d67084fc51aa9510562805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 7
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:header.html.twig");
        echo "
";
        
        $__internal_04a220b6d22bdb12224164dc9bda4d2de0d12374c5d67084fc51aa9510562805->leave($__internal_04a220b6d22bdb12224164dc9bda4d2de0d12374c5d67084fc51aa9510562805_prof);

    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_59563af3219261c5acd1c9255b9fd1b14c1ea9a7ae3b6461ef44d4b393256a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59563af3219261c5acd1c9255b9fd1b14c1ea9a7ae3b6461ef44d4b393256a2e->enter($__internal_59563af3219261c5acd1c9255b9fd1b14c1ea9a7ae3b6461ef44d4b393256a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 11
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:sidebar.html.twig");
        echo "
";
        
        $__internal_59563af3219261c5acd1c9255b9fd1b14c1ea9a7ae3b6461ef44d4b393256a2e->leave($__internal_59563af3219261c5acd1c9255b9fd1b14c1ea9a7ae3b6461ef44d4b393256a2e_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_1c56f07586ac50569ce6b10e75dd15974b6d2e374be78fea36b323f6091c8de3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c56f07586ac50569ce6b10e75dd15974b6d2e374be78fea36b323f6091c8de3->enter($__internal_1c56f07586ac50569ce6b10e75dd15974b6d2e374be78fea36b323f6091c8de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:content.html.twig");
        echo "
";
        
        $__internal_1c56f07586ac50569ce6b10e75dd15974b6d2e374be78fea36b323f6091c8de3->leave($__internal_1c56f07586ac50569ce6b10e75dd15974b6d2e374be78fea36b323f6091c8de3_prof);

    }

    // line 18
    public function block_quicksidebar($context, array $blocks = array())
    {
        $__internal_91097aff119c3bed75260e391caea6a9a45807906f63727547e9f68292d2b7fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91097aff119c3bed75260e391caea6a9a45807906f63727547e9f68292d2b7fd->enter($__internal_91097aff119c3bed75260e391caea6a9a45807906f63727547e9f68292d2b7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quicksidebar"));

        // line 19
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:quick_sidebar.html.twig");
        echo "
";
        
        $__internal_91097aff119c3bed75260e391caea6a9a45807906f63727547e9f68292d2b7fd->leave($__internal_91097aff119c3bed75260e391caea6a9a45807906f63727547e9f68292d2b7fd_prof);

    }

    // line 22
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3cc0a8d4c996b0eca720a7c634f8a4fc5aa5936937735d5ab0bc489ff44e16e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cc0a8d4c996b0eca720a7c634f8a4fc5aa5936937735d5ab0bc489ff44e16e7->enter($__internal_3cc0a8d4c996b0eca720a7c634f8a4fc5aa5936937735d5ab0bc489ff44e16e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 23
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:footer.html.twig");
        echo "
";
        
        $__internal_3cc0a8d4c996b0eca720a7c634f8a4fc5aa5936937735d5ab0bc489ff44e16e7->leave($__internal_3cc0a8d4c996b0eca720a7c634f8a4fc5aa5936937735d5ab0bc489ff44e16e7_prof);

    }

    // line 26
    public function block_js($context, array $blocks = array())
    {
        $__internal_dd01e21fe3b2cfecd1450b650604b950c19cb7cf9526e85c89600ab209e72041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd01e21fe3b2cfecd1450b650604b950c19cb7cf9526e85c89600ab209e72041->enter($__internal_dd01e21fe3b2cfecd1450b650604b950c19cb7cf9526e85c89600ab209e72041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 27
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:include_bottom.html.twig");
        echo "
";
        
        $__internal_dd01e21fe3b2cfecd1450b650604b950c19cb7cf9526e85c89600ab209e72041->leave($__internal_dd01e21fe3b2cfecd1450b650604b950c19cb7cf9526e85c89600ab209e72041_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin/Layout:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 27,  130 => 26,  121 => 23,  115 => 22,  106 => 19,  100 => 18,  91 => 15,  85 => 14,  76 => 11,  70 => 10,  61 => 7,  55 => 6,  46 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AdminBundle::base.html.twig'%}
{% block stylesheets %}
{{ include('AdminBundle:Admin/Layout:include_top.html.twig') }}
{% endblock %}

{% block header %}
{{ include('AdminBundle:Admin/Layout:header.html.twig') }}
{% endblock %}

{% block sidebar %}
{{ include('AdminBundle:Admin/Layout:sidebar.html.twig') }}
{% endblock %}

{% block content %}
{{ include('AdminBundle:Admin/Layout:content.html.twig') }}
{% endblock %}

{% block quicksidebar %}
{{ include('AdminBundle:Admin/Layout:quick_sidebar.html.twig') }}
{% endblock %}

{% block footer %}
{{ include('AdminBundle:Admin/Layout:footer.html.twig') }}
{% endblock %}

{% block js %}
{{ include('AdminBundle:Admin/Layout:include_bottom.html.twig') }}
{% endblock %}
", "AdminBundle:Admin/Layout:layout.html.twig", "/var/www/html/symfonyAdminPanel/src/AdminBundle/Resources/views/Admin/Layout/layout.html.twig");
    }
}
