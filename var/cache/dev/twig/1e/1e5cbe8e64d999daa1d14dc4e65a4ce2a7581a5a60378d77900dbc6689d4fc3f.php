<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_f7d082b4d0306235b4a9907ba85614dcbceb1b6f41b8882efb196275fc3524da extends Twig_Template
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
        $__internal_54cf104d64b2b032f14113574d9d1e2854edd78a84b8ac2365dab8c18cbd0d05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54cf104d64b2b032f14113574d9d1e2854edd78a84b8ac2365dab8c18cbd0d05->enter($__internal_54cf104d64b2b032f14113574d9d1e2854edd78a84b8ac2365dab8c18cbd0d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_e4b17f21669c9c13cf0cfbae0b6dbacdff2cb3df90689b4d688c4d38795a6239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4b17f21669c9c13cf0cfbae0b6dbacdff2cb3df90689b4d688c4d38795a6239->enter($__internal_e4b17f21669c9c13cf0cfbae0b6dbacdff2cb3df90689b4d688c4d38795a6239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_54cf104d64b2b032f14113574d9d1e2854edd78a84b8ac2365dab8c18cbd0d05->leave($__internal_54cf104d64b2b032f14113574d9d1e2854edd78a84b8ac2365dab8c18cbd0d05_prof);

        
        $__internal_e4b17f21669c9c13cf0cfbae0b6dbacdff2cb3df90689b4d688c4d38795a6239->leave($__internal_e4b17f21669c9c13cf0cfbae0b6dbacdff2cb3df90689b4d688c4d38795a6239_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
