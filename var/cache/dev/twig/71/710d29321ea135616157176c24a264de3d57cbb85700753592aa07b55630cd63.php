<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_8f927db504ca5d7c564275a44e390a5d36d6851a421d9750fed101795063686c extends Twig_Template
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
        $__internal_1ff67dabe45c86c0dad44fda04fd8a9724b31ed03f7a518b7f046b6b4af15063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ff67dabe45c86c0dad44fda04fd8a9724b31ed03f7a518b7f046b6b4af15063->enter($__internal_1ff67dabe45c86c0dad44fda04fd8a9724b31ed03f7a518b7f046b6b4af15063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_87c63c5d7be37339389c7f1212e53da0aad3d755fce4990bdc32670cc55de905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c63c5d7be37339389c7f1212e53da0aad3d755fce4990bdc32670cc55de905->enter($__internal_87c63c5d7be37339389c7f1212e53da0aad3d755fce4990bdc32670cc55de905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ff67dabe45c86c0dad44fda04fd8a9724b31ed03f7a518b7f046b6b4af15063->leave($__internal_1ff67dabe45c86c0dad44fda04fd8a9724b31ed03f7a518b7f046b6b4af15063_prof);

        
        $__internal_87c63c5d7be37339389c7f1212e53da0aad3d755fce4990bdc32670cc55de905->leave($__internal_87c63c5d7be37339389c7f1212e53da0aad3d755fce4990bdc32670cc55de905_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a89d91199f7aea5af6e56f460c7161b8d4d1c234ec98237e76beb26c688a1c8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a89d91199f7aea5af6e56f460c7161b8d4d1c234ec98237e76beb26c688a1c8a->enter($__internal_a89d91199f7aea5af6e56f460c7161b8d4d1c234ec98237e76beb26c688a1c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6d1a4c46905d49af83d7208962e7e66c9ee6fffff1ab8a91413c3156123e4077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d1a4c46905d49af83d7208962e7e66c9ee6fffff1ab8a91413c3156123e4077->enter($__internal_6d1a4c46905d49af83d7208962e7e66c9ee6fffff1ab8a91413c3156123e4077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_6d1a4c46905d49af83d7208962e7e66c9ee6fffff1ab8a91413c3156123e4077->leave($__internal_6d1a4c46905d49af83d7208962e7e66c9ee6fffff1ab8a91413c3156123e4077_prof);

        
        $__internal_a89d91199f7aea5af6e56f460c7161b8d4d1c234ec98237e76beb26c688a1c8a->leave($__internal_a89d91199f7aea5af6e56f460c7161b8d4d1c234ec98237e76beb26c688a1c8a_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
