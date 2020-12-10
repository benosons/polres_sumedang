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
\t\t<div class=\"row\">
\t\t\t<div class=\"column column_2_3\">
\t\t\t\t<h4 class=\"box_header\">Latest Posts</h4>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<ul class=\"blog column column_1_2\">
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">
\t\t\t\t\t\t\t\t<img src='https://humas.polri.go.id/wp-content/uploads/2020/06/IMG-20200601-WA0188.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<h2 class=\"with_number\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">Nuclear Fusion Closer to Becoming a Reality</a>
\t\t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<ul class=\"post_details\">
\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
\t\t\t\t\t\t\t<a class=\"read_more\" href=\"index.html@page=post.html\" title=\"Read more\"><span class=\"arrow\"></span><span>READ MORE</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post_quote.html\" title=\"High Altitudes May Aid Weight Control\">
\t\t\t\t\t\t\t\t<img src='https://humas.polri.go.id/wp-content/uploads/2020/12/10.jpeg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<h2 class=\"with_number\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_quote.html\" title=\"High Altitudes May Aid Weight Control\">High Altitudes May Aid Weight Control</a>
\t\t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<ul class=\"post_details\">
\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
\t\t\t\t\t\t\t<a class=\"read_more\" href=\"index.html@page=post_quote.html\" title=\"Read more\"><span class=\"arrow\"></span><span>READ MORE</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"blog column column_1_2\">
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t\t<img src='https://humas.polri.go.id/wp-content/uploads/2020/08/19-3.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<h2 class=\"with_number\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a>
\t\t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<ul class=\"post_details\">
\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=science.html\" title=\"SCIENCE\">SCIENCE</a></li>
\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
\t\t\t\t\t\t\t<a class=\"read_more\" href=\"index.html@page=post.html\" title=\"Read more\"><span class=\"arrow\"></span><span>READ MORE</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post_video.html\" title=\"Struggling Nuremberg Sack Coach Verbeek\">
\t\t\t\t\t\t\t\t<span class=\"icon video\"></span>
\t\t\t\t\t\t\t\t<img src='https://humas.polri.go.id/wp-content/uploads/2020/07/SMDNG-768x576.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<h2 class=\"with_number\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_video.html\" title=\"Struggling Nuremberg Sack Coach Verbeek\">Struggling Nuremberg Sack Coach Verbeek</a>
\t\t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post_video.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<ul class=\"post_details\">
\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=sports.html\" title=\"SPORTS\">SPORTS</a></li>
\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
\t\t\t\t\t\t\t<a class=\"read_more\" href=\"index.html@page=post_video.html\" title=\"Read more\"><span class=\"arrow\"></span><span>READ MORE</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"row page_margin_top_section\">
\t\t\t\t\t<h4 class=\"box_header\">Posts Carousel</h4>
\t\t\t\t\t<div class=\"horizontal_carousel_container page_margin_top\">
\t\t\t\t\t\t<ul class=\"blog horizontal_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750\">
\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"New Painkiller Rekindles Addiction Concerns\">
\t\t\t\t\t\t\t\t\t<img src='https://humas.polri.go.id/wp-content/uploads/2020/06/IMG-20200611-WA0249-1024x682.jpg' alt='img'>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post.html\" title=\"New Painkiller Rekindles Addiction Concerns\">New Painkiller Rekindles Addiction Concerns</a></h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_soundcloud.html\" title=\"High Altitudes May Aid Weight Control\">
\t\t\t\t\t\t\t\t\t<img src='https://humas.polri.go.id/wp-content/uploads/2020/06/IMG-20200603-WA0191-1024x498.jpg' alt='img'>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post_soundcloud.html\" title=\"High Altitudes May Aid Weight Control\">High Altitudes May Aid Weight Control</a></h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t\t\t<span class=\"icon gallery\"><!--<span class=\"info\">999</span>--></span>
\t\t\t\t\t\t\t\t\t<img src='https://humas.polri.go.id/wp-content/uploads/2020/04/SMD-10-640x480.jpg' alt='img'>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post_gallery.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a></h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"post first\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_small_image.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t\t\t<img src='https://humas.polri.go.id/wp-content/uploads/2020/04/IMG-20200419-WA0428-1024x672.jpg' alt='img'>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post_small_image.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a></h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row page_margin_top_section\">
\t\t\t\t\t<h4 class=\"box_header\">Latest From Health</h4>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<ul class=\"blog column column_1_2\">
\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"High Altitudes May Aid Weight Control\">
\t\t\t\t\t\t\t\t\t<span class=\"icon gallery\"></span>
\t\t\t\t\t\t\t\t\t<img src='https://humas.polri.go.id/wp-content/uploads/2020/06/IMG-20200603-WA0191-1024x498.jpg' alt='img'>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<h2 class=\"with_number\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"High Altitudes May Aid Weight Control\">High Altitudes May Aid Weight Control</a>
\t\t\t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post_gallery.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<ul class=\"post_details\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<p>Politicans have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as flood tourists at the side of disasters.</p>
\t\t\t\t\t\t\t\t<a class=\"read_more\" href=\"index.html@page=post_gallery.html\" title=\"Read more\"><span class=\"arrow\"></span><span>READ MORE</span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"column column_1_2\">
\t\t\t\t\t\t\t<ul class=\"blog small clearfix\">
\t\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">
\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 164
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_02.jpg' alt='img'>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Seeking the Right Chemistry, Drug Makers Hunt for Mergers\">
\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 180
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_13.jpg' alt='img'>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Seeking the Right Chemistry, Drug Makers Hunt for Mergers\">Seeking the Right Chemistry, Drug Makers Hunt for Mergers</a>
\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_review.html\" title=\"Seeking the Right Chemistry, Drug Makers Hunt for Mergers\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon small review\"></span>
\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 197
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_01.jpg' alt='img'>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_review.html\" title=\"Seeking the Right Chemistry, Drug Makers Hunt for Mergers\">The Public Health Crisis Hiding in Our Food</a>
\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"New Painkiller Rekindles Addiction Concerns\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon small gallery\"></span>
\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 214
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_03.jpg' alt='img'>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"New Painkiller Rekindles Addiction Concerns\">New Painkiller Rekindles Addiction Concerns</a>
\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<a class=\"more page_margin_top\" href=\"index.html@page=home.html#\">MORE FROM HEALTH</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row page_margin_top_section\">
\t\t\t\t\t<h4 class=\"box_header\">Top Posts</h4>
\t\t\t\t\t<div class=\"tabs no_scroll margin_top_10 clearfix\">
\t\t\t\t\t\t<ul class=\"tabs_navigation small clearfix\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=home.html#most-recent\" title=\"Most Recent\">
\t\t\t\t\t\t\t\t\tMost Recent
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=home.html#most-read\" title=\"Most Read\">
\t\t\t\t\t\t\t\t\tMost Read
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=home.html#most-commented\" title=\"Most Commented\">
\t\t\t\t\t\t\t\t\tMost Commented
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div id=\"most-recent\">
\t\t\t\t\t\t\t<div class=\"horizontal_carousel_container page_margin_top\">
\t\t\t\t\t\t\t\t<ul class=\"blog horizontal_carousel page_margin_top autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750\">
\t\t\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"High Altitudes May Aid Weight Control\">
\t\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 258
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_11.jpg' alt='img'>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<h5><span class=\"number\">1.</span><a href=\"index.html@page=post.html\" title=\"High Altitudes May Aid Weight Control\">High Altitudes May Aid Weight Control</a></h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Climate Change Debate While Britain Floods\">
\t\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 270
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_14.jpg' alt='img'>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<h5><span class=\"number\">2.</span><a href=\"index.html@page=post.html\" title=\"Climate Change Debate While Britain Floods\">Climate Change Debate While Britain Floods</a></h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_small_image.html\" title=\"Escape From Planet Earth: The Movie\">
\t\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 282
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_02.jpg' alt='img'>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<h5><span class=\"number\">3.</span><a href=\"index.html@page=post_small_image.html\" title=\"Escape From Planet Earth: The Movie\">Escape From Planet Earth: The Movie</a></h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=lifestyle.html\" title=\"LIFESTYLE\">LIFESTYLE</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"post first\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 294
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_09.jpg' alt='img'>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<h5><span class=\"number\">4.</span><a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a></h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=sports.html\" title=\"SPORTS\">SPORTS</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"most-read\">
\t\t\t\t\t\t\t<div class=\"horizontal_carousel_container page_margin_top\">
\t\t\t\t\t\t\t\t<ul class=\"blog horizontal_carousel page_margin_top autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750\">
\t\t\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"The Public Health Crisis Hiding in Our Food\">
\t\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 312
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_10.jpg' alt='img'>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<h5><span class=\"number\">1.</span><a href=\"index.html@page=post.html\" title=\"The Public Health Crisis Hiding in Our Food\">The Public Health Crisis Hiding in Our Food</a></h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Drug Makers Hunt for Mergers\">
\t\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 324
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_07.jpg' alt='img'>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<h5><span class=\"number\">2.</span><a href=\"index.html@page=post.html\" title=\"Drug Makers Hunt for Mergers\">Drug Makers Hunt for Mergers</a></h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Escape From Planet Earth: The Movie\">
\t\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 336
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_13.jpg' alt='img'>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<h5><span class=\"number\">3.</span><a href=\"index.html@page=post.html\" title=\"Escape From Planet Earth: The Movie\">Escape From Planet Earth: The Movie</a></h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=lifestyle.html\" title=\"LIFESTYLE\">LIFESTYLE</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"post first\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_soundcloud.html\" title=\"High Altitudes May Aid Weight Control\">
\t\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 348
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_05.jpg' alt='img'>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<h5><span class=\"number\">4.</span><a href=\"index.html@page=post_soundcloud.html\" title=\"High Altitudes May Aid Weight Control\">High Altitudes May Aid Weight Control</a></h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=sports.html\" title=\"SPORTS\">SPORTS</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"most-commented\">
\t\t\t\t\t\t\t<div class=\"horizontal_carousel_container page_margin_top\">
\t\t\t\t\t\t\t\t<ul class=\"blog horizontal_carousel page_margin_top autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750\">
\t\t\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Escape From Planet Earth: The Movie\">
\t\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 366
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_13.jpg' alt='img'>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<h5><span class=\"number\">1.</span><a href=\"index.html@page=post.html\" title=\"Escape From Planet Earth: The Movie\">Escape From Planet Earth: The Movie</a></h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Struggling Nuremberg Sack Coach Verbeek\">
\t\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 378
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_06.jpg' alt='img'>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<h5><span class=\"number\">2.</span><a href=\"index.html@page=post.html\" title=\"Struggling Nuremberg Sack Coach Verbeek\">Struggling Nuremberg Sack Coach Verbeek</a></h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_small_image.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 390
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_03.jpg' alt='img'>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<h5><span class=\"number\">3.</span><a href=\"index.html@page=post_small_image.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a></h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=lifestyle.html\" title=\"LIFESTYLE\">LIFESTYLE</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"post first\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"High Altitudes May Aid Weight Control\">
\t\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 402
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_05.jpg' alt='img'>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<h5><span class=\"number\">4.</span><a href=\"index.html@page=post.html\" title=\"High Altitudes May Aid Weight Control\">High Altitudes May Aid Weight Control</a></h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=sports.html\" title=\"SPORTS\">SPORTS</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row page_margin_top_section\">
\t\t\t\t\t<div class=\"column column_1_2\">
\t\t\t\t\t\t<h4 class=\"box_header\">Sports</h4>
\t\t\t\t\t\t<ul class=\"blog\">
\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Struggling Nuremberg Sack Coach Verbeek\">
\t\t\t\t\t\t\t\t\t<img src='";
        // line 423
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_06.jpg' alt='img'>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<h2 class=\"with_number\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Struggling Nuremberg Sack Coach Verbeek\">Struggling Nuremberg Sack Coach Verbeek</a>
\t\t\t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<ul class=\"post_details\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=sports.html\" title=\"SPORTS\">SPORTS</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<p>Politicans have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as flood tourists at the side of disasters.</p>
\t\t\t\t\t\t\t\t<a class=\"read_more\" href=\"index.html@page=post.html\" title=\"Read more\"><span class=\"arrow\"></span><span>READ MORE</span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul class=\"blog small clearfix\">
\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Bayern Says Ties With Rivals Dortmund Have Frozen\">
\t\t\t\t\t\t\t\t\t<img src='";
        // line 442
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_14.jpg' alt='img'>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Bayern Says Ties With Rivals Dortmund Have Frozen\">Bayern Says Ties With Rivals Dortmund Have Frozen</a>
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=sports.html\" title=\"SPORTS\">SPORTS</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t\t\t<img src='";
        // line 458
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_12.jpg' alt='img'>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a>
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=sports.html\" title=\"SPORTS\">SPORTS</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<a class=\"more page_margin_top\" href=\"index.html@page=home.html#\">READ MORE</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"column column_1_2\">
\t\t\t\t\t\t<h4 class=\"box_header\">Lifestyle</h4>
\t\t\t\t\t\t<ul class=\"blog\">
\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"High Altitudes May Aid Weight Control\">
\t\t\t\t\t\t\t\t\t<img src='";
        // line 480
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_07.jpg' alt='img'>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<h2 class=\"with_number\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"High Altitudes May Aid Weight Control\">High Altitudes May Aid Weight Control</a>
\t\t\t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<ul class=\"post_details\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=lifestyle.html\" title=\"LIFESTYLE\">LIFESTYLE</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<p>Politicans have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as flood tourists at the side of disasters.</p>
\t\t\t\t\t\t\t\t<a class=\"read_more\" href=\"index.html@page=post.html\" title=\"Read more\"><span class=\"arrow\"></span><span>READ MORE</span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul class=\"blog small clearfix\">
\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Bayern Says Ties With Rivals Dortmund Have Frozen\">
\t\t\t\t\t\t\t\t\t<img src='";
        // line 499
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_01.jpg' alt='img'>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Bayern Says Ties With Rivals Dortmund Have Frozen\">Bayern Says Ties With Rivals Dortmund Have Frozen</a>
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=lifestyle.html\" title=\"LIFESTYLE\">LIFESTYLE</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_video.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t\t\t<span class=\"icon small video\"></span>
\t\t\t\t\t\t\t\t\t<img src='";
        // line 516
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_03.jpg' alt='img'>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_video.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a>
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=lifestyle.html\" title=\"LIFESTYLE\">LIFESTYLE</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<a class=\"more page_margin_top\" href=\"index.html@page=home.html#\">READ MORE</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"column column_1_3\">

