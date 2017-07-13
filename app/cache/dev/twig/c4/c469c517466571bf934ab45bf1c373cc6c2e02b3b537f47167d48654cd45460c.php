<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_cc46e5ac8f044a86509ff102d43b9f7af893cf40fb8a95eb74e34877aa43ef09 extends Twig_Template
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
        $__internal_155af9f4fc9df278596fb04a9d6b9ee53db124e33321a26b0d917ebbddea55ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_155af9f4fc9df278596fb04a9d6b9ee53db124e33321a26b0d917ebbddea55ba->enter($__internal_155af9f4fc9df278596fb04a9d6b9ee53db124e33321a26b0d917ebbddea55ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_155af9f4fc9df278596fb04a9d6b9ee53db124e33321a26b0d917ebbddea55ba->leave($__internal_155af9f4fc9df278596fb04a9d6b9ee53db124e33321a26b0d917ebbddea55ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/symfonyAdminPanel--/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
