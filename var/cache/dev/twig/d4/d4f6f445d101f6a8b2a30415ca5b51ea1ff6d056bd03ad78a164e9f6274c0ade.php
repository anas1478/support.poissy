<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_d0738e424ac62077826a0a67bdca18ad719d291156edbc3bb065149bd098e98d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22c724c82b89a4b1fd09bcd2b63d616ff139e15b24a09d8113af141e5828f387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c724c82b89a4b1fd09bcd2b63d616ff139e15b24a09d8113af141e5828f387->enter($__internal_22c724c82b89a4b1fd09bcd2b63d616ff139e15b24a09d8113af141e5828f387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_a3125421212df842ac6fec1456290fc3f2a69b45e04581590543310f8b1332ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3125421212df842ac6fec1456290fc3f2a69b45e04581590543310f8b1332ba->enter($__internal_a3125421212df842ac6fec1456290fc3f2a69b45e04581590543310f8b1332ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22c724c82b89a4b1fd09bcd2b63d616ff139e15b24a09d8113af141e5828f387->leave($__internal_22c724c82b89a4b1fd09bcd2b63d616ff139e15b24a09d8113af141e5828f387_prof);

        
        $__internal_a3125421212df842ac6fec1456290fc3f2a69b45e04581590543310f8b1332ba->leave($__internal_a3125421212df842ac6fec1456290fc3f2a69b45e04581590543310f8b1332ba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e674e6901373901463df70687dbec79bb44f902791ba95ee6a2353e8da7e4a17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e674e6901373901463df70687dbec79bb44f902791ba95ee6a2353e8da7e4a17->enter($__internal_e674e6901373901463df70687dbec79bb44f902791ba95ee6a2353e8da7e4a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f18b84abe1c2e4c290e0d4a5b12c26d6b026b71cfd2302c375b1f90116de1c4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f18b84abe1c2e4c290e0d4a5b12c26d6b026b71cfd2302c375b1f90116de1c4f->enter($__internal_f18b84abe1c2e4c290e0d4a5b12c26d6b026b71cfd2302c375b1f90116de1c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f18b84abe1c2e4c290e0d4a5b12c26d6b026b71cfd2302c375b1f90116de1c4f->leave($__internal_f18b84abe1c2e4c290e0d4a5b12c26d6b026b71cfd2302c375b1f90116de1c4f_prof);

        
        $__internal_e674e6901373901463df70687dbec79bb44f902791ba95ee6a2353e8da7e4a17->leave($__internal_e674e6901373901463df70687dbec79bb44f902791ba95ee6a2353e8da7e4a17_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ef148133ecf2e139ae47e3a1a508b461b3a60d6fae9e5e68a64326b91c2343d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ef148133ecf2e139ae47e3a1a508b461b3a60d6fae9e5e68a64326b91c2343d->enter($__internal_5ef148133ecf2e139ae47e3a1a508b461b3a60d6fae9e5e68a64326b91c2343d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_28c09c0286c9e7371998037253f4a8b9c4b20797c56afe57577f89c87d0f090d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c09c0286c9e7371998037253f4a8b9c4b20797c56afe57577f89c87d0f090d->enter($__internal_28c09c0286c9e7371998037253f4a8b9c4b20797c56afe57577f89c87d0f090d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_28c09c0286c9e7371998037253f4a8b9c4b20797c56afe57577f89c87d0f090d->leave($__internal_28c09c0286c9e7371998037253f4a8b9c4b20797c56afe57577f89c87d0f090d_prof);

        
        $__internal_5ef148133ecf2e139ae47e3a1a508b461b3a60d6fae9e5e68a64326b91c2343d->leave($__internal_5ef148133ecf2e139ae47e3a1a508b461b3a60d6fae9e5e68a64326b91c2343d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
