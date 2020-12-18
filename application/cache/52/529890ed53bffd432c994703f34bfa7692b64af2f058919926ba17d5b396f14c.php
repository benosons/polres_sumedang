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
      <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/fonts/family=Open+Sans.css\" rel=\"stylesheet\">
      <!-- <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800\" rel=\"stylesheet\"> -->
      <!-- Required Fremwork -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css\">
      <!-- themify icon -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/icon/themify-icons/themify-icons.css\">
      <!-- ico font -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/icon/icofont/css/icofont.css\">
      <!-- flag icon framework css -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/flag-icon/flag-icon.min.css\">
      <!-- Font Awesome -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/icon/font-awesome/css/font-awesome.min.css\">
      <!-- Data Table Css -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/data-table/css/buttons.dataTables.min.css\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css\">
      <!-- Menu-Search css -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/menu-search/css/component.css\">
      <!-- Horizontal-Timeline css -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/dashboard/horizontal-timeline/css/style.css\">
      <!-- amchart css -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/dashboard/amchart/css/amchart.css\">
      <!-- flag icon framework css -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/flag-icon/flag-icon.min.css\">
      <!-- Summernote css -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/summernote/dist/summernote.css\">
      <!-- jquery file upload Frame work -->
      <link href=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/jquery.filer/css/jquery.filer.css\" type=\"text/css\" rel=\"stylesheet\" />
      <link href=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css\" type=\"text/css\" rel=\"stylesheet\" />
      <!-- Style.css -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/css/style.css\">
      <!--color css-->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/css/color/color-1.css\" id=\"color\" />

      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/css/linearicons.css\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/css/simple-line-icons.css\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/css/ionicons.css\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/css/jquery.mCustomScrollbar.css\">

      <link rel=\"stylesheet\" href=\"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/swal/limonte-sweetalert2/7.33.1/sweetalert2.min.css\">
      <link rel=\"stylesheet\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/swal/fontawesome/v5.7.2/all.css\">

      <style>
      .jFiler-theme-default .jFiler-input-button {
          background-color: #f1c40f;
      }

      .swal2-modal {
  \t\t\tfont-size: 85%;
  \t\t}

  \t\t.swal2-popup .swal2-styled.swal2-confirm {
  \t    background-color: #ED1C24;
  \t\t}

  \t\t.swal2-popup .swal2-title {
  \t\t\tfont-size: 1.3em;
  \t\t}
      </style>
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
        // line 97
        $this->loadTemplate("admin/navbar.html", "admin/layout.html", 97)->display($context);
        // line 98
        echo "
            <div class=\"pcoded-main-container\" style=\"margin-top: 56px;\">
                <div class=\"pcoded-wrapper\">";
        // line 102
        $this->loadTemplate("admin/sidebar.html", "admin/layout.html", 102)->display($context);
        // line 103
        echo "
                    <div class=\"pcoded-content\">
                        <div class=\"pcoded-inner-content\">

                        <div class=\"main-body\">";
        // line 108
        $this->displayBlock('content', $context, $blocks);
        // line 109
        echo "                            <!-- <div id=\"styleSelector\">

                            </div> -->
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
        // line 164
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/jquery/dist/jquery.min.js\"></script>
<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/jquery-ui/jquery-ui.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 166
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/tether/dist/js/tether.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js\"></script>
<!-- jquery slimscroll js -->
<script type=\"text/javascript\" src=\"";
        // line 169
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.js\"></script>
<!-- modernizr js -->
<script type=\"text/javascript\" src=\"";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/modernizr/modernizr.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 172
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/modernizr/feature-detects/css-scrollbars.js\"></script>
<!-- classie js -->
<script type=\"text/javascript\" src=\"";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/classie/classie.js\"></script>
<!-- Rickshow Chart js -->
<script src=\"";
        // line 176
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/d3/d3.js\"></script>
<script src=\"";
        // line 177
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/rickshaw/rickshaw.js\"></script>
<!-- Morris Chart js -->
<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/raphael/raphael.min.js\"></script>
<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/morris.js/morris.js\"></script>
<!-- Horizontal-Timeline js -->
<script type=\"text/javascript\" src=\"";
        // line 182
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/dashboard/horizontal-timeline/js/main.js\"></script>
<!-- amchart js -->
<script type=\"text/javascript\" src=\"";
        // line 184
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/dashboard/amchart/js/amcharts.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 185
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/dashboard/amchart/js/serial.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 186
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/dashboard/amchart/js/light.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 187
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/dashboard/amchart/js/custom-amchart.js\"></script>
<!-- Summernote js -->
<script type=\"text/javascript\" src=\"";
        // line 189
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/summernote/dist/summernote.js\"></script>
<!-- jquery file upload js -->
<script src=\"";
        // line 191
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/jquery.filer/js/jquery.filer.min.js\"></script>
<script src=\"";
        // line 192
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/filer/jquery.fileuploads.init.js\" type=\"text/javascript\"></script>
<!-- data-table js -->
   <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js\"></script>
   <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js\"></script>
   <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/data-table/js/jszip.min.js\"></script>
   <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/data-table/js/pdfmake.min.js\"></script>
   <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/data-table/js/vfs_fonts.js\"></script>
   <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/datatables.net-buttons/js/buttons.print.min.js\"></script>
   <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/datatables.net-buttons/js/buttons.html5.min.js\"></script>
   <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js\"></script>
   <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js\"></script>
   <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js\"></script>
