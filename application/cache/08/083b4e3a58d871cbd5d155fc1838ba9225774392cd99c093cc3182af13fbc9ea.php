<?php

/* app.html */
class __TwigTemplate_356137f1bb86a7432d1979783c7cfeefbe26f478ed2e2e6cc8025a9033560060 extends Twig_Template
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
        echo "<!doctype html>
<html>
\t<head>
\t\t<title>Welcome to CodeIgniter</title>

\t\t<link rel=\"shortcut icon\" type=\"image/png\" href=\"/favicon.ico\"/>
\t</head>
\t<body>

\t\t<style {csp-style-nonce}>
\t\t\tdiv.logo {
\t\t\t\theight: 200px;
\t\t\t\twidth: 155px;
\t\t\t\tdisplay: inline-block;
\t\t\t\topacity: 0.08;
\t\t\t\tposition: absolute;
\t\t\t\ttop: 2rem;
\t\t\t\tleft: 50%;
\t\t\t\tmargin-left: -73px;
\t\t\t}
\t\t\tbody {
\t\t\t\theight: 100%;
\t\t\t\tbackground: #fafafa;
\t\t\t\tfont-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
\t\t\t\tcolor: #777;
\t\t\t\tfont-weight: 300;
\t\t\t}
\t\t\th1 {
\t\t\t\tfont-weight: lighter;
\t\t\t\tletter-spacing: 0.8;
\t\t\t\tfont-size: 3rem;
\t\t\t\tmargin-top: 145px;
\t\t\t\tmargin-bottom: 0;
\t\t\t\tcolor: #222;
\t\t\t}
\t\t\t.wrap {
\t\t\t\tmax-width: 1024px;
\t\t\t\tmargin: 5rem auto;
\t\t\t\tpadding: 2rem;
\t\t\t\tbackground: #fff;
\t\t\t\ttext-align: center;
\t\t\t\tborder: 1px solid #efefef;
\t\t\t\tborder-radius: 0.5rem;
\t\t\t\tposition: relative;
\t\t\t}
\t\t\t.version {
\t\t\t\tmargin-top: 0;
\t\t\t\tcolor: #999;
\t\t\t}
\t\t\t.guide {
\t\t\t\tmargin-top: 3rem;
\t\t\t\ttext-align: left;
\t\t\t}
\t\t\tpre {
\t\t\t\twhite-space: normal;
\t\t\t\tmargin-top: 1.5rem;
\t\t\t}
\t\t\tcode {
\t\t\t\tbackground: #fafafa;
\t\t\t\tborder: 1px solid #efefef;
\t\t\t\tpadding: 0.5rem 1rem;
\t\t\t\tborder-radius: 5px;
\t\t\t\tdisplay: block;
\t\t\t}
\t\t\tp {
\t\t\t\tmargin-top: 1.5rem;
\t\t\t}
\t\t\t.footer {
\t\t\t\tmargin-top: 2rem;
\t\t\t\tborder-top: 1px solid #efefef;
\t\t\t\tpadding: 1em 2em 0 2em;
\t\t\t\tfont-size: 85%;
\t\t\t\tcolor: #999;
\t\t\t}
\t\t\ta:active,
\t\t\ta:link,
\t\t\ta:visited {
\t\t\t\tcolor: #dd4814;
\t\t\t}
\t\t</style>

\t\t<div class=\"wrap\">

\t\t\t<h1>Welcome to CodeIgniter</h1>

\t\t\t<p class=\"version\">";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "</p>

