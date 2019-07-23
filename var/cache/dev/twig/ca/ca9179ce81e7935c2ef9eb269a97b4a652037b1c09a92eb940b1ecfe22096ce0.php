<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_36395b462f4241753fb956e6857b2e5bf7fe2e6ad4a96ef1cff6304491fe97e0 extends Twig_Template
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
        $__internal_ef6e3df31438403d209e31f03ce3d657699eeb23eb7e0e77f8cbf635aecf4fb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef6e3df31438403d209e31f03ce3d657699eeb23eb7e0e77f8cbf635aecf4fb8->enter($__internal_ef6e3df31438403d209e31f03ce3d657699eeb23eb7e0e77f8cbf635aecf4fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_a3994b07ad7697ebc6f5de30a77506330892cff6b06776f5b165d18e8e117330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3994b07ad7697ebc6f5de30a77506330892cff6b06776f5b165d18e8e117330->enter($__internal_a3994b07ad7697ebc6f5de30a77506330892cff6b06776f5b165d18e8e117330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_ef6e3df31438403d209e31f03ce3d657699eeb23eb7e0e77f8cbf635aecf4fb8->leave($__internal_ef6e3df31438403d209e31f03ce3d657699eeb23eb7e0e77f8cbf635aecf4fb8_prof);

        
        $__internal_a3994b07ad7697ebc6f5de30a77506330892cff6b06776f5b165d18e8e117330->leave($__internal_a3994b07ad7697ebc6f5de30a77506330892cff6b06776f5b165d18e8e117330_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
