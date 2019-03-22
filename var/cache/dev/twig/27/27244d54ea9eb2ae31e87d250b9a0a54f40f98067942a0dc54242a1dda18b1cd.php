<?php

/* ::layout.html.twig */
class __TwigTemplate_3cf7a77228be831c8b0af35fda32e693819907275f859a78bac2c1c5cfdabbee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2284c0e651ba7609c0cde012993f9c168fdf4f91881abdc5eec5f0992c231a15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2284c0e651ba7609c0cde012993f9c168fdf4f91881abdc5eec5f0992c231a15->enter($__internal_2284c0e651ba7609c0cde012993f9c168fdf4f91881abdc5eec5f0992c231a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_bd4e2274ccbbdb80bfd3a1e9b082a88034db80c9693e6ac854abca6df9459578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd4e2274ccbbdb80bfd3a1e9b082a88034db80c9693e6ac854abca6df9459578->enter($__internal_bd4e2274ccbbdb80bfd3a1e9b082a88034db80c9693e6ac854abca6df9459578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

    <head>
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta charset=\"utf-8\">
        <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/yeti/bootstrap.min.css\"> 
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.0/css/all.css\" integrity=\"sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ\" crossorigin=\"anonymous\">
        ";
        // line 9
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <a class=\"navbar-brand\" href=\"#\">Navbar</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
            <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_platform_home");
        echo "\">Accueil <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_platform_add");
        echo "\">Ajouter une annonce <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"\">Supprimer une annonce <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"\">Modifier une annonce <span class=\"sr-only\">(current)</span></a>
            </li>
            </ul>
            <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
            <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
            </form>
        </div>
        </nav>

        <h4 class=\"text-center my-5\">Les mise a jour</h4>
        <div id=\"menu\">
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("MAPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
        </div>
        
        <div class=\"container my-5\">
            ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "        </div>
        
        

        ";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "    </body>
    <footer>
        
        <p class=\"text-center fixed-bottom bg-dark py-2 m-0 text-warning\">Cette application a ete developer par <span class=\"text-danger font-weight-bold\">Mohamed AAROUS</span> ";
        // line 59
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
    
    </footer>
</html>";
        
        $__internal_2284c0e651ba7609c0cde012993f9c168fdf4f91881abdc5eec5f0992c231a15->leave($__internal_2284c0e651ba7609c0cde012993f9c168fdf4f91881abdc5eec5f0992c231a15_prof);

        
        $__internal_bd4e2274ccbbdb80bfd3a1e9b082a88034db80c9693e6ac854abca6df9459578->leave($__internal_bd4e2274ccbbdb80bfd3a1e9b082a88034db80c9693e6ac854abca6df9459578_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c33131ac81a57d9cf97c59a12e1d3bc289f4dd1b7e144e4a29d8cd7fc38b70a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c33131ac81a57d9cf97c59a12e1d3bc289f4dd1b7e144e4a29d8cd7fc38b70a->enter($__internal_4c33131ac81a57d9cf97c59a12e1d3bc289f4dd1b7e144e4a29d8cd7fc38b70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_986ae269a93f6721ca43cb344b1fdd57c68fbb94ba55266130a0d58ce9d73bb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_986ae269a93f6721ca43cb344b1fdd57c68fbb94ba55266130a0d58ce9d73bb5->enter($__internal_986ae269a93f6721ca43cb344b1fdd57c68fbb94ba55266130a0d58ce9d73bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Ma platform ";
        
        $__internal_986ae269a93f6721ca43cb344b1fdd57c68fbb94ba55266130a0d58ce9d73bb5->leave($__internal_986ae269a93f6721ca43cb344b1fdd57c68fbb94ba55266130a0d58ce9d73bb5_prof);

        
        $__internal_4c33131ac81a57d9cf97c59a12e1d3bc289f4dd1b7e144e4a29d8cd7fc38b70a->leave($__internal_4c33131ac81a57d9cf97c59a12e1d3bc289f4dd1b7e144e4a29d8cd7fc38b70a_prof);

    }

    // line 9
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_f83fe74ed50d1a7f31c2341ccc41af9e97d9916a12816707880ad05488c087ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f83fe74ed50d1a7f31c2341ccc41af9e97d9916a12816707880ad05488c087ac->enter($__internal_f83fe74ed50d1a7f31c2341ccc41af9e97d9916a12816707880ad05488c087ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_b391366ee71c7d16dcb9e294321356bf5a002572618b1fac538b435afa900130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b391366ee71c7d16dcb9e294321356bf5a002572618b1fac538b435afa900130->enter($__internal_b391366ee71c7d16dcb9e294321356bf5a002572618b1fac538b435afa900130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        echo " 
        ";
        
        $__internal_b391366ee71c7d16dcb9e294321356bf5a002572618b1fac538b435afa900130->leave($__internal_b391366ee71c7d16dcb9e294321356bf5a002572618b1fac538b435afa900130_prof);

        
        $__internal_f83fe74ed50d1a7f31c2341ccc41af9e97d9916a12816707880ad05488c087ac->leave($__internal_f83fe74ed50d1a7f31c2341ccc41af9e97d9916a12816707880ad05488c087ac_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_4dcda7ccea0f25b61f3635e8bbf04198afeea6c86907b4864633db4f97b7406a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dcda7ccea0f25b61f3635e8bbf04198afeea6c86907b4864633db4f97b7406a->enter($__internal_4dcda7ccea0f25b61f3635e8bbf04198afeea6c86907b4864633db4f97b7406a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b99d6a2bffd2d1185d60366c646f5dd1dd9d35840e1fbfa69d9c38432b250677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99d6a2bffd2d1185d60366c646f5dd1dd9d35840e1fbfa69d9c38432b250677->enter($__internal_b99d6a2bffd2d1185d60366c646f5dd1dd9d35840e1fbfa69d9c38432b250677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_b99d6a2bffd2d1185d60366c646f5dd1dd9d35840e1fbfa69d9c38432b250677->leave($__internal_b99d6a2bffd2d1185d60366c646f5dd1dd9d35840e1fbfa69d9c38432b250677_prof);

        
        $__internal_4dcda7ccea0f25b61f3635e8bbf04198afeea6c86907b4864633db4f97b7406a->leave($__internal_4dcda7ccea0f25b61f3635e8bbf04198afeea6c86907b4864633db4f97b7406a_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d1c771171ad7fd19d51f9e76cc50a570fe14cb286c9a03dc7300f64449d126d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1c771171ad7fd19d51f9e76cc50a570fe14cb286c9a03dc7300f64449d126d9->enter($__internal_d1c771171ad7fd19d51f9e76cc50a570fe14cb286c9a03dc7300f64449d126d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d39bfe409a452d6d6cda8a1039b4504485f83812cf671de2b3c884b64417d36c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d39bfe409a452d6d6cda8a1039b4504485f83812cf671de2b3c884b64417d36c->enter($__internal_d39bfe409a452d6d6cda8a1039b4504485f83812cf671de2b3c884b64417d36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_d39bfe409a452d6d6cda8a1039b4504485f83812cf671de2b3c884b64417d36c->leave($__internal_d39bfe409a452d6d6cda8a1039b4504485f83812cf671de2b3c884b64417d36c_prof);

        
        $__internal_d1c771171ad7fd19d51f9e76cc50a570fe14cb286c9a03dc7300f64449d126d9->leave($__internal_d1c771171ad7fd19d51f9e76cc50a570fe14cb286c9a03dc7300f64449d126d9_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 52,  157 => 47,  138 => 9,  120 => 5,  106 => 59,  101 => 56,  99 => 52,  93 => 48,  91 => 47,  84 => 43,  63 => 25,  57 => 22,  44 => 11,  42 => 9,  35 => 5,  29 => 1,);
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
        <title>{% block title %} Ma platform {% endblock %}</title>
        <meta charset=\"utf-8\">
        <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/yeti/bootstrap.min.css\"> 
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.0/css/all.css\" integrity=\"sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ\" crossorigin=\"anonymous\">
        {% block stylesheet %} 
        {% endblock %}
    </head>
    <body>
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <a class=\"navbar-brand\" href=\"#\">Navbar</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
            <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{ path('ma_platform_home') }}\">Accueil <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('ma_platform_add') }}\">Ajouter une annonce <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"\">Supprimer une annonce <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"\">Modifier une annonce <span class=\"sr-only\">(current)</span></a>
            </li>
            </ul>
            <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
            <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
            </form>
        </div>
        </nav>

        <h4 class=\"text-center my-5\">Les mise a jour</h4>
        <div id=\"menu\">
            {{ render(controller(\"MAPlatformBundle:Advert:menu\", { 'limit': 3 })) }}
        </div>
        
        <div class=\"container my-5\">
            {% block body %} {% endblock %}
        </div>
        
        

        {% block javascripts %} 
            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        {% endblock %}
    </body>
    <footer>
        
        <p class=\"text-center fixed-bottom bg-dark py-2 m-0 text-warning\">Cette application a ete developer par <span class=\"text-danger font-weight-bold\">Mohamed AAROUS</span> {{'now' | date('Y')}}</p>
    
    </footer>
</html>", "::layout.html.twig", "C:\\xampp\\htdocs\\Symfony\\app/Resources\\views/layout.html.twig");
    }
}
