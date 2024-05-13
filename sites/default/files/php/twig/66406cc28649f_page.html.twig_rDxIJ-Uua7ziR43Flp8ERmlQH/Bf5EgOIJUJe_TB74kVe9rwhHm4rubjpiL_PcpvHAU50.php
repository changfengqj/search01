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

/* themes/bootstrap_business/templates/page.html.twig */
class __TwigTemplate_d440fc4bbbc5919aba3d1faa32457003 extends Template
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
        // line 82
        echo "
";
        // line 83
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 83)) {
            // line 84
            echo "<!-- header -->
<header id=\"header\" role=\"banner\" class=\"clearfix\">
    <div class=\"container\">

        <!-- #header-inside -->

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <nav role=\"navigation\" class=\"clearfix\">
                        ";
            // line 93
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 93)) {
                // line 94
                echo "                        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
                echo "
                        ";
            } else {
                // line 96
                echo "                            ";
                if (($context["main_menu"] ?? null)) {
                    // line 97
                    echo "                            ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu"] ?? null), 97, $this->source), "html", null, true);
                    echo "
                            ";
                }
                // line 99
                echo "                        ";
            }
            // line 100
            echo "                    </nav>
                </div>
            </div>
    
        <!-- EOF: #header-inside -->

    </div>
</header>
<!-- EOF: #header --> 
";
        }
        // line 110
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
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrum", [], "any", false, false, true, 148)) {
            // line 149
            echo "      <div id=\"breadcrum\">  
        <div class=\"container\">
            ";
            // line 151
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrum", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 155
        echo "    <!-- #main-content -->
    <div id=\"main-content\">
        <div class=\"container\">
            
            <div class=\"row\">
                ";
        // line 160
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 160)) {
            // line 161
            echo "                <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_grid_class"] ?? null), 161, $this->source), "html", null, true);
            echo "\">  
                    <!--#sidebar-first-->
                    <section id=\"sidebar-first\" class=\"sidebar clearfix\">
                    ";
            // line 164
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
            echo "
                    </section>
                    <!--EOF:#sidebar-first-->
                </aside>
                ";
        }
        // line 169
        echo "
                <section class=\"";
        // line 170
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_grid_class"] ?? null), 170, $this->source), "html", null, true);
        echo "\">

                    <!-- #main -->
                    <div id=\"main\" class=\"clearfix\">
                    
                        ";
        // line 175
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "promoted", [], "any", false, false, true, 175)) {
            // line 176
            echo "                        <!-- #promoted -->
                            <div id=\"promoted\" class=\"clearfix\">
                                <div id=\"promoted-inside\" class=\"clearfix\">
                                ";
            // line 179
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "promoted", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
            echo "
                                </div>
                            </div>
                        <!-- EOF: #promoted -->
                        ";
        }
        // line 184
        echo "
                        <!-- EOF:#content-wrapper -->
                        <div id=\"content-wrapper\">

                            ";
        // line 188
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 188)) {
            // line 189
            echo "                                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 189), 189, $this->source), "html", null, true);
            echo "
                            ";
        }
        // line 191
        echo "
                        </div>
                        <!-- EOF:#content-wrapper -->

                    </div>
                    <!-- EOF:#main -->

                </section>
                
                ";
        // line 200
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 200)) {
            // line 201
            echo "                <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_grid_class"] ?? null), 201, $this->source), "html", null, true);
            echo "\">
                    <!--#sidebar-second-->
                    <section id=\"sidebar-second\" class=\"sidebar clearfix\">
                    ";
            // line 204
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 204), 204, $this->source), "html", null, true);
            echo "
                    </section>
                    <!--EOF:#sidebar-second-->
                </aside>
                ";
        }
        // line 209
        echo "        
            </div>

        </div>
    </div>
    <!-- EOF:#main-content -->
    
    ";
        // line 216
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_content", [], "any", false, false, true, 216)) {
            // line 217
            echo "    <!-- #bottom-content -->
    <div id=\"bottom-content\" class=\"clearfix\">
        <div class=\"container\">

            <!-- #bottom-content-inside -->
            <div id=\"bottom-content-inside\" class=\"clearfix\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                    ";
            // line 225
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_content", [], "any", false, false, true, 225), 225, $this->source), "html", null, true);
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
        // line 235
        echo "
</div>
<!-- EOF:#page -->

