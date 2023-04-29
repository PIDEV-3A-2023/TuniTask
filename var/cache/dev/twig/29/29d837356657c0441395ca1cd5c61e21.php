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

/* quizs/indexfreelancer.html.twig */
class __TwigTemplate_06451ab45004bccd21fa5443d5288ebb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quizs/indexfreelancer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quizs/indexfreelancer.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quizs/indexfreelancer.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    <!-- Navbar Start -->
    <div class=\"container-fluid bg-white sticky-top\">
    <div class=\"container\">
        <nav class=\"navbar navbar-expand-lg bg-white navbar-light p-lg-0\">
            <a href=\"index.html\" class=\"navbar-brand d-lg-none\">
                <h1 class=\"fw-bold m-0\">TuniTask</h1>
            </a>
            <button type=\"button\" class=\"navbar-toggler me-0\" data-bs-toggle=\"collapse\"
                    data-bs-target=\"#navbarCollapse\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <div class=\"navbar-nav\">
                    <a href=\"index.html\" class=\"nav-item nav-link \">Accueil</a>
                    <a href=\"#\" class=\"nav-item nav-link\">Offre</a>
                    <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_quizs");
        echo "\" class=\"nav-item nav-link active\">Quizs</a>
                    <a href=\"#.html\" class=\"nav-item nav-link\">Demande</a>
                    <a href=\"#.html\" class=\"nav-item nav-link\">Evenements</a>
                    <a href=\"#.html\" class=\"nav-item nav-link\">Reclamation</a>

                </div>
            </div>    </nav>
    </div>
    </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "
<head>
<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.jsAhmed\"></script>
</head>


<h1 style=\"color: #333; font-size: 32px; margin-bottom: 30px; text-align: center;\">Liste des Quizs</h1>
<div style=\"color: #333; font-size: 20px; margin-bottom: 10px; text-align: center;\">
<label for=\"searchInput\">Search Quiz</label>
<input type=\"text\" id=\"searchInput\" name=\"searchInput\" oninput=\"
    const searchValue = event.target.value.trim().toLowerCase();
    const rows = document.querySelectorAll('.quiz-table tbody tr');
    rows.forEach(function(row) {
        const title = row.querySelector('td:nth-child(1)').textContent.trim().toLowerCase();
        const score = row.querySelector('td:nth-child(3)').textContent.trim();
        if (title.includes(searchValue) || score.includes(searchValue)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
\">
</div>
<table class=\"quiz-table\" style=\"border-collapse: collapse; width: 100%; max-width: 800px; margin: 0 auto; background-color: #fff; border: 1px solid #ddd; border-radius: 10px; overflow: hidden;\">
<thead>
<tr>
    <th style=\"background-color: #333; color: #fff; padding: 10px; text-align: left;\">Title</th>
    <th style=\"background-color: #333; color: #fff; padding: 10px; text-align: left;\">Description</th>
    <th style=\"background-color: #333; color: #fff; padding: 10px; text-align: left;\">Score</th>
   </tr>
</thead>
<tbody>
";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quizs"]) || array_key_exists("quizs", $context) ? $context["quizs"] : (function () { throw new RuntimeError('Variable "quizs" does not exist.', 60, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 61
            echo "    <tr style=\"background-color: ";
            echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 61) % 2 == 0)) ? ("#f2f2f2") : (""));
            echo ";\">
        <td style=\"padding: 10px; text-align: left;\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "quizTitle", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
        <td style=\"padding: 10px; text-align: left;\">";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "quizDescription", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
        <td style=\"padding: 10px; text-align: left;\">";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "score", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
        <td style=\"padding: 10px; text-align: left;\">
            <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quizs_open", ["id" => twig_get_attribute($this->env, $this->source, $context["quiz"], "idQuiz", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\" style=\"display: inline-block; padding: 8px 16px; background-color: #6a0995; color: #fff; border-radius: 4px; text-decoration: none;\">Open</a>
            ";
            // line 67
            if (( !(null === twig_get_attribute($this->env, $this->source, $context["quiz"], "score", [], "any", false, false, false, 67)) && (twig_get_attribute($this->env, $this->source, $context["quiz"], "score", [], "any", false, false, false, 67) != 0))) {
                // line 68
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quizs_pdf", ["id" => twig_get_attribute($this->env, $this->source, $context["quiz"], "idQuiz", [], "any", false, false, false, 68)]), "html", null, true);
                echo "\" onclick=\"event.preventDefault(); swal('Congratulations!', 'You earned a certificate!', 'success').then(() => window.location.href = this.href);\" style=\"display: inline-block; padding: 8px 16px; background-color: #6a0995; color: #fff; border-radius: 4px; text-decoration: none; margin-left: 10px;\">Certificate</a>
            ";
            }
            // line 70
            echo "         </td>
    </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quiz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "</tbody>
