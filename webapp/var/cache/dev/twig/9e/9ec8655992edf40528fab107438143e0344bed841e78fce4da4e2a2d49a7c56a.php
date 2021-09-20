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

/* partials/scoreboard_table.html.twig */
class __TwigTemplate_7c6c070d75c4500f309839d0fad91734a54c6105434a9d3e8a870f0d62e8197e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/scoreboard_table.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/scoreboard_table.html.twig"));

        // line 1
        if ( !(isset($context["limitToTeams"]) || array_key_exists("limitToTeams", $context))) {
            // line 2
            echo "    ";
            $context["limitToTeams"] = null;
            // line 3
            echo "    ";
            $context["limitToTeamIds"] = null;
        } else {
            // line 5
            echo "    ";
            $context["limitToTeamIds"] = [];
            // line 6
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["limitToTeams"]) || array_key_exists("limitToTeams", $context) ? $context["limitToTeams"] : (function () { throw new RuntimeError('Variable "limitToTeams" does not exist.', 6, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 7
                echo "        ";
                $context["limitToTeamIds"] = twig_array_merge((isset($context["limitToTeamIds"]) || array_key_exists("limitToTeamIds", $context) ? $context["limitToTeamIds"] : (function () { throw new RuntimeError('Variable "limitToTeamIds" does not exist.', 7, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 7)]);
                // line 8
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 10
        if ( !(isset($context["showLegends"]) || array_key_exists("showLegends", $context))) {
            // line 11
            echo "    ";
            $context["showLegends"] = false;
        }
        // line 13
        if ( !(isset($context["static"]) || array_key_exists("static", $context))) {
            // line 14
            echo "    ";
            $context["static"] = false;
        }
        // line 16
        $context["showPoints"] = twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 16, $this->source); })()), "showPoints", [], "any", false, false, false, 16);
        // line 17
        $context["usedCategories"] = twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 17, $this->source); })()), "usedCategories", [0 => (isset($context["limitToTeamIds"]) || array_key_exists("limitToTeamIds", $context) ? $context["limitToTeamIds"] : (function () { throw new RuntimeError('Variable "limitToTeamIds" does not exist.', 17, $this->source); })())], "method", false, false, false, 17);
        // line 18
        $context["hasDifferentCategoryColors"] = twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 18, $this->source); })()), "categoryColors", [0 => (isset($context["limitToTeamIds"]) || array_key_exists("limitToTeamIds", $context) ? $context["limitToTeamIds"] : (function () { throw new RuntimeError('Variable "limitToTeamIds" does not exist.', 18, $this->source); })())], "method", false, false, false, 18);
        // line 19
        $context["scores"] = twig_array_filter(twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 19, $this->source); })()), "scores", [], "any", false, false, false, 19), function ($__score__) use ($context, $macros) { $context["score"] = $__score__; return ((null === (isset($context["limitToTeams"]) || array_key_exists("limitToTeams", $context) ? $context["limitToTeams"] : (function () { throw new RuntimeError('Variable "limitToTeams" does not exist.', 19, $this->source); })())) || twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 19, $this->source); })()), "team", [], "any", false, false, false, 19), "teamid", [], "any", false, false, false, 19), (isset($context["limitToTeamIds"]) || array_key_exists("limitToTeamIds", $context) ? $context["limitToTeamIds"] : (function () { throw new RuntimeError('Variable "limitToTeamIds" does not exist.', 19, $this->source); })()))); });
        // line 20
        $context["problems"] = twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 20, $this->source); })()), "problems", [], "any", false, false, false, 20);
        // line 21
        echo "
";
        // line 22
        if (((isset($context["maxWidth"]) || array_key_exists("maxWidth", $context) ? $context["maxWidth"] : (function () { throw new RuntimeError('Variable "maxWidth" does not exist.', 22, $this->source); })()) > 0)) {
            // line 23
            echo "    <style>
        .forceWidth {
            max-width: ";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["maxWidth"]) || array_key_exists("maxWidth", $context) ? $context["maxWidth"] : (function () { throw new RuntimeError('Variable "maxWidth" does not exist.', 25, $this->source); })()), "html", null, true);
            echo "px;
        }
    </style>
";
        }
        // line 29
        echo "
