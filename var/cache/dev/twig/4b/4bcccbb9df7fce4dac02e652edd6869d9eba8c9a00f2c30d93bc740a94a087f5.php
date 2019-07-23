<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cf2d672c12493534b9aeadb9b18015dce59243f58a9422f8ec7afc9d0c0ae8f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b153590eb396156f937912e36502467d1ddff6e08168b6c0c0d75e1bb2f36979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b153590eb396156f937912e36502467d1ddff6e08168b6c0c0d75e1bb2f36979->enter($__internal_b153590eb396156f937912e36502467d1ddff6e08168b6c0c0d75e1bb2f36979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b9ef10a410c31e7b30324be456062c5efe4fb770d1093683ab9f3fa1561d6ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ef10a410c31e7b30324be456062c5efe4fb770d1093683ab9f3fa1561d6ced->enter($__internal_b9ef10a410c31e7b30324be456062c5efe4fb770d1093683ab9f3fa1561d6ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b153590eb396156f937912e36502467d1ddff6e08168b6c0c0d75e1bb2f36979->leave($__internal_b153590eb396156f937912e36502467d1ddff6e08168b6c0c0d75e1bb2f36979_prof);

        
        $__internal_b9ef10a410c31e7b30324be456062c5efe4fb770d1093683ab9f3fa1561d6ced->leave($__internal_b9ef10a410c31e7b30324be456062c5efe4fb770d1093683ab9f3fa1561d6ced_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cf2bf6892e1ffb2b9b4fb4ee5deefd02d497e93047f7dfb32dd3bceed16c8ec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf2bf6892e1ffb2b9b4fb4ee5deefd02d497e93047f7dfb32dd3bceed16c8ec7->enter($__internal_cf2bf6892e1ffb2b9b4fb4ee5deefd02d497e93047f7dfb32dd3bceed16c8ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1ce3071d9ecb26db838d83e0255263e9c2dbc5ecdb48cb1da51e47101258811f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce3071d9ecb26db838d83e0255263e9c2dbc5ecdb48cb1da51e47101258811f->enter($__internal_1ce3071d9ecb26db838d83e0255263e9c2dbc5ecdb48cb1da51e47101258811f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_1ce3071d9ecb26db838d83e0255263e9c2dbc5ecdb48cb1da51e47101258811f->leave($__internal_1ce3071d9ecb26db838d83e0255263e9c2dbc5ecdb48cb1da51e47101258811f_prof);

        
        $__internal_cf2bf6892e1ffb2b9b4fb4ee5deefd02d497e93047f7dfb32dd3bceed16c8ec7->leave($__internal_cf2bf6892e1ffb2b9b4fb4ee5deefd02d497e93047f7dfb32dd3bceed16c8ec7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3aa169381854384932b750350aace692255012d2a30667d0d667867816da24f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aa169381854384932b750350aace692255012d2a30667d0d667867816da24f9->enter($__internal_3aa169381854384932b750350aace692255012d2a30667d0d667867816da24f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_19b27476a82afc0eadf8658a76a161ef7e89712879829edb266ef1adadad21c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19b27476a82afc0eadf8658a76a161ef7e89712879829edb266ef1adadad21c7->enter($__internal_19b27476a82afc0eadf8658a76a161ef7e89712879829edb266ef1adadad21c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_19b27476a82afc0eadf8658a76a161ef7e89712879829edb266ef1adadad21c7->leave($__internal_19b27476a82afc0eadf8658a76a161ef7e89712879829edb266ef1adadad21c7_prof);

        
        $__internal_3aa169381854384932b750350aace692255012d2a30667d0d667867816da24f9->leave($__internal_3aa169381854384932b750350aace692255012d2a30667d0d667867816da24f9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a192657226ce94d63169c11414d52b68da9c2f2db8b66fa540e7c443a40eae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a192657226ce94d63169c11414d52b68da9c2f2db8b66fa540e7c443a40eae4->enter($__internal_0a192657226ce94d63169c11414d52b68da9c2f2db8b66fa540e7c443a40eae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_850d86baffb3226d1b68e6b61be541bd4c4f2a7b4fad839f57edf3dfd0d8ff54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_850d86baffb3226d1b68e6b61be541bd4c4f2a7b4fad839f57edf3dfd0d8ff54->enter($__internal_850d86baffb3226d1b68e6b61be541bd4c4f2a7b4fad839f57edf3dfd0d8ff54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_850d86baffb3226d1b68e6b61be541bd4c4f2a7b4fad839f57edf3dfd0d8ff54->leave($__internal_850d86baffb3226d1b68e6b61be541bd4c4f2a7b4fad839f57edf3dfd0d8ff54_prof);

        
        $__internal_0a192657226ce94d63169c11414d52b68da9c2f2db8b66fa540e7c443a40eae4->leave($__internal_0a192657226ce94d63169c11414d52b68da9c2f2db8b66fa540e7c443a40eae4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
