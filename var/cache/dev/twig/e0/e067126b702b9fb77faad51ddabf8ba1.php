<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* components/Search.html.twig */
class __TwigTemplate_fc14c3d3cf227854ff7b8783388d72e3 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Search.html.twig"));

        // line 1
        yield "<div";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "defaults", [["class" => "card shadow-sm"]], "method", false, false, false, 1), "html", null, true);
        yield ">
    <div class=\"card-header bg-info text-white\">
        <h4 class=\"mb-0\">🔍 Live Search Component</h4>
    </div>
    <div class=\"card-body\">
        <div class=\"mb-3\">
            <label for=\"search-input\" class=\"form-label\">Search products:</label>
            <input
                type=\"text\"
                class=\"form-control\"
                id=\"search-input\"
                placeholder=\"Search by name or category...\"
                data-model=\"query\"
                value=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "\"
            />
        </div>

        <div class=\"mb-3\">
            <small class=\"text-muted\">
                Found ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 20, $this->source); })()), "resultsCount", [], "any", false, false, false, 20), "html", null, true);
        yield " result";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 20, $this->source); })()), "resultsCount", [], "any", false, false, false, 20) != 1)) ? ("s") : (""));
        yield "
            </small>
        </div>

        <div class=\"row\">
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 25, $this->source); })()), "filteredResults", [], "any", false, false, false, 25));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 26
            yield "                <div class=\"col-md-6 col-lg-4 mb-3\">
                    <div class=\"card h-100 border-light\">
                        <div class=\"card-body\">
                            <h6 class=\"card-title\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 29), "html", null, true);
            yield "</h6>
                            <p class=\"card-text\">
                                <span class=\"badge bg-secondary mb-2\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 31), "html", null, true);
            yield "</span><br>
                                <strong class=\"text-success\">\$";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 32), "html", null, true);
            yield "</strong>
                            </p>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 37
        if (!$context['_iterated']) {
            // line 38
            yield "                <div class=\"col-12\">
                    <div class=\"alert alert-light text-center\">
                        <h5>No results found</h5>
                        <p class=\"mb-0\">Try searching for something else.</p>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/Search.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  127 => 45,  115 => 38,  113 => 37,  103 => 32,  99 => 31,  94 => 29,  89 => 26,  84 => 25,  74 => 20,  65 => 14,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div{{ attributes.defaults({class: 'card shadow-sm'}) }}>
    <div class=\"card-header bg-info text-white\">
        <h4 class=\"mb-0\">🔍 Live Search Component</h4>
    </div>
    <div class=\"card-body\">
        <div class=\"mb-3\">
            <label for=\"search-input\" class=\"form-label\">Search products:</label>
            <input
                type=\"text\"
                class=\"form-control\"
                id=\"search-input\"
                placeholder=\"Search by name or category...\"
                data-model=\"query\"
                value=\"{{ query }}\"
            />
        </div>

        <div class=\"mb-3\">
            <small class=\"text-muted\">
                Found {{ this.resultsCount }} result{{ this.resultsCount != 1 ? 's' : '' }}
            </small>
        </div>

        <div class=\"row\">
            {% for item in this.filteredResults %}
                <div class=\"col-md-6 col-lg-4 mb-3\">
                    <div class=\"card h-100 border-light\">
                        <div class=\"card-body\">
                            <h6 class=\"card-title\">{{ item.name }}</h6>
                            <p class=\"card-text\">
                                <span class=\"badge bg-secondary mb-2\">{{ item.category }}</span><br>
                                <strong class=\"text-success\">\${{ item.price }}</strong>
                            </p>
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"col-12\">
                    <div class=\"alert alert-light text-center\">
                        <h5>No results found</h5>
                        <p class=\"mb-0\">Try searching for something else.</p>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
</div>", "components/Search.html.twig", "/app/templates/components/Search.html.twig");
    }
}
