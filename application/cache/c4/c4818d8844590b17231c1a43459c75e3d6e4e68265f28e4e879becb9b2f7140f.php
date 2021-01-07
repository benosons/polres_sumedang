<?php

/* users/layout.html */
class __TwigTemplate_eb220cae152954f990db1f225de0ec6376a212862b9e7e3c0a23945a64b26cc6 extends Twig_Template
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
<html>
\t<head>
\t\t<title>Kepolisian Resor Sumedang</title>
\t\t<!--meta-->
\t\t<meta charset=\"UTF-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.2\" />
\t\t<meta name=\"format-detection\" content=\"telephone=no\" />
\t\t<meta name=\"keywords\" content=\"Medic, Medical Center\" />
\t\t<meta name=\"description\" content=\"Responsive Medical Health Template\" />
\t\t<!--style-->
\t\t<!-- <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'> -->
\t\t<link href='";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/fonts/family=Roboto.css' rel='stylesheet' type='text/css'>
\t\t<!-- <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'> -->
\t\t<link href='";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/fonts/family=Roboto+Condensed.css' rel='stylesheet' type='text/css'>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/style/reset.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/style/superfish.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/style/prettyPhoto.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/style/jquery.qtip.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/style/style.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/style/menu_styles.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/style/animations.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/style/responsive.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/style/odometer-theme-default.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/style/custom.css\">
\t\t\t\t<!--<link rel=\"stylesheet\" type=\"text/css\" href=\"style/dark_skin.css\">-->
\t\t<!--<link rel=\"stylesheet\" type=\"text/css\" href=\"style/high_contrast_skin.css\">-->
\t\t<link rel=\"shortcut icon\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/favicon.ico\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/style_selector/style_selector.css\">

\t\t<link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/swal/limonte-sweetalert2/7.33.1/sweetalert2.min.css\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/swal/fontawesome/v5.7.2/all.css\">
\t\t<!-- <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.2/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\"> -->

\t\t<!-- <script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/js/jquery-1.12.4.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/js/jquery-migrate-1.4.1.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/js/jquery-ui-1.11.1.custom.min.js\"></script> -->

\t\t<style>
\t\t.col-form-label {
\t\t    font-size: 14px;
\t\t}
\t\t.form-control {
\t\t    font-size: 14px;
\t\t    border-radius: 2px;
\t\t    border-width: 2px;
\t\t}

\t\t.swal2-modal {
\t\t\tfont-size: 75%;
\t\t}

\t\t.swal2-popup .swal2-styled.swal2-confirm {
\t    background-color: #ED1C24;
\t\t}

\t\t.swal2-popup .swal2-title {
\t\t\tfont-size: 1.3em;
\t\t}

\t\t.pull-right {
\t\t\tfloat: right;
\t\t}

\t\t.sf-menu {
\t\t\tpadding-left: 20rem;
\t\t}

\t\t.slider li.slide img, .pr_preload {
\t\t    display: block;
\t\t}

\t\t.features_icon {
\t\t\tbackground-size: 50px;
\t\t}

\t\t.item_content .features_icon {
\t\t\twidth: 50px!important;
    \theight: 50px!important;
\t\t}

\t\t</style>
\t</head>
\t<input type=\"hidden\" id=\"baseURL\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "\">
\t<!--<body class=\"image_1\">
\t<body class=\"image_1 overlay\">
\t<body class=\"image_2\">
\t<body class=\"image_2 overlay\">
\t<body class=\"image_3\">
\t<body class=\"image_3 overlay\">
\t<body class=\"image_4\">
\t<body class=\"image_4 overlay\">
\t<body class=\"image_5\">
\t<body class=\"image_5 overlay\">
\t<body class=\"pattern_1\">
\t<body class=\"pattern_2\">
\t<body class=\"pattern_3\">
\t<body class=\"pattern_4\">
\t<body class=\"pattern_5\">
\t<body class=\"pattern_6\">
\t<body class=\"pattern_7\">
\t<body class=\"pattern_8\">
\t<body class=\"pattern_9\">
\t<body class=\"pattern_10\">-->
\t<body class=\"\">
\t\t<div class=\"site_container\">";
        // line 108
        $this->loadTemplate("users/header.html", "users/layout.html", 108)->display($context);
        // line 110
        $this->loadTemplate("users/menu.html", "users/layout.html", 110)->display($context);
        // line 111
        echo "

