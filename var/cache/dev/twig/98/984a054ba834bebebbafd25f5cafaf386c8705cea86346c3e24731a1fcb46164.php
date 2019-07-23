<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_f54b4a8f965cd7b0d1a6dd2550d86f4e50758ea4fecd0666108d65886f74c86d extends Twig_Template
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
        $__internal_1cf12bed5d4e29df08d316454f99334323652eb75dcd44cf6c4965413e39673d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cf12bed5d4e29df08d316454f99334323652eb75dcd44cf6c4965413e39673d->enter($__internal_1cf12bed5d4e29df08d316454f99334323652eb75dcd44cf6c4965413e39673d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_8d7f0bcd93d1c0653af4a688c87f78c0d48c44385e0cfcffaace50a06d6482d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7f0bcd93d1c0653af4a688c87f78c0d48c44385e0cfcffaace50a06d6482d2->enter($__internal_8d7f0bcd93d1c0653af4a688c87f78c0d48c44385e0cfcffaace50a06d6482d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_1cf12bed5d4e29df08d316454f99334323652eb75dcd44cf6c4965413e39673d->leave($__internal_1cf12bed5d4e29df08d316454f99334323652eb75dcd44cf6c4965413e39673d_prof);

        
        $__internal_8d7f0bcd93d1c0653af4a688c87f78c0d48c44385e0cfcffaace50a06d6482d2->leave($__internal_8d7f0bcd93d1c0653af4a688c87f78c0d48c44385e0cfcffaace50a06d6482d2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
