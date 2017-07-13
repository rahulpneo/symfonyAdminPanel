<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_9587a537bfd4f60b0087aa275d0c797863b90b3c69a64abf9b397d804e8f15ec extends Twig_Template
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
        $__internal_e782cf83096f4900e96fc8c22a258045b7da804278b63f1ebd8957f241fa886a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e782cf83096f4900e96fc8c22a258045b7da804278b63f1ebd8957f241fa886a->enter($__internal_e782cf83096f4900e96fc8c22a258045b7da804278b63f1ebd8957f241fa886a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_e782cf83096f4900e96fc8c22a258045b7da804278b63f1ebd8957f241fa886a->leave($__internal_e782cf83096f4900e96fc8c22a258045b7da804278b63f1ebd8957f241fa886a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
