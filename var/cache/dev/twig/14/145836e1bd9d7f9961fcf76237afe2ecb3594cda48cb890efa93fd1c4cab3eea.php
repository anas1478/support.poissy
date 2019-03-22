<?php

/* MAPlatformBundle::layout.html.twig */
class __TwigTemplate_2b57d95b9921badfca9c07cf73fe46f915407b2f999f529d3c435fccc76e7844 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "MAPlatformBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'maplatform_body' => array($this, 'block_maplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3624529f7a72c750072ebadc50a274486bcbbc4f398dbaea1d6323adc6141970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3624529f7a72c750072ebadc50a274486bcbbc4f398dbaea1d6323adc6141970->enter($__internal_3624529f7a72c750072ebadc50a274486bcbbc4f398dbaea1d6323adc6141970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAPlatformBundle::layout.html.twig"));

        $__internal_52d5eecb7aa992c797850c6a871ca05b2aec5389f4c41f50c64dff77b9fe4da8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52d5eecb7aa992c797850c6a871ca05b2aec5389f4c41f50c64dff77b9fe4da8->enter($__internal_52d5eecb7aa992c797850c6a871ca05b2aec5389f4c41f50c64dff77b9fe4da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3624529f7a72c750072ebadc50a274486bcbbc4f398dbaea1d6323adc6141970->leave($__internal_3624529f7a72c750072ebadc50a274486bcbbc4f398dbaea1d6323adc6141970_prof);

        
        $__internal_52d5eecb7aa992c797850c6a871ca05b2aec5389f4c41f50c64dff77b9fe4da8->leave($__internal_52d5eecb7aa992c797850c6a871ca05b2aec5389f4c41f50c64dff77b9fe4da8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9b5ff2761daf6deb7924075257a5d9175f2405fbc5c152733ddc4405c065711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9b5ff2761daf6deb7924075257a5d9175f2405fbc5c152733ddc4405c065711->enter($__internal_c9b5ff2761daf6deb7924075257a5d9175f2405fbc5c152733ddc4405c065711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e8fefb8c7adcd096e0a581f3b045e2bbad31363521b4ad774a7f75d0723cb328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8fefb8c7adcd096e0a581f3b045e2bbad31363521b4ad774a7f75d0723cb328->enter($__internal_e8fefb8c7adcd096e0a581f3b045e2bbad31363521b4ad774a7f75d0723cb328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Mon bundle ";
        
        $__internal_e8fefb8c7adcd096e0a581f3b045e2bbad31363521b4ad774a7f75d0723cb328->leave($__internal_e8fefb8c7adcd096e0a581f3b045e2bbad31363521b4ad774a7f75d0723cb328_prof);

        
        $__internal_c9b5ff2761daf6deb7924075257a5d9175f2405fbc5c152733ddc4405c065711->leave($__internal_c9b5ff2761daf6deb7924075257a5d9175f2405fbc5c152733ddc4405c065711_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_15f18522ff31c65898582c86edeb9dabc333564b075878ead3a6f7289e82e522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15f18522ff31c65898582c86edeb9dabc333564b075878ead3a6f7289e82e522->enter($__internal_15f18522ff31c65898582c86edeb9dabc333564b075878ead3a6f7289e82e522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea8f28db69e6d0488a2e5a007457ec680b8bf82eae234356573d6e0472706c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea8f28db69e6d0488a2e5a007457ec680b8bf82eae234356573d6e0472706c45->enter($__internal_ea8f28db69e6d0488a2e5a007457ec680b8bf82eae234356573d6e0472706c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
    <h1 class=\"text-center my-5\">Bienvenue sur mon application</h1>
    ";
        // line 7
        $this->displayBlock('maplatform_body', $context, $blocks);
        
        $__internal_ea8f28db69e6d0488a2e5a007457ec680b8bf82eae234356573d6e0472706c45->leave($__internal_ea8f28db69e6d0488a2e5a007457ec680b8bf82eae234356573d6e0472706c45_prof);

        
        $__internal_15f18522ff31c65898582c86edeb9dabc333564b075878ead3a6f7289e82e522->leave($__internal_15f18522ff31c65898582c86edeb9dabc333564b075878ead3a6f7289e82e522_prof);

    }

    public function block_maplatform_body($context, array $blocks = array())
    {
        $__internal_bf569baee66eadeb5e688da474b2b54ac49dd2e11dbd2f50744719945d314ef6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf569baee66eadeb5e688da474b2b54ac49dd2e11dbd2f50744719945d314ef6->enter($__internal_bf569baee66eadeb5e688da474b2b54ac49dd2e11dbd2f50744719945d314ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "maplatform_body"));

        $__internal_f29de9e10978c15d77c4c0e1045b1a58cda570675e6a49ed10244d0839b28812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29de9e10978c15d77c4c0e1045b1a58cda570675e6a49ed10244d0839b28812->enter($__internal_f29de9e10978c15d77c4c0e1045b1a58cda570675e6a49ed10244d0839b28812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "maplatform_body"));

        echo " 
    ";
        
        $__internal_f29de9e10978c15d77c4c0e1045b1a58cda570675e6a49ed10244d0839b28812->leave($__internal_f29de9e10978c15d77c4c0e1045b1a58cda570675e6a49ed10244d0839b28812_prof);

        
        $__internal_bf569baee66eadeb5e688da474b2b54ac49dd2e11dbd2f50744719945d314ef6->leave($__internal_bf569baee66eadeb5e688da474b2b54ac49dd2e11dbd2f50744719945d314ef6_prof);

    }

    public function getTemplateName()
    {
        return "MAPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 7,  62 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}

{% block title %} {{ parent() }} - Mon bundle {% endblock %}
    
{% block body %} 
    <h1 class=\"text-center my-5\">Bienvenue sur mon application</h1>
    {% block maplatform_body %} 
    {% endblock %}
{% endblock %}", "MAPlatformBundle::layout.html.twig", "C:\\xampp\\htdocs\\Symfony\\src\\MA\\PlatformBundle/Resources/views/layout.html.twig");
    }
}
