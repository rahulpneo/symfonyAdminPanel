<?php

/* AdminBundle:Admin:forgot_password.html.twig */
class __TwigTemplate_a0d4b36d7e7c988333fce7e776d0e6364be80c135a9a8b9d85121ab74ebcaa2e extends Twig_Template
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
        $__internal_3f55de458cd5e76f6505e670d9d9e75ea23ff2709c4144df343eade1b919681a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f55de458cd5e76f6505e670d9d9e75ea23ff2709c4144df343eade1b919681a->enter($__internal_3f55de458cd5e76f6505e670d9d9e75ea23ff2709c4144df343eade1b919681a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:forgot_password.html.twig"));

        // line 1
        echo "<form class=\"forget-form\" action=\"/admin/forget_password\" method=\"post\">
                <h3 class=\"font-green\">Forget Password ?</h3>
                <p> Enter your e-mail address below to reset your password. </p>
                <div class=\"form-group\">
                    <input class=\"form-control placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Email\" name=\"email\" /> </div>
                <div class=\"form-actions\">
                    <button type=\"button\" id=\"back-btn\" class=\"btn btn-default\">Back</button>
                    <button type=\"submit\" class=\"btn btn-success uppercase pull-right\">Submit</button>
                </div>
        </form>";
        
        $__internal_3f55de458cd5e76f6505e670d9d9e75ea23ff2709c4144df343eade1b919681a->leave($__internal_3f55de458cd5e76f6505e670d9d9e75ea23ff2709c4144df343eade1b919681a_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:forgot_password.html.twig";
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
        return new Twig_Source("<form class=\"forget-form\" action=\"/admin/forget_password\" method=\"post\">
                <h3 class=\"font-green\">Forget Password ?</h3>
                <p> Enter your e-mail address below to reset your password. </p>
                <div class=\"form-group\">
                    <input class=\"form-control placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Email\" name=\"email\" /> </div>
                <div class=\"form-actions\">
                    <button type=\"button\" id=\"back-btn\" class=\"btn btn-default\">Back</button>
                    <button type=\"submit\" class=\"btn btn-success uppercase pull-right\">Submit</button>
                </div>
        </form>", "AdminBundle:Admin:forgot_password.html.twig", "/var/www/html/symfonyAdminPanel/src/AdminBundle/Resources/views/Admin/forgot_password.html.twig");
    }
}
