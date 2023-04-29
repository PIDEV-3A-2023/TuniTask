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

/* base2.html.twig */
class __TwigTemplate_db6f801eeba1349dc4d9aa4f1496652c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
            'jsAhmed' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"Fr\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- Favicon icon -->
    <link rel=\"icon\"  sizes=\"16x16\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\">
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "</head>
<body>

<!--*******************
    Preloader start
********************-->
<div id=\"preloader\">
    <div class=\"sk-three-bounce\">
        <div class=\"sk-child sk-bounce1\"></div>
        <div class=\"sk-child sk-bounce2\"></div>
        <div class=\"sk-child sk-bounce3\"></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->


<!--**********************************
    Main wrapper start
***********************************-->
<div id=\"main-wrapper\">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class=\"nav-header\">
        <a href=\"index.html\" class=\"brand-logo\">
            <img class=\"logo-abbr\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
            <img class=\"logo-compact\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./imagesAhmed/logo-text.png"), "html", null, true);
        echo "\" alt=\"\">
            <img class=\"brand-title\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./imagesAhmed/logo-text.png"), "html", null, true);
        echo "\" alt=\"\">
        </a>

        <div class=\"nav-control\">
            <div class=\"hamburger\">
                <span class=\"line\"></span><span class=\"line\"></span><span class=\"line\"></span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    ";
        // line 63
        $this->displayBlock('nav', $context, $blocks);
        // line 114
        echo "    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class=\"quixnav\">
        <div class=\"quixnav-scroll\">
            <ul class=\"metismenu\" id=\"menu\">
                <li class=\"nav-label first\">Menu</li>
                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-single-04\"></i><span class=\"nav-text\">Dashboard</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"./index.html\">Dashboard 1</a></li>
                        <li><a href=\"./index2.html\">Dashboard 2</a></li>
                    </ul>
                </li>


                <li class=\"nav-label\">Offre</li>
                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-form\"></i><span class=\"nav-text\">Offre</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"#\">Ajout offre</a></li>
                    </ul>
                <li class=\"nav-label\">Quizs</li>
                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-form\"></i><span class=\"nav-text\">Quizs</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_quizs");
        echo "\">Manage Quizs</a></li>
                    </ul>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("free_quizs");
        echo "\">Quizs</a></li>
                    </ul>
                <li><a href=\"./page-lock-screen.html\">Lock Screen</a></li>
            </ul>
            </li>
            </ul>
        </div>
        <?php
\tvar quizTitle = \"<?php echo \$quiz->getQuizTitle(); ?>\";
        var quizScore = \"<?php echo \$quiz->getScore(); ?>\";
?>
    </div>
    ";
        // line 159
        $this->displayBlock('body', $context, $blocks);
        // line 160
        echo "    <!--**********************************
       Footer start
   ***********************************-->
    <div class=\"footer\">
        <div class=\"copyright\">
            <p>Copyright © Designed &amp; Developed by <a href=\"#\" target=\"_blank\">Aster</a> 2023</p>
            <p>Distributed by <a href=\"#\" target=\"_blank\">Aster</a></p>
        </div>
    </div>
    <!--**********************************
        Footer end
    ***********************************-->

    <!--**********************************
       Support ticket button start
    ***********************************-->

    <!--**********************************
       Support ticket button end
    ***********************************-->


