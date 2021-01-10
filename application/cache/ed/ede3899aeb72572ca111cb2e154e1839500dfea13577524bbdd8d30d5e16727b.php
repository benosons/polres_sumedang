<?php

/* users/covid-19.html */
class __TwigTemplate_956f8d2fac3b2707e1908167310a06759ac5410caf8b9569c913baee829ef1de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("users/layout.html", "users/covid-19.html", 1);
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
\t\t\t<h2 class=\"page_title\">GIAT COVID-19</h2>
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
          Giat Covid-19
        </li>
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
\t\t<div class=\"row page_margin_top\">
\t\t\t<div class=\"column column_2_3\">
\t\t\t\t<div class=\"caroufredsel_wrapper caroufredsel_wrapper_small_slider\">
\t\t\t\t\t<ul class=\"small_slider id-small_slider\">
\t\t\t\t\t\t<li class=\"slide\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">
\t\t\t\t\t\t\t\t<img src='";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_09.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"slider_content_box\">
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<h2><a href=\"index.html@page=post.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">Nuclear Fusion Closer to Becoming a Reality</a></h2>
\t\t\t\t\t\t\t\t<p class=\"clearfix\">Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"slide\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">
\t\t\t\t\t\t\t\t<img src='";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_10.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"slider_content_box\">
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t18:25 PM, Feb 21
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<h2><a href=\"index.html@page=post.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">Climate Change Debate While Britain Floods</a></h2>
\t\t\t\t\t\t\t\t<p class=\"clearfix\">Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"slide\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">
\t\t\t\t\t\t\t\t<img src='";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_08.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"slider_content_box\">
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<h2><a href=\"index.html@page=post.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">The Public Health Crisis Hiding in Our Food</a></h2>
\t\t\t\t\t\t\t\t<p class=\"clearfix\">Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"slide\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">
\t\t\t\t\t\t\t\t<img src='";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_02.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"slider_content_box\">
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t18:25 PM, Feb 21
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<h2><a href=\"index.html@page=post.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">Built on Brotherhood, Club Lives Up to Name</a></h2>
\t\t\t\t\t\t\t\t<p class=\"clearfix\">Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div id=\"small_slider\" class='slider_posts_list_container small'>
\t\t\t\t</div>
\t\t\t\t<h4 class=\"box_header page_margin_top\">Berita Terbaru COVID-19</h4>
\t\t\t\t<div class=\"row\" id=\"berita-covid-terbaru\">
\t\t\t\t\t<ul class=\"blog column column_1_2\" >
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post_small_image.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t\t<img src='";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_10.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<h2 class=\"with_number\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_small_image.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a>
\t\t\t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<ul class=\"post_details\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
\t\t\t\t\t\t\t\t<a class=\"read_more\" href=\"index.html@page=post_small_image.html\" title=\"Read more\"><span class=\"arrow\"></span><span>READ MORE</span></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t\t<img src='";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_05.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<h2 class=\"with_number\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a>
\t\t\t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<ul class=\"post_details\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
\t\t\t\t\t\t\t\t<a class=\"read_more\" href=\"index.html@page=post.html\" title=\"Read more\"><span class=\"arrow\"></span><span>READ MORE</span></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t\t<span class=\"icon gallery\"></span>
\t\t\t\t\t\t\t\t<img src='";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_03.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<h2 class=\"with_number\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a>
\t\t\t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post_gallery.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<ul class=\"post_details\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
\t\t\t\t\t\t\t\t<a class=\"read_more\" href=\"index.html@page=post_gallery.html\" title=\"Read more\"><span class=\"arrow\"></span><span>READ MORE</span></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"blog column column_1_2\">
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t\t<img src='";
        // line 165
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_04.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<h2 class=\"with_number\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a>
\t\t\t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<ul class=\"post_details\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
\t\t\t\t\t\t\t\t<a class=\"read_more\" href=\"index.html@page=post.html\" title=\"Read more\"><span class=\"arrow\"></span><span>READ MORE</span></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t\t<img src='";
        // line 184
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_12.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<h2 class=\"with_number\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a>
\t\t\t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<ul class=\"post_details\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
\t\t\t\t\t\t\t\t<a class=\"read_more\" href=\"index.html@page=post.html\" title=\"Read more\"><span class=\"arrow\"></span><span>READ MORE</span></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t\t<span class=\"icon gallery\"></span>
\t\t\t\t\t\t\t\t<img src='";
        // line 204
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_13.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<h2 class=\"with_number\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a>
\t\t\t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post_gallery.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<ul class=\"post_details\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
\t\t\t\t\t\t\t\t<a class=\"read_more\" href=\"index.html@page=post_gallery.html\" title=\"Read more\"><span class=\"arrow\"></span><span>READ MORE</span></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<ul class=\"pagination clearfix page_margin_top_section\">
\t\t\t\t\t<li class=\"left\">
\t\t\t\t\t\t<a href=\"index.html@page=blog_small_slider.html#\" title=\"\">&nbsp;</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"selected\">
\t\t\t\t\t\t<a href=\"index.html@page=blog_small_slider.html#\" title=\"\">
\t\t\t\t\t\t\t1
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.html@page=blog_small_slider.html#\" title=\"\">
\t\t\t\t\t\t\t2
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.html@page=blog_small_slider.html#\" title=\"\">
\t\t\t\t\t\t\t3
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"right\">
\t\t\t\t\t\t<a href=\"index.html@page=blog_small_slider.html#\" title=\"\">&nbsp;</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"column column_1_3\">
\t\t\t\t<h4 class=\"box_header\">Informasi</h4>
\t\t\t\t<ul class=\"blog small_margin clearfix\">
\t\t\t\t\t<div class=\"kopi-covid\"> </div>
\t\t\t\t</ul>
\t\t\t\t<h4 class=\"box_header page_margin_top_section\">Pengumuman COVID-19</h4>
\t\t\t\t<ul class=\"blog small clearfix\">
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=science.html\" title=\"SCIENCE\">SCIENCE</a></li>
\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Syrian Civilians Trapped For Months Continue To Be Evacuated\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Syrian Civilians Trapped For Months Continue To Be Evacuated\">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=science.html\" title=\"SCIENCE\">SCIENCE</a></li>
\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post_quote.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_quote.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a>
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=science.html\" title=\"SCIENCE\">SCIENCE</a></li>
\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">Nuclear Fusion Closer to Becoming a Reality</a>
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=science.html\" title=\"SCIENCE\">SCIENCE</a></li>
\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<a class=\"more page_margin_top\" href=\"#\">LOAD MORE</a>
\t\t\t\t<!-- <h4 class=\"box_header page_margin_top_section\">Top Authors</h4>
\t\t\t\t<ul class=\"authors rating clearfix\">
\t\t\t\t\t<li class=\"author\">
\t\t\t\t\t\t<a class=\"thumb\" href=\"index.html@page=author.html\" title=\"Debora Hilton\">
\t\t\t\t\t\t\t<img src='";
        // line 320
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/Team_100x100/image_01.jpg' alt='img'>
\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"34\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t\t<h5><a href=\"index.html@page=author.html\" title=\"Debora Hilton\">Debora Hilton</a></h5>
\t\t\t\t\t\t\t<h6>EDITOR</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"author\">
\t\t\t\t\t\t<a class=\"thumb\" href=\"index.html@page=author.html\" title=\"Anna Shubina\">
\t\t\t\t\t\t\t<img src='";
        // line 330
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/Team_100x100/image_02.jpg' alt='img'>
\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"25\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t\t<h5><a href=\"index.html@page=author.html\" title=\"Anna Shubina\">Anna Shubina</a></h5>
\t\t\t\t\t\t\t<h6>EDITOR</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"author\">
\t\t\t\t\t\t<a class=\"thumb\" href=\"index.html@page=author.html\" title=\"Liam Holden\">
\t\t\t\t\t\t\t<img src='";
        // line 340
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/Team_100x100/image_03.jpg' alt='img'>
\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"9\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t\t<h5><a href=\"index.html@page=author.html\" title=\"Liam Holden\">Liam Holden</a></h5>
\t\t\t\t\t\t\t<h6>PUBLISHER</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"author\">
\t\t\t\t\t\t<a class=\"thumb\" href=\"index.html@page=author.html\" title=\"Heather Dale\">
\t\t\t\t\t\t\t<img src='";
        // line 350
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/Team_100x100/image_04.jpg' alt='img'>
\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"2\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t\t<h5><a href=\"index.html@page=author.html\" title=\"Heather Dale\">Heather Dale</a></h5>
\t\t\t\t\t\t\t<h6>ILLUSTRATOR</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul> -->
\t\t\t</div>
\t\t</div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "users/covid-19.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 350,  408 => 340,  395 => 330,  382 => 320,  263 => 204,  240 => 184,  218 => 165,  194 => 144,  171 => 124,  149 => 105,  124 => 83,  106 => 68,  88 => 53,  70 => 38,  30 => 2,  11 => 1,);
    }
}
/* {% extends "users/layout.html" %} {% block content %}*/
/* <input id="baseUrl" value="{{baseURL}}" hidden>*/
/* 	<div class="page_header clearfix page_margin_top">*/
/* 		<div class="page_header_left">*/
/* 			<h2 class="page_title">GIAT COVID-19</h2>*/
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
/*           Giat Covid-19*/
/*         </li>*/
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
/* 		<div class="row page_margin_top">*/
/* 			<div class="column column_2_3">*/
/* 				<div class="caroufredsel_wrapper caroufredsel_wrapper_small_slider">*/
/* 					<ul class="small_slider id-small_slider">*/
/* 						<li class="slide">*/
/* 							<a href="index.html@page=post.html" title="Nuclear Fusion Closer to Becoming a Reality">*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/690x450/image_09.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="slider_content_box">*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 								<h2><a href="index.html@page=post.html" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a></h2>*/
/* 								<p class="clearfix">Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="slide">*/
/* 							<a href="index.html@page=post.html" title="Nuclear Fusion Closer to Becoming a Reality">*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/690x450/image_10.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="slider_content_box">*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 									<li class="date">*/
/* 										18:25 PM, Feb 21*/
/* 									</li>*/
/* 								</ul>*/
/* 								<h2><a href="index.html@page=post.html" title="Nuclear Fusion Closer to Becoming a Reality">Climate Change Debate While Britain Floods</a></h2>*/
/* 								<p class="clearfix">Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="slide">*/
/* 							<a href="index.html@page=post.html" title="Nuclear Fusion Closer to Becoming a Reality">*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/690x450/image_08.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="slider_content_box">*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 								<h2><a href="index.html@page=post.html" title="Nuclear Fusion Closer to Becoming a Reality">The Public Health Crisis Hiding in Our Food</a></h2>*/
/* 								<p class="clearfix">Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="slide">*/
/* 							<a href="index.html@page=post.html" title="Nuclear Fusion Closer to Becoming a Reality">*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/690x450/image_02.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="slider_content_box">*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 									<li class="date">*/
/* 										18:25 PM, Feb 21*/
/* 									</li>*/
/* 								</ul>*/
/* 								<h2><a href="index.html@page=post.html" title="Nuclear Fusion Closer to Becoming a Reality">Built on Brotherhood, Club Lives Up to Name</a></h2>*/
/* 								<p class="clearfix">Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>*/
/* 							</div>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</div>*/
/* 				<div id="small_slider" class='slider_posts_list_container small'>*/
/* 				</div>*/
/* 				<h4 class="box_header page_margin_top">Berita Terbaru COVID-19</h4>*/
/* 				<div class="row" id="berita-covid-terbaru">*/
/* 					<ul class="blog column column_1_2" >*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post_small_image.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/330x242/image_10.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="post_content">*/
/* 								<h2 class="with_number">*/
/* 									<a href="index.html@page=post_small_image.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>*/
/* 									<a class="comments_number" href="index.html@page=post.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/* 								</h2>*/
/* 								<ul class="post_details">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 								<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>*/
/* 								<a class="read_more" href="index.html@page=post_small_image.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/330x242/image_05.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="post_content">*/
/* 								<h2 class="with_number">*/
/* 									<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>*/
/* 									<a class="comments_number" href="index.html@page=post.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/* 								</h2>*/
/* 								<ul class="post_details">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 								<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>*/
/* 								<a class="read_more" href="index.html@page=post.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post_gallery.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 								<span class="icon gallery"></span>*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/330x242/image_03.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="post_content">*/
/* 								<h2 class="with_number">*/
/* 									<a href="index.html@page=post_gallery.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>*/
/* 									<a class="comments_number" href="index.html@page=post_gallery.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/* 								</h2>*/
/* 								<ul class="post_details">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 								<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>*/
/* 								<a class="read_more" href="index.html@page=post_gallery.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>*/
/* 							</div>*/
/* 						</li>*/
/* 					</ul>*/
/* 					<ul class="blog column column_1_2">*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/330x242/image_04.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="post_content">*/
/* 								<h2 class="with_number">*/
/* 									<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>*/
/* 									<a class="comments_number" href="index.html@page=post.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/* 								</h2>*/
/* 								<ul class="post_details">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 								<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>*/
/* 								<a class="read_more" href="index.html@page=post.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/330x242/image_12.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="post_content">*/
/* 								<h2 class="with_number">*/
/* 									<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>*/
/* 									<a class="comments_number" href="index.html@page=post.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/* 								</h2>*/
/* 								<ul class="post_details">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 								<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>*/
/* 								<a class="read_more" href="index.html@page=post.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post_gallery.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 								<span class="icon gallery"></span>*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/330x242/image_13.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="post_content">*/
/* 								<h2 class="with_number">*/
/* 									<a href="index.html@page=post_gallery.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>*/
/* 									<a class="comments_number" href="index.html@page=post_gallery.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/* 								</h2>*/
/* 								<ul class="post_details">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 								<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>*/
/* 								<a class="read_more" href="index.html@page=post_gallery.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>*/
/* 							</div>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</div>*/
/* 				<ul class="pagination clearfix page_margin_top_section">*/
/* 					<li class="left">*/
/* 						<a href="index.html@page=blog_small_slider.html#" title="">&nbsp;</a>*/
/* 					</li>*/
/* 					<li class="selected">*/
/* 						<a href="index.html@page=blog_small_slider.html#" title="">*/
/* 							1*/
/* 						</a>*/
/* 					</li>*/
/* 					<li>*/
/* 						<a href="index.html@page=blog_small_slider.html#" title="">*/
/* 							2*/
/* 						</a>*/
/* 					</li>*/
/* 					<li>*/
/* 						<a href="index.html@page=blog_small_slider.html#" title="">*/
/* 							3*/
/* 						</a>*/
/* 					</li>*/
/* 					<li class="right">*/
/* 						<a href="index.html@page=blog_small_slider.html#" title="">&nbsp;</a>*/
/* 					</li>*/
/* 				</ul>*/
/* 			</div>*/
/* 			<div class="column column_1_3">*/
/* 				<h4 class="box_header">Informasi</h4>*/
/* 				<ul class="blog small_margin clearfix">*/
/* 					<div class="kopi-covid"> </div>*/
/* 				</ul>*/
/* 				<h4 class="box_header page_margin_top_section">Pengumuman COVID-19</h4>*/
/* 				<ul class="blog small clearfix">*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">*/
/* 						</a>*/
/* 						<div class="">*/
/* 							<h5>*/
/* 								<a href="index.html@page=post.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>*/
/* 							</h5>*/
/* 							<ul class="post_details simple">*/
/* 								<li class="category"><a href="index.html@page=category&amp;cat=science.html" title="SCIENCE">SCIENCE</a></li>*/
/* 								<li class="date">*/
/* 									10:11 PM, Feb 02*/
/* 								</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</li>*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">*/
/* 						</a>*/
/* 						<div class="">*/
/* 							<h5>*/
/* 								<a href="index.html@page=post.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>*/
/* 							</h5>*/
/* 							<ul class="post_details simple">*/
/* 								<li class="category"><a href="index.html@page=category&amp;cat=science.html" title="SCIENCE">SCIENCE</a></li>*/
/* 								<li class="date">*/
/* 									10:11 PM, Feb 02*/
/* 								</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</li>*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post_quote.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 						</a>*/
/* 						<div class="">*/
/* 							<h5>*/
/* 								<a href="index.html@page=post_quote.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>*/
/* 							</h5>*/
/* 							<ul class="post_details simple">*/
/* 								<li class="category"><a href="index.html@page=category&amp;cat=science.html" title="SCIENCE">SCIENCE</a></li>*/
/* 								<li class="date">*/
/* 									10:11 PM, Feb 02*/
/* 								</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</li>*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post_gallery.html" title="Nuclear Fusion Closer to Becoming a Reality">*/
/* 						</a>*/
/* 						<div class="">*/
/* 							<h5>*/
/* 								<a href="index.html@page=post_gallery.html" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a>*/
/* 							</h5>*/
/* 							<ul class="post_details simple">*/
/* 								<li class="category"><a href="index.html@page=category&amp;cat=science.html" title="SCIENCE">SCIENCE</a></li>*/
/* 								<li class="date">*/
/* 									10:11 PM, Feb 02*/
/* 								</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</li>*/
/* 				</ul>*/
/* 				<a class="more page_margin_top" href="#">LOAD MORE</a>*/
/* 				<!-- <h4 class="box_header page_margin_top_section">Top Authors</h4>*/
/* 				<ul class="authors rating clearfix">*/
/* 					<li class="author">*/
/* 						<a class="thumb" href="index.html@page=author.html" title="Debora Hilton">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/Team_100x100/image_01.jpg' alt='img'>*/
/* 							<span class="number animated_element" data-value="34"></span>*/
/* 						</a>*/
/* 						<div class="details">*/
/* 							<h5><a href="index.html@page=author.html" title="Debora Hilton">Debora Hilton</a></h5>*/
/* 							<h6>EDITOR</h6>*/
/* 						</div>*/
/* 					</li>*/
/* 					<li class="author">*/
/* 						<a class="thumb" href="index.html@page=author.html" title="Anna Shubina">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/Team_100x100/image_02.jpg' alt='img'>*/
/* 							<span class="number animated_element" data-value="25"></span>*/
/* 						</a>*/
/* 						<div class="details">*/
/* 							<h5><a href="index.html@page=author.html" title="Anna Shubina">Anna Shubina</a></h5>*/
/* 							<h6>EDITOR</h6>*/
/* 						</div>*/
/* 					</li>*/
/* 					<li class="author">*/
/* 						<a class="thumb" href="index.html@page=author.html" title="Liam Holden">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/Team_100x100/image_03.jpg' alt='img'>*/
/* 							<span class="number animated_element" data-value="9"></span>*/
/* 						</a>*/
/* 						<div class="details">*/
/* 							<h5><a href="index.html@page=author.html" title="Liam Holden">Liam Holden</a></h5>*/
/* 							<h6>PUBLISHER</h6>*/
/* 						</div>*/
/* 					</li>*/
/* 					<li class="author">*/
/* 						<a class="thumb" href="index.html@page=author.html" title="Heather Dale">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/Team_100x100/image_04.jpg' alt='img'>*/
/* 							<span class="number animated_element" data-value="2"></span>*/
/* 						</a>*/
/* 						<div class="details">*/
/* 							<h5><a href="index.html@page=author.html" title="Heather Dale">Heather Dale</a></h5>*/
/* 							<h6>ILLUSTRATOR</h6>*/
/* 						</div>*/
/* 					</li>*/
/* 				</ul> -->*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
