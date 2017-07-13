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
        $__internal_af18ef98b5b06b8efd182517dc6bf437eaea0c880b6682ea000b538b76f80507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af18ef98b5b06b8efd182517dc6bf437eaea0c880b6682ea000b538b76f80507->enter($__internal_af18ef98b5b06b8efd182517dc6bf437eaea0c880b6682ea000b538b76f80507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_af18ef98b5b06b8efd182517dc6bf437eaea0c880b6682ea000b538b76f80507->leave($__internal_af18ef98b5b06b8efd182517dc6bf437eaea0c880b6682ea000b538b76f80507_prof);

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
", "@Framework/Form/integer_widget.html.php", "/var/www/html/symfonyAdminPanel--/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
