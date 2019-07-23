<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_d5a6142186138c8dda16874b3be8a1d340495228e45543d8c487ad694614479b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_047cad7cc60bdadd8b048633a922cc37e492060539efe203d34b5aff1c252804 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_047cad7cc60bdadd8b048633a922cc37e492060539efe203d34b5aff1c252804->enter($__internal_047cad7cc60bdadd8b048633a922cc37e492060539efe203d34b5aff1c252804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_05a5e1c7cdf2f103aeed415d9989411a7458e3bc183e0866aadc22b2f8da78db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05a5e1c7cdf2f103aeed415d9989411a7458e3bc183e0866aadc22b2f8da78db->enter($__internal_05a5e1c7cdf2f103aeed415d9989411a7458e3bc183e0866aadc22b2f8da78db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_047cad7cc60bdadd8b048633a922cc37e492060539efe203d34b5aff1c252804->leave($__internal_047cad7cc60bdadd8b048633a922cc37e492060539efe203d34b5aff1c252804_prof);

        
        $__internal_05a5e1c7cdf2f103aeed415d9989411a7458e3bc183e0866aadc22b2f8da78db->leave($__internal_05a5e1c7cdf2f103aeed415d9989411a7458e3bc183e0866aadc22b2f8da78db_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b1772b0d52cbb09616456fef2db737a0726ce8c0f708f8aaefc92feca02c5136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1772b0d52cbb09616456fef2db737a0726ce8c0f708f8aaefc92feca02c5136->enter($__internal_b1772b0d52cbb09616456fef2db737a0726ce8c0f708f8aaefc92feca02c5136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d7f99fcd407c94b1cc4c3f89b200df9a7bcc8b279982a2c63a6ebaf851b65d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f99fcd407c94b1cc4c3f89b200df9a7bcc8b279982a2c63a6ebaf851b65d17->enter($__internal_d7f99fcd407c94b1cc4c3f89b200df9a7bcc8b279982a2c63a6ebaf851b65d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d7f99fcd407c94b1cc4c3f89b200df9a7bcc8b279982a2c63a6ebaf851b65d17->leave($__internal_d7f99fcd407c94b1cc4c3f89b200df9a7bcc8b279982a2c63a6ebaf851b65d17_prof);

        
        $__internal_b1772b0d52cbb09616456fef2db737a0726ce8c0f708f8aaefc92feca02c5136->leave($__internal_b1772b0d52cbb09616456fef2db737a0726ce8c0f708f8aaefc92feca02c5136_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c999c22b83037625882cde9041cdd1429a8cd143255a0e8e8b6c184d4588d276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c999c22b83037625882cde9041cdd1429a8cd143255a0e8e8b6c184d4588d276->enter($__internal_c999c22b83037625882cde9041cdd1429a8cd143255a0e8e8b6c184d4588d276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_367cb6321c0da42d3c9986be1ae0f061ab793ed75b096ce4a9ef318295269204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_367cb6321c0da42d3c9986be1ae0f061ab793ed75b096ce4a9ef318295269204->enter($__internal_367cb6321c0da42d3c9986be1ae0f061ab793ed75b096ce4a9ef318295269204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_367cb6321c0da42d3c9986be1ae0f061ab793ed75b096ce4a9ef318295269204->leave($__internal_367cb6321c0da42d3c9986be1ae0f061ab793ed75b096ce4a9ef318295269204_prof);

        
        $__internal_c999c22b83037625882cde9041cdd1429a8cd143255a0e8e8b6c184d4588d276->leave($__internal_c999c22b83037625882cde9041cdd1429a8cd143255a0e8e8b6c184d4588d276_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b65e07138db0451e78f4630453075bae018ffd6acfdabf6d2a3c8c9227f33dc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b65e07138db0451e78f4630453075bae018ffd6acfdabf6d2a3c8c9227f33dc5->enter($__internal_b65e07138db0451e78f4630453075bae018ffd6acfdabf6d2a3c8c9227f33dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_de23a378a34130725a46b93a79a14d599a35ca66b58e99425736192cc77846b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de23a378a34130725a46b93a79a14d599a35ca66b58e99425736192cc77846b4->enter($__internal_de23a378a34130725a46b93a79a14d599a35ca66b58e99425736192cc77846b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_de23a378a34130725a46b93a79a14d599a35ca66b58e99425736192cc77846b4->leave($__internal_de23a378a34130725a46b93a79a14d599a35ca66b58e99425736192cc77846b4_prof);

        
        $__internal_b65e07138db0451e78f4630453075bae018ffd6acfdabf6d2a3c8c9227f33dc5->leave($__internal_b65e07138db0451e78f4630453075bae018ffd6acfdabf6d2a3c8c9227f33dc5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
