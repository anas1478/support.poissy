<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_77438c1cf89f8c48f3cf3a338449f0f94dc95bae8086c39fac77b83b92515a46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fea764e1d1c983e5f13a87e7b953ea376b93d12b2041194335a7a29f50ba7ba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fea764e1d1c983e5f13a87e7b953ea376b93d12b2041194335a7a29f50ba7ba1->enter($__internal_fea764e1d1c983e5f13a87e7b953ea376b93d12b2041194335a7a29f50ba7ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_98ee647da8e92e9b7662cad0d9573f34da3c0d8788a84d4d7523d5914aca11e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ee647da8e92e9b7662cad0d9573f34da3c0d8788a84d4d7523d5914aca11e4->enter($__internal_98ee647da8e92e9b7662cad0d9573f34da3c0d8788a84d4d7523d5914aca11e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fea764e1d1c983e5f13a87e7b953ea376b93d12b2041194335a7a29f50ba7ba1->leave($__internal_fea764e1d1c983e5f13a87e7b953ea376b93d12b2041194335a7a29f50ba7ba1_prof);

        
        $__internal_98ee647da8e92e9b7662cad0d9573f34da3c0d8788a84d4d7523d5914aca11e4->leave($__internal_98ee647da8e92e9b7662cad0d9573f34da3c0d8788a84d4d7523d5914aca11e4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d94f70b73426c4d0e8a88e58be4029e1f32ccc4c57bdfce0a78f930407a9310f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d94f70b73426c4d0e8a88e58be4029e1f32ccc4c57bdfce0a78f930407a9310f->enter($__internal_d94f70b73426c4d0e8a88e58be4029e1f32ccc4c57bdfce0a78f930407a9310f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a1f87f273fad283711cd23a1f304ae06798cd0703fc24c3b8b160a69b2fde5d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f87f273fad283711cd23a1f304ae06798cd0703fc24c3b8b160a69b2fde5d6->enter($__internal_a1f87f273fad283711cd23a1f304ae06798cd0703fc24c3b8b160a69b2fde5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a1f87f273fad283711cd23a1f304ae06798cd0703fc24c3b8b160a69b2fde5d6->leave($__internal_a1f87f273fad283711cd23a1f304ae06798cd0703fc24c3b8b160a69b2fde5d6_prof);

        
        $__internal_d94f70b73426c4d0e8a88e58be4029e1f32ccc4c57bdfce0a78f930407a9310f->leave($__internal_d94f70b73426c4d0e8a88e58be4029e1f32ccc4c57bdfce0a78f930407a9310f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
