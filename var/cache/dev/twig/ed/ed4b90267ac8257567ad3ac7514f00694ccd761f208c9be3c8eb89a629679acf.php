<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_07110e5a9097d85c4741bda869b9e8e3ae56deb80a5cbcb0ddf04c57e642e3dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1cb53763339ff31585326066f93960daca98fb022c7503a8ffa00634da530660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cb53763339ff31585326066f93960daca98fb022c7503a8ffa00634da530660->enter($__internal_1cb53763339ff31585326066f93960daca98fb022c7503a8ffa00634da530660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ba89029ac0ce5464adb659718373bf82463554b7f9cc899e37fbd83e000eafaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba89029ac0ce5464adb659718373bf82463554b7f9cc899e37fbd83e000eafaa->enter($__internal_ba89029ac0ce5464adb659718373bf82463554b7f9cc899e37fbd83e000eafaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_1cb53763339ff31585326066f93960daca98fb022c7503a8ffa00634da530660->leave($__internal_1cb53763339ff31585326066f93960daca98fb022c7503a8ffa00634da530660_prof);

        
        $__internal_ba89029ac0ce5464adb659718373bf82463554b7f9cc899e37fbd83e000eafaa->leave($__internal_ba89029ac0ce5464adb659718373bf82463554b7f9cc899e37fbd83e000eafaa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc2e624038c0ef17a64d4b2e65726dba6d34de9da9f65ef16d7b86a20c4e45f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc2e624038c0ef17a64d4b2e65726dba6d34de9da9f65ef16d7b86a20c4e45f0->enter($__internal_bc2e624038c0ef17a64d4b2e65726dba6d34de9da9f65ef16d7b86a20c4e45f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8fbcf7905559b0dbda25ca130e79d65bc6ccd80f0151b0fc2aea95acede4f14a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fbcf7905559b0dbda25ca130e79d65bc6ccd80f0151b0fc2aea95acede4f14a->enter($__internal_8fbcf7905559b0dbda25ca130e79d65bc6ccd80f0151b0fc2aea95acede4f14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8fbcf7905559b0dbda25ca130e79d65bc6ccd80f0151b0fc2aea95acede4f14a->leave($__internal_8fbcf7905559b0dbda25ca130e79d65bc6ccd80f0151b0fc2aea95acede4f14a_prof);

        
        $__internal_bc2e624038c0ef17a64d4b2e65726dba6d34de9da9f65ef16d7b86a20c4e45f0->leave($__internal_bc2e624038c0ef17a64d4b2e65726dba6d34de9da9f65ef16d7b86a20c4e45f0_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_07034d53691d41d8018812e0d1dfabd0394bab9e5cd3511e0ce56625a15698c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07034d53691d41d8018812e0d1dfabd0394bab9e5cd3511e0ce56625a15698c0->enter($__internal_07034d53691d41d8018812e0d1dfabd0394bab9e5cd3511e0ce56625a15698c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1285c5e16fb6c5c2db828df1cce9c02a5dce809c4f2c4d227882f62add907883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1285c5e16fb6c5c2db828df1cce9c02a5dce809c4f2c4d227882f62add907883->enter($__internal_1285c5e16fb6c5c2db828df1cce9c02a5dce809c4f2c4d227882f62add907883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_1285c5e16fb6c5c2db828df1cce9c02a5dce809c4f2c4d227882f62add907883->leave($__internal_1285c5e16fb6c5c2db828df1cce9c02a5dce809c4f2c4d227882f62add907883_prof);

        
        $__internal_07034d53691d41d8018812e0d1dfabd0394bab9e5cd3511e0ce56625a15698c0->leave($__internal_07034d53691d41d8018812e0d1dfabd0394bab9e5cd3511e0ce56625a15698c0_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d5d08da1010e63996c051da5a3e15d3ee938dba5489dac1e66558407ec9a87b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d5d08da1010e63996c051da5a3e15d3ee938dba5489dac1e66558407ec9a87b->enter($__internal_3d5d08da1010e63996c051da5a3e15d3ee938dba5489dac1e66558407ec9a87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cb6b625986a2f3387e812812694a27ddd26b79578bef53f8e0b558656d90da82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb6b625986a2f3387e812812694a27ddd26b79578bef53f8e0b558656d90da82->enter($__internal_cb6b625986a2f3387e812812694a27ddd26b79578bef53f8e0b558656d90da82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cb6b625986a2f3387e812812694a27ddd26b79578bef53f8e0b558656d90da82->leave($__internal_cb6b625986a2f3387e812812694a27ddd26b79578bef53f8e0b558656d90da82_prof);

        
        $__internal_3d5d08da1010e63996c051da5a3e15d3ee938dba5489dac1e66558407ec9a87b->leave($__internal_3d5d08da1010e63996c051da5a3e15d3ee938dba5489dac1e66558407ec9a87b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "D:\\wamp64\\www\\sfchouse\\vendor\\symfony\\twig-bundle\\Resources\\views\\layout.html.twig");
    }
}
