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

/* jury/analysis/contest_overview.html.twig */
class __TwigTemplate_61da6d1058b39b87f41eefb73ab49acc979c2f5b119d08c8497eaba5c04745a6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'extrahead' => [$this, 'block_extrahead'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "jury/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/analysis/contest_overview.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/analysis/contest_overview.html.twig"));

        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/analysis/contest_overview.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Analysis - Contest";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        // line 6
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nv.d3.min.css"), "html", null, true);
        echo "\">
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/d3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/nv.d3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/FileSaver.min.js"), "html", null, true);
        echo "\"></script>
<style>
.clickable-row:hover {
  cursor: pointer;
}
.card-body.tablecard{
  overflow-y: auto;
  height: 500px;
  max-height: 500px;
}
.truncate {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
</style>
<script>
\$(function() {
    \$(\".clickable-row\").click(function() {
        window.location = \$(this).data(\"href\");
    });
    \$('[data-toggle=\"popover\"]').popover({
      trigger: 'hover',
      html: true
    })
})
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-12 mt-3\">
      <h1>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 42, $this->source); })()), "name", [], "any", false, false, false, 42), "html", null, true);
        echo "</h1>
      ";
        // line 43
        $this->loadTemplate("jury/partials/analysis_filter.html.twig", "jury/analysis/contest_overview.html.twig", 43)->display($context);
        // line 44
        echo "    </div>
    <div class=\"col-md-3 mt-3\">
      <div class=\"card\">
        <div class=\"card-header\">
          Contest Stats
        </div>
        <div class=\"card-body\">
          <abbr data-toggle=\"popover\" data-placement=\"bottom\" title=\"Misery Index\" data-content=\"
            This is a measure of how 'bored' contestants are. It is the average number of
            people-minutes spent fruitlessly trying to solve problems at the end of the contest.
            <br>
            Calculated as:<br>
            average across all teams of [3 people x (number of minutes elapsed - minute last problem solved by team t)]
          \">Misery index</abbr>: ";
        // line 57
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 57, $this->source); })()), "misery_index", [], "any", false, false, false, 57), 0), "html", null, true);
        echo " minutes<br>
          # Submissions: ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 58, $this->source); })()), "total_submissions", [], "any", false, false, false, 58), "html", null, true);
        echo "<br>
          # Accepted Submissions: ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 59, $this->source); })()), "total_accepted", [], "any", false, false, false, 59), "html", null, true);
        echo " <span class=\"text-muted\">(~";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 59, $this->source); })()), "total_submissions", [], "any", false, false, false, 59) > 0)) ? (((twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 59, $this->source); })()), "total_accepted", [], "any", false, false, false, 59) / twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 59, $this->source); })()), "total_submissions", [], "any", false, false, false, 59)) * 100)) : (0)), 0), "html", null, true);
        echo "%)</span><br>
          # of Teams: ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 60, $this->source); })()), "num_teams", [], "any", false, false, false, 60), "html", null, true);
        echo "<br>

<!--
          # of Teams solving n problems<br>
          <table class=\"table table-sm\">
            <thead>
              <tr>
                ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 67, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 68
            echo "                <th>";
            echo twig_escape_filter($this->env, $context["x"], "html", null, true);
            echo "</th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "              </tr>
            </thead>
            <tbody>
              <tr>
                ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 74, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 75
            echo "                <td>";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "teams_solved_n_problems", [], "array", false, true, false, 75), $context["n"], [], "array", true, true, false, 75)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "teams_solved_n_problems", [], "array", false, true, false, 75), $context["n"], [], "array", false, false, false, 75), " ")) : (" ")), "html", null, true);
            echo "</td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "              </tr>
            </tbody>
          </table>
