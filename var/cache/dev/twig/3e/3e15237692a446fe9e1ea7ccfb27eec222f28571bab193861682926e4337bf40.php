<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_9868ec5af2f547a227ecdf0d78cae6531044ad4c9e62fd35d466f6c197b360e0 extends Twig_Template
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
        $__internal_a6b2dcbe42e04bfd34e91370f8a645922592f681a3211ed304457f201dd49fcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b2dcbe42e04bfd34e91370f8a645922592f681a3211ed304457f201dd49fcb->enter($__internal_a6b2dcbe42e04bfd34e91370f8a645922592f681a3211ed304457f201dd49fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_1acd18d044b4b8572df2ef2b82fe17ffeebf44d14c8c99d4a15b06fbbdc344fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1acd18d044b4b8572df2ef2b82fe17ffeebf44d14c8c99d4a15b06fbbdc344fa->enter($__internal_1acd18d044b4b8572df2ef2b82fe17ffeebf44d14c8c99d4a15b06fbbdc344fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_a6b2dcbe42e04bfd34e91370f8a645922592f681a3211ed304457f201dd49fcb->leave($__internal_a6b2dcbe42e04bfd34e91370f8a645922592f681a3211ed304457f201dd49fcb_prof);

        
        $__internal_1acd18d044b4b8572df2ef2b82fe17ffeebf44d14c8c99d4a15b06fbbdc344fa->leave($__internal_1acd18d044b4b8572df2ef2b82fe17ffeebf44d14c8c99d4a15b06fbbdc344fa_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
