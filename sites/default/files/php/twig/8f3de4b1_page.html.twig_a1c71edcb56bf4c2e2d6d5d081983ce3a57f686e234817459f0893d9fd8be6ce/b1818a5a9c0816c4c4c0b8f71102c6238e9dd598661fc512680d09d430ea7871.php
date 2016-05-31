<?php

/* themes/bootstrap_business/templates/page.html.twig */
class __TwigTemplate_5e15069d974918d6944a712f0c6b7ad54ca933dcf7b15c424564461cb84285c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 3);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div id=\"toTop\"><span class=\"glyphicon glyphicon-chevron-up\"></span></div>

";
        // line 3
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_left", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_right", array()))) {
            // line 4
            echo "<!-- #header-top -->
<div id=\"header-top\" class=\"clearfix\">
    <div class=\"container\">

        <!-- #header-top-inside -->
        <div id=\"header-top-inside\" class=\"clearfix\">
            <div class=\"row\">
            
            ";
            // line 12
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_left", array())) {
                // line 13
                echo "            <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_top_left_grid_class"]) ? $context["header_top_left_grid_class"] : null), "html", null, true));
                echo "\">
                <!-- #header-top-left -->
                <div id=\"header-top-left\" class=\"clearfix\">
                    ";
                // line 16
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_left", array()), "html", null, true));
                echo "
                </div>
                <!-- EOF:#header-top-left -->
            </div>
            ";
            }
            // line 21
            echo "            
            ";
            // line 22
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_right", array())) {
                // line 23
                echo "            <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_top_right_grid_class"]) ? $context["header_top_right_grid_class"] : null), "html", null, true));
                echo "\">
                <!-- #header-top-right -->
                <div id=\"header-top-right\" class=\"clearfix\">
                    ";
                // line 26
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_right", array()), "html", null, true));
                echo "
                </div>
                <!-- EOF:#header-top-right -->
            </div>
            ";
            }
            // line 31
            echo "            
            </div>
        </div>
        <!-- EOF: #header-top-inside -->

    </div>
</div>
<!-- EOF: #header-top -->    
";
        }
        // line 40
        echo "
";
        // line 41
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 42
            echo "<!-- header -->
<header id=\"header\" role=\"banner\" class=\"clearfix\">
    <div class=\"container\">

        <!-- #header-inside -->
        <div id=\"header-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
            // line 50
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
                </div>
            </div>
        </div>
        <!-- EOF: #header-inside -->

    </div>
</header>
<!-- EOF: #header --> 
";
        }
        // line 60
        echo "
<!-- #main-navigation --> 
<div id=\"main-navigation\" class=\"clearfix\">
    <div class=\"container\">

        <!-- #main-navigation-inside -->
        <div id=\"main-navigation-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <nav role=\"navigation\" class=\"clearfix\">
                        ";
        // line 70
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array())) {
            // line 71
            echo "                        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
            echo "
                        ";
        } else {
            // line 73
            echo "                            ";
            if ((isset($context["main_menu"]) ? $context["main_menu"] : null)) {
                // line 74
                echo "                            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["main_menu"]) ? $context["main_menu"] : null), "html", null, true));
                echo "
                            ";
            }
            // line 76
            echo "                        ";
        }
        // line 77
        echo "                    </nav>
                </div>
            </div>
        </div>
        <!-- EOF: #main-navigation-inside -->

    </div>
</div>
<!-- EOF: #main-navigation -->

";
        // line 87
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner", array())) {
            // line 88
            echo "<!-- #banner -->
<div id=\"banner\" class=\"clearfix\">
    <div class=\"container\">
        
        <!-- #banner-inside -->
        <div id=\"banner-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                ";
            // line 96
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner", array()), "html", null, true));
            echo "
                </div>
            </div>
        </div>
        <!-- EOF: #banner-inside -->        

    </div>
</div>
<!-- EOF:#banner -->
";
        }
        // line 106
        echo "
