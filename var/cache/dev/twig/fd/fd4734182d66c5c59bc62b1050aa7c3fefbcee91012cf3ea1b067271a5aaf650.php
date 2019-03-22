<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_c45c975c1a63397ae60405fa25467e39a559d066ae40798378936dfe69bbb298 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_d6b947d493f650e492d8da8e2136fb72c39acd37f5d2935e6f2797cdcdffc6d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6b947d493f650e492d8da8e2136fb72c39acd37f5d2935e6f2797cdcdffc6d5->enter($__internal_d6b947d493f650e492d8da8e2136fb72c39acd37f5d2935e6f2797cdcdffc6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_90a402e6f4b9bc0d115264a9d78298f4d08328a0cecefb779e76f6f8721262e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a402e6f4b9bc0d115264a9d78298f4d08328a0cecefb779e76f6f8721262e8->enter($__internal_90a402e6f4b9bc0d115264a9d78298f4d08328a0cecefb779e76f6f8721262e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6b947d493f650e492d8da8e2136fb72c39acd37f5d2935e6f2797cdcdffc6d5->leave($__internal_d6b947d493f650e492d8da8e2136fb72c39acd37f5d2935e6f2797cdcdffc6d5_prof);

        
        $__internal_90a402e6f4b9bc0d115264a9d78298f4d08328a0cecefb779e76f6f8721262e8->leave($__internal_90a402e6f4b9bc0d115264a9d78298f4d08328a0cecefb779e76f6f8721262e8_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_760c7353c69060f783beaf3376d82cee71d692b10a907dfde2e95312967bf09d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_760c7353c69060f783beaf3376d82cee71d692b10a907dfde2e95312967bf09d->enter($__internal_760c7353c69060f783beaf3376d82cee71d692b10a907dfde2e95312967bf09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_f846580522b050767a19444dcfffd49de22abb47fcf83818dd43c5d958107fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f846580522b050767a19444dcfffd49de22abb47fcf83818dd43c5d958107fd5->enter($__internal_f846580522b050767a19444dcfffd49de22abb47fcf83818dd43c5d958107fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_f846580522b050767a19444dcfffd49de22abb47fcf83818dd43c5d958107fd5->leave($__internal_f846580522b050767a19444dcfffd49de22abb47fcf83818dd43c5d958107fd5_prof);

        
        $__internal_760c7353c69060f783beaf3376d82cee71d692b10a907dfde2e95312967bf09d->leave($__internal_760c7353c69060f783beaf3376d82cee71d692b10a907dfde2e95312967bf09d_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_89040992fbc977707c54128d47a95f05ef3a79f12e0188631775fb26a7396fd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89040992fbc977707c54128d47a95f05ef3a79f12e0188631775fb26a7396fd3->enter($__internal_89040992fbc977707c54128d47a95f05ef3a79f12e0188631775fb26a7396fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1f9695ca10de8a37ab1f137f0701c130c6b54b3b461703c934fe8fa55d822fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9695ca10de8a37ab1f137f0701c130c6b54b3b461703c934fe8fa55d822fe3->enter($__internal_1f9695ca10de8a37ab1f137f0701c130c6b54b3b461703c934fe8fa55d822fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_1f9695ca10de8a37ab1f137f0701c130c6b54b3b461703c934fe8fa55d822fe3->leave($__internal_1f9695ca10de8a37ab1f137f0701c130c6b54b3b461703c934fe8fa55d822fe3_prof);

        
        $__internal_89040992fbc977707c54128d47a95f05ef3a79f12e0188631775fb26a7396fd3->leave($__internal_89040992fbc977707c54128d47a95f05ef3a79f12e0188631775fb26a7396fd3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
