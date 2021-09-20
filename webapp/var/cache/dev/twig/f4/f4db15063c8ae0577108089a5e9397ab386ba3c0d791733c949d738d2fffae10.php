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

/* jury/partials/clarification_list.html.twig */
class __TwigTemplate_f1f2be507da0c51d3328a953ca6f5322e877141d18c8b97df49a49cdb537a43c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/clarification_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/clarification_list.html.twig"));

        // line 1
        echo "<div class=\"table-wrapper\">
<table class=\"data-table table table-striped table-hover table-sm\" style=\"width:auto\">
    <thead>
    <tr>
        <th scope=\"col\">ID</th>
        ";
        // line 6
        if ((isset($context["showExternalId"]) || array_key_exists("showExternalId", $context) ? $context["showExternalId"] : (function () { throw new RuntimeError('Variable "showExternalId" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "            <th scope=\"col\">external ID</th>
        ";
        }
        // line 9
        if ((twig_length_filter($this->env, (isset($context["current_contests"]) || array_key_exists("current_contests", $context) ? $context["current_contests"] : (function () { throw new RuntimeError('Variable "current_contests" does not exist.', 9, $this->source); })())) > 1)) {
            // line 10
            echo "
            <th scope=\"col\">contest</th>";
        }
        // line 13
        echo "
        <th scope=\"col\">time</th>
        <th scope=\"col\">from</th>
        <th scope=\"col\">to</th>
        <th scope=\"col\">subject</th>

        <th scope=\"col\">text</th>
        <th scope=\"col\">state</th>
        <th scope=\"col\">who</th>
        ";
        // line 22
        if ((twig_length_filter($this->env, (isset($context["queues"]) || array_key_exists("queues", $context) ? $context["queues"] : (function () { throw new RuntimeError('Variable "queues" does not exist.', 22, $this->source); })())) > 1)) {
            // line 23
            echo "             <th scope=\"col\">queue</th>
        ";
        }
        // line 25
        echo "    </tr>
    </thead>
    <tbody>";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clarifications"]) || array_key_exists("clarifications", $context) ? $context["clarifications"] : (function () { throw new RuntimeError('Variable "clarifications" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["clarification"]) {
            // line 29
            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification", ["id" => twig_get_attribute($this->env, $this->source, $context["clarification"], "clarid", [], "any", false, false, false, 29)]);
            // line 30
            echo "
        <tr>
            <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 32, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "clarid", [], "any", false, false, false, 32), "html", null, true);
            echo "</a></td>
            ";
            // line 33
            if ((isset($context["showExternalId"]) || array_key_exists("showExternalId", $context) ? $context["showExternalId"] : (function () { throw new RuntimeError('Variable "showExternalId" does not exist.', 33, $this->source); })())) {
                // line 34
                echo "                <td><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 34, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "externalid", [], "any", false, false, false, 34), "html", null, true);
                echo "</a></td>
            ";
            }
            // line 36
            if ((twig_length_filter($this->env, (isset($context["current_contests"]) || array_key_exists("current_contests", $context) ? $context["current_contests"] : (function () { throw new RuntimeError('Variable "current_contests" does not exist.', 36, $this->source); })())) > 1)) {
                // line 37
                echo "
                <td><a href=\"";
                // line 38
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 38, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "contest", [], "any", false, false, false, 38), "shortname", [], "any", false, false, false, 38), "html", null, true);
                echo "</a></td>";
            }
            // line 40
            echo "
            <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["clarification"], "submittime", [], "any", false, false, false, 41), null, twig_get_attribute($this->env, $this->source, $context["clarification"], "contest", [], "any", false, false, false, 41)), "html", null, true);
            echo "</a></td>";
            // line 42
            if ((null === twig_get_attribute($this->env, $this->source, $context["clarification"], "sender", [], "any", false, false, false, 42))) {
                // line 43
                $context["sender"] = "Jury";
                // line 44
                if ((null === twig_get_attribute($this->env, $this->source, $context["clarification"], "recipient", [], "any", false, false, false, 44))) {
                    // line 45
                    $context["recipient"] = "All";
                } else {
                    // line 47
                    $context["recipient"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "recipient", [], "any", false, false, false, 47), "effectiveName", [], "any", false, false, false, 47);
                }
            } else {
                // line 50
                $context["recipient"] = "Jury";
                // line 51
                $context["sender"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "sender", [], "any", false, false, false, 51), "effectiveName", [], "any", false, false, false, 51);
            }
            // line 53
            echo "
            <td><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 54, $this->source); })()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["sender"]) || array_key_exists("sender", $context) ? $context["sender"] : (function () { throw new RuntimeError('Variable "sender" does not exist.', 54, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, (isset($context["sender"]) || array_key_exists("sender", $context) ? $context["sender"] : (function () { throw new RuntimeError('Variable "sender" does not exist.', 54, $this->source); })()), 30), "html", null, true);
            echo "</a></td>
            <td><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 55, $this->source); })()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["recipient"]) || array_key_exists("recipient", $context) ? $context["recipient"] : (function () { throw new RuntimeError('Variable "recipient" does not exist.', 55, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, (isset($context["recipient"]) || array_key_exists("recipient", $context) ? $context["recipient"] : (function () { throw new RuntimeError('Variable "recipient" does not exist.', 55, $this->source); })()), 30), "html", null, true);
            echo "</a></td>
            <td><a href=\"";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 56, $this->source); })()), "html", null, true);
            echo "\">";
            // line 57
            if (twig_get_attribute($this->env, $this->source, $context["clarification"], "problem", [], "any", false, false, false, 57)) {
                // line 58
                echo "problem ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "problem", [], "any", false, false, false, 58), "contestProblems", [], "any", false, false, false, 58), "first", [], "any", false, false, false, 58), "shortname", [], "any", false, false, false, 58), "html", null, true);
            } elseif (twig_get_attribute($this->env, $this->source,             // line 59
$context["clarification"], "category", [], "any", false, false, false, 59)) {
                // line 60
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), twig_get_attribute($this->env, $this->source, $context["clarification"], "category", [], "any", false, false, false, 60), [], "array", true, true, false, 60)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), twig_get_attribute($this->env, $this->source, $context["clarification"], "category", [], "any", false, false, false, 60), [], "array", false, false, false, 60), "general")) : ("general")), "html", null, true);
            } else {
                // line 62
                echo "general";
            }
            // line 64
            echo "</a></td>

            <td><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 66, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "summary", [], "any", false, false, false, 66), "html", null, true);
            echo "</a></td>";
            // line 67
            $context["claim"] = false;
            // line 68
            if (twig_get_attribute($this->env, $this->source, $context["clarification"], "answered", [], "any", false, false, false, 68)) {
                // line 69
                $context["answered"] = "<i class=\"fas fa-check\" title=\"is answered\"></i>";
            } else {
                // line 71
                $context["answered"] = "<i class=\"fas fa-times\" title=\"not answered\"></i>";
                // line 72
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["clarification"], "juryMember", [], "any", false, false, false, 72))) {
                    // line 73
                    $context["claim"] = "yes";
                } else {
                    // line 75
                    $context["answered"] = "<i class=\"fas fa-user-lock\" title=\"claimed\"></i>";
                }
            }
            // line 78
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["clarification"], "juryMember", [], "any", false, false, false, 78))) {
                // line 79
                $context["juryMember"] = "&nbsp;";
            } else {
                // line 81
                $context["juryMember"] = twig_get_attribute($this->env, $this->source, $context["clarification"], "juryMember", [], "any", false, false, false, 81);
            }
            // line 83
            echo "
            <td><a href=\"";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 84, $this->source); })()), "html", null, true);
            echo "\">";
            echo (isset($context["answered"]) || array_key_exists("answered", $context) ? $context["answered"] : (function () { throw new RuntimeError('Variable "answered" does not exist.', 84, $this->source); })());
            echo "</a></td>
            <td><form action=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_claim", ["clarId" => twig_get_attribute($this->env, $this->source, $context["clarification"], "clarid", [], "any", false, false, false, 85)]), "html", null, true);
            echo "\" method=\"post\" class=\"form-inline\">";
            // line 86
            if (((isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 86, $this->source); })()) && twig_get_attribute($this->env, $this->source, $context["clarification"], "sender", [], "any", false, false, false, 86))) {
                // line 87
                echo "<button name=\"claimed\" value=\"1\"
                       class=\"btn btn-outline-success btn-sm\">Claim</button>";
            } elseif (( !twig_get_attribute($this->env, $this->source,             // line 89
$context["clarification"], "answered", [], "any", false, false, false, 89) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89), "username", [], "any", false, false, false, 89) == (isset($context["juryMember"]) || array_key_exists("juryMember", $context) ? $context["juryMember"] : (function () { throw new RuntimeError('Variable "juryMember" does not exist.', 89, $this->source); })())))) {
                // line 90
                echo "                    <button name=\"claimed\" value=\"0\"
                       class=\"btn btn-outline-success btn-sm\">Unclaim</button>";
            } else {
                // line 93
                echo "<a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 93, $this->source); })()), "html", null, true);
                echo "\">";
                echo (isset($context["juryMember"]) || array_key_exists("juryMember", $context) ? $context["juryMember"] : (function () { throw new RuntimeError('Variable "juryMember" does not exist.', 93, $this->source); })());
                echo "</a>";
            }
            // line 95
            echo "</form>
            </td>