</table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "quizs/indexfreelancer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 73,  196 => 70,  190 => 68,  188 => 67,  184 => 66,  179 => 64,  175 => 63,  171 => 62,  166 => 61,  149 => 60,  115 => 28,  105 => 27,  86 => 18,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block nav %}
    <!-- Navbar Start -->
    <div class=\"container-fluid bg-white sticky-top\">
    <div class=\"container\">
        <nav class=\"navbar navbar-expand-lg bg-white navbar-light p-lg-0\">
            <a href=\"index.html\" class=\"navbar-brand d-lg-none\">
                <h1 class=\"fw-bold m-0\">TuniTask</h1>
            </a>
            <button type=\"button\" class=\"navbar-toggler me-0\" data-bs-toggle=\"collapse\"
                    data-bs-target=\"#navbarCollapse\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <div class=\"navbar-nav\">
                    <a href=\"index.html\" class=\"nav-item nav-link \">Accueil</a>
                    <a href=\"#\" class=\"nav-item nav-link\">Offre</a>
                    <a href=\"{{ path('list_quizs') }}\" class=\"nav-item nav-link active\">Quizs</a>
                    <a href=\"#.html\" class=\"nav-item nav-link\">Demande</a>
                    <a href=\"#.html\" class=\"nav-item nav-link\">Evenements</a>
                    <a href=\"#.html\" class=\"nav-item nav-link\">Reclamation</a>

                </div>
            </div>    </nav>
    </div>
    </div>{% endblock %}
{% block body %}

<head>
<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.jsAhmed\"></script>
</head>


<h1 style=\"color: #333; font-size: 32px; margin-bottom: 30px; text-align: center;\">Liste des Quizs</h1>
<div style=\"color: #333; font-size: 20px; margin-bottom: 10px; text-align: center;\">
<label for=\"searchInput\">Search Quiz</label>
<input type=\"text\" id=\"searchInput\" name=\"searchInput\" oninput=\"
    const searchValue = event.target.value.trim().toLowerCase();
    const rows = document.querySelectorAll('.quiz-table tbody tr');
    rows.forEach(function(row) {
        const title = row.querySelector('td:nth-child(1)').textContent.trim().toLowerCase();
        const score = row.querySelector('td:nth-child(3)').textContent.trim();
        if (title.includes(searchValue) || score.includes(searchValue)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
\">
</div>
<table class=\"quiz-table\" style=\"border-collapse: collapse; width: 100%; max-width: 800px; margin: 0 auto; background-color: #fff; border: 1px solid #ddd; border-radius: 10px; overflow: hidden;\">
<thead>
<tr>
    <th style=\"background-color: #333; color: #fff; padding: 10px; text-align: left;\">Title</th>
    <th style=\"background-color: #333; color: #fff; padding: 10px; text-align: left;\">Description</th>
    <th style=\"background-color: #333; color: #fff; padding: 10px; text-align: left;\">Score</th>
   </tr>
</thead>
<tbody>
{% for quiz in quizs %}
    <tr style=\"background-color: {{ loop.index is even ? '#f2f2f2' : '' }};\">
        <td style=\"padding: 10px; text-align: left;\">{{ quiz.quizTitle }}</td>
        <td style=\"padding: 10px; text-align: left;\">{{ quiz.quizDescription }}</td>
        <td style=\"padding: 10px; text-align: left;\">{{ quiz.score }}</td>
        <td style=\"padding: 10px; text-align: left;\">
            <a href=\"{{ path('app_quizs_open', {'id': quiz.idQuiz}) }}\" style=\"display: inline-block; padding: 8px 16px; background-color: #6a0995; color: #fff; border-radius: 4px; text-decoration: none;\">Open</a>
            {% if  quiz.score is not null and quiz.score != 0 %}
                <a href=\"{{ path('app_quizs_pdf', {'id': quiz.idQuiz}) }}\" onclick=\"event.preventDefault(); swal('Congratulations!', 'You earned a certificate!', 'success').then(() => window.location.href = this.href);\" style=\"display: inline-block; padding: 8px 16px; background-color: #6a0995; color: #fff; border-radius: 4px; text-decoration: none; margin-left: 10px;\">Certificate</a>
            {% endif %}
         </td>
    </tr>
{% endfor %}
</tbody>
</table>
{% endblock %}
", "quizs/indexfreelancer.html.twig", "C:\\Users\\Ahmed\\Desktop\\webtaskk\\templates\\quizs\\indexfreelancer.html.twig");
    }
}
