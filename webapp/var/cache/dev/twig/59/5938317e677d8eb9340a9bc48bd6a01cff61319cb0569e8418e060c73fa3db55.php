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

/* jury/tsv/accounts.tsv.twig */
class __TwigTemplate_a77f96dcb8e1a6f296da2ce93f3ed43e7f7d4987800e3ea1aa555fae45bdc638 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/tsv/accounts.tsv.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/tsv/accounts.tsv.twig"));

        // line 1
        echo "accounts\t1
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->toTsvField(twig_get_attribute($this->env, $this->source, $context["row"], "type", [], "any", false, false, false, 3)), "html", null, true);
            echo "\t";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->toTsvField(twig_get_attribute($this->env, $this->source, $context["row"], "fullname", [], "any", false, false, false, 3)), "html", null, true);
            echo "\t";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->toTsvField(twig_get_attribute($this->env, $this->source, $context["row"], "username", [], "any", false, false, false, 3)), "html", null, true);
            echo "\t";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->toTsvField(twig_get_attribute($this->env, $this->source, $context["row"], "password", [], "any", false, false, false, 3)), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "jury/tsv/accounts.tsv.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("accounts\t1
{% for row in data %}
{{ row.type|tsvField }}\t{{ row.fullname|tsvField }}\t{{ row.username|tsvField }}\t{{ row.password|tsvField }}
{% endfor %}
", "jury/tsv/accounts.tsv.twig", "/domjudge/webapp/templates/jury/tsv/accounts.tsv.twig");
    }
}
