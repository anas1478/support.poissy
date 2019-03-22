<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_81f4cf7c28e138c450067b78cbbbf16832af40f4f5516b4b7fec973fc2296e50 extends Twig_Template
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
        $__internal_0338546f1fba98f529ac823a91295ca621fe49413b858de3d8510b698450536b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0338546f1fba98f529ac823a91295ca621fe49413b858de3d8510b698450536b->enter($__internal_0338546f1fba98f529ac823a91295ca621fe49413b858de3d8510b698450536b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_8c4d35c4a2805f934dc30061234964c5778a290d95ac12a6474c35f9dc60c875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c4d35c4a2805f934dc30061234964c5778a290d95ac12a6474c35f9dc60c875->enter($__internal_8c4d35c4a2805f934dc30061234964c5778a290d95ac12a6474c35f9dc60c875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_0338546f1fba98f529ac823a91295ca621fe49413b858de3d8510b698450536b->leave($__internal_0338546f1fba98f529ac823a91295ca621fe49413b858de3d8510b698450536b_prof);

        
        $__internal_8c4d35c4a2805f934dc30061234964c5778a290d95ac12a6474c35f9dc60c875->leave($__internal_8c4d35c4a2805f934dc30061234964c5778a290d95ac12a6474c35f9dc60c875_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
