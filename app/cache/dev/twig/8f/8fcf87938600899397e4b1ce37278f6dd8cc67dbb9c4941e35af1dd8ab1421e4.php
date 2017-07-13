<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_9015151f6120760f5397c8dcc93d30bb3f32ea1ef5a63c4476f9f0ff8ee748d5 extends Twig_Template
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
        $__internal_9ed6e2b4d1d0f7b7ae411c8c1031282aea5808411dd108f81a6bd8057143a4f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed6e2b4d1d0f7b7ae411c8c1031282aea5808411dd108f81a6bd8057143a4f6->enter($__internal_9ed6e2b4d1d0f7b7ae411c8c1031282aea5808411dd108f81a6bd8057143a4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_9ed6e2b4d1d0f7b7ae411c8c1031282aea5808411dd108f81a6bd8057143a4f6->leave($__internal_9ed6e2b4d1d0f7b7ae411c8c1031282aea5808411dd108f81a6bd8057143a4f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/symfonyAdminPanel--/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
