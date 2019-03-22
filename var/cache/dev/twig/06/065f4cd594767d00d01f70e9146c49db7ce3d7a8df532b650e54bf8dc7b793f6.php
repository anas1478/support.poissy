<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_2c498e5a8756268ce5e030202df076891ae97b573fd44770637b360f5a995a15 extends Twig_Template
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
        $__internal_3b393be19b4a445434ca3a8c76cc8af7e09d4b3c23d2bdbcd27d69e63298684b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b393be19b4a445434ca3a8c76cc8af7e09d4b3c23d2bdbcd27d69e63298684b->enter($__internal_3b393be19b4a445434ca3a8c76cc8af7e09d4b3c23d2bdbcd27d69e63298684b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_f5c88e5b7f581a9a94a2c333c6246c8c93a3bf7540033914b52d535892c8cc71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c88e5b7f581a9a94a2c333c6246c8c93a3bf7540033914b52d535892c8cc71->enter($__internal_f5c88e5b7f581a9a94a2c333c6246c8c93a3bf7540033914b52d535892c8cc71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3b393be19b4a445434ca3a8c76cc8af7e09d4b3c23d2bdbcd27d69e63298684b->leave($__internal_3b393be19b4a445434ca3a8c76cc8af7e09d4b3c23d2bdbcd27d69e63298684b_prof);

        
        $__internal_f5c88e5b7f581a9a94a2c333c6246c8c93a3bf7540033914b52d535892c8cc71->leave($__internal_f5c88e5b7f581a9a94a2c333c6246c8c93a3bf7540033914b52d535892c8cc71_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
", "TwigBundle:Exception:exception.json.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
