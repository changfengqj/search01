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

/* themes/bootstrap_business/templates/page--front.html.twig */
class __TwigTemplate_f96b4393c6ff3f3a6472ad8c0a6186dc extends Template
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
        // line 1
        echo "<div id=\"toTop\"><span class=\"fa fa-arrow-up\"></span></div>

";
        // line 3
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header_first", [], "any", false, false, true, 3) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header_second", [], "any", false, false, true, 3)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header_third", [], "any", false, false, true, 3))) {
            // line 4
            echo "<!-- #pre-header -->
<div id=\"pre-header\" class=\"clearfix\">
    <div class=\"container\">

        <!-- #pre-header-inside -->
        <div id=\"pre-header-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header_first", [], "any", false, false, true, 12)) {
                // line 13
                echo "                    <div class=\"pre-header-area\">
                    ";
                // line 14
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header_first", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "
                    </div>
                    ";
            }
            // line 17
            echo "                </div>
                
                <div class=\"col-md-4\">
                    ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header_second", [], "any", false, false, true, 20)) {
                // line 21
                echo "                    <div class=\"pre-header-area\">
                    ";
                // line 22
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header_second", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                echo "
                    </div>
                    ";
            }
            // line 25
            echo "                </div>

                <div class=\"col-md-4\">
                    ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header_third", [], "any", false, false, true, 28)) {
                // line 29
                echo "
                    <div class=\"pre-header-area\">
                    ";
                // line 31
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header_third", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                echo "
                    </div>
                    ";
            }
            // line 34
            echo "                </div>
            </div>
        </div>
        <!-- EOF: #pre-header-inside -->

    </div>
    <div class=\"toggle-control\"><a href=\"javascript:showPreHeader()\"><span class=\"glyphicon glyphicon-plus\"></span></a></div>
</div>
<!-- EOF: #pre-header -->    
";
        }
        // line 44
        echo "
";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_left", [], "any", false, false, true, 45) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_right", [], "any", false, false, true, 45))) {
            // line 46
            echo "<!-- #header-top -->
<div id=\"header-top\" class=\"clearfix\">
    <div class=\"container\">

        <!-- #header-top-inside -->
        <div id=\"header-top-inside\" class=\"clearfix\">
            <div class=\"row\">
            
            ";
            // line 54
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_left", [], "any", false, false, true, 54)) {
                // line 55
                echo "            <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_left_grid_class"] ?? null), 55, $this->source), "html", null, true);
                echo "\">
                <!-- #header-top-left -->
                <div id=\"header-top-left\" class=\"clearfix\">
                    ";
                // line 58
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_left", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                echo "
                </div>
                <!-- EOF:#header-top-left -->
            </div>
            ";
            }
            // line 63
            echo "            
            ";
            // line 64
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_right", [], "any", false, false, true, 64)) {
                // line 65
                echo "            <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_right_grid_class"] ?? null), 65, $this->source), "html", null, true);
                echo "\">
                <!-- #header-top-right -->
                <div id=\"header-top-right\" class=\"clearfix\">
                    ";
                // line 68
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_right", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                echo "
                </div>
                <!-- EOF:#header-top-right -->
            </div>
            ";
            }
            // line 73
            echo "            
            </div>
        </div>
        <!-- EOF: #header-top-inside -->
    </div>
</div>
<!-- EOF: #header-top -->    
";
        }
        // line 81
        echo "
";
        // line 82
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 82)) {
            // line 83
            echo "<!-- header -->
<header id=\"header\" role=\"banner\" class=\"clearfix\">
    <div class=\"container\">

        <!-- #header-inside -->

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <nav role=\"navigation\" class=\"clearfix\">
                        ";
            // line 92
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 92)) {
                // line 93
                echo "                        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                echo "
                        ";
            } else {
                // line 95
                echo "                            ";
                if (($context["main_menu"] ?? null)) {
                    // line 96
                    echo "                            ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu"] ?? null), 96, $this->source), "html", null, true);
                    echo "
                            ";
                }
                // line 98
                echo "                        ";
            }
            // line 99
            echo "                    </nav>
                </div>
            </div>
    
        <!-- EOF: #header-inside -->

    </div>
