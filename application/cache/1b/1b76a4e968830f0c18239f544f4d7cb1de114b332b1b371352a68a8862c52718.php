<?php

/* users/index.html */
class __TwigTemplate_5334762ecaa173c6527382219058f415b6d63d06d5bcf33a3c96685394f4b6e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("users/layout.html", "users/index.html", 1);
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
        echo "<div class=\"page_layout page_margin_top clearfix\">
\t<div class=\"row page_margin_top\">
\t\t<div class=\"column column_2_3\">
\t\t\t<div class=\"caroufredsel_wrapper caroufredsel_wrapper_small_slider\">
\t\t\t\t<ul class=\"small_slider id-small_slider\">
\t\t\t\t\t<li class=\"slide\">
\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">
\t\t\t\t\t\t\t<img src='";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_09.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"slider_content_box\">
\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<h2><a href=\"index.html@page=post.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">Nuclear Fusion Closer to Becoming a Reality</a></h2>
\t\t\t\t\t\t\t<p class=\"clearfix\">Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"slide\">
\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Climate Change Debate While Britain Floods\">
\t\t\t\t\t\t\t<img src='";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_10.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"slider_content_box\">
\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t18:25 PM, Feb 21
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<h2><a href=\"index.html@page=post.html\" title=\"Climate Change Debate While Britain Floods\">Climate Change Debate While Britain Floods</a></h2>
\t\t\t\t\t\t\t<p class=\"clearfix\">Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"slide\">
\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"The Public Health Crisis Hiding in Our Food\">
\t\t\t\t\t\t\t<img src='";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_08.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"slider_content_box\">
\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<h2><a href=\"index.html@page=post.html\" title=\"The Public Health Crisis Hiding in Our Food\">The Public Health Crisis Hiding in Our Food</a></h2>
\t\t\t\t\t\t\t<p class=\"clearfix\">Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"slide\">
\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t<img src='";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_02.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"slider_content_box\">
\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t18:25 PM, Feb 21
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<h2><a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a></h2>
\t\t\t\t\t\t\t<p class=\"clearfix\">Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div id=\"small_slider\" class='slider_posts_list_container small'>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<ul class=\"blog column column_1_2\">
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post_small_image.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t<img src='";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_08.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h2 class=\"with_number\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post_small_image.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a>
\t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post_small_image.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
\t\t\t\t\t\t</h2>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"blog column column_1_2\">
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t<img src='";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_09.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h2 class=\"with_number\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a>
\t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
\t\t\t\t\t\t</h2>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<ul class=\"blog medium\">
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"High Altitudes May Aid Weight Control\">
\t\t\t\t\t\t\t<img src='";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_02.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h5><a href=\"index.html@page=post.html\" title=\"High Altitudes May Aid Weight Control\">High Altitudes May Aid Weight Control</a></h5>
\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"Climate Change Debate While Britain Floods\">
\t\t\t\t\t\t\t<span class=\"icon gallery\"></span>
\t\t\t\t\t\t\t<img src='";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_01.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h5><a href=\"index.html@page=post_gallery.html\" title=\"Climate Change Debate While Britain Floods\">Climate Change Debate While Britain Floods</a></h5>
\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"Climate Change Debate While Britain Floods\">
\t\t\t\t\t\t\t<span class=\"icon gallery\"></span>
\t\t\t\t\t\t\t<img src='";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_03.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h5><a href=\"index.html@page=post_gallery.html\" title=\"Climate Change Debate While Britain Floods\">New Painkiller Rekindles Addiction Concerns</a></h5>
\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"row page_margin_top_section\">
\t\t\t\t<div class=\"column column_1_2\">
\t\t\t\t\t<h4 class=\"box_header\">Lifestyle</h4>
\t\t\t\t\t<ul class=\"blog small_margin clearfix\">
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post_soundcloud.html\" title=\"The Public Health Crisis Hiding in Our Food\">
\t\t\t\t\t\t\t\t<img src='";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/510x187/image_12.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_soundcloud.html\" title=\"The Public Health Crisis Hiding in Our Food\">The Public Health Crisis Hiding in Our Food</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=lifestyle.html\" title=\"LIFESTYLE\">LIFESTYLE</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t<li class=\"bullet style_1\"><a href=\"index.html@page=post.html\" title=\"Climate Change Debate While Britain Floods\">Climate Change Debate While Britain Floods</a></li>
\t\t\t\t\t\t<li class=\"bullet style_1\"><a href=\"index.html@page=post.html\" title=\"New Painkiller Rekindles Addiction Concerns\">New Painkiller Rekindles Addiction Concerns</a></li>
\t\t\t\t\t\t<li class=\"bullet style_1\"><a href=\"index.html@page=post.html\" title=\"Supreme Court Skeptical Of Ohio Law\">Supreme Court Skeptical Of Ohio Law</a></li>
\t\t\t\t\t\t<li class=\"bullet style_1\"><a href=\"index.html@page=post_soundcloud.html\" title=\"Struggling Nuremberg Sack Coach Verbeek\">Struggling Nuremberg Sack Coach Verbeek</a></li>
\t\t\t\t\t\t<li class=\"bullet style_1\"><a href=\"index.html@page=post.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">Nuclear Fusion Closer to Becoming a Reality</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"column column_1_2\">
\t\t\t\t\t<h4 class=\"box_header\">Health</h4>
\t\t\t\t\t<ul class=\"blog small_margin clearfix\">
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"The Public Health Crisis Hiding in Our Food\">
\t\t\t\t\t\t\t\t<img src='";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/510x187/image_06.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"The Public Health Crisis Hiding in Our Food\">The Public Health Crisis Hiding in Our Food</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=lifestyle.html\" title=\"LIFESTYLE\">LIFESTYLE</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t<li class=\"bullet style_1\"><a href=\"index.html@page=post.html\" title=\"Climate Change Debate While Britain Floods\">Climate Change Debate While Britain Floods</a></li>
\t\t\t\t\t\t<li class=\"bullet style_1\"><a href=\"index.html@page=post.html\" title=\"New Painkiller Rekindles Addiction Concerns\">New Painkiller Rekindles Addiction Concerns</a></li>
\t\t\t\t\t\t<li class=\"bullet style_1\"><a href=\"index.html@page=post_quote.html\" title=\"Supreme Court Skeptical Of Ohio Law\">Supreme Court Skeptical Of Ohio Law</a></li>
\t\t\t\t\t\t<li class=\"bullet style_1\"><a href=\"index.html@page=post.html\" title=\"Struggling Nuremberg Sack Coach Verbeek\">Struggling Nuremberg Sack Coach Verbeek</a></li>
\t\t\t\t\t\t<li class=\"bullet style_1\"><a href=\"index.html@page=post_quote_2.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">Nuclear Fusion Closer to Becoming a Reality</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"column column_1_3\">
\t\t\t<div class=\"tabs no_scroll clearfix\">
\t\t\t\t<ul class=\"tabs_navigation clearfix\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.html@page=home_4.html#sidebar-most-read\" title=\"Most Read\">
\t\t\t\t\t\t\tMost Read
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<span></span>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.html@page=home_4.html#sidebar-most-commented\" title=\"Commented\">
\t\t\t\t\t\t\tCommented
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<span></span>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div id=\"sidebar-most-read\">
\t\t\t\t\t<ul class=\"blog rating page_margin_top clearfix\">
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post_small_image.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">
\t\t\t\t\t\t\t\t<img src='";
        // line 216
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/510x187/image_12.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"6 257\"></span>
\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post_small_image.html\" title=\"New Painkiller Rekindles Addiction Concerns\">New Painkiller Rekindles Addiction Concerns</a></h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"5 062\"></span>
\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post.html\" title=\"New Painkiller Rekindles Addiction Concerns\">New Painkiller Rekindles Addiction Concerns</a></h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"4 778\"></span>
\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post.html\" title=\"Seeking the Right Chemistry, Drug Makers Hunt for Mergers\">Seeking the Right Chemistry, Drug Makers Hunt for Mergers</a></h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=sports.html\" title=\"SPORTS\">SPORTS</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"754\"></span>
\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">Study Linking Illnes and Salt Leaves Researchers Doubtful</a></h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=science.html\" title=\"SCIENCE\">SCIENCE</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"52\"></span>
\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post.html\" title=\"Syrian Civilians Trapped for Months Continue to be Evacuated\">Syrian Civilians Trapped for Months Continue to be Evacuated</a></h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=science.html\" title=\"SCIENCE\">SCIENCE</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div id=\"sidebar-most-commented\">
\t\t\t\t\t<ul class=\"blog rating page_margin_top clearfix\">
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">
\t\t\t\t\t\t\t\t<img src='";
        // line 268
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/510x187/image_02.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"70\"></span>
\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post.html\" title=\"New Painkiller Rekindles Addiction Concerns\">New Painkiller Rekindles Addiction Concerns</a></h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"62\"></span>
\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post.html\" title=\"New Painkiller Rekindles Addiction Concerns\">New Painkiller Rekindles Addiction Concerns</a></h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"30\"></span>
\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post.html\" title=\"Seeking the Right Chemistry, Drug Makers Hunt for Mergers\">Seeking the Right Chemistry, Drug Makers Hunt for Mergers</a></h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=sports.html\" title=\"SPORTS\">SPORTS</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"25\"></span>
\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">Study Linking Illnes and Salt Leaves Researchers Doubtful</a></h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=science.html\" title=\"SCIENCE\">SCIENCE</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"4\"></span>
\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post.html\" title=\"Syrian Civilians Trapped for Months Continue to be Evacuated\">Syrian Civilians Trapped for Months Continue to be Evacuated</a></h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=science.html\" title=\"SCIENCE\">SCIENCE</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<h4 class=\"box_header page_margin_top_section\">Lifestyle</h4>
\t\t\t<ul class=\"blog small clearfix\">
\t\t\t\t<li class=\"post\">
\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">
\t\t\t\t\t\t<img src='";
        // line 321
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_09.jpg' alt='img'>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=lifestyle.html\" title=\"LIFESTYLE\">LIFESTYLE</a></li>
\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"post\">
\t\t\t\t\t<a href=\"index.html@page=post_quote_2.html\" title=\"Syrian Civilians Trapped For Months Continue To Be Evacuated\">
\t\t\t\t\t\t<img src='";
        // line 337
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_12.jpg' alt='img'>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t<a href=\"index.html@page=post_quote_2.html\" title=\"Syrian Civilians Trapped For Months Continue To Be Evacuated\">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=lifestyle.html\" title=\"LIFESTYLE\">LIFESTYLE</a></li>
\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"post\">
\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t<img src='";
        // line 353
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_02.jpg' alt='img'>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a>
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=lifestyle.html\" title=\"LIFESTYLE\">LIFESTYLE</a></li>
\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"post\">
\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">
\t\t\t\t\t\t<span class=\"icon small gallery\"></span>
\t\t\t\t\t\t<img src='";
        // line 370
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_01.jpg' alt='img'>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">Nuclear Fusion Closer to Becoming a Reality</a>
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=lifestyle.html\" title=\"LIFESTYLE\">LIFESTYLE</a></li>
\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<a class=\"more page_margin_top\" href=\"index.html@page=home_4.html#\">MORE FROM LIFESTYLE</a>
\t\t</div>
\t</div>
\t<div class=\"row page_margin_top\">
\t\t<div class=\"column column_2_3\">
\t\t\t<h4 class=\"box_header\">Latest Posts</h4>
\t\t\t<div class=\"row\">
\t\t\t\t<ul class=\"blog column column_1_2\">
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post_small_image.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t<img src='";
        // line 395
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_08.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h2 class=\"with_number\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post_small_image.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a>
\t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
\t\t\t\t\t\t</h2>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"blog column column_1_2\">
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t<img src='";
        // line 406
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_09.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h2 class=\"with_number\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a>
\t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
\t\t\t\t\t\t</h2>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<ul class=\"blog medium\">
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"High Altitudes May Aid Weight Control\">
\t\t\t\t\t\t\t<img src='";
        // line 419
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_02.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h5><a href=\"index.html@page=post.html\" title=\"High Altitudes May Aid Weight Control\">High Altitudes May Aid Weight Control</a></h5>
\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"Climate Change Debate While Britain Floods\">
\t\t\t\t\t\t\t<span class=\"icon gallery\"></span>
\t\t\t\t\t\t\t<img src='";
        // line 432
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_01.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h5><a href=\"index.html@page=post_gallery.html\" title=\"Climate Change Debate While Britain Floods\">Climate Change Debate While Britain Floods</a></h5>
\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"Climate Change Debate While Britain Floods\">
\t\t\t\t\t\t\t<span class=\"icon gallery\"></span>
\t\t\t\t\t\t\t<img src='";
        // line 445
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_03.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h5><a href=\"index.html@page=post_gallery.html\" title=\"Climate Change Debate While Britain Floods\">New Painkiller Rekindles Addiction Concerns</a></h5>
\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<h4 class=\"box_header page_margin_top_section\">Latest From Health</h4>
\t\t\t<div class=\"row\">
\t\t\t\t<ul class=\"blog column column_1_2\">
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"High Altitudes May Aid Weight Control\">
\t\t\t\t\t\t\t<span class=\"icon gallery\"></span>
\t\t\t\t\t\t\t<img src='";
        // line 463
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_05.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h2 class=\"with_number\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"High Altitudes May Aid Weight Control\">High Altitudes May Aid Weight Control</a>
\t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post_gallery.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<ul class=\"post_details\">
\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<p>Politicans have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as flood tourists at the side of disasters.</p>
\t\t\t\t\t\t<a class=\"read_more\" href=\"index.html@page=post_gallery.html\" title=\"Read more\"><span class=\"arrow\"></span><span>READ MORE</span></a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"column column_1_2\">
\t\t\t\t\t<ul class=\"blog small clearfix\">
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post_quote_2.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">
\t\t\t\t\t\t\t\t<img src='";
        // line 483
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_02.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_quote_2.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post_soundcloud.html\" title=\"Seeking the Right Chemistry, Drug Makers Hunt for Mergers\">
\t\t\t\t\t\t\t\t<img src='";
        // line 499
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_13.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_soundcloud.html\" title=\"Seeking the Right Chemistry, Drug Makers Hunt for Mergers\">Seeking the Right Chemistry, Drug Makers Hunt for Mergers</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post_review_2.html\" title=\"Seeking the Right Chemistry, Drug Makers Hunt for Mergers\">
\t\t\t\t\t\t\t\t<span class=\"icon small review\"></span>
\t\t\t\t\t\t\t\t<img src='";
        // line 516
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_01.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_review_2.html\" title=\"Seeking the Right Chemistry, Drug Makers Hunt for Mergers\">The Public Health Crisis Hiding in Our Food</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"New Painkiller Rekindles Addiction Concerns\">
\t\t\t\t\t\t\t\t<span class=\"icon small gallery\"></span>
\t\t\t\t\t\t\t\t<img src='";
        // line 533
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_03.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"New Painkiller Rekindles Addiction Concerns\">New Painkiller Rekindles Addiction Concerns</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<a class=\"more page_margin_top\" href=\"index.html@page=home_3.html#\">MORE FROM HEALTH</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row page_margin_top_section\">
\t\t\t\t<h4 class=\"box_header\">More Articles</h4>
\t\t\t\t<ul class=\"blog medium\">
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"High Altitudes May Aid Weight Control\">
\t\t\t\t\t\t\t<span class=\"icon gallery\"></span>
\t\t\t\t\t\t\t<img src='";
        // line 557
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_10.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h5><a href=\"index.html@page=post_gallery.html\" title=\"High Altitudes May Aid Weight Control\">High Altitudes May Aid Weight Control</a></h5>
\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post_small_image.html\" title=\"Climate Change Debate While Britain Floods\">
\t\t\t\t\t\t\t<img src='";
        // line 569
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_13.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h5><a href=\"index.html@page=post_small_image.html\" title=\"Climate Change Debate While Britain Floods\">Climate Change Debate While Britain Floods</a></h5>
\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post_review.html\" title=\"Climate Change Debate While Britain Floods\">
\t\t\t\t\t\t\t<span class=\"icon\"><span>8.7</span></span>
\t\t\t\t\t\t\t<img src='";
        // line 582
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_12.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h5><a href=\"index.html@page=post_review.html\" title=\"Climate Change Debate While Britain Floods\">New Painkiller Rekindles Addiction Concerns</a></h5>
\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post_video.html\" title=\"High Altitudes May Aid Weight Control\">
\t\t\t\t\t\t\t<span class=\"icon video\"></span>
\t\t\t\t\t\t\t<img src='";
        // line 595
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_03.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h5><a href=\"index.html@page=post_video.html\" title=\"High Altitudes May Aid Weight Control\">High Altitudes May Aid Weight Control</a></h5>
\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Climate Change Debate While Britain Floods\">
\t\t\t\t\t\t\t<img src='";
        // line 607
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_09.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h5><a href=\"index.html@page=post.html\" title=\"Climate Change Debate While Britain Floods\">Climate Change Debate While Britain Floods</a></h5>
\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Climate Change Debate While Britain Floods\">
\t\t\t\t\t\t\t<img src='";
        // line 619
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_01.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h5><a href=\"index.html@page=post.html\" title=\"Climate Change Debate While Britain Floods\">New Painkiller Rekindles Addiction Concerns</a></h5>
\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"row page_margin_top_section\">
\t\t\t\t<div class=\"column column_1_2\">
\t\t\t\t\t<h4 class=\"box_header\">Sports</h4>
\t\t\t\t\t<ul class=\"blog\">
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Struggling Nuremberg Sack Coach Verbeek\">
\t\t\t\t\t\t\t\t<img src='";
        // line 637
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_06.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<h2 class=\"with_number\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Struggling Nuremberg Sack Coach Verbeek\">Struggling Nuremberg Sack Coach Verbeek</a>
\t\t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<ul class=\"post_details\">
\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=sports.html\" title=\"SPORTS\">SPORTS</a></li>
\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<p>Politicans have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as flood tourists at the side of disasters.</p>
\t\t\t\t\t\t\t<a class=\"read_more\" href=\"index.html@page=post.html\" title=\"Read more\"><span class=\"arrow\"></span><span>READ MORE</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"blog small clearfix\">
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post_small_image.html\" title=\"Bayern Says Ties With Rivals Dortmund Have Frozen\">
\t\t\t\t\t\t\t\t<img src='";
        // line 656
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_14.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_small_image.html\" title=\"Bayern Says Ties With Rivals Dortmund Have Frozen\">Bayern Says Ties With Rivals Dortmund Have Frozen</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=sports.html\" title=\"SPORTS\">SPORTS</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t\t<img src='";
        // line 672
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_12.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=sports.html\" title=\"SPORTS\">SPORTS</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<a class=\"more page_margin_top\" href=\"index.html@page=home_3.html#\">READ MORE</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"column column_1_2\">
\t\t\t\t\t<h4 class=\"box_header\">Lifestyle</h4>
\t\t\t\t\t<ul class=\"blog\">
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post_quote.html\" title=\"High Altitudes May Aid Weight Control\">
\t\t\t\t\t\t\t\t<img src='";
        // line 694
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_07.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<h2 class=\"with_number\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_quote.html\" title=\"High Altitudes May Aid Weight Control\">High Altitudes May Aid Weight Control</a>
\t\t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post_quote.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<ul class=\"post_details\">
\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=lifestyle.html\" title=\"LIFESTYLE\">LIFESTYLE</a></li>
\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<p>Politicans have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as flood tourists at the side of disasters.</p>
\t\t\t\t\t\t\t<a class=\"read_more\" href=\"index.html@page=post_quote.html\" title=\"Read more\"><span class=\"arrow\"></span><span>READ MORE</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"blog small clearfix\">
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Bayern Says Ties With Rivals Dortmund Have Frozen\">
\t\t\t\t\t\t\t\t<img src='";
        // line 713
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_01.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Bayern Says Ties With Rivals Dortmund Have Frozen\">Bayern Says Ties With Rivals Dortmund Have Frozen</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=lifestyle.html\" title=\"LIFESTYLE\">LIFESTYLE</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post_video_2.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t\t<span class=\"icon small video\"></span>
\t\t\t\t\t\t\t\t<img src='";
        // line 730
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_03.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_video_2.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=lifestyle.html\" title=\"LIFESTYLE\">LIFESTYLE</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<a class=\"more page_margin_top\" href=\"index.html@page=home_3.html#\">READ MORE</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"column column_1_3\">
\t\t\t<div class=\"tabs no_scroll clearfix\">
\t\t\t\t<ul class=\"tabs_navigation clearfix\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.html@page=home_3.html#sidebar-most-read\" title=\"Most Read\">
\t\t\t\t\t\t\tMost Read
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<span></span>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.html@page=home_3.html#sidebar-most-commented\" title=\"Commented\">
\t\t\t\t\t\t\tCommented
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<span></span>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div id=\"sidebar-most-read\">
\t\t\t\t\t<ul class=\"blog rating page_margin_top clearfix\">
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">
\t\t\t\t\t\t\t\t<img src='";
        // line 769
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/510x187/image_12.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"6 257\"></span>
\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post.html\" title=\"New Painkiller Rekindles Addiction Concerns\">New Painkiller Rekindles Addiction Concerns</a></h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"5 062\"></span>
\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post.html\" title=\"New Painkiller Rekindles Addiction Concerns\">New Painkiller Rekindles Addiction Concerns</a></h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"4 778\"></span>
\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post.html\" title=\"Seeking the Right Chemistry, Drug Makers Hunt for Mergers\">Seeking the Right Chemistry, Drug Makers Hunt for Mergers</a></h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=sports.html\" title=\"SPORTS\">SPORTS</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"754\"></span>
\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">Study Linking Illnes and Salt Leaves Researchers Doubtful</a></h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=science.html\" title=\"SCIENCE\">SCIENCE</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"52\"></span>
\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post.html\" title=\"Syrian Civilians Trapped for Months Continue to be Evacuated\">Syrian Civilians Trapped for Months Continue to be Evacuated</a></h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=science.html\" title=\"SCIENCE\">SCIENCE</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<a class=\"more page_margin_top\" href=\"index.html@page=home_3.html#\">SHOW MORE</a>
\t\t\t\t</div>
\t\t\t\t<div id=\"sidebar-most-commented\">
\t\t\t\t\t<ul class=\"blog rating page_margin_top clearfix\">
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">
\t\t\t\t\t\t\t\t<img src='";
        // line 822
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/510x187/image_02.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"70\"></span>
\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post.html\" title=\"New Painkiller Rekindles Addiction Concerns\">New Painkiller Rekindles Addiction Concerns</a></h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"62\"></span>
\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post_small_image.html\" title=\"New Painkiller Rekindles Addiction Concerns\">New Painkiller Rekindles Addiction Concerns</a></h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"30\"></span>
\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post_quote_2.html\" title=\"Seeking the Right Chemistry, Drug Makers Hunt for Mergers\">Seeking the Right Chemistry, Drug Makers Hunt for Mergers</a></h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=sports.html\" title=\"SPORTS\">SPORTS</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"25\"></span>
\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">Study Linking Illnes and Salt Leaves Researchers Doubtful</a></h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=science.html\" title=\"SCIENCE\">SCIENCE</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"4\"></span>
\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post.html\" title=\"Syrian Civilians Trapped for Months Continue to be Evacuated\">Syrian Civilians Trapped for Months Continue to be Evacuated</a></h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=science.html\" title=\"SCIENCE\">SCIENCE</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<a class=\"more page_margin_top\" href=\"index.html@page=home_3.html#\">SHOW MORE</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<h4 class=\"box_header page_margin_top_section\">Latest Posts</h4>
\t\t\t<div class=\"vertical_carousel_container clearfix\">
\t\t\t\t<ul class=\"blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750\">
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">
\t\t\t\t\t\t\t<span class=\"icon small gallery\"></span>
\t\t\t\t\t\t\t<img src='";
        // line 878
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_06.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Syrian Civilians Trapped For Months Continue To Be Evacuated\">
\t\t\t\t\t\t\t<img src='";
        // line 894
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_12.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Syrian Civilians Trapped For Months Continue To Be Evacuated\">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post_soundcloud.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t<img src='";
        // line 910
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_02.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_soundcloud.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a>
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=sports.html\" title=\"SPORTS\">SPORTS</a></li>
\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">
\t\t\t\t\t\t\t<img src='";
        // line 926
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_13.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">Nuclear Fusion Closer to Becoming a Reality</a>
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
\t\t\t</div>
\t\t\t<h4 class=\"box_header page_margin_top_section\">Top Authors</h4>
\t\t\t<ul class=\"authors rating clearfix\">
\t\t\t\t<li class=\"author\">
\t\t\t\t\t<a class=\"thumb\" href=\"index.html@page=author.html\" title=\"Debora Hilton\">
\t\t\t\t\t\t<img src='";
        // line 946
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/Team_100x100/image_01.jpg' alt='img'>
\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"34\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t<h5><a href=\"index.html@page=author.html\" title=\"Debora Hilton\">Debora Hilton</a></h5>
\t\t\t\t\t\t<h6>EDITOR</h6>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"author\">
\t\t\t\t\t<a class=\"thumb\" href=\"index.html@page=author.html\" title=\"Anna Shubina\">
\t\t\t\t\t\t<img src='";
        // line 956
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/Team_100x100/image_02.jpg' alt='img'>
\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"25\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t<h5><a href=\"index.html@page=author.html\" title=\"Anna Shubina\">Anna Shubina</a></h5>
\t\t\t\t\t\t<h6>EDITOR</h6>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"author\">
\t\t\t\t\t<a class=\"thumb\" href=\"index.html@page=author.html\" title=\"Liam Holden\">
\t\t\t\t\t\t<img src='";
        // line 966
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/Team_100x100/image_03.jpg' alt='img'>
\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"9\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t<h5><a href=\"index.html@page=author.html\" title=\"Liam Holden\">Liam Holden</a></h5>
\t\t\t\t\t\t<h6>PUBLISHER</h6>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"author\">
\t\t\t\t\t<a class=\"thumb\" href=\"index.html@page=author.html\" title=\"Heather Dale\">
\t\t\t\t\t\t<img src='";
        // line 976
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/Team_100x100/image_04.jpg' alt='img'>
\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"2\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t<h5><a href=\"index.html@page=author.html\" title=\"Heather Dale\">Heather Dale</a></h5>
\t\t\t\t\t\t<h6>ILLUSTRATOR</h6>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<h4 class=\"box_header page_margin_top_section\">Science</h4>
\t\t\t<ul class=\"blog small clearfix\">
\t\t\t\t<li class=\"post\">
\t\t\t\t\t<a href=\"index.html@page=post_small_image.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">
\t\t\t\t\t\t<img src='";
        // line 989
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_09.jpg' alt='img'>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t<a href=\"index.html@page=post_small_image.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=science.html\" title=\"SCIENCE\">SCIENCE</a></li>
\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"post\">
\t\t\t\t\t<a href=\"index.html@page=post_quote.html\" title=\"Syrian Civilians Trapped For Months Continue To Be Evacuated\">
\t\t\t\t\t\t<img src='";
        // line 1005
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_12.jpg' alt='img'>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t<a href=\"index.html@page=post_quote.html\" title=\"Syrian Civilians Trapped For Months Continue To Be Evacuated\">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=science.html\" title=\"SCIENCE\">SCIENCE</a></li>
\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"post\">
\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t<img src='";
        // line 1021
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_02.jpg' alt='img'>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a>
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=science.html\" title=\"SCIENCE\">SCIENCE</a></li>
\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"post\">
\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">
\t\t\t\t\t\t<span class=\"icon small gallery\"></span>
\t\t\t\t\t\t<img src='";
        // line 1038
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_01.jpg' alt='img'>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">Nuclear Fusion Closer to Becoming a Reality</a>
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=science.html\" title=\"SCIENCE\">SCIENCE</a></li>
\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<a class=\"more page_margin_top\" href=\"index.html@page=home_3.html#\">MORE FROM SCIENCE</a>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "users/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1224 => 1038,  1204 => 1021,  1185 => 1005,  1166 => 989,  1150 => 976,  1137 => 966,  1124 => 956,  1111 => 946,  1088 => 926,  1069 => 910,  1050 => 894,  1031 => 878,  972 => 822,  916 => 769,  874 => 730,  854 => 713,  832 => 694,  807 => 672,  788 => 656,  766 => 637,  745 => 619,  730 => 607,  715 => 595,  699 => 582,  683 => 569,  668 => 557,  641 => 533,  621 => 516,  601 => 499,  582 => 483,  559 => 463,  538 => 445,  522 => 432,  506 => 419,  490 => 406,  476 => 395,  448 => 370,  428 => 353,  409 => 337,  390 => 321,  334 => 268,  279 => 216,  231 => 171,  200 => 143,  179 => 125,  163 => 112,  147 => 99,  131 => 86,  117 => 75,  93 => 54,  75 => 39,  57 => 24,  39 => 9,  30 => 2,  11 => 1,);
    }
}
/* {% extends "users/layout.html" %} {% block content %}*/
/* <div class="page_layout page_margin_top clearfix">*/
/* 	<div class="row page_margin_top">*/
/* 		<div class="column column_2_3">*/
/* 			<div class="caroufredsel_wrapper caroufredsel_wrapper_small_slider">*/
/* 				<ul class="small_slider id-small_slider">*/
/* 					<li class="slide">*/
/* 						<a href="index.html@page=post.html" title="Nuclear Fusion Closer to Becoming a Reality">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/690x450/image_09.jpg' alt='img'>*/
/* 						</a>*/
/* 						<div class="slider_content_box">*/
/* 							<ul class="post_details simple">*/
/* 								<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 								<li class="date">*/
/* 									10:11 PM, Feb 02*/
/* 								</li>*/
/* 							</ul>*/
/* 							<h2><a href="index.html@page=post.html" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a></h2>*/
/* 							<p class="clearfix">Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>*/
/* 						</div>*/
/* 					</li>*/
/* 					<li class="slide">*/
/* 						<a href="index.html@page=post.html" title="Climate Change Debate While Britain Floods">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/690x450/image_10.jpg' alt='img'>*/
/* 						</a>*/
/* 						<div class="slider_content_box">*/
/* 							<ul class="post_details simple">*/
/* 								<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 								<li class="date">*/
/* 									18:25 PM, Feb 21*/
/* 								</li>*/
/* 							</ul>*/
/* 							<h2><a href="index.html@page=post.html" title="Climate Change Debate While Britain Floods">Climate Change Debate While Britain Floods</a></h2>*/
/* 							<p class="clearfix">Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>*/
/* 						</div>*/
/* 					</li>*/
/* 					<li class="slide">*/
/* 						<a href="index.html@page=post.html" title="The Public Health Crisis Hiding in Our Food">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/690x450/image_08.jpg' alt='img'>*/
/* 						</a>*/
/* 						<div class="slider_content_box">*/
/* 							<ul class="post_details simple">*/
/* 								<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 								<li class="date">*/
/* 									10:11 PM, Feb 02*/
/* 								</li>*/
/* 							</ul>*/
/* 							<h2><a href="index.html@page=post.html" title="The Public Health Crisis Hiding in Our Food">The Public Health Crisis Hiding in Our Food</a></h2>*/
/* 							<p class="clearfix">Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>*/
/* 						</div>*/
/* 					</li>*/
/* 					<li class="slide">*/
/* 						<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/690x450/image_02.jpg' alt='img'>*/
/* 						</a>*/
/* 						<div class="slider_content_box">*/
/* 							<ul class="post_details simple">*/
/* 								<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 								<li class="date">*/
/* 									18:25 PM, Feb 21*/
/* 								</li>*/
/* 							</ul>*/
/* 							<h2><a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a></h2>*/
/* 							<p class="clearfix">Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>*/
/* 						</div>*/
/* 					</li>*/
/* 				</ul>*/
/* 			</div>*/
/* 			<div id="small_slider" class='slider_posts_list_container small'>*/
/* 			</div>*/
/* 			<div class="row">*/
/* 				<ul class="blog column column_1_2">*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post_small_image.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/330x242/image_08.jpg' alt='img'>*/
/* 						</a>*/
/* 						<h2 class="with_number">*/
/* 							<a href="index.html@page=post_small_image.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>*/
/* 							<a class="comments_number" href="index.html@page=post_small_image.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/* 						</h2>*/
/* 					</li>*/
/* 				</ul>*/
/* 				<ul class="blog column column_1_2">*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/330x242/image_09.jpg' alt='img'>*/
/* 						</a>*/
/* 						<h2 class="with_number">*/
/* 							<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>*/
/* 							<a class="comments_number" href="index.html@page=post.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/* 						</h2>*/
/* 					</li>*/
/* 				</ul>*/
/* 			</div>*/
/* 			<div class="row">*/
/* 				<ul class="blog medium">*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post.html" title="High Altitudes May Aid Weight Control">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/330x242/image_02.jpg' alt='img'>*/
/* 						</a>*/
/* 						<h5><a href="index.html@page=post.html" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>*/
/* 						<ul class="post_details simple">*/
/* 							<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 							<li class="date">*/
/* 								10:11 PM, Feb 02*/
/* 							</li>*/
/* 						</ul>*/
/* 					</li>*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post_gallery.html" title="Climate Change Debate While Britain Floods">*/
/* 							<span class="icon gallery"></span>*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/330x242/image_01.jpg' alt='img'>*/
/* 						</a>*/
/* 						<h5><a href="index.html@page=post_gallery.html" title="Climate Change Debate While Britain Floods">Climate Change Debate While Britain Floods</a></h5>*/
/* 						<ul class="post_details simple">*/
/* 							<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 							<li class="date">*/
/* 								10:11 PM, Feb 02*/
/* 							</li>*/
/* 						</ul>*/
/* 					</li>*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post_gallery.html" title="Climate Change Debate While Britain Floods">*/
/* 							<span class="icon gallery"></span>*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/330x242/image_03.jpg' alt='img'>*/
/* 						</a>*/
/* 						<h5><a href="index.html@page=post_gallery.html" title="Climate Change Debate While Britain Floods">New Painkiller Rekindles Addiction Concerns</a></h5>*/
/* 						<ul class="post_details simple">*/
/* 							<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 							<li class="date">*/
/* 								10:11 PM, Feb 02*/
/* 							</li>*/
/* 						</ul>*/
/* 					</li>*/
/* 				</ul>*/
/* 			</div>*/
/* 			<div class="row page_margin_top_section">*/
/* 				<div class="column column_1_2">*/
/* 					<h4 class="box_header">Lifestyle</h4>*/
/* 					<ul class="blog small_margin clearfix">*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post_soundcloud.html" title="The Public Health Crisis Hiding in Our Food">*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/510x187/image_12.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="post_content">*/
/* 								<h5>*/
/* 									<a href="index.html@page=post_soundcloud.html" title="The Public Health Crisis Hiding in Our Food">The Public Health Crisis Hiding in Our Food</a>*/
/* 								</h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=lifestyle.html" title="LIFESTYLE">LIFESTYLE</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 					</ul>*/
/* 					<ul class="list">*/
/* 						<li class="bullet style_1"><a href="index.html@page=post.html" title="Climate Change Debate While Britain Floods">Climate Change Debate While Britain Floods</a></li>*/
/* 						<li class="bullet style_1"><a href="index.html@page=post.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></li>*/
/* 						<li class="bullet style_1"><a href="index.html@page=post.html" title="Supreme Court Skeptical Of Ohio Law">Supreme Court Skeptical Of Ohio Law</a></li>*/
/* 						<li class="bullet style_1"><a href="index.html@page=post_soundcloud.html" title="Struggling Nuremberg Sack Coach Verbeek">Struggling Nuremberg Sack Coach Verbeek</a></li>*/
/* 						<li class="bullet style_1"><a href="index.html@page=post.html" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a></li>*/
/* 					</ul>*/
/* 				</div>*/
/* 				<div class="column column_1_2">*/
/* 					<h4 class="box_header">Health</h4>*/
/* 					<ul class="blog small_margin clearfix">*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post.html" title="The Public Health Crisis Hiding in Our Food">*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/510x187/image_06.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="post_content">*/
/* 								<h5>*/
/* 									<a href="index.html@page=post.html" title="The Public Health Crisis Hiding in Our Food">The Public Health Crisis Hiding in Our Food</a>*/
/* 								</h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=lifestyle.html" title="LIFESTYLE">LIFESTYLE</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 					</ul>*/
/* 					<ul class="list">*/
/* 						<li class="bullet style_1"><a href="index.html@page=post.html" title="Climate Change Debate While Britain Floods">Climate Change Debate While Britain Floods</a></li>*/
/* 						<li class="bullet style_1"><a href="index.html@page=post.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></li>*/
/* 						<li class="bullet style_1"><a href="index.html@page=post_quote.html" title="Supreme Court Skeptical Of Ohio Law">Supreme Court Skeptical Of Ohio Law</a></li>*/
/* 						<li class="bullet style_1"><a href="index.html@page=post.html" title="Struggling Nuremberg Sack Coach Verbeek">Struggling Nuremberg Sack Coach Verbeek</a></li>*/
/* 						<li class="bullet style_1"><a href="index.html@page=post_quote_2.html" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a></li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="column column_1_3">*/
/* 			<div class="tabs no_scroll clearfix">*/
/* 				<ul class="tabs_navigation clearfix">*/
/* 					<li>*/
/* 						<a href="index.html@page=home_4.html#sidebar-most-read" title="Most Read">*/
/* 							Most Read*/
/* 						</a>*/
/* 						<span></span>*/
/* 					</li>*/
/* 					<li>*/
/* 						<a href="index.html@page=home_4.html#sidebar-most-commented" title="Commented">*/
/* 							Commented*/
/* 						</a>*/
/* 						<span></span>*/
/* 					</li>*/
/* 				</ul>*/
/* 				<div id="sidebar-most-read">*/
/* 					<ul class="blog rating page_margin_top clearfix">*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post_small_image.html" title="Nuclear Fusion Closer to Becoming a Reality">*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/510x187/image_12.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="post_content">*/
/* 								<span class="number animated_element" data-value="6 257"></span>*/
/* 								<h5><a href="index.html@page=post_small_image.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<div class="post_content">*/
/* 								<span class="number animated_element" data-value="5 062"></span>*/
/* 								<h5><a href="index.html@page=post.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<div class="post_content">*/
/* 								<span class="number animated_element" data-value="4 778"></span>*/
/* 								<h5><a href="index.html@page=post.html" title="Seeking the Right Chemistry, Drug Makers Hunt for Mergers">Seeking the Right Chemistry, Drug Makers Hunt for Mergers</a></h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=sports.html" title="SPORTS">SPORTS</a></li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<div class="post_content">*/
/* 								<span class="number animated_element" data-value="754"></span>*/
/* 								<h5><a href="index.html@page=post.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a></h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=science.html" title="SCIENCE">SCIENCE</a></li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<div class="post_content">*/
/* 								<span class="number animated_element" data-value="52"></span>*/
/* 								<h5><a href="index.html@page=post.html" title="Syrian Civilians Trapped for Months Continue to be Evacuated">Syrian Civilians Trapped for Months Continue to be Evacuated</a></h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=science.html" title="SCIENCE">SCIENCE</a></li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</div>*/
/* 				<div id="sidebar-most-commented">*/
/* 					<ul class="blog rating page_margin_top clearfix">*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post.html" title="Nuclear Fusion Closer to Becoming a Reality">*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/510x187/image_02.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="post_content">*/
/* 								<span class="number animated_element" data-value="70"></span>*/
/* 								<h5><a href="index.html@page=post.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<div class="post_content">*/
/* 								<span class="number animated_element" data-value="62"></span>*/
/* 								<h5><a href="index.html@page=post.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<div class="post_content">*/
/* 								<span class="number animated_element" data-value="30"></span>*/
/* 								<h5><a href="index.html@page=post.html" title="Seeking the Right Chemistry, Drug Makers Hunt for Mergers">Seeking the Right Chemistry, Drug Makers Hunt for Mergers</a></h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=sports.html" title="SPORTS">SPORTS</a></li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<div class="post_content">*/
/* 								<span class="number animated_element" data-value="25"></span>*/
/* 								<h5><a href="index.html@page=post.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a></h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=science.html" title="SCIENCE">SCIENCE</a></li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<div class="post_content">*/
/* 								<span class="number animated_element" data-value="4"></span>*/
/* 								<h5><a href="index.html@page=post.html" title="Syrian Civilians Trapped for Months Continue to be Evacuated">Syrian Civilians Trapped for Months Continue to be Evacuated</a></h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=science.html" title="SCIENCE">SCIENCE</a></li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 			<h4 class="box_header page_margin_top_section">Lifestyle</h4>*/
/* 			<ul class="blog small clearfix">*/
/* 				<li class="post">*/
/* 					<a href="index.html@page=post.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">*/
/* 						<img src='{{baseURL}}/assets/users/images/samples/100x100/image_09.jpg' alt='img'>*/
/* 					</a>*/
/* 					<div class="post_content">*/
/* 						<h5>*/
/* 							<a href="index.html@page=post.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>*/
/* 						</h5>*/
/* 						<ul class="post_details simple">*/
/* 							<li class="category"><a href="index.html@page=category&amp;cat=lifestyle.html" title="LIFESTYLE">LIFESTYLE</a></li>*/
/* 							<li class="date">*/
/* 								10:11 PM, Feb 02*/
/* 							</li>*/
/* 						</ul>*/
/* 					</div>*/
/* 				</li>*/
/* 				<li class="post">*/
/* 					<a href="index.html@page=post_quote_2.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">*/
/* 						<img src='{{baseURL}}/assets/users/images/samples/100x100/image_12.jpg' alt='img'>*/
/* 					</a>*/
/* 					<div class="post_content">*/
/* 						<h5>*/
/* 							<a href="index.html@page=post_quote_2.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>*/
/* 						</h5>*/
/* 						<ul class="post_details simple">*/
/* 							<li class="category"><a href="index.html@page=category&amp;cat=lifestyle.html" title="LIFESTYLE">LIFESTYLE</a></li>*/
/* 							<li class="date">*/
/* 								10:11 PM, Feb 02*/
/* 							</li>*/
/* 						</ul>*/
/* 					</div>*/
/* 				</li>*/
/* 				<li class="post">*/
/* 					<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 						<img src='{{baseURL}}/assets/users/images/samples/100x100/image_02.jpg' alt='img'>*/
/* 					</a>*/
/* 					<div class="post_content">*/
/* 						<h5>*/
/* 							<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>*/
/* 						</h5>*/
/* 						<ul class="post_details simple">*/
/* 							<li class="category"><a href="index.html@page=category&amp;cat=lifestyle.html" title="LIFESTYLE">LIFESTYLE</a></li>*/
/* 							<li class="date">*/
/* 								10:11 PM, Feb 02*/
/* 							</li>*/
/* 						</ul>*/
/* 					</div>*/
/* 				</li>*/
/* 				<li class="post">*/
/* 					<a href="index.html@page=post_gallery.html" title="Nuclear Fusion Closer to Becoming a Reality">*/
/* 						<span class="icon small gallery"></span>*/
/* 						<img src='{{baseURL}}/assets/users/images/samples/100x100/image_01.jpg' alt='img'>*/
/* 					</a>*/
/* 					<div class="post_content">*/
/* 						<h5>*/
/* 							<a href="index.html@page=post_gallery.html" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a>*/
/* 						</h5>*/
/* 						<ul class="post_details simple">*/
/* 							<li class="category"><a href="index.html@page=category&amp;cat=lifestyle.html" title="LIFESTYLE">LIFESTYLE</a></li>*/
/* 							<li class="date">*/
/* 								10:11 PM, Feb 02*/
/* 							</li>*/
/* 						</ul>*/
/* 					</div>*/
/* 				</li>*/
/* 			</ul>*/
/* 			<a class="more page_margin_top" href="index.html@page=home_4.html#">MORE FROM LIFESTYLE</a>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row page_margin_top">*/
/* 		<div class="column column_2_3">*/
/* 			<h4 class="box_header">Latest Posts</h4>*/
/* 			<div class="row">*/
/* 				<ul class="blog column column_1_2">*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post_small_image.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/330x242/image_08.jpg' alt='img'>*/
/* 						</a>*/
/* 						<h2 class="with_number">*/
/* 							<a href="index.html@page=post_small_image.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>*/
/* 							<a class="comments_number" href="index.html@page=post.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/* 						</h2>*/
/* 					</li>*/
/* 				</ul>*/
/* 				<ul class="blog column column_1_2">*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/330x242/image_09.jpg' alt='img'>*/
/* 						</a>*/
/* 						<h2 class="with_number">*/
/* 							<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>*/
/* 							<a class="comments_number" href="index.html@page=post.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/* 						</h2>*/
/* 					</li>*/
/* 				</ul>*/
/* 			</div>*/
/* 			<div class="row">*/
/* 				<ul class="blog medium">*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post.html" title="High Altitudes May Aid Weight Control">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/330x242/image_02.jpg' alt='img'>*/
/* 						</a>*/
/* 						<h5><a href="index.html@page=post.html" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>*/
/* 						<ul class="post_details simple">*/
/* 							<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 							<li class="date">*/
/* 								10:11 PM, Feb 02*/
/* 							</li>*/
/* 						</ul>*/
/* 					</li>*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post_gallery.html" title="Climate Change Debate While Britain Floods">*/
/* 							<span class="icon gallery"></span>*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/330x242/image_01.jpg' alt='img'>*/
/* 						</a>*/
/* 						<h5><a href="index.html@page=post_gallery.html" title="Climate Change Debate While Britain Floods">Climate Change Debate While Britain Floods</a></h5>*/
/* 						<ul class="post_details simple">*/
/* 							<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 							<li class="date">*/
/* 								10:11 PM, Feb 02*/
/* 							</li>*/
/* 						</ul>*/
/* 					</li>*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post_gallery.html" title="Climate Change Debate While Britain Floods">*/
/* 							<span class="icon gallery"></span>*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/330x242/image_03.jpg' alt='img'>*/
/* 						</a>*/
/* 						<h5><a href="index.html@page=post_gallery.html" title="Climate Change Debate While Britain Floods">New Painkiller Rekindles Addiction Concerns</a></h5>*/
/* 						<ul class="post_details simple">*/
/* 							<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 							<li class="date">*/
/* 								10:11 PM, Feb 02*/
/* 							</li>*/
/* 						</ul>*/
/* 					</li>*/
/* 				</ul>*/
/* 			</div>*/
/* 			<h4 class="box_header page_margin_top_section">Latest From Health</h4>*/
/* 			<div class="row">*/
/* 				<ul class="blog column column_1_2">*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post_gallery.html" title="High Altitudes May Aid Weight Control">*/
/* 							<span class="icon gallery"></span>*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/330x242/image_05.jpg' alt='img'>*/
/* 						</a>*/
/* 						<h2 class="with_number">*/
/* 							<a href="index.html@page=post_gallery.html" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a>*/
/* 							<a class="comments_number" href="index.html@page=post_gallery.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/* 						</h2>*/
/* 						<ul class="post_details">*/
/* 							<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 							<li class="date">*/
/* 								10:11 PM, Feb 02*/
/* 							</li>*/
/* 						</ul>*/
/* 						<p>Politicans have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as flood tourists at the side of disasters.</p>*/
/* 						<a class="read_more" href="index.html@page=post_gallery.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>*/
/* 					</li>*/
/* 				</ul>*/
/* 				<div class="column column_1_2">*/
/* 					<ul class="blog small clearfix">*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post_quote_2.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/100x100/image_02.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="post_content">*/
/* 								<h5>*/
/* 									<a href="index.html@page=post_quote_2.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>*/
/* 								</h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post_soundcloud.html" title="Seeking the Right Chemistry, Drug Makers Hunt for Mergers">*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/100x100/image_13.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="post_content">*/
/* 								<h5>*/
/* 									<a href="index.html@page=post_soundcloud.html" title="Seeking the Right Chemistry, Drug Makers Hunt for Mergers">Seeking the Right Chemistry, Drug Makers Hunt for Mergers</a>*/
/* 								</h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post_review_2.html" title="Seeking the Right Chemistry, Drug Makers Hunt for Mergers">*/
/* 								<span class="icon small review"></span>*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/100x100/image_01.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="post_content">*/
/* 								<h5>*/
/* 									<a href="index.html@page=post_review_2.html" title="Seeking the Right Chemistry, Drug Makers Hunt for Mergers">The Public Health Crisis Hiding in Our Food</a>*/
/* 								</h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post_gallery.html" title="New Painkiller Rekindles Addiction Concerns">*/
/* 								<span class="icon small gallery"></span>*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/100x100/image_03.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="post_content">*/
/* 								<h5>*/
/* 									<a href="index.html@page=post_gallery.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a>*/
/* 								</h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 					</ul>*/
/* 					<a class="more page_margin_top" href="index.html@page=home_3.html#">MORE FROM HEALTH</a>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="row page_margin_top_section">*/
/* 				<h4 class="box_header">More Articles</h4>*/
/* 				<ul class="blog medium">*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post_gallery.html" title="High Altitudes May Aid Weight Control">*/
/* 							<span class="icon gallery"></span>*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/330x242/image_10.jpg' alt='img'>*/
/* 						</a>*/
/* 						<h5><a href="index.html@page=post_gallery.html" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>*/
/* 						<ul class="post_details simple">*/
/* 							<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 							<li class="date">*/
/* 								10:11 PM, Feb 02*/
/* 							</li>*/
/* 						</ul>*/
/* 					</li>*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post_small_image.html" title="Climate Change Debate While Britain Floods">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/330x242/image_13.jpg' alt='img'>*/
/* 						</a>*/
/* 						<h5><a href="index.html@page=post_small_image.html" title="Climate Change Debate While Britain Floods">Climate Change Debate While Britain Floods</a></h5>*/
/* 						<ul class="post_details simple">*/
/* 							<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 							<li class="date">*/
/* 								10:11 PM, Feb 02*/
/* 							</li>*/
/* 						</ul>*/
/* 					</li>*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post_review.html" title="Climate Change Debate While Britain Floods">*/
/* 							<span class="icon"><span>8.7</span></span>*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/330x242/image_12.jpg' alt='img'>*/
/* 						</a>*/
/* 						<h5><a href="index.html@page=post_review.html" title="Climate Change Debate While Britain Floods">New Painkiller Rekindles Addiction Concerns</a></h5>*/
/* 						<ul class="post_details simple">*/
/* 							<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 							<li class="date">*/
/* 								10:11 PM, Feb 02*/
/* 							</li>*/
/* 						</ul>*/
/* 					</li>*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post_video.html" title="High Altitudes May Aid Weight Control">*/
/* 							<span class="icon video"></span>*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/330x242/image_03.jpg' alt='img'>*/
/* 						</a>*/
/* 						<h5><a href="index.html@page=post_video.html" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>*/
/* 						<ul class="post_details simple">*/
/* 							<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 							<li class="date">*/
/* 								10:11 PM, Feb 02*/
/* 							</li>*/
/* 						</ul>*/
/* 					</li>*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post.html" title="Climate Change Debate While Britain Floods">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/330x242/image_09.jpg' alt='img'>*/
/* 						</a>*/
/* 						<h5><a href="index.html@page=post.html" title="Climate Change Debate While Britain Floods">Climate Change Debate While Britain Floods</a></h5>*/
/* 						<ul class="post_details simple">*/
/* 							<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 							<li class="date">*/
/* 								10:11 PM, Feb 02*/
/* 							</li>*/
/* 						</ul>*/
/* 					</li>*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post.html" title="Climate Change Debate While Britain Floods">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/330x242/image_01.jpg' alt='img'>*/
/* 						</a>*/
/* 						<h5><a href="index.html@page=post.html" title="Climate Change Debate While Britain Floods">New Painkiller Rekindles Addiction Concerns</a></h5>*/
/* 						<ul class="post_details simple">*/
/* 							<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 							<li class="date">*/
/* 								10:11 PM, Feb 02*/
/* 							</li>*/
/* 						</ul>*/
/* 					</li>*/
/* 				</ul>*/
/* 			</div>*/
/* 			<div class="row page_margin_top_section">*/
/* 				<div class="column column_1_2">*/
/* 					<h4 class="box_header">Sports</h4>*/
/* 					<ul class="blog">*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post.html" title="Struggling Nuremberg Sack Coach Verbeek">*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/330x242/image_06.jpg' alt='img'>*/
/* 							</a>*/
/* 							<h2 class="with_number">*/
/* 								<a href="index.html@page=post.html" title="Struggling Nuremberg Sack Coach Verbeek">Struggling Nuremberg Sack Coach Verbeek</a>*/
/* 								<a class="comments_number" href="index.html@page=post.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/* 							</h2>*/
/* 							<ul class="post_details">*/
/* 								<li class="category"><a href="index.html@page=category&amp;cat=sports.html" title="SPORTS">SPORTS</a></li>*/
/* 								<li class="date">*/
/* 									10:11 PM, Feb 02*/
/* 								</li>*/
/* 							</ul>*/
/* 							<p>Politicans have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as flood tourists at the side of disasters.</p>*/
/* 							<a class="read_more" href="index.html@page=post.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>*/
/* 						</li>*/
/* 					</ul>*/
/* 					<ul class="blog small clearfix">*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post_small_image.html" title="Bayern Says Ties With Rivals Dortmund Have Frozen">*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/100x100/image_14.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="post_content">*/
/* 								<h5>*/
/* 									<a href="index.html@page=post_small_image.html" title="Bayern Says Ties With Rivals Dortmund Have Frozen">Bayern Says Ties With Rivals Dortmund Have Frozen</a>*/
/* 								</h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=sports.html" title="SPORTS">SPORTS</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/100x100/image_12.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="post_content">*/
/* 								<h5>*/
/* 									<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>*/
/* 								</h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=sports.html" title="SPORTS">SPORTS</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 					</ul>*/
/* 					<a class="more page_margin_top" href="index.html@page=home_3.html#">READ MORE</a>*/
/* 				</div>*/
/* 				<div class="column column_1_2">*/
/* 					<h4 class="box_header">Lifestyle</h4>*/
/* 					<ul class="blog">*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post_quote.html" title="High Altitudes May Aid Weight Control">*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/330x242/image_07.jpg' alt='img'>*/
/* 							</a>*/
/* 							<h2 class="with_number">*/
/* 								<a href="index.html@page=post_quote.html" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a>*/
/* 								<a class="comments_number" href="index.html@page=post_quote.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/* 							</h2>*/
/* 							<ul class="post_details">*/
/* 								<li class="category"><a href="index.html@page=category&amp;cat=lifestyle.html" title="LIFESTYLE">LIFESTYLE</a></li>*/
/* 								<li class="date">*/
/* 									10:11 PM, Feb 02*/
/* 								</li>*/
/* 							</ul>*/
/* 							<p>Politicans have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as flood tourists at the side of disasters.</p>*/
/* 							<a class="read_more" href="index.html@page=post_quote.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>*/
/* 						</li>*/
/* 					</ul>*/
/* 					<ul class="blog small clearfix">*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post.html" title="Bayern Says Ties With Rivals Dortmund Have Frozen">*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/100x100/image_01.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="post_content">*/
/* 								<h5>*/
/* 									<a href="index.html@page=post.html" title="Bayern Says Ties With Rivals Dortmund Have Frozen">Bayern Says Ties With Rivals Dortmund Have Frozen</a>*/
/* 								</h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=lifestyle.html" title="LIFESTYLE">LIFESTYLE</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post_video_2.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 								<span class="icon small video"></span>*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/100x100/image_03.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="post_content">*/
/* 								<h5>*/
/* 									<a href="index.html@page=post_video_2.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>*/
/* 								</h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=lifestyle.html" title="LIFESTYLE">LIFESTYLE</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 					</ul>*/
/* 					<a class="more page_margin_top" href="index.html@page=home_3.html#">READ MORE</a>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="column column_1_3">*/
/* 			<div class="tabs no_scroll clearfix">*/
/* 				<ul class="tabs_navigation clearfix">*/
/* 					<li>*/
/* 						<a href="index.html@page=home_3.html#sidebar-most-read" title="Most Read">*/
/* 							Most Read*/
/* 						</a>*/
/* 						<span></span>*/
/* 					</li>*/
/* 					<li>*/
/* 						<a href="index.html@page=home_3.html#sidebar-most-commented" title="Commented">*/
/* 							Commented*/
/* 						</a>*/
/* 						<span></span>*/
/* 					</li>*/
/* 				</ul>*/
/* 				<div id="sidebar-most-read">*/
/* 					<ul class="blog rating page_margin_top clearfix">*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post.html" title="Nuclear Fusion Closer to Becoming a Reality">*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/510x187/image_12.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="post_content">*/
/* 								<span class="number animated_element" data-value="6 257"></span>*/
/* 								<h5><a href="index.html@page=post.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<div class="post_content">*/
/* 								<span class="number animated_element" data-value="5 062"></span>*/
/* 								<h5><a href="index.html@page=post.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<div class="post_content">*/
/* 								<span class="number animated_element" data-value="4 778"></span>*/
/* 								<h5><a href="index.html@page=post.html" title="Seeking the Right Chemistry, Drug Makers Hunt for Mergers">Seeking the Right Chemistry, Drug Makers Hunt for Mergers</a></h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=sports.html" title="SPORTS">SPORTS</a></li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<div class="post_content">*/
/* 								<span class="number animated_element" data-value="754"></span>*/
/* 								<h5><a href="index.html@page=post.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a></h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=science.html" title="SCIENCE">SCIENCE</a></li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<div class="post_content">*/
/* 								<span class="number animated_element" data-value="52"></span>*/
/* 								<h5><a href="index.html@page=post.html" title="Syrian Civilians Trapped for Months Continue to be Evacuated">Syrian Civilians Trapped for Months Continue to be Evacuated</a></h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=science.html" title="SCIENCE">SCIENCE</a></li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 					</ul>*/
/* 					<a class="more page_margin_top" href="index.html@page=home_3.html#">SHOW MORE</a>*/
/* 				</div>*/
/* 				<div id="sidebar-most-commented">*/
/* 					<ul class="blog rating page_margin_top clearfix">*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post.html" title="Nuclear Fusion Closer to Becoming a Reality">*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/510x187/image_02.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="post_content">*/
/* 								<span class="number animated_element" data-value="70"></span>*/
/* 								<h5><a href="index.html@page=post.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<div class="post_content">*/
/* 								<span class="number animated_element" data-value="62"></span>*/
/* 								<h5><a href="index.html@page=post_small_image.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<div class="post_content">*/
/* 								<span class="number animated_element" data-value="30"></span>*/
/* 								<h5><a href="index.html@page=post_quote_2.html" title="Seeking the Right Chemistry, Drug Makers Hunt for Mergers">Seeking the Right Chemistry, Drug Makers Hunt for Mergers</a></h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=sports.html" title="SPORTS">SPORTS</a></li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<div class="post_content">*/
/* 								<span class="number animated_element" data-value="25"></span>*/
/* 								<h5><a href="index.html@page=post.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a></h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=science.html" title="SCIENCE">SCIENCE</a></li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<div class="post_content">*/
/* 								<span class="number animated_element" data-value="4"></span>*/
/* 								<h5><a href="index.html@page=post.html" title="Syrian Civilians Trapped for Months Continue to be Evacuated">Syrian Civilians Trapped for Months Continue to be Evacuated</a></h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=science.html" title="SCIENCE">SCIENCE</a></li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 					</ul>*/
/* 					<a class="more page_margin_top" href="index.html@page=home_3.html#">SHOW MORE</a>*/
/* 				</div>*/
/* 			</div>*/
/* 			<h4 class="box_header page_margin_top_section">Latest Posts</h4>*/
/* 			<div class="vertical_carousel_container clearfix">*/
/* 				<ul class="blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post_gallery.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">*/
/* 							<span class="icon small gallery"></span>*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/100x100/image_06.jpg' alt='img'>*/
/* 						</a>*/
/* 						<div class="post_content">*/
/* 							<h5>*/
/* 								<a href="index.html@page=post_gallery.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>*/
/* 							</h5>*/
/* 							<ul class="post_details simple">*/
/* 								<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 								<li class="date">*/
/* 									10:11 PM, Feb 02*/
/* 								</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</li>*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/100x100/image_12.jpg' alt='img'>*/
/* 						</a>*/
/* 						<div class="post_content">*/
/* 							<h5>*/
/* 								<a href="index.html@page=post.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>*/
/* 							</h5>*/
/* 							<ul class="post_details simple">*/
/* 								<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 								<li class="date">*/
/* 									10:11 PM, Feb 02*/
/* 								</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</li>*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post_soundcloud.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/100x100/image_02.jpg' alt='img'>*/
/* 						</a>*/
/* 						<div class="post_content">*/
/* 							<h5>*/
/* 								<a href="index.html@page=post_soundcloud.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>*/
/* 							</h5>*/
/* 							<ul class="post_details simple">*/
/* 								<li class="category"><a href="index.html@page=category&amp;cat=sports.html" title="SPORTS">SPORTS</a></li>*/
/* 								<li class="date">*/
/* 									10:11 PM, Feb 02*/
/* 								</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</li>*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post.html" title="Nuclear Fusion Closer to Becoming a Reality">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/100x100/image_13.jpg' alt='img'>*/
/* 						</a>*/
/* 						<div class="post_content">*/
/* 							<h5>*/
/* 								<a href="index.html@page=post.html" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a>*/
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
/* 			</div>*/
/* 			<h4 class="box_header page_margin_top_section">Top Authors</h4>*/
/* 			<ul class="authors rating clearfix">*/
/* 				<li class="author">*/
/* 					<a class="thumb" href="index.html@page=author.html" title="Debora Hilton">*/
/* 						<img src='{{baseURL}}/assets/users/images/samples/Team_100x100/image_01.jpg' alt='img'>*/
/* 						<span class="number animated_element" data-value="34"></span>*/
/* 					</a>*/
/* 					<div class="details">*/
/* 						<h5><a href="index.html@page=author.html" title="Debora Hilton">Debora Hilton</a></h5>*/
/* 						<h6>EDITOR</h6>*/
/* 					</div>*/
/* 				</li>*/
/* 				<li class="author">*/
/* 					<a class="thumb" href="index.html@page=author.html" title="Anna Shubina">*/
/* 						<img src='{{baseURL}}/assets/users/images/samples/Team_100x100/image_02.jpg' alt='img'>*/
/* 						<span class="number animated_element" data-value="25"></span>*/
/* 					</a>*/
/* 					<div class="details">*/
/* 						<h5><a href="index.html@page=author.html" title="Anna Shubina">Anna Shubina</a></h5>*/
/* 						<h6>EDITOR</h6>*/
/* 					</div>*/
/* 				</li>*/
/* 				<li class="author">*/
/* 					<a class="thumb" href="index.html@page=author.html" title="Liam Holden">*/
/* 						<img src='{{baseURL}}/assets/users/images/samples/Team_100x100/image_03.jpg' alt='img'>*/
/* 						<span class="number animated_element" data-value="9"></span>*/
/* 					</a>*/
/* 					<div class="details">*/
/* 						<h5><a href="index.html@page=author.html" title="Liam Holden">Liam Holden</a></h5>*/
/* 						<h6>PUBLISHER</h6>*/
/* 					</div>*/
/* 				</li>*/
/* 				<li class="author">*/
/* 					<a class="thumb" href="index.html@page=author.html" title="Heather Dale">*/
/* 						<img src='{{baseURL}}/assets/users/images/samples/Team_100x100/image_04.jpg' alt='img'>*/
/* 						<span class="number animated_element" data-value="2"></span>*/
/* 					</a>*/
/* 					<div class="details">*/
/* 						<h5><a href="index.html@page=author.html" title="Heather Dale">Heather Dale</a></h5>*/
/* 						<h6>ILLUSTRATOR</h6>*/
/* 					</div>*/
/* 				</li>*/
/* 			</ul>*/
/* 			<h4 class="box_header page_margin_top_section">Science</h4>*/
/* 			<ul class="blog small clearfix">*/
/* 				<li class="post">*/
/* 					<a href="index.html@page=post_small_image.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">*/
/* 						<img src='{{baseURL}}/assets/users/images/samples/100x100/image_09.jpg' alt='img'>*/
/* 					</a>*/
/* 					<div class="post_content">*/
/* 						<h5>*/
/* 							<a href="index.html@page=post_small_image.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>*/
/* 						</h5>*/
/* 						<ul class="post_details simple">*/
/* 							<li class="category"><a href="index.html@page=category&amp;cat=science.html" title="SCIENCE">SCIENCE</a></li>*/
/* 							<li class="date">*/
/* 								10:11 PM, Feb 02*/
/* 							</li>*/
/* 						</ul>*/
/* 					</div>*/
/* 				</li>*/
/* 				<li class="post">*/
/* 					<a href="index.html@page=post_quote.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">*/
/* 						<img src='{{baseURL}}/assets/users/images/samples/100x100/image_12.jpg' alt='img'>*/
/* 					</a>*/
/* 					<div class="post_content">*/
/* 						<h5>*/
/* 							<a href="index.html@page=post_quote.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>*/
/* 						</h5>*/
/* 						<ul class="post_details simple">*/
/* 							<li class="category"><a href="index.html@page=category&amp;cat=science.html" title="SCIENCE">SCIENCE</a></li>*/
/* 							<li class="date">*/
/* 								10:11 PM, Feb 02*/
/* 							</li>*/
/* 						</ul>*/
/* 					</div>*/
/* 				</li>*/
/* 				<li class="post">*/
/* 					<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 						<img src='{{baseURL}}/assets/users/images/samples/100x100/image_02.jpg' alt='img'>*/
/* 					</a>*/
/* 					<div class="post_content">*/
/* 						<h5>*/
/* 							<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>*/
/* 						</h5>*/
/* 						<ul class="post_details simple">*/
/* 							<li class="category"><a href="index.html@page=category&amp;cat=science.html" title="SCIENCE">SCIENCE</a></li>*/
/* 							<li class="date">*/
/* 								10:11 PM, Feb 02*/
/* 							</li>*/
/* 						</ul>*/
/* 					</div>*/
/* 				</li>*/
/* 				<li class="post">*/
/* 					<a href="index.html@page=post_gallery.html" title="Nuclear Fusion Closer to Becoming a Reality">*/
/* 						<span class="icon small gallery"></span>*/
/* 						<img src='{{baseURL}}/assets/users/images/samples/100x100/image_01.jpg' alt='img'>*/
/* 					</a>*/
/* 					<div class="post_content">*/
/* 						<h5>*/
/* 							<a href="index.html@page=post_gallery.html" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a>*/
/* 						</h5>*/
/* 						<ul class="post_details simple">*/
/* 							<li class="category"><a href="index.html@page=category&amp;cat=science.html" title="SCIENCE">SCIENCE</a></li>*/
/* 							<li class="date">*/
/* 								10:11 PM, Feb 02*/
/* 							</li>*/
/* 						</ul>*/
/* 					</div>*/
/* 				</li>*/
/* 			</ul>*/
/* 			<a class="more page_margin_top" href="index.html@page=home_3.html#">MORE FROM SCIENCE</a>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
