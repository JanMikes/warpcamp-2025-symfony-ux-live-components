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

/* components/LiveCounterComponent.html.twig */
class __TwigTemplate_f4b5fedfa14554fa2514698c335aef23 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/LiveCounterComponent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/LiveCounterComponent.html.twig"));

        // line 1
        yield "<div";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "defaults", [["class" => "card shadow-sm"]], "method", false, false, false, 1), "html", null, true);
        yield ">
    <div class=\"card-header bg-primary text-white text-center\">
        <h4 class=\"mb-0\">Live Counter Component</h4>
    </div>
    <div class=\"card-body text-center\">
        <div class=\"mb-4\">
            <span class=\"badge bg-success fs-1 px-4 py-3\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "</span>
        </div>
        <div class=\"btn-group\" role=\"group\">
            <button
                type=\"button\"
                class=\"btn btn-outline-danger\"
                data-action=\"live#action\"
                data-live-action-param=\"decrease\"
            >
                ➖ Decrease
            </button>
            <button
                type=\"button\"
                class=\"btn btn-outline-secondary\"
                data-action=\"live#action\"
                data-live-action-param=\"reset\"
            >
                🔄 Reset
            </button>
            <button
                type=\"button\"
                class=\"btn btn-outline-success\"
                data-action=\"live#action\"
                data-live-action-param=\"increase\"
            >
                ➕ Increase
            </button>
        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/LiveCounterComponent.html.twig";
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
        return array (  58 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div{{ attributes.defaults({class: 'card shadow-sm'}) }}>
    <div class=\"card-header bg-primary text-white text-center\">
        <h4 class=\"mb-0\">Live Counter Component</h4>
    </div>
    <div class=\"card-body text-center\">
        <div class=\"mb-4\">
            <span class=\"badge bg-success fs-1 px-4 py-3\">{{ count }}</span>
        </div>
        <div class=\"btn-group\" role=\"group\">
            <button
                type=\"button\"
                class=\"btn btn-outline-danger\"
                data-action=\"live#action\"
                data-live-action-param=\"decrease\"
            >
                ➖ Decrease
            </button>
            <button
                type=\"button\"
                class=\"btn btn-outline-secondary\"
                data-action=\"live#action\"
                data-live-action-param=\"reset\"
            >
                🔄 Reset
            </button>
            <button
                type=\"button\"
                class=\"btn btn-outline-success\"
                data-action=\"live#action\"
                data-live-action-param=\"increase\"
            >
                ➕ Increase
            </button>
        </div>
    </div>
</div>
", "components/LiveCounterComponent.html.twig", "/app/templates/components/LiveCounterComponent.html.twig");
    }
}
