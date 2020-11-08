<?php

/* admin/layout.html */
class __TwigTemplate_6fb10d80c68c7b0fe38d8e75904f2ec0da5848037fad63f9f4fffce08b6d5ba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <title>Flat Able - Premium Admin Template by Phoenixcoded</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset=\"utf-8\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no\">
      <meta name=\"description\" content=\"Phoenixcoded\">
      <meta name=\"keywords\" content=\", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app\">
      <meta name=\"author\" content=\"Phoenixcoded\">
      <!-- Favicon icon -->
      <link rel=\"icon\" href=\"assets/admin/images/favicon.ico\" type=\"image/x-icon\">
      <!-- Google font-->
      <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800\" rel=\"stylesheet\">
      <!-- Required Fremwork -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css\">
      <!-- themify icon -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/icon/themify-icons/themify-icons.css\">
      <!-- ico font -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/icon/icofont/css/icofont.css\">
      <!-- flag icon framework css -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/flag-icon/flag-icon.min.css\">
      <!-- Menu-Search css -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/menu-search/css/component.css\">
      <!-- Horizontal-Timeline css -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/dashboard/horizontal-timeline/css/style.css\">
      <!-- amchart css -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/dashboard/amchart/css/amchart.css\">
      <!-- flag icon framework css -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/flag-icon/flag-icon.min.css\">
      <!-- Style.css -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/css/style.css\">
      <!--color css-->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/css/color/color-1.css\" id=\"color\" />

      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/css/linearicons.css\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/css/simple-line-icons.css\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/css/ionicons.css\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/css/jquery.mCustomScrollbar.css\">

  </head>

  <body>
    <!-- Pre-loader start -->
    <div class=\"theme-loader\">
        <div class=\"ball-scale\">
            <div></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <!-- Menu header start -->
    <div id=\"pcoded\" class=\"pcoded\">
        <div class=\"pcoded-overlay-box\"></div>
        <div class=\"pcoded-container navbar-wrapper\">";
        // line 64
        $this->loadTemplate("admin/navbar.html", "admin/layout.html", 64)->display($context);
        // line 65
        echo "
            <div class=\"pcoded-main-container\">
                <div class=\"pcoded-wrapper\">";
        // line 69
        $this->loadTemplate("admin/sidebar.html", "admin/layout.html", 69)->display($context);
        // line 70
        echo "
                    <div class=\"pcoded-content\">
                        <div class=\"pcoded-inner-content\">

                        <div class=\"main-body\">";
        // line 75
        $this->displayBlock('content', $context, $blocks);
        // line 76
        echo "                            <div id=\"styleSelector\">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class=\"ie-warning\">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class=\"iew-container\">
        <ul class=\"iew-download\">
            <li>
                <a href=\"http://www.google.com/chrome/\">
                    <img src=\"assets/admin/images/browser/chrome.png\" alt=\"Chrome\">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href=\"https://www.mozilla.org/en-US/firefox/new/\">
                    <img src=\"assets/admin/images/browser/firefox.png\" alt=\"Firefox\">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href=\"http://www.opera.com\">
                    <img src=\"assets/admin/images/browser/opera.png\" alt=\"Opera\">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href=\"https://www.apple.com/safari/\">
                    <img src=\"assets/admin/images/browser/safari.png\" alt=\"Safari\">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href=\"http://windows.microsoft.com/en-us/internet-explorer/download-ie\">
                    <img src=\"assets/admin/images/browser/ie.png\" alt=\"\">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jqurey -->
<script type=\"text/javascript\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/jquery/dist/jquery.min.js\"></script>
<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/jquery-ui/jquery-ui.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/tether/dist/js/tether.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js\"></script>
<!-- jquery slimscroll js -->
<script type=\"text/javascript\" src=\"";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.js\"></script>
<!-- modernizr js -->
<script type=\"text/javascript\" src=\"";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/modernizr/modernizr.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/modernizr/feature-detects/css-scrollbars.js\"></script>
<!-- classie js -->
<script type=\"text/javascript\" src=\"";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/classie/classie.js\"></script>
<!-- Rickshow Chart js -->
<script src=\"";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/d3/d3.js\"></script>
<script src=\"";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/rickshaw/rickshaw.js\"></script>
<!-- Morris Chart js -->
<script src=\"";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/raphael/raphael.min.js\"></script>
<script src=\"";
        // line 147
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/morris.js/morris.js\"></script>
<!-- Horizontal-Timeline js -->
<script type=\"text/javascript\" src=\"";
        // line 149
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/dashboard/horizontal-timeline/js/main.js\"></script>
<!-- amchart js -->
<script type=\"text/javascript\" src=\"";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/dashboard/amchart/js/amcharts.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/dashboard/amchart/js/serial.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/dashboard/amchart/js/light.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/dashboard/amchart/js/custom-amchart.js\"></script>
<!-- i18next.min.js -->
<script type=\"text/javascript\" src=\"";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/i18next/i18next.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/jquery-i18next/jquery-i18next.min.js\"></script>
<!-- Custom js -->
<script type=\"text/javascript\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/dashboard/custom-dashboard.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/js/script.js\"></script>

