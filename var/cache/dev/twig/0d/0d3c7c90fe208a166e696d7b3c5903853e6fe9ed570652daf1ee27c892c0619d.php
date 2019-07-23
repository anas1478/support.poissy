<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_ad4afea8ea8d71c52120da30057dfb78d0da19bcbb0b5514f395e22bab64e531 extends Twig_Template
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
        $__internal_14c6530c1722fca74893b71b9e40fe9f0172a0e03b670251fccd30542a6c81cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14c6530c1722fca74893b71b9e40fe9f0172a0e03b670251fccd30542a6c81cf->enter($__internal_14c6530c1722fca74893b71b9e40fe9f0172a0e03b670251fccd30542a6c81cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_5eaf66f0110155bede37f6faa5faed8e28fba692bf525881295f1d06e37ec7e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eaf66f0110155bede37f6faa5faed8e28fba692bf525881295f1d06e37ec7e4->enter($__internal_5eaf66f0110155bede37f6faa5faed8e28fba692bf525881295f1d06e37ec7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_14c6530c1722fca74893b71b9e40fe9f0172a0e03b670251fccd30542a6c81cf->leave($__internal_14c6530c1722fca74893b71b9e40fe9f0172a0e03b670251fccd30542a6c81cf_prof);

        
        $__internal_5eaf66f0110155bede37f6faa5faed8e28fba692bf525881295f1d06e37ec7e4->leave($__internal_5eaf66f0110155bede37f6faa5faed8e28fba692bf525881295f1d06e37ec7e4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
