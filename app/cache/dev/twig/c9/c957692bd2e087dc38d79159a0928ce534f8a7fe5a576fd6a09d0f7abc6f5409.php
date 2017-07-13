<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_61d2bb6b97b0a0f43b23dbd1ad0ef7ba9dedc3a3c5889a25b1d51f24f929bb3f extends Twig_Template
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
        $__internal_3f8e6d23b2e1ea9e624cdf89586c0f88c3a9f5427f55d7f6310e5c5a9ff8cb9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f8e6d23b2e1ea9e624cdf89586c0f88c3a9f5427f55d7f6310e5c5a9ff8cb9d->enter($__internal_3f8e6d23b2e1ea9e624cdf89586c0f88c3a9f5427f55d7f6310e5c5a9ff8cb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_3f8e6d23b2e1ea9e624cdf89586c0f88c3a9f5427f55d7f6310e5c5a9ff8cb9d->leave($__internal_3f8e6d23b2e1ea9e624cdf89586c0f88c3a9f5427f55d7f6310e5c5a9ff8cb9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
