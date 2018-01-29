<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f13ec1c4cb60f4dbaf489e0cb8d6228abe9a53b725706ec788dde4ba5f72227b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_299a867fbcaf1b5c4415678806042208785fd9988c602b62ed63ba745fe04b0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_299a867fbcaf1b5c4415678806042208785fd9988c602b62ed63ba745fe04b0f->enter($__internal_299a867fbcaf1b5c4415678806042208785fd9988c602b62ed63ba745fe04b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_88ef5653787baba53c98c2021e6dc2b5d67c62bed3813e4731f346ad3b5c2509 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88ef5653787baba53c98c2021e6dc2b5d67c62bed3813e4731f346ad3b5c2509->enter($__internal_88ef5653787baba53c98c2021e6dc2b5d67c62bed3813e4731f346ad3b5c2509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_299a867fbcaf1b5c4415678806042208785fd9988c602b62ed63ba745fe04b0f->leave($__internal_299a867fbcaf1b5c4415678806042208785fd9988c602b62ed63ba745fe04b0f_prof);

        
        $__internal_88ef5653787baba53c98c2021e6dc2b5d67c62bed3813e4731f346ad3b5c2509->leave($__internal_88ef5653787baba53c98c2021e6dc2b5d67c62bed3813e4731f346ad3b5c2509_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_17d68315ec346e4297512c4df443484b9928efb74f7cc256947d4b139ab85d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d68315ec346e4297512c4df443484b9928efb74f7cc256947d4b139ab85d1d->enter($__internal_17d68315ec346e4297512c4df443484b9928efb74f7cc256947d4b139ab85d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_27827847a3b3c6b6aefcdf21593c7ed0e969b0ba6f16d7ca222a42063429877f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27827847a3b3c6b6aefcdf21593c7ed0e969b0ba6f16d7ca222a42063429877f->enter($__internal_27827847a3b3c6b6aefcdf21593c7ed0e969b0ba6f16d7ca222a42063429877f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_27827847a3b3c6b6aefcdf21593c7ed0e969b0ba6f16d7ca222a42063429877f->leave($__internal_27827847a3b3c6b6aefcdf21593c7ed0e969b0ba6f16d7ca222a42063429877f_prof);

        
        $__internal_17d68315ec346e4297512c4df443484b9928efb74f7cc256947d4b139ab85d1d->leave($__internal_17d68315ec346e4297512c4df443484b9928efb74f7cc256947d4b139ab85d1d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a381a8397b468a54ee3f73aa0182ac1deee57a352620060814ff2a41128cc35b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a381a8397b468a54ee3f73aa0182ac1deee57a352620060814ff2a41128cc35b->enter($__internal_a381a8397b468a54ee3f73aa0182ac1deee57a352620060814ff2a41128cc35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_78854c268708076f95f46a360c2e1f948fdab44054e7c99396bcc4a819dad0ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78854c268708076f95f46a360c2e1f948fdab44054e7c99396bcc4a819dad0ae->enter($__internal_78854c268708076f95f46a360c2e1f948fdab44054e7c99396bcc4a819dad0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_78854c268708076f95f46a360c2e1f948fdab44054e7c99396bcc4a819dad0ae->leave($__internal_78854c268708076f95f46a360c2e1f948fdab44054e7c99396bcc4a819dad0ae_prof);

        
        $__internal_a381a8397b468a54ee3f73aa0182ac1deee57a352620060814ff2a41128cc35b->leave($__internal_a381a8397b468a54ee3f73aa0182ac1deee57a352620060814ff2a41128cc35b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa26ede5b3b853326bf9a06988383820e793ab60c24ec208e892ea4ec7d03642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa26ede5b3b853326bf9a06988383820e793ab60c24ec208e892ea4ec7d03642->enter($__internal_fa26ede5b3b853326bf9a06988383820e793ab60c24ec208e892ea4ec7d03642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e2216d68cc0d2b38cc456573b708420edd1d885896d2a5eb56a27fbd7256908a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2216d68cc0d2b38cc456573b708420edd1d885896d2a5eb56a27fbd7256908a->enter($__internal_e2216d68cc0d2b38cc456573b708420edd1d885896d2a5eb56a27fbd7256908a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e2216d68cc0d2b38cc456573b708420edd1d885896d2a5eb56a27fbd7256908a->leave($__internal_e2216d68cc0d2b38cc456573b708420edd1d885896d2a5eb56a27fbd7256908a_prof);

        
        $__internal_fa26ede5b3b853326bf9a06988383820e793ab60c24ec208e892ea4ec7d03642->leave($__internal_fa26ede5b3b853326bf9a06988383820e793ab60c24ec208e892ea4ec7d03642_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\wamp64\\www\\sfchouse\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
