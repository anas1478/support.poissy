<?php

/* MAPlatformBundle:Advert:delete.html.twig */
class __TwigTemplate_c87ed5185bd79688bf867f2fca77d3ff0331fa064266f1273060d6eb6b83336c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MAPlatformBundle::layout.html.twig", "MAPlatformBundle:Advert:delete.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "MAPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5663cfa4b1fa7934ee09181bb4ec2ef9a7ec925625b496ef1347a415b007dd88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5663cfa4b1fa7934ee09181bb4ec2ef9a7ec925625b496ef1347a415b007dd88->enter($__internal_5663cfa4b1fa7934ee09181bb4ec2ef9a7ec925625b496ef1347a415b007dd88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAPlatformBundle:Advert:delete.html.twig"));

        $__internal_7129b89efdf49daa06509a66109bc2b970fb87c1e238e3b4fabeb91fb5e402ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7129b89efdf49daa06509a66109bc2b970fb87c1e238e3b4fabeb91fb5e402ad->enter($__internal_7129b89efdf49daa06509a66109bc2b970fb87c1e238e3b4fabeb91fb5e402ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAPlatformBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5663cfa4b1fa7934ee09181bb4ec2ef9a7ec925625b496ef1347a415b007dd88->leave($__internal_5663cfa4b1fa7934ee09181bb4ec2ef9a7ec925625b496ef1347a415b007dd88_prof);

        
        $__internal_7129b89efdf49daa06509a66109bc2b970fb87c1e238e3b4fabeb91fb5e402ad->leave($__internal_7129b89efdf49daa06509a66109bc2b970fb87c1e238e3b4fabeb91fb5e402ad_prof);

    }

    public function getTemplateName()
    {
        return "MAPlatformBundle:Advert:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"MAPlatformBundle::layout.html.twig\" %}
", "MAPlatformBundle:Advert:delete.html.twig", "C:\\xampp\\htdocs\\Symfony\\src\\MA\\PlatformBundle/Resources/views/Advert/delete.html.twig");
    }
}
