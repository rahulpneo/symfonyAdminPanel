<?php

/* AdminBundle:Admin/Layout:layout.html.twig */
class __TwigTemplate_0bf77a96cfd0191dc5893125c87c2a868069a48b1b97d73537f293754d800a45 extends Twig_Template
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
        $__internal_5a9766e1c339cab0014fe57de6e44dcf316dcf8cf8245038d4b4881b5c732eb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a9766e1c339cab0014fe57de6e44dcf316dcf8cf8245038d4b4881b5c732eb7->enter($__internal_5a9766e1c339cab0014fe57de6e44dcf316dcf8cf8245038d4b4881b5c732eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin/Layout:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a9766e1c339cab0014fe57de6e44dcf316dcf8cf8245038d4b4881b5c732eb7->leave($__internal_5a9766e1c339cab0014fe57de6e44dcf316dcf8cf8245038d4b4881b5c732eb7_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dd48637323e3260ede40df2d854cd396d4a14e5b9d19fd81a2bce73a60d968a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd48637323e3260ede40df2d854cd396d4a14e5b9d19fd81a2bce73a60d968a3->enter($__internal_dd48637323e3260ede40df2d854cd396d4a14e5b9d19fd81a2bce73a60d968a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:include_top.html.twig");
        echo "
";
        
        $__internal_dd48637323e3260ede40df2d854cd396d4a14e5b9d19fd81a2bce73a60d968a3->leave($__internal_dd48637323e3260ede40df2d854cd396d4a14e5b9d19fd81a2bce73a60d968a3_prof);

    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        $__internal_baf8acb6e8204c542f3f15b2268104f7e6e70dcd749e08af52194e44f5e3d3cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf8acb6e8204c542f3f15b2268104f7e6e70dcd749e08af52194e44f5e3d3cf->enter($__internal_baf8acb6e8204c542f3f15b2268104f7e6e70dcd749e08af52194e44f5e3d3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 7
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:header.html.twig");
        echo "
";
        
        $__internal_baf8acb6e8204c542f3f15b2268104f7e6e70dcd749e08af52194e44f5e3d3cf->leave($__internal_baf8acb6e8204c542f3f15b2268104f7e6e70dcd749e08af52194e44f5e3d3cf_prof);

    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4e11c6733481df80c35009f24df4f089f9685fa05db6a076bd28d7375e2058dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e11c6733481df80c35009f24df4f089f9685fa05db6a076bd28d7375e2058dd->enter($__internal_4e11c6733481df80c35009f24df4f089f9685fa05db6a076bd28d7375e2058dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 11
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:sidebar.html.twig");
        echo "
";
        
        $__internal_4e11c6733481df80c35009f24df4f089f9685fa05db6a076bd28d7375e2058dd->leave($__internal_4e11c6733481df80c35009f24df4f089f9685fa05db6a076bd28d7375e2058dd_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_79b942f3d4030f8b415fe16e233fd231cf5299491245bdde0cbf15a89cb2a740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b942f3d4030f8b415fe16e233fd231cf5299491245bdde0cbf15a89cb2a740->enter($__internal_79b942f3d4030f8b415fe16e233fd231cf5299491245bdde0cbf15a89cb2a740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:content.html.twig");
        echo "
";
        
        $__internal_79b942f3d4030f8b415fe16e233fd231cf5299491245bdde0cbf15a89cb2a740->leave($__internal_79b942f3d4030f8b415fe16e233fd231cf5299491245bdde0cbf15a89cb2a740_prof);

    }

    // line 18
    public function block_quicksidebar($context, array $blocks = array())
    {
        $__internal_176905aab9d133366f215f3e54bc9a1ecdc3e38f18e319f50002feed8e01b750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176905aab9d133366f215f3e54bc9a1ecdc3e38f18e319f50002feed8e01b750->enter($__internal_176905aab9d133366f215f3e54bc9a1ecdc3e38f18e319f50002feed8e01b750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quicksidebar"));

        // line 19
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:quick_sidebar.html.twig");
        echo "
";
        
        $__internal_176905aab9d133366f215f3e54bc9a1ecdc3e38f18e319f50002feed8e01b750->leave($__internal_176905aab9d133366f215f3e54bc9a1ecdc3e38f18e319f50002feed8e01b750_prof);

    }

    // line 22
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7f6fcba1517ac3ea7b5457f150f3b67482801ec00a2de65b1f55df7f8c5bb4d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f6fcba1517ac3ea7b5457f150f3b67482801ec00a2de65b1f55df7f8c5bb4d2->enter($__internal_7f6fcba1517ac3ea7b5457f150f3b67482801ec00a2de65b1f55df7f8c5bb4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 23
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:footer.html.twig");
        echo "
";
        
        $__internal_7f6fcba1517ac3ea7b5457f150f3b67482801ec00a2de65b1f55df7f8c5bb4d2->leave($__internal_7f6fcba1517ac3ea7b5457f150f3b67482801ec00a2de65b1f55df7f8c5bb4d2_prof);

    }

    // line 26
    public function block_js($context, array $blocks = array())
    {
        $__internal_0afaf08c3c8a3dc247c9a910a1659c7da753f3364e217256e7c1be8c56c2eb64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0afaf08c3c8a3dc247c9a910a1659c7da753f3364e217256e7c1be8c56c2eb64->enter($__internal_0afaf08c3c8a3dc247c9a910a1659c7da753f3364e217256e7c1be8c56c2eb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 27
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:include_bottom.html.twig");
        echo "
";
        
        $__internal_0afaf08c3c8a3dc247c9a910a1659c7da753f3364e217256e7c1be8c56c2eb64->leave($__internal_0afaf08c3c8a3dc247c9a910a1659c7da753f3364e217256e7c1be8c56c2eb64_prof);

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
