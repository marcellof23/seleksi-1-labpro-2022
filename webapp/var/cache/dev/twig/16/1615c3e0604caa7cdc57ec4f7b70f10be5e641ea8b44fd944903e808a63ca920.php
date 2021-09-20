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

/* team/partials/submit_scripts.html.twig */
class __TwigTemplate_479931424dd02323463a3fd30109aed6f399f9c195fb68e4375b483cbbd45cf1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/submit_scripts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/submit_scripts.html.twig"));

        // line 1
        $this->loadTemplate("partials/javascript_language_detect.html.twig", "team/partials/submit_scripts.html.twig", 1)->display($context);
        // line 2
        echo "<script>
    function entryPointDetectJava(filename) {
        return filename.replace(/\\.[^\\.]*\$/, '');
    }

    function entryPointDetectKt(filename) {
        var filebase = filename.replace(/\\.[^\\.]*\$/, '');
        if (filebase === '') return '_Kt';

        filebase = filebase.replace(/[^a-zA-Z0-9]/, '_');
        if (filebase.charAt(0).match(/^[a-zA-Z]\$/)) {
            return filebase.charAt(0).toUpperCase() + filebase.slice(1) + 'Kt';
        } else {
            return '_' + filebase + 'Kt';
        }
    }

    function maybeShowEntryPoint(filename) {
        var langid = \$('#submit_problem_language').val();
        if (langid === \"\") {
            return;
        }
        var \$entryPoint = \$('[data-entry-point]');
        var \$entryPointLabel = \$entryPoint.find('label');
        var \$entryPointInput = \$entryPoint.find('input');
        var entryPointDescription = getEntryPoint(langid);
        if (entryPointDescription) {
            \$entryPoint.show();
        } else {
            \$entryPoint.hide();
        }

        if (entryPointDescription) {
            var \$labelChildren = \$entryPointLabel.children();
            \$entryPointLabel.text(entryPointDescription).append(\$labelChildren);
            \$entryPointInput.attr('required', 'required');
        } else {
            \$entryPointInput.attr('required', null);
        }

        if (entryPointDescription && filename) {
            switch (langid) {
                case 'java':
                    \$entryPointInput.val(entryPointDetectJava(filename));
                    break;
                case 'kt':
                    \$entryPointInput.val(entryPointDetectKt(filename));
                    break;
                default:
                    \$entryPointInput.val(filename);
            }
        } else {
            \$entryPointInput.val('');
        }
    }

    \$(function () {
        var \$entryPoint = \$('[data-entry-point]');
        \$entryPoint.hide();

        var processFile = function () {
            var filename = \$('#submit_problem_code').val();
            if (filename !== '' && filename !== undefined) {
                filename = filename.replace(/^.*[\\\\\\/]/, '');
                var parts = filename.split('.').reverse();
                if (parts.length < 2) return;
                var lcParts = [parts[0].toLowerCase(), parts[1].toLowerCase()];

                // Problem ID

                var problem = document.getElementById('submit_problem_problem');
                // the \"autodetect\" option has empty value
                if (problem.value !== '') {
                    return;
                }

                for (var i = 0; i < problem.length; i++) {
                    if (problem.options[i].text.split(/ - /)[0].toLowerCase() === lcParts[1]) {
                        problem.selectedIndex = i;
                    }
                }

                // language ID

                var language = document.getElementById('submit_problem_language');
                // the \"autodetect\" option has empty value
                if (language.value !== '') return;

                var langid = getMainExtension(lcParts[0]);
                for (i = 0; i < language.length; i++) {
                    if (language.options[i].value === langid) {
                        language.selectedIndex = i;
                    }
                }

                maybeShowEntryPoint(filename);
            }
        };

        var \$body = \$('body');
        \$body.on('change', '#submit_problem_code', processFile);
        \$body.on('change', '#submit_problem_language', function () {
            maybeShowEntryPoint();
        });

        \$body.on('submit', 'form[name=submit_problem]', function () {
            var langelt = document.getElementById(\"submit_problem_language\");
            var language = langelt.options[langelt.selectedIndex].value;
            var languagetxt = langelt.options[langelt.selectedIndex].text;
            var fileelt = document.getElementById(\"submit_problem_code\");
            var filenames = fileelt.files;
            var filename = filenames[0].name;
            var probelt = document.getElementById(\"submit_problem_problem\");
            var problem = probelt.options[probelt.selectedIndex].value;
            var problemtxt = probelt.options[probelt.selectedIndex].text;

            var error = false;
            if (language === \"\") {
                langelt.focus();
                langelt.className = langelt.className + \" errorfield\";
                error = true;
            }
            if (problem === \"\") {
                probelt.focus();
                probelt.className = probelt.className + \" errorfield\";
                error = true;
            }
            if (filename === \"\") {
                error = true;
            }
            if (error) return false;

            var auxfileno = 0;
            // start at one; skip maincode file field
            for (var i = 1; i < filenames.length; i++) {
                if (filenames[i].value !== \"\") {
                    auxfileno++;
                }
            }
            var extrafiles = '';
            if (auxfileno > 0) {
                extrafiles = \"Additional source files: \" + auxfileno + '\\n';
            }
            var question =
                'Main source file: ' + filename + '\\n' +
                extrafiles + '\\n' +
                'Problem: ' + problemtxt + '\\n' +
                'Language: ' + languagetxt + '\\n' +
                '\\nMake submission?';
            return confirm(question);
        });

        processFile();
        maybeShowEntryPoint();

        window.initSubmitModal = function (\$elem) {
            \$('[data-entry-point]').hide();
        };
    });
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "team/partials/submit_scripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'partials/javascript_language_detect.html.twig' %}
<script>
    function entryPointDetectJava(filename) {
        return filename.replace(/\\.[^\\.]*\$/, '');
    }

    function entryPointDetectKt(filename) {
        var filebase = filename.replace(/\\.[^\\.]*\$/, '');
        if (filebase === '') return '_Kt';

        filebase = filebase.replace(/[^a-zA-Z0-9]/, '_');
        if (filebase.charAt(0).match(/^[a-zA-Z]\$/)) {
            return filebase.charAt(0).toUpperCase() + filebase.slice(1) + 'Kt';
        } else {
            return '_' + filebase + 'Kt';
        }
    }

    function maybeShowEntryPoint(filename) {
        var langid = \$('#submit_problem_language').val();
        if (langid === \"\") {
            return;
        }
        var \$entryPoint = \$('[data-entry-point]');
        var \$entryPointLabel = \$entryPoint.find('label');
        var \$entryPointInput = \$entryPoint.find('input');
        var entryPointDescription = getEntryPoint(langid);
        if (entryPointDescription) {
            \$entryPoint.show();
        } else {
            \$entryPoint.hide();
        }

        if (entryPointDescription) {
            var \$labelChildren = \$entryPointLabel.children();
            \$entryPointLabel.text(entryPointDescription).append(\$labelChildren);
            \$entryPointInput.attr('required', 'required');
        } else {
            \$entryPointInput.attr('required', null);
        }

        if (entryPointDescription && filename) {
            switch (langid) {
                case 'java':
                    \$entryPointInput.val(entryPointDetectJava(filename));
                    break;
                case 'kt':
                    \$entryPointInput.val(entryPointDetectKt(filename));
                    break;
                default:
                    \$entryPointInput.val(filename);
            }
        } else {
            \$entryPointInput.val('');
        }
    }

    \$(function () {
        var \$entryPoint = \$('[data-entry-point]');
        \$entryPoint.hide();

        var processFile = function () {
            var filename = \$('#submit_problem_code').val();
            if (filename !== '' && filename !== undefined) {
                filename = filename.replace(/^.*[\\\\\\/]/, '');
                var parts = filename.split('.').reverse();
                if (parts.length < 2) return;
                var lcParts = [parts[0].toLowerCase(), parts[1].toLowerCase()];

                // Problem ID

                var problem = document.getElementById('submit_problem_problem');
                // the \"autodetect\" option has empty value
                if (problem.value !== '') {
                    return;
                }

                for (var i = 0; i < problem.length; i++) {
                    if (problem.options[i].text.split(/ - /)[0].toLowerCase() === lcParts[1]) {
                        problem.selectedIndex = i;
                    }
                }

                // language ID

                var language = document.getElementById('submit_problem_language');
                // the \"autodetect\" option has empty value
                if (language.value !== '') return;

                var langid = getMainExtension(lcParts[0]);
                for (i = 0; i < language.length; i++) {
                    if (language.options[i].value === langid) {
                        language.selectedIndex = i;
                    }
                }

                maybeShowEntryPoint(filename);
            }
        };

        var \$body = \$('body');
        \$body.on('change', '#submit_problem_code', processFile);
        \$body.on('change', '#submit_problem_language', function () {
            maybeShowEntryPoint();
        });

        \$body.on('submit', 'form[name=submit_problem]', function () {
            var langelt = document.getElementById(\"submit_problem_language\");
            var language = langelt.options[langelt.selectedIndex].value;
            var languagetxt = langelt.options[langelt.selectedIndex].text;
            var fileelt = document.getElementById(\"submit_problem_code\");
            var filenames = fileelt.files;
            var filename = filenames[0].name;
            var probelt = document.getElementById(\"submit_problem_problem\");
            var problem = probelt.options[probelt.selectedIndex].value;
            var problemtxt = probelt.options[probelt.selectedIndex].text;

            var error = false;
            if (language === \"\") {
                langelt.focus();
                langelt.className = langelt.className + \" errorfield\";
                error = true;
            }
            if (problem === \"\") {
                probelt.focus();
                probelt.className = probelt.className + \" errorfield\";
                error = true;
            }
            if (filename === \"\") {
                error = true;
            }
            if (error) return false;

            var auxfileno = 0;
            // start at one; skip maincode file field
            for (var i = 1; i < filenames.length; i++) {
                if (filenames[i].value !== \"\") {
                    auxfileno++;
                }
            }
            var extrafiles = '';
            if (auxfileno > 0) {
                extrafiles = \"Additional source files: \" + auxfileno + '\\n';
            }
            var question =
                'Main source file: ' + filename + '\\n' +
                extrafiles + '\\n' +
                'Problem: ' + problemtxt + '\\n' +
                'Language: ' + languagetxt + '\\n' +
                '\\nMake submission?';
            return confirm(question);
        });

        processFile();
        maybeShowEntryPoint();

        window.initSubmitModal = function (\$elem) {
            \$('[data-entry-point]').hide();
        };
    });
</script>
", "team/partials/submit_scripts.html.twig", "/domjudge/webapp/templates/team/partials/submit_scripts.html.twig");
    }
}