<div class=\"page\">";
        // line 114
        if (((isset($context["page"]) ? $context["page"] : null) == "home")) {
            // line 115
            $this->loadTemplate("users/carousel.html", "users/layout.html", 115)->display($context);
        }
        // line 117
        $this->displayBlock('content', $context, $blocks);
        // line 118
        echo "
</div>";
        // line 121
        $this->loadTemplate("users/footer.html", "users/layout.html", 121)->display($context);
        // line 122
        echo "
</div>
\t\t<div class=\"background_overlay\"></div>
\t\t<!--js-->
\t\t<script type=\"text/javascript\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/js/jquery-3.5.1.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/js/jquery-migrate-3.3.2.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 128
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/js/ui/1.12.1/jquery-ui.min.js\"></script>
\t\t<script type=\"text/javascript\">
\t\tjQuery.browser = {};
\t\t(function () {
\t\t\tjQuery.browser.msie = false;
\t\t\tjQuery.browser.version = 0;
\t\t\tif (navigator.userAgent.match(/MSIE ([0-9]+)\\./)) {
\t\t\t\tjQuery.browser.msie = true;
\t\t\t\tjQuery.browser.version = RegExp.\$1;
\t\t\t}
\t\t});
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/js/jquery.ba-bbq.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/js/jquery.easing.1.3.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/js/jquery.carouFredSel-6.2.1-packed.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/js/jquery.touchSwipe.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/js/jquery.transit.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/js/jquery.sliderControl.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/js/jquery.timeago.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 147
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/js/jquery.hint.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 148
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/js/jquery.prettyPhoto.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 149
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/js/jquery.qtip.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/js/jquery.blockUI.js\"></script>

