<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_80a1c7241cb676e1ddab4ed672ed709b8f7640ce763d1d44b024d14aebeca32f extends Twig_Template
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
        $__internal_114c03501a53422de5ca50bfdc9397587053de5c3c87a3cee9549d6bc5b37f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_114c03501a53422de5ca50bfdc9397587053de5c3c87a3cee9549d6bc5b37f8d->enter($__internal_114c03501a53422de5ca50bfdc9397587053de5c3c87a3cee9549d6bc5b37f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_eff104f2e0979074a9f750cbd43bf285afb5480fbacba50bf8926f32b10def35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff104f2e0979074a9f750cbd43bf285afb5480fbacba50bf8926f32b10def35->enter($__internal_eff104f2e0979074a9f750cbd43bf285afb5480fbacba50bf8926f32b10def35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_114c03501a53422de5ca50bfdc9397587053de5c3c87a3cee9549d6bc5b37f8d->leave($__internal_114c03501a53422de5ca50bfdc9397587053de5c3c87a3cee9549d6bc5b37f8d_prof);

        
        $__internal_eff104f2e0979074a9f750cbd43bf285afb5480fbacba50bf8926f32b10def35->leave($__internal_eff104f2e0979074a9f750cbd43bf285afb5480fbacba50bf8926f32b10def35_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_47738abbe17be7803992ea38b42fc457a4f02cabdb5659b9cc831476bd63dcea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47738abbe17be7803992ea38b42fc457a4f02cabdb5659b9cc831476bd63dcea->enter($__internal_47738abbe17be7803992ea38b42fc457a4f02cabdb5659b9cc831476bd63dcea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0effb00a40cf519d73a905957694079f3ae8131b64ad50d40cad7db72be9050b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0effb00a40cf519d73a905957694079f3ae8131b64ad50d40cad7db72be9050b->enter($__internal_0effb00a40cf519d73a905957694079f3ae8131b64ad50d40cad7db72be9050b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0effb00a40cf519d73a905957694079f3ae8131b64ad50d40cad7db72be9050b->leave($__internal_0effb00a40cf519d73a905957694079f3ae8131b64ad50d40cad7db72be9050b_prof);

        
        $__internal_47738abbe17be7803992ea38b42fc457a4f02cabdb5659b9cc831476bd63dcea->leave($__internal_47738abbe17be7803992ea38b42fc457a4f02cabdb5659b9cc831476bd63dcea_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
