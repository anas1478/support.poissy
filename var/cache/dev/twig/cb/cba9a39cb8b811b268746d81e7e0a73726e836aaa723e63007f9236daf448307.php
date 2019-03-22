<?php

/* MAPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_443075c212db8dfdf0221c368996d4d2f2df707ae58fabbb6ba41484863c16b7 extends Twig_Template
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
        $__internal_5c3d9cb66c4e0ffc524585388cfc732d84f79ea0af25b3f1ae243a9c7bfc0fbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c3d9cb66c4e0ffc524585388cfc732d84f79ea0af25b3f1ae243a9c7bfc0fbc->enter($__internal_5c3d9cb66c4e0ffc524585388cfc732d84f79ea0af25b3f1ae243a9c7bfc0fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAPlatformBundle:Advert:form.html.twig"));

        $__internal_a194a26fa135545fd369654322a266ca6d51c46f918349e6914871e0b19d5814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a194a26fa135545fd369654322a266ca6d51c46f918349e6914871e0b19d5814->enter($__internal_a194a26fa135545fd369654322a266ca6d51c46f918349e6914871e0b19d5814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAPlatformBundle:Advert:form.html.twig"));

        // line 1
        echo "<h3 class=\"btn btn-danger\">Formulaire d'annonce</h3>
";
        // line 3
        echo "
<div class=\"well\">
    Ici se trouvera le formulaire
</div>";
        
        $__internal_5c3d9cb66c4e0ffc524585388cfc732d84f79ea0af25b3f1ae243a9c7bfc0fbc->leave($__internal_5c3d9cb66c4e0ffc524585388cfc732d84f79ea0af25b3f1ae243a9c7bfc0fbc_prof);

        
        $__internal_a194a26fa135545fd369654322a266ca6d51c46f918349e6914871e0b19d5814->leave($__internal_a194a26fa135545fd369654322a266ca6d51c46f918349e6914871e0b19d5814_prof);

    }

    public function getTemplateName()
    {
        return "MAPlatformBundle:Advert:form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3 class=\"btn btn-danger\">Formulaire d'annonce</h3>
{##}

<div class=\"well\">
    Ici se trouvera le formulaire
</div>", "MAPlatformBundle:Advert:form.html.twig", "C:\\xampp\\htdocs\\Symfony\\src\\MA\\PlatformBundle/Resources/views/Advert/form.html.twig");
    }
}
