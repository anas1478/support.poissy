<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_fa8a5e7d37e599a724c5e25efa8b2dedada76df18e8faa127f7cd56881e6d8a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3db6848d50bdc766d42933abd4606d58fc4266a82cee34d56e380f1eaedf9064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3db6848d50bdc766d42933abd4606d58fc4266a82cee34d56e380f1eaedf9064->enter($__internal_3db6848d50bdc766d42933abd4606d58fc4266a82cee34d56e380f1eaedf9064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_dc8112be3324b064e7f6f19734bcfc53ff256403714cb717f235db25633ce92f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc8112be3324b064e7f6f19734bcfc53ff256403714cb717f235db25633ce92f->enter($__internal_dc8112be3324b064e7f6f19734bcfc53ff256403714cb717f235db25633ce92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3db6848d50bdc766d42933abd4606d58fc4266a82cee34d56e380f1eaedf9064->leave($__internal_3db6848d50bdc766d42933abd4606d58fc4266a82cee34d56e380f1eaedf9064_prof);

        
        $__internal_dc8112be3324b064e7f6f19734bcfc53ff256403714cb717f235db25633ce92f->leave($__internal_dc8112be3324b064e7f6f19734bcfc53ff256403714cb717f235db25633ce92f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3ae62cf41b31b5ce521254dfd9d2ed41c4803fb600e00dc5f7cf0412aeddfda8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ae62cf41b31b5ce521254dfd9d2ed41c4803fb600e00dc5f7cf0412aeddfda8->enter($__internal_3ae62cf41b31b5ce521254dfd9d2ed41c4803fb600e00dc5f7cf0412aeddfda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_771f96877f8a6cd70c9ed843445bd0a3c7ade180b77872321ae4f1e33d681cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_771f96877f8a6cd70c9ed843445bd0a3c7ade180b77872321ae4f1e33d681cf7->enter($__internal_771f96877f8a6cd70c9ed843445bd0a3c7ade180b77872321ae4f1e33d681cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_771f96877f8a6cd70c9ed843445bd0a3c7ade180b77872321ae4f1e33d681cf7->leave($__internal_771f96877f8a6cd70c9ed843445bd0a3c7ade180b77872321ae4f1e33d681cf7_prof);

        
        $__internal_3ae62cf41b31b5ce521254dfd9d2ed41c4803fb600e00dc5f7cf0412aeddfda8->leave($__internal_3ae62cf41b31b5ce521254dfd9d2ed41c4803fb600e00dc5f7cf0412aeddfda8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cddcc82ab0198b0e338c9fe4a9ea9f5b6ab7ba2806a04cecd67df0460b1e433 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cddcc82ab0198b0e338c9fe4a9ea9f5b6ab7ba2806a04cecd67df0460b1e433->enter($__internal_5cddcc82ab0198b0e338c9fe4a9ea9f5b6ab7ba2806a04cecd67df0460b1e433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a8c12f997f3cd9dfe608973f15c7762abaa600ea675257f31d08ea23b94c55f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8c12f997f3cd9dfe608973f15c7762abaa600ea675257f31d08ea23b94c55f7->enter($__internal_a8c12f997f3cd9dfe608973f15c7762abaa600ea675257f31d08ea23b94c55f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_a8c12f997f3cd9dfe608973f15c7762abaa600ea675257f31d08ea23b94c55f7->leave($__internal_a8c12f997f3cd9dfe608973f15c7762abaa600ea675257f31d08ea23b94c55f7_prof);

        
        $__internal_5cddcc82ab0198b0e338c9fe4a9ea9f5b6ab7ba2806a04cecd67df0460b1e433->leave($__internal_5cddcc82ab0198b0e338c9fe4a9ea9f5b6ab7ba2806a04cecd67df0460b1e433_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
