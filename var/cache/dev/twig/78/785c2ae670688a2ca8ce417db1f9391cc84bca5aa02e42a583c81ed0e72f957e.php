<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_f9ac972e16a055a675fc2479dad7515751ba7bb3226c9eed07dfe3f1406fd72f extends Twig_Template
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
        $__internal_8b06c116476e070e6c3c3e5e98a18cf1d1367062292c27e7a2b258eeb6a4a53c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b06c116476e070e6c3c3e5e98a18cf1d1367062292c27e7a2b258eeb6a4a53c->enter($__internal_8b06c116476e070e6c3c3e5e98a18cf1d1367062292c27e7a2b258eeb6a4a53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_53d1dd3327ab51529ae09a6ad4eccebb9ef52a30cef379566c7630d73344c47c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53d1dd3327ab51529ae09a6ad4eccebb9ef52a30cef379566c7630d73344c47c->enter($__internal_53d1dd3327ab51529ae09a6ad4eccebb9ef52a30cef379566c7630d73344c47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8b06c116476e070e6c3c3e5e98a18cf1d1367062292c27e7a2b258eeb6a4a53c->leave($__internal_8b06c116476e070e6c3c3e5e98a18cf1d1367062292c27e7a2b258eeb6a4a53c_prof);

        
        $__internal_53d1dd3327ab51529ae09a6ad4eccebb9ef52a30cef379566c7630d73344c47c->leave($__internal_53d1dd3327ab51529ae09a6ad4eccebb9ef52a30cef379566c7630d73344c47c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
