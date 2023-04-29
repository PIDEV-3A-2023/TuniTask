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

/* quizs/stats.html.twig */
class __TwigTemplate_8ac7306dfb1700d629902bd531e3c057 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'jsAhmed' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quizs/stats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quizs/stats.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "quizs/stats.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.jsAhmed/2.9.0/Chart.min.cssAhmed\" integrity=\"sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"container\" style=\"display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh; margin-top: 120px; padding-bottom: 80px;\">
        <h1>Quizs</h1>
        <canvas id=\"quizs\"></canvas>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jsAhmed"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jsAhmed"));

        // line 15
        echo "    ";
        $this->displayParentBlock("jsAhmed", $context, $blocks);
        echo "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.jsAhmed/2.9.0/Chart.min.jsAhmed\" integrity=\"sha512-a2e0uIwCMIWLGgviK5JYVZw/ntSAehzqM6dPjWTUjUsbVmsKZzCjvdzSCWtd2UWC3OiJwwe5xTwSQRGGAN2ZcQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script>
        let backgroundColors = [];
        let borderColor = [];

        // Loop through each dataset and generate a random color
        for (let i = 0; i < ";
        // line 22
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["quiztitle"]) || array_key_exists("quiztitle", $context) ? $context["quiztitle"] : (function () { throw new RuntimeError('Variable "quiztitle" does not exist.', 22, $this->source); })())), "html", null, true);
        echo "; i++) {
            let color = \"#\" + Math.floor(Math.random()*16777215).toString(16);
            backgroundColors.push(color);
            borderColor.push(color + \"FF\"); // Add opacity to the border color
        }

        // Add the dynamically generated colors to the chart options
        let quizgraph = new Chart(quizs,{
            type:'pie',
            data:{
                labels:";
        // line 32
        echo (isset($context["quiztitle"]) || array_key_exists("quiztitle", $context) ? $context["quiztitle"] : (function () { throw new RuntimeError('Variable "quiztitle" does not exist.', 32, $this->source); })());
        echo ",
                datasets: [{
                    label: 'quizs',
                    data: ";
        // line 35
        echo (isset($context["quizscore"]) || array_key_exists("quizscore", $context) ? $context["quizscore"] : (function () { throw new RuntimeError('Variable "quizscore" does not exist.', 35, $this->source); })());
        echo ",
                    backgroundColor: backgroundColors,
                    borderColor: borderColor,
                    borderWidth: 1,

                }]
            },
            options: {
                maintainAspectRatio: false

            }
        });

    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "quizs/stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 35,  142 => 32,  129 => 22,  118 => 15,  108 => 14,  94 => 9,  84 => 8,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.jsAhmed/2.9.0/Chart.min.cssAhmed\" integrity=\"sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
{% endblock %}
{#{% block nav %}#}
{#{% endblock %}#}
{% block body %}
    <div class=\"container\" style=\"display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh; margin-top: 120px; padding-bottom: 80px;\">
        <h1>Quizs</h1>
        <canvas id=\"quizs\"></canvas>
    </div>
{% endblock %}
{% block jsAhmed %}
    {{ parent() }}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.jsAhmed/2.9.0/Chart.min.jsAhmed\" integrity=\"sha512-a2e0uIwCMIWLGgviK5JYVZw/ntSAehzqM6dPjWTUjUsbVmsKZzCjvdzSCWtd2UWC3OiJwwe5xTwSQRGGAN2ZcQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script>
        let backgroundColors = [];
        let borderColor = [];

        // Loop through each dataset and generate a random color
        for (let i = 0; i < {{ quiztitle | length }}; i++) {
            let color = \"#\" + Math.floor(Math.random()*16777215).toString(16);
            backgroundColors.push(color);
            borderColor.push(color + \"FF\"); // Add opacity to the border color
        }

        // Add the dynamically generated colors to the chart options
        let quizgraph = new Chart(quizs,{
            type:'pie',
            data:{
                labels:{{ quiztitle|raw }},
                datasets: [{
                    label: 'quizs',
                    data: {{ quizscore|raw }},
                    backgroundColor: backgroundColors,
                    borderColor: borderColor,
                    borderWidth: 1,

                }]
            },
            options: {
                maintainAspectRatio: false

            }
        });

    </script>
{% endblock %}
", "quizs/stats.html.twig", "C:\\Users\\Ahmed\\Desktop\\webtaskk\\templates\\quizs\\stats.html.twig");
    }
}
