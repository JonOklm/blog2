<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* statique/devenirBlogueur.html.twig */
class __TwigTemplate_726326619898e2a9307f214e3ed705d3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "statique/devenirBlogueur.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "statique/devenirBlogueur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"page-statique\">
        <h2>Devenez notre nouveau bloggueur vedette !</h2>
        <br>
        <h3>
            Du talent, de la verve et beaucoup de temps à perdre ?
        </h3>
        <p>
            rejoints-nous, genre de suite, en téléphonnant au :
        </p>
        <h2>
            36 15 MonBlog *
        </h2>
        <p class=\"nasty-conditions\">
            * 3€60 à la connexion puis 5€20 /30 sec. Facturation dès la première seconde
        </p>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "statique/devenirBlogueur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block content%}
    <div class=\"page-statique\">
        <h2>Devenez notre nouveau bloggueur vedette !</h2>
        <br>
        <h3>
            Du talent, de la verve et beaucoup de temps à perdre ?
        </h3>
        <p>
            rejoints-nous, genre de suite, en téléphonnant au :
        </p>
        <h2>
            36 15 MonBlog *
        </h2>
        <p class=\"nasty-conditions\">
            * 3€60 à la connexion puis 5€20 /30 sec. Facturation dès la première seconde
        </p>
    </div>

{% endblock%}", "statique/devenirBlogueur.html.twig", "C:\\Users\\madou\\OneDrive\\Bureau\\SYMFONY\\blog2\\templates\\statique\\devenirBlogueur.html.twig");
    }
}
