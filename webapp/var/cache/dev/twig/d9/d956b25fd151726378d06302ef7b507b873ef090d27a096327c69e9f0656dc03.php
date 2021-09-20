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

/* jury/menu.html.twig */
class __TwigTemplate_65e6b5ce145505261eb2db09e5593bcb646e7f2ade3bc7a663cf3d722557fa48 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
    <a class=\"navbar-brand hidden-sm-down\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_index");
        echo "\">DOMjudge</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuDefault\" aria-controls=\"menuDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"menuDefault\" data-update-url=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_ajax_updates");
        echo "\">
        <ul class=\"navbar-nav mr-auto\">

            ";
        // line 10
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BALLOON")) {
            // line 11
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 12
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_balloons");
            echo "\">
                        <i class=\"fas fa-map-marker-alt\"></i> balloons
                        <span class=\"badge badge-info\" id=\"num-alerts-balloons\"></span>
                    </a>
                </li>
            ";
        }
        // line 18
        echo "
            ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 20
            echo "                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownJudgehosts\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-gavel\"></i> judgehosts
                        <span class=\"badge badge-warning\" id=\"num-alerts-judgehosts\"></span>
                        <span class=\"badge badge-danger\" id=\"num-alerts-internalerrors\"></span>
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehosts");
            echo "\" id=\"menu_judgehosts\">
                            <i class=\"fas fa-server fa-fw\"></i> judgehosts <span class=\"badge badge-warning\" id=\"num-alerts-judgehosts-sub\"></span>
                        </a>
                        <a class=\"dropdown-item dropdown-disabled\" href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_internal_errors");
            echo "\" id=\"menu_internal_error\">
                            <i class=\"fas fa-bolt fa-fw\"></i> internal error <span class=\"badge badge-danger\" id=\"num-alerts-internalerrors-sub\"></span>
                        </a>
                    </div>
                </li>
            ";
        }
        // line 36
        echo "
            ";
        // line 37
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 38
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarifications");
            echo "\" id=\"menu_clarifications\"><i class=\"fas fa-comments\"></i> clarifications <span class=\"badge badge-info\" id=\"num-alerts-clarifications\"></span></a>
                </li>


                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submissions");
            echo "\"><i class=\"fas fa-file-code\"></i> submissions</a>
                </li>

                ";
            // line 47
            if ((isset($context["show_shadow_differences"]) || array_key_exists("show_shadow_differences", $context) ? $context["show_shadow_differences"] : (function () { throw new RuntimeError('Variable "show_shadow_differences" does not exist.', 47, $this->source); })())) {
                // line 48
                echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
                // line 49
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences");
                echo "\"><i class=\"fas fa-not-equal\"></i> shadow differences</a>
                    </li>
                ";
            }
            // line 52
            echo "
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudgings");
            echo "\" id=\"menu_rejudgings\"><i class=\"fas fa-sync\"></i> rejudgings <span class=\"badge badge-info\" id=\"num-alerts-rejudgings\"></span></a>
                </li>
            ";
        }
        // line 57
        echo "
            ";
        // line 58
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 59
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_scoreboard");
            echo "\"><i class=\"fas fa-list-ol\"></i> scoreboard</a>
                </li>
            ";
        }
        // line 63
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_TEAM")) {
            // line 64
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" target=\"_top\" href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_index");
            echo "\"><i class=\"fas fa-arrow-right\"></i> team</a>
                </li>
            ";
        }
        // line 68
        echo "        </ul>

        <ul class=\"navbar-nav ml-auto\">
            ";
        // line 72
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 73
            echo "                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-user\"></i> ";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "getUsername", [], "method", false, false, false, 75), "html", null, true);
            echo "
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        ";
            // line 78
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "getName", [], "method", false, false, false, 78))) {
                // line 79
                echo "                            <a class=\"dropdown-item disabled\" href=\"#\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "getName", [], "method", false, false, false, 79), "html", null, true);
                echo "</a>
                        ";
            }
            // line 81
            echo "
                        <a class=\"dropdown-item d-none\" href=\"#\" id=\"notify_disable\">
                            <i class=\"fas fa-bell-slash fa-fw\"></i> Disable Notifications
                        </a>
                        <a class=\"dropdown-item d-none\" href=\"#\" id=\"notify_enable\">
                            <i class=\"fas fa-bell fa-fw\"></i> Enable Notifications
                        </a>

                        ";
            // line 89
            if (((isset($context["refresh"]) || array_key_exists("refresh", $context)) && (isset($context["refresh"]) || array_key_exists("refresh", $context) ? $context["refresh"] : (function () { throw new RuntimeError('Variable "refresh" does not exist.', 89, $this->source); })()))) {
                // line 90
                echo "                            <a class=\"dropdown-item\" href=\"#\" id=\"refresh-navitem\">
                                <i class=\"fas fa-sync-alt fa-fw\"></i> <span id=\"refresh-toggle\">
                  ";
                // line 92
                if ((isset($context["refresh_flag"]) || array_key_exists("refresh_flag", $context) ? $context["refresh_flag"] : (function () { throw new RuntimeError('Variable "refresh_flag" does not exist.', 92, $this->source); })())) {
                    // line 93
                    echo "                      Disable Refresh
                  ";
                } else {
                    // line 95
                    echo "                      Enable Refresh
                  ";
                }
                // line 97
                echo "                </span>
                                ";
                // line 98
                if ((isset($context["refresh"]) || array_key_exists("refresh", $context) ? $context["refresh"] : (function () { throw new RuntimeError('Variable "refresh" does not exist.', 98, $this->source); })())) {
                    // line 99
                    echo "                                    <span class=\"small text-muted\">(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["refresh"]) || array_key_exists("refresh", $context) ? $context["refresh"] : (function () { throw new RuntimeError('Variable "refresh" does not exist.', 99, $this->source); })()), "after", [], "any", false, false, false, 99), "html", null, true);
                    echo "s)</span>
                                ";
                }
                // line 101
                echo "                            </a>
                        ";
            }
            // line 103
            echo "
                        <a class=\"dropdown-item\" href=\"";
            // line 104
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\"><i class=\"fas fa-sign-out-alt fa-fw\"></i>Logout </a>
                    </div>
                </li>
            ";
        } else {
            // line 108
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" target=\"_top\" href=\"";
            // line 109
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\"><i class=\"fas fa-sign-in-alt fa-fw\"></i> log in</a>
                </li>
            ";
        }
        // line 112
        echo "
            ";
        // line 113
        $this->loadTemplate("partials/menu_change_contest.html.twig", "jury/menu.html.twig", 113)->display(twig_array_merge($context, ["contest" => (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 113, $this->source); })()), "contests" => (isset($context["current_contests"]) || array_key_exists("current_contests", $context) ? $context["current_contests"] : (function () { throw new RuntimeError('Variable "current_contests" does not exist.', 113, $this->source); })()), "change_path" => "jury_change_contest", "show_no_contest" => true]));
        // line 114
        echo "        </ul>
        ";
        // line 115
        $this->loadTemplate("partials/menu_countdown.html.twig", "jury/menu.html.twig", 115)->display(twig_array_merge($context, ["contest" => (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 115, $this->source); })())]));
        // line 116
        echo "    </div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "jury/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 116,  266 => 115,  263 => 114,  261 => 113,  258 => 112,  252 => 109,  249 => 108,  242 => 104,  239 => 103,  235 => 101,  229 => 99,  227 => 98,  224 => 97,  220 => 95,  216 => 93,  214 => 92,  210 => 90,  208 => 89,  198 => 81,  192 => 79,  190 => 78,  184 => 75,  180 => 73,  177 => 72,  172 => 68,  166 => 65,  163 => 64,  160 => 63,  154 => 60,  151 => 59,  149 => 58,  146 => 57,  140 => 54,  136 => 52,  130 => 49,  127 => 48,  125 => 47,  119 => 44,  111 => 39,  108 => 38,  106 => 37,  103 => 36,  94 => 30,  88 => 27,  79 => 20,  77 => 19,  74 => 18,  65 => 12,  62 => 11,  60 => 10,  54 => 7,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
    <a class=\"navbar-brand hidden-sm-down\" href=\"{{ path('jury_index') }}\">DOMjudge</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuDefault\" aria-controls=\"menuDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"menuDefault\" data-update-url=\"{{ path('jury_ajax_updates') }}\">
        <ul class=\"navbar-nav mr-auto\">

            {% if is_granted('ROLE_BALLOON') %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('jury_balloons') }}\">
                        <i class=\"fas fa-map-marker-alt\"></i> balloons
                        <span class=\"badge badge-info\" id=\"num-alerts-balloons\"></span>
                    </a>
                </li>
            {% endif %}

            {% if is_granted('ROLE_ADMIN') %}
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownJudgehosts\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-gavel\"></i> judgehosts
                        <span class=\"badge badge-warning\" id=\"num-alerts-judgehosts\"></span>
                        <span class=\"badge badge-danger\" id=\"num-alerts-internalerrors\"></span>
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"{{ path('jury_judgehosts') }}\" id=\"menu_judgehosts\">
                            <i class=\"fas fa-server fa-fw\"></i> judgehosts <span class=\"badge badge-warning\" id=\"num-alerts-judgehosts-sub\"></span>
                        </a>
                        <a class=\"dropdown-item dropdown-disabled\" href=\"{{ path('jury_internal_errors') }}\" id=\"menu_internal_error\">
                            <i class=\"fas fa-bolt fa-fw\"></i> internal error <span class=\"badge badge-danger\" id=\"num-alerts-internalerrors-sub\"></span>
                        </a>
                    </div>
                </li>
            {% endif %}

            {% if is_granted('ROLE_JURY') %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('jury_clarifications') }}\" id=\"menu_clarifications\"><i class=\"fas fa-comments\"></i> clarifications <span class=\"badge badge-info\" id=\"num-alerts-clarifications\"></span></a>
                </li>


                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('jury_submissions') }}\"><i class=\"fas fa-file-code\"></i> submissions</a>
                </li>

                {% if show_shadow_differences %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('jury_shadow_differences') }}\"><i class=\"fas fa-not-equal\"></i> shadow differences</a>
                    </li>
                {% endif %}

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('jury_rejudgings') }}\" id=\"menu_rejudgings\"><i class=\"fas fa-sync\"></i> rejudgings <span class=\"badge badge-info\" id=\"num-alerts-rejudgings\"></span></a>
                </li>
            {% endif %}

            {% if is_granted('ROLE_JURY') %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('jury_scoreboard') }}\"><i class=\"fas fa-list-ol\"></i> scoreboard</a>
                </li>
            {% endif %}
            {% if is_granted('ROLE_TEAM') %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" target=\"_top\" href=\"{{ path('team_index') }}\"><i class=\"fas fa-arrow-right\"></i> team</a>
                </li>
            {% endif %}
        </ul>

        <ul class=\"navbar-nav ml-auto\">
            {# Render user information + logout button #}
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-user\"></i> {{ app.user.getUsername() }}
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        {% if app.user and app.user.getName() %}
                            <a class=\"dropdown-item disabled\" href=\"#\">{{ app.user.getName() }}</a>
                        {% endif %}

                        <a class=\"dropdown-item d-none\" href=\"#\" id=\"notify_disable\">
                            <i class=\"fas fa-bell-slash fa-fw\"></i> Disable Notifications
                        </a>
                        <a class=\"dropdown-item d-none\" href=\"#\" id=\"notify_enable\">
                            <i class=\"fas fa-bell fa-fw\"></i> Enable Notifications
                        </a>

                        {% if refresh is defined and refresh %}
                            <a class=\"dropdown-item\" href=\"#\" id=\"refresh-navitem\">
                                <i class=\"fas fa-sync-alt fa-fw\"></i> <span id=\"refresh-toggle\">
                  {% if refresh_flag %}
                      Disable Refresh
                  {% else %}
                      Enable Refresh
                  {% endif %}
                </span>
                                {% if refresh %}
                                    <span class=\"small text-muted\">({{ refresh.after }}s)</span>
                                {% endif %}
                            </a>
                        {% endif %}

                        <a class=\"dropdown-item\" href=\"{{ path('logout') }}\"><i class=\"fas fa-sign-out-alt fa-fw\"></i>Logout </a>
                    </div>
                </li>
            {% else %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" target=\"_top\" href=\"{{ path('login') }}\"><i class=\"fas fa-sign-in-alt fa-fw\"></i> log in</a>
                </li>
            {% endif %}

            {% include 'partials/menu_change_contest.html.twig' with {contest: current_contest, contests: current_contests, change_path: 'jury_change_contest', show_no_contest: true} %}
        </ul>
        {% include 'partials/menu_countdown.html.twig' with {contest: current_contest} %}
    </div>
</nav>
", "jury/menu.html.twig", "/domjudge/webapp/templates/jury/menu.html.twig");
    }
}