<table class=\"scoreboard center ";
        // line 30
        if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 30, $this->source); })())) {
            echo "scoreboard_jury";
        }
        echo "\">

    ";
        // line 33
        echo "    <colgroup>
        <col id=\"scorerank\"/>
        ";
        // line 35
        if ((isset($context["showFlags"]) || array_key_exists("showFlags", $context) ? $context["showFlags"] : (function () { throw new RuntimeError('Variable "showFlags" does not exist.', 35, $this->source); })())) {
            // line 36
            echo "            <col id=\"scoreflags\"/>
        ";
        } else {
            // line 38
            echo "            <col/>
        ";
        }
        // line 40
        echo "        ";
        if ((isset($context["showAffiliationLogos"]) || array_key_exists("showAffiliationLogos", $context) ? $context["showAffiliationLogos"] : (function () { throw new RuntimeError('Variable "showAffiliationLogos" does not exist.', 40, $this->source); })())) {
            // line 41
            echo "            <col id=\"scorelogos\"/>
        ";
        }
        // line 43
        echo "        <col id=\"scoreteamname\"/>
    </colgroup>
    <colgroup>
        <col id=\"scoresolv\"/>
        <col id=\"scoretotal\"/>
    </colgroup>
    <colgroup>
        ";
        // line 50
        if (((isset($context["showTeamSubmissions"]) || array_key_exists("showTeamSubmissions", $context) ? $context["showTeamSubmissions"] : (function () { throw new RuntimeError('Variable "showTeamSubmissions" does not exist.', 50, $this->source); })()) || (isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 50, $this->source); })()))) {
            // line 51
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 51, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 52
                echo "                <col class=\"scoreprob\"/>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        ";
        }
        // line 55
        echo "    </colgroup>

    ";
        // line 57
        $context["teamColspan"] = 2;
        // line 58
        echo "    ";
        if ((isset($context["showAffiliationLogos"]) || array_key_exists("showAffiliationLogos", $context) ? $context["showAffiliationLogos"] : (function () { throw new RuntimeError('Variable "showAffiliationLogos" does not exist.', 58, $this->source); })())) {
            // line 59
            echo "        ";
            $context["teamColspan"] = ((isset($context["teamColspan"]) || array_key_exists("teamColspan", $context) ? $context["teamColspan"] : (function () { throw new RuntimeError('Variable "teamColspan" does not exist.', 59, $this->source); })()) + 1);
            // line 60
            echo "    ";
        }
        // line 61
        echo "
    <thead>
    <tr class=\"scoreheader\">
        <th title=\"rank\" scope=\"col\">rank</th>
        <th title=\"team name\" scope=\"col\" colspan=\"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["teamColspan"]) || array_key_exists("teamColspan", $context) ? $context["teamColspan"] : (function () { throw new RuntimeError('Variable "teamColspan" does not exist.', 65, $this->source); })()), "html", null, true);
        echo "\">team</th>
        <th title=\"# solved / penalty time\" colspan=\"2\" scope=\"col\">score</th>
        ";
        // line 67
        if (((isset($context["showTeamSubmissions"]) || array_key_exists("showTeamSubmissions", $context) ? $context["showTeamSubmissions"] : (function () { throw new RuntimeError('Variable "showTeamSubmissions" does not exist.', 67, $this->source); })()) || (isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 67, $this->source); })()))) {
            // line 68
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 68, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 69
                echo "                ";
                $context["link"] = null;
                // line 70
                echo "                ";
                $context["target"] = "_self";
                // line 71
                echo "                ";
                if ( !(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 71, $this->source); })())) {
                    // line 72
                    echo "                    ";
                    if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 72, $this->source); })())) {
                        // line 73
                        echo "                        ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 73)]);
                        // line 74
                        echo "                    ";
                    } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 74), "problemtextType", [], "any", false, false, false, 74))) {
                        // line 75
                        echo "                        ";
                        if ((isset($context["public"]) || array_key_exists("public", $context) ? $context["public"] : (function () { throw new RuntimeError('Variable "public" does not exist.', 75, $this->source); })())) {
                            // line 76
                            echo "                            ";
                            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_problem_text", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 76)]);
                            // line 77
                            echo "                            ";
                            $context["target"] = "_blank";
                            // line 78
                            echo "                        ";
                        } else {
                            // line 79
                            echo "                            ";
                            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_problem_text", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 79)]);
                            // line 80
                            echo "                            ";
                            $context["target"] = "_blank";
                            // line 81
                            echo "                        ";
                        }
                        // line 82
                        echo "                    ";
                    }
                    // line 83
                    echo "                ";
                }
                // line 84
                echo "                <th title=\"problem ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 84), "name", [], "any", false, false, false, 84), "html", null, true);
                echo "\" scope=\"col\">
                    <a ";
                // line 85
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 85, $this->source); })())) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 85, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo " target=\"";
                echo twig_escape_filter($this->env, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 85, $this->source); })()), "html", null, true);
                echo "\">
                        ";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "shortname", [], "any", false, false, false, 86), "html", null, true);
                echo "
                        ";
                // line 87
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 87))) {
                    // line 88
                    echo "                            <div class=\"circle\" style=\"background: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 88), "html", null, true);
                    echo ";\"></div>
                        ";
                }
                // line 90
                echo "                        ";
                if ((isset($context["showPoints"]) || array_key_exists("showPoints", $context) ? $context["showPoints"] : (function () { throw new RuntimeError('Variable "showPoints" does not exist.', 90, $this->source); })())) {
                    // line 91
                    echo "                            <span class='problempoints'>
                                [";
                    // line 92
                    if ((twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 92) == 1)) {
                        echo "1 point";
                    } else {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 92), "html", null, true);
                        echo " points";
                    }
                    echo "]
                            </span>
                        ";
                }
                // line 95
                echo "                    </a>
                </th>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "        ";
        }
        // line 99
        echo "    </tr>
    </thead>
    <tbody>
    ";
        // line 102
        $context["previousSortOrder"] =  -1;
        // line 103
        echo "    ";
        $context["previousTeam"] = null;
        // line 104
        echo "    ";
        $context["backgroundColors"] = ["#FFFFFF" => 1];
        // line 105
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scores"]) || array_key_exists("scores", $context) ? $context["scores"] : (function () { throw new RuntimeError('Variable "scores" does not exist.', 105, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["score"]) {
            // line 106
            echo "        ";
            $context["classes"] = [];
            // line 107
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 107), "category", [], "any", false, false, false, 107), "sortorder", [], "any", false, false, false, 107) != (isset($context["previousSortOrder"]) || array_key_exists("previousSortOrder", $context) ? $context["previousSortOrder"] : (function () { throw new RuntimeError('Variable "previousSortOrder" does not exist.', 107, $this->source); })()))) {
                // line 108
                echo "            ";
                if (((isset($context["previousSortOrder"]) || array_key_exists("previousSortOrder", $context) ? $context["previousSortOrder"] : (function () { throw new RuntimeError('Variable "previousSortOrder" does not exist.', 108, $this->source); })()) !=  -1)) {
                    // line 109
                    echo "                ";
                    // line 110
                    echo "                ";
                    $this->loadTemplate("partials/scoreboard_summary.html.twig", "partials/scoreboard_table.html.twig", 110)->display(twig_array_merge($context, ["sortOrder" => (isset($context["previousSortOrder"]) || array_key_exists("previousSortOrder", $context) ? $context["previousSortOrder"] : (function () { throw new RuntimeError('Variable "previousSortOrder" does not exist.', 110, $this->source); })())]));
                    // line 111
                    echo "            ";
                }
                // line 112
                echo "            ";
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 112, $this->source); })()), [0 => "sortorderswitch"]);
                // line 113
                echo "            ";
                $context["previousSortOrder"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 113), "category", [], "any", false, false, false, 113), "sortorder", [], "any", false, false, false, 113);
                // line 114
                echo "            ";
                $context["previousTeam"] = null;
                // line 115
                echo "        ";
            }
            // line 116
            echo "
        ";
            // line 118
            echo "        ";
            if (((isset($context["myTeamId"]) || array_key_exists("myTeamId", $context)) && ((isset($context["myTeamId"]) || array_key_exists("myTeamId", $context) ? $context["myTeamId"] : (function () { throw new RuntimeError('Variable "myTeamId" does not exist.', 118, $this->source); })()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 118), "teamid", [], "any", false, false, false, 118)))) {
                // line 119
                echo "            ";
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 119, $this->source); })()), [0 => "scorethisisme"]);
                // line 120
                echo "            ";
                $context["color"] = "#FFFF99";
                // line 121
                echo "        ";
            } else {
                // line 122
                echo "            ";
                $context["color"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 122), "category", [], "any", false, false, false, 122), "color", [], "any", false, false, false, 122);
                // line 123
                echo "        ";
            }
            // line 124
            echo "        <tr class=\"";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 124, $this->source); })()), " "), "html", null, true);
            echo "\" id=\"team:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 124), "teamid", [], "any", false, false, false, 124), "html", null, true);
            echo "\">
            <td class=\"scorepl\">
                ";
            // line 127
            echo "                ";
            if ( !(isset($context["displayRank"]) || array_key_exists("displayRank", $context) ? $context["displayRank"] : (function () { throw new RuntimeError('Variable "displayRank" does not exist.', 127, $this->source); })())) {
                // line 128
                echo "                    ?
                ";
            } elseif (((null ===             // line 129
(isset($context["previousTeam"]) || array_key_exists("previousTeam", $context) ? $context["previousTeam"] : (function () { throw new RuntimeError('Variable "previousTeam" does not exist.', 129, $this->source); })())) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 129, $this->source); })()), "scores", [], "any", false, false, false, 129), twig_get_attribute($this->env, $this->source, (isset($context["previousTeam"]) || array_key_exists("previousTeam", $context) ? $context["previousTeam"] : (function () { throw new RuntimeError('Variable "previousTeam" does not exist.', 129, $this->source); })()), "teamid", [], "any", false, false, false, 129), [], "array", false, false, false, 129), "rank", [], "any", false, false, false, 129) != twig_get_attribute($this->env, $this->source, $context["score"], "rank", [], "any", false, false, false, 129)))) {
                // line 130
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["score"], "rank", [], "any", false, false, false, 130), "html", null, true);
                echo "
                ";
            } else {
                // line 132
                echo "                ";
            }
            // line 133
            echo "                ";
            $context["previousTeam"] = twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 133);
            // line 134
            echo "            </td>
            <td class=\"scoreaf\">
                ";
            // line 136
            if ((isset($context["showFlags"]) || array_key_exists("showFlags", $context) ? $context["showFlags"] : (function () { throw new RuntimeError('Variable "showFlags" does not exist.', 136, $this->source); })())) {
                // line 137
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 137), "affiliation", [], "any", false, false, false, 137)) {
                    // line 138
                    echo "                        ";
                    $context["link"] = null;
                    // line 139
                    echo "                        ";
                    if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 139, $this->source); })())) {
                        // line 140
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation", ["affilId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 140), "affilid", [], "any", false, false, false, 140)]);
                        // line 141
                        echo "                        ";
                    }
                    // line 142
                    echo "                        <a ";
                    if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 142, $this->source); })())) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 142, $this->source); })()), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                            ";
                    // line 143
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 143), "affiliation", [], "any", false, false, false, 143), "country", [], "any", false, false, false, 143)) {
                        // line 144
                        echo "                                ";
                        $context["countryFlag"] = (("images/countries/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 144), "affiliation", [], "any", false, false, false, 144), "country", [], "any", false, false, false, 144)) . ".png");
                        // line 145
                        echo "                                ";
                        if ($this->extensions['App\Twig\TwigExtension']->assetExists((isset($context["countryFlag"]) || array_key_exists("countryFlag", $context) ? $context["countryFlag"] : (function () { throw new RuntimeError('Variable "countryFlag" does not exist.', 145, $this->source); })()))) {
                            // line 146
                            echo "                                    <img loading=\"lazy\" class=\"countryflag\"
                                         src=\"";
                            // line 147
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["countryFlag"]) || array_key_exists("countryFlag", $context) ? $context["countryFlag"] : (function () { throw new RuntimeError('Variable "countryFlag" does not exist.', 147, $this->source); })())), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alpha3_countries"]) || array_key_exists("alpha3_countries", $context) ? $context["alpha3_countries"] : (function () { throw new RuntimeError('Variable "alpha3_countries" does not exist.', 147, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 147), "affiliation", [], "any", false, false, false, 147), "country", [], "any", false, false, false, 147), [], "array", false, false, false, 147), "html", null, true);
                            echo "\"
                                         title=\"";
                            // line 148
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alpha3_countries"]) || array_key_exists("alpha3_countries", $context) ? $context["alpha3_countries"] : (function () { throw new RuntimeError('Variable "alpha3_countries" does not exist.', 148, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 148), "affiliation", [], "any", false, false, false, 148), "country", [], "any", false, false, false, 148), [], "array", false, false, false, 148), "html", null, true);
                            echo "\">
                                ";
                        } else {
                            // line 150
                            echo "                                    ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alpha3_countries"]) || array_key_exists("alpha3_countries", $context) ? $context["alpha3_countries"] : (function () { throw new RuntimeError('Variable "alpha3_countries" does not exist.', 150, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 150), "affiliation", [], "any", false, false, false, 150), "country", [], "any", false, false, false, 150), [], "array", false, false, false, 150), "html", null, true);
                            echo "
                                ";
                        }
                        // line 152
                        echo "                            ";
                    }
                    // line 153
                    echo "                        </a>
                    ";
                }
                // line 155
                echo "                ";
            }
            // line 156
            echo "            </td>
            ";
            // line 157
            if ((isset($context["showAffiliationLogos"]) || array_key_exists("showAffiliationLogos", $context) ? $context["showAffiliationLogos"] : (function () { throw new RuntimeError('Variable "showAffiliationLogos" does not exist.', 157, $this->source); })())) {
                // line 158
                echo "                <td class=\"scoreaf\">
                    ";
                // line 159
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 159), "affiliation", [], "any", false, false, false, 159)) {
                    // line 160
                    echo "                        ";
                    $context["link"] = null;
                    // line 161
                    echo "                        ";
                    if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 161, $this->source); })())) {
                        // line 162
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation", ["affilId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 162), "affilid", [], "any", false, false, false, 162)]);
                        // line 163
                        echo "                        ";
                    }
                    // line 164
                    echo "                        <a ";
                    if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 164, $this->source); })())) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 164, $this->source); })()), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                            ";
                    // line 165
                    $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 165), "affiliation", [], "any", false, false, false, 165), "affilid", [], "any", false, false, false, 165);
                    // line 166
                    echo "                            ";
                    if ($this->extensions['App\Twig\TwigExtension']->showExternalId(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 166), "affiliation", [], "any", false, false, false, 166))) {
                        // line 167
                        echo "                                ";
                        $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 167), "affiliation", [], "any", false, false, false, 167), "externalid", [], "any", false, false, false, 167);
                        // line 168
                        echo "                            ";
                    }
                    // line 169
                    echo "                            ";
                    $context["affiliationImage"] = (("images/affiliations/" . (isset($context["affiliationId"]) || array_key_exists("affiliationId", $context) ? $context["affiliationId"] : (function () { throw new RuntimeError('Variable "affiliationId" does not exist.', 169, $this->source); })())) . ".png");
                    // line 170
                    echo "                            ";
                    if ($this->extensions['App\Twig\TwigExtension']->assetExists((isset($context["affiliationImage"]) || array_key_exists("affiliationImage", $context) ? $context["affiliationImage"] : (function () { throw new RuntimeError('Variable "affiliationImage" does not exist.', 170, $this->source); })()))) {
                        // line 171
                        echo "                                <img loading=\"lazy\" class=\"affiliation-logo\"
                                     src=\"";
                        // line 172
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["affiliationImage"]) || array_key_exists("affiliationImage", $context) ? $context["affiliationImage"] : (function () { throw new RuntimeError('Variable "affiliationImage" does not exist.', 172, $this->source); })())), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 172), "affiliation", [], "any", false, false, false, 172), "name", [], "any", false, false, false, 172), "html", null, true);
                        echo "\"
                                     title=\"";
                        // line 173
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 173), "affiliation", [], "any", false, false, false, 173), "name", [], "any", false, false, false, 173), "html", null, true);
                        echo "\">
                            ";
                    } else {
                        // line 175
                        echo "                                ";
                        echo twig_escape_filter($this->env, (isset($context["affiliationId"]) || array_key_exists("affiliationId", $context) ? $context["affiliationId"] : (function () { throw new RuntimeError('Variable "affiliationId" does not exist.', 175, $this->source); })()), "html", null, true);
                        echo "
                            ";
                    }
                    // line 177
                    echo "                        </a>
                    ";
                }
                // line 179
                echo "                </td>
            ";
            }
            // line 181
            echo "            ";
            if ((null === (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 181, $this->source); })()))) {
                // line 182
                echo "                ";
                $context["color"] = "#FFFFFF";
                // line 183
                echo "                ";
                $context["colorClass"] = "_FFFFFF";
                // line 184
                echo "            ";
            } else {
                // line 185
                echo "                ";
                $context["colorClass"] = twig_replace_filter((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 185, $this->source); })()), ["#" => "_"]);
                // line 186
                echo "                ";
                $context["backgroundColors"] = twig_array_merge((isset($context["backgroundColors"]) || array_key_exists("backgroundColors", $context) ? $context["backgroundColors"] : (function () { throw new RuntimeError('Variable "backgroundColors" does not exist.', 186, $this->source); })()), [(isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 186, $this->source); })()) => 1]);
                // line 187
                echo "            ";
            }
            // line 188
            echo "            <td class=\"scoretn cl";
            echo twig_escape_filter($this->env, (isset($context["colorClass"]) || array_key_exists("colorClass", $context) ? $context["colorClass"] : (function () { throw new RuntimeError('Variable "colorClass" does not exist.', 188, $this->source); })()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 188), "effectiveName", [], "any", false, false, false, 188), "html", null, true);
            echo "\">
                ";
            // line 189
            $context["link"] = null;
            // line 190
            echo "                ";
            $context["extra"] = null;
            // line 191
            echo "                ";
            if ( !(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 191, $this->source); })())) {
                // line 192
                echo "                    ";
                if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 192, $this->source); })())) {
                    // line 193
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 193), "teamid", [], "any", false, false, false, 193)]);
                    // line 194
                    echo "                    ";
                } elseif ((isset($context["public"]) || array_key_exists("public", $context) ? $context["public"] : (function () { throw new RuntimeError('Variable "public" does not exist.', 194, $this->source); })())) {
                    // line 195
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 195), "teamid", [], "any", false, false, false, 195)]);
                    // line 196
                    echo "                        ";
                    $context["extra"] = "data-ajax-modal";
                    // line 197
                    echo "                    ";
                } else {
                    // line 198
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 198), "teamid", [], "any", false, false, false, 198)]);
                    // line 199
                    echo "                        ";
                    $context["extra"] = "data-ajax-modal";
                    // line 200
                    echo "                    ";
                }
                // line 201
                echo "                ";
            }
            // line 202
            echo "                <a ";
            if ( !(null === (isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 202, $this->source); })()))) {
                echo twig_escape_filter($this->env, (isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 202, $this->source); })()), "html", null, true);
            }
            echo " ";
            if ( !(null === (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 202, $this->source); })()))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 202, $this->source); })()), "html", null, true);
                echo "\"";
            }
            echo ">
                    <span class=\"forceWidth\">
                        ";
            // line 204
            if (((twig_length_filter($this->env, (isset($context["usedCategories"]) || array_key_exists("usedCategories", $context) ? $context["usedCategories"] : (function () { throw new RuntimeError('Variable "usedCategories" does not exist.', 204, $this->source); })())) > 1) && twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 204, $this->source); })()), "bestInCategory", [0 => twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 204), 1 => (isset($context["limitToTeamIds"]) || array_key_exists("limitToTeamIds", $context) ? $context["limitToTeamIds"] : (function () { throw new RuntimeError('Variable "limitToTeamIds" does not exist.', 204, $this->source); })())], "method", false, false, false, 204))) {
                // line 205
                echo "                            <span class=\"badge badge-warning\" style=\"margin-right: 2em; font-weight: normal;\">
                            ";
                // line 206
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 206), "category", [], "any", false, false, false, 206), "name", [], "any", false, false, false, 206), "html", null, true);
                echo "
                        </span>
                        ";
            }
            // line 209
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 209), "effectiveName", [], "any", false, false, false, 209), "html", null, true);
            echo "
                    </span>
                    ";
            // line 211
            if ((isset($context["showAffiliations"]) || array_key_exists("showAffiliations", $context) ? $context["showAffiliations"] : (function () { throw new RuntimeError('Variable "showAffiliations" does not exist.', 211, $this->source); })())) {
                // line 212
                echo "                        <span class=\"univ forceWidth\">
                            ";
                // line 213
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 213), "affiliation", [], "any", false, false, false, 213)) {
                    // line 214
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 214), "affiliation", [], "any", false, false, false, 214), "name", [], "any", false, false, false, 214), "html", null, true);
                    echo "
                            ";
                }
                // line 216
                echo "                        </span>
                    ";
            }
            // line 218
            echo "                </a>
            </td>
            ";
            // line 220
            $context["totalTime"] = twig_get_attribute($this->env, $this->source, $context["score"], "totalTime", [], "any", false, false, false, 220);
            // line 221
            echo "            ";
            if ((isset($context["scoreInSeconds"]) || array_key_exists("scoreInSeconds", $context) ? $context["scoreInSeconds"] : (function () { throw new RuntimeError('Variable "scoreInSeconds" does not exist.', 221, $this->source); })())) {
                // line 222
                echo "                ";
                $context["totalTime"] = $this->extensions['App\Twig\TwigExtension']->printTimeRelative((isset($context["totalTime"]) || array_key_exists("totalTime", $context) ? $context["totalTime"] : (function () { throw new RuntimeError('Variable "totalTime" does not exist.', 222, $this->source); })()));
                // line 223
                echo "            ";
            }
            // line 224
            echo "            ";
            $context["totalPoints"] = twig_get_attribute($this->env, $this->source, $context["score"], "numPoints", [], "any", false, false, false, 224);
            // line 225
            echo "            <td class=\"scorenc\">";
            echo twig_escape_filter($this->env, (isset($context["totalPoints"]) || array_key_exists("totalPoints", $context) ? $context["totalPoints"] : (function () { throw new RuntimeError('Variable "totalPoints" does not exist.', 225, $this->source); })()), "html", null, true);
            echo "</td>
            <td class=\"scorett\">";
            // line 226
            echo twig_escape_filter($this->env, (isset($context["totalTime"]) || array_key_exists("totalTime", $context) ? $context["totalTime"] : (function () { throw new RuntimeError('Variable "totalTime" does not exist.', 226, $this->source); })()), "html", null, true);
            echo "</td>

            ";
            // line 228
            if (((isset($context["showTeamSubmissions"]) || array_key_exists("showTeamSubmissions", $context) ? $context["showTeamSubmissions"] : (function () { throw new RuntimeError('Variable "showTeamSubmissions" does not exist.', 228, $this->source); })()) || (isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 228, $this->source); })()))) {
                // line 229
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 229, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                    // line 230
                    echo "                    ";
                    // line 231
                    echo "                    ";
                    $context["scoreCssClass"] = "score_neutral";
                    // line 232
                    echo "                    ";
                    $context["matrixItem"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 232, $this->source); })()), "matrix", [], "any", false, false, false, 232), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 232), "teamid", [], "any", false, false, false, 232), [], "array", false, false, false, 232), twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 232), [], "array", false, false, false, 232);
                    // line 233
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 233, $this->source); })()), "isCorrect", [], "any", false, false, false, 233)) {
                        // line 234
                        echo "                        ";
                        $context["scoreCssClass"] = "score_correct";
                        // line 235
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 235, $this->source); })()), "solvedFirst", [0 => twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 235), 1 => $context["problem"]], "method", false, false, false, 235)) {
                            // line 236
                            echo "                            ";
                            $context["scoreCssClass"] = ((isset($context["scoreCssClass"]) || array_key_exists("scoreCssClass", $context) ? $context["scoreCssClass"] : (function () { throw new RuntimeError('Variable "scoreCssClass" does not exist.', 236, $this->source); })()) . " score_first");
                            // line 237
                            echo "                        ";
                        }
                        // line 238
                        echo "                    ";
                    } elseif (((isset($context["showPending"]) || array_key_exists("showPending", $context) ? $context["showPending"] : (function () { throw new RuntimeError('Variable "showPending" does not exist.', 238, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 238, $this->source); })()), "numSubmissionsPending", [], "any", false, false, false, 238) > 0))) {
                        // line 239
                        echo "                        ";
                        $context["scoreCssClass"] = "score_pending";
                        // line 240
                        echo "                    ";
                    } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 240, $this->source); })()), "numSubmissions", [], "any", false, false, false, 240) > 0)) {
                        // line 241
                        echo "                        ";
                        $context["scoreCssClass"] = "score_incorrect";
                        // line 242
                        echo "                    ";
                    }
                    // line 243
                    echo "
                    ";
                    // line 244
                    $context["numSubmissions"] = twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 244, $this->source); })()), "numSubmissions", [], "any", false, false, false, 244);
                    // line 245
                    echo "                    ";
                    if (((isset($context["showPending"]) || array_key_exists("showPending", $context) ? $context["showPending"] : (function () { throw new RuntimeError('Variable "showPending" does not exist.', 245, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 245, $this->source); })()), "numSubmissionsPending", [], "any", false, false, false, 245) > 0))) {
                        // line 246
                        echo "                        ";
                        $context["numSubmissions"] = (((isset($context["numSubmissions"]) || array_key_exists("numSubmissions", $context) ? $context["numSubmissions"] : (function () { throw new RuntimeError('Variable "numSubmissions" does not exist.', 246, $this->source); })()) . " + ") . twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 246, $this->source); })()), "numSubmissionsPending", [], "any", false, false, false, 246));
                        // line 247
                        echo "                    ";
                    }
                    // line 248
                    echo "
                    ";
                    // line 250
                    echo "                    ";
                    $context["time"] = "&nbsp;";
                    // line 251
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 251, $this->source); })()), "isCorrect", [], "any", false, false, false, 251)) {
                        // line 252
                        echo "                        ";
                        $context["time"] = twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 252, $this->source); })()), "time", [], "any", false, false, false, 252);
                        // line 253
                        echo "                        ";
                        if ((isset($context["scoreInSeconds"]) || array_key_exists("scoreInSeconds", $context) ? $context["scoreInSeconds"] : (function () { throw new RuntimeError('Variable "scoreInSeconds" does not exist.', 253, $this->source); })())) {
                            // line 254
                            echo "                            ";
                            $context["time"] = $this->extensions['App\Twig\TwigExtension']->printTimeRelative($this->extensions['App\Twig\TwigExtension']->scoreTime((isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new RuntimeError('Variable "time" does not exist.', 254, $this->source); })())));
                            // line 255
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 255, $this->source); })()), "numSubmissions", [], "any", false, false, false, 255) > 1)) {
                                // line 256
                                echo "                                ";
                                $context["time"] = (((isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new RuntimeError('Variable "time" does not exist.', 256, $this->source); })()) . " + ") . $this->extensions['App\Twig\TwigExtension']->printTimeRelative($this->extensions['App\Twig\TwigExtension']->calculatePenaltyTime(true, twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 256, $this->source); })()), "numSubmissions", [], "any", false, false, false, 256))));
                                // line 257
                                echo "                            ";
                            }
                            // line 258
                            echo "                        ";
                        } else {
                            // line 259
                            echo "                            ";
                            $context["time"] = $this->extensions['App\Twig\TwigExtension']->scoreTime((isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new RuntimeError('Variable "time" does not exist.', 259, $this->source); })()));
                            // line 260
                            echo "                        ";
                        }
                        // line 261
                        echo "                    ";
                    }
                    // line 262
                    echo "
                    ";
                    // line 263
                    $context["link"] = null;
                    // line 264
                    echo "                    ";
                    if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 264, $this->source); })())) {
                        // line 265
                        echo "                        ";
                        $context["restrict"] = ["probid" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 265)];
                        // line 266
                        echo "                        ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 266), "teamid", [], "any", false, false, false, 266), "restrict" => (isset($context["restrict"]) || array_key_exists("restrict", $context) ? $context["restrict"] : (function () { throw new RuntimeError('Variable "restrict" does not exist.', 266, $this->source); })())]);
                        // line 267
                        echo "                    ";
                    }
                    // line 268
                    echo "
                    <td class=\"score_cell\">
                        ";
                    // line 270
                    if (((isset($context["numSubmissions"]) || array_key_exists("numSubmissions", $context) ? $context["numSubmissions"] : (function () { throw new RuntimeError('Variable "numSubmissions" does not exist.', 270, $this->source); })()) != "0")) {
                        // line 271
                        echo "                            <a ";
                        if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 271, $this->source); })())) {
                            echo "href=\"";
                            echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 271, $this->source); })()), "html", null, true);
                            echo "\"";
                        }
                        echo ">
                                <div class=\"";
                        // line 272
                        echo twig_escape_filter($this->env, (isset($context["scoreCssClass"]) || array_key_exists("scoreCssClass", $context) ? $context["scoreCssClass"] : (function () { throw new RuntimeError('Variable "scoreCssClass" does not exist.', 272, $this->source); })()), "html", null, true);
                        echo "\">
                                    ";
                        // line 273
                        echo (isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new RuntimeError('Variable "time" does not exist.', 273, $this->source); })());
                        echo "
                                    <span>
                                        ";
                        // line 275
                        if (((isset($context["numSubmissions"]) || array_key_exists("numSubmissions", $context) ? $context["numSubmissions"] : (function () { throw new RuntimeError('Variable "numSubmissions" does not exist.', 275, $this->source); })()) === 1)) {
                            // line 276
                            echo "                                            1 try
                                        ";
                        } else {
                            // line 278
                            echo "                                            ";
                            echo twig_escape_filter($this->env, (isset($context["numSubmissions"]) || array_key_exists("numSubmissions", $context) ? $context["numSubmissions"] : (function () { throw new RuntimeError('Variable "numSubmissions" does not exist.', 278, $this->source); })()), "html", null, true);
                            echo " tries
                                        ";
                        }
                        // line 280
                        echo "                                    </span>
                                </div>
                            </a>
                        ";
                    }
                    // line 284
                    echo "                    </td>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 286
                echo "            ";
            }
            // line 287
            echo "        </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['score'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 289
        echo "
    ";
        // line 291
        echo "    ";
        $this->loadTemplate("partials/scoreboard_summary.html.twig", "partials/scoreboard_table.html.twig", 291)->display(twig_array_merge($context, ["sortOrder" => (isset($context["previousSortOrder"]) || array_key_exists("previousSortOrder", $context) ? $context["previousSortOrder"] : (function () { throw new RuntimeError('Variable "previousSortOrder" does not exist.', 291, $this->source); })())]));
        // line 292
        echo "    </tbody>