-->
        </div>
      </div>
    </div>
    <div class=\"col-md-4 mt-3\" id=\"graph_languages\">
      <div class=\"card\">
        <div class=\"card-header\">
          Language Stats
        </div>
        <div class=\"card-body\">
          <svg style=\"height: 300px\"></svg>
        </div>
      </div>
    </div>
    <div class=\"col-md-5 mt-3\" id=\"graph_problems\">
      <div class=\"card\">
        <div class=\"card-header\">
          Problems Attempted/Solved
        </div>
        <div class=\"card-body\">
          <svg style=\"height: 300px\"></svg>
        </div>
      </div>
    </div>
    <div class=\"col-md-12 mt-3\" id=\"graph_submissions\">
      <div class=\"card\">
        <div class=\"card-header\">
          Submissions Over Time
        </div>
        <div class=\"card-body\">
        <svg style=\"height: 400px\"></svg>
        </div>
      </div>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-md-6 mt-3 mb-3\">
      <div class=\"card\">
        <div class=\"card-header\">
          Problems
        </div>
        <div class=\"card-body tablecard\">
          <table class=\"table table-sm table-striped table-hover\">
            <thead>
              <tr>
                <th scope=\"col\">ID</th>
                <th scope=\"col\">name</th>
                <th scope=\"col\">time<br>limit</th>
                <th scope=\"col\">memory<br>limit</th>
                <th scope=\"col\">test<br>cases</th>
                <th scope=\"col\"># <br>attempts/solutions</th>
                <th scope=\"col\"># teams<br>attempted/solved</th>
              </tr>
            </thead>
            <tbody>
            ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 135, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 136
            echo "              ";
            $context["id"] = twig_get_attribute($this->env, $this->source, $context["p"], "probid", [], "any", false, false, false, 136);
            // line 137
            echo "              <tr class='clickable-row' data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("analysis_problem", ["probid" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 137, $this->source); })()), "view" => (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 137, $this->source); })())]), "html", null, true);
            echo "\">
                <th scope=\"row\">";
            // line 138
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 138, $this->source); })()), "html", null, true);
            echo "</th>
                <td>";
            // line 139
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["p"], "shortname", [], "any", false, false, false, 139) . " - ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "problem", [], "any", false, false, false, 139), "name", [], "any", false, false, false, 139)), "html", null, true);
            echo "</td>
                <td>";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "problem", [], "any", false, false, false, 140), "timelimit", [], "any", false, false, false, 140), "html", null, true);
            echo "</td>
                <td>";
            // line 141
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "problem", [], "any", false, true, false, 141), "memlimit", [], "any", true, true, false, 141)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "problem", [], "any", false, true, false, 141), "memlimit", [], "any", false, false, false, 141), "default")) : ("default")), "html", null, true);
            echo "</td>
                <td>";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 142, $this->source); })()), "problem_num_testcases", [], "any", false, false, false, 142), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 142, $this->source); })()), [], "array", false, false, false, 142), "html", null, true);
            echo "</td>
                <td>";
            // line 143
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_attempts", [], "any", false, true, false, 143), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 143, $this->source); })()), [], "array", true, true, false, 143)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_attempts", [], "any", false, true, false, 143), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 143, $this->source); })()), [], "array", false, false, false, 143), 0)) : (0)), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_solutions", [], "any", false, true, false, 143), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 143, $this->source); })()), [], "array", true, true, false, 143)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_solutions", [], "any", false, true, false, 143), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 143, $this->source); })()), [], "array", false, false, false, 143), 0)) : (0)), "html", null, true);
            echo "</td>
                <td>";
            // line 144
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_stats", [], "any", false, true, false, 144), "teams_attempted", [], "any", false, true, false, 144), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 144, $this->source); })()), [], "array", true, true, false, 144)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_stats", [], "any", false, true, false, 144), "teams_attempted", [], "any", false, true, false, 144), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 144, $this->source); })()), [], "array", false, false, false, 144), [])) : ([]))), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_stats", [], "any", false, true, false, 144), "teams_solved", [], "any", false, true, false, 144), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 144, $this->source); })()), [], "array", true, true, false, 144)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_stats", [], "any", false, true, false, 144), "teams_solved", [], "any", false, true, false, 144), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 144, $this->source); })()), [], "array", false, false, false, 144), [])) : ([]))), "html", null, true);
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class=\"col-md-6 mt-3 mb-3\">
      <div class=\"card\">
        <div class=\"card-header\">
          Teams
        </div>
        <div class=\"card-body tablecard\">
          <table class=\"table table-sm table-striped table-hover\">
            <thead>
              <tr>
                <th scope=\"col\">ID</th>
                <th scope=\"col\">affiliation</th>
                <th scope=\"col\" style=\"max-width: 200px\">name</th>
                <th scope=\"col\">#<br>submitted/correct</th>
                <th scope=\"col\"># problems<br>attempted/solved</th>
                <th scope=\"col\">Misery<br>Index</th>
              </tr>
            </thead>
            <tbody>
            ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 170, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 171
            echo "              ";
            $context["id"] = twig_get_attribute($this->env, $this->source, $context["t"], "teamid", [], "any", false, false, false, 171);
            // line 172
            echo "              <tr class=\"clickable-row\" data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("analysis_team", ["teamid" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 172, $this->source); })())]), "html", null, true);
            echo "\">
                <th scope=\"row\">";
            // line 173
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 173, $this->source); })()), "html", null, true);
            echo "</th>
                <td>";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["t"], "affiliation", [], "any", false, false, false, 174), "name", [], "any", false, false, false, 174), "html", null, true);
            echo "</td>
                <td class=\"truncate\" style=\"max-width: 200px\">";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "effectiveName", [], "any", false, false, false, 175), "html", null, true);
            echo "</td>
                <td>";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 176, $this->source); })()), "team_stats", [], "any", false, false, false, 176), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 176, $this->source); })()), [], "array", false, false, false, 176), "total_submitted", [], "any", false, false, false, 176), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 176, $this->source); })()), "team_stats", [], "any", false, false, false, 176), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 176, $this->source); })()), [], "array", false, false, false, 176), "total_accepted", [], "any", false, false, false, 176), "html", null, true);
            echo "</td>
                <td>";
            // line 177
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 177, $this->source); })()), "team_stats", [], "any", false, false, false, 177), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 177, $this->source); })()), [], "array", false, false, false, 177), "problems_submitted", [], "any", false, false, false, 177)), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 177, $this->source); })()), "team_stats", [], "any", false, false, false, 177), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 177, $this->source); })()), [], "array", false, false, false, 177), "problems_accepted", [], "any", false, false, false, 177)), "html", null, true);
            echo "</td>
                <td>";
            // line 178
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 178, $this->source); })()), "team_stats", [], "any", false, false, false, 178), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 178, $this->source); })()), [], "array", false, false, false, 178), "misery_index", [], "any", false, false, false, 178), 0), "html", null, true);
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class=\"row\">
      <div class=\"col-md-6 mt-3 mb-3\">
          <div class=\"card\">
              <div class=\"card-header\">
                  Delayed Judgings (by more than ";
        // line 191
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["delayed_judgings"]) || array_key_exists("delayed_judgings", $context) ? $context["delayed_judgings"] : (function () { throw new RuntimeError('Variable "delayed_judgings" does not exist.', 191, $this->source); })()), "delay", [], "any", false, false, false, 191), "html", null, true);
        echo "s)
              </div>
              <div class=\"card-body tablecard\">
                  ";
        // line 194
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["delayed_judgings"]) || array_key_exists("delayed_judgings", $context) ? $context["delayed_judgings"] : (function () { throw new RuntimeError('Variable "delayed_judgings" does not exist.', 194, $this->source); })()), "data", [], "any", false, false, false, 194)) > 0)) {
            // line 195
            echo "                      <table class=\"table table-sm table-striped table-hover\">
                          <thead>
                          <tr>
                              <th scope=\"col\">submit ID</th>
                              <th scope=\"col\">judging ID</th>
                              <th scope=\"col\">submit time</th>
                              <th scope=\"col\">num judgings</th>
                              <th scope=\"col\">time to<br/>first judging</th>
                          </tr>
                          </thead>
                          <tbody>
                          ";
            // line 206
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["delayed_judgings"]) || array_key_exists("delayed_judgings", $context) ? $context["delayed_judgings"] : (function () { throw new RuntimeError('Variable "delayed_judgings" does not exist.', 206, $this->source); })()), "data", [], "any", false, false, false, 206));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 207
                echo "                              ";
                $context["id"] = twig_get_attribute($this->env, $this->source, $context["j"], "submitid", [], "any", false, false, false, 207);
                // line 208
                echo "                              <tr class='clickable-row' data-href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 208, $this->source); })())]), "html", null, true);
                echo "\">
                                  <th scope=\"row\">";
                // line 209
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 209, $this->source); })()), "html", null, true);
                echo "</th>
                                  <td scope=\"row\">";
                // line 210
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "judgingid", [], "any", false, false, false, 210), "html", null, true);
                echo "</td>
                                  <td scope=\"row\">";
                // line 211
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["j"], "submittime", [], "any", false, false, false, 211)), "html", null, true);
                echo "</td>
                                  <td scope=\"row\">";
                // line 212
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "num_judgings", [], "any", false, false, false, 212), "html", null, true);
                echo "</td>
                                  <td scope=\"row\">";
                // line 213
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "timediff", [], "any", false, false, false, 213), 2), "html", null, true);
                echo "s</td>
                              </tr>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 216
            echo "                          </tbody>
                      </table>
                      ";
            // line 218
            if ((twig_get_attribute($this->env, $this->source, (isset($context["delayed_judgings"]) || array_key_exists("delayed_judgings", $context) ? $context["delayed_judgings"] : (function () { throw new RuntimeError('Variable "delayed_judgings" does not exist.', 218, $this->source); })()), "overflow", [], "any", false, false, false, 218) > 0)) {
                // line 219
                echo "                          <div class=\"alert alert-warning\">There are ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["delayed_judgings"]) || array_key_exists("delayed_judgings", $context) ? $context["delayed_judgings"] : (function () { throw new RuntimeError('Variable "delayed_judgings" does not exist.', 219, $this->source); })()), "overflow", [], "any", false, false, false, 219), "html", null, true);
                echo " more delayed judgings which are not shown.</div>
                      ";
            }
            // line 221
            echo "                  ";
        } else {
            // line 222
            echo "                      <div class=\"alert alert-warning\">There are no judgings delayed so far.</div>
                  ";
        }
        // line 224
        echo "              </div>
          </div>
      </div>
  </div>
