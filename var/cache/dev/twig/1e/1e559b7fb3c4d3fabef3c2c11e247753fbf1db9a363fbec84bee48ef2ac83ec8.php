<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d41856572cfd1d8bd459311ec1b2132409f9e33e3a99c184b46553a60c8f5cbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_bcc37321cd6afb1f73de607fd5c0330de9ba7cf2ca9337190aa73e5973a238c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc37321cd6afb1f73de607fd5c0330de9ba7cf2ca9337190aa73e5973a238c6->enter($__internal_bcc37321cd6afb1f73de607fd5c0330de9ba7cf2ca9337190aa73e5973a238c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_742a6f406d05de378efcec908c1fa96196501119b8cf0f690c0f74adb50beb64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_742a6f406d05de378efcec908c1fa96196501119b8cf0f690c0f74adb50beb64->enter($__internal_742a6f406d05de378efcec908c1fa96196501119b8cf0f690c0f74adb50beb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcc37321cd6afb1f73de607fd5c0330de9ba7cf2ca9337190aa73e5973a238c6->leave($__internal_bcc37321cd6afb1f73de607fd5c0330de9ba7cf2ca9337190aa73e5973a238c6_prof);

        
        $__internal_742a6f406d05de378efcec908c1fa96196501119b8cf0f690c0f74adb50beb64->leave($__internal_742a6f406d05de378efcec908c1fa96196501119b8cf0f690c0f74adb50beb64_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_236ee2f1115f7e27368c8ed5738e7a5e3c43dd5f3897108dcbb1db8c4b4395ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236ee2f1115f7e27368c8ed5738e7a5e3c43dd5f3897108dcbb1db8c4b4395ba->enter($__internal_236ee2f1115f7e27368c8ed5738e7a5e3c43dd5f3897108dcbb1db8c4b4395ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f3518031cbdcc856bde972956141c8aca8aa3a1c440d87fa6b1727632b5e37da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3518031cbdcc856bde972956141c8aca8aa3a1c440d87fa6b1727632b5e37da->enter($__internal_f3518031cbdcc856bde972956141c8aca8aa3a1c440d87fa6b1727632b5e37da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f3518031cbdcc856bde972956141c8aca8aa3a1c440d87fa6b1727632b5e37da->leave($__internal_f3518031cbdcc856bde972956141c8aca8aa3a1c440d87fa6b1727632b5e37da_prof);

        
        $__internal_236ee2f1115f7e27368c8ed5738e7a5e3c43dd5f3897108dcbb1db8c4b4395ba->leave($__internal_236ee2f1115f7e27368c8ed5738e7a5e3c43dd5f3897108dcbb1db8c4b4395ba_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b6de93612fac60da31fcb6db375027d40ba0815bd09f5e891502b96ec506b9f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6de93612fac60da31fcb6db375027d40ba0815bd09f5e891502b96ec506b9f1->enter($__internal_b6de93612fac60da31fcb6db375027d40ba0815bd09f5e891502b96ec506b9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1e22ee1ab79b3fe2ccb06cebb82ddd742572a6e80fb71c3576807a6036c66bf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e22ee1ab79b3fe2ccb06cebb82ddd742572a6e80fb71c3576807a6036c66bf7->enter($__internal_1e22ee1ab79b3fe2ccb06cebb82ddd742572a6e80fb71c3576807a6036c66bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1e22ee1ab79b3fe2ccb06cebb82ddd742572a6e80fb71c3576807a6036c66bf7->leave($__internal_1e22ee1ab79b3fe2ccb06cebb82ddd742572a6e80fb71c3576807a6036c66bf7_prof);

        
        $__internal_b6de93612fac60da31fcb6db375027d40ba0815bd09f5e891502b96ec506b9f1->leave($__internal_b6de93612fac60da31fcb6db375027d40ba0815bd09f5e891502b96ec506b9f1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_da33755950605172ec8778bb1784b64aa61b83c798b61ec9901e7f814a1f6e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da33755950605172ec8778bb1784b64aa61b83c798b61ec9901e7f814a1f6e35->enter($__internal_da33755950605172ec8778bb1784b64aa61b83c798b61ec9901e7f814a1f6e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7cfab9f6b8489282c270f232b7dfb604826068191ef9640774b1c669b7910ebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cfab9f6b8489282c270f232b7dfb604826068191ef9640774b1c669b7910ebf->enter($__internal_7cfab9f6b8489282c270f232b7dfb604826068191ef9640774b1c669b7910ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_7cfab9f6b8489282c270f232b7dfb604826068191ef9640774b1c669b7910ebf->leave($__internal_7cfab9f6b8489282c270f232b7dfb604826068191ef9640774b1c669b7910ebf_prof);

        
        $__internal_da33755950605172ec8778bb1784b64aa61b83c798b61ec9901e7f814a1f6e35->leave($__internal_da33755950605172ec8778bb1784b64aa61b83c798b61ec9901e7f814a1f6e35_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\wamp64\\www\\sfchouse\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