</table>

";
        // line 295
        if ((isset($context["showLegends"]) || array_key_exists("showLegends", $context) ? $context["showLegends"] : (function () { throw new RuntimeError('Variable "showLegends" does not exist.', 295, $this->source); })())) {
            // line 296
            echo "    <p><br/><br/></p>

    ";
            // line 299
            echo "    ";
            if ((((null === (isset($context["limitToTeamIds"]) || array_key_exists("limitToTeamIds", $context) ? $context["limitToTeamIds"] : (function () { throw new RuntimeError('Variable "limitToTeamIds" does not exist.', 299, $this->source); })())) && (twig_length_filter($this->env, (isset($context["usedCategories"]) || array_key_exists("usedCategories", $context) ? $context["usedCategories"] : (function () { throw new RuntimeError('Variable "usedCategories" does not exist.', 299, $this->source); })())) > 1)) && (isset($context["hasDifferentCategoryColors"]) || array_key_exists("hasDifferentCategoryColors", $context) ? $context["hasDifferentCategoryColors"] : (function () { throw new RuntimeError('Variable "hasDifferentCategoryColors" does not exist.', 299, $this->source); })()))) {
                // line 300
                echo "        <table id=\"categ_legend\" class=\"scoreboard scorelegend ";
                if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 300, $this->source); })())) {
                    echo "scoreboard_jury";
                }
                echo "\">
            <thead>
            <tr>
                <th scope=\"col\">
                    ";
                // line 304
                $context["link"] = null;
                // line 305
                echo "                    ";
                if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 305, $this->source); })())) {
                    // line 306
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_categories");
                    // line 307
                    echo "                    ";
                }
                // line 308
                echo "                    <a ";
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 308, $this->source); })())) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 308, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo ">Categories</a>
                </th>
            </tr>
            </thead>
            <tbody>
            ";
                // line 313
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_filter(twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 313, $this->source); })()), "categories", [], "any", false, false, false, 313), function ($__category__) use ($context, $macros) { $context["category"] = $__category__; return twig_get_attribute($this->env, $this->source, ($context["usedCategories"] ?? null), twig_get_attribute($this->env, $this->source, $context["category"], "categoryid", [], "any", false, false, false, 313), [], "array", true, true, false, 313); }));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 314
                    echo "                <tr ";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "color", [], "any", false, false, false, 314)) {
                        echo "style=\"background: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "color", [], "any", false, false, false, 314), "html", null, true);
                        echo ";\"";
                    }
                    echo ">
                    <td>
                        ";
                    // line 316
                    $context["link"] = null;
                    // line 317
                    echo "                        ";
                    if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 317, $this->source); })())) {
                        // line 318
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category", ["categoryId" => twig_get_attribute($this->env, $this->source, $context["category"], "categoryid", [], "any", false, false, false, 318)]);
                        // line 319
                        echo "                        ";
                    }
                    // line 320
                    echo "                        <a ";
                    if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 320, $this->source); })())) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 320, $this->source); })()), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 320), "html", null, true);
                    echo "</a>
                    </td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 324
                echo "            </tbody>
        </table>
    ";
            }
            // line 327
            echo "
    ";
            // line 328
            if (((isset($context["showTeamSubmissions"]) || array_key_exists("showTeamSubmissions", $context) ? $context["showTeamSubmissions"] : (function () { throw new RuntimeError('Variable "showTeamSubmissions" does not exist.', 328, $this->source); })()) || (isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 328, $this->source); })()))) {
                // line 329
                echo "        ";
                $context["cellColors"] = ["first" => "Solved first", "correct" => "Solved", "incorrect" => "Tried, incorrect", "pending" => "Tried, pending", "neutral" => "Untried"];
                // line 330
                echo "        <table id=\"cell_legend\" class=\"scoreboard scorelegend ";
                if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 330, $this->source); })())) {
                    echo "scoreboard_jury";
                }
                echo "\">
            <thead>
            <tr>
                <th scope=\"col\">Cell colours</th>
            </tr>
            </thead>
            <tbody>
            ";
                // line 337
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["cellColors"]) || array_key_exists("cellColors", $context) ? $context["cellColors"] : (function () { throw new RuntimeError('Variable "cellColors" does not exist.', 337, $this->source); })()));
                foreach ($context['_seq'] as $context["color"] => $context["description"]) {
                    // line 338
                    echo "                ";
                    if ((($context["color"] != "pending") || (isset($context["showPending"]) || array_key_exists("showPending", $context) ? $context["showPending"] : (function () { throw new RuntimeError('Variable "showPending" does not exist.', 338, $this->source); })()))) {
                        // line 339
                        echo "                    <tr class=\"score_";
                        echo twig_escape_filter($this->env, $context["color"], "html", null, true);
                        echo "\">
                        <td>";
                        // line 340
                        echo twig_escape_filter($this->env, $context["description"], "html", null, true);
                        echo "</td>
                    </tr>
                ";
                    }
                    // line 343
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['color'], $context['description'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 344
                echo "            </tbody>
        </table>
    ";
            }
        }
        // line 348
        echo "
