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
    <title>Kepolisian Resor Sumedang</title>
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
      <link rel=\"icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/favicon.ico\" type=\"image/x-icon\">
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
        // line 65
        $this->loadTemplate("admin/navbar.html", "admin/layout.html", 65)->display($context);
        // line 66
        echo "
            <div class=\"pcoded-main-container\" style=\"margin-top: 56px;\">
                <div class=\"pcoded-wrapper\">";
        // line 70
        $this->loadTemplate("admin/sidebar.html", "admin/layout.html", 70)->display($context);
        // line 71
        echo "
                    <div class=\"pcoded-content\">
                        <div class=\"pcoded-inner-content\">

                        <div class=\"main-body\">";
        // line 76
        $this->displayBlock('content', $context, $blocks);
        // line 77
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
        // line 132
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/jquery/dist/jquery.min.js\"></script>
<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/jquery-ui/jquery-ui.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/tether/dist/js/tether.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js\"></script>
<!-- jquery slimscroll js -->
<script type=\"text/javascript\" src=\"";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.js\"></script>
<!-- modernizr js -->
<script type=\"text/javascript\" src=\"";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/modernizr/modernizr.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/modernizr/feature-detects/css-scrollbars.js\"></script>
<!-- classie js -->
<script type=\"text/javascript\" src=\"";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/classie/classie.js\"></script>
<!-- Rickshow Chart js -->
<script src=\"";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/d3/d3.js\"></script>
<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/rickshaw/rickshaw.js\"></script>
<!-- Morris Chart js -->
<script src=\"";
        // line 147
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/raphael/raphael.min.js\"></script>
<script src=\"";
        // line 148
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/morris.js/morris.js\"></script>
<!-- Horizontal-Timeline js -->
<script type=\"text/javascript\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/dashboard/horizontal-timeline/js/main.js\"></script>
<!-- amchart js -->
<script type=\"text/javascript\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/dashboard/amchart/js/amcharts.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/dashboard/amchart/js/serial.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/dashboard/amchart/js/light.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/dashboard/amchart/js/custom-amchart.js\"></script>
<!-- i18next.min.js -->
<script type=\"text/javascript\" src=\"";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/i18next/i18next.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 160
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/jquery-i18next/jquery-i18next.min.js\"></script>
<!-- Custom js -->
<script type=\"text/javascript\" src=\"";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/dashboard/custom-dashboard.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/js/script.js\"></script>

<!-- pcmenu js -->
<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/js/pcoded.min.js\"></script>
<script src=\"";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/js/demo-12.js\"></script>
<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/js/jquery.mousewheel.min.js\"></script>
</body>

</html>
";
    }

    // line 76
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
        return array (  326 => 76,  317 => 169,  313 => 168,  309 => 167,  305 => 166,  299 => 163,  295 => 162,  290 => 160,  286 => 159,  282 => 158,  278 => 157,  273 => 155,  269 => 154,  265 => 153,  261 => 152,  256 => 150,  251 => 148,  247 => 147,  242 => 145,  238 => 144,  233 => 142,  228 => 140,  224 => 139,  219 => 137,  214 => 135,  210 => 134,  206 => 133,  202 => 132,  145 => 77,  143 => 76,  137 => 71,  135 => 70,  131 => 66,  129 => 65,  110 => 47,  106 => 46,  102 => 45,  98 => 44,  93 => 42,  88 => 40,  83 => 38,  78 => 36,  73 => 34,  68 => 32,  63 => 30,  58 => 28,  53 => 26,  48 => 24,  41 => 20,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/*     <title>Kepolisian Resor Sumedang</title>*/
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
/*       <link rel="icon" href="{{baseURL}}/assets/users/images/favicon.ico" type="image/x-icon">*/
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
/* */
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
/*             <div class="pcoded-main-container" style="margin-top: 56px;">*/
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