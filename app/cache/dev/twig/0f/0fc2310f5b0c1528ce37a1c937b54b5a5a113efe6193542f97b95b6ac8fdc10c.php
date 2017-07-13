<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_44de748c8818ed7256dd979c3eb9ca60f3d48cf112aa4508b21dc40b5f5f3932 extends Twig_Template
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
        $__internal_6df94dbfd9054f518a91bf35d750cd46f5d29db3e8e68405392883681bf579c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df94dbfd9054f518a91bf35d750cd46f5d29db3e8e68405392883681bf579c0->enter($__internal_6df94dbfd9054f518a91bf35d750cd46f5d29db3e8e68405392883681bf579c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_6df94dbfd9054f518a91bf35d750cd46f5d29db3e8e68405392883681bf579c0->leave($__internal_6df94dbfd9054f518a91bf35d750cd46f5d29db3e8e68405392883681bf579c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
