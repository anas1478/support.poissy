<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_680a9a570853fbaaa9c506b8c6219585c4cafd60f75368e371779633d8ef0b63 extends Twig_Template
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
        $__internal_a0397cb2c1511f24cf4afbb749050b0686be00240da30a77a84e2e14f7e4e749 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0397cb2c1511f24cf4afbb749050b0686be00240da30a77a84e2e14f7e4e749->enter($__internal_a0397cb2c1511f24cf4afbb749050b0686be00240da30a77a84e2e14f7e4e749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_3080da1045dbbdfe550f9484418a66da4777ee13ab6050e414f046b31a248f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3080da1045dbbdfe550f9484418a66da4777ee13ab6050e414f046b31a248f5f->enter($__internal_3080da1045dbbdfe550f9484418a66da4777ee13ab6050e414f046b31a248f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_a0397cb2c1511f24cf4afbb749050b0686be00240da30a77a84e2e14f7e4e749->leave($__internal_a0397cb2c1511f24cf4afbb749050b0686be00240da30a77a84e2e14f7e4e749_prof);

        
        $__internal_3080da1045dbbdfe550f9484418a66da4777ee13ab6050e414f046b31a248f5f->leave($__internal_3080da1045dbbdfe550f9484418a66da4777ee13ab6050e414f046b31a248f5f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
