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
class __TwigTemplate_f0f088cd495486f134280041b51cbe1cb64a9385fd40069aaaab613dd328bfea extends Template
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
            'page_keywords' => [$this, 'block_page_keywords'],
            'page_description' => [$this, 'block_page_description'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"keywords\" content=\"";
        // line 8
        $this->displayBlock('page_keywords', $context, $blocks);
        echo "\">
    <meta name=\"description\" content=\"";
        // line 9
        $this->displayBlock('page_description', $context, $blocks);
        echo "\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons/favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/styles.css"), "html", null, true);
        echo "\">
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "</head>

<body>
<div class=\"page-wrapper\">

    <div class=\"mobile-_menu-container\" id=\"mobile_menu_container\">
        <button class=\"mobile-_menu-close-btn\" id=\"mobile_menu_close_btn\">
            <i class=\"fas fa-times\"></i>
        </button>
        <nav class=\"mobile-nav\">
            <ul class=\"mobile-_menu\">
                <li class=\"_menu-item\">
                    <a href=\"#\">
                        <div>Jeans</div>
                    </a>
                </li>
                <li class=\"_menu-item\">
                    <a href=\"#\">
                        <div>Hats</div>
                    </a>
                </li>
                <li class=\"_menu-item\">
                    <a href=\"#\">
                        <div>Jackets</div>
                    </a>
                </li>
                <li class=\"_menu-item\">
                    <a href=\"#\">
                        <div>Dresses</div>
                    </a>
                </li>
                <li class=\"_menu-item\">
                    <a href=\"#\">
                        <div>Sneakers</div>
                    </a>
                </li>
                <li class=\"_menu-item font-weight-bold\">
                    <a href=\"#\">
                        <div>Login</div>
                    </a>
                </li>
                <li class=\"_menu-item font-weight-bold\">
                    <a href=\"#\">
                        <div>Cart</div>
                    </a>
                </li>
            </ul>
        </nav>
    </div>


    <header class=\"header\">
        <div class=\"container-fluid\">
            <button class=\"mobile-_menu-toggler\" id=\"mobile_menu_toggler\">
                <i class=\"fas fa-bars\"></i>
            </button>

            <a href=\"#\" class=\"logotype\">
                <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons/logo_366x79.svg"), "html", null, true);
        echo "\" alt=\"RankedChoice Logotype\">
            </a>
            <nav class=\"main-nav\">
                <ul class=\"_menu\">
                    <li class=\"_menu-item\">
                        <a href=\"#\">
                            <div>Jeans</div>
                        </a>
                    </li>
                    <li class=\"_menu-item\">
                        <a href=\"#\">
                            <div>Hats</div>
                        </a>
                    </li>
                    <li class=\"_menu-item\">
                        <a href=\"#\">
                            <div>Jackets</div>
                        </a>
                    </li>
                    <li class=\"_menu-item\">
                        <a href=\"#\">
                            <div>Dresses</div>
                        </a>
                    </li>
                    <li class=\"_menu-item\">
                        <a href=\"#\">
                            <div>Sneakers</div>
                        </a>
                    </li>

                    <li class=\"_menu-item font-weight-bold\">
                        <a href=\"#\">
                            <div>Login</div>
                        </a>
                    </li>
                    <li class=\"_menu-item font-weight-bold\">
                        <a href=\"#\">
                            <div>Cart</div>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main class=\"main\">
        ";
        // line 117
        $this->displayBlock('body', $context, $blocks);
        // line 119
        echo "    </main>

    <footer class=\"footer\">
        <div class=\"footer-middle\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-sm-12 mt-3\">
                        <h4 class=\"widget-title\">Useful links</h4>
                        <ul class=\"widget-list\">
                            <li>
                                <a href=\"#\">Homepage</a>
                            </li>
                            <li>
                                <a href=\"#\">Sign up</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-sm-12 mt-3\">
                        <h4 class=\"widget-title\">My Account</h4>
                        <ul class=\"widget-list\">
                            <li>
                                <a href=\"#\">Sign in</a>
                            </li>
                            <li>
                                <a href=\"#\">View cart</a>
                            </li>
                            <li>
                                <a href=\"#\">My profile</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-sm-12 mt-3\">
                        <p class=\"widget-copyright\">Copyright © RankedChoice Team. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

