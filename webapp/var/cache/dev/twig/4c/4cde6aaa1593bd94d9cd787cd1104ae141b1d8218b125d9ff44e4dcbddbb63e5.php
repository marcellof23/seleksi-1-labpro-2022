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

/* jury/balloons.html.twig */
class __TwigTemplate_4249aea0354bfd3f94783d4a3338b765941d8119c0d5c467ff5169fa77f28e3d extends \Twig\Template
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
            'content' => [$this, 'block_content'],
            'extrafooter' => [$this, 'block_extrafooter'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/balloons.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/balloons.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/balloons.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/balloons.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Balloons - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        // line 7
        echo "    ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
    ";
        // line 8
        echo twig_call_macro($macros["macros"], "macro_table_extrahead", [], 8, $context, $this->getSourceContext());
        echo "
    ";
        // line 9
        echo twig_call_macro($macros["macros"], "macro_select2_extrahead", [], 9, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "
    ";
        // line 14
        if ((null === (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 14, $this->source); })()))) {
            // line 15
            echo "        <h1>Balloons</h1>
        <p class=\"nodata\">No active contest</p>
    ";
        } else {
            // line 18
            echo "
    <h1>Balloons - ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
            echo "</h1>

    ";
            // line 21
            if ((isset($context["isfrozen"]) || array_key_exists("isfrozen", $context) ? $context["isfrozen"] : (function () { throw new RuntimeError('Variable "isfrozen" does not exist.', 21, $this->source); })())) {
                // line 22
                echo "        <div class=\"alert alert-info\"><i class=\"fas fa-snowflake\"></i> Scoreboard of c";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 22, $this->source); })()), "cid", [], "any", false, false, false, 22), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 22, $this->source); })()), "shortname", [], "any", false, false, false, 22), "html", null, true);
                echo ") is now frozen.</div>
    ";
            }
            // line 24
            echo "
    <div class=\"mb-3\">
        <div class=\"btn-group-toggle\" data-toggle=\"buttons\">
            <label class=\"btn btn-outline-secondary ";
            // line 27
            if ((isset($context["hasFilters"]) || array_key_exists("hasFilters", $context) ? $context["hasFilters"] : (function () { throw new RuntimeError('Variable "hasFilters" does not exist.', 27, $this->source); })())) {
                echo "active";
            }
            echo "\">
                <input type=\"checkbox\" id=\"filter-toggle\" ";
            // line 28
            if ((isset($context["hasFilters"]) || array_key_exists("hasFilters", $context) ? $context["hasFilters"] : (function () { throw new RuntimeError('Variable "hasFilters" does not exist.', 28, $this->source); })())) {
                echo "checked";
            }
            echo " autocomplete=\"off\">
                <i class=\"fas fa-filter\"></i> Filter
            </label>
        </div>
        <div class=\"card mt-3";
            // line 32
            if ( !(isset($context["hasFilters"]) || array_key_exists("hasFilters", $context) ? $context["hasFilters"] : (function () { throw new RuntimeError('Variable "hasFilters" does not exist.', 32, $this->source); })())) {
                echo " d-none";
            }
            echo "\" id=\"filter-card\">
            <div class=\"card-body\">
                <div class=\"form-row\">
                    <div class=\"form-group col-sm-6\">
                        <label for=\"affiliation-filter\">Filter on affiliation(s)</label>
                        <select class=\"select2 form-control\" multiple data-filter-field=\"affiliation-id\"
                                data-ajax-url=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_ajax_data", ["datatype" => "affiliations", "select2" => true]), "html", null, true);
            echo "\">";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["filteredAffiliations"]) || array_key_exists("filteredAffiliations", $context) ? $context["filteredAffiliations"] : (function () { throw new RuntimeError('Variable "filteredAffiliations" does not exist.', 39, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["affiliation"]) {
                // line 40
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiliation"], "affilid", [], "any", false, false, false, 40), "html", null, true);
                echo "\" selected>
                                    ";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiliation"], "name", [], "any", false, false, false, 41), "html", null, true);
                echo " (a";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiliation"], "affilid", [], "any", false, false, false, 41), "html", null, true);
                echo ")
                                </option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['affiliation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "
                        </select>
                    </div>
                </div>

                <button class=\"btn btn-secondary\" id=\"clear-filters\"><i class=\"fas fa-times-circle\"></i> Clear all
                    filters
                </button>
            </div>
        </div>
    </div>
    <div data-ajax-refresh-target data-ajax-refresh-after=\"process_balloons_filter\">";
            // line 56
            $this->loadTemplate("jury/partials/balloon_list.html.twig", "jury/balloons.html.twig", 56)->display($context);
            // line 57
            echo "    </div>
    ";
        }
        // line 59
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        // line 63
        echo "    <script>
        \$(function () {
            \$('#filter-toggle').on('change', function () {
                if (\$(this).is(':checked')) {
                    \$('#filter-card').removeClass('d-none');
                } else {
                    \$('#filter-card').addClass('d-none');
                }
            });

            \$('.select2').each(function () {
                var \$elem = \$(this);
                \$elem.select2({
                    minimumInputLength: 1,
                    ajax: {
                        url: \$elem.data('ajax-url'),
                        dataType: 'json',
                        delay: 250
                    }
                })
            });

            \$('#clear-filters').on('click', function () {
                \$('select[data-filter-field]').val([]).trigger('change');
            });

            window.process_balloons_filter = function () {
                var \$trs = \$('table.balloons-table > tbody tr');

                var filters = [];

                \$('select[data-filter-field]').each(function () {
                    var \$filterField = \$(this);
                    if (\$filterField.val().length) {
                        filters.push({
                            field: \$filterField.data('filter-field'),
                            values: \$filterField.val()
                        });
                    }
                });

                var balloons_filter = {};
                for (var i = 0; i < filters.length; i++) {
                    balloons_filter[filters[i].field] = filters[i].values;
                }

                setCookie('domjudge_balloonsfilter', JSON.stringify(balloons_filter));

                if (filters.length === 0) {
                    \$trs.show();
                } else {
                    \$trs
                        .hide()
                        .filter(function () {
                            var \$tr = \$(this);

                            for (var i = 0; i < filters.length; i++) {
                                var value = \"\" + \$tr.data(filters[i].field);
                                if (filters[i].values.indexOf(value) === -1) {
                                    return false;
                                }
                            }

                            return true;
                        })
                        .show();
                }
            };

            \$('select[data-filter-field]').on('change', process_balloons_filter);
            window.process_balloons_filter();
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jury/balloons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 63,  236 => 62,  225 => 59,  221 => 57,  219 => 56,  206 => 44,  196 => 41,  191 => 40,  187 => 39,  184 => 38,  173 => 32,  164 => 28,  158 => 27,  153 => 24,  145 => 22,  143 => 21,  138 => 19,  135 => 18,  130 => 15,  128 => 14,  125 => 13,  115 => 12,  103 => 9,  99 => 8,  94 => 7,  84 => 6,  64 => 4,  53 => 1,  51 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Balloons - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
    {{ macros.select2_extrahead() }}
{% endblock %}

{% block content %}

    {% if current_contest is null %}
        <h1>Balloons</h1>
        <p class=\"nodata\">No active contest</p>
    {% else %}

    <h1>Balloons - {{ current_contest.name }}</h1>

    {% if isfrozen %}
        <div class=\"alert alert-info\"><i class=\"fas fa-snowflake\"></i> Scoreboard of c{{ current_contest.cid }} ({{ current_contest.shortname }}) is now frozen.</div>
    {% endif %}

    <div class=\"mb-3\">
        <div class=\"btn-group-toggle\" data-toggle=\"buttons\">
            <label class=\"btn btn-outline-secondary {% if hasFilters %}active{% endif %}\">
                <input type=\"checkbox\" id=\"filter-toggle\" {% if hasFilters %}checked{% endif %} autocomplete=\"off\">
                <i class=\"fas fa-filter\"></i> Filter
            </label>
        </div>
        <div class=\"card mt-3{% if not hasFilters %} d-none{% endif %}\" id=\"filter-card\">
            <div class=\"card-body\">
                <div class=\"form-row\">
                    <div class=\"form-group col-sm-6\">
                        <label for=\"affiliation-filter\">Filter on affiliation(s)</label>
                        <select class=\"select2 form-control\" multiple data-filter-field=\"affiliation-id\"
                                data-ajax-url=\"{{ path('jury_ajax_data', {datatype: 'affiliations', select2: true}) }}\">
                            {%- for affiliation in filteredAffiliations %}
                                <option value=\"{{ affiliation.affilid }}\" selected>
                                    {{ affiliation.name }} (a{{ affiliation.affilid }})
                                </option>
                            {%- endfor %}

                        </select>
                    </div>
                </div>

                <button class=\"btn btn-secondary\" id=\"clear-filters\"><i class=\"fas fa-times-circle\"></i> Clear all
                    filters
                </button>
            </div>
        </div>
    </div>
    <div data-ajax-refresh-target data-ajax-refresh-after=\"process_balloons_filter\">
        {%- include 'jury/partials/balloon_list.html.twig' %}
    </div>
    {% endif %}

{% endblock %}

{% block extrafooter %}
    <script>
        \$(function () {
            \$('#filter-toggle').on('change', function () {
                if (\$(this).is(':checked')) {
                    \$('#filter-card').removeClass('d-none');
                } else {
                    \$('#filter-card').addClass('d-none');
                }
            });

            \$('.select2').each(function () {
                var \$elem = \$(this);
                \$elem.select2({
                    minimumInputLength: 1,
                    ajax: {
                        url: \$elem.data('ajax-url'),
                        dataType: 'json',
                        delay: 250
                    }
                })
            });

            \$('#clear-filters').on('click', function () {
                \$('select[data-filter-field]').val([]).trigger('change');
            });

            window.process_balloons_filter = function () {
                var \$trs = \$('table.balloons-table > tbody tr');

                var filters = [];

                \$('select[data-filter-field]').each(function () {
                    var \$filterField = \$(this);
                    if (\$filterField.val().length) {
                        filters.push({
                            field: \$filterField.data('filter-field'),
                            values: \$filterField.val()
                        });
                    }
                });

                var balloons_filter = {};
                for (var i = 0; i < filters.length; i++) {
                    balloons_filter[filters[i].field] = filters[i].values;
                }

                setCookie('domjudge_balloonsfilter', JSON.stringify(balloons_filter));

                if (filters.length === 0) {
                    \$trs.show();
                } else {
                    \$trs
                        .hide()
                        .filter(function () {
                            var \$tr = \$(this);

                            for (var i = 0; i < filters.length; i++) {
                                var value = \"\" + \$tr.data(filters[i].field);
                                if (filters[i].values.indexOf(value) === -1) {
                                    return false;
                                }
                            }

                            return true;
                        })
                        .show();
                }
            };

            \$('select[data-filter-field]').on('change', process_balloons_filter);
            window.process_balloons_filter();
        });
    </script>
{% endblock %}
", "jury/balloons.html.twig", "/domjudge/webapp/templates/jury/balloons.html.twig");
    }
}