<!-- pcmenu js -->
<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/js/pcoded.min.js\"></script>
<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/js/demo-12.js\"></script>
<script src=\"";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/js/jquery.mousewheel.min.js\"></script>
</body>

</html>
";
    }

    // line 75
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "admin/layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 75,  313 => 168,  309 => 167,  305 => 166,  301 => 165,  295 => 162,  291 => 161,  286 => 159,  282 => 158,  278 => 157,  274 => 156,  269 => 154,  265 => 153,  261 => 152,  257 => 151,  252 => 149,  247 => 147,  243 => 146,  238 => 144,  234 => 143,  229 => 141,  224 => 139,  220 => 138,  215 => 136,  210 => 134,  206 => 133,  202 => 132,  198 => 131,  141 => 76,  139 => 75,  133 => 70,  131 => 69,  127 => 65,  125 => 64,  107 => 47,  103 => 46,  99 => 45,  95 => 44,  90 => 42,  85 => 40,  80 => 38,  75 => 36,  70 => 34,  65 => 32,  60 => 30,  55 => 28,  50 => 26,  45 => 24,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/*     <title>Flat Able - Premium Admin Template by Phoenixcoded</title>*/
/*     <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*       <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*       <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*       <![endif]-->*/
/*       <!-- Meta -->*/
/*       <meta charset="utf-8">*/
/*       <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*       <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">*/
/*       <meta name="description" content="Phoenixcoded">*/
/*       <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">*/
/*       <meta name="author" content="Phoenixcoded">*/
/*       <!-- Favicon icon -->*/
/*       <link rel="icon" href="assets/admin/images/favicon.ico" type="image/x-icon">*/
/*       <!-- Google font-->*/
/*       <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">*/
/*       <!-- Required Fremwork -->*/
/*       <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">*/
/*       <!-- themify icon -->*/
/*       <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/icon/themify-icons/themify-icons.css">*/
/*       <!-- ico font -->*/
/*       <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/icon/icofont/css/icofont.css">*/
/*       <!-- flag icon framework css -->*/
/*       <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/pages/flag-icon/flag-icon.min.css">*/
/*       <!-- Menu-Search css -->*/
/*       <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/pages/menu-search/css/component.css">*/
/*       <!-- Horizontal-Timeline css -->*/
/*       <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/pages/dashboard/horizontal-timeline/css/style.css">*/
/*       <!-- amchart css -->*/
/*       <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/pages/dashboard/amchart/css/amchart.css">*/
/*       <!-- flag icon framework css -->*/
/*       <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/pages/flag-icon/flag-icon.min.css">*/
/*       <!-- Style.css -->*/
/*       <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/css/style.css">*/
/*       <!--color css-->*/
/*       <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/css/color/color-1.css" id="color" />*/
/* */
/*       <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/css/linearicons.css">*/
/*       <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/css/simple-line-icons.css">*/
/*       <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/css/ionicons.css">*/
/*       <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/css/jquery.mCustomScrollbar.css">*/
/* */
/*   </head>*/
/* */
/*   <body>*/
/*     <!-- Pre-loader start -->*/
/*     <div class="theme-loader">*/
/*         <div class="ball-scale">*/
/*             <div></div>*/
/*         </div>*/
/*     </div>*/
/*     <!-- Pre-loader end -->*/
/*     <!-- Menu header start -->*/
/*     <div id="pcoded" class="pcoded">*/
/*         <div class="pcoded-overlay-box"></div>*/
/*         <div class="pcoded-container navbar-wrapper">*/
/* */
/*           {% include "admin/navbar.html" %}*/
/* */
/*             <div class="pcoded-main-container">*/
/*                 <div class="pcoded-wrapper">*/
/* */
/*                     {% include "admin/sidebar.html" %}*/
/* */
/*                     <div class="pcoded-content">*/
/*                         <div class="pcoded-inner-content">*/
/* */
/*                         <div class="main-body">*/
/*                           {% block content %} {% endblock %}*/
/*                             <div id="styleSelector">*/
/* */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <!-- Older IE warning message -->*/
/*     <!--[if lt IE 9]>*/
/* <div class="ie-warning">*/
/*     <h1>Warning!!</h1>*/
/*     <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>*/
/*     <div class="iew-container">*/
/*         <ul class="iew-download">*/
/*             <li>*/
/*                 <a href="http://www.google.com/chrome/">*/
/*                     <img src="assets/admin/images/browser/chrome.png" alt="Chrome">*/
/*                     <div>Chrome</div>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="https://www.mozilla.org/en-US/firefox/new/">*/
/*                     <img src="assets/admin/images/browser/firefox.png" alt="Firefox">*/
/*                     <div>Firefox</div>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="http://www.opera.com">*/
/*                     <img src="assets/admin/images/browser/opera.png" alt="Opera">*/
/*                     <div>Opera</div>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="https://www.apple.com/safari/">*/
/*                     <img src="assets/admin/images/browser/safari.png" alt="Safari">*/
/*                     <div>Safari</div>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">*/
/*                     <img src="assets/admin/images/browser/ie.png" alt="">*/
/*                     <div>IE (9 & above)</div>*/
/*                 </a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/*     <p>Sorry for the inconvenience!</p>*/
/* </div>*/
/* <![endif]-->*/
/* <!-- Warning Section Ends -->*/
/* <!-- Required Jqurey -->*/
/* <script type="text/javascript" src="{{baseURL}}/assets/admin/bower_components/jquery/dist/jquery.min.js"></script>*/
/* <script src="{{baseURL}}/assets/admin/bower_components/jquery-ui/jquery-ui.min.js"></script>*/
/* <script type="text/javascript" src="{{baseURL}}/assets/admin/bower_components/tether/dist/js/tether.min.js"></script>*/
/* <script type="text/javascript" src="{{baseURL}}/assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>*/
/* <!-- jquery slimscroll js -->*/
/* <script type="text/javascript" src="{{baseURL}}/assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>*/
/* <!-- modernizr js -->*/
/* <script type="text/javascript" src="{{baseURL}}/assets/admin/bower_components/modernizr/modernizr.js"></script>*/
/* <script type="text/javascript" src="{{baseURL}}/assets/admin/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>*/
/* <!-- classie js -->*/
/* <script type="text/javascript" src="{{baseURL}}/assets/admin/bower_components/classie/classie.js"></script>*/
/* <!-- Rickshow Chart js -->*/
/* <script src="{{baseURL}}/assets/admin/bower_components/d3/d3.js"></script>*/
/* <script src="{{baseURL}}/assets/admin/bower_components/rickshaw/rickshaw.js"></script>*/
/* <!-- Morris Chart js -->*/
/* <script src="{{baseURL}}/assets/admin/bower_components/raphael/raphael.min.js"></script>*/
/* <script src="{{baseURL}}/assets/admin/bower_components/morris.js/morris.js"></script>*/
/* <!-- Horizontal-Timeline js -->*/
/* <script type="text/javascript" src="{{baseURL}}/assets/admin/pages/dashboard/horizontal-timeline/js/main.js"></script>*/
/* <!-- amchart js -->*/
/* <script type="text/javascript" src="{{baseURL}}/assets/admin/pages/dashboard/amchart/js/amcharts.js"></script>*/
/* <script type="text/javascript" src="{{baseURL}}/assets/admin/pages/dashboard/amchart/js/serial.js"></script>*/
/* <script type="text/javascript" src="{{baseURL}}/assets/admin/pages/dashboard/amchart/js/light.js"></script>*/
/* <script type="text/javascript" src="{{baseURL}}/assets/admin/pages/dashboard/amchart/js/custom-amchart.js"></script>*/
/* <!-- i18next.min.js -->*/
/* <script type="text/javascript" src="{{baseURL}}/assets/admin/bower_components/i18next/i18next.min.js"></script>*/
/* <script type="text/javascript" src="{{baseURL}}/assets/admin/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>*/
/* <script type="text/javascript" src="{{baseURL}}/assets/admin/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>*/
/* <script type="text/javascript" src="{{baseURL}}/assets/admin/bower_components/jquery-i18next/jquery-i18next.min.js"></script>*/
/* <!-- Custom js -->*/
/* <script type="text/javascript" src="{{baseURL}}/assets/admin/pages/dashboard/custom-dashboard.js"></script>*/
/* <script type="text/javascript" src="{{baseURL}}/assets/admin/js/script.js"></script>*/
/* */
/* <!-- pcmenu js -->*/
/* <script src="{{baseURL}}/assets/admin/js/pcoded.min.js"></script>*/
/* <script src="{{baseURL}}/assets/admin/js/demo-12.js"></script>*/
/* <script src="{{baseURL}}/assets/admin/js/jquery.mCustomScrollbar.concat.min.js"></script>*/
/* <script src="{{baseURL}}/assets/admin/js/jquery.mousewheel.min.js"></script>*/
/* </body>*/
/* */
/* </html>*/
/* */