\t\t\t<div class=\"logo\">
\t\t\t\t<svg version=\"1.0\" xmlns=\"http://www.w3.org/2000/svg\"
\t\t\t\t\t width=\"155.000000px\" height=\"200.000000px\" viewBox=\"0 0 155.000000 200.000000\"
\t\t\t\t\t preserveAspectRatio=\"xMidYMid meet\">
\t\t\t\t<g transform=\"translate(0.000000,200.000000) scale(0.100000,-0.100000)\" fill=\"#000000\" stroke=\"none\">
\t\t\t\t<path d=\"M737 1963 c22 -79 -7 -185 -78 -290 -18 -26 -107 -122 -197 -213
\t\t\t\t\t  -239 -240 -336 -371 -403 -544 -79 -206 -78 -408 5 -582 64 -134 212 -264 361
\t\t\t\t\t  -314 l60 -20 -30 22 c-210 152 -229 387 -48 588 25 27 48 50 51 50 4 0 7 -27
\t\t\t\t\t  7 -61 0 -57 2 -62 37 -95 30 -27 46 -34 78 -34 56 0 99 24 116 65 29 69 16
\t\t\t\t\t  120 -50 205 -105 134 -117 233 -43 347 l31 48 7 -47 c13 -82 58 -129 250 -258
\t\t\t\t\t  209 -141 306 -261 328 -405 11 -72 -1 -161 -31 -218 -27 -53 -112 -143 -165
\t\t\t\t\t  -174 -24 -14 -43 -26 -43 -28 0 -2 24 4 53 14 241 83 427 271 482 486 19 76
\t\t\t\t\t  19 202 -1 285 -35 152 -146 305 -299 412 l-70 49 -6 -33 c-8 -48 -26 -76 -59
\t\t\t\t\t  -93 -45 -23 -103 -19 -138 10 -67 57 -78 146 -37 305 30 116 32 206 5 291 -27
\t\t\t\t\t  89 -104 206 -162 247 -17 13 -18 12 -11 -15z\"/>
\t\t\t\t</g>
\t\t\t\t</svg>
\t\t\t</div>

\t\t\t<div class=\"guide\">
\t\t\t\t<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

\t\t\t\t<p>If you would like to edit this page you'll find it located at:</p>

\t\t\t\t<p>The corresponding controller for this page is found at:</p>

\t\t\t\t<pre>
\t\t\t\t<code>
\t\t\t\t\tapplication/Controllers/Home.php
\t\t\t\t</code>
\t\t\t\t</pre>

\t\t\t\t<p>If you are exploring CodeIgniter for the very first time, you 
\t\t\t\t\tshould start by reading the (in progress) 
\t\t\t\t\t<a href=\"https://bcit-ci.github.io/CodeIgniter4\">User Guide</a>.</p>

\t\t\t</div>
\t\t</div>

