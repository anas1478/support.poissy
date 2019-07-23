<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_64e8c2c6437abcf028c4655887c7a9040489bfdff51d4c016744e24f2c3e5d58 extends Twig_Template
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
        $__internal_eec976aa18d0e59604cd2f87678f9d831da957bd30d095dcbfaa1b4b71ccca91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec976aa18d0e59604cd2f87678f9d831da957bd30d095dcbfaa1b4b71ccca91->enter($__internal_eec976aa18d0e59604cd2f87678f9d831da957bd30d095dcbfaa1b4b71ccca91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_b9113ab2c09ec5fc71a5e2a60730bb17ea9979df09708506ba0f508a7e6fd025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9113ab2c09ec5fc71a5e2a60730bb17ea9979df09708506ba0f508a7e6fd025->enter($__internal_b9113ab2c09ec5fc71a5e2a60730bb17ea9979df09708506ba0f508a7e6fd025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_eec976aa18d0e59604cd2f87678f9d831da957bd30d095dcbfaa1b4b71ccca91->leave($__internal_eec976aa18d0e59604cd2f87678f9d831da957bd30d095dcbfaa1b4b71ccca91_prof);

        
        $__internal_b9113ab2c09ec5fc71a5e2a60730bb17ea9979df09708506ba0f508a7e6fd025->leave($__internal_b9113ab2c09ec5fc71a5e2a60730bb17ea9979df09708506ba0f508a7e6fd025_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
