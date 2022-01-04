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

/* main/default/index.html.twig */
class __TwigTemplate_8fbaea02fa32fa610727be8cf0ac5f6efe0eaf633559303b9bfa590c54d26a4b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'page_keywords' => [$this, 'block_page_keywords'],
            'page_description' => [$this, 'block_page_description'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "main/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/default/index.html.twig"));

        $this->parent = $this->loadTemplate("main/base.html.twig", "main/default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Homepage - RankedChoice";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_page_keywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_keywords"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_keywords"));

        echo "Jeans, Jackets";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_page_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_description"));

        echo "Main page of RankedChoice shop!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container-fluid mt-2\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"banner banner-big\">
                    <a href=\"#\">
                        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/banner/collection/banner_1.jpg"), "html", null, true);
        echo "\" alt=\"banner\">
                    </a>

                    <div class=\"banner-content\">
                        <h3 class=\"banner-subtitle\">
                            New Collection!
                        </h3>
                        <h2 class=\"banner-title\">
                            Jeans
                        </h2>
                        <a href=\"#\" class=\"btn btn-link\">
                            Show me
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6\">
                <div class=\"banner banner-big\">
                    <a href=\"#\">
                        <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/banner/collection/banner_2.jpg"), "html", null, true);
        echo "\" alt=\"banner\">
                    </a>

                    <div class=\"banner-content\">
                        <h3 class=\"banner-subtitle\">
                            Discounts Over 50%
                        </h3>
                        <h2 class=\"banner-title\">
                            Jackets
                        </h2>
                        <a href=\"#\" class=\"btn btn-link\">
                            Show me
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row mt-1 justify-content-center align-items-center\">
            <div class=\"col-md-6 col-lg-4\">
                <div class=\"banner banner-middle\">
                    <a href=\"#\">
                        <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/banner/collection/banner_3.jpg"), "html", null, true);
        echo "\" alt=\"banner\">
                    </a>

                    <div class=\"banner-content\">
                        <h3 class=\"banner-subtitle\">
                            Unique!
                        </h3>
                        <a href=\"#\" class=\"btn btn-link\">
                            Hats
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"col-md-6 col-lg-4\">
                <div class=\"banner banner-middle\">
                    <a href=\"#\">
                        <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/banner/collection/banner_4.jpg"), "html", null, true);
        echo "\" alt=\"banner\">
                    </a>

                    <div class=\"banner-content\">
                        <h3 class=\"banner-subtitle\">
                            Fashionable!
                        </h3>
                        <a href=\"#\" class=\"btn btn-link\">
                            Dresses
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"col-md-6 col-lg-4\">
                <div class=\"banner banner-middle\">
                    <a href=\"#\">
                        <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/banner/collection/banner_5.jpg"), "html", null, true);
        echo "\" alt=\"banner\">
                    </a>

                    <div class=\"banner-content\">
                        <h3 class=\"banner-subtitle text-white\">
                            Branded!
                        </h3>
                        <a href=\"#\" class=\"btn btn-link\">
                            Sneakers
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 89,  203 => 72,  183 => 55,  158 => 33,  135 => 13,  128 => 8,  118 => 7,  99 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'main/base.html.twig' %}

{% block title %}Homepage - RankedChoice{% endblock %}
{% block page_keywords %}Jeans, Jackets{% endblock %}
{% block page_description %}Main page of RankedChoice shop!{% endblock %}

{% block body %}
    <div class=\"container-fluid mt-2\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"banner banner-big\">
                    <a href=\"#\">
                        <img src=\"{{ asset('build/images/banner/collection/banner_1.jpg') }}\" alt=\"banner\">
                    </a>

                    <div class=\"banner-content\">
                        <h3 class=\"banner-subtitle\">
                            New Collection!
                        </h3>
                        <h2 class=\"banner-title\">
                            Jeans
                        </h2>
                        <a href=\"#\" class=\"btn btn-link\">
                            Show me
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6\">
                <div class=\"banner banner-big\">
                    <a href=\"#\">
                        <img src=\"{{ asset('build/images/banner/collection/banner_2.jpg') }}\" alt=\"banner\">
                    </a>

                    <div class=\"banner-content\">
                        <h3 class=\"banner-subtitle\">
                            Discounts Over 50%
                        </h3>
                        <h2 class=\"banner-title\">
                            Jackets
                        </h2>
                        <a href=\"#\" class=\"btn btn-link\">
                            Show me
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row mt-1 justify-content-center align-items-center\">
            <div class=\"col-md-6 col-lg-4\">
                <div class=\"banner banner-middle\">
                    <a href=\"#\">
                        <img src=\"{{ asset('build/images/banner/collection/banner_3.jpg') }}\" alt=\"banner\">
                    </a>

                    <div class=\"banner-content\">
                        <h3 class=\"banner-subtitle\">
                            Unique!
                        </h3>
                        <a href=\"#\" class=\"btn btn-link\">
                            Hats
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"col-md-6 col-lg-4\">
                <div class=\"banner banner-middle\">
                    <a href=\"#\">
                        <img src=\"{{ asset('build/images/banner/collection/banner_4.jpg') }}\" alt=\"banner\">
                    </a>

                    <div class=\"banner-content\">
                        <h3 class=\"banner-subtitle\">
                            Fashionable!
                        </h3>
                        <a href=\"#\" class=\"btn btn-link\">
                            Dresses
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"col-md-6 col-lg-4\">
                <div class=\"banner banner-middle\">
                    <a href=\"#\">
                        <img src=\"{{ asset('build/images/banner/collection/banner_5.jpg') }}\" alt=\"banner\">
                    </a>

                    <div class=\"banner-content\">
                        <h3 class=\"banner-subtitle text-white\">
                            Branded!
                        </h3>
                        <a href=\"#\" class=\"btn btn-link\">
                            Sneakers
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "main/default/index.html.twig", "C:\\Users\\Даниил Кирпа\\Desktop\\lasthuita\\templates\\main\\default\\index.html.twig");
    }
}
