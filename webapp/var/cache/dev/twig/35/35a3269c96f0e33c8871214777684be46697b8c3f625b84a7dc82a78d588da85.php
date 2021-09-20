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

/* jury/partials/rejudge_form.html.twig */
class __TwigTemplate_dcb462989599bc51fb0cb2bb2a543f0bd6fd94ab1f8a0ceb21a6740313bcb4a8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/rejudge_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/rejudge_form.html.twig"));

        // line 2
        echo "
";
        // line 3
        ob_start();
        // line 4
        echo "    ";
        $context["buttonText"] = ((("Rejudge all for " . (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 4, $this->source); })())) . " ") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 4, $this->source); })()));
        // line 5
        echo "    ";
        $context["questionText"] = (("Rejudge all submissions for this " . (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 5, $this->source); })())) . "?");
        // line 6
        echo "    ";
        $context["buttonDisabled"] = false;
        // line 7
        echo "    ";
        $context["isRestart"] = false;
        // line 8
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 9
            echo "        ";
            $context["includeAllButton"] = true;
            // line 10
            echo "    ";
        } else {
            // line 11
            echo "        ";
            $context["includeAllButton"] = false;
            // line 12
            echo "    ";
        }
        // line 13
        echo "    ";
        if ( !(isset($context["buttonClass"]) || array_key_exists("buttonClass", $context))) {
            // line 14
            echo "        ";
            $context["buttonClass"] = "btn-outline-primary btn-sm";
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (((((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 17, $this->source); })()) == "submission") && (isset($context["submission"]) || array_key_exists("submission", $context))) && (isset($context["judgings"]) || array_key_exists("judgings", $context)))) {
            // line 18
            echo "        ";
            $context["buttonText"] = "Rejudge this submission";
            // line 19
            echo "        ";
            $context["questionText"] = (("Rejudge submission s" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })())) . "?");
            // line 20
            echo "        ";
            $context["includeAllButton"] = false;
            // line 21
            echo "        ";
            // line 22
            echo "        ";
            $context["validResult"] = false;
            // line 23
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["judging"]) {
                // line 24
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "                ";
                    $context["validResult"] = twig_get_attribute($this->env, $this->source, $context["judging"], "result", [], "any", false, false, false, 25);
                    // line 26
                    echo "            ";
                }
                // line 27
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judging'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
        ";
            // line 29
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 30
                echo "            ";
                if ( !(isset($context["validResult"]) || array_key_exists("validResult", $context) ? $context["validResult"] : (function () { throw new RuntimeError('Variable "validResult" does not exist.', 30, $this->source); })())) {
                    // line 31
                    echo "                ";
                    $context["questionText"] = (("Restart judging of PENDING submission s" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 31, $this->source); })())) . ", are you sure?");
                    // line 32
                    echo "                ";
                    $context["buttonText"] = "Restart judging";
                    // line 33
                    echo "                ";
                    $context["isRestart"] = true;
                    // line 34
                    echo "            ";
                } elseif (((isset($context["validResult"]) || array_key_exists("validResult", $context) ? $context["validResult"] : (function () { throw new RuntimeError('Variable "validResult" does not exist.', 34, $this->source); })()) == "correct")) {
                    // line 35
                    echo "                ";
                    $context["questionText"] = (("Rejudge CORRECT submission s" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 35, $this->source); })())) . ", are you sure?");
                    // line 36
                    echo "            ";
                }
                // line 37
                echo "        ";
            } else {
                // line 38
                echo "            ";
                if (( !(isset($context["validResult"]) || array_key_exists("validResult", $context) ? $context["validResult"] : (function () { throw new RuntimeError('Variable "validResult" does not exist.', 38, $this->source); })()) || ((isset($context["validResult"]) || array_key_exists("validResult", $context) ? $context["validResult"] : (function () { throw new RuntimeError('Variable "validResult" does not exist.', 38, $this->source); })()) == "correct"))) {
                    // line 39
                    echo "                ";
                    $context["buttonDisabled"] = true;
                    // line 40
                    echo "            ";
                }
                // line 41
                echo "        ";
            }
            // line 42
            echo "    ";
        }
        $___internal_971f63ff5c83e86348680bea32554257676754a16e1f585f114087f02f7e4de8_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_971f63ff5c83e86348680bea32554257676754a16e1f585f114087f02f7e4de8_);
        // line 44
        echo "
