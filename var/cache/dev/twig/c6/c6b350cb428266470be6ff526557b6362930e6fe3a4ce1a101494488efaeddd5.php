<?php

/* index.html.twig */
class __TwigTemplate_323a299a783c5db6ba5fe2e6087a84ce0dd32e3c41cec12cbd3e28be8fcf9ce0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
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
        $__internal_00d8959fc3d6173286784980bc839ee9b3b6f07553c12ee15442f51df5448189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00d8959fc3d6173286784980bc839ee9b3b6f07553c12ee15442f51df5448189->enter($__internal_00d8959fc3d6173286784980bc839ee9b3b6f07553c12ee15442f51df5448189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_f97f0234b696a91ef97d1e8a7066a53ab56c48017c74c6a0c4b6fd2841aaeb16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f97f0234b696a91ef97d1e8a7066a53ab56c48017c74c6a0c4b6fd2841aaeb16->enter($__internal_f97f0234b696a91ef97d1e8a7066a53ab56c48017c74c6a0c4b6fd2841aaeb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00d8959fc3d6173286784980bc839ee9b3b6f07553c12ee15442f51df5448189->leave($__internal_00d8959fc3d6173286784980bc839ee9b3b6f07553c12ee15442f51df5448189_prof);

        
        $__internal_f97f0234b696a91ef97d1e8a7066a53ab56c48017c74c6a0c4b6fd2841aaeb16->leave($__internal_f97f0234b696a91ef97d1e8a7066a53ab56c48017c74c6a0c4b6fd2841aaeb16_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_235226febd7c3c6285e3ffe28f7363a3fc74a4375402c0a6a30c747977dfeff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_235226febd7c3c6285e3ffe28f7363a3fc74a4375402c0a6a30c747977dfeff9->enter($__internal_235226febd7c3c6285e3ffe28f7363a3fc74a4375402c0a6a30c747977dfeff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8ee0daa6a724279dc03e574ccec8fa7dd6f8e49a4ea4637b82faf657d83eb47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8ee0daa6a724279dc03e574ccec8fa7dd6f8e49a4ea4637b82faf657d83eb47->enter($__internal_b8ee0daa6a724279dc03e574ccec8fa7dd6f8e49a4ea4637b82faf657d83eb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <p>index</p>
    <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
        echo "\"> Connexion</a>
    <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_registration");
        echo "\">register</a>


";
        
        $__internal_b8ee0daa6a724279dc03e574ccec8fa7dd6f8e49a4ea4637b82faf657d83eb47->leave($__internal_b8ee0daa6a724279dc03e574ccec8fa7dd6f8e49a4ea4637b82faf657d83eb47_prof);

        
        $__internal_235226febd7c3c6285e3ffe28f7363a3fc74a4375402c0a6a30c747977dfeff9->leave($__internal_235226febd7c3c6285e3ffe28f7363a3fc74a4375402c0a6a30c747977dfeff9_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <p>index</p>
    <a href=\"{{ path('security_login')}}\"> Connexion</a>
    <a href=\"{{ path('user_registration')}}\">register</a>


{% endblock %}

", "index.html.twig", "D:\\wamp64\\www\\sfchouse\\templates\\index.html.twig");
    }
}
