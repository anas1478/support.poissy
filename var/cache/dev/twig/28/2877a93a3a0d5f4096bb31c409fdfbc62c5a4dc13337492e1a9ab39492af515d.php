<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_80c71ce99f32f0e783164a1040cf3232967a62d60dd43961c9746b980dc6e516 extends Twig_Template
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
        $__internal_cb0ce3b629c2cdece13a81c54bb4cc3f8989de99157b89955770f1c3ebdc815c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb0ce3b629c2cdece13a81c54bb4cc3f8989de99157b89955770f1c3ebdc815c->enter($__internal_cb0ce3b629c2cdece13a81c54bb4cc3f8989de99157b89955770f1c3ebdc815c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_2e3fa26e71b1af0a38c0cf8467a2b61e606dd619ff39cdbc5abe84f6f386ce4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e3fa26e71b1af0a38c0cf8467a2b61e606dd619ff39cdbc5abe84f6f386ce4a->enter($__internal_2e3fa26e71b1af0a38c0cf8467a2b61e606dd619ff39cdbc5abe84f6f386ce4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_cb0ce3b629c2cdece13a81c54bb4cc3f8989de99157b89955770f1c3ebdc815c->leave($__internal_cb0ce3b629c2cdece13a81c54bb4cc3f8989de99157b89955770f1c3ebdc815c_prof);

        
        $__internal_2e3fa26e71b1af0a38c0cf8467a2b61e606dd619ff39cdbc5abe84f6f386ce4a->leave($__internal_2e3fa26e71b1af0a38c0cf8467a2b61e606dd619ff39cdbc5abe84f6f386ce4a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