\t\t<script type=\"text/javascript\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/js/odometer.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/style_selector/style_selector.js\"></script>
\t\t<script src=\"";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/swal/limonte-sweetalert2/7.33.1/sweetalert2.min.js\"></script>
\t\t<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/action-js/global.js\"></script>";
        // line 156
        if ((isset($context["script"]) ? $context["script"] : null)) {
            // line 157
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["script"]) ? $context["script"] : null), "html", null, true);
            echo "\"></script>";
        }
        // line 159
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/js/main.js\"></script>
\t\t<script>
\t\t\$(window).scroll(function () {
\t\t  if(\$(window).scrollTop() > \$('.header_container').height()) {
\t\t    \$(\"#menu-bar\").addClass('move');
\t\t  } else {
\t\t    \$(\"#menu-bar\").removeClass('move');
\t\t  }
\t\t});
\t\t</script>
<div class=\"style_selector\">
\t<div class=\"style_selector_icon\">
\t\t&nbsp;
\t</div>
\t<div class=\"style_selector_content\">
\t\t<h4>Style Selector</h4>
\t\t<ul>
\t\t\t<li class=\"style_selector_header hide_on_mobile\">
\t\t\t\t<label>Header Style</label>
\t\t\t\t<select name=\"header_style\">
\t\t\t\t\t<option value=\"style_1\" selected=\"selected\">Style 1</option>
\t\t\t\t\t<option value=\"style_2\">Style 2</option>
\t\t\t\t\t<option value=\"style_3\">Style 3</option>
\t\t\t\t\t<option value=\"style_4\">Style 4</option>
\t\t\t\t\t<option value=\"style_5\">Style 5</option>
\t\t\t\t\t<option value=\"style_6\">Style 6</option>
\t\t\t\t\t<option value=\"style_7\">Style 7</option>
\t\t\t\t\t<option value=\"style_8\">Style 8</option>
\t\t\t\t\t<option value=\"style_9\">Style 9</option>
\t\t\t\t\t<option value=\"style_10\">Style 10</option>
\t\t\t\t\t<option value=\"style_11\">Style 11</option>
\t\t\t\t\t<option value=\"style_12\">Style 12</option>
\t\t\t\t\t<option value=\"style_13\">Style 13</option>
\t\t\t\t\t<option value=\"style_14\">Style 14</option>
\t\t\t\t\t<option value=\"style_15\">Style 15</option>
\t\t\t\t\t<option value=\"style_high_contrast\">Style high contrast</option>
\t\t\t\t</select>
\t\t\t</li>
\t\t\t<li class=\"hide_on_mobile\">
\t\t\t\t<label>Menu Type</label>
\t\t\t\t<select name=\"menu_type\">
\t\t\t\t\t<option value=\"default\" selected=\"selected\">Default</option>
\t\t\t\t\t<option value=\"sticky\">Sticky</option>
\t\t\t\t</select>
\t\t\t</li>
\t\t\t<li class=\"hide_on_mobile\">
\t\t\t\t<label>Layout Style</label>
\t\t\t\t<select name=\"layout_style\">
\t\t\t\t\t<option value=\"wide\" selected=\"selected\">Wide</option>
\t\t\t\t\t<option value=\"boxed\">Boxed</option>
\t\t\t\t</select>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<label>Color Skin</label>
\t\t\t\t<select name=\"color_skin\">
\t\t\t\t\t<option value=\"light\" selected=\"selected\">Light</option>
\t\t\t\t\t<option value=\"dark\">Dark</option>
\t\t\t\t\t<option value=\"high_contrast\">Hight Contrast</option>
\t\t\t\t</select>
\t\t\t</li>
\t\t\t<li class=\"clearfix hide_on_mobile\">
\t\t\t\t<label>Boxed Layout Pattern</label>
\t\t\t\t<ul class=\"layout_chooser\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.html@page=home_3.html#\" class=\"pattern_1\">
\t\t\t\t\t\t\t<span class=\"tick\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.html@page=home_3.html#\" class=\"pattern_2\">
\t\t\t\t\t\t\t<span class=\"tick\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.html@page=home_3.html#\" class=\"pattern_3\">
\t\t\t\t\t\t\t<span class=\"tick\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.html@page=home_3.html#\" class=\"pattern_4\">
\t\t\t\t\t\t\t<span class=\"tick\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.html@page=home_3.html#\" class=\"pattern_5\">
\t\t\t\t\t\t\t<span class=\"tick\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"first\">
\t\t\t\t\t\t<a href=\"index.html@page=home_3.html#\" class=\"pattern_6\">
\t\t\t\t\t\t\t<span class=\"tick\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.html@page=home_3.html#\" class=\"pattern_7\">
\t\t\t\t\t\t\t<span class=\"tick\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.html@page=home_3.html#\" class=\"pattern_8\">
\t\t\t\t\t\t\t<span class=\"tick\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.html@page=home_3.html#\" class=\"pattern_9\">
\t\t\t\t\t\t\t<span class=\"tick\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.html@page=home_3.html#\" class=\"pattern_10\">
\t\t\t\t\t\t\t<span class=\"tick\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li class=\"clearfix hide_on_mobile\">
\t\t\t\t<label>Boxed Layout Image</label>
\t\t\t\t<ul class=\"layout_chooser\">
\t\t\t\t\t<li class=\"selected\">
\t\t\t\t\t\t<a href=\"index.html@page=home_3.html#\" class=\"image_1\">
\t\t\t\t\t\t\t<span class=\"tick\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.html@page=home_3.html#\" class=\"image_2\">
\t\t\t\t\t\t\t<span class=\"tick\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.html@page=home_3.html#\" class=\"image_3\">
\t\t\t\t\t\t\t<span class=\"tick\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.html@page=home_3.html#\" class=\"image_4\">
\t\t\t\t\t\t\t<span class=\"tick\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.html@page=home_3.html#\" class=\"image_5\">
\t\t\t\t\t\t\t<span class=\"tick\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"first\">
\t\t\t\t\t\t<input type=\"checkbox\" checked=\"checked\" id=\"overlay\"><label class=\"overlay_label\" for=\"overlay\">overlay</label>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t</ul>
\t</div>
</div>
\t</body>
</html>
";
    }

    // line 117
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "users/layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 117,  303 => 159,  298 => 157,  296 => 156,  293 => 155,  289 => 154,  285 => 153,  281 => 152,  276 => 150,  272 => 149,  268 => 148,  264 => 147,  260 => 146,  256 => 145,  252 => 144,  248 => 143,  244 => 142,  240 => 141,  236 => 140,  221 => 128,  217 => 127,  213 => 126,  207 => 122,  205 => 121,  202 => 118,  200 => 117,  197 => 115,  195 => 114,  191 => 111,  189 => 110,  187 => 108,  162 => 84,  112 => 37,  108 => 36,  104 => 35,  98 => 32,  94 => 31,  89 => 29,  85 => 28,  79 => 25,  75 => 24,  71 => 23,  67 => 22,  63 => 21,  59 => 20,  55 => 19,  51 => 18,  47 => 17,  43 => 16,  39 => 15,  34 => 13,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<title>Kepolisian Resor Sumedang</title>*/
/* 		<!--meta-->*/
/* 		<meta charset="UTF-8" />*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.2" />*/
/* 		<meta name="format-detection" content="telephone=no" />*/
/* 		<meta name="keywords" content="Medic, Medical Center" />*/
/* 		<meta name="description" content="Responsive Medical Health Template" />*/
/* 		<!--style-->*/
/* 		<!-- <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'> -->*/
/* 		<link href='{{baseURL}}/assets/fonts/family=Roboto.css' rel='stylesheet' type='text/css'>*/
/* 		<!-- <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'> -->*/
/* 		<link href='{{baseURL}}/assets/fonts/family=Roboto+Condensed.css' rel='stylesheet' type='text/css'>*/
/* 		<link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/users/style/reset.css">*/
/* 		<link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/users/style/superfish.css">*/
/* 		<link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/users/style/prettyPhoto.css">*/
/* 		<link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/users/style/jquery.qtip.css">*/
/* 		<link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/users/style/style.css">*/
/* 		<link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/users/style/menu_styles.css">*/
/* 		<link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/users/style/animations.css">*/
/* 		<link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/users/style/responsive.css">*/
/* 		<link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/users/style/odometer-theme-default.css">*/
/* 		<link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/users/style/custom.css">*/
/* 				<!--<link rel="stylesheet" type="text/css" href="style/dark_skin.css">-->*/
/* 		<!--<link rel="stylesheet" type="text/css" href="style/high_contrast_skin.css">-->*/
/* 		<link rel="shortcut icon" href="{{baseURL}}/assets/users/images/favicon.ico">*/
/* 		<link rel="stylesheet" type="text/css" href="{{baseURL}}/assets/users/style_selector/style_selector.css">*/
/* */
/* 		<link rel="stylesheet" href="{{baseURL}}/assets/swal/limonte-sweetalert2/7.33.1/sweetalert2.min.css">*/
/* 		<link rel="stylesheet" href="{{baseURL}}/assets/swal/fontawesome/v5.7.2/all.css">*/
/* 		<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->*/
/* */
/* 		<!-- <script type="text/javascript" src="{{baseURL}}/assets/users/js/jquery-1.12.4.min.js"></script>*/
/* 		<script type="text/javascript" src="{{baseURL}}/assets/users/js/jquery-migrate-1.4.1.min.js"></script>*/
/* 		<script type="text/javascript" src="{{baseURL}}/assets/users/js/jquery-ui-1.11.1.custom.min.js"></script> -->*/
/* */
/* 		<style>*/
/* 		.col-form-label {*/
/* 		    font-size: 14px;*/
/* 		}*/
/* 		.form-control {*/
/* 		    font-size: 14px;*/
/* 		    border-radius: 2px;*/
/* 		    border-width: 2px;*/
/* 		}*/
/* */
/* 		.swal2-modal {*/
/* 			font-size: 75%;*/
/* 		}*/
/* */
/* 		.swal2-popup .swal2-styled.swal2-confirm {*/
/* 	    background-color: #ED1C24;*/
/* 		}*/
/* */
/* 		.swal2-popup .swal2-title {*/
/* 			font-size: 1.3em;*/
/* 		}*/
/* */
/* 		.pull-right {*/
/* 			float: right;*/
/* 		}*/
/* */
/* 		.sf-menu {*/
/* 			padding-left: 20rem;*/
/* 		}*/
/* */
/* 		.slider li.slide img, .pr_preload {*/
/* 		    display: block;*/
/* 		}*/
/* */
/* 		.features_icon {*/
/* 			background-size: 50px;*/
/* 		}*/
/* */
/* 		.item_content .features_icon {*/
/* 			width: 50px!important;*/
/*     	height: 50px!important;*/
/* 		}*/
/* */
/* 		</style>*/
/* 	</head>*/
/* 	<input type="hidden" id="baseURL" value="{{baseURL}}">*/
/* 	<!--<body class="image_1">*/
/* 	<body class="image_1 overlay">*/
/* 	<body class="image_2">*/
/* 	<body class="image_2 overlay">*/
/* 	<body class="image_3">*/
/* 	<body class="image_3 overlay">*/
/* 	<body class="image_4">*/
/* 	<body class="image_4 overlay">*/
/* 	<body class="image_5">*/
/* 	<body class="image_5 overlay">*/
/* 	<body class="pattern_1">*/
/* 	<body class="pattern_2">*/
/* 	<body class="pattern_3">*/
/* 	<body class="pattern_4">*/
/* 	<body class="pattern_5">*/
/* 	<body class="pattern_6">*/
/* 	<body class="pattern_7">*/
/* 	<body class="pattern_8">*/
/* 	<body class="pattern_9">*/
/* 	<body class="pattern_10">-->*/
/* 	<body class="">*/
/* 		<div class="site_container">*/
/* */
/* 			{% include "users/header.html" %}*/
/* */
/* 			{% include "users/menu.html" %}*/
/* */
/* */
/* <div class="page">*/
/* 	{% if page == "home" %}*/
/* 	{% include "users/carousel.html" %}*/
/* 	{% endif %}*/
/* 	{% block content %} {% endblock %}*/
/* */
/* </div>*/
/* */
/* {% include "users/footer.html" %}*/
/* */
/* </div>*/
/* 		<div class="background_overlay"></div>*/
/* 		<!--js-->*/
/* 		<script type="text/javascript" src="{{baseURL}}/assets/js/jquery-3.5.1.min.js"></script>*/
/* 		<script type="text/javascript" src="{{baseURL}}/assets/js/jquery-migrate-3.3.2.min.js"></script>*/
/* 		<script type="text/javascript" src="{{baseURL}}/assets/js/ui/1.12.1/jquery-ui.min.js"></script>*/
/* 		<script type="text/javascript">*/
/* 		jQuery.browser = {};*/
/* 		(function () {*/
/* 			jQuery.browser.msie = false;*/
/* 			jQuery.browser.version = 0;*/
/* 			if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {*/
/* 				jQuery.browser.msie = true;*/
/* 				jQuery.browser.version = RegExp.$1;*/
/* 			}*/
/* 		});*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{baseURL}}/assets/users/js/jquery.ba-bbq.min.js"></script>*/
/* 		<script type="text/javascript" src="{{baseURL}}/assets/users/js/jquery.easing.1.3.js"></script>*/
/* 		<script type="text/javascript" src="{{baseURL}}/assets/users/js/jquery.carouFredSel-6.2.1-packed.js"></script>*/
/* 		<script type="text/javascript" src="{{baseURL}}/assets/users/js/jquery.touchSwipe.min.js"></script>*/
/* 		<script type="text/javascript" src="{{baseURL}}/assets/users/js/jquery.transit.min.js"></script>*/
/* 		<script type="text/javascript" src="{{baseURL}}/assets/users/js/jquery.sliderControl.js"></script>*/
/* 		<script type="text/javascript" src="{{baseURL}}/assets/users/js/jquery.timeago.js"></script>*/
/* 		<script type="text/javascript" src="{{baseURL}}/assets/users/js/jquery.hint.js"></script>*/
/* 		<script type="text/javascript" src="{{baseURL}}/assets/users/js/jquery.prettyPhoto.js"></script>*/
/* 		<script type="text/javascript" src="{{baseURL}}/assets/users/js/jquery.qtip.min.js"></script>*/
/* 		<script type="text/javascript" src="{{baseURL}}/assets/users/js/jquery.blockUI.js"></script>*/
/* */
/* 		<script type="text/javascript" src="{{baseURL}}/assets/users/js/odometer.min.js"></script>*/
/* 		<script type="text/javascript" src="{{baseURL}}/assets/users/style_selector/style_selector.js"></script>*/
/* 		<script src="{{baseURL}}/assets/swal/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>*/
/* 		<script src="{{baseURL}}/assets/action-js/global.js"></script>*/
/* 		{% if script %}*/
/* 		<script src="{{script}}"></script>*/
/* 		{% endif %}*/
/* 		<script type="text/javascript" src="{{baseURL}}/assets/users/js/main.js"></script>*/
/* 		<script>*/
/* 		$(window).scroll(function () {*/
/* 		  if($(window).scrollTop() > $('.header_container').height()) {*/
/* 		    $("#menu-bar").addClass('move');*/
/* 		  } else {*/
/* 		    $("#menu-bar").removeClass('move');*/
/* 		  }*/
/* 		});*/
/* 		</script>*/
/* <div class="style_selector">*/
/* 	<div class="style_selector_icon">*/
/* 		&nbsp;*/
/* 	</div>*/
/* 	<div class="style_selector_content">*/
/* 		<h4>Style Selector</h4>*/
/* 		<ul>*/
/* 			<li class="style_selector_header hide_on_mobile">*/
/* 				<label>Header Style</label>*/
/* 				<select name="header_style">*/
/* 					<option value="style_1" selected="selected">Style 1</option>*/
/* 					<option value="style_2">Style 2</option>*/
/* 					<option value="style_3">Style 3</option>*/
/* 					<option value="style_4">Style 4</option>*/
/* 					<option value="style_5">Style 5</option>*/
/* 					<option value="style_6">Style 6</option>*/
/* 					<option value="style_7">Style 7</option>*/
/* 					<option value="style_8">Style 8</option>*/
/* 					<option value="style_9">Style 9</option>*/
/* 					<option value="style_10">Style 10</option>*/
/* 					<option value="style_11">Style 11</option>*/
/* 					<option value="style_12">Style 12</option>*/
/* 					<option value="style_13">Style 13</option>*/
/* 					<option value="style_14">Style 14</option>*/
/* 					<option value="style_15">Style 15</option>*/
/* 					<option value="style_high_contrast">Style high contrast</option>*/
/* 				</select>*/
/* 			</li>*/
/* 			<li class="hide_on_mobile">*/
/* 				<label>Menu Type</label>*/
/* 				<select name="menu_type">*/
/* 					<option value="default" selected="selected">Default</option>*/
/* 					<option value="sticky">Sticky</option>*/
/* 				</select>*/
/* 			</li>*/
/* 			<li class="hide_on_mobile">*/
/* 				<label>Layout Style</label>*/
/* 				<select name="layout_style">*/
/* 					<option value="wide" selected="selected">Wide</option>*/
/* 					<option value="boxed">Boxed</option>*/
/* 				</select>*/
/* 			</li>*/
/* 			<li>*/
/* 				<label>Color Skin</label>*/
/* 				<select name="color_skin">*/
/* 					<option value="light" selected="selected">Light</option>*/
/* 					<option value="dark">Dark</option>*/
/* 					<option value="high_contrast">Hight Contrast</option>*/
/* 				</select>*/
/* 			</li>*/
/* 			<li class="clearfix hide_on_mobile">*/
/* 				<label>Boxed Layout Pattern</label>*/
/* 				<ul class="layout_chooser">*/
/* 					<li>*/
/* 						<a href="index.html@page=home_3.html#" class="pattern_1">*/
/* 							<span class="tick"></span>*/
/* 						</a>*/
/* 					</li>*/
/* 					<li>*/
/* 						<a href="index.html@page=home_3.html#" class="pattern_2">*/
/* 							<span class="tick"></span>*/
/* 						</a>*/
/* 					</li>*/
/* 					<li>*/
/* 						<a href="index.html@page=home_3.html#" class="pattern_3">*/
/* 							<span class="tick"></span>*/
/* 						</a>*/
/* 					</li>*/
/* 					<li>*/
/* 						<a href="index.html@page=home_3.html#" class="pattern_4">*/
/* 							<span class="tick"></span>*/
/* 						</a>*/
/* 					</li>*/
/* 					<li>*/
/* 						<a href="index.html@page=home_3.html#" class="pattern_5">*/
/* 							<span class="tick"></span>*/
/* 						</a>*/
/* 					</li>*/
/* 					<li class="first">*/
/* 						<a href="index.html@page=home_3.html#" class="pattern_6">*/
/* 							<span class="tick"></span>*/
/* 						</a>*/
/* 					</li>*/
/* 					<li>*/
/* 						<a href="index.html@page=home_3.html#" class="pattern_7">*/
/* 							<span class="tick"></span>*/
/* 						</a>*/
/* 					</li>*/
/* 					<li>*/
/* 						<a href="index.html@page=home_3.html#" class="pattern_8">*/
/* 							<span class="tick"></span>*/
/* 						</a>*/
/* 					</li>*/
/* 					<li>*/
/* 						<a href="index.html@page=home_3.html#" class="pattern_9">*/
/* 							<span class="tick"></span>*/
/* 						</a>*/
/* 					</li>*/
/* 					<li>*/
/* 						<a href="index.html@page=home_3.html#" class="pattern_10">*/
/* 							<span class="tick"></span>*/
/* 						</a>*/
/* 					</li>*/
/* 				</ul>*/
/* 			</li>*/
/* 			<li class="clearfix hide_on_mobile">*/
/* 				<label>Boxed Layout Image</label>*/
/* 				<ul class="layout_chooser">*/
/* 					<li class="selected">*/
/* 						<a href="index.html@page=home_3.html#" class="image_1">*/
/* 							<span class="tick"></span>*/
/* 						</a>*/
/* 					</li>*/
/* 					<li>*/
/* 						<a href="index.html@page=home_3.html#" class="image_2">*/
/* 							<span class="tick"></span>*/
/* 						</a>*/
/* 					</li>*/
/* 					<li>*/
/* 						<a href="index.html@page=home_3.html#" class="image_3">*/
/* 							<span class="tick"></span>*/
/* 						</a>*/
/* 					</li>*/
/* 					<li>*/
/* 						<a href="index.html@page=home_3.html#" class="image_4">*/
/* 							<span class="tick"></span>*/
/* 						</a>*/
/* 					</li>*/
/* 					<li>*/
/* 						<a href="index.html@page=home_3.html#" class="image_5">*/
/* 							<span class="tick"></span>*/
/* 						</a>*/
/* 					</li>*/
/* 					<li class="first">*/
/* 						<input type="checkbox" checked="checked" id="overlay"><label class="overlay_label" for="overlay">overlay</label>*/
/* 					</li>*/
/* 				</ul>*/
/* 			</li>*/
/* 		</ul>*/
/* 	</div>*/
/* </div>*/
/* 	</body>*/
/* </html>*/
/* */
