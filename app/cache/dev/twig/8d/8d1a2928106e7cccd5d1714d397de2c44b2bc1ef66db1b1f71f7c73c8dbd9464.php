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
        $__internal_6cfc655f6ab1b6f2b918bb39e99ea37aec104b031a1c1321f5bf369e587a3e2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cfc655f6ab1b6f2b918bb39e99ea37aec104b031a1c1321f5bf369e587a3e2c->enter($__internal_6cfc655f6ab1b6f2b918bb39e99ea37aec104b031a1c1321f5bf369e587a3e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6cfc655f6ab1b6f2b918bb39e99ea37aec104b031a1c1321f5bf369e587a3e2c->leave($__internal_6cfc655f6ab1b6f2b918bb39e99ea37aec104b031a1c1321f5bf369e587a3e2c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_623886f6ec29de17429edf46fe4dc6e7bd028b4e097259575a48ace3b1497ff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623886f6ec29de17429edf46fe4dc6e7bd028b4e097259575a48ace3b1497ff3->enter($__internal_623886f6ec29de17429edf46fe4dc6e7bd028b4e097259575a48ace3b1497ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_623886f6ec29de17429edf46fe4dc6e7bd028b4e097259575a48ace3b1497ff3->leave($__internal_623886f6ec29de17429edf46fe4dc6e7bd028b4e097259575a48ace3b1497ff3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7ee59c6db97e6ac54455d5aae30620f9d265d5c278d9595241a8c9ed190e58a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee59c6db97e6ac54455d5aae30620f9d265d5c278d9595241a8c9ed190e58a7->enter($__internal_7ee59c6db97e6ac54455d5aae30620f9d265d5c278d9595241a8c9ed190e58a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7ee59c6db97e6ac54455d5aae30620f9d265d5c278d9595241a8c9ed190e58a7->leave($__internal_7ee59c6db97e6ac54455d5aae30620f9d265d5c278d9595241a8c9ed190e58a7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f3637adc515648855c62e914cee6231bc10d8ae6f4c860ed14531439cf4f1dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3637adc515648855c62e914cee6231bc10d8ae6f4c860ed14531439cf4f1dc->enter($__internal_6f3637adc515648855c62e914cee6231bc10d8ae6f4c860ed14531439cf4f1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f3637adc515648855c62e914cee6231bc10d8ae6f4c860ed14531439cf4f1dc->leave($__internal_6f3637adc515648855c62e914cee6231bc10d8ae6f4c860ed14531439cf4f1dc_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aff0f2fba2eab553c9134b579c7332d361e397c9968d722e4358dc0644b738f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff0f2fba2eab553c9134b579c7332d361e397c9968d722e4358dc0644b738f2->enter($__internal_aff0f2fba2eab553c9134b579c7332d361e397c9968d722e4358dc0644b738f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_aff0f2fba2eab553c9134b579c7332d361e397c9968d722e4358dc0644b738f2->leave($__internal_aff0f2fba2eab553c9134b579c7332d361e397c9968d722e4358dc0644b738f2_prof);

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
", "base.html.twig", "/var/www/html/symfonyAdminPanel/app/Resources/views/base.html.twig");
    }
}