\t\t\t\t<h4 class=\"box_header\">Informasi</h4>
\t\t\t\t<ul class=\"blog small_margin clearfix\">
\t\t\t\t\t<div id=\"kopi-covid\"> </div>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"blog small_margin clearfix\">
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"The Public Health Crisis Hiding in Our Food\">
\t\t\t\t\t\t\t<span class=\"icon gallery\"></span>
\t\t\t\t\t\t\t<img src='";
        // line 545
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/510x187/image_12.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"The Public Health Crisis Hiding in Our Food\">The Public Health Crisis Hiding in Our Food</a>
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
\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"The Public Health Crisis Hiding in Our Food\">
\t\t\t\t\t\t\t<img src='";
        // line 561
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/510x187/image_01.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"The Public Health Crisis Hiding in Our Food\">Climate Change Debate While Britain Floods</a>
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
\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"New Painkiller Rekindles Addiction Concerns\">
\t\t\t\t\t\t\t<img src='";
        // line 577
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/510x187/image_14.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"New Painkiller Rekindles Addiction Concerns\">New Painkiller Rekindles Addiction Concerns</a>
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<h4 class=\"box_header page_margin_top_section\">Latest Posts</h4>
\t\t\t\t<div class=\"vertical_carousel_container clearfix\">
\t\t\t\t\t<ul class=\"blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750\">
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">
\t\t\t\t\t\t\t\t<span class=\"icon small gallery\"></span>
\t\t\t\t\t\t\t\t<img src='";
        // line 598
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_06.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
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
\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Syrian Civilians Trapped For Months Continue To Be Evacuated\">
\t\t\t\t\t\t\t\t<img src='";
        // line 614
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_12.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Syrian Civilians Trapped For Months Continue To Be Evacuated\">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t\t<img src='";
        // line 630
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_02.jpg' alt='img'>
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
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">
\t\t\t\t\t\t\t\t<img src='";
        // line 646
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_13.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">Nuclear Fusion Closer to Becoming a Reality</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=science.html\" title=\"SCIENCE\">SCIENCE</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"tabs no_scroll page_margin_top_section clearfix\">
\t\t\t\t\t<ul class=\"tabs_navigation clearfix\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.html@page=home.html#sidebar-most-read\" title=\"Most Read\">
\t\t\t\t\t\t\t\tMost Read
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.html@page=home.html#sidebar-most-commented\" title=\"Commented\">
\t\t\t\t\t\t\t\tCommented
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"sidebar-most-read\">
\t\t\t\t\t\t<ul class=\"blog rating page_margin_top clearfix\">
\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_quote.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">
\t\t\t\t\t\t\t\t\t<img src='";
        // line 681
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/510x187/image_12.jpg' alt='img'>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"6 257\"></span>
\t\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post_quote.html\" title=\"New Painkiller Rekindles Addiction Concerns\">New Painkiller Rekindles Addiction Concerns</a></h5>
\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"5 062\"></span>
\t\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post.html\" title=\"New Painkiller Rekindles Addiction Concerns\">New Painkiller Rekindles Addiction Concerns</a></h5>
\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"4 778\"></span>
\t\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post.html\" title=\"Seeking the Right Chemistry, Drug Makers Hunt for Mergers\">Seeking the Right Chemistry, Drug Makers Hunt for Mergers</a></h5>
\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=sports.html\" title=\"SPORTS\">SPORTS</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"754\"></span>
\t\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post_quote_2.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">Study Linking Illnes and Salt Leaves Researchers Doubtful</a></h5>
\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=science.html\" title=\"SCIENCE\">SCIENCE</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"52\"></span>
\t\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post_small_image.html\" title=\"Syrian Civilians Trapped for Months Continue to be Evacuated\">Syrian Civilians Trapped for Months Continue to be Evacuated</a></h5>
\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=science.html\" title=\"SCIENCE\">SCIENCE</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<a class=\"more page_margin_top\" href=\"index.html@page=home.html#\">SHOW MORE</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"sidebar-most-commented\">
\t\t\t\t\t\t<ul class=\"blog rating page_margin_top clearfix\">
\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">
\t\t\t\t\t\t\t\t\t<img src='";
        // line 734
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/510x187/image_02.jpg' alt='img'>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"70\"></span>
\t\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post.html\" title=\"New Painkiller Rekindles Addiction Concerns\">New Painkiller Rekindles Addiction Concerns</a></h5>
\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"62\"></span>
\t\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post.html\" title=\"New Painkiller Rekindles Addiction Concerns\">New Painkiller Rekindles Addiction Concerns</a></h5>
\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"30\"></span>
\t\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post.html\" title=\"Seeking the Right Chemistry, Drug Makers Hunt for Mergers\">Seeking the Right Chemistry, Drug Makers Hunt for Mergers</a></h5>
\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=sports.html\" title=\"SPORTS\">SPORTS</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"25\"></span>
\t\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">Study Linking Illnes and Salt Leaves Researchers Doubtful</a></h5>
\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=science.html\" title=\"SCIENCE\">SCIENCE</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"4\"></span>
\t\t\t\t\t\t\t\t\t<h5><a href=\"index.html@page=post_soundcloud.html\" title=\"Syrian Civilians Trapped for Months Continue to be Evacuated\">Syrian Civilians Trapped for Months Continue to be Evacuated</a></h5>
\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=science.html\" title=\"SCIENCE\">SCIENCE</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<a class=\"more page_margin_top\" href=\"index.html@page=home.html#\">SHOW MORE</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<h4 class=\"box_header page_margin_top_section\">Top Authors</h4>
\t\t\t\t<ul class=\"authors rating clearfix\">
\t\t\t\t\t<li class=\"author\">
\t\t\t\t\t\t<a class=\"thumb\" href=\"index.html@page=author.html\" title=\"Debora Hilton\">
\t\t\t\t\t\t\t<img src='";
        // line 788
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
        // line 798
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
        // line 808
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
        // line 818
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/Team_100x100/image_04.jpg' alt='img'>
\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"2\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t\t<h5><a href=\"index.html@page=author.html\" title=\"Heather Dale\">Heather Dale</a></h5>
\t\t\t\t\t\t\t<h6>ILLUSTRATOR</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<h4 class=\"box_header page_margin_top_section\">Science</h4>
\t\t\t\t<ul class=\"blog small clearfix\">
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">
\t\t\t\t\t\t\t<img src='";
        // line 831
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_09.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"post_content\">
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
\t\t\t\t\t\t\t<img src='";
        // line 847
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_12.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"post_content\">
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
\t\t\t\t\t\t\t<img src='";
        // line 863
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_02.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"post_content\">
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
\t\t\t\t\t\t\t<span class=\"icon small gallery\"></span>
\t\t\t\t\t\t\t<img src='";
        // line 880
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_01.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"post_content\">
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
\t\t\t\t<a class=\"more page_margin_top\" href=\"index.html@page=home.html#\">MORE FROM SCIENCE</a>
\t\t\t</div>
\t\t</div>
\t</div>";
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
        return array (  1024 => 880,  1004 => 863,  985 => 847,  966 => 831,  950 => 818,  937 => 808,  924 => 798,  911 => 788,  854 => 734,  798 => 681,  760 => 646,  741 => 630,  722 => 614,  703 => 598,  679 => 577,  660 => 561,  641 => 545,  609 => 516,  589 => 499,  567 => 480,  542 => 458,  523 => 442,  501 => 423,  477 => 402,  462 => 390,  447 => 378,  432 => 366,  411 => 348,  396 => 336,  381 => 324,  366 => 312,  345 => 294,  330 => 282,  315 => 270,  300 => 258,  253 => 214,  233 => 197,  213 => 180,  194 => 164,  30 => 2,  11 => 1,);
    }
}
/* {% extends "users/layout.html" %} {% block content %}*/
/* <div class="page_layout page_margin_top clearfix">*/
/* 		<div class="row">*/
/* 			<div class="column column_2_3">*/
/* 				<h4 class="box_header">Latest Posts</h4>*/
/* 				<div class="row">*/
/* 					<ul class="blog column column_1_2">*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post.html" title="Nuclear Fusion Closer to Becoming a Reality">*/
/* 								<img src='https://humas.polri.go.id/wp-content/uploads/2020/06/IMG-20200601-WA0188.jpg' alt='img'>*/
/* 							</a>*/
/* 							<h2 class="with_number">*/
/* 								<a href="index.html@page=post.html" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a>*/
/* 								<a class="comments_number" href="index.html@page=post.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/* 							</h2>*/
/* 							<ul class="post_details">*/
/* 								<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 								<li class="date">*/
/* 									10:11 PM, Feb 02*/
/* 								</li>*/
/* 							</ul>*/
/* 							<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>*/
/* 							<a class="read_more" href="index.html@page=post.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post_quote.html" title="High Altitudes May Aid Weight Control">*/
/* 								<img src='https://humas.polri.go.id/wp-content/uploads/2020/12/10.jpeg' alt='img'>*/
/* 							</a>*/
/* 							<h2 class="with_number">*/
/* 								<a href="index.html@page=post_quote.html" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a>*/
/* 								<a class="comments_number" href="index.html@page=post.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/* 							</h2>*/
/* 							<ul class="post_details">*/
/* 								<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 								<li class="date">*/
/* 									10:11 PM, Feb 02*/
/* 								</li>*/
/* 							</ul>*/
/* 							<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>*/
/* 							<a class="read_more" href="index.html@page=post_quote.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>*/
/* 						</li>*/
/* 					</ul>*/
/* 					<ul class="blog column column_1_2">*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 								<img src='https://humas.polri.go.id/wp-content/uploads/2020/08/19-3.jpg' alt='img'>*/
/* 							</a>*/
/* 							<h2 class="with_number">*/
/* 								<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>*/
/* 								<a class="comments_number" href="index.html@page=post.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/* 							</h2>*/
/* 							<ul class="post_details">*/
/* 								<li class="category"><a href="index.html@page=category&amp;cat=science.html" title="SCIENCE">SCIENCE</a></li>*/
/* 								<li class="date">*/
/* 									10:11 PM, Feb 02*/
/* 								</li>*/
/* 							</ul>*/
/* 							<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>*/
/* 							<a class="read_more" href="index.html@page=post.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post_video.html" title="Struggling Nuremberg Sack Coach Verbeek">*/
/* 								<span class="icon video"></span>*/
/* 								<img src='https://humas.polri.go.id/wp-content/uploads/2020/07/SMDNG-768x576.jpg' alt='img'>*/
/* 							</a>*/
/* 							<h2 class="with_number">*/
/* 								<a href="index.html@page=post_video.html" title="Struggling Nuremberg Sack Coach Verbeek">Struggling Nuremberg Sack Coach Verbeek</a>*/
/* 								<a class="comments_number" href="index.html@page=post_video.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/* 							</h2>*/
/* 							<ul class="post_details">*/
/* 								<li class="category"><a href="index.html@page=category&amp;cat=sports.html" title="SPORTS">SPORTS</a></li>*/
/* 								<li class="date">*/
/* 									10:11 PM, Feb 02*/
/* 								</li>*/
/* 							</ul>*/
/* 							<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>*/
/* 							<a class="read_more" href="index.html@page=post_video.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</div>*/
/* 				<div class="row page_margin_top_section">*/
/* 					<h4 class="box_header">Posts Carousel</h4>*/
/* 					<div class="horizontal_carousel_container page_margin_top">*/
/* 						<ul class="blog horizontal_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">*/
/* 							<li class="post">*/
/* 								<a href="index.html@page=post.html" title="New Painkiller Rekindles Addiction Concerns">*/
/* 									<img src='https://humas.polri.go.id/wp-content/uploads/2020/06/IMG-20200611-WA0249-1024x682.jpg' alt='img'>*/
/* 								</a>*/
/* 								<h5><a href="index.html@page=post.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 							</li>*/
/* 							<li class="post">*/
/* 								<a href="index.html@page=post_soundcloud.html" title="High Altitudes May Aid Weight Control">*/
/* 									<img src='https://humas.polri.go.id/wp-content/uploads/2020/06/IMG-20200603-WA0191-1024x498.jpg' alt='img'>*/
/* 								</a>*/
/* 								<h5><a href="index.html@page=post_soundcloud.html" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 							</li>*/
/* 							<li class="post">*/
/* 								<a href="index.html@page=post_gallery.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 									<span class="icon gallery"><!--<span class="info">999</span>--></span>*/
/* 									<img src='https://humas.polri.go.id/wp-content/uploads/2020/04/SMD-10-640x480.jpg' alt='img'>*/
/* 								</a>*/
/* 								<h5><a href="index.html@page=post_gallery.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a></h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 							</li>*/
/* 							<li class="post first">*/
/* 								<a href="index.html@page=post_small_image.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 									<img src='https://humas.polri.go.id/wp-content/uploads/2020/04/IMG-20200419-WA0428-1024x672.jpg' alt='img'>*/
/* 								</a>*/
/* 								<h5><a href="index.html@page=post_small_image.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a></h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 							</li>*/
/* 						</ul>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="row page_margin_top_section">*/
/* 					<h4 class="box_header">Latest From Health</h4>*/
/* 					<div class="row">*/
/* 						<ul class="blog column column_1_2">*/
/* 							<li class="post">*/
/* 								<a href="index.html@page=post_gallery.html" title="High Altitudes May Aid Weight Control">*/
/* 									<span class="icon gallery"></span>*/
/* 									<img src='https://humas.polri.go.id/wp-content/uploads/2020/06/IMG-20200603-WA0191-1024x498.jpg' alt='img'>*/
/* 								</a>*/
/* 								<h2 class="with_number">*/
/* 									<a href="index.html@page=post_gallery.html" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a>*/
/* 									<a class="comments_number" href="index.html@page=post_gallery.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/* 								</h2>*/
/* 								<ul class="post_details">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 								<p>Politicans have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as flood tourists at the side of disasters.</p>*/
/* 								<a class="read_more" href="index.html@page=post_gallery.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>*/
/* 							</li>*/
/* 						</ul>*/
/* 						<div class="column column_1_2">*/
/* 							<ul class="blog small clearfix">*/
/* 								<li class="post">*/
/* 									<a href="index.html@page=post.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">*/
/* 										<img src='{{baseURL}}/assets/users/images/samples/100x100/image_02.jpg' alt='img'>*/
/* 									</a>*/
/* 									<div class="post_content">*/
/* 										<h5>*/
/* 											<a href="index.html@page=post.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>*/
/* 										</h5>*/
/* 										<ul class="post_details simple">*/
/* 											<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 											<li class="date">*/
/* 												10:11 PM, Feb 02*/
/* 											</li>*/
/* 										</ul>*/
/* 									</div>*/
/* 								</li>*/
/* 								<li class="post">*/
/* 									<a href="index.html@page=post.html" title="Seeking the Right Chemistry, Drug Makers Hunt for Mergers">*/
/* 										<img src='{{baseURL}}/assets/users/images/samples/100x100/image_13.jpg' alt='img'>*/
/* 									</a>*/
/* 									<div class="post_content">*/
/* 										<h5>*/
/* 											<a href="index.html@page=post.html" title="Seeking the Right Chemistry, Drug Makers Hunt for Mergers">Seeking the Right Chemistry, Drug Makers Hunt for Mergers</a>*/
/* 										</h5>*/
/* 										<ul class="post_details simple">*/
/* 											<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 											<li class="date">*/
/* 												10:11 PM, Feb 02*/
/* 											</li>*/
/* 										</ul>*/
/* 									</div>*/
/* 								</li>*/
/* 								<li class="post">*/
/* 									<a href="index.html@page=post_review.html" title="Seeking the Right Chemistry, Drug Makers Hunt for Mergers">*/
/* 										<span class="icon small review"></span>*/
/* 										<img src='{{baseURL}}/assets/users/images/samples/100x100/image_01.jpg' alt='img'>*/
/* 									</a>*/
/* 									<div class="post_content">*/
/* 										<h5>*/
/* 											<a href="index.html@page=post_review.html" title="Seeking the Right Chemistry, Drug Makers Hunt for Mergers">The Public Health Crisis Hiding in Our Food</a>*/
/* 										</h5>*/
/* 										<ul class="post_details simple">*/
/* 											<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 											<li class="date">*/
/* 												10:11 PM, Feb 02*/
/* 											</li>*/
/* 										</ul>*/
/* 									</div>*/
/* 								</li>*/
/* 								<li class="post">*/
/* 									<a href="index.html@page=post_gallery.html" title="New Painkiller Rekindles Addiction Concerns">*/
/* 										<span class="icon small gallery"></span>*/
/* 										<img src='{{baseURL}}/assets/users/images/samples/100x100/image_03.jpg' alt='img'>*/
/* 									</a>*/
/* 									<div class="post_content">*/
/* 										<h5>*/
/* 											<a href="index.html@page=post_gallery.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a>*/
/* 										</h5>*/
/* 										<ul class="post_details simple">*/
/* 											<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 											<li class="date">*/
/* 												10:11 PM, Feb 02*/
/* 											</li>*/
/* 										</ul>*/
/* 									</div>*/
/* 								</li>*/
/* 							</ul>*/
/* 							<a class="more page_margin_top" href="index.html@page=home.html#">MORE FROM HEALTH</a>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="row page_margin_top_section">*/
/* 					<h4 class="box_header">Top Posts</h4>*/
/* 					<div class="tabs no_scroll margin_top_10 clearfix">*/
/* 						<ul class="tabs_navigation small clearfix">*/
/* 							<li>*/
/* 								<a href="index.html@page=home.html#most-recent" title="Most Recent">*/
/* 									Most Recent*/
/* 								</a>*/
/* 							</li>*/
/* 							<li>*/
/* 								<a href="index.html@page=home.html#most-read" title="Most Read">*/
/* 									Most Read*/
/* 								</a>*/
/* 							</li>*/
/* 							<li>*/
/* 								<a href="index.html@page=home.html#most-commented" title="Most Commented">*/
/* 									Most Commented*/
/* 								</a>*/
/* 							</li>*/
/* 						</ul>*/
/* 						<div id="most-recent">*/
/* 							<div class="horizontal_carousel_container page_margin_top">*/
/* 								<ul class="blog horizontal_carousel page_margin_top autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750">*/
/* 									<li class="post">*/
/* 										<a href="index.html@page=post.html" title="High Altitudes May Aid Weight Control">*/
/* 											<img src='{{baseURL}}/assets/users/images/samples/330x242/image_11.jpg' alt='img'>*/
/* 										</a>*/
/* 										<h5><span class="number">1.</span><a href="index.html@page=post.html" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>*/
/* 										<ul class="post_details simple">*/
/* 											<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 											<li class="date">*/
/* 												10:11 PM, Feb 02*/
/* 											</li>*/
/* 										</ul>*/
/* 									</li>*/
/* 									<li class="post">*/
/* 										<a href="index.html@page=post.html" title="Climate Change Debate While Britain Floods">*/
/* 											<img src='{{baseURL}}/assets/users/images/samples/330x242/image_14.jpg' alt='img'>*/
/* 										</a>*/
/* 										<h5><span class="number">2.</span><a href="index.html@page=post.html" title="Climate Change Debate While Britain Floods">Climate Change Debate While Britain Floods</a></h5>*/
/* 										<ul class="post_details simple">*/
/* 											<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 											<li class="date">*/
/* 												10:11 PM, Feb 02*/
/* 											</li>*/
/* 										</ul>*/
/* 									</li>*/
/* 									<li class="post">*/
/* 										<a href="index.html@page=post_small_image.html" title="Escape From Planet Earth: The Movie">*/
/* 											<img src='{{baseURL}}/assets/users/images/samples/330x242/image_02.jpg' alt='img'>*/
/* 										</a>*/
/* 										<h5><span class="number">3.</span><a href="index.html@page=post_small_image.html" title="Escape From Planet Earth: The Movie">Escape From Planet Earth: The Movie</a></h5>*/
/* 										<ul class="post_details simple">*/
/* 											<li class="category"><a href="index.html@page=category&amp;cat=lifestyle.html" title="LIFESTYLE">LIFESTYLE</a></li>*/
/* 											<li class="date">*/
/* 												10:11 PM, Feb 02*/
/* 											</li>*/
/* 										</ul>*/
/* 									</li>*/
/* 									<li class="post first">*/
/* 										<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 											<img src='{{baseURL}}/assets/users/images/samples/330x242/image_09.jpg' alt='img'>*/
/* 										</a>*/
/* 										<h5><span class="number">4.</span><a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a></h5>*/
/* 										<ul class="post_details simple">*/
/* 											<li class="category"><a href="index.html@page=category&amp;cat=sports.html" title="SPORTS">SPORTS</a></li>*/
/* 											<li class="date">*/
/* 												10:11 PM, Feb 02*/
/* 											</li>*/
/* 										</ul>*/
/* 									</li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="most-read">*/
/* 							<div class="horizontal_carousel_container page_margin_top">*/
/* 								<ul class="blog horizontal_carousel page_margin_top autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750">*/
/* 									<li class="post">*/
/* 										<a href="index.html@page=post.html" title="The Public Health Crisis Hiding in Our Food">*/
/* 											<img src='{{baseURL}}/assets/users/images/samples/330x242/image_10.jpg' alt='img'>*/
/* 										</a>*/
/* 										<h5><span class="number">1.</span><a href="index.html@page=post.html" title="The Public Health Crisis Hiding in Our Food">The Public Health Crisis Hiding in Our Food</a></h5>*/
/* 										<ul class="post_details simple">*/
/* 											<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 											<li class="date">*/
/* 												10:11 PM, Feb 02*/
/* 											</li>*/
/* 										</ul>*/
/* 									</li>*/
/* 									<li class="post">*/
/* 										<a href="index.html@page=post.html" title="Drug Makers Hunt for Mergers">*/
/* 											<img src='{{baseURL}}/assets/users/images/samples/330x242/image_07.jpg' alt='img'>*/
/* 										</a>*/
/* 										<h5><span class="number">2.</span><a href="index.html@page=post.html" title="Drug Makers Hunt for Mergers">Drug Makers Hunt for Mergers</a></h5>*/
/* 										<ul class="post_details simple">*/
/* 											<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 											<li class="date">*/
/* 												10:11 PM, Feb 02*/
/* 											</li>*/
/* 										</ul>*/
/* 									</li>*/
/* 									<li class="post">*/
/* 										<a href="index.html@page=post.html" title="Escape From Planet Earth: The Movie">*/
/* 											<img src='{{baseURL}}/assets/users/images/samples/330x242/image_13.jpg' alt='img'>*/
/* 										</a>*/
/* 										<h5><span class="number">3.</span><a href="index.html@page=post.html" title="Escape From Planet Earth: The Movie">Escape From Planet Earth: The Movie</a></h5>*/
/* 										<ul class="post_details simple">*/
/* 											<li class="category"><a href="index.html@page=category&amp;cat=lifestyle.html" title="LIFESTYLE">LIFESTYLE</a></li>*/
/* 											<li class="date">*/
/* 												10:11 PM, Feb 02*/
/* 											</li>*/
/* 										</ul>*/
/* 									</li>*/
/* 									<li class="post first">*/
/* 										<a href="index.html@page=post_soundcloud.html" title="High Altitudes May Aid Weight Control">*/
/* 											<img src='{{baseURL}}/assets/users/images/samples/330x242/image_05.jpg' alt='img'>*/
/* 										</a>*/
/* 										<h5><span class="number">4.</span><a href="index.html@page=post_soundcloud.html" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>*/
/* 										<ul class="post_details simple">*/
/* 											<li class="category"><a href="index.html@page=category&amp;cat=sports.html" title="SPORTS">SPORTS</a></li>*/
/* 											<li class="date">*/
/* 												10:11 PM, Feb 02*/
/* 											</li>*/
/* 										</ul>*/
/* 									</li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="most-commented">*/
/* 							<div class="horizontal_carousel_container page_margin_top">*/
/* 								<ul class="blog horizontal_carousel page_margin_top autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750">*/
/* 									<li class="post">*/
/* 										<a href="index.html@page=post.html" title="Escape From Planet Earth: The Movie">*/
/* 											<img src='{{baseURL}}/assets/users/images/samples/330x242/image_13.jpg' alt='img'>*/
/* 										</a>*/
/* 										<h5><span class="number">1.</span><a href="index.html@page=post.html" title="Escape From Planet Earth: The Movie">Escape From Planet Earth: The Movie</a></h5>*/
/* 										<ul class="post_details simple">*/
/* 											<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 											<li class="date">*/
/* 												10:11 PM, Feb 02*/
/* 											</li>*/
/* 										</ul>*/
/* 									</li>*/
/* 									<li class="post">*/
/* 										<a href="index.html@page=post.html" title="Struggling Nuremberg Sack Coach Verbeek">*/
/* 											<img src='{{baseURL}}/assets/users/images/samples/330x242/image_06.jpg' alt='img'>*/
/* 										</a>*/
/* 										<h5><span class="number">2.</span><a href="index.html@page=post.html" title="Struggling Nuremberg Sack Coach Verbeek">Struggling Nuremberg Sack Coach Verbeek</a></h5>*/
/* 										<ul class="post_details simple">*/
/* 											<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 											<li class="date">*/
/* 												10:11 PM, Feb 02*/
/* 											</li>*/
/* 										</ul>*/
/* 									</li>*/
/* 									<li class="post">*/
/* 										<a href="index.html@page=post_small_image.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 											<img src='{{baseURL}}/assets/users/images/samples/330x242/image_03.jpg' alt='img'>*/
/* 										</a>*/
/* 										<h5><span class="number">3.</span><a href="index.html@page=post_small_image.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a></h5>*/
/* 										<ul class="post_details simple">*/
/* 											<li class="category"><a href="index.html@page=category&amp;cat=lifestyle.html" title="LIFESTYLE">LIFESTYLE</a></li>*/
/* 											<li class="date">*/
/* 												10:11 PM, Feb 02*/
/* 											</li>*/
/* 										</ul>*/
/* 									</li>*/
/* 									<li class="post first">*/
/* 										<a href="index.html@page=post.html" title="High Altitudes May Aid Weight Control">*/
/* 											<img src='{{baseURL}}/assets/users/images/samples/330x242/image_05.jpg' alt='img'>*/
/* 										</a>*/
/* 										<h5><span class="number">4.</span><a href="index.html@page=post.html" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>*/
/* 										<ul class="post_details simple">*/
/* 											<li class="category"><a href="index.html@page=category&amp;cat=sports.html" title="SPORTS">SPORTS</a></li>*/
/* 											<li class="date">*/
/* 												10:11 PM, Feb 02*/
/* 											</li>*/
/* 										</ul>*/
/* 									</li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="row page_margin_top_section">*/
/* 					<div class="column column_1_2">*/
/* 						<h4 class="box_header">Sports</h4>*/
/* 						<ul class="blog">*/
/* 							<li class="post">*/
/* 								<a href="index.html@page=post.html" title="Struggling Nuremberg Sack Coach Verbeek">*/
/* 									<img src='{{baseURL}}/assets/users/images/samples/330x242/image_06.jpg' alt='img'>*/
/* 								</a>*/
/* 								<h2 class="with_number">*/
/* 									<a href="index.html@page=post.html" title="Struggling Nuremberg Sack Coach Verbeek">Struggling Nuremberg Sack Coach Verbeek</a>*/
/* 									<a class="comments_number" href="index.html@page=post.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/* 								</h2>*/
/* 								<ul class="post_details">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=sports.html" title="SPORTS">SPORTS</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 								<p>Politicans have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as flood tourists at the side of disasters.</p>*/
/* 								<a class="read_more" href="index.html@page=post.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>*/
/* 							</li>*/
/* 						</ul>*/
/* 						<ul class="blog small clearfix">*/
/* 							<li class="post">*/
/* 								<a href="index.html@page=post.html" title="Bayern Says Ties With Rivals Dortmund Have Frozen">*/
/* 									<img src='{{baseURL}}/assets/users/images/samples/100x100/image_14.jpg' alt='img'>*/
/* 								</a>*/
/* 								<div class="post_content">*/
/* 									<h5>*/
/* 										<a href="index.html@page=post.html" title="Bayern Says Ties With Rivals Dortmund Have Frozen">Bayern Says Ties With Rivals Dortmund Have Frozen</a>*/
/* 									</h5>*/
/* 									<ul class="post_details simple">*/
/* 										<li class="category"><a href="index.html@page=category&amp;cat=sports.html" title="SPORTS">SPORTS</a></li>*/
/* 										<li class="date">*/
/* 											10:11 PM, Feb 02*/
/* 										</li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							</li>*/
/* 							<li class="post">*/
/* 								<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 									<img src='{{baseURL}}/assets/users/images/samples/100x100/image_12.jpg' alt='img'>*/
/* 								</a>*/
/* 								<div class="post_content">*/
/* 									<h5>*/
/* 										<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>*/
/* 									</h5>*/
/* 									<ul class="post_details simple">*/
/* 										<li class="category"><a href="index.html@page=category&amp;cat=sports.html" title="SPORTS">SPORTS</a></li>*/
/* 										<li class="date">*/
/* 											10:11 PM, Feb 02*/
/* 										</li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							</li>*/
/* 						</ul>*/
/* 						<a class="more page_margin_top" href="index.html@page=home.html#">READ MORE</a>*/
/* 					</div>*/
/* 					<div class="column column_1_2">*/
/* 						<h4 class="box_header">Lifestyle</h4>*/
/* 						<ul class="blog">*/
/* 							<li class="post">*/
/* 								<a href="index.html@page=post.html" title="High Altitudes May Aid Weight Control">*/
/* 									<img src='{{baseURL}}/assets/users/images/samples/330x242/image_07.jpg' alt='img'>*/
/* 								</a>*/
/* 								<h2 class="with_number">*/
/* 									<a href="index.html@page=post.html" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a>*/
/* 									<a class="comments_number" href="index.html@page=post.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/* 								</h2>*/
/* 								<ul class="post_details">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=lifestyle.html" title="LIFESTYLE">LIFESTYLE</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 								<p>Politicans have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as flood tourists at the side of disasters.</p>*/
/* 								<a class="read_more" href="index.html@page=post.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>*/
/* 							</li>*/
/* 						</ul>*/
/* 						<ul class="blog small clearfix">*/
/* 							<li class="post">*/
/* 								<a href="index.html@page=post.html" title="Bayern Says Ties With Rivals Dortmund Have Frozen">*/
/* 									<img src='{{baseURL}}/assets/users/images/samples/100x100/image_01.jpg' alt='img'>*/
/* 								</a>*/
/* 								<div class="post_content">*/
/* 									<h5>*/
/* 										<a href="index.html@page=post.html" title="Bayern Says Ties With Rivals Dortmund Have Frozen">Bayern Says Ties With Rivals Dortmund Have Frozen</a>*/
/* 									</h5>*/
/* 									<ul class="post_details simple">*/
/* 										<li class="category"><a href="index.html@page=category&amp;cat=lifestyle.html" title="LIFESTYLE">LIFESTYLE</a></li>*/
/* 										<li class="date">*/
/* 											10:11 PM, Feb 02*/
/* 										</li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							</li>*/
/* 							<li class="post">*/
/* 								<a href="index.html@page=post_video.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 									<span class="icon small video"></span>*/
/* 									<img src='{{baseURL}}/assets/users/images/samples/100x100/image_03.jpg' alt='img'>*/
/* 								</a>*/
/* 								<div class="post_content">*/
/* 									<h5>*/
/* 										<a href="index.html@page=post_video.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>*/
/* 									</h5>*/
/* 									<ul class="post_details simple">*/
/* 										<li class="category"><a href="index.html@page=category&amp;cat=lifestyle.html" title="LIFESTYLE">LIFESTYLE</a></li>*/
/* 										<li class="date">*/
/* 											10:11 PM, Feb 02*/
/* 										</li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							</li>*/
/* 						</ul>*/
/* 						<a class="more page_margin_top" href="index.html@page=home.html#">READ MORE</a>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="column column_1_3">*/
/* */
/* 				<h4 class="box_header">Informasi</h4>*/
/* 				<ul class="blog small_margin clearfix">*/
/* 					<div id="kopi-covid"> </div>*/
/* 				</ul>*/
/* 				<ul class="blog small_margin clearfix">*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post_gallery.html" title="The Public Health Crisis Hiding in Our Food">*/
/* 							<span class="icon gallery"></span>*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/510x187/image_12.jpg' alt='img'>*/
/* 						</a>*/
/* 						<div class="post_content">*/
/* 							<h5>*/
/* 								<a href="index.html@page=post_gallery.html" title="The Public Health Crisis Hiding in Our Food">The Public Health Crisis Hiding in Our Food</a>*/
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
/* 						<a href="index.html@page=post.html" title="The Public Health Crisis Hiding in Our Food">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/510x187/image_01.jpg' alt='img'>*/
/* 						</a>*/
/* 						<div class="post_content">*/
/* 							<h5>*/
/* 								<a href="index.html@page=post.html" title="The Public Health Crisis Hiding in Our Food">Climate Change Debate While Britain Floods</a>*/
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
/* 						<a href="index.html@page=post.html" title="New Painkiller Rekindles Addiction Concerns">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/510x187/image_14.jpg' alt='img'>*/
/* 						</a>*/
/* 						<div class="post_content">*/
/* 							<h5>*/
/* 								<a href="index.html@page=post.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a>*/
/* 							</h5>*/
/* 							<ul class="post_details simple">*/
/* 								<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 								<li class="date">*/
/* 									10:11 PM, Feb 02*/
/* 								</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</li>*/
/* 				</ul>*/
/* 				<h4 class="box_header page_margin_top_section">Latest Posts</h4>*/
/* 				<div class="vertical_carousel_container clearfix">*/
/* 					<ul class="blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post_gallery.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">*/
/* 								<span class="icon small gallery"></span>*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/100x100/image_06.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="post_content">*/
/* 								<h5>*/
/* 									<a href="index.html@page=post_gallery.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>*/
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
/* 							<a href="index.html@page=post.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/100x100/image_12.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="post_content">*/
/* 								<h5>*/
/* 									<a href="index.html@page=post.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>*/
/* 								</h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/100x100/image_02.jpg' alt='img'>*/
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
/* 						<li class="post">*/
/* 							<a href="index.html@page=post.html" title="Nuclear Fusion Closer to Becoming a Reality">*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/100x100/image_13.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="post_content">*/
/* 								<h5>*/
/* 									<a href="index.html@page=post.html" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a>*/
/* 								</h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=science.html" title="SCIENCE">SCIENCE</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</div>*/
/* 				<div class="tabs no_scroll page_margin_top_section clearfix">*/
/* 					<ul class="tabs_navigation clearfix">*/
/* 						<li>*/
/* 							<a href="index.html@page=home.html#sidebar-most-read" title="Most Read">*/
/* 								Most Read*/
/* 							</a>*/
/* 							<span></span>*/
/* 						</li>*/
/* 						<li>*/
/* 							<a href="index.html@page=home.html#sidebar-most-commented" title="Commented">*/
/* 								Commented*/
/* 							</a>*/
/* 							<span></span>*/
/* 						</li>*/
/* 					</ul>*/
/* 					<div id="sidebar-most-read">*/
/* 						<ul class="blog rating page_margin_top clearfix">*/
/* 							<li class="post">*/
/* 								<a href="index.html@page=post_quote.html" title="Nuclear Fusion Closer to Becoming a Reality">*/
/* 									<img src='{{baseURL}}/assets/users/images/samples/510x187/image_12.jpg' alt='img'>*/
/* 								</a>*/
/* 								<div class="post_content">*/
/* 									<span class="number animated_element" data-value="6 257"></span>*/
/* 									<h5><a href="index.html@page=post_quote.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>*/
/* 									<ul class="post_details simple">*/
/* 										<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							</li>*/
/* 							<li class="post">*/
/* 								<div class="post_content">*/
/* 									<span class="number animated_element" data-value="5 062"></span>*/
/* 									<h5><a href="index.html@page=post.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>*/
/* 									<ul class="post_details simple">*/
/* 										<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							</li>*/
/* 							<li class="post">*/
/* 								<div class="post_content">*/
/* 									<span class="number animated_element" data-value="4 778"></span>*/
/* 									<h5><a href="index.html@page=post.html" title="Seeking the Right Chemistry, Drug Makers Hunt for Mergers">Seeking the Right Chemistry, Drug Makers Hunt for Mergers</a></h5>*/
/* 									<ul class="post_details simple">*/
/* 										<li class="category"><a href="index.html@page=category&amp;cat=sports.html" title="SPORTS">SPORTS</a></li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							</li>*/
/* 							<li class="post">*/
/* 								<div class="post_content">*/
/* 									<span class="number animated_element" data-value="754"></span>*/
/* 									<h5><a href="index.html@page=post_quote_2.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a></h5>*/
/* 									<ul class="post_details simple">*/
/* 										<li class="category"><a href="index.html@page=category&amp;cat=science.html" title="SCIENCE">SCIENCE</a></li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							</li>*/
/* 							<li class="post">*/
/* 								<div class="post_content">*/
/* 									<span class="number animated_element" data-value="52"></span>*/
/* 									<h5><a href="index.html@page=post_small_image.html" title="Syrian Civilians Trapped for Months Continue to be Evacuated">Syrian Civilians Trapped for Months Continue to be Evacuated</a></h5>*/
/* 									<ul class="post_details simple">*/
/* 										<li class="category"><a href="index.html@page=category&amp;cat=science.html" title="SCIENCE">SCIENCE</a></li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							</li>*/
/* 						</ul>*/
/* 						<a class="more page_margin_top" href="index.html@page=home.html#">SHOW MORE</a>*/
/* 					</div>*/
/* 					<div id="sidebar-most-commented">*/
/* 						<ul class="blog rating page_margin_top clearfix">*/
/* 							<li class="post">*/
/* 								<a href="index.html@page=post.html" title="Nuclear Fusion Closer to Becoming a Reality">*/
/* 									<img src='{{baseURL}}/assets/users/images/samples/510x187/image_02.jpg' alt='img'>*/
/* 								</a>*/
/* 								<div class="post_content">*/
/* 									<span class="number animated_element" data-value="70"></span>*/
/* 									<h5><a href="index.html@page=post.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>*/
/* 									<ul class="post_details simple">*/
/* 										<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							</li>*/
/* 							<li class="post">*/
/* 								<div class="post_content">*/
/* 									<span class="number animated_element" data-value="62"></span>*/
/* 									<h5><a href="index.html@page=post.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>*/
/* 									<ul class="post_details simple">*/
/* 										<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							</li>*/
/* 							<li class="post">*/
/* 								<div class="post_content">*/
/* 									<span class="number animated_element" data-value="30"></span>*/
/* 									<h5><a href="index.html@page=post.html" title="Seeking the Right Chemistry, Drug Makers Hunt for Mergers">Seeking the Right Chemistry, Drug Makers Hunt for Mergers</a></h5>*/
/* 									<ul class="post_details simple">*/
/* 										<li class="category"><a href="index.html@page=category&amp;cat=sports.html" title="SPORTS">SPORTS</a></li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							</li>*/
/* 							<li class="post">*/
/* 								<div class="post_content">*/
/* 									<span class="number animated_element" data-value="25"></span>*/
/* 									<h5><a href="index.html@page=post.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a></h5>*/
/* 									<ul class="post_details simple">*/
/* 										<li class="category"><a href="index.html@page=category&amp;cat=science.html" title="SCIENCE">SCIENCE</a></li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							</li>*/
/* 							<li class="post">*/
/* 								<div class="post_content">*/
/* 									<span class="number animated_element" data-value="4"></span>*/
/* 									<h5><a href="index.html@page=post_soundcloud.html" title="Syrian Civilians Trapped for Months Continue to be Evacuated">Syrian Civilians Trapped for Months Continue to be Evacuated</a></h5>*/
/* 									<ul class="post_details simple">*/
/* 										<li class="category"><a href="index.html@page=category&amp;cat=science.html" title="SCIENCE">SCIENCE</a></li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							</li>*/
/* 						</ul>*/
/* 						<a class="more page_margin_top" href="index.html@page=home.html#">SHOW MORE</a>*/
/* 					</div>*/
/* 				</div>*/
/* 				<h4 class="box_header page_margin_top_section">Top Authors</h4>*/
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
/* 				</ul>*/
/* 				<h4 class="box_header page_margin_top_section">Science</h4>*/
/* 				<ul class="blog small clearfix">*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/100x100/image_09.jpg' alt='img'>*/
/* 						</a>*/
/* 						<div class="post_content">*/
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
/* 							<img src='{{baseURL}}/assets/users/images/samples/100x100/image_12.jpg' alt='img'>*/
/* 						</a>*/
/* 						<div class="post_content">*/
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
/* 							<img src='{{baseURL}}/assets/users/images/samples/100x100/image_02.jpg' alt='img'>*/
/* 						</a>*/
/* 						<div class="post_content">*/
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
/* 							<span class="icon small gallery"></span>*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/100x100/image_01.jpg' alt='img'>*/
/* 						</a>*/
/* 						<div class="post_content">*/
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
/* 				<a class="more page_margin_top" href="index.html@page=home.html#">MORE FROM SCIENCE</a>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */
