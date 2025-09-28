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

/* components/Toast.html.twig */
class __TwigTemplate_50b88080bc1b14c2eb5a933086f36a1c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Toast.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Toast.html.twig"));

        // line 1
        yield "<div";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "defaults", [["class" => "position-fixed top-0 end-0 p-3"]], "method", false, false, false, 1), "html", null, true);
        // line 3
        yield ">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["toasts"]) || array_key_exists("toasts", $context) ? $context["toasts"] : (function () { throw new RuntimeError('Variable "toasts" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["toast"]) {
            // line 5
            yield "        <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["toast"], "type", [], "any", false, false, false, 5), "html", null, true);
            yield " alert-dismissible fade show mb-2\" role=\"alert\">
            <strong>
                ";
            // line 7
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["toast"], "type", [], "any", false, false, false, 7) == "success")) {
                // line 8
                yield "                    ✅ Success!
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 9
$context["toast"], "type", [], "any", false, false, false, 9) == "danger")) {
                // line 10
                yield "                    ❌ Error!
                ";
            } else {
                // line 12
                yield "                    ℹ️ ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["toast"], "type", [], "any", false, false, false, 12)), "html", null, true);
                yield "!
                ";
            }
            // line 14
            yield "            </strong>
            ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["toast"], "message", [], "any", false, false, false, 15), "html", null, true);
            yield "
            <button
                type=\"button\"
                class=\"btn-close\"
                data-action=\"live#action\"
                data-live-action-param=\"removeToast\"
                data-live-id-param=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["toast"], "id", [], "any", false, false, false, 21), "html", null, true);
            yield "\"
                aria-label=\"Close\">
            </button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['toast'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "
    ";
        // line 27
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["toasts"]) || array_key_exists("toasts", $context) ? $context["toasts"] : (function () { throw new RuntimeError('Variable "toasts" does not exist.', 27, $this->source); })())) > 1)) {
            // line 28
            yield "        <div class=\"text-center mt-2\">
            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" data-action=\"live#action\" data-live-action-param=\"clearAll\">
                Clear All
            </button>
        </div>
    ";
        }
        // line 34
        yield "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/Toast.html.twig";
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
        return array (  117 => 34,  109 => 28,  107 => 27,  104 => 26,  93 => 21,  84 => 15,  81 => 14,  75 => 12,  71 => 10,  69 => 9,  66 => 8,  64 => 7,  58 => 5,  54 => 4,  51 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div{{ attributes.defaults({
    class: 'position-fixed top-0 end-0 p-3',
}) }}>
    {% for toast in toasts %}
        <div class=\"alert alert-{{ toast.type }} alert-dismissible fade show mb-2\" role=\"alert\">
            <strong>
                {% if toast.type == 'success' %}
                    ✅ Success!
                {% elseif toast.type == 'danger' %}
                    ❌ Error!
                {% else %}
                    ℹ️ {{ toast.type|title }}!
                {% endif %}
            </strong>
            {{ toast.message }}
            <button
                type=\"button\"
                class=\"btn-close\"
                data-action=\"live#action\"
                data-live-action-param=\"removeToast\"
                data-live-id-param=\"{{ toast.id }}\"
                aria-label=\"Close\">
            </button>
        </div>
    {% endfor %}

    {% if toasts|length > 1 %}
        <div class=\"text-center mt-2\">
            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" data-action=\"live#action\" data-live-action-param=\"clearAll\">
                Clear All
            </button>
        </div>
    {% endif %}
</div>", "components/Toast.html.twig", "/app/templates/components/Toast.html.twig");
    }
}
