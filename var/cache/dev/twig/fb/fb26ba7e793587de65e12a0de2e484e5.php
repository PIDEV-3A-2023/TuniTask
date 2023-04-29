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

/* quizs/edit.html.twig */
class __TwigTemplate_5e1db653b89bf14442f5a23bd18fa870 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quizs/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quizs/edit.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "quizs/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 42
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "<div class=\"container\" style=\"display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh;\">
    <h1>Edit Quiz</h1>
    ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "id" => "myForm", "style" => "max-width: 600px; margin: 0 auto; background-color: #fff; border: 1px solid #ddd; border-radius: 10px; padding: 20px;"]]);
        echo "
    <div cstyle=\"margin-bottom: 20px;\">
        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "quizTitle", [], "any", false, false, false, 47), 'label');
        echo "
        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "quizTitle", [], "any", false, false, false, 48), 'widget', ["attr" => ["style" => "width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ddd;"]]);
        echo "
        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "quizTitle", [], "any", false, false, false, 49), 'errors');
        echo "
    </div>
    <div style=\"margin-bottom: 20px;\">
        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "quizDescription", [], "any", false, false, false, 52), 'label');
        echo "
        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "quizDescription", [], "any", false, false, false, 53), 'widget', ["attr" => ["style" => "width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ddd;"]]);
        echo "
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "quizDescription", [], "any", false, false, false, 54), 'errors');
        echo "
    </div>
    <div style=\"margin-bottom: 20px;\">
        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "score", [], "any", false, false, false, 57), 'label');
        echo "
        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "score", [], "any", false, false, false, 58), 'widget', ["attr" => ["style" => "width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ddd;"]]);
        echo "
        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "score", [], "any", false, false, false, 59), 'errors');
        echo "
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Save</button>
    ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_end');
        echo "
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "quizs/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 62,  113 => 59,  109 => 58,  105 => 57,  99 => 54,  95 => 53,  91 => 52,  85 => 49,  81 => 48,  77 => 47,  72 => 45,  68 => 43,  58 => 42,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}
{#{% block stylesheets %}#}
{#<style>#}
{#    h1 {#}
{#        color: #333;#}
{#        font-size: 32px;#}
{#        margin-bottom: 30px;#}
{#        text-align: center;#}
{#    }#}

{#    form {#}
{#        max-width: 600px;#}
{#        margin: 0 auto;#}
{#        background-color: #fff;#}
{#        border: 1px solid #ddd;#}
{#        border-radius: 10px;#}
{#        padding: 20px;#}
{#    }#}

{#    label {#}
{#        display: block;#}
{#        margin-bottom: 10px;#}
{#    }#}

{#    input[type=\"text\"], textarea {#}
{#        width: 100%;#}
{#        padding: 10px;#}
{#        border: 1px solid #ddd;#}
{#        border-radius: 5px;#}
{#        margin-bottom: 20px;#}
{#        font-size: 16px;#}
{#    }#}

{#    .error-message {#}
{#        color: red;#}
{#        margin-top: 10px;#}
{#    }#}
{#</style>#}
{#{% endblock %}#}


{% block body %}
<div class=\"container\" style=\"display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh;\">
    <h1>Edit Quiz</h1>
    {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'id': 'myForm', 'style': 'max-width: 600px; margin: 0 auto; background-color: #fff; border: 1px solid #ddd; border-radius: 10px; padding: 20px;'}}) }}
    <div cstyle=\"margin-bottom: 20px;\">
        {{ form_label(form.quizTitle) }}
        {{ form_widget(form.quizTitle, {'attr': {'style': 'width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ddd;'}}) }}
        {{ form_errors(form.quizTitle) }}
    </div>
    <div style=\"margin-bottom: 20px;\">
        {{ form_label(form.quizDescription) }}
        {{ form_widget(form.quizDescription, {'attr': {'style': 'width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ddd;'}}) }}
        {{ form_errors(form.quizDescription) }}
    </div>
    <div style=\"margin-bottom: 20px;\">
        {{ form_label(form.score) }}
        {{ form_widget(form.score, {'attr': {'style': 'width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ddd;'}}) }}
        {{ form_errors(form.score) }}
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Save</button>
    {{ form_end(form) }}
</div>
{% endblock %}
", "quizs/edit.html.twig", "C:\\Users\\Ahmed\\Desktop\\webtaskk\\templates\\quizs\\edit.html.twig");
    }
}
