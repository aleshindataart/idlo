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

/* themes/contrib/flexi_style/templates/node/node.html.twig */
class __TwigTemplate_296fd9ab19505fab5714d9bc2b924abf extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "
";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("flexi_style/node"), "html", null, true);
        echo "


";
        // line 76
        $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 78
($context["node"] ?? null), "bundle", [], "any", false, false, true, 78), 78, $this->source))), ((        // line 79
($context["layout"] ?? null)) ? ("grid-full") : ("")), ((twig_get_attribute($this->env, $this->source,         // line 80
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 80)) ? ("node--promoted") : ("")), ((twig_get_attribute($this->env, $this->source,         // line 81
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 81)) ? ("node--sticky") : ("")), (( !twig_get_attribute($this->env, $this->source,         // line 82
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 82)) ? ("node--unpublished") : ("")), ((        // line 83
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 83, $this->source)))) : (""))];
        // line 86
        echo "
<article";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 87), 87, $this->source), "html", null, true);
        echo ">
  ";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 88, $this->source), "html", null, true);
        echo "
  ";
        // line 89
        if ((($context["label"] ?? null) &&  !($context["page"] ?? null))) {
            // line 90
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 90, $this->source), "html", null, true);
            echo ">
      <a href=\"";
            // line 91
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 91, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 91, $this->source), "html", null, true);
            echo "</a>
    </h2>
  ";
        }
        // line 94
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 94, $this->source), "html", null, true);
        echo "

  ";
        // line 96
        if (($context["display_submitted"] ?? null)) {
            // line 97
            echo "    <div class=\"flex-article-auth clearfix\">
      ";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 98, $this->source), "html", null, true);
            echo "
      <div";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", ["d-inline-block", "v-align-top"], "method", false, false, true, 99), 99, $this->source), "html", null, true);
            echo ">
        ";
            // line 100
            echo t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
            // line 101
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 101, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 105
        echo "  <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["flex-article"], "method", false, false, true, 105), 105, $this->source), "html", null, true);
        echo ">
    ";
        // line 106
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 106, $this->source), "html", null, true);
        echo "
  </div>
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "layout", "view_mode", "attributes", "title_prefix", "label", "page", "title_attributes", "url", "title_suffix", "display_submitted", "author_picture", "author_attributes", "author_name", "date", "metadata", "content_attributes", "content"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/flexi_style/templates/node/node.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  116 => 106,  111 => 105,  103 => 101,  101 => 100,  97 => 99,  93 => 98,  90 => 97,  88 => 96,  82 => 94,  74 => 91,  69 => 90,  67 => 89,  63 => 88,  59 => 87,  56 => 86,  54 => 83,  53 => 82,  52 => 81,  51 => 80,  50 => 79,  49 => 78,  48 => 76,  42 => 72,  39 => 71,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/flexi_style/templates/node/node.html.twig", "/var/www/html/web/themes/contrib/flexi_style/templates/node/node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 76, "if" => 89, "trans" => 100);
        static $filters = array("escape" => 72, "clean_class" => 78);
        static $functions = array("attach_library" => 72);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['escape', 'clean_class'],
                ['attach_library']
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