</header>
<!-- EOF: #header --> 
";
        }
        // line 109
        echo "

";
        // line 111
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 111)) {
            // line 112
            echo "<!-- #banner -->
<div id=\"banner\">
        <!-- #banner-inside -->
        <div id=\"banner-inside\" class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                ";
            // line 118
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
            echo "
                </div>
            </div>
        </div>
        <!-- EOF: #banner-inside -->        
</div>
<!-- EOF:#banner -->
";
        }
        // line 126
        echo "
<!-- #page -->
<div id=\"page\" class=\"clearfix\">
    ";
        // line 129
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 129)) {
            // line 130
            echo "    <!-- #top-content -->
    <div id=\"top-content\" class=\"clearfix\">
        <div class=\"container\">

            <!-- #top-content-inside -->
            <div id=\"top-content-inside\" class=\"clearfix\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                    ";
            // line 138
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
            echo "
                    </div>
                </div>
            </div>
            <!-- EOF:#top-content-inside -->

        </div>
    </div>
    <!-- EOF: #top-content -->
    ";
        }
        // line 148
        echo "
    <!-- #main-content -->
    <div id=\"main-content\">
\t\t\t";
        // line 151
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front_gonggao", [], "any", false, false, true, 151)) {
            // line 152
            echo "                <div id=\"front_gonggao\" class=\"clearfix\">
                    <div class=\"container\">
                        ";
            // line 154
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front_gonggao", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        // line 158
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front_content1", [], "any", false, false, true, 158)) {
            // line 159
            echo "\t\t\t\t<div id=\"front_content1\" class=\"front_content\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t";
            // line 161
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front_content1", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 165
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front_content2", [], "any", false, false, true, 165)) {
            // line 166
            echo "\t\t\t\t<div id=\"front_content2\" class=\"front_content\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t";
            // line 168
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front_content2", [], "any", false, false, true, 168), 168, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 172
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front_content3", [], "any", false, false, true, 172)) {
            // line 173
            echo "\t\t\t\t<div id=\"front_content3\" class=\"front_content\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t";
            // line 175
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front_content3", [], "any", false, false, true, 175), 175, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 179
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front_content31", [], "any", false, false, true, 179)) {
            // line 180
            echo "                <div id=\"front_content31\" class=\"front_content\">
                    <div class=\"container\">
                        ";
            // line 182
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front_content31", [], "any", false, false, true, 182), 182, $this->source), "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        // line 186
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front_content4", [], "any", false, false, true, 186)) {
            // line 187
            echo "\t\t\t\t<div id=\"front_content4\" class=\"front_content\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t";
            // line 189
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front_content4", [], "any", false, false, true, 189), 189, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 193
        echo "            
\t\t\t";
        // line 194
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front_content5", [], "any", false, false, true, 194)) {
            // line 195
            echo "\t\t\t\t<div id=\"front_content5\" class=\"front_content\">
                    <div class=\"container\">
