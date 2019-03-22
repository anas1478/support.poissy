<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_b9f610b2a2f394627a715f814594b2ec07747d006545b0a614b3c50a6799f4da extends Twig_Template
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
        $__internal_60f2c98e21f44660d861d65e5c694e153ad35b66d35c3f04a0a2e868a1ded481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60f2c98e21f44660d861d65e5c694e153ad35b66d35c3f04a0a2e868a1ded481->enter($__internal_60f2c98e21f44660d861d65e5c694e153ad35b66d35c3f04a0a2e868a1ded481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_48317248c6c18dddb719cc292bd2ae23110e44fc7b87227ed703f1f90824848b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48317248c6c18dddb719cc292bd2ae23110e44fc7b87227ed703f1f90824848b->enter($__internal_48317248c6c18dddb719cc292bd2ae23110e44fc7b87227ed703f1f90824848b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_60f2c98e21f44660d861d65e5c694e153ad35b66d35c3f04a0a2e868a1ded481->leave($__internal_60f2c98e21f44660d861d65e5c694e153ad35b66d35c3f04a0a2e868a1ded481_prof);

        
        $__internal_48317248c6c18dddb719cc292bd2ae23110e44fc7b87227ed703f1f90824848b->leave($__internal_48317248c6c18dddb719cc292bd2ae23110e44fc7b87227ed703f1f90824848b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
