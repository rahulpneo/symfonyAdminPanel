<?php

/* base.html.twig */
class __TwigTemplate_4eda29af19bfe5692f23b371483d2213ebf3f7bb80f8503daa7ba74ab45a1397 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2042ca2c32f20a6eaa6d4e1be75fecb4906166b4c5555d6388bade7dfff94072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2042ca2c32f20a6eaa6d4e1be75fecb4906166b4c5555d6388bade7dfff94072->enter($__internal_2042ca2c32f20a6eaa6d4e1be75fecb4906166b4c5555d6388bade7dfff94072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2042ca2c32f20a6eaa6d4e1be75fecb4906166b4c5555d6388bade7dfff94072->leave($__internal_2042ca2c32f20a6eaa6d4e1be75fecb4906166b4c5555d6388bade7dfff94072_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a577cdae21464979da79fe209381d9f90180174955de142d265ed1389c761a2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a577cdae21464979da79fe209381d9f90180174955de142d265ed1389c761a2f->enter($__internal_a577cdae21464979da79fe209381d9f90180174955de142d265ed1389c761a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a577cdae21464979da79fe209381d9f90180174955de142d265ed1389c761a2f->leave($__internal_a577cdae21464979da79fe209381d9f90180174955de142d265ed1389c761a2f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_708158609ed02c288603ffcb6724b4dea5e6f8f0f5ec8a4f939e8b863a9672b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_708158609ed02c288603ffcb6724b4dea5e6f8f0f5ec8a4f939e8b863a9672b0->enter($__internal_708158609ed02c288603ffcb6724b4dea5e6f8f0f5ec8a4f939e8b863a9672b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_708158609ed02c288603ffcb6724b4dea5e6f8f0f5ec8a4f939e8b863a9672b0->leave($__internal_708158609ed02c288603ffcb6724b4dea5e6f8f0f5ec8a4f939e8b863a9672b0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ac6c8140ff3abb76d0c01f4792a7fcbcba27f2e98f07986711c8277a35c5942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac6c8140ff3abb76d0c01f4792a7fcbcba27f2e98f07986711c8277a35c5942->enter($__internal_8ac6c8140ff3abb76d0c01f4792a7fcbcba27f2e98f07986711c8277a35c5942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8ac6c8140ff3abb76d0c01f4792a7fcbcba27f2e98f07986711c8277a35c5942->leave($__internal_8ac6c8140ff3abb76d0c01f4792a7fcbcba27f2e98f07986711c8277a35c5942_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cfe4828d8acc2e8477c39d5b20b4d52cd89da37c15fc02eb093e11e1172c5f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe4828d8acc2e8477c39d5b20b4d52cd89da37c15fc02eb093e11e1172c5f37->enter($__internal_cfe4828d8acc2e8477c39d5b20b4d52cd89da37c15fc02eb093e11e1172c5f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cfe4828d8acc2e8477c39d5b20b4d52cd89da37c15fc02eb093e11e1172c5f37->leave($__internal_cfe4828d8acc2e8477c39d5b20b4d52cd89da37c15fc02eb093e11e1172c5f37_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/symfonyAdminPanel--/app/Resources/views/base.html.twig");
    }
}
