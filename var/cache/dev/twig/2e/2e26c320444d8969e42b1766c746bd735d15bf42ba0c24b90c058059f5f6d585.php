<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6d3701e11c4fab612181e13890188fbdf7f45a70e969647da53a0170b0c8c763 extends Twig_Template
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
        $__internal_09277fccf73cc6f6b4046cc25e00794bec9ffe71c859d8b9d62990e2e6c5c3b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09277fccf73cc6f6b4046cc25e00794bec9ffe71c859d8b9d62990e2e6c5c3b3->enter($__internal_09277fccf73cc6f6b4046cc25e00794bec9ffe71c859d8b9d62990e2e6c5c3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_065213010954f89dec356c0af9bd677d2be9789cc46bd3609f45da042d5c5363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065213010954f89dec356c0af9bd677d2be9789cc46bd3609f45da042d5c5363->enter($__internal_065213010954f89dec356c0af9bd677d2be9789cc46bd3609f45da042d5c5363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09277fccf73cc6f6b4046cc25e00794bec9ffe71c859d8b9d62990e2e6c5c3b3->leave($__internal_09277fccf73cc6f6b4046cc25e00794bec9ffe71c859d8b9d62990e2e6c5c3b3_prof);

        
        $__internal_065213010954f89dec356c0af9bd677d2be9789cc46bd3609f45da042d5c5363->leave($__internal_065213010954f89dec356c0af9bd677d2be9789cc46bd3609f45da042d5c5363_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a20c47d0ac505e75ee4443c4c102b2615657757a2a1e86c23ddc246e44592789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a20c47d0ac505e75ee4443c4c102b2615657757a2a1e86c23ddc246e44592789->enter($__internal_a20c47d0ac505e75ee4443c4c102b2615657757a2a1e86c23ddc246e44592789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_128f1746082eeda763c8a36228ceaced95e1f5643b55216e0ca70cc90c1564f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_128f1746082eeda763c8a36228ceaced95e1f5643b55216e0ca70cc90c1564f3->enter($__internal_128f1746082eeda763c8a36228ceaced95e1f5643b55216e0ca70cc90c1564f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_128f1746082eeda763c8a36228ceaced95e1f5643b55216e0ca70cc90c1564f3->leave($__internal_128f1746082eeda763c8a36228ceaced95e1f5643b55216e0ca70cc90c1564f3_prof);

        
        $__internal_a20c47d0ac505e75ee4443c4c102b2615657757a2a1e86c23ddc246e44592789->leave($__internal_a20c47d0ac505e75ee4443c4c102b2615657757a2a1e86c23ddc246e44592789_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9af9bef9e52c52d2374253864d3c3e46436b8a97f2ada0173d712094ccd3f8d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9af9bef9e52c52d2374253864d3c3e46436b8a97f2ada0173d712094ccd3f8d2->enter($__internal_9af9bef9e52c52d2374253864d3c3e46436b8a97f2ada0173d712094ccd3f8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b93c918fb32ebcd3c360e4d620229d8ae9d97c1ebe82fb29bddbe83c76ab147a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b93c918fb32ebcd3c360e4d620229d8ae9d97c1ebe82fb29bddbe83c76ab147a->enter($__internal_b93c918fb32ebcd3c360e4d620229d8ae9d97c1ebe82fb29bddbe83c76ab147a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b93c918fb32ebcd3c360e4d620229d8ae9d97c1ebe82fb29bddbe83c76ab147a->leave($__internal_b93c918fb32ebcd3c360e4d620229d8ae9d97c1ebe82fb29bddbe83c76ab147a_prof);

        
        $__internal_9af9bef9e52c52d2374253864d3c3e46436b8a97f2ada0173d712094ccd3f8d2->leave($__internal_9af9bef9e52c52d2374253864d3c3e46436b8a97f2ada0173d712094ccd3f8d2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_11f7306fb1f7f7550abb2e1df97ca5242fe36be13e94e579a79b7c9f84711cbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11f7306fb1f7f7550abb2e1df97ca5242fe36be13e94e579a79b7c9f84711cbe->enter($__internal_11f7306fb1f7f7550abb2e1df97ca5242fe36be13e94e579a79b7c9f84711cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0335552b94b8c4b00f136286648caf08b8f743e08c7a042e4c3ccb4df6448121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0335552b94b8c4b00f136286648caf08b8f743e08c7a042e4c3ccb4df6448121->enter($__internal_0335552b94b8c4b00f136286648caf08b8f743e08c7a042e4c3ccb4df6448121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0335552b94b8c4b00f136286648caf08b8f743e08c7a042e4c3ccb4df6448121->leave($__internal_0335552b94b8c4b00f136286648caf08b8f743e08c7a042e4c3ccb4df6448121_prof);

        
        $__internal_11f7306fb1f7f7550abb2e1df97ca5242fe36be13e94e579a79b7c9f84711cbe->leave($__internal_11f7306fb1f7f7550abb2e1df97ca5242fe36be13e94e579a79b7c9f84711cbe_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