</div>


<script>
";
        // line 233
        $context["colors"] = ["correct" => "#01df01", "wrong-answer" => "red", "timelimit" => "orange", "run-error" => "#ff3399", "compiler-error" => "grey", "no-output" => "purple", "frozen" => "blue", "output-limit" => "black"];
        // line 244
        echo "

//////////////////////////////////////
// Results by language
// bar graph, x axis is language, y axis is # of solutions
// mutlibar, one for attempts, one for solutions
var language_stats = [
  {
    key: \"Attempted\",
    color: 'red',
    values: [
      ";
        // line 255
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 255, $this->source); })()), "language_stats", [], "any", false, false, false, 255), "total_submissions", [], "any", false, false, false, 255));
        foreach ($context['_seq'] as $context["lang"] => $context["count"]) {
            // line 256
            echo "        {
          \"label\" : \"";
            // line 257
            echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
            echo "\",
          \"value\" : ";
            // line 258
            echo twig_escape_filter($this->env, $context["count"], "html", null, true);
            echo ",
        },
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['lang'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 261
        echo "    ]
  },
  {
    key: \"Accepted\",
    color: 'green',
    values: [
      ";
        // line 267
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 267, $this->source); })()), "language_stats", [], "any", false, false, false, 267), "total_solutions", [], "any", false, false, false, 267));
        foreach ($context['_seq'] as $context["lang"] => $context["count"]) {
            // line 268
            echo "        {
          \"label\" : \"";
            // line 269
            echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
            echo "\",
          \"value\" : ";
            // line 270
            echo twig_escape_filter($this->env, $context["count"], "html", null, true);
            echo ",
        },
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['lang'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 273
        echo "    ]
  }
];
nv.addGraph(function() {
  var chart = nv.models.multiBarChart()
      .x(function(d) { return d.label })
      .y(function(d) { return d.value })
      // .valueFormat(d3.format('.0f'))
      // .staggerLabels(run_max_times[0].values.length > 2)
      .showControls(false)
      .reduceXTicks(false)
      .margin({bottom: 90})
      .duration(250)
      ;
  chart.yAxis
    .tickFormat(d3.format('.0f'))
    .axisLabel('# of Submissions');
  chart.xAxis.axisLabel(\"Language\");
  d3.select('#graph_languages svg')
      .datum(language_stats)
      .call(chart);
  nv.utils.windowResize(chart.update);
  return chart;
});


//////////////////////////////////////
// Results by problem
// Graph, multibar chart, x axis is problem id/shortname, y axis is # of teams
// one bar for #teams attempted(red), second bar for solved(green)
var problem_stats = [
  {
    key: \"Attempted\",
    color: 'red',
    values: [
      ";
        // line 308
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 308, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prob"]) {
            // line 309
            echo "        {
          \"label\" : \"";
            // line 310
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prob"], "shortname", [], "any", false, false, false, 310), "html", null, true);
            echo "\",
          \"value\" : ";
            // line 311
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_stats", [], "any", false, true, false, 311), "teams_attempted", [], "any", false, true, false, 311), twig_get_attribute($this->env, $this->source, $context["prob"], "probid", [], "any", false, false, false, 311), [], "array", true, true, false, 311)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_stats", [], "any", false, true, false, 311), "teams_attempted", [], "any", false, true, false, 311), twig_get_attribute($this->env, $this->source, $context["prob"], "probid", [], "any", false, false, false, 311), [], "array", false, false, false, 311), [])) : ([]))), "html", null, true);
            echo ",
        },
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prob'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 314
        echo "    ]
  },
  {
    key: \"Accepted\",
    color: 'green',
    values: [
      ";
        // line 320
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 320, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prob"]) {
            // line 321
            echo "        {
          \"label\" : \"";
            // line 322
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prob"], "shortname", [], "any", false, false, false, 322), "html", null, true);
            echo "\",
          \"value\" : ";
            // line 323
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_stats", [], "any", false, true, false, 323), "teams_solved", [], "any", false, true, false, 323), twig_get_attribute($this->env, $this->source, $context["prob"], "probid", [], "any", false, false, false, 323), [], "array", true, true, false, 323)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_stats", [], "any", false, true, false, 323), "teams_solved", [], "any", false, true, false, 323), twig_get_attribute($this->env, $this->source, $context["prob"], "probid", [], "any", false, false, false, 323), [], "array", false, false, false, 323), [])) : ([]))), "html", null, true);
            echo ",
        },
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prob'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 326
        echo "    ]
  }
];
nv.addGraph(function() {
  var chart = nv.models.multiBarChart()
      .x(function(d) { return d.label })
      .y(function(d) { return d.value })
      // .valueFormat(d3.format('.0f'))
      // .staggerLabels(run_max_times[0].values.length > 2)
      .showControls(false)
      .reduceXTicks(false)
      .margin({bottom: 90})
      .duration(250)
      ;
  chart.yAxis
    .tickFormat(d3.format('.0f'))
    .axisLabel('# of Teams');
  chart.xAxis.axisLabel(\"Problem\");
  d3.select('#graph_problems svg')
      .datum(problem_stats)
      .call(chart);
  nv.utils.windowResize(chart.update);
  return chart;
});


//////////////////////////////////////
// Submissions over time
// stacked graph of correct, runtime-error, wrong-answer, compiler-error, timelimit, etc
// x-axis is contest time
// y axis is # of submissions

var submission_stats = [
  ";
        // line 359
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "correct", 1 => "wrong-answer", 2 => "timelimit", 3 => "run-error", 4 => "compiler-error", 5 => "no-output"]);
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 360
            echo "  {
    key: \"";
            // line 361
            echo twig_escape_filter($this->env, $context["result"], "html", null, true);
            echo "\",
    color: \"";
            // line 362
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 362, $this->source); })()), $context["result"], [], "array", false, false, false, 362), "html", null, true);
            echo "\",
    values: [
      ";
            // line 365
            echo "      ";
            // line 366
            echo "      [0,0],
      ";
            // line 367
            $context["count"] = 0;
            // line 368
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 368, $this->source); })()), function ($__submission__) use ($context, $macros) { $context["submission"] = $__submission__; return twig_get_attribute($this->env, $this->source, $context["submission"], "result", [], "any", false, false, false, 368); }));
            foreach ($context['_seq'] as $context["_key"] => $context["submission"]) {
                // line 369
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["submission"], "result", [], "any", false, false, false, 369) == $context["result"])) {
                    $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 369, $this->source); })()) + 1);
                }
                // line 370
                echo "        [ ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 370) - twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 370, $this->source); })()), "starttime", [], "any", false, false, false, 370)) / 60.0), "html", null, true);
                echo ",
          ";
                // line 371
                echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 371, $this->source); })()), "html", null, true);
                echo "
        ],
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 374
            echo "    ]
  },
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 377
        echo "];
