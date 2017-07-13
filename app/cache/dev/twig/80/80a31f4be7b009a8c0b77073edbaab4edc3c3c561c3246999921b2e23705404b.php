<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_e7c78766e568aa3e0faf788a019a6aac385a48d64824f634802b48988824bcf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8bf54b6df0d8ba1a6705953488173fdadc0b9ab803cc68255fce79a6f5832427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf54b6df0d8ba1a6705953488173fdadc0b9ab803cc68255fce79a6f5832427->enter($__internal_8bf54b6df0d8ba1a6705953488173fdadc0b9ab803cc68255fce79a6f5832427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_8bf54b6df0d8ba1a6705953488173fdadc0b9ab803cc68255fce79a6f5832427->leave($__internal_8bf54b6df0d8ba1a6705953488173fdadc0b9ab803cc68255fce79a6f5832427_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