</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
";
        // line 190
        $this->displayBlock('jsAhmed', $context, $blocks);
        // line 223
        echo "</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "TuniTask";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor1/owl-carousel/cssAhmed/owl.carousel.min.cssAhmed"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor1/owl-carousel/cssAhmed/owl.theme.default.min.cssAhmed"), "html", null, true);
        echo "\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor1/jqvmap/cssAhmed/jqvmap.min.cssAhmed"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./cssAhmed/style2.cssAhmed"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 63
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 64
        echo "    <div class=\"header\">
        <div class=\"header-content\">
            <nav class=\"navbar navbar-expand\">
                <div class=\"collapse navbar-collapse justify-content-between\">
                    <div class=\"header-left\">
                        <div class=\"search_bar dropdown\">
                                <span class=\"search_icon p-3 c-pointer\" data-toggle=\"dropdown\">
                                    <i class=\"mdi mdi-magnify\"></i>
                                </span>
                            <div class=\"dropdown-menu p-0 m-0\">
                                <form>
                                    <input class=\"form-control\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                                </form>
                            </div>
                        </div>
                    </div>

                    <ul class=\"navbar-nav header-right\">
                        <li class=\"nav-item dropdown notification_dropdown\">
                            <a class=\"nav-link\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
                                <i class=\"mdi mdi-bell\"></i>
                                <div class=\"pulse-cssAhmed\"></div>
                            </a>

                        </li>
                        <li class=\"nav-item dropdown header-profile\">
                            <a class=\"nav-link\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
                                <i class=\"mdi mdi-account\"></i>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\">
                                <a href=\"./app-profile.html\" class=\"dropdown-item\">
                                    <i class=\"icon-user\"></i>
                                    <span class=\"ml-2\">Profile </span>
                                </a>
                                <a href=\"./email-inbox.html\" class=\"dropdown-item\">
                                    <i class=\"icon-envelope-open\"></i>
                                    <span class=\"ml-2\">Inbox </span>
                                </a>
                                <a href=\"./page-login.html\" class=\"dropdown-item\">
                                    <i class=\"icon-key\"></i>
                                    <span class=\"ml-2\">Logout </span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 159
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 190
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jsAhmed"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jsAhmed"));

        // line 191
        echo "    <!-- Required vendors -->
    <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor1/global/global.min.jsAhmed"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./jsAhmed/quixnav-init.jsAhmed"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./jsAhmed/custom.min.jsAhmed"), "html", null, true);
        echo "\"></script>


    <!-- Vectormap -->
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor1/raphael/raphael.min.jsAhmed"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor1/morris/morris.min.jsAhmed"), "html", null, true);
        echo "\"></script>


    <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor1/circle-progress/circle-progress.min.jsAhmed"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor1/chart.jsAhmed/Chart.bundle.min.jsAhmed"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor1/gaugeJS/dist/gauge.min.jsAhmed"), "html", null, true);
        echo "\"></script>


    <!--  flot-chart jsAhmed -->
    <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor1/flot/jquery.flot.jsAhmed"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor1/flot/jquery.flot.resize.jsAhmed"), "html", null, true);
        echo "\"></script>

    <!-- Owl Carousel -->
    <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor1/owl-carousel/jsAhmed/owl.carousel.min.jsAhmed"), "html", null, true);
        echo "\"></script>

    <!-- Counter Up -->
    <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor1/jqvmap/jsAhmed/jquery.vmap.min.jsAhmed"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor1/jqvmap/jsAhmed/jquery.vmap.usa.jsAhmed"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor1/jquery.counterup/jquery.counterup.min.jsAhmed"), "html", null, true);
        echo "\"></script>


    <script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./jsAhmed/dashboard/dashboard-1.jsAhmed"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 221,  447 => 218,  443 => 217,  439 => 216,  433 => 213,  427 => 210,  423 => 209,  416 => 205,  411 => 203,  407 => 202,  401 => 199,  397 => 198,  390 => 194,  386 => 193,  382 => 192,  379 => 191,  369 => 190,  351 => 159,  292 => 64,  282 => 63,  270 => 15,  266 => 14,  262 => 13,  257 => 12,  247 => 11,  228 => 8,  216 => 223,  214 => 190,  182 => 160,  180 => 159,  165 => 147,  159 => 144,  127 => 114,  125 => 63,  106 => 47,  102 => 46,  98 => 45,  68 => 17,  66 => 11,  62 => 10,  57 => 8,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"Fr\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>{% block title %}TuniTask{% endblock %}</title>
    <!-- Favicon icon -->
    <link rel=\"icon\"  sizes=\"16x16\" href=\"{{asset('img/logo.png')}}\">
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{asset('./vendor1/owl-carousel/cssAhmed/owl.carousel.min.cssAhmed')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('./vendor1/owl-carousel/cssAhmed/owl.theme.default.min.cssAhmed')}}\">
        <link href=\"{{asset('./vendor1/jqvmap/cssAhmed/jqvmap.min.cssAhmed')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('./cssAhmed/style2.cssAhmed')}}\" rel=\"stylesheet\">
    {% endblock %}
</head>
<body>

<!--*******************
    Preloader start
********************-->
<div id=\"preloader\">
    <div class=\"sk-three-bounce\">
        <div class=\"sk-child sk-bounce1\"></div>
        <div class=\"sk-child sk-bounce2\"></div>
        <div class=\"sk-child sk-bounce3\"></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->


<!--**********************************
    Main wrapper start
