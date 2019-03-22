<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_595b391e123241b30ac58ca2171f51b4c6bea9bdb6b87b4d0087eb486d3506a8 extends Twig_Template
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
        $__internal_524bf0511c794652b86fbed4acd24ebc16e0d3009efbfea34ac12b45d5302820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_524bf0511c794652b86fbed4acd24ebc16e0d3009efbfea34ac12b45d5302820->enter($__internal_524bf0511c794652b86fbed4acd24ebc16e0d3009efbfea34ac12b45d5302820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_86f22dc64255fbd9e4ccc19083ed6beba24ab0ed8a8945371cc51e6ea0283c76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f22dc64255fbd9e4ccc19083ed6beba24ab0ed8a8945371cc51e6ea0283c76->enter($__internal_86f22dc64255fbd9e4ccc19083ed6beba24ab0ed8a8945371cc51e6ea0283c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_524bf0511c794652b86fbed4acd24ebc16e0d3009efbfea34ac12b45d5302820->leave($__internal_524bf0511c794652b86fbed4acd24ebc16e0d3009efbfea34ac12b45d5302820_prof);

        
        $__internal_86f22dc64255fbd9e4ccc19083ed6beba24ab0ed8a8945371cc51e6ea0283c76->leave($__internal_86f22dc64255fbd9e4ccc19083ed6beba24ab0ed8a8945371cc51e6ea0283c76_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