\t\t\t\t\t   ";
            // line 197
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front_content5", [], "any", false, false, true, 197), 197, $this->source), "html", null, true);
            echo "
                    </div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 201
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front_content6", [], "any", false, false, true, 201)) {
            // line 202
            echo "                <div id=\"front_content6\" class=\"front_content\">
                    <div class=\"container\">
                        ";
            // line 204
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front_content6", [], "any", false, false, true, 204), 204, $this->source), "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        // line 208
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front_content7", [], "any", false, false, true, 208)) {
            // line 209
            echo "                <div id=\"front_content7\" class=\"front_content\">
                    <div class=\"container\">
                        ";
            // line 211
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front_content7", [], "any", false, false, true, 211), 211, $this->source), "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        // line 215
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front_content8", [], "any", false, false, true, 215)) {
            // line 216
            echo "                <div id=\"front_content8\" class=\"front_content\">
                    <div class=\"container\">
                        ";
            // line 218
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front_content8", [], "any", false, false, true, 218), 218, $this->source), "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        // line 222
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front_content9", [], "any", false, false, true, 222)) {
            // line 223
            echo "                <div id=\"front_content9\" class=\"front_content\">
                    <div class=\"container\">
                        ";
            // line 225
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front_content9", [], "any", false, false, true, 225), 225, $this->source), "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        // line 229
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front_content10", [], "any", false, false, true, 229)) {
            // line 230
            echo "                <div id=\"front_content10\" class=\"front_content\">
                    <div class=\"container\">
                        ";
            // line 232
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front_content10", [], "any", false, false, true, 232), 232, $this->source), "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        // line 236
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front_content11", [], "any", false, false, true, 236)) {
            // line 237
            echo "                <div id=\"front_content11\" class=\"front_content\">
                    <div class=\"container\">
                        ";
            // line 239
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front_content11", [], "any", false, false, true, 239), 239, $this->source), "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        // line 243
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front_content12", [], "any", false, false, true, 243)) {
            // line 244
            echo "                <div id=\"front_content12\" class=\"front_content\">
                    <div class=\"container\">
                        ";
            // line 246
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front_content12", [], "any", false, false, true, 246), 246, $this->source), "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        // line 250
        echo "    </div>
    <!-- EOF:#main-content -->
    
    ";
        // line 253
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_content", [], "any", false, false, true, 253)) {
            // line 254
            echo "    <!-- #bottom-content -->
    <div id=\"bottom-content\" class=\"clearfix\">
        <div class=\"container\">

            <!-- #bottom-content-inside -->
            <div id=\"bottom-content-inside\" class=\"clearfix\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                    ";
            // line 262
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_content", [], "any", false, false, true, 262), 262, $this->source), "html", null, true);
            echo "
                    </div>
                </div>
            </div>
            <!-- EOF:#bottom-content-inside -->

        </div>
    </div>
    <!-- EOF: #bottom-content -->
    ";
        }
        // line 272
        echo "
</div>
<!-- EOF:#page -->

";
        // line 276
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 276) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 276)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 276)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 276))) {
            // line 277
            echo "<!-- #footer -->
<footer id=\"footer\" class=\"clearfix\">
    <div class=\"container\">
    
        <!-- #footer-inside -->
        <div id=\"footer-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    ";
            // line 285
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 285)) {
                // line 286
                echo "                    <div class=\"footer-area\">
                    ";
                // line 287
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 287), 287, $this->source), "html", null, true);
                echo "
                    </div>
                    ";
            }
            // line 290
            echo "                </div>
                
                <div class=\"col-md-3\">
                    ";
            // line 293
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 293)) {
                // line 294
                echo "                    <div class=\"footer-area\">
                    ";
                // line 295
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 295), 295, $this->source), "html", null, true);
                echo "
                    </div>
                    ";
            }
            // line 298
            echo "                </div>

                <div class=\"col-md-3\">
                    ";
            // line 301
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 301)) {
                // line 302
                echo "                    <div class=\"footer-area\">
                    ";
                // line 303
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 303), 303, $this->source), "html", null, true);
                echo "
                    </div>
                    ";
            }
            // line 306
            echo "                </div>

                <div class=\"col-md-3\">
                    ";
            // line 309
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 309)) {
                // line 310
                echo "                    <div class=\"footer-area\">
                    ";
                // line 311
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 311), 311, $this->source), "html", null, true);
                echo "
                    </div>
                    ";
            }
            // line 314
            echo "                </div>
            </div>
        </div>
        <!-- EOF: #footer-inside -->
    
    </div>