<button type=\"button\" class=\"btn ";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["buttonClass"]) || array_key_exists("buttonClass", $context) ? $context["buttonClass"] : (function () { throw new RuntimeError('Variable "buttonClass" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "\" data-toggle=\"modal\" data-target=\"#rejudge-modal\">
    <i class=\"fas fa-sync\"></i> Rejudge
</button>

<!-- Modal -->
<div class=\"modal fade\" id=\"rejudge-modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["buttonText"]) || array_key_exists("buttonText", $context) ? $context["buttonText"] : (function () { throw new RuntimeError('Variable "buttonText" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <form action=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_create_rejudge");
        echo "\" method=\"post\">
                <div class=\"modal-body\">
                    <input type=\"hidden\" name=\"table\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 61, $this->source); })()), "html", null, true);
        echo "\"/>
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "\"/>";
        // line 63
        if ((isset($context["includeAllButton"]) || array_key_exists("includeAllButton", $context) ? $context["includeAllButton"] : (function () { throw new RuntimeError('Variable "includeAllButton" does not exist.', 63, $this->source); })())) {
            // line 64
            echo "
                        <div class=\"custom-control custom-checkbox form-group\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"include_all\" name=\"include_all\">
                            <label class=\"custom-control-label\" for=\"include_all\">Include pending/correct
                                submissions</label>
                        </div>";
        }
        // line 71
        echo "
                    ";
        // line 72
        if ((isset($context["isRestart"]) || array_key_exists("isRestart", $context) ? $context["isRestart"] : (function () { throw new RuntimeError('Variable "isRestart" does not exist.', 72, $this->source); })())) {
            // line 73
            echo "                        <input type=\"hidden\" id=\"auto_apply\" name=\"auto_apply\" value=\"1\">
                        <input type=\"hidden\" name=\"repeat\" id=\"repeat\" value=\"1\">
                        <input type=\"hidden\" name=\"reason\" id=\"reason\" value=\"\">
                    ";
        } else {
            // line 77
            echo "                    <div class=\"custom-control custom-checkbox form-group\">
                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"auto_apply\" name=\"auto_apply\">
                        <label class=\"custom-control-label\" for=\"auto_apply\">Automatically apply judging(s) when ready</label>
                    </div>
                    <div id=\"rejudge-repeat\" class=\"form-group\">
                        <label for=\"repeat\">Number of times to repeat this rejudging</label>
                        <input type=\"number\" class=\"form-control\" name=\"repeat\" id=\"repeat\" value=\"1\" min=\"1\" max=\"999\" step=\"1\">
                    </div>
                    <div id=\"rejudge-reason\" class=\"form-group\">
                        <label for=\"reason\">Reason</label>
                        <input type=\"text\" class=\"form-control\" name=\"reason\" id=\"reason\" maxlength=\"255\">
                    </div>
                    ";
        }
        // line 90
        echo "                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
                    <input type=\"submit\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["buttonText"]) || array_key_exists("buttonText", $context) ? $context["buttonText"] : (function () { throw new RuntimeError('Variable "buttonText" does not exist.', 93, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    \$(function () {
        \$('#full_rejudge').on('change', function () {
            if (\$(this).is(':checked')) {
                \$('#rejudge-reason').removeClass('d-none');
            } else {
                \$('#rejudge-reason').addClass('d-none');
            }
        });
    });
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/rejudge_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 93,  241 => 90,  226 => 77,  220 => 73,  218 => 72,  215 => 71,  207 => 64,  205 => 63,  202 => 62,  198 => 61,  193 => 59,  185 => 54,  173 => 45,  170 => 44,  168 => 3,  164 => 42,  161 => 41,  158 => 40,  155 => 39,  152 => 38,  149 => 37,  146 => 36,  143 => 35,  140 => 34,  137 => 33,  134 => 32,  131 => 31,  128 => 30,  126 => 29,  123 => 28,  117 => 27,  114 => 26,  111 => 25,  108 => 24,  103 => 23,  100 => 22,  98 => 21,  95 => 20,  92 => 19,  89 => 18,  87 => 17,  84 => 16,  81 => 15,  78 => 14,  75 => 13,  72 => 12,  69 => 11,  66 => 10,  63 => 9,  60 => 8,  57 => 7,  54 => 6,  51 => 5,  48 => 4,  46 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Output a rejudge form #}

