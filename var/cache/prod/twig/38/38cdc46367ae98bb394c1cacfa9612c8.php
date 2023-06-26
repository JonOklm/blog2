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

/* article/unArticle.html.twig */
class __TwigTemplate_69f33fa201ad13670022e7069b46ece8 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "article/unArticle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " page article ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_modifier", ["id" => twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 7)]), "html", null, true);
        echo "\">Modifier</a>
    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_supprimer", ["id" => twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 8)]), "html", null, true);
        echo "\">Supprimer</a>

    <div class=\"justify-content-center text-center mt-5\">


        <img class=\"img-fluid\" width=\"50%\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("imagesArticle/" . twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "image", [], "any", false, false, false, 13))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "titre", [], "any", false, false, false, 13), "html", null, true);
        echo "\">
        <h2> ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "titre", [], "any", false, false, false, 14), "html", null, true);
        echo " </h2>
        ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "auteur", [], "any", false, false, false, 15)) {
            // line 16
            echo "            <h4>écrit par: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "auteur", [], "any", false, false, false, 16), "fullName", [], "any", false, false, false, 16), "html", null, true);
            echo " </h4>
        ";
        } else {
            // line 18
            echo "            <h6 class=\"text-muted\">auteur anonyme</h6>
        ";
        }
        // line 20
        echo "        <h6 class=\"text-muted\"> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "dateDeCreation", [], "any", false, false, false, 20), "d/m/Y à H\\hi"), "html", null, true);
        echo " </h6>

        ";
        // line 22
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "dateDeModification", [], "any", false, false, false, 22))) {
            // line 23
            echo "        <h6 class=\"text-muted\"> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "dateDeModification", [], "any", false, false, false, 23), "d/m/Y à H\\hi"), "html", null, true);
            echo " </h6>
        ";
        }
        // line 25
        echo "        <p> ";
        echo twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "contenu", [], "any", false, false, false, 25);
        echo "</p>
    </div>

    <hr>
    <div>
        <h3>commentaires</h3>
        ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formCommentaire"] ?? null), 'form');
        echo "
    </div>

    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commentaires"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 35
            echo "        <div class=\"border border-primary rounded container mb-2\">
            <h6 class=\"text-muted\">écrit par : toto</h6>
            <h6 class=\"text-muted\">le : ";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "dateDeCreation", [], "any", false, false, false, 37), "d-m-Y à H\\hi"), "html", null, true);
            echo "</h6>
            <p>";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["commentaire"], "contenu", [], "any", false, false, false, 38);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
";
    }

    public function getTemplateName()
    {
        return "article/unArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 41,  139 => 38,  135 => 37,  131 => 35,  127 => 34,  121 => 31,  111 => 25,  105 => 23,  103 => 22,  97 => 20,  93 => 18,  87 => 16,  85 => 15,  81 => 14,  75 => 13,  67 => 8,  63 => 7,  60 => 6,  56 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "article/unArticle.html.twig", "C:\\Users\\madou\\OneDrive\\Bureau\\SYMFONY\\blog2\\templates\\article\\unArticle.html.twig");
    }
}
