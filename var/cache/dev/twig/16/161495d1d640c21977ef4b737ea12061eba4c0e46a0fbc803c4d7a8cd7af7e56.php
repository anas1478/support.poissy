<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_492fc440bdd9c5f279377db3399fb733938cb3224ddc30cc312740dc02570ded extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_0903fab41926c8802bf8b3b182acf32c50879581f15416a5a9e6093b440286fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0903fab41926c8802bf8b3b182acf32c50879581f15416a5a9e6093b440286fb->enter($__internal_0903fab41926c8802bf8b3b182acf32c50879581f15416a5a9e6093b440286fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_482ecb57b00b03410f163ec31c50897fc5a52d94dcf50b2580df0e89e7803f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_482ecb57b00b03410f163ec31c50897fc5a52d94dcf50b2580df0e89e7803f61->enter($__internal_482ecb57b00b03410f163ec31c50897fc5a52d94dcf50b2580df0e89e7803f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0903fab41926c8802bf8b3b182acf32c50879581f15416a5a9e6093b440286fb->leave($__internal_0903fab41926c8802bf8b3b182acf32c50879581f15416a5a9e6093b440286fb_prof);

        
        $__internal_482ecb57b00b03410f163ec31c50897fc5a52d94dcf50b2580df0e89e7803f61->leave($__internal_482ecb57b00b03410f163ec31c50897fc5a52d94dcf50b2580df0e89e7803f61_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_36defda46c543d8fc61c0deaf0f54b54ce89bb68ccf5634d9d624eb56f96241b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36defda46c543d8fc61c0deaf0f54b54ce89bb68ccf5634d9d624eb56f96241b->enter($__internal_36defda46c543d8fc61c0deaf0f54b54ce89bb68ccf5634d9d624eb56f96241b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bbdf4dd68d45f22b584cdd2f1b7c96901c38f95b02d50e2c1df12452aa95854d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbdf4dd68d45f22b584cdd2f1b7c96901c38f95b02d50e2c1df12452aa95854d->enter($__internal_bbdf4dd68d45f22b584cdd2f1b7c96901c38f95b02d50e2c1df12452aa95854d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bbdf4dd68d45f22b584cdd2f1b7c96901c38f95b02d50e2c1df12452aa95854d->leave($__internal_bbdf4dd68d45f22b584cdd2f1b7c96901c38f95b02d50e2c1df12452aa95854d_prof);

        
        $__internal_36defda46c543d8fc61c0deaf0f54b54ce89bb68ccf5634d9d624eb56f96241b->leave($__internal_36defda46c543d8fc61c0deaf0f54b54ce89bb68ccf5634d9d624eb56f96241b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d9dbe3ab9e47ce9e0ff9acd81ce71a85517f37abc4080225b6220ff2a3346339 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9dbe3ab9e47ce9e0ff9acd81ce71a85517f37abc4080225b6220ff2a3346339->enter($__internal_d9dbe3ab9e47ce9e0ff9acd81ce71a85517f37abc4080225b6220ff2a3346339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1ac18cd297d67a63e99d05cfcd4c5058121609484b57d7ddf4849f9682df1dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac18cd297d67a63e99d05cfcd4c5058121609484b57d7ddf4849f9682df1dfe->enter($__internal_1ac18cd297d67a63e99d05cfcd4c5058121609484b57d7ddf4849f9682df1dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1ac18cd297d67a63e99d05cfcd4c5058121609484b57d7ddf4849f9682df1dfe->leave($__internal_1ac18cd297d67a63e99d05cfcd4c5058121609484b57d7ddf4849f9682df1dfe_prof);

        
        $__internal_d9dbe3ab9e47ce9e0ff9acd81ce71a85517f37abc4080225b6220ff2a3346339->leave($__internal_d9dbe3ab9e47ce9e0ff9acd81ce71a85517f37abc4080225b6220ff2a3346339_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8be44cc6f163f37eb126394fa2af987a07f7758f130e25be92fee4a9da4d7d62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8be44cc6f163f37eb126394fa2af987a07f7758f130e25be92fee4a9da4d7d62->enter($__internal_8be44cc6f163f37eb126394fa2af987a07f7758f130e25be92fee4a9da4d7d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d425593d8ae28b4dd43fa05b27e8f6ec65476fc553ca3a02fbdbb6c417509569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d425593d8ae28b4dd43fa05b27e8f6ec65476fc553ca3a02fbdbb6c417509569->enter($__internal_d425593d8ae28b4dd43fa05b27e8f6ec65476fc553ca3a02fbdbb6c417509569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d425593d8ae28b4dd43fa05b27e8f6ec65476fc553ca3a02fbdbb6c417509569->leave($__internal_d425593d8ae28b4dd43fa05b27e8f6ec65476fc553ca3a02fbdbb6c417509569_prof);

        
        $__internal_8be44cc6f163f37eb126394fa2af987a07f7758f130e25be92fee4a9da4d7d62->leave($__internal_8be44cc6f163f37eb126394fa2af987a07f7758f130e25be92fee4a9da4d7d62_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
