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

/* partials/scoreboard.html.twig */
class __TwigTemplate_597fe3f5bc707a7c62d3348d5b9a093f37279272bb938b6f830362ab99733a8d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/scoreboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/scoreboard.html.twig"));

        // line 1
        if ( !(isset($context["static"]) || array_key_exists("static", $context))) {
            // line 2
            echo "    ";
            $context["static"] = false;
        }
        // line 4
        echo "
";
        // line 5
        if (((((isset($context["ajax"]) || array_key_exists("ajax", $context)) && (isset($context["ajax"]) || array_key_exists("ajax", $context) ? $context["ajax"] : (function () { throw new RuntimeError('Variable "ajax" does not exist.', 5, $this->source); })())) &&  !(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 5, $this->source); })())) && (isset($context["public"]) || array_key_exists("public", $context) ? $context["public"] : (function () { throw new RuntimeError('Variable "public" does not exist.', 5, $this->source); })()))) {
            // line 6
            echo "    <div class=\"d-none\">
        ";
            // line 7
            $this->loadTemplate("partials/scoreboard_progress_bar.html.twig", "partials/scoreboard.html.twig", 7)->display(twig_array_merge($context, ["contest" => (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 7, $this->source); })())]));
            // line 8
            echo "    </div>
";
        }
        // line 10
        echo "
