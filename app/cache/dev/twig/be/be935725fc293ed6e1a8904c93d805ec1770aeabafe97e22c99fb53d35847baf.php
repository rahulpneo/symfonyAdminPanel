<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_67b4e1fc74286d2f7c162a1a03ec0104a92012efb1c4bfab392366ddf7b6fdbe extends Twig_Template
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
        $__internal_7690ece2a7077e6871b6e66cc941822bf55cc0609a20280ba5af9a3b729a071e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7690ece2a7077e6871b6e66cc941822bf55cc0609a20280ba5af9a3b729a071e->enter($__internal_7690ece2a7077e6871b6e66cc941822bf55cc0609a20280ba5af9a3b729a071e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_7690ece2a7077e6871b6e66cc941822bf55cc0609a20280ba5af9a3b729a071e->leave($__internal_7690ece2a7077e6871b6e66cc941822bf55cc0609a20280ba5af9a3b729a071e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/symfonyAdminPanel--/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
