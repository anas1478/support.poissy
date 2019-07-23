<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_df55bcbe05a166125896ca3a657d4789e4ebedf1ab70bc6daad567e95405986b extends Twig_Template
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
        $__internal_8c0bc0786682b6b57751884364f2a3cf1565201721ef8e8133ea83906c772db1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c0bc0786682b6b57751884364f2a3cf1565201721ef8e8133ea83906c772db1->enter($__internal_8c0bc0786682b6b57751884364f2a3cf1565201721ef8e8133ea83906c772db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_dab1e798a6c0102f25992d8d729671207210dacee4d95b3280a1e3fbbd527fd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dab1e798a6c0102f25992d8d729671207210dacee4d95b3280a1e3fbbd527fd7->enter($__internal_dab1e798a6c0102f25992d8d729671207210dacee4d95b3280a1e3fbbd527fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_8c0bc0786682b6b57751884364f2a3cf1565201721ef8e8133ea83906c772db1->leave($__internal_8c0bc0786682b6b57751884364f2a3cf1565201721ef8e8133ea83906c772db1_prof);

        
        $__internal_dab1e798a6c0102f25992d8d729671207210dacee4d95b3280a1e3fbbd527fd7->leave($__internal_dab1e798a6c0102f25992d8d729671207210dacee4d95b3280a1e3fbbd527fd7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
