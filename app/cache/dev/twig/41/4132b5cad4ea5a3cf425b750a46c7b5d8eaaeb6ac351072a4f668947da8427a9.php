<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_fdb1419ba6a613951b1c9c6d275babb8f50abc7f5e9ab0bb074a554465b4edb2 extends Twig_Template
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
        $__internal_9bc94d114f3b518849b2624144ef2d96c773ff7ceb93dff58f6567d9b3620108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc94d114f3b518849b2624144ef2d96c773ff7ceb93dff58f6567d9b3620108->enter($__internal_9bc94d114f3b518849b2624144ef2d96c773ff7ceb93dff58f6567d9b3620108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_9bc94d114f3b518849b2624144ef2d96c773ff7ceb93dff58f6567d9b3620108->leave($__internal_9bc94d114f3b518849b2624144ef2d96c773ff7ceb93dff58f6567d9b3620108_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/symfonyAdminPanel--/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
