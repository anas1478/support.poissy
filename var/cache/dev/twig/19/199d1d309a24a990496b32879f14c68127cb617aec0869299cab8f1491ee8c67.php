<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f13303ced3f79e7d77b80fff2e00c23e7e408f47f067dac344ed220d470e2609 extends Twig_Template
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
        $__internal_af1165ef8531a04f81be5f88b71905198f04a318231b8c4720d052675d01dacc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af1165ef8531a04f81be5f88b71905198f04a318231b8c4720d052675d01dacc->enter($__internal_af1165ef8531a04f81be5f88b71905198f04a318231b8c4720d052675d01dacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ef5a71c7ce3a7a31bc11e8af98cd6637e7729e35099f8ecd37beefd2ffe62b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5a71c7ce3a7a31bc11e8af98cd6637e7729e35099f8ecd37beefd2ffe62b8c->enter($__internal_ef5a71c7ce3a7a31bc11e8af98cd6637e7729e35099f8ecd37beefd2ffe62b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af1165ef8531a04f81be5f88b71905198f04a318231b8c4720d052675d01dacc->leave($__internal_af1165ef8531a04f81be5f88b71905198f04a318231b8c4720d052675d01dacc_prof);

        
        $__internal_ef5a71c7ce3a7a31bc11e8af98cd6637e7729e35099f8ecd37beefd2ffe62b8c->leave($__internal_ef5a71c7ce3a7a31bc11e8af98cd6637e7729e35099f8ecd37beefd2ffe62b8c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3538d718b7c13e3c0d5cd6cd5e2b56ddcbf7111177a6b8ea9f25ac9ece0aecf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3538d718b7c13e3c0d5cd6cd5e2b56ddcbf7111177a6b8ea9f25ac9ece0aecf4->enter($__internal_3538d718b7c13e3c0d5cd6cd5e2b56ddcbf7111177a6b8ea9f25ac9ece0aecf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f7cdc27885be73384e21f21a11601cfed02ccc3ec66adeb31c4bf3dc57684d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7cdc27885be73384e21f21a11601cfed02ccc3ec66adeb31c4bf3dc57684d5e->enter($__internal_f7cdc27885be73384e21f21a11601cfed02ccc3ec66adeb31c4bf3dc57684d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f7cdc27885be73384e21f21a11601cfed02ccc3ec66adeb31c4bf3dc57684d5e->leave($__internal_f7cdc27885be73384e21f21a11601cfed02ccc3ec66adeb31c4bf3dc57684d5e_prof);

        
        $__internal_3538d718b7c13e3c0d5cd6cd5e2b56ddcbf7111177a6b8ea9f25ac9ece0aecf4->leave($__internal_3538d718b7c13e3c0d5cd6cd5e2b56ddcbf7111177a6b8ea9f25ac9ece0aecf4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e320caf782ab64729b740528d2e217df386cfceb38b0d5faafaeb939e488a144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e320caf782ab64729b740528d2e217df386cfceb38b0d5faafaeb939e488a144->enter($__internal_e320caf782ab64729b740528d2e217df386cfceb38b0d5faafaeb939e488a144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_93d22132db27b5151d917182832841f93e739ae163db4777c87022c77e8ae92e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d22132db27b5151d917182832841f93e739ae163db4777c87022c77e8ae92e->enter($__internal_93d22132db27b5151d917182832841f93e739ae163db4777c87022c77e8ae92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_93d22132db27b5151d917182832841f93e739ae163db4777c87022c77e8ae92e->leave($__internal_93d22132db27b5151d917182832841f93e739ae163db4777c87022c77e8ae92e_prof);

        
        $__internal_e320caf782ab64729b740528d2e217df386cfceb38b0d5faafaeb939e488a144->leave($__internal_e320caf782ab64729b740528d2e217df386cfceb38b0d5faafaeb939e488a144_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6d6cbac29ab0407e8ce9213aded8d1361120e567c62c16e695a749c03dd1647c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d6cbac29ab0407e8ce9213aded8d1361120e567c62c16e695a749c03dd1647c->enter($__internal_6d6cbac29ab0407e8ce9213aded8d1361120e567c62c16e695a749c03dd1647c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2cbb41931bb88ebfc39e6e7d21aa1a638a9ea77d6f17a07013304034892ddf79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cbb41931bb88ebfc39e6e7d21aa1a638a9ea77d6f17a07013304034892ddf79->enter($__internal_2cbb41931bb88ebfc39e6e7d21aa1a638a9ea77d6f17a07013304034892ddf79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2cbb41931bb88ebfc39e6e7d21aa1a638a9ea77d6f17a07013304034892ddf79->leave($__internal_2cbb41931bb88ebfc39e6e7d21aa1a638a9ea77d6f17a07013304034892ddf79_prof);

        
        $__internal_6d6cbac29ab0407e8ce9213aded8d1361120e567c62c16e695a749c03dd1647c->leave($__internal_6d6cbac29ab0407e8ce9213aded8d1361120e567c62c16e695a749c03dd1647c_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