***********************************-->
<div id=\"main-wrapper\">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class=\"nav-header\">
        <a href=\"index.html\" class=\"brand-logo\">
            <img class=\"logo-abbr\" src=\"{{asset('./img/logo.png')}}\" alt=\"\">
            <img class=\"logo-compact\" src=\"{{asset('./imagesAhmed/logo-text.png')}}\" alt=\"\">
            <img class=\"brand-title\" src=\"{{asset('./imagesAhmed/logo-text.png')}}\" alt=\"\">
        </a>

        <div class=\"nav-control\">
            <div class=\"hamburger\">
                <span class=\"line\"></span><span class=\"line\"></span><span class=\"line\"></span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    {% block nav %}
    <div class=\"header\">
        <div class=\"header-content\">
            <nav class=\"navbar navbar-expand\">
                <div class=\"collapse navbar-collapse justify-content-between\">
                    <div class=\"header-left\">
                        <div class=\"search_bar dropdown\">
                                <span class=\"search_icon p-3 c-pointer\" data-toggle=\"dropdown\">
                                    <i class=\"mdi mdi-magnify\"></i>
                                </span>
                            <div class=\"dropdown-menu p-0 m-0\">
                                <form>
                                    <input class=\"form-control\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                                </form>
                            </div>
                        </div>
                    </div>

                    <ul class=\"navbar-nav header-right\">
                        <li class=\"nav-item dropdown notification_dropdown\">
                            <a class=\"nav-link\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
                                <i class=\"mdi mdi-bell\"></i>
                                <div class=\"pulse-cssAhmed\"></div>
                            </a>

                        </li>
                        <li class=\"nav-item dropdown header-profile\">
                            <a class=\"nav-link\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
                                <i class=\"mdi mdi-account\"></i>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\">
                                <a href=\"./app-profile.html\" class=\"dropdown-item\">
                                    <i class=\"icon-user\"></i>
                                    <span class=\"ml-2\">Profile </span>
                                </a>
                                <a href=\"./email-inbox.html\" class=\"dropdown-item\">
                                    <i class=\"icon-envelope-open\"></i>
                                    <span class=\"ml-2\">Inbox </span>
                                </a>
                                <a href=\"./page-login.html\" class=\"dropdown-item\">
                                    <i class=\"icon-key\"></i>
                                    <span class=\"ml-2\">Logout </span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    {% endblock %}
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class=\"quixnav\">
        <div class=\"quixnav-scroll\">
            <ul class=\"metismenu\" id=\"menu\">
                <li class=\"nav-label first\">Menu</li>
                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-single-04\"></i><span class=\"nav-text\">Dashboard</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"./index.html\">Dashboard 1</a></li>
                        <li><a href=\"./index2.html\">Dashboard 2</a></li>
                    </ul>
                </li>


                <li class=\"nav-label\">Offre</li>
                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-form\"></i><span class=\"nav-text\">Offre</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"#\">Ajout offre</a></li>
                    </ul>
                <li class=\"nav-label\">Quizs</li>
                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-form\"></i><span class=\"nav-text\">Quizs</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"{{ path('list_quizs') }}\">Manage Quizs</a></li>
                    </ul>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"{{ path('free_quizs') }}\">Quizs</a></li>
                    </ul>
                <li><a href=\"./page-lock-screen.html\">Lock Screen</a></li>
            </ul>
            </li>
            </ul>
        </div>
        <?php
\tvar quizTitle = \"<?php echo \$quiz->getQuizTitle(); ?>\";
        var quizScore = \"<?php echo \$quiz->getScore(); ?>\";
?>
    </div>
    {% block body %}{% endblock %}
    <!--**********************************
       Footer start
   ***********************************-->
    <div class=\"footer\">
        <div class=\"copyright\">
            <p>Copyright © Designed &amp; Developed by <a href=\"#\" target=\"_blank\">Aster</a> 2023</p>
            <p>Distributed by <a href=\"#\" target=\"_blank\">Aster</a></p>
        </div>
    </div>
    <!--**********************************
        Footer end
    ***********************************-->

    <!--**********************************
       Support ticket button start
    ***********************************-->

    <!--**********************************
       Support ticket button end
    ***********************************-->


</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
{% block jsAhmed %}
    <!-- Required vendors -->
    <script src=\"{{asset('./vendor1/global/global.min.jsAhmed')}}\"></script>
    <script src=\"{{asset('./jsAhmed/quixnav-init.jsAhmed')}}\"></script>
    <script src=\"{{asset('./jsAhmed/custom.min.jsAhmed')}}\"></script>


    <!-- Vectormap -->
    <script src=\"{{asset('./vendor1/raphael/raphael.min.jsAhmed')}}\"></script>
    <script src=\"{{asset('./vendor1/morris/morris.min.jsAhmed')}}\"></script>


    <script src=\"{{asset('./vendor1/circle-progress/circle-progress.min.jsAhmed')}}\"></script>
    <script src=\"{{asset('./vendor1/chart.jsAhmed/Chart.bundle.min.jsAhmed')}}\"></script>

    <script src=\"{{asset('./vendor1/gaugeJS/dist/gauge.min.jsAhmed')}}\"></script>


    <!--  flot-chart jsAhmed -->
    <script src=\"{{asset('./vendor1/flot/jquery.flot.jsAhmed')}}\"></script>
    <script src=\"{{asset('./vendor1/flot/jquery.flot.resize.jsAhmed')}}\"></script>

    <!-- Owl Carousel -->
    <script src=\"{{asset('./vendor1/owl-carousel/jsAhmed/owl.carousel.min.jsAhmed')}}\"></script>

    <!-- Counter Up -->
    <script src=\"{{asset('./vendor1/jqvmap/jsAhmed/jquery.vmap.min.jsAhmed')}}\"></script>
    <script src=\"{{asset('./vendor1/jqvmap/jsAhmed/jquery.vmap.usa.jsAhmed')}}\"></script>
    <script src=\"{{asset('./vendor1/jquery.counterup/jquery.counterup.min.jsAhmed')}}\"></script>


    <script src=\"{{asset('./jsAhmed/dashboard/dashboard-1.jsAhmed')}}\"></script>
{% endblock %}
</body>

</html>", "base2.html.twig", "C:\\Users\\Ahmed\\Desktop\\webtaskk\\templates\\base2.html.twig");
    }
}
