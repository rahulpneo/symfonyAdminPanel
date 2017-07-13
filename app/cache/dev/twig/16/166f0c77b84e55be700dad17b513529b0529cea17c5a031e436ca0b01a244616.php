<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_7c8e8a375742264bb94518485310a8794e0f69e7db961b8c925f505f0ec459aa extends Twig_Template
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
        $__internal_d4447c7abd5ec0453d0629e836f8c2ebbd76f314045fa9d539a27574fb24e8b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4447c7abd5ec0453d0629e836f8c2ebbd76f314045fa9d539a27574fb24e8b5->enter($__internal_d4447c7abd5ec0453d0629e836f8c2ebbd76f314045fa9d539a27574fb24e8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_d4447c7abd5ec0453d0629e836f8c2ebbd76f314045fa9d539a27574fb24e8b5->leave($__internal_d4447c7abd5ec0453d0629e836f8c2ebbd76f314045fa9d539a27574fb24e8b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
