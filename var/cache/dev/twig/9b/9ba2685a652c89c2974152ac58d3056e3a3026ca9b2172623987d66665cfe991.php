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

/* main/_embed/_footer.html.twig */
class __TwigTemplate_a5b52d49b6e1fea99731a42620d8ff2d67bb8958c05e0b4f15aa153661fd8d83 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/_embed/_footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/_embed/_footer.html.twig"));

        // line 1
        echo "<footer class=\"footer\">
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
</footer>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "main/_embed/_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer\">
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
</footer>", "main/_embed/_footer.html.twig", "C:\\Users\\Даниил Кирпа\\Desktop\\lasthuita\\templates\\main\\_embed\\_footer.html.twig");
    }
}