";
        // line 11
        if ((null === (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 11, $this->source); })()))) {
            // line 12
            echo "    <p class=\"nodata\">No active contest</p>
";
        } else {
            // line 14
            echo "    <div class=\"card\">
        <div class=\"card-header\" style=\"font-family: Roboto, sans-serif; display: flex;\">
            <span style=\"font-weight: bold;\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
            echo "</span>
            <span style=\"color: DimGray; margin-left: auto;\">
                ";
            // line 18
            if ((null === (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 18, $this->source); })()))) {
                // line 19
                echo "                    ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printContestStart((isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 19, $this->source); })())), "html", null, true);
                echo "
                ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 20
(isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 20, $this->source); })()), "freezeData", [], "any", false, false, false, 20), "showFinal", [0 => (isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 20, $this->source); })())], "method", false, false, false, 20)) {
                // line 21
                echo "                    ";
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 21, $this->source); })()), "finalizetime", [], "any", false, false, false, 21))) {
                    // line 22
                    echo "                        preliminary results - not final
                    ";
                } else {
                    // line 24
                    echo "                        final standings
                    ";
                }
                // line 26
                echo "                ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 26, $this->source); })()), "freezeData", [], "any", false, false, false, 26), "stopped", [], "any", false, false, false, 26)) {
                // line 27
                echo "                    contest over, waiting for results
                ";
            } else {
                // line 29
                echo "                    starts: ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 29, $this->source); })()), "starttime", [], "any", false, false, false, 29)), "html", null, true);
                echo " - ends: ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 29, $this->source); })()), "endtime", [], "any", false, false, false, 29)), "html", null, true);
                echo "
                ";
            }
            // line 31
            echo "            </span>
        </div>

        ";
            // line 34
            if ((isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 34, $this->source); })())) {
                // line 35
                echo "            ";
                $this->loadTemplate("partials/scoreboard_progress_bar.html.twig", "partials/scoreboard.html.twig", 35)->display(twig_array_merge($context, ["contest" => (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 35, $this->source); })())]));
                // line 36
                echo "        ";
            }
            // line 37
            echo "    </div> ";
            // line 38
            echo "
    ";
            // line 39
            if (((null === (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 39, $this->source); })())) &&  !(isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 39, $this->source); })()))) {
                // line 40
                echo "        ";
                // line 41
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["groupedAffiliations"]) || array_key_exists("groupedAffiliations", $context) ? $context["groupedAffiliations"] : (function () { throw new RuntimeError('Variable "groupedAffiliations" does not exist.', 41, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["affiliationGroupRow"]) {
                    // line 42
                    echo "            <br/><br/>
            <div class=\"card-deck\">
                ";
                    // line 44
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["affiliationGroupRow"]);
                    foreach ($context['_seq'] as $context["category"] => $context["affiliations"]) {
                        // line 45
                        echo "                    <div class=\"card\" style=\"font-family: Roboto, sans-serif;\">
                        <div class=\"card-header\">";
                        // line 46
                        echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                        echo "</div>
                        <div class=\"card-body\">
                            <ul class=\"list-group list-group-flush\">
                                ";
                        // line 49
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["affiliations"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["affiliation"]) {
                            // line 50
                            echo "                                    <li class=\"list-group-item\">
                                        ";
                            // line 51
                            $context["affiliationLogo"] = (("images/affiliations/" . twig_get_attribute($this->env, $this->source, $context["affiliation"], "id", [], "any", false, false, false, 51)) . ".png");
                            // line 52
                            echo "                                        ";
                            if ($this->extensions['App\Twig\TwigExtension']->assetExists((isset($context["affiliationLogo"]) || array_key_exists("affiliationLogo", $context) ? $context["affiliationLogo"] : (function () { throw new RuntimeError('Variable "affiliationLogo" does not exist.', 52, $this->source); })()))) {
                                // line 53
                                echo "                                            <img loading=\"lazy\" class=\"affiliation-logo\"
                                                 src=\"";
                                // line 54
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["affiliationLogo"]) || array_key_exists("affiliationLogo", $context) ? $context["affiliationLogo"] : (function () { throw new RuntimeError('Variable "affiliationLogo" does not exist.', 54, $this->source); })())), "html", null, true);
                                echo "\" alt=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiliation"], "name", [], "any", false, false, false, 54), "html", null, true);
                                echo "\"
                                                 title=\"";
                                // line 55
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiliation"], "name", [], "any", false, false, false, 55), "html", null, true);
                                echo "\">
                                        ";
                            }
                            // line 57
                            echo "                                        ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiliation"], "name", [], "any", false, false, false, 57), "html", null, true);
                            echo "
                                    </li>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['affiliation'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 60
                        echo "                            </ul>
                        </div>
                    </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['category'], $context['affiliations'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 64
                    echo "                ";
                    if ((twig_length_filter($this->env, $context["affiliationGroupRow"]) < 3)) {
                        // line 65
                        echo "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range((twig_length_filter($this->env, $context["affiliationGroupRow"]) + 1), 3));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 66
                            echo "                        <div class=\"card\" style=\"border: none;\"></div>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 68
                        echo "                ";
                    }
                    // line 69
                    echo "            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['affiliationGroupRow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "    ";
            } else {
                // line 72
                echo "
        ";
                // line 73
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 73, $this->source); })()), "freezeData", [], "any", false, false, false, 73), "showFrozen", [0 => false], "method", false, false, false, 73)) {
                    // line 74
                    echo "            <div class=\"alert alert-warning\" role=\"alert\" style=\"font-size: 80%;\">
                ";
                    // line 75
                    if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 75, $this->source); })())) {
                        // line 76
                        echo "                    <a href=\"";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_index");
                        echo "\">The public scoreboard</a>
                    was frozen with ";
                        // line 77
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 77, $this->source); })()), "minutesRemaining", [], "any", false, false, false, 77), "html", null, true);
                        echo " minutes remaining
                ";
                    } else {
                        // line 79
                        echo "                    The scoreboard was frozen with ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 79, $this->source); })()), "minutesRemaining", [], "any", false, false, false, 79), "html", null, true);
                        echo " minutes remaining - solutions
                    submitted in the last ";
                        // line 80
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 80, $this->source); })()), "minutesRemaining", [], "any", false, false, false, 80), "html", null, true);
                        echo " minutes of the contest ";
                        if ((isset($context["showPending"]) || array_key_exists("showPending", $context) ? $context["showPending"] : (function () { throw new RuntimeError('Variable "showPending" does not exist.', 80, $this->source); })())) {
                            echo "are still shown as pending";
                        } else {
                            echo "are not shown";
                        }
                        echo ".
                ";
                    }
                    // line 82
                    echo "            </div>
        ";
                }
                // line 84
                echo "
        ";
                // line 85
                if (( !(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 85, $this->source); })()) && (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 86
(isset($context["filterValues"]) || array_key_exists("filterValues", $context) ? $context["filterValues"] : (function () { throw new RuntimeError('Variable "filterValues" does not exist.', 86, $this->source); })()), "affiliations", [], "any", false, false, false, 86)) > 1) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 87
(isset($context["filterValues"]) || array_key_exists("filterValues", $context) ? $context["filterValues"] : (function () { throw new RuntimeError('Variable "filterValues" does not exist.', 87, $this->source); })()), "countries", [], "any", false, false, false, 87)) > 1)) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 88
(isset($context["filterValues"]) || array_key_exists("filterValues", $context) ? $context["filterValues"] : (function () { throw new RuntimeError('Variable "filterValues" does not exist.', 88, $this->source); })()), "categories", [], "any", false, false, false, 88)) > 1)))) {
                    // line 89
                    echo "\t<div class=\"dropdown\">
            <button class=\"btn btn-outline-secondary btn-sm m-2 dropdown-toggle\" data-toggle=\"dropdown\"
                aria-haspopup=\"true\" aria-expanded=\"false\" id=\"filter-toggle\">
                <i class=\"fas fa-filter\"></i>
                ";
                    // line 93
                    if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["scoreFilter"]) || array_key_exists("scoreFilter", $context) ? $context["scoreFilter"] : (function () { throw new RuntimeError('Variable "scoreFilter" does not exist.', 93, $this->source); })()), "filteredOn", [], "any", false, false, false, 93))) {
                        // line 94
                        echo "                    Filter
                ";
                    } else {
                        // line 96
                        echo "                    Filtered (";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["scoreFilter"]) || array_key_exists("scoreFilter", $context) ? $context["scoreFilter"] : (function () { throw new RuntimeError('Variable "scoreFilter" does not exist.', 96, $this->source); })()), "filteredOn", [], "any", false, false, false, 96), "html", null, true);
                        echo ")
                ";
                    }
                    // line 98
                    echo "            </button>

            <div class=\"dropdown-menu\" aria-labelledby=\"filter-toggle\">
                <form method=\"get\">
                    <div class=\"m-2 p-2 form-inline\">
                        ";
                    // line 103
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["filterValues"]) || array_key_exists("filterValues", $context) ? $context["filterValues"] : (function () { throw new RuntimeError('Variable "filterValues" does not exist.', 103, $this->source); })()), "affiliations", [], "any", false, false, false, 103)) > 1)) {
                        // line 104
                        echo "                            <select class=\"form-control mr-2\" multiple size=\"8\" name=\"affiliations[]\">
                                ";
                        // line 105
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["filterValues"]) || array_key_exists("filterValues", $context) ? $context["filterValues"] : (function () { throw new RuntimeError('Variable "filterValues" does not exist.', 105, $this->source); })()), "affiliations", [], "any", false, false, false, 105));
                        foreach ($context['_seq'] as $context["affiliationId"] => $context["affiliation"]) {
                            // line 106
                            echo "                                    <option ";
                            if (twig_in_filter($context["affiliationId"], twig_get_attribute($this->env, $this->source, (isset($context["scoreFilter"]) || array_key_exists("scoreFilter", $context) ? $context["scoreFilter"] : (function () { throw new RuntimeError('Variable "scoreFilter" does not exist.', 106, $this->source); })()), "affiliations", [], "any", false, false, false, 106))) {
                                echo "selected";
                            }
                            // line 107
                            echo "                                            value=\"";
                            echo twig_escape_filter($this->env, $context["affiliationId"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["affiliation"], "html", null, true);
                            echo "</option>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['affiliationId'], $context['affiliation'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 109
                        echo "                            </select>
                        ";
                    }
                    // line 111
                    echo "                        ";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["filterValues"]) || array_key_exists("filterValues", $context) ? $context["filterValues"] : (function () { throw new RuntimeError('Variable "filterValues" does not exist.', 111, $this->source); })()), "countries", [], "any", false, false, false, 111)) > 1)) {
                        // line 112
                        echo "                            <select class=\"form-control mr-2\" multiple size=\"8\" name=\"countries[]\">
                                ";
                        // line 113
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["filterValues"]) || array_key_exists("filterValues", $context) ? $context["filterValues"] : (function () { throw new RuntimeError('Variable "filterValues" does not exist.', 113, $this->source); })()), "countries", [], "any", false, false, false, 113));
                        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                            // line 114
                            echo "                                    <option ";
                            if (twig_in_filter($context["country"], twig_get_attribute($this->env, $this->source, (isset($context["scoreFilter"]) || array_key_exists("scoreFilter", $context) ? $context["scoreFilter"] : (function () { throw new RuntimeError('Variable "scoreFilter" does not exist.', 114, $this->source); })()), "countries", [], "any", false, false, false, 114))) {
                                echo "selected";
                            }
                            // line 115
                            echo "                                            value=\"";
                            echo twig_escape_filter($this->env, $context["country"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alpha3_countries"]) || array_key_exists("alpha3_countries", $context) ? $context["alpha3_countries"] : (function () { throw new RuntimeError('Variable "alpha3_countries" does not exist.', 115, $this->source); })()), $context["country"], [], "array", false, false, false, 115), "html", null, true);
                            echo "</option>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 117
                        echo "                            </select>
                        ";
                    }
                    // line 119
                    echo "                        ";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["filterValues"]) || array_key_exists("filterValues", $context) ? $context["filterValues"] : (function () { throw new RuntimeError('Variable "filterValues" does not exist.', 119, $this->source); })()), "categories", [], "any", false, false, false, 119)) > 1)) {
                        // line 120
                        echo "                            <select class=\"form-control mr-2\" multiple size=\"8\" name=\"categories[]\">
                                ";
                        // line 121
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["filterValues"]) || array_key_exists("filterValues", $context) ? $context["filterValues"] : (function () { throw new RuntimeError('Variable "filterValues" does not exist.', 121, $this->source); })()), "categories", [], "any", false, false, false, 121));
                        foreach ($context['_seq'] as $context["categoryId"] => $context["category"]) {
                            // line 122
                            echo "                                    <option ";
                            if (twig_in_filter($context["categoryId"], twig_get_attribute($this->env, $this->source, (isset($context["scoreFilter"]) || array_key_exists("scoreFilter", $context) ? $context["scoreFilter"] : (function () { throw new RuntimeError('Variable "scoreFilter" does not exist.', 122, $this->source); })()), "categories", [], "any", false, false, false, 122))) {
                                echo "selected";
                            }
                            // line 123
                            echo "                                            value=\"";
                            echo twig_escape_filter($this->env, $context["categoryId"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                            echo "</option>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['categoryId'], $context['category'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 125
                        echo "                            </select>
                        ";
                    }
                    // line 127
                    echo "                    <input type=\"submit\" class=\"btn btn-primary btn-sm align-top\" name=\"filter\" value=\"filter\"/>
                    <input type=\"submit\" class=\"btn btn-secondary btn-sm align-top\" name=\"clear\" value=\"clear\"/>
                    </div>
                </form>
            </div>
        </div>
        ";
                } else {
                    // line 133
                    echo " ";
                    // line 134
                    echo "            <br/>
        ";
                }
                // line 135
                echo " ";
                // line 136
                echo "
        ";
                // line 137
                $this->loadTemplate("partials/scoreboard_table.html.twig", "partials/scoreboard.html.twig", 137)->display(twig_array_merge($context, ["displayRank" => true, "showLegends" => true]));
                // line 138
                echo "
    ";
            }
            // line 139
            echo " ";
            // line 140
            echo "
    <p id=\"lastmod\">
        Last Update: ";
            // line 142
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(null, "%a %d %b %Y %T %Z"), "html", null, true);
            echo "<br/>
        using <a href=\"https://www.domjudge.org/\" target=\"_top\">DOMjudge</a>
    </p>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/scoreboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 142,  423 => 140,  421 => 139,  417 => 138,  415 => 137,  412 => 136,  410 => 135,  406 => 134,  404 => 133,  395 => 127,  391 => 125,  380 => 123,  375 => 122,  371 => 121,  368 => 120,  365 => 119,  361 => 117,  350 => 115,  345 => 114,  341 => 113,  338 => 112,  335 => 111,  331 => 109,  320 => 107,  315 => 106,  311 => 105,  308 => 104,  306 => 103,  299 => 98,  293 => 96,  289 => 94,  287 => 93,  281 => 89,  279 => 88,  278 => 87,  277 => 86,  276 => 85,  273 => 84,  269 => 82,  258 => 80,  253 => 79,  248 => 77,  243 => 76,  241 => 75,  238 => 74,  236 => 73,  233 => 72,  230 => 71,  223 => 69,  220 => 68,  213 => 66,  208 => 65,  205 => 64,  196 => 60,  186 => 57,  181 => 55,  175 => 54,  172 => 53,  169 => 52,  167 => 51,  164 => 50,  160 => 49,  154 => 46,  151 => 45,  147 => 44,  143 => 42,  138 => 41,  136 => 40,  134 => 39,  131 => 38,  129 => 37,  126 => 36,  123 => 35,  121 => 34,  116 => 31,  108 => 29,  104 => 27,  101 => 26,  97 => 24,  93 => 22,  90 => 21,  88 => 20,  83 => 19,  81 => 18,  76 => 16,  72 => 14,  68 => 12,  66 => 11,  63 => 10,  59 => 8,  57 => 7,  54 => 6,  52 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if static is not defined %}
    {% set static = false %}
{% endif %}