<!-- #page -->
<div id=\"page\" class=\"clearfix\">
    ";
        // line 109
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 110
            echo "    <!-- #top-content -->
    
    <!-- EOF: #top-content -->
    ";
        }
        // line 114
        echo "
    <!-- #main-content -->
    <div id=\"main-content\">
        <div class=\"container\">
        
            <div class=\"row\">
                ";
        // line 120
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 121
            echo "                <aside class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebar_grid_class"]) ? $context["sidebar_grid_class"] : null), "html", null, true));
            echo "\">  
                    <!--#sidebar-first-->
                    <section id=\"sidebar-first\" class=\"sidebar clearfix\">
                    ";
            // line 124
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
                    </section>
                    <!--EOF:#sidebar-first-->
                </aside>
                ";
        }
        // line 129
        echo "
                <section class=\"";
        // line 130
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["main_grid_class"]) ? $context["main_grid_class"] : null), "html", null, true));
        echo "\">

                    <!-- #main -->
                    <div id=\"main\" class=\"clearfix\">
                    
                        <!-- #breadcrumb -->
                        <div id=\"breadcrumb\" class=\"clearfix\">
                            <!-- #breadcrumb-inside -->
                            <div id=\"breadcrumb-inside\" class=\"clearfix\">
                            ";
        // line 139
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
                            </div>
                            <!-- EOF: #breadcrumb-inside -->
                        </div>
                        <!-- EOF: #breadcrumb -->

                        ";
        // line 145
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "promoted", array())) {
            // line 146
            echo "                        <!-- #promoted -->
                            <div id=\"promoted\" class=\"clearfix\">
                                <div id=\"promoted-inside\" class=\"clearfix\">
                                ";
            // line 149
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "promoted", array()), "html", null, true));
            echo "
                                </div>
                            </div>
                        <!-- EOF: #promoted -->
                        ";
        }
        // line 154
        echo "
                        <!-- EOF:#content-wrapper -->
                        <div id=\"content-wrapper\">

                            ";
        // line 158
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            // line 159
            echo "                                ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
                            ";
        }
        // line 161
        echo "
                        </div>
                        <!-- EOF:#content-wrapper -->

                    </div>
                    <!-- EOF:#main -->

                </section>
                
                ";
        // line 170
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 171
            echo "                <aside class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebar_grid_class"]) ? $context["sidebar_grid_class"] : null), "html", null, true));
            echo "\">
                    <!--#sidebar-second-->
                    <section id=\"sidebar-second\" class=\"sidebar clearfix\">
                    ";
            // line 174
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
                    </section>
                    <!--EOF:#sidebar-second-->
                </aside>
                ";
        }
        // line 179
        echo "        
            </div>

        </div>
    </div>
    <!-- EOF:#main-content -->
    
    ";
        // line 186
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_content", array())) {
            // line 187
            echo "    <!-- #bottom-content -->
    <div id=\"bottom-content\" class=\"clearfix\">
        <div class=\"container\">

            <!-- #bottom-content-inside -->
            <div id=\"bottom-content-inside\" class=\"clearfix\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                    ";
            // line 195
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_content", array()), "html", null, true));
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
        // line 205
        echo "
</div>
<!-- EOF:#page -->

";
        // line 209
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()))) {
            // line 210
            echo "<!-- #footer -->
<footer id=\"footer\" class=\"clearfix\">
    <div class=\"container\">
    
        <!-- #footer-inside -->
        <div id=\"footer-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    ";
            // line 218
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 219
                echo "                    <div class=\"footer-area\">
                    ";
                // line 220
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "
                    </div>
                    ";
            }
            // line 223
            echo "                </div>
                
                <div class=\"col-md-3\">
                    ";
            // line 226
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
                // line 227
                echo "                    <div class=\"footer-area\">
                    ";
                // line 228
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
                echo "
                    </div>
                    ";
            }
            // line 231
            echo "                </div>

                <div class=\"col-md-3\">
                    ";
            // line 234
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
                // line 235
                echo "                    <div class=\"footer-area\">
                    ";
                // line 236
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
                echo "
                    </div>
                    ";
            }
            // line 239
            echo "                </div>

                <div class=\"col-md-3\">
                    ";
            // line 242
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array())) {
                // line 243
                echo "                    <div class=\"footer-area\">
                    ";
                // line 244
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()), "html", null, true));
                echo "
                    </div>
                    ";
            }
            // line 247
            echo "                </div>
            </div>
        </div>
        <!-- EOF: #footer-inside -->
    
    </div>
