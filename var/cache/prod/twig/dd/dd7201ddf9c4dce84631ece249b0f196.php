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
class __TwigTemplate_979c9c29173302612bff20d774b96bfe extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "auteur/unAuteur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " fiche auteur";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h2>";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["auteur"] ?? null), "nom", [], "any", false, false, false, 6) . " ") . twig_get_attribute($this->env, $this->source, ($context["auteur"] ?? null), "prenom", [], "any", false, false, false, 6)), "html", null, true);
        echo "</h2>
    <h5>né(e) le : ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auteur"] ?? null), "dateDeNaissance", [], "any", false, false, false, 7), "d-m-Y"), "html", null, true);
        echo "</h5>
    <div clas=\"row justify-content-center\">
        <div class=\"col-offset-2 col-8\">
            <p>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auteur"] ?? null), "biographie", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
        </div>
    </div>
";
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
        return array (  69 => 10,  63 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "auteur/unAuteur.html.twig", "C:\\Users\\madou\\OneDrive\\Bureau\\SYMFONY\\blog2\\templates\\auteur\\unAuteur.html.twig");
    }
}
