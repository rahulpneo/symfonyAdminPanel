<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_4f1cfd660d9dfc825279a136a7080b9941cf0fd46d963ca49fff20df9acc9724 extends Twig_Template
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
        $__internal_4136fa8e4a1b15b605b34d64f4351d6afff7d949f2900cc7e0158d9e29fb64e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4136fa8e4a1b15b605b34d64f4351d6afff7d949f2900cc7e0158d9e29fb64e6->enter($__internal_4136fa8e4a1b15b605b34d64f4351d6afff7d949f2900cc7e0158d9e29fb64e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4136fa8e4a1b15b605b34d64f4351d6afff7d949f2900cc7e0158d9e29fb64e6->leave($__internal_4136fa8e4a1b15b605b34d64f4351d6afff7d949f2900cc7e0158d9e29fb64e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
