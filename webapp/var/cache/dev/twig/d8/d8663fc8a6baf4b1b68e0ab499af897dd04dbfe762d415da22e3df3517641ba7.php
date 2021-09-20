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

/* jury/partials/submission_list.html.twig */
class __TwigTemplate_286cd3e15c66f98acf99c09fc9a2098746fbcec70809cf41e76d8f842e0f991d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/submission_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/submission_list.html.twig"));

        // line 3
        echo "
";
        // line 4
        if ( !(isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context))) {
            // line 5
            echo "    ";
            $context["showExternalResult"] = false;
        }
        // line 7
        if ( !(isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context))) {
            // line 8
            echo "    ";
            $context["showExternalTestcases"] = false;
        }
        // line 10
        echo "
";
        // line 11
        $context["rowSpan"] = 1;
        // line 12
        $context["tdExtraClass"] = "";
        // line 13
        if (((isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 13, $this->source); })()) && (isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 13, $this->source); })()))) {
            // line 14
            echo "    ";
            $context["rowSpan"] = 2;
            // line 15
            echo "    ";
            $context["tdExtraClass"] = " thick-border";
        }
        // line 17
        echo "
";
        // line 18
        if (twig_test_empty((isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 18, $this->source); })()))) {
            // line 19
            echo "    <div class=\"alert alert-warning\">No submissions</div>
";
        } else {
            // line 21
            echo "    <table class=\"data-table table table-hover table-striped table-sm submissions-table\">
        <thead class=\"thead-light\">
        <tr>
            ";
            // line 24
            if (((isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 24, $this->source); })()) && (isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 24, $this->source); })()))) {
                // line 25
                echo "                <th scope=\"col\" colspan=\"2\">ID</th>
            ";
            } else {
                // line 27
                echo "                <th scope=\"col\">ID</th>
            ";
            }
            // line 29
            if ((isset($context["showContest"]) || array_key_exists("showContest", $context) ? $context["showContest"] : (function () { throw new RuntimeError('Variable "showContest" does not exist.', 29, $this->source); })())) {
                // line 30
                echo "
                <th scope=\"col\">contest</th>";
            }
            // line 33
            echo "
            <th scope=\"col\">time</th>
            <th scope=\"col\">team</th>
            <th scope=\"col\">problem</th>
            <th scope=\"col\">lang</th>
            ";
            // line 38
            if (((isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 38, $this->source); })()) && (isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 38, $this->source); })()))) {
                // line 39
                echo "                <th scope=\"col\" colspan=\"2\">result</th>
            ";
            } else {
                // line 41
                echo "                <th scope=\"col\">result</th>
            ";
            }
            // line 43
            echo "            ";
            if (((isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 43, $this->source); })()) &&  !(isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 43, $this->source); })()))) {
                // line 44
                echo "                <th scope=\"col\">external result</th>
            ";
            }
            // line 46
            echo "            <th scope=\"col\">
                ";
            // line 47
            if (((isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 47, $this->source); })()) && (isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 47, $this->source); })()))) {
                // line 48
                echo "                    shadow diff verified
                ";
            } else {
                // line 50
                echo "                    verified
                ";
            }
            // line 52
            echo "            </th>
            ";
            // line 53
            if (( !(isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 53, $this->source); })()) ||  !(isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 53, $this->source); })()))) {
                // line 54
                echo "                <th scope=\"col\">by</th>
            ";
            }
            // line 56
            if ((isset($context["rejudging"]) || array_key_exists("rejudging", $context))) {
                // line 57
                echo "
                <th scope=\"col\">old result</th>";
            }
            // line 60
            if (((isset($context["showTestcases"]) || array_key_exists("showTestcases", $context)) && (isset($context["showTestcases"]) || array_key_exists("showTestcases", $context) ? $context["showTestcases"] : (function () { throw new RuntimeError('Variable "showTestcases" does not exist.', 60, $this->source); })()))) {
                // line 61
                echo "
                <th scope=\"col\" class=\"not-sortable not-searchable\">test results</th>";
            }
            // line 64
            echo "
        </tr>
        </thead>
        <tbody>";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 68, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["submission"]) {
                // line 69
                if ((isset($context["rejudging"]) || array_key_exists("rejudging", $context))) {
                    // line 70
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 70), "rejudgingid" => twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 70, $this->source); })()), "rejudgingid", [], "any", false, false, false, 70)]);
                } else {
                    // line 72
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 72)]);
                }
                // line 74
                echo "
            <tr class=\"";
                // line 75
                if ( !twig_get_attribute($this->env, $this->source, $context["submission"], "valid", [], "any", false, false, false, 75)) {
                    echo "ignore";
                }
                echo "\"
                data-problem-id=\"";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "probid", [], "any", false, false, false, 76), "html", null, true);
                echo "\"
                data-team-id=\"";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "teamid", [], "any", false, false, false, 77), "html", null, true);
                echo "\"
                data-language-id=\"";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "langid", [], "any", false, false, false, 78), "html", null, true);
                echo "\"
                data-submission-id=\"";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 79), "html", null, true);
                echo "\">
                ";
                // line 80
                if (((isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 80, $this->source); })()) && (isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 80, $this->source); })()))) {
                    // line 81
                    echo "                    <td class=\"";
                    echo twig_escape_filter($this->env, (isset($context["tdExtraClass"]) || array_key_exists("tdExtraClass", $context) ? $context["tdExtraClass"] : (function () { throw new RuntimeError('Variable "tdExtraClass" does not exist.', 81, $this->source); })()), "html", null, true);
                    echo "\">
                        <a href=\"";
                    // line 82
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 82, $this->source); })()), "html", null, true);
                    echo "\">
                            Local
                        </a>
                    </td>
                ";
                }
                // line 87
                echo "                <td class=\"";
                echo twig_escape_filter($this->env, (isset($context["tdExtraClass"]) || array_key_exists("tdExtraClass", $context) ? $context["tdExtraClass"] : (function () { throw new RuntimeError('Variable "tdExtraClass" does not exist.', 87, $this->source); })()), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 88
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 88, $this->source); })()), "html", null, true);
                echo "\">s";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 88), "html", null, true);
                echo "</a>
                </td>";
                // line 90
                if ((isset($context["showContest"]) || array_key_exists("showContest", $context) ? $context["showContest"] : (function () { throw new RuntimeError('Variable "showContest" does not exist.', 90, $this->source); })())) {
                    // line 91
                    echo "                    <td class=\"";
                    echo twig_escape_filter($this->env, (isset($context["tdExtraClass"]) || array_key_exists("tdExtraClass", $context) ? $context["tdExtraClass"] : (function () { throw new RuntimeError('Variable "tdExtraClass" does not exist.', 91, $this->source); })()), "html", null, true);
                    echo "\"><a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 91, $this->source); })()), "html", null, true);
                    echo "\">c";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "cid", [], "any", false, false, false, 91), "html", null, true);
                    echo "</a></td>";
                }
                // line 93
                echo "
                <td rowspan=\"";
                // line 94
                echo twig_escape_filter($this->env, (isset($context["rowSpan"]) || array_key_exists("rowSpan", $context) ? $context["rowSpan"] : (function () { throw new RuntimeError('Variable "rowSpan" does not exist.', 94, $this->source); })()), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, (isset($context["tdExtraClass"]) || array_key_exists("tdExtraClass", $context) ? $context["tdExtraClass"] : (function () { throw new RuntimeError('Variable "tdExtraClass" does not exist.', 94, $this->source); })()), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 95
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 95, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 95), null, twig_get_attribute($this->env, $this->source, $context["submission"], "contest", [], "any", false, false, false, 95)), "html", null, true);
                echo "</a>
                </td>
                <td rowspan=\"";
                // line 97
                echo twig_escape_filter($this->env, (isset($context["rowSpan"]) || array_key_exists("rowSpan", $context) ? $context["rowSpan"] : (function () { throw new RuntimeError('Variable "rowSpan" does not exist.', 97, $this->source); })()), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, (isset($context["tdExtraClass"]) || array_key_exists("tdExtraClass", $context) ? $context["tdExtraClass"] : (function () { throw new RuntimeError('Variable "tdExtraClass" does not exist.', 97, $this->source); })()), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 98
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 98, $this->source); })()), "html", null, true);
                echo "\"
                       title=\"t";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "teamid", [], "any", false, false, false, 99), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "team", [], "any", false, false, false, 99), "name", [], "any", false, false, false, 99), 30), "html", null, true);
                echo "</a>
                </td>
                <td class=\"probid";
                // line 101
                echo twig_escape_filter($this->env, (isset($context["tdExtraClass"]) || array_key_exists("tdExtraClass", $context) ? $context["tdExtraClass"] : (function () { throw new RuntimeError('Variable "tdExtraClass" does not exist.', 101, $this->source); })()), "html", null, true);
                echo "\" rowspan=\"";
                echo twig_escape_filter($this->env, (isset($context["rowSpan"]) || array_key_exists("rowSpan", $context) ? $context["rowSpan"] : (function () { throw new RuntimeError('Variable "rowSpan" does not exist.', 101, $this->source); })()), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 102
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 102, $this->source); })()), "html", null, true);
                echo "\"
                       title=\"";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "problem", [], "any", false, false, false, 103), "name", [], "any", false, false, false, 103), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "contestProblem", [], "any", false, false, false, 103), "shortname", [], "any", false, false, false, 103), "html", null, true);
                echo "</a>
                </td>
                <td class=\"langid";
                // line 105
                echo twig_escape_filter($this->env, (isset($context["tdExtraClass"]) || array_key_exists("tdExtraClass", $context) ? $context["tdExtraClass"] : (function () { throw new RuntimeError('Variable "tdExtraClass" does not exist.', 105, $this->source); })()), "html", null, true);
                echo "\" rowspan=\"";
                echo twig_escape_filter($this->env, (isset($context["rowSpan"]) || array_key_exists("rowSpan", $context) ? $context["rowSpan"] : (function () { throw new RuntimeError('Variable "rowSpan" does not exist.', 105, $this->source); })()), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 106
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 106, $this->source); })()), "html", null, true);
                echo "\"
                       title=\"";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "language", [], "any", false, false, false, 107), "name", [], "any", false, false, false, 107), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "langid", [], "any", false, false, false, 107), "html", null, true);
                echo "</a>
                </td>
                ";
                // line 109
                if (((isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 109, $this->source); })()) && (isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 109, $this->source); })()))) {
                    // line 110
                    echo "                    <td class=\"";
                    echo twig_escape_filter($this->env, (isset($context["tdExtraClass"]) || array_key_exists("tdExtraClass", $context) ? $context["tdExtraClass"] : (function () { throw new RuntimeError('Variable "tdExtraClass" does not exist.', 110, $this->source); })()), "html", null, true);
                    echo "\">
                        <a href=\"";
                    // line 111
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 111, $this->source); })()), "html", null, true);
                    echo "\">
                            Local
                        </a>
                    </td>
                ";
                }
                // line 116
                echo "                <td class=\"";
                echo twig_escape_filter($this->env, (isset($context["tdExtraClass"]) || array_key_exists("tdExtraClass", $context) ? $context["tdExtraClass"] : (function () { throw new RuntimeError('Variable "tdExtraClass" does not exist.', 116, $this->source); })()), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 117
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 117, $this->source); })()), "html", null, true);
                echo "\">";
                // line 118
                if ((twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 118) > twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "contest", [], "any", false, false, false, 118), "endtime", [], "any", false, false, false, 118))) {
                    // line 119
                    echo "                            ";
                    echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("too-late");
                    // line 120
                    if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 120), "first", [], "any", false, false, false, 120)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 120), "first", [], "any", false, false, false, 120), "result", [], "any", false, false, false, 120)))) {
                        // line 121
                        echo "                                (";
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 121), "first", [], "any", false, false, false, 121), "result", [], "any", false, false, false, 121));
                        echo ")";
                    }
                } elseif ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 123
