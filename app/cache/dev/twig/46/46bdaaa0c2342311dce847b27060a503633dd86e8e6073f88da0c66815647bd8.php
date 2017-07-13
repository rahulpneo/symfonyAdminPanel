<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_58e03f10055667dfedd97125b49dc80a041f4ad1527704b3184ce7b5fac4550c extends Twig_Template
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
        $__internal_a6ab5654e85f2654189af6bc4cfe61b721246902f1e4e66c995db092d530837f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6ab5654e85f2654189af6bc4cfe61b721246902f1e4e66c995db092d530837f->enter($__internal_a6ab5654e85f2654189af6bc4cfe61b721246902f1e4e66c995db092d530837f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_a6ab5654e85f2654189af6bc4cfe61b721246902f1e4e66c995db092d530837f->leave($__internal_a6ab5654e85f2654189af6bc4cfe61b721246902f1e4e66c995db092d530837f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
