<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_ca051a42c5690561bed78171aba78f4803cc81750c85aaa73df99a88061a52d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_1134aabeb93cc4305b10a1e42cf276cbc4ba0d5eb1ca5e454dd1232353badcba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1134aabeb93cc4305b10a1e42cf276cbc4ba0d5eb1ca5e454dd1232353badcba->enter($__internal_1134aabeb93cc4305b10a1e42cf276cbc4ba0d5eb1ca5e454dd1232353badcba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_f43a459b117258764d91f378e9e0750d7e31f0b27966c35dfbe5bc9113231728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f43a459b117258764d91f378e9e0750d7e31f0b27966c35dfbe5bc9113231728->enter($__internal_f43a459b117258764d91f378e9e0750d7e31f0b27966c35dfbe5bc9113231728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1134aabeb93cc4305b10a1e42cf276cbc4ba0d5eb1ca5e454dd1232353badcba->leave($__internal_1134aabeb93cc4305b10a1e42cf276cbc4ba0d5eb1ca5e454dd1232353badcba_prof);

        
        $__internal_f43a459b117258764d91f378e9e0750d7e31f0b27966c35dfbe5bc9113231728->leave($__internal_f43a459b117258764d91f378e9e0750d7e31f0b27966c35dfbe5bc9113231728_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fecb829f3236639ac67c0135975fc29581709585fb38216669223d89b2adf47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fecb829f3236639ac67c0135975fc29581709585fb38216669223d89b2adf47->enter($__internal_0fecb829f3236639ac67c0135975fc29581709585fb38216669223d89b2adf47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5a139efe2ddbe032adb45639e84925f851193683af31e9b345f73ea8664cdbe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a139efe2ddbe032adb45639e84925f851193683af31e9b345f73ea8664cdbe4->enter($__internal_5a139efe2ddbe032adb45639e84925f851193683af31e9b345f73ea8664cdbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5a139efe2ddbe032adb45639e84925f851193683af31e9b345f73ea8664cdbe4->leave($__internal_5a139efe2ddbe032adb45639e84925f851193683af31e9b345f73ea8664cdbe4_prof);

        
        $__internal_0fecb829f3236639ac67c0135975fc29581709585fb38216669223d89b2adf47->leave($__internal_0fecb829f3236639ac67c0135975fc29581709585fb38216669223d89b2adf47_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_110e0968b8910eae62856b27fff29eb58e6313155b3e5907b54aaaca26ae04bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_110e0968b8910eae62856b27fff29eb58e6313155b3e5907b54aaaca26ae04bb->enter($__internal_110e0968b8910eae62856b27fff29eb58e6313155b3e5907b54aaaca26ae04bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_985931a43cd150326c5fb5a4331595aa7be65850b7649264423bd3c08142072b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_985931a43cd150326c5fb5a4331595aa7be65850b7649264423bd3c08142072b->enter($__internal_985931a43cd150326c5fb5a4331595aa7be65850b7649264423bd3c08142072b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_985931a43cd150326c5fb5a4331595aa7be65850b7649264423bd3c08142072b->leave($__internal_985931a43cd150326c5fb5a4331595aa7be65850b7649264423bd3c08142072b_prof);

        
        $__internal_110e0968b8910eae62856b27fff29eb58e6313155b3e5907b54aaaca26ae04bb->leave($__internal_110e0968b8910eae62856b27fff29eb58e6313155b3e5907b54aaaca26ae04bb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
