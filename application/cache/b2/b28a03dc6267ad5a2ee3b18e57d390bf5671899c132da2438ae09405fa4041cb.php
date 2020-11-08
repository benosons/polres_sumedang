<?php

/* auth/login.html */
class __TwigTemplate_12cc0647c2973c7e9d9d347380a5c601d1b2c3997475b121bf8b22efcecb3582 extends Twig_Template
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
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"description\" content=\"Phoenixcoded\">
    <meta name=\"keywords\" content=\", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app\">
    <meta name=\"author\" content=\"Phoenixcoded\">
    <!-- Favicon icon -->

    <link rel=\"icon\" href=\"assets/admin/images/favicon.ico\" type=\"image/x-icon\">
    <!-- Google font-->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800\" rel=\"stylesheet\">
    <!-- Required Fremwork -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css\">
    <!-- themify-icons line icon -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "assets/admin/icon/themify-icons/themify-icons.css\">
    <!-- ico font -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "assets/admin/icon/icofont/css/icofont.css\">
    <!-- Style.css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "assets/admin/css/style.css\">
    <!-- color .css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "assets/admin/css/color/color-1.css\" id=\"color\"/>
</head>

<body class=\"fix-menu\">
    <section class=\"login p-fixed d-flex text-center bg-primary common-img-bg\">
        <!-- Container-fluid starts -->
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <!-- Authentication card start -->
                    <div class=\"login-card card-block auth-body\">
                        <form class=\"md-float-material\" action=\"auth\" method=\"post\">
                            <div class=\"text-center\">
                                <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "assets/admin/images/auth/logo.png\" alt=\"logo.png\">
                            </div>
                            <div class=\"auth-box\">
                                <div class=\"row m-b-20\">
                                    <div class=\"col-md-12\">
                                        <h3 class=\"text-left txt-primary\">Sign In</h3>
                                    </div>
                                </div>
                                <hr/>
                                <div class=\"input-group\">
                                    <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Masukan Username\">
                                    <span class=\"md-line\"></span>
                                </div>
                                <div class=\"input-group\">
                                    <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Password\">
                                    <span class=\"md-line\"></span>
                                </div>
                                <div class=\"row m-t-25 text-left\">
                                    <div class=\"col-sm-7 col-xs-12\">
                                        <div class=\"checkbox-fade fade-in-primary\">
                                            <label>
                                                <input type=\"checkbox\" value=\"\">
                                                <span class=\"cr\"><i class=\"cr-icon icofont icofont-ui-check txt-primary\"></i></span>
                                                <span class=\"text-inverse\">Remember me</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-5 col-xs-12 forgot-phone text-right\">
                                        <a href=\"http://html.phoenixcoded.net/flatable/default/forgot-password.html\" class=\"text-right f-w-600 text-inverse\"> Forgot Your Password?</a>
                                    </div>
                                </div>
                                <div class=\"row m-t-30\">
                                    <div class=\"col-md-12\">
                                        <button type=\"submit\" class=\"btn btn-primary btn-md btn-block waves-effect text-center m-b-20\">Sign in</button>
                                    </div>
                                </div>
                                <hr/>
                                <div class=\"row\">
                                    <div class=\"col-md-10\">
                                        <p class=\"text-inverse text-left m-b-0\">Thank you and enjoy our website.</p>
                                        <p class=\"text-inverse text-left\"><b>Your Autentification Team</b></p>
                                    </div>
                                    <div class=\"col-md-2\">
                                        <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "assets/admin/images/auth/Logo-small-bottom.png\" alt=\"small-logo.png\">
                                    </div>
                                </div>

                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    <!-- Warning Section Starts -->
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
    <!-- Required Jquery -->
    <script type=\"text/javascript\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "assets/admin/bower_components/jquery/dist/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "assets/admin/bower_components/jquery-ui/jquery-ui.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "assets/admin/bower_components/tether/dist/js/tether.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js\"></script>
    <!-- jquery slimscroll js -->
    <script type=\"text/javascript\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.js\"></script>
    <!-- modernizr js -->
    <script type=\"text/javascript\" src=\"";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "assets/admin/bower_components/modernizr/modernizr.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "assets/admin/bower_components/modernizr/feature-detects/css-scrollbars.js\"></script>
    <!-- i18next.min.js -->
    <script type=\"text/javascript\" src=\"";
        // line 160
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "assets/admin/bower_components/i18next/i18next.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "assets/admin/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "assets/admin/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "assets/admin/bower_components/jquery-i18next/jquery-i18next.min.js\"></script>
    <!-- Custom js -->
    <script type=\"text/javascript\" src=\"";
        // line 165
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "assets/admin/js/script.js\"></script>
    <!-- color js --->
    <script type=\"text/javascript\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "assets/admin/js/common-pages.js\"></script>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "auth/login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 167,  239 => 165,  234 => 163,  230 => 162,  226 => 161,  222 => 160,  217 => 158,  213 => 157,  208 => 155,  203 => 153,  199 => 152,  195 => 151,  191 => 150,  127 => 89,  81 => 46,  65 => 33,  60 => 31,  55 => 29,  50 => 27,  45 => 25,  19 => 1,);
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
/*     <!-- Meta -->*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge" />*/
/*     <meta name="description" content="Phoenixcoded">*/
/*     <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">*/
/*     <meta name="author" content="Phoenixcoded">*/
/*     <!-- Favicon icon -->*/
/* */
/*     <link rel="icon" href="assets/admin/images/favicon.ico" type="image/x-icon">*/
/*     <!-- Google font-->*/
/*     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">*/
/*     <!-- Required Fremwork -->*/
/*     <link rel="stylesheet" type="text/css" href="{{baseURL}}assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">*/
/*     <!-- themify-icons line icon -->*/
/*     <link rel="stylesheet" type="text/css" href="{{baseURL}}assets/admin/icon/themify-icons/themify-icons.css">*/
/*     <!-- ico font -->*/
/*     <link rel="stylesheet" type="text/css" href="{{baseURL}}assets/admin/icon/icofont/css/icofont.css">*/
/*     <!-- Style.css -->*/
/*     <link rel="stylesheet" type="text/css" href="{{baseURL}}assets/admin/css/style.css">*/
/*     <!-- color .css -->*/
/*     <link rel="stylesheet" type="text/css" href="{{baseURL}}assets/admin/css/color/color-1.css" id="color"/>*/
/* </head>*/
/* */
/* <body class="fix-menu">*/
/*     <section class="login p-fixed d-flex text-center bg-primary common-img-bg">*/
/*         <!-- Container-fluid starts -->*/
/*         <div class="container-fluid">*/
/*             <div class="row">*/
/*                 <div class="col-sm-12">*/
/*                     <!-- Authentication card start -->*/
/*                     <div class="login-card card-block auth-body">*/
/*                         <form class="md-float-material" action="auth" method="post">*/
/*                             <div class="text-center">*/
/*                                 <img src="{{baseURL}}assets/admin/images/auth/logo.png" alt="logo.png">*/
/*                             </div>*/
/*                             <div class="auth-box">*/
/*                                 <div class="row m-b-20">*/
/*                                     <div class="col-md-12">*/
/*                                         <h3 class="text-left txt-primary">Sign In</h3>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <hr/>*/
/*                                 <div class="input-group">*/
/*                                     <input type="email" name="email" class="form-control" placeholder="Masukan Username">*/
/*                                     <span class="md-line"></span>*/
/*                                 </div>*/
/*                                 <div class="input-group">*/
/*                                     <input type="password" name="password" class="form-control" placeholder="Password">*/
/*                                     <span class="md-line"></span>*/
/*                                 </div>*/
/*                                 <div class="row m-t-25 text-left">*/
/*                                     <div class="col-sm-7 col-xs-12">*/
/*                                         <div class="checkbox-fade fade-in-primary">*/
/*                                             <label>*/
/*                                                 <input type="checkbox" value="">*/
/*                                                 <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>*/
/*                                                 <span class="text-inverse">Remember me</span>*/
/*                                             </label>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="col-sm-5 col-xs-12 forgot-phone text-right">*/
/*                                         <a href="http://html.phoenixcoded.net/flatable/default/forgot-password.html" class="text-right f-w-600 text-inverse"> Forgot Your Password?</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="row m-t-30">*/
/*                                     <div class="col-md-12">*/
/*                                         <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign in</button>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <hr/>*/
/*                                 <div class="row">*/
/*                                     <div class="col-md-10">*/
/*                                         <p class="text-inverse text-left m-b-0">Thank you and enjoy our website.</p>*/
/*                                         <p class="text-inverse text-left"><b>Your Autentification Team</b></p>*/
/*                                     </div>*/
/*                                     <div class="col-md-2">*/
/*                                         <img src="{{baseURL}}assets/admin/images/auth/Logo-small-bottom.png" alt="small-logo.png">*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                             </div>*/
/*                         </form>*/
/*                         <!-- end of form -->*/
/*                     </div>*/
/*                     <!-- Authentication card end -->*/
/*                 </div>*/
/*                 <!-- end of col-sm-12 -->*/
/*             </div>*/
/*             <!-- end of row -->*/
/*         </div>*/
/*         <!-- end of container-fluid -->*/
/*     </section>*/
/*     <!-- Warning Section Starts -->*/
/*     <!-- Older IE warning message -->*/
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
/*     <!-- Warning Section Ends -->*/
/*     <!-- Required Jquery -->*/
/*     <script type="text/javascript" src="{{baseURL}}assets/admin/bower_components/jquery/dist/jquery.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseURL}}assets/admin/bower_components/jquery-ui/jquery-ui.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseURL}}assets/admin/bower_components/tether/dist/js/tether.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseURL}}assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>*/
/*     <!-- jquery slimscroll js -->*/
/*     <script type="text/javascript" src="{{baseURL}}assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>*/
/*     <!-- modernizr js -->*/
/*     <script type="text/javascript" src="{{baseURL}}assets/admin/bower_components/modernizr/modernizr.js"></script>*/
/*     <script type="text/javascript" src="{{baseURL}}assets/admin/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>*/
/*     <!-- i18next.min.js -->*/
/*     <script type="text/javascript" src="{{baseURL}}assets/admin/bower_components/i18next/i18next.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseURL}}assets/admin/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseURL}}assets/admin/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseURL}}assets/admin/bower_components/jquery-i18next/jquery-i18next.min.js"></script>*/
/*     <!-- Custom js -->*/
/*     <script type="text/javascript" src="{{baseURL}}assets/admin/js/script.js"></script>*/
/*     <!-- color js --->*/
/*     <script type="text/javascript" src="{{baseURL}}assets/admin/js/common-pages.js"></script>*/
/* </body>*/
/* */
/* </html>*/
/* */
