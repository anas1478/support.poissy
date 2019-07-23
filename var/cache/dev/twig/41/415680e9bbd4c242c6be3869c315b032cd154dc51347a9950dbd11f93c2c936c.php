<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_a5ffce4b7fd410af4981e8bbd26069d8f82fcbe8fa204869da17ccbc7fbe38b4 extends Twig_Template
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
        $__internal_7b756295b442ce46e9892a74ca1604592b8d0090555073e94875fe5dcadc8eb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b756295b442ce46e9892a74ca1604592b8d0090555073e94875fe5dcadc8eb5->enter($__internal_7b756295b442ce46e9892a74ca1604592b8d0090555073e94875fe5dcadc8eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_39a974cd65bd5bbd675e57bb5c7013733ef2ee785e8d8b684cf4aa1330f20150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a974cd65bd5bbd675e57bb5c7013733ef2ee785e8d8b684cf4aa1330f20150->enter($__internal_39a974cd65bd5bbd675e57bb5c7013733ef2ee785e8d8b684cf4aa1330f20150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_7b756295b442ce46e9892a74ca1604592b8d0090555073e94875fe5dcadc8eb5->leave($__internal_7b756295b442ce46e9892a74ca1604592b8d0090555073e94875fe5dcadc8eb5_prof);

        
        $__internal_39a974cd65bd5bbd675e57bb5c7013733ef2ee785e8d8b684cf4aa1330f20150->leave($__internal_39a974cd65bd5bbd675e57bb5c7013733ef2ee785e8d8b684cf4aa1330f20150_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
