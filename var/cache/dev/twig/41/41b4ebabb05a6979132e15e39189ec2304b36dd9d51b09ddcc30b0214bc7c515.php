<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_f6dd78e0fb0a45941defc7684eeaaccecac2c25332494e06aaced00c1d72891e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8d4bd28847693bb43efb8104d72c8c9c74084ad9b0f61f4acadc125daa14e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8d4bd28847693bb43efb8104d72c8c9c74084ad9b0f61f4acadc125daa14e77->enter($__internal_b8d4bd28847693bb43efb8104d72c8c9c74084ad9b0f61f4acadc125daa14e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8be4bf55df954547d654d4b0aaf80d926171165a270e7f5e2c9ee7a96a078ca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8be4bf55df954547d654d4b0aaf80d926171165a270e7f5e2c9ee7a96a078ca5->enter($__internal_8be4bf55df954547d654d4b0aaf80d926171165a270e7f5e2c9ee7a96a078ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8d4bd28847693bb43efb8104d72c8c9c74084ad9b0f61f4acadc125daa14e77->leave($__internal_b8d4bd28847693bb43efb8104d72c8c9c74084ad9b0f61f4acadc125daa14e77_prof);

        
        $__internal_8be4bf55df954547d654d4b0aaf80d926171165a270e7f5e2c9ee7a96a078ca5->leave($__internal_8be4bf55df954547d654d4b0aaf80d926171165a270e7f5e2c9ee7a96a078ca5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fafd42f15220dd654fbfc556631db1e50001053efd8f4afcdce4461bd7a6cafa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fafd42f15220dd654fbfc556631db1e50001053efd8f4afcdce4461bd7a6cafa->enter($__internal_fafd42f15220dd654fbfc556631db1e50001053efd8f4afcdce4461bd7a6cafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_259cdf91cfed8cb514c95121c612766745281d7a13d7d013acc1033e6e0dffab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_259cdf91cfed8cb514c95121c612766745281d7a13d7d013acc1033e6e0dffab->enter($__internal_259cdf91cfed8cb514c95121c612766745281d7a13d7d013acc1033e6e0dffab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_259cdf91cfed8cb514c95121c612766745281d7a13d7d013acc1033e6e0dffab->leave($__internal_259cdf91cfed8cb514c95121c612766745281d7a13d7d013acc1033e6e0dffab_prof);

        
        $__internal_fafd42f15220dd654fbfc556631db1e50001053efd8f4afcdce4461bd7a6cafa->leave($__internal_fafd42f15220dd654fbfc556631db1e50001053efd8f4afcdce4461bd7a6cafa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "D:\\wamp64\\www\\sfchouse\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