<!-- i18next.min.js -->
<script type=\"text/javascript\" src=\"";
        // line 205
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/i18next/i18next.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 206
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 207
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 208
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/jquery-i18next/jquery-i18next.min.js\"></script>
<!-- Custom js -->
<script type=\"text/javascript\" src=\"";
        // line 210
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/dashboard/custom-dashboard.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 211
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/js/script.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 212
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/pages/summernote/custom-note.js\"></script>

<!-- pcmenu js -->
<script src=\"";
        // line 215
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/js/pcoded.min.js\"></script>
<script src=\"";
        // line 216
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/js/demo-12.js\"></script>
<script src=\"";
        // line 217
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script src=\"";
        // line 218
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/js/jquery.mousewheel.min.js\"></script>
<script src=\"";
        // line 219
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/swal/limonte-sweetalert2/7.33.1/sweetalert2.min.js\"></script>";
        // line 221
        if ((isset($context["script"]) ? $context["script"] : null)) {
            // line 222
            echo "<script src = \"";
            echo twig_escape_filter($this->env, (isset($context["script"]) ? $context["script"] : null), "html", null, true);
            echo "\"></script>";
        }
        // line 224
        echo "</body>

</html>
";
    }

    // line 108
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
        return array (  459 => 108,  452 => 224,  447 => 222,  445 => 221,  442 => 219,  438 => 218,  434 => 217,  430 => 216,  426 => 215,  420 => 212,  416 => 211,  412 => 210,  407 => 208,  403 => 207,  399 => 206,  395 => 205,  390 => 203,  386 => 202,  382 => 201,  378 => 200,  374 => 199,  370 => 198,  366 => 197,  362 => 196,  358 => 195,  354 => 194,  349 => 192,  345 => 191,  340 => 189,  335 => 187,  331 => 186,  327 => 185,  323 => 184,  318 => 182,  313 => 180,  309 => 179,  304 => 177,  300 => 176,  295 => 174,  290 => 172,  286 => 171,  281 => 169,  276 => 167,  272 => 166,  268 => 165,  264 => 164,  207 => 109,  205 => 108,  199 => 103,  197 => 102,  193 => 98,  191 => 97,  155 => 62,  151 => 61,  146 => 59,  142 => 58,  138 => 57,  134 => 56,  129 => 54,  124 => 52,  119 => 50,  115 => 49,  110 => 47,  105 => 45,  100 => 43,  95 => 41,  90 => 39,  85 => 37,  81 => 36,  77 => 35,  72 => 33,  67 => 31,  62 => 29,  57 => 27,  52 => 25,  46 => 22,  41 => 20,  20 => 1,);
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
/*       <link href="{{baseURL}}/assets/fonts/family=Open+Sans.css" rel="stylesheet">*/
/*       <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> -->*/
/*       <!-- Required Fremwork -->*/
/*       <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">*/
/*       <!-- themify icon -->*/
/*       <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/icon/themify-icons/themify-icons.css">*/
/*       <!-- ico font -->*/
/*       <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/icon/icofont/css/icofont.css">*/
/*       <!-- flag icon framework css -->*/
/*       <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/pages/flag-icon/flag-icon.min.css">*/
/*       <!-- Font Awesome -->*/
/*       <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/icon/font-awesome/css/font-awesome.min.css">*/
/*       <!-- Data Table Css -->*/
/*       <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">*/
/*       <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/pages/data-table/css/buttons.dataTables.min.css">*/
/*       <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">*/
/*       <!-- Menu-Search css -->*/
/*       <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/pages/menu-search/css/component.css">*/
/*       <!-- Horizontal-Timeline css -->*/
/*       <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/pages/dashboard/horizontal-timeline/css/style.css">*/
/*       <!-- amchart css -->*/
/*       <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/pages/dashboard/amchart/css/amchart.css">*/
/*       <!-- flag icon framework css -->*/
/*       <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/pages/flag-icon/flag-icon.min.css">*/
/*       <!-- Summernote css -->*/
/*       <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/bower_components/summernote/dist/summernote.css">*/
/*       <!-- jquery file upload Frame work -->*/
/*       <link href="{{baseURL}}/assets/admin/bower_components/jquery.filer/css/jquery.filer.css" type="text/css" rel="stylesheet" />*/
/*       <link href="{{baseURL}}/assets/admin/bower_components/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet" />*/
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
/*       <link rel="stylesheet" href="{{baseURL}}/assets/swal/limonte-sweetalert2/7.33.1/sweetalert2.min.css">*/
/*       <link rel="stylesheet" href="{{baseURL}}/assets/swal/fontawesome/v5.7.2/all.css">*/
/* */
/*       <style>*/
/*       .jFiler-theme-default .jFiler-input-button {*/
/*           background-color: #f1c40f;*/
/*       }*/
/* */
/*       .swal2-modal {*/
/*   			font-size: 85%;*/
/*   		}*/
/* */
/*   		.swal2-popup .swal2-styled.swal2-confirm {*/
/*   	    background-color: #ED1C24;*/
/*   		}*/
/* */
/*   		.swal2-popup .swal2-title {*/
/*   			font-size: 1.3em;*/
/*   		}*/
/*       </style>*/
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
/*                             <!-- <div id="styleSelector">*/
/* */
/*                             </div> -->*/
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
/* <!-- Summernote js -->*/
/* <script type="text/javascript" src="{{baseURL}}/assets/admin/bower_components/summernote/dist/summernote.js"></script>*/
/* <!-- jquery file upload js -->*/
/* <script src="{{baseURL}}/assets/admin/bower_components/jquery.filer/js/jquery.filer.min.js"></script>*/
/* <script src="{{baseURL}}/assets/admin/pages/filer/jquery.fileuploads.init.js" type="text/javascript"></script>*/
/* <!-- data-table js -->*/
/*    <script src="{{baseURL}}/assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>*/
/*    <script src="{{baseURL}}/assets/admin/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>*/
/*    <script src="{{baseURL}}/assets/admin/pages/data-table/js/jszip.min.js"></script>*/
/*    <script src="{{baseURL}}/assets/admin/pages/data-table/js/pdfmake.min.js"></script>*/
/*    <script src="{{baseURL}}/assets/admin/pages/data-table/js/vfs_fonts.js"></script>*/
/*    <script src="{{baseURL}}/assets/admin/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>*/
/*    <script src="{{baseURL}}/assets/admin/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>*/
/*    <script src="{{baseURL}}/assets/admin/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>*/
/*    <script src="{{baseURL}}/assets/admin/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>*/
/*    <script src="{{baseURL}}/assets/admin/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>*/
/* <!-- i18next.min.js -->*/
/* <script type="text/javascript" src="{{baseURL}}/assets/admin/bower_components/i18next/i18next.min.js"></script>*/
/* <script type="text/javascript" src="{{baseURL}}/assets/admin/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>*/
/* <script type="text/javascript" src="{{baseURL}}/assets/admin/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>*/
/* <script type="text/javascript" src="{{baseURL}}/assets/admin/bower_components/jquery-i18next/jquery-i18next.min.js"></script>*/
/* <!-- Custom js -->*/
/* <script type="text/javascript" src="{{baseURL}}/assets/admin/pages/dashboard/custom-dashboard.js"></script>*/
/* <script type="text/javascript" src="{{baseURL}}/assets/admin/js/script.js"></script>*/
/* <script type="text/javascript" src="{{baseURL}}/assets/admin/pages/summernote/custom-note.js"></script>*/
/* */
/* <!-- pcmenu js -->*/
/* <script src="{{baseURL}}/assets/admin/js/pcoded.min.js"></script>*/
/* <script src="{{baseURL}}/assets/admin/js/demo-12.js"></script>*/
/* <script src="{{baseURL}}/assets/admin/js/jquery.mCustomScrollbar.concat.min.js"></script>*/
/* <script src="{{baseURL}}/assets/admin/js/jquery.mousewheel.min.js"></script>*/
/* <script src="{{baseURL}}/assets/swal/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>*/
/* */
/* {% if script %}*/
/* <script src = "{{script}}"></script>*/
/* {% endif %}*/
/* </body>*/
/* */
/* </html>*/
/* */
