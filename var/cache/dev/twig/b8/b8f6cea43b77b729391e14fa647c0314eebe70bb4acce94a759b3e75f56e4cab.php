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

/* main/_embed/_menu/_mobile_menu.html.twig */
class __TwigTemplate_6ffb8c917ca308ea3c58430d920b8001f134383fd035131f0631283dc6966559 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/_embed/_menu/_mobile_menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/_embed/_menu/_mobile_menu.html.twig"));

        // line 1
        echo "
<div class=\"mobile-menu-container\" id=\"mobile_menu_container\">
    <button class=\"mobile-menu-close-btn\" id=\"mobile_menu_close_btn\">
        <i class=\"fas fa-times\"></i>
    </button>
    <nav class=\"mobile-nav\">
        <ul class=\"mobile-menu\">
            <li class=\"menu-item\">
                <a href=\"#\">
                    <div>Jeans</div>
                </a>
            </li>
            <li class=\"menu-item\">
                <a href=\"#\">
                    <div>Hats</div>
                </a>
            </li>
            <li class=\"menu-item\">
                <a href=\"#\">
                    <div>Jackets</div>
                </a>
            </li>
            <li class=\"menu-item\">
                <a href=\"#\">
                    <div>Dresses</div>
                </a>
            </li>
            <li class=\"menu-item\">
                <a href=\"#\">
                    <div>Sneakers</div>
                </a>
            </li>
            <li class=\"menu-item font-weight-bold\">
                <a href=\"#\">
                    <div>Login</div>
                </a>
            </li>
            <li class=\"menu-item font-weight-bold\">
                <a href=\"#\">
                    <div>Cart</div>
                </a>
            </li>
        </ul>
    </nav>
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "main/_embed/_menu/_mobile_menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"mobile-menu-container\" id=\"mobile_menu_container\">
    <button class=\"mobile-menu-close-btn\" id=\"mobile_menu_close_btn\">
        <i class=\"fas fa-times\"></i>
    </button>
    <nav class=\"mobile-nav\">
        <ul class=\"mobile-menu\">
            <li class=\"menu-item\">
                <a href=\"#\">
                    <div>Jeans</div>
                </a>
            </li>
            <li class=\"menu-item\">
                <a href=\"#\">
                    <div>Hats</div>
                </a>
            </li>
            <li class=\"menu-item\">
                <a href=\"#\">
                    <div>Jackets</div>
                </a>
            </li>
            <li class=\"menu-item\">
                <a href=\"#\">
                    <div>Dresses</div>
                </a>
            </li>
            <li class=\"menu-item\">
                <a href=\"#\">
                    <div>Sneakers</div>
                </a>
            </li>
            <li class=\"menu-item font-weight-bold\">
                <a href=\"#\">
                    <div>Login</div>
                </a>
            </li>
            <li class=\"menu-item font-weight-bold\">
                <a href=\"#\">
                    <div>Cart</div>
                </a>
            </li>
        </ul>
    </nav>
</div>

", "main/_embed/_menu/_mobile_menu.html.twig", "C:\\Users\\Даниил Кирпа\\Desktop\\lasthuita\\templates\\main\\_embed\\_menu\\_mobile_menu.html.twig");
    }
}
