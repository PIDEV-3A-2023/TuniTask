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

/* base.html.twig */
class __TwigTemplate_d37d1c3621cb1b31c9f974580366ac09 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>TuniTask</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link rel=\"icon\"  sizes=\"16x16\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link
            href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap\"
            rel=\"stylesheet\">

    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/cssAhmed/all.min.cssAhmed\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.cssAhmed\" rel=\"stylesheet\">
";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 201
        echo "</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 24
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 25
        echo "    <!-- Libraries Stylesheet -->
    <link  href=\" ";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/animate/animate.min.cssAhmed"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/assets/owl.carousel.min.cssAhmed"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/lightbox/cssAhmed/lightbox.min.cssAhmed"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("cssAhmed/bootstrap.min.cssAhmed"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("cssAhmed/style.cssAhmed"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- SweetAlert CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css"), "html", null, true);
        echo "\">


</head>

<body>
<!-- Spinner Start -->
<div id=\"spinner\"
     class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
    <div class=\"spinner-border text-primary\" role=\"status\" style=\"width: 3rem; height: 3rem;\"></div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->

<div class=\"aa\">
    <div class=\"container py-3\">
        <div class=\"d-flex align-items-center\">
            <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stats");
        echo "\">
                <h2 class=\"text-white fw-bold m-0\">TuniTask</h2>
            </a>
            <div class=\"ms-auto d-flex align-items-center\">
                <small class=\"ms-4\"><i class=\"fa fa-map-marker-alt me-3\"></i>Av. Fethi Zouhir, Cebalat Ben Ammar 2083</small>
                <small class=\"ms-4\"><i class=\"fa fa-envelope me-3\"></i>Aster@gmail.com</small>
                <small class=\"ms-4\"><i class=\"fa fa-phone-alt me-3\"></i>+216 244 10946</small>
                <div class=\"ms-3 d-flex\">
                    <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" class=\"logo1\" height=\"60\">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Topbar End -->

";
        // line 72
        $this->displayBlock('nav', $context, $blocks);
        // line 97
        echo "<!-- Navbar End -->
";
        // line 98
        $this->displayBlock('body', $context, $blocks);
        // line 183
        echo "



";
        // line 187
        $this->displayBlock('jsAhmed', $context, $blocks);
        // line 199
        echo "</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 72
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 73
        echo "<!-- Navbar Start -->
<div class=\"container-fluid bg-white sticky-top\">
    <div class=\"container\">
        <nav class=\"navbar navbar-expand-lg bg-white navbar-light p-lg-0\">
            <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stats");
        echo "\" class=\"navbar-brand d-lg-none\">
                <h1 class=\"fw-bold m-0\">TuniTask</h1>
            </a>
            <button type=\"button\" class=\"navbar-toggler me-0\" data-bs-toggle=\"collapse\"
                    data-bs-target=\"#navbarCollapse\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <div class=\"navbar-nav\">
                    <a href=\"index.html\" class=\"nav-item nav-link active\">Accueil</a>
                    <a href=\"#\" class=\"nav-item nav-link\">Offre</a>
                    <a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("free_quizs");
        echo "\" class=\"nav-item nav-link\">Quizs</a>
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

    // line 98
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 99
        echo "

<!-- Quote Start -->
<div class=\"container-xxl py-5\">
    <div class=\"container\">
        <div class=\"row g-5\">
            <div class=\"col-lg-4 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <p class=\"fs-5 fw-medium text-primary\">Get A Quote</p>
                <h1 class=\"display-5 mb-4\">Need Our Expert Help? We're Here!</h1>
                <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita
                    erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                    eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                <a class=\"d-inline-flex align-items-center rounded overflow-hidden border border-primary\" href=\"\">
                        <span class=\"btn-lg-square bg-primary\" style=\"width: 55px; height: 55px;\">
                            <i class=\"fa fa-phone-alt text-white\"></i>
                        </span>
                    <span class=\"fs-5 fw-medium mx-4\">+012 345 6789</span>
                </a>
            </div>
            <div class=\"col-lg-4 wow fadeInUp\" data-wow-delay=\"0.5s\">
                <p class=\"fs-5 fw-medium text-primary\">Get A Quote</p>
                <h1 class=\"display-5 mb-4\">Need Our Expert Help? We're Here!</h1>
                <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita
                    erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                    eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                <a class=\"d-inline-flex align-items-center rounded overflow-hidden border border-primary\" href=\"\">
                        <span class=\"btn-lg-square bg-primary\" style=\"width: 55px; height: 55px;\">
                            <i class=\"fa fa-phone-alt text-white\"></i>
                        </span>
                    <span class=\"fs-5 fw-medium mx-4\">+012 345 6789</span>
                </a>
            </div>
            <div class=\"col-lg-4 wow fadeInUp\" data-wow-delay=\"1s\">
                <h2 class=\"mb-4\">Get A Free Quote</h2>
                <div class=\"row g-3\">
                    <div class=\"col-sm-6\">
                        <div class=\"form-floating\">
                            <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\">
                            <label for=\"name\">Your Name</label>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"form-floating\">
                            <input type=\"email\" class=\"form-control\" id=\"mail\" placeholder=\"Your Email\">
                            <label for=\"mail\">Your Email</label>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"form-floating\">
                            <input type=\"text\" class=\"form-control\" id=\"mobile\" placeholder=\"Your Mobile\">
                            <label for=\"mobile\">Your Mobile</label>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"form-floating\">
                            <select class=\"form-select\" id=\"service\">
                                <option selected>Digital Marketing</option>
                                <option value=\"\">Social Marketing</option>
                                <option value=\"\">Content Marketing</option>
                                <option value=\"\">E-mail Marketing</option>
                            </select>
                            <label for=\"service\">Choose A Service</label>
                        </div>
                    </div>
                    <div class=\"col-12\">
                        <div class=\"form-floating\">
                                <textarea class=\"form-control\" placeholder=\"Leave a message here\" id=\"message\"
                                          style=\"height: 130px\"></textarea>
                            <label for=\"message\">Message</label>
                        </div>
                    </div>
                    <div class=\"col-12 text-center\">
                        <button class=\"btn btn-primary w-100 py-3\" type=\"submit\">Submit Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quote Start -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 187
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jsAhmed"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jsAhmed"));

        // line 188
        echo "<!-- JavaScript Libraries -->
