<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7dfa8594fed25f78f0f79c48e8896aa92dc25e25859888c2006c7f83daacd9aa extends Twig_Template
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
        $__internal_271dee67fbf2166bb8e6cb034a60a33d5d88259a21b77286d039bb73e69a9f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_271dee67fbf2166bb8e6cb034a60a33d5d88259a21b77286d039bb73e69a9f83->enter($__internal_271dee67fbf2166bb8e6cb034a60a33d5d88259a21b77286d039bb73e69a9f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_271dee67fbf2166bb8e6cb034a60a33d5d88259a21b77286d039bb73e69a9f83->leave($__internal_271dee67fbf2166bb8e6cb034a60a33d5d88259a21b77286d039bb73e69a9f83_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/symfonyAdminPanel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
