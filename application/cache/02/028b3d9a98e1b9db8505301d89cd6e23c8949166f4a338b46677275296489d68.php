<?php

/* users/pengaduan/index.html */
class __TwigTemplate_cbc5f55c8ac1bff0082197492b03ba962b8a982951be12a23e5382e1cf827da6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("users/layout.html", "users/pengaduan/index.html", 1);
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
\t\t\t\t<h4 class=\"box_header\">Isi Formulir Pengaduan</h4>
\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-form-label\">Nama</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-form-label\">Pekerjaan</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-form-label\">Alamat</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-form-label\">Email</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-form-label\">Nomor Telepon</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-form-label\">Isi Pengaduan</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<textarea rows=\"5\" cols=\"5\" class=\"form-control\" placeholder=\"\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Kirim Pengaduan\" class=\"more active\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t

\t\t\t\t<div class=\"row page_margin_top_section\">
\t\t\t\t\t<div class=\"column column_1_2\">
\t\t\t\t\t\t<h4 class=\"box_header\">Sports</h4>
\t\t\t\t\t\t<ul class=\"blog\">
\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Struggling Nuremberg Sack Coach Verbeek\">
\t\t\t\t\t\t\t\t\t<img src='";
        // line 74
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
        // line 93
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
        // line 109
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
        // line 131
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
        // line 150
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
        // line 167
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
\t\t\t\t<h4 class=\"box_header\">Recommended</h4>
\t\t\t\t<ul class=\"blog small_margin clearfix\">
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"The Public Health Crisis Hiding in Our Food\">
\t\t\t\t\t\t\t<span class=\"icon gallery\"></span>
\t\t\t\t\t\t\t<img src='";
        // line 192
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
        // line 208
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
        // line 224
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
        // line 245
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
        // line 261
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
        // line 277
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
        // line 293
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
        // line 328
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
        // line 381
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
        // line 435
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
        // line 445
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
        // line 455
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
        // line 465
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
        // line 478
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
        // line 494
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
        // line 510
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
        // line 527
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
        return "users/pengaduan/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  623 => 527,  603 => 510,  584 => 494,  565 => 478,  549 => 465,  536 => 455,  523 => 445,  510 => 435,  453 => 381,  397 => 328,  359 => 293,  340 => 277,  321 => 261,  302 => 245,  278 => 224,  259 => 208,  240 => 192,  212 => 167,  192 => 150,  170 => 131,  145 => 109,  126 => 93,  104 => 74,  30 => 2,  11 => 1,);
    }
}
/* {% extends "users/layout.html" %} {% block content %}*/
/* <div class="page_layout page_margin_top clearfix">*/
/* 		<div class="row">*/
/* 			<div class="column column_2_3">*/
/* 				<h4 class="box_header">Isi Formulir Pengaduan</h4>*/
/* 				<div class="card-block">*/
/* 					<div class="row">*/
/* 						<div class="col-md-12">*/
/* 							<div class="form-group row">*/
/* 									<label class="col-sm-3 col-form-label">Nama</label>*/
/* 									<div class="col-sm-9">*/
/* 											<input type="text" class="form-control">*/
/* 									</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-md-12">*/
/* 							<div class="form-group row">*/
/* 									<label class="col-sm-3 col-form-label">Pekerjaan</label>*/
/* 									<div class="col-sm-9">*/
/* 											<input type="text" class="form-control">*/
/* 									</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-md-12">*/
/* 							<div class="form-group row">*/
/* 									<label class="col-sm-3 col-form-label">Alamat</label>*/
/* 									<div class="col-sm-9">*/
/* 											<input type="text" class="form-control">*/
/* 									</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-md-12">*/
/* 							<div class="form-group row">*/
/* 									<label class="col-sm-3 col-form-label">Email</label>*/
/* 									<div class="col-sm-9">*/
/* 											<input type="text" class="form-control">*/
/* 									</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-md-12">*/
/* 							<div class="form-group row">*/
/* 									<label class="col-sm-3 col-form-label">Nomor Telepon</label>*/
/* 									<div class="col-sm-9">*/
/* 											<input type="text" class="form-control">*/
/* 									</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-md-12">*/
/* 							<div class="form-group row">*/
/* 									<label class="col-sm-3 col-form-label">Isi Pengaduan</label>*/
/* 									<div class="col-sm-9">*/
/* 											<textarea rows="5" cols="5" class="form-control" placeholder=""></textarea>*/
/* 									</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-md-12">*/
/* 							<div class="form-group row">*/
/* 									<div class="col-sm-9">*/
/* 										<input type="submit" value="Kirim Pengaduan" class="more active">*/
/* 									</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 				</div>*/
/* 			*/
/* */
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
/* 				<h4 class="box_header">Recommended</h4>*/
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
/* {% endblock %}*/
/* */