</footer> 
<!-- EOF #footer -->
";
        }
        // line 256
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
        // line 266
        if ((isset($context["secondary_menu"]) ? $context["secondary_menu"] : null)) {
            // line 267
            echo "                    <nav id=\"secondary-menu\" class=\"navigation\" role=\"navigation\">
                    ";
            // line 268
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["secondary_menu"]) ? $context["secondary_menu"] : null), "html", null, true));
            echo "
                    </nav>
                    ";
        }
        // line 270
        echo "                    

                    ";
        // line 272
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 273
            echo "                    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
                    ";
        }
        // line 275
        echo "
                    </div>
                    <!-- EOF: #subfooter-left -->
                </div>
            </div>
        </div>
        <!-- EOF: #subfooter-inside -->
    
    </div>
</footer>
<!-- EOF:#subfooter -->";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_business/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 275,  474 => 273,  472 => 272,  468 => 270,  462 => 268,  459 => 267,  457 => 266,  445 => 256,  434 => 247,  428 => 244,  425 => 243,  423 => 242,  418 => 239,  412 => 236,  409 => 235,  407 => 234,  402 => 231,  396 => 228,  393 => 227,  391 => 226,  386 => 223,  380 => 220,  377 => 219,  375 => 218,  365 => 210,  363 => 209,  357 => 205,  344 => 195,  334 => 187,  332 => 186,  323 => 179,  315 => 174,  308 => 171,  306 => 170,  295 => 161,  289 => 159,  287 => 158,  281 => 154,  273 => 149,  268 => 146,  266 => 145,  257 => 139,  245 => 130,  242 => 129,  234 => 124,  227 => 121,  225 => 120,  217 => 114,  211 => 110,  209 => 109,  204 => 106,  191 => 96,  181 => 88,  179 => 87,  167 => 77,  164 => 76,  158 => 74,  155 => 73,  149 => 71,  147 => 70,  135 => 60,  122 => 50,  112 => 42,  110 => 41,  107 => 40,  96 => 31,  88 => 26,  81 => 23,  79 => 22,  76 => 21,  68 => 16,  61 => 13,  59 => 12,  49 => 4,  47 => 3,  43 => 1,);
    }
}
/* <div id="toTop"><span class="glyphicon glyphicon-chevron-up"></span></div>*/
/* */
/* {% if page.header_top_left or page.header_top_right %}*/
/* <!-- #header-top -->*/
/* <div id="header-top" class="clearfix">*/
/*     <div class="container">*/
/* */
/*         <!-- #header-top-inside -->*/
/*         <div id="header-top-inside" class="clearfix">*/
/*             <div class="row">*/
/*             */
/*             {% if page.header_top_left %}*/
/*             <div class="{{header_top_left_grid_class}}">*/
/*                 <!-- #header-top-left -->*/
/*                 <div id="header-top-left" class="clearfix">*/
/*                     {{ page.header_top_left }}*/
/*                 </div>*/
/*                 <!-- EOF:#header-top-left -->*/
/*             </div>*/
/*             {% endif %}*/
/*             */
/*             {% if page.header_top_right %}*/
/*             <div class="{{header_top_right_grid_class}}">*/
/*                 <!-- #header-top-right -->*/
/*                 <div id="header-top-right" class="clearfix">*/
/*                     {{ page.header_top_right }}*/
/*                 </div>*/
/*                 <!-- EOF:#header-top-right -->*/
/*             </div>*/
/*             {% endif %}*/
/*             */
/*             </div>*/
/*         </div>*/
/*         <!-- EOF: #header-top-inside -->*/
/* */
/*     </div>*/
/* </div>*/
/* <!-- EOF: #header-top -->    */
/* {% endif %}*/
/* */
/* {% if page.header %}*/
/* <!-- header -->*/
/* <header id="header" role="banner" class="clearfix">*/
/*     <div class="container">*/
/* */
/*         <!-- #header-inside -->*/
/*         <div id="header-inside" class="clearfix">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     {{ page.header }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- EOF: #header-inside -->*/
/* */
/*     </div>*/
/* </header>*/
/* <!-- EOF: #header --> */
/* {% endif %}*/
/* */
/* <!-- #main-navigation --> */
/* <div id="main-navigation" class="clearfix">*/
/*     <div class="container">*/
/* */
/*         <!-- #main-navigation-inside -->*/
/*         <div id="main-navigation-inside" class="clearfix">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <nav role="navigation" class="clearfix">*/
/*                         {% if page.navigation %}*/
/*                         {{ page.navigation }}*/
/*                         {% else %}*/
/*                             {% if main_menu %}*/
/*                             {{ main_menu }}*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/*                     </nav>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- EOF: #main-navigation-inside -->*/
/* */
/*     </div>*/
/* </div>*/
/* <!-- EOF: #main-navigation -->*/
/* */
/* {% if page.banner %}*/
/* <!-- #banner -->*/
/* <div id="banner" class="clearfix">*/
/*     <div class="container">*/
/*         */
/*         <!-- #banner-inside -->*/
/*         <div id="banner-inside" class="clearfix">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                 {{ page.banner }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- EOF: #banner-inside -->        */
/* */
/*     </div>*/
/* </div>*/
/* <!-- EOF:#banner -->*/
/* {% endif %}*/
/* */
/* <!-- #page -->*/
/* <div id="page" class="clearfix">*/
/*     {% if page.highlighted %}*/
/*     <!-- #top-content -->*/
/*     */
/*     <!-- EOF: #top-content -->*/
/*     {% endif %}*/
/* */
/*     <!-- #main-content -->*/
/*     <div id="main-content">*/
/*         <div class="container">*/
/*         */
/*             <div class="row">*/
/*                 {% if page.sidebar_first %}*/
/*                 <aside class="{{sidebar_grid_class}}">  */
/*                     <!--#sidebar-first-->*/
/*                     <section id="sidebar-first" class="sidebar clearfix">*/
/*                     {{ page.sidebar_first }}*/
/*                     </section>*/
/*                     <!--EOF:#sidebar-first-->*/
/*                 </aside>*/
/*                 {% endif %}*/
/* */
/*                 <section class="{{main_grid_class}}">*/
/* */
/*                     <!-- #main -->*/
/*                     <div id="main" class="clearfix">*/
/*                     */
/*                         <!-- #breadcrumb -->*/
/*                         <div id="breadcrumb" class="clearfix">*/
/*                             <!-- #breadcrumb-inside -->*/
/*                             <div id="breadcrumb-inside" class="clearfix">*/
/*                             {{ breadcrumb }}*/
/*                             </div>*/
/*                             <!-- EOF: #breadcrumb-inside -->*/
/*                         </div>*/
/*                         <!-- EOF: #breadcrumb -->*/
/* */
/*                         {% if page.promoted %}*/
/*                         <!-- #promoted -->*/
/*                             <div id="promoted" class="clearfix">*/
/*                                 <div id="promoted-inside" class="clearfix">*/
/*                                 {{ page.promoted }}*/
/*                                 </div>*/
/*                             </div>*/
/*                         <!-- EOF: #promoted -->*/
/*                         {% endif %}*/
/* */
/*                         <!-- EOF:#content-wrapper -->*/
/*                         <div id="content-wrapper">*/
/* */
/*                             {% if page.content %}*/
/*                                 {{ page.content }}*/
/*                             {% endif %}*/
/* */
/*                         </div>*/
/*                         <!-- EOF:#content-wrapper -->*/
/* */
/*                     </div>*/
/*                     <!-- EOF:#main -->*/
/* */
/*                 </section>*/
/*                 */
/*                 {% if page.sidebar_second %}*/
/*                 <aside class="{{sidebar_grid_class}}">*/
/*                     <!--#sidebar-second-->*/
/*                     <section id="sidebar-second" class="sidebar clearfix">*/
/*                     {{ page.sidebar_second }}*/
/*                     </section>*/
/*                     <!--EOF:#sidebar-second-->*/
/*                 </aside>*/
/*                 {% endif %}*/
/*         */
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/*     <!-- EOF:#main-content -->*/
/*     */
/*     {% if page.bottom_content %}*/
/*     <!-- #bottom-content -->*/
/*     <div id="bottom-content" class="clearfix">*/
/*         <div class="container">*/
/* */
/*             <!-- #bottom-content-inside -->*/
/*             <div id="bottom-content-inside" class="clearfix">*/
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/*                     {{ page.bottom_content }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- EOF:#bottom-content-inside -->*/
/* */
/*         </div>*/
/*     </div>*/
/*     <!-- EOF: #bottom-content -->*/
/*     {% endif %}*/
/* */
/* </div>*/
/* <!-- EOF:#page -->*/
/* */
/* {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}*/
/* <!-- #footer -->*/
/* <footer id="footer" class="clearfix">*/
/*     <div class="container">*/
/*     */
/*         <!-- #footer-inside -->*/
/*         <div id="footer-inside" class="clearfix">*/
/*             <div class="row">*/
/*                 <div class="col-md-3">*/
/*                     {% if page.footer_first %}*/
/*                     <div class="footer-area">*/
/*                     {{ page.footer_first }}*/
/*                     </div>*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 */
/*                 <div class="col-md-3">*/
/*                     {% if page.footer_second %}*/
/*                     <div class="footer-area">*/
/*                     {{ page.footer_second }}*/
/*                     </div>*/
/*                     {% endif %}*/
/*                 </div>*/
/* */
/*                 <div class="col-md-3">*/
/*                     {% if page.footer_third %}*/
/*                     <div class="footer-area">*/
/*                     {{ page.footer_third }}*/
/*                     </div>*/
/*                     {% endif %}*/
/*                 </div>*/
/* */
/*                 <div class="col-md-3">*/
/*                     {% if page.footer_fourth %}*/
/*                     <div class="footer-area">*/
/*                     {{ page.footer_fourth }}*/
/*                     </div>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- EOF: #footer-inside -->*/
/*     */
/*     </div>*/
/* </footer> */
/* <!-- EOF #footer -->*/
/* {% endif %}*/
/* */
/* <footer id="subfooter" class="clearfix">*/
/*     <div class="container">*/
/*         */
/*         <!-- #subfooter-inside -->*/
/*         <div id="subfooter-inside" class="clearfix">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <!-- #subfooter-left -->*/
/*                     <div class="subfooter-area">*/
/*                     {% if secondary_menu %}*/
/*                     <nav id="secondary-menu" class="navigation" role="navigation">*/
/*                     {{ secondary_menu }}*/
/*                     </nav>*/
/*                     {% endif %}                    */
/* */
/*                     {% if page.footer %}*/
/*                     {{ page.footer }}*/
/*                     {% endif %}*/
/* */
/*                     </div>*/
/*                     <!-- EOF: #subfooter-left -->*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- EOF: #subfooter-inside -->*/
/*     */
/*     </div>*/
/* </footer>*/
/* <!-- EOF:#subfooter -->*/
