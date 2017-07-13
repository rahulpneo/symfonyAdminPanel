<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_c01aa70d3878a44579e7381883b7af1d410ab92cd8f31d0ed67370cd9976f053 extends Twig_Template
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
        $__internal_7c7dabf4eb5ed56cb6e2db6e0be2675b86d3fb999d39d1cb1dcf2c99ea6f9604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c7dabf4eb5ed56cb6e2db6e0be2675b86d3fb999d39d1cb1dcf2c99ea6f9604->enter($__internal_7c7dabf4eb5ed56cb6e2db6e0be2675b86d3fb999d39d1cb1dcf2c99ea6f9604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7c7dabf4eb5ed56cb6e2db6e0be2675b86d3fb999d39d1cb1dcf2c99ea6f9604->leave($__internal_7c7dabf4eb5ed56cb6e2db6e0be2675b86d3fb999d39d1cb1dcf2c99ea6f9604_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
