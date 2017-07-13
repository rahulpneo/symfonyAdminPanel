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
        $__internal_ceeaef6108691f23ecaa8701b493fa9e0057ff1fd5f3a2ea5eb8a0cc6c1934c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceeaef6108691f23ecaa8701b493fa9e0057ff1fd5f3a2ea5eb8a0cc6c1934c0->enter($__internal_ceeaef6108691f23ecaa8701b493fa9e0057ff1fd5f3a2ea5eb8a0cc6c1934c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_ceeaef6108691f23ecaa8701b493fa9e0057ff1fd5f3a2ea5eb8a0cc6c1934c0->leave($__internal_ceeaef6108691f23ecaa8701b493fa9e0057ff1fd5f3a2ea5eb8a0cc6c1934c0_prof);

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
", "@Framework/Form/search_widget.html.php", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
