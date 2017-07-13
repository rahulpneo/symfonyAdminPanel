<?php

/* AdminBundle:Admin:forgot_password.html.twig */
class __TwigTemplate_c9a318b6939ae150a9851abd6ff1a3b9f36e76a55151d4ccff78d264de1bda52 extends Twig_Template
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
        $__internal_21fd671e5f879bbafc3ada250e16a80737ba77c79c57225f07f35cc9c2ccd22a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21fd671e5f879bbafc3ada250e16a80737ba77c79c57225f07f35cc9c2ccd22a->enter($__internal_21fd671e5f879bbafc3ada250e16a80737ba77c79c57225f07f35cc9c2ccd22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:forgot_password.html.twig"));

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
        
        $__internal_21fd671e5f879bbafc3ada250e16a80737ba77c79c57225f07f35cc9c2ccd22a->leave($__internal_21fd671e5f879bbafc3ada250e16a80737ba77c79c57225f07f35cc9c2ccd22a_prof);

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
        </form>", "AdminBundle:Admin:forgot_password.html.twig", "/var/www/html/symfonyAdminPanel--/src/AdminBundle/Resources/views/Admin/forgot_password.html.twig");
    }
}
