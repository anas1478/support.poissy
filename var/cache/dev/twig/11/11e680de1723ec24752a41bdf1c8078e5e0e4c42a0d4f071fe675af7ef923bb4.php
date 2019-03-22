<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_bbe5cb2f889ab7bd1899099534ac0a5eb4adb0d9ca5a2c752817d9ab138e8d4d extends Twig_Template
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
        $__internal_fc1a9bcb714a46715ff9ce42941b6898451bc40da2ff232b9dc30d1d477f7d28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc1a9bcb714a46715ff9ce42941b6898451bc40da2ff232b9dc30d1d477f7d28->enter($__internal_fc1a9bcb714a46715ff9ce42941b6898451bc40da2ff232b9dc30d1d477f7d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_b26dbda754a58f9679b5e9c32ff24326553747d8612bf5087d9e0f7b771bba78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b26dbda754a58f9679b5e9c32ff24326553747d8612bf5087d9e0f7b771bba78->enter($__internal_b26dbda754a58f9679b5e9c32ff24326553747d8612bf5087d9e0f7b771bba78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_fc1a9bcb714a46715ff9ce42941b6898451bc40da2ff232b9dc30d1d477f7d28->leave($__internal_fc1a9bcb714a46715ff9ce42941b6898451bc40da2ff232b9dc30d1d477f7d28_prof);

        
        $__internal_b26dbda754a58f9679b5e9c32ff24326553747d8612bf5087d9e0f7b771bba78->leave($__internal_b26dbda754a58f9679b5e9c32ff24326553747d8612bf5087d9e0f7b771bba78_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
", "TwigBundle:Exception:error.txt.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
