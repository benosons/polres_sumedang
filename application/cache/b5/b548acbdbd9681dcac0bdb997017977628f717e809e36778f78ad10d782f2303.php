<?php

/* auth/register.html */
class __TwigTemplate_14849da401759044f6f95c3daca24a41c87cdfbd9aa7eff34d84fd680ce89823 extends Twig_Template
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
    <title>Registrasi - Kepolisian Resort Sumedang</title>
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

    <link rel=\"icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/favicon.ico\" type=\"image/x-icon\">
    <!-- Google font-->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800\" rel=\"stylesheet\">
    <!-- Required Fremwork -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css\">
    <!-- themify-icons line icon -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/icon/themify-icons/themify-icons.css\">
    <!-- ico font -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/icon/icofont/css/icofont.css\">
    <!-- Style.css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/css/style.css\">
    <!-- color .css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/css/color/color-1.css\" id=\"color\"/>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/auth/css/particles.css\" />
    <style>
      .login-mod {
          align-items: center;
          display: flex;
          height: 100%;
          position: fixed;
          text-align: center;
          width: 100%;
      }

      .form-control:focus {
          border-color: #f1c40f !important;
      }
    </style>
</head>

<body class=\"fix-menu\" id=\"particles-js\">
    <section class=\"login-mod p-fixed d-flex text-center\">
        <!-- Container-fluid starts -->
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <!-- Authentication card start -->
                    <div class=\"login-card card-block auth-body\">
                        <form class=\"md-float-material\" action=\"reg\" method=\"post\">
                            <div class=\"text-center\">
                                <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/auth/logo.png\" alt=\"logo.png\">
                            </div>
                            <div class=\"auth-box\">
                                <div class=\"row m-b-20\">
                                    <div class=\"col-md-12\">
                                        <h3 class=\"text-center txt-primary\">Registrasi User Baru.</h3>
                                    </div>
                                </div>
                                <hr/>
                                <div class=\"input-group\">
                                    <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Choose Username\">
                                    <span class=\"md-line\"></span>
                                </div>
                                <div class=\"input-group\">
                                    <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Your Email Address\">
                                    <span class=\"md-line\"></span>
                                </div>
                                <div class=\"input-group\">
                                    <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Choose Password\">
                                    <span class=\"md-line\"></span>
                                </div>
                                <div class=\"input-group\">
                                    <input type=\"password\" name=\"confpassword\" class=\"form-control\" placeholder=\"Confirm Password\">
                                    <span class=\"md-line\"></span>
                                </div>
                                <div class=\"row m-t-25 text-left\">
                                    <div class=\"col-md-12\">
                                        <div class=\"checkbox-fade fade-in-warning\">
                                            <label>
                                                <input type=\"checkbox\" value=\"\">
                                                <span class=\"cr\"><i class=\"cr-icon icofont icofont-ui-check txt-primary\"></i></span>
                                                <span class=\"text-inverse\">I read and accept <a href=\"auth-sign-up.html#\">Terms &amp; Conditions.</a></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"col-md-12\">
                                        <div class=\"checkbox-fade fade-in-warning\">
                                            <label>
                                                <input type=\"checkbox\" value=\"\">
                                                <span class=\"cr\"><i class=\"cr-icon icofont icofont-ui-check txt-primary\"></i></span>
                                                <span class=\"text-inverse\">Send me the <a href=\"auth-sign-up.html\">Newsletter</a> weekly.</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row m-t-30\">
                                    <div class=\"col-md-12\">
                                        <button type=\"submit\" class=\"btn btn-warning btn-md btn-block waves-effect text-center m-b-20\">Registrasi.</button>
                                    </div>
                                </div>
                                <hr/>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                      <img src=\"http://bios-studio.com/wp-content/uploads/2020/07/bios-no-bg-1.png\" alt=\"small-logo.png\" style=\"width: 30px;\">
                                    </div>
                                    <div class=\"col-md-12\">
                                        <span class=\"text-inverse text-center\" style=\"font-size:9px;\" >&copy; Copyright <strong><span><a href=\"http://bios-studio.com/\" target=\"_blank\" style=\"font-size:9px;\">bios-studio</a></span></strong>. All Rights Reserved</span>
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
                    <img src=\"";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/browser/chrome.png\" alt=\"Chrome\">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href=\"https://www.mozilla.org/en-US/firefox/new/\">
                    <img src=\"";
        // line 149
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/browser/firefox.png\" alt=\"Firefox\">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href=\"http://www.opera.com\">
                    <img src=\"";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/browser/opera.png\" alt=\"Opera\">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href=\"https://www.apple.com/safari/\">
                    <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/browser/safari.png\" alt=\"Safari\">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href=\"http://windows.microsoft.com/en-us/internet-explorer/download-ie\">
                    <img src=\"";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/browser/ie.png\" alt=\"\">
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
        // line 178
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/jquery/dist/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 179
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/jquery-ui/jquery-ui.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/tether/dist/js/tether.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 181
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js\"></script>
    <!-- jquery slimscroll js -->
    <script type=\"text/javascript\" src=\"";
        // line 183
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.js\"></script>
    <!-- modernizr js -->
    <script type=\"text/javascript\" src=\"";
        // line 185
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/modernizr/modernizr.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 186
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/modernizr/feature-detects/css-scrollbars.js\"></script>
    <!-- i18next.min.js -->
    <script type=\"text/javascript\" src=\"";
        // line 188
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/i18next/i18next.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 189
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 190
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 191
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/jquery-i18next/jquery-i18next.min.js\"></script>
    <!-- Custom js -->
    <script type=\"text/javascript\" src=\"";
        // line 193
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/js/script.js\"></script>
    <!-- color js --->
    <script type=\"text/javascript\" src=\"";
        // line 195
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/js/common-pages.js\"></script>

    <script src=\"http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js\"></script> <!-- stats.js lib -->
    <script src=\"http://threejs.org/examples/js/libs/stats.min.js\"></script>
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/auth/js/particles.js\"></script>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "auth/register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 199,  290 => 195,  285 => 193,  280 => 191,  276 => 190,  272 => 189,  268 => 188,  263 => 186,  259 => 185,  254 => 183,  249 => 181,  245 => 180,  241 => 179,  237 => 178,  223 => 167,  214 => 161,  205 => 155,  196 => 149,  187 => 143,  103 => 62,  73 => 35,  68 => 33,  63 => 31,  58 => 29,  53 => 27,  48 => 25,  41 => 21,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/*     <title>Registrasi - Kepolisian Resort Sumedang</title>*/
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
/*     <link rel="icon" href="{{baseURL}}/assets/users/images/favicon.ico" type="image/x-icon">*/
/*     <!-- Google font-->*/
/*     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">*/
/*     <!-- Required Fremwork -->*/
/*     <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">*/
/*     <!-- themify-icons line icon -->*/
/*     <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/icon/themify-icons/themify-icons.css">*/
/*     <!-- ico font -->*/
/*     <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/icon/icofont/css/icofont.css">*/
/*     <!-- Style.css -->*/
/*     <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/css/style.css">*/
/*     <!-- color .css -->*/
/*     <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/admin/css/color/color-1.css" id="color"/>*/
/* */
/*     <link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/auth/css/particles.css" />*/
/*     <style>*/
/*       .login-mod {*/
/*           align-items: center;*/
/*           display: flex;*/
/*           height: 100%;*/
/*           position: fixed;*/
/*           text-align: center;*/
/*           width: 100%;*/
/*       }*/
/* */
/*       .form-control:focus {*/
/*           border-color: #f1c40f !important;*/
/*       }*/
/*     </style>*/
/* </head>*/
/* */
/* <body class="fix-menu" id="particles-js">*/
/*     <section class="login-mod p-fixed d-flex text-center">*/
/*         <!-- Container-fluid starts -->*/
/*         <div class="container-fluid">*/
/*             <div class="row">*/
/*                 <div class="col-sm-12">*/
/*                     <!-- Authentication card start -->*/
/*                     <div class="login-card card-block auth-body">*/
/*                         <form class="md-float-material" action="reg" method="post">*/
/*                             <div class="text-center">*/
/*                                 <img src="{{baseURL}}/assets/admin/images/auth/logo.png" alt="logo.png">*/
/*                             </div>*/
/*                             <div class="auth-box">*/
/*                                 <div class="row m-b-20">*/
/*                                     <div class="col-md-12">*/
/*                                         <h3 class="text-center txt-primary">Registrasi User Baru.</h3>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <hr/>*/
/*                                 <div class="input-group">*/
/*                                     <input type="text" name="name" class="form-control" placeholder="Choose Username">*/
/*                                     <span class="md-line"></span>*/
/*                                 </div>*/
/*                                 <div class="input-group">*/
/*                                     <input type="email" name="email" class="form-control" placeholder="Your Email Address">*/
/*                                     <span class="md-line"></span>*/
/*                                 </div>*/
/*                                 <div class="input-group">*/
/*                                     <input type="password" name="password" class="form-control" placeholder="Choose Password">*/
/*                                     <span class="md-line"></span>*/
/*                                 </div>*/
/*                                 <div class="input-group">*/
/*                                     <input type="password" name="confpassword" class="form-control" placeholder="Confirm Password">*/
/*                                     <span class="md-line"></span>*/
/*                                 </div>*/
/*                                 <div class="row m-t-25 text-left">*/
/*                                     <div class="col-md-12">*/
/*                                         <div class="checkbox-fade fade-in-warning">*/
/*                                             <label>*/
/*                                                 <input type="checkbox" value="">*/
/*                                                 <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>*/
/*                                                 <span class="text-inverse">I read and accept <a href="auth-sign-up.html#">Terms &amp; Conditions.</a></span>*/
/*                                             </label>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="col-md-12">*/
/*                                         <div class="checkbox-fade fade-in-warning">*/
/*                                             <label>*/
/*                                                 <input type="checkbox" value="">*/
/*                                                 <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>*/
/*                                                 <span class="text-inverse">Send me the <a href="auth-sign-up.html">Newsletter</a> weekly.</span>*/
/*                                             </label>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="row m-t-30">*/
/*                                     <div class="col-md-12">*/
/*                                         <button type="submit" class="btn btn-warning btn-md btn-block waves-effect text-center m-b-20">Registrasi.</button>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <hr/>*/
/*                                 <div class="row">*/
/*                                     <div class="col-md-12">*/
/*                                       <img src="http://bios-studio.com/wp-content/uploads/2020/07/bios-no-bg-1.png" alt="small-logo.png" style="width: 30px;">*/
/*                                     </div>*/
/*                                     <div class="col-md-12">*/
/*                                         <span class="text-inverse text-center" style="font-size:9px;" >&copy; Copyright <strong><span><a href="http://bios-studio.com/" target="_blank" style="font-size:9px;">bios-studio</a></span></strong>. All Rights Reserved</span>*/
/*                                     </div>*/
/*                                 </div>*/
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
/*                     <img src="{{baseURL}}/assets/admin/images/browser/chrome.png" alt="Chrome">*/
/*                     <div>Chrome</div>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="https://www.mozilla.org/en-US/firefox/new/">*/
/*                     <img src="{{baseURL}}/assets/admin/images/browser/firefox.png" alt="Firefox">*/
/*                     <div>Firefox</div>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="http://www.opera.com">*/
/*                     <img src="{{baseURL}}/assets/admin/images/browser/opera.png" alt="Opera">*/
/*                     <div>Opera</div>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="https://www.apple.com/safari/">*/
/*                     <img src="{{baseURL}}/assets/admin/images/browser/safari.png" alt="Safari">*/
/*                     <div>Safari</div>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">*/
/*                     <img src="{{baseURL}}/assets/admin/images/browser/ie.png" alt="">*/
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
/*     <script type="text/javascript" src="{{baseURL}}/assets/admin/bower_components/jquery/dist/jquery.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseURL}}/assets/admin/bower_components/jquery-ui/jquery-ui.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseURL}}/assets/admin/bower_components/tether/dist/js/tether.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseURL}}/assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>*/
/*     <!-- jquery slimscroll js -->*/
/*     <script type="text/javascript" src="{{baseURL}}/assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>*/
/*     <!-- modernizr js -->*/
/*     <script type="text/javascript" src="{{baseURL}}/assets/admin/bower_components/modernizr/modernizr.js"></script>*/
/*     <script type="text/javascript" src="{{baseURL}}/assets/admin/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>*/
/*     <!-- i18next.min.js -->*/
/*     <script type="text/javascript" src="{{baseURL}}/assets/admin/bower_components/i18next/i18next.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseURL}}/assets/admin/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseURL}}/assets/admin/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseURL}}/assets/admin/bower_components/jquery-i18next/jquery-i18next.min.js"></script>*/
/*     <!-- Custom js -->*/
/*     <script type="text/javascript" src="{{baseURL}}/assets/admin/js/script.js"></script>*/
/*     <!-- color js --->*/
/*     <script type="text/javascript" src="{{baseURL}}/assets/admin/js/common-pages.js"></script>*/
/* */
/*     <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->*/
/*     <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>*/
/*     <script src="{{baseURL}}/assets/auth/js/particles.js"></script>*/
/* </body>*/
/* */
/* </html>*/
/* */
