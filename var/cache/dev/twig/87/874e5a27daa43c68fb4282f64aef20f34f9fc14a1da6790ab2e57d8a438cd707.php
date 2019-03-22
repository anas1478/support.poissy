<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_3cd26600ad298f709368a87c37558c402c1011c3466294bc55887e80f3d8f830 extends Twig_Template
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
        $__internal_106e97fa9d9c023923ba0d9070790c87cbb43f7cc77c3dd19ed46622ebdd1ab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_106e97fa9d9c023923ba0d9070790c87cbb43f7cc77c3dd19ed46622ebdd1ab0->enter($__internal_106e97fa9d9c023923ba0d9070790c87cbb43f7cc77c3dd19ed46622ebdd1ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_e4170b0f712f9fcb99844795bac3fb98a693c024c88c337a5be96a0df0b271c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4170b0f712f9fcb99844795bac3fb98a693c024c88c337a5be96a0df0b271c2->enter($__internal_e4170b0f712f9fcb99844795bac3fb98a693c024c88c337a5be96a0df0b271c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_106e97fa9d9c023923ba0d9070790c87cbb43f7cc77c3dd19ed46622ebdd1ab0->leave($__internal_106e97fa9d9c023923ba0d9070790c87cbb43f7cc77c3dd19ed46622ebdd1ab0_prof);

        
        $__internal_e4170b0f712f9fcb99844795bac3fb98a693c024c88c337a5be96a0df0b271c2->leave($__internal_e4170b0f712f9fcb99844795bac3fb98a693c024c88c337a5be96a0df0b271c2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
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
", "TwigBundle:Exception:traces.xml.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