";
        // line 159
        $this->displayBlock('javascripts', $context, $blocks);
        // line 160
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "RankedChoice - Shop Of Best Clothes";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_page_keywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_keywords"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_keywords"));

        echo "clothes, jackets, jeans";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_page_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_description"));

        echo "clothes, jackets, jeans";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 117
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 118
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 159
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  341 => 159,  331 => 118,  321 => 117,  303 => 12,  284 => 9,  265 => 8,  246 => 7,  234 => 160,  232 => 159,  190 => 119,  188 => 117,  139 => 71,  79 => 13,  77 => 12,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  57 => 7,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
    <title>{% block title %}RankedChoice - Shop Of Best Clothes{% endblock %}</title>
    <meta name=\"keywords\" content=\"{% block page_keywords %}clothes, jackets, jeans{% endblock %}\">
    <meta name=\"description\" content=\"{% block page_description %}clothes, jackets, jeans{% endblock %}\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('build/images/icons/favicon.ico') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('build/styles.css') }}\">
    {% block stylesheets %}{% endblock %}
</head>

<body>
<div class=\"page-wrapper\">

    <div class=\"mobile-_menu-container\" id=\"mobile_menu_container\">
        <button class=\"mobile-_menu-close-btn\" id=\"mobile_menu_close_btn\">
            <i class=\"fas fa-times\"></i>
        </button>
        <nav class=\"mobile-nav\">
            <ul class=\"mobile-_menu\">
                <li class=\"_menu-item\">
                    <a href=\"#\">
                        <div>Jeans</div>
                    </a>
                </li>
                <li class=\"_menu-item\">
                    <a href=\"#\">
                        <div>Hats</div>
                    </a>
                </li>
                <li class=\"_menu-item\">
                    <a href=\"#\">
                        <div>Jackets</div>
                    </a>
                </li>
                <li class=\"_menu-item\">
                    <a href=\"#\">
                        <div>Dresses</div>
                    </a>
                </li>
                <li class=\"_menu-item\">
                    <a href=\"#\">
                        <div>Sneakers</div>
                    </a>
                </li>
                <li class=\"_menu-item font-weight-bold\">
                    <a href=\"#\">
                        <div>Login</div>
                    </a>
                </li>
                <li class=\"_menu-item font-weight-bold\">
                    <a href=\"#\">
                        <div>Cart</div>
                    </a>
                </li>
            </ul>
        </nav>
    </div>


    <header class=\"header\">
        <div class=\"container-fluid\">
            <button class=\"mobile-_menu-toggler\" id=\"mobile_menu_toggler\">
                <i class=\"fas fa-bars\"></i>
            </button>

            <a href=\"#\" class=\"logotype\">
                <img src=\"{{ asset('build/images/icons/logo_366x79.svg') }}\" alt=\"RankedChoice Logotype\">
            </a>
            <nav class=\"main-nav\">
                <ul class=\"_menu\">
                    <li class=\"_menu-item\">
                        <a href=\"#\">
                            <div>Jeans</div>
                        </a>
                    </li>
                    <li class=\"_menu-item\">
                        <a href=\"#\">
                            <div>Hats</div>
                        </a>
                    </li>
                    <li class=\"_menu-item\">
                        <a href=\"#\">
                            <div>Jackets</div>
                        </a>
                    </li>
                    <li class=\"_menu-item\">
                        <a href=\"#\">
                            <div>Dresses</div>
                        </a>
                    </li>
                    <li class=\"_menu-item\">
                        <a href=\"#\">
                            <div>Sneakers</div>
                        </a>
                    </li>

                    <li class=\"_menu-item font-weight-bold\">
                        <a href=\"#\">
                            <div>Login</div>
                        </a>
                    </li>
                    <li class=\"_menu-item font-weight-bold\">
                        <a href=\"#\">
                            <div>Cart</div>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main class=\"main\">
        {% block body %}
        {% endblock %}
    </main>

    <footer class=\"footer\">
        <div class=\"footer-middle\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-sm-12 mt-3\">
                        <h4 class=\"widget-title\">Useful links</h4>
                        <ul class=\"widget-list\">
                            <li>
                                <a href=\"#\">Homepage</a>
                            </li>
                            <li>
                                <a href=\"#\">Sign up</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-sm-12 mt-3\">
                        <h4 class=\"widget-title\">My Account</h4>
                        <ul class=\"widget-list\">
                            <li>
                                <a href=\"#\">Sign in</a>
                            </li>
                            <li>
                                <a href=\"#\">View cart</a>
                            </li>
                            <li>
                                <a href=\"#\">My profile</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-sm-12 mt-3\">
                        <p class=\"widget-copyright\">Copyright © RankedChoice Team. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\Users\\Даниил Кирпа\\Desktop\\lasthuita\\templates\\base.html.twig");
    }
}