<style>
    ";
        // line 350
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["backgroundColors"]) || array_key_exists("backgroundColors", $context) ? $context["backgroundColors"] : (function () { throw new RuntimeError('Variable "backgroundColors" does not exist.', 350, $this->source); })()));
        foreach ($context['_seq'] as $context["color"] => $context["i"]) {
            // line 351
            echo "        ";
            $context["colorClass"] = twig_replace_filter($context["color"], ["#" => "_"]);
            // line 352
            echo "
        .cl";
            // line 353
            echo twig_escape_filter($this->env, (isset($context["colorClass"]) || array_key_exists("colorClass", $context) ? $context["colorClass"] : (function () { throw new RuntimeError('Variable "colorClass" does not exist.', 353, $this->source); })()), "html", null, true);
            echo " {
            background-color: ";
            // line 354
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo ";
        }

        ";
            // line 357
            $context["cMin"] = $this->extensions['App\Twig\TwigExtension']->hexColorToRGBA($context["color"], 0);
            // line 358
            echo "        ";
            $context["cMax"] = $this->extensions['App\Twig\TwigExtension']->hexColorToRGBA($context["color"], 1);
            // line 359
            echo "
        .cl";
            // line 360
            echo twig_escape_filter($this->env, (isset($context["colorClass"]) || array_key_exists("colorClass", $context) ? $context["colorClass"] : (function () { throw new RuntimeError('Variable "colorClass" does not exist.', 360, $this->source); })()), "html", null, true);
            echo " .forceWidth.toolong:after {
            background: linear-gradient(to right,
                ";
            // line 362
            echo twig_escape_filter($this->env, (isset($context["cMin"]) || array_key_exists("cMin", $context) ? $context["cMin"] : (function () { throw new RuntimeError('Variable "cMin" does not exist.', 362, $this->source); })()), "html", null, true);
            echo " 0%,
                ";
            // line 363
            echo twig_escape_filter($this->env, (isset($context["cMax"]) || array_key_exists("cMax", $context) ? $context["cMax"] : (function () { throw new RuntimeError('Variable "cMax" does not exist.', 363, $this->source); })()), "html", null, true);
            echo " 96%);
        }
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['color'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 366
        echo "</style>
<script>
    document.querySelectorAll(\".forceWidth:not(.toolong)\").forEach(el => {
        if (el instanceof Element && el.scrollWidth > el.offsetWidth) {
            el.classList.add(\"toolong\");
        }
    });
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/scoreboard_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1077 => 366,  1068 => 363,  1064 => 362,  1059 => 360,  1056 => 359,  1053 => 358,  1051 => 357,  1045 => 354,  1041 => 353,  1038 => 352,  1035 => 351,  1031 => 350,  1027 => 348,  1021 => 344,  1015 => 343,  1009 => 340,  1004 => 339,  1001 => 338,  997 => 337,  984 => 330,  981 => 329,  979 => 328,  976 => 327,  971 => 324,  954 => 320,  951 => 319,  948 => 318,  945 => 317,  943 => 316,  933 => 314,  929 => 313,  916 => 308,  913 => 307,  910 => 306,  907 => 305,  905 => 304,  895 => 300,  892 => 299,  888 => 296,  886 => 295,  881 => 292,  878 => 291,  875 => 289,  860 => 287,  857 => 286,  850 => 284,  844 => 280,  838 => 278,  834 => 276,  832 => 275,  827 => 273,  823 => 272,  814 => 271,  812 => 270,  808 => 268,  805 => 267,  802 => 266,  799 => 265,  796 => 264,  794 => 263,  791 => 262,  788 => 261,  785 => 260,  782 => 259,  779 => 258,  776 => 257,  773 => 256,  770 => 255,  767 => 254,  764 => 253,  761 => 252,  758 => 251,  755 => 250,  752 => 248,  749 => 247,  746 => 246,  743 => 245,  741 => 244,  738 => 243,  735 => 242,  732 => 241,  729 => 240,  726 => 239,  723 => 238,  720 => 237,  717 => 236,  714 => 235,  711 => 234,  708 => 233,  705 => 232,  702 => 231,  700 => 230,  695 => 229,  693 => 228,  688 => 226,  683 => 225,  680 => 224,  677 => 223,  674 => 222,  671 => 221,  669 => 220,  665 => 218,  661 => 216,  655 => 214,  653 => 213,  650 => 212,  648 => 211,  642 => 209,  636 => 206,  633 => 205,  631 => 204,  617 => 202,  614 => 201,  611 => 200,  608 => 199,  605 => 198,  602 => 197,  599 => 196,  596 => 195,  593 => 194,  590 => 193,  587 => 192,  584 => 191,  581 => 190,  579 => 189,  572 => 188,  569 => 187,  566 => 186,  563 => 185,  560 => 184,  557 => 183,  554 => 182,  551 => 181,  547 => 179,  543 => 177,  537 => 175,  532 => 173,  526 => 172,  523 => 171,  520 => 170,  517 => 169,  514 => 168,  511 => 167,  508 => 166,  506 => 165,  497 => 164,  494 => 163,  491 => 162,  488 => 161,  485 => 160,  483 => 159,  480 => 158,  478 => 157,  475 => 156,  472 => 155,  468 => 153,  465 => 152,  459 => 150,  454 => 148,  448 => 147,  445 => 146,  442 => 145,  439 => 144,  437 => 143,  428 => 142,  425 => 141,  422 => 140,  419 => 139,  416 => 138,  413 => 137,  411 => 136,  407 => 134,  404 => 133,  401 => 132,  395 => 130,  393 => 129,  390 => 128,  387 => 127,  379 => 124,  376 => 123,  373 => 122,  370 => 121,  367 => 120,  364 => 119,  361 => 118,  358 => 116,  355 => 115,  352 => 114,  349 => 113,  346 => 112,  343 => 111,  340 => 110,  338 => 109,  335 => 108,  332 => 107,  329 => 106,  311 => 105,  308 => 104,  305 => 103,  303 => 102,  298 => 99,  295 => 98,  287 => 95,  276 => 92,  273 => 91,  270 => 90,  264 => 88,  262 => 87,  258 => 86,  248 => 85,  243 => 84,  240 => 83,  237 => 82,  234 => 81,  231 => 80,  228 => 79,  225 => 78,  222 => 77,  219 => 76,  216 => 75,  213 => 74,  210 => 73,  207 => 72,  204 => 71,  201 => 70,  198 => 69,  193 => 68,  191 => 67,  186 => 65,  180 => 61,  177 => 60,  174 => 59,  171 => 58,  169 => 57,  165 => 55,  162 => 54,  155 => 52,  150 => 51,  148 => 50,  139 => 43,  135 => 41,  132 => 40,  128 => 38,  124 => 36,  122 => 35,  118 => 33,  111 => 30,  108 => 29,  101 => 25,  97 => 23,  95 => 22,  92 => 21,  90 => 20,  88 => 19,  86 => 18,  84 => 17,  82 => 16,  78 => 14,  76 => 13,  72 => 11,  70 => 10,  63 => 8,  60 => 7,  55 => 6,  52 => 5,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if limitToTeams is not defined %}
    {% set limitToTeams = null %}
    {% set limitToTeamIds = null %}
{% else %}
    {% set limitToTeamIds = [] %}
    {% for team in limitToTeams %}
        {% set limitToTeamIds = limitToTeamIds | merge([team.teamid]) %}
    {% endfor %}
{% endif %}
{% if showLegends is not defined %}
    {% set showLegends = false %}
{% endif %}
{% if static is not defined %}
    {% set static = false %}
{% endif %}
{% set showPoints = scoreboard.showPoints %}
{% set usedCategories = scoreboard.usedCategories(limitToTeamIds) %}
{% set hasDifferentCategoryColors = scoreboard.categoryColors(limitToTeamIds) %}
{% set scores = scoreboard.scores | filter(score => limitToTeams is null or score.team.teamid in limitToTeamIds) %}
{% set problems = scoreboard.problems %}

