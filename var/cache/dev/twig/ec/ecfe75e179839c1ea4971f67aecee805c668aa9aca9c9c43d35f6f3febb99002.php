<?php

/* MAPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_bcb4966ffc3a1026e565eac2e80532dcb0633939ab92be02327937ce64c7e8d7 extends Twig_Template
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
        $__internal_91336a115d528a5cf1d237a7259039fcd085fe9a90fc479942c57c75efab82df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91336a115d528a5cf1d237a7259039fcd085fe9a90fc479942c57c75efab82df->enter($__internal_91336a115d528a5cf1d237a7259039fcd085fe9a90fc479942c57c75efab82df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAPlatformBundle:Advert:menu.html.twig"));

        $__internal_429d6c5159e33c1e97e49738ee9d1587d99023c4848447bac511b63611ea9c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429d6c5159e33c1e97e49738ee9d1587d99023c4848447bac511b63611ea9c0f->enter($__internal_429d6c5159e33c1e97e49738ee9d1587d99023c4848447bac511b63611ea9c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAPlatformBundle:Advert:menu.html.twig"));

        // line 2
        echo "
<table class=\"table table-hover container\">
  <tbody>
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listAdverts"] ?? $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 6
            echo "    <tr class=\"table-active\">
      <td><a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "</a></td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "  </tbody>
</table> ";
        
        $__internal_91336a115d528a5cf1d237a7259039fcd085fe9a90fc479942c57c75efab82df->leave($__internal_91336a115d528a5cf1d237a7259039fcd085fe9a90fc479942c57c75efab82df_prof);

        
        $__internal_429d6c5159e33c1e97e49738ee9d1587d99023c4848447bac511b63611ea9c0f->leave($__internal_429d6c5159e33c1e97e49738ee9d1587d99023c4848447bac511b63611ea9c0f_prof);

    }

    public function getTemplateName()
    {
        return "MAPlatformBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  37 => 7,  34 => 6,  30 => 5,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# {% extends \"MAPlatformBundle::layout.html.twig\" %} #}

<table class=\"table table-hover container\">
  <tbody>
  {% for advert in listAdverts %}
    <tr class=\"table-active\">
      <td><a href=\"{{ path('ma_platform_view', {'id': advert.id}) }}\">{{advert.title}}</a></td>
    </tr>
  {% endfor %}
  </tbody>
</table> ", "MAPlatformBundle:Advert:menu.html.twig", "C:\\xampp\\htdocs\\Symfony\\src\\MA\\PlatformBundle/Resources/views/Advert/menu.html.twig");
    }
}
