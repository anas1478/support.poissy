<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_4eb69813c34d7ea6fac626da4f4bcb375552d92f9477cf557e4a4fa6f5b183f9 extends Twig_Template
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
        $__internal_9a581d7844afbc199586258ab6a39a0504eda70328481ed2f16d977c6c8d3c2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a581d7844afbc199586258ab6a39a0504eda70328481ed2f16d977c6c8d3c2d->enter($__internal_9a581d7844afbc199586258ab6a39a0504eda70328481ed2f16d977c6c8d3c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_e5d027ce60048a2ffa7316ba03e377727eb3d4a7877159043506c3cc9ec0ee30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5d027ce60048a2ffa7316ba03e377727eb3d4a7877159043506c3cc9ec0ee30->enter($__internal_e5d027ce60048a2ffa7316ba03e377727eb3d4a7877159043506c3cc9ec0ee30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_9a581d7844afbc199586258ab6a39a0504eda70328481ed2f16d977c6c8d3c2d->leave($__internal_9a581d7844afbc199586258ab6a39a0504eda70328481ed2f16d977c6c8d3c2d_prof);

        
        $__internal_e5d027ce60048a2ffa7316ba03e377727eb3d4a7877159043506c3cc9ec0ee30->leave($__internal_e5d027ce60048a2ffa7316ba03e377727eb3d4a7877159043506c3cc9ec0ee30_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