{% if maxWidth > 0 %}
    <style>
        .forceWidth {
            max-width: {{ maxWidth }}px;
        }
    </style>
{% endif %}

<table class=\"scoreboard center {% if jury %}scoreboard_jury{% endif %}\">

    {# output table column groups (for the styles) #}
    <colgroup>
        <col id=\"scorerank\"/>
        {% if showFlags %}
            <col id=\"scoreflags\"/>
        {% else %}
            <col/>
        {% endif %}
        {% if showAffiliationLogos %}
            <col id=\"scorelogos\"/>
        {% endif %}
        <col id=\"scoreteamname\"/>
    </colgroup>
    <colgroup>
        <col id=\"scoresolv\"/>
        <col id=\"scoretotal\"/>
    </colgroup>
    <colgroup>
        {% if showTeamSubmissions or jury %}
            {% for problem in problems %}
                <col class=\"scoreprob\"/>
            {% endfor %}
        {% endif %}
    </colgroup>

    {% set teamColspan = 2 %}
    {% if showAffiliationLogos %}
        {% set teamColspan = teamColspan + 1 %}
    {% endif %}

    <thead>
    <tr class=\"scoreheader\">
        <th title=\"rank\" scope=\"col\">rank</th>
        <th title=\"team name\" scope=\"col\" colspan=\"{{ teamColspan }}\">team</th>
        <th title=\"# solved / penalty time\" colspan=\"2\" scope=\"col\">score</th>
        {% if showTeamSubmissions or jury %}
            {% for problem in problems %}
                {% set link = null %}
                {% set target = '_self' %}
                {% if not static %}
                    {% if jury %}
                        {% set link = path('jury_problem', {'probId': problem.probid}) %}
                    {% elseif problem.problem.problemtextType is not empty %}
                        {% if public %}
                            {% set link = path('public_problem_text', {probId: problem.probid}) %}
                            {% set target = '_blank' %}
                        {% else %}
                            {% set link = path('team_problem_text', {probId: problem.probid}) %}
                            {% set target = '_blank' %}
                        {% endif %}
                    {% endif %}
                {% endif %}
                <th title=\"problem {{ problem.problem.name }}\" scope=\"col\">
                    <a {% if link %}href=\"{{ link }}\"{% endif %} target=\"{{ target }}\">
                        {{ problem.shortname }}
                        {% if problem.color is not empty %}
                            <div class=\"circle\" style=\"background: {{ problem.color }};\"></div>
                        {% endif %}
                        {% if showPoints %}
                            <span class='problempoints'>
                                [{% if problem.points == 1 %}1 point{% else %}{{ problem.points }} points{% endif %}]
                            </span>
                        {% endif %}
                    </a>
                </th>
            {% endfor %}
        {% endif %}
    </tr>
    </thead>
    <tbody>
    {% set previousSortOrder = -1 %}
    {% set previousTeam = null %}
    {% set backgroundColors = {\"#FFFFFF\": 1} %}
    {% for score in scores %}
        {% set classes = [] %}
        {% if score.team.category.sortorder != previousSortOrder %}
            {% if previousSortOrder != -1 %}
                {# Output summary of previous sort order #}
                {% include 'partials/scoreboard_summary.html.twig' with {sortOrder: previousSortOrder} %}
            {% endif %}
            {% set classes = classes | merge(['sortorderswitch']) %}
            {% set previousSortOrder = score.team.category.sortorder %}
            {% set previousTeam = null %}
        {% endif %}

        {# check whether this is us, otherwise use category colour #}
        {% if myTeamId is defined and myTeamId == score.team.teamid %}
            {% set classes = classes | merge(['scorethisisme']) %}
            {% set color = '#FFFF99' %}
        {% else %}
            {% set color = score.team.category.color %}
        {% endif %}
        <tr class=\"{{ classes | join(' ') }}\" id=\"team:{{ score.team.teamid }}\">
            <td class=\"scorepl\">
                {# Only print rank when score is different from the previous team #}
                {% if not displayRank %}
                    ?
                {% elseif previousTeam is null or scoreboard.scores[previousTeam.teamid].rank != score.rank %}
                    {{ score.rank }}
                {% else %}
                {% endif %}
                {% set previousTeam = score.team %}
            </td>
            <td class=\"scoreaf\">
                {% if showFlags %}
                    {% if score.team.affiliation %}
                        {% set link = null %}
                        {% if jury %}
                            {% set link = path('jury_team_affiliation', {'affilId': score.team.affilid}) %}
                        {% endif %}
                        <a {% if link %}href=\"{{ link }}\"{% endif %}>
                            {% if score.team.affiliation.country %}
                                {% set countryFlag = 'images/countries/' ~ score.team.affiliation.country ~ '.png' %}
                                {% if countryFlag | assetExists %}
                                    <img loading=\"lazy\" class=\"countryflag\"
                                         src=\"{{ asset(countryFlag) }}\" alt=\"{{ alpha3_countries[score.team.affiliation.country] }}\"
                                         title=\"{{ alpha3_countries[score.team.affiliation.country] }}\">
                                {% else %}
                                    {{ alpha3_countries[score.team.affiliation.country] }}
                                {% endif %}
                            {% endif %}
                        </a>
                    {% endif %}
                {% endif %}
            </td>
            {% if showAffiliationLogos %}
                <td class=\"scoreaf\">
                    {% if score.team.affiliation %}
                        {% set link = null %}
                        {% if jury %}
                            {% set link = path('jury_team_affiliation', {'affilId': score.team.affilid}) %}
                        {% endif %}
                        <a {% if link %}href=\"{{ link }}\"{% endif %}>
                            {% set affiliationId = score.team.affiliation.affilid %}
                            {% if showExternalId(score.team.affiliation) %}
                                {% set affiliationId = score.team.affiliation.externalid %}
                            {% endif %}
                            {% set affiliationImage = 'images/affiliations/' ~ affiliationId ~ '.png' %}
                            {% if affiliationImage | assetExists %}
                                <img loading=\"lazy\" class=\"affiliation-logo\"
                                     src=\"{{ asset(affiliationImage) }}\" alt=\"{{ score.team.affiliation.name }}\"
                                     title=\"{{ score.team.affiliation.name }}\">
                            {% else %}
                                {{ affiliationId }}
                            {% endif %}
                        </a>
                    {% endif %}
                </td>
            {% endif %}
            {% if color is null %}
                {% set color = \"#FFFFFF\" %}
                {% set colorClass = \"_FFFFFF\" %}
            {% else %}
                {% set colorClass = color | replace({\"#\": \"_\"}) %}
                {% set backgroundColors = backgroundColors | merge({(color): 1}) %}
            {% endif %}
            <td class=\"scoretn cl{{ colorClass }}\" title=\"{{ score.team.effectiveName }}\">
                {% set link = null %}
                {% set extra = null %}
                {% if not static %}
                    {% if jury %}
                        {% set link = path('jury_team', {teamId: score.team.teamid}) %}
                    {% elseif public %}
                        {% set link = path('public_team', {teamId: score.team.teamid}) %}
                        {% set extra = 'data-ajax-modal' %}
                    {% else %}
                        {% set link = path('team_team', {teamId: score.team.teamid}) %}
                        {% set extra = 'data-ajax-modal' %}
                    {% endif %}
                {% endif %}
                <a {% if extra is not null %}{{ extra }}{% endif %} {% if link is not null %}href=\"{{ link }}\"{% endif %}>
                    <span class=\"forceWidth\">
                        {% if usedCategories | length > 1 and scoreboard.bestInCategory(score.team, limitToTeamIds) %}
                            <span class=\"badge badge-warning\" style=\"margin-right: 2em; font-weight: normal;\">
                            {{ score.team.category.name }}
                        </span>
                        {% endif %}
                        {{ score.team.effectiveName }}
                    </span>
                    {% if showAffiliations %}
                        <span class=\"univ forceWidth\">
                            {% if score.team.affiliation %}
                                {{ score.team.affiliation.name }}
                            {% endif %}
                        </span>
                    {% endif %}
                </a>
            </td>
            {% set totalTime = score.totalTime %}
            {% if scoreInSeconds %}
                {% set totalTime = totalTime | printTimeRelative %}
            {% endif %}
            {% set totalPoints = score.numPoints %}
            <td class=\"scorenc\">{{ totalPoints }}</td>
            <td class=\"scorett\">{{ totalTime }}</td>

            {% if showTeamSubmissions or jury %}
                {% for problem in problems %}
                    {# CSS class for correct/incorrect/neutral results #}
                    {% set scoreCssClass = 'score_neutral' %}
                    {% set matrixItem = scoreboard.matrix[score.team.teamid][problem.probid] %}
                    {% if matrixItem.isCorrect %}
                        {% set scoreCssClass = 'score_correct' %}
                        {% if scoreboard.solvedFirst(score.team, problem) %}
                            {% set scoreCssClass = scoreCssClass ~ ' score_first' %}
                        {% endif %}
                    {% elseif showPending and matrixItem.numSubmissionsPending > 0 %}
                        {% set scoreCssClass = 'score_pending' %}
                    {% elseif matrixItem.numSubmissions > 0 %}
                        {% set scoreCssClass = 'score_incorrect' %}
                    {% endif %}

                    {% set numSubmissions = matrixItem.numSubmissions %}
                    {% if showPending and matrixItem.numSubmissionsPending > 0 %}
                        {% set numSubmissions = numSubmissions ~ ' + ' ~ matrixItem.numSubmissionsPending %}
                    {% endif %}

                    {# If correct, print time scored. The format will vary depending on the scoreboard resolution setting #}
                    {% set time = '&nbsp;' %}
                    {% if matrixItem.isCorrect %}
                        {% set time = matrixItem.time %}
                        {% if scoreInSeconds %}
                            {% set time = time | scoreTime | printTimeRelative %}
                            {% if matrixItem.numSubmissions > 1 %}
                                {% set time = time ~ ' + ' ~ (calculatePenaltyTime(true, matrixItem.numSubmissions) | printTimeRelative) %}
                            {% endif %}
                        {% else %}
                            {% set time = time | scoreTime %}
                        {% endif %}
                    {% endif %}

                    {% set link = null %}
                    {% if jury %}
                        {% set restrict = {probid: problem.probid} %}
                        {% set link = path('jury_team', {teamId: score.team.teamid, restrict: restrict}) %}
                    {% endif %}

                    <td class=\"score_cell\">
                        {% if numSubmissions != '0' %}
                            <a {% if link %}href=\"{{ link }}\"{% endif %}>
                                <div class=\"{{ scoreCssClass }}\">
                                    {{ time | raw }}
                                    <span>
                                        {% if numSubmissions is same as(1) %}
                                            1 try
                                        {% else %}
                                            {{ numSubmissions }} tries
                                        {% endif %}
                                    </span>
                                </div>
                            </a>
                        {% endif %}
                    </td>
                {% endfor %}
            {% endif %}
        </tr>
    {% endfor %}

    {# Output summary of last sort order #}
    {% include 'partials/scoreboard_summary.html.twig' with {sortOrder: previousSortOrder} %}
    </tbody>
</table>

{% if showLegends %}
    <p><br/><br/></p>

    {# only print legend when there's more than one category #}
    {% if limitToTeamIds is null and usedCategories | length > 1 and hasDifferentCategoryColors %}
        <table id=\"categ_legend\" class=\"scoreboard scorelegend {% if jury %}scoreboard_jury{% endif %}\">
            <thead>
            <tr>
                <th scope=\"col\">
                    {% set link = null %}
                    {% if jury %}
                        {% set link = path('jury_team_categories') %}
                    {% endif %}
                    <a {% if link %}href=\"{{ link }}\"{% endif %}>Categories</a>
                </th>
            </tr>
            </thead>
            <tbody>
            {% for category in scoreboard.categories | filter(category => usedCategories[category.categoryid] is defined) %}
                <tr {% if category.color %}style=\"background: {{ category.color }};\"{% endif %}>
                    <td>
                        {% set link = null %}
                        {% if jury %}
                            {% set link = path('jury_team_category', {'categoryId': category.categoryid}) %}
                        {% endif %}
                        <a {% if link %}href=\"{{ link }}\"{% endif %}>{{ category.name }}</a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endif %}

    {% if showTeamSubmissions or jury %}
        {% set cellColors = {first: 'Solved first', correct: 'Solved', incorrect: 'Tried, incorrect', pending: 'Tried, pending', neutral: 'Untried'} %}
        <table id=\"cell_legend\" class=\"scoreboard scorelegend {% if jury %}scoreboard_jury{% endif %}\">
            <thead>
            <tr>
                <th scope=\"col\">Cell colours</th>
            </tr>
            </thead>
            <tbody>
            {% for color, description in cellColors %}
                {% if color != 'pending' or showPending %}
                    <tr class=\"score_{{ color }}\">
                        <td>{{ description }}</td>
                    </tr>
                {% endif %}
            {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endif %}

<style>
    {% for color,i in backgroundColors %}
        {% set colorClass = color | replace({\"#\": \"_\"}) %}

        .cl{{ colorClass }} {
            background-color: {{ color }};
        }

        {% set cMin = color|hexColorToRGBA(0) %}
        {% set cMax = color|hexColorToRGBA(1) %}

        .cl{{ colorClass }} .forceWidth.toolong:after {
            background: linear-gradient(to right,
                {{ cMin }} 0%,
                {{ cMax }} 96%);
        }
    {% endfor %}
</style>
<script>
    document.querySelectorAll(\".forceWidth:not(.toolong)\").forEach(el => {
        if (el instanceof Element && el.scrollWidth > el.offsetWidth) {
            el.classList.add(\"toolong\");
        }
    });
</script>
", "partials/scoreboard_table.html.twig", "/domjudge/webapp/templates/partials/scoreboard_table.html.twig");
    }
}
