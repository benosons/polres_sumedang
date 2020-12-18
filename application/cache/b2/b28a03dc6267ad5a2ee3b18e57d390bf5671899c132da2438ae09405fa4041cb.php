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
    <title>Login - Kepolisian Resor Sumedang</title>
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
    <!-- <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800\" rel=\"stylesheet\"> -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/fonts/family=Open+Sans.css\" rel=\"stylesheet\">
    <!-- Required Fremwork -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css\">
    <!-- themify-icons line icon -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/icon/themify-icons/themify-icons.css\">
    <!-- ico font -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/icon/icofont/css/icofont.css\">
    <!-- Style.css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/css/style.css\">
    <!-- color .css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/css/color/color-1.css\" id=\"color\"/>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/auth/css/particles.css\" />

    <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/swal/limonte-sweetalert2/7.33.1/sweetalert2.min.css\">

\t\t<link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/swal/fontawesome/v5.7.2/all.css\">

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

<body class=\"fix-menu\" id=\"particles-js\">
    <section class=\"login-mod p-fixed d-flex text-center\" style=\"background-color:none;\">
        <!-- Container-fluid starts -->
        <input hidden id=\"message\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "\"/>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <!-- Authentication card start -->
                    <div class=\"login-card card-block auth-body\">
                        <form class=\"md-float-material\" action=\"auth\" method=\"post\">
                            <div class=\"text-center\">
                                <a href=\"home\"><img src=\"";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/images/polri.png\" alt=\"logo.png\" style=\"width: 100px;\"></a>
                            </div>
                            <div class=\"auth-box\">
                                <div class=\"row m-b-20\">
                                    <div class=\"col-md-12\">
                                        <h3 class=\"text-left txt-primary\">Log In</h3>
                                    </div>
                                </div>
                                <hr/>
                                <div class=\"input-group\">
                                    <input type=\"username\" name=\"username\" class=\"form-control\" placeholder=\"Masukan Username\">
                                    <span class=\"md-line\"></span>
                                </div>
                                <div class=\"input-group\">
                                    <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Password\">
                                    <span class=\"md-line\"></span>
                                </div>
                                <div class=\"row m-t-25 text-left\">
                                    <div class=\"col-sm-6 col-xs-12\">
                                        <div class=\"checkbox-fade fade-in-warning\">
                                            <label>
                                                <input type=\"checkbox\" value=\"\">
                                                <span class=\"cr\"><i class=\"cr-icon icofont icofont-ui-check txt-primary\"></i></span>
                                                <span class=\"text-inverse\">Remember me</span>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- <div class=\"col-sm-5 col-xs-12 forgot-phone text-right\">
                                        <a href=\"http://html.phoenixcoded.net/flatable/default/forgot-password.html\" class=\"text-right f-w-600 text-inverse\"> Forgot Your Password?</a>
                                    </div> -->
                                    <div class=\"col-sm-6 col-xs-12 forgot-phone text-right\">
                                        <a href=\"register\" class=\"text-right f-w-600 text-inverse\"> Registrasi User Baru.</a>
                                    </div>
                                </div>
                                <div class=\"row m-t-30\">
                                    <div class=\"col-md-12\">
                                        <button type=\"submit\" class=\"btn btn-warning btn-md btn-block waves-effect text-center m-b-20\">Log in</button>
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
        // line 187
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/jquery/dist/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 188
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/jquery-ui/jquery-ui.min.js\"></script>
    
    <script type=\"text/javascript\" src=\"";
        // line 190
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/tether/dist/js/tether.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 191
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js\"></script>
    <!-- jquery slimscroll js -->
    <script type=\"text/javascript\" src=\"";
        // line 193
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.js\"></script>
    <!-- modernizr js -->
    <script type=\"text/javascript\" src=\"";
        // line 195
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/modernizr/modernizr.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 196
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/modernizr/feature-detects/css-scrollbars.js\"></script>
    <!-- i18next.min.js -->
    <script type=\"text/javascript\" src=\"";
        // line 198
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/i18next/i18next.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 199
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 200
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 201
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/bower_components/jquery-i18next/jquery-i18next.min.js\"></script>
    <!-- Custom js -->
    <script type=\"text/javascript\" src=\"";
        // line 203
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/js/script.js\"></script>
    <!-- color js --->
    <script type=\"text/javascript\" src=\"";
        // line 205
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/js/common-pages.js\"></script>

    <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/auth/particles/2.0.0/particles.min.js\"></script> <!-- stats.js lib -->
    <script src=\"http://threejs.org/examples/js/libs/stats.min.js\"></script>
    <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/auth/js/particles.js\"></script>
    <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/swal/limonte-sweetalert2/7.33.1/sweetalert2.min.js\"></script>
    <script>

    if(\$('#message').val()){
      const message = \$('#message').val();
      const code = \$('#message').val();
      Swal.fire({
        type: 'error',
        title:message,
        showConfirmButton: true,
        // showCancelButton: true,
        confirmButtonText: `Ok`,
      }).then((result) => {
        console.log(result);
        if (result.value) {
          \$('#message').val('');
        }
      })
      // Swal.fire(
      //   'Gagal',
      //   message + '!',
      //   'error'
      // );
    }
    </script>
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
        return array (  311 => 210,  307 => 209,  302 => 207,  297 => 205,  292 => 203,  287 => 201,  283 => 200,  279 => 199,  275 => 198,  270 => 196,  266 => 195,  261 => 193,  256 => 191,  252 => 190,  247 => 188,  243 => 187,  134 => 81,  123 => 73,  87 => 40,  82 => 38,  77 => 36,  72 => 34,  67 => 32,  62 => 30,  57 => 28,  52 => 26,  47 => 24,  41 => 21,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/*     <title>Login - Kepolisian Resor Sumedang</title>*/
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
/*     <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> -->*/
/*     <link href="{{baseURL}}/assets/fonts/family=Open+Sans.css" rel="stylesheet">*/
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
/* */
/*     <link rel="stylesheet" href="{{baseURL}}/assets/swal/limonte-sweetalert2/7.33.1/sweetalert2.min.css">*/
/* */
/* 		<link rel="stylesheet" href="{{baseURL}}/assets/swal/fontawesome/v5.7.2/all.css">*/
/* */
/*   <style>*/
/*     .login-mod {*/
/*         align-items: center;*/
/*         display: flex;*/
/*         height: 100%;*/
/*         position: fixed;*/
/*         text-align: center;*/
/*         width: 100%;*/
/*     }*/
/* */
/*     .form-control:focus {*/
/*         border-color: #f1c40f !important;*/
/*     }*/
/* */
/*     .swal2-modal {*/
/* 			font-size: 85%;*/
/* 		}*/
/* */
/* 		.swal2-popup .swal2-styled.swal2-confirm {*/
/* 	    background-color: #ED1C24;*/
/* 		}*/
/* */
/* 		.swal2-popup .swal2-title {*/
/* 			font-size: 1.3em;*/
/* 		}*/
/*   </style>*/
/* </head>*/
/* */
/* <body class="fix-menu" id="particles-js">*/
/*     <section class="login-mod p-fixed d-flex text-center" style="background-color:none;">*/
/*         <!-- Container-fluid starts -->*/
/*         <input hidden id="message" value="{{message}}"/>*/
/*         <div class="container-fluid">*/
/*             <div class="row">*/
/*                 <div class="col-sm-12">*/
/*                     <!-- Authentication card start -->*/
/*                     <div class="login-card card-block auth-body">*/
/*                         <form class="md-float-material" action="auth" method="post">*/
/*                             <div class="text-center">*/
/*                                 <a href="home"><img src="{{baseURL}}/assets/images/polri.png" alt="logo.png" style="width: 100px;"></a>*/
/*                             </div>*/
/*                             <div class="auth-box">*/
/*                                 <div class="row m-b-20">*/
/*                                     <div class="col-md-12">*/
/*                                         <h3 class="text-left txt-primary">Log In</h3>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <hr/>*/
/*                                 <div class="input-group">*/
/*                                     <input type="username" name="username" class="form-control" placeholder="Masukan Username">*/
/*                                     <span class="md-line"></span>*/
/*                                 </div>*/
/*                                 <div class="input-group">*/
/*                                     <input type="password" name="password" class="form-control" placeholder="Password">*/
/*                                     <span class="md-line"></span>*/
/*                                 </div>*/
/*                                 <div class="row m-t-25 text-left">*/
/*                                     <div class="col-sm-6 col-xs-12">*/
/*                                         <div class="checkbox-fade fade-in-warning">*/
/*                                             <label>*/
/*                                                 <input type="checkbox" value="">*/
/*                                                 <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>*/
/*                                                 <span class="text-inverse">Remember me</span>*/
/*                                             </label>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <!-- <div class="col-sm-5 col-xs-12 forgot-phone text-right">*/
/*                                         <a href="http://html.phoenixcoded.net/flatable/default/forgot-password.html" class="text-right f-w-600 text-inverse"> Forgot Your Password?</a>*/
/*                                     </div> -->*/
/*                                     <div class="col-sm-6 col-xs-12 forgot-phone text-right">*/
/*                                         <a href="register" class="text-right f-w-600 text-inverse"> Registrasi User Baru.</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="row m-t-30">*/
/*                                     <div class="col-md-12">*/
/*                                         <button type="submit" class="btn btn-warning btn-md btn-block waves-effect text-center m-b-20">Log in</button>*/
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
/*     <script type="text/javascript" src="{{baseURL}}/assets/admin/bower_components/jquery/dist/jquery.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseURL}}/assets/admin/bower_components/jquery-ui/jquery-ui.min.js"></script>*/
/*     */
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
/*     <script src="{{baseURL}}/assets/auth/particles/2.0.0/particles.min.js"></script> <!-- stats.js lib -->*/
/*     <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>*/
/*     <script src="{{baseURL}}/assets/auth/js/particles.js"></script>*/
/*     <script src="{{baseURL}}/assets/swal/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>*/
/*     <script>*/
/* */
/*     if($('#message').val()){*/
/*       const message = $('#message').val();*/
/*       const code = $('#message').val();*/
/*       Swal.fire({*/
/*         type: 'error',*/
/*         title:message,*/
/*         showConfirmButton: true,*/
/*         // showCancelButton: true,*/
/*         confirmButtonText: `Ok`,*/
/*       }).then((result) => {*/
/*         console.log(result);*/
/*         if (result.value) {*/
/*           $('#message').val('');*/
/*         }*/
/*       })*/
/*       // Swal.fire(*/
/*       //   'Gagal',*/
/*       //   message + '!',*/
/*       //   'error'*/
/*       // );*/
/*     }*/
/*     </script>*/
/* </body>*/
/* */
/* </html>*/
/* */
