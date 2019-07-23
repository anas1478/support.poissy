<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_7a1bd3a4ff64ce4e89ce564ec43b7a0c0f56e76f5e7491ce08e82dcb6a79309a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76484f14e810a1d65236f64b34830f24b6bdd1a74de43949b8c8daf25fa50910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76484f14e810a1d65236f64b34830f24b6bdd1a74de43949b8c8daf25fa50910->enter($__internal_76484f14e810a1d65236f64b34830f24b6bdd1a74de43949b8c8daf25fa50910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_17d142d4d8259285acc5e21c7d62913dc88d3da6b28ec908eebcfcb2d5977657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d142d4d8259285acc5e21c7d62913dc88d3da6b28ec908eebcfcb2d5977657->enter($__internal_17d142d4d8259285acc5e21c7d62913dc88d3da6b28ec908eebcfcb2d5977657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_76484f14e810a1d65236f64b34830f24b6bdd1a74de43949b8c8daf25fa50910->leave($__internal_76484f14e810a1d65236f64b34830f24b6bdd1a74de43949b8c8daf25fa50910_prof);

        
        $__internal_17d142d4d8259285acc5e21c7d62913dc88d3da6b28ec908eebcfcb2d5977657->leave($__internal_17d142d4d8259285acc5e21c7d62913dc88d3da6b28ec908eebcfcb2d5977657_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
