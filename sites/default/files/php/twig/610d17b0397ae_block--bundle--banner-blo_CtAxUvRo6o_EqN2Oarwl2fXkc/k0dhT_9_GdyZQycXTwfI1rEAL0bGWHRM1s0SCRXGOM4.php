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

/* core/profiles/demo_umami/themes/umami/templates/components/banner-block/block--bundle--banner-block.html.twig */
class __TwigTemplate_33dbf3df9f6dd23fa9b65540824389d358923b2092e6b171f3e06aa3d3d8307c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 31
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 31), 31, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 32
($context["plugin_id"] ?? null), 32, $this->source))), 3 => "cover-image"];
        // line 36
        echo "
";
        // line 37
        $context["background_image"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_image", [], "any", false, false, true, 37)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 37), "entity", [], "any", false, false, true, 37), "uri", [], "any", false, false, true, 37), "value", [], "any", false, false, true, 37), 37, $this->source)]);
        // line 38
        echo "
<div";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 39), 39, $this->source), "html", null, true);
        echo " style=\"background-image: url(";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["background_image"] ?? null), 39, $this->source), "html", null, true);
        echo ")\">
  <div class=\"block-inner\">
    ";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 41, $this->source), "html", null, true);
        echo "
    ";
        // line 42
        if (($context["label"] ?? null)) {
            // line 43
            echo "      <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 43, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 43, $this->source), "html", null, true);
            echo "</h2>
    ";
        }
        // line 45
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 45, $this->source), "html", null, true);
        echo "
    ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "  </div>
</div>
";
    }

    // line 46
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_image", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "
      <div class=\"summary\">
        ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 49, $this->source), "field_media_image"), "html", null, true);
        echo "
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "core/profiles/demo_umami/themes/umami/templates/components/banner-block/block--bundle--banner-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 49,  90 => 47,  86 => 46,  80 => 52,  78 => 46,  73 => 45,  65 => 43,  63 => 42,  59 => 41,  52 => 39,  49 => 38,  47 => 37,  44 => 36,  42 => 32,  41 => 31,  40 => 29,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 */
#}
{%
  set classes = [
    'block',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
    'cover-image',
  ]
%}

{% set background_image = file_url(content.field_media_image[0]['#media'].field_media_image.entity.uri.value) %}

<div{{ attributes.addClass(classes) }} style=\"background-image: url({{ background_image }})\">
  <div class=\"block-inner\">
    {{ title_prefix }}
    {% if label %}
      <h2{{ title_attributes }}>{{ label }}</h2>
    {% endif %}
    {{ title_suffix }}
    {% block content %}
      {{ content.field_media_image }}
      <div class=\"summary\">
        {{ content|without('field_media_image') }}
      </div>
    {% endblock %}
  </div>
</div>
", "core/profiles/demo_umami/themes/umami/templates/components/banner-block/block--bundle--banner-block.html.twig", "/Users/harish.kumar/Documents/Projects/composer_site/web/core/profiles/demo_umami/themes/umami/templates/components/banner-block/block--bundle--banner-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29, "if" => 42, "block" => 46);
        static $filters = array("clean_class" => 31, "escape" => 39, "without" => 49);
        static $functions = array("file_url" => 37);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 'without'],
                ['file_url']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