<script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/wow/wow.min.jsAhmed"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.jsAhmed"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.jsAhmed"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.jsAhmed"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/lightbox/jsAhmed/lightbox.min.jsAhmed"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/sweetalert/dist/sweetalert.min.js"), "html", null, true);
        echo "\"></script><!-- Template Javascript -->
<script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jsAhmed/main.jsAhmed"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 197,  389 => 196,  385 => 195,  381 => 194,  377 => 193,  373 => 192,  369 => 191,  365 => 190,  361 => 189,  358 => 188,  348 => 187,  255 => 99,  245 => 98,  226 => 88,  212 => 77,  206 => 73,  196 => 72,  185 => 199,  183 => 187,  177 => 183,  175 => 98,  172 => 97,  170 => 72,  158 => 63,  147 => 55,  125 => 36,  120 => 34,  114 => 31,  108 => 28,  104 => 27,  100 => 26,  97 => 25,  87 => 24,  77 => 201,  75 => 24,  60 => 12,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>TuniTask</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link rel=\"icon\"  sizes=\"16x16\" href=\"{{asset('img/logo.png')}}\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link
            href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap\"
            rel=\"stylesheet\">

    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/cssAhmed/all.min.cssAhmed\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.cssAhmed\" rel=\"stylesheet\">
{% block stylesheets %}
    <!-- Libraries Stylesheet -->
    <link  href=\" {{ asset('lib/animate/animate.min.cssAhmed') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('lib/owlcarousel/assets/owl.carousel.min.cssAhmed') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('lib/lightbox/cssAhmed/lightbox.min.cssAhmed') }}\" rel=\"stylesheet\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"{{asset('cssAhmed/bootstrap.min.cssAhmed')}}\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"{{asset('cssAhmed/style.cssAhmed')  }}\" rel=\"stylesheet\">
    <!-- SweetAlert CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.cssAhmed') }}\">


</head>

<body>
<!-- Spinner Start -->
<div id=\"spinner\"
     class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
    <div class=\"spinner-border text-primary\" role=\"status\" style=\"width: 3rem; height: 3rem;\"></div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->

<div class=\"aa\">
    <div class=\"container py-3\">
        <div class=\"d-flex align-items-center\">
            <a href=\"{{ path('stats') }}\">
                <h2 class=\"text-white fw-bold m-0\">TuniTask</h2>
            </a>
            <div class=\"ms-auto d-flex align-items-center\">
                <small class=\"ms-4\"><i class=\"fa fa-map-marker-alt me-3\"></i>Av. Fethi Zouhir, Cebalat Ben Ammar 2083</small>
                <small class=\"ms-4\"><i class=\"fa fa-envelope me-3\"></i>Aster@gmail.com</small>
                <small class=\"ms-4\"><i class=\"fa fa-phone-alt me-3\"></i>+216 244 10946</small>
                <div class=\"ms-3 d-flex\">
                    <img src=\"{{ asset('img/logo.png') }}\" class=\"logo1\" height=\"60\">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Topbar End -->

