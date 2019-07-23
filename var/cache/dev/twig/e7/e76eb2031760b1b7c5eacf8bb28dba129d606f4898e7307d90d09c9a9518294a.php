<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_e8c818754d4e8f7f74559c342cca69e06deff992e373d928eeb8be265a38f345 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0aff144c21e8bd8df0d3d5ab1a1295506d21fa4d35ac1e16cfb4fd3ca6dc59f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0aff144c21e8bd8df0d3d5ab1a1295506d21fa4d35ac1e16cfb4fd3ca6dc59f->enter($__internal_d0aff144c21e8bd8df0d3d5ab1a1295506d21fa4d35ac1e16cfb4fd3ca6dc59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_669ebfde49696e48a3bc4111fccfb192d0f7a8c35127e3b92efe6e909c6e8159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669ebfde49696e48a3bc4111fccfb192d0f7a8c35127e3b92efe6e909c6e8159->enter($__internal_669ebfde49696e48a3bc4111fccfb192d0f7a8c35127e3b92efe6e909c6e8159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_d0aff144c21e8bd8df0d3d5ab1a1295506d21fa4d35ac1e16cfb4fd3ca6dc59f->leave($__internal_d0aff144c21e8bd8df0d3d5ab1a1295506d21fa4d35ac1e16cfb4fd3ca6dc59f_prof);

        
        $__internal_669ebfde49696e48a3bc4111fccfb192d0f7a8c35127e3b92efe6e909c6e8159->leave($__internal_669ebfde49696e48a3bc4111fccfb192d0f7a8c35127e3b92efe6e909c6e8159_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e54ecaa2e2a3282d45a4c0aedf78821fc1c4bcda9222283344b3f4af75b8834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e54ecaa2e2a3282d45a4c0aedf78821fc1c4bcda9222283344b3f4af75b8834->enter($__internal_8e54ecaa2e2a3282d45a4c0aedf78821fc1c4bcda9222283344b3f4af75b8834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c6a7105a692a8f76add9735f42ecfd75e6eed05fbbe378fa1301e37f2e2345b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a7105a692a8f76add9735f42ecfd75e6eed05fbbe378fa1301e37f2e2345b5->enter($__internal_c6a7105a692a8f76add9735f42ecfd75e6eed05fbbe378fa1301e37f2e2345b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c6a7105a692a8f76add9735f42ecfd75e6eed05fbbe378fa1301e37f2e2345b5->leave($__internal_c6a7105a692a8f76add9735f42ecfd75e6eed05fbbe378fa1301e37f2e2345b5_prof);

        
        $__internal_8e54ecaa2e2a3282d45a4c0aedf78821fc1c4bcda9222283344b3f4af75b8834->leave($__internal_8e54ecaa2e2a3282d45a4c0aedf78821fc1c4bcda9222283344b3f4af75b8834_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d14f3b539e6c22e6826ddf1ce4e1e8526baafa8a7514afe70b41bc0e4b0d36ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d14f3b539e6c22e6826ddf1ce4e1e8526baafa8a7514afe70b41bc0e4b0d36ac->enter($__internal_d14f3b539e6c22e6826ddf1ce4e1e8526baafa8a7514afe70b41bc0e4b0d36ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9f8c60f092058c64be63397f5f6df978c36a003311a4230abdcaec622e1f9cb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f8c60f092058c64be63397f5f6df978c36a003311a4230abdcaec622e1f9cb2->enter($__internal_9f8c60f092058c64be63397f5f6df978c36a003311a4230abdcaec622e1f9cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9f8c60f092058c64be63397f5f6df978c36a003311a4230abdcaec622e1f9cb2->leave($__internal_9f8c60f092058c64be63397f5f6df978c36a003311a4230abdcaec622e1f9cb2_prof);

        
        $__internal_d14f3b539e6c22e6826ddf1ce4e1e8526baafa8a7514afe70b41bc0e4b0d36ac->leave($__internal_d14f3b539e6c22e6826ddf1ce4e1e8526baafa8a7514afe70b41bc0e4b0d36ac_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_dade93697665a99ba437812cef2538862502876fab1299d9c82c2525a42ef1f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dade93697665a99ba437812cef2538862502876fab1299d9c82c2525a42ef1f4->enter($__internal_dade93697665a99ba437812cef2538862502876fab1299d9c82c2525a42ef1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_14d65bfbeeb25ce25b0f1dd251607db141fea57e967110cb1f9e398ca530600d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14d65bfbeeb25ce25b0f1dd251607db141fea57e967110cb1f9e398ca530600d->enter($__internal_14d65bfbeeb25ce25b0f1dd251607db141fea57e967110cb1f9e398ca530600d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_14d65bfbeeb25ce25b0f1dd251607db141fea57e967110cb1f9e398ca530600d->leave($__internal_14d65bfbeeb25ce25b0f1dd251607db141fea57e967110cb1f9e398ca530600d_prof);

        
        $__internal_dade93697665a99ba437812cef2538862502876fab1299d9c82c2525a42ef1f4->leave($__internal_dade93697665a99ba437812cef2538862502876fab1299d9c82c2525a42ef1f4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
