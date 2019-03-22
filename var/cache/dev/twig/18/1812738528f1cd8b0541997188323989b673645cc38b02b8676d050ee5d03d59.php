<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_57c60155046a8965c422f61c1b5b962047cc0bc56159761188ddfa54c9a635f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_51432c1db2ba5e4b90f802ea70b6f23adc4291b01fa72dd03b2c5462835e3368 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51432c1db2ba5e4b90f802ea70b6f23adc4291b01fa72dd03b2c5462835e3368->enter($__internal_51432c1db2ba5e4b90f802ea70b6f23adc4291b01fa72dd03b2c5462835e3368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_91c21bd3a278d913bb36465e49d1890c2e3bff295c89e5e865b97abfa92d0f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c21bd3a278d913bb36465e49d1890c2e3bff295c89e5e865b97abfa92d0f53->enter($__internal_91c21bd3a278d913bb36465e49d1890c2e3bff295c89e5e865b97abfa92d0f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51432c1db2ba5e4b90f802ea70b6f23adc4291b01fa72dd03b2c5462835e3368->leave($__internal_51432c1db2ba5e4b90f802ea70b6f23adc4291b01fa72dd03b2c5462835e3368_prof);

        
        $__internal_91c21bd3a278d913bb36465e49d1890c2e3bff295c89e5e865b97abfa92d0f53->leave($__internal_91c21bd3a278d913bb36465e49d1890c2e3bff295c89e5e865b97abfa92d0f53_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0fa91868fabb7b7ab538f71da553e5d49af24b569c179709cecb7d701eeedc67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fa91868fabb7b7ab538f71da553e5d49af24b569c179709cecb7d701eeedc67->enter($__internal_0fa91868fabb7b7ab538f71da553e5d49af24b569c179709cecb7d701eeedc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3675fa830348c666e8dcf725c6490b78608857768f6a7dfec26f4f47e6b43212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3675fa830348c666e8dcf725c6490b78608857768f6a7dfec26f4f47e6b43212->enter($__internal_3675fa830348c666e8dcf725c6490b78608857768f6a7dfec26f4f47e6b43212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3675fa830348c666e8dcf725c6490b78608857768f6a7dfec26f4f47e6b43212->leave($__internal_3675fa830348c666e8dcf725c6490b78608857768f6a7dfec26f4f47e6b43212_prof);

        
        $__internal_0fa91868fabb7b7ab538f71da553e5d49af24b569c179709cecb7d701eeedc67->leave($__internal_0fa91868fabb7b7ab538f71da553e5d49af24b569c179709cecb7d701eeedc67_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ef520e619597a5f626ecaa59f2e325136db4e9510ed76b9a12c6e622517166e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ef520e619597a5f626ecaa59f2e325136db4e9510ed76b9a12c6e622517166e->enter($__internal_9ef520e619597a5f626ecaa59f2e325136db4e9510ed76b9a12c6e622517166e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c44c4e3e927c7ef401fadc83f3ebec401d94c82448e89d6ee5a481e22111af41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c44c4e3e927c7ef401fadc83f3ebec401d94c82448e89d6ee5a481e22111af41->enter($__internal_c44c4e3e927c7ef401fadc83f3ebec401d94c82448e89d6ee5a481e22111af41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c44c4e3e927c7ef401fadc83f3ebec401d94c82448e89d6ee5a481e22111af41->leave($__internal_c44c4e3e927c7ef401fadc83f3ebec401d94c82448e89d6ee5a481e22111af41_prof);

        
        $__internal_9ef520e619597a5f626ecaa59f2e325136db4e9510ed76b9a12c6e622517166e->leave($__internal_9ef520e619597a5f626ecaa59f2e325136db4e9510ed76b9a12c6e622517166e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d064d8a12da35b486454d6db186f9d56b31239bbf2d75342df9c2a03d01b7897 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d064d8a12da35b486454d6db186f9d56b31239bbf2d75342df9c2a03d01b7897->enter($__internal_d064d8a12da35b486454d6db186f9d56b31239bbf2d75342df9c2a03d01b7897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed1cf9274f8ea6667c6eb21171eb62c5147d7506e9f3fdf68b1d2daabbdaa9f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed1cf9274f8ea6667c6eb21171eb62c5147d7506e9f3fdf68b1d2daabbdaa9f8->enter($__internal_ed1cf9274f8ea6667c6eb21171eb62c5147d7506e9f3fdf68b1d2daabbdaa9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_ed1cf9274f8ea6667c6eb21171eb62c5147d7506e9f3fdf68b1d2daabbdaa9f8->leave($__internal_ed1cf9274f8ea6667c6eb21171eb62c5147d7506e9f3fdf68b1d2daabbdaa9f8_prof);

        
        $__internal_d064d8a12da35b486454d6db186f9d56b31239bbf2d75342df9c2a03d01b7897->leave($__internal_d064d8a12da35b486454d6db186f9d56b31239bbf2d75342df9c2a03d01b7897_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