</footer> 
<!-- EOF #footer -->
";
        }
        // line 323
        echo "
<footer id=\"subfooter\" class=\"clearfix\">
    <div class=\"container\">
        
        <!-- #subfooter-inside -->
        <div id=\"subfooter-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- #subfooter-left -->
                    <div class=\"subfooter-area\">
                    ";
        // line 333
        if (($context["secondary_menu"] ?? null)) {
            // line 334
            echo "                    <nav id=\"secondary-menu\" class=\"navigation\" role=\"navigation\">
                    ";
            // line 335
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary_menu"] ?? null), 335, $this->source), "html", null, true);
            echo "
                    </nav>
                    ";
        }
        // line 337
        echo "                    
                    ";
        // line 338
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 338)) {
            // line 339
            echo "                    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 339), 339, $this->source), "html", null, true);
            echo "
                    ";
        }
        // line 341
        echo "
                    </div>
                    <!-- EOF: #subfooter-left -->
                </div>
            </div>
        </div>
        <!-- EOF: #subfooter-inside -->
    </div>
</footer>
<footer id=\"subfooter1\" class=\"clearfix\">
    <div class=\"container\">
            ";
        // line 352
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer", [], "any", false, false, true, 352)) {
            // line 353
            echo "                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer", [], "any", false, false, true, 353), 353, $this->source), "html", null, true);
            echo "
            ";
        }
        // line 355
        echo "    </div>
</footer>
<!-- EOF:#subfooter -->";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "header_top_left_grid_class", "header_top_right_grid_class", "main_menu", "secondary_menu"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/bootstrap_business/templates/page--front.html.twig";
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
        return array (  651 => 355,  645 => 353,  643 => 352,  630 => 341,  624 => 339,  622 => 338,  619 => 337,  613 => 335,  610 => 334,  608 => 333,  596 => 323,  585 => 314,  579 => 311,  576 => 310,  574 => 309,  569 => 306,  563 => 303,  560 => 302,  558 => 301,  553 => 298,  547 => 295,  544 => 294,  542 => 293,  537 => 290,  531 => 287,  528 => 286,  526 => 285,  516 => 277,  514 => 276,  508 => 272,  495 => 262,  485 => 254,  483 => 253,  478 => 250,  471 => 246,  467 => 244,  464 => 243,  457 => 239,  453 => 237,  450 => 236,  443 => 232,  439 => 230,  436 => 229,  429 => 225,  425 => 223,  422 => 222,  415 => 218,  411 => 216,  408 => 215,  401 => 211,  397 => 209,  394 => 208,  387 => 204,  383 => 202,  380 => 201,  373 => 197,  369 => 195,  367 => 194,  364 => 193,  357 => 189,  353 => 187,  350 => 186,  343 => 182,  339 => 180,  336 => 179,  329 => 175,  325 => 173,  322 => 172,  315 => 168,  311 => 166,  308 => 165,  301 => 161,  297 => 159,  294 => 158,  287 => 154,  283 => 152,  281 => 151,  276 => 148,  263 => 138,  253 => 130,  251 => 129,  246 => 126,  235 => 118,  227 => 112,  225 => 111,  221 => 109,  209 => 99,  206 => 98,  200 => 96,  197 => 95,  191 => 93,  189 => 92,  178 => 83,  176 => 82,  173 => 81,  163 => 73,  155 => 68,  148 => 65,  146 => 64,  143 => 63,  135 => 58,  128 => 55,  126 => 54,  116 => 46,  114 => 45,  111 => 44,  99 => 34,  93 => 31,  89 => 29,  87 => 28,  82 => 25,  76 => 22,  73 => 21,  71 => 20,  66 => 17,  60 => 14,  57 => 13,  55 => 12,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bootstrap_business/templates/page--front.html.twig", "/var/www/html/themes/bootstrap_business/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3);
        static $filters = array("escape" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
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
