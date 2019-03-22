<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_ae84e2052b06aaedeba64bcdd195c4fc2281fdfec61fdef82de9df56fb882272 extends Twig_Template
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
        $__internal_224d0ad0952cf0c1d729d66f8032dbb41bcf8358fa7931be3eacff44b05fcc31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_224d0ad0952cf0c1d729d66f8032dbb41bcf8358fa7931be3eacff44b05fcc31->enter($__internal_224d0ad0952cf0c1d729d66f8032dbb41bcf8358fa7931be3eacff44b05fcc31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_762dd9f6210f9e5095de6b05b1a8e4f30338d34a633355ca49dd92032547b463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762dd9f6210f9e5095de6b05b1a8e4f30338d34a633355ca49dd92032547b463->enter($__internal_762dd9f6210f9e5095de6b05b1a8e4f30338d34a633355ca49dd92032547b463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_224d0ad0952cf0c1d729d66f8032dbb41bcf8358fa7931be3eacff44b05fcc31->leave($__internal_224d0ad0952cf0c1d729d66f8032dbb41bcf8358fa7931be3eacff44b05fcc31_prof);

        
        $__internal_762dd9f6210f9e5095de6b05b1a8e4f30338d34a633355ca49dd92032547b463->leave($__internal_762dd9f6210f9e5095de6b05b1a8e4f30338d34a633355ca49dd92032547b463_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
