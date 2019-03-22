<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_6983ff751e541269ace1eef55398082d807cffe8ad194764791c3cdf34b33542 extends Twig_Template
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
        $__internal_34c956ffb89f64e796cbb0d8c55f459538f2ce5cfdf8dfdefab154c2b614f477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34c956ffb89f64e796cbb0d8c55f459538f2ce5cfdf8dfdefab154c2b614f477->enter($__internal_34c956ffb89f64e796cbb0d8c55f459538f2ce5cfdf8dfdefab154c2b614f477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_b904df34129b778d5769d1d00487916d74e2805bab5d950d0c49daa5f24700a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b904df34129b778d5769d1d00487916d74e2805bab5d950d0c49daa5f24700a3->enter($__internal_b904df34129b778d5769d1d00487916d74e2805bab5d950d0c49daa5f24700a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_34c956ffb89f64e796cbb0d8c55f459538f2ce5cfdf8dfdefab154c2b614f477->leave($__internal_34c956ffb89f64e796cbb0d8c55f459538f2ce5cfdf8dfdefab154c2b614f477_prof);

        
        $__internal_b904df34129b778d5769d1d00487916d74e2805bab5d950d0c49daa5f24700a3->leave($__internal_b904df34129b778d5769d1d00487916d74e2805bab5d950d0c49daa5f24700a3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
