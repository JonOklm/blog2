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

/* home/index.html.twig */
class __TwigTemplate_64ab36e6b7653b15e28c4f1f41290cff extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " Accueil";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class\"row mt-5 justify-content-center text-center\">
    <h1>Dernier article publié: </h1>

    <div class=\"col-4\">
        <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("imagesArticle/" . twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "image", [], "any", false, false, false, 10))), "html", null, true);
        echo "\" alt=\"\">
    </div>

    <div class=\"col-8\">
        <h3> ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "titre", [], "any", false, false, false, 14), "html", null, true);
        echo "</h3>
        <h6>crée le: ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "dateDeCreation", [], "any", false, false, false, 15), "d/m/Y à H\\hi"), "html", null, true);
        echo " </h6>
        ";
        // line 16
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "dateDeModification", [], "any", false, false, false, 16))) {
            // line 17
            echo "            <h6>dérnière modification: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "dateDeModification", [], "any", false, false, false, 17), "d/m/Y à H\\hi"), "html", null, true);
            echo " </h6>
        ";
        }
        // line 19
        echo "
        ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "auteur", [], "any", false, false, false, 20)) {
            // line 21
            echo "            <h4>écrit par: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "auteur", [], "any", false, false, false, 21), "fullName", [], "any", false, false, false, 21), "html", null, true);
            echo " </h4>
        ";
        } else {
            // line 23
            echo "            <h6 class=\"text-muted\">auteur anonyme</h6>
        ";
        }
        // line 25
        echo "        
        <p> ";
        // line 26
        echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "contenu", [], "any", false, false, false, 26), 0, 150);
        echo "<a href=\"\">...lire la suite</a></p>
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 26,  103 => 25,  99 => 23,  93 => 21,  91 => 20,  88 => 19,  82 => 17,  80 => 16,  76 => 15,  72 => 14,  65 => 10,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "C:\\Users\\madou\\OneDrive\\Bureau\\SYMFONY\\blog2\\templates\\home\\index.html.twig");
    }
}