nv.addGraph(function() {
  var chart = nv.models.stackedAreaChart()
      // .margin({left: 100})  //Adjust chart margins to give the x-axis some breathing room.
      // .useInteractiveGuideline(true)  //We want nice looking tooltips and a guideline!
      // .transitionDuration(350)  //how fast do you want the lines to transition?
      // .showLegend(true)       //Show the legend, allowing users to turn on/off line series.
      .showControls(false)
      .x(function(d) { return d[0] })   //We can modify the data accessor functions...
      .y(function(d) { return d[1] })   //...in case your data is formatted differently.
      .showYAxis(true)        //Show the y-axis
      .showXAxis(true)        //Show the x-axis
      .forceX([0, ";
        // line 389
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 389, $this->source); })()), "endtime", [], "any", false, false, false, 389) - twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 389, $this->source); })()), "starttime", [], "any", false, false, false, 389)) / 60), "html", null, true);
        echo "])
      .forceY([0, ";
        // line 390
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, (isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 390, $this->source); })())) * 1.1), "html", null, true);
        echo "])
      ;
  chart.xAxis     //Chart x-axis settings
      .axisLabel('Contest Time(minutes)')
      .tickFormat(d3.format('d'));

  chart.yAxis     //Chart y-axis settings
      .axisLabel('Total Submissions')
      .tickFormat(d3.format('d'));

  d3.select('#graph_submissions svg')
      .datum(submission_stats)
      .call(chart);
  nv.utils.windowResize(chart.update);
  return chart;
});