$context["submission"], "judgings", [], "any", false, false, false, 123), "first", [], "any", false, false, false, 123)) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 123), "first", [], "any", false, false, false, 123), "result", [], "any", false, false, false, 123)))) {
                    // line 124
                    if (twig_get_attribute($this->env, $this->source, $context["submission"], "judgehost", [], "any", false, false, false, 124)) {
                        // line 125
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("");
                    } else {
                        // line 127
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("queued");
                    }
                } else {
                    // line 130
                    echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 130), "first", [], "any", false, false, false, 130), "result", [], "any", false, false, false, 130));
                }
                // line 132
                if (twig_get_attribute($this->env, $this->source, $context["submission"], "stillBusy", [], "any", false, false, false, 132)) {
                    // line 133
                    echo "(&hellip;)";
                }
                // line 135
                echo "</a>
                </td>
                ";
                // line 137
                if (((isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 137, $this->source); })()) &&  !(isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 137, $this->source); })()))) {
                    // line 138
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 138), "empty", [], "any", false, false, false, 138)) {
                        // line 139
                        echo "                        ";
                        $context["externalJudgement"] = null;
                        // line 140
                        echo "                    ";
                    } else {
                        // line 141
                        echo "                        ";
                        $context["externalJudgement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 141), "first", [], "any", false, false, false, 141);
                        // line 142
                        echo "                    ";
                    }
                    // line 143
                    echo "                    <td class=\"";
                    echo twig_escape_filter($this->env, (isset($context["tdExtraClass"]) || array_key_exists("tdExtraClass", $context) ? $context["tdExtraClass"] : (function () { throw new RuntimeError('Variable "tdExtraClass" does not exist.', 143, $this->source); })()), "html", null, true);
                    echo "\">
                        <a href=\"";
                    // line 144
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 144, $this->source); })()), "html", null, true);
                    echo "\">
                            ";
                    // line 145
                    if (((null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 145, $this->source); })())) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 145, $this->source); })()), "result", [], "any", false, false, false, 145)))) {
                        // line 146
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("pending");
                    } else {
                        // line 148
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 148, $this->source); })()), "result", [], "any", false, false, false, 148));
                    }
                    // line 150
                    echo "                        </a>
                    </td>
                ";
                }
                // line 153
                $context["claim"] = false;
                // line 154
                echo "                ";
                if (((isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 154, $this->source); })()) && (isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 154, $this->source); })()))) {
                    // line 155
                    if (((((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 155), "first", [], "any", false, false, false, 155)) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 155), "first", [], "any", false, false, false, 155), "result", [], "any", false, false, false, 155))) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 155), "first", [], "any", false, false, false, 155))) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 155), "first", [], "any", false, false, false, 155), "result", [], "any", false, false, false, 155))) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 155), "first", [], "any", false, false, false, 155), "result", [], "any", false, false, false, 155) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 155), "first", [], "any", false, false, false, 155), "result", [], "any", false, false, false, 155)))) {
                        // line 156
                        $context["verified"] = "-";
                        // line 157
                        $context["juryMember"] = "-";
                    } else {
                        // line 159
                        $context["juryMember"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 159), "first", [], "any", false, false, false, 159), "juryMember", [], "any", false, false, false, 159);
                        // line 160
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 160), "first", [], "any", false, false, false, 160), "verified", [], "any", false, false, false, 160)) {
                            // line 161
                            $context["verified"] = "yes";
                            // line 162
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 162), "first", [], "any", false, false, false, 162), "verifyComment", [], "any", false, false, false, 162)) {
                                // line 163
                                $context["verified"] = (((isset($context["verified"]) || array_key_exists("verified", $context) ? $context["verified"] : (function () { throw new RuntimeError('Variable "verified" does not exist.', 163, $this->source); })()) . ": ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 163), "first", [], "any", false, false, false, 163), "verifyComment", [], "any", false, false, false, 163));
                                // line 164
                                echo "                            ";
                            }
                        } else {
                            // line 166
                            $context["verified"] = "no";
                            // line 167
                            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 167), "first", [], "any", false, false, false, 167), "juryMember", [], "any", false, false, false, 167))) {
                                // line 168
                                $context["claim"] = true;
                            } else {
                                // line 170
                                $context["verified"] = "claimed";
                            }
                        }
                    }
                    // line 174
                    if ((isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 174, $this->source); })())) {
                        // line 175
                        $context["claimArg"] = ["claimdiff" => 1];
                    } else {
                        // line 177
                        $context["claimArg"] = ["unclaimdiff" => 1];
                    }
                    // line 179
                    echo "                ";
                } else {
                    // line 180
                    if ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 180), "first", [], "any", false, false, false, 180)) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 180), "first", [], "any", false, false, false, 180), "result", [], "any", false, false, false, 180)))) {
                        // line 181
                        $context["verified"] = "";
                        // line 182
                        $context["juryMember"] = "";
                    } else {
                        // line 184
                        $context["juryMember"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 184), "first", [], "any", false, false, false, 184), "juryMember", [], "any", false, false, false, 184);
                        // line 185
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 185), "first", [], "any", false, false, false, 185), "verified", [], "any", false, false, false, 185)) {
                            // line 186
                            $context["verified"] = "yes";
                        } else {
                            // line 188
                            $context["verified"] = "no";
                            // line 189
                            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 189), "first", [], "any", false, false, false, 189), "juryMember", [], "any", false, false, false, 189))) {
                                // line 190
                                $context["claim"] = true;
                            } else {
                                // line 192
                                $context["verified"] = "claimed";
                            }
                        }
                    }
                    // line 196
                    if ((isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 196, $this->source); })())) {
                        // line 197
                        $context["claimArg"] = ["claim" => 1];
                    } else {
                        // line 199
                        $context["claimArg"] = ["unclaim" => 1];
                    }
                    // line 201
                    echo "                ";
                }
                // line 202
                echo "                <td class=\"";
                echo twig_escape_filter($this->env, (isset($context["tdExtraClass"]) || array_key_exists("tdExtraClass", $context) ? $context["tdExtraClass"] : (function () { throw new RuntimeError('Variable "tdExtraClass" does not exist.', 202, $this->source); })()), "html", null, true);
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 202, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["verified"]) || array_key_exists("verified", $context) ? $context["verified"] : (function () { throw new RuntimeError('Variable "verified" does not exist.', 202, $this->source); })()), "html", null, true);
                echo "</a></td>
                ";
                // line 203
                if (( !(isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 203, $this->source); })()) ||  !(isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 203, $this->source); })()))) {
                    // line 204
                    echo "                    <td class=\"";
                    echo twig_escape_filter($this->env, (isset($context["tdExtraClass"]) || array_key_exists("tdExtraClass", $context) ? $context["tdExtraClass"] : (function () { throw new RuntimeError('Variable "tdExtraClass" does not exist.', 204, $this->source); })()), "html", null, true);
                    echo "\">";
                    // line 205
                    if ((isset($context["rejudging"]) || array_key_exists("rejudging", $context))) {
                        // line 206
                        $context["claimLink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", twig_array_merge((isset($context["claimArg"]) || array_key_exists("claimArg", $context) ? $context["claimArg"] : (function () { throw new RuntimeError('Variable "claimArg" does not exist.', 206, $this->source); })()), ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 206), "rejudgingid" => twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 206, $this->source); })()), "rejudgingid", [], "any", false, false, false, 206)]));
                    } else {
                        // line 208
                        $context["claimLink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", twig_array_merge((isset($context["claimArg"]) || array_key_exists("claimArg", $context) ? $context["claimArg"] : (function () { throw new RuntimeError('Variable "claimArg" does not exist.', 208, $this->source); })()), ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 208)]));
                    }
                    // line 210
                    if ((isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 210, $this->source); })())) {
                        // line 211
                        echo "<a class=\"btn btn-outline-secondary btn-sm\"
                               href=\"";
                        // line 212
                        echo twig_escape_filter($this->env, (isset($context["claimLink"]) || array_key_exists("claimLink", $context) ? $context["claimLink"] : (function () { throw new RuntimeError('Variable "claimLink" does not exist.', 212, $this->source); })()), "html", null, true);
                        echo "\">claim</a>";
                    } elseif ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 213
