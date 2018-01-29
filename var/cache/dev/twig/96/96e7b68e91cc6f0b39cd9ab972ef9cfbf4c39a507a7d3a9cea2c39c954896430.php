<?php

/* base.html.twig */
class __TwigTemplate_7e733f5d8234d906399a1b25132dc83c76f524e23cce469eb33afa6b3179177a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3d6925228edd23fd385570cd18befaedbf14d15b134da2de78042179f903aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3d6925228edd23fd385570cd18befaedbf14d15b134da2de78042179f903aae->enter($__internal_a3d6925228edd23fd385570cd18befaedbf14d15b134da2de78042179f903aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2efe4c8605f8bff420c8e6d16129e6361e61342a10e2c128e71e7db5dfb1d5a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2efe4c8605f8bff420c8e6d16129e6361e61342a10e2c128e71e7db5dfb1d5a1->enter($__internal_2efe4c8605f8bff420c8e6d16129e6361e61342a10e2c128e71e7db5dfb1d5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "    </body>
</html>
";
        
        $__internal_a3d6925228edd23fd385570cd18befaedbf14d15b134da2de78042179f903aae->leave($__internal_a3d6925228edd23fd385570cd18befaedbf14d15b134da2de78042179f903aae_prof);

        
        $__internal_2efe4c8605f8bff420c8e6d16129e6361e61342a10e2c128e71e7db5dfb1d5a1->leave($__internal_2efe4c8605f8bff420c8e6d16129e6361e61342a10e2c128e71e7db5dfb1d5a1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9aa20441620698ea44a731dce266af93e7c76711ca5aec26deede7afb651ef41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa20441620698ea44a731dce266af93e7c76711ca5aec26deede7afb651ef41->enter($__internal_9aa20441620698ea44a731dce266af93e7c76711ca5aec26deede7afb651ef41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_00b7a3412bcf50842753d182ec957803911f8226e5980733d4b4f28d58c8ea9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00b7a3412bcf50842753d182ec957803911f8226e5980733d4b4f28d58c8ea9d->enter($__internal_00b7a3412bcf50842753d182ec957803911f8226e5980733d4b4f28d58c8ea9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_00b7a3412bcf50842753d182ec957803911f8226e5980733d4b4f28d58c8ea9d->leave($__internal_00b7a3412bcf50842753d182ec957803911f8226e5980733d4b4f28d58c8ea9d_prof);

        
        $__internal_9aa20441620698ea44a731dce266af93e7c76711ca5aec26deede7afb651ef41->leave($__internal_9aa20441620698ea44a731dce266af93e7c76711ca5aec26deede7afb651ef41_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bd369d357ab5d6f0fe980518e7917ef12bcebf9fef055b7f7346edbaf77179fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd369d357ab5d6f0fe980518e7917ef12bcebf9fef055b7f7346edbaf77179fc->enter($__internal_bd369d357ab5d6f0fe980518e7917ef12bcebf9fef055b7f7346edbaf77179fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2e1ef73980cc092f5c5c281eb0462d49e15014b073a31a6be4abdc186a065550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e1ef73980cc092f5c5c281eb0462d49e15014b073a31a6be4abdc186a065550->enter($__internal_2e1ef73980cc092f5c5c281eb0462d49e15014b073a31a6be4abdc186a065550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2e1ef73980cc092f5c5c281eb0462d49e15014b073a31a6be4abdc186a065550->leave($__internal_2e1ef73980cc092f5c5c281eb0462d49e15014b073a31a6be4abdc186a065550_prof);

        
        $__internal_bd369d357ab5d6f0fe980518e7917ef12bcebf9fef055b7f7346edbaf77179fc->leave($__internal_bd369d357ab5d6f0fe980518e7917ef12bcebf9fef055b7f7346edbaf77179fc_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_df10c55244aac942a6546b27b5b0ee2f63967798e1180d57c23dc35558fa96ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df10c55244aac942a6546b27b5b0ee2f63967798e1180d57c23dc35558fa96ad->enter($__internal_df10c55244aac942a6546b27b5b0ee2f63967798e1180d57c23dc35558fa96ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d64aa3d73b74e835fe8dee6efbcbda4f6db8c6526873e21bc63f50fb89400aaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d64aa3d73b74e835fe8dee6efbcbda4f6db8c6526873e21bc63f50fb89400aaf->enter($__internal_d64aa3d73b74e835fe8dee6efbcbda4f6db8c6526873e21bc63f50fb89400aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d64aa3d73b74e835fe8dee6efbcbda4f6db8c6526873e21bc63f50fb89400aaf->leave($__internal_d64aa3d73b74e835fe8dee6efbcbda4f6db8c6526873e21bc63f50fb89400aaf_prof);

        
        $__internal_df10c55244aac942a6546b27b5b0ee2f63967798e1180d57c23dc35558fa96ad->leave($__internal_df10c55244aac942a6546b27b5b0ee2f63967798e1180d57c23dc35558fa96ad_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_97fa7a83ee124f9aed8feef03441354dbadc422fc5b131927e72e362f4e23e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97fa7a83ee124f9aed8feef03441354dbadc422fc5b131927e72e362f4e23e71->enter($__internal_97fa7a83ee124f9aed8feef03441354dbadc422fc5b131927e72e362f4e23e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b35c2d9e558a55878f3e854a14a78ccfdb4a5a9eed228193e39c7b5bd2608b09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b35c2d9e558a55878f3e854a14a78ccfdb4a5a9eed228193e39c7b5bd2608b09->enter($__internal_b35c2d9e558a55878f3e854a14a78ccfdb4a5a9eed228193e39c7b5bd2608b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b35c2d9e558a55878f3e854a14a78ccfdb4a5a9eed228193e39c7b5bd2608b09->leave($__internal_b35c2d9e558a55878f3e854a14a78ccfdb4a5a9eed228193e39c7b5bd2608b09_prof);

        
        $__internal_97fa7a83ee124f9aed8feef03441354dbadc422fc5b131927e72e362f4e23e71->leave($__internal_97fa7a83ee124f9aed8feef03441354dbadc422fc5b131927e72e362f4e23e71_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 10,  97 => 9,  80 => 6,  62 => 5,  50 => 11,  47 => 10,  45 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "D:\\wamp64\\www\\sfchouse\\templates\\base.html.twig");
    }
}
