<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_c9a2d990a79cc364b65ca7a7fcd12bba248e4678cb998b2b1193051eede3aa0f extends Twig_Template
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
        $__internal_fb9d988207e5f079f092161a2414037749216f7e0caa14dc35f17f3a353e7b58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb9d988207e5f079f092161a2414037749216f7e0caa14dc35f17f3a353e7b58->enter($__internal_fb9d988207e5f079f092161a2414037749216f7e0caa14dc35f17f3a353e7b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_c8921f6bdcd589510bf8e166240b219357038ab14176f39db94084f8a00cb32a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8921f6bdcd589510bf8e166240b219357038ab14176f39db94084f8a00cb32a->enter($__internal_c8921f6bdcd589510bf8e166240b219357038ab14176f39db94084f8a00cb32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_fb9d988207e5f079f092161a2414037749216f7e0caa14dc35f17f3a353e7b58->leave($__internal_fb9d988207e5f079f092161a2414037749216f7e0caa14dc35f17f3a353e7b58_prof);

        
        $__internal_c8921f6bdcd589510bf8e166240b219357038ab14176f39db94084f8a00cb32a->leave($__internal_c8921f6bdcd589510bf8e166240b219357038ab14176f39db94084f8a00cb32a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