";
        // line 239
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 239) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 239)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 239)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 239))) {
            // line 240
            echo "<!-- #footer -->
<footer id=\"footer\" class=\"clearfix\">
    <div class=\"container\">
    
        <!-- #footer-inside -->
        <div id=\"footer-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    ";
            // line 248
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 248)) {
                // line 249
                echo "                    <div class=\"footer-area\">
                    ";
                // line 250
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 250), 250, $this->source), "html", null, true);
                echo "
                    </div>
                    ";
            }
            // line 253
            echo "                </div>
                
                <div class=\"col-md-3\">
                    ";
            // line 256
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 256)) {
                // line 257
                echo "                    <div class=\"footer-area\">
                    ";
                // line 258
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 258), 258, $this->source), "html", null, true);
                echo "
                    </div>
                    ";
            }
            // line 261
            echo "                </div>

                <div class=\"col-md-3\">
                    ";
            // line 264
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 264)) {
                // line 265
                echo "                    <div class=\"footer-area\">
                    ";
                // line 266
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 266), 266, $this->source), "html", null, true);
                echo "
                    </div>
                    ";
            }
            // line 269
            echo "                </div>

                <div class=\"col-md-3\">
                    ";
            // line 272
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 272)) {
                // line 273
                echo "                    <div class=\"footer-area\">
                    ";
                // line 274
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 274), 274, $this->source), "html", null, true);
                echo "
                    </div>
                    ";
            }
            // line 277
            echo "                </div>
            </div>
        </div>
        <!-- EOF: #footer-inside -->
    
    </div>
</footer> 
<!-- EOF #footer -->
";
        }
        // line 286
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
        // line 296
        if (($context["secondary_menu"] ?? null)) {
            // line 297
            echo "                    <nav id=\"secondary-menu\" class=\"navigation\" role=\"navigation\">
                    ";
            // line 298
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary_menu"] ?? null), 298, $this->source), "html", null, true);
            echo "
                    </nav>
                    ";
        }
        // line 300
        echo "                    

                    ";
        // line 302
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 302)) {
            // line 303
            echo "                    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 303), 303, $this->source), "html", null, true);
            echo "
                    ";
        }
        // line 305
        echo "
                    </div>
                    <!-- EOF: #subfooter-left -->
                </div>
            </div>
        </div>
        <!-- EOF: #subfooter-inside -->
    
    </div>
</footer>
<!-- EOF:#subfooter -->
<footer id=\"subfooter1\" class=\"clearfix\">
    <div class=\"container\">
            ";
        // line 318
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer", [], "any", false, false, true, 318)) {
            // line 319
            echo "                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer", [], "any", false, false, true, 319), 319, $this->source), "html", null, true);
            echo "
            ";
        }
        // line 321
        echo "    </div>
</footer>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "header_top_left_grid_class", "header_top_right_grid_class", "main_menu", "sidebar_grid_class", "main_grid_class", "secondary_menu"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/bootstrap_business/templates/page.html.twig";
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
        return array (  562 => 321,  556 => 319,  554 => 318,  539 => 305,  533 => 303,  531 => 302,  527 => 300,  521 => 298,  518 => 297,  516 => 296,  504 => 286,  493 => 277,  487 => 274,  484 => 273,  482 => 272,  477 => 269,  471 => 266,  468 => 265,  466 => 264,  461 => 261,  455 => 258,  452 => 257,  450 => 256,  445 => 253,  439 => 250,  436 => 249,  434 => 248,  424 => 240,  422 => 239,  416 => 235,  403 => 225,  393 => 217,  391 => 216,  382 => 209,  374 => 204,  367 => 201,  365 => 200,  354 => 191,  348 => 189,  346 => 188,  340 => 184,  332 => 179,  327 => 176,  325 => 175,  317 => 170,  314 => 169,  306 => 164,  299 => 161,  297 => 160,  290 => 155,  283 => 151,  279 => 149,  276 => 148,  263 => 138,  253 => 130,  251 => 129,  246 => 126,  235 => 118,  227 => 112,  225 => 111,  222 => 110,  210 => 100,  207 => 99,  201 => 97,  198 => 96,  192 => 94,  190 => 93,  179 => 84,  177 => 83,  174 => 82,  163 => 73,  155 => 68,  148 => 65,  146 => 64,  143 => 63,  135 => 58,  128 => 55,  126 => 54,  116 => 46,  114 => 45,  111 => 44,  99 => 34,  93 => 31,  89 => 29,  87 => 28,  82 => 25,  76 => 22,  73 => 21,  71 => 20,  66 => 17,  60 => 14,  57 => 13,  55 => 12,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bootstrap_business/templates/page.html.twig", "/var/www/html/themes/bootstrap_business/templates/page.html.twig");
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
