<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_659f0d4230ba45540208fa099bd5560aec9a756ebc602de64b35e14c634bb2db extends Twig_Template
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
        $__internal_ccd07e27bd0b7dacf89a0341333e4f858ff054cc44fce7c7fad29fb356745ec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd07e27bd0b7dacf89a0341333e4f858ff054cc44fce7c7fad29fb356745ec2->enter($__internal_ccd07e27bd0b7dacf89a0341333e4f858ff054cc44fce7c7fad29fb356745ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_ccd07e27bd0b7dacf89a0341333e4f858ff054cc44fce7c7fad29fb356745ec2->leave($__internal_ccd07e27bd0b7dacf89a0341333e4f858ff054cc44fce7c7fad29fb356745ec2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