{% block nav %}
<!-- Navbar Start -->
<div class=\"container-fluid bg-white sticky-top\">
    <div class=\"container\">
        <nav class=\"navbar navbar-expand-lg bg-white navbar-light p-lg-0\">
            <a href=\"{{ path('stats') }}\" class=\"navbar-brand d-lg-none\">
                <h1 class=\"fw-bold m-0\">TuniTask</h1>
            </a>
            <button type=\"button\" class=\"navbar-toggler me-0\" data-bs-toggle=\"collapse\"
                    data-bs-target=\"#navbarCollapse\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <div class=\"navbar-nav\">
                    <a href=\"index.html\" class=\"nav-item nav-link active\">Accueil</a>
                    <a href=\"#\" class=\"nav-item nav-link\">Offre</a>
                    <a href=\"{{ path('free_quizs') }}\" class=\"nav-item nav-link\">Quizs</a>
                    <a href=\"#.html\" class=\"nav-item nav-link\">Demande</a>
                    <a href=\"#.html\" class=\"nav-item nav-link\">Evenements</a>
                    <a href=\"#.html\" class=\"nav-item nav-link\">Reclamation</a>

                </div>
            </div>    </nav>
    </div>
</div>{% endblock %}
<!-- Navbar End -->
{% block body %}


<!-- Quote Start -->
<div class=\"container-xxl py-5\">
    <div class=\"container\">
        <div class=\"row g-5\">
            <div class=\"col-lg-4 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <p class=\"fs-5 fw-medium text-primary\">Get A Quote</p>
                <h1 class=\"display-5 mb-4\">Need Our Expert Help? We're Here!</h1>
                <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita
                    erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                    eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                <a class=\"d-inline-flex align-items-center rounded overflow-hidden border border-primary\" href=\"\">
                        <span class=\"btn-lg-square bg-primary\" style=\"width: 55px; height: 55px;\">
                            <i class=\"fa fa-phone-alt text-white\"></i>
                        </span>
                    <span class=\"fs-5 fw-medium mx-4\">+012 345 6789</span>
                </a>
            </div>
            <div class=\"col-lg-4 wow fadeInUp\" data-wow-delay=\"0.5s\">
                <p class=\"fs-5 fw-medium text-primary\">Get A Quote</p>
                <h1 class=\"display-5 mb-4\">Need Our Expert Help? We're Here!</h1>
                <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita
                    erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                    eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                <a class=\"d-inline-flex align-items-center rounded overflow-hidden border border-primary\" href=\"\">
                        <span class=\"btn-lg-square bg-primary\" style=\"width: 55px; height: 55px;\">
                            <i class=\"fa fa-phone-alt text-white\"></i>
                        </span>
                    <span class=\"fs-5 fw-medium mx-4\">+012 345 6789</span>
                </a>
            </div>
            <div class=\"col-lg-4 wow fadeInUp\" data-wow-delay=\"1s\">
                <h2 class=\"mb-4\">Get A Free Quote</h2>
                <div class=\"row g-3\">
                    <div class=\"col-sm-6\">
                        <div class=\"form-floating\">
                            <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\">
                            <label for=\"name\">Your Name</label>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"form-floating\">
                            <input type=\"email\" class=\"form-control\" id=\"mail\" placeholder=\"Your Email\">
                            <label for=\"mail\">Your Email</label>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"form-floating\">
                            <input type=\"text\" class=\"form-control\" id=\"mobile\" placeholder=\"Your Mobile\">
                            <label for=\"mobile\">Your Mobile</label>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"form-floating\">
                            <select class=\"form-select\" id=\"service\">
                                <option selected>Digital Marketing</option>
                                <option value=\"\">Social Marketing</option>
                                <option value=\"\">Content Marketing</option>
                                <option value=\"\">E-mail Marketing</option>
                            </select>
                            <label for=\"service\">Choose A Service</label>
                        </div>
                    </div>
                    <div class=\"col-12\">
                        <div class=\"form-floating\">
                                <textarea class=\"form-control\" placeholder=\"Leave a message here\" id=\"message\"
                                          style=\"height: 130px\"></textarea>
                            <label for=\"message\">Message</label>
                        </div>
                    </div>
                    <div class=\"col-12 text-center\">
                        <button class=\"btn btn-primary w-100 py-3\" type=\"submit\">Submit Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quote Start -->

{% endblock %}




{% block jsAhmed %}
<!-- JavaScript Libraries -->
<script src=\"{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.jsAhmed') }}\"></script>
<script src=\"{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/jsAhmed/bootstrap.bundle.min.jsAhmed')}}\"></script>
<script src=\"{{ asset('lib/wow/wow.min.jsAhmed') }}\"></script>
<script src=\"{{ asset('lib/easing/easing.min.jsAhmed') }}\"></script>
<script src=\"{{ asset('lib/waypoints/waypoints.min.jsAhmed') }}\"></script>
<script src=\"{{ asset('lib/owlcarousel/owl.carousel.min.jsAhmed') }}\"></script>
<script src=\"{{ asset('lib/lightbox/jsAhmed/lightbox.min.jsAhmed') }}\"></script>
    <script src=\"{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.jsAhmed') }}\"></script><!-- Template Javascript -->
<script src=\"{{ asset('jsAhmed/main.jsAhmed') }}\"></script>
{% endblock %}
</body>
{% endblock %}
</html>", "base.html.twig", "C:\\Users\\Ahmed\\Desktop\\webtaskk\\templates\\base.html.twig");
    }
}
