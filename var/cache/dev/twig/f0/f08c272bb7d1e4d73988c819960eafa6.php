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

/* @LiveComponent/deferred.html.twig */
class __TwigTemplate_47cce250119428309ed35e4244598206 extends Template
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
            'loadingContent' => [$this, 'block_loadingContent'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@LiveComponent/deferred.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@LiveComponent/deferred.html.twig"));

        // line 1
        yield "<";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["loadingTag"]) || array_key_exists("loadingTag", $context) ? $context["loadingTag"] : (function () { throw new RuntimeError('Variable "loadingTag" does not exist.', 1, $this->source); })()), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "
    ";
        // line 2
        if (("lazy" == (isset($context["loading"]) || array_key_exists("loading", $context) ? $context["loading"] : (function () { throw new RuntimeError('Variable "loading" does not exist.', 2, $this->source); })()))) {
            // line 3
            yield "        data-action=\"live:appear->live#\$render\" loading=\"lazy\"
    ";
        } else {
            // line 5
            yield "        data-action=\"live:connect->live#\$render\"
    ";
        }
        // line 7
        yield ">
    ";
        // line 8
        yield from $this->unwrap()->yieldBlock('loadingContent', $context, $blocks);
        // line 18
        yield "</";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["loadingTag"]) || array_key_exists("loadingTag", $context) ? $context["loadingTag"] : (function () { throw new RuntimeError('Variable "loadingTag" does not exist.', 18, $this->source); })()), "html", null, true);
        yield ">
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_loadingContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "loadingContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "loadingContent"));

        // line 9
        yield "        ";
        if (((isset($context["loadingTemplate"]) || array_key_exists("loadingTemplate", $context) ? $context["loadingTemplate"] : (function () { throw new RuntimeError('Variable "loadingTemplate" does not exist.', 9, $this->source); })()) != null)) {
            // line 10
            yield "            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, (isset($context["loadingTemplate"]) || array_key_exists("loadingTemplate", $context) ? $context["loadingTemplate"] : (function () { throw new RuntimeError('Variable "loadingTemplate" does not exist.', 10, $this->source); })()));
            yield "
        ";
        } else {
            // line 12
            yield "            ";
            $macros["_v0"] = $this->load((isset($context["componentTemplate"]) || array_key_exists("componentTemplate", $context) ? $context["componentTemplate"] : (function () { throw new RuntimeError('Variable "componentTemplate" does not exist.', 12, $this->source); })()), 12)->unwrap();
            // line 13
            yield "            ";
            if ($macros["_v0"]->hasMacro("macro_placeholder", $context)) {
                // line 14
                yield "                ";
                yield $macros["_v0"]->getTemplateForMacro("macro_placeholder", $context, 14, $this->getSourceContext())->macro_placeholder(...[((array_key_exists("__props", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["__props"]) || array_key_exists("__props", $context) ? $context["__props"] : (function () { throw new RuntimeError('Variable "__props" does not exist.', 14, $this->source); })()))) : (""))]);
                yield "
            ";
            }
            // line 16
            yield "        ";
        }
        // line 17
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@LiveComponent/deferred.html.twig";
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
        return array (  122 => 17,  119 => 16,  113 => 14,  110 => 13,  107 => 12,  101 => 10,  98 => 9,  85 => 8,  71 => 18,  69 => 8,  66 => 7,  62 => 5,  58 => 3,  56 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<{{ loadingTag }} {{ attributes }}
    {% if 'lazy' == loading %}
        data-action=\"live:appear->live#\$render\" loading=\"lazy\"
    {% else %}
        data-action=\"live:connect->live#\$render\"
    {% endif %}
>
    {% block loadingContent %}
        {% if loadingTemplate != null %}
            {{ include(loadingTemplate) }}
        {% else %}
            {% from componentTemplate import placeholder %}
            {% if placeholder is defined %}
                {{ placeholder(__props|default) }}
            {% endif %}
        {% endif %}
    {% endblock %}
</{{ loadingTag }}>
", "@LiveComponent/deferred.html.twig", "/app/vendor/symfony/ux-live-component/templates/deferred.html.twig");
    }
}