$context["submission"], "judgings", [], "any", false, false, false, 213), "first", [], "any", false, false, false, 213) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 213), "first", [], "any", false, false, false, 213), "verified", [], "any", false, false, false, 213)) && ((isset($context["juryMember"]) || array_key_exists("juryMember", $context) ? $context["juryMember"] : (function () { throw new RuntimeError('Variable "juryMember" does not exist.', 213, $this->source); })()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 213, $this->source); })()), "user", [], "any", false, false, false, 213), "username", [], "any", false, false, false, 213)))) {
                        // line 214
                        echo "<a class=\"btn btn-info btn-sm\" href=\"";
                        echo twig_escape_filter($this->env, (isset($context["claimLink"]) || array_key_exists("claimLink", $context) ? $context["claimLink"] : (function () { throw new RuntimeError('Variable "claimLink" does not exist.', 214, $this->source); })()), "html", null, true);
                        echo "\">unclaim</a>";
                    } else {
                        // line 216
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 216, $this->source); })()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (isset($context["juryMember"]) || array_key_exists("juryMember", $context) ? $context["juryMember"] : (function () { throw new RuntimeError('Variable "juryMember" does not exist.', 216, $this->source); })()), "html", null, true);
                        echo "</a>";
                    }
                    // line 218
                    echo "</td>
                ";
                }
                // line 220
                if ((isset($context["rejudging"]) || array_key_exists("rejudging", $context))) {
                    // line 221
                    echo "
                    <td class=\"";
                    // line 222
                    echo twig_escape_filter($this->env, (isset($context["tdExtraClass"]) || array_key_exists("tdExtraClass", $context) ? $context["tdExtraClass"] : (function () { throw new RuntimeError('Variable "tdExtraClass" does not exist.', 222, $this->source); })()), "html", null, true);
                    echo "\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 222)]), "html", null, true);
                    echo "\">
                            ";
                    // line 223
                    echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, $context["submission"], "oldResult", [], "any", false, false, false, 223));
                    echo "
                        </a></td>";
                }
                // line 226
                if (((isset($context["showTestcases"]) || array_key_exists("showTestcases", $context)) && (isset($context["showTestcases"]) || array_key_exists("showTestcases", $context) ? $context["showTestcases"] : (function () { throw new RuntimeError('Variable "showTestcases" does not exist.', 226, $this->source); })()))) {
                    // line 227
                    echo "
                    <td class=\"testcase-results";
                    // line 228
                    echo twig_escape_filter($this->env, (isset($context["tdExtraClass"]) || array_key_exists("tdExtraClass", $context) ? $context["tdExtraClass"] : (function () { throw new RuntimeError('Variable "tdExtraClass" does not exist.', 228, $this->source); })()), "html", null, true);
                    echo "\">";
                    // line 229
                    echo $this->extensions['App\Twig\TwigExtension']->testcaseResults($context["submission"]);
                    // line 230
                    echo "</td>";
                }
                // line 232
                echo "
            </tr>
            ";
                // line 234
                if (((isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 234, $this->source); })()) && (isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 234, $this->source); })()))) {
                    // line 235
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 235), "empty", [], "any", false, false, false, 235)) {
                        // line 236
                        echo "                    ";
                        $context["externalJudgement"] = null;
                        // line 237
                        echo "                ";
                    } else {
                        // line 238
                        echo "                    ";
                        $context["externalJudgement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 238), "first", [], "any", false, false, false, 238);
                        // line 239
                        echo "                ";
                    }
                    // line 240
                    echo "                ";
                    if ( !twig_test_empty((isset($context["external_ccs_submission_url"]) || array_key_exists("external_ccs_submission_url", $context) ? $context["external_ccs_submission_url"] : (function () { throw new RuntimeError('Variable "external_ccs_submission_url" does not exist.', 240, $this->source); })()))) {
                        // line 241
                        echo "                    ";
                        $context["externalSubmissionUrl"] = $this->extensions['App\Twig\TwigExtension']->externalCcsUrl($context["submission"]);
                        // line 242
                        echo "                ";
                    } else {
                        // line 243
                        echo "                    ";
                        $context["externalSubmissionUrl"] = null;
                        // line 244
                        echo "                ";
                    }
                    // line 245
                    echo "                <td>
                    <a ";
                    // line 246
                    if ( !(null === (isset($context["externalSubmissionUrl"]) || array_key_exists("externalSubmissionUrl", $context) ? $context["externalSubmissionUrl"] : (function () { throw new RuntimeError('Variable "externalSubmissionUrl" does not exist.', 246, $this->source); })()))) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, (isset($context["externalSubmissionUrl"]) || array_key_exists("externalSubmissionUrl", $context) ? $context["externalSubmissionUrl"] : (function () { throw new RuntimeError('Variable "externalSubmissionUrl" does not exist.', 246, $this->source); })()), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                        External
                    </a>
                </td>
                <td>
                    <a ";
                    // line 251
                    if ( !(null === (isset($context["externalSubmissionUrl"]) || array_key_exists("externalSubmissionUrl", $context) ? $context["externalSubmissionUrl"] : (function () { throw new RuntimeError('Variable "externalSubmissionUrl" does not exist.', 251, $this->source); })()))) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, (isset($context["externalSubmissionUrl"]) || array_key_exists("externalSubmissionUrl", $context) ? $context["externalSubmissionUrl"] : (function () { throw new RuntimeError('Variable "externalSubmissionUrl" does not exist.', 251, $this->source); })()), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                        ";
                    // line 252
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "externalid", [], "any", false, false, false, 252), "html", null, true);
                    echo "
                    </a>
                </td>
                <td>
                    <a ";
                    // line 256
                    if ( !(null === (isset($context["externalSubmissionUrl"]) || array_key_exists("externalSubmissionUrl", $context) ? $context["externalSubmissionUrl"] : (function () { throw new RuntimeError('Variable "externalSubmissionUrl" does not exist.', 256, $this->source); })()))) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, (isset($context["externalSubmissionUrl"]) || array_key_exists("externalSubmissionUrl", $context) ? $context["externalSubmissionUrl"] : (function () { throw new RuntimeError('Variable "externalSubmissionUrl" does not exist.', 256, $this->source); })()), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                        External
                    </a>
                </td>
                <td>
                    <a ";
                    // line 261
                    if ( !(null === (isset($context["externalSubmissionUrl"]) || array_key_exists("externalSubmissionUrl", $context) ? $context["externalSubmissionUrl"] : (function () { throw new RuntimeError('Variable "externalSubmissionUrl" does not exist.', 261, $this->source); })()))) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, (isset($context["externalSubmissionUrl"]) || array_key_exists("externalSubmissionUrl", $context) ? $context["externalSubmissionUrl"] : (function () { throw new RuntimeError('Variable "externalSubmissionUrl" does not exist.', 261, $this->source); })()), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                        ";
                    // line 262
                    if (((null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 262, $this->source); })())) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 262, $this->source); })()), "result", [], "any", false, false, false, 262)))) {
                        // line 263
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("pending");
                    } else {
                        // line 265
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 265, $this->source); })()), "result", [], "any", false, false, false, 265));
                    }
                    // line 267
                    echo "                    </a>
                </td>
                <td>";
                    // line 270
                    $context["claimLink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", twig_array_merge((isset($context["claimArg"]) || array_key_exists("claimArg", $context) ? $context["claimArg"] : (function () { throw new RuntimeError('Variable "claimArg" does not exist.', 270, $this->source); })()), ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 270)]));
                    // line 271
                    if ((isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 271, $this->source); })())) {
                        // line 272
                        echo "<a class=\"btn btn-outline-secondary btn-sm\" href=\"";
                        echo twig_escape_filter($this->env, (isset($context["claimLink"]) || array_key_exists("claimLink", $context) ? $context["claimLink"] : (function () { throw new RuntimeError('Variable "claimLink" does not exist.', 272, $this->source); })()), "html", null, true);
                        echo "\">claim</a>";
                    } elseif ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 273
