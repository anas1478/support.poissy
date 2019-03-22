<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_fb18172cf69b766de5af920753ec4d092b0694e1f19a8de2d1f348d059db8717 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_018e1aeaa5f564e9fa03e65d52f6394bc8eb908b6052a0a4f7e79def98f3e1fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_018e1aeaa5f564e9fa03e65d52f6394bc8eb908b6052a0a4f7e79def98f3e1fb->enter($__internal_018e1aeaa5f564e9fa03e65d52f6394bc8eb908b6052a0a4f7e79def98f3e1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_7e9950f9ebe375c2d474577d88de708fc4643548371cb2bf711bdc2272464790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e9950f9ebe375c2d474577d88de708fc4643548371cb2bf711bdc2272464790->enter($__internal_7e9950f9ebe375c2d474577d88de708fc4643548371cb2bf711bdc2272464790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_018e1aeaa5f564e9fa03e65d52f6394bc8eb908b6052a0a4f7e79def98f3e1fb->leave($__internal_018e1aeaa5f564e9fa03e65d52f6394bc8eb908b6052a0a4f7e79def98f3e1fb_prof);

        
        $__internal_7e9950f9ebe375c2d474577d88de708fc4643548371cb2bf711bdc2272464790->leave($__internal_7e9950f9ebe375c2d474577d88de708fc4643548371cb2bf711bdc2272464790_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_663202754dad7bc0562ca809cef6524327ed4cf967aec8c84b4b3b3a3c9885b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_663202754dad7bc0562ca809cef6524327ed4cf967aec8c84b4b3b3a3c9885b8->enter($__internal_663202754dad7bc0562ca809cef6524327ed4cf967aec8c84b4b3b3a3c9885b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_0bbbaec5445feca1f3a312f2cddb3edf0e600e337f37573c71454d3d5c5996aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bbbaec5445feca1f3a312f2cddb3edf0e600e337f37573c71454d3d5c5996aa->enter($__internal_0bbbaec5445feca1f3a312f2cddb3edf0e600e337f37573c71454d3d5c5996aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_0bbbaec5445feca1f3a312f2cddb3edf0e600e337f37573c71454d3d5c5996aa->leave($__internal_0bbbaec5445feca1f3a312f2cddb3edf0e600e337f37573c71454d3d5c5996aa_prof);

        
        $__internal_663202754dad7bc0562ca809cef6524327ed4cf967aec8c84b4b3b3a3c9885b8->leave($__internal_663202754dad7bc0562ca809cef6524327ed4cf967aec8c84b4b3b3a3c9885b8_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_db77d10ac51c963ff0a039e50f619d7409397c37a4dc2d80b9c59f14ae059e29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db77d10ac51c963ff0a039e50f619d7409397c37a4dc2d80b9c59f14ae059e29->enter($__internal_db77d10ac51c963ff0a039e50f619d7409397c37a4dc2d80b9c59f14ae059e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6ae1c8fedfe067775c701de03e60d7c7a501cf16b2372a42b737b1b35288ec7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae1c8fedfe067775c701de03e60d7c7a501cf16b2372a42b737b1b35288ec7e->enter($__internal_6ae1c8fedfe067775c701de03e60d7c7a501cf16b2372a42b737b1b35288ec7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_6ae1c8fedfe067775c701de03e60d7c7a501cf16b2372a42b737b1b35288ec7e->leave($__internal_6ae1c8fedfe067775c701de03e60d7c7a501cf16b2372a42b737b1b35288ec7e_prof);

        
        $__internal_db77d10ac51c963ff0a039e50f619d7409397c37a4dc2d80b9c59f14ae059e29->leave($__internal_db77d10ac51c963ff0a039e50f619d7409397c37a4dc2d80b9c59f14ae059e29_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
