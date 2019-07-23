<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_882ca3a076a66d723d940c6695e6b6ec5b8e53dee40b87944ec58267fedbfe53 extends Twig_Template
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
        $__internal_29a08f60d97df5bffadff279d07cfaea84a256739943fe0cb39734f421ef3d60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29a08f60d97df5bffadff279d07cfaea84a256739943fe0cb39734f421ef3d60->enter($__internal_29a08f60d97df5bffadff279d07cfaea84a256739943fe0cb39734f421ef3d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_7a9d2ab4386eec04f16e81fa854692a5901e18fb3c416febba69b778ff127e61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a9d2ab4386eec04f16e81fa854692a5901e18fb3c416febba69b778ff127e61->enter($__internal_7a9d2ab4386eec04f16e81fa854692a5901e18fb3c416febba69b778ff127e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_29a08f60d97df5bffadff279d07cfaea84a256739943fe0cb39734f421ef3d60->leave($__internal_29a08f60d97df5bffadff279d07cfaea84a256739943fe0cb39734f421ef3d60_prof);

        
        $__internal_7a9d2ab4386eec04f16e81fa854692a5901e18fb3c416febba69b778ff127e61->leave($__internal_7a9d2ab4386eec04f16e81fa854692a5901e18fb3c416febba69b778ff127e61_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
