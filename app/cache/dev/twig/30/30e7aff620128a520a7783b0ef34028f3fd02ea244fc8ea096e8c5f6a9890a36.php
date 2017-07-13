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
        $__internal_52949f628e2be996375e40896c2ba4f9e97867ad3a638064ba1ce76bc94cbd6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52949f628e2be996375e40896c2ba4f9e97867ad3a638064ba1ce76bc94cbd6d->enter($__internal_52949f628e2be996375e40896c2ba4f9e97867ad3a638064ba1ce76bc94cbd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin/Layout:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52949f628e2be996375e40896c2ba4f9e97867ad3a638064ba1ce76bc94cbd6d->leave($__internal_52949f628e2be996375e40896c2ba4f9e97867ad3a638064ba1ce76bc94cbd6d_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b20f61760f69f7488833423fbb794b24e9dbb395d14d4e656e72e50da30dd179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20f61760f69f7488833423fbb794b24e9dbb395d14d4e656e72e50da30dd179->enter($__internal_b20f61760f69f7488833423fbb794b24e9dbb395d14d4e656e72e50da30dd179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:include_top.html.twig");
        echo "
";
        
        $__internal_b20f61760f69f7488833423fbb794b24e9dbb395d14d4e656e72e50da30dd179->leave($__internal_b20f61760f69f7488833423fbb794b24e9dbb395d14d4e656e72e50da30dd179_prof);

    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        $__internal_2f056dc64c0ae6d0f668468428f551ada3187a3122ee22e08bf9be510853ea43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f056dc64c0ae6d0f668468428f551ada3187a3122ee22e08bf9be510853ea43->enter($__internal_2f056dc64c0ae6d0f668468428f551ada3187a3122ee22e08bf9be510853ea43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 7
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:header.html.twig");
        echo "
";
        
        $__internal_2f056dc64c0ae6d0f668468428f551ada3187a3122ee22e08bf9be510853ea43->leave($__internal_2f056dc64c0ae6d0f668468428f551ada3187a3122ee22e08bf9be510853ea43_prof);

    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_504aaa641579955cab2ee87b682bc2bf112884d1769c96efd2bb6c03ff90cd98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504aaa641579955cab2ee87b682bc2bf112884d1769c96efd2bb6c03ff90cd98->enter($__internal_504aaa641579955cab2ee87b682bc2bf112884d1769c96efd2bb6c03ff90cd98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 11
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:sidebar.html.twig");
        echo "
";
        
        $__internal_504aaa641579955cab2ee87b682bc2bf112884d1769c96efd2bb6c03ff90cd98->leave($__internal_504aaa641579955cab2ee87b682bc2bf112884d1769c96efd2bb6c03ff90cd98_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_384ec704c6fc96f6a6af44ab5e0a9d338ef74136c53671d1d256f2d6dea8146a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_384ec704c6fc96f6a6af44ab5e0a9d338ef74136c53671d1d256f2d6dea8146a->enter($__internal_384ec704c6fc96f6a6af44ab5e0a9d338ef74136c53671d1d256f2d6dea8146a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:content.html.twig");
        echo "
";
        
        $__internal_384ec704c6fc96f6a6af44ab5e0a9d338ef74136c53671d1d256f2d6dea8146a->leave($__internal_384ec704c6fc96f6a6af44ab5e0a9d338ef74136c53671d1d256f2d6dea8146a_prof);

    }

    // line 18
    public function block_quicksidebar($context, array $blocks = array())
    {
        $__internal_0781b595aed725221d013e9800c0aa4bd7132496e4a27804c0ffa6b0d53fdd15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0781b595aed725221d013e9800c0aa4bd7132496e4a27804c0ffa6b0d53fdd15->enter($__internal_0781b595aed725221d013e9800c0aa4bd7132496e4a27804c0ffa6b0d53fdd15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quicksidebar"));

        // line 19
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:quick_sidebar.html.twig");
        echo "
";
        
        $__internal_0781b595aed725221d013e9800c0aa4bd7132496e4a27804c0ffa6b0d53fdd15->leave($__internal_0781b595aed725221d013e9800c0aa4bd7132496e4a27804c0ffa6b0d53fdd15_prof);

    }

    // line 22
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c1cc7e3239e2a6bac1473a902533bb8587cdb4c6e72ec631182a2040e219e41c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1cc7e3239e2a6bac1473a902533bb8587cdb4c6e72ec631182a2040e219e41c->enter($__internal_c1cc7e3239e2a6bac1473a902533bb8587cdb4c6e72ec631182a2040e219e41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 23
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:footer.html.twig");
        echo "
";
        
        $__internal_c1cc7e3239e2a6bac1473a902533bb8587cdb4c6e72ec631182a2040e219e41c->leave($__internal_c1cc7e3239e2a6bac1473a902533bb8587cdb4c6e72ec631182a2040e219e41c_prof);

    }

    // line 26
    public function block_js($context, array $blocks = array())
    {
        $__internal_56589f5372fd09fabf543b0e855723c374311ed29b4f87d7e187073ccf9f9d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56589f5372fd09fabf543b0e855723c374311ed29b4f87d7e187073ccf9f9d42->enter($__internal_56589f5372fd09fabf543b0e855723c374311ed29b4f87d7e187073ccf9f9d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 27
        echo twig_include($this->env, $context, "AdminBundle:Admin/Layout:include_bottom.html.twig");
        echo "
";
        
        $__internal_56589f5372fd09fabf543b0e855723c374311ed29b4f87d7e187073ccf9f9d42->leave($__internal_56589f5372fd09fabf543b0e855723c374311ed29b4f87d7e187073ccf9f9d42_prof);

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
", "AdminBundle:Admin/Layout:layout.html.twig", "/var/www/html/symfonyAdminPanel--/src/AdminBundle/Resources/views/Admin/Layout/layout.html.twig");
    }
}
