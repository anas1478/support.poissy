<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_7ce68aac75841136a1f30e9466fd8aee21d30ed3123c053bff90487337ac025e extends Twig_Template
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
        $__internal_299caae62fa6de3f6d5d22c9151557dfc4b24c56c827cf376d4ae027b31d0738 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_299caae62fa6de3f6d5d22c9151557dfc4b24c56c827cf376d4ae027b31d0738->enter($__internal_299caae62fa6de3f6d5d22c9151557dfc4b24c56c827cf376d4ae027b31d0738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_e6a5081a9dabd798bbd457db41c53ad17064c4ab9118223c06ba40bf8677bcc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6a5081a9dabd798bbd457db41c53ad17064c4ab9118223c06ba40bf8677bcc3->enter($__internal_e6a5081a9dabd798bbd457db41c53ad17064c4ab9118223c06ba40bf8677bcc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_299caae62fa6de3f6d5d22c9151557dfc4b24c56c827cf376d4ae027b31d0738->leave($__internal_299caae62fa6de3f6d5d22c9151557dfc4b24c56c827cf376d4ae027b31d0738_prof);

        
        $__internal_e6a5081a9dabd798bbd457db41c53ad17064c4ab9118223c06ba40bf8677bcc3->leave($__internal_e6a5081a9dabd798bbd457db41c53ad17064c4ab9118223c06ba40bf8677bcc3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
