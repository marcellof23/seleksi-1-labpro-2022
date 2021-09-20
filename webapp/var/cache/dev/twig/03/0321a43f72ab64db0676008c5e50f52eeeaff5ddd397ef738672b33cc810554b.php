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

/* jury/partials/verify_form.html.twig */
class __TwigTemplate_c56414c381df6b3c8a0ddda272ba6d192869ecb6ce11d7884870453b7bfbbb93 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/verify_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/verify_form.html.twig"));

        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, (isset($context["form_action"]) || array_key_exists("form_action", $context) ? $context["form_action"] : (function () { throw new RuntimeError('Variable "form_action" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"verified\" value=\"";
        // line 2
        if (twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 2, $this->source); })()), "verified", [], "any", false, false, false, 2)) {
            echo "0";
        } else {
            echo "1";
        }
        echo "\"/>

    ";
        // line 5
        echo "    <p>
        ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 6, $this->source); })()), "html", null, true);
        echo ": <strong>";
        if (twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 6, $this->source); })()), "verified", [], "any", false, false, false, 6)) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</strong>";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 7, $this->source); })()), "verified", [], "any", false, false, false, 7) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 7, $this->source); })()), "juryMember", [], "any", false, false, false, 7)))) {
            // line 8
            echo ", by ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 8, $this->source); })()), "juryMember", [], "any", false, false, false, 8), "html", null, true);
            // line 9
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 9, $this->source); })()), "verifyComment", [], "any", false, false, false, 9))) {
                // line 10
                echo "                with comment \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 10, $this->source); })()), "verifyComment", [], "any", false, false, false, 10), "html", null, true);
                echo "\"";
            }
        }
        // line 13
        if ((isset($context["show_form"]) || array_key_exists("show_form", $context) ? $context["show_form"] : (function () { throw new RuntimeError('Variable "show_form" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "            <input type=\"submit\" value=\"";
            if (twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 14, $this->source); })()), "verified", [], "any", false, false, false, 14)) {
                echo "un";
            }
            echo "mark verified\"
                   class=\"btn btn-outline-secondary btn-sm\"/>

            ";
            // line 17
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 17, $this->source); })()), "verified", [], "any", false, false, false, 17)) {
                // line 18
                echo "                with comment
                <input type=\"text\" name=\"comment\" size=\"25\" class=\"form-control\" id=\"comment\"
                       style=\"display: inline; width: auto;\"/>
            ";
            }
            // line 22
            echo "
            ";
            // line 23
            if ((((isset($context["show_icat"]) || array_key_exists("show_icat", $context) ? $context["show_icat"] : (function () { throw new RuntimeError('Variable "show_icat" does not exist.', 23, $this->source); })()) &&  !(null === (isset($context["icat_url"]) || array_key_exists("icat_url", $context) ? $context["icat_url"] : (function () { throw new RuntimeError('Variable "icat_url" does not exist.', 23, $this->source); })()))) && twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 23, $this->source); })()), "contestProblem", [], "any", false, false, false, 23))) {
                // line 24
                echo "                <button class=\"btn btn-outline-secondary btn-sm\" id=\"post-to-icat\">
                    post to iCAT
                </button>
            ";
            }
            // line 28
            echo "        ";
        }
        // line 29
        echo "    </p>
</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/verify_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 29,  112 => 28,  106 => 24,  104 => 23,  101 => 22,  95 => 18,  93 => 17,  84 => 14,  82 => 13,  76 => 10,  74 => 9,  71 => 8,  69 => 7,  60 => 6,  57 => 5,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form action=\"{{ form_action }}\" method=\"post\">
    <input type=\"hidden\" name=\"verified\" value=\"{% if judging.verified %}0{% else %}1{% endif %}\"/>

    {# Display verification data: verified, by whom, and comment #}
    <p>
        {{ label }}: <strong>{% if judging.verified %}yes{% else %}no{% endif %}</strong>
        {%- if judging.verified and judging.juryMember is not empty -%}
            , by {{ judging.juryMember }}
            {%- if judging.verifyComment is not empty %}
                with comment \"{{ judging.verifyComment }}\"
            {%- endif -%}
        {%- endif -%}
        {% if show_form %}
            <input type=\"submit\" value=\"{% if judging.verified %}un{% endif %}mark verified\"
                   class=\"btn btn-outline-secondary btn-sm\"/>

            {% if not judging.verified %}
                with comment
                <input type=\"text\" name=\"comment\" size=\"25\" class=\"form-control\" id=\"comment\"
                       style=\"display: inline; width: auto;\"/>
            {% endif %}

            {% if show_icat and icat_url is not null and submission.contestProblem %}
                <button class=\"btn btn-outline-secondary btn-sm\" id=\"post-to-icat\">
                    post to iCAT
                </button>
            {% endif %}
        {% endif %}
    </p>
</form>
", "jury/partials/verify_form.html.twig", "/domjudge/webapp/templates/jury/partials/verify_form.html.twig");
    }
}
