<?php

/* AdminBundle:Admin:forgot_password.html.twig */
class __TwigTemplate_1331d68a3e821dc61bb0098a81618e5495806a9be889f9eaf5da540b5c5d9a96 extends Twig_Template
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
        $__internal_a59a03494b04ee86bc897408530fcefeb24d6d649ac3d119d2323fd1eb6e8271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a59a03494b04ee86bc897408530fcefeb24d6d649ac3d119d2323fd1eb6e8271->enter($__internal_a59a03494b04ee86bc897408530fcefeb24d6d649ac3d119d2323fd1eb6e8271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:forgot_password.html.twig"));

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
        
        $__internal_a59a03494b04ee86bc897408530fcefeb24d6d649ac3d119d2323fd1eb6e8271->leave($__internal_a59a03494b04ee86bc897408530fcefeb24d6d649ac3d119d2323fd1eb6e8271_prof);

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
