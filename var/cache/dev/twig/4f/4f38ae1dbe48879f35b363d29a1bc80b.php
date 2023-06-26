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

/* auteur/unAuteur.html.twig */
class __TwigTemplate_7cd9f6b9ac17c5c4519f3c2ab03742bb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auteur/unAuteur.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "auteur/unAuteur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " fiche auteur";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h2>";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["auteur"]) || array_key_exists("auteur", $context) ? $context["auteur"] : (function () { throw new RuntimeError('Variable "auteur" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["auteur"]) || array_key_exists("auteur", $context) ? $context["auteur"] : (function () { throw new RuntimeError('Variable "auteur" does not exist.', 6, $this->source); })()), "prenom", [], "any", false, false, false, 6)), "html", null, true);
        echo "</h2>
    <h5>né(e) le : ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["auteur"]) || array_key_exists("auteur", $context) ? $context["auteur"] : (function () { throw new RuntimeError('Variable "auteur" does not exist.', 7, $this->source); })()), "dateDeNaissance", [], "any", false, false, false, 7), "d-m-Y"), "html", null, true);
        echo "</h5>
    <div clas=\"row justify-content-center\">
        <div class=\"col-offset-2 col-8\">
            <p>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["auteur"]) || array_key_exists("auteur", $context) ? $context["auteur"] : (function () { throw new RuntimeError('Variable "auteur" does not exist.', 10, $this->source); })()), "biographie", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "auteur/unAuteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 10,  78 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block title %} fiche auteur{% endblock %}

{% block content %}
    <h2>{{ auteur.nom ~ ' ' ~ auteur.prenom }}</h2>
    <h5>né(e) le : {{ auteur.dateDeNaissance | date('d-m-Y') }}</h5>
    <div clas=\"row justify-content-center\">
        <div class=\"col-offset-2 col-8\">
            <p>{{ auteur.biographie }}</p>
        </div>
    </div>
{% endblock %}", "auteur/unAuteur.html.twig", "C:\\Users\\madou\\OneDrive\\Bureau\\SYMFONY\\blog2\\templates\\auteur\\unAuteur.html.twig");
    }
}
