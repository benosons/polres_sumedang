<?php

/* users/informasi/berita.html */
class __TwigTemplate_3c322760ba2ecf291324003b17b09a2584a4c479e325d532af3746f4cad3e983 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("users/layout.html", "users/informasi/berita.html", 1);
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
\t\t\t<h2 class=\"page_title\">Berita Polres Sumedang</h2>
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
          Informasi
        </li>
\t\t\t\t<li class=\"separator icon_small_arrow right_gray\">
\t\t\t\t\t&nbsp;
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tBerita
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
    <br/>
    <div id=\"page-berita\">
      <!-- <div id=\"lantas\">
        <h4 class=\"box_header\">Lalu Lintas</h4>
    \t\t<div class=\"row\">
    \t\t\t<ul class=\"blog column column_1_3\">
    \t\t\t\t<li class=\"post\">
    \t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
    \t\t\t\t\t\t<img src='";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/510x374/image_10.jpg' alt='img'>
    \t\t\t\t\t</a>
    \t\t\t\t\t<div class=\"post_content\">
    \t\t\t\t\t\t<h2 class=\"with_number\">
    \t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a>
    \t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
    \t\t\t\t\t\t</h2>
    \t\t\t\t\t\t<ul class=\"post_details\">
    \t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">LANTAS</a></li>
    \t\t\t\t\t\t\t<li class=\"date\">
    \t\t\t\t\t\t\t\t10:11 PM, Feb 02
    \t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t</ul>
    \t\t\t\t\t\t<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
    \t\t\t\t\t\t<a class=\"read_more\" href=\"index.html@page=post.html\" title=\"Read more\"><span class=\"arrow\"></span><span>READ MORE</span></a>
    \t\t\t\t\t</div>
    \t\t\t\t</li>
    \t\t\t</ul>
    \t\t\t<ul class=\"blog column column_1_3\">
    \t\t\t\t<li class=\"post\">
    \t\t\t\t\t<a href=\"index.html@page=post_quote.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
    \t\t\t\t\t\t<img src='";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/510x374/image_09.jpg' alt='img'>
    \t\t\t\t\t</a>
    \t\t\t\t\t<div class=\"post_content\">
    \t\t\t\t\t\t<h2 class=\"with_number\">
    \t\t\t\t\t\t\t<a href=\"index.html@page=post_quote.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a>
    \t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post_quote.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
    \t\t\t\t\t\t</h2>
    \t\t\t\t\t\t<ul class=\"post_details\">
    \t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">LANTAS</a></li>
    \t\t\t\t\t\t\t<li class=\"date\">
    \t\t\t\t\t\t\t\t10:11 PM, Feb 02
    \t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t</ul>
    \t\t\t\t\t\t<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
    \t\t\t\t\t\t<a class=\"read_more\" href=\"index.html@page=post_quote.html\" title=\"Read more\"><span class=\"arrow\"></span><span>READ MORE</span></a>
    \t\t\t\t\t</div>
    \t\t\t\t</li>
    \t\t\t</ul>
    \t\t\t<ul class=\"blog column column_1_3\">
    \t\t\t\t<li class=\"post\">
    \t\t\t\t\t<a href=\"index.html@page=post_small_image.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
    \t\t\t\t\t\t<img src='";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/510x374/image_14.jpg' alt='img'>
    \t\t\t\t\t</a>
    \t\t\t\t\t<div class=\"post_content\">
    \t\t\t\t\t\t<h2 class=\"with_number\">
    \t\t\t\t\t\t\t<a href=\"index.html@page=post_small_image.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a>
    \t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
    \t\t\t\t\t\t</h2>
    \t\t\t\t\t\t<ul class=\"post_details\">
    \t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">LANTAS</a></li>
    \t\t\t\t\t\t\t<li class=\"date\">
    \t\t\t\t\t\t\t\t10:11 PM, Feb 02
    \t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t</ul>
    \t\t\t\t\t\t<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
    \t\t\t\t\t\t<a class=\"read_more\" href=\"index.html@page=post_small_image.html\" title=\"Read more\"><span class=\"arrow\"></span><span>READ MORE</span></a>
    \t\t\t\t\t</div>
    \t\t\t\t</li>
    \t\t\t</ul>
    \t\t</div>
    \t\t<div class=\"row\">
    \t\t\t<ul class=\"pagination clearfix page_margin_top_section\">
    \t\t\t\t<li class=\"left\">
    \t\t\t\t\t<a href=\"index.html@page=blog_3_columns.html#\" title=\"\">&nbsp;</a>
    \t\t\t\t</li>
    \t\t\t\t<li class=\"selected\">
    \t\t\t\t\t<a href=\"index.html@page=blog_3_columns.html#\" title=\"\">
    \t\t\t\t\t\t1
    \t\t\t\t\t</a>
    \t\t\t\t</li>
    \t\t\t\t<li>
    \t\t\t\t\t<a href=\"index.html@page=blog_3_columns.html#\" title=\"\">
    \t\t\t\t\t\t2
    \t\t\t\t\t</a>
    \t\t\t\t</li>
    \t\t\t\t<li>
    \t\t\t\t\t<a href=\"index.html@page=blog_3_columns.html#\" title=\"\">
    \t\t\t\t\t\t3
    \t\t\t\t\t</a>
    \t\t\t\t</li>
    \t\t\t\t<li class=\"right\">
    \t\t\t\t\t<a href=\"index.html@page=blog_3_columns.html#\" title=\"\">&nbsp;</a>
    \t\t\t\t</li>
    \t\t\t</ul>
    \t\t</div>
  \t\t</div> -->
  \t</div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "users/informasi/berita.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 88,  102 => 67,  78 => 46,  30 => 2,  11 => 1,);
    }
}
/* {% extends "users/layout.html" %} {% block content %}*/
/* <input id="baseUrl" value="{{baseURL}}" hidden>*/
/* 	<div class="page_header clearfix page_margin_top">*/
/* 		<div class="page_header_left">*/
/* 			<h2 class="page_title">Berita Polres Sumedang</h2>*/
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
/*           Informasi*/
/*         </li>*/
/* 				<li class="separator icon_small_arrow right_gray">*/
/* 					&nbsp;*/
/* 				</li>*/
/* 				<li>*/
/* 					Berita*/
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
/*     <br/>*/
/*     <div id="page-berita">*/
/*       <!-- <div id="lantas">*/
/*         <h4 class="box_header">Lalu Lintas</h4>*/
/*     		<div class="row">*/
/*     			<ul class="blog column column_1_3">*/
/*     				<li class="post">*/
/*     					<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/*     						<img src='{{baseURL}}/assets/users/images/samples/510x374/image_10.jpg' alt='img'>*/
/*     					</a>*/
/*     					<div class="post_content">*/
/*     						<h2 class="with_number">*/
/*     							<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>*/
/*     							<a class="comments_number" href="index.html@page=post.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/*     						</h2>*/
/*     						<ul class="post_details">*/
/*     							<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">LANTAS</a></li>*/
/*     							<li class="date">*/
/*     								10:11 PM, Feb 02*/
/*     							</li>*/
/*     						</ul>*/
/*     						<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>*/
/*     						<a class="read_more" href="index.html@page=post.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>*/
/*     					</div>*/
/*     				</li>*/
/*     			</ul>*/
/*     			<ul class="blog column column_1_3">*/
/*     				<li class="post">*/
/*     					<a href="index.html@page=post_quote.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/*     						<img src='{{baseURL}}/assets/users/images/samples/510x374/image_09.jpg' alt='img'>*/
/*     					</a>*/
/*     					<div class="post_content">*/
/*     						<h2 class="with_number">*/
/*     							<a href="index.html@page=post_quote.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>*/
/*     							<a class="comments_number" href="index.html@page=post_quote.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/*     						</h2>*/
/*     						<ul class="post_details">*/
/*     							<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">LANTAS</a></li>*/
/*     							<li class="date">*/
/*     								10:11 PM, Feb 02*/
/*     							</li>*/
/*     						</ul>*/
/*     						<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>*/
/*     						<a class="read_more" href="index.html@page=post_quote.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>*/
/*     					</div>*/
/*     				</li>*/
/*     			</ul>*/
/*     			<ul class="blog column column_1_3">*/
/*     				<li class="post">*/
/*     					<a href="index.html@page=post_small_image.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/*     						<img src='{{baseURL}}/assets/users/images/samples/510x374/image_14.jpg' alt='img'>*/
/*     					</a>*/
/*     					<div class="post_content">*/
/*     						<h2 class="with_number">*/
/*     							<a href="index.html@page=post_small_image.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>*/
/*     							<a class="comments_number" href="index.html@page=post.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/*     						</h2>*/
/*     						<ul class="post_details">*/
/*     							<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">LANTAS</a></li>*/
/*     							<li class="date">*/
/*     								10:11 PM, Feb 02*/
/*     							</li>*/
/*     						</ul>*/
/*     						<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>*/
/*     						<a class="read_more" href="index.html@page=post_small_image.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>*/
/*     					</div>*/
/*     				</li>*/
/*     			</ul>*/
/*     		</div>*/
/*     		<div class="row">*/
/*     			<ul class="pagination clearfix page_margin_top_section">*/
/*     				<li class="left">*/
/*     					<a href="index.html@page=blog_3_columns.html#" title="">&nbsp;</a>*/
/*     				</li>*/
/*     				<li class="selected">*/
/*     					<a href="index.html@page=blog_3_columns.html#" title="">*/
/*     						1*/
/*     					</a>*/
/*     				</li>*/
/*     				<li>*/
/*     					<a href="index.html@page=blog_3_columns.html#" title="">*/
/*     						2*/
/*     					</a>*/
/*     				</li>*/
/*     				<li>*/
/*     					<a href="index.html@page=blog_3_columns.html#" title="">*/
/*     						3*/
/*     					</a>*/
/*     				</li>*/
/*     				<li class="right">*/
/*     					<a href="index.html@page=blog_3_columns.html#" title="">&nbsp;</a>*/
/*     				</li>*/
/*     			</ul>*/
/*     		</div>*/
/*   		</div> -->*/
/*   	</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
