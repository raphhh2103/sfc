<?php

/* Security/login.html.twig */
class __TwigTemplate_dc596965c75ec65eb8babadf389f983f09438af6822b19e7d119683ac02c2d8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Security/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_feb73f3f93365c4e3355b7b7ffd676b63a044ff767d96db21fe3b943f7c07a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb73f3f93365c4e3355b7b7ffd676b63a044ff767d96db21fe3b943f7c07a62->enter($__internal_feb73f3f93365c4e3355b7b7ffd676b63a044ff767d96db21fe3b943f7c07a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Security/login.html.twig"));

        $__internal_dc4a27c2011ba02b8f056b4302a9558081455c5138d7a959920a30b16074b1a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc4a27c2011ba02b8f056b4302a9558081455c5138d7a959920a30b16074b1a9->enter($__internal_dc4a27c2011ba02b8f056b4302a9558081455c5138d7a959920a30b16074b1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_feb73f3f93365c4e3355b7b7ffd676b63a044ff767d96db21fe3b943f7c07a62->leave($__internal_feb73f3f93365c4e3355b7b7ffd676b63a044ff767d96db21fe3b943f7c07a62_prof);

        
        $__internal_dc4a27c2011ba02b8f056b4302a9558081455c5138d7a959920a30b16074b1a9->leave($__internal_dc4a27c2011ba02b8f056b4302a9558081455c5138d7a959920a30b16074b1a9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b917366a20b3a4937a795f273940d80d5f1ecf627253fbc38a1e6eff3d750084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b917366a20b3a4937a795f273940d80d5f1ecf627253fbc38a1e6eff3d750084->enter($__internal_b917366a20b3a4937a795f273940d80d5f1ecf627253fbc38a1e6eff3d750084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_232493c29625640b37f1054bba46b4b34df94fe787596ef1f6d659506232fb77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_232493c29625640b37f1054bba46b4b34df94fe787596ef1f6d659506232fb77->enter($__internal_232493c29625640b37f1054bba46b4b34df94fe787596ef1f6d659506232fb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })()), "messageKey", array()), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 9
        echo "
    <div class=\"row\">
    <div class=\"col-sm-5\">
        <div class=\"well\">
            <form action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
        echo "\" method=\"post\">
                <fieldset>
                    <legend><i class=\"fa fa-lock\" aria-hidden=\"true\"></i> Connexion</legend>
                    <div class=\"form-group\">
                        <label for=\"username\">Username</label>
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
        echo "\" class=\"form-control\"/>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\">Mot de passe</label>
                        ";
        // line 23
        echo "                        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" />
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> On entre
                    </button>
                </fieldset>
            </form>
        </div>
    </div>


";
        
        $__internal_232493c29625640b37f1054bba46b4b34df94fe787596ef1f6d659506232fb77->leave($__internal_232493c29625640b37f1054bba46b4b34df94fe787596ef1f6d659506232fb77_prof);

        
        $__internal_b917366a20b3a4937a795f273940d80d5f1ecf627253fbc38a1e6eff3d750084->leave($__internal_b917366a20b3a4937a795f273940d80d5f1ecf627253fbc38a1e6eff3d750084_prof);

    }

    public function getTemplateName()
    {
        return "Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 25,  82 => 23,  75 => 18,  67 => 13,  61 => 9,  55 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {% if error %}
        <div class=\"alert alert-danger\">
            {{ error.messageKey }}
        </div>
    {% endif %}

    <div class=\"row\">
    <div class=\"col-sm-5\">
        <div class=\"well\">
            <form action=\"{{ path('security_login') }}\" method=\"post\">
                <fieldset>
                    <legend><i class=\"fa fa-lock\" aria-hidden=\"true\"></i> Connexion</legend>
                    <div class=\"form-group\">
                        <label for=\"username\">Username</label>
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\"/>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\">Mot de passe</label>
                        {#<p>{% if  %}</p>#}
                        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" />
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"/>
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> On entre
                    </button>
                </fieldset>
            </form>
        </div>
    </div>


{% endblock %}", "Security/login.html.twig", "D:\\wamp64\\www\\sfchouse\\templates\\Security\\login.html.twig");
    }
}