{% apply spaceless %}
    {% set buttonText = 'Rejudge all for ' ~ table ~ ' ' ~ id %}
    {% set questionText = 'Rejudge all submissions for this ' ~ table ~ '?' %}
    {% set buttonDisabled = false %}
    {% set isRestart = false %}
    {% if is_granted('ROLE_ADMIN') %}
        {% set includeAllButton = true %}
    {% else %}
        {% set includeAllButton = false %}
    {% endif %}
    {% if buttonClass is not defined %}
        {% set buttonClass = 'btn-outline-primary btn-sm' %}
    {% endif %}

    {% if table == 'submission' and submission is defined and judgings is defined %}
        {% set buttonText = 'Rejudge this submission' %}
        {% set questionText = 'Rejudge submission s' ~ id ~ '?' %}
        {% set includeAllButton = false %}
        {# Check if we have a valid result #}
        {% set validResult = false %}
        {% for judging in judgings %}
            {% if judging.valid %}
                {% set validResult = judging.result %}
            {% endif %}
        {% endfor %}

        {% if is_granted('ROLE_ADMIN') %}
            {% if not validResult %}
                {% set questionText = 'Restart judging of PENDING submission s' ~ id ~ ', are you sure?' %}
                {% set buttonText = 'Restart judging' %}
                {% set isRestart = true %}
            {% elseif validResult == 'correct' %}
                {% set questionText = 'Rejudge CORRECT submission s' ~ id ~ ', are you sure?' %}
            {% endif %}
        {% else %}
            {% if not validResult or validResult == 'correct' %}
                {% set buttonDisabled = true %}
            {% endif %}
        {% endif %}
    {% endif %}
{% endapply %}

<button type=\"button\" class=\"btn {{ buttonClass }}\" data-toggle=\"modal\" data-target=\"#rejudge-modal\">
    <i class=\"fas fa-sync\"></i> Rejudge
</button>

<!-- Modal -->
<div class=\"modal fade\" id=\"rejudge-modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">{{ buttonText }}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <form action=\"{{ path('jury_create_rejudge') }}\" method=\"post\">
                <div class=\"modal-body\">
                    <input type=\"hidden\" name=\"table\" value=\"{{ table }}\"/>
                    <input type=\"hidden\" name=\"id\" value=\"{{ id }}\"/>
                    {%- if includeAllButton %}

                        <div class=\"custom-control custom-checkbox form-group\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"include_all\" name=\"include_all\">
                            <label class=\"custom-control-label\" for=\"include_all\">Include pending/correct
                                submissions</label>
                        </div>
                    {%- endif %}

                    {% if isRestart %}
                        <input type=\"hidden\" id=\"auto_apply\" name=\"auto_apply\" value=\"1\">
                        <input type=\"hidden\" name=\"repeat\" id=\"repeat\" value=\"1\">
                        <input type=\"hidden\" name=\"reason\" id=\"reason\" value=\"\">
                    {% else %}
                    <div class=\"custom-control custom-checkbox form-group\">
                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"auto_apply\" name=\"auto_apply\">
                        <label class=\"custom-control-label\" for=\"auto_apply\">Automatically apply judging(s) when ready</label>
                    </div>
                    <div id=\"rejudge-repeat\" class=\"form-group\">
                        <label for=\"repeat\">Number of times to repeat this rejudging</label>
                        <input type=\"number\" class=\"form-control\" name=\"repeat\" id=\"repeat\" value=\"1\" min=\"1\" max=\"999\" step=\"1\">
                    </div>
                    <div id=\"rejudge-reason\" class=\"form-group\">
                        <label for=\"reason\">Reason</label>
                        <input type=\"text\" class=\"form-control\" name=\"reason\" id=\"reason\" maxlength=\"255\">
                    </div>
                    {% endif %}
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
                    <input type=\"submit\" value=\"{{ buttonText }}\" class=\"btn btn-primary\">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    \$(function () {
        \$('#full_rejudge').on('change', function () {
            if (\$(this).is(':checked')) {
                \$('#rejudge-reason').removeClass('d-none');
            } else {
                \$('#rejudge-reason').addClass('d-none');
            }
        });
    });
</script>
", "jury/partials/rejudge_form.html.twig", "/domjudge/webapp/templates/jury/partials/rejudge_form.html.twig");
    }
}
