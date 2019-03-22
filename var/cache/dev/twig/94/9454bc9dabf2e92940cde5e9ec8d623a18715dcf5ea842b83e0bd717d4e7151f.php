<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_ca173aa3eac73be83cf53a89a479f4e1e3d25d338ffa6352399ff879fb1c42a3 extends Twig_Template
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
        $__internal_88e6ea94bb7ec7f4fecb9df26e33105c0fc1ec02eeceda8656a394979e4044fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88e6ea94bb7ec7f4fecb9df26e33105c0fc1ec02eeceda8656a394979e4044fc->enter($__internal_88e6ea94bb7ec7f4fecb9df26e33105c0fc1ec02eeceda8656a394979e4044fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_e98d5cbf569ad9f505bfaa8c8af4a03ac31877775416af742648e0ae0935b8e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e98d5cbf569ad9f505bfaa8c8af4a03ac31877775416af742648e0ae0935b8e4->enter($__internal_e98d5cbf569ad9f505bfaa8c8af4a03ac31877775416af742648e0ae0935b8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_88e6ea94bb7ec7f4fecb9df26e33105c0fc1ec02eeceda8656a394979e4044fc->leave($__internal_88e6ea94bb7ec7f4fecb9df26e33105c0fc1ec02eeceda8656a394979e4044fc_prof);

        
        $__internal_e98d5cbf569ad9f505bfaa8c8af4a03ac31877775416af742648e0ae0935b8e4->leave($__internal_e98d5cbf569ad9f505bfaa8c8af4a03ac31877775416af742648e0ae0935b8e4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
