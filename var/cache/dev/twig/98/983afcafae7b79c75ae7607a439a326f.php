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

/* answers/edit.html.twig */
class __TwigTemplate_50a87c1ec9b580b1268c8898e550404f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "answers/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "answers/edit.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "answers/edit.html.twig", 1);
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
        echo "    <div style=\"display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh;\">
        <h1 style=\"color: #4c0673; font-size: 32px; margin-bottom: 30px; text-align: center;\">Edit Answer</h1>
        ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "style" => "width: 800px; height: 300px; margin: 0 auto; background-color: #f5f5f5; border: 1px solid #ddd; border-radius: 10px; padding: 20px;"]]);
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'errors');
        echo "
        <label style=\"display: block; margin-bottom: 10px;\">Answer</label>
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "answer", [], "any", false, false, false, 9), 'widget', ["attr" => ["placeholder" => "Enter answer", "required" => "required", "style" => "width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ddd; font-size: 16px;"]]);
        echo "

        <div style=\"display: block;  margin-top: 20px;\">
            <span style=\"font-size: 16px;\">";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "isCorrect", [], "any", false, false, false, 12), 'label');
        echo "</span>
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "isCorrect", [], "any", false, false, false, 13), 'widget', ["attr" => ["placeholder" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "isCorrect", [], "any", false, true, false, 13), "vars", [], "any", false, true, false, 13), "value", [], "any", true, true, false, 13)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "isCorrect", [], "any", false, true, false, 13), "vars", [], "any", false, true, false, 13), "value", [], "any", false, false, false, 13), "")) : ("")), "class" => "form-check-input", "style" => "width: auto; height: auto; margin-left: 10px;"]]);
        echo "
        </div>
        <button style=\"margin: 20px; background-color: #333; color: #fff; border: none; border-radius: 5px; padding: 10px 20px; font-size: 16px; cursor: pointer;\">Save</button>
        ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_end');
        echo "

        <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_answers", ["quizId" => (isset($context["quizId"]) || array_key_exists("quizId", $context) ? $context["quizId"] : (function () { throw new RuntimeError('Variable "quizId" does not exist.', 18, $this->source); })()), "questionId" => (isset($context["questionId"]) || array_key_exists("questionId", $context) ? $context["questionId"] : (function () { throw new RuntimeError('Variable "questionId" does not exist.', 18, $this->source); })())]), "html", null, true);
        echo "\"style=\"margin: 20px; background-color: #333; color: #fff; border: none; border-radius: 5px; padding: 10px 20px; font-size: 16px; cursor: pointer;\">Back to Answers</a>
    </div>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "answers/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 18,  97 => 16,  91 => 13,  87 => 12,  81 => 9,  76 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block body %}
    <div style=\"display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh;\">
        <h1 style=\"color: #4c0673; font-size: 32px; margin-bottom: 30px; text-align: center;\">Edit Answer</h1>
        {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'style': 'width: 800px; height: 300px; margin: 0 auto; background-color: #f5f5f5; border: 1px solid #ddd; border-radius: 10px; padding: 20px;'}}) }}
        {{ form_errors(form) }}
        <label style=\"display: block; margin-bottom: 10px;\">Answer</label>
        {{ form_widget(form.answer, {'attr': {'placeholder': 'Enter answer', 'required': 'required', 'style': 'width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ddd; font-size: 16px;'}}) }}

        <div style=\"display: block;  margin-top: 20px;\">
            <span style=\"font-size: 16px;\">{{ form_label(form.isCorrect) }}</span>
            {{ form_widget(form.isCorrect, {'attr': {'placeholder': form.isCorrect.vars.value|default(''), 'class': 'form-check-input', 'style': 'width: auto; height: auto; margin-left: 10px;'}}) }}
        </div>
        <button style=\"margin: 20px; background-color: #333; color: #fff; border: none; border-radius: 5px; padding: 10px 20px; font-size: 16px; cursor: pointer;\">Save</button>
        {{ form_end(form) }}

        <a href=\"{{ path('app_question_answers', {'quizId': quizId, 'questionId': questionId}) }}\"style=\"margin: 20px; background-color: #333; color: #fff; border: none; border-radius: 5px; padding: 10px 20px; font-size: 16px; cursor: pointer;\">Back to Answers</a>
    </div>

    {% endblock %}
", "answers/edit.html.twig", "C:\\Users\\Ahmed\\Desktop\\webtaskk\\templates\\answers\\edit.html.twig");
    }
}
