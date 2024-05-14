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

/* themes/contrib/flexi_style/templates/menu/menu--main.html.twig */
class __TwigTemplate_85a543ffcaae2b4f0bf998a9c3dcf2c6 extends Template
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
        // line 23
        echo "
";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("flexi_style/navigation"), "html", null, true);
        echo "

";
        // line 26
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 27
        echo "
";
        // line 32
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["menu"], "method", false, false, true, 32);
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 33, $context, $this->getSourceContext()));
        echo "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "menu_level", "loop"]);    }

    // line 35
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 36
            echo "  ";
            $context["primary_nav_level"] = ("menu-level-" . (($context["menu_level"] ?? null) + 1));
            // line 37
            echo "  ";
            $macros["menus"] = $this;
            // line 38
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 39
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 40
                    echo "      <ul ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["menu", "primary-menu", ($context["primary_nav_level"] ?? null)], "method", false, false, true, 40), 40, $this->source), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 42
                    echo "      <ul ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["submenu", "shadow", ($context["primary_nav_level"] ?? null)], "method", false, false, true, 42), 42, $this->source), "html", null, true);
                    echo ">
    ";
                }
                // line 44
                echo "      ";
                $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["primary_nav_level"] ?? null)], "method", false, false, true, 44);
                // line 45
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 46
                    echo "        ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 46), "isRouted", [], "any", false, false, true, 46) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 46), "routeName", [], "any", false, false, true, 46) == "<nolink>"))) {
                        // line 47
                        echo "          ";
                        $context["menu_item_type"] = "nolink";
                        // line 48
                        echo "        ";
                    } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 48), "isRouted", [], "any", false, false, true, 48) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 48), "routeName", [], "any", false, false, true, 48) == "<button>"))) {
                        // line 49
                        echo "          ";
                        $context["menu_item_type"] = "button";
                        // line 50
                        echo "        ";
                    } else {
                        // line 51
                        echo "          ";
                        $context["menu_item_type"] = "link";
                        // line 52
                        echo "        ";
                    }
                    // line 53
                    echo "        ";
                    $context["item_classes"] = ["menu-item", ("menu-item-" . $this->sandbox->ensureToStringAllowed(                    // line 55
($context["menu_item_type"] ?? null), 55, $this->source)), ("menu-item-level-" . (                    // line 56
($context["menu_level"] ?? null) + 1)), ((twig_get_attribute($this->env, $this->source,                     // line 57
$context["item"], "in_active_trail", [], "any", false, false, true, 57)) ? ("menu-item-active") : ("")), ((twig_get_attribute($this->env, $this->source,                     // line 58
$context["item"], "below", [], "any", false, false, true, 58)) ? ("menu-item-has-children") : (""))];
                    // line 61
                    echo "        ";
                    $context["link_classes"] = ["menu-link", ("menu-link-" . $this->sandbox->ensureToStringAllowed(                    // line 63
($context["menu_item_type"] ?? null), 63, $this->source)), ("menu-link-level-" . (                    // line 64
($context["menu_level"] ?? null) + 1)), ((twig_get_attribute($this->env, $this->source,                     // line 65
$context["item"], "in_active_trail", [], "any", false, false, true, 65)) ? ("menu-link-active") : ("")), ((twig_get_attribute($this->env, $this->source,                     // line 66
$context["item"], "below", [], "any", false, false, true, 66)) ? ("menu-link-has-children") : (""))];
                    // line 69
                    echo "        <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 69), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 69), 69, $this->source), "html", null, true);
                    echo ">
          ";
                    // line 70
                    $context["aria_id"] = \Drupal\Component\Utility\Html::getId((($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 70), 70, $this->source) . "-submenu-") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 70), 70, $this->source)));
                    // line 71
                    echo "
          ";
                    // line 72
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 72), 72, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 72), 72, $this->source), ["class" => ($context["link_classes"] ?? null)]), "html", null, true);
                    echo "

          ";
                    // line 74
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 74)) {
                        // line 75
                        echo "            ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 75), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 75, $context, $this->getSourceContext()));
                        echo "
          ";
                    }
                    // line 77
                    echo "
        </li>
      ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/flexi_style/templates/menu/menu--main.html.twig";
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
        return array (  196 => 80,  180 => 77,  174 => 75,  172 => 74,  167 => 72,  164 => 71,  162 => 70,  157 => 69,  155 => 66,  154 => 65,  153 => 64,  152 => 63,  150 => 61,  148 => 58,  147 => 57,  146 => 56,  145 => 55,  143 => 53,  140 => 52,  137 => 51,  134 => 50,  131 => 49,  128 => 48,  125 => 47,  122 => 46,  104 => 45,  101 => 44,  95 => 42,  89 => 40,  86 => 39,  83 => 38,  80 => 37,  77 => 36,  62 => 35,  54 => 33,  52 => 32,  49 => 27,  47 => 26,  42 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/flexi_style/templates/menu/menu--main.html.twig", "/var/www/html/web/themes/contrib/flexi_style/templates/menu/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 26, "set" => 32, "macro" => 35, "if" => 38, "for" => 45);
        static $filters = array("escape" => 24, "clean_id" => 70);
        static $functions = array("attach_library" => 24, "link" => 72);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set', 'macro', 'if', 'for'],
                ['escape', 'clean_id'],
                ['attach_library', 'link']
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
