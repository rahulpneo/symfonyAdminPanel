<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_3d0663498210ae5942d76969d37554ac4f34e036c1629ecd0ffad6369bebaafe extends Twig_Template
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
        $__internal_ef29340ed62b05fb2fcb5bfb78b095e7620d9ca9f3b9254316ff3fc9d5a6dd18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef29340ed62b05fb2fcb5bfb78b095e7620d9ca9f3b9254316ff3fc9d5a6dd18->enter($__internal_ef29340ed62b05fb2fcb5bfb78b095e7620d9ca9f3b9254316ff3fc9d5a6dd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ef29340ed62b05fb2fcb5bfb78b095e7620d9ca9f3b9254316ff3fc9d5a6dd18->leave($__internal_ef29340ed62b05fb2fcb5bfb78b095e7620d9ca9f3b9254316ff3fc9d5a6dd18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/symfonyAdminPanel--/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