{% if ajax is defined and ajax and not static and public %}
    <div class=\"d-none\">
        {% include 'partials/scoreboard_progress_bar.html.twig' with {contest: current_contest} %}
    </div>
{% endif %}

{% if current_contest is null %}
    <p class=\"nodata\">No active contest</p>
{% else %}
    <div class=\"card\">
        <div class=\"card-header\" style=\"font-family: Roboto, sans-serif; display: flex;\">
            <span style=\"font-weight: bold;\">{{ current_contest.name }}</span>
            <span style=\"color: DimGray; margin-left: auto;\">
                {% if scoreboard is null %}
                    {{ current_contest | printContestStart }}
                {% elseif scoreboard.freezeData.showFinal(jury) %}
                    {% if current_contest.finalizetime is empty %}
                        preliminary results - not final
                    {% else %}
                        final standings
                    {% endif %}
                {% elseif scoreboard.freezeData.stopped %}
                    contest over, waiting for results
                {% else %}
                    starts: {{ current_contest.starttime | printtime }} - ends: {{ current_contest.endtime | printtime }}
                {% endif %}
            </span>
        </div>

        {% if static %}
            {% include 'partials/scoreboard_progress_bar.html.twig' with {contest: current_contest} %}
        {% endif %}
    </div> {# card #}

    {% if scoreboard is null and not jury %}
        {# Display a list of teams by group. This is targeted for World Finals, but looks nice anyway #}
        {% for affiliationGroupRow in groupedAffiliations %}
            <br/><br/>
            <div class=\"card-deck\">
                {% for category, affiliations in affiliationGroupRow %}
                    <div class=\"card\" style=\"font-family: Roboto, sans-serif;\">
                        <div class=\"card-header\">{{ category }}</div>
                        <div class=\"card-body\">
                            <ul class=\"list-group list-group-flush\">
                                {% for affiliation in affiliations %}
                                    <li class=\"list-group-item\">
                                        {% set affiliationLogo = 'images/affiliations/' ~ affiliation.id ~ '.png' %}
                                        {% if affiliationLogo | assetExists %}
                                            <img loading=\"lazy\" class=\"affiliation-logo\"
                                                 src=\"{{ asset(affiliationLogo) }}\" alt=\"{{ affiliation.name }}\"
                                                 title=\"{{ affiliation.name }}\">
                                        {% endif %}
                                        {{ affiliation.name }}
                                    </li>
                                {% endfor %}
                            </ul>
                        </div>
                    </div>
                {% endfor %}
                {% if affiliationGroupRow | length < 3 %}
                    {% for i in (affiliationGroupRow | length + 1)..3 %}
                        <div class=\"card\" style=\"border: none;\"></div>
                    {% endfor %}
                {% endif %}
            </div>
        {% endfor %}
    {% else %}

        {% if scoreboard.freezeData.showFrozen(false) %}
            <div class=\"alert alert-warning\" role=\"alert\" style=\"font-size: 80%;\">
                {% if jury %}
                    <a href=\"{{ path('public_index') }}\">The public scoreboard</a>
                    was frozen with {{ current_contest.minutesRemaining }} minutes remaining
                {% else %}
                    The scoreboard was frozen with {{ current_contest.minutesRemaining }} minutes remaining - solutions
                    submitted in the last {{ current_contest.minutesRemaining }} minutes of the contest {% if showPending %}are still shown as pending{% else %}are not shown{% endif %}.
                {% endif %}
            </div>
        {% endif %}

        {% if not static and
            (filterValues.affiliations | length > 1 or
             filterValues.countries | length > 1 or
             filterValues.categories | length > 1) %}
\t<div class=\"dropdown\">
            <button class=\"btn btn-outline-secondary btn-sm m-2 dropdown-toggle\" data-toggle=\"dropdown\"
                aria-haspopup=\"true\" aria-expanded=\"false\" id=\"filter-toggle\">
                <i class=\"fas fa-filter\"></i>
                {% if scoreFilter.filteredOn is empty %}
                    Filter
                {% else %}
                    Filtered ({{ scoreFilter.filteredOn }})
                {% endif %}
            </button>

            <div class=\"dropdown-menu\" aria-labelledby=\"filter-toggle\">
                <form method=\"get\">
                    <div class=\"m-2 p-2 form-inline\">
                        {% if filterValues.affiliations | length > 1 %}
                            <select class=\"form-control mr-2\" multiple size=\"8\" name=\"affiliations[]\">
                                {% for affiliationId, affiliation in filterValues.affiliations %}
                                    <option {% if affiliationId in scoreFilter.affiliations %}selected{% endif %}
                                            value=\"{{ affiliationId }}\">{{ affiliation }}</option>
                                {% endfor %}
                            </select>
                        {% endif %}
                        {% if filterValues.countries | length > 1 %}
                            <select class=\"form-control mr-2\" multiple size=\"8\" name=\"countries[]\">
                                {% for country in filterValues.countries %}
                                    <option {% if country in scoreFilter.countries %}selected{% endif %}
                                            value=\"{{ country }}\">{{ alpha3_countries[country] }}</option>
                                {% endfor %}
                            </select>
                        {% endif %}
                        {% if filterValues.categories | length > 1 %}
                            <select class=\"form-control mr-2\" multiple size=\"8\" name=\"categories[]\">
                                {% for categoryId, category in filterValues.categories %}
                                    <option {% if categoryId in scoreFilter.categories %}selected{% endif %}
                                            value=\"{{ categoryId }}\">{{ category }}</option>
                                {% endfor %}
                            </select>
                        {% endif %}
                    <input type=\"submit\" class=\"btn btn-primary btn-sm align-top\" name=\"filter\" value=\"filter\"/>
                    <input type=\"submit\" class=\"btn btn-secondary btn-sm align-top\" name=\"clear\" value=\"clear\"/>
                    </div>
                </form>
            </div>
        </div>
        {% else %} {# not static and filterValues*length>1 #}
            <br/>
        {% endif %} {# not static and filterValues*length>1 #}

        {% include 'partials/scoreboard_table.html.twig' with {displayRank: true, showLegends: true} %}

    {% endif %} {# not scoreboard is null and not jury #}

    <p id=\"lastmod\">
        Last Update: {{ null | printtime('%a %d %b %Y %T %Z') }}<br/>
        using <a href=\"https://www.domjudge.org/\" target=\"_top\">DOMjudge</a>
    </p>
{% endif %}
", "partials/scoreboard.html.twig", "/domjudge/webapp/templates/partials/scoreboard.html.twig");
    }
}
