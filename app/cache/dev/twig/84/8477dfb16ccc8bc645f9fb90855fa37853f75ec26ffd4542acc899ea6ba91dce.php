<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_1b58575dff9fced0dc612dee62e40ffc26c5d899141658e3441fa04e47c153e7 extends Twig_Template
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
        $__internal_2bbd4c97c704e970dbaabf68c6a53ffde0be27b21d9c43df9f8814ebdd1376f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bbd4c97c704e970dbaabf68c6a53ffde0be27b21d9c43df9f8814ebdd1376f7->enter($__internal_2bbd4c97c704e970dbaabf68c6a53ffde0be27b21d9c43df9f8814ebdd1376f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_2bbd4c97c704e970dbaabf68c6a53ffde0be27b21d9c43df9f8814ebdd1376f7->leave($__internal_2bbd4c97c704e970dbaabf68c6a53ffde0be27b21d9c43df9f8814ebdd1376f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/symfonyAdminPanel--/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
