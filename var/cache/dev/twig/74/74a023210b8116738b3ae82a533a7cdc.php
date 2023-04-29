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

/* questions/indexfreelancer.html.twig */
class __TwigTemplate_c6279ef742c05e261e068aa50f0e95f1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'num' => [$this, 'block_num'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "questions/indexfreelancer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "questions/indexfreelancer.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "questions/indexfreelancer.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 style=\"font-size: 32px; font-weight: bold; margin-bottom: 24px; display: flex;justify-content: center; align-items: center;\">Quiz:  ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 4, $this->source); })()), "quizTitle", [], "any", false, false, false, 4)), "html", null, true);
        echo "</h1>
   ";
        // line 5
        $this->displayBlock('num', $context, $blocks);
        // line 7
        echo "
    <table style=\"border-collapse: collapse; width: 100%;\">
        <thead>
        <tr style=\"background-color: #f2f2f2;\">
            <th style=\"border: 1px solid #ddd; padding: 8px;\" colspan=\"4\">Question</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 16
            echo "            <tr>
                <td style=\"border: 1px solid #ddd; padding: 8px;\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "questionText", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>

                <td style=\"text-align: center; border: 1px solid #ddd; padding: 8px;\">
                    <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_answers", ["quizId" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 20, $this->source); })()), "idQuiz", [], "any", false, false, false, 20), "questionId" => twig_get_attribute($this->env, $this->source, $context["question"], "idQuestion", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\" style=\"display: inline-block; background-color: #2196F3; color: white; padding: 8px 16px; text-align: center; text-decoration: none; border-radius: 4px;\">Answer Question</a>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </tbody>
    </table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_num($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "num"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "num"));

        echo " <p style=\"text-align: center;\">Number of Questions: ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 5, $this->source); })())), "html", null, true);
        echo "</p>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "questions/indexfreelancer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 5,  110 => 25,  99 => 20,  93 => 17,  90 => 16,  86 => 15,  76 => 7,  74 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1 style=\"font-size: 32px; font-weight: bold; margin-bottom: 24px; display: flex;justify-content: center; align-items: center;\">Quiz:  {{ quiz.quizTitle | upper }}</h1>
   {%  block num %} <p style=\"text-align: center;\">Number of Questions: {{ questions|length }}</p>
{% endblock %}

    <table style=\"border-collapse: collapse; width: 100%;\">
        <thead>
        <tr style=\"background-color: #f2f2f2;\">
            <th style=\"border: 1px solid #ddd; padding: 8px;\" colspan=\"4\">Question</th>
        </tr>
        </thead>
        <tbody>
        {% for question in questions %}
            <tr>
                <td style=\"border: 1px solid #ddd; padding: 8px;\">{{ question.questionText }}</td>

                <td style=\"text-align: center; border: 1px solid #ddd; padding: 8px;\">
                    <a href=\"{{ path('app_question_answers', {'quizId': quiz.idQuiz, 'questionId': question.idQuestion}) }}\" style=\"display: inline-block; background-color: #2196F3; color: white; padding: 8px 16px; text-align: center; text-decoration: none; border-radius: 4px;\">Answer Question</a>

                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}
", "questions/indexfreelancer.html.twig", "C:\\Users\\Ahmed\\Desktop\\webtaskk\\templates\\questions\\indexfreelancer.html.twig");
    }
}
