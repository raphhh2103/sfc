<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_782f4c5b0d67a28a214dd497fd7d4cd79be3e61f958184a912483959aaaffd4c extends Twig_Template
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
        $__internal_ef2685f4e93539ee740cd73c5804f11abacf13b1b60814a8b719a46c6958a5e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef2685f4e93539ee740cd73c5804f11abacf13b1b60814a8b719a46c6958a5e0->enter($__internal_ef2685f4e93539ee740cd73c5804f11abacf13b1b60814a8b719a46c6958a5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_47662df0a552fea2ecfc684fae302c260434512564df9aabfb275d6e9298b9a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47662df0a552fea2ecfc684fae302c260434512564df9aabfb275d6e9298b9a3->enter($__internal_47662df0a552fea2ecfc684fae302c260434512564df9aabfb275d6e9298b9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_ef2685f4e93539ee740cd73c5804f11abacf13b1b60814a8b719a46c6958a5e0->leave($__internal_ef2685f4e93539ee740cd73c5804f11abacf13b1b60814a8b719a46c6958a5e0_prof);

        
        $__internal_47662df0a552fea2ecfc684fae302c260434512564df9aabfb275d6e9298b9a3->leave($__internal_47662df0a552fea2ecfc684fae302c260434512564df9aabfb275d6e9298b9a3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "D:\\wamp64\\www\\sfchouse\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