$context["submission"], "externalJudgements", [], "any", false, false, false, 273), "first", [], "any", false, false, false, 273) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 273), "first", [], "any", false, false, false, 273), "verified", [], "any", false, false, false, 273)) && ((isset($context["juryMember"]) || array_key_exists("juryMember", $context) ? $context["juryMember"] : (function () { throw new RuntimeError('Variable "juryMember" does not exist.', 273, $this->source); })()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 273, $this->source); })()), "user", [], "any", false, false, false, 273), "username", [], "any", false, false, false, 273)))) {
                        // line 274
                        echo "<a class=\"btn btn-info btn-sm\" href=\"";
                        echo twig_escape_filter($this->env, (isset($context["claimLink"]) || array_key_exists("claimLink", $context) ? $context["claimLink"] : (function () { throw new RuntimeError('Variable "claimLink" does not exist.', 274, $this->source); })()), "html", null, true);
                        echo "\">unclaim</a>";
                    } else {
                        // line 276
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 276, $this->source); })()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (isset($context["juryMember"]) || array_key_exists("juryMember", $context) ? $context["juryMember"] : (function () { throw new RuntimeError('Variable "juryMember" does not exist.', 276, $this->source); })()), "html", null, true);
                        echo "</a>";
                    }
                    // line 278
                    echo "</td>
                <td class=\"testcase-results\">";
                    // line 280
                    echo $this->extensions['App\Twig\TwigExtension']->testcaseResults($context["submission"], true);
                    // line 281
                    echo "</td>
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            echo "
        </tbody>
    </table>

    <p>
        Total correct: ";
            // line 289
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 289, $this->source); })()), "correct", [], "any", false, false, false, 289), "html", null, true);
            echo ", submitted: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 289, $this->source); })()), "total", [], "any", false, false, false, 289), "html", null, true);
            // line 290
            if ((twig_get_attribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 290, $this->source); })()), "unverified", [], "any", false, false, false, 290) > 0)) {
                // line 291
                echo ", unverified: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 291, $this->source); })()), "unverified", [], "any", false, false, false, 291), "html", null, true);
            }
            // line 293
            if ((twig_get_attribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 293, $this->source); })()), "ignored", [], "any", false, false, false, 293) > 0)) {
                // line 294
                echo ", ignored: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 294, $this->source); })()), "ignored", [], "any", false, false, false, 294), "html", null, true);
            }
            // line 296
            if ((twig_get_attribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 296, $this->source); })()), "queued", [], "any", false, false, false, 296) > 0)) {
                // line 297
                echo ", judgement pending: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 297, $this->source); })()), "queued", [], "any", false, false, false, 297), "html", null, true);
            }
            // line 299
            echo "</p>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/submission_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  731 => 299,  727 => 297,  725 => 296,  721 => 294,  719 => 293,  715 => 291,  713 => 290,  709 => 289,  702 => 284,  694 => 281,  692 => 280,  689 => 278,  682 => 276,  677 => 274,  675 => 273,  671 => 272,  669 => 271,  667 => 270,  663 => 267,  660 => 265,  657 => 263,  655 => 262,  647 => 261,  635 => 256,  628 => 252,  620 => 251,  608 => 246,  605 => 245,  602 => 244,  599 => 243,  596 => 242,  593 => 241,  590 => 240,  587 => 239,  584 => 238,  581 => 237,  578 => 236,  575 => 235,  573 => 234,  569 => 232,  566 => 230,  564 => 229,  561 => 228,  558 => 227,  556 => 226,  551 => 223,  545 => 222,  542 => 221,  540 => 220,  536 => 218,  529 => 216,  524 => 214,  522 => 213,  519 => 212,  516 => 211,  514 => 210,  511 => 208,  508 => 206,  506 => 205,  502 => 204,  500 => 203,  491 => 202,  488 => 201,  485 => 199,  482 => 197,  480 => 196,  475 => 192,  472 => 190,  470 => 189,  468 => 188,  465 => 186,  463 => 185,  461 => 184,  458 => 182,  456 => 181,  454 => 180,  451 => 179,  448 => 177,  445 => 175,  443 => 174,  438 => 170,  435 => 168,  433 => 167,  431 => 166,  427 => 164,  425 => 163,  423 => 162,  421 => 161,  419 => 160,  417 => 159,  414 => 157,  412 => 156,  410 => 155,  407 => 154,  405 => 153,  400 => 150,  397 => 148,  394 => 146,  392 => 145,  388 => 144,  383 => 143,  380 => 142,  377 => 141,  374 => 140,  371 => 139,  368 => 138,  366 => 137,  362 => 135,  359 => 133,  357 => 132,  354 => 130,  350 => 127,  347 => 125,  345 => 124,  343 => 123,  338 => 121,  336 => 120,  333 => 119,  331 => 118,  328 => 117,  323 => 116,  315 => 111,  310 => 110,  308 => 109,  301 => 107,  297 => 106,  291 => 105,  284 => 103,  280 => 102,  274 => 101,  267 => 99,  263 => 98,  257 => 97,  250 => 95,  244 => 94,  241 => 93,  232 => 91,  230 => 90,  224 => 88,  219 => 87,  211 => 82,  206 => 81,  204 => 80,  200 => 79,  196 => 78,  192 => 77,  188 => 76,  182 => 75,  179 => 74,  176 => 72,  173 => 70,  171 => 69,  167 => 68,  162 => 64,  158 => 61,  156 => 60,  152 => 57,  150 => 56,  146 => 54,  144 => 53,  141 => 52,  137 => 50,  133 => 48,  131 => 47,  128 => 46,  124 => 44,  121 => 43,  117 => 41,  113 => 39,  111 => 38,  104 => 33,  100 => 30,  98 => 29,  94 => 27,  90 => 25,  88 => 24,  83 => 21,  79 => 19,  77 => 18,  74 => 17,  70 => 15,  67 => 14,  65 => 13,  63 => 12,  61 => 11,  58 => 10,  54 => 8,  52 => 7,  48 => 5,  46 => 4,  43 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# Render a list of submissions for a jury page #}
{# @var \\App\\Entity\\ExternalJudgement externalJudgement #}

{% if showExternalResult is not defined %}
    {% set showExternalResult = false %}
{% endif %}
{% if showExternalTestcases is not defined %}
    {% set showExternalTestcases = false %}
{% endif %}

{% set rowSpan = 1 %}
{% set tdExtraClass = '' %}
{% if showExternalResult and showExternalTestcases %}
    {% set rowSpan = 2 %}
    {% set tdExtraClass = ' thick-border' %}
{% endif %}

{% if submissions is empty %}
    <div class=\"alert alert-warning\">No submissions</div>
{% else %}
    <table class=\"data-table table table-hover table-striped table-sm submissions-table\">
        <thead class=\"thead-light\">
        <tr>
            {% if showExternalResult and showExternalTestcases %}
                <th scope=\"col\" colspan=\"2\">ID</th>
            {% else %}
                <th scope=\"col\">ID</th>
            {% endif %}
            {%- if showContest %}

                <th scope=\"col\">contest</th>
            {%- endif %}

            <th scope=\"col\">time</th>
            <th scope=\"col\">team</th>
            <th scope=\"col\">problem</th>
            <th scope=\"col\">lang</th>
            {% if showExternalResult and showExternalTestcases %}
                <th scope=\"col\" colspan=\"2\">result</th>
            {% else %}
                <th scope=\"col\">result</th>
            {% endif %}
            {% if showExternalResult and not showExternalTestcases %}
                <th scope=\"col\">external result</th>
            {% endif %}
            <th scope=\"col\">
                {% if showExternalResult and showExternalTestcases %}
                    shadow diff verified
                {% else %}
                    verified
                {% endif %}
            </th>
            {% if not showExternalResult or not showExternalTestcases %}
                <th scope=\"col\">by</th>
            {% endif %}
            {%- if rejudging is defined %}

                <th scope=\"col\">old result</th>
            {%- endif %}
            {%- if showTestcases is defined and showTestcases %}

                <th scope=\"col\" class=\"not-sortable not-searchable\">test results</th>
            {%- endif %}

        </tr>
        </thead>
        <tbody>
        {%- for submission in submissions %}
            {%- if rejudging is defined %}
                {%- set link = path('jury_submission', {submitId: submission.submitid, rejudgingid: rejudging.rejudgingid}) %}
            {%- else %}
                {%- set link = path('jury_submission', {submitId: submission.submitid}) %}
            {%- endif %}

            <tr class=\"{% if not submission.valid %}ignore{% endif %}\"
                data-problem-id=\"{{ submission.probid }}\"
                data-team-id=\"{{ submission.teamid }}\"
                data-language-id=\"{{ submission.langid }}\"
                data-submission-id=\"{{ submission.submitid }}\">
                {% if showExternalResult and showExternalTestcases %}
                    <td class=\"{{ tdExtraClass }}\">
                        <a href=\"{{ link }}\">
                            Local
                        </a>
                    </td>
                {% endif %}
                <td class=\"{{ tdExtraClass }}\">
                    <a href=\"{{ link }}\">s{{ submission.submitid }}</a>
                </td>
                {%- if showContest %}
                    <td class=\"{{ tdExtraClass }}\"><a href=\"{{ link }}\">c{{ submission.cid }}</a></td>
                {%- endif %}

                <td rowspan=\"{{ rowSpan }}\" class=\"{{ tdExtraClass }}\">
                    <a href=\"{{ link }}\">{{ submission.submittime | printtime(null, submission.contest) }}</a>
                </td>
                <td rowspan=\"{{ rowSpan }}\" class=\"{{ tdExtraClass }}\">
                    <a href=\"{{ link }}\"
                       title=\"t{{ submission.teamid }}\">{{ submission.team.name | truncate(30) }}</a>
                </td>
                <td class=\"probid{{ tdExtraClass }}\" rowspan=\"{{ rowSpan }}\">
                    <a href=\"{{ link }}\"
                       title=\"{{ submission.problem.name }}\">{{ submission.contestProblem.shortname }}</a>
                </td>
                <td class=\"langid{{ tdExtraClass }}\" rowspan=\"{{ rowSpan }}\">
                    <a href=\"{{ link }}\"
                       title=\"{{ submission.language.name }}\">{{ submission.langid }}</a>
                </td>
                {% if showExternalResult and showExternalTestcases %}
                    <td class=\"{{ tdExtraClass }}\">
                        <a href=\"{{ link }}\">
                            Local
                        </a>
                    </td>
                {% endif %}
                <td class=\"{{ tdExtraClass }}\">
                    <a href=\"{{ link }}\">
                        {%- if submission.submittime > submission.contest.endtime %}
                            {{ 'too-late' | printValidJuryResult }}
                            {%- if submission.judgings.first is not empty and submission.judgings.first.result is not empty %}
                                ({{ submission.judgings.first.result | printValidJuryResult }})
                            {%- endif %}
                        {%- elseif submission.judgings.first is empty or submission.judgings.first.result is empty %}
                            {%- if submission.judgehost %}
                                {{- '' | printValidJuryResult -}}
                            {%- else %}
                                {{- 'queued' | printValidJuryResult -}}
                            {%- endif %}
                        {%- else %}
                            {{- submission.judgings.first.result | printValidJuryResult -}}
                        {%- endif %}
                        {%- if submission.stillBusy -%}
                            (&hellip;)
                        {%- endif -%}
                    </a>
                </td>
                {% if showExternalResult and not showExternalTestcases %}
                    {% if submission.externalJudgements.empty %}
                        {% set externalJudgement = null %}
                    {% else %}
                        {% set externalJudgement = submission.externalJudgements.first %}
                    {% endif %}
                    <td class=\"{{ tdExtraClass }}\">
                        <a href=\"{{ link }}\">
                            {% if externalJudgement is null or externalJudgement.result is empty %}
                                {{- 'pending' | printValidJuryResult -}}
                            {% else %}
                                {{- externalJudgement.result | printValidJuryResult -}}
                            {% endif %}
                        </a>
                    </td>
                {% endif %}
                {%- set claim = false %}
                {% if showExternalResult and showExternalTestcases %}
                    {%- if submission.externalJudgements.first is empty or submission.externalJudgements.first.result is empty or submission.judgings.first is empty or submission.judgings.first.result is empty or submission.judgings.first.result == submission.externalJudgements.first.result -%}
                        {%- set verified = '-' %}
                        {%- set juryMember = '-' %}
                    {%- else %}
                        {%- set juryMember = submission.externalJudgements.first.juryMember %}
                        {%- if submission.externalJudgements.first.verified %}
                            {%- set verified = 'yes' %}
                            {%- if submission.externalJudgements.first.verifyComment %}
                                {%- set verified = verified ~ ': ' ~ submission.externalJudgements.first.verifyComment %}
                            {% endif %}
                        {%- else %}
                            {%- set verified = 'no' %}
                            {%- if submission.externalJudgements.first.juryMember is empty %}
                                {%- set claim = true %}
                            {%- else %}
                                {%- set verified = 'claimed' %}
                            {%- endif %}
                        {%- endif %}
                    {%- endif %}
                    {%- if claim %}
                        {%- set claimArg = {claimdiff: 1} %}
                    {%- else %}
                        {%- set claimArg = {unclaimdiff: 1} %}
                    {%- endif %}
                {% else %}
                    {%- if submission.judgings.first is empty or submission.judgings.first.result is empty -%}
                        {%- set verified = '' %}
                        {%- set juryMember = '' %}
                    {%- else %}
                        {%- set juryMember = submission.judgings.first.juryMember %}
                        {%- if submission.judgings.first.verified %}
                            {%- set verified = 'yes' %}
                        {%- else %}
                            {%- set verified = 'no' %}
                            {%- if submission.judgings.first.juryMember is empty %}
                                {%- set claim = true %}
                            {%- else %}
                                {%- set verified = 'claimed' %}
                            {%- endif %}
                        {%- endif %}
                    {%- endif %}
                    {%- if claim %}
                        {%- set claimArg = {claim: 1} %}
                    {%- else %}
                        {%- set claimArg = {unclaim: 1} %}
                    {%- endif %}
                {% endif %}
                <td class=\"{{ tdExtraClass }}\"><a href=\"{{ link }}\">{{ verified }}</a></td>
                {% if not showExternalResult or not showExternalTestcases %}
                    <td class=\"{{ tdExtraClass }}\">
                        {%- if rejudging is defined %}
                            {%- set claimLink = path('jury_submission', claimArg | merge({submitId: submission.submitid, rejudgingid: rejudging.rejudgingid})) %}
                        {%- else %}
                            {%- set claimLink = path('jury_submission', claimArg | merge({submitId: submission.submitid})) %}
                        {%- endif %}
                        {%- if claim -%}
                            <a class=\"btn btn-outline-secondary btn-sm\"
                               href=\"{{ claimLink }}\">claim</a>
                        {%- elseif (not submission.judgings.first or not submission.judgings.first.verified) and juryMember == app.user.username -%}
                            <a class=\"btn btn-info btn-sm\" href=\"{{ claimLink }}\">unclaim</a>
                        {%- else -%}
                            <a href=\"{{ link }}\">{{ juryMember }}</a>
                        {%- endif -%}
                    </td>
                {% endif %}
                {%- if rejudging is defined %}

                    <td class=\"{{ tdExtraClass }}\"><a href=\"{{ path('jury_submission', {submitId: submission.submitid}) }}\">
                            {{ submission.oldResult | printValidJuryResult }}
                        </a></td>
                {%- endif %}
                {%- if showTestcases is defined and showTestcases %}

                    <td class=\"testcase-results{{ tdExtraClass }}\">
                        {{- submission | testcaseResults -}}
                    </td>
                {%- endif %}

            </tr>
            {% if showExternalResult and showExternalTestcases %}
                {% if submission.externalJudgements.empty %}
                    {% set externalJudgement = null %}
                {% else %}
                    {% set externalJudgement = submission.externalJudgements.first %}
                {% endif %}
                {% if external_ccs_submission_url is not empty %}
                    {% set externalSubmissionUrl = submission | externalCcsUrl %}
                {% else %}
                    {% set externalSubmissionUrl = null %}
                {% endif %}
                <td>
                    <a {% if externalSubmissionUrl is not null %}href=\"{{ externalSubmissionUrl }}\"{% endif %}>
                        External
                    </a>
                </td>
                <td>
                    <a {% if externalSubmissionUrl is not null %}href=\"{{ externalSubmissionUrl }}\"{% endif %}>
                        {{ submission.externalid }}
                    </a>
                </td>
                <td>
                    <a {% if externalSubmissionUrl is not null %}href=\"{{ externalSubmissionUrl }}\"{% endif %}>
                        External
                    </a>
                </td>
                <td>
                    <a {% if externalSubmissionUrl is not null %}href=\"{{ externalSubmissionUrl }}\"{% endif %}>
                        {% if externalJudgement is null or externalJudgement.result is empty %}
                            {{- 'pending' | printValidJuryResult -}}
                        {% else %}
                            {{- externalJudgement.result | printValidJuryResult -}}
                        {% endif %}
                    </a>
                </td>
                <td>
                    {%- set claimLink = path('jury_submission', claimArg | merge({submitId: submission.submitid})) %}
                    {%- if claim -%}
                        <a class=\"btn btn-outline-secondary btn-sm\" href=\"{{ claimLink }}\">claim</a>
                    {%- elseif (not submission.externalJudgements.first or not submission.externalJudgements.first.verified) and juryMember == app.user.username -%}
                        <a class=\"btn btn-info btn-sm\" href=\"{{ claimLink }}\">unclaim</a>
                    {%- else -%}
                        <a href=\"{{ link }}\">{{ juryMember }}</a>
                    {%- endif -%}
                </td>
                <td class=\"testcase-results\">
                    {{- submission | testcaseResults(true) -}}
                </td>
            {% endif %}
        {%- endfor %}

        </tbody>
    </table>

    <p>
        Total correct: {{ submissionCounts.correct }}, submitted: {{ submissionCounts.total }}
        {%- if submissionCounts.unverified > 0 -%}
            , unverified: {{ submissionCounts.unverified }}
        {%- endif -%}
        {%- if submissionCounts.ignored > 0 -%}
            , ignored: {{ submissionCounts.ignored }}
        {%- endif -%}
        {%- if submissionCounts.queued > 0 -%}
            , judgement pending: {{ submissionCounts.queued }}
        {%- endif -%}
    </p>
{% endif %}
", "jury/partials/submission_list.html.twig", "/domjudge/webapp/templates/jury/partials/submission_list.html.twig");
    }
}
