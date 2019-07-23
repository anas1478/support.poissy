<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_0e97e2c6f6c673ad0dd6cf1ba48b478828dfde7afe0de61719fe05c61c8add05 extends Twig_Template
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
        $__internal_60ffa7c094edde1ce5b50b353dfa8a75229a1a84c62a6108d7e80f17fd1c7c86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60ffa7c094edde1ce5b50b353dfa8a75229a1a84c62a6108d7e80f17fd1c7c86->enter($__internal_60ffa7c094edde1ce5b50b353dfa8a75229a1a84c62a6108d7e80f17fd1c7c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_5fb79e40f134d7d9423413702dfca47f27a761b55b7ceda53f1415077d1777d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb79e40f134d7d9423413702dfca47f27a761b55b7ceda53f1415077d1777d8->enter($__internal_5fb79e40f134d7d9423413702dfca47f27a761b55b7ceda53f1415077d1777d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_60ffa7c094edde1ce5b50b353dfa8a75229a1a84c62a6108d7e80f17fd1c7c86->leave($__internal_60ffa7c094edde1ce5b50b353dfa8a75229a1a84c62a6108d7e80f17fd1c7c86_prof);

        
        $__internal_5fb79e40f134d7d9423413702dfca47f27a761b55b7ceda53f1415077d1777d8->leave($__internal_5fb79e40f134d7d9423413702dfca47f27a761b55b7ceda53f1415077d1777d8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
", "@WebProfiler/Collector/exception.css.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