</script>
";
        // line 409
        $this->loadTemplate("jury/analysis/download_graphs.html.twig", "jury/analysis/contest_overview.html.twig", 409)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jury/analysis/contest_overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  788 => 409,  766 => 390,  762 => 389,  748 => 377,  740 => 374,  731 => 371,  726 => 370,  721 => 369,  716 => 368,  714 => 367,  711 => 366,  709 => 365,  704 => 362,  700 => 361,  697 => 360,  693 => 359,  658 => 326,  649 => 323,  645 => 322,  642 => 321,  638 => 320,  630 => 314,  621 => 311,  617 => 310,  614 => 309,  610 => 308,  573 => 273,  564 => 270,  560 => 269,  557 => 268,  553 => 267,  545 => 261,  536 => 258,  532 => 257,  529 => 256,  525 => 255,  512 => 244,  510 => 233,  500 => 224,  496 => 222,  493 => 221,  487 => 219,  485 => 218,  481 => 216,  472 => 213,  468 => 212,  464 => 211,  460 => 210,  456 => 209,  451 => 208,  448 => 207,  444 => 206,  431 => 195,  429 => 194,  423 => 191,  411 => 181,  402 => 178,  396 => 177,  390 => 176,  386 => 175,  382 => 174,  378 => 173,  373 => 172,  370 => 171,  366 => 170,  341 => 147,  330 => 144,  324 => 143,  320 => 142,  316 => 141,  312 => 140,  308 => 139,  304 => 138,  299 => 137,  296 => 136,  292 => 135,  232 => 77,  223 => 75,  219 => 74,  213 => 70,  204 => 68,  200 => 67,  190 => 60,  184 => 59,  180 => 58,  176 => 57,  161 => 44,  159 => 43,  155 => 42,  150 => 39,  140 => 38,  102 => 9,  98 => 8,  94 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}

