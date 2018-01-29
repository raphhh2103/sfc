<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_85879d94f5cbcdeedd0a67df30bb492ae9acfd1f2e96743c5702fe7e7c78d405 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2fa476939984d1ec4db7477e43a2a701dac778238f7eb7df1c9b5631525512bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa476939984d1ec4db7477e43a2a701dac778238f7eb7df1c9b5631525512bb->enter($__internal_2fa476939984d1ec4db7477e43a2a701dac778238f7eb7df1c9b5631525512bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_eac590324bbe5c12a010ef8b210bc9e82812f10159a2835f4aa088c4ed7cc1ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eac590324bbe5c12a010ef8b210bc9e82812f10159a2835f4aa088c4ed7cc1ed->enter($__internal_eac590324bbe5c12a010ef8b210bc9e82812f10159a2835f4aa088c4ed7cc1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fa476939984d1ec4db7477e43a2a701dac778238f7eb7df1c9b5631525512bb->leave($__internal_2fa476939984d1ec4db7477e43a2a701dac778238f7eb7df1c9b5631525512bb_prof);

        
        $__internal_eac590324bbe5c12a010ef8b210bc9e82812f10159a2835f4aa088c4ed7cc1ed->leave($__internal_eac590324bbe5c12a010ef8b210bc9e82812f10159a2835f4aa088c4ed7cc1ed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_27f0506f511c4603a1909b247d111f20ef515eede972df26bb5c09ecb1ddd014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f0506f511c4603a1909b247d111f20ef515eede972df26bb5c09ecb1ddd014->enter($__internal_27f0506f511c4603a1909b247d111f20ef515eede972df26bb5c09ecb1ddd014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b99608774a5caccb1ec88812dc19254738b67b171e2fae350e36cace40bdb8f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b99608774a5caccb1ec88812dc19254738b67b171e2fae350e36cace40bdb8f5->enter($__internal_b99608774a5caccb1ec88812dc19254738b67b171e2fae350e36cace40bdb8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b99608774a5caccb1ec88812dc19254738b67b171e2fae350e36cace40bdb8f5->leave($__internal_b99608774a5caccb1ec88812dc19254738b67b171e2fae350e36cace40bdb8f5_prof);

        
        $__internal_27f0506f511c4603a1909b247d111f20ef515eede972df26bb5c09ecb1ddd014->leave($__internal_27f0506f511c4603a1909b247d111f20ef515eede972df26bb5c09ecb1ddd014_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fa39ad268cdcc621fc4a7daa31222433945346e746f443fd70335a8a52491ac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa39ad268cdcc621fc4a7daa31222433945346e746f443fd70335a8a52491ac9->enter($__internal_fa39ad268cdcc621fc4a7daa31222433945346e746f443fd70335a8a52491ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_609d5b86aa7213d502ba8ba5d2f964a9a69919b22e4299829ff36d3558e834f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_609d5b86aa7213d502ba8ba5d2f964a9a69919b22e4299829ff36d3558e834f1->enter($__internal_609d5b86aa7213d502ba8ba5d2f964a9a69919b22e4299829ff36d3558e834f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_609d5b86aa7213d502ba8ba5d2f964a9a69919b22e4299829ff36d3558e834f1->leave($__internal_609d5b86aa7213d502ba8ba5d2f964a9a69919b22e4299829ff36d3558e834f1_prof);

        
        $__internal_fa39ad268cdcc621fc4a7daa31222433945346e746f443fd70335a8a52491ac9->leave($__internal_fa39ad268cdcc621fc4a7daa31222433945346e746f443fd70335a8a52491ac9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ba50b71149b72d4dc7a66b9ad3370448287a0ffe17cdf5e6fbb6b57eaacf1070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba50b71149b72d4dc7a66b9ad3370448287a0ffe17cdf5e6fbb6b57eaacf1070->enter($__internal_ba50b71149b72d4dc7a66b9ad3370448287a0ffe17cdf5e6fbb6b57eaacf1070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_db207467519f9ebb3c33ec60055069200c55b5ad461d0e48d026bf7e637e9d54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db207467519f9ebb3c33ec60055069200c55b5ad461d0e48d026bf7e637e9d54->enter($__internal_db207467519f9ebb3c33ec60055069200c55b5ad461d0e48d026bf7e637e9d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_db207467519f9ebb3c33ec60055069200c55b5ad461d0e48d026bf7e637e9d54->leave($__internal_db207467519f9ebb3c33ec60055069200c55b5ad461d0e48d026bf7e637e9d54_prof);

        
        $__internal_ba50b71149b72d4dc7a66b9ad3370448287a0ffe17cdf5e6fbb6b57eaacf1070->leave($__internal_ba50b71149b72d4dc7a66b9ad3370448287a0ffe17cdf5e6fbb6b57eaacf1070_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "D:\\wamp64\\www\\sfchouse\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
