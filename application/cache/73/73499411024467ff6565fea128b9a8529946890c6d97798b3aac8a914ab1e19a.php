<?php

/* users/profile/struktur-organisasi.html */
class __TwigTemplate_757dec32bff38d46d6f114ef9317cf3f05e106552626cc85232c64c4b12b8d75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("users/layout.html", "users/profile/struktur-organisasi.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "users/layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "<input id=\"baseUrl\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "\" hidden>
\t<div class=\"page_header clearfix page_margin_top\">
\t\t<div class=\"page_header_left\">
\t\t\t<h2 class=\"page_title\">STRUKTUR ORGANISASI</h2>
\t\t</div>
\t\t<div class=\"page_header_right\">
\t\t\t<ul class=\"bread_crumb\">
\t\t\t\t<li>
\t\t\t\t\t<a title=\"Home\" href=\"index.html@page=home.html\">
\t\t\t\t\t\tHome
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"separator icon_small_arrow right_gray\">
\t\t\t\t\t&nbsp;
\t\t\t\t</li>
        <li>
          Profile
        </li>
\t\t\t\t<li class=\"separator icon_small_arrow right_gray\">
\t\t\t\t\t&nbsp;
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tStruktur organisasi
\t\t\t\t</li>
\t\t\t\t<li>

\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"page_layout clearfix\">
\t\t<div class=\"divider_block clearfix\">
\t\t\t<hr class=\"divider first\">
\t\t\t<hr class=\"divider subheader_arrow\">
\t\t\t<hr class=\"divider last\">
\t\t</div>
    <div id=\"page-kapolres\">
\t\t\t<h1 class=\"about_title center_align page_margin_top\">Struktur Organisasi</h1>
\t\t\t<h2 class=\"about_subtitle center_align\">POLRES SUMEDANG</h2>
\t\t\t<br/>
\t\t\t<div class=\"row\">
\t\t\t\t<img src=\"https://d2slcw3kip6qmk.cloudfront.net/marketing/pages/chart/what-is-an-organizational-chart/org-chart-feature.svg\" alt=\"img\" style=\"display: block;\">
\t\t\t</div>
  \t</div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "users/profile/struktur-organisasi.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  11 => 1,);
    }
}
/* {% extends "users/layout.html" %} {% block content %}*/
/* <input id="baseUrl" value="{{baseURL}}" hidden>*/
/* 	<div class="page_header clearfix page_margin_top">*/
/* 		<div class="page_header_left">*/
/* 			<h2 class="page_title">STRUKTUR ORGANISASI</h2>*/
/* 		</div>*/
/* 		<div class="page_header_right">*/
/* 			<ul class="bread_crumb">*/
/* 				<li>*/
/* 					<a title="Home" href="index.html@page=home.html">*/
/* 						Home*/
/* 					</a>*/
/* 				</li>*/
/* 				<li class="separator icon_small_arrow right_gray">*/
/* 					&nbsp;*/
/* 				</li>*/
/*         <li>*/
/*           Profile*/
/*         </li>*/
/* 				<li class="separator icon_small_arrow right_gray">*/
/* 					&nbsp;*/
/* 				</li>*/
/* 				<li>*/
/* 					Struktur organisasi*/
/* 				</li>*/
/* 				<li>*/
/* */
/* 				</li>*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="page_layout clearfix">*/
/* 		<div class="divider_block clearfix">*/
/* 			<hr class="divider first">*/
/* 			<hr class="divider subheader_arrow">*/
/* 			<hr class="divider last">*/
/* 		</div>*/
/*     <div id="page-kapolres">*/
/* 			<h1 class="about_title center_align page_margin_top">Struktur Organisasi</h1>*/
/* 			<h2 class="about_subtitle center_align">POLRES SUMEDANG</h2>*/
/* 			<br/>*/
/* 			<div class="row">*/
/* 				<img src="https://d2slcw3kip6qmk.cloudfront.net/marketing/pages/chart/what-is-an-organizational-chart/org-chart-feature.svg" alt="img" style="display: block;">*/
/* 			</div>*/
/*   	</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