{% block title %}Analysis - Contest{% endblock %}

{% block extrahead %}
<link rel=\"stylesheet\" href=\"{{asset('css/nv.d3.min.css')}}\">
<script src=\"{{asset('js/d3.min.js')}}\"></script>
<script src=\"{{asset('js/nv.d3.min.js')}}\"></script>
<script src=\"{{asset('js/FileSaver.min.js')}}\"></script>
<style>
.clickable-row:hover {
  cursor: pointer;
}
.card-body.tablecard{
  overflow-y: auto;
  height: 500px;
  max-height: 500px;
}
.truncate {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
</style>
<script>
\$(function() {
    \$(\".clickable-row\").click(function() {
        window.location = \$(this).data(\"href\");
    });
    \$('[data-toggle=\"popover\"]').popover({
      trigger: 'hover',
      html: true
    })
})
</script>
{% endblock %}

{% block body %}
<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-12 mt-3\">
      <h1>{{ current_contest.name }}</h1>
      {% include 'jury/partials/analysis_filter.html.twig' %}
    </div>
    <div class=\"col-md-3 mt-3\">
      <div class=\"card\">
        <div class=\"card-header\">
          Contest Stats
        </div>
        <div class=\"card-body\">
          <abbr data-toggle=\"popover\" data-placement=\"bottom\" title=\"Misery Index\" data-content=\"
            This is a measure of how 'bored' contestants are. It is the average number of
            people-minutes spent fruitlessly trying to solve problems at the end of the contest.
            <br>
            Calculated as:<br>
            average across all teams of [3 people x (number of minutes elapsed - minute last problem solved by team t)]
          \">Misery index</abbr>: {{misc.misery_index|number_format(0)}} minutes<br>
          # Submissions: {{ misc.total_submissions }}<br>
          # Accepted Submissions: {{ misc.total_accepted }} <span class=\"text-muted\">(~{{ (misc.total_submissions>0 ? (misc.total_accepted/misc.total_submissions)*100:0)|number_format(0) }}%)</span><br>
          # of Teams: {{ misc.num_teams }}<br>

<!--
          # of Teams solving n problems<br>
          <table class=\"table table-sm\">
            <thead>
              <tr>
                {% for x in range(0, problems|length) %}
                <th>{{x}}</th>
                {% endfor %}
              </tr>
            </thead>
            <tbody>
              <tr>
                {% for n in range(0, problems|length ) %}
                <td>{{ misc['teams_solved_n_problems'][n]|default(' ') }}</td>
                {% endfor %}
              </tr>
            </tbody>
          </table>
-->
        </div>
      </div>
    </div>
    <div class=\"col-md-4 mt-3\" id=\"graph_languages\">
      <div class=\"card\">
        <div class=\"card-header\">
          Language Stats
        </div>
        <div class=\"card-body\">
          <svg style=\"height: 300px\"></svg>
        </div>
      </div>
    </div>
    <div class=\"col-md-5 mt-3\" id=\"graph_problems\">
      <div class=\"card\">
        <div class=\"card-header\">
          Problems Attempted/Solved
        </div>
        <div class=\"card-body\">
          <svg style=\"height: 300px\"></svg>
        </div>
      </div>
    </div>
    <div class=\"col-md-12 mt-3\" id=\"graph_submissions\">
      <div class=\"card\">
        <div class=\"card-header\">
          Submissions Over Time
        </div>
        <div class=\"card-body\">
        <svg style=\"height: 400px\"></svg>
        </div>
      </div>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-md-6 mt-3 mb-3\">
      <div class=\"card\">
        <div class=\"card-header\">
          Problems
        </div>
        <div class=\"card-body tablecard\">
          <table class=\"table table-sm table-striped table-hover\">
            <thead>
              <tr>
                <th scope=\"col\">ID</th>
                <th scope=\"col\">name</th>
                <th scope=\"col\">time<br>limit</th>
                <th scope=\"col\">memory<br>limit</th>
                <th scope=\"col\">test<br>cases</th>
                <th scope=\"col\"># <br>attempts/solutions</th>
                <th scope=\"col\"># teams<br>attempted/solved</th>
              </tr>
            </thead>
            <tbody>
            {% for p in problems %}
              {% set id=p.probid %}
              <tr class='clickable-row' data-href=\"{{path('analysis_problem', {'probid': id, 'view': view}) }}\">
                <th scope=\"row\">{{ id }}</th>
                <td>{{ p.shortname ~ \" - \" ~ p.problem.name }}</td>
                <td>{{ p.problem.timelimit }}</td>
                <td>{{ p.problem.memlimit|default('default') }}</td>
                <td>{{ misc.problem_num_testcases[id] }}</td>
                <td>{{ misc.problem_attempts[id]|default(0) }} / {{ misc.problem_solutions[id]|default(0) }}</td>
                <td>{{ misc.problem_stats.teams_attempted[id]|default([])|length }} / {{ misc.problem_stats.teams_solved[id]|default([])|length }}</td>
              </tr>
            {% endfor %}
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class=\"col-md-6 mt-3 mb-3\">
      <div class=\"card\">
        <div class=\"card-header\">
          Teams
        </div>
        <div class=\"card-body tablecard\">
          <table class=\"table table-sm table-striped table-hover\">
            <thead>
              <tr>
                <th scope=\"col\">ID</th>
                <th scope=\"col\">affiliation</th>
                <th scope=\"col\" style=\"max-width: 200px\">name</th>
                <th scope=\"col\">#<br>submitted/correct</th>
                <th scope=\"col\"># problems<br>attempted/solved</th>
                <th scope=\"col\">Misery<br>Index</th>
              </tr>
            </thead>
            <tbody>
            {% for t in teams %}
              {% set id=t.teamid %}
              <tr class=\"clickable-row\" data-href=\"{{ path('analysis_team', {'teamid':id}) }}\">
                <th scope=\"row\">{{ id }}</th>
                <td>{{ t.affiliation.name }}</td>
                <td class=\"truncate\" style=\"max-width: 200px\">{{ t.effectiveName }}</td>
                <td>{{ misc.team_stats[id].total_submitted }} / {{ misc.team_stats[id].total_accepted }}</td>
                <td>{{ misc.team_stats[id].problems_submitted|length }} / {{ misc.team_stats[id].problems_accepted|length }}</td>
                <td>{{ misc.team_stats[id].misery_index|number_format(0) }}</td>
              </tr>
            {% endfor %}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class=\"row\">
      <div class=\"col-md-6 mt-3 mb-3\">
          <div class=\"card\">
              <div class=\"card-header\">
                  Delayed Judgings (by more than {{ delayed_judgings.delay }}s)
              </div>
              <div class=\"card-body tablecard\">
                  {% if delayed_judgings.data|length > 0 %}
                      <table class=\"table table-sm table-striped table-hover\">
                          <thead>
                          <tr>
                              <th scope=\"col\">submit ID</th>
                              <th scope=\"col\">judging ID</th>
                              <th scope=\"col\">submit time</th>
                              <th scope=\"col\">num judgings</th>
                              <th scope=\"col\">time to<br/>first judging</th>
                          </tr>
                          </thead>
                          <tbody>
                          {% for j in delayed_judgings.data %}
                              {% set id=j.submitid %}
                              <tr class='clickable-row' data-href=\"{{path('jury_submission', {'submitId': id}) }}\">
                                  <th scope=\"row\">{{ id }}</th>
                                  <td scope=\"row\">{{ j.judgingid }}</td>
                                  <td scope=\"row\">{{ j.submittime | printtime }}</td>
                                  <td scope=\"row\">{{ j.num_judgings }}</td>
                                  <td scope=\"row\">{{ j.timediff | number_format(2) }}s</td>
                              </tr>
                          {% endfor %}
                          </tbody>
                      </table>
                      {% if delayed_judgings.overflow > 0 %}
                          <div class=\"alert alert-warning\">There are {{ delayed_judgings.overflow }} more delayed judgings which are not shown.</div>
                      {% endif %}
                  {% else %}
                      <div class=\"alert alert-warning\">There are no judgings delayed so far.</div>
                  {% endif %}
              </div>
          </div>
      </div>
  </div>
</div>


<script>
{%
set colors = {
  'correct':        '#01df01',
  'wrong-answer':   'red',
  'timelimit':      'orange',
  'run-error':      '#ff3399',
  'compiler-error': 'grey',
  'no-output':      'purple',
  'frozen':         'blue',
  'output-limit':   'black',
}
%}


//////////////////////////////////////
// Results by language
// bar graph, x axis is language, y axis is # of solutions
// mutlibar, one for attempts, one for solutions
var language_stats = [
  {
    key: \"Attempted\",
    color: 'red',
    values: [
      {% for lang,count in misc.language_stats.total_submissions %}
        {
          \"label\" : \"{{lang}}\",
          \"value\" : {{ count }},
        },
      {% endfor %}
    ]
  },
  {
    key: \"Accepted\",
    color: 'green',
    values: [
      {% for lang,count in misc.language_stats.total_solutions %}
        {
          \"label\" : \"{{lang}}\",
          \"value\" : {{ count }},
        },
      {% endfor %}
    ]
  }
];
nv.addGraph(function() {
  var chart = nv.models.multiBarChart()
      .x(function(d) { return d.label })
      .y(function(d) { return d.value })
      // .valueFormat(d3.format('.0f'))
      // .staggerLabels(run_max_times[0].values.length > 2)
      .showControls(false)
      .reduceXTicks(false)
      .margin({bottom: 90})
      .duration(250)
      ;
  chart.yAxis
    .tickFormat(d3.format('.0f'))
    .axisLabel('# of Submissions');
  chart.xAxis.axisLabel(\"Language\");
  d3.select('#graph_languages svg')
      .datum(language_stats)
      .call(chart);
  nv.utils.windowResize(chart.update);
  return chart;
});


//////////////////////////////////////
// Results by problem
// Graph, multibar chart, x axis is problem id/shortname, y axis is # of teams
// one bar for #teams attempted(red), second bar for solved(green)
var problem_stats = [
  {
    key: \"Attempted\",
    color: 'red',
    values: [
      {% for prob in problems %}
        {
          \"label\" : \"{{prob.shortname}}\",
          \"value\" : {{ misc.problem_stats.teams_attempted[prob.probid]|default([])|length }},
        },
      {% endfor %}
    ]
  },
  {
    key: \"Accepted\",
    color: 'green',
    values: [
      {% for prob in problems %}
        {
          \"label\" : \"{{prob.shortname}}\",
          \"value\" : {{ misc.problem_stats.teams_solved[prob.probid]|default([])|length }},
        },
      {% endfor %}
    ]
  }
];
nv.addGraph(function() {
  var chart = nv.models.multiBarChart()
      .x(function(d) { return d.label })
      .y(function(d) { return d.value })
      // .valueFormat(d3.format('.0f'))
      // .staggerLabels(run_max_times[0].values.length > 2)
      .showControls(false)
      .reduceXTicks(false)
      .margin({bottom: 90})
      .duration(250)
      ;
  chart.yAxis
    .tickFormat(d3.format('.0f'))
    .axisLabel('# of Teams');
  chart.xAxis.axisLabel(\"Problem\");
  d3.select('#graph_problems svg')
      .datum(problem_stats)
      .call(chart);
  nv.utils.windowResize(chart.update);
  return chart;
});


//////////////////////////////////////
// Submissions over time
// stacked graph of correct, runtime-error, wrong-answer, compiler-error, timelimit, etc
// x-axis is contest time
// y axis is # of submissions

var submission_stats = [
  {% for result in ['correct', 'wrong-answer', 'timelimit', 'run-error', 'compiler-error', 'no-output'] %}
  {
    key: \"{{result}}\",
    color: \"{{colors[result]}}\",
    values: [
      {# TODO: make sure these are actually ordered by submittime #}
      {# TODO: also make sure these submissions are in the same contest #}
      [0,0],
      {% set count = 0 %}
      {% for submission in submissions | filter(submission => submission.result) %}
        {% if submission.result == result %}{% set count = count +1 %}{% endif %}
        [ {{ (submission.submittime - current_contest.starttime)/60.0 }},
          {{ count }}
        ],
        {% endfor %}
    ]
  },
  {% endfor %}
];
nv.addGraph(function() {
  var chart = nv.models.stackedAreaChart()
      // .margin({left: 100})  //Adjust chart margins to give the x-axis some breathing room.
      // .useInteractiveGuideline(true)  //We want nice looking tooltips and a guideline!
      // .transitionDuration(350)  //how fast do you want the lines to transition?
      // .showLegend(true)       //Show the legend, allowing users to turn on/off line series.
      .showControls(false)
      .x(function(d) { return d[0] })   //We can modify the data accessor functions...
      .y(function(d) { return d[1] })   //...in case your data is formatted differently.
      .showYAxis(true)        //Show the y-axis
      .showXAxis(true)        //Show the x-axis
      .forceX([0, {{ (current_contest.endtime - current_contest.starttime) / 60 }}])
      .forceY([0, {{ submissions|length *1.10 }}])
      ;
  chart.xAxis     //Chart x-axis settings
      .axisLabel('Contest Time(minutes)')
      .tickFormat(d3.format('d'));

  chart.yAxis     //Chart y-axis settings
      .axisLabel('Total Submissions')
      .tickFormat(d3.format('d'));

  d3.select('#graph_submissions svg')
      .datum(submission_stats)
      .call(chart);
  nv.utils.windowResize(chart.update);
  return chart;
});


</script>
{% include 'jury/analysis/download_graphs.html.twig' %}
{% endblock %}
", "jury/analysis/contest_overview.html.twig", "/domjudge/webapp/templates/jury/analysis/contest_overview.html.twig");
    }
}