";
            // line 97
            if ((twig_length_filter($this->env, (isset($context["queues"]) || array_key_exists("queues", $context) ? $context["queues"] : (function () { throw new RuntimeError('Variable "queues" does not exist.', 97, $this->source); })())) > 1)) {
                // line 98
                echo "            <td data-search=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["queues"] ?? null), twig_get_attribute($this->env, $this->source, $context["clarification"], "queue", [], "any", false, false, false, 98), [], "array", true, true, false, 98)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["queues"] ?? null), twig_get_attribute($this->env, $this->source, $context["clarification"], "queue", [], "any", false, false, false, 98), [], "array", false, false, false, 98), "")) : ("")), "html", null, true);
                echo "\">
            <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                 <div class=\"input-group-prepend\"><div class=\"input-group-text\" id=\"qig";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "clarid", [], "any", false, false, false, 100), "html", null, true);
                echo "\"><i class=\"fab fa-quora\"></i></div></div>
                 ";
                // line 101
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["queues"]) || array_key_exists("queues", $context) ? $context["queues"] : (function () { throw new RuntimeError('Variable "queues" does not exist.', 101, $this->source); })()));
                foreach ($context['_seq'] as $context["qk"] => $context["qv"]) {
                    // line 102
                    echo "                 <label class=\"btn btn-sm btn-outline-secondary";
                    if (($context["qk"] == twig_get_attribute($this->env, $this->source, $context["clarification"], "queue", [], "any", false, false, false, 102))) {
                        echo " active";
                    }
                    echo "\">
                 <input class=\"qbut\" type=\"radio\" name=\"queue[";
                    // line 103
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "clarid", [], "any", false, false, false, 103), "html", null, true);
                    echo "]\" data-clarid=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "clarid", [], "any", false, false, false, 103), "html", null, true);
                    echo "\" id=\"q_";
                    echo twig_escape_filter($this->env, $context["qk"], "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $context["qk"], "html", null, true);
                    echo "\" autocomplete=\"off\"";
                    if (($context["qk"] == twig_get_attribute($this->env, $this->source, $context["clarification"], "queue", [], "any", false, false, false, 103))) {
                        echo " checked";
                    }
                    echo "> ";
                    echo twig_escape_filter($this->env, $context["qv"], "html", null, true);
                    echo "
                 </label>
                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['qk'], $context['qv'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                echo "            </div>
            </td>
";
            }
            // line 109
            echo "        </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clarification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "
    </tbody>
</table>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/clarification_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 111,  299 => 109,  294 => 106,  273 => 103,  266 => 102,  262 => 101,  258 => 100,  252 => 98,  250 => 97,  246 => 95,  239 => 93,  235 => 90,  233 => 89,  230 => 87,  228 => 86,  225 => 85,  219 => 84,  216 => 83,  213 => 81,  210 => 79,  208 => 78,  204 => 75,  201 => 73,  199 => 72,  197 => 71,  194 => 69,  192 => 68,  190 => 67,  185 => 66,  181 => 64,  178 => 62,  175 => 60,  173 => 59,  170 => 58,  168 => 57,  165 => 56,  157 => 55,  149 => 54,  146 => 53,  143 => 51,  141 => 50,  137 => 47,  134 => 45,  132 => 44,  130 => 43,  128 => 42,  123 => 41,  120 => 40,  114 => 38,  111 => 37,  109 => 36,  101 => 34,  99 => 33,  93 => 32,  89 => 30,  87 => 29,  83 => 28,  79 => 25,  75 => 23,  73 => 22,  62 => 13,  58 => 10,  56 => 9,  52 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"table-wrapper\">
<table class=\"data-table table table-striped table-hover table-sm\" style=\"width:auto\">
    <thead>
    <tr>
        <th scope=\"col\">ID</th>
        {% if showExternalId %}
            <th scope=\"col\">external ID</th>
        {% endif %}
        {%- if current_contests | length > 1 %}

            <th scope=\"col\">contest</th>
        {%- endif %}

        <th scope=\"col\">time</th>
        <th scope=\"col\">from</th>
        <th scope=\"col\">to</th>
        <th scope=\"col\">subject</th>

        <th scope=\"col\">text</th>
        <th scope=\"col\">state</th>
        <th scope=\"col\">who</th>
        {% if queues | length > 1 %}
             <th scope=\"col\">queue</th>
        {% endif %}
    </tr>
    </thead>
    <tbody>
    {%- for clarification in clarifications %}
        {%- set link = path('jury_clarification', {id: clarification.clarid}) %}

        <tr>
            <td><a href=\"{{ link }}\">{{ clarification.clarid }}</a></td>
            {% if showExternalId %}
                <td><a href=\"{{ link }}\">{{ clarification.externalid }}</a></td>
            {% endif %}
            {%- if current_contests | length > 1 %}

                <td><a href=\"{{ link }}\">{{ clarification.contest.shortname }}</a></td>
            {%- endif %}

            <td><a href=\"{{ link }}\">{{ clarification.submittime | printtime(null, clarification.contest) }}</a></td>
            {%- if clarification.sender is null %}
                {%- set sender = 'Jury' %}
                {%- if clarification.recipient is null %}
                    {%- set recipient = 'All' %}
                {%- else %}
                    {%- set recipient = clarification.recipient.effectiveName %}
                {%- endif %}
            {%- else %}
                {%- set recipient = 'Jury' %}
                {%- set sender = clarification.sender.effectiveName %}
            {%- endif %}

            <td><a href=\"{{ link }}\" title=\"{{ sender }}\">{{ sender | truncate(30) }}</a></td>
            <td><a href=\"{{ link }}\" title=\"{{ recipient }}\">{{ recipient | truncate(30) }}</a></td>
            <td><a href=\"{{ link }}\">
                    {%- if clarification.problem -%}
                        problem {{ clarification.problem.contestProblems.first.shortname -}}
                    {%- elseif clarification.category -%}
                        {{- categories[clarification.category]|default('general') -}}
                    {%- else -%}
                        general
                    {%- endif -%}
            </a></td>

            <td><a href=\"{{ link }}\">{{ clarification.summary }}</a></td>
            {%- set claim = false %}
            {%- if clarification.answered %}
                {%- set answered = '<i class=\"fas fa-check\" title=\"is answered\"></i>' %}
            {%- else %}
                {%- set answered = '<i class=\"fas fa-times\" title=\"not answered\"></i>' %}
                {%- if clarification.juryMember is empty %}
                    {%- set claim = 'yes' %}
                {%- else %}
                    {%- set answered = '<i class=\"fas fa-user-lock\" title=\"claimed\"></i>' %}
                {%- endif %}
            {%- endif %}
            {%- if clarification.juryMember is empty %}
                {%- set juryMember = '&nbsp;' %}
            {%- else %}
                {%- set juryMember = clarification.juryMember %}
            {%- endif %}

            <td><a href=\"{{ link }}\">{{ answered | raw }}</a></td>
            <td><form action=\"{{ path('jury_clarification_claim', {clarId: clarification.clarid}) }}\" method=\"post\" class=\"form-inline\">
                {%- if claim and clarification.sender -%}
                    <button name=\"claimed\" value=\"1\"
                       class=\"btn btn-outline-success btn-sm\">Claim</button>
                {%- elseif not clarification.answered and app.user.username == juryMember %}
                    <button name=\"claimed\" value=\"0\"
                       class=\"btn btn-outline-success btn-sm\">Unclaim</button>
                {%- else -%}
                    <a href=\"{{ link }}\">{{ juryMember | raw }}</a>
                {%- endif -%}
\t\t</form>
            </td>
{% if queues | length > 1 %}
            <td data-search=\"{{ queues[clarification.queue]|default('') }}\">
            <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                 <div class=\"input-group-prepend\"><div class=\"input-group-text\" id=\"qig{{clarification.clarid}}\"><i class=\"fab fa-quora\"></i></div></div>
                 {% for qk,qv in queues %}
                 <label class=\"btn btn-sm btn-outline-secondary{% if qk == clarification.queue %} active{% endif %}\">
                 <input class=\"qbut\" type=\"radio\" name=\"queue[{{ clarification.clarid }}]\" data-clarid=\"{{ clarification.clarid }}\" id=\"q_{{ qk }}\" value=\"{{ qk }}\" autocomplete=\"off\"{% if qk == clarification.queue %} checked{% endif %}> {{ qv }}
                 </label>
                 {% endfor %}
            </div>
            </td>
{% endif %}
        </tr>
    {%- endfor %}

    </tbody>
</table>
</div>
", "jury/partials/clarification_list.html.twig", "/domjudge/webapp/templates/jury/partials/clarification_list.html.twig");
    }
}
