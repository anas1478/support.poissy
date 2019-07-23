<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_07f009aa02542b010e36f0a05aabb6ad63f6e3592a1560a973878a84d453d273 extends Twig_Template
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
        $__internal_2cc2e0d862861af3f3f497b5a6009b54e049610d0c531e5e2892308eb99a4357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cc2e0d862861af3f3f497b5a6009b54e049610d0c531e5e2892308eb99a4357->enter($__internal_2cc2e0d862861af3f3f497b5a6009b54e049610d0c531e5e2892308eb99a4357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_d23cb6a94ad1edfb721f6b1de6f88e73084fc6c2c0e172cec8f4e7cf73d41e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d23cb6a94ad1edfb721f6b1de6f88e73084fc6c2c0e172cec8f4e7cf73d41e7d->enter($__internal_d23cb6a94ad1edfb721f6b1de6f88e73084fc6c2c0e172cec8f4e7cf73d41e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_2cc2e0d862861af3f3f497b5a6009b54e049610d0c531e5e2892308eb99a4357->leave($__internal_2cc2e0d862861af3f3f497b5a6009b54e049610d0c531e5e2892308eb99a4357_prof);

        
        $__internal_d23cb6a94ad1edfb721f6b1de6f88e73084fc6c2c0e172cec8f4e7cf73d41e7d->leave($__internal_d23cb6a94ad1edfb721f6b1de6f88e73084fc6c2c0e172cec8f4e7cf73d41e7d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