\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "app.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 86,  19 => 1,);
    }
}
/* <!doctype html>*/
/* <html>*/
/* 	<head>*/
/* 		<title>Welcome to CodeIgniter</title>*/
/* */
/* 		<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>*/
/* 	</head>*/
/* 	<body>*/
/* */
/* 		<style {csp-style-nonce}>*/
/* 			div.logo {*/
/* 				height: 200px;*/
/* 				width: 155px;*/
/* 				display: inline-block;*/
/* 				opacity: 0.08;*/
/* 				position: absolute;*/
/* 				top: 2rem;*/
/* 				left: 50%;*/
/* 				margin-left: -73px;*/
/* 			}*/
/* 			body {*/
/* 				height: 100%;*/
/* 				background: #fafafa;*/
/* 				font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;*/
/* 				color: #777;*/
/* 				font-weight: 300;*/
/* 			}*/
/* 			h1 {*/
/* 				font-weight: lighter;*/
/* 				letter-spacing: 0.8;*/
/* 				font-size: 3rem;*/
/* 				margin-top: 145px;*/
/* 				margin-bottom: 0;*/
/* 				color: #222;*/
/* 			}*/
/* 			.wrap {*/
/* 				max-width: 1024px;*/
/* 				margin: 5rem auto;*/
/* 				padding: 2rem;*/
/* 				background: #fff;*/
/* 				text-align: center;*/
/* 				border: 1px solid #efefef;*/
/* 				border-radius: 0.5rem;*/
/* 				position: relative;*/
/* 			}*/
/* 			.version {*/
/* 				margin-top: 0;*/
/* 				color: #999;*/
/* 			}*/
/* 			.guide {*/
/* 				margin-top: 3rem;*/
/* 				text-align: left;*/
/* 			}*/
/* 			pre {*/
/* 				white-space: normal;*/
/* 				margin-top: 1.5rem;*/
/* 			}*/
/* 			code {*/
/* 				background: #fafafa;*/
/* 				border: 1px solid #efefef;*/
/* 				padding: 0.5rem 1rem;*/
/* 				border-radius: 5px;*/
/* 				display: block;*/
/* 			}*/
/* 			p {*/
/* 				margin-top: 1.5rem;*/
/* 			}*/
/* 			.footer {*/
/* 				margin-top: 2rem;*/
/* 				border-top: 1px solid #efefef;*/
/* 				padding: 1em 2em 0 2em;*/
/* 				font-size: 85%;*/
/* 				color: #999;*/
/* 			}*/
/* 			a:active,*/
/* 			a:link,*/
/* 			a:visited {*/
/* 				color: #dd4814;*/
/* 			}*/
/* 		</style>*/
/* */
/* 		<div class="wrap">*/
/* */
/* 			<h1>Welcome to CodeIgniter</h1>*/
/* */
/* 			<p class="version">{{ version }}</p>*/
/* */
/* 			<div class="logo">*/
/* 				<svg version="1.0" xmlns="http://www.w3.org/2000/svg"*/
/* 					 width="155.000000px" height="200.000000px" viewBox="0 0 155.000000 200.000000"*/
/* 					 preserveAspectRatio="xMidYMid meet">*/
/* 				<g transform="translate(0.000000,200.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">*/
/* 				<path d="M737 1963 c22 -79 -7 -185 -78 -290 -18 -26 -107 -122 -197 -213*/
/* 					  -239 -240 -336 -371 -403 -544 -79 -206 -78 -408 5 -582 64 -134 212 -264 361*/
/* 					  -314 l60 -20 -30 22 c-210 152 -229 387 -48 588 25 27 48 50 51 50 4 0 7 -27*/
/* 					  7 -61 0 -57 2 -62 37 -95 30 -27 46 -34 78 -34 56 0 99 24 116 65 29 69 16*/
/* 					  120 -50 205 -105 134 -117 233 -43 347 l31 48 7 -47 c13 -82 58 -129 250 -258*/
/* 					  209 -141 306 -261 328 -405 11 -72 -1 -161 -31 -218 -27 -53 -112 -143 -165*/
/* 					  -174 -24 -14 -43 -26 -43 -28 0 -2 24 4 53 14 241 83 427 271 482 486 19 76*/
/* 					  19 202 -1 285 -35 152 -146 305 -299 412 l-70 49 -6 -33 c-8 -48 -26 -76 -59*/
/* 					  -93 -45 -23 -103 -19 -138 10 -67 57 -78 146 -37 305 30 116 32 206 5 291 -27*/
/* 					  89 -104 206 -162 247 -17 13 -18 12 -11 -15z"/>*/
/* 				</g>*/
/* 				</svg>*/
/* 			</div>*/
/* */
/* 			<div class="guide">*/
/* 				<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>*/
/* */
/* 				<p>If you would like to edit this page you'll find it located at:</p>*/
/* */
/* 				<p>The corresponding controller for this page is found at:</p>*/
/* */
/* 				<pre>*/
/* 				<code>*/
/* 					application/Controllers/Home.php*/
/* 				</code>*/
/* 				</pre>*/
/* */
/* 				<p>If you are exploring CodeIgniter for the very first time, you */
/* 					should start by reading the (in progress) */
/* 					<a href="https://bcit-ci.github.io/CodeIgniter4">User Guide</a>.</p>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* */
/* 	</body>*/
/* </html>*/
/* */
