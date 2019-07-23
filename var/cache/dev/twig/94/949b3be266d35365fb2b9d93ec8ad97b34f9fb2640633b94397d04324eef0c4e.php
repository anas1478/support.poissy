<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_190132d28a365ce6063e705983655eaf5e70bc183329e808140f5bad673dedc7 extends Twig_Template
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
        $__internal_2490250de23eb5d89a4f6d5b54ecb020225144c3833541bb8ebaa406ff6b32c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2490250de23eb5d89a4f6d5b54ecb020225144c3833541bb8ebaa406ff6b32c2->enter($__internal_2490250de23eb5d89a4f6d5b54ecb020225144c3833541bb8ebaa406ff6b32c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_87854e7904e64daa71bef7a2409915695c1e60d81a1ea5a01bf76892e940d726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87854e7904e64daa71bef7a2409915695c1e60d81a1ea5a01bf76892e940d726->enter($__internal_87854e7904e64daa71bef7a2409915695c1e60d81a1ea5a01bf76892e940d726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_2490250de23eb5d89a4f6d5b54ecb020225144c3833541bb8ebaa406ff6b32c2->leave($__internal_2490250de23eb5d89a4f6d5b54ecb020225144c3833541bb8ebaa406ff6b32c2_prof);

        
        $__internal_87854e7904e64daa71bef7a2409915695c1e60d81a1ea5a01bf76892e940d726->leave($__internal_87854e7904e64daa71bef7a2409915695c1e60d81a1ea5a01bf76892e940d726_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
