<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_5543abcdffb03494c928d61faa483d747d81ab85134f61cfcd174082402b49ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_4731de7c0bd42d2ecba8dc4b425035d5075477dc90e3f734e4d6a22eeec04d0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4731de7c0bd42d2ecba8dc4b425035d5075477dc90e3f734e4d6a22eeec04d0d->enter($__internal_4731de7c0bd42d2ecba8dc4b425035d5075477dc90e3f734e4d6a22eeec04d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_37e9982900577143574aed305f421216e484febe091266e9587f76c56d86320b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37e9982900577143574aed305f421216e484febe091266e9587f76c56d86320b->enter($__internal_37e9982900577143574aed305f421216e484febe091266e9587f76c56d86320b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4731de7c0bd42d2ecba8dc4b425035d5075477dc90e3f734e4d6a22eeec04d0d->leave($__internal_4731de7c0bd42d2ecba8dc4b425035d5075477dc90e3f734e4d6a22eeec04d0d_prof);

        
        $__internal_37e9982900577143574aed305f421216e484febe091266e9587f76c56d86320b->leave($__internal_37e9982900577143574aed305f421216e484febe091266e9587f76c56d86320b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5d905c5edd1597b9169a5a2bc3c9eaf9b482d2d732ac0a00b397837ad739a6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5d905c5edd1597b9169a5a2bc3c9eaf9b482d2d732ac0a00b397837ad739a6b->enter($__internal_d5d905c5edd1597b9169a5a2bc3c9eaf9b482d2d732ac0a00b397837ad739a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f6d89dc16d424116c321efdbd53c13be60a885128b75f37816d2d5aea058bf55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d89dc16d424116c321efdbd53c13be60a885128b75f37816d2d5aea058bf55->enter($__internal_f6d89dc16d424116c321efdbd53c13be60a885128b75f37816d2d5aea058bf55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f6d89dc16d424116c321efdbd53c13be60a885128b75f37816d2d5aea058bf55->leave($__internal_f6d89dc16d424116c321efdbd53c13be60a885128b75f37816d2d5aea058bf55_prof);

        
        $__internal_d5d905c5edd1597b9169a5a2bc3c9eaf9b482d2d732ac0a00b397837ad739a6b->leave($__internal_d5d905c5edd1597b9169a5a2bc3c9eaf9b482d2d732ac0a00b397837ad739a6b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_573f4535e0a80796886b049e017431ac01c57b51ba2039a67485cd4534a82393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_573f4535e0a80796886b049e017431ac01c57b51ba2039a67485cd4534a82393->enter($__internal_573f4535e0a80796886b049e017431ac01c57b51ba2039a67485cd4534a82393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_170c0e89da967357056c9685b5ae225e45d06036ec8405b400e4a5d6c769bf30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_170c0e89da967357056c9685b5ae225e45d06036ec8405b400e4a5d6c769bf30->enter($__internal_170c0e89da967357056c9685b5ae225e45d06036ec8405b400e4a5d6c769bf30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_170c0e89da967357056c9685b5ae225e45d06036ec8405b400e4a5d6c769bf30->leave($__internal_170c0e89da967357056c9685b5ae225e45d06036ec8405b400e4a5d6c769bf30_prof);

        
        $__internal_573f4535e0a80796886b049e017431ac01c57b51ba2039a67485cd4534a82393->leave($__internal_573f4535e0a80796886b049e017431ac01c57b51ba2039a67485cd4534a82393_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
