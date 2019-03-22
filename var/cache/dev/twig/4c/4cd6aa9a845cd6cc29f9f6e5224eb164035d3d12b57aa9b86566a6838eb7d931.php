<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_09504dae0666e8128557504d7ae8f75929feff7eba3c28c11d8c67817f960b0e extends Twig_Template
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
        $__internal_e7af9e77855019c3b97093deaec3f6b92e2c4b75155395336f2ca7ccdec7785f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7af9e77855019c3b97093deaec3f6b92e2c4b75155395336f2ca7ccdec7785f->enter($__internal_e7af9e77855019c3b97093deaec3f6b92e2c4b75155395336f2ca7ccdec7785f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_36e407bb9448b8ac4c0078b7e8bc66839fba8a22f5a98c629aa09fb3b018549c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e407bb9448b8ac4c0078b7e8bc66839fba8a22f5a98c629aa09fb3b018549c->enter($__internal_36e407bb9448b8ac4c0078b7e8bc66839fba8a22f5a98c629aa09fb3b018549c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_e7af9e77855019c3b97093deaec3f6b92e2c4b75155395336f2ca7ccdec7785f->leave($__internal_e7af9e77855019c3b97093deaec3f6b92e2c4b75155395336f2ca7ccdec7785f_prof);

        
        $__internal_36e407bb9448b8ac4c0078b7e8bc66839fba8a22f5a98c629aa09fb3b018549c->leave($__internal_36e407bb9448b8ac4c0078b7e8bc66839fba8a22f5a98c629aa09fb3b018549c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9873976d375b37c9d36c957fa751e854fec44696a413fbbd61e8ca1bcab67bcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9873976d375b37c9d36c957fa751e854fec44696a413fbbd61e8ca1bcab67bcb->enter($__internal_9873976d375b37c9d36c957fa751e854fec44696a413fbbd61e8ca1bcab67bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f541cfa8a8b253a6819e01bbad38ee1e1bbd5aa1c4aadb14ddee46a4e5c94e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f541cfa8a8b253a6819e01bbad38ee1e1bbd5aa1c4aadb14ddee46a4e5c94e75->enter($__internal_f541cfa8a8b253a6819e01bbad38ee1e1bbd5aa1c4aadb14ddee46a4e5c94e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f541cfa8a8b253a6819e01bbad38ee1e1bbd5aa1c4aadb14ddee46a4e5c94e75->leave($__internal_f541cfa8a8b253a6819e01bbad38ee1e1bbd5aa1c4aadb14ddee46a4e5c94e75_prof);

        
        $__internal_9873976d375b37c9d36c957fa751e854fec44696a413fbbd61e8ca1bcab67bcb->leave($__internal_9873976d375b37c9d36c957fa751e854fec44696a413fbbd61e8ca1bcab67bcb_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d451ba30cfe952a92659a5c3a0f1b2cf2bbb08aa6490747fd99bd98ce78ab9b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d451ba30cfe952a92659a5c3a0f1b2cf2bbb08aa6490747fd99bd98ce78ab9b4->enter($__internal_d451ba30cfe952a92659a5c3a0f1b2cf2bbb08aa6490747fd99bd98ce78ab9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b38e9e84b0c1f646c9e0e1142b564fe55a204a2565573bc63f9deea6bf0f46f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38e9e84b0c1f646c9e0e1142b564fe55a204a2565573bc63f9deea6bf0f46f9->enter($__internal_b38e9e84b0c1f646c9e0e1142b564fe55a204a2565573bc63f9deea6bf0f46f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b38e9e84b0c1f646c9e0e1142b564fe55a204a2565573bc63f9deea6bf0f46f9->leave($__internal_b38e9e84b0c1f646c9e0e1142b564fe55a204a2565573bc63f9deea6bf0f46f9_prof);

        
        $__internal_d451ba30cfe952a92659a5c3a0f1b2cf2bbb08aa6490747fd99bd98ce78ab9b4->leave($__internal_d451ba30cfe952a92659a5c3a0f1b2cf2bbb08aa6490747fd99bd98ce78ab9b4_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_10139c0d767ad0056936d68b36e1b28ade9ab6f7dc7ec5c49db1e3ed01f9a3ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10139c0d767ad0056936d68b36e1b28ade9ab6f7dc7ec5c49db1e3ed01f9a3ee->enter($__internal_10139c0d767ad0056936d68b36e1b28ade9ab6f7dc7ec5c49db1e3ed01f9a3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_006c7b77de737d8859fdf8e463b51006fec5754375eb74a0133d9fa02f23ea49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_006c7b77de737d8859fdf8e463b51006fec5754375eb74a0133d9fa02f23ea49->enter($__internal_006c7b77de737d8859fdf8e463b51006fec5754375eb74a0133d9fa02f23ea49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_006c7b77de737d8859fdf8e463b51006fec5754375eb74a0133d9fa02f23ea49->leave($__internal_006c7b77de737d8859fdf8e463b51006fec5754375eb74a0133d9fa02f23ea49_prof);

        
        $__internal_10139c0d767ad0056936d68b36e1b28ade9ab6f7dc7ec5c49db1e3ed01f9a3ee->leave($__internal_10139c0d767ad0056936d68b36e1b28ade9ab6f7dc7ec5c49db1e3ed01f9a3ee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
